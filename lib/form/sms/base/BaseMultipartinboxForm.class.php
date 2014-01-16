<?php

/**
 * Multipartinbox form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseMultipartinboxForm extends BaseFormPropel
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
      'refnum'     => new sfWidgetFormInput(),
      'maxnum'     => new sfWidgetFormInput(),
      'curnum'     => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Multipartinbox', 'column' => 'id', 'required' => false)),
      'number'     => new sfValidatorString(array('max_length' => 20)),
      'smsdate'    => new sfValidatorDateTime(),
      'insertdate' => new sfValidatorDateTime(),
      'text'       => new sfValidatorString(array('required' => false)),
      'phone'      => new sfValidatorInteger(array('required' => false)),
      'processed'  => new sfValidatorInteger(),
      'refnum'     => new sfValidatorInteger(array('required' => false)),
      'maxnum'     => new sfValidatorInteger(array('required' => false)),
      'curnum'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('multipartinbox[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Multipartinbox';
  }


}
