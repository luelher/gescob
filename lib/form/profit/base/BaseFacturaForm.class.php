<?php

/**
 * Factura form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseFacturaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'fact_num'    => new sfWidgetFormInputHidden(),
      'contrib'     => new sfWidgetFormInputCheckbox(),
      'nombre'      => new sfWidgetFormInput(),
      'rif'         => new sfWidgetFormInput(),
      'nit'         => new sfWidgetFormInput(),
      'num_control' => new sfWidgetFormInput(),
      'status'      => new sfWidgetFormInput(),
      'comentario'  => new sfWidgetFormTextarea(),
      'descrip'     => new sfWidgetFormInput(),
      'saldo'       => new sfWidgetFormInput(),
      'fec_emis'    => new sfWidgetFormInput(),
      'fec_venc'    => new sfWidgetFormInput(),
      'co_cli'      => new sfWidgetFormPropelChoice(array('model' => 'Clientes', 'add_empty' => false)),
      'co_ven'      => new sfWidgetFormPropelChoice(array('model' => 'Vendedor', 'add_empty' => false)),
      'co_tran'     => new sfWidgetFormPropelChoice(array('model' => 'Transpor', 'add_empty' => false)),
      'dir_ent'     => new sfWidgetFormTextarea(),
      'forma_pag'   => new sfWidgetFormPropelChoice(array('model' => 'Condicio', 'add_empty' => false)),
      'tot_bruto'   => new sfWidgetFormInput(),
      'tot_neto'    => new sfWidgetFormInput(),
      'glob_desc'   => new sfWidgetFormInput(),
      'tot_reca'    => new sfWidgetFormInput(),
      'porc_gdesc'  => new sfWidgetFormInput(),
      'porc_reca'   => new sfWidgetFormInput(),
      'total_uc'    => new sfWidgetFormInput(),
      'total_cp'    => new sfWidgetFormInput(),
      'tot_flete'   => new sfWidgetFormInput(),
      'monto_dev'   => new sfWidgetFormInput(),
      'totklu'      => new sfWidgetFormInput(),
      'anulada'     => new sfWidgetFormInputCheckbox(),
      'impresa'     => new sfWidgetFormInputCheckbox(),
      'iva'         => new sfWidgetFormInput(),
      'iva_dev'     => new sfWidgetFormInput(),
      'numcom'      => new sfWidgetFormInput(),
      'tasa'        => new sfWidgetFormInput(),
      'dis_cen'     => new sfWidgetFormTextarea(),
      'vuelto'      => new sfWidgetFormInput(),
      'seriales'    => new sfWidgetFormInput(),
      'tasag'       => new sfWidgetFormInput(),
      'tasag10'     => new sfWidgetFormInput(),
      'tasag20'     => new sfWidgetFormInput(),
      'ID'          => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'fact_num'    => new sfValidatorPropelChoice(array('model' => 'Factura', 'column' => 'fact_num', 'required' => false)),
      'contrib'     => new sfValidatorBoolean(),
      'nombre'      => new sfValidatorString(array('max_length' => 60)),
      'rif'         => new sfValidatorString(array('max_length' => 18)),
      'nit'         => new sfValidatorString(array('max_length' => 18)),
      'num_control' => new sfValidatorInteger(),
      'status'      => new sfValidatorString(array('max_length' => 1)),
      'comentario'  => new sfValidatorString(array('max_length' => 2147483647)),
      'descrip'     => new sfValidatorString(array('max_length' => 60)),
      'saldo'       => new sfValidatorNumber(),
      'fec_emis'    => new sfValidatorString(array('max_length' => 255)),
      'fec_venc'    => new sfValidatorString(array('max_length' => 255)),
      'co_cli'      => new sfValidatorPropelChoice(array('model' => 'Clientes', 'column' => 'co_cli')),
      'co_ven'      => new sfValidatorPropelChoice(array('model' => 'Vendedor', 'column' => 'co_ven')),
      'co_tran'     => new sfValidatorPropelChoice(array('model' => 'Transpor', 'column' => 'co_tran')),
      'dir_ent'     => new sfValidatorString(array('max_length' => 2147483647)),
      'forma_pag'   => new sfValidatorPropelChoice(array('model' => 'Condicio', 'column' => 'co_cond')),
      'tot_bruto'   => new sfValidatorNumber(),
      'tot_neto'    => new sfValidatorNumber(),
      'glob_desc'   => new sfValidatorNumber(),
      'tot_reca'    => new sfValidatorNumber(),
      'porc_gdesc'  => new sfValidatorString(array('max_length' => 15)),
      'porc_reca'   => new sfValidatorString(array('max_length' => 15)),
      'total_uc'    => new sfValidatorNumber(),
      'total_cp'    => new sfValidatorNumber(),
      'tot_flete'   => new sfValidatorNumber(),
      'monto_dev'   => new sfValidatorNumber(),
      'totklu'      => new sfValidatorNumber(),
      'anulada'     => new sfValidatorBoolean(),
      'impresa'     => new sfValidatorBoolean(),
      'iva'         => new sfValidatorNumber(),
      'iva_dev'     => new sfValidatorNumber(),
      'numcom'      => new sfValidatorInteger(),
      'tasa'        => new sfValidatorNumber(),
      'dis_cen'     => new sfValidatorString(array('max_length' => 2147483647)),
      'vuelto'      => new sfValidatorNumber(),
      'seriales'    => new sfValidatorInteger(),
      'tasag'       => new sfValidatorNumber(),
      'tasag10'     => new sfValidatorNumber(),
      'tasag20'     => new sfValidatorNumber(),
      'ID'          => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('factura[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Factura';
  }


}
