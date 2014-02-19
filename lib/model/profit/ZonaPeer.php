<?php

class ZonaPeer extends BaseZonaPeer
{
  public static function LasZonas($blank=true)
  {
    $zonas = ZonaPeer::doSelect(new Criteria());
    $result = array();
    if($blank) $result[''] = '';
    foreach ($zonas as $z){
      $result[trim($z->getCoZon())] = $z->getZonDes();
    }
    return $result;
  }
}
