<?php

/**
 * Cobros form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseCobrosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cob_num'    => new sfWidgetFormInputHidden(),
      'recibo'     => new sfWidgetFormInput(),
      'co_cli'     => new sfWidgetFormPropelChoice(array('model' => 'Clientes', 'add_empty' => false)),
      'co_ven'     => new sfWidgetFormPropelChoice(array('model' => 'Vendedor', 'add_empty' => false)),
      'fec_cob'    => new sfWidgetFormInput(),
      'anulado'    => new sfWidgetFormInputCheckbox(),
      'monto'      => new sfWidgetFormInput(),
      'dppago'     => new sfWidgetFormInput(),
      'mont_ncr'   => new sfWidgetFormInput(),
      'ncr'        => new sfWidgetFormInput(),
      'tcomi_porc' => new sfWidgetFormInput(),
      'tcomi_line' => new sfWidgetFormInput(),
      'tcomi_art'  => new sfWidgetFormInput(),
      'tcomi_conc' => new sfWidgetFormInput(),
      'feccom'     => new sfWidgetFormInput(),
      'tasa'       => new sfWidgetFormInput(),
      'moneda'     => new sfWidgetFormPropelChoice(array('model' => 'Moneda', 'add_empty' => false)),
      'numcom'     => new sfWidgetFormInput(),
      'dis_cen'    => new sfWidgetFormTextarea(),
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
      'recargo'    => new sfWidgetFormInputCheckbox(),
      'adel_num'   => new sfWidgetFormInput(),
      'revisado'   => new sfWidgetFormInput(),
      'trasnfe'    => new sfWidgetFormInput(),
      'co_sucu'    => new sfWidgetFormPropelChoice(array('model' => 'Almacen', 'add_empty' => false)),
      'rowguid'    => new sfWidgetFormInput(),
      'descrip'    => new sfWidgetFormInput(),
      'num_dev'    => new sfWidgetFormInput(),
      'devdinero'  => new sfWidgetFormInputCheckbox(),
      'num_turno'  => new sfWidgetFormInput(),
      'aux01'      => new sfWidgetFormInput(),
      'aux02'      => new sfWidgetFormInput(),
      'origen'     => new sfWidgetFormInput(),
      'origen_d'   => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'cob_num'    => new sfValidatorPropelChoice(array('model' => 'Cobros', 'column' => 'cob_num', 'required' => false)),
      'recibo'     => new sfValidatorString(array('max_length' => 15)),
      'co_cli'     => new sfValidatorPropelChoice(array('model' => 'Clientes', 'column' => 'co_cli')),
      'co_ven'     => new sfValidatorPropelChoice(array('model' => 'Vendedor', 'column' => 'co_ven')),
      'fec_cob'    => new sfValidatorString(array('max_length' => 255)),
      'anulado'    => new sfValidatorBoolean(),
      'monto'      => new sfValidatorNumber(),
      'dppago'     => new sfValidatorNumber(),
      'mont_ncr'   => new sfValidatorNumber(),
      'ncr'        => new sfValidatorInteger(),
      'tcomi_porc' => new sfValidatorNumber(),
      'tcomi_line' => new sfValidatorNumber(),
      'tcomi_art'  => new sfValidatorNumber(),
      'tcomi_conc' => new sfValidatorNumber(),
      'feccom'     => new sfValidatorString(array('max_length' => 255)),
      'tasa'       => new sfValidatorNumber(),
      'moneda'     => new sfValidatorPropelChoice(array('model' => 'Moneda', 'column' => 'co_mone')),
      'numcom'     => new sfValidatorInteger(),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647)),
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
      'recargo'    => new sfValidatorBoolean(),
      'adel_num'   => new sfValidatorInteger(),
      'revisado'   => new sfValidatorString(array('max_length' => 1)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1)),
      'co_sucu'    => new sfValidatorPropelChoice(array('model' => 'Almacen', 'column' => 'co_alma')),
      'rowguid'    => new sfValidatorString(array('max_length' => 16)),
      'descrip'    => new sfValidatorString(array('max_length' => 60)),
      'num_dev'    => new sfValidatorInteger(),
      'devdinero'  => new sfValidatorBoolean(),
      'num_turno'  => new sfValidatorInteger(),
      'aux01'      => new sfValidatorNumber(),
      'aux02'      => new sfValidatorString(array('max_length' => 30)),
      'origen'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'origen_d'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cobros[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cobros';
  }


}
