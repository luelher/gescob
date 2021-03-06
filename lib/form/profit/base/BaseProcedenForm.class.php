<?php

/**
 * Proceden form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseProcedenForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_proc' => new sfWidgetFormInputHidden(),
      'des_proc' => new sfWidgetFormInput(),
      'campo1'   => new sfWidgetFormInput(),
      'campo2'   => new sfWidgetFormInput(),
      'campo3'   => new sfWidgetFormInput(),
      'campo4'   => new sfWidgetFormInput(),
      'co_us_in' => new sfWidgetFormInput(),
      'fe_us_in' => new sfWidgetFormInput(),
      'co_us_mo' => new sfWidgetFormInput(),
      'fe_us_mo' => new sfWidgetFormInput(),
      'co_us_el' => new sfWidgetFormInput(),
      'fe_us_el' => new sfWidgetFormInput(),
      'revisado' => new sfWidgetFormInput(),
      'trasnfe'  => new sfWidgetFormInput(),
      'co_sucu'  => new sfWidgetFormInput(),
      'rowguid'  => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'cod_proc' => new sfValidatorPropelChoice(array('model' => 'Proceden', 'column' => 'cod_proc', 'required' => false)),
      'des_proc' => new sfValidatorString(array('max_length' => 60)),
      'campo1'   => new sfValidatorString(array('max_length' => 60)),
      'campo2'   => new sfValidatorString(array('max_length' => 60)),
      'campo3'   => new sfValidatorString(array('max_length' => 60)),
      'campo4'   => new sfValidatorString(array('max_length' => 60)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4)),
      'fe_us_in' => new sfValidatorString(array('max_length' => 255)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4)),
      'fe_us_mo' => new sfValidatorString(array('max_length' => 255)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4)),
      'fe_us_el' => new sfValidatorString(array('max_length' => 255)),
      'revisado' => new sfValidatorString(array('max_length' => 1)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6)),
      'rowguid'  => new sfValidatorString(array('max_length' => 16)),
    ));

    $this->widgetSchema->setNameFormat('proceden[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Proceden';
  }


}
