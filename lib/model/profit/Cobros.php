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
    $segundos_diferencia = strtotime(date('d-m-Y')) - strtotime($this->getFecVenc());

    $dias = ($segundos_diferencia / (60 * 60 * 24));
    return $dias < 0 ? 0 : $dias;

  }

}
