SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pswork`
--

-- ------------------------------------


--
-- Drop tables in order to avoid Foreign Key errors
--
DROP TABLE IF EXISTS `user_role` CASCADE;
DROP TABLE IF EXISTS `user_order` CASCADE;

DROP TABLE IF EXISTS `file` CASCADE;
DROP TABLE IF EXISTS `order` CASCADE;
DROP TABLE IF EXISTS `status` CASCADE;

DROP TABLE IF EXISTS `role` CASCADE;
DROP TABLE IF EXISTS `customer` CASCADE;

DROP TABLE IF EXISTS `user` CASCADE;


--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`username` varchar(20) NOT NULL,
	`password` varchar(20) NOT NULL,
	`first_name` varchar(20) NOT NULL,
	`last_name` varchar(20) NOT NULL,
	`email` varchar(50) NOT NULL,
	`role_id` int(4) NOT NULL,
	`date_created` datetime NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`name` enum(20) NOT NULL,
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
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customers` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`user_id` int(4) NOT NULL,
	`company` varchar(50) NOT NULL,
	`address` varchar(50) NOT NULL,
	`city` varchar(20) NOT NULL,
	`state` char(2) NOT NULL,
	`zip` int(4) NOT NULL,
	`phone` int(4) NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_customers_users` (`user_id`),
	KEY `idx_customers` (`company`),
	CONSTRAINT `fk_customers_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
	`id` int(4) NOT NULL AUTO_INCREMENT,
	`name` enum(20) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
	`id` bigint(8) NOT NULL AUTO_INCREMENT,
	`type` varchar(10) NOT NULL,
	`due_date` datetime NOT NULL,
	`date_submitted` datetime NOT NULL,
	`status_id` int(4) NOT NULL,
	`instructions` varchar(500) NOT NULL,
	PRIMARY KEY (`id`),
	KEY `fk_order_status` (`status_id`),
	KEY `idx_orders` (`type`, `due_date`, `date_submitted`, `status_id`),
	CONSTRAINT `fk_order_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
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