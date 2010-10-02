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
    $c->add(CartasPeer::CO_CLI,CartasPeer::ENTREGADO." <= '$fhasta[2]-$fhasta[1]-$fhasta[0]'",Criteria::CUSTOM);
    $c->add(CartasPeer::CO_ZON,$zona);
    $c->addAscendingOrderByColumn(CartasPeer::ENTREGADO);

    //$c->setLimit(20);

    //$reg = ClientesPeer::doSelect($c);
    $reg = CartasPeer::doSelect($c);

    //$this->obj = H::getConfigGrid("grid_documcc",$reg);
    $this->desde = $desde;
 
   $this->hasta = $hasta;


    $this->buscarcobros = new buscarCartasForm(array('fecha_desde' => $desde, 'fecha_hasta' => $hasta));

    $this->detallecobros = new detalleMorososForm(array(),array('per' => $reg, 'config' => 'grid_cartas'));

    //H::PrintR($this->detallesms);

  }

  public function configGridFrecuencia($desde, $hasta)
  {
    if($desde==0 && $hasta==0) $top = 'top 0';
    else $top='';

    $sql = "
        select $top '1' as id, '0' as enviar, '' as xxx, g.*
        from
          (
            select
              f.co_cli as cocli,
              f.cli_des as clides,
              (
                select
                DATEDIFF(DAY,
                (select top 1 a.fec_cob as ultimo from (select top (2) fec_cob from cobros where co_cli=f.co_cli order by	fec_cob desc) a order by a.fec_cob asc),
                (select top 1 a.fec_cob as ultimo from (select top (2) fec_cob from cobros where co_cli=f.co_cli order by	fec_cob desc) a))
              ) as dias
            from
              clientes f
          ) g
        where g.dias >= $desde and g.dias <= $hasta
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

    //$c = new Criteria();
    //$c->add(CartasPeer::ENTREGADO ,CartasPeer::ENTREGADO." >= '$fdesde[2]-$fdesde[1]-$fdesde[0]'",Criteria::CUSTOM);
    //$c->add(CartasPeer::CO_CLI,CartasPeer::ENTREGADO." <= '$fhasta[2]-$fhasta[1]-$fhasta[0]'",Criteria::CUSTOM);
    //$c->add(CartasPeer::CO_ZON,$zona);
    //$c->addAscendingOrderByColumn(CartasPeer::ENTREGADO);

    //$c->setLimit(20);

    //$reg = ClientesPeer::doSelect($c);
    //$reg = CobrosPeer::doSelect($c);

    //$this->obj = H::getConfigGrid("grid_documcc",$reg);
    //$this->desde = $desde;

    //$this->hasta = $hasta;

    //H::PrintR($result);
    
    $this->buscarpagos = new buscarFrecuenciaPagoForm(array('dias_desde' => $desde, 'dias_hasta' => $hasta));

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

    $this->configGridFrecuencia($desde, $hasta);

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
<td>Fecha Pago</td>
<td>Cancelado</td>
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
<td>Dias Sin Cancelar</td>
</tr>");

    foreach($grid as $g)
    {
      if($g[0]!=''){

      fputs($ar,"<tr>
<td>".$g[1]."</td>
<td>".$g[2]."</td>
<td>".$g[3]."</td>
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
