<?php

class insertarCartasForm extends sfForm
{
  public function configure()
  {
    $this->setWidgetSchema(new sfWidgetFormSchema(array(
      'zona'  => new sfWidgetFormSelect(array('choices' => ZonaPeer::LasZonas()),array('selected' => '')) ,
      'fecha_entrega'   => new sfWidgetFormInput(array(),array('onfocus' => 'Calendar.setup({trigger : "cartas_fecha_entrega", inputField : "cartas_fecha_entrega", ifFormat : "%d/%m/%Y"});','size' => 10)),
      'cedula'  => new sfWidgetFormInput(array(),array()) ,

    )));

    //$this->setDefault('fecha_desde', H::AddDaysDate(date('d/m/Y'), -7));
    //$this->setDefault('fecha_hasta', date('d/m/Y'));

    $this->widgetSchema->setFormFormatterName('list');

    $this->widgetSchema->setNameFormat('cartas[%s]');

    $this->setValidators(array(
      'cedula'  => new sfValidatorNumber(array('required' => true, 'max' => 99999999, 'min' => 1000)),
      'fecha_entrega'  => new sfValidatorDate(array('date_format' => '/[0-9]{2}\/[0-9]{2}\/[0-9]{4}/')),
      'zona' => new sfValidatorChoice(array('required' => true, 'choices' => array_keys(ZonaPeer::LasZonas()))),
    ));

  }
}

?>
