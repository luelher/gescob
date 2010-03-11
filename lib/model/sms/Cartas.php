<?php

class Cartas extends BaseCartas
{
  protected $enviar = true;
  protected $pago = null;
  
  public function getEnviar()
  {
    return $this->enviar;
  }

  public function setEnviar($val)
  {
    $this->enviar = $val;
  }

  public function getNomCli()
  {
    $c = new Criteria();
    $c->add(ClientesPeer::CO_CLI,$this->co_cli);

    $clientes = ClientesPeer::doSelectOne($c);

    if($clientes) return $clientes->getCliDes();
    else return C::VACIO;
  }

  public function getFecPago() {

    if(!$this->pago) $this->pago = RengCobPeer::getCobranza($this->co_cli, $this->getEntregado('d/m/Y') , date('d/m/Y'));

    if($this->pago) {
      $cobro = $this->pago->getCobros();
      if($cobro) return $cobro->getFecCob();
      else return 'Sin Cancelar';
    }else return 'Sin Cancelar';

  }

  public function getCanPago() {

    if(!$this->pago) $this->pago = RengCobPeer::getCobranza($this->co_cli, $this->getEntregado('d/m/Y') , date('d/m/Y'));

    if($this->pago) {
      $cobro = $this->pago->getCobros();
      if($cobro) return $cobro->getMonto();
      else return 'Sin Cancelar';
    }else return 'Sin Cancelar';

  }

  public function getEntregado($format = 'Y-m-d H:i:s'){
    if($format=='Y-m-d H:i:s')
      return parent::getEntregado('d-m-Y');
    else return parent::getEntregado($format);
  }

  public function getVendedor()
  {
    $c = new Criteria();
    $c->add(ZonaPeer::CO_ZON,$this->co_zon);

    $zona = ZonaPeer::doSelectOne($c);
    if($zona) return $zona->getZonDes();
    return C::VACIO;
  }

}
