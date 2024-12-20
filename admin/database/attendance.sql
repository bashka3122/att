-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2024 at 11:56 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `att`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac_year`
--

CREATE TABLE `ac_year` (
  `id` int(11) NOT NULL,
  `ac_year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ac_year`
--

INSERT INTO `ac_year` (`id`, `ac_year`) VALUES
(2, '2024-2025');

-- --------------------------------------------------------

--
-- Table structure for table `att_records`
--

CREATE TABLE `att_records` (
  `id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `sid` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `att_records`
--

INSERT INTO `att_records` (`id`, `a_id`, `sid`, `sname`, `status`) VALUES
(33, 4, ' ggu001', ' ALi Warsame', 1),
(34, 4, ' ggu002', ' Ahmed', 1),
(35, 4, ' ggu004', ' Maxamed', 1),
(36, 4, ' ggu005', ' ALi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `att_table`
--

CREATE TABLE `att_table` (
  `id` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `ac_year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `att_table`
--

INSERT INTO `att_table` (`id`, `class`, `subject`, `date`, `ac_year`) VALUES
(4, 'BIT0007', 'PHP', '2024-12-17', '2024-2025');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cId` varchar(10) NOT NULL,
  `Faculty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `cname`, `cId`, `Faculty`) VALUES
(5, 'BIT 7', 'BIT0007', 'Computer Science'),
(8, 'Health 004', 'HH0004', 'Health'),
(9, 'BIT 8', 'BIT0008', 'Computer Science'),
(10, 'bit12', '0002', 'Humanities');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `role` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `password`, `role`, `status`) VALUES
(1, 'Admin', 'admin@att.com', '123', 'admin', 0),
(4, 'Fadumo Abdisalam', 'developer@dhameystech.com', 't', 'staff', 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `SID` varchar(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `class` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `SID`, `name`, `class`, `status`) VALUES
(10, 'ggu001', 'ALi Warsame', 'BIT0007', 0),
(11, 'ggu002', 'Ahmed', 'BIT0007', 0),
(12, 'ggu003', 'Caasho', 'HH0004', 0),
(13, 'ggu004', 'Maxamed', 'BIT0007', 0),
(14, 'ggu005', 'ALi', 'BIT0007', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `teacher` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `class`, `teacher`) VALUES
(2, 'C#', 'BIT0007', 'Admin'),
(3, 'PHP', 'BIT0007', 'Fadumo Abdisalam'),
(4, 'nursing', 'HH0004', 'Fadumo Abdisalam'),
(5, '', 'BIT0007', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ac_year`
--
ALTER TABLE `ac_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `att_records`
--
ALTER TABLE `att_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `att_table`
--
ALTER TABLE `att_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cId` (`cId`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `SID` (`SID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac_year`
--
ALTER TABLE `ac_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `att_records`
--
ALTER TABLE `att_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `att_table`
--
ALTER TABLE `att_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
