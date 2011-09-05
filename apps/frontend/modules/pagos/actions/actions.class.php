<?php

/**
 * pagos actions.
 *
 * @package    sf_sandbox
 * @subpackage pagos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class pagosActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

    $desde = H::AddDaysDate(date('Y-m-d'), 0);
    $desde = date('d/m/Y',strtotime($desde));
    $this->configGrid($desde, $desde);

  }

  public function configGrid($desde, $hasta)
  {

    $fdesde = explode('/', $desde);
    $fhasta = explode('/', $hasta);

    $fd = "$fdesde[2]-$fdesde[1]-$fdesde[0]";
    $fh = "$fhasta[2]-$fhasta[1]-$fhasta[0]";

    $reg = array();

    $sql = "
      select
        1 as id,
        '1' as enviar,
        i.cli_des as nomcli,
        i.co_cli as cocli,
        (SELECT CONVERT(VARCHAR(10), h.fec_venc, 103) AS [DD/MM/YYYY]) as fecvenc,
        (SELECT CONVERT(VARCHAR(10), f.fec_cob, 103) AS [DD/MM/YYYY]) as feccob,
        (select CONVERT(VARCHAR,g.neto,1)) as monto,
        COALESCE((
          select
          DATEDIFF(DAY,
          (select top 1 a.fec_cob as ultimo from (select top (2) xx.fec_cob from cobros xx inner join (reng_cob yy inner join docum_cc zz on yy.doc_num=zz.nro_doc) on xx.cob_num=yy.cob_num   where xx.co_cli=f.co_cli and (zz.tipo_doc='GIRO' OR zz.tipo_doc='ADEL') and zz.nro_orig=h.nro_orig and xx.cob_num <> f.cob_num order by	fec_cob desc) a order by a.fec_cob asc),
          (select top 1 a.fec_cob as ultimo from (select top (2) xx.fec_cob from cobros xx inner join (reng_cob yy inner join docum_cc zz on yy.doc_num=zz.nro_doc) on xx.cob_num=yy.cob_num   where xx.co_cli=f.co_cli and (zz.tipo_doc='GIRO' OR zz.tipo_doc='ADEL') and zz.nro_orig=h.nro_orig order by	fec_cob desc) a))
        ),0) as diasmora,
        h.observa
      from
        (cobros f inner join clientes i on f.co_cli=i.co_cli) inner join (reng_cob g inner join docum_cc h on g.doc_num=h.nro_doc ) on f.cob_num=g.cob_num
      where
        f.fec_cob >= '$fd' and f.fec_cob <= '$fh' and f.anulado=0 and f.monto<>0 and h.co_cli=i.co_cli
      order by
        f.fec_cob asc, i.co_cli
      ";

    H::BuscarDatos(CobrosPeer::DATABASE_NAME, $sql, $reg);

    $this->desde = $desde;
    $this->hasta = $hasta;

    $this->buscarsms = new buscarMororosForm(array('fecha_desde' => $desde, 'fecha_hasta' => $hasta));

    $this->detallesms = new detalleMorososForm(array(),array('per' => $reg, 'config' => 'grid_cobro'));

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
<td>Dias sin Pagar</td>
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
<td>".number_format($g[6],2,',','.') ."</td>
<td>".$g[7]."</td>
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
