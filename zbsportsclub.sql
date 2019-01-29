-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 11:58 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zbsportsclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `sportname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `sportname`, `user_id`, `title`, `body`, `created_at`, `updated_at`, `name`) VALUES
(1, '123456', '123456', 'Soccer on tuesday', 'We are exercising at sports club', '2018-07-13 00:50:00', '2018-07-13 00:50:00', ''),
(2, 'Chess', '123456', 'Chess trnmnt on tuesday', 'Those who want to join chess, please feel free', '2018-07-13 02:12:19', '2018-07-13 02:12:19', ''),
(4, 'Soccer', '123456', 'sfdgsdf', 'efegftert', '2018-07-16 12:17:51', '2018-07-16 12:17:51', ''),
(5, 'Soccer', '123456', 'Webster Moswa', '1234 Takaipa', '2018-07-16 12:28:08', '2018-07-16 12:28:08', 'Webster Moswa');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `by`, `body`, `created_at`, `updated_at`) VALUES
(1, '1', 'Webster', 'kkkkkkkkkkk', '2018-07-13 02:08:16', '2018-07-13 02:08:16'),
(2, '1', 'Webster', 'chanyanya', '2018-07-13 02:08:50', '2018-07-13 02:08:50'),
(3, '2', 'Webster', 'Really', '2018-07-13 02:12:54', '2018-07-13 02:12:54'),
(4, '2', 'Webster', 'kkkkk', '2018-07-14 16:04:34', '2018-07-14 16:04:34'),
(5, '1', 'Webster', 'Waaaat', '2018-07-16 05:19:05', '2018-07-16 05:19:05'),
(6, '4', 'Webster', 'hahaha yeah', '2018-07-16 12:22:42', '2018-07-16 12:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `dependents`
--

CREATE TABLE `dependents` (
  `id` int(10) UNSIGNED NOT NULL,
  `under_employeeid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateofbirth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dependents`
--

INSERT INTO `dependents` (`id`, `under_employeeid`, `club_id`, `name`, `surname`, `dateofbirth`, `gender`, `created_at`, `updated_at`, `phonenumber`) VALUES
(2, '12345', '780909', 'Raphel', 'Phiri', '12/12/12', 'Male', NULL, NULL, '0771405050'),
(3, '123456', '123456', 'Timmy', 'Moswa', '2018-07-10', 'Male', '2018-07-10 05:55:23', '2018-07-10 05:55:23', '0771407147');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2018_07_09_101157_create_sports_table', 2),
(3, '2018_07_10_061856_create_dependents_table', 3),
(4, '2018_07_10_180843_create_roles_table', 4),
(5, '2018_07_10_181333_create_table_user_role', 5),
(6, '2018_07_11_073503_create_table_user_sports', 6),
(7, '2018_07_13_021621_create_blogs_table', 7),
(8, '2018_07_13_022256_create_comments_table', 7),
(9, '2018_07_13_042605_create_sport_supervisor', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`title`, `body`, `id`) VALUES
('Add Title', 'Add Body', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'user', 'A normal user', '2018-07-10 16:50:43', '2018-07-10 16:50:43'),
(2, 'admin', 'An admin', '2018-07-10 16:57:28', '2018-07-10 16:57:28'),
(3, 'hr', 'An HR', '2018-07-10 17:23:51', '2018-07-10 17:23:51'),
(4, 'supervisor', 'A Supervisor', '2018-07-10 17:24:13', '2018-07-10 17:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `name`, `image_url`, `description`, `supervisor`, `created_at`, `updated_at`) VALUES
(1, 'Soccer', 'soc.png.png', 'The best game of champions', NULL, '2018-07-09 11:21:47', '2018-07-09 11:21:47'),
(3, 'Chess', 'downloadx.jpg.jpg', 'The game of the nerds', NULL, '2018-07-09 17:17:37', '2018-07-09 17:17:37'),
(4, 'Netball', 'ChisiBball_web.jpg.jpg', 'Female game', NULL, '2018-07-09 17:18:52', '2018-07-09 17:18:52'),
(7, 'Golf', 'Golf.jpg.jpg', 'Happiness is along walk with a putter', NULL, '2018-07-12 23:54:48', '2018-07-12 23:54:48');

-- --------------------------------------------------------

--
-- Table structure for table `sport_supervisor`
--

CREATE TABLE `sport_supervisor` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sport_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sport_supervisor`
--

