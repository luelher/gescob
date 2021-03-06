<?php

/**
 * Base static class for performing query and update operations on the 'segmento' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Wed Feb 26 02:00:52 2014
 *
 * @package    lib.model.profit.om
 */
abstract class BaseSegmentoPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'profit';

	/** the table name for this class */
	const TABLE_NAME = 'segmento';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.profit.Segmento';

	/** The total number of columns. */
	const NUM_COLUMNS = 19;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the CO_SEG field */
	const CO_SEG = 'segmento.CO_SEG';

	/** the column name for the SEG_DES field */
	const SEG_DES = 'segmento.SEG_DES';

	/** the column name for the C_CUENTA field */
	const C_CUENTA = 'segmento.C_CUENTA';

	/** the column name for the P_CUENTA field */
	const P_CUENTA = 'segmento.P_CUENTA';

	/** the column name for the DIS_CEN field */
	const DIS_CEN = 'segmento.DIS_CEN';

	/** the column name for the CAMPO1 field */
	const CAMPO1 = 'segmento.CAMPO1';

	/** the column name for the CAMPO2 field */
	const CAMPO2 = 'segmento.CAMPO2';

	/** the column name for the CAMPO3 field */
	const CAMPO3 = 'segmento.CAMPO3';

	/** the column name for the CAMPO4 field */
	const CAMPO4 = 'segmento.CAMPO4';

	/** the column name for the CO_US_IN field */
	const CO_US_IN = 'segmento.CO_US_IN';

	/** the column name for the FE_US_IN field */
	const FE_US_IN = 'segmento.FE_US_IN';

	/** the column name for the CO_US_MO field */
	const CO_US_MO = 'segmento.CO_US_MO';

	/** the column name for the FE_US_MO field */
	const FE_US_MO = 'segmento.FE_US_MO';

	/** the column name for the CO_US_EL field */
	const CO_US_EL = 'segmento.CO_US_EL';

	/** the column name for the FE_US_EL field */
	const FE_US_EL = 'segmento.FE_US_EL';

	/** the column name for the REVISADO field */
	const REVISADO = 'segmento.REVISADO';

	/** the column name for the TRASNFE field */
	const TRASNFE = 'segmento.TRASNFE';

	/** the column name for the CO_SUCU field */
	const CO_SUCU = 'segmento.CO_SUCU';

	/** the column name for the ROWGUID field */
	const ROWGUID = 'segmento.ROWGUID';

	/**
	 * An identiy map to hold any loaded instances of Segmento objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Segmento[]
	 */
	public static $instances = array();

	/**
	 * The MapBuilder instance for this peer.
	 * @var        MapBuilder
	 */
	private static $mapBuilder = null;

	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('CoSeg', 'SegDes', 'CCuenta', 'PCuenta', 'DisCen', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coSeg', 'segDes', 'cCuenta', 'pCuenta', 'disCen', 'campo1', 'campo2', 'campo3', 'campo4', 'coUsIn', 'feUsIn', 'coUsMo', 'feUsMo', 'coUsEl', 'feUsEl', 'revisado', 'trasnfe', 'coSucu', 'rowguid', ),
		BasePeer::TYPE_COLNAME => array (self::CO_SEG, self::SEG_DES, self::C_CUENTA, self::P_CUENTA, self::DIS_CEN, self::CAMPO1, self::CAMPO2, self::CAMPO3, self::CAMPO4, self::CO_US_IN, self::FE_US_IN, self::CO_US_MO, self::FE_US_MO, self::CO_US_EL, self::FE_US_EL, self::REVISADO, self::TRASNFE, self::CO_SUCU, self::ROWGUID, ),
		BasePeer::TYPE_FIELDNAME => array ('co_seg', 'seg_des', 'c_cuenta', 'p_cuenta', 'dis_cen', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoSeg' => 0, 'SegDes' => 1, 'CCuenta' => 2, 'PCuenta' => 3, 'DisCen' => 4, 'Campo1' => 5, 'Campo2' => 6, 'Campo3' => 7, 'Campo4' => 8, 'CoUsIn' => 9, 'FeUsIn' => 10, 'CoUsMo' => 11, 'FeUsMo' => 12, 'CoUsEl' => 13, 'FeUsEl' => 14, 'Revisado' => 15, 'Trasnfe' => 16, 'CoSucu' => 17, 'Rowguid' => 18, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coSeg' => 0, 'segDes' => 1, 'cCuenta' => 2, 'pCuenta' => 3, 'disCen' => 4, 'campo1' => 5, 'campo2' => 6, 'campo3' => 7, 'campo4' => 8, 'coUsIn' => 9, 'feUsIn' => 10, 'coUsMo' => 11, 'feUsMo' => 12, 'coUsEl' => 13, 'feUsEl' => 14, 'revisado' => 15, 'trasnfe' => 16, 'coSucu' => 17, 'rowguid' => 18, ),
		BasePeer::TYPE_COLNAME => array (self::CO_SEG => 0, self::SEG_DES => 1, self::C_CUENTA => 2, self::P_CUENTA => 3, self::DIS_CEN => 4, self::CAMPO1 => 5, self::CAMPO2 => 6, self::CAMPO3 => 7, self::CAMPO4 => 8, self::CO_US_IN => 9, self::FE_US_IN => 10, self::CO_US_MO => 11, self::FE_US_MO => 12, self::CO_US_EL => 13, self::FE_US_EL => 14, self::REVISADO => 15, self::TRASNFE => 16, self::CO_SUCU => 17, self::ROWGUID => 18, ),
		BasePeer::TYPE_FIELDNAME => array ('co_seg' => 0, 'seg_des' => 1, 'c_cuenta' => 2, 'p_cuenta' => 3, 'dis_cen' => 4, 'campo1' => 5, 'campo2' => 6, 'campo3' => 7, 'campo4' => 8, 'co_us_in' => 9, 'fe_us_in' => 10, 'co_us_mo' => 11, 'fe_us_mo' => 12, 'co_us_el' => 13, 'fe_us_el' => 14, 'revisado' => 15, 'trasnfe' => 16, 'co_sucu' => 17, 'rowguid' => 18, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
	);

	/**
	 * Get a (singleton) instance of the MapBuilder for this peer class.
	 * @return     MapBuilder The map builder for this peer
	 */
	public static function getMapBuilder()
	{
		if (self::$mapBuilder === null) {
			self::$mapBuilder = new SegmentoMapBuilder();
		}
		return self::$mapBuilder;
	}
	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. SegmentoPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(SegmentoPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      criteria object containing the columns to add.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(SegmentoPeer::CO_SEG);

		$criteria->addSelectColumn(SegmentoPeer::SEG_DES);

		$criteria->addSelectColumn(SegmentoPeer::C_CUENTA);

		$criteria->addSelectColumn(SegmentoPeer::P_CUENTA);

		$criteria->addSelectColumn(SegmentoPeer::DIS_CEN);

		$criteria->addSelectColumn(SegmentoPeer::CAMPO1);

		$criteria->addSelectColumn(SegmentoPeer::CAMPO2);

		$criteria->addSelectColumn(SegmentoPeer::CAMPO3);

		$criteria->addSelectColumn(SegmentoPeer::CAMPO4);

		$criteria->addSelectColumn(SegmentoPeer::CO_US_IN);

		$criteria->addSelectColumn(SegmentoPeer::FE_US_IN);

		$criteria->addSelectColumn(SegmentoPeer::CO_US_MO);

		$criteria->addSelectColumn(SegmentoPeer::FE_US_MO);

		$criteria->addSelectColumn(SegmentoPeer::CO_US_EL);

		$criteria->addSelectColumn(SegmentoPeer::FE_US_EL);

		$criteria->addSelectColumn(SegmentoPeer::REVISADO);

		$criteria->addSelectColumn(SegmentoPeer::TRASNFE);

		$criteria->addSelectColumn(SegmentoPeer::CO_SUCU);

		$criteria->addSelectColumn(SegmentoPeer::ROWGUID);

	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(SegmentoPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SegmentoPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(SegmentoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}


    foreach (sfMixer::getCallables('BaseSegmentoPeer:doCount:doCount') as $callable)
    {
      call_user_func($callable, 'BaseSegmentoPeer', $criteria, $con);
    }


		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Segmento
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = SegmentoPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return SegmentoPeer::populateObjects(SegmentoPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseSegmentoPeer:doSelectStmt:doSelectStmt') as $callable)
    {
      call_user_func($callable, 'BaseSegmentoPeer', $criteria, $con);
    }


		if ($con === null) {
			$con = Propel::getConnection(SegmentoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			SegmentoPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Segmento $value A Segmento object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Segmento $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getCoSeg();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Segmento object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Segmento) {
				$key = (string) $value->getCoSeg();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Segmento object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Segmento Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol + 0] === null) {
			return null;
		}
		return (string) $row[$startcol + 0];
	}

	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = SegmentoPeer::getOMClass();
		$cls = substr('.'.$cls, strrpos('.'.$cls, '.') + 1);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = SegmentoPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = SegmentoPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
		
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				SegmentoPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}

  static public function getUniqueColumnNames()
  {
    return array();
  }
	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * This uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass()
	{
		return SegmentoPeer::CLASS_DEFAULT;
	}

	/**
	 * Method perform an INSERT on the database, given a Segmento or Criteria object.
	 *
	 * @param      mixed $values Criteria or Segmento object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseSegmentoPeer:doInsert:pre') as $callable)
    {
      $ret = call_user_func($callable, 'BaseSegmentoPeer', $values, $con);
      if (false !== $ret)
      {
        return $ret;
      }
    }


		if ($con === null) {
			$con = Propel::getConnection(SegmentoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Segmento object
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		
    foreach (sfMixer::getCallables('BaseSegmentoPeer:doInsert:post') as $callable)
    {
      call_user_func($callable, 'BaseSegmentoPeer', $values, $con, $pk);
    }

    return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a Segmento or Criteria object.
	 *
	 * @param      mixed $values Criteria or Segmento object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseSegmentoPeer:doUpdate:pre') as $callable)
    {
      $ret = call_user_func($callable, 'BaseSegmentoPeer', $values, $con);
      if (false !== $ret)
      {
        return $ret;
      }
    }


		if ($con === null) {
			$con = Propel::getConnection(SegmentoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(SegmentoPeer::CO_SEG);
			$selectCriteria->add(SegmentoPeer::CO_SEG, $criteria->remove(SegmentoPeer::CO_SEG), $comparison);

		} else { // $values is Segmento object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$ret = BasePeer::doUpdate($selectCriteria, $criteria, $con);
	

    foreach (sfMixer::getCallables('BaseSegmentoPeer:doUpdate:post') as $callable)
    {
      call_user_func($callable, 'BaseSegmentoPeer', $values, $con, $ret);
    }

    return $ret;
  }

	/**
	 * Method to DELETE all rows from the segmento table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SegmentoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(SegmentoPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Segmento or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Segmento object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(SegmentoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			SegmentoPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Segmento) {
			// invalidate the cache for this single object
			SegmentoPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(SegmentoPeer::CO_SEG, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				SegmentoPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);

			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Segmento object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Segmento $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Segmento $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SegmentoPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SegmentoPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		$res =  BasePeer::doValidate(SegmentoPeer::DATABASE_NAME, SegmentoPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SegmentoPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
        }
    }

    return $res;
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      string $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Segmento
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = SegmentoPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(SegmentoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(SegmentoPeer::DATABASE_NAME);
		$criteria->add(SegmentoPeer::CO_SEG, $pk);

		$v = SegmentoPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SegmentoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(SegmentoPeer::DATABASE_NAME);
			$criteria->add(SegmentoPeer::CO_SEG, $pks, Criteria::IN);
			$objs = SegmentoPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseSegmentoPeer

// This is the static code needed to register the MapBuilder for this table with the main Propel class.
//
// NOTE: This static code cannot call methods on the SegmentoPeer class, because it is not defined yet.
// If you need to use overridden methods, you can add this code to the bottom of the SegmentoPeer class:
//
// Propel::getDatabaseMap(SegmentoPeer::DATABASE_NAME)->addTableBuilder(SegmentoPeer::TABLE_NAME, SegmentoPeer::getMapBuilder());
//
// Doing so will effectively overwrite the registration below.

Propel::getDatabaseMap(BaseSegmentoPeer::DATABASE_NAME)->addTableBuilder(BaseSegmentoPeer::TABLE_NAME, BaseSegmentoPeer::getMapBuilder());

