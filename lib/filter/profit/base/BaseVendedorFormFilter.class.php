<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Vendedor filter form base class.
 *
 * @package    sf_sandbox
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseVendedorFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo'       => new sfWidgetFormFilterInput(),
      'ven_des'    => new sfWidgetFormFilterInput(),
      'dis_cen'    => new sfWidgetFormFilterInput(),
      'cedula'     => new sfWidgetFormFilterInput(),
      'direc1'     => new sfWidgetFormFilterInput(),
      'direc2'     => new sfWidgetFormFilterInput(),
      'telefonos'  => new sfWidgetFormFilterInput(),
      'fecha_reg'  => new sfWidgetFormFilterInput(),
      'condic'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'comision'   => new sfWidgetFormFilterInput(),
      'comen'      => new sfWidgetFormFilterInput(),
      'fun_cob'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fun_ven'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'comisionv'  => new sfWidgetFormFilterInput(),
      'fac_ult_ve' => new sfWidgetFormFilterInput(),
      'fec_ult_ve' => new sfWidgetFormFilterInput(),
      'net_ult_ve' => new sfWidgetFormFilterInput(),
      'cli_ult_ve' => new sfWidgetFormFilterInput(),
      'cta_contab' => new sfWidgetFormFilterInput(),
      'campo1'     => new sfWidgetFormFilterInput(),
      'campo2'     => new sfWidgetFormFilterInput(),
      'campo3'     => new sfWidgetFormFilterInput(),
      'campo4'     => new sfWidgetFormFilterInput(),
      'campo5'     => new sfWidgetFormFilterInput(),
      'campo6'     => new sfWidgetFormFilterInput(),
      'campo7'     => new sfWidgetFormFilterInput(),
      'campo8'     => new sfWidgetFormFilterInput(),
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
      'login'      => new sfWidgetFormFilterInput(),
      'password'   => new sfWidgetFormFilterInput(),
      'email'      => new sfWidgetFormFilterInput(),
      'PSW_M'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tipo'       => new sfValidatorPass(array('required' => false)),
      'ven_des'    => new sfValidatorPass(array('required' => false)),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'cedula'     => new sfValidatorPass(array('required' => false)),
      'direc1'     => new sfValidatorPass(array('required' => false)),
      'direc2'     => new sfValidatorPass(array('required' => false)),
      'telefonos'  => new sfValidatorPass(array('required' => false)),
      'fecha_reg'  => new sfValidatorPass(array('required' => false)),
      'condic'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'comision'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comen'      => new sfValidatorPass(array('required' => false)),
      'fun_cob'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fun_ven'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'comisionv'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fac_ult_ve' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fec_ult_ve' => new sfValidatorPass(array('required' => false)),
      'net_ult_ve' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cli_ult_ve' => new sfValidatorPass(array('required' => false)),
      'cta_contab' => new sfValidatorPass(array('required' => false)),
      'campo1'     => new sfValidatorPass(array('required' => false)),
      'campo2'     => new sfValidatorPass(array('required' => false)),
      'campo3'     => new sfValidatorPass(array('required' => false)),
      'campo4'     => new sfValidatorPass(array('required' => false)),
      'campo5'     => new sfValidatorPass(array('required' => false)),
      'campo6'     => new sfValidatorPass(array('required' => false)),
      'campo7'     => new sfValidatorPass(array('required' => false)),
      'campo8'     => new sfValidatorPass(array('required' => false)),
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
      'login'      => new sfValidatorPass(array('required' => false)),
      'password'   => new sfValidatorPass(array('required' => false)),
      'email'      => new sfValidatorPass(array('required' => false)),
      'PSW_M'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('vendedor_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendedor';
  }

  public function getFields()
  {
    return array(
      'co_ven'     => 'Text',
      'tipo'       => 'Text',
      'ven_des'    => 'Text',
      'dis_cen'    => 'Text',
      'cedula'     => 'Text',
      'direc1'     => 'Text',
      'direc2'     => 'Text',
      'telefonos'  => 'Text',
      'fecha_reg'  => 'Text',
      'condic'     => 'Boolean',
      'comision'   => 'Number',
      'comen'      => 'Text',
      'fun_cob'    => 'Boolean',
      'fun_ven'    => 'Boolean',
      'comisionv'  => 'Number',
      'fac_ult_ve' => 'Number',
      'fec_ult_ve' => 'Text',
      'net_ult_ve' => 'Number',
      'cli_ult_ve' => 'Text',
      'cta_contab' => 'Text',
      'campo1'     => 'Text',
      'campo2'     => 'Text',
      'campo3'     => 'Text',
      'campo4'     => 'Text',
      'campo5'     => 'Text',
      'campo6'     => 'Text',
      'campo7'     => 'Text',
      'campo8'     => 'Text',
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
      'login'      => 'Text',
      'password'   => 'Text',
      'email'      => 'Text',
      'PSW_M'      => 'Text',
    );
  }
}
