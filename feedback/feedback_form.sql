-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2021 at 01:29 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_tryart`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_form`
--

DROP TABLE IF EXISTS `feedback_form`;
CREATE TABLE IF NOT EXISTS `feedback_form` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email Id` varchar(255) NOT NULL,
  `Rating` float NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Feedback` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback_form`
--

INSERT INTO `feedback_form` (`Id`, `Name`, `Email Id`, `Rating`, `Image`, `Feedback`) VALUES
(1, 'aaa bbb ', 'a@gmail.com', 4.4, 'uploads/5d129a6b589f1c1d3886fd4e1fff3459img12.png', 'Excellent');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
