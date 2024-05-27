-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 04:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wire_repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_22_081132_create_works_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('eXMaagWZf7kllIBnJFnSL4nwvZUQY1clLQlvvJep', 9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiMmpkbFpuV3EzenRRVm0yUkpobVlGMEtORnpUaGZpdVFIcXI4WjBocSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9ob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxNToic2VhcmNoLXBhZ2luYXRlIjtiOjA7czoxNzoic2V0LXJvd3MtcGFnaW5hdGUiO2I6MDtzOjc6InN1Y2Nlc3MiO2I6MDtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo5O30=', 1714185320);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `usertype`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'nana', 'nana@nana.com', NULL, '$2y$12$J53hJSGfC7QFBr3zbkTpo.idv55iTD33x6HsTjnJ7JdsUGGmgYb2O', 'admin', NULL, '2024-04-24 23:48:34', '2024-04-25 01:37:19'),
(7, 'asdf', 'asd@asdf.com', NULL, '$2y$12$xC9VHgz2Sc0FiD90N8Xb5.AZEoRiPCY57.CZUUfJNUlUfYMXvMO4W', 'admin', NULL, '2024-04-25 01:26:37', '2024-04-25 01:26:37'),
(8, 'fff', 'fff@ff.com', NULL, '$2y$12$uuGTV/Wx1AReko4ViI3D7uK6jefrbPicx3cHivcf6Re5C90p0kIBq', 'admin', NULL, '2024-04-25 01:27:22', '2024-04-25 01:27:22'),
(9, '', 'admin@exp.com', NULL, '$2y$12$w95TCfp5j5SJRAMefQ1BbO8aapw6AP9OvylUpcxtvD39UQm7x3YTy', 'admin', NULL, '2024-04-25 03:41:08', '2024-04-25 03:41:08'),
(10, 'mon', 'mon@exp.com', NULL, '$2y$12$4GJAzv7HlfRfECvDiY9C9OnxLgsW4D4D.N28b/g3e8nqvLbFGRCdG', 'admin', NULL, '2024-04-25 20:19:36', '2024-04-25 20:19:36');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'ชื่อผู้มาซ่อม',
  `phone` varchar(255) NOT NULL COMMENT 'เบอร์ผู้มาซ่อม',
  `device` varchar(255) NOT NULL COMMENT 'อุปกรณ์ที่นำมาซ่อม',
  `cause` text NOT NULL COMMENT 'สาเหตุที่ต้องการซ่อม',
  `note` text DEFAULT NULL COMMENT 'หมายเหตุ',
  `price` decimal(10,2) NOT NULL COMMENT 'ราคาซ่อม',
  `status` varchar(255) NOT NULL COMMENT 'สถานะการซ่อม',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name`, `phone`, `device`, `cause`, `note`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'name', '0983394483', 'com', 'test', NULL, 200.00, 'new', '2024-04-22 02:21:05', '2024-04-22 02:21:05'),
(2, 'asdf', '0944483384', 'asdf', 'test', NULL, 1.00, 'new', '2024-04-22 02:30:39', '2024-04-22 02:30:39'),
(3, 'asdf', '0944483384', 'asdf', 'test', NULL, 1.00, 'new', '2024-04-22 02:30:59', '2024-04-22 02:30:59'),
(4, 'asdfa', '0944483384', 'sdf', 'test', NULL, 1.00, 'new', '2024-04-22 02:31:15', '2024-04-22 02:31:15'),
(5, 'asdf', '0944483384', 'fa', 'test', NULL, 1.00, 'new', '2024-04-22 02:31:57', '2024-04-22 02:31:57'),
(6, 'asdf', '0944483384', 'asdf', 'test', NULL, 1.00, 'new', '2024-04-22 02:32:17', '2024-04-22 02:32:17'),
(7, 'asdf', '0944483384', 'assdf', 'test', NULL, 1.00, 'new', '2024-04-22 02:36:46', '2024-04-22 02:36:46'),
(8, 'asdf', '0944483384', 'asdf', 'test', NULL, 1.00, 'new', '2024-04-22 02:45:33', '2024-04-22 02:45:33'),
(11, 'asdf', '0944483384', 'asdf', 'test', NULL, 1.00, 'new', '2024-04-22 03:20:55', '2024-04-22 03:20:55'),
(12, 'ฟหกด', '0944483384', 'ฟหกด', 'test', NULL, 1.00, 'new', '2024-04-22 03:22:00', '2024-04-22 03:22:00'),
(13, 'asdf', '0944483384', 'asdf', 'test', NULL, 1.00, 'cancel', '2024-04-22 03:22:16', '2024-04-24 20:50:54'),
(15, 'asdf', '0944483384', 'asdf', 'test', NULL, 1.00, 'success', '2024-04-22 03:25:11', '2024-04-24 20:37:14'),
(18, 'asdf', '0944483384', 'asdf', 'test', NULL, 1.00, 'proceed', '2024-04-22 03:27:49', '2024-04-24 20:34:04'),
(19, 'asdf', '0944483384', 'asdf', 'test', NULL, 1.00, 'success', '2024-04-22 03:27:59', '2024-04-23 01:49:51'),
(25, 'asd', '0944483384', 'asdf', 'test', NULL, 1.00, 'success', '2024-04-22 03:30:42', '2024-04-23 03:10:42'),
(26, 'asdf', '0944483384', 'asdf', 'test', NULL, 1.00, 'proceed', '2024-04-22 03:31:33', '2024-04-23 02:37:31'),
(30, 'asdf', '0944483384', 'asdf', 'test', NULL, 1.00, 'proceed', '2024-04-22 03:32:53', '2024-04-23 01:00:35'),
(37, 'as', '0944483384', 'a', 'test', NULL, 1.00, 'success', '2024-04-23 02:13:28', '2024-04-24 23:00:38'),
(46, 'asdf', '0988848858', 'asdf', 'asdf', NULL, 34.00, 'success', '2024-04-25 01:21:23', '2024-04-25 04:09:50'),
(48, 'asdf', '0988884483', 'asdf', 'asdf', NULL, 34.00, 'cancel', '2024-04-25 01:22:27', '2024-04-25 01:40:52'),
(50, 'test', '0988848857', 'test 555', 'test asdf', NULL, 44.00, 'new', '2024-04-26 18:55:47', '2024-04-26 18:55:47'),
(51, 'ทดสอบ', '0988847763', 'เครื่องกรองน้ำ', 'test\n', NULL, 100.00, 'new', '2024-04-26 18:57:00', '2024-04-26 18:57:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
