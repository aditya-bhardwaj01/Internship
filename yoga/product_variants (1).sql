-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 10:53 AM
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
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `available` tinyint(4) NOT NULL DEFAULT 1,
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

INSERT INTO `product_variants` (`id`, `site_id`, `product_id`, `available`, `size`, `color`, `fabric`, `age`, `gender`, `measurement`, `package`, `style`, `series`, `unit_per_pack`, `price`, `mrp`, `a_stock`, `s_stock`, `save_type`, `created_date`) VALUES
(60, 2, 21, 1, 'XL', '#ec3232', 'Polyster', '', '', 'Blade/Blades', 'single', 'GYTS', 'GVGJ', '', 799, 999, '0', '4', 'ORG', '2022-04-15 15:55:12'),
(61, 2, 21, 1, 'XL', '#c3bbbb', 'Polyster', '', '', 'Blade/Blades', 'single', 'GYTS', 'GVGJ', '', 749, 999, '0', '10', 'ORG', '2022-04-15 15:55:12'),
(62, 2, 21, 1, 'XL', '#0d0d0d', 'Polyster', '', '', 'Blade/Blades', 'single', 'GYTS', 'GVGJ', '', 899, 999, '10', '3', 'ORG', '2022-04-15 15:55:12'),
(68, 2, 22, 1, '', '#dd4646', '', '', '', '', 'multi', '', '', '3', 1699, 1999, '46', '30', 'ORG', '2022-04-30 18:43:27'),
(69, 2, 22, 1, '', '#f75959', '', '', '', '', 'multi', '', '', '3', 1599, 1999, '38', '30', 'ORG', '2022-04-30 18:43:27'),
(70, 2, 23, 1, 'XL', '#9d1c1c', 'Silk', '', '', 'Gram/Grams', '', '', '', '', 599, 699, '5', '21', 'BTB', '2022-05-03 17:40:07'),
(71, 2, 24, 1, 'XXL', '#000000', 'Woolen', '', '', 'Bag/Bags', '', '', '', '', 21, 65, '55', '656', 'BTB', '2022-05-03 18:02:37'),
(72, 2, 25, 1, 'XL', '#670404', 'Polyster', '', '', '', '', '', '', '', 21, 32, '32', '321', 'BTB', '2022-05-03 18:13:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
