-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2019 at 02:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_database_bcnf`
--

-- --------------------------------------------------------

--
-- Table structure for table `BELONGS_TO`
--

CREATE TABLE `BELONGS_TO` (
  `Course_Code` char(20) NOT NULL,
  `Faculty` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BELONGS_TO`
--

INSERT INTO `BELONGS_TO` (`Course_Code`, `Faculty`) VALUES
('-', '-'),
('cs306', 'FENS'),
('IF100', 'FENS');

-- --------------------------------------------------------

--
-- Table structure for table `CLUBS`
--

CREATE TABLE `CLUBS` (
  `Name` char(20) NOT NULL,
  `Email` char(20) DEFAULT NULL,
  `President_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CLUBS`
--

INSERT INTO `CLUBS` (`Name`, `Email`, `President_ID`) VALUES
('SUDOSK', 'sudosk', 123123);

-- --------------------------------------------------------

--
-- Table structure for table `COURSE_TEACHER`
--

CREATE TABLE `COURSE_TEACHER` (
  `Name` char(20) DEFAULT NULL,
  `Time` int(11) DEFAULT NULL,
  `Course_Code` char(20) NOT NULL,
  `Credit` int(11) DEFAULT NULL,
  `Class` char(20) DEFAULT NULL,
  `Instructor_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `COURSE_TEACHER`
--

INSERT INTO `COURSE_TEACHER` (`Name`, `Time`, `Course_Code`, `Credit`, `Class`, `Instructor_Id`) VALUES
('-', 0, '-', 0, '-', 0),
('cs306', 12, 'cs306', 3, 'FENSG077', 2),
('IF100', 8, 'IF100', 3, 'FMAN1099', 2);

-- --------------------------------------------------------

--
-- Table structure for table `FACULTY`
--

CREATE TABLE `FACULTY` (
  `Name` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FACULTY`
--

INSERT INTO `FACULTY` (`Name`) VALUES
('-'),
('FASS'),
('FENS'),
('FMAN');

-- --------------------------------------------------------

--
-- Table structure for table `INSTRUCTOR`
--

CREATE TABLE `INSTRUCTOR` (
  `Office_Number` char(20) DEFAULT NULL,
  `Contract_id` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `INSTRUCTOR`
--

INSERT INTO `INSTRUCTOR` (`Office_Number`, `Contract_id`, `ID`) VALUES
('-', 0, 0),
('999', 999, 1),
('888', 8, 2),
('9', 123, 999);

-- --------------------------------------------------------

--
-- Table structure for table `JOINS`
--

CREATE TABLE `JOINS` (
  `Student_ID` int(11) NOT NULL,
  `Club_Name` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `JOINS`
--

INSERT INTO `JOINS` (`Student_ID`, `Club_Name`) VALUES
(111, 'SUDOSK'),
(123123, 'SUDOSK');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `username` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `type` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`username`, `password`, `type`) VALUES
('admin', 'admin', 'ADMIN'),
('yaseminutkueri', 'yasemin', 'Regular'),
('yaseminutkueri', 'yasemin', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `OFFICE`
--

CREATE TABLE `OFFICE` (
  `Phone_Number` int(11) DEFAULT NULL,
  `Office_Number` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OFFICE`
--

INSERT INTO `OFFICE` (`Phone_Number`, `Office_Number`) VALUES
(0, '-'),
(1111, '123123'),
(8, '8'),
(888, '888'),
(99, '9'),
(999, '999');

-- --------------------------------------------------------

--
-- Table structure for table `PEOPLE`
--

CREATE TABLE `PEOPLE` (
  `Name` char(20) DEFAULT NULL,
  `Mail` char(20) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `Sex` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PEOPLE`
--

INSERT INTO `PEOPLE` (`Name`, `Mail`, `ID`, `Sex`) VALUES
('-', '-', 0, '-'),
('inanc', 'inancarin', 1, 'male'),
('yucel', 'yucel', 2, 'male'),
('Emre', 'emreyavas', 111, 'male'),
('Yucel', 'yucel', 999, 'male'),
('erkin', 'erkinalacamli', 123123, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `PREREQUISITE_OF`
--

CREATE TABLE `PREREQUISITE_OF` (
  `Course` char(20) NOT NULL,
  `Prequisite_of` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PREREQUISITE_OF`
--

INSERT INTO `PREREQUISITE_OF` (`Course`, `Prequisite_of`) VALUES
('-', '-'),
('cs306', '-'),
('IF100', '-');

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT`
--

CREATE TABLE `STUDENT` (
  `Major` char(20) DEFAULT NULL,
  `Total_Credit` int(11) DEFAULT NULL,
  `Entrance_Year` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STUDENT`
--

INSERT INTO `STUDENT` (`Major`, `Total_Credit`, `Entrance_Year`, `ID`) VALUES
('ECON', 100, 2000, 111),
('BIO', 3, 2015, 123123);

-- --------------------------------------------------------

--
-- Table structure for table `STUDIES_IN`
--

CREATE TABLE `STUDIES_IN` (
  `Student_ID` int(11) NOT NULL,
  `Faculty` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STUDIES_IN`
--

INSERT INTO `STUDIES_IN` (`Student_ID`, `Faculty`) VALUES
(111, 'FASS'),
(123123, 'FENS');

-- --------------------------------------------------------

--
-- Table structure for table `TAKES`
--

CREATE TABLE `TAKES` (
  `Course_Code` char(20) NOT NULL,
  `Student_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `WORKS_IN`
--

CREATE TABLE `WORKS_IN` (
  `Instructor_ID` int(11) NOT NULL,
  `Faculty` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `WORKS_IN`
--

INSERT INTO `WORKS_IN` (`Instructor_ID`, `Faculty`) VALUES
(0, '-'),
(1, 'FENS'),
(2, 'FENS'),
(999, 'FENS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BELONGS_TO`
--
ALTER TABLE `BELONGS_TO`
  ADD PRIMARY KEY (`Course_Code`),
  ADD KEY `Faculty` (`Faculty`);

--
-- Indexes for table `CLUBS`
--
ALTER TABLE `CLUBS`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `President_ID` (`President_ID`);

--
-- Indexes for table `COURSE_TEACHER`
--
ALTER TABLE `COURSE_TEACHER`
  ADD PRIMARY KEY (`Course_Code`),
  ADD KEY `Instructor_Id` (`Instructor_Id`);

--
-- Indexes for table `FACULTY`
--
ALTER TABLE `FACULTY`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `INSTRUCTOR`
--
ALTER TABLE `INSTRUCTOR`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Office_Number` (`Office_Number`);

--
-- Indexes for table `JOINS`
--
ALTER TABLE `JOINS`
  ADD PRIMARY KEY (`Student_ID`,`Club_Name`),
  ADD KEY `Club_Name` (`Club_Name`);

--
-- Indexes for table `OFFICE`
--
ALTER TABLE `OFFICE`
  ADD PRIMARY KEY (`Office_Number`);

--
-- Indexes for table `PEOPLE`
--
ALTER TABLE `PEOPLE`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `PREREQUISITE_OF`
--
ALTER TABLE `PREREQUISITE_OF`
  ADD PRIMARY KEY (`Course`,`Prequisite_of`),
  ADD KEY `Prequisite_of` (`Prequisite_of`);

--
-- Indexes for table `STUDENT`
--
ALTER TABLE `STUDENT`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `STUDIES_IN`
--
ALTER TABLE `STUDIES_IN`
  ADD PRIMARY KEY (`Student_ID`),
  ADD KEY `Faculty` (`Faculty`);

--
-- Indexes for table `TAKES`
--
ALTER TABLE `TAKES`
  ADD PRIMARY KEY (`Course_Code`,`Student_ID`),
  ADD KEY `Student_ID` (`Student_ID`);

--
-- Indexes for table `WORKS_IN`
--
ALTER TABLE `WORKS_IN`
  ADD PRIMARY KEY (`Instructor_ID`),
  ADD KEY `Faculty` (`Faculty`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BELONGS_TO`
--
ALTER TABLE `BELONGS_TO`
  ADD CONSTRAINT `belongs_to_ibfk_1` FOREIGN KEY (`Course_Code`) REFERENCES `COURSE_TEACHER` (`Course_Code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `belongs_to_ibfk_2` FOREIGN KEY (`Faculty`) REFERENCES `FACULTY` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `CLUBS`
--
ALTER TABLE `CLUBS`
  ADD CONSTRAINT `clubs_ibfk_1` FOREIGN KEY (`President_ID`) REFERENCES `STUDENT` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `COURSE_TEACHER`
--
ALTER TABLE `COURSE_TEACHER`
  ADD CONSTRAINT `course_teacher_ibfk_1` FOREIGN KEY (`Instructor_Id`) REFERENCES `INSTRUCTOR` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `INSTRUCTOR`
--
ALTER TABLE `INSTRUCTOR`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `PEOPLE` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `instructor_ibfk_2` FOREIGN KEY (`Office_Number`) REFERENCES `OFFICE` (`Office_Number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `JOINS`
--
ALTER TABLE `JOINS`
  ADD CONSTRAINT `joins_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `STUDENT` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `joins_ibfk_2` FOREIGN KEY (`Club_Name`) REFERENCES `CLUBS` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `PREREQUISITE_OF`
--
ALTER TABLE `PREREQUISITE_OF`
  ADD CONSTRAINT `prerequisite_of_ibfk_1` FOREIGN KEY (`Course`) REFERENCES `COURSE_TEACHER` (`Course_Code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prerequisite_of_ibfk_2` FOREIGN KEY (`Prequisite_of`) REFERENCES `COURSE_TEACHER` (`Course_Code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `STUDENT`
--
ALTER TABLE `STUDENT`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `PEOPLE` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `STUDIES_IN`
--
ALTER TABLE `STUDIES_IN`
  ADD CONSTRAINT `studies_in_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `STUDENT` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studies_in_ibfk_2` FOREIGN KEY (`Faculty`) REFERENCES `FACULTY` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `TAKES`
--
ALTER TABLE `TAKES`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`Course_Code`) REFERENCES `COURSE_TEACHER` (`Course_Code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`Student_ID`) REFERENCES `STUDENT` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `WORKS_IN`
--
ALTER TABLE `WORKS_IN`
  ADD CONSTRAINT `works_in_ibfk_1` FOREIGN KEY (`Instructor_ID`) REFERENCES `INSTRUCTOR` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `works_in_ibfk_2` FOREIGN KEY (`Faculty`) REFERENCES `FACULTY` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
