-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 08:36 AM
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
-- Table structure for table `site_orders`
--

CREATE TABLE `site_orders` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `marketplace_ids` text NOT NULL,
  `template_ids` text NOT NULL COMMENT 'only one template id not ids',
  `domain1` text NOT NULL,
  `domain2` text DEFAULT NULL,
  `package_used` int(11) NOT NULL,
  `commission_type` varchar(10) NOT NULL COMMENT 'FLAT/%',
  `commission_amount` float NOT NULL DEFAULT 0,
  `discount_received` float NOT NULL DEFAULT 0,
  `total_paid` float NOT NULL,
  `request_type` varchar(30) NOT NULL COMMENT 'INSTALL/UPDATE',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0->Default / 1-> live / 2->pending  /  -1->rejected',
  `created_date` datetime NOT NULL,
  `alloted_site_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_orders`
--

INSERT INTO `site_orders` (`id`, `site_id`, `vendor_id`, `marketplace_ids`, `template_ids`, `domain1`, `domain2`, `package_used`, `commission_type`, `commission_amount`, `discount_received`, `total_paid`, `request_type`, `status`, `created_date`, `alloted_site_id`) VALUES
(1, 2, 1, '1', '2', 'xyz.com', '', 0, '%', 50, 0, 5598, 'INSTALL', 0, '2022-07-07 12:04:06', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `site_orders`
--
ALTER TABLE `site_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `site_orders`
--
ALTER TABLE `site_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
