-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 02, 2024 at 04:23 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makcruise`
--

-- --------------------------------------------------------

--
-- Table structure for table `ferrydetails`
--

DROP TABLE IF EXISTS `ferrydetails`;
CREATE TABLE IF NOT EXISTS `ferrydetails` (
  `ferryid` int NOT NULL AUTO_INCREMENT,
  `ferryname` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `ferryimage` blob,
  `fromaddress` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `toaddress` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `fromtime` time DEFAULT NULL,
  `totime` time DEFAULT NULL,
  `premiuminitialrate` float DEFAULT NULL,
  `premiumfinalrate` float DEFAULT NULL,
  `deluxinitialrate` float DEFAULT NULL,
  `deluxfinalrate` float DEFAULT NULL,
  `royalinitialrate` float DEFAULT NULL,
  `royalfinalrate` float DEFAULT NULL,
  `ferryon` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ferryid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `ferrydetails`
--

INSERT INTO `ferrydetails` (`ferryid`, `ferryname`, `ferryimage`, `fromaddress`, `toaddress`, `fromtime`, `totime`, `premiuminitialrate`, `premiumfinalrate`, `deluxinitialrate`, `deluxfinalrate`, `royalinitialrate`, `royalfinalrate`, `ferryon`) VALUES
(1, 'MAKRUZZ', 0x6d61726b72757a7a2e706e67, 'Port Blair', 'Havelock', '08:00:00', '09:30:00', 1775, 1602.5, 2300, 2075, 3150, 2840, '2023-10-17 17:58:59'),
(4, 'IIT MAJESTIC', 0x494954204d414a45535449432e6a706567, 'Port Blair', 'Havelock', '08:00:00', '09:00:00', 1775, 1602.5, 2300, 2075, 3150, 2840, '2023-10-22 08:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `passengerdetails`
--

DROP TABLE IF EXISTS `passengerdetails`;
CREATE TABLE IF NOT EXISTS `passengerdetails` (
  `passengerid` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `passengername` varchar(100) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `contactname` varchar(100) DEFAULT NULL,
  `emailid` varchar(200) DEFAULT NULL,
  `mobile` mediumtext,
  `ferrynumber` int DEFAULT NULL,
  PRIMARY KEY (`passengerid`)
) ENGINE=MyISAM AUTO_INCREMENT=434 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
