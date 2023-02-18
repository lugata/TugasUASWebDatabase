-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 01:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `nim` int(191) NOT NULL,
  `komen` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nama`, `nim`, `komen`) VALUES
(4, 'aaaaa', 0, 'mmmm'),
(8, 'eawffewa', 0, 'aweefewa'),
(11, 'faeawf2', 4132143, 'ewafeawf'),
(13, 'awfe32', 4132143, '213132'),
(14, 'wefa', 3241, 'faeweawf'),
(15, 'weafawef', 423113, 'waefewa'),
(16, 'afewaefw', 41321312, 'acsasaf'),
(18, 'DAUW BASTHA FIASTAT LUGATA', 120230006, 'Halloo'),
(19, '', 0, ''),
(21, '', 0, ''),
(22, 'DAUW BASTHA FIASTAT LUGATA', 120230006, 'Halloo'),
(23, 'DAUW BASTHA FIASTAT LUGATA', 120230006, 'Halloo'),
(24, 'DAUW BASTHA FIASTAT LUGATA', 4132143, 'ewafwaefwaef'),
(25, 'DAUW BASTHA FIASTAT LUGATA', 120230006, 'Halloo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
