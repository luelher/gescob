<?php

/**
 * Condicio form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseCondicioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_cond'   => new sfWidgetFormInputHidden(),
      'cond_des'  => new sfWidgetFormInput(),
      'dias_cred' => new sfWidgetFormInput(),
      'dis_cen'   => new sfWidgetFormTextarea(),
      'campo1'    => new sfWidgetFormInput(),
      'campo2'    => new sfWidgetFormInput(),
      'campo3'    => new sfWidgetFormInput(),
      'campo4'    => new sfWidgetFormInput(),
      'co_us_in'  => new sfWidgetFormInput(),
      'fe_us_in'  => new sfWidgetFormInput(),
      'co_us_mo'  => new sfWidgetFormInput(),
      'fe_us_mo'  => new sfWidgetFormInput(),
      'co_us_el'  => new sfWidgetFormInput(),
      'fe_us_el'  => new sfWidgetFormInput(),
      'revisado'  => new sfWidgetFormInput(),
      'trasnfe'   => new sfWidgetFormInput(),
      'co_sucu'   => new sfWidgetFormInput(),
      'rowguid'   => new sfWidgetFormInput(),
      'row_id'    => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'co_cond'   => new sfValidatorPropelChoice(array('model' => 'Condicio', 'column' => 'co_cond', 'required' => false)),
      'cond_des'  => new sfValidatorString(array('max_length' => 60)),
      'dias_cred' => new sfValidatorInteger(),
      'dis_cen'   => new sfValidatorString(array('max_length' => 2147483647)),
      'campo1'    => new sfValidatorString(array('max_length' => 60)),
      'campo2'    => new sfValidatorString(array('max_length' => 60)),
      'campo3'    => new sfValidatorString(array('max_length' => 60)),
      'campo4'    => new sfValidatorString(array('max_length' => 60)),
      'co_us_in'  => new sfValidatorString(array('max_length' => 4)),
      'fe_us_in'  => new sfValidatorString(array('max_length' => 255)),
      'co_us_mo'  => new sfValidatorString(array('max_length' => 4)),
      'fe_us_mo'  => new sfValidatorString(array('max_length' => 255)),
      'co_us_el'  => new sfValidatorString(array('max_length' => 4)),
      'fe_us_el'  => new sfValidatorString(array('max_length' => 255)),
      'revisado'  => new sfValidatorString(array('max_length' => 1)),
      'trasnfe'   => new sfValidatorString(array('max_length' => 1)),
      'co_sucu'   => new sfValidatorString(array('max_length' => 6)),
      'rowguid'   => new sfValidatorString(array('max_length' => 16)),
      'row_id'    => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('condicio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Condicio';
  }


}
