<?php

/**
 * SubAlma form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseSubAlmaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_sub'     => new sfWidgetFormInputHidden(),
      'des_sub'    => new sfWidgetFormInput(),
      'co_alma'    => new sfWidgetFormPropelChoice(array('model' => 'Almacen', 'add_empty' => false)),
      'campo1'     => new sfWidgetFormInput(),
      'campo2'     => new sfWidgetFormInput(),
      'campo3'     => new sfWidgetFormInput(),
      'campo4'     => new sfWidgetFormInput(),
      'co_us_in'   => new sfWidgetFormInput(),
      'fe_us_in'   => new sfWidgetFormInput(),
      'co_us_mo'   => new sfWidgetFormInput(),
      'fe_us_mo'   => new sfWidgetFormInput(),
      'co_us_el'   => new sfWidgetFormInput(),
      'fe_us_el'   => new sfWidgetFormInput(),
      'revisado'   => new sfWidgetFormInput(),
      'trasnfe'    => new sfWidgetFormInput(),
      'co_sucu'    => new sfWidgetFormInput(),
      'rowguid'    => new sfWidgetFormInput(),
      'noventa'    => new sfWidgetFormInputCheckbox(),
      'nocompra'   => new sfWidgetFormInputCheckbox(),
      'materiales' => new sfWidgetFormInputCheckbox(),
      'produccion' => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'co_sub'     => new sfValidatorPropelChoice(array('model' => 'SubAlma', 'column' => 'co_sub', 'required' => false)),
      'des_sub'    => new sfValidatorString(array('max_length' => 60)),
      'co_alma'    => new sfValidatorPropelChoice(array('model' => 'Almacen', 'column' => 'co_alma')),
      'campo1'     => new sfValidatorString(array('max_length' => 60)),
      'campo2'     => new sfValidatorString(array('max_length' => 60)),
      'campo3'     => new sfValidatorString(array('max_length' => 60)),
      'campo4'     => new sfValidatorString(array('max_length' => 60)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4)),
      'fe_us_in'   => new sfValidatorString(array('max_length' => 255)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4)),
      'fe_us_mo'   => new sfValidatorString(array('max_length' => 255)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4)),
      'fe_us_el'   => new sfValidatorString(array('max_length' => 255)),
      'revisado'   => new sfValidatorString(array('max_length' => 1)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6)),
      'rowguid'    => new sfValidatorString(array('max_length' => 16)),
      'noventa'    => new sfValidatorBoolean(),
      'nocompra'   => new sfValidatorBoolean(),
      'materiales' => new sfValidatorBoolean(),
      'produccion' => new sfValidatorBoolean(),
    ));

    $this->widgetSchema->setNameFormat('sub_alma[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SubAlma';
  }


}
