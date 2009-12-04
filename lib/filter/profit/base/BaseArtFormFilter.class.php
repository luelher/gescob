<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Art filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseArtFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'art_des'    => new sfWidgetFormFilterInput(),
      'fecha_reg'  => new sfWidgetFormFilterInput(),
      'manj_ser'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'co_lin'     => new sfWidgetFormPropelChoice(array('model' => 'LinArt', 'add_empty' => true)),
      'co_cat'     => new sfWidgetFormPropelChoice(array('model' => 'CatArt', 'add_empty' => true)),
      'co_subl'    => new sfWidgetFormPropelChoice(array('model' => 'SubLin', 'add_empty' => true)),
      'co_color'   => new sfWidgetFormPropelChoice(array('model' => 'Colores', 'add_empty' => true)),
      'item'       => new sfWidgetFormFilterInput(),
      'ref'        => new sfWidgetFormFilterInput(),
      'modelo'     => new sfWidgetFormFilterInput(),
      'procedenci' => new sfWidgetFormPropelChoice(array('model' => 'Proceden', 'add_empty' => true)),
      'comentario' => new sfWidgetFormFilterInput(),
      'co_prov'    => new sfWidgetFormPropelChoice(array('model' => 'Prov', 'add_empty' => true)),
      'ubicacion'  => new sfWidgetFormFilterInput(),
      'uni_venta'  => new sfWidgetFormPropelChoice(array('model' => 'Unidades', 'add_empty' => true)),
      'uni_compra' => new sfWidgetFormFilterInput(),
      'uni_relac'  => new sfWidgetFormFilterInput(),
      'relac_aut'  => new sfWidgetFormFilterInput(),
      'stock_act'  => new sfWidgetFormFilterInput(),
      'stock_com'  => new sfWidgetFormFilterInput(),
      'sstock_com' => new sfWidgetFormFilterInput(),
      'stock_lle'  => new sfWidgetFormFilterInput(),
      'sstock_lle' => new sfWidgetFormFilterInput(),
      'stock_des'  => new sfWidgetFormFilterInput(),
      'sstock_des' => new sfWidgetFormFilterInput(),
      'suni_venta' => new sfWidgetFormPropelChoice(array('model' => 'Unidades', 'add_empty' => true)),
      'suni_compr' => new sfWidgetFormFilterInput(),
      'suni_relac' => new sfWidgetFormFilterInput(),
      'sstock_act' => new sfWidgetFormFilterInput(),
      'relac_comp' => new sfWidgetFormFilterInput(),
      'relac_vent' => new sfWidgetFormFilterInput(),
      'pto_pedido' => new sfWidgetFormFilterInput(),
      'stock_max'  => new sfWidgetFormFilterInput(),
      'stock_min'  => new sfWidgetFormFilterInput(),
      'prec_om'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'prec_vta1'  => new sfWidgetFormFilterInput(),
      'fec_prec_v' => new sfWidgetFormFilterInput(),
      'fec_prec_2' => new sfWidgetFormFilterInput(),
      'prec_vta2'  => new sfWidgetFormFilterInput(),
      'fec_prec_3' => new sfWidgetFormFilterInput(),
      'prec_vta3'  => new sfWidgetFormFilterInput(),
      'fec_prec_4' => new sfWidgetFormFilterInput(),
      'prec_vta4'  => new sfWidgetFormFilterInput(),
      'fec_prec_5' => new sfWidgetFormFilterInput(),
      'prec_vta5'  => new sfWidgetFormFilterInput(),
      'prec_agr1'  => new sfWidgetFormFilterInput(),
      'prec_agr2'  => new sfWidgetFormFilterInput(),
      'prec_agr3'  => new sfWidgetFormFilterInput(),
      'prec_agr4'  => new sfWidgetFormFilterInput(),
      'prec_agr5'  => new sfWidgetFormFilterInput(),
      'can_agr'    => new sfWidgetFormFilterInput(),
      'fec_des_p5' => new sfWidgetFormFilterInput(),
      'fec_has_p5' => new sfWidgetFormFilterInput(),
      'co_imp'     => new sfWidgetFormFilterInput(),
      'margen_max' => new sfWidgetFormFilterInput(),
      'ult_cos_un' => new sfWidgetFormFilterInput(),
      'fec_ult_co' => new sfWidgetFormFilterInput(),
      'cos_pro_un' => new sfWidgetFormFilterInput(),
      'fec_cos_pr' => new sfWidgetFormFilterInput(),
      'cos_merc'   => new sfWidgetFormFilterInput(),
      'fec_cos_me' => new sfWidgetFormFilterInput(),
      'cos_prov'   => new sfWidgetFormFilterInput(),
      'fec_cos_p2' => new sfWidgetFormFilterInput(),
      'ult_cos_do' => new sfWidgetFormFilterInput(),
      'fec_cos_do' => new sfWidgetFormFilterInput(),
      'cos_un_an'  => new sfWidgetFormFilterInput(),
      'fec_cos_an' => new sfWidgetFormFilterInput(),
      'ult_cos_om' => new sfWidgetFormFilterInput(),
      'fec_ult_om' => new sfWidgetFormFilterInput(),
      'cos_pro_om' => new sfWidgetFormFilterInput(),
      'fec_pro_om' => new sfWidgetFormFilterInput(),
      'tipo_cos'   => new sfWidgetFormFilterInput(),
      'mont_comi'  => new sfWidgetFormFilterInput(),
      'porc_cos'   => new sfWidgetFormFilterInput(),
      'mont_cos'   => new sfWidgetFormFilterInput(),
      'porc_gas'   => new sfWidgetFormFilterInput(),
      'mont_gas'   => new sfWidgetFormFilterInput(),
      'f_cost'     => new sfWidgetFormFilterInput(),
      'fisico'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'punt_cli'   => new sfWidgetFormFilterInput(),
      'punt_pro'   => new sfWidgetFormFilterInput(),
      'dias_repos' => new sfWidgetFormFilterInput(),
      'tipo'       => new sfWidgetFormFilterInput(),
      'alm_prin'   => new sfWidgetFormFilterInput(),
      'anulado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'tipo_imp'   => new sfWidgetFormPropelChoice(array('model' => 'Tabulado', 'add_empty' => true)),
      'dis_cen'    => new sfWidgetFormFilterInput(),
      'mon_ilc'    => new sfWidgetFormFilterInput(),
      'capacidad'  => new sfWidgetFormFilterInput(),
      'grado_al'   => new sfWidgetFormFilterInput(),
      'tipo_licor' => new sfWidgetFormFilterInput(),
      'compuesto'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'picture'    => new sfWidgetFormFilterInput(),
      'campo1'     => new sfWidgetFormFilterInput(),
      'campo2'     => new sfWidgetFormFilterInput(),
      'campo3'     => new sfWidgetFormFilterInput(),
      'campo4'     => new sfWidgetFormFilterInput(),
      'campo5'     => new sfWidgetFormFilterInput(),
      'campo6'     => new sfWidgetFormFilterInput(),
      'campo7'     => new sfWidgetFormFilterInput(),
      'campo8'     => new sfWidgetFormFilterInput(),
      'co_us_in'   => new sfWidgetFormFilterInput(),
      'fe_us_in'   => new sfWidgetFormFilterInput(),
      'co_us_mo'   => new sfWidgetFormFilterInput(),
      'fe_us_mo'   => new sfWidgetFormFilterInput(),
      'co_us_el'   => new sfWidgetFormFilterInput(),
      'fe_us_el'   => new sfWidgetFormFilterInput(),
      'revisado'   => new sfWidgetFormFilterInput(),
      'trasnfe'    => new sfWidgetFormFilterInput(),
      'co_sucu'    => new sfWidgetFormFilterInput(),
      'rowguid'    => new sfWidgetFormFilterInput(),
      'tuni_venta' => new sfWidgetFormFilterInput(),
      'equi_uni1'  => new sfWidgetFormFilterInput(),
      'equi_uni2'  => new sfWidgetFormFilterInput(),
      'equi_uni3'  => new sfWidgetFormFilterInput(),
      'lote'       => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'serialp'    => new sfWidgetFormFilterInput(),
      'valido'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'atributo1'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo1' => new sfWidgetFormFilterInput(),
      'atributo2'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo2' => new sfWidgetFormFilterInput(),
      'atributo3'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo3' => new sfWidgetFormFilterInput(),
      'atributo4'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo4' => new sfWidgetFormFilterInput(),
      'atributo5'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo5' => new sfWidgetFormFilterInput(),
      'atributo6'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'vatributo6' => new sfWidgetFormFilterInput(),
      'garantia'   => new sfWidgetFormFilterInput(),
      'peso'       => new sfWidgetFormFilterInput(),
      'pie'        => new sfWidgetFormFilterInput(),
      'margen1'    => new sfWidgetFormFilterInput(),
      'margen2'    => new sfWidgetFormFilterInput(),
      'margen3'    => new sfWidgetFormFilterInput(),
      'margen4'    => new sfWidgetFormFilterInput(),
      'margen5'    => new sfWidgetFormFilterInput(),
      'row_id'     => new sfWidgetFormFilterInput(),
      'imagen1'    => new sfWidgetFormFilterInput(),
      'imagen2'    => new sfWidgetFormFilterInput(),
      'i_art_des'  => new sfWidgetFormFilterInput(),
      'uni_emp'    => new sfWidgetFormFilterInput(),
      'rel_emp'    => new sfWidgetFormFilterInput(),
      'movil'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'art_des'    => new sfValidatorPass(array('required' => false)),
      'fecha_reg'  => new sfValidatorPass(array('required' => false)),
      'manj_ser'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'co_lin'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'LinArt', 'column' => 'co_lin')),
      'co_cat'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'CatArt', 'column' => 'co_cat')),
      'co_subl'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'SubLin', 'column' => 'co_lin')),
      'co_color'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Colores', 'column' => 'co_col')),
      'item'       => new sfValidatorPass(array('required' => false)),
      'ref'        => new sfValidatorPass(array('required' => false)),
      'modelo'     => new sfValidatorPass(array('required' => false)),
      'procedenci' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Proceden', 'column' => 'cod_proc')),
      'comentario' => new sfValidatorPass(array('required' => false)),
      'co_prov'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Prov', 'column' => 'co_prov')),
      'ubicacion'  => new sfValidatorPass(array('required' => false)),
      'uni_venta'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Unidades', 'column' => 'co_uni')),
      'uni_compra' => new sfValidatorPass(array('required' => false)),
      'uni_relac'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'relac_aut'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'stock_act'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_com'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_com' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_lle'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_lle' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_des'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_des' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'suni_venta' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Unidades', 'column' => 'co_uni')),
      'suni_compr' => new sfValidatorPass(array('required' => false)),
      'suni_relac' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sstock_act' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'relac_comp' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'relac_vent' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pto_pedido' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_max'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stock_min'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_om'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'prec_vta1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_prec_v' => new sfValidatorPass(array('required' => false)),
      'fec_prec_2' => new sfValidatorPass(array('required' => false)),
      'prec_vta2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_prec_3' => new sfValidatorPass(array('required' => false)),
      'prec_vta3'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_prec_4' => new sfValidatorPass(array('required' => false)),
      'prec_vta4'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_prec_5' => new sfValidatorPass(array('required' => false)),
      'prec_vta5'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_agr1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_agr2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_agr3'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_agr4'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'prec_agr5'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'can_agr'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_des_p5' => new sfValidatorPass(array('required' => false)),
      'fec_has_p5' => new sfValidatorPass(array('required' => false)),
      'co_imp'     => new sfValidatorPass(array('required' => false)),
      'margen_max' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ult_cos_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_ult_co' => new sfValidatorPass(array('required' => false)),
      'cos_pro_un' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_cos_pr' => new sfValidatorPass(array('required' => false)),
      'cos_merc'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_cos_me' => new sfValidatorPass(array('required' => false)),
      'cos_prov'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_cos_p2' => new sfValidatorPass(array('required' => false)),
      'ult_cos_do' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_cos_do' => new sfValidatorPass(array('required' => false)),
      'cos_un_an'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_cos_an' => new sfValidatorPass(array('required' => false)),
      'ult_cos_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_ult_om' => new sfValidatorPass(array('required' => false)),
      'cos_pro_om' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_pro_om' => new sfValidatorPass(array('required' => false)),
      'tipo_cos'   => new sfValidatorPass(array('required' => false)),
      'mont_comi'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_cos'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mont_cos'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_gas'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mont_gas'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'f_cost'     => new sfValidatorPass(array('required' => false)),
      'fisico'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'punt_cli'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'punt_pro'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dias_repos' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo'       => new sfValidatorPass(array('required' => false)),
      'alm_prin'   => new sfValidatorPass(array('required' => false)),
      'anulado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'tipo_imp'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tabulado', 'column' => 'tipo')),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'mon_ilc'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'capacidad'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'grado_al'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_licor' => new sfValidatorPass(array('required' => false)),
      'compuesto'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'picture'    => new sfValidatorPass(array('required' => false)),
      'campo1'     => new sfValidatorPass(array('required' => false)),
      'campo2'     => new sfValidatorPass(array('required' => false)),
      'campo3'     => new sfValidatorPass(array('required' => false)),
      'campo4'     => new sfValidatorPass(array('required' => false)),
      'campo5'     => new sfValidatorPass(array('required' => false)),
      'campo6'     => new sfValidatorPass(array('required' => false)),
      'campo7'     => new sfValidatorPass(array('required' => false)),
      'campo8'     => new sfValidatorPass(array('required' => false)),
      'co_us_in'   => new sfValidatorPass(array('required' => false)),
      'fe_us_in'   => new sfValidatorPass(array('required' => false)),
      'co_us_mo'   => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'   => new sfValidatorPass(array('required' => false)),
      'co_us_el'   => new sfValidatorPass(array('required' => false)),
      'fe_us_el'   => new sfValidatorPass(array('required' => false)),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'co_sucu'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'tuni_venta' => new sfValidatorPass(array('required' => false)),
      'equi_uni1'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'equi_uni2'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'equi_uni3'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'lote'       => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'serialp'    => new sfValidatorPass(array('required' => false)),
      'valido'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'atributo1'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo1' => new sfValidatorPass(array('required' => false)),
      'atributo2'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo2' => new sfValidatorPass(array('required' => false)),
      'atributo3'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo3' => new sfValidatorPass(array('required' => false)),
      'atributo4'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo4' => new sfValidatorPass(array('required' => false)),
      'atributo5'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo5' => new sfValidatorPass(array('required' => false)),
      'atributo6'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'vatributo6' => new sfValidatorPass(array('required' => false)),
      'garantia'   => new sfValidatorPass(array('required' => false)),
      'peso'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pie'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'margen1'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'margen2'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'margen3'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'margen4'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'margen5'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'row_id'     => new sfValidatorPass(array('required' => false)),
      'imagen1'    => new sfValidatorPass(array('required' => false)),
      'imagen2'    => new sfValidatorPass(array('required' => false)),
      'i_art_des'  => new sfValidatorPass(array('required' => false)),
      'uni_emp'    => new sfValidatorPass(array('required' => false)),
      'rel_emp'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'movil'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('art_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Art';
  }

  public function getFields()
  {
    return array(
      'co_art'     => 'Text',
      'art_des'    => 'Text',
      'fecha_reg'  => 'Text',
      'manj_ser'   => 'Boolean',
      'co_lin'     => 'ForeignKey',
      'co_cat'     => 'ForeignKey',
      'co_subl'    => 'ForeignKey',
      'co_color'   => 'ForeignKey',
      'item'       => 'Text',
      'ref'        => 'Text',
      'modelo'     => 'Text',
      'procedenci' => 'ForeignKey',
      'comentario' => 'Text',
      'co_prov'    => 'ForeignKey',
      'ubicacion'  => 'Text',
      'uni_venta'  => 'ForeignKey',
      'uni_compra' => 'Text',
      'uni_relac'  => 'Number',
      'relac_aut'  => 'Number',
      'stock_act'  => 'Number',
      'stock_com'  => 'Number',
      'sstock_com' => 'Number',
      'stock_lle'  => 'Number',
      'sstock_lle' => 'Number',
      'stock_des'  => 'Number',
      'sstock_des' => 'Number',
      'suni_venta' => 'ForeignKey',
      'suni_compr' => 'Text',
      'suni_relac' => 'Number',
      'sstock_act' => 'Number',
      'relac_comp' => 'Number',
      'relac_vent' => 'Number',
      'pto_pedido' => 'Number',
      'stock_max'  => 'Number',
      'stock_min'  => 'Number',
      'prec_om'    => 'Boolean',
      'prec_vta1'  => 'Number',
      'fec_prec_v' => 'Text',
      'fec_prec_2' => 'Text',
      'prec_vta2'  => 'Number',
      'fec_prec_3' => 'Text',
      'prec_vta3'  => 'Number',
      'fec_prec_4' => 'Text',
      'prec_vta4'  => 'Number',
      'fec_prec_5' => 'Text',
      'prec_vta5'  => 'Number',
      'prec_agr1'  => 'Number',
      'prec_agr2'  => 'Number',
      'prec_agr3'  => 'Number',
      'prec_agr4'  => 'Number',
      'prec_agr5'  => 'Number',
      'can_agr'    => 'Number',
      'fec_des_p5' => 'Text',
      'fec_has_p5' => 'Text',
      'co_imp'     => 'Text',
      'margen_max' => 'Number',
      'ult_cos_un' => 'Number',
      'fec_ult_co' => 'Text',
      'cos_pro_un' => 'Number',
      'fec_cos_pr' => 'Text',
      'cos_merc'   => 'Number',
      'fec_cos_me' => 'Text',
      'cos_prov'   => 'Number',
      'fec_cos_p2' => 'Text',
      'ult_cos_do' => 'Number',
      'fec_cos_do' => 'Text',
      'cos_un_an'  => 'Number',
      'fec_cos_an' => 'Text',
      'ult_cos_om' => 'Number',
      'fec_ult_om' => 'Text',
      'cos_pro_om' => 'Number',
      'fec_pro_om' => 'Text',
      'tipo_cos'   => 'Text',
      'mont_comi'  => 'Number',
      'porc_cos'   => 'Number',
      'mont_cos'   => 'Number',
      'porc_gas'   => 'Number',
      'mont_gas'   => 'Number',
      'f_cost'     => 'Text',
      'fisico'     => 'Boolean',
      'punt_cli'   => 'Number',
      'punt_pro'   => 'Number',
      'dias_repos' => 'Number',
      'tipo'       => 'Text',
      'alm_prin'   => 'Text',
      'anulado'    => 'Boolean',
      'tipo_imp'   => 'ForeignKey',
      'dis_cen'    => 'Text',
      'mon_ilc'    => 'Number',
      'capacidad'  => 'Number',
      'grado_al'   => 'Number',
      'tipo_licor' => 'Text',
      'compuesto'  => 'Boolean',
      'picture'    => 'Text',
      'campo1'     => 'Text',
      'campo2'     => 'Text',
      'campo3'     => 'Text',
      'campo4'     => 'Text',
      'campo5'     => 'Text',
      'campo6'     => 'Text',
      'campo7'     => 'Text',
      'campo8'     => 'Text',
      'co_us_in'   => 'Text',
      'fe_us_in'   => 'Text',
      'co_us_mo'   => 'Text',
      'fe_us_mo'   => 'Text',
      'co_us_el'   => 'Text',
      'fe_us_el'   => 'Text',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'co_sucu'    => 'Text',
      'rowguid'    => 'Text',
      'tuni_venta' => 'Text',
      'equi_uni1'  => 'Number',
      'equi_uni2'  => 'Number',
      'equi_uni3'  => 'Number',
      'lote'       => 'Boolean',
      'serialp'    => 'Text',
      'valido'     => 'Boolean',
      'atributo1'  => 'Boolean',
      'vatributo1' => 'Text',
      'atributo2'  => 'Boolean',
      'vatributo2' => 'Text',
      'atributo3'  => 'Boolean',
      'vatributo3' => 'Text',
      'atributo4'  => 'Boolean',
      'vatributo4' => 'Text',
      'atributo5'  => 'Boolean',
      'vatributo5' => 'Text',
      'atributo6'  => 'Boolean',
      'vatributo6' => 'Text',
      'garantia'   => 'Text',
      'peso'       => 'Number',
      'pie'        => 'Number',
      'margen1'    => 'Number',
      'margen2'    => 'Number',
      'margen3'    => 'Number',
      'margen4'    => 'Number',
      'margen5'    => 'Number',
      'row_id'     => 'Text',
      'imagen1'    => 'Text',
      'imagen2'    => 'Text',
      'i_art_des'  => 'Text',
      'uni_emp'    => 'Text',
      'rel_emp'    => 'Number',
      'movil'      => 'Boolean',
    );
  }
}