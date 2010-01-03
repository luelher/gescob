<?php

class Outbox extends BaseOutbox
{

  protected $enviar = true;

  public function getCodCli()
  {
    $c = new Criteria();
    $c->add(ClientesPeer::CO_CLI,$this->cod_cli);
    $cliente = ClientesPeer::doSelectOne($c);
    if($cliente) return $cliente->getCoCli();
    else return 'SIN COD. CLI.';

  }

  public function getCliDes()
  {
    $c = new Criteria();
    $c->add(ClientesPeer::CO_CLI,$this->cod_cli);
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

}
