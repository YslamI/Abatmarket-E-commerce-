-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 09, 2023 at 07:26 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abatmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'smartphones'),
(2, 'smart_watches'),
(3, 'phone_accessories'),
(4, 'mobiles'),
(5, 'projectors'),
(6, 'computers_and_notebooks'),
(7, 'comp_accessories'),
(8, 'coffee'),
(9, 'drinks'),
(10, 'fruits_vegetables'),
(11, 'cloth_wash'),
(12, 'cleaning_goods'),
(13, 'fresheners'),
(14, 'shoes'),
(15, 'man_clothes'),
(16, 'woman_clothes'),
(17, 'kids_clothes'),
(18, 'bytovaya_tehnika'),
(19, 'stationary'),
(20, 'auto_goods'),
(21, 'used_goods');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(64) NOT NULL AUTO_INCREMENT,
  `file` varchar(5024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `file`) VALUES
(1, 'files/ Reading Section 2.zip'),
(2, 'files/ 019.JPG'),
(3, 'files/Speaking Section_2.zip');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `prd_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `prd_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(128) NOT NULL,
  `photo` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `photos` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price1` int(11) NOT NULL,
  `price2` int(11) DEFAULT NULL,
  `info1` text COLLATE utf8_unicode_ci NOT NULL,
  `info2` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`prd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prd_id`, `category_id`, `prd_name`, `amount`, `photo`, `photos`, `price1`, `price2`, `info1`, `info2`, `description`) VALUES
(12, 1, 'Iphone 128GB', 0, 'img/03.jpg', NULL, 10500, NULL, 'Battery type', 'Unremovable', ''),
(13, 2, 'Apple Watch 4 series', 0, 'img/item1.jpg', NULL, 3890, NULL, 'Charger;Display', 'quick charge;AmoLED', ''),
(14, 6, 'MacBook Air', 0, 'img/product-8.jpg', NULL, 37800, NULL, 'Hard Disk;Videocard;Processor;SDD', '500GB;Nvidia GeForce GT1030;Intel CoreI7 8000;256GB', ''),
(15, 6, 'MacBook Air', 0, 'img/product-8.jpg', NULL, 37800, NULL, 'SDD;Hard Disk', '256GB;500GB', ''),
(34, 6, 'MacBook Air', 0, 'img/product-8.jpg', NULL, 3780, NULL, 'SSD', '256GB', ''),
(59, 2, 'Apple Watch 4 series', 0, 'img/item1.jpg', NULL, 3890, NULL, 'Charger', 'AmoLeD', ''),
(60, 1, 'Iphone X 256GB', 0, 'img/02.jpg', NULL, 10500, NULL, 'Battery;Memory', '3000mAh;256GB', ''),
(78, 6, 'MacBook Air', 0, 'img/product-8.jpg', 'img/01.jpg,img/02.jpg,img/03.jpg', 37800, NULL, 'Processor', 'Intel Corei7 8000', ''),
(72, 2, 'Apple Watch 4 series', 0, 'img/item2.jpg', NULL, 3890, 3999, 'Charger', 'quick charge', ''),
(73, 1, 'Iphone X 256GB', 0, 'img/02.jpg', 'img/01.jpg,img/03.jpg', 10500, NULL, 'Battery', '3000mAh', ''),
(74, 1, 'Iphone X 256GB', 0, 'img/02.jpg', 'img/03.jpg', 10500, NULL, 'Battery', '3000mAh', ''),
(75, 1, 'Iphone X 256GB', 0, 'img/02.jpg', 'img/01.jpg,img/03.jpg', 10500, NULL, 'Battery', '3000mAh', ''),
(76, 1, 'Iphone X 256GB', 0, 'img/02.jpg', 'img/01.jpg,img/03.jpg', 10500, NULL, 'Battery', '3000mAh', ''),
(77, 2, 'Apple Watch4 series', 12, 'img/item1.jpg', 'img/06.jpg,img/07.jpg,img/08.jpg,img/09.jpg', 3890, NULL, 'Display', 'AmoLed', ''),
(79, 7, 'Headphones', 20, 'img/product-5.jpg', 'img/product-7.jpg', 25, 32, '', '', 'Information about technical characteristics, delivery set, country of manufacture and external form of goods is for reference only and is based on the latest available information from the manufacturer.'),
(80, 7, 'Headphones', 20, 'img/product-5.jpg', 'img/product-7.jpg', 25, 32, 'Array', 'Headphones;Dolby Atoms, MP3, MP4', 'Information about technical characteristics, delivery set, country of manufacture and external form of goods is for reference only and is based on the latest available information from the manufacturer.'),
(81, 7, 'Headphones', 20, 'img/product-5.jpg', 'img/product-7.jpg', 25, 32, 'Array', 'Headphones;Dolby Atoms, MP3, MP4', 'Information about technical characteristics, delivery set, country of manufacture and external form of goods is for reference only and is based on the latest available information from the manufacturer.'),
(82, 7, 'Headphones', 23, 'img/fetured-item-1.png', '', 35, 38, 'Type;Music features', 'Headphones;Dolby Atoms, MP3, MP4', 'Information about technical characteristics, delivery set, country of manufacture and external form of goods is for reference only and is based on the latest available information from the manufacturer.'),
(83, 7, 'Headphones', 20, 'img/fetured-item-1.png', '', 35, 40, 'Type;Music features and formats', 'Headphones dfh sdfdf dfahfsd;Dolby Atoms, MP3, MP4 and many other formats that are available', 'Information about technical characteristics, delivery set, country of manufacture and external form of goods is for reference only and is based on the latest available information from the manufacturer.'),
(84, 6, 'MacBook Pro', 50, 'img/M2 Apple MacBook Pro.jpg', 'img/product-8.jpg', 41000, 42800, 'HDD;RAM;Processor;SDD;Videocard', '1TB;16GB;Intel Core i9 10100;500GB;Nvidia Geforce RTX 800, 4GB', 'Information about technical characteristics, delivery set, country of manufacture and external form of goods is for reference only and is based on the latest available information from the manufacturer.'),
(85, 1, 'Iphone 13 Pro 256GB', 40, 'img/Iphone 13 Pro.jpg', NULL, 24370, 24800, 'Interfaces; Number of processor cores; Color; Additional;ROM; Sizes; Camera; Numebr of SIM-Cards; RAM; Diplay; OS', ' Bluetooth-5.0, NFC, Wi-Fi-802.11ax, BeiDou, Galileo, GLONASS, GPS, QZSS; 6; Sky Blue; Stereo speakers, gyroscope, barometer, Flashlight, proximity sensor, ambient light sensor, compass, accelerometer; 256 GB; 71.5x146.7x7.65 mm; Triple: 12 MPs*12 MPs*12 MPs; \r\nDiaphragm:F/1.5*F/1.8*F/2.8; \r\nFeatures: Lens protection by sapphire crystal. Deep Fusion Technology. Audiozoom. QuickTake function. Apple ProRAW format.; 1 nano SIM; 6 GB; ', 'Super Retina XDR display with ProMotion technology and fast, smooth response. A massive upgrade to the camera system that opens up completely new possibilities. Exceptional strength. A15 Bionic is the fastest iPhone chip. And impressive battery life. It\'s all Pro. Surgical stainless steel, Ceramic Shield, IP68 water resistance, it\'s all incredibly beautiful and exceptionally durable. Both the hardware and software are significantly upgraded with this upgrade. Macro mode is now available for the ultra-wide camera, 3x optical zoom for the telephoto camera, and Night mode is supported on all three cameras.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `phone_number`, `password`) VALUES
(9, 'Guwanch', 'Wepayew', 'itachiuchihadattebae@gmail.com', '+99361713142', '!Guga2005'),
(10, 'Yslam', 'Ismailow', 'fillipsenterprise@gmail.com', '+99363040830', 'E_market05');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
CREATE TABLE IF NOT EXISTS `vendors` (
  `vendor_id` int(64) NOT NULL AUTO_INCREMENT,
  `company` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
