<?php


/**
 * This class adds structure of 'tabulado' table to 'profit' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sun Jun  6 23:20:57 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.profit.map
 */
class TabuladoMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.profit.map.TabuladoMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(TabuladoPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(TabuladoPeer::TABLE_NAME);
		$tMap->setPhpName('Tabulado');
		$tMap->setClassname('Tabulado');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('TIPO', 'Tipo', 'CHAR', true, 1);

		$tMap->addColumn('DESCRIPCIO', 'Descripcio', 'VARCHAR', true, 60);

		$tMap->addColumn('PORC_VENT', 'PorcVent', 'DECIMAL', true, 12);

		$tMap->addColumn('PORC_COMP', 'PorcComp', 'DECIMAL', true, 12);

		$tMap->addColumn('PORC_CXS', 'PorcCxs', 'DECIMAL', true, 12);

		$tMap->addColumn('PORC_OTRO', 'PorcOtro', 'DECIMAL', true, 12);

		$tMap->addColumn('REVISADO', 'Revisado', 'CHAR', true, 1);

		$tMap->addColumn('TRASNFE', 'Trasnfe', 'CHAR', true, 1);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'CHAR', true, 16);

	} // doBuild()

} // TabuladoMapBuilder
