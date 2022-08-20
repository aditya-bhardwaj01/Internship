-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 12:41 PM
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
-- Table structure for table `purchased_packages`
--

CREATE TABLE `purchased_packages` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `package_type` text NOT NULL,
  `package_description` text NOT NULL,
  `package_title` text NOT NULL,
  `no_of_posts` int(11) NOT NULL,
  `no_of_profile` int(11) DEFAULT NULL,
  `response_per_post` int(11) NOT NULL,
  `access_to_response` int(11) NOT NULL,
  `filter` text NOT NULL,
  `downloadable` tinyint(4) NOT NULL DEFAULT 0,
  `validity` int(11) NOT NULL,
  `package_image` text DEFAULT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchased_packages`
--

INSERT INTO `purchased_packages` (`id`, `site_id`, `vendor_id`, `order_id`, `package_type`, `package_description`, `package_title`, `no_of_posts`, `no_of_profile`, `response_per_post`, `access_to_response`, `filter`, `downloadable`, `validity`, `package_image`, `created_date`) VALUES
(1, 2, 1, 52, '2', 'dcdscdsvcfds                        ', 'Gold Pass', 530, 86, 500, 60, 'skill,location', 1, 365, NULL, '2022-05-13 13:52:30'),
(2, 2, 2, 52, '2', 'dcdscdsvcfds                        ', 'Gold Pass', 500, 99, 500, 60, 'skill,location', 1, 365, NULL, '2022-05-13 13:52:30'),
(3, 2, 3, 52, '2', 'dcdscdsvcfds                        ', 'Gold Pass', 0, 99, 500, 60, 'skill,location', 1, 365, NULL, '2022-05-13 13:52:30'),
(4, 2, 4, 52, '2', 'dcdscdsvcfds                        ', 'Gold Pass', 0, 99, 500, 60, 'skill,location', 1, 365, NULL, '2022-05-13 13:52:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `purchased_packages`
--
ALTER TABLE `purchased_packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `purchased_packages`
--
ALTER TABLE `purchased_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
