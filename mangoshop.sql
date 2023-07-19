-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 06:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mangoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `email`, `cell`, `product_title`, `product_qty`, `price`, `photo`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(21, 'Khadija Khatun', 'khadija@gmail.com', '01711112233', 'Dell laptop', '1', '180', '1683907171.avif', '6', '3', '2023-05-25 23:33:32', '2023-05-25 23:33:32'),
(22, 'Khadija Khatun', 'khadija@gmail.com', '01711112233', 'Pumkin', '1', '10', '1684472822.jpg', '5', '3', '2023-05-26 00:01:52', '2023-05-26 00:01:52'),
(26, 'Khadija Khatun', 'khadija@gmail.com', '01711112233', 'hp laptop', '1', '211', '1684257785.jpg', '1', '3', '2023-05-26 10:07:05', '2023-05-26 10:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `name`, `email`, `cell`, `address`, `user_id`, `quantity`, `price`, `product_id`, `image`, `payment_status`, `delivery_status`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(10, 'Nayan Islam', 'admin@gmail.com', '01721088933', 'Dhaka', '2', '1', '18', '11', '1685011906.jpg', 'Cash On', 'Canceled by User', 1, 0, '2023-05-29 00:30:29', '2023-06-08 10:42:11'),
(11, 'Nayan Islam', 'khadija@gmail.com', '01721088933', 'Dhaka', '2', '1', '500', '10', '1684865754.jpg', 'Paid', 'Canceled by User', 1, 0, '2023-06-03 06:41:40', '2023-06-09 05:53:32'),
(12, 'Clients', 'softcodnig@gmail.com', '01721088932', 'Dhaka', '4', '2', '422', '1', '1684257785.jpg', 'Cash On', 'Prosseing', 1, 0, '2023-06-04 02:14:02', '2023-06-04 02:14:02'),
(13, 'Nayan Islam', 'admin@gmail.com', '01721088933', 'Dhaka', '2', '1', '18', '11', '1685011906.jpg', 'Cash On', 'Prosseing', 1, 0, '2023-06-26 20:38:08', '2023-06-26 20:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_04_27_010908_create_sessions_table', 1),
(8, '2023_05_09_161613_create_product_cats_table', 2),
(9, '2023_05_10_122108_create_products_table', 3),
(13, '2023_05_19_171920_create_product_product_cat_table', 4),
(14, '2023_05_23_051632_create_carts_table', 5),
(15, '2023_05_27_041330_create_checkouts_table', 6),
(16, '2023_06_05_060159_create_notifications_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `description`, `category`, `quantity`, `price`, `dis_price`, `review`, `image`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(1, 'hp laptop', '', 'fga', NULL, '111', '222', '211', NULL, '1684257785.jpg', 1, 0, '2023-05-12 04:24:43', '2023-05-16 11:23:05'),
(3, 'Mi Note 10', '', '6/128 gb', NULL, '12', '22', '20', NULL, '1683891757.jpg', 1, 0, '2023-05-12 05:42:37', '2023-05-12 05:42:37'),
(5, 'Pumkin', '', 'Fresh pumkin', 'Food', '200', '10', '', NULL, '1684472822.jpg', 1, 0, '2023-05-12 08:52:45', '2023-05-18 23:07:34'),
(6, 'Dell laptop', '', 'Fresh computer', 'Electronic', '2', '200', '180', NULL, '1683907171.avif', 1, 0, '2023-05-12 09:59:31', '2023-05-12 09:59:31'),
(8, 'Jens Pant', '', 'Jens  for Men', 'Fashion', '20', '100', '80', NULL, '1684589388.jpg', 1, 0, '2023-05-20 07:29:48', '2023-05-20 07:29:48'),
(9, 'Pant', '', 'Gaurgious jens for man', 'Fashion', '20', '120', '100', NULL, '1684589487.jpg', 1, 0, '2023-05-20 07:31:27', '2023-05-20 07:31:27'),
(10, 'iphone7', '', 'iphone 7 2gb ram', 'Electronic', '1', '500', NULL, NULL, '1684865754.jpg', 1, 0, '2023-05-23 12:15:54', '2023-05-23 12:15:54'),
(11, 'Mouse', '', 'A4tech mouse', 'Electronic', '12', '20', '18', NULL, '1685011906.jpg', 1, 0, '2023-05-23 12:32:54', '2023-05-25 04:51:46'),
(12, 'Mac Mini', 'mac-mini', 'Best Product for IT person', 'Electronic', '20', '1000', '990', NULL, '1688447782.jpg', 1, 0, '2023-07-03 23:16:22', '2023-07-03 23:16:22'),
(18, 'fdff', 'fdff', 'afa', '9', '1', '22', '11', NULL, '1688660387.jpg', 1, 0, '2023-07-06 10:19:47', '2023-07-06 10:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_cats`
--

CREATE TABLE `product_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_cats`
--

INSERT INTO `product_cats` (`id`, `name`, `slug`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(3, 'Food', 'food', 1, 0, '2023-05-09 23:18:56', '2023-05-09 23:18:56'),
(6, 'Electronic', 'electronic', 1, 0, '2023-05-12 02:55:35', '2023-05-12 02:55:35'),
(7, 'Fashion', 'fashion', 1, 0, '2023-05-12 02:56:27', '2023-05-12 02:56:27'),
(8, 'Vehicle', 'vehicle', 1, 0, '2023-07-03 22:52:09', '2023-07-03 22:52:09'),
(9, 'Toys', 'toys', 1, 0, '2023-07-03 22:52:22', '2023-07-03 22:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_product_cat`
--

CREATE TABLE `product_product_cat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_cat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_product_cat`
--

INSERT INTO `product_product_cat` (`id`, `product_id`, `product_cat_id`, `created_at`, `updated_at`) VALUES
(1, 18, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('RYwXfoDflxDltMQrbnABpLIsFawhUYCwbV79OYqs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWNvbGRNUkZXZGtIZUUzdmVuWkJnWjBtTWRGcWQzeHZFYmt4enR0ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1689049210),
('vd6bRFxqPMCHHE71KQ8uzlGP044HuaRbwEw00t7v', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3BxRlc1SVpNdkc4YnNiY1NwUldOazQwNDB2S2lvMllpZ2FNZjhjYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaW5nbGVwcm9kdWN0LzEyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1689092518);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `google_id`, `cell`, `user_type`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '01711112233', '1', '2023-06-01 06:27:23', '$2y$10$w.09MPzNN0A3gseyg5cgCOUwpRcCBLWTLact4aajvjvDRzKwWa2hK', NULL, NULL, NULL, 'hxwfMNjsWdlQIIJaSVOBZjj8BOA6Pxhsqjk53xZPZuIti1Y3egh3hYZRVjjD', NULL, NULL, '2023-04-26 19:36:20', '2023-04-26 19:36:20'),
(2, 'user', 'user@gmail.com', NULL, '01711998833', '0', '2023-06-02 06:27:56', '$2y$10$Gy6SzBE5YBkhrLpeQZa.duSBTtpSY3WdN./shU44CNadUAsSThydi', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-26 19:38:20', '2023-04-26 19:38:20'),
(3, 'Khadija Khatun', 'khadija@gmail.com', NULL, '01711112233', '0', NULL, '$2y$10$4F/Mvv5IbhY4azVIwlBIEuZ2TqgkduMW0XpmwfMzJKTjYvtOruq4.', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-25 23:29:31', '2023-05-25 23:29:31'),
(6, 'Soft coding', 'softcodnig@gmail.com', '101829676069291506928', NULL, '0', NULL, 'eyJpdiI6IkhRR1NvMWhPU0pVTmZwdEd0NFIxY2c9PSIsInZhbHVlIjoieC9yR3dmK2lsUzM5Ny9TeVRyZnd4YUg4NVgzVEllNjhQaEg1SDBlbjBObz0iLCJtYWMiOiJlZjc4NjkxNDFkM2VhNGFlNjA4NjVjMzExY2UzMWU4MzQ0YTBjMDZmMDk3ZWZkOGYwZWNiOTU2MGU2MzkwMmNmIiwidGFnIjoiIn0=', NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-06 10:34:04', '2023-07-06 10:34:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cats`
--
ALTER TABLE `product_cats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_cats_name_unique` (`name`),
  ADD UNIQUE KEY `product_cats_slug_unique` (`slug`);

--
-- Indexes for table `product_product_cat`
--
ALTER TABLE `product_product_cat`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_cats`
--
ALTER TABLE `product_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_product_cat`
--
ALTER TABLE `product_product_cat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
