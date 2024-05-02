-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 04:54 PM
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
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `B_ID` int(11) NOT NULL,
  `Degree_program` varchar(255) NOT NULL,
  `Year` int(11) NOT NULL,
  `Batch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`B_ID`, `Degree_program`, `Year`, `Batch`) VALUES
(23, 'CS', 2019, 'CS.2019'),
(24, 'SE', 2019, 'SE.2019'),
(27, 'SE', 2020, 'SE-2020'),
(28, 'CS', 2020, 'CS-2020'),
(29, 'CS', 2021, 'CS-2021'),
(30, 'SE', 2021, 'SE-2021'),
(31, 'CS', 2022, 'CS-2022'),
(32, 'SE', 2022, 'SE-2022');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `C_ID` int(11) NOT NULL,
  `Course_Name` varchar(255) NOT NULL,
  `Course_Code` varchar(255) NOT NULL,
  `Credit_Hours` varchar(30) NOT NULL,
  `Course_Alias` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`C_ID`, `Course_Name`, `Course_Code`, `Credit_Hours`, `Course_Alias`) VALUES
(1, 'Web Design and development', 'CSC-201', '3+0', 'WDD'),
(2, 'Artificial Intelligence', 'CS-55', '3+1', 'AI'),
(3, 'Professional Practice', 'CS-54', '3', 'PP'),
(4, 'Computer Networks', 'CS-57', '3+1', 'CN'),
(5, 'Human Computer Interaction', 'CS-53', '3', 'HCI'),
(6, 'Information Security', 'CS-52', '3', 'IS');

-- --------------------------------------------------------

--
-- Table structure for table `course_assignment`
--

CREATE TABLE `course_assignment` (
  `CA_ID` int(11) NOT NULL,
  `Teacher_Name` varchar(200) NOT NULL,
  `Course_Alias` varchar(100) NOT NULL,
  `Batch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_assignment`
--

INSERT INTO `course_assignment` (`CA_ID`, `Teacher_Name`, `Course_Alias`, `Batch`) VALUES
(25, 'Asma', 'WDD', 'CS-2020'),
(26, 'Muskan', 'AI', 'CS.2019'),
(27, 'Miss', 'WDD', 'CS-2020');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `R_ID` int(11) NOT NULL,
  `Room_Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`R_ID`, `Room_Name`, `Type`) VALUES
(13, 'C-60', 'Computer Lab'),
(14, 'B-16', 'Lecture Room'),
(16, 'C-63', 'Computer Lab'),
(22, 'C-62', 'Computer Lab'),
(24, 'D-18', 'Computer Lab'),
(25, 'D-19', 'Computer Lab'),
(26, 'D-20', 'Computer Lab');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `S_ID` int(11) NOT NULL,
  `Session` varchar(100) NOT NULL,
  `Semester` varchar(100) NOT NULL,
  `Batch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`S_ID`, `Session`, `Semester`, `Batch`) VALUES
(28, 'Spring', '2nd', 'CS.2019'),
(29, 'Spring', '2nd', 'CS-2020'),
(30, 'Spring', '2nd', 'CS-2021'),
(31, 'Spring', '2nd', 'CS-2022');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `T_ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `faculty` varchar(200) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`T_ID`, `name`, `faculty`, `designation`, `mobile`, `email`) VALUES
(118, 'Muskan', 'Science', 'Professor', '203243', 'farrahzainab74@gmail.com'),
(119, 'Asma', 'Science', 'Professor', '03218920998', 'asmafurqan786@gmail.com'),
(120, 'Miss Surayya', 'Science', 'Professor', '0300000', 'misssurayya786@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `T_ID` int(10) NOT NULL,
  `CA` varchar(256) NOT NULL,
  `Room` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`T_ID`, `CA`, `Room`, `Time`) VALUES
(1, 'Asma || WDD || CS-2020', 'C-60', '9:00-9:50'),
(2, 'Miss || WDD || CS-2020', 'D-18', '12:20-1:10'),
(3, 'Miss || WDD || CS-2020', 'C-63', '10:40-11:30');

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `TS_ID` int(11) NOT NULL,
  `Duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`TS_ID`, `Duration`) VALUES
(1, '9:00-9:50'),
(2, '9:50-10:40'),
(3, '10:40-11:30'),
(4, '11:30-12:20'),
(5, '12:20-1:10'),
(6, '1:10-2:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_ID` int(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_ID`, `Username`, `password`, `usertype`) VALUES
(4, 'CS2020', 'CS2020', 'Student'),
(5, 'SE2020', 'SE2020', 'Student'),
(6, 'admin', 'admin123', 'Admin'),
(7, 'CS2019', 'CS2019', 'Student'),
(8, 'CS2021', 'CS2021', 'Student'),
(9, 'CS2022', 'CS2022', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`B_ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `course_assignment`
--
ALTER TABLE `course_assignment`
  ADD PRIMARY KEY (`CA_ID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `time_slot`
--
ALTER TABLE `time_slot`
  ADD PRIMARY KEY (`TS_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `B_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `course_assignment`
--
ALTER TABLE `course_assignment`
  MODIFY `CA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `T_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `time_slot`
--
ALTER TABLE `time_slot`
  MODIFY `TS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
