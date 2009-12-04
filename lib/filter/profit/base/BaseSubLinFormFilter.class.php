<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * SubLin filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseSubLinFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'subl_des'   => new sfWidgetFormFilterInput(),
      'campo1'     => new sfWidgetFormFilterInput(),
      'campo2'     => new sfWidgetFormFilterInput(),
      'campo3'     => new sfWidgetFormFilterInput(),
      'campo4'     => new sfWidgetFormFilterInput(),
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
      'co_imun'    => new sfWidgetFormFilterInput(),
      'co_reten'   => new sfWidgetFormFilterInput(),
      'i_subl_des' => new sfWidgetFormFilterInput(),
      'movil'      => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'subl_des'   => new sfValidatorPass(array('required' => false)),
      'campo1'     => new sfValidatorPass(array('required' => false)),
      'campo2'     => new sfValidatorPass(array('required' => false)),
      'campo3'     => new sfValidatorPass(array('required' => false)),
      'campo4'     => new sfValidatorPass(array('required' => false)),
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
      'co_imun'    => new sfValidatorPass(array('required' => false)),
      'co_reten'   => new sfValidatorPass(array('required' => false)),
      'i_subl_des' => new sfValidatorPass(array('required' => false)),
      'movil'      => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('sub_lin_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'SubLin';
  }

  public function getFields()
  {
    return array(
      'co_subl'    => 'Text',
      'subl_des'   => 'Text',
      'co_lin'     => 'ForeignKey',
      'campo1'     => 'Text',
      'campo2'     => 'Text',
      'campo3'     => 'Text',
      'campo4'     => 'Text',
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
      'co_imun'    => 'Text',
      'co_reten'   => 'Text',
      'i_subl_des' => 'Text',
      'movil'      => 'Boolean',
    );
  }
}
