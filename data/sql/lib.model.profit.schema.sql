
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- clientes
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `clientes`;


CREATE TABLE `clientes`
(
	`co_cli` CHAR(10)  NOT NULL,
	`tipo` CHAR(6) default ' ' NOT NULL,
	`cli_des` VARCHAR(60) default ' ' NOT NULL,
	`direc1` TEXT(2147483647) default ' ' NOT NULL,
	`direc2` VARCHAR(60) default ' ' NOT NULL,
	`telefonos` VARCHAR(60) default ' ' NOT NULL,
	`fax` VARCHAR(60) default ' ' NOT NULL,
	`inactivo` TINYINT default 0 NOT NULL,
	`comentario` TEXT(2147483647) default ' ' NOT NULL,
	`respons` VARCHAR(60) default ' ' NOT NULL,
	`fecha_reg` VARCHAR(255)  NOT NULL,
	`puntaje` INTEGER default 0 NOT NULL,
	`saldo` FLOAT(8) default 0 NOT NULL,
	`saldo_ini` FLOAT(8) default 0 NOT NULL,
	`fac_ult_ve` INTEGER default 0 NOT NULL,
	`fec_ult_ve` VARCHAR(255)  NOT NULL,
	`net_ult_ve` DECIMAL(20,2) default 0 NOT NULL,
	`mont_cre` DECIMAL(20,2) default 0 NOT NULL,
	`plaz_pag` INTEGER default 0 NOT NULL,
	`desc_ppago` DECIMAL(20,2) default 0 NOT NULL,
	`co_zon` CHAR(6) default ' ' NOT NULL,
	`co_seg` CHAR(6) default ' ' NOT NULL,
	`co_ven` CHAR(6) default ' ' NOT NULL,
	`desc_glob` DECIMAL(20,2) default 0 NOT NULL,
	`horar_caja` VARCHAR(60) default ' ' NOT NULL,
	`frecu_vist` VARCHAR(60) default ' ' NOT NULL,
	`lunes` TINYINT default 0 NOT NULL,
	`martes` TINYINT default 0 NOT NULL,
	`miercoles` TINYINT default 0 NOT NULL,
	`jueves` TINYINT default 0 NOT NULL,
	`viernes` TINYINT default 0 NOT NULL,
	`sabado` TINYINT default 0 NOT NULL,
	`domingo` TINYINT default 0 NOT NULL,
	`dir_ent2` TEXT(2147483647) default ' ' NOT NULL,
	`tipo_iva` CHAR(1) default ' ' NOT NULL,
	`iva` DECIMAL(20,2) default 0 NOT NULL,
	`rif` CHAR(18) default ' ' NOT NULL,
	`contribu` TINYINT default 0 NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`nit` CHAR(18) default ' ' NOT NULL,
	`email` VARCHAR(60) default ' ' NOT NULL,
	`co_ingr` CHAR(6) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`campo5` VARCHAR(60) default ' ' NOT NULL,
	`campo6` VARCHAR(60) default ' ' NOT NULL,
	`campo7` VARCHAR(60) default ' ' NOT NULL,
	`campo8` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`juridico` TINYINT default 0 NOT NULL,
	`tipo_adi` DECIMAL(3) default 1 NOT NULL,
	`matriz` CHAR(10) default ' ' NOT NULL,
	`co_tab` INTEGER default 0 NOT NULL,
	`tipo_per` CHAR(1) default ' ' NOT NULL,
	`serialp` CHAR(30) default ' ' NOT NULL,
	`valido` TINYINT default 0 NOT NULL,
	`row_id` BLOB  NOT NULL,
	`estado` CHAR(1) default '(\'A\')' NOT NULL,
	`Id` INTEGER default -1 NOT NULL,
	`co_pais` VARCHAR(6) default ' ' NOT NULL,
	`ciudad` VARCHAR(50) default ' ' NOT NULL,
	`zip` VARCHAR(10) default ' ' NOT NULL,
	`login` VARCHAR(10) default ' ' NOT NULL,
	`password` VARCHAR(50) default ' ' NOT NULL,
	`website` VARCHAR(200) default ' ' NOT NULL,
	`salestax` CHAR(8) default ' ' NOT NULL,
	`contribu_e` TINYINT default 0 NOT NULL,
	`porc_esp` FLOAT(8) default 0 NOT NULL,
	PRIMARY KEY (`co_cli`),
	KEY `clientes_co_cli`(`co_cli`),
	KEY `index_1891537822`(`rowguid`),
	KEY `icli_des`(`cli_des`),
	KEY `ico_seg`(`co_seg`),
	KEY `ico_ven`(`co_ven`),
	KEY `ico_zon`(`co_zon`),
	KEY `itipo`(`tipo`),
	KEY `IX_clientes`(`login`),
	CONSTRAINT `clientes_FK_1`
		FOREIGN KEY (`tipo`)
		REFERENCES `tipo_cli` (`tip_cli`),
	CONSTRAINT `clientes_FK_2`
		FOREIGN KEY (`co_zon`)
		REFERENCES `zona` (`co_zon`),
	CONSTRAINT `clientes_FK_3`
		FOREIGN KEY (`co_seg`)
		REFERENCES `segmento` (`co_seg`),
	CONSTRAINT `clientes_FK_4`
		FOREIGN KEY (`co_ven`)
		REFERENCES `vendedor` (`co_ven`),
	INDEX `clientes_FI_5` (`co_ingr`),
	CONSTRAINT `clientes_FK_5`
		FOREIGN KEY (`co_ingr`)
		REFERENCES `cta_ingr` (`co_ingr`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- factura
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `factura`;


CREATE TABLE `factura`
(
	`fact_num` INTEGER  NOT NULL,
	`contrib` TINYINT default 0 NOT NULL,
	`nombre` VARCHAR(60) default ' ' NOT NULL,
	`rif` CHAR(18) default ' ' NOT NULL,
	`nit` CHAR(18) default ' ' NOT NULL,
	`num_control` INTEGER default 0 NOT NULL,
	`status` CHAR(1) default ' ' NOT NULL,
	`comentario` TEXT(2147483647) default ' ' NOT NULL,
	`descrip` VARCHAR(60) default ' ' NOT NULL,
	`saldo` DECIMAL(20,2) default 0 NOT NULL,
	`fec_emis` VARCHAR(255)  NOT NULL,
	`fec_venc` VARCHAR(255)  NOT NULL,
	`co_cli` CHAR(10) default ' ' NOT NULL,
	`co_ven` CHAR(6) default ' ' NOT NULL,
	`co_tran` CHAR(6) default ' ' NOT NULL,
	`dir_ent` TEXT(2147483647) default ' ' NOT NULL,
	`forma_pag` CHAR(6) default ' ' NOT NULL,
	`tot_bruto` DECIMAL(20,2) default 0 NOT NULL,
	`tot_neto` DECIMAL(20,2) default 0 NOT NULL,
	`glob_desc` DECIMAL(20,2) default 0 NOT NULL,
	`tot_reca` DECIMAL(20,2) default 0 NOT NULL,
	`porc_gdesc` CHAR(15) default ' ' NOT NULL,
	`porc_reca` CHAR(15) default ' ' NOT NULL,
	`total_uc` DECIMAL(20,2) default 0 NOT NULL,
	`total_cp` DECIMAL(20,2) default 0 NOT NULL,
	`tot_flete` DECIMAL(20,2) default 0 NOT NULL,
	`monto_dev` DECIMAL(20,2) default 0 NOT NULL,
	`totklu` DECIMAL(20,2) default 0 NOT NULL,
	`anulada` TINYINT default 0 NOT NULL,
	`impresa` TINYINT default 0 NOT NULL,
	`iva` DECIMAL(20,2) default 0 NOT NULL,
	`iva_dev` DECIMAL(20,2) default 0 NOT NULL,
	`numcom` INTEGER default 0 NOT NULL,
	`tasa` DECIMAL(20,5) default 1 NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`vuelto` DECIMAL(20,2) default 0 NOT NULL,
	`seriales` INTEGER default 0 NOT NULL,
	`tasag` DECIMAL(20,5) default 0 NOT NULL,
	`tasag10` DECIMAL(20,5) default 0 NOT NULL,
	`tasag20` DECIMAL(20,5) default 0 NOT NULL,
	`ID` INTEGER default -1 NOT NULL,
	PRIMARY KEY (`fact_num`),
	KEY `factura_fac_num`(`fact_num`),
	KEY `index_1456060273`(`rowguid`),
	KEY `factura_num_turno`(`num_turno`),
	KEY `ico_cli`(`co_cli`),
	KEY `ico_tran`(`co_tran`),
	KEY `ico_ven`(`co_ven`),
	KEY `ifec_emis`(`fec_emis`),
	KEY `ifeccom_numcom`(`feccom`, `numcom`),
	KEY `iforma_pag`(`forma_pag`),
	KEY `imoneda`(`moneda`),
	KEY `istatus`(`status`),
	KEY `IX_factura`(`ID`),
	KEY `IX_factura_1`(`fe_us_mo`),
	CONSTRAINT `factura_FK_1`
		FOREIGN KEY (`co_cli`)
		REFERENCES `clientes` (`co_cli`),
	CONSTRAINT `factura_FK_2`
		FOREIGN KEY (`co_ven`)
		REFERENCES `vendedor` (`co_ven`),
	CONSTRAINT `factura_FK_3`
		FOREIGN KEY (`co_tran`)
		REFERENCES `transpor` (`co_tran`),
	CONSTRAINT `factura_FK_4`
		FOREIGN KEY (`forma_pag`)
		REFERENCES `condicio` (`co_cond`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- art
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `art`;


CREATE TABLE `art`
(
	`co_art` CHAR(30)  NOT NULL,
	`art_des` VARCHAR(120) default ' ' NOT NULL,
	`fecha_reg` VARCHAR(255)  NOT NULL,
	`manj_ser` TINYINT default 0 NOT NULL,
	`co_lin` CHAR(6) default ' ' NOT NULL,
	`co_cat` CHAR(6) default ' ' NOT NULL,
	`co_subl` CHAR(6) default ' ' NOT NULL,
	`co_color` CHAR(6) default ' ' NOT NULL,
	`item` CHAR(10) default ' ' NOT NULL,
	`ref` CHAR(20) default ' ' NOT NULL,
	`modelo` CHAR(20) default ' ' NOT NULL,
	`procedenci` CHAR(6) default ' ' NOT NULL,
	`comentario` TEXT(2147483647) default ' ' NOT NULL,
	`co_prov` CHAR(10) default ' ' NOT NULL,
	`ubicacion` VARCHAR(60) default ' ' NOT NULL,
	`uni_venta` CHAR(6) default ' ' NOT NULL,
	`uni_compra` CHAR(6) default ' ' NOT NULL,
	`uni_relac` DECIMAL(20,5) default 0 NOT NULL,
	`relac_aut` INTEGER default 0 NOT NULL,
	`stock_act` DECIMAL(20,5) default 0 NOT NULL,
	`stock_com` DECIMAL(20,5) default 0 NOT NULL,
	`sstock_com` DECIMAL(20,5) default 0 NOT NULL,
	`stock_lle` DECIMAL(20,5) default 0 NOT NULL,
	`sstock_lle` DECIMAL(20,5) default 0 NOT NULL,
	`stock_des` DECIMAL(20,5) default 0 NOT NULL,
	`sstock_des` DECIMAL(20,5) default 0 NOT NULL,
	`suni_venta` CHAR(6) default ' ' NOT NULL,
	`suni_compr` CHAR(6) default ' ' NOT NULL,
	`suni_relac` DECIMAL(20,3) default 0 NOT NULL,
	`sstock_act` DECIMAL(20,5) default 0 NOT NULL,
	`relac_comp` DECIMAL(20,5) default 0 NOT NULL,
	`relac_vent` DECIMAL(20,5) default 0 NOT NULL,
	`pto_pedido` DECIMAL(20,5) default 0 NOT NULL,
	`stock_max` DECIMAL(20,5) default 0 NOT NULL,
	`stock_min` DECIMAL(20,5) default 0 NOT NULL,
	`prec_om` TINYINT default 0 NOT NULL,
	`prec_vta1` DECIMAL(20,5) default 0 NOT NULL,
	`fec_prec_v` VARCHAR(255)  NOT NULL,
	`fec_prec_2` VARCHAR(255)  NOT NULL,
	`prec_vta2` DECIMAL(20,5) default 0 NOT NULL,
	`fec_prec_3` VARCHAR(255)  NOT NULL,
	`prec_vta3` DECIMAL(20,5) default 0 NOT NULL,
	`fec_prec_4` VARCHAR(255)  NOT NULL,
	`prec_vta4` DECIMAL(20,5) default 0 NOT NULL,
	`fec_prec_5` VARCHAR(255)  NOT NULL,
	`prec_vta5` DECIMAL(20,5) default 0 NOT NULL,
	`prec_agr1` DECIMAL(20,5) default 0 NOT NULL,
	`prec_agr2` DECIMAL(20,5) default 0 NOT NULL,
	`prec_agr3` DECIMAL(20,5) default 0 NOT NULL,
	`prec_agr4` DECIMAL(20,5) default 0 NOT NULL,
	`prec_agr5` DECIMAL(20,5) default 0 NOT NULL,
	`can_agr` DECIMAL(20,5) default 0 NOT NULL,
	`fec_des_p5` VARCHAR(255)  NOT NULL,
	`fec_has_p5` VARCHAR(255)  NOT NULL,
	`co_imp` CHAR(4) default ' ' NOT NULL,
	`margen_max` DECIMAL(20,2) default 0 NOT NULL,
	`ult_cos_un` DECIMAL(20,5) default 0 NOT NULL,
	`fec_ult_co` VARCHAR(255)  NOT NULL,
	`cos_pro_un` DECIMAL(20,5) default 0 NOT NULL,
	`fec_cos_pr` VARCHAR(255)  NOT NULL,
	`cos_merc` DECIMAL(20,5) default 0 NOT NULL,
	`fec_cos_me` VARCHAR(255)  NOT NULL,
	`cos_prov` DECIMAL(20,5) default 0 NOT NULL,
	`fec_cos_p2` VARCHAR(255)  NOT NULL,
	`ult_cos_do` DECIMAL(20,5) default 0 NOT NULL,
	`fec_cos_do` VARCHAR(255)  NOT NULL,
	`cos_un_an` DECIMAL(20,5) default 0 NOT NULL,
	`fec_cos_an` VARCHAR(255)  NOT NULL,
	`ult_cos_om` DECIMAL(20,5) default 0 NOT NULL,
	`fec_ult_om` VARCHAR(255)  NOT NULL,
	`cos_pro_om` DECIMAL(20,5) default 0 NOT NULL,
	`fec_pro_om` VARCHAR(255)  NOT NULL,
	`tipo_cos` CHAR(4) default ' ' NOT NULL,
	`mont_comi` DECIMAL(20,2) default 0 NOT NULL,
	`porc_cos` DECIMAL(20,2) default 0 NOT NULL,
	`mont_cos` DECIMAL(20,2) default 0 NOT NULL,
	`porc_gas` DECIMAL(20,2) default 0 NOT NULL,
	`mont_gas` DECIMAL(20,2) default 0 NOT NULL,
	`f_cost` VARCHAR(255)  NOT NULL,
	`fisico` TINYINT default 0 NOT NULL,
	`punt_cli` DECIMAL(20,2) default 0 NOT NULL,
	`punt_pro` DECIMAL(20,2) default 0 NOT NULL,
	`dias_repos` INTEGER default 0 NOT NULL,
	`tipo` CHAR(1) default ' ' NOT NULL,
	`alm_prin` CHAR(4) default ' ' NOT NULL,
	`anulado` TINYINT default 0 NOT NULL,
	`tipo_imp` CHAR(1) default ' ' NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`mon_ilc` DECIMAL(20,2) default 0 NOT NULL,
	`capacidad` DECIMAL(20,3) default 0 NOT NULL,
	`grado_al` DECIMAL(12,2) default 0 NOT NULL,
	`tipo_licor` CHAR(1) default ' ' NOT NULL,
	`compuesto` TINYINT default 0 NOT NULL,
	`picture` LONGBLOB,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`campo5` VARCHAR(60) default ' ' NOT NULL,
	`campo6` VARCHAR(60) default ' ' NOT NULL,
	`campo7` VARCHAR(60) default ' ' NOT NULL,
	`campo8` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`tuni_venta` CHAR(6) default ' ' NOT NULL,
	`equi_uni1` DECIMAL(20,5) default 1 NOT NULL,
	`equi_uni2` DECIMAL(20,5) default 1 NOT NULL,
	`equi_uni3` DECIMAL(20,5) default 1 NOT NULL,
	`lote` TINYINT default 0 NOT NULL,
	`serialp` CHAR(30) default ' ' NOT NULL,
	`valido` TINYINT default 0 NOT NULL,
	`atributo1` TINYINT default 0 NOT NULL,
	`vatributo1` CHAR(15) default ' ' NOT NULL,
	`atributo2` TINYINT default 0 NOT NULL,
	`vatributo2` CHAR(15) default ' ' NOT NULL,
	`atributo3` TINYINT default 0 NOT NULL,
	`vatributo3` CHAR(15) default ' ' NOT NULL,
	`atributo4` TINYINT default 0 NOT NULL,
	`vatributo4` CHAR(15) default ' ' NOT NULL,
	`atributo5` TINYINT default 0 NOT NULL,
	`vatributo5` CHAR(15) default ' ' NOT NULL,
	`atributo6` TINYINT default 0 NOT NULL,
	`vatributo6` CHAR(15) default ' ' NOT NULL,
	`garantia` CHAR(30) default ' ' NOT NULL,
	`peso` DECIMAL(20,5) default 0 NOT NULL,
	`pie` DECIMAL(20,5) default 0 NOT NULL,
	`margen1` DECIMAL(20,2) default 0 NOT NULL,
	`margen2` DECIMAL(20,2) default 0 NOT NULL,
	`margen3` DECIMAL(20,2) default 0 NOT NULL,
	`margen4` DECIMAL(20,2) default 0 NOT NULL,
	`margen5` DECIMAL(20,2) default 0 NOT NULL,
	`row_id` BLOB  NOT NULL,
	`imagen1` VARCHAR(60) default ' ' NOT NULL,
	`imagen2` VARCHAR(60) default ' ' NOT NULL,
	`i_art_des` VARCHAR(60) default ' ' NOT NULL,
	`uni_emp` CHAR(6) default ' ' NOT NULL,
	`rel_emp` DECIMAL(20,5) default 1 NOT NULL,
	`movil` TINYINT default 0 NOT NULL,
	PRIMARY KEY (`co_art`),
	KEY `art_co_art`(`co_art`),
	KEY `index_16055143`(`rowguid`),
	KEY `iart_des`(`art_des`),
	KEY `ico_cat`(`co_cat`),
	KEY `ico_color`(`co_color`),
	KEY `ico_lin`(`co_lin`),
	KEY `ico_prov`(`co_prov`),
	KEY `ico_subl`(`co_subl`, `co_lin`),
	KEY `iprocedenc`(`procedenci`),
	KEY `isuni_vent`(`suni_venta`),
	KEY `itipo_imp`(`tipo_imp`),
	KEY `iuni_venta`(`uni_venta`),
	KEY `modelo`(`modelo`),
	KEY `ref`(`ref`),
	CONSTRAINT `art_FK_1`
		FOREIGN KEY (`co_lin`)
		REFERENCES `lin_art` (`co_lin`),
	CONSTRAINT `art_FK_2`
		FOREIGN KEY (`co_cat`)
		REFERENCES `cat_art` (`co_cat`),
	CONSTRAINT `art_FK_3`
		FOREIGN KEY (`co_subl`)
		REFERENCES `sub_lin` (`co_lin`),
	CONSTRAINT `art_FK_4`
		FOREIGN KEY (`co_color`)
		REFERENCES `colores` (`co_col`),
	CONSTRAINT `art_FK_5`
		FOREIGN KEY (`procedenci`)
		REFERENCES `proceden` (`cod_proc`),
	CONSTRAINT `art_FK_6`
		FOREIGN KEY (`co_prov`)
		REFERENCES `prov` (`co_prov`),
	CONSTRAINT `art_FK_7`
		FOREIGN KEY (`uni_venta`)
		REFERENCES `unidades` (`co_uni`),
	CONSTRAINT `art_FK_8`
		FOREIGN KEY (`suni_venta`)
		REFERENCES `unidades` (`co_uni`),
	CONSTRAINT `art_FK_9`
		FOREIGN KEY (`tipo_imp`)
		REFERENCES `tabulado` (`tipo`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- reng_fac
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `reng_fac`;


CREATE TABLE `reng_fac`
(
	`fact_num` INTEGER  NOT NULL,
	`reng_num` INTEGER  NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`tipo_doc` CHAR(1) default ' ' NOT NULL,
	`reng_doc` INTEGER default 0 NOT NULL,
	`num_doc` INTEGER default 0 NOT NULL,
	`co_art` CHAR(30) default ' ' NOT NULL,
	`co_alma` CHAR(6) default ' ' NOT NULL,
	`total_art` DECIMAL(20,5) default 0 NOT NULL,
	`stotal_art` DECIMAL(20,5) default 0 NOT NULL,
	`pendiente` DECIMAL(20,5) default 0 NOT NULL,
	`uni_venta` CHAR(6) default ' ' NOT NULL,
	`prec_vta` DECIMAL(20,5) default 0 NOT NULL,
	`porc_desc` CHAR(15) default ' ' NOT NULL,
	`tipo_imp` CHAR(1) default ' ' NOT NULL,
	`isv` DECIMAL(20,5) default 0 NOT NULL,
	`reng_neto` DECIMAL(20,2) default 0 NOT NULL,
	`cos_pro_un` DECIMAL(20,5) default 0 NOT NULL,
	`ult_cos_un` DECIMAL(20,5) default 0 NOT NULL,
	`ult_cos_om` DECIMAL(20,5) default 0 NOT NULL,
	`cos_pro_om` DECIMAL(20,5) default 0 NOT NULL,
	`total_dev` DECIMAL(20,5) default 0 NOT NULL,
	`monto_dev` DECIMAL(20,5) default 0 NOT NULL,
	`prec_vta2` DECIMAL(20,5) default 0 NOT NULL,
	`anulado` TINYINT default 0 NOT NULL,
	`des_art` TEXT(2147483647) default ' ' NOT NULL,
	`seleccion` TINYINT default 0 NOT NULL,
	`cant_imp` DECIMAL(20,5) default 0 NOT NULL,
	`comentario` TEXT(2147483647) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`total_uni` DECIMAL(20,5) default 1 NOT NULL,
	`mon_ilc` DECIMAL(20,5) default 0 NOT NULL,
	`otros` DECIMAL(20,5) default 0 NOT NULL,
	`nro_lote` CHAR(20) default ' ' NOT NULL,
	`fec_lote` VARCHAR(255)  NOT NULL,
	`pendiente2` DECIMAL(20,5) default 0 NOT NULL,
	`tipo_doc2` CHAR(1) default ' ' NOT NULL,
	`reng_doc2` INTEGER default 0 NOT NULL,
	`num_doc2` INTEGER default 0 NOT NULL,
	`tipo_prec` CHAR(1) default ' ' NOT NULL,
	`co_alma2` CHAR(6) default ' ' NOT NULL,
	`aux01` DECIMAL(20,5) default 0 NOT NULL,
	`aux02` VARCHAR(30) default ' ' NOT NULL,
	`cant_prod` DECIMAL(20,5) default 0 NOT NULL,
	`imp_prod` DECIMAL(20,5) default 0 NOT NULL,
	PRIMARY KEY (`fact_num`,`reng_num`),
	KEY `index_647009386`(`rowguid`),
	KEY `reng_fac_reng_fac`(`fact_num`, `reng_num`),
	KEY `fact_num`(`fact_num`),
	KEY `ico_alma`(`co_alma`),
	KEY `ico_art`(`co_art`),
	KEY `reng_num`(`reng_num`),
	CONSTRAINT `reng_fac_FK_1`
		FOREIGN KEY (`co_art`)
		REFERENCES `art` (`co_art`),
	CONSTRAINT `reng_fac_FK_2`
		FOREIGN KEY (`co_alma`)
		REFERENCES `sub_alma` (`co_sub`),
	INDEX `reng_fac_FI_3` (`tipo_imp`),
	CONSTRAINT `reng_fac_FK_3`
		FOREIGN KEY (`tipo_imp`)
		REFERENCES `tabulado` (`tipo`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- docum_cc
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `docum_cc`;


CREATE TABLE `docum_cc`
(
	`tipo_doc` CHAR(4)  NOT NULL,
	`nro_doc` INTEGER  NOT NULL,
	`anulado` TINYINT default 0 NOT NULL,
	`movi` INTEGER default 0 NOT NULL,
	`aut` TINYINT default 0 NOT NULL,
	`num_control` INTEGER default 0 NOT NULL,
	`co_cli` CHAR(10) default ' ' NOT NULL,
	`contrib` TINYINT default 0 NOT NULL,
	`fec_emis` DATE  NOT NULL,
	`fec_venc` DATE  NOT NULL,
	`observa` VARCHAR(120) default ' ' NOT NULL,
	`doc_orig` CHAR(4) default ' ' NOT NULL,
	`nro_orig` INTEGER default 0 NOT NULL,
	`co_ban` CHAR(6) default '(\'0\')' NOT NULL,
	`nro_che` CHAR(15) default ' ' NOT NULL,
	`co_ven` CHAR(6) default ' ' NOT NULL,
	`tipo` CHAR(1) default '(\'1\')' NOT NULL,
	`tasa` DECIMAL(20,5) default 1 NOT NULL,
	`moneda` CHAR(6) default ' ' NOT NULL,
	`monto_imp` DECIMAL(20,2) default 0 NOT NULL,
	`monto_gen` DECIMAL(20,5) default 0 NOT NULL,
	`monto_a1` DECIMAL(20,5) default 0 NOT NULL,
	`monto_a2` DECIMAL(20,5) default 0 NOT NULL,
	`monto_bru` DECIMAL(20,2) default 0 NOT NULL,
	`descuentos` CHAR(15) default ' ' NOT NULL,
	`monto_des` DECIMAL(20,2) default 0 NOT NULL,
	`recargo` CHAR(15) default ' ' NOT NULL,
	`monto_rec` DECIMAL(20,2) default 0 NOT NULL,
	`monto_otr` DECIMAL(20,2) default 0 NOT NULL,
	`monto_net` DECIMAL(20,2) default 0 NOT NULL,
	`saldo` DECIMAL(20,2) default 0 NOT NULL,
	`feccom` VARCHAR(255)  NOT NULL,
	`numcom` INTEGER default 0 NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`comis1` DECIMAL(20,2) default 0 NOT NULL,
	`comis2` DECIMAL(20,2) default 0 NOT NULL,
	`comis3` DECIMAL(20,2) default 0 NOT NULL,
	`comis4` DECIMAL(20,2) default 0 NOT NULL,
	`adicional` DECIMAL(20,2) default 0 NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`campo5` VARCHAR(60) default ' ' NOT NULL,
	`campo6` VARCHAR(60) default ' ' NOT NULL,
	`campo7` VARCHAR(60) default ' ' NOT NULL,
	`campo8` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`numcon` CHAR(20) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`mon_ilc` DECIMAL(20,5) default 0 NOT NULL,
	`otros1` DECIMAL(20,5) default 0 NOT NULL,
	`otros2` DECIMAL(20,5) default 0 NOT NULL,
	`otros3` DECIMAL(20,5) default 0 NOT NULL,
	`reng_si` TINYINT default 0 NOT NULL,
	`comis5` DECIMAL(20,2) default 0 NOT NULL,
	`comis6` DECIMAL(20,2) default 0 NOT NULL,
	`row_id` BLOB  NOT NULL,
	`aux01` DECIMAL(20,5) default 0 NOT NULL,
	`aux02` VARCHAR(30) default ' ' NOT NULL,
	`salestax` CHAR(8) default ' ' NOT NULL,
	`origen` CHAR(1) default ' ',
	`origen_d` CHAR(20) default ' ',
	`fec_reg` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`tipo_doc`,`nro_doc`),
	KEY `docum_cc_docc_nro`(`tipo_doc`, `nro_doc`),
	KEY `index_1107535029`(`rowguid`),
	KEY `ico_ban`(`co_ban`),
	KEY `ico_cli`(`co_cli`),
	KEY `ico_ven`(`co_ven`),
	KEY `idocc_nro`(`tipo_doc`),
	KEY `idocc_nro2`(`nro_doc`),
	KEY `ifec_emis`(`fec_emis`),
	KEY `ifeccom_numcom`(`feccom`, `numcom`),
	KEY `imoneda`(`moneda`),
	KEY `isaldo`(`saldo`),
	CONSTRAINT `docum_cc_FK_1`
		FOREIGN KEY (`co_cli`)
		REFERENCES `clientes` (`co_cli`),
	CONSTRAINT `docum_cc_FK_2`
		FOREIGN KEY (`co_ven`)
		REFERENCES `vendedor` (`co_ven`),
	INDEX `docum_cc_FI_3` (`tipo`),
	CONSTRAINT `docum_cc_FK_3`
		FOREIGN KEY (`tipo`)
		REFERENCES `tabulado` (`tipo`),
	CONSTRAINT `docum_cc_FK_4`
		FOREIGN KEY (`moneda`)
		REFERENCES `moneda` (`co_mone`),
	INDEX `docum_cc_FI_5` (`co_sucu`),
	CONSTRAINT `docum_cc_FK_5`
		FOREIGN KEY (`co_sucu`)
		REFERENCES `almacen` (`co_alma`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- reng_cob
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `reng_cob`;


CREATE TABLE `reng_cob`
(
	`cob_num` INTEGER  NOT NULL,
	`reng_num` INTEGER  NOT NULL,
	`tp_doc_cob` CHAR(4) default ' ' NOT NULL,
	`doc_num` INTEGER default 0 NOT NULL,
	`neto` DECIMAL(20,2) default 0 NOT NULL,
	`neto_tmp` DECIMAL(20,2) default 0 NOT NULL,
	`dppago` DECIMAL(20,2) default 0 NOT NULL,
	`dppago_tmp` INTEGER default 0 NOT NULL,
	`reng_ncr` INTEGER default 0 NOT NULL,
	`co_ven` CHAR(4) default ' ' NOT NULL,
	`comis1` DECIMAL(20,2) default 0 NOT NULL,
	`comis2` DECIMAL(20,2) default 0 NOT NULL,
	`comis3` DECIMAL(20,2) default 0 NOT NULL,
	`comis4` DECIMAL(20,2) default 0 NOT NULL,
	`sign_aju_c` CHAR(1) default ' ' NOT NULL,
	`porc_aju_c` DECIMAL(20,2) default 0 NOT NULL,
	`por_cob` DECIMAL(20,2) default 0 NOT NULL,
	`comi_cob` DECIMAL(20,2) default 0 NOT NULL,
	`mont_cob` DECIMAL(20,2) default 0 NOT NULL,
	`sino_pago` TINYINT default 0 NOT NULL,
	`sino_reten` TINYINT default 0 NOT NULL,
	`monto_dppago` DECIMAL(20,5) default 0 NOT NULL,
	`monto_reten` DECIMAL(20,5) default 0 NOT NULL,
	`imp_pago` DECIMAL(20,2) default 0 NOT NULL,
	`monto_obj` DECIMAL(20,2) default 0 NOT NULL,
	`isv` DECIMAL(20,2) default 0 NOT NULL,
	`nro_fact` CHAR(20) default ' ' NOT NULL,
	`moneda` CHAR(10) default ' ' NOT NULL,
	`tasa` DECIMAL(20,5) default 1 NOT NULL,
	`numcon` CHAR(20) default ' ' NOT NULL,
	`sustraen` DECIMAL(20,2) default 0 NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`co_islr` CHAR(6) default ' ' NOT NULL,
	`fec_emis` VARCHAR(255)  NOT NULL,
	`fec_venc` VARCHAR(255)  NOT NULL,
	`comis5` DECIMAL(20,2) default 0 NOT NULL,
	`comis6` DECIMAL(20,2) default 0 NOT NULL,
	`fact_iva` INTEGER default 0 NOT NULL,
	`ret_iva` DECIMAL(20,2) default 0 NOT NULL,
	`porc_retn` DECIMAL(20,8) default 0 NOT NULL,
	`porc_desc` DECIMAL(20,8) default 0 NOT NULL,
	`aux01` DECIMAL(20,5) default 0 NOT NULL,
	`aux02` VARCHAR(30) default ' ' NOT NULL,
	PRIMARY KEY (`cob_num`,`reng_num`),
	KEY `index_1788585460`(`rowguid`),
	KEY `reng_cob_reng_cob`(`reng_num`, `cob_num`),
	KEY `cobnum`(`cob_num`),
	KEY `doc_num`(`doc_num`),
	KEY `itp_doc_co`(`tp_doc_cob`),
	KEY `rengnum`(`reng_num`),
	CONSTRAINT `reng_cob_FK_1`
		FOREIGN KEY (`doc_num`)
		REFERENCES `docum_cc` (`nro_doc`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- cobros
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `cobros`;


CREATE TABLE `cobros`
(
	`cob_num` INTEGER  NOT NULL,
	`recibo` CHAR(15) default ' ' NOT NULL,
	`co_cli` CHAR(10) default ' ' NOT NULL,
	`co_ven` CHAR(6) default ' ' NOT NULL,
	`fec_cob` DATE  NOT NULL,
	`anulado` TINYINT default 0 NOT NULL,
	`monto` DECIMAL(20,2) default 0 NOT NULL,
	`dppago` DECIMAL(20,2) default 0 NOT NULL,
	`mont_ncr` DECIMAL(20,2) default 0 NOT NULL,
	`ncr` INTEGER default 0 NOT NULL,
	`tcomi_porc` DECIMAL(20,2) default 0 NOT NULL,
	`tcomi_line` DECIMAL(20,2) default 0 NOT NULL,
	`tcomi_art` DECIMAL(20,2) default 0 NOT NULL,
	`tcomi_conc` DECIMAL(20,2) default 0 NOT NULL,
	`feccom` VARCHAR(255)  NOT NULL,
	`tasa` DECIMAL(20,5) default 1 NOT NULL,
	`moneda` CHAR(6) default ' ' NOT NULL,
	`numcom` INTEGER default 0 NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`campo5` VARCHAR(60) default ' ' NOT NULL,
	`campo6` VARCHAR(60) default ' ' NOT NULL,
	`campo7` VARCHAR(60) default ' ' NOT NULL,
	`campo8` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`recargo` TINYINT default 0 NOT NULL,
	`adel_num` INTEGER default 0 NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`descrip` VARCHAR(60) default ' ' NOT NULL,
	`num_dev` INTEGER default 0 NOT NULL,
	`devdinero` TINYINT default 0 NOT NULL,
	`num_turno` INTEGER default 0 NOT NULL,
	`aux01` DECIMAL(20,5) default 0 NOT NULL,
	`aux02` VARCHAR(30) default ' ' NOT NULL,
	`origen` CHAR(1) default ' ',
	`origen_d` CHAR(20) default ' ',
	PRIMARY KEY (`cob_num`),
	KEY `cobros_cob_num`(`cob_num`),
	KEY `index_464056739`(`rowguid`),
	KEY `ico_cli`(`co_cli`),
	KEY `ico_ven`(`co_ven`),
	KEY `ifec_cob`(`fec_cob`),
	KEY `ifeccom_numcom`(`feccom`, `numcom`),
	KEY `imoneda`(`moneda`),
	KEY `IX_cobros`(`num_turno`),
	CONSTRAINT `cobros_FK_1`
		FOREIGN KEY (`cob_num`)
		REFERENCES `reng_cob` (`cob_num`),
	CONSTRAINT `cobros_FK_2`
		FOREIGN KEY (`co_cli`)
		REFERENCES `clientes` (`co_cli`),
	CONSTRAINT `cobros_FK_3`
		FOREIGN KEY (`co_ven`)
		REFERENCES `vendedor` (`co_ven`),
	CONSTRAINT `cobros_FK_4`
		FOREIGN KEY (`moneda`)
		REFERENCES `moneda` (`co_mone`),
	INDEX `cobros_FI_5` (`co_sucu`),
	CONSTRAINT `cobros_FK_5`
		FOREIGN KEY (`co_sucu`)
		REFERENCES `almacen` (`co_alma`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- reng_tip
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `reng_tip`;


CREATE TABLE `reng_tip`
(
	`cob_num` INTEGER  NOT NULL,
	`reng_num` INTEGER  NOT NULL,
	`tip_cob` CHAR(4) default ' ' NOT NULL,
	`movi` INTEGER default 0 NOT NULL,
	`num_doc` CHAR(20) default ' ' NOT NULL,
	`mont_doc` DECIMAL(20,2) default 0 NOT NULL,
	`mont_tmp` DECIMAL(20,2) default 0 NOT NULL,
	`moneda` CHAR(8) default ' ' NOT NULL,
	`banco` CHAR(6) default ' ' NOT NULL,
	`cod_caja` CHAR(6) default ' ' NOT NULL,
	`des_caja` CHAR(20) default ' ' NOT NULL,
	`fec_cheq` VARCHAR(255)  NOT NULL,
	`nombre_ban` CHAR(15) default ' ' NOT NULL,
	`numero` CHAR(20) default ' ' NOT NULL,
	`devuelto` TINYINT default 0 NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`operador` CHAR(4) default ' ' NOT NULL,
	`clave` CHAR(6) default ' ' NOT NULL,
	PRIMARY KEY (`cob_num`,`reng_num`),
	KEY `index_1338487847`(`rowguid`),
	KEY `reng_tip_reng_tip`(`reng_num`, `cob_num`),
	KEY `cobnum`(`cob_num`),
	KEY `IX_reng_tip`(`movi`),
	KEY `reng_num`(`reng_num`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tipo_cli
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tipo_cli`;


CREATE TABLE `tipo_cli`
(
	`tip_cli` CHAR(6)  NOT NULL,
	`des_tipo` VARCHAR(60) default ' ' NOT NULL,
	`precio_a` CHAR(20) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`row_id` BLOB  NOT NULL,
	PRIMARY KEY (`tip_cli`),
	KEY `index_1212583408`(`rowguid`),
	KEY `tipo_cli_tip_cli`(`tip_cli`),
	KEY `ides_tipo`(`des_tipo`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- zona
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `zona`;


CREATE TABLE `zona`
(
	`co_zon` CHAR(6)  NOT NULL,
	`zon_des` VARCHAR(60) default ' ' NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	PRIMARY KEY (`co_zon`),
	KEY `index_1708585175`(`rowguid`),
	KEY `zona_co_zon`(`co_zon`),
	KEY `izon_des`(`zon_des`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- segmento
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `segmento`;


CREATE TABLE `segmento`
(
	`co_seg` CHAR(6)  NOT NULL,
	`seg_des` VARCHAR(60) default ' ' NOT NULL,
	`c_cuenta` CHAR(20) default ' ' NOT NULL,
	`p_cuenta` CHAR(20) default ' ' NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	PRIMARY KEY (`co_seg`),
	KEY `index_796581926`(`rowguid`),
	KEY `segmento_co_seg`(`co_seg`),
	KEY `iseg_des`(`seg_des`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- vendedor
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `vendedor`;


CREATE TABLE `vendedor`
(
	`co_ven` CHAR(6)  NOT NULL,
	`tipo` CHAR(1) default ' ' NOT NULL,
	`ven_des` VARCHAR(60) default ' ' NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`cedula` CHAR(16) default ' ' NOT NULL,
	`direc1` VARCHAR(60) default ' ' NOT NULL,
	`direc2` VARCHAR(60) default ' ' NOT NULL,
	`telefonos` VARCHAR(60) default ' ' NOT NULL,
	`fecha_reg` VARCHAR(255)  NOT NULL,
	`condic` TINYINT default 0 NOT NULL,
	`comision` DECIMAL(20,2) default 0 NOT NULL,
	`comen` TEXT(2147483647) default ' ' NOT NULL,
	`fun_cob` TINYINT default 0 NOT NULL,
	`fun_ven` TINYINT default 0 NOT NULL,
	`comisionv` DECIMAL(20,2) default 0 NOT NULL,
	`fac_ult_ve` INTEGER default 0 NOT NULL,
	`fec_ult_ve` VARCHAR(255)  NOT NULL,
	`net_ult_ve` DECIMAL(20,2) default 0 NOT NULL,
	`cli_ult_ve` CHAR(6) default ' ' NOT NULL,
	`cta_contab` CHAR(20) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`campo5` VARCHAR(60) default ' ' NOT NULL,
	`campo6` VARCHAR(60) default ' ' NOT NULL,
	`campo7` VARCHAR(60) default ' ' NOT NULL,
	`campo8` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`login` CHAR(10) default ' ' NOT NULL,
	`password` CHAR(50) default ' ' NOT NULL,
	`email` CHAR(40) default ' ' NOT NULL,
	`PSW_M` CHAR(20) default ' ' NOT NULL,
	PRIMARY KEY (`co_ven`),
	KEY `index_1628584890`(`rowguid`),
	KEY `vendedor_co_ven`(`co_ven`),
	KEY `iven_des`(`ven_des`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- cta_ingr
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `cta_ingr`;


CREATE TABLE `cta_ingr`
(
	`co_ingr` CHAR(6)  NOT NULL,
	`descrip` VARCHAR(60) default ' ' NOT NULL,
	`cta_contab` CHAR(20) default ' ' NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`co_islr` CHAR(6) default ' ' NOT NULL,
	PRIMARY KEY (`co_ingr`),
	KEY `cta_ingr_co_ingr`(`co_ingr`),
	KEY `index_1024058734`(`rowguid`),
	KEY `CO_ISLR`(`co_islr`),
	KEY `idescrip`(`descrip`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- transpor
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `transpor`;


CREATE TABLE `transpor`
(
	`co_tran` CHAR(6)  NOT NULL,
	`des_tran` VARCHAR(60) default ' ' NOT NULL,
	`resp_tra` VARCHAR(60) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	PRIMARY KEY (`co_tran`),
	KEY `index_1388584035`(`rowguid`),
	KEY `transpor_co_tran`(`co_tran`),
	KEY `ides_tran`(`des_tran`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- condicio
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `condicio`;


CREATE TABLE `condicio`
(
	`co_cond` CHAR(6)  NOT NULL,
	`cond_des` VARCHAR(60) default ' ' NOT NULL,
	`dias_cred` INTEGER default 0 NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`row_id` BLOB  NOT NULL,
	PRIMARY KEY (`co_cond`),
	KEY `condicio_co_cond`(`co_cond`),
	KEY `index_752057765`(`rowguid`),
	KEY `icond_des`(`cond_des`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- moneda
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `moneda`;


CREATE TABLE `moneda`
(
	`co_mone` CHAR(6)  NOT NULL,
	`mone_des` VARCHAR(60) default ' ' NOT NULL,
	`cambio` DECIMAL(20,5) default 0 NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	PRIMARY KEY (`co_mone`),
	KEY `index_1904061869`(`rowguid`),
	KEY `moneda_co_mone`(`co_mone`),
	KEY `imone_des`(`mone_des`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- almacen
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `almacen`;


CREATE TABLE `almacen`
(
	`co_alma` CHAR(6)  NOT NULL,
	`alma_des` VARCHAR(60) default ' ' NOT NULL,
	`nro_fact` INTEGER default 0 NOT NULL,
	`num_fac_ini` INTEGER default 0 NOT NULL,
	`num_fac_fin` INTEGER default 0 NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`nc_num` INTEGER default 0 NOT NULL,
	`nd_num` INTEGER default 0 NOT NULL,
	`ajus_num` INTEGER default 0 NOT NULL,
	`tras_num` INTEGER default 0 NOT NULL,
	`fisi_num` INTEGER default 0 NOT NULL,
	`num_kit` INTEGER default 0 NOT NULL,
	`genk_num` INTEGER default 0 NOT NULL,
	`fact_num` INTEGER default 0 NOT NULL,
	`ped_num` INTEGER default 0 NOT NULL,
	`cotc_num` INTEGER default 0 NOT NULL,
	`devc_num` INTEGER default 0 NOT NULL,
	`nde_num` INTEGER default 0 NOT NULL,
	`ndd_num` INTEGER default 0 NOT NULL,
	`post_num` INTEGER default 0 NOT NULL,
	`cfxg_num` INTEGER default 0 NOT NULL,
	`chdv_num` INTEGER default 0 NOT NULL,
	`giro_num` INTEGER default 0 NOT NULL,
	`reten_num` INTEGER default 0 NOT NULL,
	`cb_num` INTEGER default 0 NOT NULL,
	`movb_num` INTEGER default 0 NOT NULL,
	`movc_num` INTEGER default 0 NOT NULL,
	`ordp_num` INTEGER default 0 NOT NULL,
	`depc_num` INTEGER default 0 NOT NULL,
	`comp_num` INTEGER default 0 NOT NULL,
	`ord_num` INTEGER default 0 NOT NULL,
	`cotp_num` INTEGER default 0 NOT NULL,
	`devp_num` INTEGER default 0 NOT NULL,
	`ndr_num` INTEGER default 0 NOT NULL,
	`postcppnum` INTEGER default 0 NOT NULL,
	`ccxg_num` INTEGER default 0 NOT NULL,
	`chdvcppnum` INTEGER default 0 NOT NULL,
	`girocppnum` INTEGER default 0 NOT NULL,
	`nccpp_num` INTEGER default 0 NOT NULL,
	`ndcpp_num` INTEGER default 0 NOT NULL,
	`retencppnum` INTEGER default 0 NOT NULL,
	`pg_num` INTEGER default 0 NOT NULL,
	`aju_posm` INTEGER default 0 NOT NULL,
	`aju_posa` INTEGER default 0 NOT NULL,
	`aju_negm` INTEGER default 0 NOT NULL,
	`aju_nega` INTEGER default 0 NOT NULL,
	`aju_posmc` INTEGER default 0 NOT NULL,
	`aju_posac` INTEGER default 0 NOT NULL,
	`aju_negmc` INTEGER default 0 NOT NULL,
	`aju_negac` INTEGER default 0 NOT NULL,
	`pventa` INTEGER default 0 NOT NULL,
	`turnosic` INTEGER default 0 NOT NULL,
	`plv_num` INTEGER default 0 NOT NULL,
	`plc_num` INTEGER default 0 NOT NULL,
	`tabislr` INTEGER default 0 NOT NULL,
	`imp_num` INTEGER default 0 NOT NULL,
	`rma_cli` INTEGER default 0 NOT NULL,
	`rma_prov` INTEGER default 0 NOT NULL,
	`rma_entc` INTEGER default 0 NOT NULL,
	`rma_entp` INTEGER default 0 NOT NULL,
	`rma_regs` INTEGER default 0 NOT NULL,
	`fact_s1` CHAR(10) default ' ' NOT NULL,
	`fact_s2` CHAR(10) default ' ' NOT NULL,
	`fact_s3` CHAR(10) default ' ' NOT NULL,
	`fact_s4` CHAR(10) default ' ' NOT NULL,
	`fact_s5` CHAR(10) default ' ' NOT NULL,
	`nde_s1` CHAR(10) default ' ' NOT NULL,
	`nde_s2` CHAR(10) default ' ' NOT NULL,
	`nde_s3` CHAR(10) default ' ' NOT NULL,
	`nde_s4` CHAR(10) default ' ' NOT NULL,
	`nde_s5` CHAR(10) default ' ' NOT NULL,
	`nc_s1` CHAR(10) default ' ' NOT NULL,
	`nc_s2` CHAR(10) default ' ' NOT NULL,
	`nc_s3` CHAR(10) default ' ' NOT NULL,
	`nc_s4` CHAR(10) default ' ' NOT NULL,
	`nc_s5` CHAR(10) default ' ' NOT NULL,
	`nd_s1` CHAR(10) default ' ' NOT NULL,
	`nd_s2` CHAR(10) default ' ' NOT NULL,
	`nd_s3` CHAR(10) default ' ' NOT NULL,
	`nd_s4` CHAR(10) default ' ' NOT NULL,
	`nd_s5` CHAR(10) default ' ' NOT NULL,
	`fact_f1` INTEGER default 0 NOT NULL,
	`fact_f2` INTEGER default 0 NOT NULL,
	`fact_f3` INTEGER default 0 NOT NULL,
	`fact_f4` INTEGER default 0 NOT NULL,
	`nde_f1` INTEGER default 0 NOT NULL,
	`nde_f2` INTEGER default 0 NOT NULL,
	`nde_f3` INTEGER default 0 NOT NULL,
	`nde_f4` INTEGER default 0 NOT NULL,
	`nc_f1` INTEGER default 0 NOT NULL,
	`nc_f2` INTEGER default 0 NOT NULL,
	`nc_f3` INTEGER default 0 NOT NULL,
	`nc_f4` INTEGER default 0 NOT NULL,
	`nd_f1` INTEGER default 0 NOT NULL,
	`nd_f2` INTEGER default 0 NOT NULL,
	`nd_f3` INTEGER default 0 NOT NULL,
	`nd_f4` INTEGER default 0 NOT NULL,
	`fact_p1` INTEGER default 1 NOT NULL,
	`fact_p2` INTEGER default 1 NOT NULL,
	`fact_p3` INTEGER default 1 NOT NULL,
	`fact_p4` INTEGER default 1 NOT NULL,
	`fact_p5` INTEGER default 1 NOT NULL,
	`nde_p1` INTEGER default 1 NOT NULL,
	`nde_p2` INTEGER default 1 NOT NULL,
	`nde_p3` INTEGER default 1 NOT NULL,
	`nde_p4` INTEGER default 1 NOT NULL,
	`nde_p5` INTEGER default 1 NOT NULL,
	`nc_p1` INTEGER default 1 NOT NULL,
	`nc_p2` INTEGER default 1 NOT NULL,
	`nc_p3` INTEGER default 1 NOT NULL,
	`nc_p4` INTEGER default 1 NOT NULL,
	`nc_p5` INTEGER default 1 NOT NULL,
	`nd_p1` INTEGER default 1 NOT NULL,
	`nd_p2` INTEGER default 1 NOT NULL,
	`nd_p3` INTEGER default 1 NOT NULL,
	`nd_p4` INTEGER default 1 NOT NULL,
	`nd_p5` INTEGER default 1 NOT NULL,
	`fact_num2` INTEGER default 0 NOT NULL,
	`fact_num3` INTEGER default 0 NOT NULL,
	`fact_num4` INTEGER default 0 NOT NULL,
	`fact_num5` INTEGER default 0 NOT NULL,
	`nde_num2` INTEGER default 0 NOT NULL,
	`nde_num3` INTEGER default 0 NOT NULL,
	`nde_num4` INTEGER default 0 NOT NULL,
	`nde_num5` INTEGER default 0 NOT NULL,
	`nc_num2` INTEGER default 0 NOT NULL,
	`nc_num3` INTEGER default 0 NOT NULL,
	`nc_num4` INTEGER default 0 NOT NULL,
	`nc_num5` INTEGER default 0 NOT NULL,
	`nd_num2` INTEGER default 0 NOT NULL,
	`nd_num3` INTEGER default 0 NOT NULL,
	`nd_num4` INTEGER default 0 NOT NULL,
	`nd_num5` INTEGER default 0 NOT NULL,
	`serie2` TINYINT default 0 NOT NULL,
	`serie3` TINYINT default 0 NOT NULL,
	`serie4` TINYINT default 0 NOT NULL,
	`serie5` TINYINT default 0 NOT NULL,
	`emp_num` INTEGER default 0 NOT NULL,
	`dmc_num` INTEGER default 0 NOT NULL,
	`tax_num` INTEGER default 0 NOT NULL,
	`ced_num` INTEGER default 0 NOT NULL,
	`ent_num` INTEGER default 0 NOT NULL,
	`cie_num` INTEGER default 0 NOT NULL,
	`odp_num` INTEGER default 0 NOT NULL,
	`req_num` INTEGER default 0 NOT NULL,
	`dev_num` INTEGER default 0 NOT NULL,
	`exp_num` INTEGER default 0 NOT NULL,
	`inp_num` INTEGER default 0 NOT NULL,
	`cost_num` INTEGER default 0 NOT NULL,
	`par_num` INTEGER default 0 NOT NULL,
	`esc_num` INTEGER default 0 NOT NULL,
	`pla_num` INTEGER default 0 NOT NULL,
	`men_num` INTEGER default 0 NOT NULL,
	`dist_num` INTEGER default 0 NOT NULL,
	`exp_numi` INTEGER default 0 NOT NULL,
	PRIMARY KEY (`co_alma`),
	KEY `almacen_co_alma`(`co_alma`),
	KEY `index_2083538506`(`rowguid`),
	KEY `ialma_des`(`alma_des`),
	KEY `ico_alma`(`co_alma`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- lin_art
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `lin_art`;


CREATE TABLE `lin_art`
(
	`co_lin` CHAR(6)  NOT NULL,
	`lin_des` VARCHAR(60) default ' ' NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`co_imun` CHAR(15) default ' ' NOT NULL,
	`co_reten` CHAR(6) default ' ' NOT NULL,
	`comi_lin` DECIMAL(20,2) default 0 NOT NULL,
	`comi_lin2` DECIMAL(8,2) default 0 NOT NULL,
	`row_id` BLOB  NOT NULL,
	`va` TINYINT default 0 NOT NULL,
	`i_lin_des` VARCHAR(60) default ' ' NOT NULL,
	`movil` TINYINT default 0 NOT NULL,
	PRIMARY KEY (`co_lin`),
	KEY `index_1824061584`(`rowguid`),
	KEY `lin_art_co_lin`(`co_lin`),
	KEY `ilin_des`(`lin_des`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- cat_art
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `cat_art`;


CREATE TABLE `cat_art`
(
	`co_cat` CHAR(6)  NOT NULL,
	`cat_des` VARCHAR(60) default ' ' NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`co_imun` CHAR(15) default ' ' NOT NULL,
	`co_reten` CHAR(6) default ' ' NOT NULL,
	`row_id` BLOB  NOT NULL,
	`movil` TINYINT default 0 NOT NULL,
	PRIMARY KEY (`co_cat`),
	KEY `cat_art_co_cat`(`co_cat`),
	KEY `index_384056454`(`rowguid`),
	KEY `icat_des`(`cat_des`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sub_lin
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sub_lin`;


CREATE TABLE `sub_lin`
(
	`co_subl` CHAR(6)  NOT NULL,
	`subl_des` VARCHAR(60) default ' ' NOT NULL,
	`co_lin` CHAR(6)  NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`co_imun` CHAR(15) default ' ' NOT NULL,
	`co_reten` CHAR(6) default ' ' NOT NULL,
	`i_subl_des` VARCHAR(60) default ' ' NOT NULL,
	`movil` TINYINT default 0 NOT NULL,
	PRIMARY KEY (`co_subl`,`co_lin`),
	KEY `index_972582553`(`rowguid`),
	KEY `sub_lin_co_subl`(`co_subl`, `co_lin`),
	KEY `ico_lin`(`co_lin`),
	KEY `ico_subl`(`co_subl`),
	KEY `isubl_des`(`subl_des`),
	CONSTRAINT `sub_lin_FK_1`
		FOREIGN KEY (`co_lin`)
		REFERENCES `lin_art` (`co_lin`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- colores
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `colores`;


CREATE TABLE `colores`
(
	`co_col` CHAR(6)  NOT NULL,
	`des_col` VARCHAR(60) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	PRIMARY KEY (`co_col`),
	KEY `colores_co_col`(`co_col`),
	KEY `index_560057081`(`rowguid`),
	KEY `ides_col`(`des_col`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- proceden
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `proceden`;


CREATE TABLE `proceden`
(
	`cod_proc` CHAR(6)  NOT NULL,
	`des_proc` VARCHAR(60) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	PRIMARY KEY (`cod_proc`),
	KEY `index_636581356`(`rowguid`),
	KEY `proceden_cod_proc`(`cod_proc`),
	KEY `ides_proc`(`des_proc`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- prov
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `prov`;


CREATE TABLE `prov`
(
	`co_prov` CHAR(10)  NOT NULL,
	`prov_des` VARCHAR(60) default ' ' NOT NULL,
	`co_seg` CHAR(6) default ' ' NOT NULL,
	`co_zon` CHAR(6) default ' ' NOT NULL,
	`inactivo` TINYINT default 0 NOT NULL,
	`productos` VARCHAR(60) default ' ' NOT NULL,
	`direc1` TEXT(2147483647) default ' ' NOT NULL,
	`direc2` VARCHAR(60) default ' ' NOT NULL,
	`telefonos` VARCHAR(60) default ' ' NOT NULL,
	`fax` VARCHAR(60) default ' ' NOT NULL,
	`respons` VARCHAR(60) default ' ' NOT NULL,
	`fecha_reg` VARCHAR(255)  NOT NULL,
	`tipo` CHAR(6) default ' ' NOT NULL,
	`com_ult_co` INTEGER default 0 NOT NULL,
	`fec_ult_co` VARCHAR(255)  NOT NULL,
	`net_ult_co` DECIMAL(20,2) default 0 NOT NULL,
	`saldo` DECIMAL(20,2) default 0 NOT NULL,
	`saldo_ini` DECIMAL(20,2) default 0 NOT NULL,
	`mont_cre` DECIMAL(20,2) default 0 NOT NULL,
	`plaz_pag` INTEGER default 0 NOT NULL,
	`desc_ppago` DECIMAL(20,2) default 0 NOT NULL,
	`desc_glob` DECIMAL(20,2) default 0 NOT NULL,
	`tipo_iva` CHAR(1) default ' ' NOT NULL,
	`iva` DECIMAL(20,2) default 0 NOT NULL,
	`rif` CHAR(18) default ' ' NOT NULL,
	`nacional` TINYINT default 0 NOT NULL,
	`dis_cen` TEXT(2147483647) default ' ' NOT NULL,
	`nit` CHAR(18) default ' ' NOT NULL,
	`email` VARCHAR(60) default ' ' NOT NULL,
	`co_ingr` CHAR(6) default ' ' NOT NULL,
	`comentario` TEXT(2147483647) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`campo5` VARCHAR(60) default ' ' NOT NULL,
	`campo6` VARCHAR(60) default ' ' NOT NULL,
	`campo7` VARCHAR(60) default ' ' NOT NULL,
	`campo8` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`juridico` TINYINT default 0 NOT NULL,
	`tipo_adi` DECIMAL(3) default 1 NOT NULL,
	`matriz` CHAR(10) default ' ' NOT NULL,
	`co_tab` INTEGER default 0 NOT NULL,
	`tipo_per` CHAR(1) default ' ' NOT NULL,
	`co_pais` VARCHAR(6) default ' ' NOT NULL,
	`ciudad` VARCHAR(50) default ' ' NOT NULL,
	`zip` VARCHAR(10) default ' ' NOT NULL,
	`website` CHAR(200) default ' ' NOT NULL,
	`formtype` CHAR(30) default ' ' NOT NULL,
	`taxid` CHAR(20) default ' ' NOT NULL,
	`contribu_e` TINYINT default 0 NOT NULL,
	`porc_esp` FLOAT(8) default 0 NOT NULL,
	PRIMARY KEY (`co_prov`),
	KEY `index_1987538164`(`rowguid`),
	KEY `prov_co_prov`(`co_prov`),
	KEY `ico_seg`(`co_seg`),
	KEY `ico_zon`(`co_zon`),
	KEY `iprov_des`(`prov_des`),
	KEY `itipo`(`tipo`),
	CONSTRAINT `prov_FK_1`
		FOREIGN KEY (`co_seg`)
		REFERENCES `segmento` (`co_seg`),
	CONSTRAINT `prov_FK_2`
		FOREIGN KEY (`co_zon`)
		REFERENCES `zona` (`co_zon`),
	CONSTRAINT `prov_FK_3`
		FOREIGN KEY (`tipo`)
		REFERENCES `tipo_pro` (`tip_pro`),
	INDEX `prov_FI_4` (`co_ingr`),
	CONSTRAINT `prov_FK_4`
		FOREIGN KEY (`co_ingr`)
		REFERENCES `cta_ingr` (`co_ingr`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- unidades
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `unidades`;


CREATE TABLE `unidades`
(
	`co_uni` CHAR(6)  NOT NULL,
	`des_uni` VARCHAR(60) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`row_id` BLOB  NOT NULL,
	PRIMARY KEY (`co_uni`),
	KEY `index_1548584605`(`rowguid`),
	KEY `unidades_co_uni`(`co_uni`),
	KEY `ides_uni`(`des_uni`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tabulado
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tabulado`;


CREATE TABLE `tabulado`
(
	`tipo` CHAR(1)  NOT NULL,
	`descripcio` VARCHAR(60) default ' ' NOT NULL,
	`porc_vent` DECIMAL(12,3) default 0 NOT NULL,
	`porc_comp` DECIMAL(12,3) default 0 NOT NULL,
	`porc_cxs` DECIMAL(12,3) default 0 NOT NULL,
	`porc_otro` DECIMAL(12,3) default 0 NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	PRIMARY KEY (`tipo`),
	KEY `index_1651536967`(`rowguid`),
	KEY `tabulado_tipo`(`tipo`),
	KEY `idescrip`(`descripcio`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sub_alma
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sub_alma`;


CREATE TABLE `sub_alma`
(
	`co_sub` CHAR(6)  NOT NULL,
	`des_sub` VARCHAR(60) default ' ' NOT NULL,
	`co_alma` CHAR(6) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	`noventa` TINYINT default 0 NOT NULL,
	`nocompra` TINYINT default 0 NOT NULL,
	`materiales` TINYINT default 0 NOT NULL,
	`produccion` TINYINT default 0 NOT NULL,
	PRIMARY KEY (`co_sub`),
	KEY `index_876582211`(`rowguid`),
	KEY `sub_alma_co_sub`(`co_sub`),
	KEY `ico_alma`(`co_alma`),
	KEY `ides_sub`(`des_sub`),
	CONSTRAINT `sub_alma_FK_1`
		FOREIGN KEY (`co_alma`)
		REFERENCES `almacen` (`co_alma`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- tipo_pro
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `tipo_pro`;


CREATE TABLE `tipo_pro`
(
	`tip_pro` CHAR(6)  NOT NULL,
	`des_tipo` VARCHAR(60) default ' ' NOT NULL,
	`campo1` VARCHAR(60) default ' ' NOT NULL,
	`campo2` VARCHAR(60) default ' ' NOT NULL,
	`campo3` VARCHAR(60) default ' ' NOT NULL,
	`campo4` VARCHAR(60) default ' ' NOT NULL,
	`co_us_in` CHAR(4) default ' ' NOT NULL,
	`fe_us_in` VARCHAR(255)  NOT NULL,
	`co_us_mo` CHAR(4) default ' ' NOT NULL,
	`fe_us_mo` VARCHAR(255)  NOT NULL,
	`co_us_el` CHAR(4) default ' ' NOT NULL,
	`fe_us_el` VARCHAR(255)  NOT NULL,
	`revisado` CHAR(1) default ' ' NOT NULL,
	`trasnfe` CHAR(1) default ' ' NOT NULL,
	`co_sucu` CHAR(6) default ' ' NOT NULL,
	`rowguid` CHAR(16) default '(newid())' NOT NULL,
	PRIMARY KEY (`tip_pro`),
	KEY `index_1308583750`(`rowguid`),
	KEY `tipo_pro_tip_pro`(`tip_pro`),
	KEY `ides_tipo`(`des_tipo`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
