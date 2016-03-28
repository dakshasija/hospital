-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2016 at 09:04 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `friday`
--

CREATE TABLE IF NOT EXISTS `friday` (
  `did` int(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `tseats` int(11) NOT NULL,
  `aseats` int(11) NOT NULL,
  `type1` varchar(100) NOT NULL,
  `intime` time NOT NULL,
  `outtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

CREATE TABLE IF NOT EXISTS `monday` (
  `did` int(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `tseats` int(11) NOT NULL,
  `aseats` int(11) NOT NULL,
  `type1` varchar(100) NOT NULL,
  `intime` time NOT NULL,
  `outtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monday`
--

INSERT INTO `monday` (`did`, `dname`, `tseats`, `aseats`, `type1`, `intime`, `outtime`) VALUES
(123, 'amit', 15, 15, 'ortnfasf', '14:04:00', '11:58:00'),
(123, 'amit', 15, 15, 'ortnfasf', '14:04:00', '11:58:00'),
(123, 'amit', 15, 15, 'ortnfasf', '14:04:00', '11:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(300) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `age`, `gender`, `address`, `id`) VALUES
('6261651', 12, '12', 'male', 0),
('6261651', 0, '12', 'male', 0),
('123', 0, '21', 'male', 0),
('amit', 21, 'male', 'daskdnskad', 123),
('amit', 21, 'male', 'daskdnskad', 123),
('', 0, '', '', 0),
('', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `saturday`
--

CREATE TABLE IF NOT EXISTS `saturday` (
  `did` int(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `tseats` int(11) NOT NULL,
  `aseats` int(11) NOT NULL,
  `type1` varchar(100) NOT NULL,
  `intime` time NOT NULL,
  `outtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saturday`
--

INSERT INTO `saturday` (`did`, `dname`, `tseats`, `aseats`, `type1`, `intime`, `outtime`) VALUES
(123, 'dsadsad', 15, 15, 'sadasd', '14:04:00', '11:58:00'),
(149, 'nitesh', 20, 20, 'opthalmologist', '09:00:00', '08:23:00'),
(149, 'nitesh', 20, 20, 'opthalmologist', '09:00:00', '08:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `sunday`
--

CREATE TABLE IF NOT EXISTS `sunday` (
  `did` int(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `tseats` int(11) NOT NULL,
  `aseats` int(11) NOT NULL,
  `type1` varchar(100) NOT NULL,
  `intime` time NOT NULL,
  `outtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sunday`
--

INSERT INTO `sunday` (`did`, `dname`, `tseats`, `aseats`, `type1`, `intime`, `outtime`) VALUES
(123, 'amit', 15, 15, 'ortnfasf', '14:04:00', '11:58:00'),
(123, 'amit', 15, 15, 'ortnfasf', '14:04:00', '11:58:00'),
(123, 'amit', 15, 15, 'ortnfasf', '14:04:00', '11:58:00'),
(0, '', 0, 0, '', '00:00:00', '00:00:00'),
(0, '', 0, 0, '', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE IF NOT EXISTS `symptoms` (
  `sym` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`sym`) VALUES
('heart problem'),
('blood vessels problem'),
('illness'),
('injuries'),
('headache'),
('stomach pain'),
('diabetes'),
('hormone imbalance'),
('thyroid disease'),
('endocrine disorder'),
('digestion problem'),
('blood problem'),
('bone marrow problem'),
('liver problem'),
('genetic disease'),
('cancer'),
('tumor'),
('radiation effect'),
('kidney problem'),
('brain problem'),
('spine problem'),
('nerves'),
('muscles problem'),
('nervous system problem'),
('female reproductive part problem'),
('pregnancy'),
('foot and ankle problem'),
('lungs problem'),
('joints problem'),
('sleep disorder'),
('female urological problem'),
('eye problem'),
('ear problem'),
('nose problem');

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

CREATE TABLE IF NOT EXISTS `thursday` (
  `did` int(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `tseats` int(11) NOT NULL,
  `aseats` int(11) NOT NULL,
  `type1` varchar(100) NOT NULL,
  `intime` time NOT NULL,
  `outtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thursday`
--

INSERT INTO `thursday` (`did`, `dname`, `tseats`, `aseats`, `type1`, `intime`, `outtime`) VALUES
(123, 'dsadsad', 15, 15, 'sadasd', '14:04:00', '11:58:00'),
(0, '', 0, 0, '', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

CREATE TABLE IF NOT EXISTS `tuesday` (
  `did` int(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `tseats` int(11) NOT NULL,
  `aseats` int(11) NOT NULL,
  `type1` varchar(100) NOT NULL,
  `intime` time NOT NULL,
  `outtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuesday`
--

INSERT INTO `tuesday` (`did`, `dname`, `tseats`, `aseats`, `type1`, `intime`, `outtime`) VALUES
(123, 'dsadsad', 15, 15, 'sadasd', '14:04:00', '11:58:00'),
(0, '', 0, 0, '', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

CREATE TABLE IF NOT EXISTS `wednesday` (
  `did` int(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `tseats` int(11) NOT NULL,
  `aseats` int(11) NOT NULL,
  `type1` varchar(100) NOT NULL,
  `intime` time NOT NULL,
  `outtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wednesday`
--

INSERT INTO `wednesday` (`did`, `dname`, `tseats`, `aseats`, `type1`, `intime`, `outtime`) VALUES
(123, 'amit', 15, 15, 'ortnfasf', '14:04:00', '11:58:00'),
(123, 'amit', 15, 15, 'ortnfasf', '14:04:00', '11:58:00'),
(123, 'amit', 15, 15, 'ortnfasf', '14:04:00', '11:58:00'),
(23, 'daksh', 15, 15, 'cardiologist', '05:00:00', '11:00:00'),
(23, 'daksh', 15, 15, 'cardiologist', '05:00:00', '11:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
