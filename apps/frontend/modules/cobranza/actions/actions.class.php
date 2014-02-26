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
    $desde = $request->getParameter('fecha_desde', date('d/m/Y'));

    $hasta = $request->getParameter('fecha_hasta', date('d/m/Y'));

    $this->configGridSms($desde, $hasta);

  }

  public function executeCartas(sfWebRequest $request)
  {

    $desde = $request->getParameter('fecha_desde', date('d/m/Y'));

    $hasta = $request->getParameter('fecha_hasta', date('d/m/Y'));

    $zona = $request->getParameter('zona', '');

    $this->configGridCartas($desde, $hasta, $zona);

  }

  public function configGridSms($desde, $hasta)
  {
      //tipo_doc='GIRO' and saldo<>0 and fec_venc >= '2009-11-02' and fec_venc <= '2009-11-06';

    $fdesde = explode('/', $desde) ;
    $fhasta = explode('/', $hasta) ;

    $c = new Criteria();
    $c->add(OutboxPeer::CO_CLI,'',Criteria::NOT_EQUAL);
    $c->add(OutboxPeer::PROCESSED ,true);
    $c->add(OutboxPeer::PROCESSED_DATE ,OutboxPeer::PROCESSED_DATE." >= '$fdesde[2]-$fdesde[1]-$fdesde[0]'",Criteria::CUSTOM);
    $c->add(OutboxPeer::NOT_BEFORE,OutboxPeer::PROCESSED_DATE." <= '$fhasta[2]-$fhasta[1]-$fhasta[0]'",Criteria::CUSTOM);
    $c->addAscendingOrderByColumn(OutboxPeer::PROCESSED_DATE );

    //$c->setLimit(20);

    $reg = OutboxPeer::doSelect($c);

    $this->desde = $desde;

    $this->hasta = $hasta;


    $this->buscarsms = new buscarMororosForm(array('fecha_desde' => $desde, 'fecha_hasta' => $hasta));

    $this->detallecobros = new detalleMorososForm(array(),array('per' => $reg, 'config' => 'grid_sms'));

    //H::PrintR($this->detallesms);

  }

  public function configGridCartas($desde, $hasta, $zona)
  {
      //tipo_doc='GIRO' and saldo<>0 and fec_venc >= '2009-11-02' and fec_venc <= '2009-11-06';

    $fdesde = explode('/', $desde) ;
    $fhasta = explode('/', $hasta) ;

    $c = new Criteria();
    $c->add(CartasPeer::ENTREGADO ,CartasPeer::ENTREGADO." >= '$fdesde[2]-$fdesde[1]-$fdesde[0]'",Criteria::CUSTOM);
    $c->add(CartasPeer::CO_CLI,CartasPeer::ENTREGADO." <= '$fhasta[2]-$fhasta[1]-$fhasta[0]' AND cartas.co_cli = '2504240'",Criteria::CUSTOM);
    $c->add(CartasPeer::CO_ZON,$zona);
    $c->setDistinct();
    $c->addAscendingOrderByColumn(CartasPeer::CO_CLI);

    //$c->setLimit(20);

    //$reg = ClientesPeer::doSelect($c);
    $reg = CartasPeer::doSelect($c);
    foreach ($reg as $r) {
      $r->setPagoDesde($desde);
      $r->setPagoHasta($hasta);
    }

    //$this->obj = H::getConfigGrid("grid_documcc",$reg);
    $this->desde = $desde;
 
    $this->hasta = $hasta;


    $this->buscarcobros = new buscarCartasForm(array('fecha_desde' => $desde, 'fecha_hasta' => $hasta));

    $this->detallecobros = new detalleMorososForm(array(),array('per' => $reg, 'config' => 'grid_cartas'));

    //H::PrintR($this->detallesms);

  }

  public function configGridFrecuencia($desde, $hasta, $fhasta, $cedula)
  {
    if(!$fhasta) $fhasta = date('d/m/Y');
    $fechah = explode('/', $fhasta);
    $fecha = "$fechah[2]-$fechah[1]-$fechah[0]";

    if($desde==0 && $hasta==0) $top = 'top 0';
    else $top='';

    if($cedula!="") $where = "g.cocli='$cedula'";
    else $where = "g.dias >= $desde and g.dias <= $hasta";

    $sql = "
        select $top '1' as id, '0' as enviar, '' as xxx, g.*
        from
          (
            select
              i.co_cli as cocli,
              i.cli_des as clides,
              (
                select
                DATEDIFF(DAY,
                (select top 1 a.fec_cob as ultimo from (select top (2) fec_cob from cobros where co_cli=i.co_cli and fec_cob <= '$fecha' order by	fec_cob desc) a order by a.fec_cob asc),
                (select top 1 a.fec_cob as ultimo from (select top (2) fec_cob from cobros where co_cli=i.co_cli and fec_cob <= '$fecha' order by	fec_cob desc) a))
              ) as dias,
              (select top 1 fec_cob from cobros where co_cli=i.co_cli and monto<>0 and anulado=0 order by fec_cob desc) as feccob
            from
              clientes i
          ) g
        where $where
        order by
            g.dias desc
      ";

    $conn = Propel::getConnection();

    $statement = $conn->prepare($sql);
    $statement->execute();

    $result = array();

    while ($info = $statement->fetch(PDO::FETCH_ASSOC))
    {
      $result[] = $info;
    }


    $this->buscarpagos = new buscarFrecuenciaPagoForm(array('dias_desde' => $desde, 'dias_hasta' => $hasta, 'fecha_hasta' => $fecha));

    $this->detallepagos = new detalleFrecuenciaPagosForm(array(),array('per' => $result, 'config' => 'grid_cobro'));

    //H::PrintR($this->detallesms);

  }

  public function executeBuscarCartas()
  {
    $desde = $this->getRequestParameter("fecha_desde");
    $hasta = $this->getRequestParameter("fecha_hasta");
    $zona = $this->getRequestParameter("zona");

    $this->configGridCartas($desde, $hasta, $zona);

  }

  public function executeBuscarSms()
  {
    $desde = $this->getRequestParameter("fecha_desde");
    $hasta = $this->getRequestParameter("fecha_hasta");

    //$this->configGridSms($desde, $hasta);

  }

  public function executeFrecuencia(sfWebRequest $request)
  {
    $desde = $request->getParameter('dias_desde', 0);

    $hasta = $request->getParameter('dias_hasta', 0);

    $fecha = $request->getParameter('fecha_hasta');

    $cedula = $request->getParameter('cedula', '');

    $this->configGridFrecuencia($desde, $hasta, $fecha, $cedula);

  }

  public function executeDetallepagos(sfWebRequest $request)
  {
    $ci = $request->getParameter('ci', 0);

    $c = new Criteria();
    $c->add(CobrosPeer::CO_CLI,$ci);
    $c->addDescendingOrderByColumn(CobrosPeer::FEC_COB);

    $per = CobrosPeer::doSelect($c);

    $this->detallepagos = new detalleFrecuenciaPagosForm(array(),array('per' => $per, 'config' => 'grid_detcob'));

  }


  public function executeExportar()
  {
    $grid = $this->getRequestParameter('grida');
    $enviados = 0;
    $fallidos = 0;
//H::PrintR($grid);
    $dirarch = "download/cobranzas.xls";
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
<td>Vendedor</td>
<td>Cedula Cliente</td>
<td>Nombre Cliente</td>
<td>Fecha Entrega</td>
<td>Fecha Ult. Pago</td>
<td>Cancelado</td>
<td>Cantidad Pagos</td>
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
      header('Content-Disposition: attachment; filename="cobranzas.xls"');
      header('Content-Transfer-Encoding: binary');
      header('Content-Length: '.$size);
      readfile($dirarch);
    }else{
      $this->forward404("El fichero no existe");
    }
    return sfView::HEADER_ONLY;
  }

  public function executeExportarFrecuencia()
  {
    $grid = $this->getRequestParameter('grida');
    $enviados = 0;
    $fallidos = 0;
//H::PrintR($grid);
    $dirarch = "download/cobranzas.xls";
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
<td>Cedula Cliente</td>
<td>Nombre Cliente</td>
<td>Fecha Pago</td>
<td>Dias Sin Cancelar</td>
</tr>");

    foreach($grid as $g)
    {
      if($g[0]!=''){

      fputs($ar,"<tr>
<td>".$g[1]."</td>
<td>".$g[2]."</td>
<td>".$g[3]."</td>
<td>".$g[4]."</td>
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
      header('Content-Disposition: attachment; filename="cobranzas.xls"');
      header('Content-Transfer-Encoding: binary');
      header('Content-Length: '.$size);
      readfile($dirarch);
    }else{
      $this->forward404("El fichero no existe");
    }
    return sfView::HEADER_ONLY;
  }

}
