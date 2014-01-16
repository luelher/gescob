<?php

/**
 * Vendedor form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseVendedorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_ven'     => new sfWidgetFormInputHidden(),
      'tipo'       => new sfWidgetFormInput(),
      'ven_des'    => new sfWidgetFormInput(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'cedula'     => new sfWidgetFormInput(),
      'direc1'     => new sfWidgetFormInput(),
      'direc2'     => new sfWidgetFormInput(),
      'telefonos'  => new sfWidgetFormInput(),
      'fecha_reg'  => new sfWidgetFormInput(),
      'condic'     => new sfWidgetFormInputCheckbox(),
      'comision'   => new sfWidgetFormInput(),
      'comen'      => new sfWidgetFormTextarea(),
      'fun_cob'    => new sfWidgetFormInputCheckbox(),
      'fun_ven'    => new sfWidgetFormInputCheckbox(),
      'comisionv'  => new sfWidgetFormInput(),
      'fac_ult_ve' => new sfWidgetFormInput(),
      'fec_ult_ve' => new sfWidgetFormInput(),
      'net_ult_ve' => new sfWidgetFormInput(),
      'cli_ult_ve' => new sfWidgetFormInput(),
      'cta_contab' => new sfWidgetFormInput(),
      'campo1'     => new sfWidgetFormInput(),
      'campo2'     => new sfWidgetFormInput(),
      'campo3'     => new sfWidgetFormInput(),
      'campo4'     => new sfWidgetFormInput(),
      'campo5'     => new sfWidgetFormInput(),
      'campo6'     => new sfWidgetFormInput(),
      'campo7'     => new sfWidgetFormInput(),
      'campo8'     => new sfWidgetFormInput(),
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
      'login'      => new sfWidgetFormInput(),
      'password'   => new sfWidgetFormInput(),
      'email'      => new sfWidgetFormInput(),
      'PSW_M'      => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'co_ven'     => new sfValidatorPropelChoice(array('model' => 'Vendedor', 'column' => 'co_ven', 'required' => false)),
      'tipo'       => new sfValidatorString(array('max_length' => 1)),
      'ven_des'    => new sfValidatorString(array('max_length' => 60)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647)),
      'cedula'     => new sfValidatorString(array('max_length' => 16)),
      'direc1'     => new sfValidatorString(array('max_length' => 60)),
      'direc2'     => new sfValidatorString(array('max_length' => 60)),
      'telefonos'  => new sfValidatorString(array('max_length' => 60)),
      'fecha_reg'  => new sfValidatorString(array('max_length' => 255)),
      'condic'     => new sfValidatorBoolean(),
      'comision'   => new sfValidatorNumber(),
      'comen'      => new sfValidatorString(array('max_length' => 2147483647)),
      'fun_cob'    => new sfValidatorBoolean(),
      'fun_ven'    => new sfValidatorBoolean(),
      'comisionv'  => new sfValidatorNumber(),
      'fac_ult_ve' => new sfValidatorInteger(),
      'fec_ult_ve' => new sfValidatorString(array('max_length' => 255)),
      'net_ult_ve' => new sfValidatorNumber(),
      'cli_ult_ve' => new sfValidatorString(array('max_length' => 6)),
      'cta_contab' => new sfValidatorString(array('max_length' => 20)),
      'campo1'     => new sfValidatorString(array('max_length' => 60)),
      'campo2'     => new sfValidatorString(array('max_length' => 60)),
      'campo3'     => new sfValidatorString(array('max_length' => 60)),
      'campo4'     => new sfValidatorString(array('max_length' => 60)),
      'campo5'     => new sfValidatorString(array('max_length' => 60)),
      'campo6'     => new sfValidatorString(array('max_length' => 60)),
      'campo7'     => new sfValidatorString(array('max_length' => 60)),
      'campo8'     => new sfValidatorString(array('max_length' => 60)),
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
      'login'      => new sfValidatorString(array('max_length' => 10)),
      'password'   => new sfValidatorString(array('max_length' => 50)),
      'email'      => new sfValidatorString(array('max_length' => 40)),
      'PSW_M'      => new sfValidatorString(array('max_length' => 20)),
    ));

    $this->widgetSchema->setNameFormat('vendedor[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendedor';
  }


}
