<?php


/**
 * This class adds structure of 'reng_fac' table to 'profit' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Wed Nov 25 23:58:32 2009
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.profit.map
 */
class RengFacMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.profit.map.RengFacMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(RengFacPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(RengFacPeer::TABLE_NAME);
		$tMap->setPhpName('RengFac');
		$tMap->setClassname('RengFac');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('FACT_NUM', 'FactNum', 'INTEGER', true, null);

		$tMap->addPrimaryKey('RENG_NUM', 'RengNum', 'INTEGER', true, null);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'LONGVARCHAR', true, 2147483647);

		$tMap->addColumn('TIPO_DOC', 'TipoDoc', 'CHAR', true, 1);

		$tMap->addColumn('RENG_DOC', 'RengDoc', 'INTEGER', true, null);

		$tMap->addColumn('NUM_DOC', 'NumDoc', 'INTEGER', true, null);

		$tMap->addForeignKey('CO_ART', 'CoArt', 'CHAR', 'art', 'CO_ART', true, 30);

		$tMap->addForeignKey('CO_ALMA', 'CoAlma', 'CHAR', 'sub_alma', 'CO_SUB', true, 6);

		$tMap->addColumn('TOTAL_ART', 'TotalArt', 'DECIMAL', true, 20);

		$tMap->addColumn('STOTAL_ART', 'StotalArt', 'DECIMAL', true, 20);

		$tMap->addColumn('PENDIENTE', 'Pendiente', 'DECIMAL', true, 20);

		$tMap->addColumn('UNI_VENTA', 'UniVenta', 'CHAR', true, 6);

		$tMap->addColumn('PREC_VTA', 'PrecVta', 'DECIMAL', true, 20);

		$tMap->addColumn('PORC_DESC', 'PorcDesc', 'CHAR', true, 15);

		$tMap->addForeignKey('TIPO_IMP', 'TipoImp', 'CHAR', 'tabulado', 'TIPO', true, 1);

		$tMap->addColumn('ISV', 'Isv', 'DECIMAL', true, 20);

		$tMap->addColumn('RENG_NETO', 'RengNeto', 'DECIMAL', true, 20);

		$tMap->addColumn('COS_PRO_UN', 'CosProUn', 'DECIMAL', true, 20);

		$tMap->addColumn('ULT_COS_UN', 'UltCosUn', 'DECIMAL', true, 20);

		$tMap->addColumn('ULT_COS_OM', 'UltCosOm', 'DECIMAL', true, 20);

		$tMap->addColumn('COS_PRO_OM', 'CosProOm', 'DECIMAL', true, 20);

		$tMap->addColumn('TOTAL_DEV', 'TotalDev', 'DECIMAL', true, 20);

		$tMap->addColumn('MONTO_DEV', 'MontoDev', 'DECIMAL', true, 20);

		$tMap->addColumn('PREC_VTA2', 'PrecVta2', 'DECIMAL', true, 20);

		$tMap->addColumn('ANULADO', 'Anulado', 'BOOLEAN', true, null);

		$tMap->addColumn('DES_ART', 'DesArt', 'LONGVARCHAR', true, 2147483647);

		$tMap->addColumn('SELECCION', 'Seleccion', 'BOOLEAN', true, null);

		$tMap->addColumn('CANT_IMP', 'CantImp', 'DECIMAL', true, 20);

		$tMap->addColumn('COMENTARIO', 'Comentario', 'LONGVARCHAR', true, 2147483647);

		$tMap->addColumn('ROWGUID', 'Rowguid', 'CHAR', true, 16);

		$tMap->addColumn('TOTAL_UNI', 'TotalUni', 'DECIMAL', true, 20);

		$tMap->addColumn('MON_ILC', 'MonIlc', 'DECIMAL', true, 20);

		$tMap->addColumn('OTROS', 'Otros', 'DECIMAL', true, 20);

		$tMap->addColumn('NRO_LOTE', 'NroLote', 'CHAR', true, 20);

		$tMap->addColumn('FEC_LOTE', 'FecLote', 'VARCHAR', true, 255);

		$tMap->addColumn('PENDIENTE2', 'Pendiente2', 'DECIMAL', true, 20);

		$tMap->addColumn('TIPO_DOC2', 'TipoDoc2', 'CHAR', true, 1);

		$tMap->addColumn('RENG_DOC2', 'RengDoc2', 'INTEGER', true, null);

		$tMap->addColumn('NUM_DOC2', 'NumDoc2', 'INTEGER', true, null);

		$tMap->addColumn('TIPO_PREC', 'TipoPrec', 'CHAR', true, 1);

		$tMap->addColumn('CO_ALMA2', 'CoAlma2', 'CHAR', true, 6);

		$tMap->addColumn('AUX01', 'Aux01', 'DECIMAL', true, 20);

		$tMap->addColumn('AUX02', 'Aux02', 'VARCHAR', true, 30);

		$tMap->addColumn('CANT_PROD', 'CantProd', 'DECIMAL', true, 20);

		$tMap->addColumn('IMP_PROD', 'ImpProd', 'DECIMAL', true, 20);

	} // doBuild()

} // RengFacMapBuilder
