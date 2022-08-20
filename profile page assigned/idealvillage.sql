-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 12:05 PM
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
-- Table structure for table `addon`
--

CREATE TABLE `addon` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `type` text NOT NULL,
  `item_id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` text DEFAULT NULL,
  `image_url` text DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addon`
--

INSERT INTO `addon` (`id`, `site_id`, `marketplace_id`, `type`, `item_id`, `title`, `quantity`, `price`, `image_url`, `created_date`) VALUES
(45, 2, 15, 'ADDON', 50, 'FIRST', 10, '5000', NULL, '2022-04-25 16:03:02'),
(46, 2, 15, 'ADDON', 50, 'SECOND', 10, '5000', NULL, '2022-04-25 16:03:02'),
(47, 2, 15, 'ADDON', 50, 'THIRD', 10, '5000', NULL, '2022-04-25 16:03:02'),
(52, 2, 15, 'ADDON', 51, 'add on1 ', 12, '12', NULL, '2022-04-25 16:40:28'),
(53, 2, 15, 'ADDON', 51, 'add on 2', 13, '13', NULL, '2022-04-25 16:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `landmark` text NOT NULL,
  `pincode` text NOT NULL,
  `mobile` text NOT NULL,
  `additional_mobile` text DEFAULT NULL,
  `address_type` text DEFAULT NULL,
  `availability` text DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `site_id`, `vendor_id`, `name`, `address`, `landmark`, `pincode`, `mobile`, `additional_mobile`, `address_type`, `availability`, `created_date`) VALUES
(3, 2, 1, 'Form?Submit', 'Hathras Uttar Pradesh??India', 'fdsfdsf', '204101', '9999999999', '348329432', 'Work', 'Monday-Friday 9am-6pm?Open on Sunday', '2022-03-07 06:39:45'),
(6, 2, 38, 'Vikas?Kumar', 'Agra?-?India', 'Landmark', '204101', '9045097609', '', 'Home', 'Monday-Friday 9am-6pm?Open on Saturday?Open on Sunday', '2022-04-16 15:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `otp` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `mobile` text NOT NULL,
  `whatsapp` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `pincode` text NOT NULL,
  `category` text NOT NULL,
  `sub_category` text NOT NULL,
  `profile_pic` text NOT NULL,
  `status` int(11) NOT NULL,
  `verified` int(11) NOT NULL,
  `login_status` text NOT NULL,
  `last_online` datetime NOT NULL DEFAULT current_timestamp(),
  `verify_code` text NOT NULL,
  `password` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `otp_create_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `vendor_id`, `site_id`, `name`, `email`, `otp`, `user_name`, `mobile`, `whatsapp`, `city`, `state`, `pincode`, `category`, `sub_category`, `profile_pic`, `status`, `verified`, `login_status`, `last_online`, `verify_code`, `password`, `created_date`, `otp_create_time`) VALUES
(1, 3, 2, 'Vikas Kumar', 'vkg360.vikas@gmail.com', -1, 'vikas', '9045097609', '9045097609', 'Agra', 'UP', '204101', 'Category', 'Sub-category', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649169625/nfy5wx3qlh6qokmljtqk.jpg', 1, 1, 'Login', '2022-04-23 15:33:52', '$2y$10$mow.XSpdsISDTrL0qiq.Oeu/VD1VdMOCq.GdQ67R../MsnqIOE9vW', '$2y$10$wP5LZfff74.e8Q0bxLxplOULau.pMaNQAdJJUOXNjR2SOrp/5AGdO', '2022-01-25 15:53:05', '2022-01-26 03:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `account_name` varchar(60) NOT NULL,
  `account_number` varchar(40) NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `branch_name` varchar(70) NOT NULL,
  `default` tinyint(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

CREATE TABLE `beneficiary` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `charity_id` int(11) NOT NULL,
  `beneficiary_name` text NOT NULL,
  `pic` text NOT NULL,
  `ammount` text NOT NULL,
  `about_beneficiary` text NOT NULL,
  `benificiary_type` varchar(100) NOT NULL,
  `benificiary_duration` varchar(100) NOT NULL,
  `unit` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beneficiary`
--

INSERT INTO `beneficiary` (`id`, `site_id`, `charity_id`, `beneficiary_name`, `pic`, `ammount`, `about_beneficiary`, `benificiary_type`, `benificiary_duration`, `unit`, `created_date`) VALUES
(6, 1, 1, 'dd', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649050785/bctnryeiujm3jbhedu26.jpg', '2', 'fbbd', 'Full Eductaion', 'Per Session', 0, '0000-00-00 00:00:00'),
(7, 1, 1, 'cxvv', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649050787/sa6hkfgiackzfrnkxqjw.jpg', '6', 'dvdv', 'Daily Meal', 'Per Meal', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `btbprice`
--

CREATE TABLE `btbprice` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `entry_type` text NOT NULL,
  `min_qty` int(11) NOT NULL,
  `max_qty` int(11) DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `price` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `btbprice`
--

INSERT INTO `btbprice` (`id`, `site_id`, `vendor_id`, `product_id`, `entry_type`, `min_qty`, `max_qty`, `unit`, `price`, `created_date`) VALUES
(60, 2, 1, 563, 'BTBPRICE', 4, 5, 'Chain/Chains', '6', '2022-02-26 05:57:13'),
(61, 2, 1, 563, 'BTBCUSTPRICE', 10, 11, 'Chain/Chains', '12', '2022-02-26 05:57:13'),
(62, 2, 1, 563, 'BTBSAMPLEPRICE', 16, 17, 'Case/Cases', '18', '2022-02-26 05:57:13'),
(63, 2, 1, 563, 'BULKPRICE', 0, 0, '', '', '2022-02-26 05:57:13'),
(64, 2, 0, 564, 'BTBPRICE', 1, 2, 'Acre/Acres', '3', '2022-02-26 07:12:47'),
(65, 2, 0, 564, 'BTBPRICE', 4, 5, 'Acre/Acres', '6', '2022-02-26 07:12:47'),
(66, 2, 0, 564, 'BTBCUSTPRICE', 7, 8, 'Ampere/Amperes', '9', '2022-02-26 07:12:47'),
(67, 2, 0, 564, 'BTBCUSTPRICE', 10, 11, 'Blade/Blades', '12', '2022-02-26 07:12:47'),
(68, 2, 0, 564, 'BTBSAMPLEPRICE', 13, 14, 'Carat/Carats', '15', '2022-02-26 07:12:47'),
(69, 2, 0, 564, 'BTBSAMPLEPRICE', 16, 17, 'Chain/Chains', '18', '2022-02-26 07:12:47'),
(70, 2, 0, 564, 'BULKPRICE', 19, 0, '', '20', '2022-02-26 07:12:47'),
(71, 2, 0, 564, 'BULKPRICE', 21, 0, '', '22', '2022-02-26 07:12:47'),
(72, 2, 3, 565, 'BTBPRICE', 0, 0, 'Unit', '', '2022-02-26 07:19:17'),
(73, 2, 3, 565, 'BTBCUSTPRICE', 0, 0, 'Select Type', '', '2022-02-26 07:19:17'),
(74, 2, 3, 565, 'BTBSAMPLEPRICE', 0, 0, 'Select Type', '', '2022-02-26 07:19:17'),
(75, 2, 3, 565, 'BULKPRICE', 0, 0, '', '', '2022-02-26 07:19:17'),
(76, 2, 3, 567, 'BTBPRICE', 0, 0, 'Unit', '', '2022-02-27 02:10:01'),
(77, 2, 3, 567, 'BTBCUSTPRICE', 0, 0, 'Select Type', '', '2022-02-27 02:10:01'),
(78, 2, 3, 567, 'BTBSAMPLEPRICE', 0, 0, 'Select Type', '', '2022-02-27 02:10:01'),
(79, 2, 3, 567, 'BULKPRICE', 0, 0, '', '', '2022-02-27 02:10:01'),
(92, 2, 1, 564, 'BTBPRICE', 0, 0, 'Unit', '', '2022-02-27 03:12:33'),
(93, 2, 1, 564, 'BTBCUSTPRICE', 0, 0, 'Select Type', '', '2022-02-27 03:12:33'),
(94, 2, 1, 564, 'BTBSAMPLEPRICE', 0, 0, 'Select Type', '', '2022-02-27 03:12:33'),
(95, 2, 1, 564, 'BULKPRICE', 0, 0, '', '', '2022-02-27 03:12:33'),
(96, 2, 1, 567, 'BTBPRICE', 0, 0, 'Unit', '', '2022-02-27 06:08:08'),
(97, 2, 1, 567, 'BTBCUSTPRICE', 0, 0, 'Select Type', '', '2022-02-27 06:08:08'),
(98, 2, 1, 567, 'BTBSAMPLEPRICE', 0, 0, 'Select Type', '', '2022-02-27 06:08:08'),
(99, 2, 1, 567, 'BULKPRICE', 0, 0, '', '', '2022-02-27 06:08:08'),
(100, 2, 1, 566, 'BTBPRICE', 0, 0, 'Unit', '', '2022-02-27 07:12:50'),
(101, 2, 1, 566, 'BTBCUSTPRICE', 0, 0, 'Select Type', '', '2022-02-27 07:12:50'),
(102, 2, 1, 566, 'BTBSAMPLEPRICE', 0, 0, 'Select Type', '', '2022-02-27 07:12:50'),
(103, 2, 1, 566, 'BULKPRICE', 0, 0, '', '', '2022-02-27 07:12:50'),
(108, 2, 1, 0, 'BTBPRICE', 0, 0, 'Unit', '', '2022-03-09 06:52:54'),
(109, 2, 1, 0, 'BTBCUSTPRICE', 0, 0, 'Select Type', '', '2022-03-09 06:52:54'),
(110, 2, 1, 0, 'BTBSAMPLEPRICE', 0, 0, 'Select Type', '', '2022-03-09 06:52:54'),
(111, 2, 1, 0, 'BULKPRICE', 0, 0, '', '', '2022-03-09 06:52:54'),
(112, 2, 1, 569, 'BTBPRICE', 0, 0, 'Unit', '', '2022-03-31 08:22:53'),
(113, 2, 1, 569, 'BTBCUSTPRICE', 0, 0, 'Select Type', '', '2022-03-31 08:22:53'),
(114, 2, 1, 569, 'BTBSAMPLEPRICE', 0, 0, 'Select Type', '', '2022-03-31 08:22:53'),
(115, 2, 1, 569, 'BULKPRICE', 0, 0, '', '', '2022-03-31 08:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `cart_n_wishlist`
--

CREATE TABLE `cart_n_wishlist` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `save_type` text NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `variant_id` varchar(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT 0,
  `bundle` int(11) NOT NULL DEFAULT 0,
  `save_status` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_n_wishlist`
--

INSERT INTO `cart_n_wishlist` (`id`, `site_id`, `vendor_id`, `save_type`, `marketplace_id`, `item_id`, `variant_id`, `quantity`, `bundle`, `save_status`, `created_date`) VALUES
(1, 2, 1, 'WISHLIST', 5, 21, '55', 1, 0, 0, '2022-04-14 19:33:38'),
(2, 2, 1, 'CART', 5, 21, '55', 0, 0, 0, '2022-04-14 20:07:55'),
(3, 2, 38, 'CART', 5, 21, '56', 0, 0, 0, '2022-04-15 15:16:12'),
(4, 2, 38, 'CART', 5, 21, '55', 0, 0, 0, '2022-04-15 15:16:20'),
(6, 2, 38, 'CART', 5, 21, '54', 0, 0, 0, '2022-04-15 15:42:42'),
(7, 2, 1, 'CART', 5, 21, '61', 1, 0, 1, '2022-04-15 18:52:25'),
(8, 2, 1, 'WISHLIST', 5, 21, '61', 0, 0, 0, '2022-04-15 18:53:56'),
(9, 2, 1, 'CART', 5, 22, '64', 0, 0, 0, '2022-04-15 18:55:59'),
(10, 2, 1, 'CART', 5, 21, '60', 0, 0, 0, '2022-04-15 18:58:17'),
(11, 2, 1, 'WISHLIST', 5, 21, '60', 0, 0, 0, '2022-04-15 18:58:28'),
(12, 2, 38, 'CART', 5, 21, '60', 0, 0, 0, '2022-04-16 14:31:59'),
(13, 2, 38, 'CART', 5, 21, '61', 0, 0, 0, '2022-04-16 14:54:55'),
(14, 2, 38, 'CART', 5, 22, '64', 0, 0, 0, '2022-04-16 14:55:10'),
(15, 2, 38, 'CART', 5, 21, '62', 0, 0, 0, '2022-04-16 15:14:51'),
(16, 2, 38, 'CART', 5, 22, '65', 0, 0, 0, '2022-04-16 15:14:55'),
(17, 2, 1, 'CART', 5, 22, '65', 0, 0, 0, '2022-04-21 17:48:49'),
(18, 2, 1, 'WISHLIST', 5, 22, '64', 0, 0, 0, '2022-04-21 20:11:37'),
(19, 2, 1, 'WISHLIST', 5, 22, '65', 0, 0, 0, '2022-04-21 20:12:06'),
(20, 2, 38, 'WISHLIST', 5, 21, '60', 0, 0, 0, '2022-04-22 15:52:29'),
(21, 2, 38, 'WISHLIST', 5, 21, '61', 0, 0, 0, '2022-04-22 15:52:29'),
(22, 2, 38, 'WISHLIST', 5, 22, '64', 0, 0, 0, '2022-04-22 15:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `cashback_rules`
--

CREATE TABLE `cashback_rules` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL DEFAULT 2,
  `title` text NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `validity` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `checkbox` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashback_rules`
--

INSERT INTO `cashback_rules` (`id`, `site_id`, `title`, `start_date`, `end_date`, `amount`, `validity`, `created_date`, `checkbox`) VALUES
(18, 2, 'Vouchers', '2011-08-27 13:45:00', '2021-10-29 13:45:00', 20, 10, '2021-10-05 19:38:49', 0),
(29, 2, '50 Rs Cashback', '2021-12-30 00:00:00', '2029-06-06 06:21:25', 50, 15, '2021-10-06 14:46:57', 0),
(57, 2, '100 Rs Coupon', '2011-08-19 13:45:00', '2031-08-19 13:45:00', 100, 7, '2021-10-07 15:37:30', 0),
(58, 2, '20rs Cashback', '2021-10-09 13:45:00', '2022-12-31 13:45:00', 20, 5, '2021-10-09 14:57:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `category_type` text NOT NULL,
  `category_title` text NOT NULL,
  `parent_category` text DEFAULT NULL,
  `image_url` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `show_homepage` text NOT NULL,
  `show_footer` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `site_id`, `marketplace_id`, `category_type`, `category_title`, `parent_category`, `image_url`, `icon`, `show_homepage`, `show_footer`, `created_date`) VALUES
(15, 2, 5, 'main', 'Fashion', NULL, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649674496/wjijt2h78aiiwfhhmyrt.jpg', '', '1', '1', '2022-03-02 00:00:00'),
(18, 2, 5, 'main', 'Decoration', '', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649674898/omxjh2mcsisk3qzqhuse.jpg', '', '0', '0', '2022-03-03 00:00:00'),
(19, 2, 5, 'main', 'Beverages', NULL, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647246827/zw2mpkz2q0blzk8shepb.jpg', '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-03-03 00:00:00'),
(20, 2, 15, 'sub_category', 'Brain', 'Nerves', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-03-03 00:00:00'),
(25, 2, 15, 'main', 'Nerves', 'Brain', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-03-03 00:00:00'),
(26, 2, 15, 'main', 'vskjadskjahd', 'null', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647786901/mapkxpe7l3fnf3dbmxyv.jpg', NULL, 'undefined', 'undefined', '2022-03-20 00:00:00'),
(27, 2, 5, 'main', 'Beverages', 'null', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649160729/yo59wlt16ukpor56pbdw.jpg', NULL, 'undefined', 'undefined', '2022-04-05 00:00:00'),
(28, 2, 5, 'sub_category', 'Tea', 'Beverages', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-05 00:00:00'),
(29, 2, 5, 'sub_category', 'Coffee', 'Beverages', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649160958/mkfixwiitvqqmqhaxf00.jpg', NULL, '1', '1', '2022-04-05 00:00:00'),
(31, 2, 5, 'child_category', 'Green Tea', 'Tea', NULL, '<i class=\"ti ti-hands-open\"></i>', '1', '1', '2022-04-05 18:13:48'),
(34, 2, 5, 'child_category', 'Simple Wali', 'Tea', NULL, '<i class=\"ti ti-hands-open\"></i>', '1', '1', '2022-04-05 18:32:29'),
(35, 2, 15, 'main', 'Website', 'null', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649244791/jzndgy8wcbtqkintj0zr.jpg', NULL, 'undefined', 'undefined', '2022-04-06 17:03:10'),
(36, 2, 15, 'sub_category', 'Static', 'Website', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-06 17:03:56'),
(37, 2, 15, 'sub_category', 'Dynamic', 'Website', NULL, '<i class=\"ti ti-arrow-down\"></i>', '1', '1', '2022-04-06 17:04:15'),
(38, 2, 15, 'child_category', 'Simple (Only Design)', 'Static', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-06 17:04:55'),
(39, 2, 15, 'child_category', 'CSS Effects', 'Static', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-06 17:05:14'),
(40, 2, 15, 'child_category', 'Half-Duplex', 'Dynamic', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-06 17:05:58'),
(41, 2, 15, 'child_category', 'Full-Duplex', 'Dynamic', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-06 17:06:08'),
(42, 2, 15, 'child_category', 'Simplex', 'Dynamic', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-06 17:06:18'),
(43, 2, 5, 'sub_category', 'Men', 'Fashion', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-06 18:04:21'),
(44, 2, 5, 'sub_category', 'Kids', 'Fashion', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-06 18:04:33'),
(45, 2, 5, 'child_category', 'Casual', 'Men', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-06 18:05:01'),
(46, 2, 5, 'child_category', 'Formal', 'Men', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-06 18:05:12'),
(47, 2, 5, 'child_category', 'Sports', 'Men', NULL, '<i class=\"ti ti-arrow-up\"></i>', '1', '1', '2022-04-06 18:05:33'),
(48, 2, 5, 'sub_category', 'Women', 'Fashion', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649514504/bchzkagptjovgzbxo8yw.jpg', NULL, '1', '1', '2022-04-09 19:57:15'),
(49, 2, 5, 'child_category', 'Make-Up', 'Women', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649675489/qeaz3oqgmy5m5jtt2n6y.jpg', NULL, '1', '1', '2022-04-11 16:40:46'),
(50, 2, 5, 'sub_category', 'Soft Drinks', 'Beverages', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649675563/gsngwtj6kujyrukyvgjx.jpg', NULL, '1', '1', '2022-04-11 16:42:01'),
(51, 2, 5, 'child_category', 'Acessories', 'Kids', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649676004/lwt1kvlutaz7xuzp5evi.jpg', NULL, '1', '1', '2022-04-11 16:49:24'),
(53, 2, 5, 'main', 'Electronics', 'null', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650454936/wdls70mueyxc9ayngelw.jpg', NULL, 'undefined', 'undefined', '2022-04-20 17:11:30'),
(54, 2, 5, 'sub_category', 'Mobile & Tabs', 'Electronics', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650454980/liyfgpqjnnbnheowdwcf.jpg', NULL, '1', '1', '2022-04-20 17:12:12'),
(55, 2, 5, 'child_category', 'Mobile', 'Mobile & Tabs', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650456535/d3nyybkrxoomjbvd9ffe.jpg', NULL, '1', '1', '2022-04-20 17:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE latin1_danish_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `coupon_code` varchar(255) COLLATE latin1_danish_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `site_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `type`, `start_date`, `end_date`, `coupon_code`, `discount`, `created_date`, `site_id`) VALUES
(5, '%', '2020-06-05', '2027-06-15', 'F3VT3H', 5, '2022-03-05 09:42:26', 2),
(6, 'Flat', '2020-07-11', '2027-07-13', 'W3XZS2', 20, '2022-03-05 09:42:30', 2),
(7, 'Flat', '2020-07-23', '2020-08-13', 'NEXC8P', 10, '2021-02-13 18:17:49', 11),
(8, '%', '2020-07-22', '2020-11-21', '027G8K', 20, '2021-02-13 18:17:49', 11),
(9, '%', '2021-02-06', '2021-04-16', 'C6SZR6', 20, '2021-02-13 18:17:49', 11),
(10, '%', '2021-04-10', '2021-04-10', 'SALES123', 20, '2021-04-08 18:11:44', 2),
(12, '%', '2022-01-22', '2022-02-04', '96JLZV', 11, '2022-01-13 19:47:49', 3),
(13, 'Flat', '2022-01-06', '2031-01-02', 'AFT568IO', 30, '2022-03-08 09:13:15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `discount_for` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `discount_percent` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `site_id`, `marketplace_id`, `discount_for`, `product_id`, `variant_id`, `discount_percent`, `created_date`) VALUES
(1, 2, 5, 'GENERAL', 21, 61, 10, '2022-04-16 17:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `ewallet`
--

CREATE TABLE `ewallet` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL DEFAULT -1,
  `buyer_id` int(11) NOT NULL DEFAULT -1,
  `affiliate_id` int(11) NOT NULL DEFAULT -1,
  `start` int(11) NOT NULL DEFAULT -1,
  `cashback` int(11) NOT NULL,
  `validity` int(11) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ewallet`
--

INSERT INTO `ewallet` (`id`, `vendor_id`, `buyer_id`, `affiliate_id`, `start`, `cashback`, `validity`, `added_date`) VALUES
(24, 1, -1, -1, -1, 9614, 36500, '2022-03-24 00:00:00'),
(28, 1, -1, -1, -1, 500, 36500, '2022-03-30 00:00:00'),
(29, 1, -1, -1, -1, 600, 36500, '2022-03-30 00:00:00'),
(30, 1, -1, -1, -1, 400, 36500, '2022-03-30 00:00:00'),
(31, 1, -1, -1, -1, 5000, 36500, '2022-03-30 00:00:00'),
(32, 0, -1, -1, -1, 0, 36500, '2022-04-03 00:00:00'),
(33, 1, -1, -1, -1, 333, 36500, '2022-04-03 00:00:00'),
(34, 1, -1, -1, -1, 333, 36500, '2022-04-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `expectations`
--

CREATE TABLE `expectations` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `charity_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `cash_amount` varchar(200) NOT NULL,
  `fixed_amount` varchar(200) NOT NULL,
  `flexible_amount` varchar(200) NOT NULL,
  `raised_ammount` float NOT NULL,
  `expectation_amount` varchar(200) NOT NULL,
  `goods_name` varchar(100) NOT NULL,
  `goods_quantity` varchar(100) NOT NULL,
  `goods_desc` varchar(100) NOT NULL,
  `skills_name` varchar(100) NOT NULL,
  `assets_name` varchar(100) NOT NULL,
  `assets_usage` varchar(100) NOT NULL,
  `assets_desc` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expectations`
--

INSERT INTO `expectations` (`id`, `site_id`, `charity_id`, `type`, `cash_amount`, `fixed_amount`, `flexible_amount`, `raised_ammount`, `expectation_amount`, `goods_name`, `goods_quantity`, `goods_desc`, `skills_name`, `assets_name`, `assets_usage`, `assets_desc`, `created_date`) VALUES
(1, 2, 1, 'Goods', '1000', 'Fixed', 'Flexible', 703.25, '21', 'wfewf', '3', 'wdcew', '', '', '', '', '2022-04-04 15:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `cat_id` text NOT NULL,
  `sub_cat_id` text NOT NULL,
  `child_cat_id` text NOT NULL,
  `image` text NOT NULL,
  `variants` text NOT NULL,
  `item_name` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `site_id`, `cat_id`, `sub_cat_id`, `child_cat_id`, `image`, `variants`, `item_name`, `created_date`) VALUES
(1, 2, 'Premium', 'Tier 1', 'Study', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647948057/v9c4iiuirmoksh0qd9ta.jpg', 'Size,Color', 'T-Shirt', '2022-04-05 16:11:00'),
(2, 2, 'Beverages', 'Tea', 'Green Tea', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649164795/ssdnzfedmcpgoq7hbdzd.jpg', 'Size,Measurement Unit,Series,', 'title', '2022-04-05 18:49:04'),
(6, 2, 'Fashion', 'Kids', '', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649169625/nfy5wx3qlh6qokmljtqk.jpg', 'Size,Color,', 'Shoes', '2022-04-05 19:02:01'),
(8, 2, 'Fashion', 'Men', 'Casual', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649250034/lltrf5mbrval6zzjodmo.jpg', 'Size,Color,Fabric,Measurement Unit', 'T-Shirt', '2022-04-06 18:29:54'),
(9, 2, 'Fashion', 'Men', 'Casual', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649844204/njajkzg734zjs7zukfnd.jpg', 'Size,Color,Fabric,Measurement Unit,Package Type,Series,Style,', 'Hoodie', '2022-04-13 15:32:43'),
(10, 2, 'Fashion', 'Kids', 'Acessories', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649863001/serwdeqbv7h3lpcbqetj.jpg', 'Size,Color,Fabric,', 'Bag', '2022-04-13 20:45:58'),
(12, 2, 'Fashion', 'Women', 'Make-Up', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650018449/suzep5a1obnm6mbq0boa.jpg', 'Color,Package Type,Pack Units,', 'Lipstick', '2022-04-15 15:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_banner`
--

CREATE TABLE `marketplace_banner` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `banner_position` text NOT NULL,
  `banner_image` text NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `primary_title` text DEFAULT NULL,
  `secondary_title` text DEFAULT NULL,
  `punch_line` text DEFAULT NULL,
  `button_title` text DEFAULT NULL,
  `redirect_link` text DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `clicks` int(11) NOT NULL DEFAULT 0,
  `created_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace_banner`
--

INSERT INTO `marketplace_banner` (`id`, `group_id`, `site_id`, `vendor_id`, `banner_position`, `banner_image`, `marketplace_id`, `primary_title`, `secondary_title`, `punch_line`, `button_title`, `redirect_link`, `views`, `clicks`, `created_date`) VALUES
(11, 11, 2, 1, 'PRIMARY', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647869088/kywdze9shag0i39nuypx.jpg', 5, 'Car', 'Car 2', 'car 3', 'car btn', 'product_detail?pid=NDM%3D', 0, 0, '22-03-21 06:54:12'),
(12, 11, 2, 1, 'SECONDARY', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647869093/lvifncbzw3oanxfg7lr0.jpg', 5, 'tea', 'tea 2', NULL, 'tea btn', 'product_detail?pid=NTQ2', 0, 0, '22-03-21 06:54:12'),
(13, 11, 2, 1, 'TERTIARY', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647869097/yxosds9hvqyuhprw4ixh.jpg', 5, 'pink', 'pink 2', NULL, 'pink btn', 'product_detail?pid=NDM1', 0, 0, '22-03-21 06:54:12'),
(14, 11, 2, 1, 'DEALS_DAY_ADDS', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647869102/e4i6j2clkmhsl7yi0erj.jpg', 5, 'add 11', '20% Off add 12', NULL, 'add 13', 'product_detail?pid=NTU%3D', 0, 0, '22-03-21 06:54:12'),
(15, 11, 2, 1, 'DEALS_DAY_ADDS', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647869107/tjtst4yrhblvr5krngah.jpg', 5, 'Men\'s Fashion Collection add 21', '20% Off add 22', NULL, 'add 23', 'product_detail?pid=OTI%3D', 0, 0, '22-03-21 06:54:12'),
(16, 16, 2, 1, 'PRIMARY', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648028737/flrzc8gqouv2p6av64at.jpg', 5, 'agdhsjagjh', 'bsadgshagdjsha', 'djsahkjdshaj', 'akjdsj', 'product_detail?pid=MjE4', 0, 0, '22-03-23 03:15:02'),
(17, 16, 2, 1, 'SECONDARY', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648028740/pdud7hxjfozo6qqlxbkt.jpg', 5, 'Top Products', 'Soft Towel', NULL, 'Shop Now', 'undefined', 0, 0, '22-03-23 03:15:02'),
(18, 16, 2, 1, 'TERTIARY', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648028743/j9renbwj1efvx5y6s9ql.jpg', 5, 'Top Products', 'Soft Towel', NULL, 'Shop Now', 'undefined', 0, 0, '22-03-23 03:15:02'),
(19, 19, 2, 1, 'PRIMARY', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648029198/xogimmhyjyrxnyzcjh5o.jpg', 5, 'City Light', 'New Trends This Season', 'Fashion Show 2021', '', 'undefined', 0, 0, '22-03-23 03:22:41'),
(20, 19, 2, 1, 'SECONDARY', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648029204/xfhdkkabqafhdbc3uoms.jpg', 5, 'Top Products', 'Soft Towel', NULL, 'Shop Now', 'undefined', 0, 0, '22-03-23 03:22:41'),
(21, 19, 2, 1, 'TERTIARY', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648029207/prqh5huehuuzwvkmablq.jpg', 5, 'Top Products', 'Soft Towel', NULL, 'Shop Now', 'undefined', 0, 0, '22-03-23 03:22:41'),
(22, 19, 2, 1, 'DEALS_DAY_ADDS', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648029211/vphg45tguu2lnazro1dh.jpg', 5, 'Men\'s Fashion Collection', '20% Off', NULL, 'Shop Now', 'undefined', 0, 0, '22-03-23 03:22:41'),
(23, 19, 2, 1, 'DEALS_DAY_ADDS', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648029214/miwvl5pdkzy8mcgwspau.jpg', 5, 'Men\'s Fashion Collection', '20% Off', NULL, 'Shop Now', 'undefined', 0, 0, '22-03-23 03:22:41'),
(24, 19, 2, 1, 'DEALS_DAY_ADDS', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648029217/rd4cgbufji1nmoir6hb9.jpg', 5, 'undefined', 'undefined', NULL, 'Shop Now', 'undefined', 0, 0, '22-03-23 03:22:41'),
(25, 19, 2, 1, 'DEALS_DAY_ADDS', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648029221/tfi37sz2xwj9erg7dwqp.jpg', 5, 'Men\'s Fashion Collection', '20% Off', NULL, 'Shop Now', 'undefined', 0, 0, '22-03-23 03:22:41'),
(26, 19, 2, 1, 'FEATURED_CATEGORY_ADDS', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648029225/lrqoumdg2zqgkwhmmybc.jpg', 5, 'Men\'s Fashion Collection', '20% Off', NULL, 'Shop Now', 'undefined', 0, 0, '22-03-23 03:22:41'),
(27, 19, 2, 1, 'FEATURED_CATEGORY_ADDS', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1648029229/ejbllpwmd6uvf6qknege.jpg', 5, 'Men\'s Fashion Collection', '20% Off', NULL, 'Shop Now', 'undefined', 0, 0, '22-03-23 03:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_banner_helper`
--

CREATE TABLE `marketplace_banner_helper` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `data_type` text NOT NULL,
  `data_value` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace_banner_helper`
--

INSERT INTO `marketplace_banner_helper` (`id`, `group_id`, `data_type`, `data_value`, `created_date`) VALUES
(10, 11, 'WOLMART_PRODUCTS', ',567,566,565,564,563,555', '2022-03-21 06:54:12'),
(11, 11, 'DEALS_DAY_PRODUCTS', ',567,566', '2022-03-21 06:54:12'),
(12, 11, 'FEATURED_CATEGORY_PRODUCTS', ',95,96,94', '2022-03-21 06:54:12'),
(13, 16, 'WOLMART_PRODUCTS', ',567,566,565,564,563,555', '2022-03-23 03:15:02'),
(14, 16, 'DEALS_DAY_PRODUCTS', ',15', '2022-03-23 03:15:02'),
(15, 16, 'FEATURED_CATEGORY_PRODUCTS', ',21,22,24,17', '2022-03-23 03:15:02'),
(16, 16, 'TOP_CATEGORIES', '26,24', '2022-03-23 03:15:02'),
(17, 19, 'WOLMART_PRODUCTS', ',569,568,567,566,565,564,563,555', '2022-03-23 03:22:41'),
(18, 19, 'DEALS_DAY_PRODUCTS', ',567,566,554', '2022-03-23 03:22:41'),
(19, 19, 'FEATURED_CATEGORY_PRODUCTS', ',21,22,24,17', '2022-03-23 03:22:41'),
(20, 19, 'TOP_CATEGORIES', '26', '2022-03-23 03:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_business`
--

CREATE TABLE `marketplace_business` (
  `id` int(100) NOT NULL,
  `vendor_id` int(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `Business_Name` varchar(100) DEFAULT NULL,
  `Business_Desc` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(1000) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `Area_of_Expansion` varchar(100) DEFAULT NULL,
  `Max_Investment_Range` varchar(1000) DEFAULT NULL,
  `Min_Investment_range` varchar(100) NOT NULL,
  `Business_Type` varchar(100) DEFAULT NULL,
  `IP` varchar(20) DEFAULT NULL,
  `Tags` varchar(100) DEFAULT NULL,
  `Date_of_Operations` varchar(11) DEFAULT NULL,
  `Training` varchar(4) DEFAULT NULL,
  `Min_Space` int(100) DEFAULT NULL,
  `No_of_Outlets` int(11) DEFAULT NULL,
  `buissness_details` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_size` varchar(100) DEFAULT NULL,
  `sales_support` varchar(200) DEFAULT NULL,
  `logistic_support` varchar(200) DEFAULT NULL,
  `manpower_support` varchar(200) DEFAULT NULL,
  `area` varchar(2000) DEFAULT NULL,
  `brand_fee` varchar(2000) DEFAULT NULL,
  `Date_Franchising` int(100) DEFAULT NULL,
  `pc` varchar(100) DEFAULT NULL,
  `internet` varchar(100) DEFAULT NULL,
  `warehouse` varchar(100) DEFAULT NULL,
  `keyz` int(20) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `posted_by` varchar(200) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `short_title` varchar(100) NOT NULL,
  `office_space` varchar(30) NOT NULL,
  `staff` varchar(30) NOT NULL,
  `no_of_staff` varchar(100) NOT NULL,
  `Investment_range` varchar(100) NOT NULL,
  `oppurtuinty_type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_business`
--

INSERT INTO `marketplace_business` (`id`, `vendor_id`, `city`, `Business_Name`, `Business_Desc`, `logo`, `Category`, `Area_of_Expansion`, `Max_Investment_Range`, `Min_Investment_range`, `Business_Type`, `IP`, `Tags`, `Date_of_Operations`, `Training`, `Min_Space`, `No_of_Outlets`, `buissness_details`, `team_size`, `sales_support`, `logistic_support`, `manpower_support`, `area`, `brand_fee`, `Date_Franchising`, `pc`, `internet`, `warehouse`, `keyz`, `site_id`, `posted_by`, `created_date`, `user_id`, `status`, `short_title`, `office_space`, `staff`, `no_of_staff`, `Investment_range`, `oppurtuinty_type`) VALUES
(1, 3, NULL, 'New U, Beauty & WellnessLorem ipsum dolor sit amet consectetur adipisicing elit. Architecto harum bl', 'Franchise Direct\'s listings include franchises to virtually all budgets, covering a wide range of industries, throughout Australia and further afield.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1610832543/11231182540492.jpg.jpg', 'Beauty & Wellness', 'North India, South India', '5000', '', 'Franchise', NULL, 'Lifestyle, Beauty', '01/31/2021', 'yes', 2000, 10, '{\"ops\":[{\"attributes\":{\"color\":\"#666666\"},\"insert\":\"NewU Stores are lifestyle retail stores under the Company name of H & B Stores Ltd., which is a 100% subsidiary of Dabur India Ltd. NewU has an Omni channel presence in 30 cities and has built a digital presence spanning own Website and at Facebook, Twitter, Instagram, Amazon, Flipkart, Paytm, Snapdeal. In total, we have operational 72 stores in Pan India.\"},{\"insert\":\"\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '1', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-01-16 21:29:04', NULL, 1, '', '', '', '', '', ''),
(5, 3, NULL, 'PCEYE', 'PCEYE is Computer Activity Monitoring Software in India and is widely known for its unique software at affordable rates. PCEYE records everything done in a Computer in multiple formats such as snapshots, images, HTML, PDF, audio, video, text, graphics, documents, etc. PCEYE works for all businesses and industries of any size. Stop, control and manage your employees from doing unethical, illegal, unwanted & personal activities in the office.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613503810/pceye_1.png.png', 'Digaitlization', '50 - 250 Sq.ft', '5000', '', 'Franchise', NULL, 'Software,Hardware,Technology', '01/06/2021', 'yes', 250, 2, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"PCEYE\"},{\"insert\":\"\\n\"}]}', NULL, 'no', 'no', 'no', NULL, NULL, NULL, '5', 'Yes', 'NO', NULL, 2, 'vendor', '2021-02-16 19:30:11', NULL, 1, '', '', '', '', '', ''),
(6, 3, NULL, 'Advait tea and agro product pvt. ltd', 'Advait Tea & Agro Product Pvt. Ltd. (Awwal Tea), is one of the leading tea company in Tea Manufacturing and Plantation. We maintain commitment to quality and specialize in tea packaging and blending. Sourcing from gardens, we have successfully set up a modern manufacturing unit for blending and packaging. While the blending unit blends the tea to acquire the perfect taste and liquor, the packaging unit takes care of reaching to you airtight with tapped aroma and flavor. Our experienced tea blender and hygiene packing techniques adds to the extra advantage.', 'https://franchiseindia.s3.ap-south-1.amazonaws.com/franchisor/template/slider/0730/807279267.jpg', 'FMGC', 'NA', '5000', '', 'Trading', NULL, 'Agro Products,Tea & Coffee,FMGC', '', 'no', 0, 1, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Advait Tea & Agro Product Pvt. Ltd. (Awwal Tea),\"},{\"attributes\":{\"color\":\"#666666\"},\"insert\":\" is one of the leading tea company in Tea Manufacturing and Plantation. We maintain commitment to quality and specialize in tea packaging and blending. Sourcing from gardens, we have successfully set up a modern manufacturing unit for blending and packaging. While the blending unit blends the tea to acquire the perfect taste and liquor, the packaging unit takes care of reaching to you airtight with tapped aroma and flavor. Our experienced tea blender and hygiene packing techniques adds to the extra advantage.\"},{\"insert\":\"\\n\"}]}', NULL, 'no', 'no', 'no', NULL, NULL, NULL, '1', 'No', 'Yes', NULL, 2, 'vendor', '2021-02-16 19:37:47', NULL, 1, '', '', '', '', '', ''),
(7, 3, NULL, 'Absolute Hotel Services Group (AHS)', 'USINESS DETAILS About Us:  AHS is the fastest growing hospitality management/branding company in Asia and Europe with an ever expanding geographic portfolio of hotels, resorts and serviced residences.  Headquartered in Bangkok, Thailand with regional offices in Thailand, Vietnam, Indonesia, Hong Kong, India and Europe with more expansions planned, AHS and its brands have resonated with investors and consumers contributing value to all stakeholders.  Covering the luxury to economy segments through its brands U Hotels & Resorts, Eastin Grand Hotels & Resorts, Eastin Hotels, Resorts & Residences and Eastin Easy. AHS also has the right to manage hotels under Travelodge brand under Travelodge Thailand and Vienna House brand under Vienna House Asia.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613951335/download.jpg.jpg', 'Hotel, Travel & Tourism', '', '5000', '', 'Franchise', NULL, 'Hotel,Tourism,Franchise', '', 'yes', 4000, 50, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"About Us:\"},{\"insert\":\"\\nAHS is the fastest growing hospitality management/branding company in Asia and Europe with an ever expanding geographic portfolio of hotels, resorts and serviced residences.\\nHeadquartered in Bangkok, Thailand with regional offices in Thailand, Vietnam, Indonesia, Hong Kong, India and Europe with more expansions planned, AHS and its brands have resonated with investors and consumers contributing value to all stakeholders.\\nCovering the luxury to economy segments through its brands U Hotels & Resorts, Eastin Grand Hotels & Resorts, Eastin Hotels, Resorts & Residences and Eastin Easy. AHS also has the right to manage hotels under Travelodge brand under Travelodge Thailand and Vienna House brand under Vienna House Asia.\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Eastin Easy - 3 Star Business Hotel Brand \"},{\"insert\":\"\\nTake it Easy! You can take everything easy for a great stay to recharge and relax.\\nA 3 star hotel brand, conveniently located in the city and business districts, providing comfortable and functional accommodation, no fuss breakfast and approachable services.\\nAHS is an affiliate company of U City Public Company Limited which is one of Thailand\'s largest public listed companies.\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '1', 'Yes', 'NO', NULL, 2, 'vendor', '2021-02-21 23:48:56', NULL, 1, '', '', '', '', '', ''),
(8, 3, NULL, 'TEABAR', 'Tea Bar - Pocket Cafe is initiated with a motive to promote the Self Employment. A small Investment and your Passion towards Food Business is all that is required to start this little Piece of Heaven.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613953507/teabar_1.jpg.jpg', 'Food & Beverages', 'North India, South India', '5000', '', 'Franchise', NULL, 'Food,Franchise,Business Opportunity', '01/31/2021', 'yes', 1000, 20, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"About Us:\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Tea Bar\"},{\"insert\":\" - Pocket Cafe is initiated with a motive to promote the Self Employment. A small Investment and your Passion towards Food Business is all that is required to start this little Piece of Heaven.\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"TEA BAR\"},{\"insert\":\" - Pocket cafe is promoted in India by Sarva Group of Companies. Sarva Group is engaged in the work of Manufacturing food and promoting various successful Brands. Sarva Group is now Included in the “\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"World Book of Records\"},{\"insert\":\"” as the Fastest Growing QSR Food Chain in India.\\nThe Tea Bar is a Pocket or Small Cafe that delivers freshly Brewed Tea and Coffee. Tea Bar has made Tea Interesting by adding natural Flavours to it. We serve a diverse variety of Tea and a huge range of Mouth Watering Snacks some Tit Bits some Stomach Filling Stuff. At Tea Bar we ensure that every Customer that walks in has the best possible experience as a happy customer is a relationship for Lifetime. We strive hard to deliver the Best of Taste along with the best Quality and hygiene.\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '2', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 00:25:07', NULL, 1, '', '', '', '', '', ''),
(9, 3, NULL, 'HALDIRAM BHUJIAWALA LTD', 'For more than six and a half decades, Prabhuji Pure Food has emerged as a household name for ready to eat snack foods in India. It has come a long way since its humble beginning in 1937 as a small-time snacks shop in Bikaner, in Rajasthan. The group has a presence not only in India but in several countries around the world. Prabhuji Pure Food with its company name delivers a veritable range of ready-to-eat snacks that are more than a fun and efficient way to enjoy healthy and hygienic food. Prabhuji Pure Food reconnects you with food made out of fresh produce like seeds, fruits and vegetables using the latest in healthy food preparation by expert chefs who know their food and uphold certain values that are often misplaced. Like taste, time, ecology, thrift and community.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613953740/haldiram.jpg.jpg', 'Food & Beverages', 'North India, South India, East India, West India', '5000', '', 'Joint-Venture', NULL, 'Food,Franchise,BusinessOpportunity', '01/11/2021', 'yes', 2000, 200, '{\"ops\":[{\"insert\":\"For more than six and a half decades, Prabhuji Pure Food has emerged as a household name for ready to eat snack foods in India. It has come a long way since its humble beginning in 1937 as a small-time snacks shop in Bikaner, in Rajasthan. The group has a presence not only in India but in several countries around the world. Prabhuji Pure Food with its company name delivers a veritable range of ready-to-eat snacks that are more than a fun and efficient way to enjoy healthy and hygienic food. Prabhuji Pure Food reconnects you with food made out of fresh produce like seeds, fruits and vegetables using the latest in healthy food preparation by expert chefs who know their food and uphold certain values that are often misplaced. Like taste, time, ecology, thrift and community.\\nPrabhuji Pure Food brings forth a diversity of culture and traditions portrayed well through a delectable range of Namkeen and Sweets. Choose and buy snacks online like aloo bhujia, chanachur, mathi and sweets and savoury like kaju barfi, rossogolla, soan papdi along with cakes, syrups and sharbat.\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '2', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 00:29:01', NULL, 1, '', '', '', '', '', ''),
(10, 3, NULL, 'REMAX INDIA', 'About Us:    RE/MAX is one of the World’s largest and most successful network of Real Estate Brokerage. We are in more than 100 Countries with more than 7000 Franchise Offices and more than 1,10,000 agents.  We’re proud to be operating in 100+ countries across world consisting of 130+ regions. That’s how we are able to offer unprecedented levels of customer service and provide access to real estate resources not available anywhere else.  When you choose RE/MAX you have the power and support of our worldwide network and the proof is in the results – Nobody in the world sells more Real Estate than RE/MAX.  RE/MAX International Property Group was formed based on the deficiencies of the real estate industry. The fundamental deficiency being that, not all people operate at the same level of efficiency, yet are remunerated at the same percentage rate of commission.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613954345/ftr-logo.png.png', 'Real Estate', 'North India, South India, East India, West India', '5000', '', 'Franchise', NULL, 'Real Estate,Business Opportunity', '', 'yes', 2000, 20, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"About Us:\"},{\"insert\":\"\\n\\n\\nRE/MAX is one of the World’s largest and most successful network of Real Estate Brokerage. We are in more than 100 Countries with more than 7000 Franchise Offices and more than 1,10,000 agents.\"},{\"attributes\":{\"indent\":1,\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\nWe’re proud to be operating in 100+ countries across world consisting of 130+ regions. That’s how we are able to offer unprecedented levels of customer service and provide access to real estate resources not available anywhere else.\"},{\"attributes\":{\"indent\":1,\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\nWhen you choose RE/MAX you have the power and support of our worldwide network and the proof is in the results – Nobody in the world sells more Real Estate than RE/MAX.\"},{\"attributes\":{\"indent\":1,\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\nRE/MAX International Property Group was formed based on the deficiencies of the real estate industry. The fundamental deficiency being that, not all people operate at the same level of efficiency, yet are remunerated at the same percentage rate of commission.\"},{\"attributes\":{\"indent\":1,\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\nSimply put, it is a model designed by real estate people for real estate people, where agents can be in business for themselves but not by themselves.\"},{\"attributes\":{\"indent\":1,\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '5', 'Yes', 'NO', NULL, 2, 'vendor', '2021-02-22 00:39:06', NULL, 1, '', '', '', '', '', ''),
(11, 3, NULL, 'Jugnoo Cab Services', 'About Us:  Jugnoo started as India’s first Auto-rickshaw Aggregator which is Funded by Paytm, Rocketship.VC & Snow Leopard Technology Ventures. Having completed 29 million rides till now, Jugnoo has become India\'s 3rd largest Taxi Aggregator. With 12,00,000 transactions per month across 45+ cities, Jugnoo now provides a wide range of local services on-demand - Auto & Taxi-Rides, Groceries, Food Delivery, Meals, and Logistics.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613954724/download%20%281%29.jpg.jpg', 'Transportation', 'North India, South India, East Indian, West India', '5000', '', 'Joint-Venture', NULL, 'Transportation ,Can Services,Business Services', '01/11/2021', 'yes', 2000, 0, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"About Us:\"},{\"insert\":\"\\nJugnoo started as India’s\"},{\"attributes\":{\"italic\":true},\"insert\":\" first Auto-rickshaw Aggregator which is \"},{\"insert\":\"Funded by Paytm, Rocketship.VC & Snow Leopard Technology Ventures. Having completed 29 million rides till now, Jugnoo has become India\'s\"},{\"attributes\":{\"italic\":true},\"insert\":\" 3rd largest Taxi Aggregator.\"},{\"insert\":\"\\nWith 12,00,000 transactions per month across 45+ cities, Jugnoo now provides a wide range of local services on-demand - Auto & Taxi-Rides, Groceries, Food Delivery, Meals, and Logistics.\\nWe look forward to expanding our Auto, Cab & Bike Delivery services all over India and invite franchisees who are ready to make it big. The investment required depends on the city\'s population, area, demographics, and other factors. The investment required depends on the city\'s population, area, demographics, and other facto\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '2', 'Yes', 'NO', NULL, 2, 'vendor', '2021-02-22 00:45:24', NULL, 1, '', '', '', '', '', ''),
(12, 3, NULL, 'EVERYDAY RETAIL CORPORATION', 'Starting from the seeding of food at the farm to its consumption from the plate, “Everyday Retail  Group” acts as a catalyst for each of its stakeholders. From sourcing, processing, retailing to final act of consumption', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613955020/download%20%282%29.jpg.jpg', 'FMGC', 'North India, South India, East Indian, West India', '5000', '', 'Franchise', NULL, 'Retail,FMGC,Franchise', '01/31/2021', 'yes', 4000, 10, '{\"ops\":[{\"insert\":\"One could easily locate ““\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Everyday Retail Group\"},{\"insert\":\"” stores in all the major localities, residential areas, high streets, offices, and metro stations. To ensure unmatched shopping experience and availability of every daily need item under one roof, we have partnered with the leading brands in FMCG segment.\\n1.     Grocery Products\\n2.     Dairy Products\\n3.     Frozen Foods\\n4.     Vegetables\\n5.     Fruits\\n6.     Fashion wear\\n7.     Furniture\\n8.     Kids products\\n9.     Digital products\\n \\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Why “Everyday Retail Group\"},{\"insert\":\"”\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"?\"},{\"insert\":\"\\n \\n·         100% Quality Products\\n·          Fresh Vegetables\\n·          Fresh Fruits\\n·          Free Home Delivery\\n·          Cash On delivery\\n·          Organic Foods\\n·          E-Billing\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '5', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 00:50:20', NULL, 1, '', '', '', '', '', ''),
(13, 3, NULL, 'O Mart Super Market', ' Our Retail Outlet Business Partner Model: -   Business partner Invested Company Operated (PICO) Only an agreed fixed amount is paid to the Business partner by the company for the investment done by Business partner in the business We are inviting multiple investors', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613955321/o-mart_1.jpg.jpg', 'FMGC', 'North India, South India, East Indian, West India', '5000', '', 'White Labelling', NULL, 'FMGC,SuperMarket,Franchise', '', 'yes', 10000, 0, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Model Super Market Business Partner Requirement\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" •   Business partner Investment Amount INR 25Lacs to 10 Crore\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" Income to Business Partner:\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"·      Company will pay 24% Assured guaranteed Income per annum on total investment cost of the Business partner.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"·      Company will pay 50% profit sharing on total Monthly net profit generated in the same Supermarket Store.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" Business Partner Income & Company Support: - Super Market\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" Role of Franchise: -\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"1.    Franchise will pay Security Deposit Amount of Rs. 6000/- SFT\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"2.    Franchisees have to take care of all the goods and cash in their store\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"3.    Franchise will Report or initiate corrective actions wherever required.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"4.    Franchisee has to ensure that all its artists follow the same and customer satisfaction is high.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" Role of Company: -\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" 1.    The company will give you a minimum guaranteed income of 2% per month for your store investment.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"2.    The company will assist the franchisee in recruiting and training your store staff.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"3.    The company will give you the rent of your store (but you will pay the store rent according to the nearest rent in the place where the store will be)\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"4.    The company will get you interior as per the design of your store brand.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"5.    The company will provide you with all the SOPs, training and manuals at your store.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"6.    The company will pay your store rent, electricity and internet bills to you.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"7.    The company will get all the staff appointed in your store.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"8.    The company will pay salaries to all the employees of your store\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"9.    The company will give you the computer and software of your store.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"10. The company will buy products and equipment for your store.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"11. The company will make your store grand opening\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"12. The company will invest in brand-level marketing, digital and social marketing, including Google Marketing, Just Dial, Facebook for AAP stores.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"13. The company will provide you pamphlets for your store, Radio Ad, Poll Hoardings, News Paper Advt, Glow Sign Board.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"14. The company will register the seller with all vendors for all brand products for your store.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\" \"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"15. The details of the investment are determined on a case-by-case basis as each location varies. All fees, estimated initial set costs, operating costs, financial statements and other valuable information are included in the disclosure document. Requests or questions related to further investment. For your reference, an outline of the start-up cost is listed here.\"},{\"insert\":\"\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '5', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 00:55:21', NULL, 1, '', '', '', '', '', ''),
(14, 3, NULL, 'Apollo Health and Lifestyle Limited', 'At Apollo Health and Lifestyle Limited, India’s first name in corporate healthcare, ‘good health for all’ is the abiding focus. Recognising the need for high quality diagnostics to nip developing health problems in the bud, Apollo offers a wide spectrum of tests through its hospital and clinic facilities across the Country.', 'https://image3.mouthshut.com/images/imagesp/925774618s.jpg', 'Healthcare', 'North India, South India, East Indian, West India', '5000', '', 'Joint-Venture', NULL, 'Franchise,Healthcare,Pathological Labs', '', 'yes', 200, 0, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Apollo Health and Lifestyle Limited (AHLL),\"},{\"insert\":\" a wholly owned subsidiary of the Apollo Hospitals Group, headquartered in Hyderabad. It was founded in 2002 with an aim to bring healthcare of international standards within the reach of every individual.\\nFranchisee Profile:\"},{\"attributes\":{\"header\":4},\"insert\":\"\\n\"},{\"insert\":\"Committed to the highest levels of service quality\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"A strong entrepreneurial spirit and zeal to succeed\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Adequate Financial Resources\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Ability to manage people\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"A good social standing and reputation\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Willing to undergo rigorous training and a desire to learn various aspects of managing a healthcare enterprise\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Genuinely interested in people and be sensitive to his neighbourhood’s requirements\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Support Offered:\"},{\"attributes\":{\"header\":4},\"insert\":\"\\n\"},{\"insert\":\"Preparation of a detailed project report and site selection\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Logistic support & connection\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Lab consumable support and centralized testing\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Marketing and sales support\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Operations & Quality audits\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Employee Training\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Technology upgrades Opportunity is available, connect now for detailed information! \\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '1', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 00:58:30', NULL, 1, '', '', '', '', '', ''),
(15, 3, NULL, 'U clean', 'About Us:  At UClean, we are building India\'s first organized chain of laundromats (laundry stores) focused on fostering the DIY (Do It Yourself) culture. With technology at the heart of the brand, UClean also enables the time crunched customer to avail pick-n-drop service from the comforts of his home or office. UClean is committed to work with other entrepreneurs and investors and co-build the UClean brand with them through the franchise route. The entrepreneurs are trained, equipped and handheld in building and operating their own UClean franchise store. With some of the most credible partners on-board for a venture of this nature, UClean is striving to not just be a brand but an overall segment creator.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613955760/uclean_2.jpg.jpg', 'Home Services', 'North India, South India, East Indian, West India', '5000', '', 'Joint-Venture', NULL, 'Business Opportunity,Home Services,Laundry Services', '', 'yes', 499, 0, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"About Us:\"},{\"insert\":\"\\nAt UClean, we are building India\'s first organized chain of laundromats (laundry stores) focused on fostering the DIY (Do It Yourself) culture. With technology at the heart of the brand, UClean also enables the time crunched customer to avail pick-n-drop service from the comforts of his home or office. UClean is committed to work with other entrepreneurs and investors and co-build the UClean brand with them through the franchise route. The entrepreneurs are trained, equipped and handheld in building and operating their own UClean franchise store. With some of the most credible partners on-board for a venture of this nature, UClean is striving to not just be a brand but an overall segment creator.\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '1', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 01:02:41', NULL, 1, '', '', '', '', '', ''),
(16, 3, NULL, 'ZYPP Electric', 'At Zypp they to make India carbon-free by electric scooter rentals or buying the scooter and delivery business mechanism to shift from petrol to electric with their expertise in technology and operations on the ground.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613956040/images.jpg.jpg', 'Automobile', 'North India, South India', '5000', '', 'Franchise', NULL, 'Automobile,Electric Scooty,BusinessOpportunity', '01/31/2021', 'yes', 600, 6, '{\"ops\":[{\"attributes\":{\"color\":\"#666666\"},\"insert\":\"At Zypp they to make India carbon-free by electric scooter rentals or buying the scooter and delivery business mechanism to shift from petrol to electric with their expertise in technology and operations on the ground.\"},{\"insert\":\"\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '1', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 01:07:20', NULL, 1, '', '', '', '', '', ''),
(17, 3, NULL, 'Happy Soul', 'An umbrella that encompasses the well-being of our mind, body, energy, soul and our planet as well. The objective is to provide diverse multi-vendor products which enable you to lead a life that is chemical-free, organic, healthy and wholesome through our E-commerce platform. They emphasise the need for all products to be environment friendly, organic, against animal testing and animal cruelty. Listed products, services, therapies and experiences extend to those who are certified and come with the highest qualifications and recognised accreditations.', 'https://im.whatshot.in/img/2020/Jan/79793920-2653937441507055-8576450692498063360-o-cropped-1579073473.jpg', 'Beauty & Wellness', '', '5000', '', 'Joint-Venture', NULL, 'Beauty Products,Organic Products,Business Opportunity', '', 'yes', 500, 0, '{\"ops\":[{\"attributes\":{\"color\":\"#666666\"},\"insert\":\"Listed products, services, therapies and experiences extend to those who are certified and come with the highest qualifications and recognised accreditations. All skincare and beauty products on Happy Soul are free from Sulphates, Parabens, Silicone and Mineral oils which are unnatural, clog pores and create allergies. Products also steer clear of petrol-based and synthetic ingredients. They offer customers a plethora of lovingly curated books and music in addition to wellness choices for personal use, lifestyle and beautifully crafted, gifting ideas which are sourced with care and integrity. They are committed to creating a community of the best spa’s, facilities, practitioners and workshops in various holistic sciences and meta-sciences in order to transform our customers to the healthiest, happiest most evolved versions of themselves. They recognise the adverse impact of stressful workplace dynamics and seek to promote vitality, health, work ethics, positivity and productivity in companies through highly qualified workshops and trainers. They are quality conscious and mindful of our ecology & environment and promote sustainability, Eco-friendly, organic, recycled/up-cycled products and packaging.\"},{\"insert\":\"\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '', '', '', NULL, 2, 'vendor', '2021-02-22 01:10:52', NULL, 1, '', '', '', '', '', ''),
(18, 3, NULL, 'The Glam Factory', 'Launched in 2012, The Glam Factory Salon & Academy is London’s leading unisex salon chain. The salon specializes in providing nail & lash care services, such as Manicure, Pedicure, Nail & Eyelash Enhancement. It was started with the idea of making anyone look glamorous and confident through world-class beauty services backed by professional expertise.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613956541/download%20%283%29.jpg.jpg', 'Beauty & Wellness', '', '5000', '', 'Franchise', NULL, 'Beauty Services,Salon Services,Franchise', '', 'yes', 500, 0, '{\"ops\":[{\"attributes\":{\"color\":\"#666666\"},\"insert\":\"Launched in 2012, The Glam Factory Salon & Academy is London’s leading unisex salon chain. The salon specializes in providing nail & lash care services, such as Manicure, Pedicure, Nail & Eyelash Enhancement. It was started with the idea of making anyone look glamorous and confident through world-class beauty services backed by professional expertise.\"},{\"insert\":\"\\n\"}]}', NULL, 'yes', 'yes', 'yes', NULL, NULL, NULL, '1', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 01:15:42', NULL, 1, '', '', '', '', '', ''),
(19, 3, NULL, 'Etrio', 'E-Trio is an EV company with a vision to be the widest range of EVs. We aim to be an affordable and accessible electric form of mobility for everyone. We aim to transform the environment, lives and businesses of every EV owner.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613956787/eTrio.jpg.jpg', 'Automobile', '', '5000', '', 'Investment', NULL, 'Automobile,Electric Vehicle,Business Opportunity', '01/22/2021', 'yes', 2999, 10, '{\"ops\":[{\"attributes\":{\"color\":\"#666666\"},\"insert\":\"E-Trio is an EV company with a vision to be the widest range of EVs. We aim to be an affordable and accessible electric form of mobility for everyone. We aim to transform the environment, lives and businesses of every EV owner.\"},{\"insert\":\"\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '1', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 01:19:48', NULL, 1, '', '', '', '', '', ''),
(20, 3, NULL, 'Xpresshop Online Store', 'HEALTHXP.IN is India’s largest online supplement store which sells whey proteins, isolates, gainers and other ancillary products to more than 15000+ pincodes in India. It is one of the fastest growing online and offline nutritional supplement store in India. The company was started to provide an affordable and reliable supplements and wellness products to help fitness enthusiasts obtain the authentic nutritional supplements.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613957623/Rule1----XPS-Banner.jpg.jpg', 'Healthcare', 'North India, South India, East Indian, West India', '5000', '', 'Franchise', NULL, 'Healthcare,Online,Health Products', '03/12/2016', 'yes', 300, 20, '{\"ops\":[{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Individual franchise investment has four parts-\"},{\"insert\":\"\\n 1) Franchise Fee\\n 2) Interior Cost = Interior costing depends on the shop dimension. Costing varies from INR 50000 to INR 1 lakh based on size and     facilities.\\n 3) Equipment Cost = INR 50000 + Taxes\\n 4) Royalty \\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"MODEL A: Gold Partner Model (Only Franchise):\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Responsibility of Franchisee Partner: \"},{\"insert\":\"Sales, Payment Collection & Customer Relationship, Store & infrastructure setup, Store & Inventory Management\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Responsibility of HealthXP: \"},{\"insert\":\"Lead Generation, Door to door delivery of Stocks, Brand Positioning & Digital Marketing Support. Back-end tech & operations Support\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"MODEL B: Platinum Partner Model (Franchise + Online):\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Responsibility of Franchisee Partner: \"},{\"insert\":\"Offline Sales. Payment Collection for offline sales & Customer relationship. Store & infrastructure setup. Online Orders packaging and dispatch.\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Responsibility of HealthXP: \"},{\"insert\":\" Lead Generation. Online sales mapping to respective franchisees. Guaranteed sales from day 1. Online sale support and courier co-ordination. Door to door delivery of Stocks, Brand Positioning & Digital Marketing Support. Back-end tech & operations Support.\\n\"},{\"attributes\":{\"color\":\"#333333\",\"bold\":true},\"insert\":\"Support & Benefits: \"},{\"insert\":\"Exclusive territorial rights are given to a franchise. The territory will be 15km radius from the store location.  Site selection assistance is also provided to the franchisee. Field assistance available for franchises. Present IT system will be included in the franchise. The benefit of a lifetime franchise term.\\n\"}]}', NULL, 'yes', 'yes', 'no', NULL, NULL, NULL, '1', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 01:33:44', NULL, 1, '', '', '', '', '', ''),
(21, 3, NULL, 'Hashtag Pizza', 'Delhi’s favourite chain of fusion cafes for takeaway, Hashtag Pizza wants to expand its operations in several other cities via offering franchisee options. ', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613957848/pizza.png.png', 'Food & Beverages', 'North India, South India, East Indian, West India', '5000', '', 'Franchise', NULL, 'Food,Fast Food,Business Opportunity', '', 'yes', 500, 10, '{\"ops\":[{\"attributes\":{\"color\":\"#666666\"},\"insert\":\"Delhi’s favourite chain of fusion cafes for takeaway, Hashtag Pizza wants to expand its operations in several other cities via offering franchisee options. Hashtag pizza will be offering extensive support to the franchisee for mutual growth and profitability. The company has a lucrative business model with low investment and high returns.\"},{\"insert\":\"\\n\"}]}', NULL, 'yes', 'yes', 'yes', NULL, NULL, NULL, '1', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 01:37:29', NULL, 1, '', '', '', '', '', ''),
(22, 3, NULL, 'Wellness Forever', 'Started in 2008, Wellness Forever – a venture of Mumbai based Wellness Forever Medicare Pvt. Ltd. – is one of India’s most trusted, well-known, and fastest-growing lifestyle retail pharmacy chain', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613958120/unnamed-360x240.png.png', 'Healthcare', '', '5000', '', 'Franchise', NULL, 'Healthcare,Pharmace,Business Opportunity', '01/06/2021', 'yes', 500, 200, '{\"ops\":[{\"insert\":\"Started in 2008, Wellness Forever – a venture of Mumbai based Wellness Forever Medicare Pvt. Ltd. – is one of India’s most trusted, well-known, and fastest-growing lifestyle retail pharmacy chain. \\nWellness Forever offers 30,000+ products, including around 12,000+ curative & preventive medicines and a wide range of health & lifestyle products. Wellness Forever today has an Omni-channel presence with over 200 retail stores, its website, easy-to-use mobile app which enables a 24-hour ordering facility, and toll-free customer care number. \\n \\n\"}]}', NULL, 'yes', 'yes', 'yes', NULL, NULL, NULL, '1', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 01:42:01', NULL, 1, '', '', '', '', '', ''),
(23, 3, NULL, 'Linen Club', 'Jaya Shree Textiles, a part of Aditya Birla Group is a market leader in manufacturing and sales of Linen fabric. We are also largest chain of Linen selling Exclusive Branded Stores.', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1613958257/download%20%284%29.jpg.jpg', 'Fashion & Apparel', 'North India, South India', '5000', '', 'Investment', NULL, 'Fashion,women Fashion,Franchise', '', 'yes', 1000, 100, '{\"ops\":[{\"attributes\":{\"color\":\"#666666\"},\"insert\":\"Jaya Shree Textiles, a part of Aditya Birla Group is a market leader in manufacturing and sales of Linen fabric. We are also largest chain of Linen selling Exclusive Branded Stores.\"},{\"insert\":\"\\n\"}]}', NULL, 'yes', 'yes', 'yes', NULL, NULL, NULL, '1', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 01:44:17', NULL, 1, '', '', '', '', '', ''),
(24, 3, NULL, 'Idealvillage Healthcare Project', 'Ideal village is inviting applications from individuals as well as corporates  to work on its one of the ambitious project on improving healthcare services villages.\r\nProject envisage to create new health  entrepreneurs  health centers and healthcare units to villages as well as rural India,', 'https://res.cloudinary.com/karbi/image/upload/v1541313015/iv.png', 'Social Service', 'North India, South India', '5000', '', 'Joint-Venture', NULL, 'Fashion,women Fashion,Franchise', '', 'yes', 1000, 100, '{\"ops\":[{\"attributes\":{\"color\":\"#666666\"},\"insert\":\"Ideal village is inviting applications from individuals as well as corporates  to work on its one of the ambitious project on improving healthcare services villages.\r\nProject envisage to create new health  entrepreneurs  health centers and healthcare units to villages as well as rural India,\"},{\"insert\":\"\\n\"}]}', NULL, 'yes', 'yes', 'yes', NULL, NULL, NULL, '1', 'Yes', 'Yes', NULL, 2, 'vendor', '2021-02-22 01:44:17', NULL, 1, '', '', '', '', '', ''),
(25, 3, NULL, 'dsdsad', 'sd', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1621927533/1jamu.png.png', 'Hotel, Travel & Tourism', 'dasda', '5000', '', 'Joint-Venture', NULL, 'dsds', '05/18/2021', 'no', 0, 2, '{\"ops\":[{\"insert\":\"dasdas\\n\"}]}', NULL, 'no', 'no', 'no', NULL, NULL, NULL, '2', '2', '2', NULL, 2, 'vendor', '2021-05-25 07:25:34', NULL, 1, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_charity`
--

CREATE TABLE `marketplace_charity` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `fundraiser_type` varchar(30) NOT NULL,
  `beneficiary_name` varchar(100) NOT NULL,
  `beneficiary_contact` varchar(100) NOT NULL,
  `beneficiary_email` varchar(100) NOT NULL,
  `beneficiary_address` varchar(100) NOT NULL,
  `fundraiser_title` varchar(100) NOT NULL,
  `fundraiser_subtitle` varchar(100) NOT NULL,
  `fundraiser_tags` varchar(100) NOT NULL,
  `fundraiser_desc` varchar(100) NOT NULL,
  `benifit` varchar(30) NOT NULL,
  `additional_details` varchar(200) NOT NULL,
  `label` varchar(100) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `verified` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace_charity`
--

INSERT INTO `marketplace_charity` (`id`, `site_id`, `category`, `fundraiser_type`, `beneficiary_name`, `beneficiary_contact`, `beneficiary_email`, `beneficiary_address`, `fundraiser_title`, `fundraiser_subtitle`, `fundraiser_tags`, `fundraiser_desc`, `benifit`, `additional_details`, `label`, `vendor_id`, `status`, `verified`, `created_date`) VALUES
(1, 2, 'teacher', 'Beneficiary', 'Mukesh', '00', 'ccc', 'ddd', 'Title', 'Sub Title for the fundraiser', 'Tag, tag, tag', 'Desccccccc', 'Yes', 'yes', '', 2, 1, 1, '2022-04-04 15:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_destination`
--

CREATE TABLE `marketplace_destination` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `destination_type` varchar(100) NOT NULL,
  `destination_name` varchar(100) NOT NULL,
  `short_title` varchar(100) NOT NULL,
  `desription` text NOT NULL,
  `near_railway` varchar(100) NOT NULL,
  `near_busstand` varchar(100) NOT NULL,
  `near_airport` varchar(100) NOT NULL,
  `distance_busstand` int(11) NOT NULL,
  `distance_airpot` int(11) NOT NULL,
  `distance_railway` int(11) NOT NULL,
  `busstand_name` varchar(100) NOT NULL,
  `railway_name` varchar(100) NOT NULL,
  `airport_name` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `best_for` varchar(100) NOT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  `open-days` int(11) NOT NULL,
  `best_time_to_visit` time NOT NULL,
  `activities` text NOT NULL,
  `best_month` varchar(100) NOT NULL,
  `views` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `label` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_destination`
--

INSERT INTO `marketplace_destination` (`id`, `site_id`, `vendor_id`, `purpose`, `category`, `sub_category`, `destination_type`, `destination_name`, `short_title`, `desription`, `near_railway`, `near_busstand`, `near_airport`, `distance_busstand`, `distance_airpot`, `distance_railway`, `busstand_name`, `railway_name`, `airport_name`, `district`, `state`, `tags`, `best_for`, `open_time`, `close_time`, `open-days`, `best_time_to_visit`, `activities`, `best_month`, `views`, `created_date`, `label`, `status`) VALUES
(1, 2, 1, 'kids', '', 'child', '', 'water park', 'water park', 'for childerns', 'yes', 'no', 'no', 0, 0, 0, '', '', '', 'jabalpur', 'madhya pradesh', 'child,waterpark,water', 'kid', '08:00:00', '18:00:00', 5, '12:00:00', 'slider wash', 'july', 0, '2022-04-13 11:11:08', 0, 0),
(3, 2, 2, '', 'teacher', 'maths_teacher', '', 'destin', 'short', 'desc', 'Yes', 'Yes', 'Yes', 0, 1200, 1000, 'swsds', 'sdds', 'yjytku', '', '', 'tag', ',,,', '13:45:00', '13:45:00', 0, '00:00:00', ',', ',,,', 0, '0000-00-00 00:00:00', 0, 0),
(5, 2, 3, '', 'null', 'null', '', '', '', '', 'No', 'No', 'No', 0, 0, 0, '', '', '', '', '', '', '', '13:45:00', '13:45:00', 0, '00:00:00', '', 'January,May,', 0, '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_events`
--

CREATE TABLE `marketplace_events` (
  `id` int(100) NOT NULL,
  `site_id` int(100) NOT NULL,
  `vendor_id` int(3) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `event_category` varchar(255) DEFAULT NULL,
  `event_sub_category` varchar(255) DEFAULT NULL,
  `organiser_name` varchar(255) DEFAULT NULL,
  `organiser_logo` varchar(255) DEFAULT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_description` text DEFAULT NULL,
  `format` varchar(255) NOT NULL,
  `event_type` varchar(255) DEFAULT NULL,
  `website` varchar(255) NOT NULL,
  `tags` varchar(355) DEFAULT NULL,
  `start_date` varchar(355) NOT NULL,
  `end_date` varchar(355) NOT NULL,
  `city` varchar(255) NOT NULL,
  `states` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `longitude` decimal(63,30) NOT NULL,
  `latitude` decimal(63,30) NOT NULL,
  `fb_id` varchar(255) DEFAULT NULL,
  `twitter_id` varchar(255) DEFAULT NULL,
  `female` int(255) DEFAULT NULL,
  `linked_id` varchar(255) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `verified` int(11) NOT NULL,
  `featured` int(11) NOT NULL DEFAULT 0,
  `male` int(255) DEFAULT NULL,
  `youth` int(255) NOT NULL,
  `kids` int(255) DEFAULT NULL,
  `others` int(255) DEFAULT NULL,
  `total_view` int(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `insta_id` varchar(355) DEFAULT NULL,
  `posted_by` varchar(100) NOT NULL DEFAULT 'vendor',
  `posted_date` date DEFAULT NULL,
  `affiliate_id` int(11) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `highlights` varchar(255) DEFAULT NULL,
  `sub_user_id` int(11) DEFAULT NULL,
  `approved` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_events`
--

INSERT INTO `marketplace_events` (`id`, `site_id`, `vendor_id`, `image`, `event_category`, `event_sub_category`, `organiser_name`, `organiser_logo`, `event_title`, `event_description`, `format`, `event_type`, `website`, `tags`, `start_date`, `end_date`, `city`, `states`, `country`, `address`, `pincode`, `longitude`, `latitude`, `fb_id`, `twitter_id`, `female`, `linked_id`, `status`, `verified`, `featured`, `male`, `youth`, `kids`, `others`, `total_view`, `label`, `insta_id`, `posted_by`, `posted_date`, `affiliate_id`, `duration`, `google_id`, `highlights`, `sub_user_id`, `approved`) VALUES
(1, 2, 1, 'https://www.ubuntupit.com/wp-content/uploads/2020/05/Learn-C-Programming-Language.jpg', 'Education', 'Fair', 'Dizital.org', 'http://res.cloudinary.com/luffyguy/image/upload/v1627229494/eciggpcvoovgmhtii8px.jpg', 'Learn Advanced C++ Programming', '<p>Description\r\nThis course will take you from a basic knowledge of C++ to using more advanced features of the language. This course is for you if you want to deepen your basic knowledge of C++, you want to learn C++ 11 features, or you\'ve taken my free beginners\' C++ course and you\'re looking for the next step.\r\n\r\nWe\'ll start with a look at C++ file handling and move through STL, template classes, operator overloading, lambda expressions, move constructors and much more besides.\r\n\r\nAt the end of the course I\'ll show you how to create a program that generates fractal images, using a a few of the language features we\'ve seen in the course and giving you a great work out with smart pointers and arrays.\r\n\r\nI\'ll give y</strong></p>\r\n', 'onsite', 'Event', 'http://localhost/intership/list_event1.php', 'Digital, Website, Learning, Technology, Mobile app', '07/01/2021 12:00 AM', '07/02/2021 12:00 AM', 'Bhubaneswar', 'Odisha', 'India', 'Master Canteen Chowk, Kharvela Nagar, Bhubaneswar, Odisha 751001, India', '751001', '85.840992355200110000000000000000', '20.268455824834792000000000000000', 'facebook', 'twitter', 11, 'linkedin', 1, 0, 0, 44, 22, 33, NULL, NULL, '', 'instagram', 'vendor', '2021-07-25', NULL, NULL, NULL, '<p>these are <strong>event highlights</strong></p>\n', NULL, '0'),
(2, 2, 1, 'https://asthacomputer.com/images/services/YWNj804781351.jpg', 'Digital', 'Meeting', 'Dizital.org', 'http://res.cloudinary.com/luffyguy/image/upload/v1627229959/yc6wjhv8gxnkwkjaii89.jpg', 'Awareness in Computer Concepts (ACC)', '<p><strong>You are hereHomeAwareness in Computer Concepts (ACC)\r\nAwareness in Computer Concepts (ACC)\r\nOBJECTIVE: \r\nBy undergoing the Awareness in Computer Concepts (ACC), one should be able to acquire basic knowledge on computer & its usage by understanding the following skills:\r\n\r\nHow to operate the elements of a computer\r\nPerform basic operations on the computer\r\nCreate, edit and format documents using a word processor\r\nAccess the Internet and finding information of interest\r\nRegister for a web-based e-mail account and using it, Opening of e-mail attachments\r\nUnderstanding Financial Literacy\r\nDigital Literacy to understand the concept of Online Banking\r\nUnderstanding the available e-Governance Services</strong></p>\r\n', 'onsite', 'Program', 'http://localhost/intership/list_event1.php', 'Digital, Website, Learning, Technology, Mobile app', '07/01/2021 12:00 AM', '07/02/2021 12:00 AM', 'Bhubaneswar', 'Odisha', 'India', 'Master Canteen Chowk, Kharvela Nagar, Bhubaneswar, Odisha 751001, India', '751001', '85.840992355200110000000000000000', '20.268455824834792000000000000000', 'facebook', 'twitter', 99, 'linkedin', 0, 0, 0, 66, 88, 77, NULL, NULL, 'featured', 'instagram', 'vendor', '2021-07-25', NULL, NULL, NULL, '<p><strong>highlights</strong></p>\n\n<div id=\"gtx-trans\" style=\"position: absolute; left: -22px; top: -6.88889px;\">\n<div class=\"gtx-trans-icon\">&nbsp;</div>\n</div>\n', NULL, '0'),
(3, 2, 20, 'https://in.bmscdn.com/nmcms/events/banner/desktop/media-desktop-digital-marketing-communication-0-2021-5-12-t-19-20-20.jpg', 'Digital', 'Conference', 'Idealvillage', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1627230715/zr50coft5ylgat81xmbx.png', 'Digital Marketing & Communication', '<p>igital Marketing has been a growing career option which is bound to thrive exponentially in the coming years. Here we curate stories of upGrad learners who took our Digital Marketing program and successfully transitioned into job roles, aligned with their professional aspirations.\r\n\r\nAt upGrad, our objective is to help individuals climb their future career ladder and transition smoothly into promising job profiles. This handbook has career transition stories that will make you realize your own potential and help you take a step towards your long term professional goal.\r\n\r\nProduct Management has been a growing career option which is bound to thrive exponentially in the coming years. Here we curate stories of upGrad learners who took our Product Management program and successfully transitioned into job roles, aligned with their professional aspirations. At upGrad, our objective is to help individuals climb their future career ladder and transition smoothly into promising job profiles.</p>\r\n', 'onsite', 'Event', '', 'Digital, Website, Learning, Technology, Mobile app', '07/29/2021 10:01 PM', '07/30/2021 10:01 PM', 'Bhubaneswar', 'Odisha', 'India', 'N1 96, IRC Village, Nayapalli, Bhubaneswar, Odisha 751009, India', '751009', '85.840686583372400000000000000000', '20.268455824834792000000000000000', 'asas', 'sa', 0, 'sasa', 1, 0, 0, 0, 0, 0, NULL, NULL, 'sponsored', 'sas', 'vendor', '2021-07-25', NULL, NULL, NULL, '<p>sasa</p>\n', NULL, '0'),
(4, 2, 20, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIDlTcMo-BTtnNlxiLJuEKz0fblvisjzZ5GbbKKntHfg&s=10', 'Digital', 'Community Halls', 'Dizital.org', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIDlTcMo-BTtnNlxiLJuEKz0fblvisjzZ5GbbKKntHfg&s=10', 'Learn Website Development & DIGITAL MARKETING', '<p>Take your first step towards making your own website and increase online presence with learning Digital Marketing. Your ticket to the freelancer world.\r\n\r\nWorldLearnEasy.com is an Online Education platform focusing on upgrading the Technical & Non-Technical skills of students and young professionals.\r\n\r\nWe are focusing on developing online courses that can help the students to improve their Job-Related skills.\r\n\r\nOur courses have been designed in Hindi & English Language for creating an \'Ease of Understanding\'.\r\nBy the end of this course, you will be confidently implementing marketing strategies across the major online marketing channels.\r\n\r\nAll the strategies, tips and tools recommended are either free or very cost effective.\r\n\r\nYou\'ll Also Get:\r\n\r\n? Lifetime Access to course updates\r\n\r\n? Fast & Friendly Support in the Q&A section\r\n\r\n? Udemy Certificate of Completion Ready for Download\r\n\r\nDon\'t Miss Out!\r\n\r\nEvery second you wait is costing you valuable leads and sales.\r\n\r\nThis courses come with a 30 day money-back guarantee - so there\'s no risk to get started.\r\n\r\nGo ahead and hit the \"take this course\" button to start growing a business online today!\r\n\r\nWho this course is for:\r\nPre launch business owners who don\'t know where to get started\r\nWebsite owners who are struggling to get traffic and sales\r\nAnyone looking to add highly paid skills to their CV\r\n</p>\r\n', '', 'Initiative', '', 'Digital, Website, Learning, Technology, Mobile app', '07/15/2021 10:34 PM', '07/21/2021 10:34 PM', 'Bhubaneswar', 'Odisha', 'India', 'Master Canteen Chowk, Kharvela Nagar, Bhubaneswar, Odisha 751001, India', '751001', '85.840992355200110000000000000000', '20.268455824834792000000000000000', '', '', 0, '', 1, 0, 0, 0, 0, 0, NULL, NULL, '', '', 'subuser', '2021-07-25', NULL, NULL, NULL, '<p>12 Courses in 1\r\n\r\nCovering 12 major online marketing topics and comprising of 20+ hours of clear cut lectures & practice activities - this course is \"incredible value for money!\" as one student said. We\'ll cover:\r\n\r\nMarket Research. Ask 3 simple quest', NULL, '0'),
(5, 2, 20, 'https://cdn-az.allevents.in/events10/banners/e06089e2e6ee74391cb1c65850d1bed3b33497f2caa1e8ac75190c619d6d2b60-rimg-w513-h296-gmir.jpg?v=1627132430', 'Digital', 'Conference', 'Dizital.org', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1627236367/cdeeqsbniwkda5dfd9eo.png', 'Online Workshop On Zero Cost Digital Marketing', '<p>ransform your Business Marketing in a Weekend!\r\n\r\nLearn Zero Cost Digital Marketing!\r\n\r\nPut You Marketing on Auto-Pilot!\r\n\r\nSave money spent on Advertising!\r\nConnect everything with each other!\r\nExplore thousands of free Advertising & Selling platforms!\r\n\r\nBecome a ZERO COST DIGITAL MARKETING PROFESSIONAL!\r\n\r\nCertificate Workshop on Zero Cost Digital Marketing\r\n\r\nMarket your Products/Services online without spending anything within millions of relevant audience!\r\n\r\nStop Spending For Paid Advertisements!\r\nUse Zero Cost Digital Marketing system!\r\nIncrease your marketing exponentially within millions of Target Audience!\r\nExperience automated zero cost marketing within targeted audience on a local, regional, National and global scale!\r\n\r\nZero Cost Digital Marketing Workshop</p>\r\n', 'online', 'Initiative', '', 'Digital, Website, Learning, Technology, Mobile app', '07/30/2021 11:35 PM', '07/22/2021 11:35 PM', 'Bhubaneswar', 'Odisha', 'India', 'Master Canteen Chowk, Kharvela Nagar, Bhubaneswar, Odisha 751001, India', '751001', '85.840992355200110000000000000000', '20.268455824834792000000000000000', '', '', 0, '', 0, 0, 0, 0, 0, 0, NULL, NULL, '', '', 'vendor', '2021-07-25', NULL, NULL, NULL, '<p>sasa</p>\n', NULL, '0'),
(6, 2, 20, 'https://neilpatel.com/wp-content/uploads/2021/06/How-To-Use-YouTube-Ads-To-Grow-Your-Business.jpg', 'Digital', 'Webinar', 'Women Federation', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1627236367/cdeeqsbniwkda5dfd9eo.png', 'Learn how to grow a business through YouTube at webinar', '<p>Business owners and entrepreneurs are invited to learn how to create a YouTube channel to promote products and services and drive engagement with customers at a virtual seminar this October. Participants will learn about different video formats, making creative content and measuring the results.\r\n\r\nThe webinar will be held noon-1:15 p.m. Tuesday, Oct. 27. The workshop is free, but registration is required online at bit.ly/YouTubeSBDC. The webinar is hosted by Missouri S&T’s Small Business Development Center (SBDC) and Grow with Google.</p>\r\n', 'online', 'Event', '', 'Digital, Website, Learning, Technology, Mobile app', '07/30/2021 11:35 PM', '07/22/2021 11:35 PM', 'Jammu', 'Jammu', 'India', 'Master Canteen Chowk, Kharvela Nagar, Bhubaneswar, Odisha 751001, India', '751001', '85.840992355200110000000000000000', '20.268455824834792000000000000000', '', '', 0, '', 0, 0, 0, 0, 0, 0, NULL, NULL, '', '', 'vendor', '2021-07-25', NULL, NULL, NULL, '<p>In this workshop we’ll discuss best practices for:\r\n\r\nWhy you should have a YouTube channel\r\nHow to set up a YouTube channel\r\nWhat’s important to fill out when uploading a video\r\nMaking good creative, and how to target and measure the results</p>\r\n', NULL, '0'),
(7, 2, 1, 'https://m.media-amazon.com/images/G/31/amazonservices/Blog/SOA_Blog_5_Things_Seller_University._SL1280_FMjpg_.jpg', 'Digital', 'Webinar', 'Idealvillage', 'https://tamebay.com/wp-content/uploads/2019/11/Amazon-A-to-z-Guarentee.jpg', 'Learn Amazon Selling to start your ecommm business', '<p>This is a one-stop shop for all your learning needs while you sell on Amazon, all free-of-cost. Seller University is here to help you understand our end to end processes, services, tools, products and policies, to grow your business with ease via various modes of education such as Videos, Study materials, Online Webinars and In-city classroom trainings. Start learning everything about selling on Amazon by registering as a seller today!\r\n\r\nWe have 200+ learning modules (in English & Hindi), Online Trainings & Recorded Sessions so you can learn anywhere, anytime, even on the Seller App.</p>\r\n', 'onsite', 'Program', 'https://sell.amazon.in/', 'Digital, Website, Learning, Technology, Mobile app', '07/01/2021 12:00 AM', '07/02/2021 12:00 AM', 'Bhubaneswar', 'Odisha', 'India', 'Master Canteen Chowk, Kharvela Nagar, Bhubaneswar, Odisha 751001, India', '751001', '85.840992355200110000000000000000', '20.268455824834792000000000000000', 'facebook', 'twitter', 99, 'linkedin', 0, 0, 0, 66, 88, 77, NULL, NULL, 'featured,,sponsored', 'instagram', 'vendor', '2021-07-25', NULL, NULL, NULL, '<p><strong>highlights</strong></p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -22px; top: -6.88889px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', NULL, '0'),
(8, 2, 1, 'https://i.pcmag.com/imagery/roundups/06O5KiGm3RQloM5tVSy2q2Z-1..1569492832.png', 'Digital', 'Webinar', 'Idealvillage', 'https://tamebay.com/wp-content/uploads/2019/11/Amazon-A-to-z-Guarentee.jpg', 'How to Create a Webinar from Scratch in 10 Simple Steps\r\n', '<p>This is a one-stop shop for all your learning needs while you sell on Amazon, all free-of-cost. Seller University is here to help you understand our end to end processes, services, tools, products and policies, to grow your business with ease via various modes of education such as Videos, Study materials, Online Webinars and In-city classroom trainings. Start learning everything about selling on Amazon by registering as a seller today!\r\n\r\nWe have 200+ learning modules (in English & Hindi), Online Trainings & Recorded Sessions so you can learn anywhere, anytime, even on the Seller App.</p>\r\n', 'onsite', 'Program', 'https://sell.amazon.in/', 'Digital, Website, Learning, Technology, Mobile app', '07/01/2021 12:00 AM', '07/02/2021 12:00 AM', 'Bhubaneswar', 'Odisha', 'India', 'Master Canteen Chowk, Kharvela Nagar, Bhubaneswar, Odisha 751001, India', '751001', '85.840992355200110000000000000000', '20.268455824834792000000000000000', 'facebook', 'twitter', 99, 'linkedin', 0, 0, 0, 66, 88, 77, NULL, NULL, 'featured,,sponsored', 'instagram', 'vendor', '2021-07-25', NULL, NULL, NULL, '<p><strong>highlights</strong></p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -22px; top: -6.88889px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', NULL, '0'),
(9, 2, 1, 'https://i.ytimg.com/vi/fSHQ-oi3pDc/maxresdefault.jpg', 'Digital', 'Webinar', 'Idealvillage', 'https://tamebay.com/wp-content/uploads/2019/11/Amazon-A-to-z-Guarentee.jpg', 'Guide on Writing Effective Emails and climb the corporate ladder', '<p>Despite the social media hype, e-mail is still not to be done without in the communication instrument toolbox of trade fair and event planners. Write better and more effective email newsletters using our 7 tips.\r\n\r\nA well-maintained email distribution list is worth its weight in gold to trade fair, congress and event organizers. No other sales medium is as strong as email.\r\n\r\nThe condition: you need to have the required double opt-ins (data protection), your distribution list is updated and personalized and you are able to address certain segments of the newsletter in a targeted manner.\r\n\r\nHowever, the success of your event newsletter and ultimately the conversion of such into trade fair and congress tickets or exhibition stand orders also depends on design and content.\r\n\r\nWe have 7 tips for you on how to optimize your newsletter.\r\nDescription\r\nThis course primarily covers how an email has to be structured and what is communication style followed while writing emails, It also deals with various email etiquettes which has to be followed during sending or receiving emails in a professional environment.\r\n\r\nThe process which is discussed in the program can be used as a drafting tool and help you build effective emails and have more response rate.\r\n\r\nWho this course is for:\r\nAny professional or fresher looking to understand Email Nuances\r\n</p>\r\n', 'onsite', 'Initiative', 'https://sell.amazon.in/', 'Digital, Website, Learning, Technology, Mobile app', '07/01/2021 12:00 AM', '07/02/2021 12:00 AM', 'Bhubaneswar', 'Odisha', 'India', 'Master Canteen Chowk, Kharvela Nagar, Bhubaneswar, Odisha 751001, India', '751001', '85.840992355200110000000000000000', '20.268455824834792000000000000000', 'facebook', 'twitter', 99, 'linkedin', 0, 0, 0, 66, 88, 77, NULL, NULL, 'featured,,sponsored', 'instagram', 'vendor', '2021-07-25', NULL, NULL, NULL, '<p>Description\r\nThis course primarily covers how an email has to be structured and what is communication style followed while writing emails, It also deals with various email etiquettes which has to be followed during sending or receiving emails in a prof', NULL, '0'),
(10, 2, 1, 'https://sociable.co/wp-content/uploads/2016/05/Social-Media-Marketing.jpg', 'Digital', 'Webinar', 'Idealvillage', 'https://tamebay.com/wp-content/uploads/2019/11/Amazon-A-to-z-Guarentee.jpg', 'Social Media Marketing Agency : Digital Marketing + Business', '<p>Social Media Marketing Agency: Digital Marketing + Business\r\n\r\nIn this Social Media Marketing Agency course (SMMA) You will learn how to:\r\n\r\nBuild a social media marketing agency\r\n\r\nFacebook marketing & Facebook ads\r\n\r\nFind the right niche for your business\r\n\r\nSetup pricing & build your agency\'s website\r\n\r\nDigital marketing mentality & fundamentals\r\n\r\nInstagram marketing\r\n\r\nFind & get clients for your agency\r\n\r\nSocial media copywriting\r\n\r\nHow to become a story teller\r\n\r\nSEO\r\n\r\nEmail marketing\r\n\r\nSales funnels\r\n\r\nEmail automation\r\n\r\nBuild your team\r\n\r\nTwitter marketing\r\n\r\nYouTube marketing\r\n\r\nGoogle Ads\r\n\r\nGoogle Analytics\r\n\r\n21 digital marketing strategies (marketing cognitive biases)\r\n\r\nUse automation tools\r\n\r\nInstagram ads\r\n\r\nWebsite persuasion\r\n\r\nRetargeting\r\n\r\nRemarketing\r\n\r\nand much more ...\r\n\r\n\r\n\r\nThis course is a complete package for people who want to learn marketing and start to make money with it as a digital marketer, or in general people who want to make good money with specific instructions.\r\n\r\nAlong the course we will learn both how you can do a successful marketing for different businesses and how you can build a successful social media marketing agency.\r\n\r\n\r\n\r\nAll the course documents are written and available with lots of bonuses and prepared templates, to make the process of learning and working as a digital marketer become easier.\r\n</p>\r\n', 'onsite', 'Event', 'https://sell.amazon.in/', 'Digital, Website, Learning, Technology, Mobile app', '07/01/2021 12:00 AM', '07/02/2021 12:00 AM', 'Bhubaneswar', 'Odisha', 'India', 'Master Canteen Chowk, Kharvela Nagar, Bhubaneswar, Odisha 751001, India', '751001', '85.840992355200110000000000000000', '20.268455824834792000000000000000', 'facebook', 'twitter', 99, 'linkedin', 0, 0, 0, 66, 88, 77, NULL, NULL, 'featured,,sponsored', 'instagram', 'vendor', '2021-07-25', NULL, NULL, NULL, '<p>\r\n1. Facebook Advanced advertising:\r\n\r\nThis section include golden and extremely powerful ads strategies that even some professional marketers don\'t know about them, and came from many years of experience from different social media marketers.\r\n\r\nStrat', NULL, '0'),
(11, 2, 1, 'https://mk0ehealtheletsj3t14.kinstacdn.com/wp-content/uploads/2019/08/Digital-healthcare-technology.jpg', 'Digital', 'Webinar', 'Infosys', 'https://tamebay.com/wp-content/uploads/2019/11/Amazon-A-to-z-Guarentee.jpg', 'Digital Health: Platform centric approach to patient care', '<p>Digital Health is enabled by cutting edge technologies like Medical Grade IoT, Artificial Intelligence (AI), Machine Learning (ML), Natural Language Processing (NLP), data analytics, big data, and cloud technology. Data is at the epi-center of Digital Health including Real time or near real time diagnostic data, medical sensor data, dietary and fitness regime, medicine dosage, etc. is key for a patient-centric experience. And these insights and predictions when used effectively become truly differentiating and drive immense value for individual patients.\r\n\r\nAlmost all Pharma and Medical devices companies are trying to incubate Digital Health solutions. However, very few of them have been truly successful with several challenges including complexity of assembling multiple pieces of the end to end digital solution, the regulations especially in the context of AI algorithms, and global data privacy and safety concerns among others. However, in post pandemic world, the pace of innovation, adoption and evangelization has increased tremendously with all stakeholders – be it pharma, providers and patients, all enabling digital health to effectively manage care and costs.\r\n\r\nThis webinar focusses on Digital Health – its context in the current times, the technology leverage and progress in new platforms to drive and better manage and improve patient health.\r\n\r\nPlease note that the information you provide while registering will be shared with Infosys and can be used by Infosys for reaching out to you for Sales & Marketing communications.\r\n\r\n\r\n\r\nAll the course documents are written and available with lots of bonuses and prepared templates, to make the process of learning and working as a digital marketer become easier.\r\n</p>\r\n', 'onsite', 'Program', 'https://sell.amazon.in/', 'Digital, Website, Learning, Technology, Mobile app, Health', '07/01/2021 12:00 AM', '07/02/2021 12:00 AM', 'Bhubaneswar', 'Odisha', 'India', 'Master Canteen Chowk, Kharvela Nagar, Bhubaneswar, Odisha 751001, India', '751001', '85.840992355200110000000000000000', '20.268455824834792000000000000000', 'facebook', 'twitter', 99, 'linkedin', 0, 0, 0, 66, 88, 77, NULL, NULL, 'featured,,sponsored', 'instagram', 'vendor', '2021-07-25', NULL, NULL, NULL, '<p>\r\nInnovations in technology for health care in the last few years – such as electro-mechanical sensors, connectivity, computing power and advanced analytics – have revealed interesting and promising options to manage and improve patient health. With FD', NULL, '0'),
(12, 0, 20, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0.000000000000000000000000000000', '0.000000000000000000000000000000', '', '', 0, '', 0, 0, 0, 0, 0, 0, NULL, NULL, '', '', 'vendor', '2021-09-17', NULL, NULL, NULL, '', NULL, '0'),
(13, 2, 0, 'http://res.cloudinary.com/luffyguy/image/upload/v1636809697/ot1jwfvzrumrgnv7d4bn.png', 'Education', 'Fair', 'My client', 'http://res.cloudinary.com/luffyguy/image/upload/v1636809699/f4mppual18l9hrsfdesz.png', 'Event NExt gen', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>\n', 'onsite', 'Event', 'www.gogle.com', 'as,sasa', '11/13/2021 12:00 AM', '11/13/2021 12:00 AM', 'Bhubaneswar', 'Odisha', 'India', 'Unit-2, Ashok Nagar, MG marg, near, Master Canteen Chowk, Unit-2, Ashok Nagar, Bhubaneswar, Odisha 751001, India', '751001', '85.840235972257900000000000000000', '20.268445760330103000000000000000', 'sds', 's', 22, 'sd', 0, 0, 0, 22, 22, 22, NULL, NULL, ',,sponsored', 'sds', '', '2021-11-13', NULL, NULL, NULL, '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', NULL, '0'),
(14, 2, 15, 'http://res.cloudinary.com/luffyguy/image/upload/v1636809825/njgklworb1r0tod47kow.png', 'Education', 'Fair', 'My client', 'http://res.cloudinary.com/luffyguy/image/upload/v1636809827/x5a0zs40xi5btiamyqbo.png', 'asdasd', '<p>include &quot;vendor/autoload.php&quot;;<br />\n<br />\n<br />\nrequire &quot;cloudinary_php-master/autoload.php&quot;;<br />\nrequire &#39;cloudinary_php-master/src/Helpers.php&#39;;<br />\nrequire &quot;config-cloud.php&quot;;</p>\n', 'online', 'Event', 'www.gogle.com', 'sdsd', '12/08/2021 12:00 AM', '12/10/2021 12:00 AM', 'Bhubaneswar', 'Odisha', 'India', '7R9R+99 Bhubaneswar, Odisha, India', '', '85.840992355200110000000000000000', '20.268455824834792000000000000000', 'sds', 's', 22, 'sdsdad', 1, 0, 0, 22, 19, 22, NULL, NULL, '', 'sds', 'Women Federation', '2021-11-13', NULL, NULL, NULL, '<p>include &quot;vendor/autoload.php&quot;;<br />\n<br />\n<br />\nrequire &quot;cloudinary_php-master/autoload.php&quot;;<br />\nrequire &#39;cloudinary_php-master/src/Helpers.php&#39;;<br />\nrequire &quot;config-cloud.php&quot;;</p>\n', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_gigs`
--

CREATE TABLE `marketplace_gigs` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `sub_cat` varchar(255) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `label` varchar(10) NOT NULL,
  `image` text NOT NULL,
  `descr` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `budget_range` varchar(255) DEFAULT NULL,
  `project_urgency` varchar(255) DEFAULT NULL,
  `project_duration` varchar(255) DEFAULT NULL,
  `service_city` varchar(255) DEFAULT NULL,
  `additional_comments` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `state` varchar(255) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '0',
  `posted_by` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_gigs`
--

INSERT INTO `marketplace_gigs` (`id`, `category`, `sub_cat`, `tags`, `title`, `label`, `image`, `descr`, `budget_range`, `project_urgency`, `project_duration`, `service_city`, `additional_comments`, `user_id`, `vendor_id`, `created_date`, `state`, `site_id`, `status`, `posted_by`) VALUES
(13, 'Liasioning Services', 'Social Media Campaigns', 'dfsdf', 'sdfsd', '', '', '{\"ops\":[{\"insert\":\"fdsfsd\\n\"}]}', 'Rs 1000-Rs 25000', 'Within 15 days', 'Regular', 'Kullu', '{\"ops\":[{\"insert\":\"fsdfsdfd\\n\"}]}', NULL, 12, '2022-01-20 10:46:17', 'Himachal Pradesh', 2, '0', 'vendor'),
(14, 'Compliance Services', 'SEO/SEM', 'fsdfsdf,sdfsd', 'sdfsdf', '', '', '{\"ops\":[{\"insert\":\"fsdfsdfsd\\n\"}]}', 'Rs 1000-Rs 25000', 'Within 1 week', 'Regular', 'Bishrampur', '{\"ops\":[{\"insert\":\"fsfsdf\\n\"}]}', NULL, 110, '2022-01-20 12:02:16', 'Jharkhand', 2, '0', 'vendor'),
(6, 'Technology Services', 'Web Development Services', 'Database Design,Web Design,Web Application,UX/UI', 'Creating a web application', 'Featured', 'https://www.fromdreamstolifestyle.com/wp-content/uploads/2012/08/Website-Blog-1024x683.jpg', '{\"ops\":[{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"I am looking for a developer or a team for designing and developing website for startup online tutoring, following are the main requirements:\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"1- The website will contain different sections like homepage, sign-in/sign-up, shopping cart, courses and programs, contact us, about us, …\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"2- The courses and program sections will provide list of online courses and educational programs are available for students to enroll in.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"3- When the student clicks on any of these courses and program, he will be directed to the related page that has more details/fees/schedule/how to join …\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"4- The students can choose the courses and programs he is interested in, and add them to shopping card, so he checks out and pay for them at the end.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"5- Ability for admins to update the content of the website pages dynamically through a back end.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"6- Ability for admins to track registrations, permissions, users form back end.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"7- Ability for the admins to track orders and payments from back end.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"8- Ability for admins to track courses and programs, and registered students in each program from back end.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Detailed website requirements will be provided upon agreement.\"},{\"insert\":\"\\n\"}]}', 'Rs 5000-Rs 10000', 'Within 15 days', 'One Time', 'Jammu', '{\"ops\":[{\"insert\":\"You will be asked to answer the following questions when submitting a proposal:\\ndescribe your experience in building similar websites, include links please.\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"What SW development technology you can use in this project ?\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"How many years of experience do you have in web development?\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"In case we needed to build mobile application later for students, do you have the knowledge/experience for do this ?\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}', NULL, 3, '2021-01-14 18:35:21', 'Jammu & Kashmir', 2, '1', 'vendor'),
(9, 'Liasioning Services', 'Digital Marketing', 'dada', 'dada', '', '', '{\"ops\":[{\"insert\":\"dada\\n\"}]}', 'Rs 500-Rs 5000', 'Within 1 week', 'Regular', 'Chainpur', '{\"ops\":[{\"insert\":\"dadad\\n\"}]}', NULL, 13, '2021-08-19 10:54:37', 'Jharkhand', 2, '1', 'vendor'),
(10, 'Compliance Services', 'Social Media Campaigns', 'dsd,sds', 'sdsdsds', '', '', '{\"ops\":[{\"insert\":\"sdssdsdsds\\n\"}]}', 'Rs 500-Rs 5000', 'Within 1 week', 'One Time', 'Kathua', 'dasdasdasd', NULL, 13, '2021-08-19 11:00:22', 'Jammu & Kashmir', 2, '0', 'vendor'),
(11, 'Company Incorporation', 'Meeting', 'dsadas', 'sdsad', '', '', 'sdsd', 'Less than Rs 500', 'Within 1 week', 'One Time', 'sadas', 'dsadas', 0, -1, '2022-01-13 19:21:49', 'sadsa', 3, '1', NULL),
(12, 'Compliance Services', 'Meeting', 'dsds', 'sd', '', '', 'dsdsds', 'Rs 500-Rs 5000', 'Within 1 week', 'One Time', 'sd', 'sds', 0, -1, '2022-01-13 19:24:52', 'sdsd', 3, '1', NULL),
(3, 'Marketing Services', 'Social Media Marketing', 'Twitter,Instagram,LinkedIn,Facebook', 'Social Media Marketing', '', '', '{\"ops\":[{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Responsibilities\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\" Develop, implement and manage our social media strategy\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\" Define most important social media KPIs\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\" Manage and oversee social media content Measure the success of every social media campaign\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\" Stay up to date with the latest social media best practices and technologies\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Use social media marketing tools such as Buffer\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\" Attend educational conferences\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\" Work with copywriters and designers to ensure content is informative and appealing\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Collaborate with Marketing, Sales and Product Development teams\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Monitor SEO and user engagement and suggest content optimization Communicate with industry professionals and influencers via social media to create a strong network\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Hire and train others in the team\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Provide constructive feedback\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"}]}', 'Rs 500-Rs 5000', 'Within 1 week', 'Regular', 'Jammu', '{\"ops\":[{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"The following requirements and qualifications:\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"• 2 years of experience as a Social Media Specialist or similar role\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"• Social Media Strategist using social media for brand awareness and impressions\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"• Excellent knowledge of Facebook, Twitter, LinkedIn, Pinterest, Instagram, Google+ and other social media best practices\"},{\"insert\":\"\\n\"}]}', NULL, 3, '2021-01-14 16:43:05', 'Jammu & Kashmir', 2, '1', 'vendor'),
(4, 'Marketing Services', 'Content Writing', 'Content Writing,Blog Content,Website Content', 'Content Writer / Social Media Marketing', '', '', '{\"ops\":[{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Looking for a content writer and general social media person for our crypto project to handle our twitter, medium and telegram.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Content writing is an important part especially when it comes to weekly content on updates and generally keeping the crowd entertained so to speak.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Social Media updates and content pushing are the most important part.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"You have to have worked in the crypto space and have extensive knowledge of it.\"},{\"insert\":\"\\n\"}]}', 'Rs 500-Rs 5000', 'Within 15 days', 'Regular', 'Jammu', '{\"ops\":[{\"insert\":\"Needs to hire 2 Freelancers\\nWe are looking to bring people who can write blogs for car manufactures & our services.\\n\"}]}', NULL, 3, '2021-01-14 17:07:01', 'Jammu & Kashmir', 3, '1', 'vendor'),
(5, 'Marketing Services', 'Content Writing', 'Blog Content,Copywriting,Website Content', 'Marketing Content Writer in Dogari & Hindi ', '', '', '{\"ops\":[{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"We\'re looking for a content writer to create written, SEO-focused content twice a week.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"The content will be focused around the pillars of our product offering (branding, kits, webstores, & events), as well as other aspects of our business, such as our service & support documentation.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"The content will vary based on suggested word count to rank for target keywords—between 500 & 1500 words each.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Skills the project requires:\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"  - Content portfolio. No work examples, no hire.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"  - Expertise in English\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"  - SEO experience/understanding\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"  - Our company targets Mortgage & Construction industries, so it would be helpful if you are familiar with it.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Skills this project are helpful:\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"  - Design understanding (typography, packaging, color use, iconography, etc)\"},{\"insert\":\"\\n\"}]}', 'Rs 5000-Rs 10000', 'Within 15 days', 'One Time', 'Jammu', '{\"ops\":[{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"In your proposal, please tell us about a similar content project you\'ve completed recently and the biggest obstacles you faced during that project. We also want to get to know you as a person, so please provide one or two paragraphs about yourself and your experience as a content writer.\"},{\"insert\":\"\\n\"}]}', NULL, 3, '2021-01-14 17:10:19', 'Jammu & Kashmir', 2, '1', 'vendor'),
(7, 'Technology Services', 'Web Development Services', 'HTML,WordPress,mySql,SMTP', 'Looking for web experts', '', '', '{\"ops\":[{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"My agency is looking to build it\'s web capabilities & im on the hunt for a number of different skillsets as follows,\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Web Designers\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Web Developers\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Shopify & Wordpress experts\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"HTML, PHP experts\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"UI/UX Designers & experts\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"CRO experts\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Google Analytics experts\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\\n\"}]}', 'Rs 5000-Rs 10000', 'Within 15 days', 'One Time', 'Kathua', '{\"ops\":[{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Candidates with experience in multiple areas above would be ideal & considered highly. With that being said, we want to find the best of the best in each area & i am open to speaking to specialists within particular areas above too.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"The ideal candidates will be available for atleast 3 hours per day, Mon-Fri 9am - 5pm AEST (Sydney Australia).\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"If the above sounds like a good fit for you, it would be great to hear from you and see some of your previous work.\"},{\"insert\":\"\\n\"}]}', NULL, 3, '2021-01-14 18:40:32', 'Jammu & Kashmir', 2, '1', 'vendor'),
(8, 'Technology Services', 'Web Development Services', 'HTML ,PHP,MySql,API,Paypal', 'Full-stack Web Developer', '', '', '{\"ops\":[{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"I\'m looking for an all rounder web developer for e-commerce site\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"1. Proven working experience in web programming\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"2. Top-notch programming skills and in-depth knowledge of modern HTML/CSS\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"3. Familiarity with at least one of the following programming languages: PHP, Javascript\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"4. A solid understanding of how web applications work including security, session management,\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"    and best development practices\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"5. Adequate knowledge of relational database systems, Object Oriented Programming and web\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"    application development\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"6. Hands-on experience with network diagnostics, network analytics tools\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"7. Experienced in Search Engine Optimization process\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"8. Aggressive problem diagnosis and creative problem solving skills\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"9. Strong organizational skills to juggle multiple tasks within the constraints of  timelines and\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"     budgets with business acumen\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"10. Ability to work and thrive in a fast-paced environment, learn rapidly and master diverse web\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"     technologies and techniques.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"11. Google Analytics/Google Tag Manager setup/Google ads (I have official certificates)\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"12. Good knowledge in google API\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"13. Good knowledge in google platform\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"14. MySQL/SQL user\"},{\"insert\":\"\\n\"}]}', 'Rs 5000-Rs 10000', 'Within 15 days', 'One Time', 'Akhnoor', '{\"ops\":[{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Good knowledge in DB Structure.\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#222222\"},\"insert\":\"Good knowledge in XML/JSON\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"}]}', NULL, 3, '2021-01-14 19:24:49', 'Jammu & Kashmir', 2, '1', 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_investment`
--

CREATE TABLE `marketplace_investment` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `aditional_details` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `project_stage` varchar(255) NOT NULL,
  `support_expectation` varchar(255) NOT NULL,
  `investor_role` varchar(255) NOT NULL,
  `investment_amount` int(100) NOT NULL,
  `investment_against` varchar(255) NOT NULL,
  `investment_details` varchar(255) NOT NULL,
  `verified` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `label` int(11) NOT NULL,
  `posted_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace_investment`
--

INSERT INTO `marketplace_investment` (`id`, `site_id`, `vendor_id`, `project_type`, `category`, `title`, `short_desc`, `description`, `aditional_details`, `tags`, `project_stage`, `support_expectation`, `investor_role`, `investment_amount`, `investment_against`, `investment_details`, `verified`, `status`, `created_date`, `label`, `posted_by`) VALUES
(2, 2, 3, 'Women Entrepreneur', 'Tourism', 'indust2', 'short 2', 'desc2', 'wow2', 'tag2', 'Achieving Sales', 'Skills,Resources', 'Active', 1000, 'Debident', 'about1', 1, 1, '2021-05-05 12:02:43', 1, 'team'),
(3, 2, 3, 'Women Entrepreneur', 'Tourism', 'indust2', 'short 2', 'desc2', 'wow2', 'tag2', 'Achieving Sales', 'Skills,Resources', 'Active', 1500, 'Debident', 'about1', 1, 1, '2021-05-05 12:04:20', 2, 'vendor'),
(4, 2, 1, 'First-Time Entrepreneur', 'Industry', '1', '1', '1', '1', '1', 'Pre startup/ R&D', '', 'Slient', 999, 'Investment Against', '', 1, 1, '2021-05-05 12:16:48', 0, 'admin'),
(5, 2, 1, 'First-Time Entrepreneur', 'Industry', '2', '2', '2', '2', '2', 'Pre startup/ R&D', '', 'Slient', 999, 'Investment Against', '', 1, 1, '2021-05-05 12:29:51', 0, 'team'),
(6, 2, 1, 'First-Time Entrepreneur', 'Industry', '3', '3', '3', '3', '3', 'Pre startup/ R&D', 'Mentorship,Skills,Resources', 'Slient', 1200, 'Equity', '3', 1, 1, '2021-05-05 13:03:09', 2, 'vendor'),
(7, 2, 2, 'Women Entrepreneur', 'Travel', 'dasdas', 'dasdasd', 'dasdas', 'dasd', 'dasdas', 'Achieving Sales', '', 'Slient', 999, 'Investment Against', '', 1, 1, '2021-05-21 21:41:33', 0, 'admin'),
(8, 2, 2, 'Women Entrepreneur', 'Travel', 'dasdas', 'dasdasd', 'dasdas', 'dasd', 'dasdas', 'Achieving Sales', '', 'Slient', 999, 'Investment Against', '', 1, 1, '2021-05-21 21:45:54', 1, 'team'),
(9, 2, 2, 'Digital Entrepreneur', 'Travel', 'dasdas', 'dasdasd', 'dasdas', 'dasd', 'dasdas', 'Achieving Sales', '', 'Slient', 999, 'Investment Against', '', 1, 1, '2021-05-21 21:45:54', 1, 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_jobs`
--

CREATE TABLE `marketplace_jobs` (
  `id` int(11) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `job_category` varchar(100) NOT NULL,
  `skills_required` varchar(200) NOT NULL,
  `job_desc` text NOT NULL,
  `reqd_exp_min` varchar(100) NOT NULL,
  `reqd_exp_max` varchar(100) NOT NULL,
  `sal_max` varchar(20) NOT NULL,
  `sal_min` varchar(200) NOT NULL,
  `num_opening` bigint(12) NOT NULL,
  `validity` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `position_lvl` varchar(50) NOT NULL,
  `pref_lang` varchar(100) NOT NULL,
  `perks` varchar(255) NOT NULL,
  `travel_reqd` varchar(100) NOT NULL,
  `site_id` int(6) NOT NULL,
  `vendor_id` int(9) NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `verified` int(11) NOT NULL,
  `work_place` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_date` timestamp NULL DEFAULT current_timestamp(),
  `verify` int(11) NOT NULL DEFAULT 0,
  `approved` int(11) NOT NULL DEFAULT 0,
  `industry` text NOT NULL,
  `state` text NOT NULL,
  `work_type` varchar(200) NOT NULL,
  `position_type` text NOT NULL,
  `parent_id` int(11) NOT NULL,
  `age_label` text NOT NULL,
  `designation` text NOT NULL,
  `qualification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_jobs`
--

INSERT INTO `marketplace_jobs` (`id`, `job_title`, `job_category`, `skills_required`, `job_desc`, `reqd_exp_min`, `reqd_exp_max`, `sal_max`, `sal_min`, `num_opening`, `validity`, `department`, `position_lvl`, `pref_lang`, `perks`, `travel_reqd`, `site_id`, `vendor_id`, `status`, `verified`, `work_place`, `city`, `views`, `created_date`, `verify`, `approved`, `industry`, `state`, `work_type`, `position_type`, `parent_id`, `age_label`, `designation`, `qualification`) VALUES
(1, 'hj', 'vbng ', 'HTML, CSS', 'gytftfghh ghh', '1', '2', '78', '1', 5, '08/31/2020', 'HR', 'h', 'mn', '', 'yes', 2, 2, 1, 1, NULL, 'Delhi', 121, '2021-05-09 18:35:21', 1, 0, '', '', 'part_time', '', 0, '', '', ''),
(2, 'job title2', 'titlt2', 'php,laravel,mysql', 'lorem sndsdsnd sdid wjei', '4', '0', '230000', '', 5, '12/07/19', 'HR', 'sfjk', 'english', '', 'no', 11, 2, 1, 1, NULL, NULL, 0, '2020-08-08 15:19:40', 0, 0, '', '', 'part_time', '', 0, 'featured', 'app developer', ''),
(3, 'job title4', 'category4', 'php,coding', 'sjnkwwn we rrwrr werlwler sdwhie ', '4', '7', '3300000', '', 7, '23/09/21', 'Accounts', 'snnkd sdu', 'hindi', '', 'no', 9, 2, 1, 1, NULL, NULL, 0, '2021-05-09 18:44:50', 0, 0, '', '', 'part_time', '', 0, '', 'app developer', ''),
(5, 'Fundraisers', 'dasdasd', 'Codeigniter, Zend, Javascript', '• The primary job responsibilities are to prospect, coach and manage channel partner & employees. • TSM will be responsible for planning & managing sales and marketing activities of minimum 3 Digital channel partners, TSM will own the primary and tertiary billing of the assigned channel partners.', '1', '4', 'Unpaid', '', 2, '05/19/2021', 'FINANCE', 'ddad', 'sadsad', '', 'no', 2, 2, 1, 1, NULL, NULL, 0, '2021-05-19 16:23:30', 1, 0, '', '', '', '', 0, '', 'app developer', ''),
(6, 'Looking for Volunteers', 'Volunteer', 'Codeigniter, Codeigniter', 'asdasd', '2', '2', 'Unpaid', '', 12, '05/31/2021', 'HR', 'senior', 'sdadasd', '', 'yes', 2, 14, 0, 1, NULL, 'Bangalore', 0, '2021-05-19 16:23:42', 0, 0, '', '', '', '', 0, '', 'cms developer', 'high school'),
(8, 'Looking for Volunteers', 'Volunteer', 'Codeigniter, Codeigniter', 'asdasd', '2', '2', 'Unpaid', '', 12, '05/31/2021', 'HR', 'senior', 'sdadasd', '', 'yes', 2, 14, 0, 1, NULL, NULL, 0, '2021-05-19 16:23:42', 0, 0, '', '', '', '', 0, '', 'cms developer', 'intermediate'),
(9, 'Fundraisers', 'Accountant', ' Javascript', '• The primary job responsibilities are to prospect, coach and manage channel partner & employees. • TSM will be responsible for planning & managing sales and marketing activities of minimum 3 Digital channel partners, TSM will own the primary and tertiary billing of the assigned channel partners.', '1', '4', 'Unpaid', '', 2, '05/19/2021', 'FINANCE', 'ddad', 'sadsad', '', 'no', 11, 2, 1, 1, NULL, NULL, 0, '2021-05-19 16:23:30', 0, 0, '', '', '', '', 0, '', 'hr', 'high school'),
(10, 'Teaching', 'Web Design', 'PHP', 'dfg', '1', '2', '30000', '', 4, '04/31/2022', 'Volunteer', '1', 'English', '', 'No', 11, 2, 1, 1, NULL, NULL, 0, '2021-08-23 22:46:17', 0, 0, '', '', '', '', 0, '', 'project managing', 'intermediate'),
(11, 'Teacher', 'Community Halls', 'PHP, HTML, CSS, Javascript, JQuery', 'asd fdfaf afdfa df s', '2', '5', '35000', '', 5, 'full-time', 'IT', 'Junior Level', 'Hindi, English', '5 days a week,Informal dress code,Free snacks and beverages,', 'yes', 11, 1, NULL, 1, NULL, NULL, 0, '2021-11-22 14:11:16', 0, 0, '', '', 'urgent', '', 0, 'featured', 'hr', 'intermediate'),
(12, 'First', 'Education Training', 'PHP, HTML, CSS', '<p>fadfad df af afdf</p>\r\n', '3', '8', '45000', '', 6, '1:00 PM', 'ADMIN', 'Entry Level', 'Hindi, English', '5 days a week,Informal dress code,Health Insurance,Life Insurance,', 'yes', 11, 1, NULL, 1, NULL, NULL, 0, '2021-11-22 14:34:28', 0, 0, '', '', '', '', 0, '', 'hr', 'graduation'),
(13, 'Title', 'Accounting $ Finance', 'HTML, CSS', '<p>fdfaf afd f sd</p>\r\n', '2', '7', '60000', '30000', 10, '3:00 PM', 'FINANCE', 'Junior Level', 'Hindi, English, Punjabi', '5 days a week,Informal dress code,Free snacks and beverages,Health Insurance,', 'yes', 11, 1, NULL, 1, 'Part Time', 'Agra', 0, '2021-11-22 14:36:23', 0, 0, '', '', 'full-time', '', 0, '', 'project managing', 'graduation'),
(14, 'first 1', 'Business', 'a, b', '<p>faas df sdf&nbsp;</p>\r\n', '3', '5', '20000', '', 10, '3:00 PM', 'MARKETING', 'Junior Level', 'Hindi, English', '5 days a week,Informal dress code,cab/Transportation facility,Free snacks and beverages,', 'yes', 11, 1, NULL, 1, 'Full Time', 'Delhi', 0, '2021-11-22 15:01:10', 0, 0, '', '', 'full-time', '', 0, 'featured', 'project managing', 'graduation'),
(15, 'Second', 'Business', 'PHP, HTML, CSS', '<p>fadfad df af afdf</p>\r\n', '3', '8', '45000', '', 6, '1:00 PM', 'ADMIN', 'Entry Level', 'Hindi, English', '5 days a week,Informal dress code,Health Insurance,Life Insurance,', 'yes', 2, 1, 1, 1, NULL, NULL, 0, '2021-11-22 14:34:28', 1, 0, '', '', 'full-time', '', 0, '', 'php developer', 'graduation'),
(16, 'Title', 'Accounting $ Finance', 'a, b', '\r\nsdfghj\r\n\r\n', '3', '5', '35000', '', 4, '12:00 PM', 'ACCOUNTS', 'Junior Level', 'a, b', '5 days a week,Free snacks and beverages,', 'yes', 11, 1, NULL, 1, 'Part Time', 'Kosli', 0, '2021-11-23 16:02:08', 0, 0, '', '', 'freelancer', '', 0, 'featured', 'php developer', 'graduation'),
(17, 'First', 'Automotive Jobs', 'q, w', '<p>sdf</p>\r\n', '2', '4', '12000', '', 6, '3:00 PM', 'FINANCE', 'Entry Level', 'Hindi', '5 days a week,Health Insurance,', 'yes', 11, 1, NULL, 1, 'Part Time', 'CHANDIGARH', 0, '2021-11-23 16:03:48', 0, 0, '', '', 'part-time', '', 0, '', 'php developer', 'graduation'),
(18, 'puja', 'Accounting $ Finance', 'bhajan', 'knows puja', '3', '6', '100', '700', 12, '2021-02-21', 'puja', 'entry', 'hindi', 'free food', 'no', 11, 1, 0, 1, 'purnia', 'purnia', 0, '2021-12-24 16:34:04', 0, 0, 'puja', '', 'part-time', '', 0, '', 'web designing', 'graduation'),
(20, 'zscasefas', 'Telecommunications', '', '<p>sdefsef</p>\r\n', '3', '3', '12', '12', 10, '2021-12-03', 'HR', 'Entry Level', 'hindi', 'Informal dress code,', 'yes', 2, 1, 1, 1, 'purnia', 'purnia', 0, '2021-12-29 16:04:14', 1, 0, 'Entry Level', '', 'internship', '', 0, 'featured', 'web designing', 'graduation'),
(21, 'cook', 'Business', '', '<p>works</p>\r\n', '3', '7', '400', '400', 10, '2021-12-18', 'ADMIN', 'Entry Level', 'english', 'Free snacks and beverages,', 'yes', 11, 0, 0, 1, 'patna', 'patna', 0, '2021-12-29 16:08:05', 0, 0, 'Entry Level', '', 'contract', '', 0, '', 'web designing', 'master degree'),
(22, 'web devlopeent', 'image', 'java,c++,php', 'web devlopeent get', '', '', '50k', '6k', 10, '2022-10-12', 'IT', 'Senior Management Level', '', '5 days a week,cab/Transportation facility,Health Insurance', '', 2, 1, 0, 1, NULL, NULL, 0, '2022-03-04 09:57:17', 0, 0, 'review', '', 'WFH', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_products`
--

CREATE TABLE `marketplace_products` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `vendor_id` int(11) NOT NULL,
  `cat_id` varchar(50) DEFAULT NULL,
  `sub_cat_id` varchar(50) DEFAULT NULL,
  `child_cat_id` varchar(50) DEFAULT NULL,
  `product_title` varchar(500) DEFAULT NULL,
  `brand_name` varchar(500) DEFAULT NULL,
  `description` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `label` varchar(30) DEFAULT NULL,
  `SUK` varchar(20) DEFAULT NULL,
  `gst` varchar(10) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `cod` tinyint(1) NOT NULL DEFAULT 0,
  `item_type` text DEFAULT NULL,
  `origin` text DEFAULT NULL,
  `manufacturer` text DEFAULT NULL,
  `package_type` text DEFAULT NULL,
  `package_dimensions` text DEFAULT NULL,
  `package_units` text DEFAULT NULL,
  `returnable` int(11) DEFAULT NULL,
  `is_expirable` text DEFAULT NULL,
  `tnc` text DEFAULT NULL,
  `faqs` text DEFAULT NULL,
  `warranty_description` text DEFAULT NULL,
  `package_includes` text DEFAULT NULL,
  `tags` varchar(50) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `sub_user_id` int(11) DEFAULT NULL,
  `orp_id` int(11) NOT NULL,
  `posted_by` varchar(255) DEFAULT NULL,
  `coupon_id` text DEFAULT NULL,
  `cashback_id` text DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `ewallet_limit` int(11) DEFAULT NULL,
  `save_type` text NOT NULL DEFAULT 'ORG',
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_products`
--

INSERT INTO `marketplace_products` (`id`, `site_id`, `parent_id`, `vendor_id`, `cat_id`, `sub_cat_id`, `child_cat_id`, `product_title`, `brand_name`, `description`, `label`, `SUK`, `gst`, `status`, `views`, `cod`, `item_type`, `origin`, `manufacturer`, `package_type`, `package_dimensions`, `package_units`, `returnable`, `is_expirable`, `tnc`, `faqs`, `warranty_description`, `package_includes`, `tags`, `verified`, `sub_user_id`, `orp_id`, `posted_by`, `coupon_id`, `cashback_id`, `package_id`, `ewallet_limit`, `save_type`, `created_date`) VALUES
(21, 2, -1, 1, 'Fashion', 'Men', 'Casual', 'Hoodie', 'Oswal', '<p>==================&nbsp; &nbsp;PRODUCT DESCRIPTION ====================</p>', '', 'SKU675GYTS', '', 1, 0, 0, 'Hoodie', 'India', 'Oswal', 'Poly', '45,88,234,432', 'mtr,Grams', 7, '-1', '', '', '', '', 'tags,jsahj,skjadk', 1, -1, -1, 'VENDOR', NULL, NULL, NULL, NULL, 'ORG', '2022-04-15 15:55:12'),
(22, 2, -1, 1, 'Fashion', 'Women', 'Make-Up', 'Lipstick', 'Brand', '===============================&nbsp; &nbsp;LIPSTICK =============================', '', 'SKU675', '', 1, 0, 0, 'Lipstick', 'India', 'Manufacturer', 'Rigid', '5,5,10,50', 'cm,Grams', -1, '-1', '', '', '', '', 'tags,tgas', 1, -1, -1, 'ADMIN', NULL, NULL, NULL, NULL, 'ORG', '2022-04-15 16:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_professionals`
--

CREATE TABLE `marketplace_professionals` (
  `id` int(11) NOT NULL,
  `site_id` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `vendor_type` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `business_name` varchar(111) NOT NULL,
  `business_logo` varchar(500) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `bio` varchar(10000) NOT NULL,
  `whatsapp_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pin_code` varchar(255) DEFAULT NULL,
  `prof_skills` varchar(255) DEFAULT NULL,
  `skills_level` varchar(255) DEFAULT NULL,
  `interests` varchar(500) NOT NULL,
  `year_of_exp` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `insta_link` varchar(255) DEFAULT NULL,
  `created_date` date DEFAULT current_timestamp(),
  `prof_type` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `languages_known` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `video_intro` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_professionals`
--

INSERT INTO `marketplace_professionals` (`id`, `site_id`, `category`, `parent_id`, `vendor_id`, `vendor_type`, `name`, `email`, `phone_no`, `business_name`, `business_logo`, `designation`, `bio`, `whatsapp_no`, `address`, `city`, `state`, `pin_code`, `prof_skills`, `skills_level`, `interests`, `year_of_exp`, `profile_pic`, `fb_link`, `linkedin_link`, `twitter_link`, `insta_link`, `created_date`, `prof_type`, `industry`, `views`, `languages_known`, `label`, `video_intro`) VALUES
(1, 2, 'Campus Ambassadors', 1, 1, '13', 'Chinmayee Sahoo', 'ajay@gmail.com', '9315253689', '', '', '', 'I am a self-starter with strong interpersonal skills. I work efficiently both as an individual contributor as well as along with a team. I seek new challenges and try to think out-of-the-box while looking for creative solutions to a given problem. Besides the details given in my resume, I believe in character, values, vision, and action. I am a quick learner and believe in learning from my mistakes for I strongly feel that this virtue will take me ahead in life and career.”', '9315253689', NULL, 'Bangalore', 'Karnataka', '123302', 'Cyber law, criminal law,civil and family laws', '8,5', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638352357/main-thumb-590538670-200-uwgfoqoxcmymtfklyqgdxqqysmhsywgi_ow8qob.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Practicing Lawyer', 'IT', 58, 'Hindi, English,, Kannada', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(2, 2, 'Recruitment Consultant', 1, 1, '13', 'Richa Kumar', 'rajat@gmail.com', '9315253689', '', '', '', 'I am a self-starter with strong interpersonal skills. I work efficiently both as an individual contributor as well as along with a team. I seek new challenges and try to think out-of-the-box while looking for creative solutions to a given problem. Besides the details given in my resume, I believe in character, values, vision, and action. I am a quick learner and believe in learning from my mistakes for I strongly feel that this virtue will take me ahead in life and career.”', '9315253689', NULL, 'Delhi', 'Haryana', '123302', 'Legal research', '5', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638352357/main-thumb-712028474-200-uynxnrjpbugzsdzfvauoogflkpafhomy_gjo0lq.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Business Consultant', 'Public service\r\n', 3, 'Hindi, English', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(3, 2, 'Campus Ambassadors', 1, 1, '13', 'Poorvi Sirothia', 'ajay@gmail.com', '9315253689', '', '', '', 'I am a self-starter with strong interpersonal skills. I work efficiently both as an individual contributor as well as along with a team. I seek new challenges and try to think out-of-the-box while looking for creative solutions to a given problem. Besides the details given in my resume, I believe in character, values, vision, and action. I am a quick learner and believe in learning from my mistakes for I strongly feel that this virtue will take me ahead in life and career.”', '9315253689', NULL, 'Chandigarh', 'Punjab', '123302', 'Banking, Financial, security, IPOs', '4', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638352357/216419-56f8a896cb6bd_zp45er.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Practicing Lawyer', 'IT', 2, 'Hindi, English', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(4, 2, 'Recruitment Consultant', 1, 1, '13', 'Tripti Gupta', 'ajay@gmail.com', '9315253689', '', '', '', 'I am a self-starter with strong interpersonal skills. I work efficiently both as an individual contributor as well as along with a team. I seek new challenges and try to think out-of-the-box while looking for creative solutions to a given problem. Besides the details given in my resume, I believe in character, values, vision, and action. I am a quick learner and believe in learning from my mistakes for I strongly feel that this virtue will take me ahead in life and career.”', '9315253689', NULL, 'Rewari', 'Haryana', '123302', 'Legal research,French', '8,9', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638350854/images_1_rcpjzy.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Consultant', 'Public service\r\n', 3, 'Hindi, English', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(5, 2, 'Referral ', 1, 1, '13', 'Aditi Sharma', 'ajay@gmail.com', '9315253689', '', '', '', 'I am a self-starter with strong interpersonal skills. I work efficiently both as an individual contributor as well as along with a team. I seek new challenges and try to think out-of-the-box while looking for creative solutions to a given problem. Besides the details given in my resume, I believe in character, values, vision, and action. I am a quick learner and believe in learning from my mistakes for I strongly feel that this virtue will take me ahead in life and career.”', '9315253689', NULL, 'Rewari', 'Haryana', '123302', 'Legal research', '8', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638350727/bc66e47ddb96f133e0f27be97423b5f7_quregr.png', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'volunteer', 'Public service\r\n', 3, 'Hindi, English', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(6, 2, 'Referral ', 1, 1, '13', 'Divyanshi Shukla', 'yaspal@gmail.com', '9315253689', '', '', '', 'Hi!  I know how hard it is to become an influencer or attraction marketer...I didn\'t\' start at the top!!  I\'m here to create your social media attraction marketing posts and optimized schedules to your specifications! I do this daily for my own business so it\'s no problem creating some for you and yours!    Your work will be delivered super fast in Microsoft Word format to enable copy & paste for your ease, with discounts for monthly premium packages.  All include 1/2/3 revisions as standard, extra revisions can be added on.  I can personalize graphics for yourself or your brand to make sure you stay in people\'s minds!', '9315253689', NULL, 'Rewari', 'Haryana', '123302', 'Legal research', '8', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638350914/184947-56a710c4ad5b6_n9l6jw.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Freelancer', 'IT', 2, 'English', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(7, 2, 'Recruitment Consultant', 1, 1, '13', 'Nikita Pandey ', 'vineet@gmail.com', '9315253689', '', '', '', 'I\'ll write whatever you want me to. A short story, fanfiction, blog articles - anything! From sweet to spicy, let me bring your idea to life!    I\'d be thrilled to work with you and hear your ideas, so message me soon!', '9315253689', NULL, 'Rewari', 'Haryana', '123302', 'Blogs Writing, Article Writing, Advertisement Content, Technical Writing ', '8', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638350918/downloadFromDb_jwpx4w.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Volunteer', 'IT', 2, 'English', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(8, 2, 'Recruitment Consultant', 1, 1, '13', 'Agnihotram Mrudula ', 'ajay@gmail.com', '9315253689', '', '', '', 'Hey, I am a professional writer. I have worked for more over 2 years, and my goal is to provide best quality, irresistible, and plagiarism free work. I will format the work in a proper format such as APA, MLA, Harvard, Chicago.', '9315253689', NULL, 'Kankipadu', 'Andhra Pradesh', '123302', 'Technical writing,\r\n\r\nBlogs & Article writing', '8', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638349489/do-creative-technical-and-article-writing_ypv7dz.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Freelancer', 'IT', 1, 'Hindi, English, Telgu', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(11, 2, 'Recruitment Consultant', 1, 1, '13', 'Deepmala Pandey ', 'vineet@gmail.com', '9315253689', '', '', '', 'I\'ll write whatever you want me to. A short story, fanfiction, blog articles - anything! From sweet to spicy, let me bring your idea to life!    I\'d be thrilled to work with you and hear your ideas, so message me soon!', '9315253689', NULL, 'Rewari', 'Haryana', '123302', 'Blogs Writing, Article Writing, Advertisement Content, Technical Writing ', '8', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638350701/profile_logo__xw74ji.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Volunteer', 'IT', 1, 'English', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(12, 2, 'Placement Officer', 1, 1, '13', 'Khyati Sharma', 'yaspal@gmail.com', '9315253689', '', '', '', 'Hi!  I know how hard it is to become an influencer or attraction marketer...I didn\'t\' start at the top!!  I\'m here to create your social media attraction marketing posts and optimized schedules to your specifications! I do this daily for my own business so it\'s no problem creating some for you and yours!    Your work will be delivered super fast in Microsoft Word format to enable copy & paste for your ease, with discounts for monthly premium packages.  All include 1/2/3 revisions as standard, extra revisions can be added on.  I can personalize graphics for yourself or your brand to make sure you stay in people\'s minds!', '9315253689', NULL, 'Rewari', 'Haryana', '123302', 'Legal research', '8', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638350749/profile-image-invalid_id-6040e2df4485f600015ccfcd_jilnnw.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Freelancer', 'IT', 8, 'English', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(13, 2, 'Recruitment Consultant', 1, 1, '13', 'Trisha Sexsena', 'ajay@gmail.com', '9315253689', '', '', '', 'I am a self-starter with strong interpersonal skills. I work efficiently both as an individual contributor as well as along with a team. I seek new challenges and try to think out-of-the-box while looking for creative solutions to a given problem. Besides the details given in my resume, I believe in character, values, vision, and action. I am a quick learner and believe in learning from my mistakes for I strongly feel that this virtue will take me ahead in life and career.”', '9315253689', NULL, 'Rewari', 'Haryana', '123302', 'Legal research,French', '8,9', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638350921/IMG_20200131_WA_0002_ea37e4d04c_seurqg.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Consultant', 'Public service\r\n', 1, 'Hindi, English', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(14, 2, 'Campus Ambassadors', 1, 1, '13', 'Chinmayee Sahoo', 'ajay@gmail.com', '9315253689', '', '', '', 'I am a self-starter with strong interpersonal skills. I work efficiently both as an individual contributor as well as along with a team. I seek new challenges and try to think out-of-the-box while looking for creative solutions to a given problem. Besides the details given in my resume, I believe in character, values, vision, and action. I am a quick learner and believe in learning from my mistakes for I strongly feel that this virtue will take me ahead in life and career.”', '9315253689', NULL, 'Bangalore', 'Karnataka', '123302', 'Cyber law, criminal law,civil and family laws', '8,5', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638351094/1985526-6009af841e4d4_il1yrj.png', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Practicing Lawyer', 'IT', 48, 'Hindi, English,, Kannada', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(15, 2, 'Campus Ambassadors', 1, 1, '13', 'Yashasavi Shah', 'yaspal@gmail.com', '9315253689', '', '', '', 'Hi!  I know how hard it is to become an influencer or attraction marketer...I didn\'t\' start at the top!!  I\'m here to create your social media attraction marketing posts and optimized schedules to your specifications! I do this daily for my own business so it\'s no problem creating some for you and yours!    Your work will be delivered super fast in Microsoft Word format to enable copy & paste for your ease, with discounts for monthly premium packages.  All include 1/2/3 revisions as standard, extra revisions can be added on.  I can personalize graphics for yourself or your brand to make sure you stay in people\'s minds!', '9315253689', NULL, 'Rewari', 'Haryana', '123302', 'Legal research', '8', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638351094/main-thumb-1027460949-200-jqsdlzhjbsqvryxcfqhjbqkjyqfippnb_o1cfyb.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Freelancer', 'IT', 4, 'English', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(16, 2, 'Social Media Recruiter', 1, 109, '13', 'Deepmala Pandey ', 'vineet@gmail.com', '9315253689', '', '', '', 'I\'ll write whatever you want me to. A short story, fanfiction, blog articles - anything! From sweet to spicy, let me bring your idea to life!    I\'d be thrilled to work with you and hear your ideas, so message me soon!', '9315253689', NULL, 'Rewari', 'Haryana', '123302', 'Blogs Writing, Article Writingdasdas, Advertisementdsds, Content Writing', '8,3.4,5.5,5', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638351095/1196542-5f00e8d8ec107_p0thnz.jpg', 'https://www.instagram.com/', 'https://www.instagradsadasdam.com/', 'https://www.instagram.sadasdascom/', 'https://www.instagram.com/', '2021-11-15', 'Volunteer', 'IT', NULL, 'English, Hindi, Kandana', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(17, 2, 'Recruitment Consultant', NULL, 111, '13', 'Rishi Goyal', 'goyal.rishi6282@gmail.com', '', '', '', '', 'W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.', NULL, NULL, NULL, NULL, NULL, 'php, JAVA', '5.9, 2', '', NULL, 'https://graph.facebook.com/v2.12/978057423066672/picture', 'sadasdas', 'bnvbnv', NULL, NULL, '2021-12-03', 'Professional', NULL, 8, 'Hindi, English', NULL, NULL),
(18, 2, 'Recruitment Consultantfsdfsdf', NULL, 112, '51', 'Rishi Goyalfdsfsd', 'goyal.rishi6282@gmail.com', '', '', '', '', 'W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, referenfsdfsfsdces, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.', NULL, NULL, NULL, NULL, NULL, 'php, JAVA, sadasdas, dfsdfgdf', '7.2, 2, 2, 4.1', '', NULL, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1640595056/mlfyhscl5yomwfyk2uiz.png', 'sadasdas', 'bnvbnv', '', 'fdfgfdg', '2021-12-03', 'Professional', NULL, 1, 'Hindi, English, Spanish', NULL, NULL),
(19, 2, 'Placement Officer', NULL, 115, '13', 'Rishi Goyal', 'goyal.rishi6282@gmail.com', '', 'Acharya Nagarjuna University', 'https://media-exp1.licdn.com/dms/image/C4E0BAQFjqNBkKLLThA/company-logo_100_100/0/1519899247101?e=1648684800&v=beta&t=p7ICVsegRybDwjuguXTOqlHLFt7XTVkvR9t475AiU9Q', 'Placement Committee | Solaris Corporate Relations Head | IIM Udaipur \'22 | PPO-ICICI Lombard | Shapoorji Pallon', 'W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.', NULL, NULL, NULL, NULL, NULL, 'php, JAVA, sadasdas', '5.9, 2, 2', 'Reading, Traveling, Singing ', NULL, 'https://media-exp1.licdn.com/dms/image/C4E03AQEnNGOj35Kipg/profile-displayphoto-shrink_200_200/0/1636750063676?e=1646265600&v=beta&t=QwsRCO9G5vsinSHWFr6zRpxDwH9RStD-4ow3rRRS7Do', 'sadasdas', 'bnvbnv', 'Traveling Traveling Traveling ', 'fdfgfdg', '2021-12-03', 'Professional', NULL, 62, 'Hindi, English, Spanish', NULL, NULL),
(20, 2, 'Recruitment Consultantfsdfsdf', NULL, 112, '13', 'Rishi Goyalfdsfsd', 'ksha330@gmail.com', '', 'Acharya Nagarjuna University', 'https://media-exp1.licdn.com/dms/image/C4E0BAQFjqNBkKLLThA/company-logo_100_100/0/1519899247101?e=1648684800&v=beta&t=p7ICVsegRybDwjuguXTOqlHLFt7XTVkvR9t475AiU9Q', 'Placement Committee | Solaris Corporate Relations Head | IIM Udaipur \'22 | PPO-ICICI Lombard | Shapoorji Pallon', 'W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, referenfsdfsfsdces, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.', NULL, NULL, NULL, NULL, NULL, 'php, JAVA, sadasdas', '5.9, 2, 2', '', NULL, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1640595056/mlfyhscl5yomwfyk2uiz.png', 'sadasdas', 'bnvbnv', '', 'fdfgfdg', '2021-12-03', 'Professional', NULL, 45, 'Hindi, English, Spanish', NULL, NULL),
(21, 3, 'Recruitment Consultant', NULL, 115, '13', 'Rishi ', 'ksha330@gmail.com', '', 'Acharya Nagarjuna University', 'https://media-exp1.licdn.com/dms/image/C4E0BAQFjqNBkKLLThA/company-logo_100_100/0/1519899247101?e=1648684800&v=beta&t=p7ICVsegRybDwjuguXTOqlHLFt7XTVkvR9t475AiU9Q', 'Placement Committee | Solaris Corporate Relations Head | IIM Udaipur \'22 | PPO-ICICI Lombard | Shapoorji Pallon', 'W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, referenfsdfsfsdces, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.', NULL, NULL, NULL, NULL, NULL, 'php, JAVA, sadasdas', '5.9, 2, 2', '', NULL, 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638351094/1985526-6009af841e4d4_il1yrj.png', 'sadasdas', 'bnvbnv', '', 'fdfgfdg', '2021-12-03', 'Professional', NULL, 45, 'Hindi, English, Spanish', NULL, NULL),
(22, 3, 'Recruitment Consultant', 1, 116, '13', 'Nikita Pandey ', 'vineet@gmail.com', '9315253689', '', '', '', 'I\'ll write whatever you want me to. A short story, fanfiction, blog articles - anything! From sweet to spicy, let me bring your idea to life!    I\'d be thrilled to work with you and hear your ideas, so message me soon!', '9315253689', NULL, 'Rewari', 'Haryana', '123302', 'Blogs Writing, Article Writing, Advertisement Content, Technical Writing ', '8', '', '4', 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638350918/downloadFromDb_jwpx4w.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Volunteer', 'IT', 3, 'English', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(24, 3, 'Job site', 1, 118, '13', 'Chinmayee Sahoo', 'ajay@gmail.com', '9315253689', '', '', '', 'I am a self-starter with strong interpersonal skills. I work efficiently both as an individual contributor as well as along with a team. I seek new challenges and try to think out-of-the-box while looking for creative solutions to a given problem. Besides the details given in my resume, I believe in character, values, vision, and action. I am a quick learner and believe in learning from my mistakes for I strongly feel that this virtue will take me ahead in life and career.”', '9315253689', NULL, 'Bangalore', 'Karnataka', '123302', 'Cyber law, criminal law,civil and family laws', '8,5', '', '4', 'https://logodix.com/logo/1979221.jpg', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', 'https://www.instagram.com/', '2021-11-15', 'Practicing Lawyer', 'IT', 50, 'Hindi, English,, Kannada', NULL, 'Lorem ipsum Lorem ipsum Lorem ipsum'),
(25, 2, NULL, NULL, 116, '13', 'Kavita Magotra', 'recruiter2212@gmail.com', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 'https://graph.facebook.com/v2.12/3084514341875353/picture', NULL, NULL, NULL, NULL, '2022-01-14', 'Professional', NULL, NULL, NULL, NULL, NULL),
(26, 2, NULL, NULL, 117, '13', 'Kavita Magotra', 'recruiter2212@gmail.com', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 'https://graph.facebook.com/v2.12/3084514341875353/picture', NULL, NULL, NULL, NULL, '2022-01-14', 'Professional', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_proliferation`
--

CREATE TABLE `marketplace_proliferation` (
  `id` int(11) NOT NULL,
  `site_name` varchar(50) NOT NULL,
  `unique_key` varchar(150) NOT NULL,
  `site_url` varchar(150) NOT NULL,
  `site_details` varchar(150) NOT NULL,
  `site_logo` varchar(150) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `category` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `visibility` varchar(50) NOT NULL DEFAULT 'All India',
  `label` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_mobile` varchar(20) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_proliferation`
--

INSERT INTO `marketplace_proliferation` (`id`, `site_name`, `unique_key`, `site_url`, `site_details`, `site_logo`, `tags`, `category`, `type`, `visibility`, `label`, `admin_email`, `admin_mobile`, `created_date`) VALUES
(1, 'CCBUL', '', 'www.ccbul.com', 'CCBUL', 'https://ccbul.com/images/logo-wide.png', '', 'Online Sites', 'Jobs', 'All India', 0, 'ksha330@gmail.com', '', '2020-03-23 09:15:18'),
(2, '1jk ', '', '1jk.in', '1JK', 'https://res.cloudinary.com/karbi/image/upload/v1576883941/1jk_footer.png', 'testt', 'Social Media Page', 'E-Commerce', 'All India', 1, 'magotrakavita@gmail.com', '919916416118', '2019-12-11 15:42:33'),
(4, 'mintlime', '', 'mintlime.in', 'mintlime website', 'http://res.cloudinary.com/drnb3da5y/image/upload/v1576086604/a41cagxq8fdv0f2i41rf.png', '', 'Print', 'Charity', 'All India', 1, 'sreekanthsai01@gmail.com', '9875646517', '2019-12-11 17:50:05'),
(15, 'aa', '', 'aa', 'aa', 'no logo', 'aa,xx', 'Flyer', 'Events', 'All India', 1, 'ksha330@gmail.com', '111', '2020-03-23 11:28:03'),
(16, '1Jammu', '', 'www.1jammu.com', 'sasasa', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1631966968/yvpaj73oofkjvots4gvz.png', 'sasa,asas', 'Hoarding', 'Services', 'All India', 1, 'admin@1jammu.com', '8860546480', '2021-09-18 12:09:28'),
(17, 'wewq', '', 'www.abc.com', 'sadsad', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1631967197/yd1vn2jsff7t4u4s2xam.png', 'sasa,asas,dsadas', 'Online Sites', 'E-Commerce', 'All India', 0, 'ksha330@Gmail.com', '9535155911', '2021-09-18 12:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_properties`
--

CREATE TABLE `marketplace_properties` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `cat_id` text NOT NULL,
  `subcat_id` text NOT NULL,
  `property_user` varchar(200) NOT NULL,
  `owner_contact` int(11) NOT NULL,
  `owner_email` varchar(200) NOT NULL,
  `owner_name` varchar(200) NOT NULL,
  `offer_type` varchar(200) NOT NULL,
  `property_title` varchar(100) NOT NULL,
  `property_description` varchar(200) NOT NULL,
  `furnished_type` varchar(200) NOT NULL,
  `availability` varchar(100) NOT NULL,
  `property_map_approved` varchar(100) NOT NULL,
  `fire_noc` varchar(100) NOT NULL,
  `fire_hydrants` varchar(100) NOT NULL,
  `flooring` varchar(100) NOT NULL,
  `water_connection` varchar(100) NOT NULL,
  `electricity_connection` varchar(100) NOT NULL,
  `amenities` varchar(100) NOT NULL,
  `property_suitability` varchar(100) NOT NULL,
  `terms` varchar(100) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `verified` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `monthly_fee` int(11) NOT NULL,
  `society_fee` int(11) NOT NULL,
  `security_fee` int(11) NOT NULL,
  `price` varchar(200) NOT NULL,
  `posted_by` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace_properties`
--

INSERT INTO `marketplace_properties` (`id`, `site_id`, `cat_id`, `subcat_id`, `property_user`, `owner_contact`, `owner_email`, `owner_name`, `offer_type`, `property_title`, `property_description`, `furnished_type`, `availability`, `property_map_approved`, `fire_noc`, `fire_hydrants`, `flooring`, `water_connection`, `electricity_connection`, `amenities`, `property_suitability`, `terms`, `vendor_id`, `status`, `verified`, `rent`, `monthly_fee`, `society_fee`, `security_fee`, `price`, `posted_by`, `city`, `created_date`) VALUES
(1, 2, 'teacher', 'null', 'Owner', 14522, 'ayu@mail', 'Ay', '', 'the bull', '               hhgy hsgsh', 'Semi-furnished', 'Under Construction', 'Yes', 'Yes', 'Yes', 'Cemented', 'Yes', 'Residential', '', '', 'ayush', 0, '1', 0, 0, 0, 0, 0, '', 'VENDOR', 'AGRA', '2022-03-21 10:48:10'),
(2, 2, 'null', 'null', 'Agent', 0, '', '', '', 'Property Title', '', '', '', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Connection Specification', '', '', '', 0, '1', 0, 300, 100, 200, 0, '', 'VENDOR', '', '2022-03-22 12:03:24'),
(3, 2, 'null', 'null', 'Agent', 0, '', '', '', 'Property Title', '', '', '', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Connection Specification', '', '', '', 0, '1', 0, 100, 0, 0, 0, '100', '', 'AGRA', '2022-03-22 12:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_seeker`
--

CREATE TABLE `marketplace_seeker` (
  `id` int(11) NOT NULL,
  `site_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) NOT NULL,
  `photo_url` varchar(200) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `job_applied` int(11) DEFAULT NULL,
  `resumes` int(11) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pin` int(8) DEFAULT NULL,
  `key_skills` varchar(100) DEFAULT NULL,
  `skills_level` text DEFAULT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `pref_industry` varchar(100) DEFAULT NULL,
  `pref_department` varchar(100) DEFAULT NULL,
  `total_exp` varchar(100) DEFAULT NULL,
  `bio` text NOT NULL,
  `DOB` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `college_name` text DEFAULT NULL,
  `stream_name` text DEFAULT NULL,
  `verify` int(11) NOT NULL DEFAULT 0,
  `hash` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `availabilty` varchar(10) DEFAULT NULL,
  `Job_Id` int(11) DEFAULT NULL,
  `label` text NOT NULL,
  `facebook_link` text DEFAULT NULL,
  `instagram_link` text DEFAULT NULL,
  `twitter_link` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `website_link` text DEFAULT NULL,
  `github_link` text DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `wishlisted` int(11) DEFAULT NULL,
  `updated_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_seeker`
--

INSERT INTO `marketplace_seeker` (`id`, `site_id`, `vendor_id`, `photo_url`, `name`, `email`, `mobile`, `password`, `gender`, `job_applied`, `resumes`, `city`, `state`, `pin`, `key_skills`, `skills_level`, `qualification`, `type`, `pref_industry`, `pref_department`, `total_exp`, `bio`, `DOB`, `status`, `college_name`, `stream_name`, `verify`, `hash`, `created_date`, `availabilty`, `Job_Id`, `label`, `facebook_link`, `instagram_link`, `twitter_link`, `youtube_link`, `website_link`, `github_link`, `view_count`, `wishlisted`, `updated_time`) VALUES
(1, 2, 112, 'https://adeyl.com/iteach/sites/default/files/uploads/student_images/PASSPORT%20SIZE%20PHOTO%20NAFISA.jpg', 'Hetvi Hemani ', 'ksha330@gmail.com', '', '', 'Male', 2, 4, 'Noida', 'Uttar Pradesh', 0, 'HR, Recruitment, Operations', '50', '\r\nBachelor of Business Administration (B.B.A.)', 'Part Time', 'HR', 'HR', '10', 'You have a slight advantage over me since you know what you\'re looking for and I am still in the learning stage. From what I am good at, it sounds like you are looking for someone who will be able to manage quickly and effectively. I am a quick learner and highly passionate about the work I do.', NULL, 1, 'Naran Lala College', '\r\nBachelor of Business Administration (B.B.A.)', 1, NULL, '2021-12-23 23:20:56', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 4, 112, '0000-00-00 00:00:00'),
(2, 2, 112, 'https://i.pinimg.com/originals/48/35/b5/4835b5f9c52fd733eb26fb2c2b47bdc7.jpg', 'Sanjivni', 'agarwalharsh414@gmail.com', '', '', '', 0, 0, 'Banglore', 'Karnataka', 0, 'Accounts, Tally, MS Office', NULL, 'Bachelor of Science (B.Sc)', 'Part Time', 'HR', 'Account', '10', 'I vehemently feel as though I am the right candidate for the position on offer. I am a people person and I thoroughly enjoy working with and getting the best out of people. While I may be a B.Sc. in Marine Science Student, I\'ve always had an interest in Human Resources and my long-term goal would be to land an HR job with a company.\r\n\r\nAs I\'ve stated before, I bask in any opportunity to work with people and I believe I have the experience to help you. I have had many responsibilities that require me to manage people, get the best out of people, and find ways to motivate and help people. I\'ve been a captain of many sports teams, many of which I have led to tournament wins, this means that I understand and know how to elicit the best out of an individual and a group of individuals. My best skills are my confidence, willingness to learn and my communication skills. I love working with people, and have the required experience with English proficiency, mail writing and MS Office. In terms of recruitement, I have played key roles in organizing school festivals and neighborhood festivals, this means I know how to work with like-minded individuals towards a common goal and have the experience in regard to sifting through prospective candidates. After having seen this opportunity on Internshala, I knew I had to take the time to fill out and submit an application. I genuinely feel as though we would mutually benefit from my hiring, I look forward to hearing from you.', NULL, 1, 'University of Sydney', 'Bachelor of Science (B.Sc)', 1, NULL, '2021-12-23 23:17:32', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(3, 2, 11, 'https://edge.uacdn.net/static/thumbnail/user/af898b713af440bea78aff9480996cf8.jpg?q=100&w=512', 'Akshita Kanvas', 'agarwalharsh414@gmail.com', '', '', '', 0, 0, 'Banglore', 'Karnataka', 243001, 'java', NULL, NULL, 'Full Time', '', 'Finance', '10', 'I believe in sincerity, perfectionism and above all positive thinking. I reckon an opportunity to\r\nhave a long-term association with an organisation having dynamic work and to attain\r\nprofessional excellence and to contribute towards the success at the organisation.', NULL, 1, NULL, NULL, 1, NULL, '2021-12-02 07:25:04', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '0000-00-00 00:00:00'),
(4, 2, 2, 'https://res.cloudinary.com/dafjd2pd0/image/upload/v1638297848/IMG-20191225-WA0037_t1maum.jpg', 'Lara Lavanya', 'ksha330@gmail.com', '', '', '', 0, 0, 'Banglore', 'Karnataka', 201301, 'Marketing, Social Media , FB Marketing', NULL, NULL, 'Volunteer', '', 'Marketing', '10', 'I would like to increase my knowledge by applying my skills through internships. I would like to make use of my skills I had in a effective way. I had a good time management skills and I can work for the company using all of my strengths. It would be a great opportunity if my knowledge is useful to the company.', NULL, 1, 'Gpcet College', NULL, 1, NULL, '2021-12-11 20:15:07', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '0000-00-00 00:00:00'),
(9, 2, 1, 'https://images.squarespace-cdn.com/content/v1/54ff160de4b0a76e3a90696a/1562150296188-4XEX3JKWVO9CJX5I4UOO/us+American+passport+visa+photo+bath', 'Yashpal', '19bcs1019@gmail.com', '3456787658', '123', 'Male', 2, 1, 'Delhi', 'Delhi', 123303, '', NULL, NULL, 'volunteer', '', '', '10', 'Lorem ipsum dolor sit amet, ea vel', NULL, 1, NULL, NULL, 1, NULL, '2021-12-01 07:47:14', '', 9, '', NULL, NULL, NULL, NULL, NULL, NULL, 5, 9, '0000-00-00 00:00:00'),
(46, 2, 1, 'https://naukrirecruiter.naukri.com/profilePic/getpic?pid=1499333328rp2047352_medium4', 'Kavita', 'yaspalharyana@gmail.com', '+919535155911', '121212', '', 0, 0, ' Bangalore ', 'Karnataka', 560100, 'PHP, HTML, CSS, Java', '80, 90, 60, 25', 'B.TECH', 'volunteer', '', '', '0-1 yrs', 'Lorem ipsum dolor sit amet, ea vel', NULL, 1, 'Chandigarh University', 'CSE', 1, '7647966b7343c29048673252e490f736', '2021-12-01 07:47:16', '', NULL, '', 'https://www.facebook.com/Quizermania-103230075463318', 'https://www.instagram.com/cse_talks/', 'https://twitter.com/i/flow/login', NULL, 'https://bootsnipp.com/snippets/3xe9p', 'https://github.com/yaspalsingh115', 71, 46, '0000-00-00 00:00:00'),
(65, 2, 14, 'http://res.cloudinary.com/riyagw/image/upload/v1625488205/fjtrqfibd684d9rshrsu.png', 'Trial', 'okok@gmail.com', '9876543234', '', '', 0, 0, 'Banglore', 'Karnataka', 43434, 'trial', NULL, NULL, 'volunteer', '', '', '10', 'trial', NULL, 0, NULL, NULL, 0, NULL, '2021-12-01 07:58:50', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '0000-00-00 00:00:00'),
(66, NULL, 1, 'http://res.cloudinary.com/dlfnetokj/image/upload/v1636467249/MarketSeeker_daa_wrksht2.2akshay.pdf', 'Yaspal Singh', 'ankit@gmail.com', '09315253649', '\"sF0j5d7w\"', NULL, NULL, NULL, NULL, NULL, NULL, 'Public Speaking', NULL, NULL, NULL, NULL, NULL, NULL, 'v', NULL, 0, NULL, NULL, 0, NULL, '2021-11-09 15:39:32', NULL, 9, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(67, NULL, 1, 'http://res.cloudinary.com/dlfnetokj/image/upload/v1636467249/MarketSeeker_daa_wrksht2.2akshay.pdf', 'Yaspal Singh', 'amit@gmail.com', '09315253649', '\"ngWx4ImK\"', NULL, NULL, NULL, NULL, NULL, NULL, 'PHP, CSS, HTML', NULL, NULL, NULL, NULL, NULL, NULL, 'vb', NULL, 0, NULL, NULL, 0, NULL, '2021-11-09 15:50:06', NULL, 9, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(68, NULL, 1, 'http://res.cloudinary.com/dlfnetokj/image/upload/v1636467249/MarketSeeker_daa_wrksht2.2akshay.pdf', 'Yaspal Singh', 'a@gmail.com', '09315253649', '\"p875Uo5b\"', NULL, NULL, NULL, NULL, NULL, NULL, 'PHP, CSS, HTML', NULL, NULL, NULL, NULL, NULL, NULL, 'sdf', NULL, 0, NULL, NULL, 0, NULL, '2021-11-09 15:55:11', NULL, 9, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(69, 2, 1, 'http://res.cloudinary.com/dlfnetokj/image/upload/v1636473382/MarketSeeker_19BCS1019_CG_W3_2.pdf', 'Yaspal Singh', 'magotrakavita@gmail.com', '09315253649', '\"ObWFbgbz\"', NULL, NULL, NULL, NULL, NULL, NULL, 'PHP, CSS, HTML', NULL, NULL, NULL, NULL, NULL, NULL, 'vbbbb', NULL, 1, NULL, NULL, 1, NULL, '2021-12-13 21:00:44', NULL, 75, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(70, 2, 112, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1639432629/apple-touch-icon.png.png', 'sffds', 'ksha330@gmail.com1', '09898989898', '660499ae', NULL, NULL, NULL, ' Kangra ', 'Himachal Pradesh', 560100, '', NULL, '', NULL, NULL, NULL, NULL, '', NULL, 0, NULL, NULL, 0, 'ad61ab143223efbc24c7d2583be69251', '2021-12-13 22:00:29', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(71, 2, 112, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1639432652/android-chrome-192x192.png.png', 'kavia sha', 'ksha0@gmail.com', '09898989898', 'bb4ad58d', NULL, NULL, NULL, ' Karnah ', 'Jammu & Kashmir', 560100, '', NULL, '', NULL, NULL, NULL, NULL, '', NULL, 0, NULL, NULL, 0, 'addfa9b7e234254d26e9c7f2af1005cb', '2021-12-13 09:57:31', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(78, 2, 109, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1640237390/1979253.png.png', 'kavia sha', 'hr@idealvillage.inasasa', '09898989898', 'f0cbabc9', NULL, NULL, NULL, ' Kathua ', 'Jammu & Kashmir', 560100, 'CSS', NULL, 'BSC', NULL, NULL, NULL, NULL, '', NULL, 1, NULL, NULL, 0, '024d7f84fff11dd7e8d9c510137a2381', '2021-12-23 05:52:33', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(79, 2, 110, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1642670196/oqiw2aaeutiupnllfnb5.jpg', 'kavia sharma Job seeker', 'hr@idealvillage.in', '09898989898', 'a29f24e4', NULL, NULL, NULL, ' Karnah ', 'Jammu & Kashmir', 560100, 'CSS, dsadasd', ', 4.5', 'BSC', NULL, NULL, NULL, NULL, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy isIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is', NULL, 1, 'SYBFG COLLEGE OF ENGGE', 'BSC. BS IT', 1, '621bf66ddb7c962aa0d22ac97d69b793', '2022-01-20 12:34:49', NULL, NULL, '', NULL, 'dasdas', NULL, NULL, 'dasdsad', 'asdasd', NULL, NULL, '2022-01-25 14:39:48'),
(82, 2, 114, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1642703490/71kFzFbiINL._SX522_.jpg.jpg', 'Test Candidfate', 'candiate2@gmail.com', '54545454', '048ddf68', NULL, NULL, NULL, ' Chaibasa ', 'Jharkhand', 232323, 'CSS', NULL, 'BSC', NULL, NULL, NULL, NULL, '', NULL, 0, NULL, NULL, 0, 'e0ec453e28e061cc58ac43f91dc2f3f0', '2022-01-20 06:31:30', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00'),
(83, 3, 114, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1642716933/favicon.png.png', 'Test Candidfate', 'recruiter2212@gmail.com', '54545454', '90994af9', NULL, NULL, NULL, ' Barpeta Road ', 'Assam', 232323, 'CSS', NULL, 'BSC', NULL, NULL, NULL, NULL, '', NULL, 0, NULL, NULL, 0, '16c222aa19898e5058938167c8ab6c57', '2022-01-20 10:15:33', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_services`
--

CREATE TABLE `marketplace_services` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `orp_id` int(11) DEFAULT NULL,
  `parent_id` int(255) NOT NULL DEFAULT 0,
  `cat_id` varchar(50) NOT NULL,
  `sub_cat_id` varchar(50) DEFAULT NULL,
  `child_cat_id` varchar(50) DEFAULT NULL,
  `service_name` varchar(5000) DEFAULT NULL,
  `package_name` text DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `package_description` text DEFAULT NULL,
  `features` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `label` varchar(30) DEFAULT NULL,
  `measurement_unit_id` varchar(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `cod` int(11) DEFAULT NULL,
  `revisions` int(11) DEFAULT NULL,
  `include_delivery` int(11) DEFAULT NULL,
  `tnc` text DEFAULT NULL,
  `faqs` text DEFAULT NULL,
  `cashback_id` text DEFAULT NULL,
  `coupon_id` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `e_wallet_limit` text DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `views` int(255) DEFAULT 0,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `sub_user_id` int(11) DEFAULT NULL,
  `posted_by` varchar(255) DEFAULT NULL,
  `price` text DEFAULT NULL,
  `gst` text DEFAULT NULL,
  `save_status` varchar(10) NOT NULL DEFAULT 'ORG'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_services`
--

INSERT INTO `marketplace_services` (`id`, `site_id`, `vendor_id`, `orp_id`, `parent_id`, `cat_id`, `sub_cat_id`, `child_cat_id`, `service_name`, `package_name`, `description`, `package_description`, `features`, `label`, `measurement_unit_id`, `status`, `cod`, `revisions`, `include_delivery`, `tnc`, `faqs`, `cashback_id`, `coupon_id`, `tags`, `e_wallet_limit`, `created_date`, `views`, `verified`, `sub_user_id`, `posted_by`, `price`, `gst`, `save_status`) VALUES
(8, 2, 3, NULL, 0, 'Business Registration & Approvals', 'Limited Liability Partnership', '0', 'Register Limited Liability Partnership in India', NULL, '{\"ops\":[{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#212529\"},\"insert\":\"Limited Liability Partnership (LLP) is quite a popular legal structure for businesses. The main advantage of having LLP over General Partnership Firm is it limits the liabilities of its partners to their contributions to the business and also offers each partner protection from the negligence, misdeeds or incompetence of the other partners. The LLP is also easy and cheaper to incorporate than a private limited company, requires less compliance and can be a smart choice from a tax perspective.\"},{\"insert\":\"\\n\\n\"}]}', '0', 'Business Registration,Business Incorporation,Limited Liability Parternship', '', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-21 00:35:16', 378, 0, NULL, 'self', '999', NULL, 'ORG'),
(10, 1, 3, NULL, 0, 'Business Registration & Approvals', 'Shops & Establishment Act', '0', 'Shop Establishment Registration', NULL, '{\"ops\":[{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#031633\"},\"insert\":\"Shop Establishment registration, also called labour registration is a state based registration and as a business owner of a shop or establishment, you are compulsorily required to get the same registered under the Shops and Establishment Act (Shop Act) within 30 days of eastablishing it, whether or not you have employee. The Labor department of the state issues such licence and has facilitated system for getting shop licence online. The Act is designed to regulate payment of wages, hours of work, leave, holidays, terms of service and other work conditions of people employed in shop and commercial establishments. Initially the registration under shop and establishment act was done manually by sending a statement with prescribed documents to the chief inspector, but after the year 2010 this process have been exclusively made online and every occupier of shop and establishment needs to register by making a shop licence online application under this act through prescribed procedur and get the shop act registration online. The licence is granted for a period of 5 years and has to be renewed thereafter by making a online shop act licence renewal application to the department.\"},{\"insert\":\"\\n\"}]}', '0', 'Shop Acts,Compliances,Taxation', '', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-23 00:50:51', 218, 0, NULL, 'self', '999', NULL, 'ORG'),
(13, 2, 3, NULL, 0, 'Compliance and Legal Services', 'Legal Services', 'Legal Drafting', 'I will draft strong legal agreement, contract or l', 'package name', '{\"ops\":[{\"insert\":\"With a team of Corporate Lawyers with over 10+ years of corporate and commercial law matters experience. We provide quality Solutions and expertise in legal work in ASIA, U.K., UAE and other Countries. We have proficiency in drafting and reviewing of Contracts & Agreement in the sector of Real Estate, E-commerce, Energy and other sectors.\\nI will draft well toned and legally binding agreements that keep you safe from unnecessary legal summons.\\n\\nExpert in drafting\\nindependent contractors agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"memorandum of agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"sales Purchase agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"non- disclosure agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"employment contract\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"lease agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"shareholders agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"investment contract\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"partnership agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"website terms and conditions\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"website privacy policy.\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"website refund policy\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Affidavit.\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"General Power of Attorney\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Freelance Agreement.\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Work Space Sharing Agreement.\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\" Franchise Agreement.\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\" Software License Agreement.\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\" Rent Agreement.\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\" Partnership Agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}', 'kadsjahdjshajfgjcajd hsgajs', 'Legal Drafts,  Drafting,Documentation,Legal Contracts, Agreements', '1', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-22 20:24:54', 227, 1, NULL, 'self', '100', '2', 'ORG'),
(14, 2, 3, NULL, 0, 'Compliance and Legal Services', 'Legal Services', 'Legal Consultation', 'I will be your lawyer and give you legal advice', NULL, '{\"ops\":[{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"I am a professional lawyer, with multi-dimensional experience in several legal areas. I am specialized in Intellectual Property Law, Corporate & Contract law. I will provide you my below mentioned services:\"},{\"insert\":\"\\n\\nEmployment Agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Non-Disclosure Agreement (NDA)\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Wills or Testament\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Website Terms and Conditions\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"GDPR and Compliance Regulation\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Privacy Policy\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Memorandum of Understanding (MOU)\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Job Offer Letter\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Leave Policy\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Service Agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Partnership Agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Shareholders Agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Real Estate Purchase Agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Proof read\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Review contracts\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Freelancer or Independent Contractor Agreement \"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Rental Agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Investment Contract\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Service Agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Software License Agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Website Development Agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"SEM, SMM, SEO Agreement\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}', '0', 'Legal Drafts,  Drafting,Documentation,Legal Contracts, Agreements', '', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-22 20:39:15', 153, 0, NULL, 'self', '999', NULL, 'ORG'),
(15, 2, 3, NULL, 0, 'Legal', 'Legal Aid', 'Legal Consultation', 'I will be your online legal consultant', NULL, '{\"ops\":[{\"insert\":\"I have over 12 years experience in family, corporate and commercial law matters.\\nI provide quality Solutions and expertise in legal work in the following jurisdictions; India, USA, U.K, UAE, Singapore and Australia\\n\\n\\nI will draft perfectly-toned and legally binding legal documents that keep you safe from unnecessary legal summons:\\nLegal research memos\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Summarize case law\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Research case law\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Provide a legal opinion\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Legal consultation services\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Legal guidance\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Legal opinions\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}', '0', 'Legal Drafts,  Drafting,Documentation,Legal Contracts, Agreements', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-22 20:44:50', 124, 1, NULL, 'self', '999', NULL, 'ORG'),
(16, 2, 3, NULL, 0, 'Compliance & Legal Services', 'Legal Services', 'Document Notary', 'I will electronically notarize documents in the Ja', NULL, '{\"ops\":[{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#333333\"},\"insert\":\"Notary will be done on the submission of valid identidityAiming to provide end to end solutions for all types of document requirements such as Rental Agreement for Individual and Business, Lease Agreement for Individual and Business, Vehical Lease Agreement, Non Disclosure Agreement, Loan Agreement, Joint Venture and Contractor Agreement, Service Provider Agreement and many other notary related agreement services online.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#333333\"},\"insert\":\"Upon due verification, we will courier you the notraised document at given address at additional cost.\"},{\"insert\":\"\\n\"}]}', '0', 'Notary,Legal Agreement,Drafting,Rent Agreement', '', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-22 20:54:41', 184, 0, NULL, 'self', '999', NULL, 'ORG'),
(17, 2, 3, NULL, 0, 'Promotions & Branding', 'Branding Services', 'Branding Services', 'I will design a corporate identity package for branding needs.', NULL, '{\"ops\":[{\"insert\":\"It is necessary to have an elegant logo, typography, different colour schemes on your product in order to fulfil your desired purpose, and uplift your business.\\n\\nMy Procedure includes:\\n\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Guidelines for Brand\"},{\"insert\":\"\\n\\nLogo usage guidelines\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Colour palette\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Typography \"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Style guide\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Deliver in PDF,JPEG, PNG format\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"LOGO DESIGN\"},{\"insert\":\"\\n\\nFile Format (JPG, PNG, PDF, AI, EPS)\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"2 logo concepts\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Unlimited revisions\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Extras\"},{\"insert\":\"\\n\\nEnvelope\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Letter Heads\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Deliver in (JPG, PDF, AI & EPS)\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Business cards\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Mug\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Stationary\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"T-Shirt\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"File Cover\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Social media kit\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Brand book\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Hand bag\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\\n\"}]}', '0', 'Logo Design,Letter Head Design,Business Card Design,Corporate Gifting ', '1', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-22 20:58:57', 120, 1, NULL, 'self', '999', NULL, 'ORG'),
(18, 2, 3, NULL, 0, 'Compliance and Legal Services', 'IPR Services', 'Trademark & Copyright Filling', 'I will be filing your trademarks,copyrights and patents,in any country', NULL, '{\"ops\":[{\"attributes\":{\"color\":\"#62646a\",\"background\":\"#ffffff\"},\"insert\":\"I have filed and drafted more than 500 patent, trademark and copyright cases in Indian,USA, UK, Canada, Australia, New Zealand, WIPO, Madrid and Europe. I have also managed several prior art and patentability searches for individuals as well as for companies. \"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"color\":\"#62646a\",\"background\":\"#ffffff\"},\"insert\":\"The aim is to provide a top quality service at a very competitive price. Testimony to this is that our clients keep coming back for repeat service. What underpins our excellence is our unique blend of relevant skills, talent and experience. \"},{\"insert\":\"\\n\"}]}', '0', 'IP,Tradmrk,Copyright,Patent', '', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-22 22:19:51', 83, 0, NULL, 'self', '999', NULL, 'ORG'),
(20, 2, 3, NULL, 0, 'Human Resource Services', 'Talent Acquisition & Recruitment', '0', 'I will source and recruit perfect IT sectors candidates', NULL, '{\"ops\":[{\"insert\":\"As an industry expert with years of agency and in-house, full cycle recruitment experience, I know that people hire people, not resumes. Companies are not just looking for a set of qualifications that match a job description. To ensure a complete match, I extensively interview both companies and candidates to find out who they are and what they are looking for as companies and as people.\\n\\nI offer both clients and candidates exceptional professional service, absolute confidentiality, and the most ethical values as a professional recruiter. I pride myself on my ability to dig deep into my clients’ companies to create a path for growth and success.\\n\\nIf you looking for a talented Candidate Sourcing & Recruiting specialist on very reasonable price, then please hire me.\\n\\n\"}]}', '0', 'Talent Acquisition,Hiring,Human Resource', '1', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-21 23:19:02', 139, 0, NULL, 'self', '999', NULL, 'ORG'),
(21, 2, 3, NULL, 0, 'Human Resource Services', 'Talent Acquisition & Recruitment', '0', 'I will do linkedin recruitment for you', NULL, '{\"ops\":[{\"insert\":\" We’re a dedicated team of YOUNG and ENTHUSIASTIC professionals serving the Outsourcing industry with an aim to be a reliable and trustworthy service provider. We provides a unique range of Recruiting, Talent Sourcing and Lead Generation services designed to support and enhance your Human Capital needs through all phases of management and growth. \\n\\n\"},{\"attributes\":{\"bold\":true},\"insert\":\"We\'re EQUALLY committed to deliver efficient and unparalleled service REGARDLESS of either It\'s going be a ONE Day Assignment or an Ongoing Engagement.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"bold\":true},\"insert\":\"Our Services include but not limited to:\"},{\"insert\":\"\\nTalent Sourcing\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"CV Search\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Pre-Qualification\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"LinkedIn Research\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Lead Generation (List Building)\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"ATS/Database Management\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Virtual Assistance/Data Entry\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}', '0', 'Recruitment,Hiring,Talent Aqcuisition', '2', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-21 23:23:08', 114, 1, NULL, 'self', '999', NULL, 'ORG'),
(22, 2, 115, NULL, 0, 'Human Resource Services', 'Talent Acquisition & Recruitment', '0', 'HR consultation and recruitment services', NULL, '{\"ops\":[{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"looking for a good resource but not finding it, going through any technical problem? you are on the right page to get services for your \"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\",\"bold\":true},\"insert\":\"HR\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\" queries.\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"My area of expertise is\"},{\"insert\":\"\\nHuman Resource & Administration\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Recruitment & selection\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Talent acquisition\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Development and re-organizing\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Training & development\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Job description and Job posting\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Employee reference checks\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Total Reward Structure\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Organizational Development\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Business development\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Strategy & planning\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Outsourcing\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Implementation of strategies.\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}', '0', 'Recruitment,HR,Talent Aqcuisition ', '2', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-21 00:06:22', 27, 0, NULL, 'self', '999', NULL, 'ORG'),
(23, 2, 3, NULL, 0, 'Human Resource Services', 'Performance Management', '0', 'Create job ads, write resumes, and complete other HR tasks', NULL, '{\"ops\":[{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"We provide resume writing, screening, resume editing based upon the job you\'re applying for. I can also create job descriptions and job advertisements to post on various recruiting websites of your choice. I will also provide other general HR duties as needed.  \"},{\"insert\":\"\\n\"}]}', '0', 'Resume Writting ,Screening', '1', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-21 00:13:48', 113, 1, NULL, 'self', '999', NULL, 'ORG'),
(24, 2, 3, NULL, 0, 'Human Resource Services', 'Performance Management', '0', 'Prepare your payroll for a month', NULL, '{\"ops\":[{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"I will run your payroll for a month. I will need your payroll to be setup. You must have a payroll provider. If you do not have one, I can set one up at an additional extra that can be purchased with this gig. \"},{\"insert\":\"\\n\"}]}', '0', 'PayRoll Management,HR Policy,HR Consultant', '', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-21 06:24:37', 163, 0, NULL, 'self', '999', NULL, 'ORG'),
(25, 2, 3, NULL, 0, 'Business Registration & Approvals', 'GST Registration', '0', 'GST Registration', NULL, '{\"ops\":[{\"attributes\":{\"color\":\"#212529\"},\"insert\":\"GST is the biggest tax reform in India, tremendously improving ease of doing business and increasing the taxpayer base in India by bringing in millions of small businesses in India. By abolishing and subsuming multiple taxes into a single system, tax complexities would be reduced while tax base is increased substantially. Under the new GST regime, all entities involved in buying or selling goods or providing services or both are required to obtain GST registration. Entities without GST registration would not be allowed to collect GST from a customer or claim input tax credit of GST paid or could be penalized. Further, GST registration is mandatory once an entity crosses the minimum threshold turnover of starts a new business that is expected to cross the prescribed turnover.\"},{\"insert\":\"\\n\"}]}', '0', 'GST,Taxtaion,Tax Reform', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-21 00:24:27', 22, 1, NULL, 'self', '999', NULL, 'ORG'),
(26, 2, 3, NULL, 0, 'Business Registration & Approvals', 'Import Export Code (IEC)', '0', 'IEC REGISTRATION', NULL, '{\"ops\":[{\"attributes\":{\"background\":\"#f5f8fa\",\"color\":\"#212529\"},\"insert\":\"Import Export code is required by any business for execution of any import or export of goods. We cannot proceed any transaction without this Code.\"},{\"insert\":\"\\nImport Export Code (IEC) is required by every person for executing any transaction out of India. Without Import export code we cannot done any transaction from foreign country. By forwarding any sale to foreign country some benefits received in GST and other laws.\"},{\"attributes\":{\"align\":\"justify\"},\"insert\":\"\\n\"},{\"insert\":\"In India one department name Directorate General of Foreign Trade (DGFT) issue IEC registration to business entity. After submitting all documents to department it will take 15-20 working days for certificate.\"},{\"attributes\":{\"align\":\"justify\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}', '0', 'Import Export,IEC', '', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-21 00:27:20', 139, 0, NULL, 'self', '999', NULL, 'ORG'),
(27, 2, 3, NULL, 0, 'Business Registration & Approvals', 'Private Company', '0', 'If you want  to register business  Private Limited company', NULL, '{\"ops\":[{\"insert\":\"Private Limited Company registration is one of the best legal structure option for businesses in India. Private limited company must have at least two shareholders and a maximum of 200 shareholders. The directors of company will treat as separate person from business and have no liability for company. In a case of default, banks / creditors can only sell company assets but not personal assets of directors.\"},{\"attributes\":{\"align\":\"justify\"},\"insert\":\"\\n\"},{\"insert\":\"Start-ups and growing start-ups prefer private limited company as it allows outside funding to be raised easily, limits the liabilities of its shareholders and enables them to offer employee stock options plain (ESOP) to pull in top talent of employees. Private Limited Company Registration can be done through by Ovakil all over India.\"},{\"attributes\":{\"align\":\"justify\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}', '0', 'Business Registration,Company Registration ,Private Limited Company', '1', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-21 00:31:35', 136, 1, NULL, 'self', '999', NULL, 'ORG'),
(31, 2, 3, NULL, 0, 'Business Registration & Approvals', 'FSSAI License', '0', 'Get FSSAI License for Your Food Business', NULL, '{\"ops\":[{\"insert\":\"FSSAI license (also known commonly as food license) stands for Food and Safety Association of India. FSSAI is an body that functions autonomously for defining the rules and taking care of the standards that involves consumable food market prescribed under FSSAI act. FSSAI registration includes restaurants, food manufacturing units and food packing industry as well. FSSAI license is mandatory for all persons that fall under the distribution and production of food materials and must be registered under the FSSAI act, where in turn they are provided with an FSSAI certificate online contains 14 digit FSSAI number which has to be used along with the logo in the packaging of the food materials. Every person who is a food business operator (FBO) needs food licensing from the Food department of India. FSSAI online can be obtained from filing the information in FSSAI registration form of the food license website. There are 3 kinds of food license provided in India i.e. Basic registration, state license and central license.\"},{\"attributes\":{\"align\":\"justify\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}', '0', 'Fassai,Food License', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-23 01:13:50', 215, 1, NULL, 'self', '999', NULL, 'ORG'),
(32, 2, 3, NULL, 0, 'Media & PR', 'PR Management', '0', 'I will provide you with strategies and tactics to get news coverage', NULL, '{\"ops\":[{\"insert\":\"Are you an expert in your field? Do you have a social media following online? Want to get your business in the news? Discover how you can use public relations to reach more potential clients, grow your business and secure news coverage in the local or national press.\\n\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"What you’ll learn\"},{\"insert\":\"\\n\\nHow to get free press coverage in major news publications such as Mashable, New York Times, TechCrunch, Ad Week, The Guardian, BBC and many more.\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Free and paid tools you can use to pitch to media (both local and national)\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"How to leverage tentpoles for media coverage\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Selling your story to the press\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Finding journalist contacts fast\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Contributions and letter opportunities\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"initial\"},\"insert\":\"Press release tips and distribution channels (Yahoo, AP, Reuters and more) \"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"News video syndication and the power of micro content for news coverage\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}', '0', 'PR,Press Release,Media Coverage', '', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-23 06:18:14', 117, 0, NULL, 'self', '999', NULL, 'ORG'),
(33, 2, 3, NULL, 0, 'Media & PR', 'PR Management', '0', 'I will write and distribute press releases with editorial variation', NULL, '{\"ops\":[{\"insert\":\"Special editorial news content for authentic visibility alongside our press release and distribution service for \"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Technology/Business/Entertainment/Travel\"},{\"insert\":\" with unique channel partners like \"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"ToI, Hindustan Times, Dainik Bhaskar, The Hindu, Indian Express etc.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Our Native English copywriters and ex-journalist team\"},{\"insert\":\" manages strategic communication for blue chip clients worldwide.\\n\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Complete service covering:\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Conceptualization:\"},{\"insert\":\" We help you with pitch ideas and write it for you.\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Formatting:\"},{\"insert\":\" Proper document formatting for PR newswires.\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Submission:\"},{\"insert\":\" \\n(a) Press release distribution service with high acceptance rates.\\n(b) Additional unique editorial content without the label \\\"press release\\\".\\n\\n\\n\\n\"}]}', '0', 'PR ,Press Release,Media Coverage', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-23 06:22:21', 161, 1, NULL, 'self', '999', NULL, 'ORG'),
(34, 2, 3, NULL, 0, 'Media & PR', 'PR Management', '0', ' will get you known through PR aka public relations', NULL, '{\"ops\":[{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Review of product and messaging\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Create PR strategy and key media messages\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Research competitors\' media efforts\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Create target media lists\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Press releases: draft, finalize, publish\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Targeted, 1-on-1 personalized media outreach\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Research suitable guest article opportunities\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Create article pitches, pitch editors\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Write articles, edit, submit for publication (generally 600 to 1000 words)\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Newsjacking (rapid response to hot news topics)\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Support live events (if necessary)\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Award submissions\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"Live monitoring of press coverage\"},{\"insert\":\"\\n\"},{\"attributes\":{\"color\":\"#62646a\",\"background\":\"#ffffff\"},\"insert\":\"Monthly reporting on activities and results\"},{\"insert\":\"\\n\"}]}', '0', 'PR, Press Relase, Media Coverage', '', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-23 06:24:37', 35, 0, NULL, 'self', '999', NULL, 'ORG'),
(35, 2, 3, NULL, 0, 'Media & PR', 'PR Management', '0', 'I will write and distribute press releases with editorial variation', NULL, '{\"ops\":[{\"insert\":\"Special editorial news content for authentic visibility alongside our press release and distribution service for \"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Technology/Business/Entertainment/Travel\"},{\"insert\":\" with unique channel partners like \"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Fox34, CBS, Google News, NBC, ABC, Yahoo News,\"},{\"insert\":\"\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"APNews, IBTimes etc.\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Our Native English copywriters and ex-journalist team\"},{\"insert\":\" manages strategic communication for blue chip clients worldwide.\\n\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Complete service covering:\"},{\"insert\":\"\\n\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Conceptualization:\"},{\"insert\":\" We help you with pitch ideas and write it for you.\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Formatting:\"},{\"insert\":\" Proper document formatting for PR newswires.\\n\"},{\"attributes\":{\"background\":\"initial\",\"bold\":true},\"insert\":\"Submission:\"},{\"insert\":\" \\n(a) Press release distribution service with high acceptance rates.\\n(b) Additional unique editorial content without the label \\\"press release\\\".\\n\\n\"}]}', '0', 'PR,Press Release,Media Coverage', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-23 06:29:06', 26, 1, NULL, 'self', '999', NULL, 'ORG'),
(36, 2, 3, NULL, 0, 'Media & PR', 'PR Management', '0', 'I will create a strategic PR plan for your company', NULL, '{\"ops\":[{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#62646a\"},\"insert\":\"A strategic PR plan is the bible companies need for a solid marketing and PR presence to stand out amongst competitors. The plan starts by diving into what you are looking to accomplish. Whether its a product launch, rebranding or increasing awareness, this plan will give you a plug-and-play template to bring your brand to the next level based on your needs and goals. From strategic press outreach to event ideas and stunts, the plan will be tailormade for you.\"},{\"insert\":\"\\n\"}]}', '0', 'PR,Press Release ,Media Coverage', '', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-23 06:31:43', 36, 0, NULL, 'self', '999', NULL, 'ORG'),
(37, 2, 3, NULL, 0, 'Media & PR', 'Newspaper', 'English Daily', 'Times Of India', NULL, 'Times Of India is a multi-platform news and information media company. Founded in 1838, this English leading newspaper is owned by Benetton, Coleman and Co. with a mission is to serve as a forum for better understanding and unity to help make India one nation. The newspaper offers up-to-date news on Indian and Global current affairs, business, movies, politics, technology, science and much more. With a readership of 7.59 million, it has a circulation around 3.3 million which also makes it one of the best newspapers all over the globe.\r\n\r\nThrough its unique way of news telling, Times of India delivers high quality content across print and digital platforms. Times of India Advertisement can reach out and target a large number of audiences quite efficiently. Your plan to book classified and display ads in TOI can turn out to be very advantageous and budget friendly. The newspaper serves 1844 categories in 55 cities which can very effortlessly give maximum returns on advertisement.\r\n\r\nOverall, before booking any Times of India ad, one should remember the following things in mind:', '0', 'Times of India,TOI,Times Group,English Newspaper', '1', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-13 01:05:00', 34, 1, NULL, 'self', '999', NULL, 'ORG'),
(38, 2, 3, NULL, 0, 'Media & PR', 'Newspaper', 'English Daily', 'Hindustand Times', NULL, '{\"ops\":[{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#58595b\"},\"insert\":\"With an average readership of 37.7 lakhs across the nation with a circulation of 14 lakhs, Hindustan Times is one of the best newspapers in India. The paper was found in 1924 and has 1.16 million copies as of November, 2015. Balanced and honest storytelling, from political correspondents to photographs, everything about this newspaper is unique and one-of-its-kind. The newspaper has rich social content which has not only helped it to grow amongst the readers but is also beneficial for those who want to book ad in Hindustan Times.\"},{\"insert\":\"\\n\"}]}', '0', 'HindustandTImes,English Daily,Newspaper', '', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-25 03:11:26', 48, 0, NULL, 'self', '999', NULL, 'ORG'),
(39, 3, 114, NULL, 0, 'Media & PR', 'Newspaper', 'English Daily', 'Daily Excelsior ', NULL, '{\"ops\":[{\"attributes\":{\"color\":\"#222222\",\"background\":\"#ffffff\",\"bold\":true},\"insert\":\"Daily Excelsior   daily newspaper of Jammu & Kashmir.\"},{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#222222\"},\"insert\":\" has grown its way to the top of the journalism heap, which has also been acknowledged by the host of journalistic honours conferred on the organisation. During the past nearly five decades of business history, Excelsior under the leadership of its founder-cum-Editor-in-Chief, S D Rohmetra, has carved a significant niche for itself among its readers by virtue of its in-depth, investigative reporting and its stylish visual format. The well-read editorials are known for their unbiased and informed commentary on events and developments.\"},{\"insert\":\"\\n\"}]}', '0', 'Jammu Ksahmir,Newspaper,News,Daily Excelsior', '2', NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-25 03:20:40', 43, 0, NULL, 'self', '999', NULL, 'ORG'),
(47, 2, 109, NULL, 0, 'Human Resource Services', 'Talent Acquisition & Recruitment', '0', 'Recruitment Services', NULL, '{\"ops\":[{\"insert\":\"We are professional Human Resources and business consultant skilled in technical recruitment, candidate databases, job posting and social media HR Marketing.\n\n\"}]}', '0', 'Recruitments,Talent Acquisition,Hiring', '', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-02 21:54:15', 12, 1, NULL, 'self', '999', NULL, 'ORG'),
(48, 2, 114, NULL, 0, 'Licenses & Approvals', 'GST Registration', '0', 'asdsad', NULL, '{\"ops\":[{\"insert\":\"\n\"}]}', '0', 'dsadsa', '1', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-21 05:10:27', 3, 1, NULL, 'self', '999', NULL, 'ORG'),
(49, 2, 2, 1, 0, 'doctor', 'Brain', 'fdsfds', 'afd akd sakjd', NULL, '<p>k dslkjfdkj whfewhfh ie</p>', '0', '<p>li esoifh eisjflie&nbsp;</p>', NULL, 'Per Day', 1, 1, 63, 1, '<p>wj iowf eifh iowhep</p>', '<p>&nbsp;jewoijfiejf eiwjpoew</p>', NULL, NULL, NULL, NULL, '2022-03-13 20:33:14', 0, 1, NULL, 'ORP', '3214', '5', 'ORG'),
(50, 2, 2, 1, 0, 'Website', 'Static', 'CSS Effects', 'service title', 'Package name', '<pre style=\"color: rgb(0, 0, 0); letter-spacing: normal;\">UPDATE `marketplace_services` SET `cat_id`=\'+\"\'\"+\'Website\'+\"\'\"+\',`sub_cat_id`=\'+\"\'\"+\'Static\'+\"\'\"+\',`child_cat_id`=\'+\"\'\"+\'CSS Effects\'+\"\'\"+\',`service_name`=\'+\"\'\"+\'service title\'+\"\'\"+\',`description`=\'+\"\'\"+\'cksn fkjdbsjk fbjhabjsdhdvajdvshaj vdhsa\'+\"\'\"+\',`measurement_unit_id`=\'+\"\'\"+\'Per Day\'+\"\'\"+\',`tnc`=\'+\"\'\"+\'salkdskj abkdjsbajvbdjs\'+\"\'\"+\',`faqs`=\'+\"\'\"+\'pta nhi 2\'+\"\'\"+\',`tags`=\'+\"\'\"+\'tag,tgas\'+\"\'\"+\',`price`=\'+\"\'\"+\'3214\'+\"\'\"+\',`package_name`=\'+\"\'\"+\'Package name\'+\"\'\"+\',`package_description`=\'+\"\'\"+\'sa dskjabjsbajhdvjsav d jhsvajhd vsha\'+\"\'\"+\',`cod`=\'+\"\'\"+\'1\'+\"\'\"+\',`revisions`=\'+\"\'\"+\'\'+\"\'\"+\',`include_delivery`=\'+\"\'\"+\'1\'+\"\'\"+\',`gst`=\'+\"\'\"+\'0\'+\"\'\"+\' WHERE `id`=\'+\"\'\"+\'50\'+\"\'\"+\'</pre>', '<pre style=\"color: rgb(0, 0, 0); letter-spacing: normal;\">UPDATE `marketplace_services` SET `cat_id`=\'+\"\'\"+\'Website\'+\"\'\"+\',`sub_cat_id`=\'+\"\'\"+\'Static\'+\"\'\"+\',`child_cat_id`=\'+\"\'\"+\'CSS Effects\'+\"\'\"+\',`service_name`=\'+\"\'\"+\'service title\'+\"\'\"+\',`description`=\'+\"\'\"+\'cksn fkjdbsjk fbjhabjsdhdvajdvshaj vdhsa\'+\"\'\"+\',`measurement_unit_id`=\'+\"\'\"+\'Per Day\'+\"\'\"+\',`tnc`=\'+\"\'\"+\'salkdskj abkdjsbajvbdjs\'+\"\'\"+\',`faqs`=\'+\"\'\"+\'pta nhi 2\'+\"\'\"+\',`tags`=\'+\"\'\"+\'tag,tgas\'+\"\'\"+\',`price`=\'+\"\'\"+\'3214\'+\"\'\"+\',`package_name`=\'+\"\'\"+\'Package name\'+\"\'\"+\',`package_description`=\'+\"\'\"+\'sa dskjabjsbajhdvjsav d jhsvajhd vsha\'+\"\'\"+\',`cod`=\'+\"\'\"+\'1\'+\"\'\"+\',`revisions`=\'+\"\'\"+\'\'+\"\'\"+\',`include_delivery`=\'+\"\'\"+\'1\'+\"\'\"+\',`gst`=\'+\"\'\"+\'0\'+\"\'\"+\' WHERE `id`=\'+\"\'\"+\'50\'+\"\'\"+\'</pre>', '<p>li esoifh eisjflie&nbsp;</p>', NULL, 'Per Day', 1, 1, 0, 1, '<pre style=\"color: rgb(0, 0, 0); letter-spacing: normal;\">UPDATE `marketplace_services` SET `cat_id`=\'+\"\'\"+\'Website\'+\"\'\"+\',`sub_cat_id`=\'+\"\'\"+\'Static\'+\"\'\"+\',`child_cat_id`=\'+\"\'\"+\'CSS Effects\'+\"\'\"+\',`service_name`=\'+\"\'\"+\'service title\'+\"\'\"+\',`description`=\'+\"\'\"+\'cksn fkjdbsjk fbjhabjsdhdvajdvshaj vdhsa\'+\"\'\"+\',`measurement_unit_id`=\'+\"\'\"+\'Per Day\'+\"\'\"+\',`tnc`=\'+\"\'\"+\'salkdskj abkdjsbajvbdjs\'+\"\'\"+\',`faqs`=\'+\"\'\"+\'pta nhi 2\'+\"\'\"+\',`tags`=\'+\"\'\"+\'tag,tgas\'+\"\'\"+\',`price`=\'+\"\'\"+\'3214\'+\"\'\"+\',`package_name`=\'+\"\'\"+\'Package name\'+\"\'\"+\',`package_description`=\'+\"\'\"+\'sa dskjabjsbajhdvjsav d jhsvajhd vsha\'+\"\'\"+\',`cod`=\'+\"\'\"+\'1\'+\"\'\"+\',`revisions`=\'+\"\'\"+\'\'+\"\'\"+\',`include_delivery`=\'+\"\'\"+\'1\'+\"\'\"+\',`gst`=\'+\"\'\"+\'0\'+\"\'\"+\' WHERE `id`=\'+\"\'\"+\'50\'+\"\'\"+\'</pre>', '<pre style=\"color: rgb(0, 0, 0); letter-spacing: normal;\">UPDATE `marketplace_services` SET `cat_id`=\'+\"\'\"+\'Website\'+\"\'\"+\',`sub_cat_id`=\'+\"\'\"+\'Static\'+\"\'\"+\',`child_cat_id`=\'+\"\'\"+\'CSS Effects\'+\"\'\"+\',`service_name`=\'+\"\'\"+\'service title\'+\"\'\"+\',`description`=\'+\"\'\"+\'cksn fkjdbsjk fbjhabjsdhdvajdvshaj vdhsa\'+\"\'\"+\',`measurement_unit_id`=\'+\"\'\"+\'Per Day\'+\"\'\"+\',`tnc`=\'+\"\'\"+\'salkdskj abkdjsbajvbdjs\'+\"\'\"+\',`faqs`=\'+\"\'\"+\'pta nhi 2\'+\"\'\"+\',`tags`=\'+\"\'\"+\'tag,tgas\'+\"\'\"+\',`price`=\'+\"\'\"+\'3214\'+\"\'\"+\',`package_name`=\'+\"\'\"+\'Package name\'+\"\'\"+\',`package_description`=\'+\"\'\"+\'sa dskjabjsbajhdvjsav d jhsvajhd vsha\'+\"\'\"+\',`cod`=\'+\"\'\"+\'1\'+\"\'\"+\',`revisions`=\'+\"\'\"+\'\'+\"\'\"+\',`include_delivery`=\'+\"\'\"+\'1\'+\"\'\"+\',`gst`=\'+\"\'\"+\'0\'+\"\'\"+\' WHERE `id`=\'+\"\'\"+\'50\'+\"\'\"+\'</pre>', NULL, NULL, 'tag,tgas', NULL, '2022-03-13 20:34:32', 0, 1, NULL, 'ORP', '3214', '0', 'DRAFT'),
(51, 2, 2, 1, 0, 'Website', 'Static', 'Simple (Only Design)', 'Service Title', 'package_name', '<p>sabkjhskja gdskja kjdsgajh dgskadg ljads</p><p><br></p>', '<p>pack_desc</p>', '<p>package_features</p>', NULL, 'Per Hour', 1, 1, 0, 1, '<p>jjakj dsahkjdh kqjhdkj</p>', '<p>kk hskjfhj ehsfehs fhs jdsj ;ow afh shfj</p>', '57', NULL, 'kjahd,alkdhsa,lkfsahlf', NULL, '2022-03-21 23:37:40', 0, 1, NULL, 'ORP', '500', '0', 'ORG');

-- --------------------------------------------------------

--
-- Table structure for table `measurement_unit`
--

CREATE TABLE `measurement_unit` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurement_unit`
--

INSERT INTO `measurement_unit` (`id`, `name`) VALUES
(1, 'Acre/Acres'),
(2, 'Ampere/Amperes'),
(3, 'Bag/Bags'),
(4, 'Barrel/Barrels'),
(5, 'Blade/Blades'),
(6, 'Box/Boxes'),
(7, 'Carat/Carats'),
(8, 'Carton/Cartons'),
(9, 'Case/Cases'),
(10, 'Centimeter/Centimeters'),
(11, 'Chain/Chains'),
(12, 'Combo/Combos'),
(13, 'Cubic Centimeter/Cubic Centimeters'),
(14, 'Cubic Foot/Cubic Feet'),
(15, 'Cubic Inch/Cubic Inches'),
(16, 'Cubic Meter/Cubic Meters'),
(17, 'Cubic Yard/Cubic Yards'),
(18, 'Degrees Celsius'),
(19, 'Degrees Fahrenheit'),
(20, 'Dozen/Dozens'),
(21, 'Dram/Drams'),
(22, 'Fluid Ounce/Fluid Ounces'),
(23, 'Foot/Feet'),
(24, 'Forty-Foot Container '),
(25, 'Furlong/Furlongs'),
(26, 'Gallon/Gallons'),
(27, 'Gill/Gills'),
(28, 'Grain/Grains'),
(29, 'Gram/Grams'),
(30, 'Gross'),
(31, 'Hectare/Hectares'),
(32, 'Hertz'),
(33, 'Inch/Inches'),
(34, 'Kiloampere/Kiloamperes'),
(35, 'Kilogram/Kilograms'),
(36, 'Kilohertz'),
(37, 'Kilometer/Kilometers'),
(38, 'Kiloohm/Kiloohms'),
(39, 'Kilovolt/Kilovolts'),
(40, 'Kilowatt/Kilowatts'),
(41, 'Liter/Liters'),
(42, 'Long Ton/Long Tons'),
(43, 'Megahertz'),
(44, 'Meter/Meters'),
(45, 'Metric Ton/Metric Tons'),
(46, 'Mile/Miles'),
(47, 'Milliampere/Milliamperes'),
(48, 'Milligram/Milligrams'),
(49, 'Millihertz'),
(50, 'Milliliter/Milliliters'),
(51, 'Millimeter/Millimeters'),
(52, 'Milliohm/Milliohms'),
(53, 'Millivolt/Millivolts'),
(54, 'Milliwatt/Milliwatts'),
(55, 'Nautical Mile/Nautical Miles'),
(56, 'Ohm/Ohms'),
(57, 'Ounce/Ounces'),
(58, 'Pack/Packs'),
(59, 'Pair/Pairs'),
(60, 'Pallet/Pallets'),
(61, 'Parcel/Parcels'),
(62, 'Perch/Perches'),
(63, 'Piece/Pieces'),
(64, 'Pint/Pints'),
(65, 'Plant/Plants'),
(66, 'Pole/Poles'),
(67, 'Pound/Pounds'),
(68, 'Quart/Quarts'),
(69, 'Quarter/Quarters'),
(70, 'Rod/Rods'),
(71, 'Roll/Rolls'),
(72, 'Set/Sets'),
(73, 'Sheet/Sheets'),
(74, 'Short Ton/Short Tons'),
(75, 'Square Centimeter/Square Centimeters'),
(76, 'Square Foot/Square Feet'),
(77, 'Square Inch/Square Inches'),
(78, 'Square Meter/Square Meters'),
(79, 'Square Mile/Square Miles'),
(80, 'Square Yard/Square Yards'),
(81, 'Stone/Stones'),
(82, 'Strand/Strands'),
(83, 'Ton/Tons'),
(84, 'Tonne/Tonnes'),
(85, 'Tray/Trays'),
(86, 'Twenty-Foot Container'),
(87, 'Unit/Units'),
(88, 'Volt/Volts'),
(89, 'Watt/Watts'),
(90, 'Wp'),
(91, 'Yard/Yards');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_type` text NOT NULL,
  `membership_title` text NOT NULL,
  `service_post` text NOT NULL,
  `job_post` text NOT NULL,
  `event_post` text NOT NULL,
  `charity_post` text NOT NULL,
  `media_post` text NOT NULL,
  `acc_to_mt` text NOT NULL,
  `acc_to_mp` text NOT NULL,
  `acc_to_mbo` text NOT NULL,
  `acc_to_mg` text NOT NULL,
  `benifits` text NOT NULL,
  `price` int(11) NOT NULL,
  `sdate` text NOT NULL,
  `edate` text NOT NULL,
  `dis_type` varchar(100) NOT NULL,
  `dis_amount` text NOT NULL,
  `cashback_amount` int(11) NOT NULL,
  `bop_dis_type` varchar(100) NOT NULL,
  `bop_dis_amount` int(11) NOT NULL,
  `product_post` text NOT NULL,
  `pro_comm` text NOT NULL,
  `ser_comm` text NOT NULL,
  `bank_account` int(11) NOT NULL DEFAULT 0,
  `validity` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `site_id`, `vendor_type`, `membership_title`, `service_post`, `job_post`, `event_post`, `charity_post`, `media_post`, `acc_to_mt`, `acc_to_mp`, `acc_to_mbo`, `acc_to_mg`, `benifits`, `price`, `sdate`, `edate`, `dis_type`, `dis_amount`, `cashback_amount`, `bop_dis_type`, `bop_dis_amount`, `product_post`, `pro_comm`, `ser_comm`, `bank_account`, `validity`, `created_date`) VALUES
(1, 2, 'e-Commerce', 'mem1', '200', '300', '400', '500', '600', '1', '1', '1', '1', 'benefits', 1000, '2022-04-04', '2022-05-01', 'flat', '2', 111, '', 0, '100', '20', '40', 0, 0, '2022-04-01 00:00:00'),
(2, 2, 'NGO', 'sdadas', '-1', '-1', '-1', '-1', '-1', '1', '1', '1', '1', 'dfdsvsf', 123, '2022-04-03', '2022-04-03', 'flat', '1', 222, '', 0, '-1', '10', '20', 0, 1, '2022-04-01 00:00:00'),
(3, 2, 'Events', 'evet', '-1', '200', '-1', '300', '-1', '1', '1', '1', '1', 'fdfndfjnb', 1000, '2022-04-01', '2022-04-22', 'flat', '2', 333, '%', 3, '100', '20', '', 0, 1, '2022-04-01 00:00:00'),
(4, 2, 'Events', 't4', '300', '300', '400', '500', '100', '', '', '', '', 'fdglkfgnkdf.', 2000, '2022-04-02', '2022-04-29', 'flat', '2', 444, 'flat', 4, '200', '20', '30', 0, 5, '2022-04-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `attachment` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `site_id`, `sender`, `receiver`, `message`, `attachment`, `status`, `created_date`) VALUES
(7, 2, 1, 3, 'body', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650625603/ixx0ew8ncmsxbprje8xc.jpg', 1, '2022-04-22 16:35:55'),
(8, 2, 1, 3, 'body', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650626856/ce2xnzqgxdqwd3ltqzdl.jpg', 1, '2022-04-22 16:56:49'),
(9, 2, 1, 1, 'I don\'t know', '', 1, '2022-04-22 18:19:37'),
(10, 2, 1, 1, 'Comment', '', 1, '2022-04-22 18:59:37'),
(11, 2, 1, 1, 'Only &#8377; 1000 can be transferred to your band account.', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650634496/ynkpwik3kkqyme6lzfgw.jpg', 1, '2022-04-22 19:04:04'),
(12, 2, 1, 1, 'dsfds', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650708366/krwyl78wpksbijkgu1jl.jpg', 1, '2022-04-23 15:35:12'),
(13, 2, 1, 1, 'safd', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650708436/hexflnoidcnabb0jqpsx.jpg', 1, '2022-04-23 15:36:26'),
(14, 2, 1, 1, '', '', 0, '2022-04-23 16:34:29'),
(15, 2, 1, 1, '', '', 0, '2022-04-23 16:43:39'),
(16, 2, 1, 1, '', '', 0, '2022-04-23 16:44:45'),
(17, 2, 1, 1, '', '', 0, '2022-04-23 16:46:39'),
(18, 2, 1, 1, '', '', 0, '2022-04-23 16:47:59'),
(19, 2, 1, 1, '   ', '', 1, '2022-04-23 17:28:06'),
(20, 2, 1, 1, 'commecntaklsn adsan kajdsbhkja hsdkj', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650715208/kr4csgjnwjsmz1ca4qmh.jpg', 1, '2022-04-23 17:29:07');

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
  `paid_from_ewallet` text NOT NULL,
  `paid_from_ebanking` text NOT NULL,
  `item_discount` text DEFAULT NULL,
  `coupon_id` text DEFAULT NULL,
  `coupon_discount` text DEFAULT NULL,
  `payment_status` text DEFAULT NULL,
  `payment_mode` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `order_status` text NOT NULL,
  `refer_by` text DEFAULT NULL,
  `referral_id` text DEFAULT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_date` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `anonymous` varchar(5) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `site_id`, `item_type`, `item_id`, `vendor_id`, `quantity`, `variant`, `variant_value`, `amount`, `paid_from_ewallet`, `paid_from_ebanking`, `item_discount`, `coupon_id`, `coupon_discount`, `payment_status`, `payment_mode`, `address`, `order_status`, `refer_by`, `referral_id`, `order_date`, `updated_date`, `name`, `email`, `anonymous`, `nationality`) VALUES
(1, 2, '5,5', '21,22', 38, '3,3', '62,65', NULL, '7494', '0', '0', '0', '', '0', 'PAID', 'PAYTM', '6', 'PENDING', '', '', '2022-04-16 17:16:51', '2022-04-16 17:16:51', NULL, NULL, 'NO', ''),
(2, 2, '5,5', '21,22', 38, '4,3', '61,64', NULL, '8093', '0', '0', '0', '', '0', 'PENDING', 'PAYTM', '6', 'PENDING', '', '', '2022-04-16 17:33:35', '2022-04-16 17:33:35', NULL, NULL, 'NO', ''),
(3, 2, '5,5', '21,22', 38, '4,3', '61,64', NULL, '8018.1', '0', '0', '74.9', '', '0', 'PENDING', 'PAYTM', '6', 'PENDING', '', '', '2022-04-16 17:36:27', '2022-04-16 17:36:27', NULL, NULL, 'NO', ''),
(4, 2, '5,5', '21,22', 38, '4,3', '61,64', NULL, '8018.1', '0', '0', '74.9', '', '0', 'PENDING', 'PAYTM', '6', 'PENDING', '', '', '2022-04-16 17:38:33', '2022-04-16 17:38:33', NULL, NULL, 'NO', ''),
(5, 2, '5,5', '21,22', 38, '4,3', '61,64', NULL, '8018.1', '0', '0', '74.9', '', '0', 'PENDING', 'PAYTM', '6', 'PENDING', '', '', '2022-04-16 17:39:24', '2022-04-16 17:39:24', NULL, NULL, 'NO', ''),
(6, 2, '5,5', '21,22', 38, '4,3', '61,64', NULL, '8018.1', '0', '0', '74.9', '', '0', 'PENDING', 'PAYTM', '6', 'PENDING', '', '', '2022-04-16 17:39:39', '2022-04-16 17:39:39', NULL, NULL, 'NO', ''),
(7, 2, '5,5', '21,22', 38, '4,3', '61,64', NULL, '7793.4', '0', '0', '299.6', '', '0', 'PENDING', 'PAYTM', '6', 'PENDING', '', '', '2022-04-16 17:48:29', '2022-04-16 17:48:29', NULL, NULL, 'NO', ''),
(8, 2, '5,5', '21,22', 38, '4,3', '61,64', NULL, '7793.4', '0', '0', '299.6', '', '0', 'PAID', 'PAYTM', '6', 'PENDING', '', '', '2022-04-16 17:49:23', '2022-04-16 17:49:23', NULL, NULL, 'NO', ''),
(9, 2, '5,5,5', '21,21,22', 38, '1,1,1', '60,61,64', NULL, '3172.1', '0', '0', '74.9', '', '0', 'PENDING', 'PAYTM', '6', 'PENDING', '', '', '2022-04-16 18:00:52', '2022-04-16 18:00:52', NULL, NULL, 'NO', ''),
(10, 2, '5,5,5', '21,21,22', 38, '1,1,1', '60,61,64', NULL, '3172.1', '0', '0', '74.9', '', '0', 'PAID', 'PAYTM', '6', 'PENDING', '', '', '2022-04-16 18:01:20', '2022-04-16 18:01:20', NULL, NULL, 'NO', ''),
(11, 2, '17', '1', 1, '1', NULL, NULL, '145', '120', '40', '', NULL, '', 'PAID', 'EWALLET', '', 'COMPLETED', NULL, NULL, '2022-04-27 18:31:06', '2022-04-27 18:31:06', NULL, NULL, 'NO', ''),
(12, 2, '17', '1', 1, '1', NULL, NULL, '4500', '2000', '2500', '10', NULL, '', 'PAID', 'EWALLET', '', 'COMPLETED', NULL, NULL, '2022-04-27 18:36:19', '2022-04-27 18:36:19', NULL, NULL, 'NO', ''),
(13, 2, '17', '1', 1, '1', NULL, NULL, '200', '100', '100', '15', NULL, '', 'PAID', 'EWALLET', '', 'COMPLETED', NULL, NULL, '2022-04-27 18:45:02', '2022-04-27 18:45:02', NULL, NULL, 'NO', ''),
(14, 2, '17', '1', 1, '1', NULL, NULL, '1000', '550', '550', '100', NULL, '', 'PAID', 'EWALLET', '', 'COMPLETED', NULL, NULL, '2022-04-27 18:49:12', '2022-04-27 18:49:12', NULL, NULL, 'NO', ''),
(15, 2, '17', '1', 1, '1', NULL, NULL, '1200', '1000', '200', '60', NULL, '', 'PAID', 'EWALLET', '', 'COMPLETED', NULL, NULL, '2022-04-27 18:54:50', '2022-04-27 18:54:50', NULL, NULL, 'NO', ''),
(16, 2, '17', '1', 1, '1', NULL, NULL, '100', '80', '30', '10', NULL, '', 'PAID', 'EWALLET', '', 'COMPLETED', NULL, NULL, '2022-04-27 19:03:58', '2022-04-27 19:03:58', NULL, NULL, 'NO', ''),
(17, 2, '17', '1', 1, '1', NULL, NULL, '220', '120', '100', '0', NULL, '', 'PAID', 'EWALLET', '', 'COMPLETED', NULL, NULL, '2022-04-27 19:10:31', '2022-04-27 19:10:31', NULL, NULL, 'NO', ''),
(18, 2, '17', '1', 1, '1', NULL, NULL, '1300', '0', '0', '130', NULL, '', 'PAID', 'PAYTM', '', 'PENDING', NULL, NULL, '2022-04-27 20:06:47', '2022-04-27 20:06:47', NULL, NULL, 'NO', ''),
(19, 2, '17', '1', 0, '1', NULL, NULL, '12', '0', '0', '1.2', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-04-28 16:46:26', '2022-04-28 16:46:26', 'Vikas', 'vikas@gmail.com', 'YES', 'INDIAN'),
(20, 2, '17', '1', 0, '1', NULL, NULL, '13', '0', '0', '2.6', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-04-28 16:51:59', '2022-04-28 16:51:59', 'Vikas', 'sadk', 'YES', 'INDIAN'),
(21, 2, '17', '1', 0, '1', NULL, NULL, '15', '0', '0', '2.25', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-04-28 16:56:30', '2022-04-28 16:56:30', 'vikas', 'vikas@gmail.com', 'NO', 'INDIAN'),
(22, 2, '17', '1', 0, '1', NULL, NULL, '50.50', '0', '0', '7.575', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-04-28 16:59:11', '2022-04-28 16:59:11', 'abc', 'lkd', 'YES', 'OTHER'),
(23, 2, '17', '1', 0, '1', NULL, NULL, '0', '0', '0', '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-04-28 19:29:35', '2022-04-28 19:29:35', '', '', '', ''),
(24, 2, '17', '1', 0, '1', NULL, NULL, '0', '0', '0', '0', NULL, NULL, 'PENDING', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-04-28 19:31:16', '2022-04-28 19:31:16', '', '', '', ''),
(25, 2, '17', '1', 0, '1', NULL, NULL, '2', '0', '0', '0.4', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-04-28 19:34:02', '2022-04-28 19:34:02', 'sadsads', 'fdsfds', 'NO', ''),
(26, 2, '17', '1', 0, '1', NULL, NULL, '150.75', '0', '0', '37.6875', NULL, NULL, 'PAID', 'PAYTM', NULL, 'PENDING', NULL, NULL, '2022-04-28 20:02:43', '2022-04-28 20:02:43', 'Vikas', 'ravisubedi8@gmail.com', 'NO', 'INDIAN');

-- --------------------------------------------------------

--
-- Table structure for table `order_by_seller`
--

CREATE TABLE `order_by_seller` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `min_order_qty` int(11) NOT NULL,
  `min_order_value` int(11) NOT NULL,
  `marketplace_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `order_by_seller`
--

INSERT INTO `order_by_seller` (`id`, `product_id`, `min_order_qty`, `min_order_value`, `marketplace_id`) VALUES
(2, 273, 111, 0, 0),
(3, 274, 12344, 0, 0),
(11, 284, 1, 0, 0),
(12, 285, 2147483647, 0, 0),
(14, 287, 1, 0, 0),
(15, 288, 1, 1, 0),
(16, 289, 12, 0, 0),
(19, 294, 1, 0, 0),
(21, 297, 0, 1, 0),
(22, 298, 1, 0, 0),
(23, 299, 0, 2, 0),
(24, 300, 0, 0, 0),
(25, 301, 11, 0, 0),
(26, 302, 11, 0, 0),
(27, 303, 12, 0, 0),
(28, 304, 12, 0, 0),
(29, 305, 12, 0, 0),
(30, 306, 0, 0, 0),
(31, 0, 12, 0, 0),
(32, 308, 12, 0, 0),
(33, 309, 12, 0, 0),
(34, 310, 12, 0, 0),
(35, 0, 0, 0, 0),
(36, 0, 0, 0, 0),
(37, 0, 0, 0, 0),
(38, 0, 0, 0, 0),
(39, 315, 12, 0, 0),
(40, 0, 12, 0, 0),
(41, 0, 12, 0, 0),
(42, 0, 12, 0, 0),
(43, 319, 12, 0, 0),
(44, 320, 12, 0, 0),
(45, 327, 12, 0, 0),
(46, 328, 1, 0, 0),
(47, 329, 0, 0, 0),
(48, 0, 1, 0, 0),
(49, 0, 12, 0, 0),
(50, 0, 1, 0, 0),
(51, 333, 0, 0, 0),
(52, 0, 0, 0, 0),
(53, 335, 1, 0, 0),
(54, 336, 1, 0, 0),
(55, 337, 1, 0, 0),
(56, 338, 1, 0, 0),
(57, 0, 1, 0, 0),
(58, 340, 1, 0, 0),
(59, 341, 1, 0, 0),
(60, 342, 1, 0, 0),
(61, 343, 1, 0, 0),
(62, 344, 12, 0, 0),
(63, 345, 1, 0, 0),
(64, 346, 12, 0, 0),
(65, 347, 12, 0, 0),
(66, 348, 1, 0, 0),
(67, 349, 12, 0, 0),
(68, 350, 0, 0, 0),
(69, 351, 0, 0, 0),
(70, 352, 0, 0, 0),
(71, 353, 12, 0, 0),
(72, 0, 12, 0, 0),
(73, 355, 12, 0, 0),
(74, 356, 12, 0, 0),
(75, 357, 12, 0, 0),
(76, 0, 12, 0, 0),
(77, 359, 12, 0, 0),
(78, 0, 12, 0, 0),
(79, 361, 12, 0, 0),
(80, 362, 12, 0, 0),
(81, 363, 0, 0, 0),
(82, 364, 12, 0, 0),
(83, 364, 12, 0, 0),
(84, 0, 12, 0, 0),
(85, 0, 12, 0, 0),
(86, 366, 0, 0, 0),
(87, 366, 0, 0, 0),
(88, 367, 12, 0, 0),
(89, 367, 12, 0, 0),
(90, 368, 12, 0, 0),
(91, 369, 12, 0, 0),
(92, 370, 11, 0, 0),
(93, 0, 0, 0, 0),
(94, 0, 20, 0, 0),
(95, 374, 11, 0, 0),
(96, 0, 1, 0, 0),
(97, 376, 5544, 0, 0),
(98, 377, 31, 0, 0),
(99, 378, 12, 0, 0),
(100, 379, 32, 0, 0),
(101, 380, 0, 0, 0),
(102, 381, 0, 0, 0),
(103, 382, 0, 0, 0),
(104, 383, 0, 0, 0),
(105, 384, 0, 0, 0),
(106, 401, 0, 0, 0),
(107, 402, 0, 0, 0),
(108, 403, 0, 0, 0),
(109, 404, 0, 0, 0),
(110, 405, 0, 0, 0),
(111, 406, 0, 0, 0),
(112, 407, 0, 0, 0),
(113, 408, 0, 0, 0),
(114, 409, 0, 0, 0),
(115, 410, 0, 0, 0),
(116, 411, 0, 0, 0),
(117, 412, 0, 0, 0),
(118, 413, 0, 0, 0),
(119, 414, 0, 0, 0),
(120, 415, 0, 0, 0),
(121, 416, 0, 0, 0),
(122, 417, 0, 0, 0),
(123, 418, 0, 0, 0),
(124, 419, 0, 0, 0),
(125, 420, 0, 0, 0),
(126, 421, 0, 0, 0),
(127, 422, 0, 0, 0),
(128, 423, 0, 0, 0),
(129, 424, 5, 0, 0),
(130, 425, 5, 0, 0),
(131, 426, 0, 0, 0),
(132, 427, 0, 0, 0),
(133, 428, 0, 0, 0),
(134, 429, 0, 0, 0),
(135, 430, 0, 0, 0),
(136, 431, 0, 0, 0),
(137, 0, 5, 0, 0),
(138, 0, 5, 0, 0),
(139, 432, 5, 0, 0),
(140, 433, 5, 0, 0),
(141, 434, 2, 0, 0),
(142, 435, 2, 0, 0),
(143, 436, 2, 0, 0),
(144, 437, 5, 0, 0),
(145, 438, 5, 0, 0),
(146, 439, 5, 0, 0),
(147, 440, 5, 0, 0),
(148, 441, 5, 0, 0),
(149, 442, 0, 0, 0),
(150, 443, 0, 0, 0),
(151, 444, 5, 0, 0),
(152, 445, 5, 0, 0),
(153, 446, 5, 0, 0),
(154, 447, 20, 0, 0),
(155, 0, 0, 0, 0),
(156, 448, 5, 0, 0),
(157, 449, 5, 0, 0),
(158, 450, 5, 0, 0),
(159, 451, 2, 0, 0),
(160, 452, 2, 0, 0),
(161, 0, 2, 0, 0),
(162, 453, 5, 0, 0),
(163, 454, 5, 0, 0),
(164, 455, 15, 0, 0),
(165, 456, 5, 0, 0),
(166, 457, 5, 0, 0),
(167, 458, 2, 0, 0),
(168, 459, 2, 0, 0),
(169, 460, 2, 0, 0),
(170, 461, 2, 0, 0),
(171, 462, 2, 0, 0),
(172, 463, 2, 0, 0),
(173, 464, 2, 0, 0),
(174, 465, 5, 0, 0),
(175, 466, 5, 0, 0),
(176, 467, 5, 0, 0),
(177, 0, 5, 0, 0),
(178, 0, 5, 0, 0),
(179, 468, 8, 0, 0),
(180, 469, 5, 0, 0),
(181, 470, 0, 0, 0),
(182, 468, 8, 0, 0),
(183, 469, 10, 0, 0),
(184, 470, 0, 0, 0),
(185, 471, 5, 0, 0),
(186, 472, 5, 0, 0),
(187, 473, 5, 0, 0),
(188, 474, 2, 0, 0),
(189, 471, 5, 0, 0),
(190, 472, 5, 0, 0),
(191, 475, 5, 0, 0),
(192, 476, 5, 0, 0),
(193, 477, 5, 0, 0),
(194, 478, 5, 0, 0),
(195, 479, 5, 0, 0),
(196, 480, 2, 0, 0),
(197, 481, 5, 0, 0),
(198, 482, 5, 0, 0),
(199, 483, 10, 0, 0),
(200, 484, 5, 0, 0),
(201, 485, 10, 0, 0),
(202, 486, 10, 0, 0),
(203, 487, 5, 0, 0),
(204, 488, 5, 0, 0),
(205, 489, 5, 0, 0),
(206, 490, 5, 0, 0),
(207, 491, 5, 0, 0),
(208, 492, 5, 0, 0),
(209, 493, 5, 0, 0),
(210, 494, 5, 0, 0),
(211, 495, 2, 0, 0),
(212, 496, 10, 0, 0),
(213, 497, 0, 0, 0),
(214, 498, 0, 0, 16),
(215, 473, 5, 0, 5),
(216, 474, 0, 0, NULL),
(217, 475, 0, 0, 5),
(218, 476, 1, 0, 5),
(219, 477, 1, 0, 5),
(220, 478, 0, 0, 5),
(221, 479, 1, 0, 5),
(222, 502, 5, 0, 16),
(223, 503, 5, 0, 16),
(224, 480, 0, 0, 5),
(225, 481, 0, 0, 5),
(226, 482, 0, 0, 5),
(227, 12, 0, 0, 16),
(228, 13, 1, 0, 16),
(229, 14, 0, 0, 16),
(230, 15, 0, 0, 16),
(231, 16, 0, 0, 16),
(232, 17, 0, 0, 16),
(233, 18, 0, 0, 16),
(234, 19, 0, 0, 16),
(235, 19, 0, 0, 16),
(236, 20, 0, 0, 16),
(237, 21, 0, 0, 16),
(238, 22, 0, 0, 16),
(239, 23, 0, 0, 16),
(240, 24, 0, 0, 16),
(241, 25, 0, 0, 16),
(242, 26, 0, 0, 16),
(243, 27, 0, 0, 16),
(244, 28, 0, 0, 16),
(245, 29, 0, 0, 16),
(246, 30, 0, 0, 16),
(247, 31, 0, 0, 16),
(248, 32, 0, 0, 16),
(249, 33, 0, 0, 16),
(250, 34, 0, 0, 16),
(251, 35, 0, 0, 16),
(252, 36, 0, 0, 16),
(253, 483, 0, 0, 5),
(254, 484, 0, 0, 5),
(255, 485, 0, 0, 5),
(256, 486, 0, 0, 5),
(257, 487, 0, 0, 5),
(258, 488, 0, 0, 5),
(259, 37, 0, 0, 16),
(260, 38, 0, 0, 16),
(261, 37, 0, 0, 16),
(262, 38, 0, 0, 16),
(263, 39, 0, 0, 16),
(264, 521, 19, 0, 20),
(265, 489, 0, 0, 5),
(266, 490, 0, 0, 5),
(267, 491, 0, 0, 5),
(268, 492, 0, 0, 5),
(269, 493, 0, 0, 5),
(270, 494, 0, 0, 5),
(271, 495, 0, 0, 5),
(272, 496, 0, 0, 5),
(273, 497, 0, 0, 5),
(274, 498, 0, 0, 5),
(275, 499, 0, 0, 5),
(276, 500, 0, 0, 5),
(277, 501, 0, 0, 5),
(278, 502, 0, 0, 5),
(279, 503, 0, 0, 5),
(280, 504, 0, 0, 5),
(281, 505, 0, 0, 5),
(282, 506, 0, 0, 5),
(283, 507, 0, 0, 5),
(284, 508, 0, 0, 5),
(285, 509, 0, 0, 5),
(286, 510, 0, 0, 5),
(287, 511, 0, 0, 5),
(288, 512, 0, 0, 5),
(289, 513, 6, 0, 6),
(290, 515, 0, 0, 5),
(291, 516, 7, 0, 6),
(292, 521, 0, 0, 5),
(293, 0, 0, 0, 5),
(294, 0, 0, 0, 5),
(295, 524, 0, 0, 5),
(296, 525, 0, 0, 5),
(297, 526, 0, 0, 5),
(298, 527, 0, 0, 6),
(299, 528, 0, 0, 6),
(300, 529, 0, 0, 6),
(301, 42, 0, 0, 16),
(302, 43, 0, 0, 16),
(303, 44, 0, 0, 16),
(304, 45, 0, 0, 16),
(305, 46, 0, 0, 16),
(306, 47, 0, 0, 16),
(307, 530, 0, 0, 5),
(308, 531, 0, 0, 5),
(309, 532, 0, 0, 5),
(310, 533, 0, 0, 5),
(311, 534, 0, 0, 5),
(312, 48, 0, 0, 16);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT 0,
  `cart_id` varchar(20) NOT NULL,
  `product_type` varchar(25) DEFAULT 'retail',
  `addi_info` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `variant` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `payment_status` varchar(20) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `order_status` varchar(50) DEFAULT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `request` enum('0','1','2','') DEFAULT '0',
  `Commission` int(11) DEFAULT 0,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `service_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `marketplace_id` int(11) DEFAULT NULL,
  `txn_id` varchar(255) DEFAULT NULL,
  `areferal_id` varchar(100) DEFAULT NULL,
  `vreferal_id` varchar(100) DEFAULT NULL,
  `affiliate_id` int(255) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `site_id`, `product_id`, `vendor_id`, `cart_id`, `product_type`, `addi_info`, `quantity`, `variant`, `amount`, `payment_status`, `payment_mode`, `order_status`, `updated_date`, `request`, `Commission`, `created_date`, `service_id`, `package_id`, `marketplace_id`, `txn_id`, `areferal_id`, `vreferal_id`, `affiliate_id`, `user_id`) VALUES
(1, 11, 245, 204, '84361257', 'retail', '', 1, ':', '2000', 'unpaid', 'cod', 'placed', '2020-02-28 08:28:23', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 0, 52, 18, '76138045', '', '', 1, 'rgb(102, 220, 0):', '145', 'not paid', 'cod', 'placed', '2019-11-19 19:22:41', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 0, 48, 5, '76138045', '', '', 1, 'rgb(255, 135, 135):', '400', 'not paid', 'cod', 'placed', '2019-11-19 19:22:41', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 0, 47, 0, '76138045', '', '', 2, 'rgb(174, 255, 242):', '180', 'paid', 'payu', 'Order Received', '2019-11-19 19:32:36', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 0, 55, 0, '37126485', 'sample', '', 1, ':', '11', 'not paid', 'cod', 'placed', '2019-11-27 17:53:17', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 0, 58, 19, '37126485', 'rental', '', 3, ':', '10001000', 'not paid', 'cod', 'placed', '2019-11-27 17:53:17', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 0, 55, 0, '37126485', 'retail', '', 1, ':', '1088.78', 'not paid', 'cod', 'placed', '2019-11-27 17:53:17', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 0, 58, 19, '37126485', 'retail', '', 1, ':', '2250', 'not paid', 'cod', 'placed', '2019-11-27 17:53:17', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 0, 2, 0, '94072538', '', '', 2, ':', '13.6', 'paid', 'payu', 'placed', '2019-12-01 03:15:38', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 0, 2, 0, '94072538', '', '', 2, ':', '678.64', 'paid', 'payu', 'placed', '2019-12-01 03:15:38', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 0, 3, 0, '94072538', '', '', 2, ':', '27.2', 'paid', 'payu', 'placed', '2019-12-01 03:15:38', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 0, 2, 0, '96825417', '', '', 2, ':', '13.6', 'paid', 'payu', 'placed', '2019-12-01 03:18:07', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 0, 2, 0, '96825417', '', '', 2, ':', '678.64', 'paid', 'payu', 'placed', '2019-12-01 03:18:07', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 0, 3, 0, '96825417', '', '', 2, ':', '27.2', 'paid', 'payu', 'placed', '2019-12-01 03:18:07', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 0, 2, 0, '96825417', '', '', 2, ':', '13.6', 'paid', 'payu', 'placed', '2019-12-01 03:21:24', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 0, 2, 0, '96825417', '', '', 2, ':', '678.64', 'paid', 'payu', 'placed', '2019-12-01 03:21:24', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 0, 3, 0, '96825417', '', '', 2, ':', '27.2', 'paid', 'payu', 'placed', '2019-12-01 03:21:24', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 0, 2, 0, '96825417', '', '', 2, ':', '13.6', 'paid', 'payu', 'placed', '2019-12-01 03:21:34', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 0, 2, 0, '96825417', '', '', 2, ':', '678.64', 'paid', 'payu', 'placed', '2019-12-01 03:21:34', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 0, 3, 0, '96825417', '', '', 2, ':', '27.2', 'paid', 'payu', 'placed', '2019-12-01 03:21:34', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 0, 2, 0, '96825417', '', '', 2, ':', '13.6', 'paid', 'payu', 'placed', '2019-12-01 03:22:10', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 0, 2, 0, '96825417', '', '', 2, ':', '678.64', 'paid', 'payu', 'placed', '2019-12-01 03:22:10', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 0, 3, 0, '96825417', '', '', 2, ':', '27.2', 'paid', 'payu', 'placed', '2019-12-01 03:22:10', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 0, 2, 0, '96825417', '', '', 2, ':', '13.6', 'paid', 'payu', 'placed', '2019-12-01 03:23:43', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 0, 2, 0, '96825417', '', '', 2, ':', '678.64', 'paid', 'payu', 'placed', '2019-12-01 03:23:43', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 0, 3, 0, '96825417', '', '', 2, ':', '27.2', 'paid', 'payu', 'placed', '2019-12-01 03:23:43', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 0, 2, 0, '96825417', '', '', 2, ':', '13.6', 'paid', 'payu', 'placed', '2019-12-01 03:35:49', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 0, 2, 0, '96825417', '', '', 2, ':', '678.64', 'paid', 'payu', 'placed', '2019-12-01 03:35:49', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 0, 3, 0, '96825417', '', '', 2, ':', '27.2', 'paid', 'payu', 'placed', '2019-12-01 03:35:49', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 0, 3, 0, '96825417', '', '', 2, ':', '27.2', 'paid', 'payu', 'placed', '2019-12-01 03:35:49', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 0, 2, 0, '70326159', '', '', 2, ':', '678.64', 'paid', 'payu', 'placed', '2019-12-01 03:39:10', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 0, 3, 0, '70326159', '', '', 2, ':', '27.2', 'paid', 'payu', 'placed', '2019-12-01 03:39:10', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 0, 2, 0, '70326159', '', '', 2, ':', '13.6', 'paid', 'payu', 'placed', '2019-12-01 03:39:10', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 0, 7, 0, '71506982', '', '', 1, ':', '588.82', 'paid', 'payu', 'placed', '2019-12-01 23:52:17', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 0, 27, 0, '71506982', '', '', 1, ':', '106.2', 'paid', 'payu', 'placed', '2019-12-01 23:52:17', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 9, 6, 0, '71584063', 'retail', '', 2, ':', '1577.272', 'paid', 'payu', 'placed', '2019-12-17 15:34:59', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 9, 6, 0, '71584063', 'retail', '', 2, ':', '1577.272', 'paid', 'payu', 'placed', '2019-12-17 15:34:59', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 9, 6, 0, '97645812', 'retail', '', 1, ':', '1394.986', 'paid', 'payu', 'placed', '2019-12-24 19:44:14', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 9, 6, 0, '97645812', 'retail', '', 1, ':', '1394.986', 'paid', 'payu', 'placed', '2019-12-24 19:44:14', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 9, 60, 0, '26710983', 'retail', '', 7, ':', '2200.1', 'paid', 'payu', 'placed', '2019-12-27 07:51:48', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 9, 60, 0, '26710983', 'retail', '', 7, ':', '2200.1', 'paid', 'payu', 'placed', '2019-12-27 07:51:48', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 9, 55, 0, '81705463', 'sample', '', 1, ':', '212.65', 'paid', 'payu', 'placed', '2020-01-04 13:31:07', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 9, 55, 0, '81705463', 'sample', '', 1, ':', '212.65', 'paid', 'payu', 'placed', '2020-01-04 13:31:07', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 9, 6, 0, '41309627', 'retail', '', 1, ':', '1394.986', 'paid', 'payu', 'placed', '2020-01-04 20:07:36', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 9, 6, 0, '41309627', 'retail', '', 1, ':', '1394.986', 'paid', 'payu', 'placed', '2020-01-04 20:07:36', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 9, 6, 0, '68921734', 'retail', '', 1, ':', '1394.986', 'paid', 'payu', 'placed', '2020-01-04 20:11:20', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 9, 6, 0, '68921734', 'retail', '', 1, ':', '1394.986', 'paid', 'payu', 'placed', '2020-01-04 20:11:20', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 9, 7, 0, 'ORD56028173', 'retail', '', 4, ':', '3438.28', 'paid', 'payu', 'placed', '2020-01-11 22:04:01', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 9, 7, 0, 'ORD56028173', 'retail', '', 4, ':', '3438.28', 'paid', 'payu', 'placed', '2020-01-11 22:04:01', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 9, 55, 0, 'ORD91562784', 'sample', '', 1, ':', '212.65', 'paid', 'payu', 'placed', '2020-01-12 12:05:35', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 9, 55, 0, 'ORD91562784', 'sample', '', 1, ':', '212.65', 'paid', 'payu', 'placed', '2020-01-12 12:05:35', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 9, 183, 0, 'ORD10723459', 'rental', '01/23/2020', 2, ':', '6250', 'paid', 'payu', 'placed', '2020-01-12 14:04:19', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 9, 186, 0, 'ORD12546830', 'retail', '', 1, ':', '100', 'paid', 'paytm', 'placed', '2020-01-13 05:57:36', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 9, 55, 28, 'ORD40267593', 'sample', '', 2, ':', '214.3', 'paid', 'paytm', 'placed', '2020-01-14 19:29:04', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 9, 185, 132, 'ORD59714836', 'sample', '', 1, ':', '18017', 'paid', 'paytm', 'placed', '2020-01-14 19:43:59', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 9, 93, 34, 'ORD50726893', 'retail', '', 2, ':', '1376', 'paid', 'paytm', 'placed', '2020-01-15 14:26:07', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 9, 11, 28, 'ORD34017589', 'retail', '', 1, ':', '799.6', 'paid', 'paytm', 'placed', '2020-01-15 14:35:14', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 9, 200, 151, 'ORD72395861', 'retail', '', 18, ':', '188.7', 'paid', 'paytm', 'placed', '2020-01-16 03:41:11', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 9, 200, 151, 'ORD32849067', 'retail', '', 5, ':', '188.7', 'paid', 'paytm', 'placed', '2020-01-16 03:49:21', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 9, 63, 28, 'ORD14680792', 'retail', '', 1, ':', '789.41', 'not paid', 'cod', 'placed', '2020-01-17 08:20:13', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 9, 63, 28, 'ORD08573264', 'retail', '', 1, ':', '789.41', 'not paid', 'cod', 'placed', '2020-01-17 08:21:50', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 9, 63, 28, 'ORD80436259', 'retail', '', 1, ':', '789.41', 'not paid', 'cod', 'placed', '2020-01-17 08:25:08', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 9, 63, 28, 'ORD04867321', 'retail', '', 1, ':', '789.41', 'not paid', 'cod', 'placed', '2020-01-17 08:39:59', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 9, 11, 28, 'ORD25869140', 'retail', '', 1, ':', '799.6', 'paid', 'paytm', 'placed', '2020-01-17 19:57:52', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 9, 6, 28, '12374086', 'retail', '', 1, ':', '1394.99', 'unpaid', 'cod', 'placed', '2020-01-21 21:09:10', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 9, 27, 28, '74680359', 'retail', '', 1, ':', '346.95', 'paid', 'payu', 'placed', '2020-01-21 21:10:48', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 9, 6, 28, '53891674', 'retail', '', 1, ':', '1394.99', 'paid', 'paytm', 'placed', '2020-01-21 21:12:22', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 9, 8, 28, '83265104', 'retail', '', 2, ':', '1604.8', 'unpaid', 'cod', 'placed', '2020-01-22 13:41:00', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 9, 6, 28, '83265104', 'retail', '', 1, 'rgb(0, 0, 0):98.4 inch', '1394.99', 'unpaid', 'cod', 'placed', '2020-01-22 13:41:00', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 9, 6, 28, '43920178', 'retail', '', 1, ':', '1394.99', 'unpaid', 'cod', 'placed', '2020-01-22 13:43:59', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 9, 6, 28, '40827159', 'retail', '', 1, ':', '1394.99', 'unpaid', 'cod', 'placed', '2020-01-22 13:47:58', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 9, 6, 28, '64217580', 'retail', '', 1, ':', '1394.99', 'unpaid', 'cod', 'placed', '2020-01-22 13:53:43', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 9, 7, 28, '17083496', 'retail', '', 1, 'rgb(136, 255, 134):', '2358.82', 'unpaid', 'cod', 'placed', '2020-01-22 13:54:50', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 9, 7, 28, '92013576', 'retail', '', 1, ':', '2358.82', 'paid', 'payu', 'placed', '2020-01-22 14:00:07', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 9, 7, 28, '93604571', 'retail', '', 1, ':', '2358.82', 'paid', 'paytm', 'placed', '2020-01-22 14:06:05', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 9, 6, 28, '21985764', 'retail', '', 2, ':', '2589.97', 'paid', 'payu', 'placed', '2020-01-23 16:34:34', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 9, 214, 144, '60429318', 'retail', '', 1, 'rgb(0, 0, 0):', '1640', 'paid', 'paytm', 'placed', '2020-01-23 17:04:07', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 9, 6, 28, '30721954', 'retail', '', 2, ':', '2589.97', 'paid', 'payu', 'placed', '2020-01-23 17:16:58', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 9, 20, 34, '51679802', 'retail', '', 1, ':', '332.4', 'paid', 'paytm', 'placed', '2020-01-24 18:02:57', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 9, 25, 28, '21897436', 'retail', '', 8, ':', '1732', 'paid', 'paytm', 'placed', '2020-01-25 07:17:35', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 9, 23, 34, '94637518', 'retail', '', 1, ':', '319', 'paid', 'paytm', 'placed', '2020-01-26 11:07:27', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 9, 224, 166, '06928475', 'rental', '01/09/2020', 1, ':', '6000', 'paid', 'paytm', 'placed', '2020-01-26 12:36:38', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 9, 17, 34, '10962784', 'retail', '', 1, ':', '510', 'paid', 'paytm', 'placed', '2020-01-26 12:39:45', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 9, 111, 28, '97350826', 'rental', '01/17/2020', 1, ':', '14605.4', 'paid', 'paytm', 'placed', '2020-01-26 12:45:58', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 9, 6, 28, '69210753', 'retail', '', 1, ':', '1394.99', 'paid', 'payu', 'placed', '2020-01-31 01:46:27', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 9, 6, 28, '40852973', 'retail', '', 1, ':', '1394.99', 'paid', 'paytm', 'placed', '2020-01-31 01:48:10', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 11, 225, 191, '40598617', 'retail', '', 1, ':', '90', 'unpaid', 'cod', 'placed', '2020-01-31 05:55:55', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 11, 225, 191, '49705286', 'retail', '', 1, ':', '90', 'unpaid', 'cod', 'placed', '2020-01-31 06:00:23', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 11, 225, 191, '01295478', 'retail', '', 1, ':', '90', 'unpaid', 'cod', 'placed', '2020-01-31 06:05:08', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 11, 225, 191, '38264175', 'retail', '', 1, ':', '90', 'unpaid', 'cod', 'placed', '2020-01-31 17:45:10', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 11, 225, 191, '35674821', 'retail', '', 2, ':', '180', 'unpaid', 'cod', 'placed', '2020-01-31 17:49:19', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 11, 244, 204, '41697358', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-02-24 16:58:10', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 11, 246, 204, '81364729', 'retail', '', 1, ':', '200', 'unpaid', 'cod', 'placed', '2020-03-30 09:36:55', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 11, 245, 204, '40967135', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-02-22 22:18:19', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 11, 300, 204, '21096738', 'retail', '', 16, ':', '31.68', 'paid', 'paytm', 'placed', '2020-03-08 17:32:37', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 11, 246, 204, '30792485', 'retail', '', 1, ':', '200', 'paid', 'paytm', 'placed', '2020-03-08 17:45:47', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 11, 300, 204, '82475396', 'retail', '', 1, ':', '1.98', 'paid', 'paytm', 'placed', '2020-03-08 19:47:53', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(137, 11, 300, 204, '13548762', 'retail', '', 9, ':', '17.82', 'paid', 'paytm', 'placed', '2020-03-10 11:17:29', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 11, 300, 204, '01492738', 'retail', '', 1, ':', '1.98', 'paid', 'paytm', 'placed', '2020-03-10 11:20:40', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 11, 300, 204, '28356104', 'retail', '', 8, ':', '15.84', 'paid', 'paytm', 'Order Delivered', '2020-03-10 11:24:53', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 11, 300, 204, '74981526', 'retail', '', 8, ':', '15.84', 'paid', 'paytm', 'placed', '2020-03-10 11:32:08', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 11, 300, 204, '57241368', 'retail', '', 8, ':', '15.84', 'paid', 'paytm', 'placed', '2020-03-10 11:33:30', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 11, 300, 204, '07315649', 'retail', '', 8, ':', '15.84', 'paid', 'paytm', 'placed', '2020-03-10 11:34:58', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 11, 300, 204, '51396204', 'retail', '', 8, ':', '15.84', 'paid', 'paytm', 'placed', '2020-03-10 11:49:41', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 11, 300, 204, '31845269', 'retail', '', 8, ':', '15.84', 'paid', 'paytm', 'placed', '2020-03-10 11:55:40', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(145, 11, 246, 204, '89635241', 'retail', '', 1, ':', '200', 'paid', 'paytm', 'placed', '2020-03-16 11:04:17', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(146, 11, 246, 204, '78362594', 'retail', '', 1, ':', '200', 'paid', 'paytm', 'placed', '2020-03-16 11:14:47', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(147, 11, 245, 204, '92746503', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-24 12:19:49', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(148, 11, 245, 204, '90321684', 'retail', '', 5, ':', '10000', 'paid', 'paytm', 'placed', '2020-03-24 12:46:58', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(149, 11, 245, 204, '40965213', 'retail', '', 3, ':', '6000', 'paid', 'paytm', 'placed', '2020-03-24 13:53:31', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(150, 11, 319, 204, '69108754', 'retail', '', 1, ':', '0.85', 'unpaid', 'cod', 'placed', '2020-03-30 14:30:14', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, 11, 245, 204, '48572361', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-31 08:04:49', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(152, 11, 245, 204, '04619238', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-31 08:11:53', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(153, 11, 245, 204, '32165709', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-31 08:13:54', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, 11, 245, 204, '12730894', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-31 08:15:30', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(155, 11, 245, 204, '90765428', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-31 08:22:39', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 11, 245, 204, '41058269', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-31 08:30:01', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, 11, 243, 203, '40976532', 'retail', '', 1, ':', '0', 'paid', 'paytm', 'placed', '2020-03-31 08:31:50', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, 11, 300, 204, '48053216', 'retail', '', 1, ':', '1.98', 'paid', 'paytm', 'placed', '2020-03-31 08:33:49', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(159, 11, 369, 204, '18609452', 'retail', '', 1, ':', '11.83', 'paid', 'paytm', 'placed', '2020-03-31 08:36:14', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(160, 11, 369, 204, '01456378', 'retail', '', 1, ':', '11.83', 'paid', 'paytm', 'placed', '2020-03-31 08:40:35', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 11, 369, 204, '96853472', 'retail', '', 1, ':', '11.83', 'paid', 'paytm', 'placed', '2020-03-31 08:42:27', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, 11, 369, 204, '15908472', 'retail', '', 1, ':', '11.83', 'paid', 'paytm', 'placed', '2020-03-31 08:45:08', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, 11, 245, 204, '24751693', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-31 08:48:38', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 11, 245, 204, '14580932', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-31 08:53:17', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 11, 245, 204, '35861470', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-31 08:55:21', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, 11, 245, 204, '70354629', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-31 08:59:31', '', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 11, 245, 204, '84975132', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-03-31 09:11:56', '1', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, 11, 245, 204, '74290386', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'Placed', '2020-03-01 13:52:48', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 11, 245, 204, '64837192', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'Order Delivered', '2020-03-01 17:57:10', '1', 0, '2020-03-31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 11, 245, 204, '51928476', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-10 13:31:11', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 11, 0, 0, '80724391', 'Donation', '', 0, '', '100', 'Paid', 'PYTM', '', '2020-04-10 13:34:45', '0', 0, '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 11, 0, 0, '67412893', 'Donation', '', 0, '', '100', 'Paid', 'PYTM', '', '2020-04-10 13:36:35', '0', 0, '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, 11, 0, 0, '16370952', 'Donation', '', 0, '', '100', 'Paid', 'Select Payment Mode', '', '2020-04-10 13:38:32', '0', 0, '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 11, 0, 0, '94251037', 'Donation', '', 0, '', '100', 'Paid', 'PYTM', '', '2020-04-10 13:38:41', '0', 0, '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 11, 0, 0, '34206587', 'Donation', '', 0, '', '5000', 'Paid', 'PYTM', '', '2020-04-10 13:39:47', '0', 0, '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, 11, 0, 0, '97583421', 'Donation', '', 0, '', '5000', 'Paid', 'PYTM', '', '2020-04-10 13:41:47', '0', 0, '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, 11, 0, 0, '34205869', 'Donation', '', 0, '', '1000', 'paid', 'PYTM', '', '2020-04-10 13:48:34', '0', 0, '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, 11, 0, 0, '45901682', 'Donation', '', 0, '', '10000', 'Paid', 'PYTM', '', '2020-04-10 13:58:24', '0', 0, '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, 11, 0, 0, '13298450', 'Donation', '', 0, '', '5000', 'Paid', 'PYTM', '', '2020-04-10 14:00:08', '0', 0, '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, 11, 0, 0, '07521386', 'Donation', '', 0, '', '1000', 'Paid', 'PYTM', '', '2020-04-10 14:00:57', '0', 0, '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, 11, 0, 0, '48032571', 'Donation', '', 0, '', '1000', 'Paid', 'PYTM', '', '2020-04-10 14:04:34', '0', 0, '2020-04-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, 11, 229, 203, '74320168', 'sample', '', 18, ':', '360', 'paid', 'paytm', 'placed', '2020-04-11 15:21:06', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, 11, 229, 203, '10985623', 'sample', '', 2, ':', '40', 'paid', 'paytm', 'placed', '2020-04-11 15:27:16', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, 11, 0, 0, '93012847', 'Donation', '', 0, '', '100', 'Paid', 'PYTM', '', '2020-04-12 14:27:26', '0', 0, '2020-04-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, 11, 245, 204, '63512794', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 09:46:45', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, 11, 245, 204, '70693152', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 09:49:36', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, 11, 245, 204, '39278054', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 09:51:34', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, 11, 245, 204, '61987340', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 09:53:13', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, 11, 245, 204, '17082365', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 09:55:24', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, 11, 245, 204, '39564728', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 09:56:43', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, 11, 245, 204, '43258197', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:09:59', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, 11, 245, 204, '41598072', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:11:48', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, 11, 245, 204, '36241570', 'retail', '', 2, ':', '4000', 'paid', 'paytm', 'placed', '2020-04-17 10:13:15', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, 11, 245, 204, '81473295', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:16:45', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, 11, 245, 204, '96485371', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:18:14', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, 11, 245, 204, '48637952', 'retail', '', 7, ':', '14000', 'paid', 'paytm', 'placed', '2020-04-17 10:19:11', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(204, 11, 245, 204, '53927806', 'retail', '', 7, ':', '14000', 'paid', 'paytm', 'placed', '2020-04-17 10:21:22', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(205, 11, 245, 204, '97281506', 'retail', '', 7, ':', '14000', 'paid', 'paytm', 'placed', '2020-04-17 10:24:19', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(206, 11, 245, 204, '05178294', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:25:10', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(207, 11, 245, 204, '21395706', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:27:22', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(208, 11, 245, 204, '25970634', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:29:23', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(209, 11, 245, 204, '65912384', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:31:13', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(210, 11, 245, 204, '48053976', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:32:11', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(211, 11, 245, 204, '85491267', 'retail', '', 7, ':', '14000', 'paid', 'paytm', 'placed', '2020-04-17 10:33:08', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(212, 11, 245, 204, '61923587', 'retail', '', 6, ':', '12000', 'paid', 'paytm', 'placed', '2020-04-17 10:36:24', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(213, 11, 245, 204, '34760581', 'retail', '', 7, ':', '14000', 'paid', 'paytm', 'placed', '2020-04-17 10:38:52', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(214, 11, 245, 204, '23469071', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:41:53', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(215, 11, 245, 204, '86920735', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:43:53', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(216, 11, 245, 204, '64259130', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:45:12', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(217, 11, 245, 204, '42659071', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:46:10', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(218, 11, 245, 204, '39186540', 'retail', '', 6, ':', '12000', 'paid', 'paytm', 'placed', '2020-04-17 10:46:50', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(219, 11, 245, 204, '48563209', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-17 10:58:43', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(220, 11, 245, 204, '05673291', 'retail', '', 2, ':', '4000', 'paid', 'paytm', 'placed', '2020-04-17 11:01:18', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(221, 11, 245, 204, '43210768', 'retail', '', 6, ':', '12000', 'paid', 'paytm', 'placed', '2020-04-17 11:02:43', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(222, 11, 245, 204, '79801465', 'retail', '', 21, ':', '42000', 'paid', 'paytm', 'placed', '2020-04-17 11:04:47', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(223, 11, 245, 204, '03942617', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-18 09:29:51', '0', 400, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(224, 11, 245, 204, '03246157', 'retail', '', 1, ':', '2000', 'paid', 'paytm', 'placed', '2020-04-25 14:48:08', '0', 0, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(225, 11, 0, 0, '92168305', 'Stall', '', 0, '', '12.3', 'Pending', 'Select Payment Mode', '', '2020-05-12 10:27:47', '0', 0, '2020-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(226, 11, 0, 237, '80231769', 'Stall', '', 0, '', '12.3', 'Pending', 'Payumoney', '', '2020-05-12 10:31:18', '0', 0, '2020-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(227, 11, 0, 237, '13967052', 'Stall', '', 1, '', '12.3', 'Pending', 'Payumoney', '', '2020-05-12 10:42:55', '0', 0, '2020-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(228, 11, 0, 237, '56734120', 'Stall', '', 1, '', '12.3', 'Pending', 'Payumoney', '', '2020-05-12 10:51:14', '0', 0, '2020-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(229, 11, 0, 237, '64598327', 'Stall', '', 1, '', '12.3', 'Pending', 'PYTM', '', '2020-05-12 10:51:56', '0', 0, '2020-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(230, 11, 0, 237, '13682509', 'Stall', '', 1, '', '12.3', 'Pending', 'PYTM', '', '2020-05-12 11:09:28', '0', 0, '2020-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(231, 11, 0, 237, '60582473', 'Stall', '', 1, '', '12.3', 'Paid', 'PYTM', '', '2020-05-12 11:18:39', '0', 0, '2020-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(232, 11, 0, 237, '05174862', 'Stall', '', 2, '', '24.6', 'Paid', 'PYTM', '', '2020-05-12 11:20:06', '0', 0, '2020-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(233, 11, 0, 237, '97183425', 'Stall', '', 1, '', '12.3', 'Paid', 'PYTM', '', '2020-05-12 11:25:20', '0', 0, '2020-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(234, 11, 0, 237, '59287436', 'Stall', '', 1, '', '12.3', 'Paid', 'PYTM', '', '2020-05-12 12:08:18', '0', 0, '2020-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(252, 11, 0, 246, '02637584', 'Transaction', '', 0, '', '1000', 'Paid', 'PYTM', '', '2020-05-18 12:53:45', '0', 0, '2020-05-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(253, 11, 0, 246, '86192047', 'Transaction', '', 0, '', '1000', 'Paid', 'PYTM', '', '2020-05-18 13:08:48', '0', 0, '2020-05-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(254, 11, 0, 246, '60871293', 'Transaction', '', 0, '', '1000', 'Pending', 'PYTM', '', '2020-05-18 13:14:25', '0', 0, '2020-05-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(255, 11, 0, 246, '53248917', 'Transaction', '', 0, '', '1000', 'Paid', 'PYTM', '', '2020-05-18 13:16:32', '0', 0, '2020-05-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(256, 9, 6, 28, '24950136', 'retail', '', 2, ':', '2589.97', 'paid', 'payu', 'placed', '2020-06-13 06:28:33', '0', 0, '2020-06-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(257, 9, 17, 34, '95402736', 'retail', '', 2, ':', '970', 'paid', 'paytm', 'placed', '2020-06-13 06:38:01', '0', 0, '2020-06-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(258, 9, 21, 34, '98147502', 'retail', '', 1, ':', '446', 'paid', 'payu', 'placed', '2020-06-15 09:01:44', '0', 0, '2020-06-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(259, 9, 22, 34, '98147502', 'retail', '', 1, ':', '2066', 'paid', 'payu', 'placed', '2020-06-15 09:01:44', '0', 0, '2020-06-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(260, 9, 17, 34, '96241308', 'retail', '', 1, ':', '510', 'paid', 'paytm', 'placed', '2020-06-16 06:46:41', '0', 0, '2020-06-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(261, 9, 6, 28, '96241308', 'retail', '', 1, ':', '1394.99', 'paid', 'paytm', 'placed', '2020-06-16 06:46:41', '0', 0, '2020-06-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(262, 9, 17, 34, '76245890', 'retail', '', 1, ':', '510', 'paid', 'payu', 'placed', '2020-06-16 08:04:40', '0', 0, '2020-06-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(263, 9, 23, 34, '17859324', 'retail', '', 1, ':', '319', 'paid', 'payu', 'placed', '2020-06-16 09:00:34', '0', 0, '2020-06-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(264, 11, NULL, 388, '35047196', 'Stall', NULL, 1, NULL, '1200000', 'Paid', 'Payumoney', NULL, '2020-06-27 09:11:41', '0', 0, '2020-06-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(265, 11, NULL, 388, '47695082', 'Stall', NULL, 1, NULL, '1200000', 'Paid', 'Payumoney', NULL, '2020-06-27 09:15:57', '0', 0, '2020-06-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(266, 11, NULL, 388, '69052178', 'Stall', NULL, 1, NULL, '1200000', 'Paid', 'Payumoney', NULL, '2020-06-27 09:23:46', '0', 0, '2020-06-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(267, 11, NULL, 388, '01425798', 'Stall', NULL, 1, NULL, '1200000', 'Paid', 'Payumoney', NULL, '2020-06-27 11:09:43', '0', 0, '2020-06-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(268, 11, NULL, 393, '78140923', 'Stall', NULL, 1, NULL, '40000', 'Paid', 'Payumoney', NULL, '2020-06-28 06:38:05', '0', 0, '2020-06-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, 11, NULL, 393, '89754126', 'Stall', NULL, 1, NULL, '40000', 'Paid', 'PYTM', NULL, '2020-06-28 07:00:20', '0', 0, '2020-06-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, 11, NULL, 393, '83165079', 'Stall', NULL, 1, NULL, '40000', 'Pending', 'Payumoney', NULL, '2020-06-28 07:09:20', '0', 0, '2020-06-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, 11, NULL, 395, '15398476', 'Stall', NULL, 1, NULL, '40000', 'Paid', 'PYTM', NULL, '2020-06-28 12:20:03', '0', 0, '2020-06-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, 11, NULL, 397, '59184023', 'Stall', NULL, 1, NULL, '5000000', 'Paid', 'Payumoney', NULL, '2020-06-28 16:13:24', '0', 0, '2020-06-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, 11, NULL, 401, '40196273', 'Stall', NULL, 1, NULL, '5000', 'Paid', 'Payumoney', NULL, '2020-06-29 09:50:45', '0', 0, '2020-06-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, 11, NULL, 401, '70692841', 'Stall', NULL, 1, NULL, '251065', 'Pending', 'Payumoney', NULL, '2020-06-29 09:52:44', '0', 0, '2020-06-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, 11, NULL, 401, '43012598', 'Stall', NULL, 1, NULL, '251065', 'Pending', 'Payumoney', NULL, '2020-06-29 09:52:57', '0', 0, '2020-06-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(276, 11, NULL, 401, '80294136', 'Stall', NULL, 1, NULL, '251065', 'Pending', 'Payumoney', NULL, '2020-06-29 09:53:05', '0', 0, '2020-06-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(277, 11, NULL, 401, '01397542', 'Stall', NULL, 1, NULL, '251065', 'Pending', 'Payumoney', NULL, '2020-06-29 09:53:19', '0', 0, '2020-06-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(278, 9, 25, 28, '53076891', 'retail', '', 2, ':', '508', 'paid', 'payu', 'placed', '2020-07-18 17:31:23', '0', 0, '2020-07-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(279, 9, 79, 34, '21039564', 'retail', '', 2, ':', '1220.4', 'paid', 'payu', 'placed', '2020-07-19 07:46:22', '0', 200, '2020-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, 9, 79, 34, '45762801', 'retail', '', 1, ':', '635.2', 'paid', 'payu', 'placed', '2020-07-19 07:49:55', '0', 0, '2020-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, 9, 79, 34, '72359864', 'retail', '', 1, ':', '635.2', 'paid', 'payu', 'placed', '2020-07-19 07:53:16', '0', 0, '2020-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, 9, 79, 34, '89140376', 'retail', '', 1, ':', '635.2', 'paid', 'payu', 'placed', '2020-07-19 07:55:33', '0', 0, '2020-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(283, 9, 75, 34, '03864921', 'retail', '', 4, ':', '2030.16', 'paid', 'payu', 'placed', '2020-07-19 08:03:44', '0', 444, '2020-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(284, 9, 69, 28, '81036974', 'retail', '', 3, ':', '6833', 'paid', 'payu', 'placed', '2020-07-19 08:29:14', '0', 0, '2020-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(285, 9, 70, 28, '69703581', 'retail', '', 2, ':', '1042', 'paid', 'payu', 'placed', '2020-07-19 08:47:26', '0', 0, '2020-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(286, 9, 69, 28, '28541396', 'retail', '', 4, ':', '9044', 'paid', 'payu', 'placed', '2020-07-19 12:20:30', '0', 80, '2020-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(287, 9, 69, 28, '27586093', 'retail', '', 2, ':', '4622', 'paid', 'payu', 'placed', '2020-07-19 13:15:18', '0', 0, '2020-07-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(288, 9, 23, 34, '48507269', 'retail', '', 1, ':', '319', 'paid', 'payu', 'placed', '2020-07-24 13:10:28', '0', 0, '2020-07-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(289, 9, 26, 34, '36851470', 'retail', '', 2, ':', '529', 'paid', 'payu', 'placed', '2020-07-24 14:03:16', '0', 0, '2020-07-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(290, 11, 229, 203, '63491527', 'retail', '', 1, ':', '1234', 'paid', 'payu', 'placed', '2020-07-24 16:05:25', '0', 0, '2020-07-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(291, 11, 229, 203, '06437921', 'retail', '', 1, ':', '1234', 'paid', 'payu', 'placed', '2020-07-24 16:10:29', '0', 0, '2020-07-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(292, 11, 229, 203, '89312704', 'retail', '', 1, ':', '1234', 'paid', 'payu', 'placed', '2020-07-24 17:55:21', '0', 0, '2020-07-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(293, 9, NULL, 144, '68013457', 'Stall', NULL, 1, NULL, '40000', 'Paid', 'Payumoney', NULL, '2020-07-24 19:12:47', '0', 0, '2020-07-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(296, 11, NULL, 311, '60135842', 'service', '', 1, NULL, '1000', 'paid', 'paytm', 'placed', '2020-07-28 20:35:07', '0', 0, '2020-07-29', 482, 73, 16, NULL, NULL, NULL, NULL, NULL),
(297, 11, NULL, 311, '73014529', 'service', '', 1, NULL, '4000', 'paid', 'paytm', 'placed', '2020-07-29 14:02:04', '0', 0, '2020-07-29', 472, 59, 16, NULL, NULL, NULL, NULL, NULL),
(298, 11, NULL, 311, '60237159', 'service', '', 1, NULL, '500', 'paid', 'paytm', 'placed', '2020-07-29 19:53:39', '0', 0, '2020-07-30', 481, 70, 16, NULL, NULL, NULL, NULL, NULL),
(299, 11, NULL, 311, '60237159', 'service', '', 3, NULL, '300', 'paid', 'paytm', 'placed', '2020-07-29 19:53:39', '0', 0, '2020-07-30', 481, 71, 16, NULL, NULL, NULL, NULL, NULL),
(300, 11, NULL, 311, '85263901', 'service', '', 1, NULL, '500', 'paid', 'paytm', 'placed', '2020-07-29 20:12:19', '0', 0, '2020-07-30', 481, 70, 16, NULL, NULL, NULL, NULL, NULL),
(301, 11, NULL, 311, '37469028', 'service', '', 1, NULL, '100', 'paid', 'paytm', 'placed', '2020-07-29 20:16:29', '0', 0, '2020-07-30', 481, 71, 16, NULL, NULL, NULL, NULL, NULL),
(302, 11, NULL, 311, '32486709', 'service', '', 1, NULL, '5000', 'paid', 'paytm', 'placed', '2020-07-29 20:18:46', '0', 0, '2020-07-30', 471, 68, 16, NULL, NULL, NULL, NULL, NULL),
(303, 11, NULL, 311, '94257680', 'service', '', 1, NULL, '500', 'paid', 'paytm', 'placed', '2020-07-29 20:25:42', '0', 0, '2020-07-30', 474, 61, 16, NULL, NULL, NULL, NULL, NULL),
(304, 11, NULL, 311, '82457691', 'service', '', 1, NULL, '1050', 'paid', 'payu', 'placed', '2020-07-30 12:13:15', '0', 0, '2020-07-30', 484, 81, 16, NULL, NULL, NULL, NULL, NULL),
(305, 11, NULL, 311, '92146538', 'service', '', 1, NULL, '4000', 'paid', 'payu', 'placed', '2020-07-30 14:11:59', '0', 0, '2020-07-30', 469, 51, 16, NULL, NULL, NULL, NULL, NULL),
(306, 11, NULL, 311, '94378105', 'service', '', 1, NULL, '1050', 'paid', 'payu', 'placed', '2020-07-30 14:35:20', '0', 0, '2020-07-30', 484, 81, 16, NULL, NULL, NULL, NULL, NULL),
(307, 11, NULL, 311, '89734165', 'service', '', 1, NULL, '1040', 'paid', 'payu', 'placed', '2020-07-30 15:18:36', '0', 0, '2020-07-30', 484, 81, 16, NULL, NULL, NULL, NULL, NULL),
(308, 11, NULL, 311, '71026543', 'service', '', 1, NULL, '1050', 'paid', 'payu', 'placed', '2020-08-01 05:17:57', '0', 0, '2020-08-01', 484, 81, 16, NULL, NULL, NULL, NULL, NULL),
(309, 11, NULL, 311, '05618793', 'service', '', 2, NULL, '2090', 'paid', 'cod', 'placed', '2020-08-01 06:25:13', '0', 0, '2020-08-01', 484, 81, 16, NULL, NULL, NULL, NULL, NULL),
(310, 11, 229, 203, '43761058', 'retail', '', 1, ':', '987.2', 'paid', 'paytm', 'placed', '2020-08-01 07:41:23', '0', 0, '2020-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(311, 11, 225, 191, '91756842', 'retail', '', 1, ':', '90', 'paid', 'payu', 'placed', '2020-08-01 07:56:28', '0', 0, '2020-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(312, 11, 229, 203, '13285469', 'retail', '', 1, ':', '987.2', 'paid', 'payu', 'placed', '2020-08-01 09:52:17', '0', 0, '2020-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(313, 11, NULL, 311, '69283074', 'service', '', 1, NULL, '575', 'paid', 'paytm', 'placed', '2020-08-01 10:30:18', '0', 0, '2020-08-01', 474, 88, 16, NULL, NULL, NULL, NULL, NULL),
(314, 11, NULL, 311, '37026149', 'service', '', 1, NULL, '1000', 'paid', 'paytm', 'placed', '2020-08-01 10:59:14', '0', 0, '2020-08-01', 482, 73, 16, NULL, NULL, NULL, NULL, NULL),
(315, 11, NULL, 311, '54032187', 'service', '', 1, NULL, '100', 'paid', 'paytm', 'placed', '2020-08-01 11:09:10', '0', 0, '2020-08-01', 481, 71, 16, NULL, NULL, NULL, NULL, NULL),
(316, 11, NULL, 311, '35614270', 'service', '', 1, NULL, '2800', 'paid', 'paytm', 'placed', '2020-08-01 11:20:42', '0', 0, '2020-08-01', 469, 51, 16, NULL, NULL, NULL, NULL, NULL),
(317, 11, NULL, 311, '31045762', 'service', '', 1, NULL, '2800', 'paid', 'paytm', 'placed', '2020-08-01 11:24:19', '0', 0, '2020-08-01', 472, 59, 16, NULL, NULL, NULL, NULL, NULL),
(318, 11, NULL, 311, '19354276', 'service', '', 1, NULL, '440', 'paid', 'payu', 'placed', '2020-08-01 11:41:43', '0', 0, '2020-08-01', 483, 80, 16, NULL, NULL, NULL, NULL, NULL),
(319, 11, NULL, 311, '94561820', 'service', '', 1, NULL, '2700', 'paid', 'paytm', 'placed', '2020-08-01 12:18:11', '0', 0, '2020-08-01', 469, 51, 16, NULL, NULL, NULL, NULL, NULL),
(320, 11, NULL, 418, '20634158', 'service', '', 1, NULL, '127.6', 'paid', 'payu', 'placed', '2020-08-01 12:39:21', '0', 0, '2020-08-01', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(321, 11, NULL, 418, '12097648', 'service', '', 1, NULL, '77.6', 'paid', 'paytm', 'placed', '2020-08-01 12:46:12', '0', 0, '2020-08-01', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(322, 11, NULL, 311, '02459637', 'service', '', 1, NULL, '2700', 'paid', 'paytm', 'placed', '2020-08-01 16:03:17', '0', 0, '2020-08-01', 468, 50, 16, NULL, NULL, NULL, NULL, NULL),
(323, 11, NULL, 311, '13267950', 'service', '', 1, NULL, '425', 'paid', 'paytm', 'placed', '2020-08-01 16:10:45', '0', 0, '2020-08-01', 474, 88, 16, NULL, NULL, NULL, NULL, NULL),
(324, 11, NULL, 418, '90617432', 'service', '', 1, NULL, '127.6', 'paid', 'paytm', 'placed', '2020-08-01 16:19:26', '0', 0, '2020-08-01', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(325, 11, 229, 203, '19835064', 'retail', '', 1, ':', '587.2', 'paid', 'paytm', 'placed', '2020-08-01 17:05:16', '0', 0, '2020-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(326, 11, 229, 203, '79318246', 'retail', '', 1, ':', '947.2', 'paid', 'paytm', 'placed', '2020-08-01 17:45:06', '0', 0, '2020-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(327, 11, 229, 203, '27509613', 'retail', '', 1, ':', '487.2', 'paid', 'paytm', 'placed', '2020-08-01 18:02:28', '0', 0, '2020-08-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(328, 11, NULL, 311, '50629147', 'service', '', 1, NULL, '400', 'paid', 'paytm', 'placed', '2020-08-02 17:53:57', '0', 0, '2020-08-02', 495, 87, 16, NULL, NULL, NULL, NULL, NULL),
(329, 11, NULL, 418, '63410928', 'service', '', 1, NULL, '77.6', 'paid', 'paytm', 'placed', '2020-08-02 18:35:19', '0', 0, '2020-08-03', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(330, 11, 229, 203, '64587102', 'retail', '', 1, ':', '987.2', 'paid', 'paytm', 'placed', '2020-08-03 15:04:36', '0', 0, '2020-08-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(331, 11, 229, 203, '06593148', 'retail', '', 1, ':', '987.2', 'paid', 'paytm', 'placed', '2020-08-03 15:10:29', '0', 0, '2020-08-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(332, 11, 229, 203, '59781342', 'retail', '', 1, ':', '487.2', 'paid', 'paytm', 'placed', '2020-08-03 15:22:12', '0', 0, '2020-08-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(333, 11, NULL, 311, '12458379', 'service', '', 1, NULL, '540', 'paid', 'paytm', 'placed', '2020-08-03 15:27:04', '0', 0, '2020-08-03', 484, 81, 16, NULL, NULL, NULL, NULL, NULL),
(334, 11, NULL, 418, '47026831', 'service', '', 1, NULL, '127.6', 'paid', 'paytm', 'placed', '2020-08-03 15:31:32', '0', 0, '2020-08-03', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(335, 11, NULL, 418, '18495706', 'service', '', 1, NULL, '159.84', 'paid', 'paytm', 'placed', '2020-08-03 15:44:56', '0', 0, '2020-08-03', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(336, 11, 434, 311, '90137425', 'retail', '', 1, ':', '470', 'paid', 'paytm', 'placed', '2020-08-03 15:53:24', '0', 0, '2020-08-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(337, 11, 434, 311, '05614782', 'retail', '', 1, ':', '350', 'paid', 'paytm', 'placed', '2020-08-03 16:02:48', '0', 0, '2020-08-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(338, 11, NULL, 311, '51486703', 'service', '', 1, NULL, '440', 'paid', 'cod', 'placed', '2020-08-03 16:26:13', '0', 0, '2020-08-03', 484, 81, 16, NULL, NULL, NULL, NULL, NULL),
(339, 11, NULL, 311, '89471625', 'service', '', 1, NULL, '440', 'paid', 'cod', 'placed', '2020-08-03 16:36:33', '0', 0, '2020-08-03', 484, 81, 16, NULL, NULL, NULL, NULL, NULL),
(340, 11, NULL, 311, '04953671', 'service', '', 1, NULL, '950', 'paid', 'cod', 'placed', '2020-08-03 16:43:16', '0', 0, '2020-08-03', 484, 81, 16, NULL, NULL, NULL, NULL, NULL),
(341, 11, NULL, 418, '40635178', 'service', '', 1, NULL, '159.84', 'paid', 'paytm', 'placed', '2020-08-04 11:42:28', '0', 0, '2020-08-04', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(342, 11, 229, 203, '41382675', 'retail', '', 1, ':', '888.48', 'paid', 'paytm', 'placed', '2020-08-04 11:54:40', '0', 0, '2020-08-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `order_details` (`id`, `site_id`, `product_id`, `vendor_id`, `cart_id`, `product_type`, `addi_info`, `quantity`, `variant`, `amount`, `payment_status`, `payment_mode`, `order_status`, `updated_date`, `request`, `Commission`, `created_date`, `service_id`, `package_id`, `marketplace_id`, `txn_id`, `areferal_id`, `vreferal_id`, `affiliate_id`, `user_id`) VALUES
(343, 11, 229, 203, '51763428', 'retail', '', 1, ':', '888.48', 'paid', 'cod', 'placed', '2020-08-04 11:58:07', '0', 0, '2020-08-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(344, 11, 229, 203, '68035249', 'retail', '', 1, ':', '888.48', 'paid', 'cod', 'placed', '2020-08-04 12:01:21', '0', 0, '2020-08-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(345, 11, NULL, 311, '49725163', 'service', '', 1, NULL, '940', 'paid', 'cod', 'placed', '2020-08-04 12:16:55', '0', 0, '2020-08-04', 484, 81, 16, NULL, NULL, NULL, NULL, NULL),
(346, 11, NULL, 311, '54138072', 'service', '', 1, NULL, '940', 'paid', 'cod', 'placed', '2020-08-04 12:19:56', '0', 0, '2020-08-04', 484, 81, 16, NULL, NULL, NULL, NULL, NULL),
(347, 11, 229, 203, '53927048', 'retail', '', 1, ':', '1110.6', 'paid', 'paytm', 'placed', '2020-08-08 19:53:27', '0', 0, '2020-08-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(348, 11, 229, 203, '48236971', 'retail', '', 2, ':', '1776.96', 'paid', 'not set', 'placed', '2020-09-14 18:53:59', '0', 0, '2020-09-15', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(349, 11, 229, 203, '63154720', 'retail', '', 1, ':', '888.48', 'paid', 'cod', 'placed', '2020-09-14 19:02:38', '0', 0, '2020-09-15', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(350, 11, 229, 203, '75309148', 'retail', '', 2, ':', '1776.96', 'paid', 'paytm', 'placed', '2020-09-14 19:16:48', '0', 0, '2020-09-15', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(351, 11, NULL, 418, '75309148', 'service', '', 1, NULL, '177.6', 'paid', 'paytm', 'placed', '2020-09-14 19:16:49', '0', 0, '2020-09-15', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(352, 11, 229, 203, '09765128', 'retail', '', 1, ':', '888.48', 'paid', 'paytm', 'placed', '2020-09-14 19:38:46', '0', 0, '2020-09-15', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(353, 11, NULL, 418, '09765128', 'service', '', 1, NULL, '177.6', 'paid', 'paytm', 'placed', '2020-09-14 19:38:46', '0', 0, '2020-09-15', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(354, 11, 229, 203, '32180476', 'retail', '', 2, ':', '1776.96', 'paid', 'paytm', 'placed', '2020-09-15 16:41:07', '0', 0, '2020-09-15', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(355, 11, NULL, 418, '32180476', 'service', '', 1, NULL, '177.6', 'paid', 'paytm', 'placed', '2020-09-15 16:41:07', '0', 0, '2020-09-15', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(356, 11, 229, 203, '78046521', 'retail', '', 1, ':', '888.48', 'paid', 'paytm', 'placed', '2020-09-16 14:09:28', '0', 0, '2020-09-16', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(357, 11, NULL, 418, '78046521', 'service', '', 1, NULL, '177.6', 'paid', 'paytm', 'placed', '2020-09-16 14:09:28', '0', 0, '2020-09-16', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(358, 11, 241, 202, '40621759', 'retail', '', 1, ':', '190', 'paid', 'paytm', 'placed', '2020-09-16 14:28:45', '0', 0, '2020-09-16', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(359, 11, NULL, 311, '40621759', 'service', '', 1, NULL, '3800', 'paid', 'paytm', 'placed', '2020-09-16 14:28:45', '0', 0, '2020-09-16', 468, 50, 16, NULL, NULL, NULL, NULL, NULL),
(360, 11, 241, 202, '43910762', 'retail', '', 1, ':', '190', 'paid', 'paytm', 'placed', '2020-09-16 14:31:27', '0', 0, '2020-09-16', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(361, 11, 229, 203, '05321987', 'retail', '', 1, ':', '1110.6', 'paid', 'paytm', 'placed', '2020-09-16 14:35:10', '0', 0, '2020-09-16', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(362, 11, 229, 203, '78312049', 'retail', '', 1, ':', '1110.6', 'paid', 'paytm', 'placed', '2020-09-16 14:39:40', '0', 0, '2020-09-16', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(363, 11, 229, 203, '96203745', 'retail', '', 1, ':', '1110.6', 'paid', 'paytm', 'placed', '2020-09-16 14:43:02', '0', 0, '2020-09-16', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(364, 11, 240, 202, '02937568', 'retail', '', 1, ':', '160', 'paid', 'cod', 'placed', '2020-09-16 14:47:07', '0', 0, '2020-09-16', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(365, 11, 229, 203, '69038742', 'retail', '', 1, ':', '888.48', 'paid', 'cod', 'placed', '2020-09-16 14:50:25', '0', 0, '2020-09-16', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(366, 11, 229, 203, '05369821', 'retail', '', 1, ':', '888.48', 'paid', 'paytm', 'placed', '2020-09-16 14:52:03', '0', 0, '2020-09-16', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(367, 11, 480, 381, '81670523', 'retail', '', 1, ':', '170', 'paid', 'cod', 'placed', '2020-09-18 12:46:13', '0', 0, '2020-09-18', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(368, 11, 480, 381, '37059241', 'retail', '', 1, ':', '170', 'paid', 'not set', 'placed', '2020-09-18 13:31:52', '0', 0, '2020-09-18', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(369, 11, 480, 381, '81074539', 'retail', '', 1, ':', '270', 'paid', 'not set', 'placed', '2020-09-18 13:44:55', '0', 0, '2020-09-18', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(370, 11, 480, 381, '10732548', 'retail', '', 1, ':', '270', 'paid', 'not set', 'placed', '2020-09-18 13:51:08', '0', 0, '2020-09-18', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(371, 11, 480, 381, '71258940', 'retail', '', 1, ':', '170', 'paid', 'paytm', 'placed', '2020-09-18 13:52:49', '0', 0, '2020-09-18', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(372, 11, 480, 381, '08463125', 'retail', '', 2, ':', '440', 'paid', 'paytm', 'placed', '2020-09-18 14:06:05', '0', 0, '2020-09-18', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(373, 11, NULL, 381, '76418023', 'service', '', 1, NULL, '900', 'paid', 'paytm', 'placed', '2020-09-18 16:04:23', '0', 0, '2020-09-18', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(374, 11, 480, 381, '29103648', 'retail', '', 1, ':', '170', 'paid', 'paytm', 'placed', '2020-09-18 16:34:07', '0', 0, '2020-09-18', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(375, 11, NULL, 381, '29103648', 'service', '', 1, NULL, '800', 'paid', 'paytm', 'placed', '2020-09-18 16:34:07', '0', 0, '2020-09-18', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(376, 11, NULL, 381, '29103648', 'service', '', 1, NULL, '1700', 'paid', 'paytm', 'placed', '2020-09-18 16:34:07', '0', 0, '2020-09-18', 504, 95, 16, NULL, NULL, NULL, NULL, NULL),
(377, 11, 480, 381, '80241596', 'retail', '', 1, ':', '170', 'paid', 'paytm', 'placed', '2020-09-18 16:37:52', '0', 0, '2020-09-18', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(378, 11, NULL, 381, '80241596', 'service', '', 1, NULL, '800', 'paid', 'paytm', 'placed', '2020-09-18 16:37:52', '0', 0, '2020-09-18', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(379, 11, 480, 381, '27614908', 'retail', '', 1, ':', '270', 'paid', 'paytm', 'placed', '2020-09-19 12:05:47', '0', 0, '2020-09-19', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(380, 11, 480, 381, '82917536', 'retail', '', 1, ':', '270', 'paid', 'paytm', 'placed', '2020-09-19 12:09:48', '0', 0, '2020-09-19', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(381, 11, 480, 381, '29834501', 'retail', '', 1, ':', '270', 'paid', 'payu', 'placed', '2020-09-19 17:10:00', '0', 0, '2020-09-19', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(382, 11, NULL, 381, '71285943', 'service', '', 2, NULL, '1800', 'paid', 'paytm', 'placed', '2020-09-19 17:11:50', '0', 0, '2020-09-19', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(383, 11, 480, 381, '34967512', 'retail', '', 1, ':', '270', 'paid', 'paytm', 'placed', '2020-09-19 17:13:33', '0', 0, '2020-09-19', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(384, 11, 482, 381, '01875936', 'retail', '', 1, ':', '1350', 'paid', 'paytm', 'placed', '2020-09-19 17:24:07', '0', 0, '2020-09-19', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(385, 11, 480, 381, '43256709', 'retail', '', 1, ':', '270', 'paid', 'paytm', 'placed', '2020-09-19 17:25:16', '0', 0, '2020-09-19', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(386, 11, 480, 381, '07836524', 'retail', '', 1, ':', '270', 'paid', 'paytm', 'placed', '2020-09-19 18:11:20', '0', 0, '2020-09-19', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(387, 11, 480, 381, '71946058', 'retail', '', 1, ':', '270', 'paid', 'paytm', 'placed', '2020-09-19 18:14:11', '0', 0, '2020-09-19', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(388, 11, 480, 381, '04952673', 'retail', '', 1, ':', '170', 'paid', 'paytm', 'placed', '2020-09-19 18:19:21', '0', 0, '2020-09-19', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(389, 11, 480, 381, '57340289', 'retail', '', 1, ':', '270', 'paid', 'not set', 'placed', '2020-09-20 09:06:13', '0', 0, '2020-09-20', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(390, 11, NULL, 311, '48203591', 'service', '', 1, NULL, '950', 'paid', 'paytm', 'placed', '2020-09-20 09:15:31', '0', 0, '2020-09-20', 482, 73, 16, NULL, NULL, NULL, NULL, NULL),
(391, 11, 482, 381, '37261958', 'retail', '', 1, ':', '1350', 'paid', 'paytm', 'placed', '2020-09-20 09:55:01', '0', 0, '2020-09-20', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(392, 11, 480, 381, '14762590', 'retail', '', 1, ':', '470', 'paid', 'paytm', 'placed', '2020-09-20 10:02:48', '0', 0, '2020-09-20', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(393, 11, NULL, 381, '87930152', 'service', '', 1, NULL, '900', 'paid', 'paytm', 'placed', '2020-09-20 10:05:02', '0', 0, '2020-09-20', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(394, 11, NULL, 381, '87930152', 'service', '', 1, NULL, '1800', 'paid', 'paytm', 'placed', '2020-09-20 10:05:02', '0', 0, '2020-09-20', 504, 95, 16, NULL, NULL, NULL, NULL, NULL),
(395, 11, NULL, 381, '60479813', 'service', '', 1, NULL, '900', 'paid', 'paytm', 'placed', '2020-09-20 10:08:48', '0', 0, '2020-09-20', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(396, 11, NULL, 311, '74102958', 'service', '', 1, NULL, '3800', 'paid', 'paytm', 'placed', '2020-09-20 10:11:30', '0', 0, '2020-09-20', 468, 50, 16, NULL, NULL, NULL, NULL, NULL),
(397, 11, 481, 381, '51736249', 'retail', '', 1, ':', '2600', 'paid', 'paytm', 'placed', '2020-09-20 10:15:53', '0', 0, '2020-09-20', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(398, 11, NULL, 311, '51736249', 'service', '', 1, NULL, '950', 'paid', 'paytm', 'placed', '2020-09-20 10:15:53', '0', 0, '2020-09-20', 482, 73, 16, NULL, NULL, NULL, NULL, NULL),
(399, 11, NULL, 311, '51736249', 'service', '', 1, NULL, '380', 'paid', 'paytm', 'placed', '2020-09-20 10:15:53', '0', 0, '2020-09-20', 482, 74, 16, NULL, NULL, NULL, NULL, NULL),
(400, 11, 480, 381, 'ML82634071', 'retail', '0000-00-00', 1, ':', '270', 'paid', 'payu', 'placed', '2020-09-20 15:17:39', '0', 0, '2020-09-20', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(401, 11, 480, 381, 'ML82634071', 'retail', '0000-00-00', 1, ':', '270', 'paid', 'payu', 'placed', '2020-09-20 15:24:27', '0', 0, '2020-09-20', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(402, 11, 480, 381, 'ML47820915', 'retail', '0000-00-00', 1, ':', '270', 'paid', 'payu', 'placed', '2020-09-20 15:29:29', '0', 0, '2020-09-20', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(403, 11, 480, 381, 'ML47820915', 'retail', '0000-00-00', 1, ':', '270', 'paid', 'payu', 'placed', '2020-09-20 15:42:25', '0', 0, '2020-09-20', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(404, 11, 481, 381, 'ML08542371', 'retail', '0000-00-00', 1, ':', '2700', 'paid', 'payu', 'placed', '2020-09-20 15:44:08', '0', 0, '2020-09-20', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(405, 11, 481, 381, 'ML78563491', 'retail', '0000-00-00', 2, ':', '5400', 'paid', 'payu', 'placed', '2020-09-20 16:12:43', '0', 0, '2020-09-20', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(406, 11, 480, 381, '72098351', 'retail', '0000-00-00', 8, ':', '2160', 'paid', 'payu', 'placed', '2020-09-20 16:30:53', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML76904281', NULL, NULL, NULL, NULL),
(407, 11, 480, 381, '09128354', 'retail', '0000-00-00', 1, ':', '270', 'paid', 'payu', 'placed', '2020-09-20 16:39:05', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML81295640', NULL, NULL, NULL, NULL),
(408, 11, 481, 381, '09128354', 'retail', '0000-00-00', 2, ':', '5400', 'paid', 'payu', 'placed', '2020-09-20 16:39:06', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML81295640', NULL, NULL, NULL, NULL),
(409, 11, 480, 381, '06841537', 'retail', '0000-00-00', 4, ':', '1080', 'paid', 'payu', 'placed', '2020-09-20 16:54:11', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML62504713', NULL, NULL, NULL, NULL),
(410, 11, 481, 381, '06841537', 'retail', '0000-00-00', 4, ':', '10800', 'paid', 'payu', 'placed', '2020-09-20 16:54:11', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML62504713', NULL, NULL, NULL, NULL),
(411, 11, 480, 381, '65840937', 'retail', '0000-00-00', 5, ':', '1350', 'paid', 'payu', 'placed', '2020-09-20 16:59:42', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML69537410', NULL, NULL, NULL, NULL),
(412, 11, 480, 381, '83612074', 'retail', '0000-00-00', 1, ':', '270', 'paid', 'payu', 'placed', '2020-09-20 17:05:56', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML94327851', NULL, NULL, NULL, NULL),
(413, 11, 481, 381, '83612074', 'retail', '0000-00-00', 3, ':', '8100', 'paid', 'payu', 'placed', '2020-09-20 17:05:56', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML94327851', NULL, NULL, NULL, NULL),
(414, 11, 481, 381, '96108435', 'retail', '0000-00-00', 1, ':', '740', 'paid', 'payu', 'placed', '2020-09-20 17:13:12', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML12849056', NULL, NULL, NULL, NULL),
(415, 11, 480, 381, '96108435', 'retail', '0000-00-00', 2, ':', '740', 'paid', 'payu', 'placed', '2020-09-20 17:13:12', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML12849056', NULL, NULL, NULL, NULL),
(416, 11, 480, 381, '48721903', 'retail', '0000-00-00', 1, ':', '470', 'paid', 'payu', 'placed', '2020-09-20 17:19:05', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML69581037', NULL, NULL, NULL, NULL),
(417, 11, 481, 381, '48721903', 'retail', '0000-00-00', 1, ':', '2900', 'paid', 'payu', 'placed', '2020-09-20 17:19:05', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML69581037', NULL, NULL, NULL, NULL),
(418, 11, 480, 381, '43109765', 'retail', '0000-00-00', 1, ':', '470', 'paid', 'payu', 'placed', '2020-09-20 17:27:17', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML08469125', NULL, NULL, NULL, NULL),
(419, 11, 480, 381, '07368452', 'retail', '0000-00-00', 1, ':', '470', 'paid', 'payu', 'placed', '2020-09-20 17:42:53', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML60935487', NULL, NULL, NULL, NULL),
(420, 11, 480, 381, '20698437', 'retail', '0000-00-00', 4, ':', '1280', 'paid', 'payu', 'placed', '2020-09-20 17:57:12', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML23514870', NULL, NULL, NULL, NULL),
(421, 11, 480, 381, '94163075', 'retail', '0000-00-00', 1, ':', '370', 'paid', 'payu', 'placed', '2020-09-20 18:01:00', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML87593461', NULL, NULL, NULL, NULL),
(422, 11, 480, 381, '24156907', 'retail', '0000-00-00', 1, ':', '370', 'paid', 'payu', 'placed', '2020-09-20 18:20:10', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML40367921', NULL, NULL, NULL, NULL),
(423, 11, 481, 381, '24156907', 'retail', '0000-00-00', 1, ':', '2800', 'paid', 'payu', 'placed', '2020-09-20 18:20:10', '0', 0, '2020-09-20', NULL, NULL, 5, 'ML40367921', NULL, NULL, NULL, NULL),
(424, 11, NULL, 381, 'ML85193602', 'service', '0000-00-00', 2, NULL, '0', 'paid', 'payu', 'placed', '2020-09-20 18:29:14', '0', 0, '2020-09-20', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(425, 11, NULL, 381, 'ML87109542', 'service', '0000-00-00', 1, NULL, '0', 'paid', 'payu', 'placed', '2020-09-20 18:32:50', '0', 0, '2020-09-21', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(426, 11, NULL, 418, 'ML60349782', 'service', '0000-00-00', 1, NULL, '200', 'paid', 'payu', 'placed', '2020-09-20 18:42:03', '0', 0, '2020-09-21', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(427, 11, 480, 381, '52907481', 'retail', '0000-00-00', 1, ':', '470', 'paid', 'payu', 'placed', '2020-09-20 18:44:12', '0', 0, '2020-09-21', NULL, NULL, 5, 'ML84612950', NULL, NULL, NULL, NULL),
(428, 11, NULL, 381, 'ML84612950', 'service', '0000-00-00', 1, NULL, '900', 'paid', 'payu', 'placed', '2020-09-20 18:44:13', '0', 0, '2020-09-21', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(429, 11, 480, 381, '94358071', 'retail', '0000-00-00', 1, ':', '470', 'paid', 'payu', 'placed', '2020-09-20 18:47:15', '0', 0, '2020-09-21', NULL, NULL, 5, 'ML10863427', NULL, NULL, NULL, NULL),
(430, 11, NULL, 381, 'ML10863427', 'service', '0000-00-00', 1, NULL, '900', 'paid', 'payu', 'placed', '2020-09-20 18:47:15', '0', 0, '2020-09-21', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(431, 11, 482, 381, '06215794', 'retail', '0000-00-00', 1, ':', '1485', 'paid', 'payu', 'placed', '2020-09-20 18:51:40', '0', 0, '2020-09-21', NULL, NULL, 5, 'ML51407986', NULL, NULL, NULL, NULL),
(432, 11, NULL, 381, 'ML51407986', 'service', '0000-00-00', 1, NULL, '900', 'paid', 'payu', 'placed', '2020-09-20 18:51:41', '0', 0, '2020-09-21', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(433, 11, 480, 381, '05214978', 'retail', '0000-00-00', 1, ':', '370', 'paid', 'payu', 'placed', '2020-09-20 18:56:19', '0', 0, '2020-09-21', NULL, NULL, 5, 'ML74201859', NULL, NULL, NULL, NULL),
(434, 11, NULL, 381, 'ML74201859', 'service', '0000-00-00', 1, NULL, '800', 'paid', 'payu', 'placed', '2020-09-20 18:56:19', '0', 0, '2020-09-21', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(435, 11, NULL, 381, 'ML74201859', 'service', '0000-00-00', 1, NULL, '1700', 'paid', 'payu', 'placed', '2020-09-20 18:56:19', '0', 0, '2020-09-21', 504, 95, 16, NULL, NULL, NULL, NULL, NULL),
(436, 11, 481, 381, '69175430', 'retail', '0000-00-00', 1, ':', '2800', 'paid', 'payu', 'placed', '2020-09-20 19:05:43', '0', 0, '2020-09-21', NULL, NULL, 5, 'ML65901478', NULL, NULL, NULL, NULL),
(437, 11, NULL, 381, 'ML65901478', 'service', '0000-00-00', 1, NULL, '800', 'paid', 'payu', 'placed', '2020-09-20 19:05:43', '0', 0, '2020-09-21', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(438, 11, NULL, 311, 'ML65901478', 'service', '0000-00-00', 1, NULL, '350', 'paid', 'payu', 'placed', '2020-09-20 19:05:44', '0', 0, '2020-09-21', 474, 88, 16, NULL, NULL, NULL, NULL, NULL),
(439, 11, 481, 381, '84053179', 'retail', '0000-00-00', 1, ':', '2800', 'paid', 'payu', 'placed', '2020-09-20 19:10:23', '0', 0, '2020-09-21', NULL, NULL, 5, 'ML71348569', NULL, NULL, NULL, NULL),
(440, 11, NULL, 381, 'ML71348569', 'service', '0000-00-00', 1, NULL, '800', 'paid', 'payu', 'placed', '2020-09-20 19:10:23', '0', 0, '2020-09-21', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(441, 11, 481, 381, '02341598', 'retail', '0000-00-00', 1, ':', '2800', 'paid', 'payu', 'placed', '2020-09-20 19:17:14', '0', 0, '2020-09-21', NULL, NULL, 5, 'ML62975408', NULL, NULL, NULL, NULL),
(442, 11, NULL, 418, 'ML62975408', 'service', '0000-00-00', 1, NULL, '200', 'paid', 'payu', 'placed', '2020-09-20 19:17:14', '0', 0, '2020-09-21', 480, 63, 16, NULL, NULL, NULL, NULL, NULL),
(443, 11, 480, 381, '21094563', 'retail', '', 1, ':', '270', 'paid', 'paytm', 'placed', '2020-09-20 19:22:07', '0', 0, '2020-09-21', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(444, 11, NULL, 381, '21094563', 'service', '', 1, NULL, '900', 'paid', 'paytm', 'placed', '2020-09-20 19:22:07', '0', 0, '2020-09-21', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(445, 11, 480, 381, '97520648', 'retail', '', 1, ':', '270', 'paid', 'paytm', 'placed', '2020-09-20 19:28:43', '0', 0, '2020-09-21', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(446, 11, 481, 381, '97520648', 'retail', '', 1, ':', '2700', 'paid', 'paytm', 'placed', '2020-09-20 19:28:43', '0', 0, '2020-09-21', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(447, 11, 480, 381, '39065412', 'retail', '', 1, ':', '170', 'paid', 'paytm', 'placed', '2020-09-20 19:30:43', '0', 0, '2020-09-21', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(448, 11, NULL, 381, '39065412', 'service', '', 1, NULL, '800', 'paid', 'paytm', 'placed', '2020-09-20 19:30:43', '0', 0, '2020-09-21', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(449, 11, 480, 381, '79834126', 'retail', '', 4, ':', '980', 'paid', 'paytm', 'placed', '2020-09-20 19:35:29', '0', 0, '2020-09-21', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(450, 11, NULL, 381, '79834126', 'service', '', 1, NULL, '800', 'paid', 'paytm', 'placed', '2020-09-20 19:35:29', '0', 0, '2020-09-21', 504, 94, 16, NULL, NULL, NULL, NULL, NULL),
(451, 11, 480, 381, '03719564', 'retail', '', 1, ':', '170', 'paid', 'cod', 'placed', '2020-09-20 19:37:38', '0', 0, '2020-09-21', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(452, 1, 8, 28, '82459610', 'retail', '0000-00-00', 2, ':', '1904.8', 'paid', 'payu', 'Order Received', '2020-09-21 11:00:19', '0', 0, '2020-09-21', NULL, NULL, 5, 'ML59214830', NULL, NULL, NULL, NULL),
(453, 1, 26, 34, '96012438', 'retail', '', 1, ':', '225', 'paid', 'paytm', 'placed', '2020-09-21 11:03:34', '0', 0, '2020-09-21', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(454, 1, NULL, 28, '68351920', 'Transaction', NULL, NULL, NULL, '11', 'Pending', 'PYTM', NULL, '2020-09-29 21:15:32', '0', 0, '2020-09-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(455, 1, NULL, 28, '68512794', 'service', '', 2, NULL, '900', 'paid', 'paytm', 'Order Shipped', '2020-09-29 21:36:38', '0', 0, '2020-09-29', 474, 88, 16, NULL, NULL, NULL, NULL, NULL),
(456, 1, NULL, 31, '10698352', 'Transaction', NULL, NULL, NULL, '666', 'Pending', 'PYTM', NULL, '2020-09-30 19:06:31', '0', 0, '2020-09-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(457, 1, NULL, 28, '35641729', 'Transaction', NULL, NULL, NULL, '333', 'Pending', 'PYTM', NULL, '2020-09-30 19:40:45', '0', 0, '2020-09-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(458, 1, NULL, 28, '93780412', 'Transaction', NULL, NULL, NULL, '222', 'Pending', 'PYTM', NULL, '2020-09-30 19:43:59', '0', 0, '2020-09-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(459, 1, 7, 28, '24958671', 'retail', '', 1, ':', '1999', 'paid', 'cod', 'Ready for Shipment', '2020-10-04 20:26:19', '0', 0, '2020-10-04', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(460, 1, 8, 28, '93641758', 'retail', '', 1, 'rgb(15, 64, 255):', '680', 'paid', 'cod', 'placed', '2020-10-04 20:31:58', '0', 0, '2020-10-04', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(461, 1, 7, 28, '18407635', 'retail', '', 2, ':', '3998', 'paid', 'cod', 'placed', '2020-10-04 20:44:40', '0', 0, '2020-10-04', NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(462, 1, 29, 28, '72453896', 'retail', '', 1, ':', '216', 'paid', 'paytm', 'placed', '2020-10-06 19:33:50', '0', 0, '2020-10-06', NULL, NULL, 5, NULL, '', '0', NULL, NULL),
(463, 1, 8, 28, '34981207', 'retail', '', 1, ':', '680', 'paid', 'paytm', 'placed', '2020-10-06 19:39:42', '0', 0, '2020-10-06', NULL, NULL, 5, NULL, '', '0', NULL, NULL),
(464, 1, 475, 28, '29671354', 'retail', '', 1, ':', '2003', 'paid', 'paytm', 'placed', '2020-10-06 19:48:52', '0', 0, '2020-10-06', NULL, NULL, 5, NULL, '52', '0', NULL, NULL),
(465, 1, 475, 28, '61842730', 'retail', '', 1, ':', '2003', 'paid', 'paytm', 'placed', '2020-10-06 19:50:37', '0', 0, '2020-10-06', NULL, NULL, 5, NULL, '52', '0', NULL, NULL),
(466, 1, 475, 28, '38601945', 'retail', '', 1, ':', '2003', 'paid', 'paytm', 'placed', '2020-10-06 19:57:58', '0', 0, '2020-10-06', NULL, NULL, 5, NULL, '52', '0', NULL, NULL),
(467, 1, 478, 28, '27506489', 'retail', '', 1, ':', '200', 'paid', 'paytm', 'placed', '2020-10-06 20:03:18', '0', 5, '2020-10-06', NULL, NULL, 5, NULL, '52', '0', NULL, NULL),
(468, 1, 7, 28, '39215846', 'retail', '', 1, ':', '1999', 'paid', 'cod', 'placed', '2020-10-07 06:51:17', '0', 0, '2020-10-07', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(469, 1, 7, 28, '96870521', 'retail', '', 1, ':', '1999', 'paid', 'cod', 'placed', '2020-10-07 07:18:33', '0', 0, '2020-10-07', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(470, 1, 29, 28, '81743095', 'retail', '', 1, ':', '216', 'paid', 'paytm', 'placed', '2020-10-07 08:57:27', '0', 0, '2020-10-07', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(471, 1, 7, 28, '94057123', 'retail', '', 1, ':', '1999', 'paid', 'cod', 'placed', '2020-10-08 07:17:10', '0', 0, '2020-10-08', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(472, 1, NULL, 28, '45382106', 'service', '', 1, NULL, '5699.05', 'paid', 'paytm', 'placed', '2020-10-08 15:17:20', '0', 0, '2020-10-08', 497, 93, 16, NULL, '', '', NULL, NULL),
(473, 1, 7, 28, '63957814', 'retail', '', 1, ':', '1999', 'paid', 'cod', 'placed', '2020-10-09 08:53:31', '0', 0, '2020-10-09', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(474, 1, 29, 28, '37918402', 'retail', '', 1, ':', '216', 'paid', 'paytm', 'placed', '2020-10-22 14:26:36', '0', 0, '2020-10-22', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(475, 1, 7, 28, '19730245', 'retail', '', 2, ':', '3998', 'paid', 'cod', 'placed', '2020-11-04 06:20:50', '0', 0, '2020-11-04', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(476, 1, 7, 28, '01924863', 'retail', '', 1, ':', '1999', 'paid', 'cod', 'placed', '2020-11-04 06:28:12', '0', 0, '2020-11-04', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(477, 1, NULL, 30, '41981435', 'Transaction', NULL, NULL, NULL, '100+', 'Pending', 'PAYTM', NULL, '2020-11-04 18:13:38', '0', 0, '2020-11-04', NULL, NULL, NULL, 'ML35707294', NULL, NULL, NULL, NULL),
(478, 1, NULL, 30, '45452034', 'Transaction', NULL, NULL, NULL, '100+', 'Pending', 'PAYTM', NULL, '2020-11-04 18:21:53', '0', 0, '2020-11-04', NULL, NULL, NULL, 'ML86333827', NULL, NULL, NULL, NULL),
(479, 1, NULL, 30, '27230688', 'Transaction', NULL, NULL, NULL, '100+', 'Pending', 'PAYTM', NULL, '2020-11-04 18:26:14', '0', 0, '2020-11-04', NULL, NULL, NULL, 'ML91923697', NULL, NULL, NULL, NULL),
(480, 1, NULL, 30, '35490748', 'Transaction', NULL, NULL, NULL, '10+', 'Pending', 'PAYTM', NULL, '2020-11-04 18:36:05', '0', 0, '2020-11-04', NULL, NULL, NULL, 'ML27305000', NULL, NULL, NULL, NULL),
(481, 1, NULL, 30, '84344410', 'Transaction', NULL, NULL, NULL, '30+', 'Pending', 'PAYTM', NULL, '2020-11-04 18:37:49', '0', 0, '2020-11-04', NULL, NULL, NULL, 'ML65206093', NULL, NULL, NULL, NULL),
(482, 1, NULL, 30, '72013628', 'Transaction', NULL, NULL, NULL, '10+', 'paid', 'PAYTM', NULL, '2020-11-04 18:39:07', '0', 0, '2020-11-04', NULL, NULL, NULL, 'ML37705184', NULL, NULL, NULL, NULL),
(483, 1, NULL, 30, '68806027', 'Transaction', NULL, NULL, NULL, '1000+', 'paid', 'Payumoney', NULL, '2020-11-04 19:29:48', '0', 0, '2020-11-04', NULL, NULL, NULL, 'ML21065689', NULL, NULL, NULL, NULL),
(484, 1, 106, 30, '', 'lead', NULL, NULL, NULL, '100', 'Paid', 'paytm', NULL, '2020-11-04 19:59:27', '0', 0, '2020-11-04', NULL, NULL, NULL, 'ORDS12346112', NULL, NULL, NULL, NULL),
(485, 1, 106, 30, '', 'lead', NULL, NULL, NULL, '100', 'Paid', 'payu', NULL, '2020-11-04 20:09:09', '0', 0, '2020-11-04', NULL, NULL, NULL, 'ORDS87040774', NULL, NULL, NULL, NULL),
(486, 1, NULL, 30, '90581372', 'Stall', NULL, 1, NULL, '251065', 'Pending', 'PYTM', NULL, '2020-11-21 15:38:45', '0', 0, '2020-11-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(487, 1, NULL, 30, '21097348', 'Stall', NULL, 1, NULL, '40000', 'Pending', 'PYTM', NULL, '2020-12-01 09:48:09', '0', 0, '2020-12-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(488, 1, 23, 30, '79086452', 'Stall', NULL, 1, NULL, '251065', 'Paid', 'PAYTM', NULL, '2020-12-02 16:18:21', '0', 0, '2020-12-02', NULL, NULL, NULL, 'ML85306974', NULL, NULL, NULL, NULL),
(489, 1, 23, 30, '71256984', 'Stall', NULL, 1, NULL, '251065', 'Pending', 'Payumoney', NULL, '2020-12-02 16:24:05', '0', 0, '2020-12-02', NULL, NULL, NULL, 'ML45723910', NULL, NULL, NULL, NULL),
(490, 1, 23, 30, '58793246', 'Stall', NULL, 1, NULL, '251065', 'Pending', 'Payumoney', NULL, '2020-12-02 16:31:51', '0', 0, '2020-12-02', NULL, NULL, NULL, 'ML38967054', NULL, NULL, NULL, NULL),
(491, 1, 23, 30, '73098415', 'Stall', NULL, 1, NULL, '251065', 'Paid', 'Payumoney', NULL, '2020-12-03 13:54:08', '0', 0, '2020-12-03', NULL, NULL, NULL, 'ML42561930', NULL, NULL, NULL, NULL),
(492, 1, 23, 385, '60384975', 'Stall', NULL, 1, NULL, '251065', 'Paid', 'PAYTM', NULL, '2020-12-03 15:02:06', '0', 0, '2020-12-03', NULL, NULL, NULL, 'ML17530842', NULL, NULL, NULL, NULL),
(493, 1, 106, 1, '', 'lead', NULL, NULL, NULL, '100', 'Paid', 'paytm', NULL, '2020-12-17 18:43:43', '0', 0, '2020-12-17', NULL, NULL, NULL, 'ORDS36464674', NULL, NULL, NULL, NULL),
(494, 1, NULL, 385, '16469970', 'Transaction', NULL, NULL, NULL, '1000+', 'paid', 'PAYTM', NULL, '2020-12-18 08:46:50', '0', 0, '2020-12-18', NULL, NULL, NULL, 'ML78006955', NULL, NULL, NULL, NULL),
(495, 1, NULL, 385, '39157949', 'Transaction', NULL, NULL, NULL, '200+', 'paid', 'PAYTM', NULL, '2020-12-18 08:53:44', '0', 0, '2020-12-18', NULL, NULL, NULL, 'ML97433677', NULL, NULL, NULL, NULL),
(496, 9, NULL, 0, '28145769', 'Donation', NULL, NULL, NULL, '100', 'Paid', 'PYTM', NULL, '2021-01-10 16:15:52', '0', 0, '2021-01-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(497, 2, NULL, 0, '15820739', 'Donation', NULL, NULL, NULL, '', 'Pending', 'PYTM', NULL, '2021-01-10 17:51:43', '0', 0, '2021-01-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(498, 2, NULL, 0, '49652718', 'Donation', NULL, NULL, NULL, '', 'Pending', 'PYTM', NULL, '2021-01-10 17:53:30', '0', 0, '2021-01-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(499, 2, NULL, 0, '15497326', 'Donation', NULL, NULL, NULL, '', 'Pending', 'PYTM', NULL, '2021-01-10 17:53:36', '0', 0, '2021-01-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(500, 2, NULL, 0, '64591038', 'Donation', NULL, NULL, NULL, '', 'Pending', 'PYTM', NULL, '2021-01-10 17:56:38', '0', 0, '2021-01-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(501, 2, NULL, 0, '58306279', 'Donation', NULL, NULL, NULL, '', 'Pending', 'PYTM', NULL, '2021-01-10 17:56:44', '0', 0, '2021-01-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(502, 2, 44, 41, '21693874', 'Stall', NULL, 1, NULL, '5.4', 'Paid', 'PAYTM', NULL, '2021-01-11 21:17:19', '0', 0, '2021-01-11', NULL, NULL, NULL, 'ML02918345', NULL, NULL, NULL, NULL),
(503, 2, NULL, 0, '84952603', 'Donation', NULL, NULL, NULL, '100', 'Pending', 'PYTM', NULL, '2021-01-12 15:56:37', '0', 0, '2021-01-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(504, 2, NULL, 0, '58476210', 'Donation', NULL, NULL, NULL, '100', 'Pending', 'PYTM', NULL, '2021-01-12 16:01:41', '0', 0, '2021-01-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(505, 2, NULL, 1, '49783160', 'service', '', 1, NULL, '2378.8', 'paid', 'paytm', 'placed', '2021-01-12 21:26:20', '0', 0, '2021-01-12', 1, 1, 16, NULL, '', '', NULL, NULL),
(506, 2, NULL, 1, '30897425', 'service', '', 1, NULL, '2378.8', 'paid', 'paytm', 'placed', '2021-01-12 21:29:35', '0', 0, '2021-01-12', 1, 1, 16, NULL, '', '', NULL, NULL),
(507, 2, NULL, 1, '23081647', 'service', '', 1, NULL, '2378.8', 'paid', 'paytm', 'placed', '2021-01-12 21:30:42', '0', 0, '2021-01-12', 1, 1, 16, NULL, '', '', NULL, NULL),
(508, 2, 7, 28, '34102897', 'retail', '', 2, ':', '4739.64', 'paid', 'paytm', 'Order Received', '2021-01-13 15:12:44', '0', 20, '2021-01-13', NULL, NULL, 5, NULL, '53', '0', NULL, NULL),
(509, 2, 7, 28, '83972405', 'retail', '', 1, ':', '2370.82', 'paid', 'paytm', 'placed', '2021-01-17 09:17:32', '0', 0, '2021-01-17', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(510, 2, 7, 28, '10945762', 'retail', '', 2, ':', '4729.64', 'paid', 'paytm', 'placed', '2021-01-17 09:22:19', '0', 20, '2021-01-17', NULL, NULL, 5, NULL, '4', '0', NULL, NULL),
(511, 2, 521, 5, '41286093', 'garment', '', 1, 'rgb(73, 251, 2):S:Slik', '1812', 'paid', 'paytm', 'placed', '2021-02-14 19:21:34', '0', 0, '2021-02-14', NULL, NULL, 20, NULL, '0', '0', NULL, NULL),
(512, 2, 485, 3, '83521709', 'retail', '', 1, ':', '511', 'paid', 'paytm', 'placed', '2021-02-14 19:31:56', '0', 0, '2021-02-14', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(513, 2, 521, 5, '16824309', 'garment', '', 1, '::', '2112', 'paid', 'paytm', 'placed', '2021-02-14 19:41:39', '0', 0, '2021-02-14', NULL, NULL, 20, NULL, '0', '0', NULL, NULL),
(514, 2, 485, 3, '31278695', 'retail', '', 1, ':', '511', 'paid', 'paytm', 'placed', '2021-02-21 16:14:46', '0', 0, '2021-02-21', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(515, 2, 485, 3, '59230841', 'retail', '', 1, ':', '511', 'paid', 'paytm', 'placed', '2021-02-21 17:16:29', '0', 0, '2021-02-21', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(516, 2, NULL, 0, '70326594', 'Donation', NULL, NULL, NULL, '10000', 'Pending', 'PYTM', NULL, '2021-02-23 13:33:34', '0', 0, '2021-02-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(517, 2, 485, 3, '83052941', 'retail', '', 1, ':', '511', 'paid', 'paytm', 'placed', '2021-02-25 17:16:00', '0', 0, '2021-02-25', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(518, 2, 485, 3, '01764583', 'retail', '', 1, ':', '511', 'paid', 'cod', 'placed', '2021-02-25 17:25:34', '0', 0, '2021-02-25', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(519, 2, NULL, 0, '78683524', 'Transaction', NULL, NULL, NULL, '200+', 'Pending', 'Payumoney', NULL, '2021-02-25 17:27:23', '0', 0, '2021-02-25', NULL, NULL, NULL, 'ML75066159', NULL, NULL, NULL, 279),
(520, 2, NULL, 0, '14854641', 'Transaction', NULL, NULL, NULL, '200+', 'Pending', 'PAYTM', NULL, '2021-02-25 17:41:44', '0', 0, '2021-02-25', NULL, NULL, NULL, 'ML12926244', NULL, NULL, NULL, 279),
(521, 2, NULL, 0, '22258430', 'Transaction', NULL, NULL, NULL, '200+', 'Pending', 'Payumoney', NULL, '2021-02-25 17:52:51', '0', 0, '2021-02-25', NULL, NULL, NULL, 'ML38576605', NULL, NULL, NULL, 279),
(522, 2, NULL, 0, '94358759', 'Transaction', NULL, NULL, NULL, '100+', 'paid', 'PAYTM', NULL, '2021-02-25 19:17:39', '0', 0, '2021-02-25', NULL, NULL, NULL, 'ML53486739', NULL, NULL, NULL, 279),
(523, 2, NULL, 0, '94458606', 'Transaction', NULL, NULL, NULL, '200+', 'paid', 'Payumoney', NULL, '2021-02-25 19:18:18', '0', 0, '2021-02-25', NULL, NULL, NULL, 'ML21218483', NULL, NULL, NULL, 279),
(524, 2, NULL, 3, '46901725', 'service', '', 1, NULL, '499', 'paid', 'paytm', 'placed', '2021-02-25 22:50:45', '0', 200, '2021-02-25', 13, 67, 16, NULL, '2', '0', NULL, NULL),
(525, 2, NULL, 0, '75243964', 'Transaction', NULL, NULL, NULL, '100', 'Pending', 'PAYTM', NULL, '2021-02-25 22:52:52', '0', 0, '2021-02-25', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL),
(526, 2, NULL, 12, '31483830', 'Transaction', NULL, NULL, NULL, '500+', 'paid', 'PAYTM', NULL, '2021-03-01 18:13:51', '0', 0, '2021-03-01', NULL, NULL, NULL, 'ML23576327', NULL, NULL, NULL, NULL),
(527, 2, 4, 14, '', 'package', NULL, NULL, NULL, '111', 'Pending', 'paytm', NULL, '2021-05-11 15:43:57', '0', 0, '2021-05-11', NULL, NULL, NULL, 'ORDS20024854', NULL, NULL, NULL, NULL),
(528, 2, 4, 14, '', 'package', NULL, NULL, NULL, '111', 'Paid', 'paytm', NULL, '2021-05-11 15:45:06', '0', 0, '2021-05-11', NULL, NULL, NULL, 'ORDS5779372', NULL, NULL, NULL, NULL),
(529, 2, 5, 14, '', 'package', NULL, NULL, NULL, '2000', 'Paid', 'paytm', NULL, '2021-05-11 15:50:45', '0', 0, '2021-05-11', NULL, NULL, NULL, 'ORDS6671648', NULL, NULL, NULL, NULL),
(530, 2, 6, 13, '', 'package', NULL, NULL, NULL, '22', 'Paid', 'paytm', NULL, '2021-05-11 21:15:02', '0', 0, '2021-05-11', NULL, NULL, NULL, 'ORDS9699858', NULL, NULL, NULL, NULL),
(531, 2, 0, 14, '', 'package', NULL, NULL, NULL, '200', 'Paid', 'paytm', NULL, '2021-05-13 08:07:45', '0', 0, '2021-05-13', NULL, NULL, NULL, 'ORDS39439952', NULL, NULL, NULL, NULL),
(532, 2, 8, 14, '', 'package', NULL, NULL, NULL, '200', 'Paid', 'paytm', NULL, '2021-05-13 08:12:28', '0', 0, '2021-05-13', NULL, NULL, NULL, 'ORDS5718537', NULL, NULL, NULL, NULL),
(533, 2, 9, 14, '', 'package', NULL, NULL, NULL, '12', 'Paid', 'paytm', NULL, '2021-05-13 09:02:38', '0', 0, '2021-05-13', NULL, NULL, NULL, 'ORDS64754152', NULL, NULL, NULL, NULL),
(534, 2, 10, 14, '', 'package', NULL, NULL, NULL, '500', 'Paid', 'paytm', NULL, '2021-05-13 09:18:25', '0', 0, '2021-05-13', NULL, NULL, NULL, 'ORDS91951610', NULL, NULL, NULL, NULL),
(535, 2, 12, 14, '', 'package', NULL, NULL, NULL, '12', 'Pending', 'paytm', NULL, '2021-05-22 08:36:42', '0', 0, '2021-05-22', NULL, NULL, NULL, 'ORDS15593486', NULL, NULL, NULL, NULL),
(536, 2, 12, 14, '', 'package', NULL, NULL, NULL, '12', 'Pending', 'paytm', NULL, '2021-05-22 08:37:28', '0', 0, '2021-05-22', NULL, NULL, NULL, 'ORDS87734955', NULL, NULL, NULL, NULL),
(537, 2, NULL, 13, '43194891', 'Transaction', NULL, NULL, NULL, '200+', 'paid', 'PAYTM', NULL, '2021-07-28 09:07:26', '0', 0, '2021-07-28', NULL, NULL, NULL, 'ML93508145', NULL, NULL, NULL, NULL),
(538, 2, 485, 14, '60314857', 'retail', '', 1, ':', '511', 'paid', 'paytm', 'placed', '2021-07-28 09:11:46', '0', 0, '2021-07-28', NULL, NULL, 5, NULL, '0', '0', NULL, NULL),
(539, 2, 11, 20, '', 'package', NULL, NULL, NULL, '100', 'Paid', 'paytm', NULL, '2021-07-28 09:24:25', '0', 0, '2021-07-28', NULL, NULL, NULL, 'ORDS48051174', NULL, NULL, NULL, NULL),
(540, 2, NULL, 20, '57312537', 'Transaction', NULL, NULL, NULL, '2000+', 'paid', 'PAYTM', NULL, '2021-07-28 09:25:03', '0', 0, '2021-07-28', NULL, NULL, NULL, 'ML76163728', NULL, NULL, NULL, NULL),
(541, 2, NULL, 3, '57918264', 'service', '', 1, NULL, '5999', 'paid', 'paytm', 'placed', '2021-08-12 19:24:29', '0', 0, '2021-08-12', 34, 99, 16, NULL, '0', '0', NULL, NULL),
(542, 2, NULL, 3, '90574321', 'service', '', 1, NULL, '15999', 'paid', 'paytm', 'placed', '2021-08-12 19:26:45', '0', 0, '2021-08-12', 36, 102, 16, NULL, '0', '0', NULL, NULL),
(543, 2, NULL, 3, '43061579', 'service', '', 1, NULL, '12999', 'paid', 'paytm', 'placed', '2021-08-12 19:31:41', '0', 0, '2021-08-12', 35, 101, 16, NULL, '0', '0', NULL, NULL),
(544, 2, NULL, 20, '56418240', 'Transaction', NULL, NULL, NULL, '9+', 'Pending', 'PAYTM', NULL, '2021-08-20 13:27:54', '0', 0, '2021-08-20', NULL, NULL, NULL, 'ML98886054', NULL, NULL, NULL, NULL),
(545, 2, 485, 14, '61382479', 'retail', '', 1, ':', '511', 'paid', 'paytm', 'placed', '2021-09-15 12:39:26', '0', 0, '2021-09-15', NULL, NULL, 5, NULL, '2', '0', NULL, NULL),
(546, 2, 484, 3, '56172830', 'retail', '', 1, ':', '135', 'paid', 'paytm', 'placed', '2021-09-15 16:10:23', '0', 2, '2021-09-15', NULL, NULL, 5, NULL, '2', '0', NULL, NULL),
(547, 2, NULL, 3, '10291853', 'Transaction', NULL, NULL, NULL, '1000+', 'Pending', 'PAYTM', NULL, '2021-09-30 13:01:12', '0', 0, '2021-09-30', NULL, NULL, NULL, 'ML91123747', NULL, NULL, NULL, NULL),
(548, 2, NULL, 3, '19293001', 'Transaction', NULL, NULL, NULL, '1000+', 'Pending', 'PAYTM', NULL, '2021-09-30 13:02:12', '0', 0, '2021-09-30', NULL, NULL, NULL, 'ML69986282', NULL, NULL, NULL, NULL),
(549, 2, NULL, 13, '26713697', 'Transaction', NULL, NULL, NULL, '20+', 'paid', 'PAYTM', NULL, '2021-10-14 18:00:28', '0', 0, '2021-10-14', NULL, NULL, NULL, 'ML25697934', NULL, NULL, NULL, NULL),
(550, 3, NULL, 114, '40165802', 'Transaction', NULL, NULL, NULL, '200+', 'Pending', 'PAYTM', NULL, '2022-01-20 20:41:03', '0', 0, '2022-01-20', NULL, NULL, NULL, 'ML85251412', NULL, NULL, NULL, NULL),
(551, 3, NULL, 114, '70902419', 'Transaction', NULL, NULL, NULL, '222+', 'Pending', 'Payumoney', NULL, '2022-01-20 20:47:51', '0', 0, '2022-01-20', NULL, NULL, NULL, 'ML90869988', NULL, NULL, NULL, NULL),
(552, 3, NULL, 114, '23300985', 'Transaction', NULL, NULL, NULL, '700+', 'Pending', 'PAYTM', NULL, '2022-01-21 03:49:49', '0', 0, '2022-01-21', NULL, NULL, NULL, 'ML11163927', NULL, NULL, NULL, NULL),
(553, 3, NULL, 114, '94605148', 'Transaction', NULL, NULL, NULL, '700+', 'Pending', 'PAYTM', NULL, '2022-01-21 03:52:06', '0', 0, '2022-01-21', NULL, NULL, NULL, 'ML69321041', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_user_id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `product_cost` varchar(20) NOT NULL,
  `shipping_cost` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_history`
--

INSERT INTO `order_history` (`id`, `product_id`, `order_user_id`, `order_id`, `product_quantity`, `created_at`, `updated_at`, `product_cost`, `shipping_cost`, `status`, `transaction_id`, `added_on`) VALUES
(116, 55, 178, '15485224021337650647178', 2, '2019-01-26 22:36:42', '2019-01-26 22:36:42', '21.78', '0', 0, 'a0f089649d9eb31a2ddb', '2019-01-26 22:36:41'),
(115, 56, 178, '15485224021337650647178', 1, '2019-01-26 22:36:42', '2019-01-26 22:36:42', '0.99', '0', 0, 'a0f089649d9eb31a2ddb', '2019-01-26 22:36:41'),
(114, 55, 177, '15485069211752564353177', 1, '2019-01-26 18:18:41', '2019-01-26 18:18:41', '10.89', '0', 0, '898983f7009ba542c781', '2019-01-26 18:18:36'),
(74, 13, 102, '15272314401803175766102', 1, '2018-05-25 12:27:20', '2018-05-25 12:27:20', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(73, 14, 102, '15272314401803175766102', 1, '2018-05-25 12:27:20', '2018-05-25 12:27:20', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(72, 13, 102, '1527231438710343859102', 1, '2018-05-25 12:27:18', '2018-05-25 12:27:18', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(71, 14, 102, '1527231438710343859102', 1, '2018-05-25 12:27:18', '2018-05-25 12:27:18', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(70, 13, 102, '15272309771310911200102', 1, '2018-05-25 12:19:37', '2018-05-25 12:19:37', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(69, 14, 102, '15272309771310911200102', 1, '2018-05-25 12:19:37', '2018-05-25 12:19:37', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(68, 13, 102, '15272309751976385889102', 1, '2018-05-25 12:19:35', '2018-05-25 12:19:35', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(67, 14, 102, '15272309751976385889102', 1, '2018-05-25 12:19:35', '2018-05-25 12:19:35', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(66, 13, 102, '15272301641420411670102', 1, '2018-05-25 12:06:04', '2018-05-25 12:06:04', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(120, 81, 182, '1555117486470513952182', 1, '2019-04-13 06:34:46', '2019-04-13 06:34:46', '4987.5', '250', 0, '08572d75ad4f6522aee0', '2019-04-13 06:34:28'),
(119, 97, 182, '1555117486470513952182', 2, '2019-04-13 06:34:46', '2019-04-13 06:34:46', '1900', '200', 0, '08572d75ad4f6522aee0', '2019-04-13 06:34:28'),
(118, 98, 181, '1554866713985509476181', 2, '2019-04-10 08:55:13', '2019-04-10 08:55:13', '2280', '200', 0, '9f9f5dc39276d0942374', '2019-04-10 08:55:10'),
(75, 14, 102, '15272317662006406696102', 1, '2018-05-25 12:32:46', '2018-05-25 12:32:46', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(76, 13, 102, '15272317662006406696102', 1, '2018-05-25 12:32:46', '2018-05-25 12:32:46', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(77, 14, 102, '1527231791286385948102', 1, '2018-05-25 12:33:11', '2018-05-25 12:33:11', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(78, 13, 102, '1527231791286385948102', 1, '2018-05-25 12:33:11', '2018-05-25 12:33:11', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(79, 14, 102, '1527231808603643664102', 1, '2018-05-25 12:33:28', '2018-05-25 12:33:28', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(80, 13, 102, '1527231808603643664102', 1, '2018-05-25 12:33:28', '2018-05-25 12:33:28', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(81, 15, 103, '1527231888191812730103', 1, '2018-05-25 12:34:48', '2018-05-25 12:34:48', '1196.01', '22', 0, '525dfc7c82465ce4cbfd', '2018-05-25 12:35:08'),
(82, 14, 103, '1527231888191812730103', 1, '2018-05-25 12:34:48', '2018-05-25 12:34:48', '1184.64', '23', 0, '525dfc7c82465ce4cbfd', '2018-05-25 12:35:08'),
(83, 15, 115, '15272423091462897986115', 1, '2018-05-25 15:28:29', '2018-05-25 15:28:29', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(84, 15, 115, '15272427611639521935115', 1, '2018-05-25 15:36:01', '2018-05-25 15:36:01', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(85, 15, 115, '15272427631700537227115', 1, '2018-05-25 15:36:03', '2018-05-25 15:36:03', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(86, 15, 115, '15272428611875172583115', 1, '2018-05-25 15:37:41', '2018-05-25 15:37:41', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(87, 12, 118, '15275951121902908521118', 1, '2018-05-29 17:28:32', '2018-05-29 17:28:32', '0', '0', 0, '96eeeba166b0c6fc6815', '2018-05-29 17:28:31'),
(88, 12, 119, '1527595933321941829119', 1, '2018-05-29 17:42:13', '2018-05-29 17:42:13', '0', '0', 0, 'af01e85186e9df357cee', '2018-05-29 17:42:12'),
(89, 12, 119, '1527595972690340394119', 1, '2018-05-29 17:42:52', '2018-05-29 17:42:52', '0', '0', 0, 'af01e85186e9df357cee', '2018-05-29 17:42:12'),
(90, 15, 127, '1529496678429011129127', 1, '2018-06-20 17:41:18', '2018-06-20 17:41:18', '1196.01', '22', 0, 'e74605962b4da9a8420f', '2018-06-20 17:41:16'),
(91, 30, 144, '15417736681549045279144', 1, '2018-11-09 19:57:48', '2018-11-09 19:57:48', '0.5', '0', 0, 'c57e65838198c011f0ac', '2018-11-09 19:57:42'),
(92, 30, 150, '15417754711347247903150', 1, '2018-11-09 20:27:51', '2018-11-09 20:27:51', '0.5', '0', 0, '702ceeafd930f36b6b8f', '2018-11-09 20:27:45'),
(93, 19, 151, '154177556299344690151', 1, '2018-11-09 20:29:22', '2018-11-09 20:29:22', '569.05', '50', 0, '9fbb8c14b413b24051cc', '2018-11-09 20:29:21'),
(94, 30, 150, '15417755921514828994150', 1, '2018-11-09 20:29:52', '2018-11-09 20:29:52', '0.5', '0', 0, '29f2811d1fd827a807d9', '2018-11-09 20:29:46'),
(95, 30, 154, '15417762121070564849154', 1, '2018-11-09 20:40:12', '2018-11-09 20:40:12', '0.5', '0', 0, '78d6a6999d2ca52d54e7', '2018-11-09 20:40:07'),
(96, 15, 157, '15467746821700778473157', 1, '2019-01-06 17:08:02', '2019-01-06 17:08:02', '1196.01', '22', 1, '51e8b4e066be4cc78295', '2019-01-06 17:07:52'),
(97, 15, 158, '15467774422054002770158', 1, '2019-01-06 17:54:02', '2019-01-06 17:54:02', '1196.01', '22', 0, '82c37ca671ca84a9f39c', '2019-01-06 17:53:56'),
(98, 38, 162, '154756668070248494162', 1, '2019-01-15 21:08:00', '2019-01-15 21:08:00', '1980', '100', 0, 'ac3313a0841d660aa5f9', '2019-01-15 21:07:48'),
(99, 38, 163, '15475672951463093905', 1, '2019-01-15 21:18:15', '2019-01-15 21:18:15', '1980', '100', 0, 'fe5a22d61bb05757786f', '2019-01-15 21:18:08'),
(100, 38, 165, '1547567735357355030', 1, '2019-01-15 21:25:35', '2019-01-15 21:25:35', '1980', '100', 0, '0819f3228af18d560461', '2019-01-15 21:25:26'),
(101, 38, 166, '1547568201415996396166', 1, '2019-01-15 16:39:12', '2019-01-15 22:09:12', '1980', '100', 1, '2a7e397d9e23049e2127', '2019-01-15 21:33:13'),
(102, 38, 167, '15475684571870409759167', 1, '2019-01-15 16:39:16', '2019-01-15 22:09:16', '1980', '100', 1, 'e5dba898d445d021f633', '2019-01-15 21:37:26'),
(103, 38, 168, '15475692791700803665168', 1, '2019-01-15 16:38:50', '2019-01-15 22:08:50', '1980', '100', 1, '3ee18f35597d96c49dd4', '2019-01-15 21:51:12'),
(104, 38, 170, '15475719882122581112170', 1, '2019-01-15 22:36:28', '2019-01-15 22:36:28', '1980', '100', 0, '275171479d2051c3181e', '2019-01-15 22:36:21'),
(105, 39, 170, '15475719882122581112170', 1, '2019-01-15 22:36:28', '2019-01-15 22:36:28', '0.99', '0', 0, '275171479d2051c3181e', '2019-01-15 22:36:21'),
(106, 38, 171, '15475721592073988445171', 1, '2019-01-15 22:39:19', '2019-01-15 22:39:19', '1980', '100', 0, '67ffc1e149528413d647', '2019-01-15 22:39:14'),
(107, 39, 171, '15475721592073988445171', 1, '2019-01-15 22:39:19', '2019-01-15 22:39:19', '0.99', '0', 0, '67ffc1e149528413d647', '2019-01-15 22:39:14'),
(108, 39, 172, '154757295420287332172', 1, '2019-01-15 22:52:34', '2019-01-15 22:52:34', '0.99', '0', 0, '1dd7592ba8512d172d90', '2019-01-15 22:52:27'),
(109, 38, 173, '15475731242090131421173', 1, '2019-01-15 22:55:24', '2019-01-15 22:55:24', '1980', '100', 0, '1a02161aaaa1c58bd107', '2019-01-15 22:55:19'),
(110, 39, 173, '15475731242090131421173', 1, '2019-01-15 22:55:24', '2019-01-15 22:55:24', '0.99', '0', 0, '1a02161aaaa1c58bd107', '2019-01-15 22:55:19'),
(111, 38, 174, '1547573222875353425174', 1, '2019-01-15 22:57:02', '2019-01-15 22:57:02', '1980', '100', 0, '378a419d69ee8ccfc1d7', '2019-01-15 22:56:55'),
(112, 39, 174, '1547573222875353425174', 1, '2019-01-15 22:57:02', '2019-01-15 22:57:02', '0.99', '0', 0, '378a419d69ee8ccfc1d7', '2019-01-15 22:56:55'),
(113, 43, 175, '1548477243419876343175', 1, '2019-01-26 10:04:03', '2019-01-26 10:04:03', '0.99', '0', 0, '21c5d5da28147b14f0ea', '2019-01-26 10:03:55'),
(117, 55, 178, '15485224021337650647178', 1, '2019-01-26 22:36:42', '2019-01-26 22:36:42', '10.89', '0', 0, 'a0f089649d9eb31a2ddb', '2019-01-26 22:36:41'),
(121, 95, 183, '1558782911930362191183', 1, '2019-05-25 20:45:11', '2019-05-25 20:45:11', '900', '200', 0, '36c56f711fa3cfd261fd', '2019-05-25 20:44:59'),
(122, 90, 183, '1558782911930362191183', 1, '2019-05-25 20:45:11', '2019-05-25 20:45:11', '5850', '200', 0, '36c56f711fa3cfd261fd', '2019-05-25 20:44:59'),
(123, 81, 184, '15587982381430590769184', 1, '2019-05-26 01:00:38', '2019-05-26 01:00:38', '4987.5', '250', 0, '2e6f5f42b79344a8cc38', '2019-05-26 01:00:28'),
(124, 90, 185, '1558798404538772127185', 1, '2019-05-26 01:03:24', '2019-05-26 01:03:24', '5850', '200', 0, '37ac6c6d84dd7bbc3394', '2019-05-26 01:03:20'),
(125, 92, 186, '15589386291493533907186', 2, '2019-05-27 16:00:29', '2019-05-27 16:00:29', '2850', '200', 0, '94de2ece77f0bee2d922', '2019-05-27 16:00:27'),
(126, 94, 186, '15589386291493533907186', 1, '2019-05-27 16:00:29', '2019-05-27 16:00:29', '800', '200', 0, '94de2ece77f0bee2d922', '2019-05-27 16:00:27'),
(127, 95, 188, '15589479921533452882188', 1, '2019-05-27 18:36:32', '2019-05-27 18:36:32', '900', '200', 0, '8cae682226bd418fb807', '2019-05-27 18:36:23'),
(128, 93, 189, '15590333871043044056189', 2, '2019-05-28 18:19:47', '2019-05-28 18:19:47', '1995', '200', 0, 'ddcd06bbf52c4a95840a', '2019-05-28 18:19:19'),
(129, 94, 191, '1559116177344558794191', 1, '2019-05-29 17:19:37', '2019-05-29 17:19:37', '800', '200', 0, '349cb2784df589f5b6cb', '2019-05-29 17:19:36'),
(130, 91, 192, '1559124041880240777192', 1, '2019-05-29 19:30:41', '2019-05-29 19:30:41', '1620', '200', 0, '6c7906f7809aec8286f0', '2019-05-29 19:30:31'),
(131, 93, 194, '155990730625252504194', 80, '2019-06-07 21:05:06', '2019-06-07 21:05:06', '79800', '200', 0, 'ed01be425a390a353121', '2019-06-07 21:04:49'),
(132, 81, 195, '15618947521337139769195', 1, '2019-06-30 21:09:12', '2019-06-30 21:09:12', '4987.5', '250', 0, 'efc9773c1e4f25450baf', '2019-06-30 21:08:59'),
(116, 55, 178, '15485224021337650647178', 2, '2019-01-26 22:36:42', '2019-01-26 22:36:42', '21.78', '0', 0, 'a0f089649d9eb31a2ddb', '2019-01-26 22:36:41'),
(115, 56, 178, '15485224021337650647178', 1, '2019-01-26 22:36:42', '2019-01-26 22:36:42', '0.99', '0', 0, 'a0f089649d9eb31a2ddb', '2019-01-26 22:36:41'),
(114, 55, 177, '15485069211752564353177', 1, '2019-01-26 18:18:41', '2019-01-26 18:18:41', '10.89', '0', 0, '898983f7009ba542c781', '2019-01-26 18:18:36'),
(74, 13, 102, '15272314401803175766102', 1, '2018-05-25 12:27:20', '2018-05-25 12:27:20', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(73, 14, 102, '15272314401803175766102', 1, '2018-05-25 12:27:20', '2018-05-25 12:27:20', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(72, 13, 102, '1527231438710343859102', 1, '2018-05-25 12:27:18', '2018-05-25 12:27:18', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(71, 14, 102, '1527231438710343859102', 1, '2018-05-25 12:27:18', '2018-05-25 12:27:18', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(70, 13, 102, '15272309771310911200102', 1, '2018-05-25 12:19:37', '2018-05-25 12:19:37', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(69, 14, 102, '15272309771310911200102', 1, '2018-05-25 12:19:37', '2018-05-25 12:19:37', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(68, 13, 102, '15272309751976385889102', 1, '2018-05-25 12:19:35', '2018-05-25 12:19:35', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(67, 14, 102, '15272309751976385889102', 1, '2018-05-25 12:19:35', '2018-05-25 12:19:35', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(66, 13, 102, '15272301641420411670102', 1, '2018-05-25 12:06:04', '2018-05-25 12:06:04', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(120, 81, 182, '1555117486470513952182', 1, '2019-04-13 06:34:46', '2019-04-13 06:34:46', '4987.5', '250', 0, '08572d75ad4f6522aee0', '2019-04-13 06:34:28'),
(119, 97, 182, '1555117486470513952182', 2, '2019-04-13 06:34:46', '2019-04-13 06:34:46', '1900', '200', 0, '08572d75ad4f6522aee0', '2019-04-13 06:34:28'),
(118, 98, 181, '1554866713985509476181', 2, '2019-04-10 08:55:13', '2019-04-10 08:55:13', '2280', '200', 0, '9f9f5dc39276d0942374', '2019-04-10 08:55:10'),
(75, 14, 102, '15272317662006406696102', 1, '2018-05-25 12:32:46', '2018-05-25 12:32:46', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(76, 13, 102, '15272317662006406696102', 1, '2018-05-25 12:32:46', '2018-05-25 12:32:46', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(77, 14, 102, '1527231791286385948102', 1, '2018-05-25 12:33:11', '2018-05-25 12:33:11', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(78, 13, 102, '1527231791286385948102', 1, '2018-05-25 12:33:11', '2018-05-25 12:33:11', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(79, 14, 102, '1527231808603643664102', 1, '2018-05-25 12:33:28', '2018-05-25 12:33:28', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(80, 13, 102, '1527231808603643664102', 1, '2018-05-25 12:33:28', '2018-05-25 12:33:28', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(81, 15, 103, '1527231888191812730103', 1, '2018-05-25 12:34:48', '2018-05-25 12:34:48', '1196.01', '22', 0, '525dfc7c82465ce4cbfd', '2018-05-25 12:35:08'),
(82, 14, 103, '1527231888191812730103', 1, '2018-05-25 12:34:48', '2018-05-25 12:34:48', '1184.64', '23', 0, '525dfc7c82465ce4cbfd', '2018-05-25 12:35:08'),
(83, 15, 115, '15272423091462897986115', 1, '2018-05-25 15:28:29', '2018-05-25 15:28:29', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(84, 15, 115, '15272427611639521935115', 1, '2018-05-25 15:36:01', '2018-05-25 15:36:01', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(85, 15, 115, '15272427631700537227115', 1, '2018-05-25 15:36:03', '2018-05-25 15:36:03', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(86, 15, 115, '15272428611875172583115', 1, '2018-05-25 15:37:41', '2018-05-25 15:37:41', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(87, 12, 118, '15275951121902908521118', 1, '2018-05-29 17:28:32', '2018-05-29 17:28:32', '0', '0', 0, '96eeeba166b0c6fc6815', '2018-05-29 17:28:31'),
(88, 12, 119, '1527595933321941829119', 1, '2018-05-29 17:42:13', '2018-05-29 17:42:13', '0', '0', 0, 'af01e85186e9df357cee', '2018-05-29 17:42:12'),
(89, 12, 119, '1527595972690340394119', 1, '2018-05-29 17:42:52', '2018-05-29 17:42:52', '0', '0', 0, 'af01e85186e9df357cee', '2018-05-29 17:42:12'),
(90, 15, 127, '1529496678429011129127', 1, '2018-06-20 17:41:18', '2018-06-20 17:41:18', '1196.01', '22', 0, 'e74605962b4da9a8420f', '2018-06-20 17:41:16'),
(91, 30, 144, '15417736681549045279144', 1, '2018-11-09 19:57:48', '2018-11-09 19:57:48', '0.5', '0', 0, 'c57e65838198c011f0ac', '2018-11-09 19:57:42'),
(92, 30, 150, '15417754711347247903150', 1, '2018-11-09 20:27:51', '2018-11-09 20:27:51', '0.5', '0', 0, '702ceeafd930f36b6b8f', '2018-11-09 20:27:45'),
(93, 19, 151, '154177556299344690151', 1, '2018-11-09 20:29:22', '2018-11-09 20:29:22', '569.05', '50', 0, '9fbb8c14b413b24051cc', '2018-11-09 20:29:21'),
(94, 30, 150, '15417755921514828994150', 1, '2018-11-09 20:29:52', '2018-11-09 20:29:52', '0.5', '0', 0, '29f2811d1fd827a807d9', '2018-11-09 20:29:46'),
(95, 30, 154, '15417762121070564849154', 1, '2018-11-09 20:40:12', '2018-11-09 20:40:12', '0.5', '0', 0, '78d6a6999d2ca52d54e7', '2018-11-09 20:40:07'),
(96, 15, 157, '15467746821700778473157', 1, '2019-01-06 17:08:02', '2019-01-06 17:08:02', '1196.01', '22', 1, '51e8b4e066be4cc78295', '2019-01-06 17:07:52'),
(97, 15, 158, '15467774422054002770158', 1, '2019-01-06 17:54:02', '2019-01-06 17:54:02', '1196.01', '22', 0, '82c37ca671ca84a9f39c', '2019-01-06 17:53:56'),
(98, 38, 162, '154756668070248494162', 1, '2019-01-15 21:08:00', '2019-01-15 21:08:00', '1980', '100', 0, 'ac3313a0841d660aa5f9', '2019-01-15 21:07:48'),
(99, 38, 163, '15475672951463093905', 1, '2019-01-15 21:18:15', '2019-01-15 21:18:15', '1980', '100', 0, 'fe5a22d61bb05757786f', '2019-01-15 21:18:08'),
(100, 38, 165, '1547567735357355030', 1, '2019-01-15 21:25:35', '2019-01-15 21:25:35', '1980', '100', 0, '0819f3228af18d560461', '2019-01-15 21:25:26'),
(101, 38, 166, '1547568201415996396166', 1, '2019-01-15 16:39:12', '2019-01-15 22:09:12', '1980', '100', 1, '2a7e397d9e23049e2127', '2019-01-15 21:33:13'),
(102, 38, 167, '15475684571870409759167', 1, '2019-01-15 16:39:16', '2019-01-15 22:09:16', '1980', '100', 1, 'e5dba898d445d021f633', '2019-01-15 21:37:26'),
(103, 38, 168, '15475692791700803665168', 1, '2019-01-15 16:38:50', '2019-01-15 22:08:50', '1980', '100', 1, '3ee18f35597d96c49dd4', '2019-01-15 21:51:12'),
(104, 38, 170, '15475719882122581112170', 1, '2019-01-15 22:36:28', '2019-01-15 22:36:28', '1980', '100', 0, '275171479d2051c3181e', '2019-01-15 22:36:21'),
(105, 39, 170, '15475719882122581112170', 1, '2019-01-15 22:36:28', '2019-01-15 22:36:28', '0.99', '0', 0, '275171479d2051c3181e', '2019-01-15 22:36:21'),
(106, 38, 171, '15475721592073988445171', 1, '2019-01-15 22:39:19', '2019-01-15 22:39:19', '1980', '100', 0, '67ffc1e149528413d647', '2019-01-15 22:39:14'),
(107, 39, 171, '15475721592073988445171', 1, '2019-01-15 22:39:19', '2019-01-15 22:39:19', '0.99', '0', 0, '67ffc1e149528413d647', '2019-01-15 22:39:14'),
(108, 39, 172, '154757295420287332172', 1, '2019-01-15 22:52:34', '2019-01-15 22:52:34', '0.99', '0', 0, '1dd7592ba8512d172d90', '2019-01-15 22:52:27'),
(109, 38, 173, '15475731242090131421173', 1, '2019-01-15 22:55:24', '2019-01-15 22:55:24', '1980', '100', 0, '1a02161aaaa1c58bd107', '2019-01-15 22:55:19'),
(110, 39, 173, '15475731242090131421173', 1, '2019-01-15 22:55:24', '2019-01-15 22:55:24', '0.99', '0', 0, '1a02161aaaa1c58bd107', '2019-01-15 22:55:19'),
(111, 38, 174, '1547573222875353425174', 1, '2019-01-15 22:57:02', '2019-01-15 22:57:02', '1980', '100', 0, '378a419d69ee8ccfc1d7', '2019-01-15 22:56:55'),
(112, 39, 174, '1547573222875353425174', 1, '2019-01-15 22:57:02', '2019-01-15 22:57:02', '0.99', '0', 0, '378a419d69ee8ccfc1d7', '2019-01-15 22:56:55'),
(113, 43, 175, '1548477243419876343175', 1, '2019-01-26 10:04:03', '2019-01-26 10:04:03', '0.99', '0', 0, '21c5d5da28147b14f0ea', '2019-01-26 10:03:55'),
(117, 55, 178, '15485224021337650647178', 1, '2019-01-26 22:36:42', '2019-01-26 22:36:42', '10.89', '0', 0, 'a0f089649d9eb31a2ddb', '2019-01-26 22:36:41'),
(121, 95, 183, '1558782911930362191183', 1, '2019-05-25 20:45:11', '2019-05-25 20:45:11', '900', '200', 0, '36c56f711fa3cfd261fd', '2019-05-25 20:44:59'),
(122, 90, 183, '1558782911930362191183', 1, '2019-05-25 20:45:11', '2019-05-25 20:45:11', '5850', '200', 0, '36c56f711fa3cfd261fd', '2019-05-25 20:44:59'),
(123, 81, 184, '15587982381430590769184', 1, '2019-05-26 01:00:38', '2019-05-26 01:00:38', '4987.5', '250', 0, '2e6f5f42b79344a8cc38', '2019-05-26 01:00:28'),
(124, 90, 185, '1558798404538772127185', 1, '2019-05-26 01:03:24', '2019-05-26 01:03:24', '5850', '200', 0, '37ac6c6d84dd7bbc3394', '2019-05-26 01:03:20'),
(125, 92, 186, '15589386291493533907186', 2, '2019-05-27 16:00:29', '2019-05-27 16:00:29', '2850', '200', 0, '94de2ece77f0bee2d922', '2019-05-27 16:00:27'),
(126, 94, 186, '15589386291493533907186', 1, '2019-05-27 16:00:29', '2019-05-27 16:00:29', '800', '200', 0, '94de2ece77f0bee2d922', '2019-05-27 16:00:27'),
(127, 95, 188, '15589479921533452882188', 1, '2019-05-27 18:36:32', '2019-05-27 18:36:32', '900', '200', 0, '8cae682226bd418fb807', '2019-05-27 18:36:23'),
(128, 93, 189, '15590333871043044056189', 2, '2019-05-28 18:19:47', '2019-05-28 18:19:47', '1995', '200', 0, 'ddcd06bbf52c4a95840a', '2019-05-28 18:19:19'),
(129, 94, 191, '1559116177344558794191', 1, '2019-05-29 17:19:37', '2019-05-29 17:19:37', '800', '200', 0, '349cb2784df589f5b6cb', '2019-05-29 17:19:36'),
(130, 91, 192, '1559124041880240777192', 1, '2019-05-29 19:30:41', '2019-05-29 19:30:41', '1620', '200', 0, '6c7906f7809aec8286f0', '2019-05-29 19:30:31'),
(131, 93, 194, '155990730625252504194', 80, '2019-06-07 21:05:06', '2019-06-07 21:05:06', '79800', '200', 0, 'ed01be425a390a353121', '2019-06-07 21:04:49'),
(132, 81, 195, '15618947521337139769195', 1, '2019-06-30 21:09:12', '2019-06-30 21:09:12', '4987.5', '250', 0, 'efc9773c1e4f25450baf', '2019-06-30 21:08:59'),
(116, 55, 178, '15485224021337650647178', 2, '2019-01-26 22:36:42', '2019-01-26 22:36:42', '21.78', '0', 0, 'a0f089649d9eb31a2ddb', '2019-01-26 22:36:41'),
(115, 56, 178, '15485224021337650647178', 1, '2019-01-26 22:36:42', '2019-01-26 22:36:42', '0.99', '0', 0, 'a0f089649d9eb31a2ddb', '2019-01-26 22:36:41'),
(114, 55, 177, '15485069211752564353177', 1, '2019-01-26 18:18:41', '2019-01-26 18:18:41', '10.89', '0', 0, '898983f7009ba542c781', '2019-01-26 18:18:36'),
(74, 13, 102, '15272314401803175766102', 1, '2018-05-25 12:27:20', '2018-05-25 12:27:20', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(73, 14, 102, '15272314401803175766102', 1, '2018-05-25 12:27:20', '2018-05-25 12:27:20', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(72, 13, 102, '1527231438710343859102', 1, '2018-05-25 12:27:18', '2018-05-25 12:27:18', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(71, 14, 102, '1527231438710343859102', 1, '2018-05-25 12:27:18', '2018-05-25 12:27:18', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(70, 13, 102, '15272309771310911200102', 1, '2018-05-25 12:19:37', '2018-05-25 12:19:37', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(69, 14, 102, '15272309771310911200102', 1, '2018-05-25 12:19:37', '2018-05-25 12:19:37', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(68, 13, 102, '15272309751976385889102', 1, '2018-05-25 12:19:35', '2018-05-25 12:19:35', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(67, 14, 102, '15272309751976385889102', 1, '2018-05-25 12:19:35', '2018-05-25 12:19:35', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(66, 13, 102, '15272301641420411670102', 1, '2018-05-25 12:06:04', '2018-05-25 12:06:04', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(120, 81, 182, '1555117486470513952182', 1, '2019-04-13 06:34:46', '2019-04-13 06:34:46', '4987.5', '250', 0, '08572d75ad4f6522aee0', '2019-04-13 06:34:28'),
(119, 97, 182, '1555117486470513952182', 2, '2019-04-13 06:34:46', '2019-04-13 06:34:46', '1900', '200', 0, '08572d75ad4f6522aee0', '2019-04-13 06:34:28'),
(118, 98, 181, '1554866713985509476181', 2, '2019-04-10 08:55:13', '2019-04-10 08:55:13', '2280', '200', 0, '9f9f5dc39276d0942374', '2019-04-10 08:55:10'),
(75, 14, 102, '15272317662006406696102', 1, '2018-05-25 12:32:46', '2018-05-25 12:32:46', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(76, 13, 102, '15272317662006406696102', 1, '2018-05-25 12:32:46', '2018-05-25 12:32:46', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(77, 14, 102, '1527231791286385948102', 1, '2018-05-25 12:33:11', '2018-05-25 12:33:11', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(78, 13, 102, '1527231791286385948102', 1, '2018-05-25 12:33:11', '2018-05-25 12:33:11', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(79, 14, 102, '1527231808603643664102', 1, '2018-05-25 12:33:28', '2018-05-25 12:33:28', '1184.64', '23', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(80, 13, 102, '1527231808603643664102', 1, '2018-05-25 12:33:28', '2018-05-25 12:33:28', '2222', '20', 0, '7f1975a0e0573604a212', '2018-05-25 12:02:16'),
(81, 15, 103, '1527231888191812730103', 1, '2018-05-25 12:34:48', '2018-05-25 12:34:48', '1196.01', '22', 0, '525dfc7c82465ce4cbfd', '2018-05-25 12:35:08'),
(82, 14, 103, '1527231888191812730103', 1, '2018-05-25 12:34:48', '2018-05-25 12:34:48', '1184.64', '23', 0, '525dfc7c82465ce4cbfd', '2018-05-25 12:35:08'),
(83, 15, 115, '15272423091462897986115', 1, '2018-05-25 15:28:29', '2018-05-25 15:28:29', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(84, 15, 115, '15272427611639521935115', 1, '2018-05-25 15:36:01', '2018-05-25 15:36:01', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(85, 15, 115, '15272427631700537227115', 1, '2018-05-25 15:36:03', '2018-05-25 15:36:03', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(86, 15, 115, '15272428611875172583115', 1, '2018-05-25 15:37:41', '2018-05-25 15:37:41', '1196.01', '22', 0, 'b34f2be0924263a228e2', '2018-05-25 15:28:49'),
(87, 12, 118, '15275951121902908521118', 1, '2018-05-29 17:28:32', '2018-05-29 17:28:32', '0', '0', 0, '96eeeba166b0c6fc6815', '2018-05-29 17:28:31'),
(88, 12, 119, '1527595933321941829119', 1, '2018-05-29 17:42:13', '2018-05-29 17:42:13', '0', '0', 0, 'af01e85186e9df357cee', '2018-05-29 17:42:12'),
(89, 12, 119, '1527595972690340394119', 1, '2018-05-29 17:42:52', '2018-05-29 17:42:52', '0', '0', 0, 'af01e85186e9df357cee', '2018-05-29 17:42:12'),
(90, 15, 127, '1529496678429011129127', 1, '2018-06-20 17:41:18', '2018-06-20 17:41:18', '1196.01', '22', 0, 'e74605962b4da9a8420f', '2018-06-20 17:41:16'),
(91, 30, 144, '15417736681549045279144', 1, '2018-11-09 19:57:48', '2018-11-09 19:57:48', '0.5', '0', 0, 'c57e65838198c011f0ac', '2018-11-09 19:57:42'),
(92, 30, 150, '15417754711347247903150', 1, '2018-11-09 20:27:51', '2018-11-09 20:27:51', '0.5', '0', 0, '702ceeafd930f36b6b8f', '2018-11-09 20:27:45'),
(93, 19, 151, '154177556299344690151', 1, '2018-11-09 20:29:22', '2018-11-09 20:29:22', '569.05', '50', 0, '9fbb8c14b413b24051cc', '2018-11-09 20:29:21'),
(94, 30, 150, '15417755921514828994150', 1, '2018-11-09 20:29:52', '2018-11-09 20:29:52', '0.5', '0', 0, '29f2811d1fd827a807d9', '2018-11-09 20:29:46'),
(95, 30, 154, '15417762121070564849154', 1, '2018-11-09 20:40:12', '2018-11-09 20:40:12', '0.5', '0', 0, '78d6a6999d2ca52d54e7', '2018-11-09 20:40:07'),
(96, 15, 157, '15467746821700778473157', 1, '2019-01-06 17:08:02', '2019-01-06 17:08:02', '1196.01', '22', 1, '51e8b4e066be4cc78295', '2019-01-06 17:07:52'),
(97, 15, 158, '15467774422054002770158', 1, '2019-01-06 17:54:02', '2019-01-06 17:54:02', '1196.01', '22', 0, '82c37ca671ca84a9f39c', '2019-01-06 17:53:56'),
(98, 38, 162, '154756668070248494162', 1, '2019-01-15 21:08:00', '2019-01-15 21:08:00', '1980', '100', 0, 'ac3313a0841d660aa5f9', '2019-01-15 21:07:48'),
(99, 38, 163, '15475672951463093905', 1, '2019-01-15 21:18:15', '2019-01-15 21:18:15', '1980', '100', 0, 'fe5a22d61bb05757786f', '2019-01-15 21:18:08'),
(100, 38, 165, '1547567735357355030', 1, '2019-01-15 21:25:35', '2019-01-15 21:25:35', '1980', '100', 0, '0819f3228af18d560461', '2019-01-15 21:25:26'),
(101, 38, 166, '1547568201415996396166', 1, '2019-01-15 16:39:12', '2019-01-15 22:09:12', '1980', '100', 1, '2a7e397d9e23049e2127', '2019-01-15 21:33:13'),
(102, 38, 167, '15475684571870409759167', 1, '2019-01-15 16:39:16', '2019-01-15 22:09:16', '1980', '100', 1, 'e5dba898d445d021f633', '2019-01-15 21:37:26'),
(103, 38, 168, '15475692791700803665168', 1, '2019-01-15 16:38:50', '2019-01-15 22:08:50', '1980', '100', 1, '3ee18f35597d96c49dd4', '2019-01-15 21:51:12'),
(104, 38, 170, '15475719882122581112170', 1, '2019-01-15 22:36:28', '2019-01-15 22:36:28', '1980', '100', 0, '275171479d2051c3181e', '2019-01-15 22:36:21'),
(105, 39, 170, '15475719882122581112170', 1, '2019-01-15 22:36:28', '2019-01-15 22:36:28', '0.99', '0', 0, '275171479d2051c3181e', '2019-01-15 22:36:21'),
(106, 38, 171, '15475721592073988445171', 1, '2019-01-15 22:39:19', '2019-01-15 22:39:19', '1980', '100', 0, '67ffc1e149528413d647', '2019-01-15 22:39:14'),
(107, 39, 171, '15475721592073988445171', 1, '2019-01-15 22:39:19', '2019-01-15 22:39:19', '0.99', '0', 0, '67ffc1e149528413d647', '2019-01-15 22:39:14'),
(108, 39, 172, '154757295420287332172', 1, '2019-01-15 22:52:34', '2019-01-15 22:52:34', '0.99', '0', 0, '1dd7592ba8512d172d90', '2019-01-15 22:52:27'),
(109, 38, 173, '15475731242090131421173', 1, '2019-01-15 22:55:24', '2019-01-15 22:55:24', '1980', '100', 0, '1a02161aaaa1c58bd107', '2019-01-15 22:55:19'),
(110, 39, 173, '15475731242090131421173', 1, '2019-01-15 22:55:24', '2019-01-15 22:55:24', '0.99', '0', 0, '1a02161aaaa1c58bd107', '2019-01-15 22:55:19'),
(111, 38, 174, '1547573222875353425174', 1, '2019-01-15 22:57:02', '2019-01-15 22:57:02', '1980', '100', 0, '378a419d69ee8ccfc1d7', '2019-01-15 22:56:55'),
(112, 39, 174, '1547573222875353425174', 1, '2019-01-15 22:57:02', '2019-01-15 22:57:02', '0.99', '0', 0, '378a419d69ee8ccfc1d7', '2019-01-15 22:56:55'),
(113, 43, 175, '1548477243419876343175', 1, '2019-01-26 10:04:03', '2019-01-26 10:04:03', '0.99', '0', 0, '21c5d5da28147b14f0ea', '2019-01-26 10:03:55'),
(117, 55, 178, '15485224021337650647178', 1, '2019-01-26 22:36:42', '2019-01-26 22:36:42', '10.89', '0', 0, 'a0f089649d9eb31a2ddb', '2019-01-26 22:36:41'),
(121, 95, 183, '1558782911930362191183', 1, '2019-05-25 20:45:11', '2019-05-25 20:45:11', '900', '200', 0, '36c56f711fa3cfd261fd', '2019-05-25 20:44:59'),
(122, 90, 183, '1558782911930362191183', 1, '2019-05-25 20:45:11', '2019-05-25 20:45:11', '5850', '200', 0, '36c56f711fa3cfd261fd', '2019-05-25 20:44:59'),
(123, 81, 184, '15587982381430590769184', 1, '2019-05-26 01:00:38', '2019-05-26 01:00:38', '4987.5', '250', 0, '2e6f5f42b79344a8cc38', '2019-05-26 01:00:28'),
(124, 90, 185, '1558798404538772127185', 1, '2019-05-26 01:03:24', '2019-05-26 01:03:24', '5850', '200', 0, '37ac6c6d84dd7bbc3394', '2019-05-26 01:03:20'),
(125, 92, 186, '15589386291493533907186', 2, '2019-05-27 16:00:29', '2019-05-27 16:00:29', '2850', '200', 0, '94de2ece77f0bee2d922', '2019-05-27 16:00:27'),
(126, 94, 186, '15589386291493533907186', 1, '2019-05-27 16:00:29', '2019-05-27 16:00:29', '800', '200', 0, '94de2ece77f0bee2d922', '2019-05-27 16:00:27'),
(127, 95, 188, '15589479921533452882188', 1, '2019-05-27 18:36:32', '2019-05-27 18:36:32', '900', '200', 0, '8cae682226bd418fb807', '2019-05-27 18:36:23'),
(128, 93, 189, '15590333871043044056189', 2, '2019-05-28 18:19:47', '2019-05-28 18:19:47', '1995', '200', 0, 'ddcd06bbf52c4a95840a', '2019-05-28 18:19:19'),
(129, 94, 191, '1559116177344558794191', 1, '2019-05-29 17:19:37', '2019-05-29 17:19:37', '800', '200', 0, '349cb2784df589f5b6cb', '2019-05-29 17:19:36'),
(130, 91, 192, '1559124041880240777192', 1, '2019-05-29 19:30:41', '2019-05-29 19:30:41', '1620', '200', 0, '6c7906f7809aec8286f0', '2019-05-29 19:30:31'),
(131, 93, 194, '155990730625252504194', 80, '2019-06-07 21:05:06', '2019-06-07 21:05:06', '79800', '200', 0, 'ed01be425a390a353121', '2019-06-07 21:04:49'),
(132, 81, 195, '15618947521337139769195', 1, '2019-06-30 21:09:12', '2019-06-30 21:09:12', '4987.5', '250', 0, 'efc9773c1e4f25450baf', '2019-06-30 21:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `type` text NOT NULL,
  `validity` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `site_id` varchar(30) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `parent_id` varchar(30) DEFAULT NULL,
  `post_format` varchar(50) NOT NULL DEFAULT 'text',
  `post_type` varchar(20) NOT NULL DEFAULT 'news',
  `category` varchar(30) NOT NULL,
  `sub_cat` varchar(30) NOT NULL,
  `source` varchar(30) NOT NULL,
  `post_title` varchar(3000) NOT NULL,
  `post_description` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `youtube_embed` varchar(1000) DEFAULT NULL,
  `breaking_news` varchar(200) NOT NULL DEFAULT '0',
  `featured` int(11) NOT NULL DEFAULT 0,
  `sponsored` varchar(200) DEFAULT NULL,
  `show_in_home` varchar(200) DEFAULT '0',
  `show_menu` int(11) DEFAULT NULL,
  `tags` varchar(30) DEFAULT NULL,
  `show_megamenu` int(11) NOT NULL DEFAULT 0,
  `show_featuredimage` int(11) NOT NULL DEFAULT 0,
  `show_authorbox` int(11) DEFAULT 0,
  `views` int(200) DEFAULT 1,
  `updated_date` varchar(30) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `user_id` varchar(110) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `site_id`, `post_id`, `parent_id`, `post_format`, `post_type`, `category`, `sub_cat`, `source`, `post_title`, `post_description`, `featured_image`, `status`, `youtube_embed`, `breaking_news`, `featured`, `sponsored`, `show_in_home`, `show_menu`, `tags`, `show_megamenu`, `show_featuredimage`, `show_authorbox`, `views`, `updated_date`, `created_date`, `user_id`) VALUES
(429, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Upcoming high-performance electric sports bikes in India', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89720364.cms\" />Keeping this market sentiment in mind, hereâ€™s the list of some of the high-performance electric 2-wheelers waiting to hit the Indian roads', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '1', 1, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(430, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Renault Triber achieves one lakh sales milestone in India; new limited edition variant launched', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89663254.cms\" />The new Limited Edition trim of the Renault Triber has been priced at Rs 7.24 lakh (ex-showroom), and boasts some notable cosmetic enhancements over the RXT variant it is based on', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '1', 1, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(431, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'New Maruti Suzuki Baleno facelift off to a flyer with 16,000 pre-launch bookings!', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89642893.cms\" />The new Baleno has undergone some major changes in areas including connectivity, convenience, powertrain and design. In fact, the company has been teasing some of the features over the last few days and potential buyers seem to be convinced about these new technologies.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 1, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(432, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Five upcoming car/ SUV launches in India in 2022', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89639187.cms\" /> Here is a list of five upcoming car launches in India this year. Letâ€™s take a look.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(433, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Now rent a Maruti Suzuki for Rs 12,199 per month without any down payment', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89636292.cms\" /> The â€˜Subscribeâ€™ program was first introduced by Maruti Suzuki in July 2020 and offers customers the option to lease a car without actually buying it upfront', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(434, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Carens vs Alcazar vs Hector Plus vs Ertiga vs XL6: Price Comparison', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89613717.cms\" />The Kia Carens is competitively priced and here is how it fares among its rivals.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(435, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Kia Carens launched in India at Rs 8.99 lakh: Price, variants, features', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89585482.cms\" /> The Kia Carens has been launched with petrol and diesel engines offered with manual and automatic transmissions. The Seltos based 3-row SUV has been priced between Rs 8.99 â€“ 16.99 lakh.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(436, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Kerala State Police Adds 49 Force Gurkha SUVs in its Fleet', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89587283.cms\" />The new Gurkha SUVs have been customised according to the exact needs of Kerala State police department, Force Motors said. ', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(437, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', '2022 Maruti Suzuki Baleno to be offered with a segment-first 360-degree camera', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89585261.cms\" />We were the first publication to report that the Baleno facelift will be offered with a 360-degree camera around a week ago. The same has now been officially announced by the carmaker.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(438, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Global EV sales up 109% in 2021, Tesla leads with 14% share', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89589772.cms\" />Nearly 6.5 million electric vehicles (EVs) -- including fully electric and plug-in hybrid passenger cars -- were sold worldwide in 2021, up 109 per cent from 2020, with Tesla leading the global EV marketa with 14 per cent share, a new report showed on Monday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(439, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Upcoming high-performance electric sports bikes in India', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89720364.cms\" />Keeping this market sentiment in mind, hereâ€™s the list of some of the high-performance electric 2-wheelers waiting to hit the Indian roads', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(440, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Renault Triber achieves one lakh sales milestone in India; new limited edition variant launched', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89663254.cms\" />The new Limited Edition trim of the Renault Triber has been priced at Rs 7.24 lakh (ex-showroom), and boasts some notable cosmetic enhancements over the RXT variant it is based on', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(441, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'New Maruti Suzuki Baleno facelift off to a flyer with 16,000 pre-launch bookings!', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89642893.cms\" />The new Baleno has undergone some major changes in areas including connectivity, convenience, powertrain and design. In fact, the company has been teasing some of the features over the last few days and potential buyers seem to be convinced about these new technologies.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(442, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Five upcoming car/ SUV launches in India in 2022', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89639187.cms\" /> Here is a list of five upcoming car launches in India this year. Letâ€™s take a look.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(443, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Now rent a Maruti Suzuki for Rs 12,199 per month without any down payment', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89636292.cms\" /> The â€˜Subscribeâ€™ program was first introduced by Maruti Suzuki in July 2020 and offers customers the option to lease a car without actually buying it upfront', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(444, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Carens vs Alcazar vs Hector Plus vs Ertiga vs XL6: Price Comparison', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89613717.cms\" />The Kia Carens is competitively priced and here is how it fares among its rivals.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(445, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Kia Carens launched in India at Rs 8.99 lakh: Price, variants, features', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89585482.cms\" /> The Kia Carens has been launched with petrol and diesel engines offered with manual and automatic transmissions. The Seltos based 3-row SUV has been priced between Rs 8.99 â€“ 16.99 lakh.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(446, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Kerala State Police Adds 49 Force Gurkha SUVs in its Fleet', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89587283.cms\" />The new Gurkha SUVs have been customised according to the exact needs of Kerala State police department, Force Motors said. ', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(447, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', '2022 Maruti Suzuki Baleno to be offered with a segment-first 360-degree camera', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89585261.cms\" />We were the first publication to report that the Baleno facelift will be offered with a 360-degree camera around a week ago. The same has now been officially announced by the carmaker.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(448, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Global EV sales up 109% in 2021, Tesla leads with 14% share', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89589772.cms\" />Nearly 6.5 million electric vehicles (EVs) -- including fully electric and plug-in hybrid passenger cars -- were sold worldwide in 2021, up 109 per cent from 2020, with Tesla leading the global EV marketa with 14 per cent share, a new report showed on Monday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(449, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Upcoming high-performance electric sports bikes in India', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89720364.cms\" />Keeping this market sentiment in mind, hereâ€™s the list of some of the high-performance electric 2-wheelers waiting to hit the Indian roads', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(450, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Renault Triber achieves one lakh sales milestone in India; new limited edition variant launched', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89663254.cms\" />The new Limited Edition trim of the Renault Triber has been priced at Rs 7.24 lakh (ex-showroom), and boasts some notable cosmetic enhancements over the RXT variant it is based on', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(451, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'New Maruti Suzuki Baleno facelift off to a flyer with 16,000 pre-launch bookings!', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89642893.cms\" />The new Baleno has undergone some major changes in areas including connectivity, convenience, powertrain and design. In fact, the company has been teasing some of the features over the last few days and potential buyers seem to be convinced about these new technologies.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, 'dddd', 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(452, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Five upcoming car/ SUV launches in India in 2022', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89639187.cms\" /> Here is a list of five upcoming car launches in India this year. Letâ€™s take a look.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(453, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Now rent a Maruti Suzuki for Rs 12,199 per month without any down payment', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89636292.cms\" /> The â€˜Subscribeâ€™ program was first introduced by Maruti Suzuki in July 2020 and offers customers the option to lease a car without actually buying it upfront', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, 'sdsds', 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(454, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Carens vs Alcazar vs Hector Plus vs Ertiga vs XL6: Price Comparison', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89613717.cms\" />The Kia Carens is competitively priced and here is how it fares among its rivals.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(455, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Kia Carens launched in India at Rs 8.99 lakh: Price, variants, features', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89585482.cms\" /> The Kia Carens has been launched with petrol and diesel engines offered with manual and automatic transmissions. The Seltos based 3-row SUV has been priced between Rs 8.99 â€“ 16.99 lakh.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(456, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Kerala State Police Adds 49 Force Gurkha SUVs in its Fleet', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89587283.cms\" />The new Gurkha SUVs have been customised according to the exact needs of Kerala State police department, Force Motors said. ', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(457, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', '2022 Maruti Suzuki Baleno to be offered with a segment-first 360-degree camera', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89585261.cms\" />We were the first publication to report that the Baleno facelift will be offered with a 360-degree camera around a week ago. The same has now been officially announced by the carmaker.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(458, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Global EV sales up 109% in 2021, Tesla leads with 14% share', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89589772.cms\" />Nearly 6.5 million electric vehicles (EVs) -- including fully electric and plug-in hybrid passenger cars -- were sold worldwide in 2021, up 109 per cent from 2020, with Tesla leading the global EV marketa with 14 per cent share, a new report showed on Monday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(459, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Upcoming high-performance electric sports bikes in India', 'Keeping this market sentiment in mind, here’s the list of some of the high-performance electric 2-wheelers waiting to hit the Indian roads', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(460, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Upcoming high-performance electric sports bikes in India', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89720364.cms\" />Keeping this market sentiment in mind, hereâ€™s the list of some of the high-performance electric 2-wheelers waiting to hit the Indian roads', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(461, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Renault Triber achieves one lakh sales milestone in India; new limited edition variant launched', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89663254.cms\" />The new Limited Edition trim of the Renault Triber has been priced at Rs 7.24 lakh (ex-showroom), and boasts some notable cosmetic enhancements over the RXT variant it is based on', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(462, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'New Maruti Suzuki Baleno facelift off to a flyer with 16,000 pre-launch bookings!', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89642893.cms\" />The new Baleno has undergone some major changes in areas including connectivity, convenience, powertrain and design. In fact, the company has been teasing some of the features over the last few days and potential buyers seem to be convinced about these new technologies.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(463, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Five upcoming car/ SUV launches in India in 2022', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89639187.cms\" /> Here is a list of five upcoming car launches in India this year. Letâ€™s take a look.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(464, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Now rent a Maruti Suzuki for Rs 12,199 per month without any down payment', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89636292.cms\" /> The â€˜Subscribeâ€™ program was first introduced by Maruti Suzuki in July 2020 and offers customers the option to lease a car without actually buying it upfront', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(465, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Carens vs Alcazar vs Hector Plus vs Ertiga vs XL6: Price Comparison', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89613717.cms\" />The Kia Carens is competitively priced and here is how it fares among its rivals.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(466, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Kia Carens launched in India at Rs 8.99 lakh: Price, variants, features', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89585482.cms\" /> The Kia Carens has been launched with petrol and diesel engines offered with manual and automatic transmissions. The Seltos based 3-row SUV has been priced between Rs 8.99 â€“ 16.99 lakh.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(467, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Kerala State Police Adds 49 Force Gurkha SUVs in its Fleet', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89587283.cms\" />The new Gurkha SUVs have been customised according to the exact needs of Kerala State police department, Force Motors said. ', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(468, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', '2022 Maruti Suzuki Baleno to be offered with a segment-first 360-degree camera', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89585261.cms\" />We were the first publication to report that the Baleno facelift will be offered with a 360-degree camera around a week ago. The same has now been officially announced by the carmaker.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(469, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', 'Global EV sales up 109% in 2021, Tesla leads with 14% share', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89589772.cms\" />Nearly 6.5 million electric vehicles (EVs) -- including fully electric and plug-in hybrid passenger cars -- were sold worldwide in 2021, up 109 per cent from 2020, with Tesla leading the global EV marketa with 14 per cent share, a new report showed on Monday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-21 00:00:00', '1'),
(502, '1', 47, NULL, 'text', 'news', 'Test Category', ' Politics', 'manual', 'Punjab Elections 2022', '<p>dasdasd</p>', 'https://res.cloudinary.com/ayush977/image/upload/v1645822127/bqgz5hrk5vwhcvibffbg.jpg', 'published', NULL, '0', 0, NULL, '0', NULL, 'dasdas', 0, 0, 0, NULL, '2022-02-26 02-21-39', '2022-02-26 02:18:47', 'Admin'),
(503, '1', NULL, NULL, 'text', 'news', 'Category', ' hhhh', 'auto', '2nd T20I: India on course to wrap up series in Dharamsala', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89820082.cms\" />A reinvigorated India will look to pocket their second series win in as many weeks and build on the gains made from a drastic change in their batting approach in the second T20 International against Sri Lanka on Saturday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(504, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', '2nd T20I: India on course to wrap up series in Dharamsala', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89820082.cms\" />A reinvigorated India will look to pocket their second series win in as many weeks and build on the gains made from a drastic change in their batting approach in the second T20 International against Sri Lanka on Saturday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(505, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', '2nd T20I: India on course to wrap up series in Dharamsala', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89820082.cms\" />A reinvigorated India will look to pocket their second series win in as many weeks and build on the gains made from a drastic change in their batting approach in the second T20 International against Sri Lanka on Saturday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(506, '1', NULL, NULL, 'text', 'news', 'second', ' drag', 'auto', '2nd T20I: India on course to wrap up series in Dharamsala', 'A reinvigorated India will look to pocket their second series win in as many weeks and build on the gains made from a drastic change in their batting approach in the second T20 International against Sri Lanka on Saturday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(507, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', '2nd T20I: India on course to wrap up series in Dharamsala', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89820082.cms\" />A reinvigorated India will look to pocket their second series win in as many weeks and build on the gains made from a drastic change in their batting approach in the second T20 International against Sri Lanka on Saturday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(508, '1', NULL, NULL, 'text', 'news', 'Category', ' hhhh', 'auto', '2nd T20I: India on course to wrap up series in Dharamsala', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89820082.cms\" />A reinvigorated India will look to pocket their second series win in as many weeks and build on the gains made from a drastic change in their batting approach in the second T20 International against Sri Lanka on Saturday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(509, '1', NULL, NULL, 'text', 'news', 'Category', ' hhhh', 'auto', '2nd T20I: India on course to wrap up series in Dharamsala', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89820082.cms\" />A reinvigorated India will look to pocket their second series win in as many weeks and build on the gains made from a drastic change in their batting approach in the second T20 International against Sri Lanka on Saturday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(510, '1', NULL, NULL, 'text', 'news', 'Category', ' hhhh', 'auto', 'BCCI may ask Saha to explain breach of Central Contract clause', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815705.cms\" />The BCCI, in all likelihood, will ask veteran wicketkeeper Wriddhiman Saha about his recent outburst after being dropped from the Indian team as it is in violation of protocols to be followed by a centrally contracted cricketer.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(511, '1', NULL, NULL, 'text', 'news', 'Category', ' hhhh', 'auto', '1st T20I: Ishan Kishan, Shreyas Iyer dazzle as India drub Sri Lanka', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815119.cms\" />India beat Sri Lanka (SL) in the first T20I of a three match series by 62 runs to extend their winning streak to 10 consecutive matches, which is their longest ever. Put into bat first after losing the toss, India scored 199 for 2, thanks to a blistering 89 off 56 balls by Ishan Kishan with Shreyas Iyer adding heft with an unbeaten 57.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(512, '1', NULL, NULL, 'text', 'news', 'Category', ' hhhh', 'auto', 'Ishan constructed innings well after Powerplay: Rohit', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815565.cms\" /> Lavishing praise on Ishan Kishan, India skipper Rohit Sharma on Thursday said he was particularly impressed with the way the young opener constructed his innings after the powerplay, something which has proved to be a problem for him in the past.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(513, '1', NULL, NULL, 'text', 'news', 'Category', ' hhhh', 'auto', 'BCCI may ask Saha to explain breach of Central Contract clause', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815705.cms\" />The BCCI, in all likelihood, will ask veteran wicketkeeper Wriddhiman Saha about his recent outburst after being dropped from the Indian team as it is in violation of protocols to be followed by a centrally contracted cricketer.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(514, '1', NULL, NULL, 'text', 'news', 'Category', ' hhhh', 'auto', '1st T20I: Ishan Kishan, Shreyas Iyer dazzle as India drub Sri Lanka', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815119.cms\" />India beat Sri Lanka (SL) in the first T20I of a three match series by 62 runs to extend their winning streak to 10 consecutive matches, which is their longest ever. Put into bat first after losing the toss, India scored 199 for 2, thanks to a blistering 89 off 56 balls by Ishan Kishan with Shreyas Iyer adding heft with an unbeaten 57.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(515, '1', NULL, NULL, 'text', 'news', 'Category', ' hhhh', 'auto', 'Ishan constructed innings well after Powerplay: Rohit', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815565.cms\" /> Lavishing praise on Ishan Kishan, India skipper Rohit Sharma on Thursday said he was particularly impressed with the way the young opener constructed his innings after the powerplay, something which has proved to be a problem for him in the past.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(516, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', 'BCCI may ask Saha to explain breach of Central Contract clause', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815705.cms\" />The BCCI, in all likelihood, will ask veteran wicketkeeper Wriddhiman Saha about his recent outburst after being dropped from the Indian team as it is in violation of protocols to be followed by a centrally contracted cricketer.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(517, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', '1st T20I: Ishan Kishan, Shreyas Iyer dazzle as India drub Sri Lanka', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815119.cms\" />India beat Sri Lanka (SL) in the first T20I of a three match series by 62 runs to extend their winning streak to 10 consecutive matches, which is their longest ever. Put into bat first after losing the toss, India scored 199 for 2, thanks to a blistering 89 off 56 balls by Ishan Kishan with Shreyas Iyer adding heft with an unbeaten 57.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(518, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', 'Ishan constructed innings well after Powerplay: Rohit', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815565.cms\" /> Lavishing praise on Ishan Kishan, India skipper Rohit Sharma on Thursday said he was particularly impressed with the way the young opener constructed his innings after the powerplay, something which has proved to be a problem for him in the past.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(519, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', 'BCCI may ask Saha to explain breach of Central Contract clause', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815705.cms\" />The BCCI, in all likelihood, will ask veteran wicketkeeper Wriddhiman Saha about his recent outburst after being dropped from the Indian team as it is in violation of protocols to be followed by a centrally contracted cricketer.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(520, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', '1st T20I: Ishan Kishan, Shreyas Iyer dazzle as India drub Sri Lanka', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815119.cms\" />India beat Sri Lanka (SL) in the first T20I of a three match series by 62 runs to extend their winning streak to 10 consecutive matches, which is their longest ever. Put into bat first after losing the toss, India scored 199 for 2, thanks to a blistering 89 off 56 balls by Ishan Kishan with Shreyas Iyer adding heft with an unbeaten 57.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(521, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', 'Ishan constructed innings well after Powerplay: Rohit', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815565.cms\" /> Lavishing praise on Ishan Kishan, India skipper Rohit Sharma on Thursday said he was particularly impressed with the way the young opener constructed his innings after the powerplay, something which has proved to be a problem for him in the past.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(522, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', 'BCCI may ask Saha to explain breach of Central Contract clause', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815705.cms\" />The BCCI, in all likelihood, will ask veteran wicketkeeper Wriddhiman Saha about his recent outburst after being dropped from the Indian team as it is in violation of protocols to be followed by a centrally contracted cricketer.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(523, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', '1st T20I: Ishan Kishan, Shreyas Iyer dazzle as India drub Sri Lanka', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815119.cms\" />India beat Sri Lanka (SL) in the first T20I of a three match series by 62 runs to extend their winning streak to 10 consecutive matches, which is their longest ever. Put into bat first after losing the toss, India scored 199 for 2, thanks to a blistering 89 off 56 balls by Ishan Kishan with Shreyas Iyer adding heft with an unbeaten 57.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(524, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', 'Ishan constructed innings well after Powerplay: Rohit', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815565.cms\" /> Lavishing praise on Ishan Kishan, India skipper Rohit Sharma on Thursday said he was particularly impressed with the way the young opener constructed his innings after the powerplay, something which has proved to be a problem for him in the past.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(525, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', 'BCCI may ask Saha to explain breach of Central Contract clause', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815705.cms\" />The BCCI, in all likelihood, will ask veteran wicketkeeper Wriddhiman Saha about his recent outburst after being dropped from the Indian team as it is in violation of protocols to be followed by a centrally contracted cricketer.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(526, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', '1st T20I: Ishan Kishan, Shreyas Iyer dazzle as India drub Sri Lanka', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815119.cms\" />India beat Sri Lanka (SL) in the first T20I of a three match series by 62 runs to extend their winning streak to 10 consecutive matches, which is their longest ever. Put into bat first after losing the toss, India scored 199 for 2, thanks to a blistering 89 off 56 balls by Ishan Kishan with Shreyas Iyer adding heft with an unbeaten 57.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(527, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', 'Ishan constructed innings well after Powerplay: Rohit', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815565.cms\" /> Lavishing praise on Ishan Kishan, India skipper Rohit Sharma on Thursday said he was particularly impressed with the way the young opener constructed his innings after the powerplay, something which has proved to be a problem for him in the past.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(528, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', '2nd T20I: India on course to wrap up series in Dharamsala', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89820082.cms\" />A reinvigorated India will look to pocket their second series win in as many weeks and build on the gains made from a drastic change in their batting approach in the second T20 International against Sri Lanka on Saturday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(529, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', 'BCCI may ask Saha to explain breach of Central Contract clause', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815705.cms\" />The BCCI, in all likelihood, will ask veteran wicketkeeper Wriddhiman Saha about his recent outburst after being dropped from the Indian team as it is in violation of protocols to be followed by a centrally contracted cricketer.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(530, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', '1st T20I: Ishan Kishan, Shreyas Iyer dazzle as India drub Sri Lanka', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815119.cms\" />India beat Sri Lanka (SL) in the first T20I of a three match series by 62 runs to extend their winning streak to 10 consecutive matches, which is their longest ever. Put into bat first after losing the toss, India scored 199 for 2, thanks to a blistering 89 off 56 balls by Ishan Kishan with Shreyas Iyer adding heft with an unbeaten 57.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(531, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', 'Ishan constructed innings well after Powerplay: Rohit', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89815565.cms\" /> Lavishing praise on Ishan Kishan, India skipper Rohit Sharma on Thursday said he was particularly impressed with the way the young opener constructed his innings after the powerplay, something which has proved to be a problem for him in the past.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(532, '1', NULL, NULL, 'text', 'news', 'Category', ' src', 'auto', '2nd T20I: India on course to wrap up series in Dharamsala', '<img border=\"0\" hspace=\"10\" align=\"left\" style=\"margin-top:3px;margin-right:5px;\" src=\"https://timesofindia.indiatimes.com/photo/89820082.cms\" />A reinvigorated India will look to pocket their second series win in as many weeks and build on the gains made from a drastic change in their batting approach in the second T20 International against Sri Lanka on Saturday.', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, NULL, NULL, '2022-02-26 00:00:00', '1'),
(533, '1', NULL, NULL, 'text', 'news', '', ' src', 'auto', '2nd T20I: India on course to wrap up series in Dharamsala', 'dasdasd', 'https://timesofindia.indiatimes.com/photo/507610.cms', 'Published', NULL, '0', 0, NULL, '0', NULL, '', 0, 0, 0, NULL, '2022-02-26 04-22-50', '2022-02-26 00:00:00', 'Admin'),
(534, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        SRM-AP varsity signs MoU with French b-school  \n    ', '\n        Student exchanges and curriculum development to be facilitated\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(535, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Visakhapatnam: Global Student Entrepreneurs Awards to be held at GITAM on February 26 \n    ', '\n        28 contestants representing 14 EO chapters across India to take part in the competition \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(536, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Visakhapatnam: DCI inks MoU with Gujarat Fisheries Department \n    ', '\n        To work on maintenance of fishing harbours, reservoirs, ponds and other water bodies in Gujarat\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(537, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Fake pension scheme: T.N. gang of six held for â€˜cheatingâ€™ over 3,000 people  \n    ', '\n        Fake currency notes with a face value of â‚¹44.02 lakh seized \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(538, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Stay bold and wait till help reaches you, Naidu advises Telugu students stranded in Ukraine  \n    ', '\n        â€˜TDP NRI Cell to open website soon to provide required helpâ€™ \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(539, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        APSRTC staff urged to improve occupancy ratio \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1');
INSERT INTO `post` (`id`, `site_id`, `post_id`, `parent_id`, `post_format`, `post_type`, `category`, `sub_cat`, `source`, `post_title`, `post_description`, `featured_image`, `status`, `youtube_embed`, `breaking_news`, `featured`, `sponsored`, `show_in_home`, `show_menu`, `tags`, `show_megamenu`, `show_featuredimage`, `show_authorbox`, `views`, `updated_date`, `created_date`, `user_id`) VALUES
(540, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Parents of students stranded in Ukraine press the panic button \n    ', '\n        As many as 15 students from Nellore district are reportedly caught in the war-ravaged nation \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(541, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        NIA conducts raids in Guntur, Chittoor in Maoist recruitment case \n    ', '\n        Raids were also conducted in Kerala\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(542, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        A.P. plans to develop air connectivity to Hope Island  \n    ', '\n        â€˜Construction of two heliports nearing completionâ€™\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(543, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Visakhapatnam: The Hindu Young world to organise painting competition for students \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(544, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        TTD cancels VIP break darshan on weekends \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(545, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Railway TTE bags bronze in weightlifting championship \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(546, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Four-day Organic Mahotsav opened at A-Convention Centre \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(547, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Y.S. Pratap Reddy â€˜confessionâ€™ to CBI rocks YS clan \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(548, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        A.P.: Indrakeeladri decked up for Sivaratri celebrations \n    ', '\n        The festival will be held from Feb. 26 to March 8\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(549, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        A beacon of hope for the poor in N. Andhra \n    ', '\n        Patients from remote tribal areas are benefiting from the free services being offered by the hospital\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(550, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        TDP faults governmentâ€™s claims on welfare programmes  \n    ', '\n        â€˜Anganwadi workers, home guards and employees were paid better salaries during TDP termâ€™ \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(551, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        â€˜Bheemla Naikâ€™ triggers war of words between YSRCP, TDP \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(552, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        DGP and APPSC Chairman meet Governor \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(553, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Jagan seeks early issuance of site clearance approval and NoC for Bhogapuram airport  \n    ', '\n        Chief Minister takes up the issue with Prime Minister, and Defence and Civil Aviation Ministers \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(554, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Ex-president of A.P. Film Chamber of Commerce rues â€˜crackdown by govt.â€™  \n    ', '\n        â€˜Cinema exhibitors stand to lose in this slugfestâ€™\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(555, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        A.P. Police bags 15 awards for utilising technology \n    ', '\n        The State has won 165 awards at the national-level so far\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(556, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Tell your wards in Ukraine to carry Indian flag and move in groups, Chittoor police tell parents \n    ', '\n        In a video message, Nikitha, a student of Bogomolets National Medical College in Kyiv, describes the travails in the war-torn nation \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(557, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Departmental tests in A.P. from March 4 \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(558, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Five held for importing liquor from Goa into A.P.  \n    ', '\n        9,200 bottles seized in East Godavari\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(559, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Hand over TIDCO houses, APUCF urges A.P. govt. \n    ', '\n        â€˜Banks sending notices to repay loan amountâ€™\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(560, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Visakhapatnam: existing climate models need to be downscaled for better compatibility with hydrological data sets, says NGRI Director  \n    ', '\n        â€˜One cm rise in sea level can influence the groundwater a few kilometres inland with seawater intrusionâ€™\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(561, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        We are advised to wrap ourselves with Indian flag for safety, says Vizag student stuck in Ukraine \n    ', '\n        Parents of the students caught in the war-torn nation a worried lot \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(562, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Milan-2022: Visakhapatnam police impose traffic restrictions on February 26 and 27 \n    ', '\n        The police allot parking lots for those attending the programme\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(563, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Watch | Andhra student stranded in Ukraine appeals to Indian govt \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(564, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Andhraâ€™s Srikakulam students in Ukraine | Parents approach MP Kinjrapu Rammohan Naidu for help \n    ', '\n        Helpline established in Srikakulam to provide information about Ukraine students\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(565, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Spectators damage SLN Cinema Hall in Anantapurâ€™s Tadipatri, as sound stops for some time \n    ', '\n        Tadipatri Circle Inspector said the police force immediately rushed into the theatre and brought the situation under control\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(566, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Andhra Pradesh CM speaks to External Affairs Minister on State students trapped in Ukraine \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(567, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Top Andhra Pradesh news developments today  \n    ', '\n        News developments from Andhra Pradesh on February 25, 2022.\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(568, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        KIA India forced to stop production for two days due to a semiconductor shortage \n    ', '\n         The production is likely to resume on Sunday\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(569, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        Vizag student stranded in Ukraine says she is safe in a bunker  \n    ', '\n        Sreeja urges Union and State governments to do everything possible to bring students back home.\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(570, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        PF account scam will be probed, says GMC Commissioner  \n    ', '\n        \n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(571, '1', NULL, NULL, 'text', 'news', 'Hello', ' dsadasd', 'auto', '\n        â€˜Nava Ratnaâ€™ strategy to help Gurukul students shine in SSC exams \n    ', '\n        Students being trained on how to prepare for the new pattern of questions\n    ', 'https://as1.ftcdn.net/v2/jpg/00/88/43/58/1000_F_88435847_HhglbcoGP5qOX3DfudP3hN5z95eTrHqz.jpg', 'Hidden', NULL, '0', 0, NULL, '0', NULL, NULL, 0, 0, 0, 5, NULL, '2022-02-26 00:00:00', '1'),
(572, '2', 112, NULL, 'text', 'interview', 'study', 'doctor', 'manual', 'fdsfds', '<p>lksal kjdklsajlk</p>', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1646916185/ck0bphpl4yobhdkthvrv.jpg', 'Select', NULL, '0', 0, NULL, '0', NULL, 'snandska', 0, 0, 0, 1, NULL, '2022-03-10 18:12:32', 'Select'),
(573, '2', 113, NULL, 'gallery', 'interview', 'Nerves', 'Fashion', 'manual', 'skfj kfjedjka', '<p>klwd kjhskjaf hdksja hdkjfsha jfhdskj</p>', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1646987036/uloivkurounwmikjhoop.jpg', 'published', NULL, '0', 0, NULL, '0', NULL, 'kkdsj', 0, 0, 0, 1, NULL, '2022-03-11 13:52:59', 'for orp 2');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `marketplace_id` int(100) NOT NULL DEFAULT 0,
  `main` int(1) NOT NULL DEFAULT 0,
  `product_id` int(11) DEFAULT NULL,
  `variant_id` int(11) DEFAULT NULL,
  `type` text NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `marketplace_id`, `main`, `product_id`, `variant_id`, `type`, `image_url`, `created_date`) VALUES
(1, 1, 1, 1, NULL, 'IMAGE', 'https://img1.exportersindia.com/product_images/bc-full/dir_37/1087510/company-incorporation-services-1475511558-2429563.jpeg', '2022-04-19 11:02:22'),
(2, 16, 1, 446, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594464136/ccmnrhi2rvfsxbjduhke.jpg', '2022-02-27 12:28:09'),
(3, 16, 1, 447, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594464320/gsdiku5my5z1x4ksbvu0.jpg', '2022-02-27 12:28:09'),
(4, 16, 1, 448, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594464463/dtrlsuxiwgfpzbyufm3e.jpg', '2022-02-27 12:28:09'),
(5, 16, 1, 449, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594464583/isghko81cqoruorm1b7o.jpg', '2022-02-27 12:28:09'),
(6, 16, 1, 450, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594464818/rnawynff3bladm3thkrp.jpg', '2022-02-27 12:28:09'),
(7, 16, 1, 451, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594464846/wtkrmlegeupogbqpakyf.jpg', '2022-02-27 12:28:09'),
(8, 16, 1, 452, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594464955/sau9p44aehu8g6gv6x7h.jpg', '2022-02-27 12:28:09'),
(9, 16, 1, 453, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594465170/gm0t8cmyxxbnb8aglmiy.jpg', '2022-02-27 12:28:09'),
(10, 16, 1, 454, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594465486/jfmh7opla20xvvikrn6s.jpg', '2022-02-27 12:28:09'),
(11, 16, 1, 455, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594465628/oltfakt6qfpvm6vzxyl8.jpg', '2022-02-27 12:28:09'),
(12, 16, 1, 457, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594465762/rdwrnmimjoauxa5oxr85.jpg', '2022-02-27 12:28:09'),
(13, 16, 1, 458, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594466360/fpzlnkt872ua7f6jmtuy.jpg', '2022-02-27 12:28:09'),
(14, 16, 1, 459, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594466457/ovnfkmc0sim0qznyyg8q.jpg', '2022-02-27 12:28:09'),
(15, 16, 1, 460, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594466906/ccxb2irmkboubisrcsh1.jpg', '2022-02-27 12:28:09'),
(16, 16, 1, 461, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594467024/uqivgcbfhqtowxnpeak1.jpg', '2022-02-27 12:28:09'),
(17, 16, 1, 462, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594467132/qqedk8jpmz070lvqq3h8.jpg', '2022-02-27 12:28:09'),
(18, 16, 1, 463, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594467377/uegaipuzhhqusu9kl7zd.jpg', '2022-02-27 12:28:09'),
(19, 16, 1, 464, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594468159/nruay6u84efjunorubez.jpg', '2022-02-27 12:28:09'),
(20, 16, 1, 467, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1594468408/gxl1a3ljq9extgygpyqe.jpg', '2022-02-27 12:28:09'),
(21, 16, 1, 474, NULL, 'IMAGE', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRwwW0B0lkoH5378px9WxcsJnygblQ35Q5hjg&usqp=CAU', '2022-02-27 12:28:09'),
(22, 16, 1, 480, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1595364314/qppq7ucx0hqbx75wszql.jpg', '2022-02-27 12:28:09'),
(23, 16, 1, 481, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1595446749/gt3ra95byaqdiekafzze.jpg', '2022-02-27 12:28:09'),
(24, 16, 1, 482, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1595503218/rkgy5yip5dyhajktdrcs.jpg', '2022-02-27 12:28:09'),
(1026, 16, 1, 483, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1595701475/af6rijziqb7ulul9ujnx.png', '2022-02-27 12:28:09'),
(1027, 16, 1, 484, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1595870235/ghy7pfvu5nirqgrjh3be.png', '2022-02-27 12:28:09'),
(1028, 16, 1, 485, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1596269349/vkjpkpitdis8eginbpwj.jpg', '2022-02-27 12:28:09'),
(1029, 16, 1, 486, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1596269810/b4d6loc7mbxf2p4nffoa.jpg', '2022-02-27 12:28:09'),
(1030, 16, 1, 487, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1596270068/oyt36lkwcltvcgvspri6.jpg', '2022-02-27 12:28:09'),
(1031, 16, 1, 488, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1596270143/fqirppbiwomb0lvqgmx9.jpg', '2022-02-27 12:28:09'),
(1032, 16, 1, 489, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1596270314/iyhumvwmyglu5nr1ph29.jpg', '2022-02-27 12:28:09'),
(1033, 16, 1, 490, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1596270348/tv6b9ilinunaianuz2xh.jpg', '2022-02-27 12:28:09'),
(1034, 16, 1, 491, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1596270448/xp5axqqhnlogh6ylrcjz.jpg', '2022-02-27 12:28:09'),
(1035, 16, 1, 492, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1596270556/nwkazycunopxdqem2poi.jpg', '2022-02-27 12:28:09'),
(1037, 16, 1, 494, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1596270862/aakcgh2eojanspnfiflg.jpg', '2022-02-27 12:28:09'),
(1038, 16, 1, 495, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1596276550/pebaxctgfbzmydnwmbkf.jpg', '2022-02-27 12:28:09'),
(1039, 16, 1, 496, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1596307250/wrfzukhbz7mmmnejn7ir.jpg', '2022-02-27 12:28:09'),
(1040, 17, 1, 26, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596375868/images%20%283%29.jpg.jpg', '2022-02-27 12:28:09'),
(1041, 17, 1, 27, NULL, 'IMAGE', '', '2022-02-27 12:28:09'),
(1042, 17, 1, 28, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596375868/images%20%283%29.jpg.jpg', '2022-02-27 12:28:09'),
(1043, 17, 1, 29, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596383577/gig.png.png', '2022-02-27 12:28:09'),
(1044, 17, 1, 30, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596383577/gig.png.png', '2022-02-27 12:28:09'),
(1045, 17, 1, 31, NULL, 'IMAGE', '', '2022-02-27 12:28:09'),
(1046, 17, 1, 32, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596383577/gig.png.png', '2022-02-27 12:28:09'),
(1047, 17, 1, 33, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596383577/gig.png.png', '2022-02-27 12:28:09'),
(1048, 17, 1, 34, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596383577/gig.png.png', '2022-02-27 12:28:09'),
(1049, 17, 1, 35, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596381015/images%20%282%29.jpg.jpg', '2022-02-27 12:28:09'),
(1050, 17, 1, 36, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596486657/watch.jpg.jpg', '2022-02-27 12:28:09'),
(1051, 17, 1, 37, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596383577/gig.png.png', '2022-02-27 12:28:09'),
(1052, 17, 1, 38, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596375868/images%20%283%29.jpg.jpg', '2022-02-27 12:28:09'),
(1053, 17, 1, 39, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596375868/images%20%283%29.jpg.jpg', '2022-02-27 12:28:09'),
(1054, 17, 1, 40, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596383577/gig.png.png', '2022-02-27 12:28:09'),
(1055, 17, 1, 41, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596486657/watch.jpg.jpg', '2022-02-27 12:28:09'),
(1056, 10, 0, 94, NULL, 'IMAGE', 'https://res.cloudinary.com/deadpool/image/upload/v1596896249/z4e6cvfpdwtuajzfkocw.jpg', '2022-02-27 12:28:09'),
(1057, 10, 0, 95, NULL, 'IMAGE', 'https://res.cloudinary.com/deadpool/image/upload/v1596896978/t0a2x3jcf2hc8b8dklma.jpg', '2022-02-27 12:28:09'),
(1058, 10, 0, 96, NULL, 'IMAGE', 'https://res.cloudinary.com/deadpool/image/upload/v1596901108/nkjqsmveyyx3xsxt6tem.jpg', '2022-02-27 12:28:09'),
(1059, 10, 0, 0, NULL, 'IMAGE', 'https://res.cloudinary.com/deadpool/image/upload/v1596901705/kq283avcnpnu6kpqkd6y.jpg', '2022-02-27 12:28:09'),
(1060, 10, 0, 0, NULL, 'IMAGE', 'https://res.cloudinary.com/deadpool/image/upload/v1596902107/duadpjesr3e8kdy8h1a1.jpg', '2022-02-27 12:28:09'),
(1061, 10, 0, 97, NULL, 'IMAGE', 'https://res.cloudinary.com/deadpool/image/upload/v1596902174/vful0bm6qb9gre2lad4o.jpg', '2022-02-27 12:28:09'),
(1062, 10, 0, 98, NULL, 'IMAGE', 'https://res.cloudinary.com/deadpool/image/upload/v1596902196/pvec3mkktbw43bqsmvur.jpg', '2022-02-27 12:28:09'),
(1063, 10, 0, 99, NULL, 'IMAGE', '', '2022-02-27 12:28:09'),
(1064, 10, 0, 100, NULL, 'IMAGE', 'https://res.cloudinary.com/deadpool/image/upload/v1596917057/bplp5fc9krno9tktsutv.jpg', '2022-02-27 12:28:09'),
(1065, 10, 0, 101, NULL, 'IMAGE', 'https://res.cloudinary.com/deadpool/image/upload/v1596923768/scjttwi0y8ppacmb8afv.jpg', '2022-02-27 12:28:09'),
(1066, 10, 0, 102, NULL, 'IMAGE', '', '2022-02-27 12:28:09'),
(1067, 16, 1, 1, NULL, 'IMAGE', 'https://blog.ipleaders.in/wp-content/uploads/2016/01/images_1599097875725.jpeg', '2022-02-27 12:28:09'),
(1068, 17, 1, 42, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596383577/gig.png.png', '2022-02-27 12:28:09'),
(1069, 17, 1, 42, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596383577/gig.png.png', '2022-02-27 12:28:09'),
(1070, 17, 1, 43, NULL, 'IMAGE', 'https://res.cloudinary.com/abhishekbarve/image/upload/v1596705167/t1.jpg.jpg', '2022-02-27 12:28:09'),
(1071, 17, 1, 43, NULL, 'IMAGE', 'https://res.cloudinary.com/abhishekbarve/image/upload/v1596705167/t1.jpg.jpg', '2022-02-27 12:28:09'),
(1072, 10, 0, 32, NULL, 'IMAGE', '', '2022-02-27 12:28:09'),
(1073, 10, 0, 32, NULL, 'IMAGE', '', '2022-02-27 12:28:09'),
(1077, 17, 1, 47, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596383577/gig.png.png', '2022-02-27 12:28:09'),
(1078, 16, 1, 472, NULL, 'IMAGE', 'https://www.singaporecompanyincorporation.sg/wp-content/uploads/2019/08/SCI-services-incorporation-taxation-accounting-immigration-in-singapore-red.jpg', '2022-02-27 12:28:09'),
(1079, 16, 1, 471, NULL, 'IMAGE', 'https://www.jagranimages.com/images/newimg/30062020/30_06_2020-itr_20455454.jpg', '2022-02-27 12:28:09'),
(1080, 16, 1, 469, NULL, 'IMAGE', 'https://logicaltax.com/wp-content/uploads/2019/08/gst-registration.png', '2022-02-27 12:28:09'),
(1081, 16, 1, 468, NULL, 'IMAGE', 'https://img1.exportersindia.com/product_images/bc-full/dir_37/1087510/company-incorporation-services-1475511558-2429563.jpeg', '2022-02-27 12:28:09'),
(1083, 16, 1, 497, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1598386325/qsbitllphonynbqaezrn.jpg', '2022-02-27 12:28:09'),
(1085, 16, 1, 498, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1601490664/dnj3c2iuxqhzca0aal5j.png', '2022-02-27 12:28:09'),
(1113, 16, 1, 7, NULL, 'IMAGE', 'https://5.imimg.com/data5/IR/RE/SD/SELLER-81684481/professional-tax-certificate-500x500.jpg', '2022-02-27 12:28:09'),
(1115, 16, 0, 10, NULL, 'IMAGE', 'https://frontrangelegalservices.com/wp-content/uploads/2010/02/business_law1-e1296860067730.jpg', '2022-02-27 12:28:09'),
(1116, 16, 1, 4, NULL, 'IMAGE', 'https://5.imimg.com/data5/ZK/VX/DA/SELLER-66769686/llp-registration-500x500.jpg', '2022-02-27 12:28:09'),
(1117, 16, 1, 9, NULL, 'IMAGE', 'https://www.jagranimages.com/images/16_07_2019-itr_19404988.jpg', '2022-02-27 12:28:09'),
(1118, 16, 1, 11, NULL, 'IMAGE', 'https://5.imimg.com/data5/XG/YH/MY-23332922/litigation-support-service-500x500.jpg', '2022-02-27 12:28:09'),
(1119, 16, 1, 502, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1602931088/s6bbjnysoiovfjdiwjs1.png', '2022-02-27 12:28:09'),
(1120, 17, 1, 1, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1610574457/kzt7hrj2whmfxbytqxdc.jpg', '2022-02-27 12:28:09'),
(1121, 17, 1, 2, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1610574981/ucaatq0gbhj1m0ic8vxr.jpg', '2022-02-27 12:28:09'),
(1122, 17, 1, 3, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1610642583/lw6bltm7x5yv2qje1lew.jpg', '2022-02-27 12:28:09'),
(1123, 17, 1, 4, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1610644019/uqk1gvhmoawvcqnzomyk.png', '2022-02-27 12:28:09'),
(1124, 17, 1, 5, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1610644217/oudrrqeg9wllxbsodpek.jpg', '2022-02-27 12:28:09'),
(1125, 17, 1, 6, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1610649318/n3yaxdgoltelomroek1h.jpg', '2022-02-27 12:28:09'),
(1126, 17, 1, 7, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1610649630/baunfitjugvuxcgzumls.jpg', '2022-02-27 12:28:09'),
(1127, 17, 1, 8, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1610652287/sgrjnjvi6mgmcaenw3sv.jpg', '2022-02-27 12:28:09'),
(1129, 16, 0, 12, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611344691/iqdzttdcf1tqhfknd0sk.jpg', '2022-02-27 12:28:09'),
(1130, 16, 1, 13, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611347092/g91okgpxctx1tuwfoomv.jpg', '2022-02-27 12:28:09'),
(1131, 16, 0, 13, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611347093/rqygttrkcg7lnmaex3yk.jpg', '2022-02-27 12:28:09'),
(1132, 16, 1, 14, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611347954/gtf59fqknlq1hqtqbiz1.jpg', '2022-02-27 12:28:09'),
(1133, 16, 1, 15, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611348289/rxlaf9yaqirjy3eyiqrv.jpg', '2022-02-27 12:28:09'),
(1134, 16, 1, 16, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611348880/mwchuq22vrzvsgm1qcrf.jpg', '2022-02-27 12:28:09'),
(1135, 16, 1, 17, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611349137/inbewchvlkgdyfyz9kfy.jpg', '2022-02-27 12:28:09'),
(1136, 16, 1, 18, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611353990/qgyizjyru25qfrxtuu2h.jpg', '2022-02-27 12:28:09'),
(1137, 16, 1, 19, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611356904/mjwtfgtk4z6lvurbfgwt.jpg', '2022-02-27 12:28:09'),
(1138, 16, 1, 19, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611357349/s0cp3v52ptdvlxdptgb5.jpg', '2022-02-27 12:28:09'),
(1139, 16, 1, 20, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611357542/c9h0jwzt4deqko14u6cs.jpg', '2022-02-27 12:28:09'),
(1140, 16, 1, 21, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611357787/tofpksu7g8luvi82auvu.jpg', '2022-02-27 12:28:09'),
(1141, 16, 1, 22, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611360381/aib4fombsppyosu9ycky.png', '2022-02-27 12:28:09'),
(1142, 16, 1, 23, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611360827/m3xd2jbnyggii4wdrgvx.jpg', '2022-02-27 12:28:09'),
(1143, 16, 1, 24, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611361081/kefsc2wk4vu3asy2qikp.jpg', '2022-02-27 12:28:09'),
(1144, 16, 1, 25, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611361466/uuax6yidzefrogximizi.png', '2022-02-27 12:28:09'),
(1145, 16, 1, 26, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611361639/ttusu1zpdz62dd5nqrxl.png', '2022-02-27 12:28:09'),
(1146, 16, 1, 27, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611361894/il0ea1owsdip7mkldd1l.jpg', '2022-02-27 12:28:09'),
(1147, 16, 1, 28, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611362115/mi88ayqkuinpv2mgxbat.png', '2022-02-27 12:28:09'),
(1148, 16, 1, 9, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611362465/geybtrkywc40hecpu5if.jpg', '2022-02-27 12:28:09'),
(1149, 16, 1, 10, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611363051/z6mxj3tjqijgr7z9zhfk.png', '2022-02-27 12:28:09'),
(1150, 16, 1, 8, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611363677/ybaal303dhxhr979ujjo.png', '2022-02-27 12:28:09'),
(1151, 16, 1, 31, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611364429/pnoprggyyh2jki3ihfkr.jpg', '2022-02-27 12:28:09'),
(1152, 16, 1, 32, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611382693/ib5uozkxer1ffpv8yfyc.jpg', '2022-02-27 12:28:09'),
(1153, 16, 1, 33, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611382940/irvf6ofbr8ccqkrrf9of.jpg', '2022-02-27 12:28:09'),
(1154, 16, 1, 34, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611383077/mptezjug8bsf4e9icu88.png', '2022-02-27 12:28:09'),
(1155, 16, 1, 35, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611383345/rd0gysyjuhkeckw5h5p9.jpg', '2022-02-27 12:28:09'),
(1156, 16, 1, 36, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611383502/vfighxajdraywszptkly.jpg', '2022-02-27 12:28:09'),
(1179, 16, 1, 37, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611536699/zflaacjzhag05athhadl.jpg', '2022-02-27 12:28:09'),
(1180, 16, 1, 38, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611544285/garby0dlmldjnp9om1ta.png', '2022-02-27 12:28:09'),
(1181, 16, 1, 39, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1611544839/e4lh9yxcazpccvhvt1eo.jpg', '2022-02-27 12:28:09'),
(1182, 14, 1, 386, NULL, 'IMAGE', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEcVgIqNARBw6PU-zLHjxzqc9j00Sgjz1GLRQv_CqrmTSrD4KmxXeYy5w&s', '2022-02-27 12:28:09'),
(1183, 14, 1, 386, NULL, 'IMAGE', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEcVgIqNARBw6PU-zLHjxzqc9j00Sgjz1GLRQv_CqrmTSrD4KmxXeYy5w&s', '2022-02-27 12:28:09'),
(1184, 14, 1, 386, NULL, 'IMAGE', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEcVgIqNARBw6PU-zLHjxzqc9j00Sgjz1GLRQv_CqrmTSrD4KmxXeYy5w&s', '2022-02-27 12:28:09'),
(1185, 20, 1, 521, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1613328122/grrfwlolojsnq4xh4weh.jpg', '2022-02-27 12:28:09'),
(1186, 20, 0, 521, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1613328123/ibcjdqmavlb7xxegam5t.jpg', '2022-02-27 12:28:09'),
(1253, 10, 0, 32, NULL, 'IMAGE', 'http://res.cloudinary.com/abhishekbarve/image/upload/v1613962812/fmj4yvjx7e7qctggibye.jpg ', '2022-02-27 12:28:09'),
(1263, 21, 0, 3, NULL, 'IMAGE', 'http://res.cloudinary.com/abhishekbarve/image/upload/v1613963718/lbthbp36zjhierf0cbzj.jpg ', '2022-02-27 12:28:09'),
(1265, 21, 0, 5, NULL, 'IMAGE', 'http://res.cloudinary.com/abhishekbarve/image/upload/v1613963983/s6ggtebpyz5damwiax07.jpg ', '2022-02-27 12:28:09'),
(1266, 21, 0, 6, NULL, 'IMAGE', 'http://res.cloudinary.com/abhishekbarve/image/upload/v1613964168/tjhg5zsmfc5celvizldc.jpg ', '2022-02-27 12:28:09'),
(1267, 21, 0, 8, NULL, 'IMAGE', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfr0EjvCkaerfB8qepD9jPVG6-T35KakLHTg&usqp=CAU', '2022-02-27 12:28:09'),
(1268, 21, 0, 7, NULL, 'IMAGE', 'https://images.shiksha.com/mediadata/images/1498553516phpkz4PW7_205x160.jpg', '2022-02-27 12:28:09'),
(1269, 21, 0, 9, NULL, 'IMAGE', 'http://gcetjammu.org.in/3.JPG', '2022-02-27 12:28:09'),
(1270, 21, 0, 10, NULL, 'IMAGE', 'https://www.mietjmu.in/images/New%20building1.jpg', '2022-02-27 12:28:09'),
(1271, 21, 0, 11, NULL, 'IMAGE', 'https://cache.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/2580/2019/5/28/College%20Entrance%20View%20of%20Yogananda%20College%20of%20Engineering%20and%20Technology%20Jammu_Campus-View.jpg', '2022-02-27 12:28:09'),
(1272, 21, 0, 12, NULL, 'IMAGE', 'https://www.edufever.com/wp-content/uploads/2019/08/Jammu-Institute-of-Ayurved-and-Research-Jammu-Kashmir.jpg', '2022-02-27 12:28:09'),
(1273, 21, 0, 13, NULL, 'IMAGE', 'https://cache.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/19051/2019/4/18/Campus%20view%20of%20Adarsh%20College%20of%20Education%20Jind_Campus-view.jpg', '2022-02-27 12:28:09'),
(1274, 13, 1, 1, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1621442257/zmr75nbprkacvy6cyw0e.png', '2022-02-27 12:28:09'),
(1275, 22, 0, 1, NULL, 'IMAGE', 'https://gumlet.assettype.com/nationalherald/2020-03/856a1f7a-bcbe-4609-bfe9-300161413b61/big_bazaar_1571403097.jpg?w=1200&h=696', '2022-02-27 12:28:09'),
(1276, 22, 0, 2, NULL, 'IMAGE', 'https://content3.jdmagicbox.com/comp/lonavala/v8/9999p2114.2114.190419160407.w8v8/catalogue/monika-super-market-lonavala-d1mniex3ot.jpg?clr=442222', '2022-02-27 12:28:09'),
(1277, 22, 0, 3, NULL, 'IMAGE', 'https://www.itln.in/itlnbackend/assets/uploads/Flipkart-Vishal-Mega-Mart-join-hands-to-deliver-essentials-in-26-cities.png', '2022-02-27 12:28:09'),
(1278, 22, 0, 5, NULL, 'IMAGE', 'https://resize.indiatvnews.com/en/resize/newbucket/715_-/2020/07/d-mart-1594490249.jpg', '2022-02-27 12:28:09'),
(1279, 22, 0, 4, NULL, 'IMAGE', 'https://blog.covalue.io/wp-content/uploads/2020/06/VMart.jpg', '2022-02-27 12:28:09'),
(1280, 22, 0, 6, NULL, 'IMAGE', 'https://www.easyday.in/images/trash/fruits.jpg', '2022-02-27 12:28:09'),
(1281, 22, 0, 7, NULL, 'IMAGE', 'https://lh3.googleusercontent.com/p4oNw3Xxi99uFVHjktVIrHVSaOOcYTEcOEZf7KRHGKIOOzNiBYmXWzCdXBOhnCuJg2x2uNdWpt-o8kMuoBxPh0jD5cTz=w1000', '2022-02-27 12:28:09'),
(1282, 22, 0, 8, NULL, 'IMAGE', 'https://lh3.googleusercontent.com/bXjES1y3OC3_cMwZC2xtCOGcWTge78khUjycoMt78Y0BBKBfoNGmAcnm58b3Jt20gRY1WDTfHFuxjc_2=w768-h768-n-o-v1', '2022-02-27 12:28:09'),
(1283, 22, 0, 9, NULL, 'IMAGE', 'https://content3.jdmagicbox.com/comp/jammu/s5/9999px191.x191.190324140951.z5s5/catalogue/muskan-super-market-bathindi-jammu-supermarkets-b4ao47fhqk.jpg', '2022-02-27 12:28:09'),
(1284, 22, 0, 10, NULL, 'IMAGE', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRER1ojC6YEDKe3QE5lYea3eJAm6FVWmTN1Fw&usqp=CAU', '2022-02-27 12:28:09'),
(1285, 22, 0, 11, NULL, 'IMAGE', 'https://mapio.net/images-p/122732763.jpg', '2022-02-27 12:28:09'),
(1286, 22, 0, 12, NULL, 'IMAGE', 'https://lh5.googleusercontent.com/p/AF1QipMqOOXGUH_cwApd2_5FxOyMcix4KZz7lvnNH-Y5', '2022-02-27 12:28:09'),
(1287, 10, 0, 1, NULL, 'IMAGE', 'https://res.cloudinary.com/deadpool/image/upload/v1614296748/tjxgoeddremz59tkjy7m.png', '2022-02-27 12:28:09'),
(1288, 23, 0, 3, NULL, 'IMAGE', 'https://i.pinimg.com/236x/39/0c/a3/390ca392e070034e200cfb254cb44392.jpg', '2022-02-27 12:28:09'),
(1289, 23, 0, 4, NULL, 'IMAGE', 'https://i.pinimg.com/564x/07/bc/35/07bc35c13486653fe827fc4de1be9b38.jpg', '2022-02-27 12:28:09'),
(1290, 23, 0, 5, NULL, 'IMAGE', 'https://i.pinimg.com/564x/e1/29/15/e12915032c9c508e5d46970992d57608.jpg', '2022-02-27 12:28:09'),
(1291, 23, 0, 6, NULL, 'IMAGE', 'https://i.pinimg.com/originals/48/e6/3c/48e63c9365c0222f7abf8ebed0b2298b.jpg', '2022-02-27 12:28:09'),
(1292, 23, 0, 11, NULL, 'IMAGE', 'https://d32b5joreyushd.cloudfront.net/media/userprofile/2019-09-12_142333.7502630000.jpg', '2022-02-27 12:28:09'),
(1293, 23, 0, 9, NULL, 'IMAGE', 'https://assets.website-files.com/57df33df813bf6950b062811/5b56220c5e14e238eac26795_Mahshid-bio-retouched.jpg', '2022-02-27 12:28:09'),
(1294, 23, 0, 10, NULL, 'IMAGE', 'https://d2i71jhtdx7kow.cloudfront.net/wp-content/uploads/2015/10/raman1.jpg', '2022-02-27 12:28:09'),
(1295, 23, 0, 7, NULL, 'IMAGE', 'https://jobwebghana.com/wp-content/uploads/2017/08/passport-size-photo.jpg', '2022-02-27 12:28:09'),
(1296, 23, 0, 8, NULL, 'IMAGE', 'https://saifulbinakalam.files.wordpress.com/2017/10/saiful-bin-a-kalam-passport-size-photo.jpg', '2022-02-27 12:28:09'),
(1297, 13, 1, 2, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1621442257/zmr75nbprkacvy6cyw0e.png', '2022-02-27 12:28:09'),
(1301, 1, 1, 8, NULL, 'IMAGE', 'https://cdn.s3waas.gov.in/s3979d472a84804b9f647bc185a877a8b5/uploads/bfi_thumb/2018081425-olwai526229dj5blnvd61hbicgmz26cs8eqc4gldai.jpg', '2022-02-27 12:28:09'),
(1302, 1, 1, 10, NULL, 'IMAGE', 'https://spiderimg.amarujala.com/assets/images/2020/01/24/750x506/mata-vaishno-devi-darbar-photos_1579874089.jpeg', '2022-02-27 12:28:09'),
(1303, 1, 1, 13, NULL, 'IMAGE', 'https://res.cloudinary.com/karbi/image/upload/v1614891683/2018081472-olwai6008wanura8idrslz2yxuic9vgikjdtlqjz4a.jpg', '2022-02-27 12:28:09'),
(1305, 1, 1, 14, NULL, 'IMAGE', 'https://res.cloudinary.com/karbi/image/upload/v1614892238/dc72fb21e7040c06dcb3ee4de94e20a9.jpg', '2022-02-27 12:28:09'),
(1306, 24, 1, 1, NULL, 'IMAGE', 'https://res.cloudinary.com/karbi/image/upload/v1614987863/car-taxi-cab-cab-rental-car.jpg', '2022-02-27 12:28:09'),
(1307, 24, 1, 2, NULL, 'IMAGE', 'https://www.karnataka.com/wp-content/uploads/2013/04/kstdc-taxi.jpg', '2022-02-27 12:28:09'),
(1308, 24, 1, 3, NULL, 'IMAGE', 'https://www.patratravels.com/images/vehicles/chevrolet-enjoy-1.jpg', '2022-02-27 12:28:09'),
(1309, 24, 1, 4, NULL, 'IMAGE', 'https://www.taxibay.in/assets/tt-image-9699c25ec354d1306660849b4c87c7fca46bef74258c682649c6ec06b0ee7d7e.jpg', '2022-02-27 12:28:09'),
(1311, 25, 1, 1, NULL, 'IMAGE', 'https://i1.wp.com/pahalwans.com/wp-content/uploads/2017/11/chocolate-pahalwans-sweets-1.jpg?fit=1200%2C800&ssl=1', '2022-02-27 12:28:09'),
(1312, 25, 1, 2, NULL, 'IMAGE', 'https://lh3.googleusercontent.com/gyiYMPNDRmglKQL0B3Z8hxQ2WpBmbT2OTzWk7lprdE95REUY2DHqT_qOGjVILFc2V635xpJ-=w1080-h608-p-no-v0', '2022-02-27 12:28:09'),
(1313, 4, 1, 1, NULL, 'IMAGE', 'https://content.jdmagicbox.com/comp/bangalore/s5/080pxx80.xx80.181218171509.j6s5/catalogue/bamboo-restaurant-h-r-b-r-layout-kalyan-nagar-2nd-block-bangalore-home-delivery-restaurants-hkzkfz0ybx.jpg', '2022-02-27 12:28:09'),
(1315, 4, 1, 2, NULL, 'IMAGE', 'https://media-cdn.tripadvisor.com/media/photo-s/0a/76/31/14/dakshin-itc-windsor.jpg', '2022-02-27 12:28:09'),
(1319, 13, 0, 2, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1621369518/numzwg8trbna4ovnvuty.png', '2022-02-27 12:28:09'),
(1320, 13, 1, 3, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1621442257/zmr75nbprkacvy6cyw0e.png', '2022-02-27 12:28:09'),
(1321, 13, 0, 1, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1621369865/fle5iol1fjaynh7pq1qj.png', '2022-02-27 12:28:09'),
(1322, 13, 0, 2, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1621369866/tnr6nuwevcgn4fbdizk8.png', '2022-02-27 12:28:09'),
(1323, 13, 0, 3, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1621442256/etdgjbbzjsucrmn8r3of.png', '2022-02-27 12:28:09'),
(1324, 13, 0, 2, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1621442257/zmr75nbprkacvy6cyw0e.png', '2022-02-27 12:28:09'),
(1327, 28, 1, 8, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1621620966/jb3jfwh2gposs05m7tru.png', '2022-02-27 12:28:09'),
(1328, 27, 1, 7, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1621633294/adhwxfku84fg30zvnzfn.png', '2022-02-27 12:28:09'),
(1329, 27, 1, 8, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1621633555/ooo7e21ccb5h5rbpxyf7.png', '2022-02-27 12:28:09'),
(1331, 2, 1, 1, NULL, 'IMAGE', 'https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_183,q_auto,w_245/v1/filestore/rywiivmsbgxatqof0e2xrsv2ai1g_pravat-premium-plantation%20%284%29.jpg', '2022-02-27 12:28:09'),
(1332, 2, 1, 2, NULL, 'IMAGE', 'https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_183,q_auto,w_245/v1/filestore/r1vaelakjk6arlekh0p4ph8nnn6q_1598506127_dala18.png', '2022-02-27 12:28:09'),
(1333, 2, 1, 3, NULL, 'IMAGE', 'https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_183,q_auto,w_245/v1/filestore/bn7s452wnmds0w87a91a195xkp2n_1599805380_parampara2.png', '2022-02-27 12:28:09'),
(1334, 2, 1, 4, NULL, 'IMAGE', 'https://res.cloudinary.com/thrillophilia/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_183,q_auto,w_245/v1/filestore/yid1pxeycbfgj7aj0ixn09tojqs4_1600351310_DewDrops_%2815%29.jpeg', '2022-02-27 12:28:09'),
(1335, 2, 1, 5, NULL, 'IMAGE', 'https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201612191256023930-dad5b66eb96911e7a58d02d758350e04.jpg?&output-quality=75&downsize=243:162&crop=243:162;0,40&output-format=jpg', '2022-02-27 12:28:09'),
(1336, 2, 1, 6, NULL, 'IMAGE', 'https://r2imghtlak.mmtcdn.com/r2-mmt-htl-image/htl-imgs/201803121758236037-bb95dd40281511e8a00a02fa0cf49abe.jpg?&output-quality=75&downsize=243:162&crop=243:162;0,30&output-format=jpg', '2022-02-27 12:28:09'),
(1337, 2, 1, 7, NULL, 'IMAGE', 'https://r1imghtlak.mmtcdn.com/a37d2c9cb5c611e8aca20a108a398d20.jpg?&output-quality=75&downsize=243:162&output-format=jpg', '2022-02-27 12:28:09'),
(1339, 16, 1, 40, NULL, 'IMAGE', 'https://seattleyoganews.com/wp-content/uploads/2020/02/2021-Yoga-Retreat-in-guatemala-with-Leah-Zaccaria-Shefayoga-Hauteyoga.jpg', '2022-02-27 12:28:09'),
(1340, 16, 1, 41, NULL, 'IMAGE', 'https://cdn.lifehack.org/wp-content/uploads/2020/01/learn-yoga.jpeg', '2022-02-27 12:28:09'),
(1345, 13, 1, 4, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1625813917/gi6lyfebh8rn6c4lozpw.png', '2022-02-27 12:28:09'),
(1350, 14, 0, 13, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1626624989/lkhopunku2sashstqhug.png', '2022-02-27 12:28:09'),
(1352, 4, 1, 4, NULL, 'IMAGE', 'https://media-cdn.tripadvisor.com/media/photo-o/17/e1/c0/c1/one-atria-cafe.jpg', '2022-02-27 12:28:09'),
(1353, 4, 1, 3, NULL, 'IMAGE', 'https://media-cdn.tripadvisor.com/media/photo-s/1b/9a/f7/2e/lotus-pavilion.jpg', '2022-02-27 12:28:09'),
(1354, 13, 1, 7, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1628805572/reqjbep2aacwnckmidlp.png', '2022-02-27 12:28:09'),
(1355, 17, 1, 9, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1629370475/ckql5ikk95ez7xklbjp2.jpg', '2022-02-27 12:28:09'),
(1356, 17, 1, 10, NULL, 'IMAGE', 'https://res.cloudinary.com/dlfnetokj/image/upload/v1596383577/gig.png.png', '2022-02-27 12:28:09'),
(1357, 13, 1, 8, NULL, 'IMAGE', 'http://res.cloudinary.com/dlfnetokj/image/upload/v1629648635/wcj991iq770t3168afhe.jpg', '2022-02-27 12:28:09'),
(1491, 15, 1, 8, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1646823418/ll4g1kucupxb28lb9dkm.jpg', '2022-03-24 10:08:52'),
(1510, 15, 0, 49, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647246827/zw2mpkz2q0blzk8shepb.jpg', '2022-03-13 20:33:14'),
(1511, 15, 1, 49, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647246831/lnt8iige5vqbtjetqubz.jpg', '2022-03-13 20:33:14'),
(1512, 15, 1, 49, NULL, 'CATALOGUE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647246835/c9oruralhlligcgnzi9r.jpg', '2022-03-13 20:33:14'),
(1515, 15, 1, 50, NULL, 'CATALOGUE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647246913/qipmipbbq0solbygrkbs.jpg', '2022-03-13 20:34:32'),
(1516, 15, 1, 51, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647949098/yeeuda84niharmpvmo9w.jpg', '2022-03-23 10:46:10'),
(1517, 15, 1, 51, NULL, 'CATALOGUE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647949103/zs80rdrt0o2fvzzm7y8b.jpg', '2022-03-21 23:37:40'),
(1731, 5, 1, 7, NULL, 'IMAGE', '', '2022-04-13 12:24:25'),
(1732, 5, 1, 7, NULL, 'CATALOGUE', '', '2022-04-13 12:24:25'),
(1765, 5, 1, 11, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649853894/o6ohm0cqdgsnonf20l61.jpg', '2022-04-13 12:44:12'),
(1774, 5, 1, 13, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649861851/wzmyyr4oxjgjeqlwdfs6.jpg', '2022-04-13 14:56:44'),
(1788, 5, 0, 16, 42, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649852403/peem6i3bym916nwblpsp.jpg', '2022-04-13 15:06:24'),
(1789, 5, 0, 16, 42, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649852706/gert4opcwnv3p1rov06i.jpg', '2022-04-13 15:06:24'),
(1790, 5, 0, 16, 42, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649852406/lolcr33uqubijiokdz60.jpg', '2022-04-13 15:06:24'),
(1791, 5, 0, 16, 43, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649861846/ta04zquxzja3yayzn0rc.jpg', '2022-04-13 15:06:24'),
(1792, 5, 0, 16, 43, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649861849/yj9q41s7la0s8fb4bq9h.jpg', '2022-04-13 15:06:24'),
(1793, 5, 0, 16, 43, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649862103/fzeqpekytpciu6k40ycd.jpg', '2022-04-13 15:06:24'),
(1806, 5, 1, 21, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649862697/sp9szoszj2xqlqzb45ko.jpg', '2022-04-14 10:40:04'),
(1847, 5, 0, 21, 60, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649932791/u7au3itmnmk6fuwf5hur.jpg', '2022-04-15 10:25:12'),
(1848, 5, 0, 21, 60, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649932794/paxwyazcrwqikhzvzomc.jpg', '2022-04-15 10:25:12'),
(1849, 5, 0, 21, 60, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649852406/lolcr33uqubijiokdz60.jpg', '2022-04-15 10:25:12'),
(1850, 5, 0, 21, 61, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649861846/ta04zquxzja3yayzn0rc.jpg', '2022-04-15 10:25:12'),
(1851, 5, 0, 21, 61, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649861849/yj9q41s7la0s8fb4bq9h.jpg', '2022-04-15 10:25:12'),
(1852, 5, 0, 21, 61, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649862103/fzeqpekytpciu6k40ycd.jpg', '2022-04-15 10:25:12'),
(1853, 5, 0, 21, 62, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649862742/om5qdzmxntdbbiqryskk.jpg', '2022-04-15 10:25:12'),
(1854, 5, 0, 21, 62, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649862749/ffe7pe9vrzucjibpugee.jpg', '2022-04-15 10:25:12'),
(1855, 5, 0, 21, 62, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649862767/vsnxwvqxmbbn0whhr2ge.jpg', '2022-04-15 10:25:12'),
(1856, 5, 0, 21, 62, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1649862773/pkrhws1odevsb4ur0gjk.jpg', '2022-04-15 10:25:12'),
(1859, 5, 1, 22, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650018592/lkl0btvqjayy1ibofzvo.jpg', '2022-04-15 10:28:46'),
(1860, 5, 0, 22, 64, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650018572/je7brxinrb0q8ppyhcve.jpg', '2022-04-15 10:33:05'),
(1861, 5, 0, 22, 64, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650018588/j97fdctbxa18mbkm4m38.jpg', '2022-04-15 10:33:05'),
(1862, 5, 0, 22, 65, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650018829/c4huwenduetq3cwbouwa.jpg', '2022-04-15 10:33:05'),
(1863, 5, 0, 22, 65, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650018588/j97fdctbxa18mbkm4m38.jpg', '2022-04-15 10:33:05'),
(1868, 15, 1, 50, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650725020/qwuolwfxr0i8o1rt3uvz.jpg', '2022-04-23 14:42:49'),
(1880, 15, 0, 50, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1647246905/smiwwraxj5zdzrbwnyxk.jpg', '2022-04-25 10:33:02'),
(1886, 15, 0, 51, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650884969/fd2peetnzzvmovnbvn1t.jpg', '2022-04-25 11:10:28'),
(1887, 15, 0, 51, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650883519/yjwgxbx2qohpnuh6knne.jpg', '2022-04-25 11:10:28'),
(1888, 15, 0, 51, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650884972/g6pymxvlhb6qelkv5dgp.jpg', '2022-04-25 11:10:28'),
(1889, 15, 0, 51, NULL, 'IMAGE', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650885078/ry6k7j0k7dqiooqa5wyf.jpg', '2022-04-25 11:10:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_margin`
--

CREATE TABLE `product_margin` (
  `id` int(11) NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_type` varchar(100) COLLATE latin1_danish_ci NOT NULL,
  `margin` varchar(11) COLLATE latin1_danish_ci NOT NULL,
  `MRP` varchar(11) COLLATE latin1_danish_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `mark_up` varchar(255) COLLATE latin1_danish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `product_margin`
--

INSERT INTO `product_margin` (`id`, `marketplace_id`, `product_id`, `user_type`, `margin`, `MRP`, `created_date`, `mark_up`) VALUES
(1, 5, 486, 'Direct Sales', '20', '50', '2022-01-28 02:20:27', '20'),
(2, 5, 486, 'Bloggers', '15', '40', '2022-01-28 02:20:27', '15'),
(3, 5, 486, 'Affiliates', '10', '30', '2022-01-28 02:20:27', '10'),
(9, 5, 15, 'Wholesaler', '10', '50', '2022-01-29 02:49:28', '10'),
(10, 5, 15, 'Stockist', '15', '50', '2022-01-29 02:49:28', '15'),
(12, 5, 483, 'Reseller', '12', '100', '2022-01-29 02:50:22', '12'),
(13, 5, 529, 'Wholesaler', '1', '1', '2022-02-02 01:50:32', '1'),
(14, 5, 8, 'Bloggers', '3', '5', '2022-03-23 22:12:36', '4'),
(15, 5, 2, 'Direct Sales', '30', '45', '2022-04-11 08:09:14', '30');

-- --------------------------------------------------------

--
-- Table structure for table `product_rating`
--

CREATE TABLE `product_rating` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `title` text NOT NULL,
  `comment` text NOT NULL,
  `helpful` text DEFAULT '0',
  `unhelpful` text NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_rating`
--

INSERT INTO `product_rating` (`id`, `site_id`, `marketplace_id`, `item_id`, `vendor_id`, `rating`, `title`, `comment`, `helpful`, `unhelpful`, `status`, `created`, `modified`) VALUES
(1, 2, 5, 21, 1, 4, 'askdjhk', 'ksjahdkjshakj', '5', '2', 1, '2022-04-14 12:55:11', '2022-04-14 12:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `fabric` text DEFAULT NULL,
  `age` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `measurement` text DEFAULT NULL,
  `package` text DEFAULT NULL,
  `style` text DEFAULT NULL,
  `series` text DEFAULT NULL,
  `unit_per_pack` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `mrp` float DEFAULT NULL,
  `a_stock` text DEFAULT NULL,
  `s_stock` text DEFAULT NULL,
  `save_type` text NOT NULL DEFAULT 'ORG',
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `site_id`, `product_id`, `size`, `color`, `fabric`, `age`, `gender`, `measurement`, `package`, `style`, `series`, `unit_per_pack`, `price`, `mrp`, `a_stock`, `s_stock`, `save_type`, `created_date`) VALUES
(60, 2, 21, 'XL', '#ec3232', 'Polyster', '', '', 'Blade/Blades', 'single', 'GYTS', 'GVGJ', '', 799, 999, '4', '10', 'ORG', '2022-04-15 15:55:12'),
(61, 2, 21, 'XL', '#c3bbbb', 'Polyster', '', '', 'Blade/Blades', 'single', 'GYTS', 'GVGJ', '', 749, 999, '0', '10', 'ORG', '2022-04-15 15:55:12'),
(62, 2, 21, 'XL', '#0d0d0d', 'Polyster', '', '', 'Blade/Blades', 'single', 'GYTS', 'GVGJ', '', 899, 999, '10', '3', 'ORG', '2022-04-15 15:55:12'),
(64, 2, 22, '', '#dd4646', '', '', '', '', 'multi', '', '', '3', 1699, 1999, '46', '30', 'ORG', '2022-04-15 16:03:05'),
(65, 2, 22, '', '#f75959', '', '', '', '', 'multi', '', '', '3', 1599, 1999, '38', '30', 'ORG', '2022-04-15 16:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `proliferate_history`
--

CREATE TABLE `proliferate_history` (
  `id` int(11) NOT NULL,
  `proliferate_status` text NOT NULL,
  `proliferate_by` text NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `proliferate_from` text NOT NULL,
  `products` text NOT NULL,
  `services` text NOT NULL,
  `jobs` text NOT NULL,
  `ewallet_amount` text NOT NULL,
  `ebanking_amount` text NOT NULL,
  `paytm_amount` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proliferate_history`
--

INSERT INTO `proliferate_history` (`id`, `proliferate_status`, `proliferate_by`, `vendor_id`, `admin_id`, `proliferate_from`, `products`, `services`, `jobs`, `ewallet_amount`, `ebanking_amount`, `paytm_amount`, `created_date`) VALUES
(1, 'PENDING', 'VENDOR', 1, 0, '2', '|15,4||15,17|', '', '', '0', '0', '430', '2022-02-02 04:07:15'),
(2, 'PENDING', 'VENDOR', 1, 0, '2', '|484,17|', '', '', '50', '50', '185', '2022-02-02 04:25:07'),
(3, 'DONE', 'VENDOR', 1, 0, '2', '|483,17||483,16|', '', '', '265', '0', '30', '2022-02-02 04:28:57'),
(4, 'PENDING', 'VENDOR', 1, 0, '2', '|483,17||483,16|', '', '', '265', '0', '30', '2022-02-02 04:53:24'),
(5, 'DONE', 'VENDOR', 1, 0, '2', '|483,17||483,16|', '', '', '265', '0', '265', '2022-02-02 04:59:07'),
(6, 'PENDING', 'VENDOR', 1, 0, '2', '|483,17||483,16|', '', '', '265', '0', '0', '2022-02-02 04:59:07'),
(7, 'PENDING', 'VENDOR', 1, 0, '2', '|528,17|', '', '', '55', '5', '195', '2022-02-02 07:28:31'),
(8, 'DONE', 'VENDOR', 1, 0, '2', '|528,17|', '', '', '55', '5', '195', '2022-02-02 07:30:27'),
(9, 'DONE', 'VENDOR', 1, 0, '2', '|527,17|', '', '', '0', '0', '255', '2022-02-03 08:39:47'),
(10, 'PENDING', 'VENDOR', 1, 0, '2', '|566,4||566,17|', '', '', '10', '50', '337.5', '2022-03-03 08:15:46'),
(11, 'PENDING', 'VENDOR', 1, 0, '2', '|566,4||566,17|', '', '', '0', '0', '397.5', '2022-03-03 08:48:35'),
(12, 'DONE', 'VENDOR', 1, 0, '2', '|566,4||566,17||564,4||564,17||567,4||567,17|', '', '', '0', '0', '1192.5', '2022-03-09 09:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `purchased_memberships`
--

CREATE TABLE `purchased_memberships` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `membership_id` text DEFAULT NULL,
  `membership_code` text NOT NULL,
  `validity` int(11) NOT NULL,
  `product_post` int(11) NOT NULL DEFAULT 0,
  `service_post` int(11) NOT NULL DEFAULT 0,
  `job_post` int(11) DEFAULT 0,
  `event_post` int(11) NOT NULL DEFAULT 0,
  `charity_post` int(11) DEFAULT 0,
  `media_post` int(11) NOT NULL DEFAULT 0,
  `acc_to_mt` text DEFAULT NULL,
  `acc_to_mp` text DEFAULT NULL,
  `acc_to_mbo` text DEFAULT NULL,
  `acc_to_mg` text DEFAULT NULL,
  `benifits` text DEFAULT NULL,
  `bank_account` int(11) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchased_memberships`
--

INSERT INTO `purchased_memberships` (`id`, `site_id`, `vendor_id`, `membership_id`, `membership_code`, `validity`, `product_post`, `service_post`, `job_post`, `event_post`, `charity_post`, `media_post`, `acc_to_mt`, `acc_to_mp`, `acc_to_mbo`, `acc_to_mg`, `benifits`, `bank_account`, `created_date`) VALUES
(1, 2, 1, '3', 'MID3A1RD16', 0, 100, -1, 200, -1, 300, -1, '1', '1', '1', '1', 'fdfndfjnb', 0, '2022-04-03 17:26:47'),
(2, 2, 1, '3', 'MID3A1RD17', 1, 100, -1, 200, -1, 300, -1, '1', '1', '1', '1', 'fdfndfjnb', 0, '2022-04-03 17:51:36'),
(3, 2, 1, '3', 'MID3A1RD18', 1, 100, -1, 200, -1, 300, -1, '1', '1', '1', '1', 'fdfndfjnb', 0, '2022-04-03 17:53:58'),
(4, 2, 1, '3', 'MID3A1RD19', 1, 100, -1, 200, -1, 300, -1, '1', '1', '1', '1', 'fdfndfjnb', 0, '2022-04-03 17:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `marketplace_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `attachment` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `updated_date` datetime NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `site_id`, `vendor_id`, `marketplace_id`, `item_id`, `message`, `name`, `email`, `attachment`, `status`, `updated_date`, `created_date`) VALUES
(9, 2, 3, 1, 1, '', '', '', '2', 1, '2022-04-18 20:15:25', '2022-04-18 20:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `url` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `site_id`, `vendor_id`, `marketplace_id`, `title`, `description`, `url`, `status`, `created_date`, `updated_date`) VALUES
(1, 2, 38, 1, 'First', 'Description', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650281580/dzq7yfxnrd8kza5g4h73.pdf', 1, '2022-04-18 17:02:13', '2022-04-18 17:02:13'),
(2, 2, 38, 1, 'Title Of Resume', 'description ', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650282958/rs336pzfbyhoja294djb.pdf', 1, '2022-04-18 17:25:11', '2022-04-18 17:25:11'),
(3, 2, 38, 1, 'Last', 'dkjas hkjdsaj gdsjha gdsjha jhdsgjad', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650286619/d4hpjwhvppbukwmodjom.pdf', 1, '2022-04-18 18:26:12', '2022-04-18 18:26:12');

-- --------------------------------------------------------

--
-- Table structure for table `save_draft`
--

CREATE TABLE `save_draft` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) NOT NULL,
  `item_type` text NOT NULL,
  `cat_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `item_for` text CHARACTER SET latin1 NOT NULL,
  `wishlisted` text CHARACTER SET latin1 NOT NULL,
  `sub_cat_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `child_cat_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `item_title` varchar(500) CHARACTER SET latin1 NOT NULL,
  `brand_name` varchar(500) CHARACTER SET latin1 NOT NULL,
  `description` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `btbterms` text CHARACTER SET latin1 DEFAULT NULL,
  `btbfaqs` text CHARACTER SET latin1 DEFAULT NULL,
  `rterms` text CHARACTER SET latin1 DEFAULT NULL,
  `rfaqs` text CHARACTER SET latin1 DEFAULT NULL,
  `features` varchar(100) CHARACTER SET latin1 NOT NULL,
  `label` varchar(30) CHARACTER SET latin1 NOT NULL,
  `SUK` varchar(20) CHARACTER SET latin1 NOT NULL,
  `stock` varchar(11) CHARACTER SET latin1 NOT NULL,
  `price` int(11) DEFAULT NULL,
  `measurement_unit` text CHARACTER SET latin1 NOT NULL,
  `gst` varchar(10) CHARACTER SET latin1 NOT NULL,
  `btb_gst` int(11) NOT NULL DEFAULT 0,
  `return_policy` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `variant_specification` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `variant` text CHARACTER SET latin1 DEFAULT NULL,
  `warehouse_location` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `warehouse_zip` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `shipping_cost` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `delivery_days` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `delivery_distance` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `views` int(11) DEFAULT 0,
  `cod` tinyint(1) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `commission` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `bulk` tinyint(1) NOT NULL DEFAULT 0,
  `rental` tinyint(1) NOT NULL DEFAULT 0,
  `latitude` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `longitude` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `tags` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `location` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `sub_user_id` int(11) DEFAULT NULL,
  `orp_id` int(11) NOT NULL,
  `posted_by` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `credit_limit` int(111) NOT NULL,
  `max_credit` int(11) NOT NULL,
  `returnDuration` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `save_draft_btbprice`
--

CREATE TABLE `save_draft_btbprice` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `entry_type` text NOT NULL,
  `min_qty` int(11) NOT NULL,
  `max_qty` int(11) DEFAULT NULL,
  `unit` text DEFAULT NULL,
  `price` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `save_draft_btbprice`
--

INSERT INTO `save_draft_btbprice` (`id`, `site_id`, `vendor_id`, `item_id`, `entry_type`, `min_qty`, `max_qty`, `unit`, `price`, `created_date`) VALUES
(1, 2, 1, 3, 'BTBPRICE', 1, 2, 'Ampere/Amperes', '3', '2022-03-09 04:30:34'),
(2, 2, 1, 3, 'BTBPRICE', 4, 5, 'Blade/Blades', '6', '2022-03-09 04:30:34'),
(3, 2, 1, 3, 'BTBCUSTPRICE', 7, 8, 'Acre/Acres', '9', '2022-03-09 04:30:34'),
(4, 2, 1, 3, 'BTBCUSTPRICE', 10, 11, 'Select Type', '13', '2022-03-09 04:30:34'),
(5, 2, 1, 3, 'BTBSAMPLEPRICE', 14, 15, 'Blade/Blades', '16', '2022-03-09 04:30:34'),
(6, 2, 1, 3, 'BTBSAMPLEPRICE', 17, 18, 'Select Type', '19', '2022-03-09 04:30:34'),
(7, 2, 1, 3, 'BULKPRICE', 30, 0, '', '31', '2022-03-09 04:30:34'),
(8, 2, 1, 3, 'BULKPRICE', 32, 0, '', '33', '2022-03-09 04:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `seeker_education`
--

CREATE TABLE `seeker_education` (
  `id` int(11) NOT NULL,
  `seeker_id` int(11) DEFAULT NULL,
  `prof_id` int(11) DEFAULT NULL,
  `intern_id` int(11) DEFAULT NULL,
  `deg_class_name` varchar(255) DEFAULT NULL,
  `start_year` int(11) DEFAULT NULL,
  `end_year` int(11) DEFAULT NULL,
  `school_clg` varchar(255) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeker_education`
--

INSERT INTO `seeker_education` (`id`, `seeker_id`, `prof_id`, `intern_id`, `deg_class_name`, `start_year`, `end_year`, `school_clg`, `descr`) VALUES
(1, 46, 19, NULL, 'B.Tech, CSE', 2019, 2023, 'Chandigarh University', 'Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.'),
(2, 46, 19, NULL, '12th', 2017, 2018, 'Krishna Public School', 'Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.'),
(3, NULL, 19, 46, '12th', 2017, 2018, 'Krishna Public School', 'Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.'),
(4, NULL, 1, NULL, '12th', 2017, 2018, 'Krishna Public School', 'Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.'),
(5, NULL, 1, NULL, '10th', 2015, 2016, 'Krishna Public School', 'Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.'),
(6, NULL, 17, NULL, 'sdsa', 2021, 2021, 'asdas', 'dsadas'),
(7, NULL, 18, NULL, 'erw', 2021, 2021, 'werew', 'werwerwe'),
(8, NULL, 16, NULL, 'dasd', 2021, 2021, 'sadsd', 'dasdasds'),
(9, NULL, 18, NULL, 'fsdf', 2021, 2021, 'fsdf', 'fsdfsdf'),
(10, 79, NULL, NULL, 'fghfg', 2021, 2022, 'fghfgh', 'hfghfgh'),
(11, 79, NULL, NULL, 'dasdas', 2022, 2022, 'dasdas', 'dasdas');

-- --------------------------------------------------------

--
-- Table structure for table `seeker_experience`
--

CREATE TABLE `seeker_experience` (
  `id` int(11) NOT NULL,
  `seeker_id` int(11) DEFAULT NULL,
  `intern_id` int(11) DEFAULT NULL,
  `prof_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `worked_at` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `about_work` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeker_experience`
--

INSERT INTO `seeker_experience` (`id`, `seeker_id`, `intern_id`, `prof_id`, `title`, `worked_at`, `start_time`, `end_time`, `about_work`) VALUES
(1, 46, NULL, 19, 'Web Developer', 'Ideal Village', 'Aug, 2021', 'Present', 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.'),
(2, 46, NULL, 19, 'App developer', 'Ideal Village', 'Jan, 2021', 'July, 2021', 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.'),
(3, 46, NULL, NULL, 'Graphics designer', 'Internshala', 'May, 2021', 'July, 2021', 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.'),
(4, NULL, 46, 1, 'App developer', 'Ideal Village', 'Jan, 2021', 'July, 2021', 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.'),
(5, NULL, NULL, 1, 'Lawyer\r\n', 'Ideal Village', 'Jan, 2021', 'July, 2021', 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.'),
(6, NULL, NULL, 1, 'Web Developer\r\n', 'Ideal Village', 'Jan, 2021', 'July, 2021', 'Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.'),
(7, NULL, NULL, 17, 'sdasd', 'dsadas', '2021-12-16', '2021-12-06', 'asdasdas'),
(8, NULL, NULL, 17, 'sdasdasdad', 'dsadas', '2021-12-16', '2021-12-06', 'asdasdas'),
(10, NULL, NULL, 18, 'sadas', 'sadas', '2021-12-02', '2021-12-23', 'dasdas'),
(11, NULL, NULL, 18, 'sdfs', 'dfsdfsd', '2021-12-25', '2021-12-17', 'fsdfsdfsd'),
(12, NULL, NULL, 16, 'asdas', 'sadas', '2021-12-24', '2021-12-24', 'dasdasd'),
(13, NULL, 2, NULL, 'sda', 'dsadas', '111111-11-11', '111111-11-11', '11111111111111111111111111111'),
(14, 79, NULL, NULL, 'fhfgh', 'hfhfgh', '2021-12-31', '2022-01-14', 'gfhfghfg'),
(15, 79, NULL, NULL, 'fhfgh', 'hfhfgh', '2021-12-31', '2022-01-14', 'gfhfghfg'),
(16, 79, NULL, NULL, 'dasdas', 'sadas', '2022-01-21', '2022-01-26', 'dasdasda');

-- --------------------------------------------------------

--
-- Table structure for table `seeker_resume`
--

CREATE TABLE `seeker_resume` (
  `id` int(10) NOT NULL,
  `seeker_id` int(10) NOT NULL,
  `prof_id` int(11) NOT NULL,
  `site_id` int(10) NOT NULL,
  `resume_url` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `resume_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `intern_id` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seeker_resume`
--

INSERT INTO `seeker_resume` (`id`, `seeker_id`, `prof_id`, `site_id`, `resume_url`, `resume_name`, `created_date`, `intern_id`) VALUES
(1, 1, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621665195/wtjzexnt9osjergkilf9.png', 'coding', '2021-05-22', 0),
(2, 2, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621666023/w6icrkjjuvbiouajj0mj.png', 'defining', '2021-05-22', 0),
(3, 3, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621666326/vlcg6fyztcsf2lr3kmdj.png', 'coding', '2021-05-22', 0),
(4, 4, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621666400/ics83nr6wjfpdjh75zeq.png', 'coding', '2021-05-22', 0),
(5, 5, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621666526/hya8boposdkbogowhucw.png', 'coding', '2021-05-22', 0),
(6, 6, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621666610/ppklm4a5dfaw9ydawvcs.png', 'defining', '2021-05-22', 0),
(7, 7, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621667451/sxuhezelum0wvkgc6qjm.png', 'coding', '2021-05-22', 0),
(8, 8, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621667583/b86zzpslmsr1jlfukv8t.png', 'coding', '2021-05-22', 0),
(9, 9, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621668281/yb17zz7au8eubkzgk8jm.png', 'coding', '2021-05-22', 0),
(10, 10, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621668325/igkizq4efbopk7pdfuz7.png', 'coding', '2021-05-22', 0),
(11, 11, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621668410/fdbxzjppm3jxxl5jy3xr.png', 'coding', '2021-05-22', 0),
(12, 12, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621668533/xdd3wzsjdkqoe7rinodi.png', 'coding', '2021-05-22', 0),
(13, 13, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621669168/deqgxuvmumtveeqsrfg2.png', 'coding', '2021-05-22', 0),
(14, 14, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621669250/yiypkxunnxwubesgnlaj.png', 'coding', '2021-05-22', 0),
(15, 15, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621669321/sfneidgqiyst0s9invl2.png', 'coding', '2021-05-22', 0),
(16, 16, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621669423/w6vckl5l4dgia4t8av7l.png', 'coding', '2021-05-22', 0),
(17, 17, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621670406/znmat1f82tjx1hzk47qg.png', 'coding', '2021-05-22', 0),
(18, 18, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621670442/jofaypbgqtgfxvc5z3pe.png', 'coding', '2021-05-22', 0),
(19, 19, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621670564/hli4sw9qmfpuojskwtze.png', 'coding', '2021-05-22', 0),
(20, 20, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621670700/ywtm6cvyiykyxlo6dv6c.png', 'coding', '2021-05-22', 0),
(21, 21, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621670827/naq4zxmywgrglpb69xf4.png', 'coding', '2021-05-22', 0),
(22, 22, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621670888/awnfwkl8e1bd4fg8z5nn.png', 'coding', '2021-05-22', 0),
(23, 23, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621670918/nnlbmgofucm0rjmppwwg.png', 'coding', '2021-05-22', 0),
(24, 24, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621675553/gmxl6sief9oc9v62amwp.png', 'coding', '2021-05-22', 0),
(25, 57, 0, 2, 'http://res.cloudinary.com/clouddigital/image/upload/v1621675581/qfj7j03hffg3x4jeiyfg.png', 'coding', '2021-05-22', 0),
(26, 26, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621675672/glehnezzxxkgx74zs0a3.png', 'coding', '2021-05-22', 0),
(27, 27, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621675806/mtx7nilgwborxdtzbzur.png', 'coding', '2021-05-22', 0),
(28, 28, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621676059/jxwds2teurapw4qad5xz.png', 'coding', '2021-05-22', 0),
(29, 29, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621676234/lgoutgisze98r9icdu7y.png', 'coding', '2021-05-22', 0),
(30, 30, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621676352/wizqitelenpgphu16ogm.png', 'coding', '2021-05-22', 0),
(31, 31, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621676540/vebmm8kz7syzunpesoee.png', 'coding', '2021-05-22', 0),
(32, 32, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621676703/efpn7edzbmfcq2cuce0j.png', 'coding', '2021-05-22', 0),
(33, 33, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621677014/upqqjanasrrsstsi827n.png', 'coding', '2021-05-22', 0),
(34, 34, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621684074/pbsbxtuhqq5wwzb3y3hx.png', 'coding', '2021-05-22', 0),
(35, 35, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621684841/gwdlkjqcu53ufxz0uzcj.png', 'coding', '2021-05-22', 0),
(36, 36, 0, 11, 'http://res.cloudinary.com/clouddigital/image/upload/v1621685646/oumm6flkttic9txmyeov.png', 'coding', '2021-05-22', 0),
(37, 37, 0, 11, 'null', '', '2021-05-22', 0),
(38, 38, 0, 11, '', '', '2021-05-22', 0),
(39, 39, 0, 11, 'null', 'coding', '2021-05-22', 0),
(40, 40, 0, 11, 'null', 'coding', '2021-05-23', 0),
(41, 41, 0, 11, 'null', 'design', '2021-05-24', 0),
(42, 42, 0, 2, 'null', 'Meet', '2021-06-01', 0),
(43, 43, 0, 2, 'null', 'Meet', '2021-06-01', 0),
(44, 44, 0, 2, 'null', 'Meet', '2021-06-01', 0),
(45, 45, 0, 2, 'null', '1jammu', '2021-06-01', 0),
(46, 46, 0, 2, 'null', '1jamu', '2021-06-01', 0),
(47, 47, 0, 2, 'http://res.cloudinary.com/clouddigital/image/upload/v1624971798/cadwsfmsh24yxjrupttj.pdf', 'Offer Letter_Internship', '2021-06-29', 0),
(48, 48, 0, 2, 'http://res.cloudinary.com/clouddigital/image/upload/v1624971820/jjwpvop7pqjrycarbdwz.png', '1jammu', '2021-06-29', 0),
(49, 15, 0, 2, 'http://res.cloudinary.com/dlfnetokj/image/upload/v1625599161/anerarexkbaupm7hjzzi.pdf', 'DB', '2021-07-06', 0),
(50, 0, 0, 2, 'http://res.cloudinary.com/dlfnetokj/image/upload/v1625648782/tmzqmak1cy4f9zcuz6fc.pdf', 'Process Synchronization', '2021-07-07', 0),
(51, 1, 0, 2, 'http://res.cloudinary.com/dlfnetokj/image/upload/v1629501408/mjflnbipjcaxyvgv3yil.pdf', 'Connect-Internships-Brochure 08/20/2021', '2021-08-20', 0),
(53, 0, 18, 2, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1639438844/xbsi9efahzn5qk5t5kye.pdf', 'sdasd', '2021-12-14', 0),
(54, 0, 0, 2, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1640280636/mhfszfqtqiqox6qjbga2.pdf', 'asasa', '2021-12-23', 2),
(55, 0, 0, 2, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1640280769/kxp47ndexwivjyraqcjw.pdf', 'sasasas', '2021-12-23', 2),
(56, 0, 18, 2, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1640595160/qvabsyp8vgn7s6tnjvb3.pdf', 'erwe', '2021-12-27', 0),
(57, 78, 0, 2, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1641989789/knrqxwcciiamhqvrxujx.jpg', 'first resume', '2022-01-12', 0),
(58, 79, 0, 2, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1642670092/ztn9ucr2rxwrejyllive.pdf', 'fhfgh', '2022-01-20', 0),
(59, 79, 0, 2, 'https://res.cloudinary.com/dlfnetokj/image/upload/v1642682108/ulsvla0wdm72qaatcxcs.pdf', 'Sales prpofile', '2022-01-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service_packages`
--

CREATE TABLE `service_packages` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `site_id` int(255) NOT NULL,
  `category` varchar(111) NOT NULL,
  `service_image` varchar(255) NOT NULL,
  `discount` int(111) NOT NULL,
  `location` varchar(111) NOT NULL,
  `verified` int(111) NOT NULL,
  `m_row_id` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_price` int(11) NOT NULL,
  `deli_qty` int(11) NOT NULL,
  `deli_time` varchar(255) NOT NULL,
  `description` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pack_features` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `faqs` varchar(5000) NOT NULL,
  `no_of_rev` int(11) NOT NULL,
  `created_date` time NOT NULL DEFAULT current_timestamp(),
  `gst` varchar(11) DEFAULT NULL,
  `cod` varchar(11) DEFAULT NULL,
  `more` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `views` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_packages`
--

INSERT INTO `service_packages` (`id`, `vendor_id`, `site_id`, `category`, `service_image`, `discount`, `location`, `verified`, `m_row_id`, `package_name`, `package_price`, `deli_qty`, `deli_time`, `description`, `pack_features`, `faqs`, `no_of_rev`, `created_date`, `gst`, `cod`, `more`, `views`) VALUES
(1, 15, 2, 'Digital Marketing', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636545352/gxgqpqtujwkgawlkhfzj.jpg', 0, '', 0, 1, 'Basic', 1999, 7, 'Day', '1.  Drafting Partnership Deed<br>\r\n\r\n 2. PAN&TAN<br>', '        fgffghfhfh', 'fgfhgh', 4, '16:48:56', '20', NULL, '', 0),
(2, 15, 2, 'Digital Marketing', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636545345/pbjg3msu1qz9eo1uzrwv.jpg', 0, '', 0, 1, 'Standard', 4999, 7, 'Day', ' 1.Drafting Partnership Deed<br>\r\n 2.Deed Registration<br>\r\n 3. PAN & TAN<br>\r\n 4. GST Registration<br>\r\n 5. Trademark Filing<br>\r\n 6. Udyog Aadhaar Registration (MSME)', 'ffhgghjh', 'hgjgj', 7, '16:51:16', NULL, NULL, '', 0),
(3, 0, 3, 'Content Marketing', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636539179/xdtijugw1o9gcmtzpcrt.jpg', 0, '', 0, 2, 'Basic', 1999, 7, 'Day', 'Complete GST registration, preparation of documents, creating login and upload documents, follow upto GSTIN not created.', '   GST Registration with Govt Portal ', '', 4, '16:48:56', '20', NULL, '', 0),
(4, 0, 0, 'Content Marketing', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636539073/ihky20kf4vfcxs0ncmei.jpg', 0, '', 0, 2, 'Standard', 2999, 7, 'Day', ' 1. GST Registration<br>\r\n 2. Class 2 DSC <br>\r\n 3. GST return for one quarter having more than 50 transactions at a time', ' GST Registration\r\n Class 2 DSC\r\n GST return for one quarter\r\n having more than 50 transactions at a time', '', 7, '16:51:16', NULL, NULL, '', 0),
(5, 0, 3, 'Video Making', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636539073/ihky20kf4vfcxs0ncmei.jpg', 0, '', 0, 3, 'Basic', 6999, 7, 'Day', ' 1.2 DPIN <br>\r\n 2. 2 DSC <br>\r\n3. PAN <br>\r\n 4. Name Approval <br>\r\n5.  Drafting of LLP Agreement <br>\r\n 6. Certificate of Incorporation', '  ', '', 4, '16:48:56', '20', NULL, '', 0),
(6, 0, 0, 'Content Creation', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636539073/ihky20kf4vfcxs0ncmei.jpg', 0, '', 0, 3, 'Standard', 7999, 7, 'Day', ' 1. 2 DPIN <br>\r\n 2. 2 DSC <br>\r\n 3. PAN <br>\r\n 4. Name Approval <br>\r\n 5. Drafting of LLP Agreement <br>\r\n 6. Certificate of Incorporation <br>\r\n7.  GST registration <br>\r\n8. MSME Registration', '', 'hgjgj', 7, '16:51:16', NULL, NULL, '', 0),
(7, 0, 0, 'Content Creation', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636539073/ihky20kf4vfcxs0ncmei.jpg', 0, '', 0, 3, 'Premium ', 999, 7, 'Day', ' 1. 2 DPIN <br>\r\n 2. 2 DSC <br>\r\n 3. PAN <br>\r\n 4. Name Approval <br>\r\n 5. Drafting of LLP Agreement <br>\r\n 6. Certificate of Incorporation <br>\r\n7.  GST registration <br>\r\n8. MSME Registration <br>\r\n9. Trademark Filing', '', 'hgjgj', 7, '16:51:16', NULL, NULL, '', 0),
(8, 0, 0, 'Advertisements', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636539073/ihky20kf4vfcxs0ncmei.jpg', 0, '', 0, 10, 'Basic', 999, 7, 'Day', '1. Legal Contract Drafting', '  ', '', 4, '16:48:56', '20', NULL, '', 0),
(67, 0, 0, 'Advertisements', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636539179/xdtijugw1o9gcmtzpcrt.jpg', 0, '', 0, 13, 'Solid Package for 1-5 pages', 499, 3, 'Day', 'A well formatted, legally sound Agreements, Website Policies of 1-5 pages.', '', '', 0, '20:24:54', '', '1', '', 0),
(69, 0, 0, 'Video Making', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636539179/xdtijugw1o9gcmtzpcrt.jpg', 0, '', 0, 14, 'Basic Package', 500, 1, 'Session', 'Will give you Legal Consultation on your legal matters.', '', '', 0, '20:39:15', '', '1', '', 0),
(70, 0, 0, 'Advertisements', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636539179/xdtijugw1o9gcmtzpcrt.jpg', 0, '', 0, 15, 'Basic Package', 1990, 1, 'Day', 'Research, Downloadable Word Report, Legal Opinion (300 words)', '', '', 1, '20:44:50', '', '1', '', 0),
(71, 1, 0, 'Video Making', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636545345/pbjg3msu1qz9eo1uzrwv.jpg', 0, '', 0, 15, 'Standard package', 4990, 2, 'Day', 'Research, Downloadable Word Report, Legal Opinion (300 words)', '', '', 2, '20:44:50', '', '1', '', 0),
(72, 1, 0, 'Video Making', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636545345/pbjg3msu1qz9eo1uzrwv.jpg', 0, '', 0, 39, 'Basic Package', 200, 1, 'Hour', 'Notarization 1 document value Rs 50/- stamp Paper', '', '', 0, '20:54:41', '', '1', '', 0),
(73, 1, 0, 'Video Making', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636545345/pbjg3msu1qz9eo1uzrwv.jpg', 0, '', 0, 16, 'Standard Package', 350, 1, 'Hour', 'Notarization 1 document value Rs 100/- and more', '', '', 0, '20:54:41', '', '1', '', 0),
(74, 1, 0, 'Content Creation', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636545345/pbjg3msu1qz9eo1uzrwv.jpg', 0, '', 0, 17, 'Basic Package', 399, 3, 'Day', 'Logo + letter head + business card', '', '', 2, '20:58:58', '', '1', '', 0),
(75, 1, 0, 'Content Marketing', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636545345/pbjg3msu1qz9eo1uzrwv.jpg', 0, '', 0, 17, 'Standard Package', 1999, 5, 'Day', 'Logo + Business card + Letterhead + Brand book', '', '', 3, '20:58:58', '', '1', '', 0),
(76, 1, 0, 'Content Creation', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636545345/pbjg3msu1qz9eo1uzrwv.jpg', 0, '', 0, 18, 'Basic Package', 3999, 7, 'Day', 'Trademark Search & FIlling', '', '', 0, '22:19:51', '', '1', '', 0),
(79, 1, 0, 'Content Marketing', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636545345/pbjg3msu1qz9eo1uzrwv.jpg', 0, '', 0, 21, 'Standard Package', 1999, 7, 'Day', 'Will be providing 15-20 Leads along with contact info. 01 MATCHING Candidate (Ready to be Interviewed', '', '', 0, '23:23:08', '', '', '', 0),
(80, 1, 2, 'Content Marketing', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1636545352/gxgqpqtujwkgawlkhfzj.jpg', 0, '', 0, 22, 'Standard Package', 2999, 7, 'Day', 'Candidate sourcing, recruitment, virtual assistance, job posting, headhunting', '', '', 0, '00:06:22', '', '1', '', 0),
(117, 0, 2, 'Content Marketing', 'https://books.google.com/googlebooks/about/images/hero_books_2019.png', 10, 'Jammu', 0, 41, '3 Hours  Basic Yoga Training', 1250, 1, 'Day', '\"{\"ops\":[{\"attributes\":{\"background\":\"#ffffff\",\"color\":\"#58595b\"},\"insert\":\"Daily Excelsior - Jammu Edition\"},{\"insert\":\"\\n\"},{\"attributes\":{\"bold\":true},\"insert\":\"Rs 650/20 Words (Text Classified Ad)\"},{\"insert\":\"\\n\"},{\"attributes\":{\"bold\":true},\"insert\":\"Rs 2400/4X4 (Display Classified - Single Column)\"},{\"insert\":\"\\n\"}]}\"', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', 0, '03:20:40', '', '1', '', 0),
(119, 0, 2, 'Business Registration', '', 0, '', 1, 8, 'Private Limited Company Incorporation', 6900, 1, 'Delivery', '\"{\"ops\":[{\"attributes\":{\"bold\":true},\"insert\":\"Documents required for Incorporating a Private Limited Company\"},{\"attributes\":{\"align\":\"center\",\"header\":3},\"insert\":\"\\n\"},{\"insert\":\"Minimum 2 Directors and 2 Shareholders\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"One of the Directors must be Indian Resident\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Directors & Shareholders can be the same person\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Minimum Authorised Share Capital 100,000 (INR One Lac)\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}\"', '\"{\"ops\":[{\"insert\":\"u00a0u00a0DIN for 2 Directors\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Digital Signature Token for 2 Promoters & 1 witness\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Company Name Approval\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"MOA + AOA\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Incorporation Certificate\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"PF + ESIC + Professional Tax Registration\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Customized Incorporation Master File\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Company PAN Card\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Company TAN/TDS Number\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"u00a0Bank Account Opening Document Support\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\\n\"}]}\"', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', 0, '21:39:36', '', '1', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', 0),
(120, 0, 2, 'Human Resource Services', '', 0, '', 0, 23, 'Technical Recruitment', 4999, 0, 'Delivery Per', '\"{\"ops\":[{\"insert\":\"Let us find the best talent including\\nFull Stack Developers\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Translators\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Graphics Designer\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Affiliate Marketers\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Ads Campaign Managers\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Virtual Assistants\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Business Developers\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Technical Recruiters\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Digital Marketing Experts\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"SEO & Content Writers\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"And any other relevant talent\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}\"', '\"{\"ops\":[{\"attributes\":{\"bold\":true},\"insert\":\"What we need?\"},{\"insert\":\"\\nVacant Position Job Description\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Type & Location of Job\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Perks & Benefits associated with the job role\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Number of Positions\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Position Profile of the job role\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"\\nWe will search the relevant candidates via our Internal Database, LinkedIn and other sources.\\n\\n\"},{\"attributes\":{\"bold\":true},\"insert\":\"What you will get:\"},{\"insert\":\"\\nResumes/Profile of 3 - 5 willing & shortlisted candidates\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Prescreening interview info of the candidates (Excel Sheet)\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Profile Link/ PDF\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}\"', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', 0, '21:54:15', '', '1', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', 0),
(121, 0, 2, 'Human Resource Services', '', 0, '', 0, 24, 'Technical Recruitment', 1199, 0, 'Delivery Per', '\"{\"ops\":[{\"insert\":\"Let us find the best talent including\\nFull Stack Developers\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Translators\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Graphics Designer\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Affiliate Marketers\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Ads Campaign Managers\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Virtual Assistants\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Business Developers\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Technical Recruiters\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"Digital Marketing Experts\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"SEO & Content Writers\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"And any other relevant talent\"},{\"attributes\":{\"list\":\"bullet\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}\"', '\"{\"ops\":[{\"attributes\":{\"bold\":true},\"insert\":\"What we need?\"},{\"insert\":\"\\nVacant Position Job Description\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Type & Location of Job\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Perks & Benefits associated with the job role\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Number of Positions\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Position Profile of the job role\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"\\nWe will search the relevant candidates via our Internal Database, LinkedIn and other sources.\\n\\n\"},{\"attributes\":{\"bold\":true},\"insert\":\"What you will get:\"},{\"insert\":\"\\nResumes/Profile of 3 - 5 willing & shortlisted candidates\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Prescreening interview info of the candidates (Excel Sheet)\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"Profile Link/ PDF\"},{\"attributes\":{\"list\":\"ordered\"},\"insert\":\"\\n\"},{\"insert\":\"\\n\"}]}\"', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', 0, '21:54:15', '', '1', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', 0),
(122, 114, 3, 'Licenses & Approvals', '', 0, '', 0, 48, 'basic package', 33, 3, 'Day', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', 0, '05:10:27', '0', '1', '\"{\"ops\":[{\"insert\":\"\\n\"}]}\"', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_details`
--

CREATE TABLE `site_details` (
  `id` int(11) NOT NULL,
  `m_row_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `site_page` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_details`
--

INSERT INTO `site_details` (`id`, `m_row_id`, `category`, `site_page`, `price`, `discount`) VALUES
(3, 6, 'media', 'linkedin', 100, 0),
(4, 4, 'e-commerce', 'marketplace', 150, 5),
(5, 8, 'e-commerce', 'marketplace', 150, 2),
(6, 9, 'e-commerce', 'marketplace', 200, 0),
(7, 10, 'e-commerce', 'marketplace', 120, 10),
(9, 17, 'e-commerce', 'marketplace', 300, 15),
(10, 11, 'e-commerce', 'facebook', 0, 10),
(11, 12, 'e-commerce', 'marketplace', 100, 0),
(25, 13, 'media', 'facebook', 1, 1),
(26, 14, 'job', 'facebook', 12, 12),
(27, 14, 'media', 'twitter', 12, 12),
(28, 15, 'job', 'facebook', 11, 11),
(29, 16, 'e-commerce', 'marketplace', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` varchar(30) NOT NULL,
  `site_id` varchar(30) NOT NULL,
  `site_name` varchar(30) NOT NULL,
  `site_logo` varchar(300) NOT NULL,
  `favicon` varchar(150) NOT NULL,
  `about_site` varchar(3000) NOT NULL,
  `ga_code` varchar(30) NOT NULL,
  `gad_code` varchar(30) NOT NULL,
  `terms` varchar(30) NOT NULL,
  `privacy_policy` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `PIN` int(30) NOT NULL,
  `fb_link` varchar(30) NOT NULL,
  `linkedin_link` varchar(30) NOT NULL,
  `twitter_link` varchar(30) NOT NULL,
  `insta_link` varchar(30) NOT NULL,
  `youtube_link` varchar(30) NOT NULL,
  `seo_keywords` varchar(30) NOT NULL,
  `seo_descrition` varchar(30) NOT NULL,
  `gplus_link` varchar(255) NOT NULL,
  `tag_line` varchar(100) NOT NULL,
  `home` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_id`, `site_name`, `site_logo`, `favicon`, `about_site`, `ga_code`, `gad_code`, `terms`, `privacy_policy`, `state`, `city`, `PIN`, `fb_link`, `linkedin_link`, `twitter_link`, `insta_link`, `youtube_link`, `seo_keywords`, `seo_descrition`, `gplus_link`, `tag_line`, `home`, `address`) VALUES
('1', '1', 'News', 'https://res.cloudinary.com/ayush977/image/upload/v1645688063/g1zlgekouwmlyitsu2qh.jpg', 'https://res.cloudinary.com/ayush977/image/upload/v1646201248/kfx8mb27cmo1nb11swz5.jpg', 'hhhhhh', 'Google code', 'Google code ad', '<p>ssscccc</p>', '<p>ssss</p>', 'MP', 'london', 3331, 'https://www.facebook.com/profi', '', 'ccccc', '', '', 'seo key', 'Media, News', '', 'aseee', 'home1.php', 'cccc');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`id`, `start_date`, `end_date`) VALUES
(1, '2022-03-13 00:00:00', '2022-03-13 02:00:00'),
(2, '2022-03-13 03:00:00', '2022-03-13 05:00:00'),
(3, '2022-03-13 10:00:00', '2022-03-13 11:00:00'),
(4, '2022-03-13 17:00:00', '2022-03-13 18:00:00'),
(5, '2022-03-13 07:00:00', '2022-03-13 09:00:00'),
(6, '2022-03-24 20:00:00', '2022-03-25 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `smtp_config`
--

CREATE TABLE `smtp_config` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `host` text NOT NULL,
  `port` text NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smtp_config`
--

INSERT INTO `smtp_config` (`id`, `site_id`, `username`, `password`, `host`, `port`, `created_date`) VALUES
(1, 2, 'mail@shopkart.gq', 'Mail12*()', 'mail.shopkart.gq', '465', '2022-01-26 15:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `Id` int(11) NOT NULL,
  `Status` text NOT NULL,
  `Summary` text NOT NULL,
  `Type` text NOT NULL,
  `Priority` text NOT NULL,
  `Tags` text NOT NULL,
  `Estimate` text NOT NULL,
  `Assignee` text NOT NULL,
  `RankId` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`Id`, `Status`, `Summary`, `Type`, `Priority`, `Tags`, `Estimate`, `Assignee`, `RankId`) VALUES
(1, 'InProgress', 'InProgress', 'Story', 'Low', 'Analyse,Customer', '3', 'Name', '1'),
(2, 'InProgress', 'Open', 'Story', 'Low', 'Analyse,Customer', '3', 'Name', '1'),
(3, 'Testing', 'Testing', 'Story', 'Low', 'Analyse,Customer', '3', 'Name', '1'),
(4, 'Close', 'Close', 'Story', 'Low', 'Analyse,Customer', '3', 'Name', '1'),
(6, 'Close', 'dsjd hjkdshab jdbsajf djsh', '', '', '', '0', 'Name', '0'),
(7, 'Open', 'dlks akjfdhsk jabdjhsaf ds', '', '', '', '0', 'Name', '0'),
(8, 'Open', 'ksslc haskl hdksa', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL DEFAULT 2,
  `name` text NOT NULL,
  `vendor_type` text DEFAULT NULL,
  `email` text NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `parent_vendor` int(11) DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `user_name` text DEFAULT NULL,
  `google_id` text DEFAULT NULL,
  `fb_id` text DEFAULT NULL,
  `insta_id` text DEFAULT NULL,
  `twitter_id` text DEFAULT NULL,
  `youtube_link` text DEFAULT NULL,
  `linkedin_id` text DEFAULT NULL,
  `website` text DEFAULT NULL,
  `otp_create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `mobile` text DEFAULT NULL,
  `mobile_verified` int(11) DEFAULT NULL,
  `gst` text DEFAULT NULL,
  `gst_verified` int(11) DEFAULT NULL,
  `whatsapp` text DEFAULT NULL,
  `account_name` text DEFAULT NULL,
  `account_number` text DEFAULT NULL,
  `ifsc` text DEFAULT NULL,
  `branch_name` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `pincode` text DEFAULT NULL,
  `pickup_pincode` int(11) DEFAULT NULL,
  `category` text DEFAULT NULL,
  `sub_category` text DEFAULT NULL,
  `profile_pic` text DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `company_logo` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `verified` int(11) DEFAULT NULL,
  `login_status` text DEFAULT NULL,
  `last_online` datetime NOT NULL DEFAULT current_timestamp(),
  `verify_code` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `site_id`, `name`, `vendor_type`, `email`, `otp`, `parent_vendor`, `created_by`, `user_name`, `google_id`, `fb_id`, `insta_id`, `twitter_id`, `youtube_link`, `linkedin_id`, `website`, `otp_create_time`, `mobile`, `mobile_verified`, `gst`, `gst_verified`, `whatsapp`, `account_name`, `account_number`, `ifsc`, `branch_name`, `city`, `state`, `country`, `pincode`, `pickup_pincode`, `category`, `sub_category`, `profile_pic`, `bio`, `company_logo`, `status`, `verified`, `login_status`, `last_online`, `verify_code`, `password`, `created_date`) VALUES
(1, 2, 'Vikas Kumar', '5', 'vkg360.vikas@gmail.com', 499029, NULL, 'SELF', 'vikas', '', '', '', 'magotra19', 'https://www.youtube.com/channel/UCH1POaSwdT0tJswzAvHbKyQ', '', '', '2022-01-27 01:57:57', '9045097609', NULL, NULL, NULL, '9045097609', NULL, NULL, NULL, NULL, 'Agra', 'UP', NULL, '204101', NULL, 'Category', 'Sub-category', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1645951250/tbl2lmzgossuxvnucce7.jpg', 'Sample Bio', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1642999845/aiyzqcvhrooxmvf0iz4a.png', 1, 1, 'LOGOUT', '2022-04-27 18:34:06', '$2y$10$i/x6r5aUxyY0Q4E3iNd.6.e5ZW2CnxYdN5UxczDraFnixBtsJNNUq', '$2y$10$TOoziGkJ9MHJ6J/wHzyf5..HzcmbPCyuCPPAfypNM4ug1p4C2H/sm', '2022-01-25 15:53:05'),
(2, 2, 'for orp 1', '15', 'vikas@gmail.com', 1, 1, 'ORP', 'abc', '32', '43', '43', NULL, '', '34', '43', '2022-02-03 11:20:19', '43', NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, '4', '5', NULL, '6', NULL, '7', '8', '9', 'Sample Bio', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1646910371/xpqvhyjx77vzdtziyzx5.jpg', 1, 1, 'Login', '2022-04-27 18:35:15', '$2y$10$6r4RvlbEp6dUedYADBTP4OlwcQQdnwvitZMaR6VsQmnKOVuEmuN5a', '$2y$10$TOoziGkJ9MHJ6J/wHzyf5..HzcmbPCyuCPPAfypNM4ug1p4C2H/sm', '2022-02-03 11:20:19'),
(3, 2, 'for orp 2', '5', 'kg.1234.king@gmail.com', 1, 1, 'ORP', 'abc', '32', '43', '43', NULL, '', '34', '43', '2022-02-03 11:20:42', '43', NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, 'Hathras', 'UP', NULL, '204101', NULL, '7', '8', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1642914721/sz2qt8gfppnhb6wmzn1k.jpg', 'Sample Bio', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1645284659/acsqyx4zmfakpoetctul.jpg', 1, 1, 'Login', '2022-04-27 20:10:25', '$2y$10$ToKMVIdEhzm4ImzNe3Ep.u4RGSIYlpxlApffgnq1VuAqS01rknS2C', '$2y$10$TOoziGkJ9MHJ6J/wHzyf5..HzcmbPCyuCPPAfypNM4ug1p4C2H/sm', '2022-02-03 11:20:42'),
(38, 2, 'Vikas', '500', 'vkg360.vikas@gmail.com', NULL, NULL, 'SELF', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2022-03-25 17:38:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 'LOGOUT', '2022-04-22 15:54:33', NULL, '$2y$10$JlCWHO9yy/TRDHn1eNw4duhP0SX/9mxJ30oGZynTWuGaqOa3pgzMC', '2022-03-25 17:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_expenses`
--

CREATE TABLE `vendor_expenses` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `expense_title` varchar(255) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `comments` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_expenses`
--

INSERT INTO `vendor_expenses` (`id`, `vendor_id`, `expense_title`, `amount`, `comments`, `created_date`) VALUES
(15, 1, 'Partner_Expenses', 1290, '', '2021-08-22 11:00:38'),
(10, 1, 'Staff_Expenses', 1200, 'done', '2021-08-22 10:42:01'),
(11, 1, 'Team Party', 100, 'other expense', '2022-03-30 13:48:46'),
(13, 1, 'Staff_Expenses', 1200, 'asdfgh', '2021-08-22 10:55:53'),
(14, 1, 'Staff_Expenses', 100, 'lkj', '2021-08-22 10:58:04'),
(16, 1, 'Team Party', 1000, 'last testing', '2022-03-30 13:48:34'),
(17, 1, 'Service_Expenses', 12, 'service', '2021-08-22 11:08:14'),
(18, 1, 'Staff_Expenses', 2, 'sdfgh', '2021-08-22 11:16:50'),
(23, 13, 'Staff_Expenses', 211, 'sdsdas', '2021-10-11 12:23:04'),
(24, 13, 'Staff_Expenses', 100, 'fhg', '2021-10-11 12:23:25'),
(25, 13, 'Other', 333, 'sdsds', '2021-10-11 12:24:10'),
(39, 1, 'Team Party', 1000, 'comments', '2022-03-30 01:47:48'),
(27, 13, 'Partner_Expenses', 100, '', '2021-10-11 12:25:05'),
(28, 13, 'Partner_Expenses', 100, 'q', '2021-10-11 12:25:19'),
(38, 1, 'New Expense', 1200, 'Comment', '2022-03-29 23:53:11'),
(37, 1, 'New Expense', 1200, 'Comment', '2022-03-29 23:51:42'),
(40, 1, 'New Expense', 500, 'kjsdf khsdkjafh kjsdhafjhd jhfjhdsb kd', '2022-03-30 02:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_packages`
--

CREATE TABLE `vendor_packages` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `package_type` varchar(111) DEFAULT NULL,
  `package_description` varchar(111) DEFAULT NULL,
  `package_title` varchar(111) DEFAULT NULL,
  `package_price` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `no_of_posts` int(11) DEFAULT NULL,
  `response_per_post` int(11) DEFAULT NULL,
  `access_to_response` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_packages`
--

INSERT INTO `vendor_packages` (`id`, `site_id`, `vendor_id`, `package_type`, `package_description`, `package_title`, `package_price`, `start_date`, `end_date`, `no_of_posts`, `response_per_post`, `access_to_response`, `status`, `created_date`) VALUES
(1, 2, 1, 'Jobs', 'dcdscdsvcfds                                                ', 'itle1', 500, '2022-04-22 00:00:00', '2022-04-29 00:00:00', 10, 20, 3, 0, '2022-03-21 00:00:00'),
(2, 1, 1, 'Talent Access', '		vjgfhc				', 't2', 500, '2022-03-24 00:00:00', '2022-04-07 00:00:00', 10, 5, 5, 0, '2022-03-21 00:00:00'),
(3, 1, 1, 'e-Commerce', 'erdsw                        ', 't3', 566, '2022-04-08 00:00:00', '2022-04-10 00:00:00', 4, 2, 1, 0, '2022-03-21 00:00:00'),
(4, 2, 1, 'Package Type', 'description                                                                             ', 'Package Name', 100, '2022-04-28 00:00:00', '2022-04-30 00:00:00', 50, 1500, 900, 0, '2022-04-01 00:00:00'),
(5, 2, 1, 'Package Type', '                                            ', 'date test', 1000, '2022-04-29 00:00:00', '2022-04-29 00:00:00', 500, 500, 500, 0, '2022-04-01 00:00:00'),
(6, 2, 1, 'Package Type', '                                            ', 'ds hjkdhdakjs dajhdg', 0, '2022-04-15 00:00:00', '2022-04-29 00:00:00', 500, 500, 500, 0, '2022-04-01 04:00:47'),
(7, 2, 1, 'e-Commerce', '                                                                    ', 'titasldkja kdwajkh', 232, '2022-04-15 00:00:00', '2022-04-22 00:00:00', 500, 500, 500, 0, '2022-04-01 16:03:39'),
(8, 2, 1, 'Talent Access', '                     a,skn dashkj dhwqkuh uk                                               ', 'title', 0, '2022-04-29 00:00:00', '2022-04-20 00:00:00', 500, 500, 500, 0, '2022-04-01 16:37:39'),
(9, 2, 1, 'Jobs', 'jkahd kjah dhwiua giu                                            ', 'jobs package', 1999, '2022-04-01 00:00:00', '2022-04-29 00:00:00', 999999999, 999999999, 999999999, 0, '2022-04-01 16:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_tracker`
--

CREATE TABLE `visitor_tracker` (
  `id` int(11) NOT NULL,
  `site_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `vendor_level` text DEFAULT NULL,
  `visit_count` int(11) NOT NULL DEFAULT 0,
  `url` text NOT NULL,
  `ip_address` text DEFAULT NULL,
  `device` text DEFAULT NULL,
  `longitude` text DEFAULT NULL,
  `latitude` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `pincode` text DEFAULT NULL,
  `browser_and_os` text NOT NULL,
  `last_visited` datetime NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor_tracker`
--

INSERT INTO `visitor_tracker` (`id`, `site_id`, `vendor_id`, `vendor_level`, `visit_count`, `url`, `ip_address`, `device`, `longitude`, `latitude`, `city`, `country`, `pincode`, `browser_and_os`, `last_visited`, `created_date`) VALUES
(14, 2, 0, 'GUEST', 1, 'http://localhost/ideal_village/vendor/product_shop_helper.php', '::1', 'PC', '78.0080745', '27.1766701', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82 Safari/537.36', '2022-03-27 07:11:24', '2022-03-27 07:11:24'),
(15, 2, 0, 'GUEST', 45, 'http://localhost/ideal_village/ideal_village/vendor/product_shop.php', '::1', 'PC', '78.0766036', '27.9079413', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.88 Safari/537.36', '2022-04-19 19:16:54', '2022-03-27 07:25:51'),
(16, 2, 38, 'USER', 3, 'http://localhost/ideal_village/ideal_village/vendor/products.php', '::1', 'PC', '78.0080745', '27.1766701', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82 Safari/537.36', '2022-03-27 07:30:49', '2022-03-27 07:28:17'),
(17, 2, 1, 'ADMIN', 8, 'http://localhost/ideal_village/ideal_village/vendor/product_shop.php', '::1', 'PC', '78.0080745', '27.1766701', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36', '2022-04-01 20:07:50', '2022-03-29 06:07:25'),
(18, 2, 0, 'GUEST', 2, 'http://localhost/ideal_village/ideal_village/vendor/product_shop.php', '::1', 'PC', '77.9843596', '27.2240548', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36 OPR/85.0.4341.47', '2022-04-11 20:06:18', '2022-03-30 03:41:23'),
(19, 2, 0, 'GUEST', 3, 'http://localhost/ideal_village/ideal_village/vendor/product_shop.php', '::1', 'PC', '78.07929729136248', '27.856152489269064', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36', '2022-04-05 15:53:23', '2022-03-30 03:42:36'),
(20, 2, 1, 'VENDOR', 70, 'http://localhost/ideal_village/ideal_village/vendor/product_shop.php', '::1', 'PC', '78.0766036', '27.9079413', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', '2022-04-21 17:56:28', '2022-03-31 07:54:10'),
(21, 2, 38, 'USER', 94, 'http://localhost/ideal_village/ideal_village/vendor/product_shop.php', '::1', 'PC', '78.0766036', '27.9079413', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', '2022-04-22 16:16:31', '2022-04-02 19:09:51'),
(22, 2, 0, 'GUEST', 3, 'http://localhost/ideal_village/ideal_village/vendor/product_shop.php', '::1', 'PC', '78.0763136', '27.885568', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.88 Safari/537.36', '2022-04-19 19:19:58', '2022-04-19 19:17:53'),
(23, 2, 0, 'GUEST', 47, 'http://localhost/ideal_village/ideal_village/vendor/product_shop.php', '::1', 'PC', '78.0766036', '27.9079413', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', '2022-04-23 15:31:27', '2022-04-19 19:25:14'),
(24, 2, 0, 'GUEST', 1, 'http://localhost/ideal_village/ideal_village/vendor/product_shop.php', '::1', 'PC', '78.0107776', '27.181056', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36 OPR/85.0.4341.75', '2022-04-27 20:09:02', '2022-04-27 20:09:02'),
(25, 2, 3, 'VENDOR', 1, 'http://localhost/ideal_village/ideal_village/vendor/product_shop.php', '::1', 'PC', '78.0766036', '27.9079413', '', '', '', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36 OPR/85.0.4341.75', '2022-04-28 16:48:46', '2022-04-28 16:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_transactions`
--

CREATE TABLE `wallet_transactions` (
  `id` int(11) NOT NULL,
  `transact_from` text COLLATE latin1_danish_ci NOT NULL,
  `vendor_id` int(11) DEFAULT 0,
  `nature` varchar(255) COLLATE latin1_danish_ci DEFAULT NULL,
  `type` text COLLATE latin1_danish_ci DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `amount` float DEFAULT NULL,
  `status` varchar(255) COLLATE latin1_danish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE latin1_danish_ci DEFAULT NULL,
  `site_id` int(11) NOT NULL,
  `attachment` text COLLATE latin1_danish_ci DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `wallet_transactions`
--

INSERT INTO `wallet_transactions` (`id`, `transact_from`, `vendor_id`, `nature`, `type`, `date`, `amount`, `status`, `description`, `site_id`, `attachment`, `order_id`) VALUES
(5, 'ebanking', 1, 'CREDIT', NULL, '2022-03-28 15:42:58', 5000, 'COMPLETED', 'TESTING', 2, NULL, NULL),
(6, 'ebanking', 1, 'CREDIT', NULL, '2022-01-31 15:42:59', 5000, 'COMPLETED', 'TESTING', 2, NULL, NULL),
(7, 'ebanking', 1, 'CREDIT', NULL, '2022-01-31 15:42:59', 5000, 'COMPLETED', 'TESTING', 2, NULL, NULL),
(8, 'ebanking', 1, 'CREDIT', NULL, '2022-01-31 15:42:59', 5000, 'COMPLETED', 'TESTING', 2, NULL, NULL),
(9, 'ebanking', 1, 'CREDIT', NULL, '2022-01-31 15:42:59', 5000, 'COMPLETED', 'TESTING', 2, NULL, NULL),
(10, 'ebanking', 1, 'CREDIT', NULL, '2022-01-31 15:42:59', 5000, 'COMPLETED', 'TESTING', 2, NULL, NULL),
(11, 'ebanking', 1, 'CREDIT', NULL, '2022-01-31 15:43:00', 5000, 'COMPLETED', 'TESTING', 2, NULL, NULL),
(12, 'ebanking', 1, 'DEBIT', NULL, '2022-01-31 04:03:46', 5, 'COMPLETED', 'testing deduction', 2, NULL, NULL),
(15, 'ebanking', 1, 'DEBIT', NULL, '2022-01-31 05:58:18', 5, 'COMPLETED', 'testing deduction', 2, NULL, NULL),
(16, 'ebanking', 1, 'DEBIT', NULL, '2022-01-31 05:58:19', 5, 'COMPLETED', 'testing deduction', 2, NULL, NULL),
(17, 'ebanking', 1, 'DEBIT', NULL, '2022-01-31 05:58:20', 5, 'COMPLETED', 'testing deduction', 2, NULL, NULL),
(18, 'ebanking', 1, 'DEBIT', NULL, '2022-01-31 05:58:21', 5, 'COMPLETED', 'testing deduction', 2, NULL, NULL),
(19, 'ebanking', 1, 'DEBIT', NULL, '2022-01-31 05:58:22', 5, 'COMPLETED', 'testing deduction', 2, NULL, NULL),
(20, 'ebanking', 1, 'DEBIT', NULL, '2022-01-31 05:58:23', 5, 'COMPLETED', 'testing deduction', 2, NULL, NULL),
(21, 'ebanking', 1, 'DEBIT', NULL, '2022-01-31 05:58:23', 5, 'COMPLETED', 'testing deduction', 2, NULL, NULL),
(22, 'ebanking', 1, 'DEBIT', NULL, '2022-01-31 05:58:24', 5, 'COMPLETED', 'testing deduction', 2, NULL, NULL),
(23, 'ebanking', 1, 'DEBIT', NULL, '2022-01-31 05:58:24', 5, 'COMPLETED', 'testing deduction', 2, NULL, NULL),
(25, 'ebanking', 1, 'CREDIT', NULL, '2022-01-31 08:22:27', 1000, 'PENDING', 'ahdjshak dhsajk dhsja hdjsah djksa', 0, NULL, NULL),
(26, 'ebanking', 1, 'CREDIT', NULL, '2022-01-31 08:39:58', 0, 'PENDING', '3000', 0, NULL, NULL),
(27, 'ebanking', 1, 'CREDIT', NULL, '2022-01-31 08:40:47', 3000, 'COMPLETED', '3000', 0, NULL, NULL),
(33, 'ebanking', 1, 'REQUEST', NULL, '2022-02-01 03:43:29', 2500, 'FULFILLED', 'hajfds dhsja djsa', 2, NULL, NULL),
(35, 'ebanking', 1, 'DEBIT', NULL, '2022-02-01 03:43:29', 2500, 'COMPLETED', 'Transfered to E-Wallet', 2, NULL, NULL),
(36, 'ebanking', 1, 'REQUEST', NULL, '2022-02-01 03:58:06', 2000, 'FULFILLED', 'transfer to bank', 2, NULL, NULL),
(37, 'ebanking', 1, 'REQUEST', NULL, '2022-02-01 03:59:22', 2000, 'CANCELLED', 'to bank 2', 2, NULL, NULL),
(38, 'ebanking', 1, 'REQUEST', NULL, '2022-02-01 03:59:43', 2001, 'REJECTED', 'transfer to ewallet', 2, NULL, NULL),
(40, 'ebanking', 1, 'DEBIT', NULL, '2022-02-01 03:59:43', 2001, 'COMPLETED', 'Transfered to E-Wallet', 2, NULL, NULL),
(42, 'ebanking', 1, 'DEBIT', NULL, '2022-02-02 04:08:26', 0, 'COMPLETED', 'Deduct to proliferate items', 2, NULL, NULL),
(44, 'ebanking', 1, 'DEBIT', NULL, '2022-02-02 04:25:51', 50, 'COMPLETED', 'Deduct to proliferate items', 2, NULL, NULL),
(46, 'ebanking', 1, 'DEBIT', NULL, '2022-02-02 04:29:13', 0, 'COMPLETED', 'Deduct to proliferate items', 2, NULL, NULL),
(49, 'ebanking', 1, 'DEBIT', NULL, '2022-02-02 07:30:40', 5, 'COMPLETED', 'Deduct to proliferate items', 2, NULL, NULL),
(51, 'ebanking', 1, 'DEBIT', NULL, '2022-02-03 08:40:01', 0, 'COMPLETED', 'Deduct to proliferate items', 2, NULL, NULL),
(55, 'ebanking', 1, 'DEBIT', NULL, '2022-03-08 06:39:10', 300, 'COMPLETED', 'Used to buy items', 2, NULL, NULL),
(57, 'ebanking', 1, 'DEBIT', NULL, '2022-03-09 09:27:22', 0, 'COMPLETED', 'Deduct to proliferate items', 2, NULL, NULL),
(59, 'ebanking', 1, 'DEBIT', NULL, '2022-03-23 07:12:15', 500, 'COMPLETED', 'Used to buy items', 2, NULL, NULL),
(60, 'ebanking', 1, 'CREDIT', NULL, '2022-03-30 05:26:37', 45, 'PENDING', 'sfdlksf lsdlfkdj skfd', 0, NULL, NULL),
(61, 'ebanking', 1, 'CREDIT', NULL, '2022-03-30 05:42:19', 345, 'COMPLETED', 'Adding via admin dashboard', 0, NULL, NULL),
(62, 'ewallet', 1, 'CREDIT', NULL, '2022-03-30 06:00:14', 50000, 'COMPLETED', 'adding 500 rs using dashboard', 0, NULL, NULL),
(63, 'ebanking', 1, 'CREDIT', NULL, '2022-03-30 06:01:00', 6, 'COMPLETED', 'adding Rs 6 using dashboard', 0, NULL, NULL),
(64, 'ebanking', 1, 'CREDIT', NULL, '2022-03-30 06:03:05', 6, 'COMPLETED', 'ajhd kjsahd jwsjhdg sjhagdjs ha', 2, NULL, NULL),
(65, 'ewallet', 1, 'CREDIT', NULL, '2022-03-30 07:16:38', 600, 'COMPLETED', 'skjah dsjkahdkjs hajdgs kjahdjsjag jhdsgjha hdgskjah giuesjf hdsjmfcds', 2, NULL, NULL),
(66, 'ewallet', 1, 'CREDIT', NULL, '2022-03-30 07:40:44', 400, 'COMPLETED', 'kjdsnck dsjkafhcfdjk bajfhbd jhcds', 2, NULL, NULL),
(67, 'ebanking', 1, 'REQUEST', NULL, '2022-03-30 07:41:21', 5000, 'FULFILLED', 'jdsskj chdkjs hkdjshakjfhd kjsafhkjd sfdcs', 2, NULL, NULL),
(68, 'ewallet', 1, 'CREDIT', NULL, '2022-03-30 07:41:21', 5000, 'COMPLETED', 'Received from e-banking wallet', 2, NULL, NULL),
(69, 'ebanking', 1, 'DEBIT', NULL, '2022-03-30 07:41:21', 5000, 'COMPLETED', 'Transfered to E-Wallet', 2, NULL, NULL),
(70, 'EWALLET', 1, 'CREDIT', NULL, '2022-04-03 17:58:38', 333, 'COMPLETED', 'Cashback for buying membership', 2, NULL, NULL),
(71, 'ebanking', 1, 'DEBIT', NULL, '2022-04-22 18:59:37', 5000, 'COMPLETED', '? 5000 -/ has been transfered to your bank account. Transaction ID: 36', 2, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650634227/aziwtatbsji2uojl6hcy.jpg', NULL),
(72, 'ebanking', 1, 'DEBIT', NULL, '2022-04-22 19:04:04', 1000, 'COMPLETED', '? 1000 -/ has been transfered to your bank account. Transaction ID: 37', 2, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650634493/ftkivbhhmcent8y70fnn.jpg', NULL),
(73, 'ebanking', 1, 'DEBIT', NULL, '2022-04-23 15:35:12', 2000, 'COMPLETED', 'Rs 2000 -/ has been transfered to your bank account. Transaction ID: TXN324325', 2, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650708362/nhhynv2clfbogosihrqo.jpg', NULL),
(74, 'ebanking', 1, 'DEBIT', NULL, '2022-04-23 15:36:26', 2000, 'COMPLETED', 'Rs 2000 -/ has been transfered to your bank account. Transaction ID: TXN324325', 2, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650708434/ghafp4ldztfgvgvbnzl1.jpg', NULL),
(75, 'ebanking', 1, 'REQUEST', NULL, '2022-04-23 16:33:25', 5000, 'REJECTED', 'Withdraw 5k', 2, NULL, NULL),
(76, 'ebanking', 1, 'REQUEST', NULL, '2022-04-23 16:44:06', 5000, 'FULFILLED', '5k sklahdkjshakjdhskaj sk', 2, NULL, NULL),
(77, 'ebanking', 1, 'REQUEST', NULL, '2022-04-23 16:46:24', 3000, 'REJECTED', 'abc ksaldkjsah ', 2, NULL, NULL),
(78, 'ebanking', 1, 'DEBIT', NULL, '2022-04-23 17:29:07', 2000, 'COMPLETED', 'Rs 2000 -/ has been transfered to your bank account. Transaction ID: TXN324325', 2, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1650715200/ww1zxexgs1jsadzwlrcl.jpg', NULL),
(79, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:31:06', 36, 'COMPLETED', 'Tip', 2, NULL, NULL),
(80, 'ebanking', 1, 'DEBIT', NULL, '2022-04-27 18:31:06', 36, 'COMPLETED', 'Tip', 2, '', NULL),
(81, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:31:06', 0, 'COMPLETED', 'Donated to Mukesh', 2, NULL, NULL),
(82, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:31:06', 116, 'COMPLETED', 'Donated to Mukesh', 2, NULL, NULL),
(83, 'ebanking', 1, 'DEBIT', NULL, '2022-04-27 18:31:06', 40, 'COMPLETED', 'Donated to Mukesh', 2, '', NULL),
(84, 'ebanking', 1, 'CREDIT', NULL, '2022-04-27 18:31:06', 120, 'COMPLETED', 'Donation received from Vikas Kumar', 2, NULL, 11),
(85, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:36:19', 500, 'COMPLETED', 'Tip', 2, NULL, NULL),
(86, 'ebanking', 1, 'DEBIT', NULL, '2022-04-27 18:36:19', 500, 'COMPLETED', 'Tip', 2, '', NULL),
(87, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:36:19', 0, 'COMPLETED', 'Donated to Mukesh', 2, NULL, NULL),
(88, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:36:19', 116, 'COMPLETED', 'Donated to Mukesh', 2, NULL, NULL),
(89, 'ebanking', 1, 'DEBIT', NULL, '2022-04-27 18:36:19', 2500, 'COMPLETED', 'Donated to Mukesh', 2, '', NULL),
(90, 'ebanking', 2, 'CREDIT', NULL, '2022-04-27 18:36:19', 2000, 'COMPLETED', 'Donation received from Vikas Kumar', 2, NULL, 12),
(91, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:45:02', 150, 'COMPLETED', 'Tip', 2, NULL, NULL),
(92, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:45:02', 100, 'COMPLETED', 'Donated to Mukesh', 2, NULL, NULL),
(93, 'ebanking', 1, 'DEBIT', NULL, '2022-04-27 18:45:02', 100, 'COMPLETED', 'Donated to Mukesh', 2, '', NULL),
(94, 'ebanking', 2, 'CREDIT', NULL, '2022-04-27 18:45:02', 100, 'COMPLETED', 'Donation received from Vikas Kumar', 2, NULL, 13),
(95, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:49:12', 100, 'COMPLETED', 'Tip', 2, NULL, NULL),
(96, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:49:12', 550, 'COMPLETED', 'Donated to Mukesh', 2, NULL, NULL),
(97, 'ebanking', 1, 'DEBIT', NULL, '2022-04-27 18:49:12', 550, 'COMPLETED', 'Donated to Mukesh', 2, '', NULL),
(98, 'ebanking', 2, 'CREDIT', NULL, '2022-04-27 18:49:12', 1100, 'COMPLETED', 'Donation received from Vikas Kumar', 2, NULL, 14),
(99, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:54:50', 60, 'COMPLETED', 'Tip', 2, NULL, NULL),
(100, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:54:50', 0, 'COMPLETED', 'Donated to Mukesh', 2, NULL, NULL),
(101, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 18:54:50', 75, 'COMPLETED', 'Donated to Mukesh', 2, NULL, NULL),
(102, 'ebanking', 1, 'DEBIT', NULL, '2022-04-27 18:54:50', 200, 'COMPLETED', 'Donated to Mukesh', 2, '', NULL),
(103, 'ebanking', 2, 'CREDIT', NULL, '2022-04-27 18:54:50', 1200, 'COMPLETED', 'Donation received from Vikas Kumar', 2, NULL, 15),
(104, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 19:03:58', 10, 'COMPLETED', 'Tip', 2, NULL, NULL),
(105, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 19:03:58', 80, 'COMPLETED', 'Donated to Mukesh', 2, NULL, NULL),
(106, 'ebanking', 1, 'DEBIT', NULL, '2022-04-27 19:03:58', 30, 'COMPLETED', 'Donated to Mukesh', 2, '', NULL),
(107, 'ebanking', 2, 'CREDIT', NULL, '2022-04-27 19:03:58', 100, 'COMPLETED', 'Donation received from Vikas Kumar', 2, NULL, 16),
(108, 'ewallet', 1, 'DEBIT', NULL, '2022-04-27 19:10:31', 120, 'COMPLETED', 'Donated to Mukesh', 2, NULL, NULL),
(109, 'ebanking', 1, 'DEBIT', NULL, '2022-04-27 19:10:31', 100, 'COMPLETED', 'Donated to Mukesh', 2, '', NULL),
(110, 'ebanking', 2, 'CREDIT', NULL, '2022-04-27 19:10:31', 220, 'COMPLETED', 'Donation received from Vikas Kumar', 2, NULL, 17),
(111, 'ebanking', 2, 'CREDIT', NULL, '2022-04-27 20:07:19', 1300, 'COMPLETED', 'Donation received from Vikas Kumar', 2, NULL, 18),
(112, 'ebanking', 3, 'CREDIT', NULL, '2022-04-27 20:07:19', 130, 'COMPLETED', 'Tip given by Vikas Kumar', 2, NULL, 18),
(113, 'ebanking', 2, 'CREDIT', NULL, '2022-04-28 16:46:37', 12, 'COMPLETED', 'Donation received from Anonymous', 2, NULL, 19),
(114, 'ebanking', 3, 'CREDIT', NULL, '2022-04-28 16:46:37', 1, 'COMPLETED', 'Tip given by Anonymous', 2, NULL, 19),
(115, 'ebanking', 2, 'CREDIT', NULL, '2022-04-28 16:52:09', 13, 'COMPLETED', 'Donation received from Anonymous', 2, NULL, 20),
(116, 'ebanking', 3, 'CREDIT', NULL, '2022-04-28 16:52:09', 3, 'COMPLETED', 'Tip given by Anonymous', 2, NULL, 20),
(117, 'ebanking', 2, 'CREDIT', NULL, '2022-04-28 16:56:41', 15, 'COMPLETED', 'Donation received from vikas', 2, NULL, 21),
(118, 'ebanking', 3, 'CREDIT', NULL, '2022-04-28 16:56:41', 2.25, 'COMPLETED', 'Tip given by vikas', 2, NULL, 21),
(119, 'ebanking', 2, 'CREDIT', NULL, '2022-04-28 16:59:21', 50.5, 'COMPLETED', 'Donation received from Anonymous', 2, NULL, 22),
(120, 'ebanking', 3, 'CREDIT', NULL, '2022-04-28 16:59:21', 7.575, 'COMPLETED', 'Tip given by Anonymous', 2, NULL, 22),
(121, 'ebanking', 2, 'CREDIT', NULL, '2022-04-28 19:34:13', 2, 'COMPLETED', 'Donation received from sadsads', 2, NULL, 25),
(122, 'ebanking', 3, 'CREDIT', NULL, '2022-04-28 19:34:13', 0.4, 'COMPLETED', 'Tip given by sadsads', 2, NULL, 25),
(123, 'ebanking', 2, 'CREDIT', NULL, '2022-04-28 20:02:55', 150.75, 'COMPLETED', 'Donation received from Vikas', 2, NULL, 26),
(124, 'ebanking', 3, 'CREDIT', NULL, '2022-04-28 20:02:55', 37.6875, 'COMPLETED', 'Tip given by Vikas', 2, NULL, 26);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_requests`
--

CREATE TABLE `withdraw_requests` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `requested_amount` text NOT NULL,
  `paid_amount` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `last_payment` datetime NOT NULL,
  `requested_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw_requests`
--

INSERT INTO `withdraw_requests` (`id`, `vendor_id`, `site_id`, `transaction_id`, `requested_amount`, `paid_amount`, `description`, `status`, `last_payment`, `requested_date`) VALUES
(1, 1, 2, 33, '2500', '2500', 'hajfds dhsja djsa', 1, '2022-02-01 03:43:29', '2022-02-01 03:43:29'),
(2, 1, 2, 36, '2000', '', 'transfer to bank', -1, '0000-00-00 00:00:00', '2022-02-01 03:58:06'),
(3, 1, 2, 37, '2000', '', 'to bank 2', 3, '0000-00-00 00:00:00', '2022-02-01 03:59:22'),
(4, 1, 2, 38, '2001', '', 'transfer to ewallet', -1, '2022-02-01 03:59:43', '2022-02-01 03:59:43'),
(5, 1, 2, 67, '5000', '5000', 'jdsskj chdkjs hkdjshakjfhd kjsafhkjd sfdcs', 1, '2022-03-30 07:41:21', '2022-03-30 07:41:21'),
(6, 1, 2, 75, '5000', '', 'Withdraw 5k', -1, '0000-00-00 00:00:00', '2022-04-23 16:33:25'),
(7, 1, 2, 76, '5000', '2000', '5k sklahdkjshakjdhskaj sk', 1, '0000-00-00 00:00:00', '2022-04-23 16:44:06'),
(8, 1, 2, 77, '3000', '', 'abc ksaldkjsah ', -1, '0000-00-00 00:00:00', '2022-04-23 16:46:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addon`
--
ALTER TABLE `addon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beneficiary`
--
ALTER TABLE `beneficiary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `btbprice`
--
ALTER TABLE `btbprice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_n_wishlist`
--
ALTER TABLE `cart_n_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashback_rules`
--
ALTER TABLE `cashback_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ewallet`
--
ALTER TABLE `ewallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expectations`
--
ALTER TABLE `expectations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_banner`
--
ALTER TABLE `marketplace_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_banner_helper`
--
ALTER TABLE `marketplace_banner_helper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_business`
--
ALTER TABLE `marketplace_business`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `likes` (`id`);

--
-- Indexes for table `marketplace_charity`
--
ALTER TABLE `marketplace_charity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_destination`
--
ALTER TABLE `marketplace_destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_events`
--
ALTER TABLE `marketplace_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_gigs`
--
ALTER TABLE `marketplace_gigs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_investment`
--
ALTER TABLE `marketplace_investment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_jobs`
--
ALTER TABLE `marketplace_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_products`
--
ALTER TABLE `marketplace_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_professionals`
--
ALTER TABLE `marketplace_professionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_proliferation`
--
ALTER TABLE `marketplace_proliferation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_properties`
--
ALTER TABLE `marketplace_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_seeker`
--
ALTER TABLE `marketplace_seeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketplace_services`
--
ALTER TABLE `marketplace_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_by_seller`
--
ALTER TABLE `order_by_seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_margin`
--
ALTER TABLE `product_margin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_rating`
--
ALTER TABLE `product_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`vendor_id`),
  ADD KEY `productid` (`item_id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proliferate_history`
--
ALTER TABLE `proliferate_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchased_memberships`
--
ALTER TABLE `purchased_memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_draft`
--
ALTER TABLE `save_draft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `save_draft_btbprice`
--
ALTER TABLE `save_draft_btbprice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeker_education`
--
ALTER TABLE `seeker_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeker_experience`
--
ALTER TABLE `seeker_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seeker_resume`
--
ALTER TABLE `seeker_resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_packages`
--
ALTER TABLE `service_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_details`
--
ALTER TABLE `site_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp_config`
--
ALTER TABLE `smtp_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_expenses`
--
ALTER TABLE `vendor_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_packages`
--
ALTER TABLE `vendor_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_tracker`
--
ALTER TABLE `visitor_tracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet_transactions`
--
ALTER TABLE `wallet_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addon`
--
ALTER TABLE `addon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beneficiary`
--
ALTER TABLE `beneficiary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `btbprice`
--
ALTER TABLE `btbprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `cart_n_wishlist`
--
ALTER TABLE `cart_n_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `cashback_rules`
--
ALTER TABLE `cashback_rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ewallet`
--
ALTER TABLE `ewallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `expectations`
--
ALTER TABLE `expectations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `marketplace_banner`
--
ALTER TABLE `marketplace_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `marketplace_banner_helper`
--
ALTER TABLE `marketplace_banner_helper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `marketplace_business`
--
ALTER TABLE `marketplace_business`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `marketplace_charity`
--
ALTER TABLE `marketplace_charity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `marketplace_destination`
--
ALTER TABLE `marketplace_destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `marketplace_events`
--
ALTER TABLE `marketplace_events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `marketplace_gigs`
--
ALTER TABLE `marketplace_gigs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `marketplace_investment`
--
ALTER TABLE `marketplace_investment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `marketplace_jobs`
--
ALTER TABLE `marketplace_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `marketplace_products`
--
ALTER TABLE `marketplace_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `marketplace_professionals`
--
ALTER TABLE `marketplace_professionals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `marketplace_proliferation`
--
ALTER TABLE `marketplace_proliferation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `marketplace_properties`
--
ALTER TABLE `marketplace_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `marketplace_seeker`
--
ALTER TABLE `marketplace_seeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `marketplace_services`
--
ALTER TABLE `marketplace_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `order_by_seller`
--
ALTER TABLE `order_by_seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=554;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=574;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1890;

--
-- AUTO_INCREMENT for table `product_margin`
--
ALTER TABLE `product_margin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_rating`
--
ALTER TABLE `product_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `proliferate_history`
--
ALTER TABLE `proliferate_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `purchased_memberships`
--
ALTER TABLE `purchased_memberships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `save_draft`
--
ALTER TABLE `save_draft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `save_draft_btbprice`
--
ALTER TABLE `save_draft_btbprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seeker_education`
--
ALTER TABLE `seeker_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seeker_experience`
--
ALTER TABLE `seeker_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `seeker_resume`
--
ALTER TABLE `seeker_resume`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `service_packages`
--
ALTER TABLE `service_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `site_details`
--
ALTER TABLE `site_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `smtp_config`
--
ALTER TABLE `smtp_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `vendor_expenses`
--
ALTER TABLE `vendor_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `vendor_packages`
--
ALTER TABLE `vendor_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `visitor_tracker`
--
ALTER TABLE `visitor_tracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wallet_transactions`
--
ALTER TABLE `wallet_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
