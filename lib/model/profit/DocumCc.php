<?php

class DocumCc extends BaseDocumCc
{
  protected $enviar = true;
  protected $celular = '';
  protected $telefono = '';

  public function getMontoNet()
  {
    return number_format($this->monto_net, 2,'.','');
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

  public function getCelular()
  {
    $clientes = $this->getClientes();

    $nros = $clientes->getTelefonos();
    $nrosarray = explode('/', $nros);

    foreach ($nrosarray as $nro){
      if(H::esCelular($nro)){
        $cel = H::analizarNroTelefono($nro);
        return '+58'.$cel[0].$cel[1];
      }
    }
    return '';
  }

  public function getTelefono()
  {
    $clientes = $this->getClientes();

    $nros = $clientes->getTelefonos();
    $nrosarray = explode('/', $nros);

    foreach ($nrosarray as $nro){
      if(!H::esCelular($nro)){
        $cel = H::analizarNroTelefono($nro);
        return '+58'.$cel[0].$cel[1];
      }
    }
    return '';
  }

  public function setCelular($val)
  {
    $this->celular = $val;
  }

  public function setTelefono($val)
  {
    $this->telefono = $val;
  }

  public function getFecVenc($format='d-m-Y')
  {
    return parent::getFecVenc('d-m-Y');
  }

}
