-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 06:29 AM
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
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Email` varchar(255) NOT NULL,
  `Admin_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Email`, `Admin_Password`) VALUES
('register@bracu.ac.bd', 'admin'),
('lecturer@bracu.ac.bd', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `sid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `firstname`, `sid`, `email`, `slot`) VALUES
('Aminul Islam', 'Aminul', 18201177, 'aminul@g.bracu.ac.bd', 4),
('Anim Haque', 'Anim', 22201099, 'anim@g.bracu.ac.bd', 2),
('Koushik Ahmed', 'Koushik', 22241154, 'koushik.ahmed@g.bracu.ac.bd', 1),
('Kushal Ahmed', 'Kushal', 18201011, 'kushal@g.bracu.ac.bd', 1),
('Yasin Arif', 'Yasin', 19102007, 'yasin@g.bracu.ac.bd', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
