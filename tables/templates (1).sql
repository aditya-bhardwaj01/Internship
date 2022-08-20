-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 08:37 AM
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
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `banner` text NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `features` text DEFAULT NULL,
  `module_ids` varchar(15) NOT NULL COMMENT '1->admin, 2->vendor, 3->user, 4->guest',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `site_id`, `vendor_id`, `marketplace_id`, `title`, `description`, `tags`, `banner`, `price`, `features`, `module_ids`, `status`, `created_date`) VALUES
(1, 2, 1, 25, 'Partner Website', 'Description', NULL, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1655196595/pmb2jmyuldykzrbdeblo.jpg', 999, '', '1,2,3,4', 1, '2022-07-05 13:33:06'),
(2, 2, 1, 25, 'Partner Website 2', 'Description', NULL, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1654515583/ogo4e5bda31qtyiv7rcb.jpg', 599, '', '1,2,3,4', 1, '2022-07-05 13:33:40'),
(3, 2, 1, 25, 'Par3333tner Website', 'Description', NULL, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1654272428/z22bevu3def2ikftuxto.png', 1999, '', '1,2,3,4', 1, '2022-07-05 13:33:45'),
(4, 2, 1, 1, 'Partn4444er Website', 'Description', NULL, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1654269067/epjj1xxc34nkabtxqg6a.png', 2999, '', '1,2,3,4', 1, '2022-07-05 13:33:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
