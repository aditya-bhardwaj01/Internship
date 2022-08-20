-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2022 at 01:37 PM
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `item_type` text NOT NULL,
  `item_id` text NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `quantity` text NOT NULL,
  `variant` text DEFAULT NULL,
  `variant_value` text DEFAULT NULL,
  `amount` text NOT NULL,
  `paid_from_ewallet` text DEFAULT NULL,
  `paid_from_ebanking` text DEFAULT NULL,
  `item_discount` text NOT NULL,
  `coupon_id` text DEFAULT NULL,
  `coupon_discount` text DEFAULT NULL,
  `payment_status` text NOT NULL,
  `payment_mode` text NOT NULL,
  `address` text DEFAULT NULL,
  `order_status` text NOT NULL,
  `refer_by` text DEFAULT NULL,
  `referral_id` text DEFAULT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `site_id`, `item_type`, `item_id`, `vendor_id`, `quantity`, `variant`, `variant_value`, `amount`, `paid_from_ewallet`, `paid_from_ebanking`, `item_discount`, `coupon_id`, `coupon_discount`, `payment_status`, `payment_mode`, `address`, `order_status`, `refer_by`, `referral_id`, `order_date`, `updated_date`) VALUES
(1, 2, '5', '21', 1, '1', '60', NULL, '799', '0', '0', '0', '', '0', 'PENDING', 'PAYTM', '3', 'PENDING', '', '', '2022-04-29 16:31:41', '2022-04-29 16:31:41'),
(2, 2, '5', '21', 1, '1', '60', NULL, '799', '0', '0', '0', '', '0', 'PENDING', 'COD', '3', 'PENDING', '', '', '2022-04-29 16:32:16', '2022-04-29 16:32:16'),
(3, 2, '5,5', '21,21', 1, '1,1', '60,61', NULL, '1473.1', '0', '0', '74.9', '', '0', 'PENDING', 'PAYTM', '3', 'PENDING', '', '', '2022-04-30 06:27:03', '2022-04-30 06:27:03'),
(4, 2, '5,5', '21,21', 1, '1,1', '60,61', NULL, '1473.1', '0', '0', '74.9', '', '0', 'PENDING', 'PAYTM', '3', 'PENDING', '', '', '2022-04-30 06:31:01', '2022-04-30 06:31:01'),
(5, 2, '5,16', '21,50', 42, '2,3', '60,', NULL, '259862', '0', '0', '0', '', '0', 'PENDING', 'PAYTM', '11', 'PENDING', '', '', '2022-05-05 18:35:22', '2022-05-05 18:35:22'),
(6, 2, '5,16', '21,50', 42, '2,3', '60,', NULL, '259862', '0', '0', '0', '', '0', 'PENDING', 'PAYTM', '11', 'PENDING', '', '', '2022-05-05 18:39:40', '2022-05-05 18:39:40'),
(7, 2, '5,16', '21,50', 42, '2,3', '60,', NULL, '259702.2', '0', '0', '159.8', '', '0', 'PAID', 'PAYTM', '11', 'PENDING', '', '', '2022-05-05 18:45:44', '2022-05-05 18:45:44'),
(8, 2, '5,16', '21,50', 42, '1,1', '60,', NULL, '86807.1', '0', '0', '79.9', '', '0', 'PAID', 'PAYTM', '11', 'PENDING', '', '', '2022-05-05 19:33:53', '2022-05-05 19:33:53'),
(9, 2, '5,16,16', '21,14,51', 42, '1,1,1', '60,,+25+26', NULL, '53323.1', '0', '0', '79.9', '', '0', 'PAID', 'PAYTM', '11', 'PENDING', '', '', '2022-05-07 17:29:06', '2022-05-07 17:29:06'),
(10, 2, '2', '2', 42, '1', NULL, NULL, '444', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-10 15:51:17', '2022-05-10 15:51:17'),
(11, 2, '2', '2', 1, '1', NULL, NULL, '444', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-11 16:56:00', '2022-05-11 16:56:00'),
(12, 2, '2', '1', 1, '1', NULL, NULL, '222', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-11 17:01:50', '2022-05-11 17:01:50'),
(13, 2, '2', '4', 1, '1', NULL, NULL, '888', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-11 17:25:59', '2022-05-11 17:25:59'),
(14, 2, '2', '65', 1, '1', NULL, NULL, '14430', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-11 17:32:47', '2022-05-11 17:32:47'),
(15, 2, 'MEMBERSHIP', '1', 1, '1', NULL, NULL, '999', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-13 13:19:28', '2022-05-13 13:19:28'),
(16, 2, 'PACKAGE', '1', 1, '1', NULL, NULL, '999', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-13 14:03:19', '2022-05-13 14:03:19'),
(17, 2, '2', '2,', -1, '1', NULL, NULL, '444', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-14 16:47:19', '2022-05-14 16:47:19'),
(18, 2, '2', '1,', 40, '1', NULL, NULL, '222', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-14 19:35:41', '2022-05-14 19:35:41'),
(19, 2, 'PACKAGE', '1', 40, '1', NULL, NULL, '999', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-14 19:36:51', '2022-05-14 19:36:51'),
(20, 2, '5', '21', 40, '2', '62', NULL, '1798', '0', '0', '0', '', '0', 'PAID', 'PAYTM', '12', 'PENDING', '', '', '2022-05-14 19:44:14', '2022-05-14 19:44:14'),
(21, 2, '2', '1,2,4,', -1, '1', NULL, NULL, '1554', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-16 10:26:11', '2022-05-16 10:26:11'),
(22, 2, '2', '70,', -1, '1', NULL, NULL, '15540', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-16 10:26:45', '2022-05-16 10:26:45'),
(23, 2, 'PACKAGE', '2', 1, '1', NULL, NULL, '500', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-16 17:32:19', '2022-05-16 17:32:19'),
(24, 2, '2', '82', 1, '1', NULL, NULL, '18204', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-19 11:57:21', '2022-05-19 11:57:21'),
(25, 2, '5', '21', 1, '2', '60', NULL, '1598', '0', '0', '0', '', '0', 'PENDING', 'PAYTM', '3', 'PENDING', '', '', '2022-05-25 17:39:52', '2022-05-25 17:39:52'),
(26, 2, '5', '21', 1, '2', '60', NULL, '1598', '0', '0', '0', '', '0', 'PAID', 'PAYTM', '3', 'PENDING', '', '', '2022-05-25 17:42:58', '2022-05-25 17:42:58'),
(27, 2, '5', '21', 1, '6', '60', NULL, '4794', '0', '0', '0', '', '0', 'PAID', 'PAYTM', '3', 'PENDING', '', '', '2022-05-25 17:54:11', '2022-05-25 17:54:11'),
(28, 2, '5', '21', 1, '1', '62', NULL, '899', '0', '0', '0', '', '0', 'PAID', 'PAYTM', '3', 'PENDING', '', '', '2022-05-26 10:53:30', '2022-05-26 10:53:30'),
(29, 2, '5', '21', 1, '1', '62', NULL, '828.9', '70', '0.1', '0', '', '0', 'PAID', 'PAYTM', '3', 'PENDING', '', '', '2022-05-26 11:03:31', '2022-05-26 11:03:31'),
(30, 2, '2', '1,2,', -1, '1', NULL, NULL, '666', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-05-27 13:29:02', '2022-05-27 13:29:02'),
(31, 2, '5', '22', 58, '1', '65', NULL, '1599', '0', '0', '0', '', '0', 'PENDING', 'PAYTM', '13', 'PENDING', '', '', '2022-05-29 17:42:32', '2022-05-29 17:42:32'),
(32, 2, '16,16', '14,15', 1, '7,5', ',', NULL, '144000', '0', '0', '0', '', '0', 'PAID', 'PAYTM', '3', 'PENDING', '', '', '2022-05-30 16:03:12', '2022-05-30 16:03:12'),
(33, 2, '5', '24', 58, '1', '75', NULL, '324', '0', '0', '0', '', '0', 'PENDING', 'COD', '14', 'PENDING', '', '', '2022-05-31 10:58:53', '2022-05-31 10:58:53'),
(34, 2, '5', '26', 58, '1', '77', NULL, '6438280', '0', '0', '0', '', '0', 'PENDING', 'PAYTM', '14', 'PENDING', '', '', '2022-06-02 10:24:05', '2022-06-02 10:24:05'),
(35, 2, '5', '21', 58, '1', '60', NULL, '799', '0', '0', '0', '', '0', 'PENDING', 'PAYTM', '14', 'PENDING', '', '', '2022-06-02 10:33:35', '2022-06-02 10:33:35'),
(36, 2, '5', '21', 58, '1', '60', NULL, '799', '0', '0', '0', '', '0', 'PENDING', 'PAYTM', '14', 'PENDING', '', '', '2022-07-12 11:12:02', '2022-07-12 11:12:02'),
(37, 2, '5', '21', 58, '1', '60', NULL, '799', '0', '0', '0', '', '0', 'PENDING', 'COD', '14', 'PENDING', '', '', '2022-07-12 11:12:57', '2022-07-12 11:12:57'),
(38, 2, 'PACKAGE', '2', 1, '1', NULL, NULL, '500', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-12 19:14:42', '2022-07-12 19:14:42'),
(39, 2, 'PACKAGE', '1', 1, '1', NULL, NULL, '999', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-13 19:06:17', '2022-07-13 19:06:17'),
(40, 2, '', '', 100, '', '', NULL, '0', '0', '0', '0', '', '0', 'PAID', 'PAYTM', '15', 'PENDING', '', '', '2022-07-14 14:32:53', '2022-07-14 14:32:53'),
(41, 2, '16', '18', 100, '1', '', NULL, '28305', '0', '0', '0', '', '0', 'PENDING', 'PAYTM', '15', 'PENDING', '', '', '2022-07-14 14:34:12', '2022-07-14 14:34:12'),
(42, 2, '16', '18', 100, '1', '', NULL, '28305', '0', '0', '0', '', '0', 'PENDING', 'COD', '15', 'PENDING', '', '', '2022-07-14 14:36:52', '2022-07-14 14:36:52'),
(43, 2, '16', '20', 100, '1', '', NULL, '29563', '0', '0', '0', '', '0', 'PENDING', 'PAYTM', '15', 'PENDING', '', '', '2022-07-14 14:39:29', '2022-07-14 14:39:29'),
(44, 2, '16', '20', 100, '1', '', NULL, '29563', '0', '0', '0', '', '0', 'PENDING', 'COD', '15', 'PENDING', '', '', '2022-07-14 14:39:54', '2022-07-14 14:39:54'),
(45, 2, '16', '22', 100, '1', '', NULL, '30821', '0', '0', '0', '', '0', 'PENDING', 'COD', '16', 'PENDING', '', '', '2022-07-14 14:53:10', '2022-07-14 14:53:10'),
(46, 2, '16', '68', 100, '1', '', NULL, '379.05', '0', '0', '19.95', '', '0', 'PENDING', 'COD', '16', 'PENDING', '', '', '2022-07-14 16:28:40', '2022-07-14 16:28:40'),
(47, 2, 'PACKAGE', '1', -1, '1', NULL, NULL, '999', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-14 17:53:40', '2022-07-14 17:53:40'),
(48, 2, 'PACKAGE', '1', -1, '1', NULL, NULL, '999', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-14 17:57:04', '2022-07-14 17:57:04'),
(49, 2, 'PACKAGE', '1', -1, '1', NULL, NULL, '999', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-14 17:59:22', '2022-07-14 17:59:22'),
(50, 2, 'MEMBERSHIP', '4', 1, '1', NULL, NULL, '2000', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 15:11:03', '2022-07-15 15:11:03'),
(51, 2, 'MEMBERSHIP', '4', 1, '1', NULL, NULL, '2000', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 15:13:52', '2022-07-15 15:13:52'),
(52, 2, 'PACKAGE', '2', 1, '1', NULL, NULL, '500', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 15:14:54', '2022-07-15 15:14:54'),
(53, 2, 'MEMBERSHIP', '3', 1, '1', NULL, NULL, '1000', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 15:21:18', '2022-07-15 15:21:18'),
(54, 2, 'MEMBERSHIP', '2', 1, '1', NULL, NULL, '123', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 15:25:04', '2022-07-15 15:25:04'),
(55, 2, 'MEMBERSHIP', '3', 1, '1', NULL, NULL, '1000', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 15:30:56', '2022-07-15 15:30:56'),
(56, 2, 'MEMBERSHIP', '4', 1, '1', NULL, NULL, '2000', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 15:36:44', '2022-07-15 15:36:44'),
(57, 2, 'MEMBERSHIP', '1', 1, '1', NULL, NULL, '1000', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 15:48:59', '2022-07-15 15:48:59'),
(58, 2, 'MEMBERSHIP', '1', 1, '1', NULL, NULL, '1000', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 15:58:30', '2022-07-15 15:58:30'),
(59, 2, 'PACKAGE', '1', 100, '1', NULL, NULL, '999', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 16:29:41', '2022-07-15 16:29:41'),
(60, 2, 'PACKAGE', '3', 100, '1', NULL, NULL, '566', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 16:30:24', '2022-07-15 16:30:24'),
(61, 2, 'PACKAGE', '3', 1, '1', NULL, NULL, '566', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 16:33:47', '2022-07-15 16:33:47'),
(62, 2, 'PACKAGE', '4', 100, '1', NULL, NULL, '1000', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 16:49:51', '2022-07-15 16:49:51'),
(63, 2, 'PACKAGE', '9', 100, '1', NULL, NULL, '1200', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-15 16:51:20', '2022-07-15 16:51:20'),
(64, 2, 'PACKAGE', '2', 100, '1', NULL, NULL, '500', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-16 14:07:27', '2022-07-16 14:07:27'),
(65, 2, 'PACKAGE', '5', -1, '1', NULL, NULL, '1000', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-16 16:05:23', '2022-07-16 16:05:23'),
(66, 2, 'PACKAGE', '4', 100, '1', NULL, NULL, '1000', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-16 16:05:51', '2022-07-16 16:05:51'),
(67, 2, 'PACKAGE', '1', 100, '1', NULL, NULL, '999', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-16 16:07:04', '2022-07-16 16:07:04'),
(68, 2, 'PACKAGE', '1', 5, '1', NULL, NULL, '999', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-18 11:44:45', '2022-07-18 11:44:45'),
(69, 2, 'PACKAGE', '3', 5, '1', NULL, NULL, '566', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-18 11:45:36', '2022-07-18 11:45:36'),
(70, 2, 'PACKAGE', '2', 5, '1', NULL, NULL, '500', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-18 11:50:27', '2022-07-18 11:50:27'),
(71, 2, 'PACKAGE', '4', 5, '1', NULL, NULL, '1000', NULL, NULL, '0', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-18 11:51:35', '2022-07-18 11:51:35'),
(72, 2, '5', '21', 1, '1', '62', NULL, '499', '400', '0', '0', '', '0', 'PAID', 'PAYTM', '3', 'PENDING', '', '', '2022-07-18 18:29:36', '2022-07-18 18:29:36'),
(73, 2, '2', '46,', -1, '1', NULL, NULL, '10212', NULL, NULL, '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-07-19 12:34:40', '2022-07-19 12:34:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
