<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * RengTip filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseRengTipFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tip_cob'    => new sfWidgetFormFilterInput(),
      'movi'       => new sfWidgetFormFilterInput(),
      'num_doc'    => new sfWidgetFormFilterInput(),
      'mont_doc'   => new sfWidgetFormFilterInput(),
      'mont_tmp'   => new sfWidgetFormFilterInput(),
      'moneda'     => new sfWidgetFormFilterInput(),
      'banco'      => new sfWidgetFormFilterInput(),
      'cod_caja'   => new sfWidgetFormFilterInput(),
      'des_caja'   => new sfWidgetFormFilterInput(),
      'fec_cheq'   => new sfWidgetFormFilterInput(),
      'nombre_ban' => new sfWidgetFormFilterInput(),
      'numero'     => new sfWidgetFormFilterInput(),
      'devuelto'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'rowguid'    => new sfWidgetFormFilterInput(),
      'operador'   => new sfWidgetFormFilterInput(),
      'clave'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tip_cob'    => new sfValidatorPass(array('required' => false)),
      'movi'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'num_doc'    => new sfValidatorPass(array('required' => false)),
      'mont_doc'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mont_tmp'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'moneda'     => new sfValidatorPass(array('required' => false)),
      'banco'      => new sfValidatorPass(array('required' => false)),
      'cod_caja'   => new sfValidatorPass(array('required' => false)),
      'des_caja'   => new sfValidatorPass(array('required' => false)),
      'fec_cheq'   => new sfValidatorPass(array('required' => false)),
      'nombre_ban' => new sfValidatorPass(array('required' => false)),
      'numero'     => new sfValidatorPass(array('required' => false)),
      'devuelto'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'operador'   => new sfValidatorPass(array('required' => false)),
      'clave'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_tip_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengTip';
  }

  public function getFields()
  {
    return array(
      'cob_num'    => 'Number',
      'reng_num'   => 'Number',
      'tip_cob'    => 'Text',
      'movi'       => 'Number',
      'num_doc'    => 'Text',
      'mont_doc'   => 'Number',
      'mont_tmp'   => 'Number',
      'moneda'     => 'Text',
      'banco'      => 'Text',
      'cod_caja'   => 'Text',
      'des_caja'   => 'Text',
      'fec_cheq'   => 'Text',
      'nombre_ban' => 'Text',
      'numero'     => 'Text',
      'devuelto'   => 'Boolean',
      'rowguid'    => 'Text',
      'operador'   => 'Text',
      'clave'      => 'Text',
    );
  }
}
