
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- inbox
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `inbox`;


CREATE TABLE `inbox`
(
	`id` INTEGER(10)  NOT NULL AUTO_INCREMENT,
	`number` VARCHAR(20) default '' NOT NULL,
	`smsdate` DATETIME default '0000-00-00 00:00:00' NOT NULL,
	`insertdate` TIMESTAMP NOT NULL default CURRENT_TIMESTAMP,
	`text` TEXT,
	`phone` TINYINT(4),
	`processed` TINYINT(4) default 0 NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- multipartinbox
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `multipartinbox`;


CREATE TABLE `multipartinbox`
(
	`id` INTEGER(10)  NOT NULL AUTO_INCREMENT,
	`number` VARCHAR(20) default '' NOT NULL,
	`smsdate` DATETIME default '0000-00-00 00:00:00' NOT NULL,
	`insertdate` TIMESTAMP NOT NULL default CURRENT_TIMESTAMP,
	`text` TEXT,
	`phone` TINYINT(4),
	`processed` TINYINT(4) default 0 NOT NULL,
	`refnum` INTEGER(8),
	`maxnum` INTEGER(8),
	`curnum` INTEGER(8),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- outbox
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `outbox`;


CREATE TABLE `outbox`
(
	`id` INTEGER(10)  NOT NULL AUTO_INCREMENT,
	`number` VARCHAR(20) default '' NOT NULL,
	`processed_date` TIMESTAMP NOT NULL default CURRENT_TIMESTAMP,
	`insertdate` DATETIME default '0000-00-00 00:00:00' NOT NULL,
	`text` VARCHAR(160),
	`phone` TINYINT(4),
	`processed` TINYINT(4) default 0 NOT NULL,
	`error` TINYINT(4) default -1 NOT NULL,
	`dreport` TINYINT(4) default 0 NOT NULL,
	`not_before` TIME default '00:00:00' NOT NULL,
	`not_after` TIME default '23:59:59' NOT NULL,
	`co_cli` VARCHAR(20) default '',
	`fec_venc` DATE  NOT NULL,
	PRIMARY KEY (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
