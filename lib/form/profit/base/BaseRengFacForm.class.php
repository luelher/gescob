<?php

/**
 * RengFac form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseRengFacForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'fact_num'   => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'tipo_doc'   => new sfWidgetFormInput(),
      'reng_doc'   => new sfWidgetFormInput(),
      'num_doc'    => new sfWidgetFormInput(),
      'co_art'     => new sfWidgetFormPropelChoice(array('model' => 'Art', 'add_empty' => false)),
      'co_alma'    => new sfWidgetFormPropelChoice(array('model' => 'SubAlma', 'add_empty' => false)),
      'total_art'  => new sfWidgetFormInput(),
      'stotal_art' => new sfWidgetFormInput(),
      'pendiente'  => new sfWidgetFormInput(),
      'uni_venta'  => new sfWidgetFormInput(),
      'prec_vta'   => new sfWidgetFormInput(),
      'porc_desc'  => new sfWidgetFormInput(),
      'tipo_imp'   => new sfWidgetFormPropelChoice(array('model' => 'Tabulado', 'add_empty' => false)),
      'isv'        => new sfWidgetFormInput(),
      'reng_neto'  => new sfWidgetFormInput(),
      'cos_pro_un' => new sfWidgetFormInput(),
      'ult_cos_un' => new sfWidgetFormInput(),
      'ult_cos_om' => new sfWidgetFormInput(),
      'cos_pro_om' => new sfWidgetFormInput(),
      'total_dev'  => new sfWidgetFormInput(),
      'monto_dev'  => new sfWidgetFormInput(),
      'prec_vta2'  => new sfWidgetFormInput(),
      'anulado'    => new sfWidgetFormInputCheckbox(),
      'des_art'    => new sfWidgetFormTextarea(),
      'seleccion'  => new sfWidgetFormInputCheckbox(),
      'cant_imp'   => new sfWidgetFormInput(),
      'comentario' => new sfWidgetFormTextarea(),
      'rowguid'    => new sfWidgetFormInput(),
      'total_uni'  => new sfWidgetFormInput(),
      'mon_ilc'    => new sfWidgetFormInput(),
      'otros'      => new sfWidgetFormInput(),
      'nro_lote'   => new sfWidgetFormInput(),
      'fec_lote'   => new sfWidgetFormInput(),
      'pendiente2' => new sfWidgetFormInput(),
      'tipo_doc2'  => new sfWidgetFormInput(),
      'reng_doc2'  => new sfWidgetFormInput(),
      'num_doc2'   => new sfWidgetFormInput(),
      'tipo_prec'  => new sfWidgetFormInput(),
      'co_alma2'   => new sfWidgetFormInput(),
      'aux01'      => new sfWidgetFormInput(),
      'aux02'      => new sfWidgetFormInput(),
      'cant_prod'  => new sfWidgetFormInput(),
      'imp_prod'   => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'fact_num'   => new sfValidatorPropelChoice(array('model' => 'RengFac', 'column' => 'fact_num', 'required' => false)),
      'reng_num'   => new sfValidatorPropelChoice(array('model' => 'RengFac', 'column' => 'reng_num', 'required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647)),
      'tipo_doc'   => new sfValidatorString(array('max_length' => 1)),
      'reng_doc'   => new sfValidatorInteger(),
      'num_doc'    => new sfValidatorInteger(),
      'co_art'     => new sfValidatorPropelChoice(array('model' => 'Art', 'column' => 'co_art')),
      'co_alma'    => new sfValidatorPropelChoice(array('model' => 'SubAlma', 'column' => 'co_sub')),
      'total_art'  => new sfValidatorNumber(),
      'stotal_art' => new sfValidatorNumber(),
      'pendiente'  => new sfValidatorNumber(),
      'uni_venta'  => new sfValidatorString(array('max_length' => 6)),
      'prec_vta'   => new sfValidatorNumber(),
      'porc_desc'  => new sfValidatorString(array('max_length' => 15)),
      'tipo_imp'   => new sfValidatorPropelChoice(array('model' => 'Tabulado', 'column' => 'tipo')),
      'isv'        => new sfValidatorNumber(),
      'reng_neto'  => new sfValidatorNumber(),
      'cos_pro_un' => new sfValidatorNumber(),
      'ult_cos_un' => new sfValidatorNumber(),
      'ult_cos_om' => new sfValidatorNumber(),
      'cos_pro_om' => new sfValidatorNumber(),
      'total_dev'  => new sfValidatorNumber(),
      'monto_dev'  => new sfValidatorNumber(),
      'prec_vta2'  => new sfValidatorNumber(),
      'anulado'    => new sfValidatorBoolean(),
      'des_art'    => new sfValidatorString(array('max_length' => 2147483647)),
      'seleccion'  => new sfValidatorBoolean(),
      'cant_imp'   => new sfValidatorNumber(),
      'comentario' => new sfValidatorString(array('max_length' => 2147483647)),
      'rowguid'    => new sfValidatorString(array('max_length' => 16)),
      'total_uni'  => new sfValidatorNumber(),
      'mon_ilc'    => new sfValidatorNumber(),
      'otros'      => new sfValidatorNumber(),
      'nro_lote'   => new sfValidatorString(array('max_length' => 20)),
      'fec_lote'   => new sfValidatorString(array('max_length' => 255)),
      'pendiente2' => new sfValidatorNumber(),
      'tipo_doc2'  => new sfValidatorString(array('max_length' => 1)),
      'reng_doc2'  => new sfValidatorInteger(),
      'num_doc2'   => new sfValidatorInteger(),
      'tipo_prec'  => new sfValidatorString(array('max_length' => 1)),
      'co_alma2'   => new sfValidatorString(array('max_length' => 6)),
      'aux01'      => new sfValidatorNumber(),
      'aux02'      => new sfValidatorString(array('max_length' => 30)),
      'cant_prod'  => new sfValidatorNumber(),
      'imp_prod'   => new sfValidatorNumber(),
    ));

    $this->widgetSchema->setNameFormat('reng_fac[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengFac';
  }


}
