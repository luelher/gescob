<?php

class ZonaPeer extends BaseZonaPeer
{
  public static function LasZonas()
  {
    $zonas = ZonaPeer::doSelect(new Criteria());
    $result = array();
    $result[''] = '';
    foreach ($zonas as $z){
      $result[$z->getCoZon()] = $z->getZonDes();
    }
    return $result;
  }
}
