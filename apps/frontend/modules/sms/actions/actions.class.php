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

    $fdesde = split('/', $desde) ;
    $fhasta = split('/', $hasta) ;

    $c = new Criteria();
    $c->add(DocumCcPeer::TIPO_DOC,'GIRO');
    $c->add(DocumCcPeer::SALDO,0,Criteria::GREATER_THAN);
    $c->add(DocumCcPeer::FEC_EMIS,DocumCcPeer::FEC_VENC." >= '$fdesde[2]-$fdesde[1]-$fdesde[0]'",Criteria::CUSTOM);
    $c->add(DocumCcPeer::FEC_VENC,DocumCcPeer::FEC_VENC." <= '$fhasta[2]-$fhasta[1]-$fhasta[0]'",Criteria::CUSTOM);
    $c->addAscendingOrderByColumn(DocumCcPeer::FEC_VENC);

    //$c->setLimit(20);

    //$reg = ClientesPeer::doSelect($c);
    $reg = DocumCcPeer::doSelect($c);
    //$reg = array(new DocumCC());

    //$this->obj = H::getConfigGrid("grid_documcc",$reg);
    $this->desde = $desde;
    $this->hasta = $hasta;

    $this->buscarmorosos = new buscarMororosForm(array('fecha_desde' => $desde, 'fecha_hasta' => $hasta));

    $this->detallemorosos = new detalleMorososForm(array(),array('per' => $reg, 'config' => 'grid_documcc'));

  }

  public function executeBuscar()
  {
    $desde = $this->getRequestParameter("fecha_desde");
    $hasta = $this->getRequestParameter("fecha_hasta");

    $this->configGrid($desde, $hasta);

  }

  public function executeEnviar()
  {
      $this->grid = $this->getRequestParameter('grid');
  }

}
