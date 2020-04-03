-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 01, 2020 at 11:20 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `record`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_record`
--

CREATE TABLE `emp_record` (
  `id` int(11) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `homeaddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_record`
--

INSERT INTO `emp_record` (`id`, `ename`, `phone`, `dept`, `salary`, `homeaddress`) VALUES
(1, 'shankar narayan', '123', 'cs', '50000', 'Markhande'),
(8, 'ram', '123', 'cs', '213123', 'dsaaaaaaaaaaaaa'),
(9, 'shankar narayan', '123', 'cs', '1233', 'dasdsad'),
(10, 'shankar narayan', '123', 'cs', '1233', 'dasdsad'),
(12, 'Marnus Labuschange', '9865055832', 'cricket', '300000', 'Kalimati, Kathmandu'),
(13, 'Marnus Labuschange', '9865055832', 'Football', '300000', 'Kalimati, Kathmandu'),
(14, 'shankar narayan', '9865055832', 'cs', 's', 'saddasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_record`
--
ALTER TABLE `emp_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_record`
--
ALTER TABLE `emp_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
