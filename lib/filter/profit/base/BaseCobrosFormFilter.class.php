<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Cobros filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseCobrosFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'recibo'     => new sfWidgetFormFilterInput(),
      'co_cli'     => new sfWidgetFormPropelChoice(array('model' => 'Clientes', 'add_empty' => true)),
      'co_ven'     => new sfWidgetFormPropelChoice(array('model' => 'Vendedor', 'add_empty' => true)),
      'fec_cob'    => new sfWidgetFormFilterInput(),
      'anulado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'monto'      => new sfWidgetFormFilterInput(),
      'dppago'     => new sfWidgetFormFilterInput(),
      'mont_ncr'   => new sfWidgetFormFilterInput(),
      'ncr'        => new sfWidgetFormFilterInput(),
      'tcomi_porc' => new sfWidgetFormFilterInput(),
      'tcomi_line' => new sfWidgetFormFilterInput(),
      'tcomi_art'  => new sfWidgetFormFilterInput(),
      'tcomi_conc' => new sfWidgetFormFilterInput(),
      'feccom'     => new sfWidgetFormFilterInput(),
      'tasa'       => new sfWidgetFormFilterInput(),
      'moneda'     => new sfWidgetFormPropelChoice(array('model' => 'Moneda', 'add_empty' => true)),
      'numcom'     => new sfWidgetFormFilterInput(),
      'dis_cen'    => new sfWidgetFormFilterInput(),
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
      'recargo'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'adel_num'   => new sfWidgetFormFilterInput(),
      'revisado'   => new sfWidgetFormFilterInput(),
      'trasnfe'    => new sfWidgetFormFilterInput(),
      'co_sucu'    => new sfWidgetFormPropelChoice(array('model' => 'Almacen', 'add_empty' => true)),
      'rowguid'    => new sfWidgetFormFilterInput(),
      'descrip'    => new sfWidgetFormFilterInput(),
      'num_dev'    => new sfWidgetFormFilterInput(),
      'devdinero'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'num_turno'  => new sfWidgetFormFilterInput(),
      'aux01'      => new sfWidgetFormFilterInput(),
      'aux02'      => new sfWidgetFormFilterInput(),
      'origen'     => new sfWidgetFormFilterInput(),
      'origen_d'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'recibo'     => new sfValidatorPass(array('required' => false)),
      'co_cli'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Clientes', 'column' => 'co_cli')),
      'co_ven'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Vendedor', 'column' => 'co_ven')),
      'fec_cob'    => new sfValidatorPass(array('required' => false)),
      'anulado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'monto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dppago'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mont_ncr'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ncr'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tcomi_porc' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tcomi_line' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tcomi_art'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tcomi_conc' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'feccom'     => new sfValidatorPass(array('required' => false)),
      'tasa'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'moneda'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Moneda', 'column' => 'co_mone')),
      'numcom'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
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
      'recargo'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'adel_num'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'co_sucu'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Almacen', 'column' => 'co_alma')),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'num_dev'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'devdinero'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'num_turno'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
      'origen'     => new sfValidatorPass(array('required' => false)),
      'origen_d'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cobros_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cobros';
  }

  public function getFields()
  {
    return array(
      'cob_num'    => 'Number',
      'recibo'     => 'Text',
      'co_cli'     => 'ForeignKey',
      'co_ven'     => 'ForeignKey',
      'fec_cob'    => 'Text',
      'anulado'    => 'Boolean',
      'monto'      => 'Number',
      'dppago'     => 'Number',
      'mont_ncr'   => 'Number',
      'ncr'        => 'Number',
      'tcomi_porc' => 'Number',
      'tcomi_line' => 'Number',
      'tcomi_art'  => 'Number',
      'tcomi_conc' => 'Number',
      'feccom'     => 'Text',
      'tasa'       => 'Number',
      'moneda'     => 'ForeignKey',
      'numcom'     => 'Number',
      'dis_cen'    => 'Text',
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
      'recargo'    => 'Boolean',
      'adel_num'   => 'Number',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'co_sucu'    => 'ForeignKey',
      'rowguid'    => 'Text',
      'descrip'    => 'Text',
      'num_dev'    => 'Number',
      'devdinero'  => 'Boolean',
      'num_turno'  => 'Number',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
      'origen'     => 'Text',
      'origen_d'   => 'Text',
    );
  }
}
