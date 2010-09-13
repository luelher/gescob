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
      'resultado'  => new sfWidgetFormGrid(array('config' => $this->getOption('config'),'per' => $per)) ,
      'cantidad_de_clientes'   => new sfWidgetFormInput(array(),array('readonly'=>true, 'value' => count($per))),
      'total_pagado'   => new sfWidgetFormInput(array(),array('readonly'=>true, 'value' => '', 'name' => 'totalp')),
      'mensaje' => new sfWidgetFormTextarea(array(),array('rows' => '3', 'cols' => '60')),
    )));

    $this->widgetSchema->setFormFormatterName('list');

    $opciones = OpcionesPeer::doSelectOne(new Criteria());
    if($opciones){
      $this->setDefault('mensaje', $opciones->getMensaje());
    }
    
  }

}
?>
