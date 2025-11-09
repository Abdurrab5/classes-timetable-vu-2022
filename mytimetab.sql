-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 07:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytimetab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `coordinator_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`coordinator_id`, `username`, `email`, `password`) VALUES
(1, 'coordinator', 'manager@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `credit` varchar(50) NOT NULL,
  `course_type` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `multimedia` varchar(50) NOT NULL,
  `isAlloted` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_code`, `credit`, `course_type`, `semester`, `department`, `multimedia`, `isAlloted`, `faculty_id`) VALUES
(2, 'Introduction to Computing', 'CS101', '3', 'Theory', 'semester1', 'BSCS', 'Yes', '1', '1'),
(3, 'English Comprehension', 'ENG101', '3', 'Theory', 'semester1', 'BSCS', 'Yes', '1', '1'),
(4, 'Calculus And Analytical Geometry', 'MTH101', '3', 'Theory', 'semester1', 'BSCS', 'Yes', '1', '10'),
(5, 'Physics', 'PHY101', '3', 'Theory', 'semester1', 'BSCS', 'Yes', '1', '10'),
(6, 'Pakistan Studies	', 'PAK301', '3', 'Theory', 'semester1', 'BSCS', 'Yes', '1', '2'),
(7, 'Introduction to Programming	', 'CS201', '3', 'Theory', 'semester2', 'BSCS', 'No', '1', '2'),
(8, 'Digital Logic Design', 'CS302', '3', 'Theory', 'semester2', 'BSCS', 'No', '1', '5'),
(9, 'Business and Technical English Writing', 'ENG201', '3', 'Theory', 'semester2', 'BSCS', 'No', '1', '3'),
(10, 'Calculus II', 'MTH301', '3', 'Theory', 'semester2', 'BSCS', 'No', '1', '3'),
(11, 'Introduction to Programming (Practical)', 'CS201P', '3', 'Lab', 'semester2', 'BSCS', 'No', '1', '4'),
(12, 'Digital Logic Design (Practical)', 'CS302P', '3', 'Lab', 'semester2', 'BSCS', 'No', '1', '5'),
(13, 'Object Oriented Programming', 'CS304', '3', 'Theory', 'semester3', 'BSCS', 'Yes', '1', '4'),
(14, 'Database Management Systems', 'CS403', '3', 'Theory', 'semester3', 'BSCS', 'Yes', '1', '5'),
(15, 'Data Communication', 'CS601', '3', 'Theory', 'semester3', 'BSCS', 'Yes', '1', '17'),
(16, 'Discrete Mathematics', 'MTH202', '3', 'Theory', 'semester3', 'BSCS', 'Yes', '1', '6'),
(17, 'Object Oriented Programming (Practical)', 'CS304P', '3', 'Lab', 'semester3', 'BSCS', 'Yes', '1', '11'),
(18, 'Database Management Systems (Practical)', 'CS403P', '3', 'Lab', 'semester3', 'BSCS', 'Yes', '1', '11'),
(19, 'Data Structures', 'CS301', '3', 'Theory', 'semester4', 'BSCS', 'Yes', '1', '6'),
(20, 'Computer Architecture and Assembly Language Program', 'CS401', '3', 'Theory', 'semester4', 'BSCS', 'Yes', '1', '7'),
(21, 'Software Engineering - I', 'CS504', '3', 'Theory', 'semester4', 'BSCS', 'Yes', '1', '13'),
(22, 'Computer Networks', 'CS610', '3', 'Theory', 'semester4', 'BSCS', 'Yes', '1', '7'),
(23, 'Data Structures (Practical)', 'CS301P', '3', 'Lab', 'semester4', 'BSCS', 'Yes', '1', '8'),
(24, 'Computer Architecture and Assembly Language(Practical)', 'CS401P', '3', 'Lab', 'semester4', 'BSCS', 'Yes', '1', '13'),
(25, 'Information Security', 'CS205	', '3', 'Theory', 'semester5', 'BSCS', 'Yes', '1', '8'),
(26, 'Theory of Automata', 'CS402', '3', 'Theory', 'semester5', 'BSCS', 'Yes', '1', '9'),
(27, 'Fundamentals of Algorithms', 'CS502', '3', 'Theory', 'semester5', 'BSCS', 'Yes', '1', '9'),
(28, 'Communication skills', 'MCM301', '3', 'Theory', 'semester5', 'BSCS', 'Yes', '1', '14'),
(29, 'Differential Equations', 'MTH401', '3', 'Theory', 'semester5', 'BSCS', 'Yes', '1', '12'),
(30, 'Statistics and Probability', 'STA301', '3', 'Theory', 'semester5', 'BSCS', 'Yes', '1', '12'),
(31, 'Operating Systems', 'CS604', '3', 'Theory', 'semester6', 'BSCS', 'Yes', '1', '14'),
(32, 'Compiler Construction', 'CS606', '3', 'Theory', 'semester6', 'BSCS', 'Yes', '1', '15'),
(33, 'Linear Algebra', 'MTH501', '3', 'Theory', 'semester6', 'BSCS', 'Yes', '1', '15'),
(34, 'Fundamentals of Front End Development', 'CS202', '3', 'Theory', 'semester6', 'BSCS', 'Yes', '1', '16'),
(35, 'Routing and Switching', 'CS407', '3', 'Theory', 'semester6', 'BSCS', 'Yes', '1', '16'),
(36, 'Parallel and Distributed Computing', 'CS621', '3', 'Theory', 'semester7', 'BSCS', 'Yes', '1', '17'),
(37, 'Numerical Analysis', 'MTH603	', '3', 'Theory', 'semester7', 'BSCS', 'Yes', '1', '18'),
(38, 'Advance Computer Architecture', 'CS501', '3', 'Theory', 'semester7', 'BSCS', 'Yes', '1', '18'),
(39, 'Web Design and Development', 'CS506', '3', 'Theory', 'semester7', 'BSCS', 'Yes', '1', '19'),
(40, 'System Programming', 'CS609', '3', 'Theory', 'semester7', 'BSCS', 'Yes', '1', '19'),
(41, 'Artificial Intelligence', 'CS607	', '3', 'Theory', 'semester8', 'BSCS', 'Yes', '1', '20'),
(42, 'Data Warehousing', 'CS614', '3', 'Theory', 'semester8', 'BSCS', 'Yes', '1', '20'),
(43, 'Professional Practices', 'CS625', '3', 'Theory', 'semester8', 'BSCS', 'Yes', '1', '21'),
(44, 'Artificial Intelligence (Practical)', 'CS607P', '3', 'Lab', 'semester8', 'BSCS', 'Yes', '1', '21');

