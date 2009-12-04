<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * RengCob filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseRengCobFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tp_doc_cob'   => new sfWidgetFormFilterInput(),
      'doc_num'      => new sfWidgetFormFilterInput(),
      'neto'         => new sfWidgetFormFilterInput(),
      'neto_tmp'     => new sfWidgetFormFilterInput(),
      'dppago'       => new sfWidgetFormFilterInput(),
      'dppago_tmp'   => new sfWidgetFormFilterInput(),
      'reng_ncr'     => new sfWidgetFormFilterInput(),
      'co_ven'       => new sfWidgetFormFilterInput(),
      'comis1'       => new sfWidgetFormFilterInput(),
      'comis2'       => new sfWidgetFormFilterInput(),
      'comis3'       => new sfWidgetFormFilterInput(),
      'comis4'       => new sfWidgetFormFilterInput(),
      'sign_aju_c'   => new sfWidgetFormFilterInput(),
      'porc_aju_c'   => new sfWidgetFormFilterInput(),
      'por_cob'      => new sfWidgetFormFilterInput(),
      'comi_cob'     => new sfWidgetFormFilterInput(),
      'mont_cob'     => new sfWidgetFormFilterInput(),
      'sino_pago'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'sino_reten'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'monto_dppago' => new sfWidgetFormFilterInput(),
      'monto_reten'  => new sfWidgetFormFilterInput(),
      'imp_pago'     => new sfWidgetFormFilterInput(),
      'monto_obj'    => new sfWidgetFormFilterInput(),
      'isv'          => new sfWidgetFormFilterInput(),
      'nro_fact'     => new sfWidgetFormFilterInput(),
      'moneda'       => new sfWidgetFormFilterInput(),
      'tasa'         => new sfWidgetFormFilterInput(),
      'numcon'       => new sfWidgetFormFilterInput(),
      'sustraen'     => new sfWidgetFormFilterInput(),
      'rowguid'      => new sfWidgetFormFilterInput(),
      'co_islr'      => new sfWidgetFormFilterInput(),
      'fec_emis'     => new sfWidgetFormFilterInput(),
      'fec_venc'     => new sfWidgetFormFilterInput(),
      'comis5'       => new sfWidgetFormFilterInput(),
      'comis6'       => new sfWidgetFormFilterInput(),
      'fact_iva'     => new sfWidgetFormFilterInput(),
      'ret_iva'      => new sfWidgetFormFilterInput(),
      'porc_retn'    => new sfWidgetFormFilterInput(),
      'porc_desc'    => new sfWidgetFormFilterInput(),
      'aux01'        => new sfWidgetFormFilterInput(),
      'aux02'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tp_doc_cob'   => new sfValidatorPass(array('required' => false)),
      'doc_num'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'neto'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'neto_tmp'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dppago'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dppago_tmp'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'reng_ncr'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_ven'       => new sfValidatorPass(array('required' => false)),
      'comis1'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comis2'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comis3'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comis4'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sign_aju_c'   => new sfValidatorPass(array('required' => false)),
      'porc_aju_c'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_cob'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comi_cob'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mont_cob'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sino_pago'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'sino_reten'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'monto_dppago' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_reten'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'imp_pago'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_obj'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'isv'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nro_fact'     => new sfValidatorPass(array('required' => false)),
      'moneda'       => new sfValidatorPass(array('required' => false)),
      'tasa'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'numcon'       => new sfValidatorPass(array('required' => false)),
      'sustraen'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'      => new sfValidatorPass(array('required' => false)),
      'co_islr'      => new sfValidatorPass(array('required' => false)),
      'fec_emis'     => new sfValidatorPass(array('required' => false)),
      'fec_venc'     => new sfValidatorPass(array('required' => false)),
      'comis5'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comis6'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fact_iva'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ret_iva'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_retn'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_desc'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux01'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_cob_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengCob';
  }

  public function getFields()
  {
    return array(
      'cob_num'      => 'Number',
      'reng_num'     => 'Number',
      'tp_doc_cob'   => 'Text',
      'doc_num'      => 'Number',
      'neto'         => 'Number',
      'neto_tmp'     => 'Number',
      'dppago'       => 'Number',
      'dppago_tmp'   => 'Number',
      'reng_ncr'     => 'Number',
      'co_ven'       => 'Text',
      'comis1'       => 'Number',
      'comis2'       => 'Number',
      'comis3'       => 'Number',
      'comis4'       => 'Number',
      'sign_aju_c'   => 'Text',
      'porc_aju_c'   => 'Number',
      'por_cob'      => 'Number',
      'comi_cob'     => 'Number',
      'mont_cob'     => 'Number',
      'sino_pago'    => 'Boolean',
      'sino_reten'   => 'Boolean',
      'monto_dppago' => 'Number',
      'monto_reten'  => 'Number',
      'imp_pago'     => 'Number',
      'monto_obj'    => 'Number',
      'isv'          => 'Number',
      'nro_fact'     => 'Text',
      'moneda'       => 'Text',
      'tasa'         => 'Number',
      'numcon'       => 'Text',
      'sustraen'     => 'Number',
      'rowguid'      => 'Text',
      'co_islr'      => 'Text',
      'fec_emis'     => 'Text',
      'fec_venc'     => 'Text',
      'comis5'       => 'Number',
      'comis6'       => 'Number',
      'fact_iva'     => 'Number',
      'ret_iva'      => 'Number',
      'porc_retn'    => 'Number',
      'porc_desc'    => 'Number',
      'aux01'        => 'Number',
      'aux02'        => 'Text',
    );
  }
}
