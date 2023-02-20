-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: 192.168.150.213:3306
-- Generation Time: Feb 16, 2023 at 03:56 AM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 7.4.3-4ubuntu2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprogmi212`
--

-- --------------------------------------------------------

--
-- Table structure for table `Visitors`
--

CREATE TABLE `Visitors` (
  `fname` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `messages` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Visitors`
--

INSERT INTO `Visitors` (`fname`, `email`, `website`, `messages`, `gender`) VALUES
('Ced', 'jbmolina@student.apc.edu.ph', 'http://apcwebprog.csf.ph/~jbmolina/lab2/week9/', '', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Visitors`
--
ALTER TABLE `Visitors`
  ADD PRIMARY KEY (`fname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
