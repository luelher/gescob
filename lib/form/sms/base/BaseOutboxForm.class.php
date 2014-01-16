<?php

/**
 * Outbox form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseOutboxForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'number'         => new sfWidgetFormInput(),
      'processed_date' => new sfWidgetFormDateTime(),
      'insertdate'     => new sfWidgetFormDateTime(),
      'text'           => new sfWidgetFormInput(),
      'phone'          => new sfWidgetFormInput(),
      'processed'      => new sfWidgetFormInput(),
      'error'          => new sfWidgetFormInput(),
      'dreport'        => new sfWidgetFormInput(),
      'not_before'     => new sfWidgetFormTime(),
      'not_after'      => new sfWidgetFormTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorPropelChoice(array('model' => 'Outbox', 'column' => 'id', 'required' => false)),
      'number'         => new sfValidatorString(array('max_length' => 20)),
      'processed_date' => new sfValidatorDateTime(),
      'insertdate'     => new sfValidatorDateTime(),
      'text'           => new sfValidatorString(array('max_length' => 160, 'required' => false)),
      'phone'          => new sfValidatorInteger(array('required' => false)),
      'processed'      => new sfValidatorInteger(),
      'error'          => new sfValidatorInteger(),
      'dreport'        => new sfValidatorInteger(),
      'not_before'     => new sfValidatorTime(),
      'not_after'      => new sfValidatorTime(),
    ));

    $this->widgetSchema->setNameFormat('outbox[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Outbox';
  }


}
