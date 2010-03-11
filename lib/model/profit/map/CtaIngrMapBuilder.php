<?php


/**
 * This class adds structure of 'cta_ingr' table to 'profit' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Tue Mar  9 02:09:54 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.profit.map
 */
class CtaIngrMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.profit.map.CtaIngrMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(CtaIngrPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(CtaIngrPeer::TABLE_NAME);
		$tMap->setPhpName('CtaIngr');
		$tMap->setClassname('CtaIngr');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_INGR', 'CoIngr', 'CHAR', true, 6);

		$tMap->addColumn('DESCRIP', 'Descrip', 'VARCHAR', true, 60);

		$tMap->addColumn('CTA_CONTAB', 'CtaContab', 'CHAR', true, 20);

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

		$tMap->addColumn('CO_ISLR', 'CoIslr', 'CHAR', true, 6);

	} // doBuild()

} // CtaIngrMapBuilder
