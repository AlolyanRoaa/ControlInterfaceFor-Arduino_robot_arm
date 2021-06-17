-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 05:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robot_arm_control`
--

-- --------------------------------------------------------

--
-- Table structure for table `engines`
--

CREATE TABLE `engines` (
  `id_position` int(11) NOT NULL,
  `Engine1` int(11) NOT NULL,
  `Engine2` int(11) NOT NULL,
  `Engine3` int(11) NOT NULL,
  `Engine4` int(11) NOT NULL,
  `Engine5` int(11) NOT NULL,
  `Engine6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engines`
--

INSERT INTO `engines` (`id_position`, `Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`) VALUES
(1, 90, 90, 90, 90, 90, 90),
(2, 90, 90, 90, 90, 90, 90),
(3, 90, 90, 90, 90, 90, 90),
(4, 117, 90, 90, 90, 90, 90),
(5, 119, 46, 147, 50, 124, 109),
(6, 41, 98, 46, 50, 78, 109),
(7, 90, 90, 90, 90, 90, 90),
(8, 116, 90, 40, 125, 90, 90);

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `id_op` int(11) NOT NULL,
  `switchedOn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operation`
--

INSERT INTO `operation` (`id_op`, `switchedOn`) VALUES
(1, 0),
(2, 1),
(3, 1),
(4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `engines`
--
ALTER TABLE `engines`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`id_op`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `engines`
--
ALTER TABLE `engines`
  MODIFY `id_position` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `operation`
--
ALTER TABLE `operation`
  MODIFY `id_op` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
