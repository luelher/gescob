<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Inbox filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseInboxFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'number'     => new sfWidgetFormFilterInput(),
      'smsdate'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'insertdate' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'text'       => new sfWidgetFormFilterInput(),
      'phone'      => new sfWidgetFormFilterInput(),
      'processed'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'number'     => new sfValidatorPass(array('required' => false)),
      'smsdate'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'insertdate' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'text'       => new sfValidatorPass(array('required' => false)),
      'phone'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'processed'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('inbox_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Inbox';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'number'     => 'Text',
      'smsdate'    => 'Date',
      'insertdate' => 'Date',
      'text'       => 'Text',
      'phone'      => 'Number',
      'processed'  => 'Number',
    );
  }
}
