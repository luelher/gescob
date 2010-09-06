<?php

class Outbox extends BaseOutbox
{

  protected $enviar = true;
  protected $pago = null;
  protected $cliente = null;

  public function setNumber($val)
  {
    if(strpos($val,'+58')) $val = '+58'.$val;
    return parent::setNumber($val);
  }

  public function getCodCli()
  {
    if(!$this->cliente){
      $c = new Criteria();
      $c->add(ClientesPeer::CO_CLI,$this->co_cli);
      $this->cliente = ClientesPeer::doSelectOne($c);
    }
    if($this->cliente) return $this->cliente->getCoCli();
    else return 'SIN COD. CLI.';

  }

  public function getCliDes()
  {
    if(!$this->cliente){
      $c = new Criteria();
      $c->add(ClientesPeer::CO_CLI,$this->co_cli);
      $this->cliente = ClientesPeer::doSelectOne($c);
    }
    if($this->cliente) return $this->cliente->getCliDes();
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

  public function getFecPago() {

    if(!$this->pago) $this->pago = RengCobPeer::getCobranza($this->co_cli, $this->getProcessedDate('d/m/Y') , date('d/m/Y'));

    if($this->pago) {
      $cobro = $this->pago->getCobros();
      if($cobro) return $cobro->getFecCob();
      else return 'Sin Cancelar';
    }else return 'Sin Cancelar';

  }

  public function getCanPago() {

    if(!$this->pago) $this->pago = RengCobPeer::getCobranza($this->co_cli, $this->getProcessedDate('d/m/Y') , date('d/m/Y'));

    if($this->pago) {
      $cobro = $this->pago->getCobros();
      if($cobro) return $cobro->getMonto();
      else return 'Sin Cancelar';
    }else return 'Sin Cancelar';

  }


}
