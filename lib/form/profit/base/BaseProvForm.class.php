<?php

/**
 * Prov form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseProvForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_prov'    => new sfWidgetFormInputHidden(),
      'prov_des'   => new sfWidgetFormInput(),
      'co_seg'     => new sfWidgetFormPropelChoice(array('model' => 'Segmento', 'add_empty' => false)),
      'co_zon'     => new sfWidgetFormPropelChoice(array('model' => 'Zona', 'add_empty' => false)),
      'inactivo'   => new sfWidgetFormInputCheckbox(),
      'productos'  => new sfWidgetFormInput(),
      'direc1'     => new sfWidgetFormTextarea(),
      'direc2'     => new sfWidgetFormInput(),
      'telefonos'  => new sfWidgetFormInput(),
      'fax'        => new sfWidgetFormInput(),
      'respons'    => new sfWidgetFormInput(),
      'fecha_reg'  => new sfWidgetFormInput(),
      'tipo'       => new sfWidgetFormPropelChoice(array('model' => 'TipoPro', 'add_empty' => false)),
      'com_ult_co' => new sfWidgetFormInput(),
      'fec_ult_co' => new sfWidgetFormInput(),
      'net_ult_co' => new sfWidgetFormInput(),
      'saldo'      => new sfWidgetFormInput(),
      'saldo_ini'  => new sfWidgetFormInput(),
      'mont_cre'   => new sfWidgetFormInput(),
      'plaz_pag'   => new sfWidgetFormInput(),
      'desc_ppago' => new sfWidgetFormInput(),
      'desc_glob'  => new sfWidgetFormInput(),
      'tipo_iva'   => new sfWidgetFormInput(),
      'iva'        => new sfWidgetFormInput(),
      'rif'        => new sfWidgetFormInput(),
      'nacional'   => new sfWidgetFormInputCheckbox(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'nit'        => new sfWidgetFormInput(),
      'email'      => new sfWidgetFormInput(),
      'co_ingr'    => new sfWidgetFormPropelChoice(array('model' => 'CtaIngr', 'add_empty' => false)),
      'comentario' => new sfWidgetFormTextarea(),
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
      'juridico'   => new sfWidgetFormInputCheckbox(),
      'tipo_adi'   => new sfWidgetFormInput(),
      'matriz'     => new sfWidgetFormInput(),
      'co_tab'     => new sfWidgetFormInput(),
      'tipo_per'   => new sfWidgetFormInput(),
      'co_pais'    => new sfWidgetFormInput(),
      'ciudad'     => new sfWidgetFormInput(),
      'zip'        => new sfWidgetFormInput(),
      'website'    => new sfWidgetFormInput(),
      'formtype'   => new sfWidgetFormInput(),
      'taxid'      => new sfWidgetFormInput(),
      'contribu_e' => new sfWidgetFormInputCheckbox(),
      'porc_esp'   => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'co_prov'    => new sfValidatorPropelChoice(array('model' => 'Prov', 'column' => 'co_prov', 'required' => false)),
      'prov_des'   => new sfValidatorString(array('max_length' => 60)),
      'co_seg'     => new sfValidatorPropelChoice(array('model' => 'Segmento', 'column' => 'co_seg')),
      'co_zon'     => new sfValidatorPropelChoice(array('model' => 'Zona', 'column' => 'co_zon')),
      'inactivo'   => new sfValidatorBoolean(),
      'productos'  => new sfValidatorString(array('max_length' => 60)),
      'direc1'     => new sfValidatorString(array('max_length' => 2147483647)),
      'direc2'     => new sfValidatorString(array('max_length' => 60)),
      'telefonos'  => new sfValidatorString(array('max_length' => 60)),
      'fax'        => new sfValidatorString(array('max_length' => 60)),
      'respons'    => new sfValidatorString(array('max_length' => 60)),
      'fecha_reg'  => new sfValidatorString(array('max_length' => 255)),
      'tipo'       => new sfValidatorPropelChoice(array('model' => 'TipoPro', 'column' => 'tip_pro')),
      'com_ult_co' => new sfValidatorInteger(),
      'fec_ult_co' => new sfValidatorString(array('max_length' => 255)),
      'net_ult_co' => new sfValidatorNumber(),
      'saldo'      => new sfValidatorNumber(),
      'saldo_ini'  => new sfValidatorNumber(),
      'mont_cre'   => new sfValidatorNumber(),
      'plaz_pag'   => new sfValidatorInteger(),
      'desc_ppago' => new sfValidatorNumber(),
      'desc_glob'  => new sfValidatorNumber(),
      'tipo_iva'   => new sfValidatorString(array('max_length' => 1)),
      'iva'        => new sfValidatorNumber(),
      'rif'        => new sfValidatorString(array('max_length' => 18)),
      'nacional'   => new sfValidatorBoolean(),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647)),
      'nit'        => new sfValidatorString(array('max_length' => 18)),
      'email'      => new sfValidatorString(array('max_length' => 60)),
      'co_ingr'    => new sfValidatorPropelChoice(array('model' => 'CtaIngr', 'column' => 'co_ingr')),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647)),
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
      'juridico'   => new sfValidatorBoolean(),
      'tipo_adi'   => new sfValidatorNumber(),
      'matriz'     => new sfValidatorString(array('max_length' => 10)),
      'co_tab'     => new sfValidatorInteger(),
      'tipo_per'   => new sfValidatorString(array('max_length' => 1)),
      'co_pais'    => new sfValidatorString(array('max_length' => 6)),
      'ciudad'     => new sfValidatorString(array('max_length' => 50)),
      'zip'        => new sfValidatorString(array('max_length' => 10)),
      'website'    => new sfValidatorString(array('max_length' => 200)),
      'formtype'   => new sfValidatorString(array('max_length' => 30)),
      'taxid'      => new sfValidatorString(array('max_length' => 20)),
      'contribu_e' => new sfValidatorBoolean(),
      'porc_esp'   => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('prov[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Prov';
  }


}
