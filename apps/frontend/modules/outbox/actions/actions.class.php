<?php

require_once dirname(__FILE__).'/../lib/outboxGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/outboxGeneratorHelper.class.php';

/**
 * outbox actions.
 *
 * @package    sf_sandbox
 * @subpackage outbox
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class outboxActions extends autoOutboxActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->redirect('outbox/new');
  }
}