-- --------------------------------------------------------

--
-- Table structure for table `daypreference`
--

CREATE TABLE `daypreference` (
  `dp_id` int(11) NOT NULL,
  `fac_id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `period1` varchar(50) NOT NULL,
  `period2` varchar(50) NOT NULL,
  `period3` varchar(50) NOT NULL,
  `period4` varchar(50) NOT NULL,
  `period5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daypreference`
--

INSERT INTO `daypreference` (`dp_id`, `fac_id`, `day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
(1, 1, 'monday', '0900-0800', '0930-1100', '', '', ''),
(2, 1, ' tuesday', '0900-0800', '0930-1100', '1100-1230', '1230-1400', '1400-1530'),
(3, 2, 'wednesday', '0900-0800', '', '', '', ''),
(4, 2, 'friday', '', '', '', '', '1400-1530'),
(5, 3, ' tuesday', '', '', '1100-1230', '', ''),
(6, 3, 'monday', '', '', '', '', '1400-1530');

-- --------------------------------------------------------

--
-- Table structure for table `fac`
--

CREATE TABLE `fac` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fac`
--

INSERT INTO `fac` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', '-', '-', '-', '-'),
('monday', 'CS101', '-', '-', '-', '-'),
('thursday', '-', '-', '-', '-', '-'),
('tuesday', 'ENG101', 'CS101', '-', '-', '-'),
('wednesday', '-', 'ENG101', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fac1`
--

CREATE TABLE `fac1` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fac1`
--

INSERT INTO `fac1` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'PAK301', '-', '-', '-', '-'),
('monday', 'CS201', 'PAK301', '-', '-', '-'),
('thursday', '-', '-', '-', '-', '-'),
('tuesday', '-', 'CS201', '-', '-', '-'),
('wednesday', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `username`, `alias`, `password`, `email`, `designation`) VALUES
(1, 'faculty ', 'fac', '1234', 'facultyw@gmail.com', ' Professor'),
(2, 'faculty1 ', 'fac1', '1234', 'manager1@gmail.com', 'Assistance Professor'),
(3, 'faculty2 ', 'fc2', '1234', 'f22@gmail.com', 'Asociate Professor'),
(4, 'faculty3 ', 'fc3', '1234', 'fc3@gmail.com', 'Lecturar'),
(5, 'faculty4 ', 'fc4', '1234', 'fc4@gmail.com', ' Professor'),
(6, 'faculty5 ', 'fc5', '1234', 'fc5@gmail.com', 'Assistance Professor'),
(7, 'faculty6 ', 'fc6', '1234', 'fc6@gmail.com', 'Assistance Professor'),
(8, 'faculty7 ', 'fc7', '1234', 'fc7@gmail.com', 'Asociate Professor'),
(9, 'faculty8 ', 'fc8', '1234', 'fc8@gmail.com', 'Lecturar'),
(10, 'faculty9 ', 'fc9', '1234', 'fc9@gmail.com', ' Professor'),
(11, 'faculty10 ', 'fc10', '1234', 'fc10@gmail.com', 'Assistance Professor'),
(12, 'faculty11 ', 'fc11', '1234', 'fc11@gmail.com', 'Lecturar'),
(13, 'faculty12 ', 'fc12', '1234', 'fc12@gmail.com', 'Lecturar'),
(14, 'faculty13 ', 'fc13', '1234', 'fc13@gmail.com', 'Asociate Professor'),
(15, 'faculty14 ', 'fc14', '1234', 'fc14@gmail.com', 'Assistance Professor'),
(16, 'faculty16 ', 'fc16', '1234', 'fc16@gmail.com', 'Assistance Professor'),
(17, 'faculty17 ', 'fc17', '1234', 'fc17@gmail.com', ' Professor'),
(18, 'faculty18 ', 'fc18', '1234', 'fc18@gmail.com', 'Asociate Professor'),
(19, 'faculty19 ', 'fc19', '1234', 'fc19@gmail.com', 'Lecturar'),
(20, 'faculty20 ', 'fc20', '1234', 'fc20@gmail.com', 'Asociate Professor'),
(21, 'faculty21 ', 'fc21', '1234', 'fc21@gmail.com', ' Professor');

-- --------------------------------------------------------

--
-- Table structure for table `fc2`
--

CREATE TABLE `fc2` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc2`
--

INSERT INTO `fc2` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'MTH301', '-', '-', '-', '-'),
('monday', '-', '-', '-', '-', '-'),
('thursday', 'MTH301', 'ENG201', '-', '-', '-'),
('tuesday', '-', '-', '-', '-', '-'),
('wednesday', 'ENG201', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc3`
--

CREATE TABLE `fc3` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc3`
--

INSERT INTO `fc3` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'CS304', '-', '-', '-', '-'),
('monday', '-', 'CS304', '-', '-', 'CS201P'),
('thursday', '-', '-', '-', '-', '-'),
('tuesday', '-', '-', '-', '-', '-'),
('wednesday', '-', '-', '-', '-', 'CS201P');

