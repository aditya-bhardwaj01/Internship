-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 02:42 PM
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
-- Table structure for table `site_details`
--

CREATE TABLE `site_details` (
  `id` varchar(30) NOT NULL,
  `site_name` varchar(30) DEFAULT NULL,
  `site_logo` varchar(300) DEFAULT NULL,
  `favicon` varchar(150) DEFAULT NULL,
  `about_site` varchar(3000) DEFAULT NULL,
  `ga_code` varchar(500) DEFAULT NULL,
  `gad_code` varchar(500) DEFAULT NULL,
  `terms` text DEFAULT NULL,
  `privacy_policy` text DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `PIN` varchar(10) DEFAULT NULL,
  `fb_link` varchar(300) DEFAULT NULL,
  `linkedin_link` varchar(300) DEFAULT NULL,
  `twitter_link` varchar(300) DEFAULT NULL,
  `insta_link` varchar(300) DEFAULT NULL,
  `youtube_link` varchar(300) DEFAULT NULL,
  `seo_keywords` varchar(300) DEFAULT NULL,
  `seo_descrition` varchar(300) DEFAULT NULL,
  `gplus_link` varchar(255) DEFAULT NULL,
  `tag_line` varchar(500) DEFAULT NULL,
  `home` varchar(500) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `fb_app` varchar(500) DEFAULT NULL,
  `fb_secret` varchar(500) DEFAULT NULL,
  `twitter_app` varchar(500) DEFAULT NULL,
  `twitter_secret` varchar(500) DEFAULT NULL,
  `linkedin_app` varchar(500) DEFAULT NULL,
  `linkedin_secret` varchar(500) DEFAULT NULL,
  `ftp_host` varchar(500) DEFAULT NULL,
  `ftp_password` varchar(500) DEFAULT NULL,
  `ftp_username` varchar(500) DEFAULT NULL,
  `ftp_port` varchar(500) DEFAULT NULL,
  `trust_level` tinyint(2) DEFAULT 0 COMMENT '	0 -> Everything require approval / 1 -> Basic functions don''t need approval / 2 -> Don''t require approval',
  `price` float NOT NULL DEFAULT 0,
  `discount` float NOT NULL DEFAULT 0,
  `parent_site` int(11) NOT NULL DEFAULT 0,
  `razorpay_key` text DEFAULT NULL,
  `razorpay_secret` text DEFAULT NULL,
  `encryption_method` varchar(500) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_details`
--

INSERT INTO `site_details` (`id`, `site_name`, `site_logo`, `favicon`, `about_site`, `ga_code`, `gad_code`, `terms`, `privacy_policy`, `state`, `city`, `PIN`, `fb_link`, `linkedin_link`, `twitter_link`, `insta_link`, `youtube_link`, `seo_keywords`, `seo_descrition`, `gplus_link`, `tag_line`, `home`, `address`, `fb_app`, `fb_secret`, `twitter_app`, `twitter_secret`, `linkedin_app`, `linkedin_secret`, `ftp_host`, `ftp_password`, `ftp_username`, `ftp_port`, `trust_level`, `price`, `discount`, `parent_site`, `razorpay_key`, `razorpay_secret`, `encryption_method`, `created_date`) VALUES
('2', 'News', 'https://res.cloudinary.com/ayush977/image/upload/v1645688063/g1zlgekouwmlyitsu2qh.jpg', 'https://res.cloudinary.com/ayush977/image/upload/v1646201248/kfx8mb27cmo1nb11swz5.jpg', 'hhhhhh', 'Google code', 'Google code ad', '<p>ssscccc</p>', '<p>ssss</p>', 'MP', 'london', '3331', 'https://www.facebook.com/profi', '', 'ccccc', '', '', 'seo key', 'Media, News', '', 'aseee', 'home1.php', 'cccc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'eDLVqZ61Xhbxha8y/U6QufgaiMoIZ9c=', 'YDLysdKVZjjFvv9K3lqYrvo1/Z0Ya5Px', NULL, '2022-06-16 15:40:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `site_details`
--
ALTER TABLE `site_details`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
