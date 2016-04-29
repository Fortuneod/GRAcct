<?php 
	ini_set('display_errors',0);
			
	mysql_query("CREATE TABLE IF NOT EXISTS `details` (
	`id` int(11) unsigned not null auto_increment,
	`cmpname` varchar(100) not null,
	`address` varchar(210) not null,
	`city` varchar(50) not null,
	`state` varchar(50) not null,
	`country` varchar(50) not null,
	`phone` varchar(50) not null,
	`email` varchar(100) not null,
	`type` varchar(100) not null,
	`staffsize` varchar(20) not null,
	`currency` varchar(20) not null,
	`logo` varchar(100) not null,
	
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `assets` (
	`id` int(11) unsigned not null auto_increment,
	`assetid` varchar(100) unique not null,
	`name` varchar(150) not null,
	`type` varchar(20) not null,
	`quantity` varchar(20) not null,
	`value` varchar(20) not null,
	`lifespan` varchar(20) not null,
	`acquired` varchar(20) not null,
	
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `liabilities` (
	`id` int(11) unsigned not null auto_increment,
	`libid` varchar(100) unique not null,
	`creditor` varchar(100) not null,
	`description` varchar(200) not null,
	`value` varchar(20) not null,
	
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `login_admin` (
	`id` int(11) unsigned not null auto_increment,
	`username` varchar(50) not null,
	`password` varchar(20) not null,
	`name` varchar(100) not null,
	`role` varchar(50) not null,
	
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `login_users` (
	`id` int(11) unsigned not null auto_increment,
	`username` varchar(50) not null,
	`password` varchar(20) not null,
	`name` varchar(100) not null,
	`role` varchar(50) not null,
	
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `allowances` (
	`id` int(11) unsigned not null auto_increment,
	`medical` varchar(50) not null,
	`transport` varchar(20) not null,
	`meal` varchar(100) not null,
	`hazard` varchar(50) not null,
	
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `deductions` (
	`id` int(11) unsigned not null auto_increment,
	`tax` varchar(50) not null,
	`pension` varchar(20) not null,
	`levy` varchar(100) not null,
		
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `clients` (
	`id` int(11) unsigned not null auto_increment,
	`clientid` varchar(100) unique not null,
	`company` varchar(100) not null,
	`type` varchar(100) not null,
	`address` varchar(200) not null,
	`phone` varchar(50) not null,
	`remark` varchar(50) not null,
		
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `expenditure` (
	`id` int(11) unsigned not null auto_increment,
	`day` varchar(100) not null,
	`month` varchar(100) not null,
	`year` varchar(100) not null,
	`purpose` varchar(200) not null,
	`reciever` varchar(200) not null,
	`amount` varchar(200) not null,
	`approved` varchar(100) not null,
			
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `income` (
	`id` int(11) unsigned not null auto_increment,
	`day` varchar(100) unique not null,
	`month` varchar(100) unique not null,
	`year` varchar(100) unique not null,
	`client` varchar(100) not null,
	`purpose` varchar(200) not null,
	`amount` varchar(200) not null,
	`remark` varchar(50) not null,
		
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `tax_info` (
	`id` int(11) unsigned not null auto_increment,
	`income` varchar(50) not null,
	`salary` varchar(20) not null,
		
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	
	mysql_query("CREATE TABLE IF NOT EXISTS `staff_info` (
	`id` int(11) unsigned not null auto_increment,
	`staffid` varchar(50) unique not null,
	`name` varchar(100) not null,
	`sex` varchar(10) not null,
	`dob` varchar(20) not null,
	`address` varchar(200) not null,
	`phone` varchar(500) not null,
	`email` varchar(100) not null,
	`nok` varchar(100) not null,
	`nokadd` varchar(100) not null,
	`nokphone` varchar(100) not null,
	`dept` varchar(50) not null,
	`design` varchar(50) not null,
	`gradelvl` varchar(50) not null,
	`basicslry` varchar(50) not null,
	`photo` varchar(100) not null,
	
	PRIMARY KEY (id)
	)ENGINE=InnoDB CHARSET=DEFAULT AUTO_INCREMENT=1");
	

?>
	