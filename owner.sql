-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 06:31 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `owner`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getowner` ()  NO SQL
select * from owner$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `imageid` varchar(10) NOT NULL,
  `image` varchar(30) NOT NULL,
  `image_text` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`imageid`, `image`, `image_text`) VALUES
('0', '9.jpg', 'ioo'),
('', '9.jpg', 'good'),
('', '20161229_082229.jpg', 'nice\r\n'),
('', '20130105_090130.jpg', 'ff'),
('', '20161229_082233.jpg', 'TIYOJ\r\n'),
('', '20161229_082021.jpg', 'gihu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` char(30) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pass`) VALUES
('muni', '6864');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ownid` int(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `ownname` varchar(30) NOT NULL,
  `ownphno` varchar(15) NOT NULL,
  `sex` char(5) NOT NULL,
  `vehno` varchar(10) NOT NULL,
  `ownadd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`ownid`, `user`, `pass`, `ownname`, `ownphno`, `sex`, `vehno`, `ownadd`) VALUES
(1, 'muni', '2001', 'muniraj', '9008545065', 'M', 'KA2001', 'bagepalli'),
(3, 'priya', '2004', 'priya mani s', '9099090990', 'F', 'KA5555', 'belagum'),
(4, 'yyy', '1122', 'yyyy', '68797089', 'M', 'KA3333', 'HIHIJO'),
(5, 'narasimha', '1212', 'narasimha', '111111111', 'M', 'KA1119', 'banagalore'),
(6, 'yogesh', '12345', 'yogesh', '9988', 'M', 'KA1236', 'banagalore'),
(7, 'manu', '2222', 'vjguhu', '99-9-9', 'M', 'KA5558', 'YFIGI'),
(8, 'ash', '1111', 'fyfug', '9099090990', 'M', 'KA4444', 'ggug');

--
-- Triggers `owner`
--
DELIMITER $$
CREATE TRIGGER `deletelog` BEFORE DELETE ON `owner` FOR EACH ROW INSERT INTO ownlog values(OLD.ownid, OLD.user, OLD.pass, OLD.ownname, OLD.ownphno,OLD.sex, OLD.vehno, OLD.ownadd,'DELETED',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `logs` AFTER INSERT ON `owner` FOR EACH ROW INSERT INTO servin(vehno) values (NEW.vehno)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ownlog`
--

CREATE TABLE `ownlog` (
  `ownid` int(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `ownname` varchar(30) NOT NULL,
  `ownphno` int(15) NOT NULL,
  `sex` char(5) NOT NULL,
  `vehno` varchar(10) NOT NULL,
  `ownadd` text NOT NULL,
  `action` varchar(20) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownlog`
--

INSERT INTO `ownlog` (`ownid`, `user`, `pass`, `ownname`, `ownphno`, `sex`, `vehno`, `ownadd`, `action`, `cdate`) VALUES
(1, 'muni', 'muni6864', 'muni', 2147483647, 'M', 'KA1124', 'banagalore', 'DELETED', '2018-12-03'),
(2, 'gowda', '2002', 'gowda', 2147483647, 'M', 'KA4444', 'hebbal', 'DELETED', '2018-12-10'),
(3, 'raj', '1111', 'krish', 2147483647, 'M', 'KA1111', 'bagepALLI', 'DELETED', '2018-12-03'),
(4, 'umesh', '2006', 'umesh', 2147483647, 'M', 'KA7777', 'shidlagatta', 'DELETED', '2018-12-10'),
(5, 'narasimha', '1212', 'narasimha', 2147483647, 'M', 'KA1234', 'bangalore', 'DELETED', '2018-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `servin`
--

CREATE TABLE `servin` (
  `vehno` varchar(30) NOT NULL,
  `engineservice` varchar(30) NOT NULL,
  `oilservice` varchar(30) NOT NULL,
  `waterservice` varchar(30) NOT NULL,
  `enginereplace` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL DEFAULT ' PENDING...'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servin`
--

INSERT INTO `servin` (`vehno`, `engineservice`, `oilservice`, `waterservice`, `enginereplace`, `Status`) VALUES
('KA1111', 'Yes', 'Yes', 'Yes', 'No', 'Completed'),
('KA2222', '', '', '', '', 'Completed'),
('KA2001', 'Yes', 'Yes', 'Yes', 'No', 'Completed'),
('KA4444', 'No', 'Yes', 'Yes', 'No', 'Completed'),
('KA5555', 'Yes', 'Yes', 'No', 'No', ' PENDING...'),
('KA7777', '', '', '', '', 'Completed'),
('KA3333', 'No', 'Yes', 'Yes', 'No', 'Completed'),
('KA1234', 'Yes', 'Yes', 'No', 'Yes', 'Completed'),
('KA1119', 'Yes', 'Yes', 'No', 'No', 'Completed'),
('KA1236', 'Yes', 'Yes', 'No', 'No', 'Completed'),
('KA5558', 'No', 'Yes', 'Yes', 'No', 'Completed'),
('KA4444', 'No', 'Yes', 'Yes', 'No', 'Completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ownid`),
  ADD UNIQUE KEY `vehno` (`vehno`);

--
-- Indexes for table `ownlog`
--
ALTER TABLE `ownlog`
  ADD PRIMARY KEY (`ownid`),
  ADD UNIQUE KEY `vehno` (`vehno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `ownid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
