-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2015 at 01:22 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`id` int(11) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `accounttype` enum('a','b','c','') NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `country`, `state`, `city`, `accounttype`, `bio`) VALUES
(1, 'India', 'madhya pradesh', 'Gwalior', 'b', 'Area of Interest: Soft Computing, AI, Speech Processing, Biomedical and Bio-informatics'),
(2, 'india', 'madhya pradesh', 'gwalior', 'b', 'Associate Professor\r\nArea of Interest:  Reliability, Statistics, Fuzzy Sets and Fuzzy Logic, Optimization, and Soft Computing');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `designation` varchar(10) NOT NULL,
  `phonenumber` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `firstname`, `lastname`, `designation`, `phonenumber`) VALUES
(1, 'admin', 'admin', ' Anupam ', 'shukla', 'prof', 2147483647),
(2, 'ajay', 'ajay12345', 'ajay', 'kumar', 'assoc prof', 48514815),
(3, 'milan', '5985', 'milan pal', 'singh', 'b.tech', 687);

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

CREATE TABLE IF NOT EXISTS `monday` (
`id` int(11) NOT NULL,
  `sub1` varchar(50) DEFAULT NULL,
  `sub2` varchar(50) DEFAULT NULL,
  `sub3` varchar(50) DEFAULT NULL,
  `sub4` varchar(50) DEFAULT NULL,
  `sub5` varchar(50) DEFAULT NULL,
  `sub6` varchar(50) DEFAULT NULL,
  `sub7` varchar(50) DEFAULT NULL,
  `sub8` varchar(50) DEFAULT NULL,
  `sub9` varchar(50) DEFAULT NULL,
  `sub10` varchar(50) DEFAULT NULL,
  `sub11` varchar(50) DEFAULT NULL,
  `sub12` varchar(50) DEFAULT NULL,
  `sub13` varchar(50) DEFAULT NULL,
  `sub14` varchar(50) DEFAULT NULL,
  `sub15` varchar(50) DEFAULT NULL,
  `sub16` varchar(50) DEFAULT NULL,
  `sub17` varchar(50) DEFAULT NULL,
  `sub18` varchar(50) DEFAULT NULL,
  `sub19` varchar(50) DEFAULT NULL,
  `sub20` varchar(50) DEFAULT NULL,
  `sub21` varchar(50) DEFAULT NULL,
  `sub22` varchar(50) DEFAULT NULL,
  `sub23` varchar(50) DEFAULT NULL,
  `sub24` varchar(50) DEFAULT NULL,
  `sub25` varchar(50) DEFAULT NULL,
  `sub26` varchar(50) DEFAULT NULL,
  `sub27` varchar(50) DEFAULT NULL,
  `sub28` varchar(50) DEFAULT NULL,
  `sub29` varchar(50) DEFAULT NULL,
  `sub30` varchar(50) DEFAULT NULL,
  `sub31` varchar(50) DEFAULT NULL,
  `sub32` varchar(50) DEFAULT NULL,
  `sub33` varchar(50) DEFAULT NULL,
  `sub34` varchar(50) DEFAULT NULL,
  `sub35` varchar(50) DEFAULT NULL,
  `sub36` varchar(50) DEFAULT NULL,
  `sub37` varchar(50) DEFAULT NULL,
  `sub38` varchar(50) DEFAULT NULL,
  `sub39` varchar(50) DEFAULT NULL,
  `sub40` varchar(50) DEFAULT NULL,
  `sub41` varchar(50) DEFAULT NULL,
  `sub42` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monday`
--

INSERT INTO `monday` (`id`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`, `sub9`, `sub10`, `sub11`, `sub12`, `sub13`, `sub14`, `sub15`, `sub16`, `sub17`, `sub18`, `sub19`, `sub20`, `sub21`, `sub22`, `sub23`, `sub24`, `sub25`, `sub26`, `sub27`, `sub28`, `sub29`, `sub30`, `sub31`, `sub32`, `sub33`, `sub34`, `sub35`, `sub36`, `sub37`, `sub38`, `sub39`, `sub40`, `sub41`, `sub42`) VALUES
(1, 'ai', 'mbsd', '', '', 'cg', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'aaaaaaaaaaa', 'df', 'gfd', 'dg', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monday`
--
ALTER TABLE `monday`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `monday`
--
ALTER TABLE `monday`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
