-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2017 at 05:07 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddeatails`
--

CREATE TABLE IF NOT EXISTS `adddeatails` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `ordersid` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipcode` int(7) NOT NULL,
  `country` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `pfname` varchar(25) NOT NULL,
  `plname` varchar(25) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `pzipcode` int(7) NOT NULL,
  `pcountry` varchar(10) NOT NULL,
  `pstate` varchar(10) NOT NULL,
  `pcity` varchar(10) NOT NULL,
  `pphoneno` varchar(12) NOT NULL,
  `order_status` varchar(10) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `adddeatails`
--

INSERT INTO `adddeatails` (`aid`, `ordersid`, `fname`, `lname`, `address`, `zipcode`, `country`, `state`, `city`, `phoneno`, `pfname`, `plname`, `paddress`, `pzipcode`, `pcountry`, `pstate`, `pcity`, `pphoneno`, `order_status`) VALUES
(11, 23, 'divyesh', 'ghghg', 'fgg', 395008, 'india', 'gujarat', 'surat', '556685', 'divyesh', 'ghh', 'vgbhg', 395008, 'india', 'gujarat', 'surat', 'ghghgh', 'NEW'),
(12, 24, 'amit', 'ghbghg', 'wdasddaswd', 395008, 'india', 'gujrat', 'surat', '9988998899', 'amit', 'pjhj', 'wdasddaswd', 395008, 'india', 'gujrat', 'surat', '9988998899', 'SHIPPED'),
(13, 25, 'Bapu', 'Dot', 'ddg', 395006, 'IN', 'Gujarat', 'Surat', '7894561230', 'Bapu', 'Dot', 'sdgsg', 395006, 'IN', 'Gujarat', 'Surat', '7894561230', 'PROGRESS'),
(22, 31, 'amit', 'bhalani', 'katargam', 395006, 'india', 'gujrat', 'surat', '9988998899', 'amit', 'bhalani', 'katargam', 395006, 'india', 'gujrat', 'surat', '9988998899', 'PROGRESS');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `oid` int(5) NOT NULL AUTO_INCREMENT,
  `prod_id` int(5) NOT NULL,
  `ordersid` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`oid`, `prod_id`, `ordersid`, `price`, `quantity`) VALUES
(12, 7, 24, 21299, 2),
(21, 5, 30, 56900, 1),
(22, 9, 31, 29000, 1),
(23, 3, 32, 48000, 1),
(24, 6, 33, 17900, 1),
(25, 3, 36, 48000, 1),
(26, 10, 36, 31900, 1),
(27, 18, 37, 10999, 4),
(28, 4, 38, 59400, 1),
(29, 13, 41, 49390, 1),
(30, 20, 42, 25599, 3),
(31, 7, 44, 21299, 1),
(32, 14, 47, 7147, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(15) NOT NULL AUTO_INCREMENT,
  `admin_email_id` varchar(30) NOT NULL,
  `admin_pswd` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email_id`, `admin_pswd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feed_id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `desc_feedback` varchar(5000) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feed_id`, `name`, `subject`, `email_id`, `desc_feedback`) VALUES
(2, 'amit', 'sdfg', 'amit@gmail.com', 'dvvfvghmk,kkbgbg'),
(3, 'amit', 'sdfg', 'amit@gmail.com', 'vfffhbbgfd'),
(4, 'amit', 'sdfg', 'amit@gmail.com', 'vfffhbbgfd'),
(5, 'amit', 'sdfg', 'amit@gmail.com', 'vfffhbbgfd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `cust_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `name`, `date`, `cust_id`) VALUES
(23, 'New order', '2016-06-23 09:28:16', 2),
(24, 'New order', '2016-06-24 05:46:56', 1),
(25, 'New order', '2016-06-24 11:34:38', 3),
(31, 'New order', '2016-06-30 05:53:15', 1),
(32, 'New order', '2017-11-28 02:24:13', 1),
(33, 'New order', '2017-11-28 08:18:45', 1),
(34, 'New order', '2017-11-28 08:19:34', 1),
(35, 'New order', '2017-11-28 08:21:05', 1),
(36, 'New order', '2017-11-28 11:39:56', 1),
(37, 'New order', '2017-11-29 10:09:05', 4),
(38, 'New order', '2017-11-29 10:16:05', 4),
(39, 'New order', '2017-11-29 10:17:34', 4),
(40, 'New order', '2017-11-29 10:17:47', 4),
(41, 'New order', '2017-11-29 10:18:09', 4),
(42, 'New order', '2017-11-29 10:20:30', 4),
(43, 'New order', '2017-11-29 10:21:07', 4),
(44, 'New order', '2017-11-29 10:22:27', 4),
(45, 'New order', '2017-11-29 10:22:51', 4),
(46, 'New order', '2017-11-29 10:23:00', 4),
(47, 'New order', '2017-11-29 10:25:26', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `prod_id` int(5) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(6) NOT NULL,
  `quantity` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `com_id` int(5) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`prod_id`, `prod_name`, `description`, `price`, `quantity`, `image`, `image2`, `image3`, `image4`, `com_id`) VALUES
