<?php

class DocumCc extends BaseDocumCc
{
  protected $enviar = false;

  public function getEnviar()
  {
    return $this->enviar;
  }

  public function setEnviar($val)
  {
    $this->enviar = $val;
  }


}
