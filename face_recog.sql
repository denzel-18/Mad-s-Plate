-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 04:45 PM
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
-- Database: `face_recog`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_analysis`
--

CREATE TABLE `data_analysis` (
  `id` int(250) NOT NULL,
  `date_range` varchar(500) NOT NULL,
  `angry` varchar(500) DEFAULT NULL,
  `sad` varchar(500) DEFAULT NULL,
  `neutral` varchar(500) DEFAULT NULL,
  `happy` varchar(500) DEFAULT NULL,
  `very_happy` varchar(500) DEFAULT NULL,
  `total` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_analysis`
--

INSERT INTO `data_analysis` (`id`, `date_range`, `angry`, `sad`, `neutral`, `happy`, `very_happy`, `total`) VALUES
(3, '05/1/23', '10', '15', '18', '25', '30', '98'),
(4, '05/21/23', '10', '15', '18', '25', '30', '98'),
(5, '05/22/23', '10', '15', '18', '25', '30', '98'),
(6, '05/24/23', '12', '15', '18', '25', '30', '100'),
(7, '07/32/23', '20', '30', '10', '30', '40', '130'),
(8, '06/21/23', '20', '25', '10', '30', '40', '125'),
(9, '05/28/23', '20', '30', '40', '50', '60', '200'),
(10, '05/29/23', '10', '15', '20', '25', '30', '100');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `opinion` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `opinion`, `timestamp`) VALUES
(11, 'gwapo123@gmail.com', 'awdawd', '2024-01-11 15:03:06'),
(12, 'gwapo123@gmail.com', 'wow', '2024-01-11 15:40:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_analysis`
--
ALTER TABLE `data_analysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_analysis`
--
ALTER TABLE `data_analysis`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
