<?php

class DocumCcPeer extends BaseDocumCcPeer
{

  public static function doSelectJoinClienteVendedor(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
  {

    foreach (sfMixer::getCallables('BaseDocumCcPeer:doSelectJoinAll:doSelectJoinAll') as $callable)
    {
      call_user_func($callable, 'BaseDocumCcPeer', $c, $con);
    }


    $c = clone $c;

    // Set the correct dbName if it has not been overridden
    if ($c->getDbName() == Propel::getDefaultDB()) {
      $c->setDbName(self::DATABASE_NAME);
    }

    DocumCcPeer::addSelectColumns($c);
    $startcol2 = (DocumCcPeer::NUM_COLUMNS - DocumCcPeer::NUM_LAZY_LOAD_COLUMNS);

    ClientesPeer::addSelectColumns($c);
    $startcol3 = $startcol2 + (ClientesPeer::NUM_COLUMNS - ClientesPeer::NUM_LAZY_LOAD_COLUMNS);

    VendedorPeer::addSelectColumns($c);
    $startcol4 = $startcol3 + (VendedorPeer::NUM_COLUMNS - VendedorPeer::NUM_LAZY_LOAD_COLUMNS);

    $c->addJoin(array(DocumCcPeer::CO_CLI,), array(ClientesPeer::CO_CLI,), $join_behavior);
    $c->addJoin(array(DocumCcPeer::CO_VEN,), array(VendedorPeer::CO_VEN,), $join_behavior);
    $stmt = BasePeer::doSelect($c, $con);
    $results = array();

    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
      $key1 = DocumCcPeer::getPrimaryKeyHashFromRow($row, 0);
      if (null !== ($obj1 = DocumCcPeer::getInstanceFromPool($key1))) {
        // We no longer rehydrate the object, since this can cause data loss.
        // See http://propel.phpdb.org/trac/ticket/509
        // $obj1->hydrate($row, 0, true); // rehydrate
      } else {
        $omClass = DocumCcPeer::getOMClass();

        $cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
        $obj1 = new $cls();
        $obj1->hydrate($row);
        DocumCcPeer::addInstanceToPool($obj1, $key1);
      } // if obj1 already loaded

      // Add objects for joined Clientes rows

      $key2 = ClientesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
      if ($key2 !== null) {
        $obj2 = ClientesPeer::getInstanceFromPool($key2);
        if (!$obj2) {

          $omClass = ClientesPeer::getOMClass();


          $cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
          $obj2 = new $cls();
          $obj2->hydrate($row, $startcol2);
          ClientesPeer::addInstanceToPool($obj2, $key2);
        } // if obj2 loaded

        // Add the $obj1 (DocumCc) to the collection in $obj2 (Clientes)
        $obj2->addDocumCc($obj1);
      } // if joined row not null

      // Add objects for joined Vendedor rows

      $key3 = VendedorPeer::getPrimaryKeyHashFromRow($row, $startcol3);
      if ($key3 !== null) {
        $obj3 = VendedorPeer::getInstanceFromPool($key3);
        if (!$obj3) {

          $omClass = VendedorPeer::getOMClass();


          $cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
          $obj3 = new $cls();
          $obj3->hydrate($row, $startcol3);
          VendedorPeer::addInstanceToPool($obj3, $key3);
        } // if obj3 loaded

        // Add the $obj1 (DocumCc) to the collection in $obj3 (Vendedor)
        $obj3->addDocumCc($obj1);
      } // if joined row not null

      $results[] = $obj1;
    }
    $stmt->closeCursor();
    return $results;
  }


}
