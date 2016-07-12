-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2016 at 01:17 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_indodealways`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_brand`
--

CREATE TABLE IF NOT EXISTS `tab_brand` (
  `int_brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `txt_name` varchar(200) NOT NULL,
  `txt_filename` varchar(255) NOT NULL,
  `int_is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`int_brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tab_brand`
--

INSERT INTO `tab_brand` (`int_brand_id`, `txt_name`, `txt_filename`, `int_is_active`) VALUES
(2, 'Samsung', 'uploads/brand/2_0_20160709170320.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tab_categories`
--

CREATE TABLE IF NOT EXISTS `tab_categories` (
  `int_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `txt_name` varchar(255) NOT NULL,
  `int_parent_id` int(11) NOT NULL,
  `int_level` int(11) NOT NULL,
  `txt_description` varchar(500) DEFAULT NULL,
  `txt_filename` varchar(150) DEFAULT NULL,
  `int_is_active` tinyint(4) NOT NULL,
  PRIMARY KEY (`int_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tab_categories`
--

INSERT INTO `tab_categories` (`int_category_id`, `txt_name`, `int_parent_id`, `int_level`, `txt_description`, `txt_filename`, `int_is_active`) VALUES
(7, 'Laptops', 0, 0, 'ThIs is laptop', 'uploads/category/7_0_20160710132931.jpg', 1),
(8, 'Mobiles', 0, 0, 'This is Mobile', 'uploads/category/8_0_20160710133043.jpg', 1),
(9, 'Cars', 0, 0, 'This is Car', 'uploads/category/9_0_20160710133121.jpg', 1),
(10, 'Camera', 0, 0, 'This is Camera', 'uploads/category/10_0_20160710133149.jpg', 1),
(11, 'Test1', 0, 0, 'Test1', 'uploads/category/11_0_20160712115244.jpg', 1),
(12, 'Test2', 0, 0, 'Test2', 'uploads/category/12_0_20160712115304.jpg', 1),
(13, 'Test3', 0, 0, 'Test3', 'uploads/category/13_0_20160712115322.jpg', 1),
(14, 'Test4', 0, 0, 'Test4', 'uploads/category/14_0_20160712115340.jpg', 1),
(15, 'Test5', 0, 0, 'Test5', 'uploads/category/15_0_20160712115359.jpg', 1),
(16, 'Test6', 0, 0, 'Test6', 'uploads/category/16_0_20160712115416.jpg', 1),
(17, 'Test8', 0, 0, 'Test8', 'uploads/category/17_0_20160712115437.jpg', 1),
(18, 'Test7', 17, 0, 'Test7', 'uploads/category/18_0_20160712115500.jpg', 1),
(19, 'Test9', 17, 0, 'Test', 'uploads/category/19_0_20160712115526.jpg', 1),
(20, 'Test9', 18, 0, 'Test9', 'uploads/category/20_0_20160712115617.jpg', 1),
(21, 'Test10', 18, 0, 'Test10', 'uploads/category/21_0_20160712115634.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tab_customer`
--

CREATE TABLE IF NOT EXISTS `tab_customer` (
  `int_customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `int_user_id` int(11) NOT NULL,
  `txt_name` varchar(255) NOT NULL,
  `txt_phone1` varchar(1515) NOT NULL,
  `txt_phone2` varchar(15) NOT NULL,
  `txt_address1` varchar(255) NOT NULL,
  `txt_pincode1` varchar(10) NOT NULL,
  `txt_city1` varchar(100) NOT NULL,
  `txt_state1` varchar(100) NOT NULL,
  `txt_country1` varchar(100) NOT NULL,
  `txt_address2` varchar(255) NOT NULL,
  `txt_pincode2` varchar(10) NOT NULL,
  `txt_city2` varchar(100) NOT NULL,
  `txt_state2` varchar(100) NOT NULL,
  `txt_country2` varchar(100) NOT NULL,
  `int_gender` tinyint(4) NOT NULL,
  `txt_description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`int_customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tab_customer`
--

INSERT INTO `tab_customer` (`int_customer_id`, `int_user_id`, `txt_name`, `txt_phone1`, `txt_phone2`, `txt_address1`, `txt_pincode1`, `txt_city1`, `txt_state1`, `txt_country1`, `txt_address2`, `txt_pincode2`, `txt_city2`, `txt_state2`, `txt_country2`, `int_gender`, `txt_description`) VALUES
(2, 6, 'hggf', '7657657', '565677', 'gffgh', '', 'hfhgfgh', 'fghf', 'ghfhgf', 'ghgfhf', '', 'fghfgh', 'hgfhgf', 'fhgf', 1, 'rtyurtuyr');

-- --------------------------------------------------------

--
-- Table structure for table `tab_orders`
--

CREATE TABLE IF NOT EXISTS `tab_orders` (
  `int_order_id` int(11) NOT NULL AUTO_INCREMENT,
  `int_customer_id` int(11) NOT NULL,
  `int_seller_id` int(11) NOT NULL,
  `txt_delivery_name` varchar(255) NOT NULL,
  `txt_delivery_address` varchar(500) NOT NULL,
  `int_payment_type` int(11) NOT NULL,
  `dt_order_date` date NOT NULL,
  `dt_delivery_date` date NOT NULL,
  `txt_coupan_code` varchar(50) NOT NULL,
  `txt_discount` varchar(10) NOT NULL,
  `txt_total_cost` varchar(20) NOT NULL,
  PRIMARY KEY (`int_order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tab_orders_meta`
--

CREATE TABLE IF NOT EXISTS `tab_orders_meta` (
  `int_unique_id` int(11) NOT NULL AUTO_INCREMENT,
  `int_order_id` int(11) NOT NULL,
  `int_product_id` int(11) NOT NULL,
  `int_cost` int(11) NOT NULL,
  `int_quantity` int(11) NOT NULL,
  PRIMARY KEY (`int_unique_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tab_products`
--

CREATE TABLE IF NOT EXISTS `tab_products` (
  `int_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `txt_product_name` varchar(255) NOT NULL,
  `int_brand_id` int(11) NOT NULL,
  `int_category_id` int(11) NOT NULL,
  `int_seller_id` int(11) NOT NULL,
  `int_model_no` varchar(100) NOT NULL,
  `txt_description` text NOT NULL,
  `int_price` int(11) NOT NULL,
  `txt_image` text NOT NULL,
  `txt_video` varchar(255) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`int_product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tab_products`
--

INSERT INTO `tab_products` (`int_product_id`, `txt_product_name`, `int_brand_id`, `int_category_id`, `int_seller_id`, `int_model_no`, `txt_description`, `int_price`, `txt_image`, `txt_video`, `created_on`) VALUES
(1, 'Test', 0, 0, 2, '', 'hgyuytuyt', 55555, '["http:\\/\\/localhost:8001\\/dealways\\/uploads\\/1467903391_erp.png"]', '', '2016-07-07'),
(2, 'Test', 0, 0, 2, '', 'hgyuytuyt', 55555, '["http:\\/\\/localhost:8001\\/dealways\\/uploads\\/1467903486_erp.png"]', '', '2016-07-07'),
(3, '', 0, 0, 0, '', '', 0, 'null', '', '2016-07-07'),
(4, 'Test', 0, 0, 2, '', 'hgyuytuyt', 55555, '["http:\\/\\/localhost:8001\\/dealways\\/uploads\\/1467903538_erp.png"]', '', '2016-07-07'),
(5, '', 0, 0, 0, '', '', 0, 'null', '', '2016-07-07'),
(6, 'Test', 0, 0, 2, '', 'hgyuytuyt', 55555, '["http:\\/\\/localhost:8001\\/dealways\\/uploads\\/1467903600_erp.png"]', '', '2016-07-07'),
(7, '', 0, 0, 0, '', '', 0, 'null', '', '2016-07-07'),
(8, 'Test', 0, 0, 2, '', 'hgyuytuyt', 55555, '["http:\\/\\/localhost:8001\\/dealways\\/uploads\\/1467903681_erp.png"]', '', '2016-07-07'),
(9, '', 0, 0, 0, '', '', 0, 'null', '', '2016-07-07'),
(10, 'Test', 0, 0, 2, '', 'gfhgfhgfhg', 55555, '["http:\\/\\/localhost:8001\\/dealways\\/uploads\\/1468235911_camera.jpg"]', '', '2016-07-11'),
(11, 'Tablet', 0, 0, 2, '', 'gjhhgfhgfhg', 300000, '["http:\\/\\/localhost:8001\\/dealways\\/uploads\\/1468236000_tablet.JPG"]', '', '2016-07-11'),
(12, 'MOBILE', 0, 0, 3, '', 'fdhfg', 77777, '["http:\\/\\/localhost:8001\\/dealways\\/uploads\\/1468241099_mobile.jpg"]', '', '2016-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `tab_product_meta`
--

CREATE TABLE IF NOT EXISTS `tab_product_meta` (
  `int_unique_id` int(11) NOT NULL AUTO_INCREMENT,
  `int_product_id` int(11) NOT NULL,
  `txt_key` varchar(255) NOT NULL,
  `txt_value` varchar(255) NOT NULL,
  PRIMARY KEY (`int_unique_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tab_seller`
--

CREATE TABLE IF NOT EXISTS `tab_seller` (
  `int_seller_id` int(11) NOT NULL AUTO_INCREMENT,
  `int_user_id` int(11) NOT NULL,
  `txt_name` varchar(255) NOT NULL,
  `txt_description` text NOT NULL,
  `txt_phone1` varchar(15) NOT NULL,
  `txt_phone2` varchar(15) NOT NULL,
  `txt_phone3` varchar(15) NOT NULL,
  `txt_phone4` varchar(15) NOT NULL,
  `txt_phone5` varchar(15) NOT NULL,
  `txt_phone6` varchar(15) NOT NULL,
  `txt_address1` varchar(200) NOT NULL,
  `txt_pincode1` varchar(10) NOT NULL,
  `txt_city1` varchar(100) NOT NULL,
  `txt_state1` varchar(100) NOT NULL,
  `txt_country1` varchar(100) NOT NULL,
  `txt_address2` varchar(200) NOT NULL,
  `txt_pincode2` varchar(10) NOT NULL,
  `txt_city2` varchar(100) NOT NULL,
  `txt_state2` varchar(100) NOT NULL,
  `txt_country2` varchar(100) NOT NULL,
  `txt_seller_type` varchar(50) NOT NULL,
  `txt_organization_name` varchar(255) NOT NULL,
  `txt_sector` varchar(150) NOT NULL,
  `txt_pan_no` varchar(10) NOT NULL,
  `txt_tin_no` varchar(10) NOT NULL,
  `txt_establish_year` varchar(10) NOT NULL,
  `txt_reg_date` date NOT NULL,
  `txt_emp_count` varchar(10) NOT NULL,
  `txt_reg_city` varchar(150) NOT NULL,
  `txt_orientation` varchar(255) NOT NULL,
  `txt_keywords` text NOT NULL,
  `txt_website_url` varchar(255) NOT NULL,
  `txt_app_url` varchar(255) NOT NULL,
  `txt_exist_listing` varchar(255) NOT NULL,
  `txt_operating_hrs` varchar(20) NOT NULL,
  `txt_close_day` varchar(100) NOT NULL,
  `int_home_delivery` int(11) NOT NULL,
  `txt_cusine` varchar(255) NOT NULL,
  `txt_account_no` varchar(100) NOT NULL,
  `txt_bank` varchar(255) NOT NULL,
  `txt_branch` varchar(255) NOT NULL,
  `txt_account_holder` varchar(255) NOT NULL,
  `txt_ifsc` varchar(30) NOT NULL,
  `txt_listing_type` varchar(30) NOT NULL,
  `txt_target_age` varchar(10) NOT NULL,
  `txt_target_gender` varchar(10) NOT NULL,
  `txt_target_crowd` varchar(30) NOT NULL,
  `txt_rating` varchar(10) NOT NULL,
  `int_no_of_ratings` int(11) NOT NULL,
  `txt_org_logo` varchar(255) NOT NULL,
  PRIMARY KEY (`int_seller_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tab_seller`
--

INSERT INTO `tab_seller` (`int_seller_id`, `int_user_id`, `txt_name`, `txt_description`, `txt_phone1`, `txt_phone2`, `txt_phone3`, `txt_phone4`, `txt_phone5`, `txt_phone6`, `txt_address1`, `txt_pincode1`, `txt_city1`, `txt_state1`, `txt_country1`, `txt_address2`, `txt_pincode2`, `txt_city2`, `txt_state2`, `txt_country2`, `txt_seller_type`, `txt_organization_name`, `txt_sector`, `txt_pan_no`, `txt_tin_no`, `txt_establish_year`, `txt_reg_date`, `txt_emp_count`, `txt_reg_city`, `txt_orientation`, `txt_keywords`, `txt_website_url`, `txt_app_url`, `txt_exist_listing`, `txt_operating_hrs`, `txt_close_day`, `int_home_delivery`, `txt_cusine`, `txt_account_no`, `txt_bank`, `txt_branch`, `txt_account_holder`, `txt_ifsc`, `txt_listing_type`, `txt_target_age`, `txt_target_gender`, `txt_target_crowd`, `txt_rating`, `int_no_of_ratings`, `txt_org_logo`) VALUES
(1, 2, 'Test', 'THis is test', '654764', '6546', '4654', '4646', '46545646', '46546456', 'LKo', '765765757', 'LKO', 'yutuyt', 'yutuyt', 'hgfhjfh', '7657757', 'ghfhgf', 'hgfh', 'fhgfh', '1', 'Test', 'ghfh', '675657', '76576567', '2017', '2016-07-07', '50', 'lko', 'product', 'test|test123', 'test.com', 'test.com/app', 'No Listing', '10', '1,7', 2, 'Test', '436353654456', 'BOI', 'LKO', 'Tester', '56465465', 'free', '2', 'all', '1,2,3', '', 0, ''),
(2, 7, 'Seller2', 'This is seller 2', '6575765765', '7656756757', '5756757657', '', '', '', 'Vikas Nagar', '222222', 'Lucknow', 'UP', 'India', '', '', '', '', '', '1', 'Seller2 ORG', 'No', '231231', '123131', '2010', '2016-07-11', '52', 'Lucknow', 'product', 'Laptop|Mobile|Desktop', 'dsgfsdg', 'fdsgsd', '', '40', '1,7', 1, '', '3456345634', 'BOI', 'LKO', 'Seller2', '453fgd534', 'free', '2', 'male', '2,3', '', 150, ''),
(3, 8, 'Seller3', 'This is seller 3', '576576576', '576567575', '', '', '', '', 'SIGRA', '222222', 'VARANASI', 'UP', 'INDIA', '', '', '', '', '', '1', 'SELLER3 ORG', 'ORG', '534543', '545646', '2011', '2016-07-11', '65', 'VARANASI', 'service', 'MOBILE|Laptop', 'fhgfhjf', 'hgfghjf', '', '60', '1,7', 2, '', 'FHJG65465436543', 'BOI', 'varanasi', 'FGHDGHFDGH', 'T546T45', 'free', '1', 'male', '3', '', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `tab_settings`
--

CREATE TABLE IF NOT EXISTS `tab_settings` (
  `int_setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `txt_meta_key` varchar(255) NOT NULL,
  `txt_meta_value` varchar(255) NOT NULL,
  PRIMARY KEY (`int_setting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tab_transaction`
--

CREATE TABLE IF NOT EXISTS `tab_transaction` (
  `int_unique_id` int(11) NOT NULL AUTO_INCREMENT,
  `int_order_id` int(11) NOT NULL,
  `int_customer_id` int(11) NOT NULL,
  `int_payment_type` int(11) NOT NULL,
  `txt_transaction_no` varchar(150) NOT NULL,
  `txt_transaction_amount` varchar(50) NOT NULL,
  `dt_transaction_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`int_unique_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tab_user`
--

CREATE TABLE IF NOT EXISTS `tab_user` (
  `int_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `txt_email` varchar(255) NOT NULL,
  `txt_password` varchar(150) NOT NULL,
  `int_user_type` int(11) NOT NULL,
  `txt_user_type_code` varchar(15) NOT NULL,
  `int_verified` tinyint(4) NOT NULL,
  `txt_verification_code` varchar(50) NOT NULL,
  `dt_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dt_last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `int_is_active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`int_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tab_user`
--

INSERT INTO `tab_user` (`int_user_id`, `txt_email`, `txt_password`, `int_user_type`, `txt_user_type_code`, `int_verified`, `txt_verification_code`, `dt_created_on`, `dt_last_login`, `int_is_active`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112', 1, 'admin', 1, 'dsf5765ds6a7f53fghweh', '2016-07-10 11:06:58', '2016-07-06 18:30:00', 1),
(2, 'Seller', '96e79218965eb72c92a549dd5a330112', 2, '', 1, '', '2016-07-10 11:27:16', '0000-00-00 00:00:00', 1),
(4, 'customer', '96e79218965eb72c92a549dd5a330112', 3, '', 1, '', '2016-07-10 11:27:16', '0000-00-00 00:00:00', 0),
(6, 'customer', '96e79218965eb72c92a549dd5a330112', 3, '', 1, '', '2016-07-10 11:27:16', '0000-00-00 00:00:00', 1),
(7, 'seller', '96e79218965eb72c92a549dd5a330112', 2, '', 1, '', '2016-07-11 07:47:34', '0000-00-00 00:00:00', 1),
(8, 'seller', '96e79218965eb72c92a549dd5a330112', 2, '', 1, '', '2016-07-11 09:13:45', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tab_user_type`
--

CREATE TABLE IF NOT EXISTS `tab_user_type` (
  `int_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `txt_code` varchar(15) NOT NULL,
  `txt_name` varchar(50) NOT NULL,
  PRIMARY KEY (`int_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tab_user_type`
--

INSERT INTO `tab_user_type` (`int_type_id`, `txt_code`, `txt_name`) VALUES
(1, 'admin', 'Admin'),
(2, 'seller', 'Seller'),
(3, 'customer', 'Customer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
