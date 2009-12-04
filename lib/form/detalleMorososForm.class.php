<?php

/**
 * Description of detalleMorososForm
 *
 * @author luelher
 */
class detalleMorososForm extends sfForm {

  public function configure($options = array(), $attributes = array())
  {
    $per = $this->getOption('per');
    $this->setWidgetSchema(new sfWidgetFormSchema(array(
      'grid'  => new sfWidgetFormGrid(array('config' => $this->getOption('config'),'per' => $per)) ,
      'cantidad_de_clientes'   => new sfWidgetFormInput(array(),array('readonly'=>true, 'value' => count($per))),
    )));

    $this->widgetSchema->setFormFormatterName('list');
  }

}
?>
