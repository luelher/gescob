<?php

/**
 * LinArt form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseLinArtForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_lin'    => new sfWidgetFormInputHidden(),
      'lin_des'   => new sfWidgetFormInput(),
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
      'co_imun'   => new sfWidgetFormInput(),
      'co_reten'  => new sfWidgetFormInput(),
      'comi_lin'  => new sfWidgetFormInput(),
      'comi_lin2' => new sfWidgetFormInput(),
      'row_id'    => new sfWidgetFormInput(),
      'va'        => new sfWidgetFormInputCheckbox(),
      'i_lin_des' => new sfWidgetFormInput(),
      'movil'     => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'co_lin'    => new sfValidatorPropelChoice(array('model' => 'LinArt', 'column' => 'co_lin', 'required' => false)),
      'lin_des'   => new sfValidatorString(array('max_length' => 60)),
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
      'co_imun'   => new sfValidatorString(array('max_length' => 15)),
      'co_reten'  => new sfValidatorString(array('max_length' => 6)),
      'comi_lin'  => new sfValidatorNumber(),
      'comi_lin2' => new sfValidatorNumber(),
      'row_id'    => new sfValidatorPass(),
      'va'        => new sfValidatorBoolean(),
      'i_lin_des' => new sfValidatorString(array('max_length' => 60)),
      'movil'     => new sfValidatorBoolean(),
    ));

    $this->widgetSchema->setNameFormat('lin_art[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LinArt';
  }


}
