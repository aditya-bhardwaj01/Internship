-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 11, 2022 at 02:08 PM
-- Server version: 10.3.35-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jammuin_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `placement_position`
--

CREATE TABLE `placement_position` (
  `id` int(11) NOT NULL,
  `pos_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `width` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `total_area` varchar(100) NOT NULL,
  `availability` varchar(100) NOT NULL,
  `open_for` varchar(100) NOT NULL,
  `contract_duration` varchar(100) NOT NULL,
  `rent` varchar(100) NOT NULL,
  `rent_measnurement` varchar(100) NOT NULL,
  `terms` text NOT NULL,
  `created date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement_position`
--

INSERT INTO `placement_position` (`id`, `pos_id`, `type`, `width`, `height`, `length`, `total_area`, `availability`, `open_for`, `contract_duration`, `rent`, `rent_measnurement`, `terms`, `created date`) VALUES
(1, 1, 'jobs', '155', '122', '250', '750', '15 day', 'sale', '5 days', 'yes', 'yes', 'pls', '2022-04-27 08:14:09'),
(2, 2, 'lease', '155', '122', '250', '750', '', '', '5 days', 'yes', 'yes', 'pls', '2022-04-27 08:14:09'),
(3, 4, '', '300', '200', '400', '100', '', '', '600', '500', 'Per Day', '', '0000-00-00 00:00:00'),
(4, 23, '', '11', '11', '11', '10', '', '', '11', '11', 'Per Hour', '', '2022-05-03 17:43:27'),
(5, 23, '', '11', '11', '11', '10', '', '', '11', '11', 'Per Hour', '', '2022-05-03 17:43:27'),
(6, 24, '', '456464', '546456', '54645', '11', '', '', '454', '455', 'Per Hour', '', '2022-05-03 17:45:00'),
(7, 24, '', '456464', '546456', '54645', '11', '', '', '454', '455', 'Per Hour', '', '2022-05-03 17:45:00'),
(8, 25, '', '22', '22', '22', '10', '', '', '2', '22', 'Per Week', '', '2022-05-04 05:28:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `placement_position`
--
ALTER TABLE `placement_position`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `placement_position`
--
ALTER TABLE `placement_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
