-- phpMyAdmin SQL Dump
-- version 4.2.0-alpha2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2015 at 03:59 AM
-- Server version: 5.5.36-MariaDB
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bbdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `anskey`
--

CREATE TABLE IF NOT EXISTS `anskey` (
  `AVal` int(15) NOT NULL,
  `Ans` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anskey`
--

INSERT INTO `anskey` (`AVal`, `Ans`) VALUES
(1, 'Strongly Agree'),
(2, 'Agree'),
(3, 'Neutral'),
(4, 'Disagree'),
(5, 'Strongly Disagree');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`AID` int(15) NOT NULL,
  `AVal` int(15) NOT NULL,
  `QID` int(15) NOT NULL,
  `SID` int(15) NOT NULL,
  `SectionID` int(15) DEFAULT NULL,
  `CourseID` int(15) DEFAULT NULL,
  `UserID` int(15) DEFAULT NULL,
  `TermID` int(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`AID`, `AVal`, `QID`, `SID`, `SectionID`, `CourseID`, `UserID`, `TermID`) VALUES
(1, 1, 1, 1, 2, 1, 2, 1),
(2, 2, 2, 1, 2, 1, 2, 1),
(3, 3, 3, 1, 2, 1, 2, 1),
(4, 4, 4, 1, 2, 1, 2, 1),
(5, 5, 5, 1, 2, 1, 2, 1),
(6, 4, 6, 1, 2, 1, 2, 1),
(7, 3, 7, 1, 2, 1, 2, 1),
(8, 2, 8, 1, 2, 1, 2, 1),
(9, 1, 9, 1, 2, 1, 2, 1),
(10, 2, 10, 1, 2, 1, 2, 1),
(11, 5, 1, 2, 2, 1, 2, 1),
(12, 4, 2, 2, 2, 1, 2, 1),
(13, 3, 3, 2, 2, 1, 2, 1),
(14, 2, 4, 2, 2, 1, 2, 1),
(15, 1, 5, 2, 2, 1, 2, 1),
(16, 2, 6, 2, 2, 1, 2, 1),
(17, 3, 7, 2, 2, 1, 2, 1),
(18, 4, 8, 2, 2, 1, 2, 1),
(19, 5, 9, 2, 2, 1, 2, 1),
(20, 4, 10, 2, 2, 1, 2, 1),
(21, 5, 1, 3, 2, 1, 2, 1),
(22, 4, 2, 3, 2, 1, 2, 1),
(23, 3, 3, 3, 2, 1, 2, 1),
(24, 2, 4, 3, 2, 1, 2, 1),
(25, 1, 5, 3, 2, 1, 2, 1),
(26, 2, 6, 3, 2, 1, 2, 1),
(27, 3, 7, 3, 2, 1, 2, 1),
(28, 4, 8, 3, 2, 1, 2, 1),
(29, 5, 9, 3, 2, 1, 2, 1),
(30, 4, 10, 3, 2, 1, 2, 1),
(31, 5, 1, 4, 2, 1, 2, 1),
(32, 4, 2, 4, 2, 1, 2, 1),
(33, 3, 3, 4, 2, 1, 2, 1),
(34, 2, 4, 4, 2, 1, 2, 1),
(35, 1, 5, 4, 2, 1, 2, 1),
(36, 2, 6, 4, 2, 1, 2, 1),
(37, 3, 7, 4, 2, 1, 2, 1),
(38, 4, 8, 4, 2, 1, 2, 1),
(39, 5, 9, 4, 2, 1, 2, 1),
(40, 4, 10, 4, 2, 1, 2, 1),
(41, 1, 1, 5, 2, 1, 2, 1),
(42, 1, 2, 5, 2, 1, 2, 1),
(43, 1, 3, 5, 2, 1, 2, 1),
(44, 2, 4, 5, 2, 1, 2, 1),
(45, 2, 5, 5, 2, 1, 2, 1),
(46, 2, 6, 5, 2, 1, 2, 1),
(47, 3, 7, 5, 2, 1, 2, 1),
(48, 3, 8, 5, 2, 1, 2, 1),
(49, 4, 9, 5, 2, 1, 2, 1),
(50, 5, 10, 5, 2, 1, 2, 1),
(51, 3, 1, 6, 2, 1, 2, 1),
(52, 3, 2, 6, 2, 1, 2, 1),
(53, 2, 3, 6, 2, 1, 2, 1),
(54, 2, 4, 6, 2, 1, 2, 1),
(55, 1, 5, 6, 2, 1, 2, 1),
(56, 1, 6, 6, 2, 1, 2, 1),
(57, 4, 7, 6, 2, 1, 2, 1),
(58, 4, 8, 6, 2, 1, 2, 1),
(59, 5, 9, 6, 2, 1, 2, 1),
(60, 5, 10, 6, 2, 1, 2, 1),
(61, 1, 1, 7, 2, 1, 2, 1),
(62, 1, 2, 7, 2, 1, 2, 1),
(63, 3, 3, 7, 2, 1, 2, 1),
(64, 3, 4, 7, 2, 1, 2, 1),
(65, 3, 5, 7, 2, 1, 2, 1),
(66, 3, 6, 7, 2, 1, 2, 1),
(67, 3, 7, 7, 2, 1, 2, 1),
(68, 3, 8, 7, 2, 1, 2, 1),
(69, 3, 9, 7, 2, 1, 2, 1),
(70, 3, 10, 7, 2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`CourseID` int(10) unsigned NOT NULL,
  `CourseName` varchar(250) NOT NULL,
  `TermID` int(15) NOT NULL,
  `Inactive` int(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `CourseName`, `TermID`, `Inactive`) VALUES
(1, 'CWEB1101', 1, 0),
(2, 'CWEB1205', 2, 0),
(3, 'CNET1101', 3, 0),
(4, 'CNET1105', 1, 0),
(5, 'CGYM1505', 2, 0),
(6, 'BOBB2305', 6, 0),
(7, 'CNET1111', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
`UserID` bigint(20) NOT NULL,
  `UserName` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Password` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Roles` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Inactive` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`UserID`, `UserName`, `Password`, `Roles`, `Inactive`) VALUES
