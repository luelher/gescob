<?php

/**
 * Base static class for performing query and update operations on the 'vendedor' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sun Jun  6 23:20:54 2010
 *
 * @package    lib.model.profit.om
 */
abstract class BaseVendedorPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'profit';

	/** the table name for this class */
	const TABLE_NAME = 'vendedor';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.profit.Vendedor';

	/** The total number of columns. */
	const NUM_COLUMNS = 42;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the CO_VEN field */
	const CO_VEN = 'vendedor.CO_VEN';

	/** the column name for the TIPO field */
	const TIPO = 'vendedor.TIPO';

	/** the column name for the VEN_DES field */
	const VEN_DES = 'vendedor.VEN_DES';

	/** the column name for the DIS_CEN field */
	const DIS_CEN = 'vendedor.DIS_CEN';

	/** the column name for the CEDULA field */
	const CEDULA = 'vendedor.CEDULA';

	/** the column name for the DIREC1 field */
	const DIREC1 = 'vendedor.DIREC1';

	/** the column name for the DIREC2 field */
	const DIREC2 = 'vendedor.DIREC2';

	/** the column name for the TELEFONOS field */
	const TELEFONOS = 'vendedor.TELEFONOS';

	/** the column name for the FECHA_REG field */
	const FECHA_REG = 'vendedor.FECHA_REG';

	/** the column name for the CONDIC field */
	const CONDIC = 'vendedor.CONDIC';

	/** the column name for the COMISION field */
	const COMISION = 'vendedor.COMISION';

	/** the column name for the COMEN field */
	const COMEN = 'vendedor.COMEN';

	/** the column name for the FUN_COB field */
	const FUN_COB = 'vendedor.FUN_COB';

	/** the column name for the FUN_VEN field */
	const FUN_VEN = 'vendedor.FUN_VEN';

	/** the column name for the COMISIONV field */
	const COMISIONV = 'vendedor.COMISIONV';

	/** the column name for the FAC_ULT_VE field */
	const FAC_ULT_VE = 'vendedor.FAC_ULT_VE';

	/** the column name for the FEC_ULT_VE field */
	const FEC_ULT_VE = 'vendedor.FEC_ULT_VE';

	/** the column name for the NET_ULT_VE field */
	const NET_ULT_VE = 'vendedor.NET_ULT_VE';

	/** the column name for the CLI_ULT_VE field */
	const CLI_ULT_VE = 'vendedor.CLI_ULT_VE';

	/** the column name for the CTA_CONTAB field */
	const CTA_CONTAB = 'vendedor.CTA_CONTAB';

	/** the column name for the CAMPO1 field */
	const CAMPO1 = 'vendedor.CAMPO1';

	/** the column name for the CAMPO2 field */
	const CAMPO2 = 'vendedor.CAMPO2';

	/** the column name for the CAMPO3 field */
	const CAMPO3 = 'vendedor.CAMPO3';

	/** the column name for the CAMPO4 field */
	const CAMPO4 = 'vendedor.CAMPO4';

	/** the column name for the CAMPO5 field */
	const CAMPO5 = 'vendedor.CAMPO5';

	/** the column name for the CAMPO6 field */
	const CAMPO6 = 'vendedor.CAMPO6';

	/** the column name for the CAMPO7 field */
	const CAMPO7 = 'vendedor.CAMPO7';

	/** the column name for the CAMPO8 field */
	const CAMPO8 = 'vendedor.CAMPO8';

	/** the column name for the CO_US_IN field */
	const CO_US_IN = 'vendedor.CO_US_IN';

	/** the column name for the FE_US_IN field */
	const FE_US_IN = 'vendedor.FE_US_IN';

	/** the column name for the CO_US_MO field */
	const CO_US_MO = 'vendedor.CO_US_MO';

	/** the column name for the FE_US_MO field */
	const FE_US_MO = 'vendedor.FE_US_MO';

	/** the column name for the CO_US_EL field */
	const CO_US_EL = 'vendedor.CO_US_EL';

	/** the column name for the FE_US_EL field */
	const FE_US_EL = 'vendedor.FE_US_EL';

	/** the column name for the REVISADO field */
	const REVISADO = 'vendedor.REVISADO';

	/** the column name for the TRASNFE field */
	const TRASNFE = 'vendedor.TRASNFE';

	/** the column name for the CO_SUCU field */
	const CO_SUCU = 'vendedor.CO_SUCU';

	/** the column name for the ROWGUID field */
	const ROWGUID = 'vendedor.ROWGUID';

	/** the column name for the LOGIN field */
	const LOGIN = 'vendedor.LOGIN';

	/** the column name for the PASSWORD field */
	const PASSWORD = 'vendedor.PASSWORD';

	/** the column name for the EMAIL field */
	const EMAIL = 'vendedor.EMAIL';

	/** the column name for the PSW_M field */
	const PSW_M = 'vendedor.PSW_M';

	/**
	 * An identiy map to hold any loaded instances of Vendedor objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Vendedor[]
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
		BasePeer::TYPE_PHPNAME => array ('CoVen', 'Tipo', 'VenDes', 'DisCen', 'Cedula', 'Direc1', 'Direc2', 'Telefonos', 'FechaReg', 'Condic', 'Comision', 'Comen', 'FunCob', 'FunVen', 'Comisionv', 'FacUltVe', 'FecUltVe', 'NetUltVe', 'CliUltVe', 'CtaContab', 'Campo1', 'Campo2', 'Campo3', 'Campo4', 'Campo5', 'Campo6', 'Campo7', 'Campo8', 'CoUsIn', 'FeUsIn', 'CoUsMo', 'FeUsMo', 'CoUsEl', 'FeUsEl', 'Revisado', 'Trasnfe', 'CoSucu', 'Rowguid', 'Login', 'Password', 'Email', 'PswM', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coVen', 'tipo', 'venDes', 'disCen', 'cedula', 'direc1', 'direc2', 'telefonos', 'fechaReg', 'condic', 'comision', 'comen', 'funCob', 'funVen', 'comisionv', 'facUltVe', 'fecUltVe', 'netUltVe', 'cliUltVe', 'ctaContab', 'campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7', 'campo8', 'coUsIn', 'feUsIn', 'coUsMo', 'feUsMo', 'coUsEl', 'feUsEl', 'revisado', 'trasnfe', 'coSucu', 'rowguid', 'login', 'password', 'email', 'pswM', ),
		BasePeer::TYPE_COLNAME => array (self::CO_VEN, self::TIPO, self::VEN_DES, self::DIS_CEN, self::CEDULA, self::DIREC1, self::DIREC2, self::TELEFONOS, self::FECHA_REG, self::CONDIC, self::COMISION, self::COMEN, self::FUN_COB, self::FUN_VEN, self::COMISIONV, self::FAC_ULT_VE, self::FEC_ULT_VE, self::NET_ULT_VE, self::CLI_ULT_VE, self::CTA_CONTAB, self::CAMPO1, self::CAMPO2, self::CAMPO3, self::CAMPO4, self::CAMPO5, self::CAMPO6, self::CAMPO7, self::CAMPO8, self::CO_US_IN, self::FE_US_IN, self::CO_US_MO, self::FE_US_MO, self::CO_US_EL, self::FE_US_EL, self::REVISADO, self::TRASNFE, self::CO_SUCU, self::ROWGUID, self::LOGIN, self::PASSWORD, self::EMAIL, self::PSW_M, ),
		BasePeer::TYPE_FIELDNAME => array ('co_ven', 'tipo', 'ven_des', 'dis_cen', 'cedula', 'direc1', 'direc2', 'telefonos', 'fecha_reg', 'condic', 'comision', 'comen', 'fun_cob', 'fun_ven', 'comisionv', 'fac_ult_ve', 'fec_ult_ve', 'net_ult_ve', 'cli_ult_ve', 'cta_contab', 'campo1', 'campo2', 'campo3', 'campo4', 'campo5', 'campo6', 'campo7', 'campo8', 'co_us_in', 'fe_us_in', 'co_us_mo', 'fe_us_mo', 'co_us_el', 'fe_us_el', 'revisado', 'trasnfe', 'co_sucu', 'rowguid', 'login', 'password', 'email', 'PSW_M', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('CoVen' => 0, 'Tipo' => 1, 'VenDes' => 2, 'DisCen' => 3, 'Cedula' => 4, 'Direc1' => 5, 'Direc2' => 6, 'Telefonos' => 7, 'FechaReg' => 8, 'Condic' => 9, 'Comision' => 10, 'Comen' => 11, 'FunCob' => 12, 'FunVen' => 13, 'Comisionv' => 14, 'FacUltVe' => 15, 'FecUltVe' => 16, 'NetUltVe' => 17, 'CliUltVe' => 18, 'CtaContab' => 19, 'Campo1' => 20, 'Campo2' => 21, 'Campo3' => 22, 'Campo4' => 23, 'Campo5' => 24, 'Campo6' => 25, 'Campo7' => 26, 'Campo8' => 27, 'CoUsIn' => 28, 'FeUsIn' => 29, 'CoUsMo' => 30, 'FeUsMo' => 31, 'CoUsEl' => 32, 'FeUsEl' => 33, 'Revisado' => 34, 'Trasnfe' => 35, 'CoSucu' => 36, 'Rowguid' => 37, 'Login' => 38, 'Password' => 39, 'Email' => 40, 'PswM' => 41, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('coVen' => 0, 'tipo' => 1, 'venDes' => 2, 'disCen' => 3, 'cedula' => 4, 'direc1' => 5, 'direc2' => 6, 'telefonos' => 7, 'fechaReg' => 8, 'condic' => 9, 'comision' => 10, 'comen' => 11, 'funCob' => 12, 'funVen' => 13, 'comisionv' => 14, 'facUltVe' => 15, 'fecUltVe' => 16, 'netUltVe' => 17, 'cliUltVe' => 18, 'ctaContab' => 19, 'campo1' => 20, 'campo2' => 21, 'campo3' => 22, 'campo4' => 23, 'campo5' => 24, 'campo6' => 25, 'campo7' => 26, 'campo8' => 27, 'coUsIn' => 28, 'feUsIn' => 29, 'coUsMo' => 30, 'feUsMo' => 31, 'coUsEl' => 32, 'feUsEl' => 33, 'revisado' => 34, 'trasnfe' => 35, 'coSucu' => 36, 'rowguid' => 37, 'login' => 38, 'password' => 39, 'email' => 40, 'pswM' => 41, ),
		BasePeer::TYPE_COLNAME => array (self::CO_VEN => 0, self::TIPO => 1, self::VEN_DES => 2, self::DIS_CEN => 3, self::CEDULA => 4, self::DIREC1 => 5, self::DIREC2 => 6, self::TELEFONOS => 7, self::FECHA_REG => 8, self::CONDIC => 9, self::COMISION => 10, self::COMEN => 11, self::FUN_COB => 12, self::FUN_VEN => 13, self::COMISIONV => 14, self::FAC_ULT_VE => 15, self::FEC_ULT_VE => 16, self::NET_ULT_VE => 17, self::CLI_ULT_VE => 18, self::CTA_CONTAB => 19, self::CAMPO1 => 20, self::CAMPO2 => 21, self::CAMPO3 => 22, self::CAMPO4 => 23, self::CAMPO5 => 24, self::CAMPO6 => 25, self::CAMPO7 => 26, self::CAMPO8 => 27, self::CO_US_IN => 28, self::FE_US_IN => 29, self::CO_US_MO => 30, self::FE_US_MO => 31, self::CO_US_EL => 32, self::FE_US_EL => 33, self::REVISADO => 34, self::TRASNFE => 35, self::CO_SUCU => 36, self::ROWGUID => 37, self::LOGIN => 38, self::PASSWORD => 39, self::EMAIL => 40, self::PSW_M => 41, ),
		BasePeer::TYPE_FIELDNAME => array ('co_ven' => 0, 'tipo' => 1, 'ven_des' => 2, 'dis_cen' => 3, 'cedula' => 4, 'direc1' => 5, 'direc2' => 6, 'telefonos' => 7, 'fecha_reg' => 8, 'condic' => 9, 'comision' => 10, 'comen' => 11, 'fun_cob' => 12, 'fun_ven' => 13, 'comisionv' => 14, 'fac_ult_ve' => 15, 'fec_ult_ve' => 16, 'net_ult_ve' => 17, 'cli_ult_ve' => 18, 'cta_contab' => 19, 'campo1' => 20, 'campo2' => 21, 'campo3' => 22, 'campo4' => 23, 'campo5' => 24, 'campo6' => 25, 'campo7' => 26, 'campo8' => 27, 'co_us_in' => 28, 'fe_us_in' => 29, 'co_us_mo' => 30, 'fe_us_mo' => 31, 'co_us_el' => 32, 'fe_us_el' => 33, 'revisado' => 34, 'trasnfe' => 35, 'co_sucu' => 36, 'rowguid' => 37, 'login' => 38, 'password' => 39, 'email' => 40, 'PSW_M' => 41, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, )
	);

	/**
	 * Get a (singleton) instance of the MapBuilder for this peer class.
	 * @return     MapBuilder The map builder for this peer
	 */
	public static function getMapBuilder()
	{
		if (self::$mapBuilder === null) {
			self::$mapBuilder = new VendedorMapBuilder();
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
	 * @param      string $column The column name for current table. (i.e. VendedorPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(VendedorPeer::TABLE_NAME.'.', $alias.'.', $column);
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

		$criteria->addSelectColumn(VendedorPeer::CO_VEN);

		$criteria->addSelectColumn(VendedorPeer::TIPO);

		$criteria->addSelectColumn(VendedorPeer::VEN_DES);

		$criteria->addSelectColumn(VendedorPeer::DIS_CEN);

		$criteria->addSelectColumn(VendedorPeer::CEDULA);

		$criteria->addSelectColumn(VendedorPeer::DIREC1);

		$criteria->addSelectColumn(VendedorPeer::DIREC2);

		$criteria->addSelectColumn(VendedorPeer::TELEFONOS);

		$criteria->addSelectColumn(VendedorPeer::FECHA_REG);

		$criteria->addSelectColumn(VendedorPeer::CONDIC);

		$criteria->addSelectColumn(VendedorPeer::COMISION);

		$criteria->addSelectColumn(VendedorPeer::COMEN);

		$criteria->addSelectColumn(VendedorPeer::FUN_COB);

		$criteria->addSelectColumn(VendedorPeer::FUN_VEN);

		$criteria->addSelectColumn(VendedorPeer::COMISIONV);

		$criteria->addSelectColumn(VendedorPeer::FAC_ULT_VE);

		$criteria->addSelectColumn(VendedorPeer::FEC_ULT_VE);

		$criteria->addSelectColumn(VendedorPeer::NET_ULT_VE);

		$criteria->addSelectColumn(VendedorPeer::CLI_ULT_VE);

		$criteria->addSelectColumn(VendedorPeer::CTA_CONTAB);

		$criteria->addSelectColumn(VendedorPeer::CAMPO1);

		$criteria->addSelectColumn(VendedorPeer::CAMPO2);

		$criteria->addSelectColumn(VendedorPeer::CAMPO3);

		$criteria->addSelectColumn(VendedorPeer::CAMPO4);

		$criteria->addSelectColumn(VendedorPeer::CAMPO5);

		$criteria->addSelectColumn(VendedorPeer::CAMPO6);

		$criteria->addSelectColumn(VendedorPeer::CAMPO7);

		$criteria->addSelectColumn(VendedorPeer::CAMPO8);

		$criteria->addSelectColumn(VendedorPeer::CO_US_IN);

		$criteria->addSelectColumn(VendedorPeer::FE_US_IN);

		$criteria->addSelectColumn(VendedorPeer::CO_US_MO);

		$criteria->addSelectColumn(VendedorPeer::FE_US_MO);

		$criteria->addSelectColumn(VendedorPeer::CO_US_EL);

		$criteria->addSelectColumn(VendedorPeer::FE_US_EL);

		$criteria->addSelectColumn(VendedorPeer::REVISADO);

		$criteria->addSelectColumn(VendedorPeer::TRASNFE);

		$criteria->addSelectColumn(VendedorPeer::CO_SUCU);

		$criteria->addSelectColumn(VendedorPeer::ROWGUID);

		$criteria->addSelectColumn(VendedorPeer::LOGIN);

		$criteria->addSelectColumn(VendedorPeer::PASSWORD);

		$criteria->addSelectColumn(VendedorPeer::EMAIL);

		$criteria->addSelectColumn(VendedorPeer::PSW_M);

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
		$criteria->setPrimaryTableName(VendedorPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			VendedorPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(VendedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}


    foreach (sfMixer::getCallables('BaseVendedorPeer:doCount:doCount') as $callable)
    {
      call_user_func($callable, 'BaseVendedorPeer', $criteria, $con);
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
	 * @return     Vendedor
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = VendedorPeer::doSelect($critcopy, $con);
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
		return VendedorPeer::populateObjects(VendedorPeer::doSelectStmt($criteria, $con));
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

    foreach (sfMixer::getCallables('BaseVendedorPeer:doSelectStmt:doSelectStmt') as $callable)
    {
      call_user_func($callable, 'BaseVendedorPeer', $criteria, $con);
    }


		if ($con === null) {
			$con = Propel::getConnection(VendedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			VendedorPeer::addSelectColumns($criteria);
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
	 * @param      Vendedor $value A Vendedor object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(Vendedor $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getCoVen();
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
	 * @param      mixed $value A Vendedor object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Vendedor) {
				$key = (string) $value->getCoVen();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Vendedor object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Vendedor Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
		$cls = VendedorPeer::getOMClass();
		$cls = substr('.'.$cls, strrpos('.'.$cls, '.') + 1);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = VendedorPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = VendedorPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
		
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				VendedorPeer::addInstanceToPool($obj, $key);
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
		return VendedorPeer::CLASS_DEFAULT;
	}

	/**
	 * Method perform an INSERT on the database, given a Vendedor or Criteria object.
	 *
	 * @param      mixed $values Criteria or Vendedor object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseVendedorPeer:doInsert:pre') as $callable)
    {
      $ret = call_user_func($callable, 'BaseVendedorPeer', $values, $con);
      if (false !== $ret)
      {
        return $ret;
      }
    }


		if ($con === null) {
			$con = Propel::getConnection(VendedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Vendedor object
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

		
    foreach (sfMixer::getCallables('BaseVendedorPeer:doInsert:post') as $callable)
    {
      call_user_func($callable, 'BaseVendedorPeer', $values, $con, $pk);
    }

    return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a Vendedor or Criteria object.
	 *
	 * @param      mixed $values Criteria or Vendedor object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{

    foreach (sfMixer::getCallables('BaseVendedorPeer:doUpdate:pre') as $callable)
    {
      $ret = call_user_func($callable, 'BaseVendedorPeer', $values, $con);
      if (false !== $ret)
      {
        return $ret;
      }
    }


		if ($con === null) {
			$con = Propel::getConnection(VendedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(VendedorPeer::CO_VEN);
			$selectCriteria->add(VendedorPeer::CO_VEN, $criteria->remove(VendedorPeer::CO_VEN), $comparison);

		} else { // $values is Vendedor object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$ret = BasePeer::doUpdate($selectCriteria, $criteria, $con);
	

    foreach (sfMixer::getCallables('BaseVendedorPeer:doUpdate:post') as $callable)
    {
      call_user_func($callable, 'BaseVendedorPeer', $values, $con, $ret);
    }

    return $ret;
  }

	/**
	 * Method to DELETE all rows from the vendedor table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(VendedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(VendedorPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a Vendedor or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Vendedor object or primary key or array of primary keys
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
			$con = Propel::getConnection(VendedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			VendedorPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Vendedor) {
			// invalidate the cache for this single object
			VendedorPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(VendedorPeer::CO_VEN, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				VendedorPeer::removeInstanceFromPool($singleval);
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
	 * Validates all modified columns of given Vendedor object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Vendedor $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(Vendedor $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(VendedorPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(VendedorPeer::TABLE_NAME);

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

		$res =  BasePeer::doValidate(VendedorPeer::DATABASE_NAME, VendedorPeer::TABLE_NAME, $columns);
    if ($res !== true) {
        $request = sfContext::getInstance()->getRequest();
        foreach ($res as $failed) {
            $col = VendedorPeer::translateFieldname($failed->getColumn(), BasePeer::TYPE_COLNAME, BasePeer::TYPE_PHPNAME);
        }
    }

    return $res;
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      string $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Vendedor
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = VendedorPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(VendedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(VendedorPeer::DATABASE_NAME);
		$criteria->add(VendedorPeer::CO_VEN, $pk);

		$v = VendedorPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(VendedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(VendedorPeer::DATABASE_NAME);
			$criteria->add(VendedorPeer::CO_VEN, $pks, Criteria::IN);
			$objs = VendedorPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseVendedorPeer

// This is the static code needed to register the MapBuilder for this table with the main Propel class.
//
// NOTE: This static code cannot call methods on the VendedorPeer class, because it is not defined yet.
// If you need to use overridden methods, you can add this code to the bottom of the VendedorPeer class:
//
// Propel::getDatabaseMap(VendedorPeer::DATABASE_NAME)->addTableBuilder(VendedorPeer::TABLE_NAME, VendedorPeer::getMapBuilder());
//
// Doing so will effectively overwrite the registration below.

Propel::getDatabaseMap(BaseVendedorPeer::DATABASE_NAME)->addTableBuilder(BaseVendedorPeer::TABLE_NAME, BaseVendedorPeer::getMapBuilder());

