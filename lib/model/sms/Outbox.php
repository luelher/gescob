<?php

class Outbox extends BaseOutbox
{
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
}
