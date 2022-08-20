-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 02:25 PM
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
-- Table structure for table `marketplace_list`
--

CREATE TABLE `marketplace_list` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `marketplace_name` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace_list`
--

INSERT INTO `marketplace_list` (`id`, `site_id`, `marketplace_name`, `created_date`) VALUES
(1, 2, 'Marketplace Jobs', '2022-07-12 17:21:49'),
(2, 2, 'Marketplace talent', '2022-07-12 17:22:02'),
(3, 2, 'Marketplace destinations ', '2022-07-12 17:22:22'),
(4, 2, 'Marketplace Hotels', '2022-07-12 17:22:36'),
(5, 2, 'Marketplace Products', '2022-07-12 17:22:53'),
(6, 2, 'Marketplace Products b2b', '2022-07-12 17:23:20'),
(7, 2, 'Marketplace Products Bulk', '2022-07-12 17:23:38'),
(8, 2, 'Marketplace restaurants ', '2022-07-12 17:23:56'),
(9, 2, 'Marketplace Logistics  ', '2022-07-12 17:24:09'),
(10, 2, 'Marketplace products placements', '2022-07-12 17:24:29'),
(11, 2, 'Marketplace Colleges', '2022-07-12 17:26:12'),
(12, 2, 'Marketplace Properties', '2022-07-12 17:26:27'),
(13, 2, 'Marketplace Business Opportunities', '2022-07-12 17:27:11'),
(14, 2, 'Marketplace', '2022-07-12 17:28:44'),
(15, 2, 'Marketplace Events', '2022-07-12 17:28:54'),
(16, 2, 'Marketplace Services', '2022-07-12 17:29:07'),
(17, 2, 'Marketplace Charity', '2022-07-12 17:29:18'),
(18, 2, 'Marketplace Investments', '2022-07-12 17:29:29'),
(19, 2, 'Marketplace Gigs', '2022-07-12 17:29:40'),
(20, 2, 'Marketplace Packaging', '2022-07-12 17:29:58'),
(21, 2, 'Marketplace Media/Post', '2022-07-12 17:30:17'),
(22, 2, 'Marketplace Marketing', '2022-07-12 17:30:33'),
(23, 2, 'Marketplace Professionals', '2022-07-12 17:30:42'),
(24, 2, 'Marketplace Yoga', '2022-07-12 17:30:57'),
(25, 2, 'Marketplace Initiatives', '2022-07-12 17:31:11'),
(26, 2, 'Marketplace Partner Sites', '2022-07-12 17:31:30'),
(27, 2, 'Marketplace Digital Products', '2022-07-12 17:31:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marketplace_list`
--
ALTER TABLE `marketplace_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marketplace_list`
--
ALTER TABLE `marketplace_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
