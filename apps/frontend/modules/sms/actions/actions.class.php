<?php

/**
 * sms actions.
 *
 * @package    sf_sandbox
 * @subpackage sms
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class smsActions extends sfActions
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

    $fdesde = explode('/', $desde) ;
    $fhasta = explode('/', $hasta) ;

    $c = new Criteria();
    $c->add(DocumCcPeer::TIPO_DOC,'GIRO');
    $c->add(DocumCcPeer::SALDO,0,Criteria::GREATER_THAN);
    $c->add(DocumCcPeer::FEC_EMIS,DocumCcPeer::FEC_VENC." >= '$fdesde[2]-$fdesde[1]-$fdesde[0]'",Criteria::CUSTOM);
    $c->add(DocumCcPeer::FEC_VENC,DocumCcPeer::FEC_VENC." <= '$fhasta[2]-$fhasta[1]-$fhasta[0]'",Criteria::CUSTOM);
    $c->addAscendingOrderByColumn(DocumCcPeer::FEC_VENC);

    //$c->setLimit(20);

    //$reg = ClientesPeer::doSelect($c);
    $reg = DocumCcPeer::doSelectJoinClientes($c);
    $regaux = array();
    foreach ($reg as $i => $cli){
      $c = new Criteria();
      $c->add(OutboxPeer::FEC_VENC,"$fdesde[2]-$fdesde[1]-$fdesde[0]");
      $c->add(OutboxPeer::CO_CLI,$cli->getCoCli());
      $outbox = OutboxPeer::doSelectOne($c);
      if(!$outbox) $regaux[] = $cli;
    }
    //$reg = array(new DocumCC());

    //$this->obj = H::getConfigGrid("grid_documcc",$reg);
    $this->desde = $desde;
    $this->hasta = $hasta;

    $this->buscarmorosos = new buscarMororosForm(array('fecha_desde' => $desde, 'fecha_hasta' => $hasta));

    $this->detallemorosos = new detalleMorososForm(array(),array('per' => $regaux, 'config' => 'grid_documcc'));

  }

  public function executeBuscar()
  {
    $desde = $this->getRequestParameter("fecha_desde");
    $hasta = $this->getRequestParameter("fecha_hasta");

    $this->configGrid($desde, $hasta);

  }

  public function executeEnviar()
  {
    $grid = $this->getRequestParameter('grida');
    $mensaje = $this->getRequestParameter('mensaje');
    $enviados = 0;
    $fallidos = 0;
    $enviar=true;

    $opciones = OpcionesPeer::doSelectOne(new Criteria());
    if($mensaje=='') $mensaje = $opciones->getMensaje();

    foreach($grid as $g)
    {
      if(isset($g[0])){
        if($g[6]!='' || $g[7]!=''){
          $sms = new Outbox();
          $enviar = true;
          if($g[6]!='') {
            if(strlen($g[6])>10) $sms->setNumber($g[6]);
            else $enviar=false;
          }elseif($g[7]!='') {
            if(strlen($g[7])>10) $sms->setNumber($g[7]);
            else $enviar=false;
          }else $enviar=false;
          if($enviar){
            $telf1 = "2329968";
            $telf2 = "2326872";
            $vencimiento = substr($g[3], 0,11);
            $cuota = number_format($g[4],2);
            $telfs = $telf1.'/'.$telf2;

            $msj = $mensaje;

            $msj = str_replace('[FECHAVENCIMIENTO]', $vencimiento, $msj);
            $msj = str_replace('[TELFS]', $telfs, $msj);
            $msj = str_replace('[CUOTA]', $cuota, $msj);

            $sms->setText($msj);
            $sms->setCoCli($g[1]);
            $sms->setFecVenc( date('Y-m-d',strtotime(substr($g[3], 0,11))));
            $sms->setInsertdate(date('Y-m-d H:m:s'));
            $sms->save();
            $enviados++;

          }else $fallidos++;
        }else $fallidos++;
      }

    }

    if($enviados>0) $this->getUser()->setFlash('notice', "Se enviaron ".$enviados." notificaciones" );
    if($fallidos>0) $this->getUser()->setFlash('error', "No se pudieron enviar ".$fallidos." notificaciones" );

    $opciones->setMensaje($mensaje);
    $opciones->save();


  }

}
