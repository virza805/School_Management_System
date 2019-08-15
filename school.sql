-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 07:04 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', 'admin'),
(5, 'afroza', 'afroza'),
(6, 'tanvir', 'tanvir');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `CID` int(11) NOT NULL,
  `CNAME` varchar(150) NOT NULL,
  `CSEC` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CID`, `CNAME`, `CSEC`) VALUES
(14, '1', 'a'),
(15, '2', 'a'),
(16, '3', 'a'),
(17, '4', 'a'),
(18, '5', 'a'),
(19, '6', 'a'),
(20, '7', 'a'),
(21, '8', 'a'),
(23, '9', 'Science'),
(24, '9', 'B.Sturders'),
(25, '9', 'Arcis'),
(26, '10', 'Science'),
(27, '10', 'B.Sturders'),
(28, '10', 'Arcis');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Allaha', 'virza805@gmail.com', 'web', 'asfd gj khgfrnmn dfkjhgn jkhih'),
(2, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(3, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(4, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(5, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(6, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(7, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(8, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(9, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(10, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(11, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(12, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(13, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(14, 'Tanvir', 'tanvir@gmail.com', 'Test_Contact', 'I hope it successful connect '),
(15, 'Tanvir', 'tanvir@gmail.com', 'love', 'Aj 14-01-2019');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `EID` int(11) NOT NULL,
  `ENAME` varchar(150) NOT NULL,
  `ETYPE` varchar(150) NOT NULL,
  `EDATE` varchar(150) NOT NULL,
  `SESSION` varchar(150) NOT NULL,
  `CLASS` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`EID`, `ENAME`, `ETYPE`, `EDATE`, `SESSION`, `CLASS`, `SUB`) VALUES
(12, '1st Semistar', '1st', '2019-01-01', 'a', '1', 'Bangla-1st'),
(13, '1st Semistar', '100', '2019-01-01', 'a', '2', 'Bangla-1st'),
(14, '1st Semistar', '100', '2019-01-01', 'a', '3', 'Bangla-1st'),
(15, '1st Semistar', '100', '2019-01-01', 'a', '4', 'Bangla-1st'),
(16, '1st Semistar', '100', '2019-01-01', 'a', '5', 'Bangla-1st'),
(17, '1st Semistar', '100', '2019-01-01', 'a', '6', 'Bangla-1st'),
(18, '1st Semistar', '100', '2019-01-01', 'a', '7', 'Bangla-1st'),
(19, '1st Semistar', '100', '2019-01-01', 'a', '8', 'Bangla-1st'),
(20, '1st Semistar', '100', '2019-01-01', 'Science', '9', 'Bangla-1st'),
(21, '1st Semistar', '100', '2019-01-01', 'B.Sturders', '9', 'Bangla-1st'),
(22, '1st Semistar', '100', '2019-01-03', 'a', '1', 'English-1st'),
(23, '1st Semistar', '100', '2019-01-03', 'a', '2', 'English-1st'),
(24, '1st Semistar', '100', '2019-01-04', 'a', '3', 'English-2nd'),
(25, '1st Semistar', '100', '2019-01-04', 'a', '4', 'English-2nd'),
(26, '1st Semistar', '100', '2019-01-04', 'a', '5', 'English-2nd'),
(27, '1st Semistar', '100', '2019-01-05', 'a', '5', 'Mathematics'),
(28, '1st Semistar', '100', '2019-01-05', 'a', '7', 'Science'),
(29, '1st Semistar', '100', '2019-01-05', 'a', '8', 'Mathematics'),
(30, '1st Semistar', '100', '2019-01-06', 'B.Sturders', '10', 'Science'),
(31, '1st Semistar', '100', '2019-01-06', 'Science', '10', 'S. Science'),
(32, '4th', '500', '2019-03-10', 'b', '9', 'Bangla-2nd');

-- --------------------------------------------------------

--
-- Table structure for table `hclass`
--

CREATE TABLE `hclass` (
  `HID` int(11) NOT NULL,
  `TID` int(11) NOT NULL,
  `CLA` varchar(150) NOT NULL,
  `SEC` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL,
  `HCTIME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hclass`
--

INSERT INTO `hclass` (`HID`, `TID`, `CLA`, `SEC`, `SUB`, `HCTIME`) VALUES
(4, 10, '1', 'a', 'Bangla-1st', '10-10:40am'),
(5, 10, '5', 'a', 'Mathematics', '10:40-11:20am'),
(6, 10, '7', 'a', 'Mathematics', '11:20-12pm'),
(7, 10, '8', 'a', 'Science', '12-12:30'),
(8, 10, '9', 'Sceience', 'S. Science', '12:30-1 pm'),
(9, 12, '10', 'Sceience', 'S. Science', '8:00-8:40 am');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `MID` int(11) NOT NULL,
  `REGNO` varchar(150) NOT NULL,
  `SUB` varchar(150) NOT NULL,
  `MARK` varchar(150) NOT NULL,
  `TERM` varchar(150) NOT NULL,
  `CLASS` varchar(150) NOT NULL,
  `TMARK` varchar(100) NOT NULL,
  `SMARK` varchar(100) NOT NULL,
  `GPA` varchar(100) NOT NULL,
  `GPOINT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`MID`, `REGNO`, `SUB`, `MARK`, `TERM`, `CLASS`, `TMARK`, `SMARK`, `GPA`, `GPOINT`) VALUES