-- --------------------------------------------------------

--
-- Table structure for table `fc4`
--

CREATE TABLE `fc4` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc4`
--

INSERT INTO `fc4` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', '-', '-', '-', '-'),
('monday', 'CS403', '-', '-', '-', '-'),
('thursday', '-', '-', '-', '-', 'CS302P'),
('tuesday', 'CS302', 'CS403', '-', '-', 'CS302P'),
('wednesday', '-', 'CS302', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc5`
--

CREATE TABLE `fc5` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc5`
--

INSERT INTO `fc5` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', 'CS301', '-', '-', '-'),
('monday', '-', '-', '-', '-', '-'),
('thursday', 'CS301', 'MTH202', '-', '-', '-'),
('tuesday', '-', '-', '-', '-', '-'),
('wednesday', 'MTH202', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc6`
--

CREATE TABLE `fc6` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc6`
--

INSERT INTO `fc6` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'CS401', '-', '-', '-', '-'),
('monday', '-', 'CS401', '-', '-', '-'),
('thursday', '-', '-', '-', '-', '-'),
('tuesday', 'CS610', '-', '-', '-', '-'),
('wednesday', 'CS610', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc7`
--

CREATE TABLE `fc7` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc7`
--

INSERT INTO `fc7` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', '-', '-', '-', '-'),
('monday', '-', '-', '-', '-', 'CS301P'),
('thursday', '-', 'CS205	', '-', '-', '-'),
('tuesday', '-', '-', '-', '-', '-'),
('wednesday', 'CS205	', '-', '-', '-', 'CS301P');

-- --------------------------------------------------------

--
-- Table structure for table `fc8`
--

CREATE TABLE `fc8` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc8`
--

