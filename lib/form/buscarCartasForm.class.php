<?php

class buscarCartasForm extends sfForm
{
  public function configure()
  {
    $this->setWidgetSchema(new sfWidgetFormSchema(array(
      'zona'  => new sfWidgetFormSelect(array('choices' => ZonaPeer::LasZonas(false))) ,
      'fecha_desde'  => new sfWidgetFormInput(array(),array('onfocus' => 'Calendar.setup({trigger : "fecha_desde", inputField : "fecha_desde", ifFormat : "%d/%m/%Y"});','size' => 10)) ,
      'fecha_hasta'   => new sfWidgetFormInput(array(),array('onfocus' => 'Calendar.setup({trigger : "fecha_hasta", inputField : "fecha_hasta", ifFormat : "%d/%m/%Y"});','size' => 10)),
    )));

    //$this->setDefault('fecha_desde', H::AddDaysDate(date('d/m/Y'), -7));
    //$this->setDefault('fecha_hasta', date('d/m/Y'));

    $this->widgetSchema->setFormFormatterName('list');

  }
}

?>
