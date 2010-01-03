<?php

/**
 * outbox actions.
 *
 * @package    sf_sandbox
 * @subpackage outbox
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class enviadosActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

    $desde = H::AddDaysDate(date('Y-m-d'), -7);
    $desde = date('d/m/Y',strtotime($desde));
    $this->configGrid($desde, $desde);

  }

  public function configGrid($desde, $hasta)
  {
      //tipo_doc='GIRO' and saldo<>0 and fec_venc >= '2009-11-02' and fec_venc <= '2009-11-06';

    $fdesde = split('/', $desde) ;
    $fhasta = split('/', $hasta) ;

    $c = new Criteria();
    $c->add(OutboxPeer::PROCESSED,true);
    $c->add(OutboxPeer::PROCESSED_DATE,OutboxPeer::PROCESSED_DATE." >= '$fdesde[2]-$fdesde[1]-$fdesde[0]'",Criteria::CUSTOM);
    $c->add(OutboxPeer::INSERTDATE,OutboxPeer::PROCESSED_DATE." <= '$fhasta[2]-$fhasta[1]-$fhasta[0]'",Criteria::CUSTOM);
    $c->addAscendingOrderByColumn(OutboxPeer::PROCESSED_DATE);

    //$c->setLimit(20);

    //$reg = ClientesPeer::doSelect($c);
    $reg = OutboxPeer::doSelect($c);
    //$reg = array(new DocumCC());

    //$this->obj = H::getConfigGrid("grid_documcc",$reg);
    $this->desde = $desde;
    $this->hasta = $hasta;

    $this->buscarsms = new buscarMororosForm(array('fecha_desde' => $desde, 'fecha_hasta' => $hasta));

    $this->detallesms = new detalleMorososForm(array(),array('per' => $reg, 'config' => 'grid_outbox'));

    //H::PrintR($this->detallesms);

  }

  public function executeBuscar()
  {
    $desde = $this->getRequestParameter("fecha_desde");
    $hasta = $this->getRequestParameter("fecha_hasta");

    $this->configGrid($desde, $hasta);

  }

  public function executeExportar()
  {
    $grid = $this->getRequestParameter('grida');
    $enviados = 0;
    $fallidos = 0;
//H::PrintR($grid);
    $dirarch = "download/enviados.xls";
    if(file_exists($dirarch)) unlink($dirarch);

    $this->archivo = $dirarch;

    $ar=fopen($this->archivo,"a");

    fputs($ar,'<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1" />
<style id="Classeur1_16681_Styles"></style>
</head>
<body>
<div id="Classeur1_16681" align=center x:publishsource="Excel">'."<table x:str border=0 cellpadding=0 cellspacing=0 style='border-collapse: collapse'>");


    fputs($ar,"<tr>
<td>Cliente</td>
<td>Nombre</td>
<td>Numero Enviado</td>
<td>Fecha Creacion</td>
<td>Fecha Envio</td>
</tr>");

    foreach($grid as $g)
    {
      if($g[0]!=''){

      fputs($ar,"<tr>
<td>".$g[1]."</td>
<td>".$g[2]."</td>
<td>".$g[3]."</td>
<td>".$g[4]."</td>
<td>".$g[5]."</td>
</tr>");
        $enviados++;
      }else $fallidos++;
    }
    fputs($ar,'</table></div></body></html>');
    fclose($ar);

    if($enviados>0) $this->getUser()->setFlash('notice', "Se exportaron ".$enviados." notificaciones" );
    if($fallidos>0) $this->getUser()->setFlash('error', "No se pudieron exportar ".$fallidos." notificaciones" );

    if(is_file($dirarch))
    {
      $size = filesize($dirarch);
      if(function_exists('mime_content_type'))
      {
        $type = mime_content_type($dirarch);
      }else{
        $info = finfo_open(FILEINFO_MIME);
        $type = finfo_file($info, $dirarch);
        finfo_close($info);
      }
      if($type == "")
      {
        $type = "application/force-download";
      }
      header('Content-Type: '.$type);
      header('Content-Disposition: attachment; filename="enviados.xls"');
      header('Content-Transfer-Encoding: binary');
      header('Content-Length: '.$size);
      readfile($dirarch);
    }else{
      $this->forward404("El fichero no existe");
    }
    return sfView::HEADER_ONLY;
  }

}
