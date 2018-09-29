-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2018 at 07:54 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`) VALUES
(1, 'Imran Hoshain', 'imran@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `student_roll` varchar(30) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `student_roll`, `student_name`, `student_phone`) VALUES
(13, '630444', 'Imran Hoshain', '+8801723333608'),
(14, '123456', 'Imran Khan', '8974456666'),
(15, '6358987', 'Imran', '89744566665'),
(18, '123456', 'Imran Khan', '8974456666'),
(21, '630444', 'Imran Hoshain', '+8801723333608'),
(22, '123456', 'Imran Khan', '8974456666'),
(23, '6358987', 'Imran', '89744566665'),
(25, '630444', 'Imran Hoshain', '+8801723333608'),
(26, '123456', 'Imran Khan', '8974456666'),
(27, '6358987', 'Imran', '89744566665'),
(28, '879546', 'Nam Ki', 'Phone number'),
(29, '630444', 'Imran Hoshain', '+8801723333608'),
(31, '6358987', 'Imran', '89744566665'),
(33, '630444', 'Imran Hoshain', '+8801723333608'),
(34, '123456', 'Imran Khan', '8974456666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
