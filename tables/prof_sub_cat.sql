-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 03:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideal_village`
--

-- --------------------------------------------------------

--
-- Table structure for table `prof_sub_cat`
--

CREATE TABLE `prof_sub_cat` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `marketplace_id` int(11) NOT NULL,
  `sub_cat_title` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prof_sub_cat`
--

INSERT INTO `prof_sub_cat` (`id`, `site_id`, `marketplace_id`, `sub_cat_title`, `created_date`) VALUES
(1, 2, 23, 'Chartered Accountant', '2022-08-03 18:55:21'),
(2, 2, 23, 'Lawyer', '2022-08-03 18:55:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prof_sub_cat`
--
ALTER TABLE `prof_sub_cat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prof_sub_cat`
--
ALTER TABLE `prof_sub_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
