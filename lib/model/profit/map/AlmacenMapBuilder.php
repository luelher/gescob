<?php


/**
 * This class adds structure of 'almacen' table to 'profit' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Fri Dec  4 23:05:43 2009
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.profit.map
 */
class AlmacenMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.profit.map.AlmacenMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(AlmacenPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(AlmacenPeer::TABLE_NAME);
		$tMap->setPhpName('Almacen');
		$tMap->setClassname('Almacen');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_ALMA', 'CoAlma', 'CHAR', true, 6);

		$tMap->addColumn('ALMA_DES', 'AlmaDes', 'VARCHAR', true, 60);

		$tMap->addColumn('NRO_FACT', 'NroFact', 'INTEGER', true, null);

		$tMap->addColumn('NUM_FAC_INI', 'NumFacIni', 'INTEGER', true, null);

		$tMap->addColumn('NUM_FAC_FIN', 'NumFacFin', 'INTEGER', true, null);

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

		$tMap->addColumn('NC_NUM', 'NcNum', 'INTEGER', true, null);

		$tMap->addColumn('ND_NUM', 'NdNum', 'INTEGER', true, null);

		$tMap->addColumn('AJUS_NUM', 'AjusNum', 'INTEGER', true, null);

		$tMap->addColumn('TRAS_NUM', 'TrasNum', 'INTEGER', true, null);

		$tMap->addColumn('FISI_NUM', 'FisiNum', 'INTEGER', true, null);

		$tMap->addColumn('NUM_KIT', 'NumKit', 'INTEGER', true, null);

		$tMap->addColumn('GENK_NUM', 'GenkNum', 'INTEGER', true, null);

		$tMap->addColumn('FACT_NUM', 'FactNum', 'INTEGER', true, null);

		$tMap->addColumn('PED_NUM', 'PedNum', 'INTEGER', true, null);

		$tMap->addColumn('COTC_NUM', 'CotcNum', 'INTEGER', true, null);

		$tMap->addColumn('DEVC_NUM', 'DevcNum', 'INTEGER', true, null);

		$tMap->addColumn('NDE_NUM', 'NdeNum', 'INTEGER', true, null);

		$tMap->addColumn('NDD_NUM', 'NddNum', 'INTEGER', true, null);

		$tMap->addColumn('POST_NUM', 'PostNum', 'INTEGER', true, null);

		$tMap->addColumn('CFXG_NUM', 'CfxgNum', 'INTEGER', true, null);

		$tMap->addColumn('CHDV_NUM', 'ChdvNum', 'INTEGER', true, null);

		$tMap->addColumn('GIRO_NUM', 'GiroNum', 'INTEGER', true, null);

		$tMap->addColumn('RETEN_NUM', 'RetenNum', 'INTEGER', true, null);

		$tMap->addColumn('CB_NUM', 'CbNum', 'INTEGER', true, null);

		$tMap->addColumn('MOVB_NUM', 'MovbNum', 'INTEGER', true, null);

		$tMap->addColumn('MOVC_NUM', 'MovcNum', 'INTEGER', true, null);

		$tMap->addColumn('ORDP_NUM', 'OrdpNum', 'INTEGER', true, null);

		$tMap->addColumn('DEPC_NUM', 'DepcNum', 'INTEGER', true, null);

		$tMap->addColumn('COMP_NUM', 'CompNum', 'INTEGER', true, null);

		$tMap->addColumn('ORD_NUM', 'OrdNum', 'INTEGER', true, null);

		$tMap->addColumn('COTP_NUM', 'CotpNum', 'INTEGER', true, null);

		$tMap->addColumn('DEVP_NUM', 'DevpNum', 'INTEGER', true, null);

		$tMap->addColumn('NDR_NUM', 'NdrNum', 'INTEGER', true, null);

		$tMap->addColumn('POSTCPPNUM', 'Postcppnum', 'INTEGER', true, null);

		$tMap->addColumn('CCXG_NUM', 'CcxgNum', 'INTEGER', true, null);

		$tMap->addColumn('CHDVCPPNUM', 'Chdvcppnum', 'INTEGER', true, null);

		$tMap->addColumn('GIROCPPNUM', 'Girocppnum', 'INTEGER', true, null);

		$tMap->addColumn('NCCPP_NUM', 'NccppNum', 'INTEGER', true, null);

		$tMap->addColumn('NDCPP_NUM', 'NdcppNum', 'INTEGER', true, null);

		$tMap->addColumn('RETENCPPNUM', 'Retencppnum', 'INTEGER', true, null);

		$tMap->addColumn('PG_NUM', 'PgNum', 'INTEGER', true, null);

		$tMap->addColumn('AJU_POSM', 'AjuPosm', 'INTEGER', true, null);

		$tMap->addColumn('AJU_POSA', 'AjuPosa', 'INTEGER', true, null);

		$tMap->addColumn('AJU_NEGM', 'AjuNegm', 'INTEGER', true, null);

		$tMap->addColumn('AJU_NEGA', 'AjuNega', 'INTEGER', true, null);

		$tMap->addColumn('AJU_POSMC', 'AjuPosmc', 'INTEGER', true, null);

		$tMap->addColumn('AJU_POSAC', 'AjuPosac', 'INTEGER', true, null);

		$tMap->addColumn('AJU_NEGMC', 'AjuNegmc', 'INTEGER', true, null);

		$tMap->addColumn('AJU_NEGAC', 'AjuNegac', 'INTEGER', true, null);

		$tMap->addColumn('PVENTA', 'Pventa', 'INTEGER', true, null);

		$tMap->addColumn('TURNOSIC', 'Turnosic', 'INTEGER', true, null);

		$tMap->addColumn('PLV_NUM', 'PlvNum', 'INTEGER', true, null);

		$tMap->addColumn('PLC_NUM', 'PlcNum', 'INTEGER', true, null);

		$tMap->addColumn('TABISLR', 'Tabislr', 'INTEGER', true, null);

		$tMap->addColumn('IMP_NUM', 'ImpNum', 'INTEGER', true, null);

		$tMap->addColumn('RMA_CLI', 'RmaCli', 'INTEGER', true, null);

		$tMap->addColumn('RMA_PROV', 'RmaProv', 'INTEGER', true, null);

		$tMap->addColumn('RMA_ENTC', 'RmaEntc', 'INTEGER', true, null);

		$tMap->addColumn('RMA_ENTP', 'RmaEntp', 'INTEGER', true, null);

		$tMap->addColumn('RMA_REGS', 'RmaRegs', 'INTEGER', true, null);

		$tMap->addColumn('FACT_S1', 'FactS1', 'CHAR', true, 10);

		$tMap->addColumn('FACT_S2', 'FactS2', 'CHAR', true, 10);

		$tMap->addColumn('FACT_S3', 'FactS3', 'CHAR', true, 10);

		$tMap->addColumn('FACT_S4', 'FactS4', 'CHAR', true, 10);

		$tMap->addColumn('FACT_S5', 'FactS5', 'CHAR', true, 10);

		$tMap->addColumn('NDE_S1', 'NdeS1', 'CHAR', true, 10);

		$tMap->addColumn('NDE_S2', 'NdeS2', 'CHAR', true, 10);

		$tMap->addColumn('NDE_S3', 'NdeS3', 'CHAR', true, 10);

		$tMap->addColumn('NDE_S4', 'NdeS4', 'CHAR', true, 10);

		$tMap->addColumn('NDE_S5', 'NdeS5', 'CHAR', true, 10);

		$tMap->addColumn('NC_S1', 'NcS1', 'CHAR', true, 10);

		$tMap->addColumn('NC_S2', 'NcS2', 'CHAR', true, 10);

		$tMap->addColumn('NC_S3', 'NcS3', 'CHAR', true, 10);

		$tMap->addColumn('NC_S4', 'NcS4', 'CHAR', true, 10);

		$tMap->addColumn('NC_S5', 'NcS5', 'CHAR', true, 10);

		$tMap->addColumn('ND_S1', 'NdS1', 'CHAR', true, 10);

		$tMap->addColumn('ND_S2', 'NdS2', 'CHAR', true, 10);

		$tMap->addColumn('ND_S3', 'NdS3', 'CHAR', true, 10);

		$tMap->addColumn('ND_S4', 'NdS4', 'CHAR', true, 10);

		$tMap->addColumn('ND_S5', 'NdS5', 'CHAR', true, 10);

		$tMap->addColumn('FACT_F1', 'FactF1', 'INTEGER', true, null);

		$tMap->addColumn('FACT_F2', 'FactF2', 'INTEGER', true, null);

		$tMap->addColumn('FACT_F3', 'FactF3', 'INTEGER', true, null);

		$tMap->addColumn('FACT_F4', 'FactF4', 'INTEGER', true, null);

		$tMap->addColumn('NDE_F1', 'NdeF1', 'INTEGER', true, null);

		$tMap->addColumn('NDE_F2', 'NdeF2', 'INTEGER', true, null);

		$tMap->addColumn('NDE_F3', 'NdeF3', 'INTEGER', true, null);

		$tMap->addColumn('NDE_F4', 'NdeF4', 'INTEGER', true, null);

		$tMap->addColumn('NC_F1', 'NcF1', 'INTEGER', true, null);

		$tMap->addColumn('NC_F2', 'NcF2', 'INTEGER', true, null);

		$tMap->addColumn('NC_F3', 'NcF3', 'INTEGER', true, null);

		$tMap->addColumn('NC_F4', 'NcF4', 'INTEGER', true, null);

		$tMap->addColumn('ND_F1', 'NdF1', 'INTEGER', true, null);

		$tMap->addColumn('ND_F2', 'NdF2', 'INTEGER', true, null);

		$tMap->addColumn('ND_F3', 'NdF3', 'INTEGER', true, null);

		$tMap->addColumn('ND_F4', 'NdF4', 'INTEGER', true, null);

		$tMap->addColumn('FACT_P1', 'FactP1', 'INTEGER', true, null);

		$tMap->addColumn('FACT_P2', 'FactP2', 'INTEGER', true, null);

		$tMap->addColumn('FACT_P3', 'FactP3', 'INTEGER', true, null);

		$tMap->addColumn('FACT_P4', 'FactP4', 'INTEGER', true, null);

		$tMap->addColumn('FACT_P5', 'FactP5', 'INTEGER', true, null);

		$tMap->addColumn('NDE_P1', 'NdeP1', 'INTEGER', true, null);

		$tMap->addColumn('NDE_P2', 'NdeP2', 'INTEGER', true, null);

		$tMap->addColumn('NDE_P3', 'NdeP3', 'INTEGER', true, null);

		$tMap->addColumn('NDE_P4', 'NdeP4', 'INTEGER', true, null);

		$tMap->addColumn('NDE_P5', 'NdeP5', 'INTEGER', true, null);

		$tMap->addColumn('NC_P1', 'NcP1', 'INTEGER', true, null);

		$tMap->addColumn('NC_P2', 'NcP2', 'INTEGER', true, null);

		$tMap->addColumn('NC_P3', 'NcP3', 'INTEGER', true, null);

		$tMap->addColumn('NC_P4', 'NcP4', 'INTEGER', true, null);

		$tMap->addColumn('NC_P5', 'NcP5', 'INTEGER', true, null);

		$tMap->addColumn('ND_P1', 'NdP1', 'INTEGER', true, null);

		$tMap->addColumn('ND_P2', 'NdP2', 'INTEGER', true, null);

		$tMap->addColumn('ND_P3', 'NdP3', 'INTEGER', true, null);

		$tMap->addColumn('ND_P4', 'NdP4', 'INTEGER', true, null);

		$tMap->addColumn('ND_P5', 'NdP5', 'INTEGER', true, null);

		$tMap->addColumn('FACT_NUM2', 'FactNum2', 'INTEGER', true, null);

		$tMap->addColumn('FACT_NUM3', 'FactNum3', 'INTEGER', true, null);

		$tMap->addColumn('FACT_NUM4', 'FactNum4', 'INTEGER', true, null);

		$tMap->addColumn('FACT_NUM5', 'FactNum5', 'INTEGER', true, null);

		$tMap->addColumn('NDE_NUM2', 'NdeNum2', 'INTEGER', true, null);

		$tMap->addColumn('NDE_NUM3', 'NdeNum3', 'INTEGER', true, null);

		$tMap->addColumn('NDE_NUM4', 'NdeNum4', 'INTEGER', true, null);

		$tMap->addColumn('NDE_NUM5', 'NdeNum5', 'INTEGER', true, null);

		$tMap->addColumn('NC_NUM2', 'NcNum2', 'INTEGER', true, null);

		$tMap->addColumn('NC_NUM3', 'NcNum3', 'INTEGER', true, null);

		$tMap->addColumn('NC_NUM4', 'NcNum4', 'INTEGER', true, null);

		$tMap->addColumn('NC_NUM5', 'NcNum5', 'INTEGER', true, null);

		$tMap->addColumn('ND_NUM2', 'NdNum2', 'INTEGER', true, null);

		$tMap->addColumn('ND_NUM3', 'NdNum3', 'INTEGER', true, null);

		$tMap->addColumn('ND_NUM4', 'NdNum4', 'INTEGER', true, null);

		$tMap->addColumn('ND_NUM5', 'NdNum5', 'INTEGER', true, null);

		$tMap->addColumn('SERIE2', 'Serie2', 'BOOLEAN', true, null);

		$tMap->addColumn('SERIE3', 'Serie3', 'BOOLEAN', true, null);

		$tMap->addColumn('SERIE4', 'Serie4', 'BOOLEAN', true, null);

		$tMap->addColumn('SERIE5', 'Serie5', 'BOOLEAN', true, null);

		$tMap->addColumn('EMP_NUM', 'EmpNum', 'INTEGER', true, null);

		$tMap->addColumn('DMC_NUM', 'DmcNum', 'INTEGER', true, null);

		$tMap->addColumn('TAX_NUM', 'TaxNum', 'INTEGER', true, null);

		$tMap->addColumn('CED_NUM', 'CedNum', 'INTEGER', true, null);

		$tMap->addColumn('ENT_NUM', 'EntNum', 'INTEGER', true, null);

		$tMap->addColumn('CIE_NUM', 'CieNum', 'INTEGER', true, null);

		$tMap->addColumn('ODP_NUM', 'OdpNum', 'INTEGER', true, null);

		$tMap->addColumn('REQ_NUM', 'ReqNum', 'INTEGER', true, null);

		$tMap->addColumn('DEV_NUM', 'DevNum', 'INTEGER', true, null);

		$tMap->addColumn('EXP_NUM', 'ExpNum', 'INTEGER', true, null);

		$tMap->addColumn('INP_NUM', 'InpNum', 'INTEGER', true, null);

		$tMap->addColumn('COST_NUM', 'CostNum', 'INTEGER', true, null);

		$tMap->addColumn('PAR_NUM', 'ParNum', 'INTEGER', true, null);

		$tMap->addColumn('ESC_NUM', 'EscNum', 'INTEGER', true, null);

		$tMap->addColumn('PLA_NUM', 'PlaNum', 'INTEGER', true, null);

		$tMap->addColumn('MEN_NUM', 'MenNum', 'INTEGER', true, null);

		$tMap->addColumn('DIST_NUM', 'DistNum', 'INTEGER', true, null);

		$tMap->addColumn('EXP_NUMI', 'ExpNumi', 'INTEGER', true, null);

	} // doBuild()

} // AlmacenMapBuilder
