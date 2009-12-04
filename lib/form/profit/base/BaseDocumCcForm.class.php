<?php

/**
 * DocumCc form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseDocumCcForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_doc'    => new sfWidgetFormInputHidden(),
      'nro_doc'     => new sfWidgetFormInputHidden(),
      'anulado'     => new sfWidgetFormInputCheckbox(),
      'movi'        => new sfWidgetFormInput(),
      'aut'         => new sfWidgetFormInputCheckbox(),
      'num_control' => new sfWidgetFormInput(),
      'co_cli'      => new sfWidgetFormPropelChoice(array('model' => 'Clientes', 'add_empty' => false)),
      'contrib'     => new sfWidgetFormInputCheckbox(),
      'fec_emis'    => new sfWidgetFormInput(),
      'fec_venc'    => new sfWidgetFormInput(),
      'observa'     => new sfWidgetFormInput(),
      'doc_orig'    => new sfWidgetFormInput(),
      'nro_orig'    => new sfWidgetFormInput(),
      'co_ban'      => new sfWidgetFormInput(),
      'nro_che'     => new sfWidgetFormInput(),
      'co_ven'      => new sfWidgetFormPropelChoice(array('model' => 'Vendedor', 'add_empty' => false)),
      'tipo'        => new sfWidgetFormPropelChoice(array('model' => 'Tabulado', 'add_empty' => false)),
      'tasa'        => new sfWidgetFormInput(),
      'moneda'      => new sfWidgetFormPropelChoice(array('model' => 'Moneda', 'add_empty' => false)),
      'monto_imp'   => new sfWidgetFormInput(),
      'monto_gen'   => new sfWidgetFormInput(),
      'monto_a1'    => new sfWidgetFormInput(),
      'monto_a2'    => new sfWidgetFormInput(),
      'monto_bru'   => new sfWidgetFormInput(),
      'descuentos'  => new sfWidgetFormInput(),
      'monto_des'   => new sfWidgetFormInput(),
      'recargo'     => new sfWidgetFormInput(),
      'monto_rec'   => new sfWidgetFormInput(),
      'monto_otr'   => new sfWidgetFormInput(),
      'monto_net'   => new sfWidgetFormInput(),
      'saldo'       => new sfWidgetFormInput(),
      'feccom'      => new sfWidgetFormInput(),
      'numcom'      => new sfWidgetFormInput(),
      'dis_cen'     => new sfWidgetFormTextarea(),
      'comis1'      => new sfWidgetFormInput(),
      'comis2'      => new sfWidgetFormInput(),
      'comis3'      => new sfWidgetFormInput(),
      'comis4'      => new sfWidgetFormInput(),
      'adicional'   => new sfWidgetFormInput(),
      'campo1'      => new sfWidgetFormInput(),
      'campo2'      => new sfWidgetFormInput(),
      'campo3'      => new sfWidgetFormInput(),
      'campo4'      => new sfWidgetFormInput(),
      'campo5'      => new sfWidgetFormInput(),
      'campo6'      => new sfWidgetFormInput(),
      'campo7'      => new sfWidgetFormInput(),
      'campo8'      => new sfWidgetFormInput(),
      'co_us_in'    => new sfWidgetFormInput(),
      'fe_us_in'    => new sfWidgetFormInput(),
      'co_us_mo'    => new sfWidgetFormInput(),
      'fe_us_mo'    => new sfWidgetFormInput(),
      'co_us_el'    => new sfWidgetFormInput(),
      'fe_us_el'    => new sfWidgetFormInput(),
      'revisado'    => new sfWidgetFormInput(),
      'trasnfe'     => new sfWidgetFormInput(),
      'numcon'      => new sfWidgetFormInput(),
      'co_sucu'     => new sfWidgetFormPropelChoice(array('model' => 'Almacen', 'add_empty' => false)),
      'rowguid'     => new sfWidgetFormInput(),
      'mon_ilc'     => new sfWidgetFormInput(),
      'otros1'      => new sfWidgetFormInput(),
      'otros2'      => new sfWidgetFormInput(),
      'otros3'      => new sfWidgetFormInput(),
      'reng_si'     => new sfWidgetFormInputCheckbox(),
      'comis5'      => new sfWidgetFormInput(),
      'comis6'      => new sfWidgetFormInput(),
      'row_id'      => new sfWidgetFormInput(),
      'aux01'       => new sfWidgetFormInput(),
      'aux02'       => new sfWidgetFormInput(),
      'salestax'    => new sfWidgetFormInput(),
      'origen'      => new sfWidgetFormInput(),
      'origen_d'    => new sfWidgetFormInput(),
      'fec_reg'     => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'tipo_doc'    => new sfValidatorPropelChoice(array('model' => 'DocumCc', 'column' => 'tipo_doc', 'required' => false)),
      'nro_doc'     => new sfValidatorPropelChoice(array('model' => 'DocumCc', 'column' => 'nro_doc', 'required' => false)),
      'anulado'     => new sfValidatorBoolean(),
      'movi'        => new sfValidatorInteger(),
      'aut'         => new sfValidatorBoolean(),
      'num_control' => new sfValidatorInteger(),
      'co_cli'      => new sfValidatorPropelChoice(array('model' => 'Clientes', 'column' => 'co_cli')),
      'contrib'     => new sfValidatorBoolean(),
      'fec_emis'    => new sfValidatorString(array('max_length' => 255)),
      'fec_venc'    => new sfValidatorString(array('max_length' => 255)),
      'observa'     => new sfValidatorString(array('max_length' => 120)),
      'doc_orig'    => new sfValidatorString(array('max_length' => 4)),
      'nro_orig'    => new sfValidatorInteger(),
      'co_ban'      => new sfValidatorString(array('max_length' => 6)),
      'nro_che'     => new sfValidatorString(array('max_length' => 15)),
      'co_ven'      => new sfValidatorPropelChoice(array('model' => 'Vendedor', 'column' => 'co_ven')),
      'tipo'        => new sfValidatorPropelChoice(array('model' => 'Tabulado', 'column' => 'tipo')),
      'tasa'        => new sfValidatorNumber(),
      'moneda'      => new sfValidatorPropelChoice(array('model' => 'Moneda', 'column' => 'co_mone')),
      'monto_imp'   => new sfValidatorNumber(),
      'monto_gen'   => new sfValidatorNumber(),
      'monto_a1'    => new sfValidatorNumber(),
      'monto_a2'    => new sfValidatorNumber(),
      'monto_bru'   => new sfValidatorNumber(),
      'descuentos'  => new sfValidatorString(array('max_length' => 15)),
      'monto_des'   => new sfValidatorNumber(),
      'recargo'     => new sfValidatorString(array('max_length' => 15)),
      'monto_rec'   => new sfValidatorNumber(),
      'monto_otr'   => new sfValidatorNumber(),
      'monto_net'   => new sfValidatorNumber(),
      'saldo'       => new sfValidatorNumber(),
      'feccom'      => new sfValidatorString(array('max_length' => 255)),
      'numcom'      => new sfValidatorInteger(),
      'dis_cen'     => new sfValidatorString(array('max_length' => 2147483647)),
      'comis1'      => new sfValidatorNumber(),
      'comis2'      => new sfValidatorNumber(),
      'comis3'      => new sfValidatorNumber(),
      'comis4'      => new sfValidatorNumber(),
      'adicional'   => new sfValidatorNumber(),
      'campo1'      => new sfValidatorString(array('max_length' => 60)),
      'campo2'      => new sfValidatorString(array('max_length' => 60)),
      'campo3'      => new sfValidatorString(array('max_length' => 60)),
      'campo4'      => new sfValidatorString(array('max_length' => 60)),
      'campo5'      => new sfValidatorString(array('max_length' => 60)),
      'campo6'      => new sfValidatorString(array('max_length' => 60)),
      'campo7'      => new sfValidatorString(array('max_length' => 60)),
      'campo8'      => new sfValidatorString(array('max_length' => 60)),
      'co_us_in'    => new sfValidatorString(array('max_length' => 4)),
      'fe_us_in'    => new sfValidatorString(array('max_length' => 255)),
      'co_us_mo'    => new sfValidatorString(array('max_length' => 4)),
      'fe_us_mo'    => new sfValidatorString(array('max_length' => 255)),
      'co_us_el'    => new sfValidatorString(array('max_length' => 4)),
      'fe_us_el'    => new sfValidatorString(array('max_length' => 255)),
      'revisado'    => new sfValidatorString(array('max_length' => 1)),
      'trasnfe'     => new sfValidatorString(array('max_length' => 1)),
      'numcon'      => new sfValidatorString(array('max_length' => 20)),
      'co_sucu'     => new sfValidatorPropelChoice(array('model' => 'Almacen', 'column' => 'co_alma')),
      'rowguid'     => new sfValidatorString(array('max_length' => 16)),
      'mon_ilc'     => new sfValidatorNumber(),
      'otros1'      => new sfValidatorNumber(),
      'otros2'      => new sfValidatorNumber(),
      'otros3'      => new sfValidatorNumber(),
      'reng_si'     => new sfValidatorBoolean(),
      'comis5'      => new sfValidatorNumber(),
      'comis6'      => new sfValidatorNumber(),
      'row_id'      => new sfValidatorPass(),
      'aux01'       => new sfValidatorNumber(),
      'aux02'       => new sfValidatorString(array('max_length' => 30)),
      'salestax'    => new sfValidatorString(array('max_length' => 8)),
      'origen'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'origen_d'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fec_reg'     => new sfValidatorString(array('max_length' => 255)),
    ));

    $this->widgetSchema->setNameFormat('docum_cc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DocumCc';
  }


}
