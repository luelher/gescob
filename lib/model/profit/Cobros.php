<?php

class Cobros extends BaseCobros
{
  protected $documcc = null;
  protected $enviar = true;

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
    if($this->documcc) return $this->documcc->getObserva();
    else return C::VACIO;
  }

  public function getFecCob($format='d-m-Y')
  {
    return parent::getFecCob('d-m-Y');
  }

}
