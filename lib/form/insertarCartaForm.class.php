<?php

class insertarCartasForm extends sfForm
{
  public function configure()
  {
    $this->setWidgetSchema(new sfWidgetFormSchema(array(
      'fecha_entrega'   => new sfWidgetFormInput(array(),array('onfocus' => 'Calendar.setup({trigger : "fecha_entrega", inputField : "fecha_entrega", ifFormat : "%d/%m/%Y"});','size' => 10)),
      'cedula'  => new sfWidgetFormInput(array(),array()) ,
    )));

    //$this->setDefault('fecha_desde', H::AddDaysDate(date('d/m/Y'), -7));
    //$this->setDefault('fecha_hasta', date('d/m/Y'));

    $this->widgetSchema->setFormFormatterName('list');

  }
}

?>
