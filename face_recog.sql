-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 08:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_analysis`
--

INSERT INTO `data_analysis` (`id`, `date_range`, `angry`, `sad`, `neutral`, `happy`, `very_happy`, `total`) VALUES
(3, '05/1/23', '10', '15', '18', '25', '30', '98'),
(4, '05/21/23', '10', '15', '18', '25', '30', '98'),
(5, '05/22/23', '10', '15', '18', '25', '30', '98'),
(6, '05/24/23', '12', '15', '18', '25', '30', '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_analysis`
--
ALTER TABLE `data_analysis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_analysis`
--
ALTER TABLE `data_analysis`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
