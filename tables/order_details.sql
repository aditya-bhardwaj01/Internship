-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2022 at 01:36 PM
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
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL COMMENT 'Total Price = price+discount+coupon_discount',
  `discount` float DEFAULT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `variant_id` text DEFAULT NULL,
  `add_on` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `affiliate_code` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `site_id`, `vendor_id`, `order_id`, `marketplace_id`, `item_id`, `quantity`, `price`, `discount`, `order_date`, `variant_id`, `add_on`, `status`, `affiliate_code`) VALUES
(1, 2, 0, 9, 5, 21, 1, 719.1, 79.9, '2022-05-07 17:29:06', '60', '', 0, NULL),
(2, 2, 0, 9, 16, 14, 1, 12000, 0, '2022-05-07 17:29:06', '', '', 0, NULL),
(3, 2, 0, 9, 16, 51, 1, 40604, 0, '2022-05-07 17:29:06', '', '25,26,', 0, NULL),
(4, 2, 40, 20, 5, 21, 2, 1798, 0, '2022-05-14 19:44:14', '62', '', 0, NULL),
(5, 2, 1, 26, 5, 21, 2, 1598, 0, '2022-05-25 17:42:58', '60', '', 0, ''),
(6, 2, 1, 27, 5, 21, 6, 4794, 0, '2022-05-25 17:54:11', '60', '', 0, ''),
(7, 2, 1, 28, 5, 21, 1, 899, 0, '2022-05-26 10:53:30', '62', '', 0, ''),
(8, 2, 1, 29, 5, 21, 1, 899, 0, '2022-05-26 11:03:31', '62', '', 0, '11652341511'),
(9, 2, 58, 31, 5, 22, 1, 1599, 0, '2022-05-29 17:42:32', '65', '', 0, ''),
(10, 2, 1, 32, 16, 14, 7, 84000, 0, '2022-05-30 16:03:12', '', '', 1, ''),
(11, 2, 1, 32, 16, 15, 5, 60000, 0, '2022-05-30 16:03:12', '', '', 0, ''),
(12, 2, 58, 33, 5, 24, 1, 324, 0, '2022-05-31 10:58:53', '75', '', 0, ''),
(13, 2, 58, 34, 5, 26, 1, 6438280, 0, '2022-06-02 10:24:05', '77', '', 0, ''),
(14, 2, 58, 35, 5, 21, 1, 799, 0, '2022-06-02 10:33:35', '60', '', 0, ''),
(15, 2, 58, 36, 5, 21, 1, 799, 0, '2022-07-12 11:12:02', '60', '', 0, ''),
(16, 2, 58, 37, 5, 21, 1, 799, 0, '2022-07-12 11:12:57', '60', '', 0, ''),
(17, 2, 100, 41, 16, 18, 1, 28305, 0, '2022-07-14 14:34:12', '', '', 0, ''),
(18, 2, 100, 42, 16, 18, 1, 28305, 0, '2022-07-14 14:36:52', '', '', 0, ''),
(19, 2, 100, 43, 16, 20, 1, 29563, 0, '2022-07-14 14:39:29', '', '', 0, ''),
(20, 2, 100, 44, 16, 20, 1, 29563, 0, '2022-07-14 14:39:54', '', '', 0, ''),
(21, 2, 100, 45, 16, 22, 1, 30821, 0, '2022-07-14 14:53:10', '', '', 0, ''),
(22, 2, 100, 46, 16, 68, 1, 379.05, 19.95, '2022-07-14 16:28:40', '', '', 0, ''),
(23, 2, 1, 72, 5, 21, 1, 899, 0, '2022-07-18 18:29:36', '62', '', 0, '11658143354');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
