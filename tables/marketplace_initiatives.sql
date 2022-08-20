-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 07:27 AM
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
-- Table structure for table `marketplace_initiatives`
--

CREATE TABLE `marketplace_initiatives` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `cat_id` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace_initiatives`
--

INSERT INTO `marketplace_initiatives` (`id`, `site_id`, `vendor_id`, `cat_id`, `title`, `type`, `description`, `created_date`, `status`, `verified`) VALUES
(1, 2, 1, 'Fashion', 'T-Shirt', 'Clothes', 'sdfgk ldfhliuf liludfkg jdshfsh lilugsfi idugfigli iugfliu iufhliu ufiugivg ius', '2022-06-08 14:32:05', 1, 1),
(2, 2, 1, 'Technology', 'Iphone', 'Electronics', 'ssifuvh sduhvui sdvg sudv cnviu sfiv idbvh znbkjb', '2022-06-01 14:32:05', 1, 1),
(3, 2, 1, 'Education', 'Tablet', 'Study', 'jhdfkh sdfig sducgig sdgdifvg skdvgsfg sdicgkg iudgcsiuhv sdgldfhv sddfuvh sdgfldufh offvhidgfvf', '2022-05-19 14:37:53', 1, 1),
(4, 2, 1, 'Household', 'Sofa set', 'Accessories', 'jefgilu sfgilul kuygsdkyf skuudygfis sdgsygkfys siudfgliuf', '2022-06-13 15:52:54', 1, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
