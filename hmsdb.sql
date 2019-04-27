-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2019 at 05:33 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

DROP TABLE IF EXISTS `diseases`;
CREATE TABLE IF NOT EXISTS `diseases` (
  `timestamp` timestamp NOT NULL,
  `Disease` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`timestamp`, `Disease`) VALUES
('2019-04-25 09:51:06', 'cold'),
('2019-04-25 09:51:06', 'cough'),
('2019-04-25 09:51:06', 'Fever'),
('2019-04-25 09:52:52', 'Cholera'),
('2019-04-25 09:52:52', 'Jaundice'),
('2019-04-25 09:54:41', 'Jaundice'),
('2019-04-25 10:51:34', 'Cholera'),
('2019-04-25 10:51:34', 'Fever');

-- --------------------------------------------------------

--
-- Table structure for table `doclogtb`
--

DROP TABLE IF EXISTS `doclogtb`;
CREATE TABLE IF NOT EXISTS `doclogtb` (
  `docid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`docid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doclogtb`
--

INSERT INTO `doclogtb` (`docid`, `username`, `password`) VALUES
(1, 'mahi', 'sakshi'),
(2, 'raviji', 'Preshit');

-- --------------------------------------------------------

--
-- Table structure for table `doc_details`
--

DROP TABLE IF EXISTS `doc_details`;
CREATE TABLE IF NOT EXISTS `doc_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `HospitalName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Contact` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_details`
--

INSERT INTO `doc_details` (`id`, `Name`, `Username`, `Specialization`, `HospitalName`, `Address`, `DOB`, `Contact`) VALUES
(1, 'Mahendra', 'mahi', 'Cardiologist', 'ab_hospital', 'abc_road', '2019-04-05', '7362819233'),
(2, 'Ravindra', 'raviji', 'Gynocologist', 'Matrudeva', 'ABC square jatni', '2019-04-10', '9364974492');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `timestamp` timestamp NOT NULL,
  `doc_id` int(11) NOT NULL,
  `pat_id` int(11) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `op_req` varchar(5) NOT NULL,
  PRIMARY KEY (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`timestamp`, `doc_id`, `pat_id`, `disease`, `medicine`, `op_req`) VALUES
('2019-04-25 09:51:06', 2, 2, 'Fever,cough,cold', 'Paracetamol,honeytus', 'No'),
('2019-04-25 09:52:52', 2, 1, 'Jaundice,Cholera', 'cetamol,ethanol', 'No'),
('2019-04-25 09:54:41', 2, 3, 'Jaundice', 'paramol', 'No'),
('2019-04-25 10:51:34', 2, 3, 'Fever,Cholera', 'Med1,Med2', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

DROP TABLE IF EXISTS `logintb`;
CREATE TABLE IF NOT EXISTS `logintb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`id`, `username`, `password`) VALUES
(1, 'iamvk', 'anushka'),
(2, '', ''),
(3, 'dindaacad', 'Preshit'),
(4, 'imshami', 'Preshit');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

DROP TABLE IF EXISTS `medicines`;
CREATE TABLE IF NOT EXISTS `medicines` (
  `timestamp` timestamp NOT NULL,
  `medicine` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`timestamp`, `medicine`) VALUES
('2019-04-25 09:51:06', 'honeytus'),
('2019-04-25 09:51:06', 'Paracetamol'),
('2019-04-25 09:52:52', 'ethanol'),
('2019-04-25 09:52:52', 'cetamol'),
('2019-04-25 09:54:41', 'paramol'),
('2019-04-25 10:51:34', 'Med2'),
('2019-04-25 10:51:34', 'Med1');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE IF NOT EXISTS `notices` (
  `timestamp` timestamp NOT NULL,
  `notice` varchar(1000) NOT NULL,
  `priority` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`timestamp`, `notice`, `priority`) VALUES
('2019-04-25 10:54:13', 'Chorela alert!', 'Very Imp'),
('2019-04-25 09:56:36', 'There can be breakout of jaundice. Be Safe.', 'Very Imp');

-- --------------------------------------------------------

--
-- Table structure for table `pat_details`
--

DROP TABLE IF EXISTS `pat_details`;
CREATE TABLE IF NOT EXISTS `pat_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `Contact` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_details`
--

INSERT INTO `pat_details` (`id`, `Name`, `Username`, `Address`, `DOB`, `Contact`) VALUES
(1, 'Virat', 'iamvk', 'xyz_road', '2019-04-05', '+91-8765432469'),
(2, 'Ashok ', 'dindaacad', 'PQR square jatni', '2019-04-12', '8237466392'),
(3, 'Mohammad', 'imshami', 'IIT square jatni', '2019-02-21', '9238746728');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
