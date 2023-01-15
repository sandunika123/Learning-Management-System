-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 05:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `Lecturerid` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Gender` char(2) DEFAULT NULL,
  `Adline1` varchar(50) DEFAULT NULL,
  `Adline2` varchar(50) DEFAULT NULL,
  `Adline3` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Subject` varchar(30) DEFAULT NULL,
  `Qualification` varchar(300) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`Lecturerid`, `FirstName`, `LastName`, `Gender`, `Adline1`, `Adline2`, `Adline3`, `Email`, `Password`, `Subject`, `Qualification`, `photo`) VALUES
(19, 'Sandunika', 'Dilshani', 'op', 'Anandaniwasa', 'Bulathwaththa', 'Bambarapana', 'amdilshanisandunika@gmail.com', 'dfg!@4%Adf', 'ICT', 'BICT(Hons)', 'pict 2.jpg'),
(20, 'Tharaka', 'Perera', 'op', '21/12', 'marassana', 'kandy', 'sandunikadilshani01@gmail.com', 'fgh(5Dfg', 'Science', ' fghj', 'VS code.PNG'),
(49, 'Chamodi', 'Kaushani', 'op', 'dfghj', 'dfghj', 'Bambarapana', '2019t00436@stu.cmb.ac.lk', 'wti$t6Ts', 'Sinhala', ' asdthejuee', 'stageing.PNG'),
(50, 'Ruchira', 'Kaushani', 'op', 'dfghj', 'dfghj', 'afeeg', '2019t00475@stu.cmb.ac.lk', 'fghG7gga', 'Sinhala', ' Asdfghkrti', 'stageing.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` int(11) NOT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `stream` varchar(30) DEFAULT NULL,
  `subject1` varchar(30) DEFAULT NULL,
  `subject2` varchar(30) DEFAULT NULL,
  `subject3` varchar(30) DEFAULT NULL,
  `photo` varchar(200) DEFAULT 'blankprofile.PNG'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `FirstName`, `LastName`, `gender`, `email`, `password`, `stream`, `subject1`, `subject2`, `subject3`, `photo`) VALUES
(4, 'Chamodi', 'kaushani', 'o', 'ruchira@gmail.com', 'dfghjk$6Sfg', 'Technology', 'Science', 'Engineering Technology', 'Geography', 'IMG-20221229-WA0015.jpg'),
(5, 'Sanuli', 'Nayanathara', 'o', 'nayanathara@gmail.com', 'ass5#Rad', 'Arts', 'Sinhala', 'History', 'Geography', 'blankprofile.PNG'),
(6, 'Anne', 'Perera', 'o', 'anne@gmai.com', 'gav^aA2e', 'Arts', 'Sinhala', 'History', 'ICT', 'blankprofile.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectID` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectID`, `name`, `document`, `title`) VALUES
(32, 'Maths', 'Deep_Finders final Report.pdf', 'Maths1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`Lecturerid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `Lecturerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
