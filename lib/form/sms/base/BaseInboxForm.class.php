<?php

/**
 * Inbox form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseInboxForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'number'     => new sfWidgetFormInput(),
      'smsdate'    => new sfWidgetFormDateTime(),
      'insertdate' => new sfWidgetFormDateTime(),
      'text'       => new sfWidgetFormTextarea(),
      'phone'      => new sfWidgetFormInput(),
      'processed'  => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Inbox', 'column' => 'id', 'required' => false)),
      'number'     => new sfValidatorString(array('max_length' => 20)),
      'smsdate'    => new sfValidatorDateTime(),
      'insertdate' => new sfValidatorDateTime(),
      'text'       => new sfValidatorString(array('required' => false)),
      'phone'      => new sfValidatorInteger(array('required' => false)),
      'processed'  => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('inbox[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Inbox';
  }


}
