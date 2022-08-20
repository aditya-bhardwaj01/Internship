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
-- Table structure for table `marketplace_placements`
--

CREATE TABLE `marketplace_placements` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_mobile` varchar(12) NOT NULL,
  `owner_email` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT '0',
  `address` varchar(1000) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `site_desription` text NOT NULL,
  `site_title` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `open_for` varchar(100) NOT NULL,
  `terms` varchar(100) NOT NULL,
  `suitable_for` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `label` int(11) DEFAULT NULL,
  `verified` int(11) NOT NULL DEFAULT 0,
  `posted_by` varchar(100) NOT NULL,
  `available_for` varchar(100) NOT NULL,
  `views` int(250) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_placements`
--

INSERT INTO `marketplace_placements` (`id`, `site_id`, `vendor_id`, `category`, `user_type`, `owner_name`, `owner_mobile`, `owner_email`, `sub_category`, `type`, `address`, `city`, `state`, `site_desription`, `site_title`, `tags`, `open_for`, `terms`, `suitable_for`, `status`, `label`, `verified`, `posted_by`, `available_for`, `views`, `created_date`) VALUES
(1, 2, 2, 'job', '', 'Sat', '9685', 'sat@sat.com', 'part time', 'job', 'chenni', 'chenni', 'tm', 'hii', 'hlw', '', '', '', '', 1, 0, 1, 'org', '15 days', 3, '2022-04-27 12:12:16'),
(2, 2, 2, '', '', 'Sat', '9685', 'sat@sat.com', 'part time', 'job', 'chenni', 'hyderabad', 'tm', 'hii', 'hlw', '', '', '', '', 1, 0, 1, 'org', '15 days', 0, '2022-04-27 12:12:16'),
(3, 2, 1, 'Nerves', 'Owner', 'bb', 'gfbf', 'fbgfb', 'Dynamic', 'Array', 'fbgb', 'fgbf', 'fgb', 'fgbg', 'bfgf', '', 'Rent', 'gfbgf', 'Products Promotions ,Advertisement,', 0, 0, 0, '', 'Within a Week', 0, '2022-04-27 12:12:16'),
(4, 2, 1, 'Nerves', 'Owner', 'bb', 'gfbf', 'fbgfb', 'Dynamic', 'Array', 'fbgb', 'fgbf', 'fgb', 'fgbg', 'bfgf', '', 'Rent', 'gfbgf', 'Products Promotions ,Advertisement,', 1, 1, 0, '', 'Within a Week', 0, '2022-04-27 12:12:16'),
(12, 2, 1, 'Beverages', 'Agent', '', '', '', 'Men', '', 'vrevrevreve', 'evrev', 'rverver', 'vreevre', '', '', '', 'ewrfer', 'Advertisement,', 0, 0, 0, '', 'Within a Week', 0, '0000-00-00 00:00:00'),
(13, 2, 1, 'null', 'Agent', '', '', '', 'null', '', '', 'dfvdv', '', 'svdfv', '', '', '', 'vwvd', '', 0, 0, 0, '', 'Within a Week', 0, '0000-00-00 00:00:00'),
(15, 1, 1, 'Fashion', 'Owner', 'abcdfds', '06377551076', 'sakshi132899@gmail.com', 'Kids', 'Shop,Mall,', 'III-E-339/340, J.N.V. COLONY', 'fgcbcbc', 'dcdcdsvs', '<p>dsvs svdfvdfvdf</p>', 'dvxcvcbcbg', 'fsvsfvdvd,fdvfdvdf', 'Lease', '<p>jksdnjdew</p>', 'Sales,', 2, 0, 0, 'ADMIN', 'With in 15 Days', 0, '2022-05-03 15:05:36'),
(16, 1, 1, 'Fashion', 'Owner', 'abcdfds', '06377551076', 'sakshi132899@gmail.com', '', 'Shop,Mall,', 'III-E-339/340, J.N.V. COLONY', 'fgcbcbc', 'dcdcdsvs', '<p>dsvs svdfvdfvdf</p>', 'dvxcvcbcbg', 'fsvsfvdvd,fdvfdvdf', 'Lease', '<p>jksdnjdew</p>', 'Sales,', 0, 0, 0, 'ADMIN', 'With in 15 Days', 0, '2022-05-03 15:08:43'),
(17, 1, 1, 'Fashion', 'Owner', 'abcdfds', '06377551076', 'sakshi132899@gmail.com', 'null', 'Shop,Mall,', 'III-E-339/340, J.N.V. COLONY', 'fgcbcbc', 'dcdcdsvs', '<p>dsvs svdfvdfvdf</p>', 'dvxcvcbcbg', 'fsvsfvdvd,fdvfdvdf', 'Lease', '<p>jksdnjdew</p>', 'Sales,', 0, 3, 0, 'ADMIN', 'With in 15 Days', 0, '2022-05-03 15:11:34'),
(18, 1, 1, 'Fashion', 'Agent', '', '', '', 'Kids', 'Mall,Shop-in-Shop,', 'III-E-339/340, J.N.V. COLONY', 'BIKANER', 'Near Vivekanand School', '<p>jhbhjmnbkj,bnkj,</p>', 'aaaaaaaaaa', 'jl,kjnlk,jknlk', 'Rent', '<p>jhbjhbmjmbnjbnm</p>', 'Products Promotions ,Advertisement,', 0, 0, 0, 'ADMIN', 'Immediate', 0, '2022-05-03 17:24:59'),
(19, 1, 1, 'null', '', '', '', '', 'null', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 'ADMIN', '', 0, '2022-05-03 17:30:17'),
(20, 1, 1, 'null', '', '', '', '', 'null', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 'ADMIN', '', 0, '2022-05-03 17:32:26'),
(21, 1, 1, 'null', '', '', '', '', 'null', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 'ADMIN', '', 0, '2022-05-03 17:33:05'),
(22, 1, 1, 'null', '', '', '', '', 'null', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 'ADMIN', '', 0, '2022-05-03 17:33:19'),
(23, 1, 1, 'null', '', '', '', '', 'null', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 'ADMIN', '', 0, '2022-05-03 17:43:27'),
(24, 1, 1, 'null', '', '', '', '', 'null', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 'ADMIN', '', 0, '2022-05-03 17:45:00'),
(25, 1, 1, 'Fashion', 'Agent', '', '', '', 'Men', 'Mall,Shop-in-Shop,', 'svsfvfsvsfvvsfv', 'dsvsfvsfvsfv', 'sdvsfvsdvsfvs', '<p>sdvsvsvsdvsdvsvsfv</p>', 'dscdscdsvsv', 'sdvs,dvsdvs,vdsvsdv,dsv', 'Rent', '', 'Products Promotions ,Advertisement,', 0, 0, 0, 'ADMIN', 'Immediate', 0, '2022-05-04 05:28:49'),
(26, 2, 8, 'sHOP', 'Owner', 'Owner Name', '9090909090', 'khd@bmail.om', 'Shop Wall', 'Shop,', 'adsad', 'asdas', 'asdas', 'dasdas', 'Shop for Product placements', 'dasdas', 'Rent', 'dada', 'Products Promotions ,Advertisement,Sales,All,', 0, NULL, 0, 'VENDOR', 'Immediate', 1, '2022-08-10 21:45:10'),
(27, 2, 8, 'sHOP', 'Owner', 'Owner Name', '9090909090', 'khd@bmail.om', 'Shop Wall', 'Shop,', 'adsad', 'asdas', 'asdas', 'dasdas', 'Shop for Product placements', 'dasdas', 'Rent', 'dada', 'Products Promotions ,Advertisement,Sales,All,', 0, NULL, 0, 'VENDOR', 'Immediate', 1, '2022-08-10 21:45:57'),
(28, 2, 8, 'sHOP', 'Owner', 'Owner Name', '9090909090', 'khd@bmail.om', 'Shop Wall', 'Shop,', 'adsad', 'asdas', 'asdas', 'dasdas', 'Shop for Product placements', 'dasdas', 'Rent', 'dada', 'Products Promotions ,Advertisement,Sales,All,', 0, NULL, 0, 'VENDOR', 'Immediate', 1, '2022-08-10 21:46:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marketplace_placements`
--
ALTER TABLE `marketplace_placements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marketplace_placements`
--
ALTER TABLE `marketplace_placements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
