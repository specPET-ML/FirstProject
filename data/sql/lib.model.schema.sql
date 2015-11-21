
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- companies
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `companies`;


CREATE TABLE `companies`
(
	`company_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`company_name` VARCHAR(100),
	`company_adress` VARCHAR(255),
	`company_zip_code` VARCHAR(6),
	`company_city` VARCHAR(255),
	`company_NIP` VARCHAR(15),
	`company_bank_name` VARCHAR(100),
	`company_bank_account` VARCHAR(26),
	PRIMARY KEY (`company_id`),
	UNIQUE KEY `u_companyName` (`company_name`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- customers
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;


CREATE TABLE `customers`
(
	`customer_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`customer_name` VARCHAR(100),
	`customer_adress` VARCHAR(255),
	`customer_zip_code` VARCHAR(6),
	`customer_city` VARCHAR(255),
	`customer_NIP` VARCHAR(15),
	PRIMARY KEY (`customer_id`),
	UNIQUE KEY `u_customerName` (`customer_name`)
)Engine=InnoDB;

#-----------------------------------------------------------------------------
#-- invoices
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `invoices`;


CREATE TABLE `invoices`
(
	`invoice_id` INTEGER  NOT NULL AUTO_INCREMENT,
	`company_id` INTEGER  NOT NULL,
	`issued_date` DATE,
	`service_name` VARCHAR(255),
	`sold_date` DATE,
	`customer_id` INTEGER  NOT NULL,
	`price_netto` DECIMAL(11,2),
	`price_brutto` DECIMAL(11,2),
	`value_tax` DECIMAL(11,2),
	`tax` DECIMAL(11,2),
	PRIMARY KEY (`invoice_id`),
	INDEX `invoices_FI_1` (`company_id`),
	CONSTRAINT `invoices_FK_1`
		FOREIGN KEY (`company_id`)
		REFERENCES `companies` (`company_id`),
	INDEX `invoices_FI_2` (`customer_id`),
	CONSTRAINT `invoices_FK_2`
		FOREIGN KEY (`customer_id`)
		REFERENCES `customers` (`customer_id`)
)Engine=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
