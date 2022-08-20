-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 02:17 PM
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
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL DEFAULT 2,
  `name` text NOT NULL,
  `vendor_type` text DEFAULT NULL,
  `email` text NOT NULL,
  `otp` int(11) DEFAULT NULL,
  `parent_vendor` int(11) DEFAULT NULL,
  `created_by` text DEFAULT NULL,
  `user_name` text DEFAULT NULL,
  `google_id` text DEFAULT NULL COMMENT 'login',
  `fb_link` text DEFAULT NULL COMMENT 'profile_link',
  `twitter_link` text DEFAULT NULL COMMENT 'profile_link',
  `linkedin_link` text DEFAULT NULL COMMENT 'profile_link',
  `fb_id` text DEFAULT NULL COMMENT 'login',
  `fb_token` text DEFAULT NULL,
  `insta_id` text DEFAULT NULL COMMENT 'username',
  `linkedin_id` text DEFAULT NULL COMMENT 'login',
  `twitter_id` text DEFAULT NULL COMMENT 'login',
  `youtube_link` text DEFAULT NULL COMMENT 'channel link',
  `website` text DEFAULT NULL COMMENT 'web link',
  `otp_create_time` datetime NOT NULL DEFAULT current_timestamp(),
  `mobile` text DEFAULT NULL,
  `mobile_verified` int(11) DEFAULT NULL,
  `gst` text DEFAULT NULL,
  `gst_verified` int(11) DEFAULT NULL,
  `whatsapp` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `pincode` text DEFAULT NULL,
  `pickup_pincode` int(11) DEFAULT NULL,
  `category` text DEFAULT NULL,
  `sub_category` text DEFAULT NULL,
  `profile_pic` text DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `company_logo` text DEFAULT NULL,
  `status` tinyint(2) DEFAULT -1 COMMENT '-1->password not set,  0->Pending,  1->Active,  2->Suspended,  11->Link Shared',
  `verified` int(11) DEFAULT 0,
  `verify` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 => None      1 => Blue Tick',
  `login_status` text DEFAULT NULL,
  `last_online` datetime NOT NULL DEFAULT current_timestamp(),
  `verify_code` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `affiliate_code` varchar(50) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `cover_photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `site_id`, `name`, `vendor_type`, `email`, `otp`, `parent_vendor`, `created_by`, `user_name`, `google_id`, `fb_link`, `twitter_link`, `linkedin_link`, `fb_id`, `fb_token`, `insta_id`, `linkedin_id`, `twitter_id`, `youtube_link`, `website`, `otp_create_time`, `mobile`, `mobile_verified`, `gst`, `gst_verified`, `whatsapp`, `city`, `state`, `country`, `pincode`, `pickup_pincode`, `category`, `sub_category`, `profile_pic`, `bio`, `company_name`, `company_logo`, `status`, `verified`, `verify`, `login_status`, `last_online`, `verify_code`, `password`, `affiliate_code`, `created_date`, `cover_photo`) VALUES
(1, 2, 'Vikas Kumar', '33', 'vkg360.vikas@gmail.com', 495276, 1, 'VENDOR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 19:30:27', '9090909090', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '33', 'Intern', 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1654517359/yefo7p8xlv6uueydqlfa.jpg', NULL, NULL, 'https://play-lh.googleusercontent.com/ahJtMe0vfOlAu1XJVQ6rcaGrQBgtrEZQefHy7SXB7jpijKhu1Kkox90XDuH8RmcBOXNn', 1, 1, 1, 'LOGOUT', '2022-07-25 19:12:29', '$2y$10$S1usgGfLKEsfhhooNq3g7uOTb8/rv.6hbt7Sp7bmzngwb/hCWBN0K', '$2y$10$TOoziGkJ9MHJ6J/wHzyf5..HzcmbPCyuCPPAfypNM4ug1p4C2H/sm', '771654878422', '2022-06-06 17:39:18', 'https://kodesolution.com/html/2017/health-yoga-html/demo/images/team/2.jpg'),
(2, 2, 'Kaviat Sha', '23', 'ksha330@Gmail.com', -1, NULL, 'SELF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-17 17:59:36', '6005575821', NULL, NULL, NULL, '6005575821', 'Bangalore', 'Karnataka', 'India', '560100', 561001, NULL, NULL, '', 'sdsdadasd', NULL, 'https://bcassetcdn.com/public/blog/wp-content/uploads/2019/07/18094632/arrows-consulting.png', 1, 1, 1, 'Online', '2022-07-17 18:35:16', '$2y$10$zzSetbF0pUOUZrNbmc9mQuLiGTeCK/WzarvtaBPE8EOWl8EE.gdRK', '$2y$10$GZY20C82AkgLHYuVsegqduYnJ5K9bv/BVYmM5qIi5mz6NPCm2cIFq', '71658060365', '2022-07-17 17:49:24', NULL),
(9, 2, 'Mansi Patel', '23', 'ksha330@gmail.com', NULL, 42, 'ADMIN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-24 22:16:48', '606676581', NULL, NULL, NULL, '606676581', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1658701008/o66jvytqtlbt1gkbtefm.jpg', NULL, NULL, 'https://res.cloudinary.com/dza7mzhl1/image/upload/v1658701008/o66jvytqtlbt1gkbtefm.jpg', 1, 1, 1, NULL, '2022-07-24 22:16:48', NULL, NULL, '91658701008', '2022-07-25 03:46:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
