<?php


/**
 * This class adds structure of 'sub_lin' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sat Nov 14 01:04:01 2009
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class SubLinMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.SubLinMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(SubLinPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(SubLinPeer::TABLE_NAME);
		$tMap->setPhpName('SubLin');
		$tMap->setClassname('SubLin');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_SUBL', 'CoSubl', 'CHAR', true, 6);

		$tMap->addColumn('SUBL_DES', 'SublDes', 'VARCHAR', true, 60);

		$tMap->addForeignPrimaryKey('CO_LIN', 'CoLin', 'CHAR' , 'lin_art', 'CO_LIN', true, 6);

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

		$tMap->addColumn('CO_IMUN', 'CoImun', 'CHAR', true, 15);

		$tMap->addColumn('CO_RETEN', 'CoReten', 'CHAR', true, 6);

		$tMap->addColumn('I_SUBL_DES', 'ISublDes', 'VARCHAR', true, 60);

		$tMap->addColumn('MOVIL', 'Movil', 'BOOLEAN', true, null);

	} // doBuild()

} // SubLinMapBuilder
