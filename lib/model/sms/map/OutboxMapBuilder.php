<?php


/**
 * This class adds structure of 'outbox' table to 'sms' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sun Jun  6 23:20:50 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.sms.map
 */
class OutboxMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.sms.map.OutboxMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(OutboxPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(OutboxPeer::TABLE_NAME);
		$tMap->setPhpName('Outbox');
		$tMap->setClassname('Outbox');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, 10);

		$tMap->addColumn('NUMBER', 'Number', 'VARCHAR', true, 20);

		$tMap->addColumn('PROCESSED_DATE', 'ProcessedDate', 'TIMESTAMP', true, null);

		$tMap->addColumn('INSERTDATE', 'Insertdate', 'TIMESTAMP', true, null);

		$tMap->addColumn('TEXT', 'Text', 'VARCHAR', false, 160);

		$tMap->addColumn('PHONE', 'Phone', 'TINYINT', false, 4);

		$tMap->addColumn('PROCESSED', 'Processed', 'TINYINT', true, 4);

		$tMap->addColumn('ERROR', 'Error', 'TINYINT', true, 4);

		$tMap->addColumn('DREPORT', 'Dreport', 'TINYINT', true, 4);

		$tMap->addColumn('NOT_BEFORE', 'NotBefore', 'TIME', true, null);

		$tMap->addColumn('NOT_AFTER', 'NotAfter', 'TIME', true, null);

		$tMap->addColumn('CO_CLI', 'CoCli', 'VARCHAR', false, 20);

		$tMap->addColumn('FEC_VENC', 'FecVenc', 'DATE', true, null);

	} // doBuild()

} // OutboxMapBuilder
