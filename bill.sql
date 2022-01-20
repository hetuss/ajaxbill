-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 09:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bill`
--

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` bigint(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `title`, `email`, `body`, `created_at`, `updated_at`) VALUES
(16, 'sapariya', 'hetu@gmail.com', 8888888888, '2022-01-03 01:41:00', '2022-01-03 01:44:01'),
(17, 'hetuu', '5y5y@gmail.com', 6397865675, '2022-01-03 03:19:46', '2022-01-03 03:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(4, 'browny', '2022-01-03 00:56:57', '2022-01-03 01:04:04'),
(6, 'momos', '2022-01-03 00:57:43', '2022-01-03 01:02:57'),
(7, 'pavbhaji', '2022-01-03 01:02:38', '2022-01-03 01:02:38'),
(8, 'chhole bhature', '2022-01-03 01:02:47', '2022-01-03 01:02:47'),
(9, 'butternan', '2022-01-03 01:05:34', '2022-01-03 01:05:34'),
(10, 'buterr dhosa', '2022-01-03 01:05:51', '2022-01-03 01:05:51'),
(11, 'gulabjamun', '2022-01-03 01:06:04', '2022-01-03 01:06:04'),
(12, 'hetu', '2022-01-03 01:21:39', '2022-01-03 01:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `client` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `product` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `unit_price` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `grandtotal` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `client`, `category`, `product`, `quantity`, `unit_price`, `total`, `price`, `grandtotal`, `created_at`, `updated_at`) VALUES
(6, '2', '4', 'paneer tika', '3', '3', '9', '90', '810', '2021-12-24 22:15:48', '2021-12-25 03:05:45'),
(8, '5', '2', 'dhosa', '2', '4', '8', '90', '720', '2021-12-25 02:41:27', '2021-12-25 02:41:27'),
(9, '5', '1', 'chhat', '4', '3', '12', '80', '960', '2021-12-25 02:41:59', '2021-12-25 02:41:59'),
(10, '4', '1', 'chhole kulcha', '2', '3', '6', '50', '300', '2021-12-25 02:42:45', '2021-12-25 02:42:45'),
(11, '4', '1', 'wwwwww', '5', '5', '25', '50', '1250', '2021-12-25 02:43:04', '2021-12-25 02:43:04'),
(12, '2', '4', 'kabab', '3', '3', '9', '225', '2025', '2021-12-25 02:43:39', '2021-12-25 02:43:39'),
(13, '3', '8', 'icecream', '2', '4', '8', '50', '400', '2021-12-29 02:00:44', '2021-12-29 02:00:44'),
(14, '4', '6', 'rooom', '2', '4', '8', '2', '16', '2021-12-30 01:57:36', '2021-12-30 01:57:36'),
(15, '4', '7', 'wwwwww', '4', '2', '8', '50', '400', '2021-12-30 01:57:51', '2021-12-30 01:57:51'),
(16, '4', '2', 'chhole kulcha', '4', '2', '8', '2', '16', '2021-12-30 01:58:07', '2021-12-30 01:58:07'),
(17, '4', '5', 'hh', '2', '4', '8', '10', '80', '2021-12-30 01:58:26', '2021-12-30 01:58:26'),
(18, '4', '1', 'ww', '2', '4', '8', '20', '160', '2021-12-30 01:58:42', '2021-12-30 01:58:42'),
(19, '4', '7', 'rooom', '3', '3', '9', '2', '18', '2021-12-30 01:58:58', '2021-12-30 01:58:58'),
(20, '4', '6', 'wwwwww', '4', '2', '8', '50', '400', '2021-12-30 01:59:10', '2021-12-30 01:59:10'),
(21, '4', '4', 'icecream', '2', '4', '8', '2', '16', '2021-12-30 02:00:09', '2021-12-30 02:00:09'),
(22, '4', '1', 'icecream', '4', '4', '16', '50', '800', '2021-12-30 02:00:21', '2021-12-30 02:00:21'),
(23, '4', '5', 'rooom', '4', '4', '16', '2', '32', '2021-12-30 02:00:33', '2021-12-30 02:00:33'),
(24, '4', '2', 'icecream', '2', '4', '8', '90', '720', '2021-12-30 02:00:43', '2021-12-30 02:00:43'),
(25, '4', '5', 'icecream', '2', '4', '8', '90', '720', '2021-12-30 02:00:53', '2021-12-30 02:00:53'),
(26, '4', '2', 'ww', '2', '4', '8', '50', '400', '2021-12-30 02:01:03', '2021-12-30 02:01:03'),
(27, '4', '4', 'rooom', '4', '4', '16', '2', '32', '2021-12-30 02:01:14', '2021-12-30 02:01:14'),
(28, '4', '6', 'icecream', '4', '4', '16', '90', '1440', '2021-12-30 02:01:24', '2021-12-30 02:01:24'),
(29, '4', '1', 'icecream', '4', '4', '16', '90', '1440', '2021-12-30 02:01:34', '2021-12-30 02:01:34'),
(30, '4', '2', 'ww', '2', '4', '8', '20.00', '160', '2021-12-30 02:01:42', '2021-12-30 02:01:42'),
(31, '4', '6', 'ww', '4', '2', '8', '2', '16', '2021-12-30 02:02:07', '2021-12-30 02:02:07'),
(32, '4', '4', 'icecream', '2', '4', '8', '55.00', '440', '2021-12-30 02:02:21', '2021-12-30 02:02:21'),
(33, '4', '5', 'ww', '2', '3', '6', '38.00', '228', '2021-12-30 02:02:31', '2021-12-30 02:02:31'),
(34, '4', '7', 'ww', '4', '3', '12', '20.00', '240', '2021-12-30 02:02:41', '2021-12-30 02:02:41'),
(35, '4', '8', 'icecream', '5', '5', '25', '90', '2250', '2021-12-30 02:02:54', '2021-12-30 02:02:54'),
(36, '4', '1', 'icecream', '2', '2', '4', '2', '8', '2021-12-30 03:50:31', '2021-12-30 03:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `profile` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hetu', 'hetu@gmail.com', NULL, '$2y$10$gozIxuPEX3KkqcTFx37JEOpkPQ3bEC0GLOcIZaDL1FhpQ.B0coJye', NULL, '2021-12-21 02:22:27', '2021-12-21 02:22:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bills_email_unique` (`body`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
