<?php

/**
 * cobranza actions.
 *
 * @package    gescob
 * @subpackage cobranza
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class cobranzaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
  }

  public function executeSms(sfWebRequest $request)
  {

    $desde = H::AddDaysDate(date('Y-m-d'), 0);
    $desde = date('d/m/Y',strtotime($desde));
    //$this->configGridSms($desde, $desde);

  }

  public function executeCartas(sfWebRequest $request)
  {

    $desde = H::AddDaysDate(date('Y-m-d'), 0);
    $desde = date('d/m/Y',strtotime($desde));
    $this->configGridCartas($desde, $desde);

  }

  public function configGridCartas($desde, $hasta)
  {
      //tipo_doc='GIRO' and saldo<>0 and fec_venc >= '2009-11-02' and fec_venc <= '2009-11-06';

    $fdesde = split('/', $desde) ;
    $fhasta = split('/', $hasta) ;

    $c = new Criteria();
    $c->add(CartasPeer::ENTREGADO ,CartasPeer::ENTREGADO." >= '$fdesde[2]-$fdesde[1]-$fdesde[0]'",Criteria::CUSTOM);
    $c->add(CartasPeer::CO_CLI,CartasPeer::ENTREGADO." <= '$fhasta[2]-$fhasta[1]-$fhasta[0]'",Criteria::CUSTOM);
    $c->addAscendingOrderByColumn(CartasPeer::ENTREGADO);

    //$c->setLimit(20);

    //$reg = ClientesPeer::doSelect($c);
    $reg = CartasPeer::doSelect($c);

    //$this->obj = H::getConfigGrid("grid_documcc",$reg);
    $this->desde = $desde;
    $this->hasta = $hasta;


    $this->buscarcobros = new buscarMororosForm(array('fecha_desde' => $desde, 'fecha_hasta' => $hasta));

    $this->detallecobros = new detalleMorososForm(array(),array('per' => $reg, 'config' => 'grid_cartas'));

    //H::PrintR($this->detallesms);

  }

  public function executeBuscarCartas()
  {
    $desde = $this->getRequestParameter("fecha_desde");
    $hasta = $this->getRequestParameter("fecha_hasta");

    $this->configGridCartas($desde, $hasta);

  }

  public function executeBuscarSms()
  {
    $desde = $this->getRequestParameter("fecha_desde");
    $hasta = $this->getRequestParameter("fecha_hasta");

    //$this->configGridSms($desde, $hasta);

  }

  public function executeExportar()
  {
    $grid = $this->getRequestParameter('grida');
    $enviados = 0;
    $fallidos = 0;
//H::PrintR($grid);
    $dirarch = "download/pagos.xls";
    if(file_exists($dirarch)) unlink($dirarch);

    $this->archivo = $dirarch;

    $ar=fopen($this->archivo,"a");

    fputs($ar,'<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=iso-8859-1" />
</head>
<body>'."<table>");


    fputs($ar,"<tr>
<td>Cliente</td>
<td>Nombre</td>
<td>Fecha Vencimiento</td>
<td>Fecha Pago</td>
<td>Monto Pagado</td>
<td>Observacion</td>
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
<td>".$g[6]."</td>
</tr>");
        $enviados++;
      }else $fallidos++;
    }
    fputs($ar,'</table></body></html>');
    fclose($ar);

    if($enviados>0) $this->getUser()->setFlash('notice', "Se exportaron ".$enviados." clientes vencidos" );
    if($fallidos>0) $this->getUser()->setFlash('error', "No se pudieron exportar ".$fallidos." clientes vencidos" );

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
      header('Content-Disposition: attachment; filename="pagos.xls"');
      header('Content-Transfer-Encoding: binary');
      header('Content-Length: '.$size);
      readfile($dirarch);
    }else{
      $this->forward404("El fichero no existe");
    }
    return sfView::HEADER_ONLY;
  }
}