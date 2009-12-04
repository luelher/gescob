<?php

/**
 * Outbox form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class OutboxForm extends BaseOutboxForm
{
  public function configure()
  {

    unset($this->validatorSchema['processed_date']);
    unset($this->widgetSchema['processed_date']);

    unset($this->validatorSchema['insertdate']);
    unset($this->widgetSchema['insertdate']);

    unset($this->validatorSchema['phone']);
    unset($this->widgetSchema['phone']);

    unset($this->validatorSchema['processed']);
    unset($this->widgetSchema['processed']);

    unset($this->validatorSchema['error']);
    unset($this->widgetSchema['error']);

    unset($this->validatorSchema['dreport']);
    unset($this->widgetSchema['dreport']);

    unset($this->validatorSchema['not_before']);
    unset($this->widgetSchema['not_before']);

    unset($this->validatorSchema['not_after']);
    unset($this->widgetSchema['not_after']);

    $this->widgetSchema->setFormFormatterName('list');
  }
}
