-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 01:57 PM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u797394643_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `marketplace_professionals`
--

CREATE TABLE `marketplace_professionals` (
  `id` int(11) NOT NULL,
  `site_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `professional_type` varchar(50) DEFAULT NULL,
  `sub_cat_id` varchar(50) DEFAULT NULL,
  `designation` varchar(500) NOT NULL,
  `prof_skills` varchar(255) DEFAULT NULL,
  `skills_level` varchar(255) DEFAULT NULL,
  `interests` varchar(500) NOT NULL,
  `year_of_exp` varchar(255) DEFAULT NULL,
  `created_date` date DEFAULT current_timestamp(),
  `views` int(11) DEFAULT NULL,
  `languages_known` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketplace_professionals`
--

INSERT INTO `marketplace_professionals` (`id`, `site_id`, `parent_id`, `vendor_id`, `professional_type`, `sub_cat_id`, `designation`, `prof_skills`, `skills_level`, `interests`, `year_of_exp`, `created_date`, `views`, `languages_known`, `label`) VALUES
(1, 2, 1, 9, '15', 'Legal', '', 'Cyber law, criminal law,civil and family laws', '8,5', '', '4', '2021-11-15', 58, 'Hindi, English,, Kannada', NULL),
(2, 2, 1, 58, '16', 'Finance', '', 'Legal research', '5', '', '4', '2021-11-15', 3, 'Hindi, English', NULL),
(3, 2, 1, 99, '17', 'Finance', '', 'Banking, Financial, security, IPOs', '4', '', '4', '2021-11-15', 2, 'Hindi, English', NULL),
(4, 2, 1, 1, '18', 'Finance', '', 'Legal research,French', '8,9', '', '4', '2021-11-15', 3, 'Hindi, English', NULL),
(5, 2, 1, 1, '19', 'Finance', '', 'Legal research', '8', '', '4', '2021-11-15', 3, 'Hindi, English', NULL),
(6, 2, 1, 1, '20', 'Finance', '', 'Legal research', '8', '', '4', '2021-11-15', 2, 'English', NULL),
(7, 2, 1, 1, '21', 'Finance', '', 'Blogs Writing, Article Writing, Advertisement Content, Technical Writing ', '8', '', '4', '2021-11-15', 2, 'English', NULL),
(8, 2, 1, 1, '22', 'Finance', '', 'Technical writing,\r\n\r\nBlogs & Article writing', '8', '', '4', '2021-11-15', 1, 'Hindi, English, Telgu', NULL),
(11, 2, 1, 1, '25', 'Finance', '', 'Blogs Writing, Article Writing, Advertisement Content, Technical Writing ', '8', '', '4', '2021-11-15', 1, 'English', NULL),
(12, 2, 1, 1, '26', 'Finance', '', 'Legal research', '8', '', '4', '2021-11-15', 8, 'English', NULL),
(13, 2, 1, 1, '27', 'Finance', '', 'Legal research,French', '8,9', '', '4', '2021-11-15', 1, 'Hindi, English', NULL),
(14, 2, 1, 1, '28', 'Finance', '', 'Cyber law, criminal law,civil and family laws', '8,5', '', '4', '2021-11-15', 48, 'Hindi, English,, Kannada', NULL),
(15, 2, 1, 1, '29', 'Finance', '', 'Legal research', '8', '', '4', '2021-11-15', 4, 'English', NULL),
(16, 2, 1, 109, '30', 'Finance', '', 'Blogs Writing, Article Writingdasdas, Advertisementdsds, Content Writing', '8,3.4,5.5,5', '', '4', '2021-11-15', NULL, 'English, Hindi, Kandana', NULL),
(22, 3, 1, 116, '36', '1', '', 'Blogs Writing, Article Writing, Advertisement Content, Technical Writing ', '8', '', '4', '2021-11-15', 3, 'English', NULL),
(24, 3, 1, 118, '38', '1', '', 'Cyber law, criminal law,civil and family laws', '8,5', '', '4', '2021-11-15', 50, 'Hindi, English,, Kannada', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marketplace_professionals`
--
ALTER TABLE `marketplace_professionals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marketplace_professionals`
--
ALTER TABLE `marketplace_professionals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
