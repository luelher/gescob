<?php


/**
 * This class adds structure of 'art' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Sat Nov 14 01:03:58 2009
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ArtMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ArtMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(ArtPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ArtPeer::TABLE_NAME);
		$tMap->setPhpName('Art');
		$tMap->setClassname('Art');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_ART', 'CoArt', 'CHAR', true, 30);

		$tMap->addColumn('ART_DES', 'ArtDes', 'VARCHAR', true, 120);

		$tMap->addColumn('FECHA_REG', 'FechaReg', 'VARCHAR', true, 255);

		$tMap->addColumn('MANJ_SER', 'ManjSer', 'BOOLEAN', true, null);

		$tMap->addForeignKey('CO_LIN', 'CoLin', 'CHAR', 'lin_art', 'CO_LIN', true, 6);

		$tMap->addForeignKey('CO_CAT', 'CoCat', 'CHAR', 'cat_art', 'CO_CAT', true, 6);

		$tMap->addForeignKey('CO_SUBL', 'CoSubl', 'CHAR', 'sub_lin', 'CO_LIN', true, 6);

		$tMap->addForeignKey('CO_COLOR', 'CoColor', 'CHAR', 'colores', 'CO_COL', true, 6);

		$tMap->addColumn('ITEM', 'Item', 'CHAR', true, 10);

		$tMap->addColumn('REF', 'Ref', 'CHAR', true, 20);

		$tMap->addColumn('MODELO', 'Modelo', 'CHAR', true, 20);

		$tMap->addForeignKey('PROCEDENCI', 'Procedenci', 'CHAR', 'proceden', 'COD_PROC', true, 6);

		$tMap->addColumn('COMENTARIO', 'Comentario', 'LONGVARCHAR', true, 2147483647);

		$tMap->addForeignKey('CO_PROV', 'CoProv', 'CHAR', 'prov', 'CO_PROV', true, 10);

		$tMap->addColumn('UBICACION', 'Ubicacion', 'VARCHAR', true, 60);

		$tMap->addForeignKey('UNI_VENTA', 'UniVenta', 'CHAR', 'unidades', 'CO_UNI', true, 6);

		$tMap->addColumn('UNI_COMPRA', 'UniCompra', 'CHAR', true, 6);

		$tMap->addColumn('UNI_RELAC', 'UniRelac', 'DECIMAL', true, 20);

		$tMap->addColumn('RELAC_AUT', 'RelacAut', 'INTEGER', true, null);

		$tMap->addColumn('STOCK_ACT', 'StockAct', 'DECIMAL', true, 20);

		$tMap->addColumn('STOCK_COM', 'StockCom', 'DECIMAL', true, 20);

		$tMap->addColumn('SSTOCK_COM', 'SstockCom', 'DECIMAL', true, 20);

		$tMap->addColumn('STOCK_LLE', 'StockLle', 'DECIMAL', true, 20);

		$tMap->addColumn('SSTOCK_LLE', 'SstockLle', 'DECIMAL', true, 20);

		$tMap->addColumn('STOCK_DES', 'StockDes', 'DECIMAL', true, 20);

		$tMap->addColumn('SSTOCK_DES', 'SstockDes', 'DECIMAL', true, 20);

		$tMap->addForeignKey('SUNI_VENTA', 'SuniVenta', 'CHAR', 'unidades', 'CO_UNI', true, 6);

		$tMap->addColumn('SUNI_COMPR', 'SuniCompr', 'CHAR', true, 6);

		$tMap->addColumn('SUNI_RELAC', 'SuniRelac', 'DECIMAL', true, 20);

		$tMap->addColumn('SSTOCK_ACT', 'SstockAct', 'DECIMAL', true, 20);

		$tMap->addColumn('RELAC_COMP', 'RelacComp', 'DECIMAL', true, 20);

		$tMap->addColumn('RELAC_VENT', 'RelacVent', 'DECIMAL', true, 20);

		$tMap->addColumn('PTO_PEDIDO', 'PtoPedido', 'DECIMAL', true, 20);

		$tMap->addColumn('STOCK_MAX', 'StockMax', 'DECIMAL', true, 20);

		$tMap->addColumn('STOCK_MIN', 'StockMin', 'DECIMAL', true, 20);

		$tMap->addColumn('PREC_OM', 'PrecOm', 'BOOLEAN', true, null);

		$tMap->addColumn('PREC_VTA1', 'PrecVta1', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_PREC_V', 'FecPrecV', 'VARCHAR', true, 255);

		$tMap->addColumn('FEC_PREC_2', 'FecPrec2', 'VARCHAR', true, 255);

		$tMap->addColumn('PREC_VTA2', 'PrecVta2', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_PREC_3', 'FecPrec3', 'VARCHAR', true, 255);

		$tMap->addColumn('PREC_VTA3', 'PrecVta3', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_PREC_4', 'FecPrec4', 'VARCHAR', true, 255);

		$tMap->addColumn('PREC_VTA4', 'PrecVta4', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_PREC_5', 'FecPrec5', 'VARCHAR', true, 255);

		$tMap->addColumn('PREC_VTA5', 'PrecVta5', 'DECIMAL', true, 20);

		$tMap->addColumn('PREC_AGR1', 'PrecAgr1', 'DECIMAL', true, 20);

		$tMap->addColumn('PREC_AGR2', 'PrecAgr2', 'DECIMAL', true, 20);

		$tMap->addColumn('PREC_AGR3', 'PrecAgr3', 'DECIMAL', true, 20);

		$tMap->addColumn('PREC_AGR4', 'PrecAgr4', 'DECIMAL', true, 20);

		$tMap->addColumn('PREC_AGR5', 'PrecAgr5', 'DECIMAL', true, 20);

		$tMap->addColumn('CAN_AGR', 'CanAgr', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_DES_P5', 'FecDesP5', 'VARCHAR', true, 255);

		$tMap->addColumn('FEC_HAS_P5', 'FecHasP5', 'VARCHAR', true, 255);

		$tMap->addColumn('CO_IMP', 'CoImp', 'CHAR', true, 4);

		$tMap->addColumn('MARGEN_MAX', 'MargenMax', 'DECIMAL', true, 20);

		$tMap->addColumn('ULT_COS_UN', 'UltCosUn', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_ULT_CO', 'FecUltCo', 'VARCHAR', true, 255);

		$tMap->addColumn('COS_PRO_UN', 'CosProUn', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_COS_PR', 'FecCosPr', 'VARCHAR', true, 255);

		$tMap->addColumn('COS_MERC', 'CosMerc', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_COS_ME', 'FecCosMe', 'VARCHAR', true, 255);

		$tMap->addColumn('COS_PROV', 'CosProv', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_COS_P2', 'FecCosP2', 'VARCHAR', true, 255);

		$tMap->addColumn('ULT_COS_DO', 'UltCosDo', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_COS_DO', 'FecCosDo', 'VARCHAR', true, 255);

		$tMap->addColumn('COS_UN_AN', 'CosUnAn', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_COS_AN', 'FecCosAn', 'VARCHAR', true, 255);

		$tMap->addColumn('ULT_COS_OM', 'UltCosOm', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_ULT_OM', 'FecUltOm', 'VARCHAR', true, 255);

		$tMap->addColumn('COS_PRO_OM', 'CosProOm', 'DECIMAL', true, 20);

		$tMap->addColumn('FEC_PRO_OM', 'FecProOm', 'VARCHAR', true, 255);

		$tMap->addColumn('TIPO_COS', 'TipoCos', 'CHAR', true, 4);

		$tMap->addColumn('MONT_COMI', 'MontComi', 'DECIMAL', true, 20);

		$tMap->addColumn('PORC_COS', 'PorcCos', 'DECIMAL', true, 20);

		$tMap->addColumn('MONT_COS', 'MontCos', 'DECIMAL', true, 20);

		$tMap->addColumn('PORC_GAS', 'PorcGas', 'DECIMAL', true, 20);

		$tMap->addColumn('MONT_GAS', 'MontGas', 'DECIMAL', true, 20);

		$tMap->addColumn('F_COST', 'FCost', 'VARCHAR', true, 255);

		$tMap->addColumn('FISICO', 'Fisico', 'BOOLEAN', true, null);

		$tMap->addColumn('PUNT_CLI', 'PuntCli', 'DECIMAL', true, 20);

		$tMap->addColumn('PUNT_PRO', 'PuntPro', 'DECIMAL', true, 20);

		$tMap->addColumn('DIAS_REPOS', 'DiasRepos', 'INTEGER', true, null);

		$tMap->addColumn('TIPO', 'Tipo', 'CHAR', true, 1);

		$tMap->addColumn('ALM_PRIN', 'AlmPrin', 'CHAR', true, 4);

		$tMap->addColumn('ANULADO', 'Anulado', 'BOOLEAN', true, null);

		$tMap->addForeignKey('TIPO_IMP', 'TipoImp', 'CHAR', 'tabulado', 'TIPO', true, 1);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'LONGVARCHAR', true, 2147483647);

		$tMap->addColumn('MON_ILC', 'MonIlc', 'DECIMAL', true, 20);

		$tMap->addColumn('CAPACIDAD', 'Capacidad', 'DECIMAL', true, 20);

		$tMap->addColumn('GRADO_AL', 'GradoAl', 'DECIMAL', true, 12);

		$tMap->addColumn('TIPO_LICOR', 'TipoLicor', 'CHAR', true, 1);

		$tMap->addColumn('COMPUESTO', 'Compuesto', 'BOOLEAN', true, null);

		$tMap->addColumn('PICTURE', 'Picture', 'LONGVARBINARY', false, null);

		$tMap->addColumn('CAMPO1', 'Campo1', 'VARCHAR', true, 60);

		$tMap->addColumn('CAMPO2', 'Campo2', 'VARCHAR', true, 60);

		$tMap->addColumn('CAMPO3', 'Campo3', 'VARCHAR', true, 60);

		$tMap->addColumn('CAMPO4', 'Campo4', 'VARCHAR', true, 60);

		$tMap->addColumn('CAMPO5', 'Campo5', 'VARCHAR', true, 60);

		$tMap->addColumn('CAMPO6', 'Campo6', 'VARCHAR', true, 60);

		$tMap->addColumn('CAMPO7', 'Campo7', 'VARCHAR', true, 60);

		$tMap->addColumn('CAMPO8', 'Campo8', 'VARCHAR', true, 60);

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

		$tMap->addColumn('TUNI_VENTA', 'TuniVenta', 'CHAR', true, 6);

		$tMap->addColumn('EQUI_UNI1', 'EquiUni1', 'DECIMAL', true, 20);

		$tMap->addColumn('EQUI_UNI2', 'EquiUni2', 'DECIMAL', true, 20);

		$tMap->addColumn('EQUI_UNI3', 'EquiUni3', 'DECIMAL', true, 20);

		$tMap->addColumn('LOTE', 'Lote', 'BOOLEAN', true, null);

		$tMap->addColumn('SERIALP', 'Serialp', 'CHAR', true, 30);

		$tMap->addColumn('VALIDO', 'Valido', 'BOOLEAN', true, null);

		$tMap->addColumn('ATRIBUTO1', 'Atributo1', 'BOOLEAN', true, null);

		$tMap->addColumn('VATRIBUTO1', 'Vatributo1', 'CHAR', true, 15);

		$tMap->addColumn('ATRIBUTO2', 'Atributo2', 'BOOLEAN', true, null);

		$tMap->addColumn('VATRIBUTO2', 'Vatributo2', 'CHAR', true, 15);

		$tMap->addColumn('ATRIBUTO3', 'Atributo3', 'BOOLEAN', true, null);

		$tMap->addColumn('VATRIBUTO3', 'Vatributo3', 'CHAR', true, 15);

		$tMap->addColumn('ATRIBUTO4', 'Atributo4', 'BOOLEAN', true, null);

		$tMap->addColumn('VATRIBUTO4', 'Vatributo4', 'CHAR', true, 15);

		$tMap->addColumn('ATRIBUTO5', 'Atributo5', 'BOOLEAN', true, null);

		$tMap->addColumn('VATRIBUTO5', 'Vatributo5', 'CHAR', true, 15);

		$tMap->addColumn('ATRIBUTO6', 'Atributo6', 'BOOLEAN', true, null);

		$tMap->addColumn('VATRIBUTO6', 'Vatributo6', 'CHAR', true, 15);

		$tMap->addColumn('GARANTIA', 'Garantia', 'CHAR', true, 30);

		$tMap->addColumn('PESO', 'Peso', 'DECIMAL', true, 20);

		$tMap->addColumn('PIE', 'Pie', 'DECIMAL', true, 20);

		$tMap->addColumn('MARGEN1', 'Margen1', 'DECIMAL', true, 20);

		$tMap->addColumn('MARGEN2', 'Margen2', 'DECIMAL', true, 20);

		$tMap->addColumn('MARGEN3', 'Margen3', 'DECIMAL', true, 20);

		$tMap->addColumn('MARGEN4', 'Margen4', 'DECIMAL', true, 20);

		$tMap->addColumn('MARGEN5', 'Margen5', 'DECIMAL', true, 20);

		$tMap->addColumn('ROW_ID', 'RowId', 'BINARY', true, null);

		$tMap->addColumn('IMAGEN1', 'Imagen1', 'VARCHAR', true, 60);

		$tMap->addColumn('IMAGEN2', 'Imagen2', 'VARCHAR', true, 60);

		$tMap->addColumn('I_ART_DES', 'IArtDes', 'VARCHAR', true, 60);

		$tMap->addColumn('UNI_EMP', 'UniEmp', 'CHAR', true, 6);

		$tMap->addColumn('REL_EMP', 'RelEmp', 'DECIMAL', true, 20);

		$tMap->addColumn('MOVIL', 'Movil', 'BOOLEAN', true, null);

	} // doBuild()

} // ArtMapBuilder
