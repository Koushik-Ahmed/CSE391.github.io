-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 06:11 PM
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
-- Database: `sdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_Initial` varchar(20) NOT NULL,
  `Department_Name` varchar(100) NOT NULL,
  `No_of_Students` int(250) NOT NULL,
  `No_of_Faculties` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_Initial`, `Department_Name`, `No_of_Students`, `No_of_Faculties`) VALUES
('CSE', 'Computer Science and Engineering', 250, 25),
('EEE', 'Electrical and Electronics Engineering', 200, 20),
('MNS', 'Mathematics and Natural Sciences', 140, 15),
('ARC', 'Architecture', 100, 10),
('ENH', 'English and Humanities', 80, 10),
('PHR', 'Pharmacy', 60, 15);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `Exam_Title` varchar(100) NOT NULL,
  `Exam_Type` char(20) NOT NULL,
  `Marks` int(100) NOT NULL,
  `Duration` varchar(20) NOT NULL,
  `Exam_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`Exam_Title`, `Exam_Type`, `Marks`, `Duration`, `Exam_Date`) VALUES
('Database Systems	', 'MID', 30, '1 Hour 30 Minutes', '2021-08-06'),
('Programming for the Internet', 'Final', 40, '2 Hours', '2022-12-28'),
('Programming Language 1', 'Mid', 30, '1 Hour 30 Minutes', '2022-11-06'),
('Introduction to History', 'Quiz 4', 10, '30 Minutes', '2022-10-12'),
('Numerical Methods', 'Quiz 3', 15, '30 Minutes', '2022-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `s_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`s_no`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_no` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `class` int(11) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_no`, `roll_no`, `name`, `father_name`, `class`, `mobile`, `email`, `password`, `remark`) VALUES
(7, 1001, 'Vinod Meena', 'XYZ', 12, '1234567789', 'vinod@gmail.com', 'vinod@123', 'Fine Now'),
(14, 22241154, 'Koushik Ahmed', 'Abdul Halim Mollah', 12, '1746767647', 'koushik.ahmed@g.bracu.ac.bd', 'koushik', 'Quick Learner'),
(15, 18201011, 'Kushal', 'Mr. Halim Mollah', 13, '1517195450', 'koushikahmed777@gmail.com', 'kushal', 'Final year Student');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `s_no` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `courses` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`s_no`, `t_id`, `name`, `mobile`, `courses`) VALUES
(1, 101, 'Shivam Yadav', '5484654878', 'Physics, Maths'),
(2, 102, 'Gopal Sharma', '9878452484', 'English, Reasoning, History'),
(3, 105, 'Mr.Sifat Tanvir', '01716009xxx', 'CSE110\r\nCSE111\r\nCSE391'),
(4, 104, 'Mr. MD. Abdur Rahman', '01716000xxx', 'CSE310\r\nCSE391\r\nCSE489'),
(5, 103, 'Hariom sain', '7887451254', 'Politics, History, Biology ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
