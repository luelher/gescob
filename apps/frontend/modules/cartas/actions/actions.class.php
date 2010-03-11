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
    $this->error = false;
    $this->insertarcarta = new insertarCartasForm();

    $cartas = $request->getParameter('cartas');

    $this->insertarcarta->bind($cartas);

    if ($this->insertarcarta->isValid()){
      $this->zona = $cartas['zona'];
      $this->cedula = $cartas['cedula'];
      $this->fecha_entrega = $cartas['fecha_entrega'];

      $fecha = split('/', $this->fecha_entrega) ;

      $c = new Criteria();
      $c->add(ClientesPeer::CO_CLI,$this->cedula);

      $cliente = ClientesPeer::doSelectOne($c);
      if(!$cliente){
        $this->mensaje='Cliente no existe ('.$this->cedula.')';
        $this->error = true;
      }else{
        $c = new Criteria();
        $c->add(CartasPeer::CO_CLI,$this->cedula);
        $c->add(CartasPeer::ENTREGADO,$fecha[2]-$fecha[1]-$fecha[0]);

        $carta = CartasPeer::doSelectOne($c);
        if($carta) {
          $this->mensaje='ERROR: Carta ya entregada al cliente ('.$this->cedula.') para la fecha ('.$this->fecha_entrega.')';
          $this->error = true;
        }else{
          $carta = new Cartas();
          $carta->setCoCli($this->cedula);
          $carta->setCoZon($this->zona);
          $carta->setEntregado("$fecha[2]-$fecha[1]-$fecha[0]");

          $carta->save();
          $this->mensaje='Carta entregada al cliente ('.$this->cedula.') en fecha ('.$this->fecha_entrega.')';
        }
      }

    }
    else{
      $errores = $this->insertarcarta->getErrorSchema()->getErrors();
      foreach ($errores as $name => $error){
        $this->mensaje=" (Error -> $name : $error) ";
      }
      $this->error = true;
      
    }

  }
}
