-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 05:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemarketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `shipandpay`
--

CREATE TABLE `shipandpay` (
  `fname` varchar(50) NOT NULL,
  `sadd` varchar(100) NOT NULL,
  `sadd2` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `postal` int(5) NOT NULL,
  `phnumber` int(10) NOT NULL,
  `instructions` varchar(200) DEFAULT NULL,
  `shipmeth` varchar(10) NOT NULL,
  `noc` varchar(50) NOT NULL,
  `ctype` varchar(20) NOT NULL,
  `cno` int(16) NOT NULL,
  `cvv` int(3) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(4) NOT NULL,
  `coupons` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipandpay`
--

INSERT INTO `shipandpay` (`fname`, `sadd`, `sadd2`, `city`, `postal`, `phnumber`, `instructions`, `shipmeth`, `noc`, `ctype`, `cno`, `cvv`, `month`, `year`, `coupons`) VALUES
('', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, ''),
('', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, ''),
('', '', '', '', 0, 0, '', '', '', '', 0, 0, '', 0, ''),
('Yohan', 'Dammam, Al Ghirnatah, Turfa Ibn Al Abd St', '', 'Dammam', 32245, 557277349, '', 'express', 'yohan wick', 'paypal', 2147483647, 255, 'Januray', 2026, ''),
('', 'Malabe', '', 'Malabe', 15268, 762984287, '', 'express', 'TA Yasith', 'paypal', 2147483647, 635, 'Januray', 2028, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
