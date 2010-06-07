<?php

class Outbox extends BaseOutbox
{

  protected $enviar = true;

  public function setNumber($val)
  {
    if(strpos($val,'+58')) $val = '+58'.$val;
    return parent::setNumber($val);
  }

  public function getCodCli()
  {
    $c = new Criteria();
    $c->add(ClientesPeer::CO_CLI,$this->co_cli);
    $cliente = ClientesPeer::doSelectOne($c);
    if($cliente) return $cliente->getCoCli();
    else return 'SIN COD. CLI.';

  }

  public function getCliDes()
  {
    $c = new Criteria();
    $c->add(ClientesPeer::CO_CLI,$this->co_cli);
    $cliente = ClientesPeer::doSelectOne($c);
    if($cliente) return $cliente->getCliDes();
    else return 'SIN NOM. CLI.';

  }

  public function getEnviar()
  {
    return $this->enviar;
  }

  public function setEnviar($val)
  {
    $this->enviar = $val;
  }

  public function getInsertdate($format = 'd-m-Y')
  {
    return parent::getInsertdate($format);
  }

  public function getProcessedDate($format = 'd-m-Y')
  {
    return parent::getProcessedDate($format);
  }

  public function getProcesado()
  {
    if($this->processed) return 'Procesado';
    else return 'Por Procesar';
  }

  public function getVencimiento()
  {
    return $this->getFecVenc('d-m-Y');
  }

}
