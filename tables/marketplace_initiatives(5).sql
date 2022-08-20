-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 07:01 AM
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
-- Table structure for table `marketplace_initiatives`
--

CREATE TABLE `marketplace_initiatives` (
  `id` int(10) NOT NULL,
  `site_id` int(10) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `marketplaces` varchar(1000) NOT NULL DEFAULT '1',
  `modules` varchar(100) NOT NULL DEFAULT '1,2,3,4',
  `category` text DEFAULT NULL,
  `initiative_type` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `initiative_highlights` text DEFAULT NULL,
  `benefit` text DEFAULT NULL COMMENT 'benefits to partners',
  `tags` text DEFAULT NULL,
  `suitable_for` text DEFAULT NULL,
  `additional_info` text DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `label` varchar(20) DEFAULT NULL,
  `posted_by` text DEFAULT NULL,
  `verified` tinyint(2) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `eligibility_criteria` text DEFAULT NULL,
  `commission_type` varchar(10) DEFAULT NULL COMMENT '% OR FLAT',
  `commission_amount` float NOT NULL DEFAULT 0,
  `commission_paid_on` varchar(20) DEFAULT NULL COMMENT 'DAILY, WEEKLY, MONTHLY, QUARTERLY, HALF_YEARY, ANNUALLY ',
  `start_date` date DEFAULT current_timestamp(),
  `end_date` date DEFAULT current_timestamp(),
  `fee_type` text DEFAULT NULL,
  `paid_fee` float NOT NULL DEFAULT 0,
  `paid_fee_type` text DEFAULT NULL,
  `self_templates` varchar(1000) DEFAULT NULL,
  `assistance_fees` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace_initiatives`
--

INSERT INTO `marketplace_initiatives` (`id`, `site_id`, `vendor_id`, `marketplaces`, `modules`, `category`, `initiative_type`, `title`, `location`, `description`, `initiative_highlights`, `benefit`, `tags`, `suitable_for`, `additional_info`, `status`, `label`, `posted_by`, `verified`, `created_date`, `eligibility_criteria`, `commission_type`, `commission_amount`, `commission_paid_on`, `start_date`, `end_date`, `fee_type`, `paid_fee`, `paid_fee_type`, `self_templates`, `assistance_fees`) VALUES
(13, 2, 3, '1', '1,2,3,4', 'Website', ',Digital Products', 'Initiative Title', 'Location,location2', '<p>Description</p>', '<p>Highlights</p>', '<p>Benefits for partner</p>', 'tags,tags2', ',Village Community,Women Entrepreneurs,General Public', '<p>terms and conditions</p>', 1, '0', 'ADMIN', 1, '2022-06-18 16:52:56', 'Eligibility Criteria', NULL, 0, NULL, '2022-07-01', '2022-06-29', 'Paid', 4999, 'One Time Fee', '1,2,3,4', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marketplace_initiatives`
--
ALTER TABLE `marketplace_initiatives`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marketplace_initiatives`
--
ALTER TABLE `marketplace_initiatives`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
