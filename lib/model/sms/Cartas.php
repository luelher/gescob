<?php

class Cartas extends BaseCartas
{
  protected $enviar = true;
  protected $pago = null;
  protected $pago_desde = null;
  protected $pago_hasta = null;
  
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

    if(!$this->pago){
      if($this->pago_desde and $this->pago_hasta){
        $this->pago = RengCobPeer::getCobranza($this->co_cli, $this->pago_desde , $this->pago_hasta);  
      }else
      {
        $this->pago = RengCobPeer::getCobranza($this->co_cli, $this->getEntregado('d/m/Y') , date('d/m/Y'));  
      }      
    }

    $fecha_cobro = null;
    if($this->pago) {
      foreach ($this->pago as $pago) {
        $cobro = $pago->getCobros();
        if($cobro) $fecha_cobro = $cobro->getFecCob();
      }
      if($fecha_cobro) return $fecha_cobro;
      else return 'Sin Cancelar';
    }else return 'Sin Cancelar';

  }

  public function getCanPago() {

    if(!$this->pago){
      if($this->pago_desde and $this->pago_hasta){
        $this->pago = RengCobPeer::getCobranza($this->co_cli, $this->pago_desde , $this->pago_hasta);  
      }else
      {
        $this->pago = RengCobPeer::getCobranza($this->co_cli, $this->getEntregado('d/m/Y') , date('d/m/Y'));  
      }      
    }

    $total_cobros = 0.0;
    if($this->pago) {
      foreach ($this->pago as $pago) {
        $cobro = $pago->getCobros();
        if($cobro) $total_cobros += $cobro->getMonto();
      }
      if($total_cobros > 0.0) return $total_cobros;
      else return 'Sin Cancelar';
    }else return 'Sin Cancelar';

  }

  public function getContaPagos() {

    if(!$this->pago){
      if($this->pago_desde and $this->pago_hasta){
        $this->pago = RengCobPeer::getCobranza($this->co_cli, $this->pago_desde , $this->pago_hasta);  
      }else
      {
        $this->pago = RengCobPeer::getCobranza($this->co_cli, $this->getEntregado('d/m/Y') , date('d/m/Y'));  
      }      
    }

    $total_cobros = 0;
    if($this->pago) {
      return count($this->pago);
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

  public function setPagoDesde($pago_desde)
  {
    $this->pago_desde = $pago_desde;
  }
  public function setPagoHasta($pago_hasta)
  {
    $this->pago_hasta = $pago_hasta;
  }

}
