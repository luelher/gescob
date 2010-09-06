<?php


/**
 * This class adds structure of 'reng_cob' table to 'profit' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sun Jun  6 23:20:53 2010
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.profit.map
 */
class RengCobMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.profit.map.RengCobMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(RengCobPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(RengCobPeer::TABLE_NAME);
		$tMap->setPhpName('RengCob');
		$tMap->setClassname('RengCob');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('COB_NUM', 'CobNum', 'INTEGER', true, null);

		$tMap->addPrimaryKey('RENG_NUM', 'RengNum', 'INTEGER', true, null);

		$tMap->addColumn('TP_DOC_COB', 'TpDocCob', 'CHAR', true, 4);

		$tMap->addForeignKey('DOC_NUM', 'DocNum', 'INTEGER', 'docum_cc', 'NRO_DOC', true, null);

		$tMap->addColumn('NETO', 'Neto', 'DECIMAL', true, 20);

		$tMap->addColumn('NETO_TMP', 'NetoTmp', 'DECIMAL', true, 20);

		$tMap->addColumn('DPPAGO', 'Dppago', 'DECIMAL', true, 20);

		$tMap->addColumn('DPPAGO_TMP', 'DppagoTmp', 'INTEGER', true, null);

		$tMap->addColumn('RENG_NCR', 'RengNcr', 'INTEGER', true, null);

		$tMap->addColumn('CO_VEN', 'CoVen', 'CHAR', true, 4);

		$tMap->addColumn('COMIS1', 'Comis1', 'DECIMAL', true, 20);

		$tMap->addColumn('COMIS2', 'Comis2', 'DECIMAL', true, 20);

		$tMap->addColumn('COMIS3', 'Comis3', 'DECIMAL', true, 20);

		$tMap->addColumn('COMIS4', 'Comis4', 'DECIMAL', true, 20);

		$tMap->addColumn('SIGN_AJU_C', 'SignAjuC', 'CHAR', true, 1);

		$tMap->addColumn('PORC_AJU_C', 'PorcAjuC', 'DECIMAL', true, 20);

		$tMap->addColumn('POR_COB', 'PorCob', 'DECIMAL', true, 20);

		$tMap->addColumn('COMI_COB', 'ComiCob', 'DECIMAL', true, 20);

		$tMap->addColumn('MONT_COB', 'MontCob', 'DECIMAL', true, 20);

		$tMap->addColumn('SINO_PAGO', 'SinoPago', 'BOOLEAN', true, null);

		$tMap->addColumn('SINO_RETEN', 'SinoReten', 'BOOLEAN', true, null);

		$tMap->addColumn('MONTO_DPPAGO', 'MontoDppago', 'DECIMAL', true, 20);

		$tMap->addColumn('MONTO_RETEN', 'MontoReten', 'DECIMAL', true, 20);

		$tMap->addColumn('IMP_PAGO', 'ImpPago', 'DECIMAL', true, 20);

		$tMap->addColumn('MONTO_OBJ', 'MontoObj', 'DECIMAL', true, 20);

		$tMap->addColumn('ISV', 'Isv', 'DECIMAL', true, 20);

		$tMap->addColumn('NRO_FACT', 'NroFact', 'CHAR', true, 20);

		$tMap->addColumn('MONEDA', 'Moneda', 'CHAR', true, 10);

		$tMap->addColumn('TASA', 'Tasa', 'DECIMAL', true, 20);

		$tMap->addColumn('NUMCON', 'Numcon', 'CHAR', true, 20);

		$tMap->addColumn('SUSTRAEN', 'Sustraen', 'DECIMAL', true, 20);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'CHAR', true, 16);

		$tMap->addColumn('CO_ISLR', 'CoIslr', 'CHAR', true, 6);

		$tMap->addColumn('FEC_EMIS', 'FecEmis', 'VARCHAR', true, 255);

		$tMap->addColumn('FEC_VENC', 'FecVenc', 'VARCHAR', true, 255);

		$tMap->addColumn('COMIS5', 'Comis5', 'DECIMAL', true, 20);

		$tMap->addColumn('COMIS6', 'Comis6', 'DECIMAL', true, 20);

		$tMap->addColumn('FACT_IVA', 'FactIva', 'INTEGER', true, null);

		$tMap->addColumn('RET_IVA', 'RetIva', 'DECIMAL', true, 20);

		$tMap->addColumn('PORC_RETN', 'PorcRetn', 'DECIMAL', true, 20);

		$tMap->addColumn('PORC_DESC', 'PorcDesc', 'DECIMAL', true, 20);

		$tMap->addColumn('AUX01', 'Aux01', 'DECIMAL', true, 20);

		$tMap->addColumn('AUX02', 'Aux02', 'VARCHAR', true, 30);

	} // doBuild()

} // RengCobMapBuilder