INSERT INTO `fc8` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'CS502', 'CS402', '-', '-', '-'),
('monday', '-', 'CS502', '-', '-', '-'),
('thursday', 'CS402', '-', '-', '-', '-'),
('tuesday', '-', '-', '-', '-', '-'),
('wednesday', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc9`
--

CREATE TABLE `fc9` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc9`
--

INSERT INTO `fc9` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', 'PHY101', '-', '-', '-'),
('monday', '-', '-', '-', '-', '-'),
('thursday', 'PHY101', 'MTH101', '-', '-', '-'),
('tuesday', '-', '-', '-', '-', '-'),
('wednesday', 'MTH101', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc10`
--

CREATE TABLE `fc10` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc10`
--

INSERT INTO `fc10` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', '-', '-', '-', '-'),
('monday', '-', '-', '-', '-', '-'),
('thursday', '-', '-', '-', '-', '-'),
('tuesday', '-', '-', '-', '-', '-'),
('wednesday', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc11`
--

CREATE TABLE `fc11` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc11`
--

INSERT INTO `fc11` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', '-', '-', '-', '-'),
('monday', '-', '-', '-', '-', '-'),
('thursday', '-', '-', 'STA301', '-', '-'),
('tuesday', 'MTH401', '-', '-', '-', '-'),
('wednesday', '-', 'STA301', 'MTH401', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc12`
--

CREATE TABLE `fc12` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc12`
--

INSERT INTO `fc12` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', '-', '-', '-', '-'),
('monday', 'CS504', '-', '-', '-', '-'),
('thursday', '-', '-', '-', '-', 'CS401P'),
('tuesday', '-', 'CS504', '-', '-', 'CS401P'),
('wednesday', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc13`
--

CREATE TABLE `fc13` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc13`
--

INSERT INTO `fc13` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', 'CS604', '-', '-', '-'),
('monday', 'MCM301', '-', '-', '-', '-'),
('thursday', 'CS604', '-', '-', '-', '-'),
('tuesday', '-', 'MCM301', '-', '-', '-'),
('wednesday', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc14`
--

CREATE TABLE `fc14` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc14`
--

INSERT INTO `fc14` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'CS606', '-', '-', '-', '-'),
('monday', 'MTH501', 'CS606', '-', '-', '-'),
('thursday', '-', '-', '-', '-', '-'),
('tuesday', '-', 'MTH501', '-', '-', '-'),
('wednesday', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc16`
--

CREATE TABLE `fc16` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc16`
--

INSERT INTO `fc16` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', '-', '-', '-', '-'),
('monday', '-', '-', '-', '-', '-'),
('thursday', '-', 'CS407', '-', '-', '-'),
('tuesday', 'CS202', '-', '-', '-', '-'),
('wednesday', 'CS407', 'CS202', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc17`
--

CREATE TABLE `fc17` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc17`
--

INSERT INTO `fc17` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', 'CS621', '-', '-', '-'),
('monday', '-', '-', '-', '-', '-'),
('thursday', 'CS621', '-', '-', '-', '-'),
('tuesday', 'CS601', '-', '-', '-', '-'),
('wednesday', '-', 'CS601', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc18`
--

CREATE TABLE `fc18` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc18`
--

INSERT INTO `fc18` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'MTH603	', '-', '-', '-', '-'),
('monday', 'CS501', 'MTH603	', '-', '-', '-'),
('thursday', '-', '-', '-', '-', '-'),
('tuesday', '-', 'CS501', '-', '-', '-'),
('wednesday', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc19`
--

CREATE TABLE `fc19` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc19`
--

INSERT INTO `fc19` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', '-', '-', '-', '-'),
('monday', '-', '-', '-', '-', '-'),
('thursday', '-', 'CS609', '-', '-', '-'),
('tuesday', 'CS506', '-', '-', '-', '-'),
('wednesday', 'CS609', 'CS506', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc20`
--

CREATE TABLE `fc20` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc20`
--

INSERT INTO `fc20` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'CS614', 'CS607	', '-', '-', '-'),
('monday', '-', 'CS614', '-', '-', '-'),
('thursday', 'CS607	', '-', '-', '-', '-'),
('tuesday', '-', '-', '-', '-', '-'),
('wednesday', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `fc21`
--

CREATE TABLE `fc21` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fc21`
--

INSERT INTO `fc21` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', '-', '-', '-', '-', '-'),
('monday', 'CS625', '-', '-', '-', 'CS607P'),
('thursday', '-', '-', '-', '-', '-'),
('tuesday', 'CS625', '-', '-', '-', 'CS607P'),
('wednesday', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `lab_id` int(11) NOT NULL,
  `lab_name` varchar(50) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `multimedia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`lab_id`, `lab_name`, `capacity`, `multimedia`) VALUES
(1, 'lab1', '10', 'Yes'),
(2, 'lab-02', '10', 'No'),
(3, 'lab-03', '10', 'Yes'),
(4, 'lab-04', '10', 'Yes'),
(5, 'lab-05', '10', 'Yes'),
(6, 'lab-06', '10', 'Yes'),
(7, 'lab-07', '10', 'Yes'),
(9, 'lab-08', '10', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `preferences_id` int(11) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`preferences_id`, `faculty`, `subject`, `date`) VALUES
(7, '1', 'Introduction to Computing', '2023-01-01 00:00:00'),
(8, '1', 'English Comprehension', '2023-01-01 00:00:00'),
(9, '1', 'Calculus And Analytical Geometry', '2023-01-01 00:00:00'),
(10, '1', 'Physics', '2023-01-01 00:00:00'),
(11, '2', 'Pakistan Studies	', '2023-01-01 00:00:00'),
(12, '2', 'Introduction to Programming	', '2023-01-01 00:00:00'),
(13, '2', 'Digital Logic Design', '2023-01-01 00:00:00'),
(14, '2', 'Introduction to Computing', '2023-01-01 00:00:00'),
(15, '3', 'Business and Technical English Writing', '2023-01-01 00:00:00'),
(16, '3', 'Calculus II', '2023-01-01 00:00:00'),
(17, '3', 'English Comprehension', '2023-01-01 00:00:00'),
(18, '3', 'Calculus And Analytical Geometry', '2023-01-01 00:00:00'),
(19, '4', 'Introduction to Programming (Practical)', '2023-01-01 00:00:00'),
(20, '4', 'Introduction to Programming	', '2023-01-01 00:00:00'),
(21, '4', 'Object Oriented Programming', '2023-01-01 00:00:00'),
(22, '5', 'Digital Logic Design', '2023-01-01 00:00:00'),
(23, '5', 'Digital Logic Design (Practical)', '2023-01-01 00:00:00'),
(24, '5', 'Database Management Systems', '2023-01-01 00:00:00'),
(25, '5', 'Data Communication', '2023-01-01 00:00:00'),
(26, '6', 'Discrete Mathematics', '2023-01-01 00:00:00'),
(27, '6', 'Data Structures', '2023-01-01 00:00:00'),
(28, '6', 'Object Oriented Programming (Practical)', '2023-01-01 00:00:00'),
(29, '6', 'Database Management Systems (Practical)', '2023-01-01 00:00:00'),
(30, '7', 'Database Management Systems', '2023-01-01 00:00:00'),
(31, '7', 'Computer Architecture and Assembly Language Program', '2023-01-01 00:00:00'),
(32, '7', 'Computer Networks', '2023-01-01 00:00:00'),
(33, '8', 'Data Structures (Practical)', '2023-01-01 00:00:00'),
(34, '8', 'Information Security', '2023-01-01 00:00:00'),
(35, '9', 'Theory of Automata', '2023-01-01 00:00:00'),
(36, '9', 'Fundamentals of Algorithms', '2023-01-01 00:00:00'),
(37, '10', 'Calculus And Analytical Geometry', '2023-01-01 00:00:00'),
(38, '10', 'Physics', '2023-01-01 00:00:00'),
(39, '11', 'Object Oriented Programming (Practical)', '2023-01-01 00:00:00'),
(40, '11', 'Database Management Systems (Practical)', '2023-01-01 00:00:00'),
(41, '12', 'Physics', '2023-01-01 00:00:00'),
(42, '12', 'Differential Equations', '2023-01-01 00:00:00'),
(43, '12', 'Statistics and Probability', '2023-01-01 00:00:00'),
(44, '12', 'Introduction to Programming (Practical)', '2023-01-01 00:00:00'),
(45, '13', 'Software Engineering - I', '2023-01-01 00:00:00'),
(46, '13', 'Database Management Systems', '2023-01-01 00:00:00'),
(47, '13', 'Computer Architecture and Assembly Language(Practical)', '2023-01-01 00:00:00'),
(48, '14', 'Communication skills', '2023-01-01 00:00:00'),
(49, '14', 'Differential Equations', '2023-01-01 00:00:00'),
(50, '14', 'Operating Systems', '2023-01-01 00:00:00'),
(51, '14', 'Digital Logic Design', '2023-01-01 00:00:00'),
(52, '15', 'Compiler Construction', '2023-01-01 00:00:00'),
(53, '15', 'Linear Algebra', '2023-01-01 00:00:00'),
(54, '15', 'Computer Architecture and Assembly Language(Practical)', '2023-01-01 00:00:00'),
(55, '16', 'Fundamentals of Front End Development', '2023-01-01 00:00:00'),
(56, '16', 'Routing and Switching', '2023-01-01 00:00:00'),
(57, '17', 'Parallel and Distributed Computing', '2023-01-01 00:00:00'),
(58, '17', 'Data Communication', '2023-01-01 00:00:00'),
(59, '18', 'Numerical Analysis', '2023-01-01 00:00:00'),
(60, '18', 'Advance Computer Architecture', '2023-01-01 00:00:00'),
(61, '19', 'Advance Computer Architecture', '2023-01-01 00:00:00'),
(62, '19', 'Web Design and Development', '2023-01-01 00:00:00'),
(63, '19', 'System Programming', '2023-01-01 00:00:00'),
(64, '20', 'Artificial Intelligence', '2023-01-01 00:00:00'),
(65, '20', 'Data Warehousing', '2023-01-01 00:00:00'),
(66, '21', 'Professional Practices', '2023-01-01 00:00:00'),
(67, '21', 'Artificial Intelligence (Practical)', '2023-01-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `building` varchar(50) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `multimedia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `classroom`, `building`, `capacity`, `multimedia`) VALUES
(1, ' B1-F0-01', ' block1', '10', 'Yes'),
(2, ' B1-F0-02', ' block1', '10', 'No'),
(3, ' B1-F0-03', ' block1', '10', 'Yes'),
(4, ' B1-F0-04', ' block1', '10', 'Yes'),
(5, ' B1-F0-05', ' block1', '10', 'Yes'),
(6, ' B1-F0-06', ' block1', '10', 'Yes'),
(7, ' B1-F0-07', ' block1', '10', 'Yes'),
(8, ' B1-F0-08', ' block1', '10', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `semester1`
--

CREATE TABLE `semester1` (
  `day` varchar(50) NOT NULL,
  `period1` varchar(50) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester1`
--

INSERT INTO `semester1` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'PAK301-fac1', 'PHY101-fc9', '---', '---', '---'),
('monday', 'CS101-fac', 'PAK301-fac1', '---', '---', '---'),
('thursday', 'PHY101-fc9', 'MTH101-fc9', '---', '---', '---'),
('tuesday', 'ENG101-fac', 'CS101-fac', '---', '---', '---'),
('wednesday', 'MTH101-fc9', 'ENG101-fac', '---', '---', '---');

-- --------------------------------------------------------

--
-- Table structure for table `semester2`
--

CREATE TABLE `semester2` (
  `day` varchar(50) NOT NULL,
  `period1` varchar(100) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester2`
--

INSERT INTO `semester2` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'MTH301-fc2', '---', '---', '---', '---'),
('monday', 'CS201-fac1', '---', '---', '---', 'CS201P-fc3'),
('thursday', 'MTH301-fc2', 'ENG201-fc2', '---', '---', 'CS302P-fc4'),
('tuesday', 'CS302-fc4', 'CS201-fac1', '---', '---', 'CS302P-fc4'),
('wednesday', 'ENG201-fc2', 'CS302-fc4', '---', '---', 'CS201P-fc3');

-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE `semester3` (
  `day` varchar(50) NOT NULL,
  `period1` varchar(100) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester3`
--

INSERT INTO `semester3` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'CS304-fc3', '---', '---', '---', '---'),
('monday', 'CS403-fc4', 'CS304-fc3', '---', '---', '---'),
('thursday', '---', 'MTH202-fc5', '---', '---', '---'),
('tuesday', 'CS601-fc17', 'CS403-fc4', '---', '---', '---'),
('wednesday', 'MTH202-fc5', 'CS601-fc17', '---', '---', '---');

-- --------------------------------------------------------

--
-- Table structure for table `semester4`
--

CREATE TABLE `semester4` (
  `day` varchar(50) NOT NULL,
  `period1` varchar(100) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester4`
--

INSERT INTO `semester4` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'CS401-fc6', 'CS301-fc5', '---', '---', '---'),
('monday', 'CS504-fc12', 'CS401-fc6', '---', '---', 'CS301P-fc7'),
('thursday', 'CS301-fc5', '---', '---', '---', 'CS401P-fc12'),
('tuesday', 'CS610-fc6', 'CS504-fc12', '---', '---', 'CS401P-fc12'),
('wednesday', 'CS610-fc6', '---', '---', '---', 'CS301P-fc7');

-- --------------------------------------------------------

--
-- Table structure for table `semester5`
--

CREATE TABLE `semester5` (
  `day` varchar(50) NOT NULL,
  `period1` varchar(100) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester5`
--

INSERT INTO `semester5` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'CS502-fc8', 'CS402-fc8', '---', '---', '---'),
('monday', 'MCM301-fc13', 'CS502-fc8', '---', '---', '---'),
('thursday', 'CS402-fc8', 'CS205	-fc7', 'STA301-fc11', '---', '---'),
('tuesday', 'MTH401-fc11', 'MCM301-fc13', '---', '---', '---'),
('wednesday', 'CS205	-fc7', 'STA301-fc11', 'MTH401-fc11', '---', '---');

-- --------------------------------------------------------

--
-- Table structure for table `semester6`
--

CREATE TABLE `semester6` (
  `day` varchar(50) NOT NULL,
  `period1` varchar(100) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester6`
--

INSERT INTO `semester6` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'CS606-fc14', 'CS604-fc13', '---', '---', '---'),
('monday', 'MTH501-fc14', 'CS606-fc14', '---', '---', '---'),
('thursday', 'CS604-fc13', 'CS407-fc16', '---', '---', '---'),
('tuesday', 'CS202-fc16', 'MTH501-fc14', '---', '---', '---'),
('wednesday', 'CS407-fc16', 'CS202-fc16', '---', '---', '---');

-- --------------------------------------------------------

--
-- Table structure for table `semester7`
--

CREATE TABLE `semester7` (
  `day` varchar(50) NOT NULL,
  `period1` varchar(100) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester7`
--

INSERT INTO `semester7` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'MTH603	-fc18', 'CS621-fc17', '---', '---', '---'),
('monday', 'CS501-fc18', 'MTH603	-fc18', '---', '---', '---'),
('thursday', 'CS621-fc17', 'CS609-fc19', '---', '---', '---'),
('tuesday', 'CS506-fc19', 'CS501-fc18', '---', '---', '---'),
('wednesday', 'CS609-fc19', 'CS506-fc19', '---', '---', '---');

-- --------------------------------------------------------

--
-- Table structure for table `semester8`
--

CREATE TABLE `semester8` (
  `day` varchar(50) NOT NULL,
  `period1` varchar(100) NOT NULL,
  `period2` varchar(100) NOT NULL,
  `period3` varchar(100) NOT NULL,
  `period4` varchar(100) NOT NULL,
  `period5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester8`
--

INSERT INTO `semester8` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`) VALUES
('friday', 'CS614-fc20', 'CS607	-fc20', '---', '---', '---'),
('monday', 'CS625-fc21', 'CS614-fc20', '---', '---', 'CS607P-fc21'),
('thursday', 'CS607	-fc20', '---', '---', '---', '---'),
('tuesday', 'CS625-fc21', '---', '---', '---', 'CS607P-fc21'),
('wednesday', '---', '---', '---', '---', '---');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `username`, `first_name`, `last_name`, `password`, `email`, `semester`, `gender`, `address`, `phone`) VALUES
(1, 'student ', 'student', 'ali', '1234', 'stu@gmail.com', 'semester1', 'male', 'east karachi', 3459806607),
(2, 'student1 ', 'ali', 'khan', '1234', 'sa@gmail.com', 'semester1', 'male', 'lahore', 3469809989),
(3, 'student2 ', 'asif ', 'khan', '123', 'asif@gmail.com', 'semester1', 'male', 'lahore', 3469809989),
(4, 'student3 ', 'adil', 'khan', '1234', 'adil@gmail.com', 'semester1', 'male', 'lahore', 3469809989),
(5, 'student1 ', 'hasan', 'khan', '1234', 'hasan@gmail.com', 'semester1', 'male', 'lahore', 3469809989),
(6, 'student4 ', 'subhan', 'ali', '1234', 'qqqq@gmail.com', 'semester1', 'male', 'lahore', 3469809989),
(7, 'student20 ', 'zaid', 'khan', '1234', 'zaid@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(8, 'student21 ', 'sajid', 'khan', '1234', 'sajid@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(9, 'student22 ', 'zakir', 'ali', '1234', 'zakir@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(10, 'student23 ', 'fida', 'ali', '1234', 'fida@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(11, 'student24 ', 'jahan', 'ali', '1234', 'jahan@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(12, 'student25 ', 'hasher', 'ali', '1234', 'hasher@gmail.com', 'semester2', 'male', 'lahore', 3469809989),
(13, 'student30 ', 'zubair', 'ali', '1234', 'zubair@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(14, 'student31 ', 'dilawar', 'khan', '1234', 'dilawar@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(15, 'student32 ', 'amad', 'ali', '1234', 'amad@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(16, 'student33 ', 'faiq', 'ali', '1234', 'faiq@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(17, 'student34 ', 'danish', 'khan', '1234', 'danish@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(18, 'student35 ', 'rizwan', 'ali', '1234', 'rizwan@gmail.com', 'semester3', 'male', 'lahore', 3469809989),
(19, 'student40 ', '`sabir', 'ali', '1234', 'sabir@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(20, 'student40 ', '`sabir', 'ali', '1234', 'sabir@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(21, 'student41 ', 'saleem', 'khan', '1234', 'sam2@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(22, 'student41 ', 'husan', 'jan', '1234', 'husan@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(23, 'student42 ', 'zain', 'ali', '1234', 'zain@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(24, 'student43 ', 'riaz', 'khan', '1234', 'riaz@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(25, 'student44 ', 'saqil', 'ahmad', '1234', 'saqil@gmail.com', 'semester4', 'male', 'lahore', 3469809989),
(26, 'student45 ', 'jamil', 'khan', '1234', 'jamil@gmail.com', 'semester4', 'male', 'lahore', 3469809989);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`coordinator_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `daypreference`
--
ALTER TABLE `daypreference`
  ADD PRIMARY KEY (`dp_id`);

--
-- Indexes for table `fac`
--
ALTER TABLE `fac`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fac1`
--
ALTER TABLE `fac1`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `fc2`
--
ALTER TABLE `fc2`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc3`
--
ALTER TABLE `fc3`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc4`
--
ALTER TABLE `fc4`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc5`
--
ALTER TABLE `fc5`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc6`
--
ALTER TABLE `fc6`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc7`
--
ALTER TABLE `fc7`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc8`
--
ALTER TABLE `fc8`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc9`
--
ALTER TABLE `fc9`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc10`
--
ALTER TABLE `fc10`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc11`
--
ALTER TABLE `fc11`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc12`
--
ALTER TABLE `fc12`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc13`
--
ALTER TABLE `fc13`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc14`
--
ALTER TABLE `fc14`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc16`
--
ALTER TABLE `fc16`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc17`
--
ALTER TABLE `fc17`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc18`
--
ALTER TABLE `fc18`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc19`
--
ALTER TABLE `fc19`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc20`
--
ALTER TABLE `fc20`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `fc21`
--
ALTER TABLE `fc21`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`preferences_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `semester1`
--
ALTER TABLE `semester1`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester2`
--
ALTER TABLE `semester2`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester3`
--
ALTER TABLE `semester3`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester4`
--
ALTER TABLE `semester4`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester5`
--
ALTER TABLE `semester5`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester6`
--
ALTER TABLE `semester6`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester7`
--
ALTER TABLE `semester7`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `semester8`
--
ALTER TABLE `semester8`
  ADD PRIMARY KEY (`day`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coordinator`
--
ALTER TABLE `coordinator`
  MODIFY `coordinator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `daypreference`
--
ALTER TABLE `daypreference`
  MODIFY `dp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `preferences`
--
ALTER TABLE `preferences`
  MODIFY `preferences_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
