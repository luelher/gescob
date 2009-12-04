<?php

/**
 * RengCob form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseRengCobForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cob_num'      => new sfWidgetFormInputHidden(),
      'reng_num'     => new sfWidgetFormInputHidden(),
      'tp_doc_cob'   => new sfWidgetFormInput(),
      'doc_num'      => new sfWidgetFormInput(),
      'neto'         => new sfWidgetFormInput(),
      'neto_tmp'     => new sfWidgetFormInput(),
      'dppago'       => new sfWidgetFormInput(),
      'dppago_tmp'   => new sfWidgetFormInput(),
      'reng_ncr'     => new sfWidgetFormInput(),
      'co_ven'       => new sfWidgetFormInput(),
      'comis1'       => new sfWidgetFormInput(),
      'comis2'       => new sfWidgetFormInput(),
      'comis3'       => new sfWidgetFormInput(),
      'comis4'       => new sfWidgetFormInput(),
      'sign_aju_c'   => new sfWidgetFormInput(),
      'porc_aju_c'   => new sfWidgetFormInput(),
      'por_cob'      => new sfWidgetFormInput(),
      'comi_cob'     => new sfWidgetFormInput(),
      'mont_cob'     => new sfWidgetFormInput(),
      'sino_pago'    => new sfWidgetFormInputCheckbox(),
      'sino_reten'   => new sfWidgetFormInputCheckbox(),
      'monto_dppago' => new sfWidgetFormInput(),
      'monto_reten'  => new sfWidgetFormInput(),
      'imp_pago'     => new sfWidgetFormInput(),
      'monto_obj'    => new sfWidgetFormInput(),
      'isv'          => new sfWidgetFormInput(),
      'nro_fact'     => new sfWidgetFormInput(),
      'moneda'       => new sfWidgetFormInput(),
      'tasa'         => new sfWidgetFormInput(),
      'numcon'       => new sfWidgetFormInput(),
      'sustraen'     => new sfWidgetFormInput(),
      'rowguid'      => new sfWidgetFormInput(),
      'co_islr'      => new sfWidgetFormInput(),
      'fec_emis'     => new sfWidgetFormInput(),
      'fec_venc'     => new sfWidgetFormInput(),
      'comis5'       => new sfWidgetFormInput(),
      'comis6'       => new sfWidgetFormInput(),
      'fact_iva'     => new sfWidgetFormInput(),
      'ret_iva'      => new sfWidgetFormInput(),
      'porc_retn'    => new sfWidgetFormInput(),
      'porc_desc'    => new sfWidgetFormInput(),
      'aux01'        => new sfWidgetFormInput(),
      'aux02'        => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'cob_num'      => new sfValidatorPropelChoice(array('model' => 'RengCob', 'column' => 'cob_num', 'required' => false)),
      'reng_num'     => new sfValidatorPropelChoice(array('model' => 'RengCob', 'column' => 'reng_num', 'required' => false)),
      'tp_doc_cob'   => new sfValidatorString(array('max_length' => 4)),
      'doc_num'      => new sfValidatorInteger(),
      'neto'         => new sfValidatorNumber(),
      'neto_tmp'     => new sfValidatorNumber(),
      'dppago'       => new sfValidatorNumber(),
      'dppago_tmp'   => new sfValidatorInteger(),
      'reng_ncr'     => new sfValidatorInteger(),
      'co_ven'       => new sfValidatorString(array('max_length' => 4)),
      'comis1'       => new sfValidatorNumber(),
      'comis2'       => new sfValidatorNumber(),
      'comis3'       => new sfValidatorNumber(),
      'comis4'       => new sfValidatorNumber(),
      'sign_aju_c'   => new sfValidatorString(array('max_length' => 1)),
      'porc_aju_c'   => new sfValidatorNumber(),
      'por_cob'      => new sfValidatorNumber(),
      'comi_cob'     => new sfValidatorNumber(),
      'mont_cob'     => new sfValidatorNumber(),
      'sino_pago'    => new sfValidatorBoolean(),
      'sino_reten'   => new sfValidatorBoolean(),
      'monto_dppago' => new sfValidatorNumber(),
      'monto_reten'  => new sfValidatorNumber(),
      'imp_pago'     => new sfValidatorNumber(),
      'monto_obj'    => new sfValidatorNumber(),
      'isv'          => new sfValidatorNumber(),
      'nro_fact'     => new sfValidatorString(array('max_length' => 20)),
      'moneda'       => new sfValidatorString(array('max_length' => 10)),
      'tasa'         => new sfValidatorNumber(),
      'numcon'       => new sfValidatorString(array('max_length' => 20)),
      'sustraen'     => new sfValidatorNumber(),
      'rowguid'      => new sfValidatorString(array('max_length' => 16)),
      'co_islr'      => new sfValidatorString(array('max_length' => 6)),
      'fec_emis'     => new sfValidatorString(array('max_length' => 255)),
      'fec_venc'     => new sfValidatorString(array('max_length' => 255)),
      'comis5'       => new sfValidatorNumber(),
      'comis6'       => new sfValidatorNumber(),
      'fact_iva'     => new sfValidatorInteger(),
      'ret_iva'      => new sfValidatorNumber(),
      'porc_retn'    => new sfValidatorNumber(),
      'porc_desc'    => new sfValidatorNumber(),
      'aux01'        => new sfValidatorNumber(),
      'aux02'        => new sfValidatorString(array('max_length' => 30)),
    ));

    $this->widgetSchema->setNameFormat('reng_cob[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengCob';
  }


}