(1, 'kom', 'password', 'Administrator', 0),
(2, 'igor', 'password', 'Instructor', 1),
(3, 'dima', 'password', 'instructor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `last`
--

CREATE TABLE IF NOT EXISTS `last` (
  `SID` int(11) NOT NULL,
  `Q11` varchar(50) DEFAULT NULL,
  `Q12` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `last`
--

INSERT INTO `last` (`SID`, `Q11`, `Q12`) VALUES
(7, 'no', ' this will work');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `QID` int(11) NOT NULL DEFAULT '0',
  `Question` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QID`, `Question`) VALUES
(1, 'During this course, the class began on time?'),
(2, 'This course made productive use of the scheduled time?'),
(3, 'The course material was delivered in such a manner to increase my knowledge and skills.?'),
(4, 'Feedback provided was constructive, supporting, and timely?'),
(5, 'I have a deeper understanding of the subject matter as a result of the course?'),
(6, 'I was provided a professional learning environment, where learning could take place (not the physical facilities)?'),
(7, 'Did you like this class?'),
(8, 'Did your instructor answer your question well?'),
(9, 'I learned a lot in this course?'),
(10, 'This course was extremely valuable to my education?');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
`SectionID` int(15) NOT NULL,
  `SectionNo` int(11) DEFAULT NULL,
  `Course` varchar(50) CHARACTER SET latin1 NOT NULL,
  `TermID` int(15) NOT NULL,
  `Instructor` int(250) DEFAULT NULL,
  `Inactive` tinyint(4) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`SectionID`, `SectionNo`, `Course`, `TermID`, `Instructor`, `Inactive`) VALUES
(1, 1, '2', 1, 1, 0),
(2, 2, '1', 1, 2, 0),
(3, 1, '1', 2, 1, 0),
(4, 6, '1', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
`SID` int(15) NOT NULL,
  `SecID` int(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`SID`, `SecID`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE IF NOT EXISTS `term` (
`TermID` int(15) NOT NULL,
  `Term` varchar(100) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`TermID`, `Term`) VALUES
(1, 'SPRING2015'),
(2, 'FALL2015'),
(6, 'SUMMER2015'),
(9, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anskey`
--
ALTER TABLE `anskey`
 ADD PRIMARY KEY (`AVal`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
 ADD PRIMARY KEY (`UserID`), ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `last`
--
ALTER TABLE `last`
 ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`QID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
 ADD PRIMARY KEY (`SectionID`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
 ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
 ADD PRIMARY KEY (`TermID`), ADD UNIQUE KEY `Term` (`Term`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `AID` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `CourseID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
MODIFY `UserID` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
MODIFY `SectionID` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
MODIFY `SID` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
MODIFY `TermID` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