(3, 'Apple 4s(white,16GB)', 'iOS 9 OS 4.7" Retina HD Display Camera: 12MP|5MP 3D Touch & Live Photos', 48000, 10, 'a2_101615.jpg', 'a2_101615.jpg', 'apple-iphone-4s-4g-lte-smart-phone-250x250.jpg', 'apple-iphone-4s-4g-lte-smart-phone-250x250.jpg', 5),
(4, 'Iphone6s', '32gb', 59400, 15, 'apple-iphone-6-mobile-phone-large-1.jpg', 'apple-iphone-6-mobile-phone-large-1.jpg', 'Apple-iPhone-6-32GB-Space-SDL093654756-4-2660d.jpg', 'Apple-iPhone-6-32GB-Space-SDL093654756-4-2660d.jpg', 1),
(5, 'apple-iphone-5', 'apple-iphone-5-white-all-sides', 56900, 25, 'apple-iphone-5-white-all-sides.jpg', 'apple-iphone-5-white-all-sides.jpg', 'apple-iphone-5s-mobile-phone-large-1.jpg', 'apple-iphone-5s-mobile-phone-large-1.jpg', 2),
(6, 'apple-iphone-x-', 'apple-iphone-x-mobile-phone-large-1', 17900, 30, 'apple-iphone-x-mobile-phone-large-1.jpg', 'apple-iphone-x-mobile-phone-large-1.jpg', 'apple-iphone-x-new-2.jpg', 'apple-iphone-x-new-2.jpg', 4),
(7, 'Apple 5S(silver,16GB)', '8 MP iSight Camera iOS 7 Full HD Recording FaceTime HD Camera', 21299, 15, 'apple-iphone-5s-400x400-imadpppch2n6hhux.jpeg', '61pyJRRST3L._SL1500_.jpg', '71JEkDCDYjL._SL1500_.jpg', 'apple-iphone-5s-400x400-imadpppch2n6hhux.jpeg', 5),
(8, 'Apple iPhone 6(Space Grey, 16 GB)', 'iOS 9 OS 4.7" HD Display Camera: 8MP|1.2MP Fingerprint Sensor', 37999, 20, 'apple-iphone-5-white-all-sides.jpg', 'apple-iphone-5-white-all-sides.jpg', 'apple-iphone-5-white-all-sides.jpg', 'apple-iphone-5-white-all-sides.jpg', 5),
(9, 'Apple iPhone 5C(Green, 32 GB)', 'FaceTime HD Camera 8 MP iSight Camera iOS 7 Full HD Recording', 29000, 25, 'apple-iphone-6-400x400-imaeynyptwbgfn5s.jpg', 'apple-iphone-6-400x400-imaeynyptwbgfn5s.jpg', 'apple-iphone-6-400x400-imaeynyptwbgfn5s.jpg', 'apple-iphone-6-400x400-imaeynyptwbgfn5s.jpg', 5),
(10, 'Apple iPhone 5C(Blue, 16 GB)', 'iOS 7 FaceTime HD Camera 8 MP iSight Camera Full HD Recording', 31900, 30, '51lGxcrZijL._SL1100_.jpg', '51lGxcrZijL._SL1100_.jpg', '61Ahv9f3bBL._SL1000_.jpg', '71CProl-mSL._SL1000_.jpg', 5),
(11, 'Apple-iPhone-7-Plus', '2.2 GHz Quad Core 20 MP Primary Camera 32 GB Internal Storage Windows 8.1 OS', 67299, 10, 'Apple-iPhone-7-Plus.jpg', 'Apple-iPhone-7-Plus.jpg', 'Apple-iPhone-7-Plus.jpg', 'Apple-iPhone-7-Plus.jpg', 1),
(12, 'Apple-iPhone-8', 'Apple-iPhone-8-256GB', 63800, 10, 'Apple-iPhone-8-256GB.jpg', 'Apple-iPhone-8-256GB.jpg', 'Apple-iPhone-8-256GB.jpg', 'Apple-iPhone-8-256GB.jpg', 1),
(13, 'iPhone-6s', 'iPhone-6s-', 49390, 15, 'iPhone-6s-270x360.jpg', 'iPhone-6s-270x360.jpg', 'iPhone-6s-270x360.jpg', 'iPhone-6s-270x360.jpg', 1),
(14, 'watch-iphone-setup.jpg', 'watch-edition-series-2-42mm', 7147, 15, 'watch-iphone-setup.jpg', 'watch-iphone-setup.jpg', 'watch-edition-series-2-42mm.jpg', 'watch-edition-series-2-42mm.jpg', 1),
(15, '298px-IPhone_8_Plus ', '5.2" sAMOLED Display 13MP|5MP; Dual Flash Android Marshmallow 6 3100mAh Battery', 53990, 10, '298px-IPhone_8_Plus.png', '298px-IPhone_8_Plus.png', '298px-IPhone_8_Plus.png', '298px-IPhone_8_Plus.png', 2),
(16, '150px-IPhone_6s_Rose', '5.5" sAMOLED Display 13MP|5MP; Dual Flash Android Marshmallow 6 3300mAh Battery', 35590, 10, '150px-IPhone_6s_Rose.png', '150px-IPhone_6s_Rose.png', '150px-IPhone_6s_Rose.png', '150px-IPhone_6s_Rose.png', 2),
(17, '150px-IPhone3GS', '150px-IPhone3GS', 20190, 15, '150px-IPhone3GS.png', '150px-IPhone3GS.png', '150px-IPhone3GS.png', '150px-IPhone3GS.png', 2),
(18, 'series3 I watch', 'With built-in GPS and altimeter, Apple Watch Nike+ has all the features to help you take your run to', 10999, 18, 'series3_1.PNG', 'series3_1.PNG', 'series3_2.PNG', 'series3_2.PNG', 2),
(19, 'series4 Watch', 'Technology at wrist', 20199, 15, 'series4_1.PNG', 'series4_1.PNG', 'series4_1.PNG', 'series4_1.PNG', 4),
(20, 'Iphone3(Black, 32 GB)', 'Iphone3(Black, 32 GB),5MP camera', 25599, 14, '150px-IPhone3GS.png', '150px-IPhone3GS.png', '150px-IPhone3GS.png', '150px-IPhone3GS.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE IF NOT EXISTS `tbl_register` (
  `cust_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `country` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `zip_code` int(7) NOT NULL,
  `password` varchar(25) NOT NULL,
  `confirm_password` varchar(25) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`cust_id`, `first_name`, `last_name`, `user_name`, `email_add`, `gender`, `country`, `state`, `city`, `zip_code`, `password`, `confirm_password`, `phone_no`) VALUES
(1, 'amit', 'patel', 'amit123', 'amit@gmail.com', 'Male', 'india', 'gujrat', 'surat', 395008, '123123', '123123', '9988998899'),
(4, 'avinash', 'sharma', 'avi11', 'avinashs735@gmail.com', 'Male', 'India', 'UP', 'Allahabad', 212307, '12345', '12345', '8576810694');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE IF NOT EXISTS `tbl_status` (
  `stid` int(5) NOT NULL AUTO_INCREMENT,
  `prod_id` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  `cust_id` int(5) NOT NULL,
  PRIMARY KEY (`stid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`stid`, `prod_id`, `status`, `cust_id`) VALUES
(9, '18', 'PAID', 2),
(10, '7', 'SHIPPED', 1),
(11, '15', 'DELIVARY', 1),
(12, '3', 'PAID', 1),
(13, '3', 'SHIPPED', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
