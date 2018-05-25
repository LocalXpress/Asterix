-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 09:42 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asterix_gold`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_basic`
--

CREATE TABLE `student_basic` (
  `stud_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `moth_name` varchar(50) NOT NULL,
  `fath_name` varchar(50) NOT NULL,
  `g_phone` varchar(15) NOT NULL,
  `p_phone` varchar(15) NOT NULL,
  `board` varchar(5) NOT NULL,
  `school` varchar(30) NOT NULL,
  `class` varchar(5) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_pic`
--

CREATE TABLE `student_pic` (
  `stud_id` int(11) NOT NULL,
  `pic_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

CREATE TABLE `student_reg` (
  `stud_id` int(11) NOT NULL,
  `reg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_sub`
--

CREATE TABLE `student_sub` (
  `stud_id` int(11) NOT NULL,
  `sub_1` varchar(10) NOT NULL,
  `sub_2` varchar(10) NOT NULL,
  `sub_3` varchar(10) NOT NULL,
  `sub_4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_tran`
--

CREATE TABLE `student_tran` (
  `t_id` int(11) NOT NULL,
  `tran_id` varchar(20) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `paid_for` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_basic`
--
ALTER TABLE `student_basic`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `student_reg`
--
ALTER TABLE `student_reg`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `student_sub`
--
ALTER TABLE `student_sub`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `student_tran`
--
ALTER TABLE `student_tran`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_basic`
--
ALTER TABLE `student_basic`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `student_tran`
--
ALTER TABLE `student_tran`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
