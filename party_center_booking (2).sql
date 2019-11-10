-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2018 at 05:44 PM
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
-- Database: `party_center_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_room` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` bigint(20) DEFAULT NULL,
  `transection_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `customer_id`, `post_id`, `start_date`, `end_date`, `no_of_room`, `status`, `total_amount`, `transection_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2018-10-10', '2018-10-16', '2', 'Checkout', NULL, NULL, '2018-10-27 08:11:19', '2018-10-27 08:13:46'),
(2, 1, 2, '2018-11-09', '2018-11-10', '11', 'Reject', NULL, NULL, '2018-11-08 23:34:07', '2018-11-08 23:37:31'),
(3, 1, 2, '2018-11-08', '2018-11-28', '2', 'Checkout', NULL, NULL, '2018-11-08 23:37:44', '2018-12-02 10:29:59'),
(4, 1, 2, '2018-11-02', '2018-11-01', '2', 'Accept', 6000, 'ererererer44', '2018-11-12 12:45:40', '2018-11-12 13:17:14'),
(5, 1, 2, '2018-11-02', '2018-11-01', '8', 'Accept', 6000, NULL, '2018-11-12 12:46:25', '2018-11-12 13:17:12'),
(8, 1, 3, '2018-11-14', '2018-11-15', '3', 'Waiting', 10500, NULL, '2018-11-13 13:51:05', '2018-11-13 13:51:05'),
(9, 1, 3, '2018-11-19', '2018-11-20', '2', 'Waiting', 7000, NULL, '2018-11-19 08:04:49', '2018-11-19 08:04:49'),
(10, 1, 3, '2018-11-19', '2018-11-20', '2', 'Waiting', 7000, NULL, '2018-11-19 08:11:33', '2018-11-19 08:11:33'),
(11, 1, 3, '2018-11-22', '2018-11-24', '1', 'Waiting', 7000, '1234fT56789', '2018-11-19 08:32:03', '2018-11-19 09:01:50'),
(13, 1, 2, '2018-12-01', '2018-12-03', '2', 'Waiting', 12000, NULL, '2018-12-02 10:30:17', '2018-12-02 10:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Party Center', 'where you can arrange party', 1, '2018-09-24 13:51:22', '2018-10-07 11:27:07'),
(2, 'Hotel', 'five star', 1, '2018-10-01 10:29:09', '2018-10-01 10:29:09'),
(3, 'Resort', 'Resort', 1, '2018-10-07 11:28:04', '2018-10-07 11:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email_address`, `phone_no`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Shaikot', 's@gmail.com', '01737202311', 'edrfrdff dffdsffds', '2018-09-27 12:12:37', '2018-09-27 12:12:37');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_10_102902_create_categories_table', 1),
(4, '2018_02_12_191127_create_post_comments_table', 1),
(5, '2018_02_14_110454_create_contact_messages_table', 1),
(6, '2018_09_27_181052_create_party_center_booking_users_table', 2),
(7, '2018_09_28_055931_create_post_infos_table', 3),
(9, '2018_10_11_191313_create_bookings_table', 4),
(10, '2018_10_25_185614_entrust_setup_tables', 5);

-- --------------------------------------------------------

--
-- Table structure for table `party_center_booking_users`
--

