<?php

/**
 * mantenimiento actions.
 *
 * @package    gescob
 * @subpackage mantenimiento
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class mantenimientoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $c = new Criteria();
    $c->add(OutboxPeer::PROCESSED,false);
    $this->contador=OutboxPeer::doCount($c);
  }
}
