<?php

/**
 * Base static class for performing query and update operations on the 'sub_lin' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Mon Dec  7 22:53:43 2009
 *
 * @package    lib.model.profit.om
 */
abstract class BaseSubLinPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'profit';

	/** the table name for this class */
	const TABLE_NAME = 'sub_lin';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.profit.SubLin';

	/** The total number of columns. */
	const NUM_COLUMNS = 21;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the CO_SUBL field */
	const CO_SUBL = 'sub_lin.CO_SUBL';

	/** the column name for the SUBL_DES field */
	const SUBL_DES = 'sub_lin.SUBL_DES';

	/** the column name for the CO_LIN field */
	const CO_LIN = 'sub_lin.CO_LIN';

	/** the column name for the CAMPO1 field */
	const CAMPO1 = 'sub_lin.CAMPO1';

	/** the column name for the CAMPO2 field */
	const CAMPO2 = 'sub_lin.CAMPO2';

	/** the column name for the CAMPO3 field */
	const CAMPO3 = 'sub_lin.CAMPO3';

	/** the column name for the CAMPO4 field */
	const CAMPO4 = 'sub_lin.CAMPO4';

	/** the column name for the CO_US_IN field */
	const CO_US_IN = 'sub_lin.CO_US_IN';

	/** the column name for the FE_US_IN field */
	const FE_US_IN = 'sub_lin.FE_US_IN';

	/** the column name for the CO_US_MO field */
	const CO_US_MO = 'sub_lin.CO_US_MO';

	/** the column name for the FE_US_MO field */
	const FE_US_MO = 'sub_lin.FE_US_MO';

	/** the column name for the CO_US_EL field */
	const CO_US_EL = 'sub_lin.CO_US_EL';

	/** the column name for the FE_US_EL field */
	const FE_US_EL = 'sub_lin.FE_US_EL';

	/** the column name for the REVISADO field */
	const REVISADO = 'sub_lin.REVISADO';

	/** the column name for the TRASNFE field */
	const TRASNFE = 'sub_lin.TRASNFE';

	/** the column name for the CO_SUCU field */
	const CO_SUCU = 'sub_lin.CO_SUCU';

	/** the column name for the ROWGUID field */
	const ROWGUID = 'sub_lin.ROWGUID';

	/** the column name for the CO_IMUN field */
	const CO_IMUN = 'sub_lin.CO_IMUN';

	/** the column name for the CO_RETEN field */
	const CO_RETEN = 'sub_lin.CO_RETEN';

	/** the column name for the I_SUBL_DES field */
	const I_SUBL_DES = 'sub_lin.I_SUBL_DES';

	/** the column name for the MOVIL field */
	const MOVIL = 'sub_lin.MOVIL';

	/**
	 * An identiy map to hold any loaded instances of SubLin objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array SubLin[]
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
		BasePeer::TYPE_PHPNAME => array ('CoSubl', 'SublDes', 'CoLin', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'CoImun', 'CoReten', 'ISublDes', 'Movil', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coSubl', 'sublDes', 'coLin', 'campo1', 'campo2', 'campo3', 'campo4', 'coUsIn', 'feUsIn', 'coUsMo', 'feUsMo', 'coUsEl', 'feUsEl', 'revisado', 'trasnfe', 'coSucu', 'rowguid', 'coImun', 'coReten', 'iSublDes', 'movil', ),
		BasePeer::TYPE_COLNAME => array (self::CO_SUBL, self::SUBL_DES, self::CO_LIN, self::CAMPO1, self::CAMPO2, self::CAMPO3, self::CAMPO4, self::CO_US_IN, self::FE_US_IN, self::CO_US_MO, self::FE_US_MO, self::CO_US_EL, self::FE_US_EL, self::REVISADO, self::TRASNFE, self::CO_SUCU, self::ROWGUID, self::CO_IMUN, self::CO_RETEN, self::I_SUBL_DES, self::MOVIL, ),
		BasePeer::TYPE_FIELDNAME => array ('co_subl', 'subl_des', 'co_lin', 'campo1', 'campo2', 'campo3', 'campo4', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'co_imun', 'co_reten', 'i_subl_des', 'movil', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoSubl' => 0, 'SublDes' => 1, 'CoLin' => 2, 'Campo1' => 3, 'Campo2' => 4, 'Campo3' => 5, 'Campo4' => 6, 'CoUsIn' => 7, 'FeUsIn' => 8, 'CoUsMo' => 9, 'FeUsMo' => 10, 'CoUsEl' => 11, 'FeUsEl' => 12, 'Revisado' => 13, 'Trasnfe' => 14, 'CoSucu' => 15, 'Rowguid' => 16, 'CoImun' => 17, 'CoReten' => 18, 'ISublDes' => 19, 'Movil' => 20, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coSubl' => 0, 'sublDes' => 1, 'coLin' => 2, 'campo1' => 3, 'campo2' => 4, 'campo3' => 5, 'campo4' => 6, 'coUsIn' => 7, 'feUsIn' => 8, 'coUsMo' => 9, 'feUsMo' => 10, 'coUsEl' => 11, 'feUsEl' => 12, 'revisado' => 13, 'trasnfe' => 14, 'coSucu' => 15, 'rowguid' => 16, 'coImun' => 17, 'coReten' => 18, 'iSublDes' => 19, 'movil' => 20, ),
		BasePeer::TYPE_COLNAME => array (self::CO_SUBL => 0, self::SUBL_DES => 1, self::CO_LIN => 2, self::CAMPO1 => 3, self::CAMPO2 => 4, self::CAMPO3 => 5, self::CAMPO4 => 6, self::CO_US_IN => 7, self::FE_US_IN => 8, self::CO_US_MO => 9, self::FE_US_MO => 10, self::CO_US_EL => 11, self::FE_US_EL => 12, self::REVISADO => 13, self::TRASNFE => 14, self::CO_SUCU => 15, self::ROWGUID => 16, self::CO_IMUN => 17, self::CO_RETEN => 18, self::I_SUBL_DES => 19, self::MOVIL => 20, ),
		BasePeer::TYPE_FIELDNAME => array ('co_subl' => 0, 'subl_des' => 1, 'co_lin' => 2, 'campo1' => 3, 'campo2' => 4, 'campo3' => 5, 'campo4' => 6, 'co_us_in' => 7, 'fe_us_in' => 8, 'co_us_mo' => 9, 'fe_us_mo' => 10, 'co_us_el' => 11, 'fe_us_el' => 12, 'revisado' => 13, 'trasnfe' => 14, 'co_sucu' => 15, 'rowguid' => 16, 'co_imun' => 17, 'co_reten' => 18, 'i_subl_des' => 19, 'movil' => 20, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, )
	);

	/**
	 * Get a (singleton) instance of the MapBuilder for this peer class.
	 * @return     MapBuilder The map builder for this peer
	 */
	public static function getMapBuilder()
	{
		if (self::$mapBuilder === null) {
			self::$mapBuilder = new SubLinMapBuilder();
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
	 * @param      string $column The column name for current table. (i.e. SubLinPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(SubLinPeer::TABLE_NAME.'.', $alias.'.', $column);
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

		$criteria->addSelectColumn(SubLinPeer::CO_SUBL);

		$criteria->addSelectColumn(SubLinPeer::SUBL_DES);

		$criteria->addSelectColumn(SubLinPeer::CO_LIN);

		$criteria->addSelectColumn(SubLinPeer::CAMPO1);

		$criteria->addSelectColumn(SubLinPeer::CAMPO2);

		$criteria->addSelectColumn(SubLinPeer::CAMPO3);

		$criteria->addSelectColumn(SubLinPeer::CAMPO4);

		$criteria->addSelectColumn(SubLinPeer::CO_US_IN);

		$criteria->addSelectColumn(SubLinPeer::FE_US_IN);

		$criteria->addSelectColumn(SubLinPeer::CO_US_MO);

		$criteria->addSelectColumn(SubLinPeer::FE_US_MO);

		$criteria->addSelectColumn(SubLinPeer::CO_US_EL);

		$criteria->addSelectColumn(SubLinPeer::FE_US_EL);

		$criteria->addSelectColumn(SubLinPeer::REVISADO);

		$criteria->addSelectColumn(SubLinPeer::TRASNFE);

		$criteria->addSelectColumn(SubLinPeer::CO_SUCU);

		$criteria->addSelectColumn(SubLinPeer::ROWGUID);

		$criteria->addSelectColumn(SubLinPeer::CO_IMUN);

		$criteria->addSelectColumn(SubLinPeer::CO_RETEN);

		$criteria->addSelectColumn(SubLinPeer::I_SUBL_DES);

		$criteria->addSelectColumn(SubLinPeer::MOVIL);

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
		$criteria->setPrimaryTableName(SubLinPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SubLinPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(SubLinPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}


    foreach (sfMixer::getCallables('BaseSubLinPeer:doCount:doCount') as $callable)
    {
      call_user_func($callable, 'BaseSubLinPeer', $criteria, $con);
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
	 * @return     SubLin
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = SubLinPeer::doSelect($critcopy, $con);
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
		return SubLinPeer::populateObjects(SubLinPeer::doSelectStmt($criteria, $con));
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

    foreach (sfMixer::getCallables('BaseSubLinPeer:doSelectStmt:doSelectStmt') as $callable)
    {
      call_user_func($callable, 'BaseSubLinPeer', $criteria, $con);
    }


		if ($con === null) {
			$con = Propel::getConnection(SubLinPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			SubLinPeer::addSelectColumns($criteria);
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
	 * @param      SubLin $value A SubLin object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(SubLin $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = serialize(array((string) $obj->getCoSubl(), (string) $obj->getCoLin()));
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
	 * @param      mixed $value A SubLin object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof SubLin) {
				$key = serialize(array((string) $value->getCoSubl(), (string) $value->getCoLin()));
			} elseif (is_array($value) && count($value) === 2) {
				// assume we've been passed a primary key
				$key = serialize(array((string) $value[0], (string) $value[1]));
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SubLin object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     SubLin Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
		if ($row[$startcol + 0] === null && $row[$startcol + 2] === null) {
			return null;
		}
		return serialize(array((string) $row[$startcol + 0], (string) $row[$startcol + 2]));
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
		$cls = SubLinPeer::getOMClass();
		$cls = substr('.'.$cls, strrpos('.'.$cls, '.') + 1);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = SubLinPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = SubLinPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
		
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				SubLinPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the number of rows matching criteria, joining the related LinArt table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinLinArt(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(SubLinPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SubLinPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(SubLinPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(SubLinPeer::CO_LIN,), array(LinArtPeer::CO_LIN,), $join_behavior);


    foreach (sfMixer::getCallables('BaseSubLinPeer:doCount:doCount') as $callable)
    {
      call_user_func($callable, 'BaseSubLinPeer', $criteria, $con);
    }


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
	 * Selects a collection of SubLin objects pre-filled with their LinArt objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of SubLin objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinLinArt(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{

    foreach (sfMixer::getCallables('BaseSubLinPeer:doSelectJoin:doSelectJoin') as $callable)
    {
      call_user_func($callable, 'BaseSubLinPeer', $c, $con);
    }


		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SubLinPeer::addSelectColumns($c);
		$startcol = (SubLinPeer::NUM_COLUMNS - SubLinPeer::NUM_LAZY_LOAD_COLUMNS);
		LinArtPeer::addSelectColumns($c);

		$c->addJoin(array(SubLinPeer::CO_LIN,), array(LinArtPeer::CO_LIN,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = SubLinPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = SubLinPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = SubLinPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				SubLinPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = LinArtPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = LinArtPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = LinArtPeer::getOMClass();

					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					LinArtPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (SubLin) to $obj2 (LinArt)
				$obj2->addSubLin($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(SubLinPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			SubLinPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(SubLinPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(SubLinPeer::CO_LIN,), array(LinArtPeer::CO_LIN,), $join_behavior);

    foreach (sfMixer::getCallables('BaseSubLinPeer:doCount:doCount') as $callable)
    {
      call_user_func($callable, 'BaseSubLinPeer', $criteria, $con);
    }


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
	 * Selects a collection of SubLin objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of SubLin objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{

    foreach (sfMixer::getCallables('BaseSubLinPeer:doSelectJoinAll:doSelectJoinAll') as $callable)
    {
      call_user_func($callable, 'BaseSubLinPeer', $c, $con);
    }


		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		SubLinPeer::addSelectColumns($c);
		$startcol2 = (SubLinPeer::NUM_COLUMNS - SubLinPeer::NUM_LAZY_LOAD_COLUMNS);

		LinArtPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (LinArtPeer::NUM_COLUMNS - LinArtPeer::NUM_LAZY_LOAD_COLUMNS);

		$c->addJoin(array(SubLinPeer::CO_LIN,), array(LinArtPeer::CO_LIN,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = SubLinPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = SubLinPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = SubLinPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				SubLinPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined LinArt rows

			$key2 = LinArtPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = LinArtPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = LinArtPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					LinArtPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (SubLin) to the collection in $obj2 (LinArt)
				$obj2->addSubLin($obj1);
			} // if joined row not null

			$results[] = $obj1;
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
		return SubLinPeer::CLASS_DEFAULT;
	}

	/**
	 * Method perform an INSERT on the database, given a SubLin or Criteria object.
	 *
	 * @param      mixed $values Criteria or SubLin object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseSubLinPeer:doInsert:pre') as $callable)
    {
      $ret = call_user_func($callable, 'BaseSubLinPeer', $values, $con);
      if (false !== $ret)
      {
        return $ret;
      }
    }


		if ($con === null) {
			$con = Propel::getConnection(SubLinPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from SubLin object
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

		
    foreach (sfMixer::getCallables('BaseSubLinPeer:doInsert:post') as $callable)
    {
      call_user_func($callable, 'BaseSubLinPeer', $values, $con, $pk);
    }

    return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a SubLin or Criteria object.
	 *
	 * @param      mixed $values Criteria or SubLin object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseSubLinPeer:doUpdate:pre') as $callable)
    {
      $ret = call_user_func($callable, 'BaseSubLinPeer', $values, $con);
      if (false !== $ret)
      {
        return $ret;
      }
    }


		if ($con === null) {
			$con = Propel::getConnection(SubLinPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(SubLinPeer::CO_SUBL);
			$selectCriteria->add(SubLinPeer::CO_SUBL, $criteria->remove(SubLinPeer::CO_SUBL), $comparison);

			$comparison = $criteria->getComparison(SubLinPeer::CO_LIN);
			$selectCriteria->add(SubLinPeer::CO_LIN, $criteria->remove(SubLinPeer::CO_LIN), $comparison);

		} else { // $values is SubLin object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$ret = BasePeer::doUpdate($selectCriteria, $criteria, $con);
	

    foreach (sfMixer::getCallables('BaseSubLinPeer:doUpdate:post') as $callable)
    {
      call_user_func($callable, 'BaseSubLinPeer', $values, $con, $ret);
    }

    return $ret;
  }

	/**
	 * Method to DELETE all rows from the sub_lin table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(SubLinPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(SubLinPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a SubLin or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or SubLin object or primary key or array of primary keys
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
			$con = Propel::getConnection(SubLinPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			SubLinPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof SubLin) {
			// invalidate the cache for this single object
			SubLinPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			// primary key is composite; we therefore, expect
			// the primary key passed to be an array of pkey
			// values
			if (count($values) == count($values, COUNT_RECURSIVE)) {
				// array is not multi-dimensional
				$values = array($values);
			}

			foreach ($values as $value) {

				$criterion = $criteria->getNewCriterion(SubLinPeer::CO_SUBL, $value[0]);
				$criterion->addAnd($criteria->getNewCriterion(SubLinPeer::CO_LIN, $value[1]));
				$criteria->addOr($criterion);

				// we can invalidate the cache for this single PK
				SubLinPeer::removeInstanceFromPool($value);
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
	 * Validates all modified columns of given SubLin object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      SubLin $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(SubLin $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(SubLinPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(SubLinPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(SubLinPeer::DATABASE_NAME, SubLinPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = SubLinPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
        }
    }

    return $res;
	}

	/**
	 * Retrieve object using using composite pkey values.
	 * @param      string $co_subl
	   @param      string $co_lin
	   
	 * @param      PropelPDO $con
	 * @return     SubLin
	 */
	public static function retrieveByPK($co_subl, $co_lin, PropelPDO $con = null) {
		$key = serialize(array((string) $co_subl, (string) $co_lin));
 		if (null !== ($obj = SubLinPeer::getInstanceFromPool($key))) {
 			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(SubLinPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$criteria = new Criteria(SubLinPeer::DATABASE_NAME);
		$criteria->add(SubLinPeer::CO_SUBL, $co_subl);
		$criteria->add(SubLinPeer::CO_LIN, $co_lin);
		$v = SubLinPeer::doSelect($criteria, $con);

		return !empty($v) ? $v[0] : null;
	}
} // BaseSubLinPeer

// This is the static code needed to register the MapBuilder for this table with the main Propel class.
//
// NOTE: This static code cannot call methods on the SubLinPeer class, because it is not defined yet.
// If you need to use overridden methods, you can add this code to the bottom of the SubLinPeer class:
//
// Propel::getDatabaseMap(SubLinPeer::DATABASE_NAME)->addTableBuilder(SubLinPeer::TABLE_NAME, SubLinPeer::getMapBuilder());
//
// Doing so will effectively overwrite the registration below.

Propel::getDatabaseMap(BaseSubLinPeer::DATABASE_NAME)->addTableBuilder(BaseSubLinPeer::TABLE_NAME, BaseSubLinPeer::getMapBuilder());

