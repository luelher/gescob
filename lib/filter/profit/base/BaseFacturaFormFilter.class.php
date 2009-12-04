<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Factura filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseFacturaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'contrib'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'nombre'      => new sfWidgetFormFilterInput(),
      'rif'         => new sfWidgetFormFilterInput(),
      'nit'         => new sfWidgetFormFilterInput(),
      'num_control' => new sfWidgetFormFilterInput(),
      'status'      => new sfWidgetFormFilterInput(),
      'comentario'  => new sfWidgetFormFilterInput(),
      'descrip'     => new sfWidgetFormFilterInput(),
      'saldo'       => new sfWidgetFormFilterInput(),
      'fec_emis'    => new sfWidgetFormFilterInput(),
      'fec_venc'    => new sfWidgetFormFilterInput(),
      'co_cli'      => new sfWidgetFormPropelChoice(array('model' => 'Clientes', 'add_empty' => true)),
      'co_ven'      => new sfWidgetFormPropelChoice(array('model' => 'Vendedor', 'add_empty' => true)),
      'co_tran'     => new sfWidgetFormPropelChoice(array('model' => 'Transpor', 'add_empty' => true)),
      'dir_ent'     => new sfWidgetFormFilterInput(),
      'forma_pag'   => new sfWidgetFormPropelChoice(array('model' => 'Condicio', 'add_empty' => true)),
      'tot_bruto'   => new sfWidgetFormFilterInput(),
      'tot_neto'    => new sfWidgetFormFilterInput(),
      'glob_desc'   => new sfWidgetFormFilterInput(),
      'tot_reca'    => new sfWidgetFormFilterInput(),
      'porc_gdesc'  => new sfWidgetFormFilterInput(),
      'porc_reca'   => new sfWidgetFormFilterInput(),
      'total_uc'    => new sfWidgetFormFilterInput(),
      'total_cp'    => new sfWidgetFormFilterInput(),
      'tot_flete'   => new sfWidgetFormFilterInput(),
      'monto_dev'   => new sfWidgetFormFilterInput(),
      'totklu'      => new sfWidgetFormFilterInput(),
      'anulada'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'impresa'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'iva'         => new sfWidgetFormFilterInput(),
      'iva_dev'     => new sfWidgetFormFilterInput(),
      'numcom'      => new sfWidgetFormFilterInput(),
      'tasa'        => new sfWidgetFormFilterInput(),
      'dis_cen'     => new sfWidgetFormFilterInput(),
      'vuelto'      => new sfWidgetFormFilterInput(),
      'seriales'    => new sfWidgetFormFilterInput(),
      'tasag'       => new sfWidgetFormFilterInput(),
      'tasag10'     => new sfWidgetFormFilterInput(),
      'tasag20'     => new sfWidgetFormFilterInput(),
      'ID'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'contrib'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'rif'         => new sfValidatorPass(array('required' => false)),
      'nit'         => new sfValidatorPass(array('required' => false)),
      'num_control' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'      => new sfValidatorPass(array('required' => false)),
      'comentario'  => new sfValidatorPass(array('required' => false)),
      'descrip'     => new sfValidatorPass(array('required' => false)),
      'saldo'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fec_emis'    => new sfValidatorPass(array('required' => false)),
      'fec_venc'    => new sfValidatorPass(array('required' => false)),
      'co_cli'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Clientes', 'column' => 'co_cli')),
      'co_ven'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Vendedor', 'column' => 'co_ven')),
      'co_tran'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Transpor', 'column' => 'co_tran')),
      'dir_ent'     => new sfValidatorPass(array('required' => false)),
      'forma_pag'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Condicio', 'column' => 'co_cond')),
      'tot_bruto'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tot_neto'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'glob_desc'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tot_reca'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_gdesc'  => new sfValidatorPass(array('required' => false)),
      'porc_reca'   => new sfValidatorPass(array('required' => false)),
      'total_uc'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_cp'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tot_flete'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_dev'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'totklu'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'anulada'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'impresa'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'iva'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'iva_dev'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'numcom'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tasa'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dis_cen'     => new sfValidatorPass(array('required' => false)),
      'vuelto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'seriales'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tasag'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tasag10'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tasag20'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ID'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('factura_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Factura';
  }

  public function getFields()
  {
    return array(
      'fact_num'    => 'Number',
      'contrib'     => 'Boolean',
      'nombre'      => 'Text',
      'rif'         => 'Text',
      'nit'         => 'Text',
      'num_control' => 'Number',
      'status'      => 'Text',
      'comentario'  => 'Text',
      'descrip'     => 'Text',
      'saldo'       => 'Number',
      'fec_emis'    => 'Text',
      'fec_venc'    => 'Text',
      'co_cli'      => 'ForeignKey',
      'co_ven'      => 'ForeignKey',
      'co_tran'     => 'ForeignKey',
      'dir_ent'     => 'Text',
      'forma_pag'   => 'ForeignKey',
      'tot_bruto'   => 'Number',
      'tot_neto'    => 'Number',
      'glob_desc'   => 'Number',
      'tot_reca'    => 'Number',
      'porc_gdesc'  => 'Text',
      'porc_reca'   => 'Text',
      'total_uc'    => 'Number',
      'total_cp'    => 'Number',
      'tot_flete'   => 'Number',
      'monto_dev'   => 'Number',
      'totklu'      => 'Number',
      'anulada'     => 'Boolean',
      'impresa'     => 'Boolean',
      'iva'         => 'Number',
      'iva_dev'     => 'Number',
      'numcom'      => 'Number',
      'tasa'        => 'Number',
      'dis_cen'     => 'Text',
      'vuelto'      => 'Number',
      'seriales'    => 'Number',
      'tasag'       => 'Number',
      'tasag10'     => 'Number',
      'tasag20'     => 'Number',
      'ID'          => 'Number',
    );
  }
}
