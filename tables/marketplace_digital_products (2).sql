-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 02:41 PM
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
-- Table structure for table `marketplace_digital_products`
--

CREATE TABLE `marketplace_digital_products` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `cat_id` varchar(100) DEFAULT NULL,
  `sub_cat_id` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL COMMENT 'WEBSITE, E-BOOK etc',
  `access_type` varchar(100) DEFAULT NULL COMMENT 'ONLINE, DOWNLOAD, INSTALL',
  `title` varchar(100) NOT NULL,
  `label` varchar(30) DEFAULT NULL COMMENT 'PROMOTED, SPONSORED etc',
  `description` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `banner` text NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `features` text DEFAULT NULL,
  `version` varchar(30) DEFAULT NULL,
  `compatible_browsers` text DEFAULT NULL,
  `documentation` text DEFAULT NULL,
  `license_type` varchar(30) DEFAULT NULL COMMENT 'LIFETIME, YEARLY, MONTHLY, DECADE',
  `views` int(11) NOT NULL DEFAULT 0,
  `last_updated` datetime NOT NULL DEFAULT current_timestamp(),
  `module_ids` varchar(15) NOT NULL COMMENT '1->admin, 2->vendor, 3->user, 4->guest',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace_digital_products`
--

INSERT INTO `marketplace_digital_products` (`id`, `site_id`, `vendor_id`, `marketplace_id`, `cat_id`, `sub_cat_id`, `type`, `access_type`, `title`, `label`, `description`, `tags`, `banner`, `price`, `features`, `version`, `compatible_browsers`, `documentation`, `license_type`, `views`, `last_updated`, `module_ids`, `status`, `verified`, `created_date`) VALUES
(1, 2, 1, 25, NULL, NULL, NULL, NULL, 'Partner Website', NULL, 'Description', NULL, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1655196595/pmb2jmyuldykzrbdeblo.jpg', 999, '', NULL, NULL, NULL, NULL, 0, '2022-07-07 12:51:23', '1,2,3,4', 1, 1, '2022-07-05 13:33:06'),
(2, 2, 1, 25, NULL, NULL, NULL, NULL, 'Partner Website 2', NULL, 'Description', NULL, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1654515583/ogo4e5bda31qtyiv7rcb.jpg', 599, '', NULL, NULL, NULL, NULL, 0, '2022-07-07 12:51:23', '1,2,3,4', 1, 1, '2022-07-05 13:33:40'),
(12, 2, 1, 23, 'Fashion', 'Kids', 'E-BOOK', 'DOWNLOAD', 'Title', NULL, '<p>Description</p>', 'tag,tag2', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1659617819/avs5aycvc6l43vbjig3w.jpg', 999, '<p>features</p>', '2.0', 'Random Browser', '<p>Documentation</p>', 'DECADE', 0, '2022-08-04 18:27:00', '1,2,3,', 1, 1, '2022-08-04 18:26:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marketplace_digital_products`
--
ALTER TABLE `marketplace_digital_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marketplace_digital_products`
--
ALTER TABLE `marketplace_digital_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