INSERT INTO `sport_supervisor` (`id`, `user_id`, `sport_id`) VALUES
(1, '89000', 'Chess'),
(2, '123456', 'Soccer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeeid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int(10) UNSIGNED DEFAULT NULL,
  `updated_by` int(10) UNSIGNED DEFAULT NULL,
  `deleted_by` int(10) UNSIGNED DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `branch`, `employeeid`, `email`, `phonenumber`, `address`, `gender`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `user_type`, `status`) VALUES
(1, 'Webster', 'Moswa', 'Rotten Row', '123456', 'webroy94@gmail.com', '0771407147', '1460 wood', 'Male', '$2y$10$H9ZRBTfVNKuxBVDfLk0jmOLGhep9tsSvtFXqfdv/45IV2qKc60QRK', '8RpCukR13AEot2h4RcFVgLLldrHjLTNttrOu3GFu75gmwaCcbR4CKAhhV0e8', '2018-07-09 08:36:18', '2018-07-09 08:36:18', NULL, 0, 1, NULL, 'admin', NULL),
(2, 'Learnmore', 'Nakwere', 'IS', '5466', 'lnakwere@zb.co.zw', '+263773609829', '183737  Bindura', 'Male', '$2y$10$vf.1Sd1Mck0gikuyAesAz.wuAt4N7vYIAoH5l7nkMLnCZXwE5nNta', NULL, '2018-07-16 06:10:54', '2018-07-16 06:10:54', NULL, 0, 0, NULL, NULL, NULL),
(3, 'Blessing', 'Njekezana', '4144', 'n/a', 'bnjekezana@zb.co.zw', '0777995641', '1747', 'Male', '$2y$10$xWM7TAfflh9W765SmXad4eO6iB4LBmvBbT2SejWl7nBRJ0z57M5PK', NULL, '2018-07-16 06:12:40', '2018-07-16 06:12:40', NULL, 0, 0, NULL, NULL, NULL),
(4, 'Timmy', 'Moswa', 'Rotten Row', '123', 'timmy@zb.co.zw', '0771407147', '1234', 'Male', '$2y$10$JkHtq3D3wMSnZKTP7l5IM.uS14EiSWW4zQAss/BVBOdnAk8f4VWT2', 'kKIHHV2eQHb26Pw6KN6JiqP9TBmxC3GFaVcQIBUPJGph3fUazLzje79F7Nk0', '2018-07-16 06:32:40', '2018-07-16 06:32:40', NULL, 0, 4, NULL, NULL, NULL),
(5, 'Kundai', 'Musindo', 'IS', '5875', 'kmusindo@zb.co.zw', '0772589287', '46 Wessex Rd, Mabelreign', 'Male', '$2y$10$Lm83irGmgjQ2rayIh.ISEOdvZFp2BkXYM0aduevpdzNrkxmv65hUq', NULL, '2018-07-16 07:30:24', '2018-07-16 07:30:24', NULL, 0, 0, NULL, NULL, 'Deducted'),
(6, 'Kwedu', 'Moswa', 'Rotten Row', '9090', 'wmoswa1@zb.co.zw', '0771407147', '1450 Woodlands Park', 'Male', '$2y$10$uv2ZdgOzwQJ4biqdrGZDIuyhRcmD49tUtcT5Td9Kc8y0OPdLA5iwC', 'lDyCislybeJ52cpo7tie8VNkBrL3BghvR79zvIQGj34iFutrrbAu0Zyn71Ok', '2018-07-16 11:42:11', '2018-07-16 11:42:11', NULL, 0, 6, NULL, NULL, 'Deducted'),
(7, 'Life', 'Pirukai', 'Rotten Row', '2323', 'mos@zb.co.zw', '0771407147', '1234 Warren Park', 'Male', '$2y$10$kEHBZ.e9Tf0eCfBP8htfTeBw9DWulWbuqa83yLQWyjtCdv2pVs.zu', '8BwLWn4FjgeedahzZh60qTjQVV1CUQSqS9uBDUuV4RTIpy1OgDCCiZJBcGPy', '2018-07-17 02:39:20', '2018-07-17 02:39:20', NULL, 0, 7, NULL, NULL, 'Deducted'),
(8, 'Tariro', 'Maviyo', 'Natal', '5138', 'tmaviyo@zb.co.zw', '0774079022', '21 Natal Road, Avondale', 'Female', '$2y$10$9IWTBAlR6IZ.hM.VVan0Y.M/LrOiPHowbVmagELFgZUjEi5HoLJR2', 'e0UHUVgi6np2sQFw9gZlE44BbmOtEBwnoKIYma0HCEI2hra2cMln6tQJ6UIF', '2018-07-17 06:00:06', '2018-07-17 06:00:06', NULL, 0, 8, NULL, NULL, 'New'),
(9, 'Simbarashe', 'Kuno', 'Rotten Row', '90', 'simba@g.com', '0771407147', '1234 Warren Park', 'Male', '$2y$10$1bkKbtgGlYFXoRFpMIfCJOsyIkK8woVzDEma8yI9d2hwY1Nt6gWDi', 'SIzvTjxV3tiX6fQlr2TM6CoFD79SS6AWRICbBq3P9sdMI1tDqAGZVHNd1EB6', '2018-07-17 06:06:57', '2018-07-17 06:06:57', NULL, 0, 9, NULL, NULL, 'New'),
(10, 'GEORGINA', 'CHIKOMO', '4110', '1000', 'gchikomo@zb.co.zw', '0772432677', '1443 WATTLE ROAD\r\nWESTGATE\r\nHARARE', 'Female', '$2y$10$BlF.j8Dhu78aWT9MjpytDe59GmtZg46nj1T6T17XMbNgb.RL5UBHm', NULL, '2018-07-17 07:05:45', '2018-07-17 07:05:45', NULL, 0, 0, NULL, NULL, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`) VALUES
(11, '4', '1'),
(12, '4', '2'),
(30, '3', '1'),
(84, '2', '1'),
(85, '2', '4'),
(86, '2', '2'),
(87, '2', '3'),
(92, '6', '1'),
(93, '5', '1'),
(96, '7', '1'),
(106, '8', '1'),
(107, '8', '2'),
(108, '8', '3'),
(112, '1', '1'),
(113, '1', '2'),
(114, '1', '3');

-- --------------------------------------------------------

--
-- Table structure for table `user_sport`
--

CREATE TABLE `user_sport` (
  `id` int(10) UNSIGNED NOT NULL,
  `employeeid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sport_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_sport`
--

INSERT INTO `user_sport` (`id`, `employeeid`, `sport_name`) VALUES
(12, '123456', 'Soccer'),
(13, '123456', 'Chess'),
(14, '123456', 'Netball'),
(15, '123456', 'Tag of war'),
(16, '5466', 'Chess'),
(17, '123456', 'Soccer'),
(18, '123456', 'Tag of war'),
(19, '5138', 'Soccer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dependents`
--
ALTER TABLE `dependents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport_supervisor`
--
ALTER TABLE `sport_supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employeeid` (`employeeid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `users_created_by_index` (`created_by`),
  ADD KEY `users_updated_by_index` (`updated_by`),
  ADD KEY `users_deleted_by_index` (`deleted_by`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sport`
--
ALTER TABLE `user_sport`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dependents`
--
ALTER TABLE `dependents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sport_supervisor`
--
ALTER TABLE `sport_supervisor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `user_sport`
--
ALTER TABLE `user_sport`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
