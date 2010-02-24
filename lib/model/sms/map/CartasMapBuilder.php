<?php


/**
 * This class adds structure of 'cartas' table to 'sms' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Mon Feb  8 20:58:30 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.sms.map
 */
class CartasMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.sms.map.CartasMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(CartasPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(CartasPeer::TABLE_NAME);
		$tMap->setPhpName('Cartas');
		$tMap->setClassname('Cartas');

		$tMap->setUseIdGenerator(true);

		$tMap->addColumn('CO_CLI', 'CoCli', 'VARCHAR', true, 20);

		$tMap->addColumn('ENTREGADO', 'Entregado', 'DATE', true, null);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11);

	} // doBuild()

} // CartasMapBuilder