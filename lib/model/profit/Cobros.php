<?php

class Cobros extends BaseCobros
{
  protected $documcc = null;
  protected $enviar = true;

  public function getMontCob()
  {
    $rengcob = $this->getRengCob();
    if($rengcob) return number_format($rengcob->getMontCob(),2);
    else 0.0;
  }

  public function getMonto()
  {
    return number_format($this->monto,2,',','');
  }

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
    $clientes = $this->getClientes();
    if($clientes) return $clientes->getCliDes();
    else return C::VACIO;
  }

  public function getFecVenc()
  {
    $rengcob = $this->getRengCob();
    if(!$this->documcc) $this->documcc = $rengcob->getDocumCc();
    if($this->documcc) return $this->documcc->getFecVenc('d-m-Y');
    else return C::VACIO;

  }

  public function getObserva()
  {
    $rengcob = $this->getRengCob();
    if(!$this->documcc) $this->documcc = $rengcob->getDocumCc();
    if($this->documcc) {
      if(trim($this->documcc->getObserva())!='') return $this->documcc->getObserva();
        else return 'Inicial o Contado';
    }
    else return Constantes::VACIO;
  }

  public function getFecCob($format='d-m-Y')
  {
    return parent::getFecCob('d-m-Y');
  }

  public function getDiasmora()
  {

    $c = new Criteria();
    $c->add(CobrosPeer::MONTO,0,Criteria::NOT_EQUAL);
    $c->add(CobrosPeer::ANULADO,false);
    $c->add(CobrosPeer::CO_CLI,$this->getCoCli());

    $c->addDescendingOrderByColumn(CobrosPeer::FEC_COB);
    $c->setLimit(2);
    $reg = CobrosPeer::doSelect($c);

    if(count($reg)==2){
      $cobant = $reg[1];
    }else{
      $cobant = $this;
    }

    $segundos_diferencia = (strtotime($this->getFecCob()) - strtotime($cobant->getFecCob()));

    
    $dias = ($segundos_diferencia / (60 * 60 * 24));
    return $dias;

  }

}
