<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Tabulado filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseTabuladoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcio' => new sfWidgetFormFilterInput(),
      'porc_vent'  => new sfWidgetFormFilterInput(),
      'porc_comp'  => new sfWidgetFormFilterInput(),
      'porc_cxs'   => new sfWidgetFormFilterInput(),
      'porc_otro'  => new sfWidgetFormFilterInput(),
      'revisado'   => new sfWidgetFormFilterInput(),
      'trasnfe'    => new sfWidgetFormFilterInput(),
      'rowguid'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'descripcio' => new sfValidatorPass(array('required' => false)),
      'porc_vent'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_comp'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_cxs'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_otro'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tabulado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tabulado';
  }

  public function getFields()
  {
    return array(
      'tipo'       => 'Text',
      'descripcio' => 'Text',
      'porc_vent'  => 'Number',
      'porc_comp'  => 'Number',
      'porc_cxs'   => 'Number',
      'porc_otro'  => 'Number',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'rowguid'    => 'Text',
    );
  }
}
