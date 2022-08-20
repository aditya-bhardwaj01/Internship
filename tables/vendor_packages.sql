-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 10:42 AM
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
-- Table structure for table `vendor_packages`
--

CREATE TABLE `vendor_packages` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `package_type` varchar(111) NOT NULL,
  `package_description` varchar(111) NOT NULL,
  `package_title` varchar(111) NOT NULL,
  `package_price` int(11) NOT NULL,
  `no_of_posts` int(11) NOT NULL,
  `response_per_post` int(11) NOT NULL,
  `access_to_response` int(11) NOT NULL,
  `filter` text NOT NULL,
  `additional_comments` text NOT NULL,
  `no_of_profile` int(11) NOT NULL,
  `downloadable` tinyint(4) NOT NULL DEFAULT 0,
  `validity` int(11) NOT NULL,
  `package_image` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT 5 COMMENT '1 to 10 (default 5)',
  `created_date` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_packages`
--

INSERT INTO `vendor_packages` (`id`, `site_id`, `vendor_id`, `package_type`, `package_description`, `package_title`, `package_price`, `no_of_posts`, `response_per_post`, `access_to_response`, `filter`, `additional_comments`, `no_of_profile`, `downloadable`, `validity`, `package_image`, `status`, `verified`, `priority`, `created_date`) VALUES
(1, 2, 1, '2', 'dcdscdsvcfds                        ', 'Gold Pass', 999, 10, 20, 3, 'skill,location', '', 50, 1, 365, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 6, '2022-03-21'),
(2, 2, 1, '2', '		vjgfhc				', 't2', 500, 10, 5, 5, '', '', 0, 0, 66, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 5, '2022:03:21'),
(3, 2, 1, '5', 'erdsw                        ', 't3', 566, 4, 2, 1, '', '', 0, 0, 99, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 2, '2022:03:21'),
(4, 2, 1, '2', 'nothing to describe , just enjoy						', 'title4', 1000, 500, 300, 280, '', '', 60, 0, 132, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 8, '2022:04:01'),
(5, 2, 1, '5', 'ghgfhgfhfjgf						', 't4', 1000, 500, 0, 500, '', '', 0, 0, 165, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 5, '2022:04:01'),
(6, 2, 1, '16', 'hhbfjbgfbf						', 'title5', 1000, 0, 0, 0, '', '', 0, 0, 198, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 5, '2022:04:01'),
(7, 2, 1, '2', 'aedawfse						', 'title22', 1000, 500, 0, 500, '', '', 0, 0, 231, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 5, '2022:04:01'),
(8, 2, 1, '1', 'fwsfsfffrtyresfsfsfdfs                                                                  ', 'title550', 500, 500, 250, 150, '', '', 0, 0, 264, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 5, '2022:04:01'),
(9, 2, 1, '6', 'best package ever', 'titlejob', 1200, 10, 5, 0, '', '', 0, 0, 30, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 5, '2022-05-10 20:59:07'),
(10, 2, 1, '5', '', 'sfvsvfvfsv', 1400, 0, 0, 0, '', 'safljsnv.jsvnsklvnsdvkdsvsv', 50, 0, 15, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 5, '2022-05-10 22:01:00'),
(11, 2, 1, '2', '', 'sssssss', 1256, 0, 0, 0, 'skills,availability', 'ssssssssssssssssssssssssss', 55, 0, 14, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 5, '2022-05-10 22:03:45'),
(12, 2, 1, '1', 's.mc.kdma,cmdal/cad,vdavdavdav', 'sssssssssss', 1000, 500, 500, 15, '', '', 0, 0, 30, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1652350036/zh2eycyuobhnnjmznqvt.jpg', 1, 1, 5, '2022-05-10 22:06:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendor_packages`
--
ALTER TABLE `vendor_packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendor_packages`
--
ALTER TABLE `vendor_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
