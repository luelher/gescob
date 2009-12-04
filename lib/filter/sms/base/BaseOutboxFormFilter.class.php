<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Outbox filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseOutboxFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'number'         => new sfWidgetFormFilterInput(),
      'processed_date' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'insertdate'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'text'           => new sfWidgetFormFilterInput(),
      'phone'          => new sfWidgetFormFilterInput(),
      'processed'      => new sfWidgetFormFilterInput(),
      'error'          => new sfWidgetFormFilterInput(),
      'dreport'        => new sfWidgetFormFilterInput(),
      'not_before'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'not_after'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'number'         => new sfValidatorPass(array('required' => false)),
      'processed_date' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'insertdate'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'text'           => new sfValidatorPass(array('required' => false)),
      'phone'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'processed'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'error'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dreport'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'not_before'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'not_after'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('outbox_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Outbox';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'number'         => 'Text',
      'processed_date' => 'Date',
      'insertdate'     => 'Date',
      'text'           => 'Text',
      'phone'          => 'Number',
      'processed'      => 'Number',
      'error'          => 'Number',
      'dreport'        => 'Number',
      'not_before'     => 'Date',
      'not_after'      => 'Date',
    );
  }
}
