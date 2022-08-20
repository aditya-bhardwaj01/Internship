-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 12:20 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idealvillage`
--

-- --------------------------------------------------------

--
-- Table structure for table `vendor_type`
--

CREATE TABLE `vendor_type` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `parent_type` int(11) NOT NULL DEFAULT -1,
  `title` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_type`
--

INSERT INTO `vendor_type` (`id`, `site_id`, `parent_type`, `title`, `created_date`) VALUES
(1, 2, 0, 'Admin', '2022-07-13 15:19:13'),
(2, 2, 0, 'X', '2022-07-13 15:19:20'),
(3, 2, 0, 'Y', '2022-07-13 15:19:27'),
(4, 2, 0, 'Z', '2022-07-13 15:19:33'),
(5, 2, 1, 'Raw Material Provider', '2022-07-13 15:19:44'),
(6, 2, 1, 'Manufacturer', '2022-07-13 15:45:25'),
(7, 2, 1, 'Wholesaler', '2022-07-13 15:45:57'),
(8, 2, 1, 'Stockist', '2022-07-13 15:46:14'),
(9, 2, 1, 'Warehouse', '2022-07-13 15:46:28'),
(10, 2, 1, 'Distributor', '2022-07-13 15:46:44'),
(11, 2, 1, 'Retailer', '2022-07-13 15:46:56'),
(12, 2, 1, 'Fulfilment Center', '2022-07-13 15:47:21'),
(13, 2, 2, 'Lawyer', '2022-07-13 15:47:46'),
(14, 2, 2, 'CA', '2022-07-13 15:47:52'),
(15, 2, 2, 'Marketing Professional', '2022-07-13 15:48:15'),
(16, 2, 2, 'Content Writer', '2022-07-13 15:48:35'),
(17, 2, 2, 'Graphic Designer', '2022-07-13 15:48:58'),
(18, 2, 2, 'Web Developer', '2022-07-13 15:49:08'),
(19, 2, 2, 'Trainer', '2022-07-13 15:49:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendor_type`
--
ALTER TABLE `vendor_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendor_type`
--
ALTER TABLE `vendor_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
