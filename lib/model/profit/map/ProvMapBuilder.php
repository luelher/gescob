<?php


/**
 * This class adds structure of 'prov' table to 'profit' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Mon Dec  7 22:53:44 2009
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.profit.map
 */
class ProvMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.profit.map.ProvMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(ProvPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ProvPeer::TABLE_NAME);
		$tMap->setPhpName('Prov');
		$tMap->setClassname('Prov');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('CO_PROV', 'CoProv', 'CHAR', true, 10);

		$tMap->addColumn('PROV_DES', 'ProvDes', 'VARCHAR', true, 60);

		$tMap->addForeignKey('CO_SEG', 'CoSeg', 'CHAR', 'segmento', 'CO_SEG', true, 6);

		$tMap->addForeignKey('CO_ZON', 'CoZon', 'CHAR', 'zona', 'CO_ZON', true, 6);

		$tMap->addColumn('INACTIVO', 'Inactivo', 'BOOLEAN', true, null);

		$tMap->addColumn('PRODUCTOS', 'Productos', 'VARCHAR', true, 60);

		$tMap->addColumn('DIREC1', 'Direc1', 'LONGVARCHAR', true, 2147483647);

		$tMap->addColumn('DIREC2', 'Direc2', 'VARCHAR', true, 60);

		$tMap->addColumn('TELEFONOS', 'Telefonos', 'VARCHAR', true, 60);

		$tMap->addColumn('FAX', 'Fax', 'VARCHAR', true, 60);

		$tMap->addColumn('RESPONS', 'Respons', 'VARCHAR', true, 60);

		$tMap->addColumn('FECHA_REG', 'FechaReg', 'VARCHAR', true, 255);

		$tMap->addForeignKey('TIPO', 'Tipo', 'CHAR', 'tipo_pro', 'TIP_PRO', true, 6);

		$tMap->addColumn('COM_ULT_CO', 'ComUltCo', 'INTEGER', true, null);

		$tMap->addColumn('FEC_ULT_CO', 'FecUltCo', 'VARCHAR', true, 255);

		$tMap->addColumn('NET_ULT_CO', 'NetUltCo', 'DECIMAL', true, 20);

		$tMap->addColumn('SALDO', 'Saldo', 'DECIMAL', true, 20);

		$tMap->addColumn('SALDO_INI', 'SaldoIni', 'DECIMAL', true, 20);

		$tMap->addColumn('MONT_CRE', 'MontCre', 'DECIMAL', true, 20);

		$tMap->addColumn('PLAZ_PAG', 'PlazPag', 'INTEGER', true, null);

		$tMap->addColumn('DESC_PPAGO', 'DescPpago', 'DECIMAL', true, 20);

		$tMap->addColumn('DESC_GLOB', 'DescGlob', 'DECIMAL', true, 20);

		$tMap->addColumn('TIPO_IVA', 'TipoIva', 'CHAR', true, 1);

		$tMap->addColumn('IVA', 'Iva', 'DECIMAL', true, 20);

		$tMap->addColumn('RIF', 'Rif', 'CHAR', true, 18);

		$tMap->addColumn('NACIONAL', 'Nacional', 'BOOLEAN', true, null);

		$tMap->addColumn('DIS_CEN', 'DisCen', 'LONGVARCHAR', true, 2147483647);

		$tMap->addColumn('NIT', 'Nit', 'CHAR', true, 18);

		$tMap->addColumn('EMAIL', 'Email', 'VARCHAR', true, 60);

		$tMap->addForeignKey('CO_INGR', 'CoIngr', 'CHAR', 'cta_ingr', 'CO_INGR', true, 6);

		$tMap->addColumn('COMENTARIO', 'Comentario', 'LONGVARCHAR', true, 2147483647);

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

		$tMap->addColumn('JURIDICO', 'Juridico', 'BOOLEAN', true, null);

		$tMap->addColumn('TIPO_ADI', 'TipoAdi', 'NUMERIC', true, 3);

		$tMap->addColumn('MATRIZ', 'Matriz', 'CHAR', true, 10);

		$tMap->addColumn('CO_TAB', 'CoTab', 'INTEGER', true, null);

		$tMap->addColumn('TIPO_PER', 'TipoPer', 'CHAR', true, 1);

		$tMap->addColumn('CO_PAIS', 'CoPais', 'VARCHAR', true, 6);

		$tMap->addColumn('CIUDAD', 'Ciudad', 'VARCHAR', true, 50);

		$tMap->addColumn('ZIP', 'Zip', 'VARCHAR', true, 10);

		$tMap->addColumn('WEBSITE', 'Website', 'CHAR', true, 200);

		$tMap->addColumn('FORMTYPE', 'Formtype', 'CHAR', true, 30);

		$tMap->addColumn('TAXID', 'Taxid', 'CHAR', true, 20);

		$tMap->addColumn('CONTRIBU_E', 'ContribuE', 'BOOLEAN', true, null);

		$tMap->addColumn('PORC_ESP', 'PorcEsp', 'FLOAT', true, 8);

	} // doBuild()

} // ProvMapBuilder