(1, 'S101', 'Bangla', '50', 'Exam', '7', '20', '30', 'B', '3.00'),
(2, 'S101', 'Science', '80', 'Exam', '7', '20', '60', 'A+', '5.00'),
(3, 'S101', 'English', '70', 'Exam', '7', '0', '', '', ''),
(4, 'S101', 'Islam', '60', 'First Tram', '7', '0', '', '', ''),
(5, 'S101', 'Bangla', '80', 'Exam', '7', '0', '', '', ''),
(6, 'S101', 'Mathematics', '77', 'First Tram', '7', '0', '', '', ''),
(7, 'S101', 'Bangla-1st', '60', '100', '6', '10', '50', 'A-', '3.50'),
(8, 'S101', 'Bangla-2nd', '50', '100', '6', '10', '40', 'C', '2.00'),
(9, 'S101', 'English-1st', '86', '100', '6', '24', '62', 'A+', '5.00'),
(10, 'S101', 'English-2nd', '50', '100', '6', '15', '35', 'B', '3.00'),
(11, 'S101', 'Mathematics', '68', '100', '6', '15', '53', 'A-', '3.50'),
(12, 'S101', 'Relajing', '75', '100', '6', '25', '50', 'A', '4.00'),
(13, 'S101', 'S. Science', '33', '100', '6', '9', '247', 'D', '1.00'),
(14, 'S101', 'Agricultural', '44', '100', '6', '14', '30', 'C', '2.00'),
(15, 'S101', 'Science', '55', '100', '6', '15', '40', 'B', '3.00'),
(16, 'S102', 'Bangla-1st', '33', '100', '6', '16', '17', 'D', '1.00'),
(17, 'S102', 'Bangla-2nd', '55', '100', '6', '20', '35', 'B', '3.00'),
(18, 'S102', 'English-1st', '77', '100', '6', '23', '54', 'A', '4.00'),
(19, 'S102', 'English-2nd', '41', '100', '6', '10', '34', 'C', '2.00'),
(20, 'S102', 'Mathematics', '36', '100', '6', '16', '20', 'D', '1.00'),
(21, 'S102', 'Science', '42', '100', '6', '20', '22', 'B', '2.00'),
(22, 'S102', 'Agricultural', '44', '100', '6', '12', '32', 'B', '2.00'),
(23, 'S103', 'Bangla-1st', '30', '100', '6', '0', '', '', ''),
(24, 'S103', 'Bangla-2nd', '39', '100', '6', '0', '', '', ''),
(25, 'S103', 'English-1st', '40', '100', '6', '0', '', '', ''),
(26, 'S103', 'English-2nd', '45', '100', '6', '0', '', '', ''),
(27, 'S103', 'Mathematics', '55', '100', '6', '0', '', '', ''),
(28, 'S103', 'Science', '64', '100', '6', '0', '', '', ''),
(29, 'S103', 'Mathematics', '77', '100', '6', '0', '', '', ''),
(30, 'S103', 'Science', '48', '100', '6', '0', '', '', ''),
(31, 'S103', 'S. Science', '70', '100', '6', '0', '', '', ''),
(32, 'S103', 'Relajing', '98', '100', '6', '0', '', '', ''),
(33, 'S104', 'Bangla-1st', '75', '100', '6', '0', '', '', ''),
(34, 'S104', 'Bangla-2nd', '45', '100', '6', '0', '', '', ''),
(35, 'S104', 'Bangla-2nd', '42', '100', '6', '0', '', '', ''),
(36, 'S104', 'Relajing', '45', '100', '6', '0', '', '', ''),
(37, 'S104', 'Relajing', '77', '100', '6', '0', '', '', ''),
(38, 'S104', 'S. Science', '88', '100', '6', '0', '', '', ''),
(39, 'S105', 'Bangla-1st', '66', '100', '6', '0', '', '', ''),
(40, 's107', 'Bangla-1st', '55', '100', '6', '0', '', '', ''),
(41, 's107', 'Science', '77', '100', '6', '0', '', '', ''),
(42, 's107', 'English-2nd', '80', '100', '6', '0', '', '', ''),
(43, 's107', 'Mathematics', '70', '100', '6', '0', '', '', ''),
(44, 's140', 'Bangla-1st', '56', '1st', '2', '0', '', '', ''),
(45, 'S101', 'Bangla-1st', '12', '1st', '6', '0', '', '', ''),
(46, '', 'S. Science', '', '500', '7', '0', '', '', ''),
(47, '', 'S. Science', '', '500', '', '0', '', '', ''),
(48, '', 'S. Science', '', '500', '', '0', '', '', ''),
(49, '', 'S. Science', '', '500', '', '0', '', '', ''),
(50, '', 'S. Science', '', '500', '', '0', '', '', ''),
(51, '', 'S. Science', '', '500', '', '0', '', '', ''),
(52, '', 'Agricultural', '4', '100', '', '0', '', '', ''),
(53, '', 'Mathematics', '12', '100', '', '0', '', '', ''),
(54, '', 'Mathematics', '12', '100', '', '0', '', '', ''),
(55, '', 'Mathematics', '12', '100', '', '0', '', '', ''),
(56, '', 'Relajing', '12', '500', '', '0', '', '', ''),
(57, '', 'Relajing', '12', '500', '3', '0', '', '', ''),
(58, '', 'Relajing', '12', '500', '3', '0', '', '', ''),
(59, '', 'Relajing', '12', '500', '3', '0', '', '', ''),
(60, '', 'Relajing', '12', '500', '', '0', '', '', ''),
(61, '', 'Relajing', '12', '500', '', '0', '', '', ''),
(62, '', 'Relajing', '12', '500', '', '0', '', '', ''),
(63, '', 'Relajing', '12', '500', '', '0', '', '', ''),
(64, '', 'Bangla-1st', '55', '500', '', '0', '', '', ''),
(65, '', 'Bangla-1st', '55', '500', '', '0', '', '', ''),
(66, '', 'Bangla-1st', '55', '500', '', '0', '', '', ''),
(67, '', 'Bangla-2nd', '', '100', '', '0', '', '', ''),
(68, '', 'Bangla-2nd', '', '100', '', '0', '', '', ''),
(69, '', 'Bangla-2nd', '', '100', '', '0', '', '', ''),
(70, '', 'Bangla-2nd', '', '100', '', '0', '', '', ''),
(71, '', 'Relajing', '', '1st', '', '0', '', '', ''),
(72, '', 'Relajing', '', '1st', '', '0', '', '', ''),
(73, '', 'Relajing', '', '1st', '', '0', '', '', ''),
(74, '', 'Relajing', '', '1st', '', '0', '', '', ''),
(75, '', 'Relajing', '', '1st', '', '0', '', '', ''),
(76, '', 'Bangla-1st', '', '1st', '', '0', '', '', ''),
(77, '', 'Bangla-1st', '', '1st', '', '0', '', '', ''),
(78, '', 'Bangla-1st', '', '1st', '', '0', '', '', ''),
(79, '', 'S. Science', '', '1st', '', '0', '', '', ''),
(80, '', 'Agricultural', '', '500', '', '0', '', '', ''),
(81, 's144', 'Bangla-1st', '55', '500', '3', '0', '', '', ''),
(82, '', 'Mathematics', '', '500', '', '0', '', '', ''),
(83, '', 'Agricultural', '', '500', '', '0', '', '', ''),
(84, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(85, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(86, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(87, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(88, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(89, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(90, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(91, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(92, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(93, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(94, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(95, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(96, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(97, '', 'Agricultural', '', '1st', '', '0', '', '', ''),
(98, '', 'Bangla-1st', '', '100', '', '0', '', '', ''),
(99, '', 'Bangla-1st', '', '1st', '', '0', '', '', ''),
(100, '', 'Bangla-1st', '', '1st', '', '0', '', '', ''),
(101, '', 'Bangla-1st', '', '1st', '', '0', '', '', ''),
(102, '', 'English-1st', '', '100', '', '0', '', '', ''),
(103, '', 'Bangla-1st', '', '1st', '', '0', '', '', ''),
(104, 's102', 'S. Science', '66', '500', '6', '0', '', '', ''),
(105, '', 'Relajing', '', '1st', '', '0', '', '', ''),
(106, 'S101', 'Relajing', '55', '100', '6', '0', '', '', ''),
(107, '', 'Bangla-1st', '', '1st', '', '0', '', '', ''),
(108, '', 'Bangla-2nd', '', '100', '', '0', '', '', ''),
(109, '', 'Bangla-1st', '', '1st', '', '0', '', '', ''),
(110, '', 'Relajing', '', '100', '', '0', '', '', ''),
(111, '', 'English-1st', '', '100', '', '0', '', '', ''),
(112, '', 'Relajing', '', '1st', '', '0', '', '', ''),
(113, '', 'Bangla-1st', '', '1st', '', '0', '', '', ''),
(114, '', 'Bangla-1st', '', '1st', '', '0', '', '', ''),
(115, 'S101', 'Bangla-1st', '70', '100', '6', '0', '', '', ''),
(116, 'S101', 'English-1st', '90', '100', '6', '0', '', '', ''),
(117, 'S101', 'Agricultural', '84', '100', '6', '0', '', '', ''),
(118, 's101', 'Bangla-1st', '90', '1st', '7', '0', '', '', ''),
(119, '', '', '', '', '', '20', '65', 'A', '4.00'),
(120, '', '', '', '', '', '20', '60', 'A', '4.00'),
(121, '', '', '', '', '', '20', '65', 'A', '4.00'),
(122, '', '', '', '', '', '20', '60', 'A', '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `TID` int(11) NOT NULL,
  `TNAME` varchar(150) NOT NULL,
  `TPASS` varchar(150) NOT NULL,
  `QUAL` varchar(200) NOT NULL,
  `SAL` varchar(13) NOT NULL,
  `DATE` varchar(13) NOT NULL,
  `PNO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `PADDR` text NOT NULL,
  `IMG` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`TID`, `TNAME`, `TPASS`, `QUAL`, `SAL`, `DATE`, `PNO`, `MAIL`, `PADDR`, `IMG`) VALUES
(14, 'nitu', '1234', 'S.S.C', '20,000', '2018-03-01', '01795815660', 'nitu@gmail.com', 'Bogora', 'staff/LOVE.png'),
(15, 'janat', '1234', 'J.S.C', '10,000', '2018-03-01', '01795815660', 'janat@gmail.com', 'Savar , Dhaka', 'staff/StreamData 1.png');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `RNO` varchar(150) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `FNAME` varchar(100) NOT NULL,
  `DOB` varchar(150) NOT NULL,
  `GEN` varchar(150) NOT NULL,
  `PHO` varchar(150) NOT NULL,
  `MAIL` varchar(150) NOT NULL,
  `ADDR` varchar(1000) NOT NULL,
  `SCLASS` varchar(150) NOT NULL,
  `SSEC` varchar(150) NOT NULL,
  `SIMG` varchar(150) NOT NULL,
  `TID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `RNO`, `NAME`, `FNAME`, `DOB`, `GEN`, `PHO`, `MAIL`, `ADDR`, `SCLASS`, `SSEC`, `SIMG`, `TID`) VALUES
(14, 'S101', 'Tonny', 'Shorker', '1998-12-18', 'Female', '01395815660', 'tonny@gmail.com', 'Manickgonj', '6', 'a', 'student/received_1510490769210309.jpeg', 10),
(15, 's102', 'virza', 'Tanvirr Hasan', '2017-11-11', 'Other', '01495815660', 'virza@gmail.com', 'Razation', '6', 'a', 'student/received_1510296185896434.jpeg', 10),
(16, 's103', 'zavir', 'Hasan Tanvir', '2016-02-22', 'Male', '01295815660', 'zavir@gmail.com', 'Savar', '6', 'a', 'student/2PicsArt_05-09-2016.jpg', 10),
(17, 's104', 'Onamica', 'Afroza', '2015-03-31', 'Female', '01195815660', 'onamica@gmail.com', 'Dhaka, Savar', '6', 'a', 'student/11178352_355784454632686_8129272941643332603_n.jpg', 10),
(18, 's105', 'Tonni Sharker', 'Sharker', '1999-12-12', 'Female', '01620592566', 'tonny@gmail.com', 'Manickgonj,Towne', '6', 'a', 'student/received_1510490769210309.jpeg', 10),
(19, 's106', 'Vir', 'Za', '2030-01-01', 'Other', '016655413165', 'vir-za@gmail.com', 'Bangladesh', '6', 'a', 'student/vir.png', 10),
(20, 's107', 'Nitu', 'Noyrin', '2012-05-12', 'Female', '01295815660', 'nitu@gmail.com', 'Bogura', '6', 'a', 'student/tf.jpeg', 10),
(21, 's108', 'Tanrfi', 'kjklfaj', '1112-02-12', 'Male', '01795815660', 'tanfi@gmail.com', 'Razation', '4', 'a', 'student/s (15).jpg', 11),
(22, 's109', 'Rohim', 'korim', '2013-12-12', 'Male', '01295815660', 'tonny@gmail.com', 'Bogura', '4', 'a', 'student/s (2).jpg', 11),
(23, 's110', 'jodo', 'modo', '2013-03-12', 'Male', '01295815660', 'tanfi@gmail.com', 'Manickgonj', '4', 'a', 'student/s (3).jpg', 11),
(24, 's111', 'Korim', 'Fatama', '2018-12-14', 'Male', '01295815660', 'virza@gmail.com', 'Razation', '4', 'a', 'student/s (11).jpg', 11),
(25, 's112', 'Babu', 'Babor Ali', '2014-05-05', 'Male', '01295815660', 'virza@gmail.com', 'Bogura', '4', 'a', 'student/s (14).jpg', 11),
(26, 's113', 'Ratul', 'Halan', '62214-12-12', 'Male', '01795815660', 'virza@gmail.com', 'Bogura', '4', 'a', 'student/s (13).jpg', 11),
(27, 's114', 'Ali Akbor', 'Jolil', '12145-05-05', 'Male', '01795815660', 'tonny@gmail.com', 'Razation', '4', 'a', 'student/s (12).jpg', 11),
(28, 's115', 'Tonny', 'Kholil', '2001-11-01', 'Female', '016205925006', 'onamica@gmail.com', 'Savar', '9', 'Science', 'student/received_1886095828316466.jpe', 12),
(29, 's116', 'Charo', 'Shorker', '2000-12-19', 'Female', '01295815660', 'tonny@gmail.com', 'Mirpur Dhaka', '9', 'Science', 'student/IMG_20170721_193325.jpg', 12),
(30, 's117', 'prpty', 'Lakot', '1975-08-11', 'Female', '01395815660', 'prapty@gmail.com', 'Mirpur-12', '9', 'Science', 'student/Prapyte-120-150.jpg', 12),
(31, 's118', 'Joya', 'Monir Khalo', '2001-09-09', 'Female', '01795815660', 'joya@gmail.com', 'Mirpur Dhaka - 1200', '9', 'Science', 'student/received_1512504875675565.jpeg', 12),
(32, 's119', 'Shrker', 'tonni sharker', '2000-05-20', 'Female', '01795815660', 'virza@gmail.com', 'Manickgonj', '7', 'a', 'student/Nilanjona Sarker 4.jpg', 13),
(33, 's120', 'Jado', 'RA Rqa', '5555-05-05', 'Other', '01395815660', 'tonny@gmail.com', 'Mirpur Dhaka', '7', 'a', 'student/received_1540187312907321.jpeg', 13),
(34, 's121', 'janina ', 'kljfdknb m ', '4312-12-05', 'Male', '01295815660', 'virza@gmail.com', 'jhv ', '7', 'a', 'student/received_1510494082543311.jpeg', 13),
(35, 's122', 'fdh jm', 'gh j', '2019-01-23', 'Female', '01495815660', 'tanfi@gmail.com', 'Manickgonj,Towne', '7', 'a', 'student/received_1684976485095069.jpeg', 13),
(36, 's123', 'Dong', 'Shorker', '2014-11-16', 'Female', '01795815660', 'virza@gmail.com', 'Manickgonj', '8', 'a', 'student/s (4).jpg', 14),
(37, 's124', 'Do_friend', 'Fatama', '2018-11-15', 'Female', '01795815660', 'tanfi@gmail.com', 'Mirpur Dhaka', '8', 'a', 'student/s (5).jpg', 14),
(38, 's125', 'Chosma', 'Hosan Sikdar', '2008-07-21', 'Female', '01395815660', 'onamica@gmail.com', 'Mirpur Dhaka', '8', 'a', 'student/s (6).jpg', 14),
(39, 's126', 'Nazma', 'jolad', '2019-02-18', 'Female', '01795815660', 'virza@gmail.com', 'Mirpur Dhaka', '8', 'a', 'student/s (7).jpg', 14),
(40, 's127', 'Asma', 'Barak', '54533-02-08', 'Female', '01395815660', 'tonny@gmail.com', 'Gagipur', '8', 'a', 'student/s (8).jpg', 14),
(41, 's128', 'Prity', 'Akbor', '5123-05-05', 'Female', '01795815660', 'virza@gmail.com', 'Bogura', '8', 'a', 'student/s (9).jpg', 14),
(42, 's129', 'Sharmin', 'Somor', '1989-04-21', 'Female', '01495815660', 'tonny@gmail.com', 'Bogura', '8', 'a', 'student/s (10).jpg', 14),
(43, 's130', 'Afnan', 'Anis', '1980-05-05', 'Female', '016205925006', 'virza@gmail.com', 'jhv', '10', 'Science', 'student/workw_develop.png', 15),
(44, 's131', 'Thalian', 'Konok', '2019-01-24', 'Female', '01495815660', 'onamica@gmail.com', 'Razation', '10', 'Science', 'student/s (11).jpg', 15),
(45, 's132', 'Konok', 'Chapa', '2019-12-21', 'Male', '01795815660', 'tonny@gmail.com', 'Bogura', '10', 'Science', 'student/s (12).jpg', 15),
(46, 's133', 'Biged', 'Rashad', '2020-03-20', 'Male', '01795815660', 'virza@gmail.com', 'Bogura', '10', 'Science', 'student/s (14).jpg', 15),
(48, 's135', 'c2', 'b2', '2011-02-18', 'Male', '01295815660', 'virza@gmail.com', 'Razation', '1', 'a', 'student/s (6).jpg', 10),
(49, 's136', 'Raj', 'Miay', '2012-03-20', 'Female', '01795815660', 'tonny@gmail.com', 'lkhc', '1', 'a', 'student/LOVE.png', 10),
(50, 's137', 'Rashad', 'Hasan', '2018-11-18', 'Male', '01495815660', 'virza@gmail.com', 'Bogura', '1', 'a', 'student/workw_develop.png', 10),
(51, 's138', 'Biged ', 'Monir', '2020-03-21', 'Other', '016205925006', 'tanfi@gmail.com', 'Mirpur Dhaka', '1', 'a', 'student/StreamData 1.png', 10),
(52, 's139', 'Tanvir', 'shorker', '1552-12-16', 'Male', '01795815660', 'tonny@gmail.com', 'Bogura', '2', 'a', 'student/s (15).jpg', 11),
(53, 's140', 'Arafat', 'Jagir', '2012-03-19', 'Male', '01795815660', 'tonny@gmail.com', 'Razation', '2', 'a', 'student/s (3).jpg', 11),
(54, 's141', 'jafrol', 'monir', '2020-03-21', 'Male', '01295815660', 'tonny@gmail.com', 'Mirpur-12', '2', 'a', 'student/s.jpg', 11),
(55, 's142', 'Elma', 'Esrat', '2002-01-12', 'Female', '01922000076', 'samiunmoni@gmail.com', 'B-block Mirpur-11', '3', 'a', 'student/received_1684976485095069.jpeg', 12),
(56, 's143', 'Rafsan', 'Shari', '2003-03-18', 'Male', '01795815660', 'virza@gmail.com', 'Mirpur Dhaka', '3', 'a', 'student/IMG_20170903_163449 - Copy - Copy.jpg', 12),
(57, 's144', 'Rihan', 'Sharil Kalo', '2006-03-20', 'Male', '01295815660', 'tanfi@gmail.com', 'Razation', '3', 'a', 'student/IMG_20170903_163439 - Copy - Copy.jpg', 12),
(58, 's145', 'Arif ', 'Ronok', '2019-01-17', 'Male', '01295815660', 'virza@gmail.com', 'Razation', '3', 'a', 'student/received_1699348343657883.jpeg', 12),
(59, 's146', 'tanvir', 'Khalil', '2019-12-01', 'Male', '01636931775', 'virza805@gmail.com', 'savar76', '4', 'a', 'student/01.png', 10),
(60, 's147', 'Nitu', 'Hasan Khin', '2019-03-01', 'Female', '01618817778', 'nitu@gmail.com', 'Bogora', '8', 'a', 'student/Prapyte-120-150.jpg', 10),
(61, 's148', 'hasan', 'Hasan', '1996-06-05', 'Male', '01636931775', 'afroza@gmail.com', 'Bogora', '1', 'a', 'student/Prapyte-120-150.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `SID` int(11) NOT NULL,
  `SNAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`SID`, `SNAME`) VALUES
(9, ''),
(15, 'Bangla-1st'),
(16, 'Bangla-2nd'),
(17, 'English-1st'),
(18, 'English-2nd'),
(19, 'Mathematics'),
(20, 'Science'),
(21, 'S. Science'),
(22, 'Relajing'),
(23, 'Agricultural');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `hclass`
--
ALTER TABLE `hclass`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`TID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `EID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hclass`
--
ALTER TABLE `hclass`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
