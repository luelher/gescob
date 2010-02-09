<?php

/**
 * cartas actions.
 *
 * @package    sf_sandbox
 * @subpackage cartas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class cartasActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $fecha = date('d/m/Y',strtotime(date('Y-m-d')));

    $this->insertarcarta = new insertarCartasForm(array('fecha_entrega' => $fecha));
  }

  public function executeInsertar(sfWebRequest $request)
  {
    $this->cedula = $this->getRequestParameter('cedula');
    $this->fecha_entrega = $this->getRequestParameter('fecha_entrega');

    $fecha = split('/', $this->fecha_entrega) ;
//print_r($fecha);
    $c = new Criteria();
    $c->add(ClientesPeer::CO_CLI,$this->cedula);

    $cliente = ClientesPeer::doSelectOne($c);
    if(!$cliente){
      $this->mensaje='Cliente no existe ('.$this->cedula.')';
    }else{
      $c = new Criteria();
      $c->add(CartasPeer::CO_CLI,$this->cedula);
      $c->add(CartasPeer::ENTREGADO,$fecha[2]-$fecha[1]-$fecha[0]);

      $carta = CartasPeer::doSelectOne($c);
      if($carta) {
        $this->mensaje='ERROR: Carta ya entregada al cliente ('.$this->cedula.') para la fecha ('.$this->fecha_entrega.')';
      }else{
        $carta = new Cartas();
        $carta->setCoCli($this->cedula);
        $carta->setEntregado($fecha[2]-$fecha[1]-$fecha[0]);
        $carta->save();
        $this->mensaje='Carta entregada al cliente ('.$this->cedula.') en fecha ('.$this->fecha_entrega.')';
      }
    }


  }
}
