<?php

/**
 * Tabulado form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseTabuladoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo'       => new sfWidgetFormInputHidden(),
      'descripcio' => new sfWidgetFormInput(),
      'porc_vent'  => new sfWidgetFormInput(),
      'porc_comp'  => new sfWidgetFormInput(),
      'porc_cxs'   => new sfWidgetFormInput(),
      'porc_otro'  => new sfWidgetFormInput(),
      'revisado'   => new sfWidgetFormInput(),
      'trasnfe'    => new sfWidgetFormInput(),
      'rowguid'    => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'tipo'       => new sfValidatorPropelChoice(array('model' => 'Tabulado', 'column' => 'tipo', 'required' => false)),
      'descripcio' => new sfValidatorString(array('max_length' => 60)),
      'porc_vent'  => new sfValidatorNumber(),
      'porc_comp'  => new sfValidatorNumber(),
      'porc_cxs'   => new sfValidatorNumber(),
      'porc_otro'  => new sfValidatorNumber(),
      'revisado'   => new sfValidatorString(array('max_length' => 1)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1)),
      'rowguid'    => new sfValidatorString(array('max_length' => 16)),
    ));

    $this->widgetSchema->setNameFormat('tabulado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tabulado';
  }


}
