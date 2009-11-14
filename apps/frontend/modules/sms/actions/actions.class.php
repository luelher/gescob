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

    $this->configGrid($desde, $desde);

  }

  public function configGrid($desde, $hasta)
  {
      //tipo_doc='GIRO' and saldo<>0 and fec_venc >= '2009-11-02' and fec_venc <= '2009-11-06';

    $c = new Criteria();
    $c->add(DocumCcPeer::TIPO_DOC,'GIRO');
    $c->add(DocumCcPeer::SALDO,0,Criteria::GREATER_THAN);
    $c->add(DocumCcPeer::FEC_VENC,$desde,Criteria::GREATER_EQUAL);
    $c->add(DocumCcPeer::FEC_VENC,$hasta,Criteria::LESS_EQUAL);

    //$c->setLimit(20);

    //$reg = ClientesPeer::doSelect($c);
    DocumCcPeer::doSelect($c);
    $reg = array(new DocumCC());

    $this->obj = H::getConfigGrid("grid_documcc",$reg);
    $this->desde = $desde;
    $this->hasta = $hasta;
    $this->contador = count($reg);

  }

}
