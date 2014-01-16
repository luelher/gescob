<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * LinArt filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseLinArtFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'lin_des'   => new sfWidgetFormFilterInput(),
      'dis_cen'   => new sfWidgetFormFilterInput(),
      'campo1'    => new sfWidgetFormFilterInput(),
      'campo2'    => new sfWidgetFormFilterInput(),
      'campo3'    => new sfWidgetFormFilterInput(),
      'campo4'    => new sfWidgetFormFilterInput(),
      'co_us_in'  => new sfWidgetFormFilterInput(),
      'fe_us_in'  => new sfWidgetFormFilterInput(),
      'co_us_mo'  => new sfWidgetFormFilterInput(),
      'fe_us_mo'  => new sfWidgetFormFilterInput(),
      'co_us_el'  => new sfWidgetFormFilterInput(),
      'fe_us_el'  => new sfWidgetFormFilterInput(),
      'revisado'  => new sfWidgetFormFilterInput(),
      'trasnfe'   => new sfWidgetFormFilterInput(),
      'co_sucu'   => new sfWidgetFormFilterInput(),
      'rowguid'   => new sfWidgetFormFilterInput(),
      'co_imun'   => new sfWidgetFormFilterInput(),
      'co_reten'  => new sfWidgetFormFilterInput(),
      'comi_lin'  => new sfWidgetFormFilterInput(),
      'comi_lin2' => new sfWidgetFormFilterInput(),
      'row_id'    => new sfWidgetFormFilterInput(),
      'va'        => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'i_lin_des' => new sfWidgetFormFilterInput(),
      'movil'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
    ));

    $this->setValidators(array(
      'lin_des'   => new sfValidatorPass(array('required' => false)),
      'dis_cen'   => new sfValidatorPass(array('required' => false)),
      'campo1'    => new sfValidatorPass(array('required' => false)),
      'campo2'    => new sfValidatorPass(array('required' => false)),
      'campo3'    => new sfValidatorPass(array('required' => false)),
      'campo4'    => new sfValidatorPass(array('required' => false)),
      'co_us_in'  => new sfValidatorPass(array('required' => false)),
      'fe_us_in'  => new sfValidatorPass(array('required' => false)),
      'co_us_mo'  => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'  => new sfValidatorPass(array('required' => false)),
      'co_us_el'  => new sfValidatorPass(array('required' => false)),
      'fe_us_el'  => new sfValidatorPass(array('required' => false)),
      'revisado'  => new sfValidatorPass(array('required' => false)),
      'trasnfe'   => new sfValidatorPass(array('required' => false)),
      'co_sucu'   => new sfValidatorPass(array('required' => false)),
      'rowguid'   => new sfValidatorPass(array('required' => false)),
      'co_imun'   => new sfValidatorPass(array('required' => false)),
      'co_reten'  => new sfValidatorPass(array('required' => false)),
      'comi_lin'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comi_lin2' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'row_id'    => new sfValidatorPass(array('required' => false)),
      'va'        => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'i_lin_des' => new sfValidatorPass(array('required' => false)),
      'movil'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
    ));

    $this->widgetSchema->setNameFormat('lin_art_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'LinArt';
  }

  public function getFields()
  {
    return array(
      'co_lin'    => 'Text',
      'lin_des'   => 'Text',
      'dis_cen'   => 'Text',
      'campo1'    => 'Text',
      'campo2'    => 'Text',
      'campo3'    => 'Text',
      'campo4'    => 'Text',
      'co_us_in'  => 'Text',
      'fe_us_in'  => 'Text',
      'co_us_mo'  => 'Text',
      'fe_us_mo'  => 'Text',
      'co_us_el'  => 'Text',
      'fe_us_el'  => 'Text',
      'revisado'  => 'Text',
      'trasnfe'   => 'Text',
      'co_sucu'   => 'Text',
      'rowguid'   => 'Text',
      'co_imun'   => 'Text',
      'co_reten'  => 'Text',
      'comi_lin'  => 'Number',
      'comi_lin2' => 'Number',
      'row_id'    => 'Text',
      'va'        => 'Boolean',
      'i_lin_des' => 'Text',
      'movil'     => 'Boolean',
    );
  }
}
