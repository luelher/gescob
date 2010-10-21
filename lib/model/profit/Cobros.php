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

    $rengcob = $this->getRengCob();
    if(!$this->documcc) $this->documcc = $rengcob->getDocumCc();
    if($this->documcc) $nrofac = $documcc->getNroOrig();
    else $nrofac = '';

    $cocli = $this->getCoCli();

    $sql = "
      select
        f.co_cli as cocli,
        f.cli_des as clides,
        (
          select
          DATEDIFF(DAY,
          (select top 1 a.fec_cob as ultimo from (select top (2) xx.fec_cob from cobros xx inner join (reng_cob yy inner join docum_cc zz on yy.doc_num=zz.nro_doc) on xx.cob_num=yy.cob_num   where xx.co_cli=f.co_cli and zz.tipo_doc='GIRO' and zz.nro_orig='$nrofac' order by	fec_cob desc) a order by a.fec_cob asc),
          (select top 1 a.fec_cob as ultimo from (select top (2) xx.fec_cob from cobros xx inner join (reng_cob yy inner join docum_cc zz on yy.doc_num=zz.nro_doc) on xx.cob_num=yy.cob_num   where xx.co_cli=f.co_cli and zz.tipo_doc='GIRO' and zz.nro_orig='$nrofac' order by	fec_cob desc) a))
        ) as dias
      from
        clientes f
      where
        f.co_cli='$cocli'
    ";

    $dias = 0;

    H::BuscarDatos(CobrosPeer::DATABASE_NAME, $sql, $dias);

    return $dias;

  }

}

