SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pswork`
--

-- ------------------------------------

--
-- Truncate tables to clean them of data and reset auto_increment values
--
--SET FOREIGN_KEY_CHECKS=0;
--TRUNCATE TABLE `customers`;
--TRUNCATE TABLE `user_roles`;
--TRUNCATE TABLE `user_orders`;
--TRUNCATE TABLE `orders`;
--TRUNCATE TABLE `users`;
--SET FOREIGN_KEY_CHECKS=1;

--
-- Drop tables in order to avoid Foreign Key errors
--

--DROP TABLE IF EXISTS `customers` CASCADE;
--DROP TABLE IF EXISTS `user_roles` CASCADE;
--DROP TABLE IF EXISTS `user_orders` CASCADE;
--DROP TABLE IF EXISTS `files` CASCADE;
--DROP TABLE IF EXISTS `statuses` CASCADE;
--DROP TABLE IF EXISTS `orders` CASCADE;
--DROP TABLE IF EXISTS `types` CASCADE;
--DROP TABLE IF EXISTS `roles` CASCADE;
--DROP TABLE IF EXISTS `users` CASCADE;


--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`username` varchar(20) NOT NULL,
	`password` varchar(20) NOT NULL,
	`first_name` varchar(20) NOT NULL,
	`last_name` varchar(20) NOT NULL,
	`email` varchar(255) NOT NULL,
	`role_id` int(4) NOT NULL,
	`date_created` datetime NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
	`user_id` int(4) NOT NULL,
	`role_id` int(4) NOT NULL,
	KEY `fk_user_roles_users` (`user_id`),
	KEY `fk_user_roles_roles` (`role_id`),
	CONSTRAINT `fk_user_roles_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT `fk_user_roles_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`user_id` int(4) NOT NULL,
	`company` varchar(50) NOT NULL,
	`phone` varchar(20) NOT NULL,
	`address1` varchar(50) NOT NULL,
	`address2` varchar(50) NULL,
	`city` varchar(20) NOT NULL,
	`state` char(2) NOT NULL,
	`zip` int(4) NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_customers_users` (`user_id`),
	KEY `idx_customers` (`company`),
	CONSTRAINT `fk_customers_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
	`id` bigint(8) NOT NULL AUTO_INCREMENT,
	`type_id` int(4) NOT NULL,
	`due_date` datetime NOT NULL,
	`date_submitted` datetime NOT NULL,
	`status_id` int(4) NOT NULL,
	`instructions` varchar(500) NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_orders_types` (`type_id`),
	KEY `fk_orders_statuses` (`status_id`),
	KEY `idx_orders` (`due_date`, `date_submitted`),
	CONSTRAINT `fk_order_types` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT `fk_order_statuses` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `user_orders`
--

CREATE TABLE IF NOT EXISTS `user_orders` (
	`user_id` int(4) NOT NULL,
	`order_id` bigint(8) NOT NULL,
	KEY `fk_user_orders_users` (`user_id`),
	KEY `fk_user_orders_orders` (`order_id`),
	CONSTRAINT `fk_user_orders_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
	CONSTRAINT `fk_user_orders_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
	`id` bigint(8) NOT NULL AUTO_INCREMENT,
	`order_id` bigint(8) NOT NULL,
	`filename` varchar(50) NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_files_orders` (`order_id`),
	CONSTRAINT `fk_files_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- End of Create Database
--