CREATE TABLE `party_center_booking_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `party_center_booking_users`
--

INSERT INTO `party_center_booking_users` (`id`, `first_name`, `last_name`, `phone_no`, `national_id`, `address`, `email_address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'sS', 'ss', '01737202311', '1234567891', 'dssds hjjhjhjh www', 's@gmail.com', '$2y$10$euhPWG1fDlgRdYgcp1I7oOvsCA9YhdwoeMSRQSZZYxUWnbVEk3H0e', '2018-09-27 13:45:31', '2018-09-27 14:18:46'),
(2, 'Sujon', 'Ahmed', '01737777777', '1234567891', 'Dhanmondi-32', 'e2@gmail.com', '$2y$10$kJnSTHo5PCTQpaDUAJ6FCu5l9x3NrLe4LWbUPRN.pNxJZgnECiVF6', '2018-10-13 10:45:16', '2018-10-13 10:45:16'),
(3, 'kafi', 'Ahmed', '01737777777', '99999999999', 'Dhanmondi-32', 'k@gmail.com', '$2y$10$RZtCKKf5CjbyQfwPcvl0vuN1kB5BFWDHo6M2bmYlWOM1CGt6Tjy62', '2018-10-13 11:23:24', '2018-10-13 11:23:24'),
(4, 'Sujon', 'ss', '01737202311', '1234567891', 'Dhanmondi-32', 'e12@gmail.com', '$2y$10$KxplwohXateF02ndowlYD.rtMY.miM9BoEN5/Yri.gSzZSexwmveK', '2018-11-16 03:26:29', '2018-11-16 03:26:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `comment`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'hi', 1, '2018-10-03 12:19:23', '2018-10-03 12:19:23'),
(2, 'Very Nice Place', 2, '2018-10-07 11:53:31', '2018-10-07 11:53:31'),
(3, 'hi', 3, '2018-11-09 04:19:59', '2018-11-09 04:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `post_infos`
--

CREATE TABLE `post_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rent` int(100) NOT NULL,
  `discount` int(100) DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_room` int(100) NOT NULL,
  `image1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_infos`
--

INSERT INTO `post_infos` (`id`, `name`, `category_id`, `location`, `address`, `rent`, `discount`, `phone_no`, `email`, `short_description`, `long_description`, `available_room`, `image1`, `image2`, `image3`, `image4`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Pubail Socio Cultural Centre', 3, 'Dhaka', 'Demorpara, Gazipur 1721, Bangladesh', 3000, 4, '01737202311', 'sujon@gmail.com', 'Refresh your senses at Pubail Socio Cultural Centre. An inviting five-star retreat with plush rooms', '<p>Refresh your senses at Pan Pacific Sonargaon Dhaka. An inviting five-star retreat with plush rooms and modern amenities, you will feel right at ease in the heart of this busy city.&nbsp;</p>', 12, 'post-images/1538934684_1_.jpg', 'post-images/1538934685_2_.jpg', 'post-images/1538934685_3_.jpg', 'post-images/1538934685_4_.jpg', 1, '2018-10-07 11:51:25', '2018-10-18 23:50:58'),
(3, 'Greentech Resort', 3, 'Dhaka', '31,Segunbagicha, Gazipur 1000, Bangladesh', 3500, NULL, '01737202311', 'soyeb@gmail.com', 'Very good, friendly behavior and environment room neat and clean, Food were very tasty', '<p>Good place to spend a day with family and friends.<br />\r\n<br />\r\nSwimming pool, boating, mini football ground, walking zone, group dining place.<br />\r\n<br />\r\nTake the 300 feet road to reach there.<br />\r\n<br />\r\nThey have day long package including breakfast and lunch.<br />\r\n<br />\r\nIt&#39;s a family day out place.<br />\r\n<br />\r\nPrices are reasonable comparing other resorts in surroundings.&nbsp;</p>', 10, 'post-images/1539196249_1_.jpg', 'post-images/1539196249_2_.jpg', 'post-images/1538935111_3_.jpg', 'post-images/1538935111_4_.jpg', 1, '2018-10-07 11:58:31', '2018-10-18 23:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Super Admin', 'Super Admin', NULL, NULL),
(2, 'Manager', 'Manager', 'Manager', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shaikot', 's@gmail.com', '$2y$10$DOrFioOGwbhWKTHmvkV7..unTEUYLeAde4RpRvL7KAbFG4w5CchqO', 'MTtIqXWJWlQyoY9IoyCfep6CqVSXcdsFVwZkU6ENTfHSFGMMF81RGfHcUdxp', '2018-09-24 13:48:32', '2018-09-24 13:48:32'),
(2, 'mmmm', 'm@gmail.com', '$2y$10$YUpEe0iWKv7rGGx8acW7RuHbyNHs6MXaAxfRvPhSYHsQYzitnycCS', 'I8evoWcOrdooc0mN3SErEozhWeUJQbL6hjUxGyCLglPPgepbHnx4Cyn2kMMZ', '2018-10-25 14:17:42', '2018-10-25 14:17:42'),
(3, 'Zahid', 'z@gmail.com', '$2y$10$C2Vtadd466TWU5zi.11JleAl5/yo1AxRnGqZygXDbDPGIhCTvxWcS', NULL, '2018-10-25 14:29:35', '2018-10-25 14:29:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `party_center_booking_users`
--
ALTER TABLE `party_center_booking_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_infos`
--
ALTER TABLE `post_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `party_center_booking_users`
--
ALTER TABLE `party_center_booking_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_infos`
--
ALTER TABLE `post_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
