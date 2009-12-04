<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * RengFac filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseRengFacFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'dis_cen'    => new sfWidgetFormFilterInput(),
      'tipo_doc'   => new sfWidgetFormFilterInput(),
      'reng_doc'   => new sfWidgetFormFilterInput(),
      'num_doc'    => new sfWidgetFormFilterInput(),
      'co_art'     => new sfWidgetFormPropelChoice(array('model' => 'Art', 'add_empty' => true)),
      'co_alma'    => new sfWidgetFormPropelChoice(array('model' => 'SubAlma', 'add_empty' => true)),
      'total_art'  => new sfWidgetFormFilterInput(),
      'stotal_art' => new sfWidgetFormFilterInput(),
      'pendiente'  => new sfWidgetFormFilterInput(),
      'uni_venta'  => new sfWidgetFormFilterInput(),
      'prec_vta'   => new sfWidgetFormFilterInput(),
      'porc_desc'  => new sfWidgetFormFilterInput(),
      'tipo_imp'   => new sfWidgetFormPropelChoice(array('model' => 'Tabulado', 'add_empty' => true)),
      'isv'        => new sfWidgetFormFilterInput(),
      'reng_neto'  => new sfWidgetFormFilterInput(),
      'cos_pro_un' => new sfWidgetFormFilterInput(),
      'ult_cos_un' => new sfWidgetFormFilterInput(),
      'ult_cos_om' => new sfWidgetFormFilterInput(),
      'cos_pro_om' => new sfWidgetFormFilterInput(),
      'total_dev'  => new sfWidgetFormFilterInput(),
      'monto_dev'  => new sfWidgetFormFilterInput(),
      'prec_vta2'  => new sfWidgetFormFilterInput(),
      'anulado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'des_art'    => new sfWidgetFormFilterInput(),
      'seleccion'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'cant_imp'   => new sfWidgetFormFilterInput(),
      'comentario' => new sfWidgetFormFilterInput(),
      'rowguid'    => new sfWidgetFormFilterInput(),
      'total_uni'  => new sfWidgetFormFilterInput(),
      'mon_ilc'    => new sfWidgetFormFilterInput(),
      'otros'      => new sfWidgetFormFilterInput(),
      'nro_lote'   => new sfWidgetFormFilterInput(),
      'fec_lote'   => new sfWidgetFormFilterInput(),
      'pendiente2' => new sfWidgetFormFilterInput(),
      'tipo_doc2'  => new sfWidgetFormFilterInput(),
      'reng_doc2'  => new sfWidgetFormFilterInput(),
      'num_doc2'   => new sfWidgetFormFilterInput(),
      'tipo_prec'  => new sfWidgetFormFilterInput(),
      'co_alma2'   => new sfWidgetFormFilterInput(),
      'aux01'      => new sfWidgetFormFilterInput(),
      'aux02'      => new sfWidgetFormFilterInput(),
      'cant_prod'  => new sfWidgetFormFilterInput(),
      'imp_prod'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'tipo_doc'   => new sfValidatorPass(array('required' => false)),
      'reng_doc'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_art'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Art', 'column' => 'co_art')),
      'co_alma'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'SubAlma', 'column' => 'co_sub')),
      'total_art'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stotal_art' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pendiente'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'uni_venta'  => new sfValidatorPass(array('required' => false)),
      'prec_vta'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_desc'  => new sfValidatorPass(array('required' => false)),
      'tipo_imp'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tabulado', 'column' => 'tipo')),
      'isv'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'reng_neto'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_pro_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cos_pro_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_dev'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_dev'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_vta2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'anulado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'des_art'    => new sfValidatorPass(array('required' => false)),
      'seleccion'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'cant_imp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'total_uni'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mon_ilc'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'otros'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nro_lote'   => new sfValidatorPass(array('required' => false)),
      'fec_lote'   => new sfValidatorPass(array('required' => false)),
      'pendiente2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_doc2'  => new sfValidatorPass(array('required' => false)),
      'reng_doc2'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc2'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo_prec'  => new sfValidatorPass(array('required' => false)),
      'co_alma2'   => new sfValidatorPass(array('required' => false)),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
      'cant_prod'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'imp_prod'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('reng_fac_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengFac';
  }

  public function getFields()
  {
    return array(
      'fact_num'   => 'Number',
      'reng_num'   => 'Number',
      'dis_cen'    => 'Text',
      'tipo_doc'   => 'Text',
      'reng_doc'   => 'Number',
      'num_doc'    => 'Number',
      'co_art'     => 'ForeignKey',
      'co_alma'    => 'ForeignKey',
      'total_art'  => 'Number',
      'stotal_art' => 'Number',
      'pendiente'  => 'Number',
      'uni_venta'  => 'Text',
      'prec_vta'   => 'Number',
      'porc_desc'  => 'Text',
      'tipo_imp'   => 'ForeignKey',
      'isv'        => 'Number',
      'reng_neto'  => 'Number',
      'cos_pro_un' => 'Number',
      'ult_cos_un' => 'Number',
      'ult_cos_om' => 'Number',
      'cos_pro_om' => 'Number',
      'total_dev'  => 'Number',
      'monto_dev'  => 'Number',
      'prec_vta2'  => 'Number',
      'anulado'    => 'Boolean',
      'des_art'    => 'Text',
      'seleccion'  => 'Boolean',
      'cant_imp'   => 'Number',
      'comentario' => 'Text',
      'rowguid'    => 'Text',
      'total_uni'  => 'Number',
      'mon_ilc'    => 'Number',
      'otros'      => 'Number',
      'nro_lote'   => 'Text',
      'fec_lote'   => 'Text',
      'pendiente2' => 'Number',
      'tipo_doc2'  => 'Text',
      'reng_doc2'  => 'Number',
      'num_doc2'   => 'Number',
      'tipo_prec'  => 'Text',
      'co_alma2'   => 'Text',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
      'cant_prod'  => 'Number',
      'imp_prod'   => 'Number',
    );
  }
}
