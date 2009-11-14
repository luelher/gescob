<?php


/**
 * This class adds structure of 'condicio' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sat Nov 14 01:04:00 2009
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class CondicioMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.CondicioMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(CondicioPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(CondicioPeer::TABLE_NAME);
		$tMap->setPhpName('Condicio');
		$tMap->setClassname('Condicio');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_COND', 'CoCond', 'CHAR', true, 6);

		$tMap->addColumn('COND_DES', 'CondDes', 'VARCHAR', true, 60);

		$tMap->addColumn('DIAS_CRED', 'DiasCred', 'INTEGER', true, null);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'LONGVARCHAR', true, 2147483647);

		$tMap->addColumn('CAMPO1', 'Campo1', 'VARCHAR', true, 60);

		$tMap->addColumn('CAMPO2', 'Campo2', 'VARCHAR', true, 60);

		$tMap->addColumn('CAMPO3', 'Campo3', 'VARCHAR', true, 60);

		$tMap->addColumn('CAMPO4', 'Campo4', 'VARCHAR', true, 60);

		$tMap->addColumn('CO_US_IN', 'CoUsIn', 'CHAR', true, 4);

		$tMap->addColumn('FE_US_IN', 'FeUsIn', 'VARCHAR', true, 255);

		$tMap->addColumn('CO_US_MO', 'CoUsMo', 'CHAR', true, 4);

		$tMap->addColumn('FE_US_MO', 'FeUsMo', 'VARCHAR', true, 255);

		$tMap->addColumn('CO_US_EL', 'CoUsEl', 'CHAR', true, 4);

		$tMap->addColumn('FE_US_EL', 'FeUsEl', 'VARCHAR', true, 255);

		$tMap->addColumn('REVISADO', 'Revisado', 'CHAR', true, 1);

		$tMap->addColumn('TRASNFE', 'Trasnfe', 'CHAR', true, 1);

		$tMap->addColumn('CO_SUCU', 'CoSucu', 'CHAR', true, 6);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'CHAR', true, 16);

		$tMap->addColumn('ROW_ID', 'RowId', 'BINARY', true, null);

	} // doBuild()

} // CondicioMapBuilder
