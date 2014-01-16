<?php

class buscarFrecuenciaPagoForm extends sfForm
{
  public function configure()
  {
    $this->setWidgetSchema(new sfWidgetFormSchema(array(
      'dias_desde'  => new sfWidgetFormInput(array(),array('size' => 10)) ,
      'dias_hasta'  => new sfWidgetFormInput(array(),array('size' => 10)),
      'fecha_hasta' => new sfWidgetFormInput(array(),array('onfocus' => 'Calendar.setup({trigger : "fecha_hasta", inputField : "fecha_hasta", ifFormat : "%d/%m/%Y"});','size' => 10)),
      'cedula'  => new sfWidgetFormInput(array(),array('size' => 10)) ,
    )));

    $this->setDefault('dias_desde', 0);
    $this->setDefault('dias_hasta', 30);
    $this->setDefault('fecha_hasta', date('d/m/Y'));

    $this->widgetSchema->setFormFormatterName('list');

    $this->setValidators(array(
      'dias_desde'  => new sfValidatorNumber(array('required' => true, 'max' => 1000, 'min' => 0)),
      'dias_hasta'  => new sfValidatorNumber(array('required' => true, 'max' => 1000, 'min' => 0)),
      'fecha_hasta'  => new sfValidatorDate(array('required' => true)),
    ));

  }
}

?>
