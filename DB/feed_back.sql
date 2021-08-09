-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 06:29 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feed_back`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_pass`
--

CREATE TABLE `admin_pass` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_pass`
--

INSERT INTO `admin_pass` (`Username`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dept_pwd`
--

CREATE TABLE `dept_pwd` (
  `Dept` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dept_pwd`
--

INSERT INTO `dept_pwd` (`Dept`, `Password`) VALUES
('Computer', 'computer');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Regno` varchar(7) NOT NULL,
  `Date` date NOT NULL,
  `Term` varchar(4) NOT NULL,
  `Dept` varchar(20) NOT NULL,
  `Subcode` varchar(10) NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `Q5` int(11) NOT NULL,
  `Q6` int(11) NOT NULL,
  `Q7` int(11) NOT NULL,
  `Q8` int(11) NOT NULL,
  `Q9` int(11) NOT NULL,
  `Q10` int(11) NOT NULL,
  `Q11` int(11) NOT NULL,
  `Comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Regno`, `Date`, `Term`, `Dept`, `Subcode`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Comments`) VALUES
('A161401', '2018-08-10', 'III', 'computer', '4E3201', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'sachgdsocdhgcoewchweclnwelfwc'),
('A161401', '2018-08-10', 'III', 'computer', '4E3202', 2, 2, 3, 2, 5, 2, 1, 1, 1, 1, 1, 'fjgakcbaicbsakjcbakcdsvcisfhcsal'),
('A161401', '2018-08-10', 'III', 'computer', '4E3203', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'lwcbkewcbweoecwlcbwqkcxwecwkcw'),
('A161401', '2018-08-10', 'IV', 'computer', '4E4202', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'asdfads'),
('A161401', '2018-08-10', 'IV', 'computer', '4E5201', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'asdf'),
('A161401', '2018-08-10', 'I', '1year', 'E1101', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'hi this is just a trial!!'),
('A161401', '2018-08-10', 'I', '1year', 'E1102', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'asdfasdfasdf'),
('A161401', '2018-08-10', 'I', '1year', 'E1103', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'asdfasdfadsf'),
('A161403', '2018-08-10', 'IV', 'computer', '4E4202', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'asdf'),
('A161408', '2018-08-10', 'III', 'computer', '4E3201', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Hi this is just a trial of the survey!! it is working fine\r\n'),
('A161418', '2018-08-10', 'IV', 'computer', '4E4202', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'asdfadsfdasf'),
('A161418', '2018-08-10', 'IV', 'computer', '4E5201', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'asdfadsf'),
('A161419', '2021-08-09', 'III', 'computer', '4E3203', 5, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 'Very nice !!!!!!!!!'),
('A173434', '2018-08-10', 'III', 'computer', '4E3201', 3, 4, 3, 4, 4, 3, 1, 3, 1, 5, 4, 'Good Teaching\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `stud_mas`
--

CREATE TABLE `stud_mas` (
  `Regno` varchar(7) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Dept` int(11) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_mas`
--

INSERT INTO `stud_mas` (`Regno`, `Name`, `Dept`, `Year`) VALUES
('A161401', 'Abdul Nazeer', 4, 2016),
('A161402', 'Agalya', 4, 2016),
('A161403', 'Azhaar', 4, 2016),
('A161404', 'Chakra', 4, 2016),
('A161405', 'Unknown', 4, 2016),
('A161406', 'Gabriel', 4, 2016),
('A161407', 'Ganga', 4, 2016),
('A161408', 'Guna', 4, 2016),
('A161409', 'Harish', 4, 2016),
('A161418', 'Pradeep', 4, 2016),
('A161419', 'Rahulkumar Singh', 4, 2016),
('A161420', 'Raja', 4, 2016),
('A173434', 'Bala', 4, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `sub_mas`
--

CREATE TABLE `sub_mas` (
  `Dept` varchar(20) NOT NULL,
  `Term` varchar(4) NOT NULL,
  `Code` varchar(10) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Teacher` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_mas`
--

INSERT INTO `sub_mas` (`Dept`, `Term`, `Code`, `Course`, `Teacher`) VALUES
('computer', 'III', '4E3201', 'Basic of Electrical and Electronics', 'Unknown'),
('computer', 'III', '4E3202', 'Operating System', 'Srinivasan'),
('computer', 'III', '4E3203', 'Programming With Cpp', 'Ravindren'),
('computer', 'IV', '4E4202', 'Data Structure', 'Srinivasan'),
('computer', 'IV', '4E5201', 'Java', 'Ravindren'),
('1year', 'I', 'E1101', 'Communication English-I', 'Dildhar'),
('1year', 'I', 'E1102', 'Engg Mathematics-I', 'Daniel'),
('1year', 'I', 'E1103', 'Engg Physics-I', 'Unknown');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_pass`
--
ALTER TABLE `admin_pass`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `dept_pwd`
--
ALTER TABLE `dept_pwd`
  ADD PRIMARY KEY (`Dept`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Regno`,`Subcode`);

--
-- Indexes for table `stud_mas`
--
ALTER TABLE `stud_mas`
  ADD PRIMARY KEY (`Regno`);

--
-- Indexes for table `sub_mas`
--
ALTER TABLE `sub_mas`
  ADD PRIMARY KEY (`Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
