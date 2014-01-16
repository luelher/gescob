<?php

/**
 * RengTip form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseRengTipForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'cob_num'    => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'tip_cob'    => new sfWidgetFormInput(),
      'movi'       => new sfWidgetFormInput(),
      'num_doc'    => new sfWidgetFormInput(),
      'mont_doc'   => new sfWidgetFormInput(),
      'mont_tmp'   => new sfWidgetFormInput(),
      'moneda'     => new sfWidgetFormInput(),
      'banco'      => new sfWidgetFormInput(),
      'cod_caja'   => new sfWidgetFormInput(),
      'des_caja'   => new sfWidgetFormInput(),
      'fec_cheq'   => new sfWidgetFormInput(),
      'nombre_ban' => new sfWidgetFormInput(),
      'numero'     => new sfWidgetFormInput(),
      'devuelto'   => new sfWidgetFormInputCheckbox(),
      'rowguid'    => new sfWidgetFormInput(),
      'operador'   => new sfWidgetFormInput(),
      'clave'      => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'cob_num'    => new sfValidatorPropelChoice(array('model' => 'RengTip', 'column' => 'cob_num', 'required' => false)),
      'reng_num'   => new sfValidatorPropelChoice(array('model' => 'RengTip', 'column' => 'reng_num', 'required' => false)),
      'tip_cob'    => new sfValidatorString(array('max_length' => 4)),
      'movi'       => new sfValidatorInteger(),
      'num_doc'    => new sfValidatorString(array('max_length' => 20)),
      'mont_doc'   => new sfValidatorNumber(),
      'mont_tmp'   => new sfValidatorNumber(),
      'moneda'     => new sfValidatorString(array('max_length' => 8)),
      'banco'      => new sfValidatorString(array('max_length' => 6)),
      'cod_caja'   => new sfValidatorString(array('max_length' => 6)),
      'des_caja'   => new sfValidatorString(array('max_length' => 20)),
      'fec_cheq'   => new sfValidatorString(array('max_length' => 255)),
      'nombre_ban' => new sfValidatorString(array('max_length' => 15)),
      'numero'     => new sfValidatorString(array('max_length' => 20)),
      'devuelto'   => new sfValidatorBoolean(),
      'rowguid'    => new sfValidatorString(array('max_length' => 16)),
      'operador'   => new sfValidatorString(array('max_length' => 4)),
      'clave'      => new sfValidatorString(array('max_length' => 6)),
    ));

    $this->widgetSchema->setNameFormat('reng_tip[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengTip';
  }


}
