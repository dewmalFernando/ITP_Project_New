-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2019 at 12:47 PM
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
-- Database: `unisystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `AID` varchar(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

DROP TABLE IF EXISTS `attendence`;
CREATE TABLE IF NOT EXISTS `attendence` (
  `AttID` varchar(10) NOT NULL,
  `AttType` varchar(30) DEFAULT NULL,
  `DID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`AttID`),
  KEY `DID` (`DID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `BID` varchar(10) NOT NULL,
  `Title` varchar(60) DEFAULT NULL,
  `Author` varchar(50) DEFAULT NULL,
  `NoOfCoppies` int(11) DEFAULT NULL,
  `Catagory` varchar(50) DEFAULT NULL,
  `Avilability` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`BID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `borrowed`
--

DROP TABLE IF EXISTS `borrowed`;
CREATE TABLE IF NOT EXISTS `borrowed` (
  `SID` varchar(10) NOT NULL,
  `BID` varchar(10) NOT NULL,
  `BDate` date DEFAULT NULL,
  `DDate` date DEFAULT NULL,
  PRIMARY KEY (`BID`,`SID`),
  KEY `SID` (`SID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `CID` varchar(10) NOT NULL,
  `CName` varchar(50) DEFAULT NULL,
  `Batch` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `DID` varchar(10) NOT NULL,
  `DName` varchar(50) DEFAULT NULL,
  `FID` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`DID`),
  KEY `FID` (`FID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `FID` varchar(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Location` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`FID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fines`
--

DROP TABLE IF EXISTS `fines`;
CREATE TABLE IF NOT EXISTS `fines` (
  `FnID` varchar(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Amount` double DEFAULT NULL,
  PRIMARY KEY (`FnID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

DROP TABLE IF EXISTS `hall`;
CREATE TABLE IF NOT EXISTS `hall` (
  `HID` varchar(10) NOT NULL,
  `HName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`HID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hosteldetials`
--

DROP TABLE IF EXISTS `hosteldetials`;
CREATE TABLE IF NOT EXISTS `hosteldetials` (
  `HID` varchar(10) NOT NULL,
  `RoomNo` int(11) DEFAULT NULL,
  `DateFrom` varchar(20) DEFAULT NULL,
  `DateTo` varchar(20) DEFAULT NULL,
  `HostelName` varchar(30) DEFAULT NULL,
  `SID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`HID`),
  KEY `SID` (`SID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `NID` varchar(10) NOT NULL,
  `LDate` varchar(20) DEFAULT NULL,
  `RDate` varchar(20) DEFAULT NULL,
  `Description` varchar(300) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `SID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`NID`),
  KEY `SID` (`SID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

DROP TABLE IF EXISTS `problem`;
CREATE TABLE IF NOT EXISTS `problem` (
  `PID` varchar(10) NOT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `Description` varchar(300) DEFAULT NULL,
  `Catagory` varchar(50) DEFAULT NULL,
  `Status` varchar(20) DEFAULT NULL,
  `SID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`PID`),
  KEY `SID` (`SID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `RID` varchar(10) NOT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `Description` varchar(300) DEFAULT NULL,
  `SID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`RID`),
  KEY `SID` (`SID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffmem`
--

DROP TABLE IF EXISTS `staffmem`;
CREATE TABLE IF NOT EXISTS `staffmem` (
  `STID` varchar(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `AID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`STID`),
  KEY `AID` (`AID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `SID` varchar(10) NOT NULL,
  `FName` varchar(30) DEFAULT NULL,
  `LName` varchar(30) DEFAULT NULL,
  `NIC` varchar(12) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `DOB` varchar(20) DEFAULT NULL,
  `Type` varchar(10) DEFAULT NULL,
  `Passport` varchar(30) DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `CID` varchar(10) DEFAULT NULL,
  `DID` varchar(10) DEFAULT NULL,
  `LibMember` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`SID`),
  KEY `CID` (`CID`),
  KEY `DID` (`DID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcourse`
--

DROP TABLE IF EXISTS `subcourse`;
CREATE TABLE IF NOT EXISTS `subcourse` (
  `Scode` varchar(10) NOT NULL,
  `CID` varchar(10) NOT NULL,
  PRIMARY KEY (`Scode`,`CID`),
  KEY `CID` (`CID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subhall`
--

DROP TABLE IF EXISTS `subhall`;
CREATE TABLE IF NOT EXISTS `subhall` (
  `Scode` varchar(10) NOT NULL,
  `HID` varchar(10) NOT NULL,
  PRIMARY KEY (`Scode`,`HID`),
  KEY `HID` (`HID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `Scode` varchar(10) NOT NULL,
  `SName` varchar(50) DEFAULT NULL,
  `Credit` double DEFAULT NULL,
  `AttID` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Scode`),
  KEY `AttID` (`AttID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
