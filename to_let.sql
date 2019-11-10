-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2018 at 08:32 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `to_let`
--

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
(1, 'Family house', 'Family house', 1, '2018-02-10 04:41:37', '2018-02-10 04:41:56'),
(2, 'Female Mess', 'Female Mess', 1, '2018-02-10 04:49:00', '2018-02-10 04:49:00'),
(3, 'Shop', 'Shop', 1, '2018-02-10 10:07:08', '2018-02-10 10:07:08'),
(4, 'Bachelor mess', 'Bachelor mess', 1, '2018-02-10 10:08:29', '2018-02-10 10:08:29'),
(5, 'Others', 'Others', 1, '2018-02-10 10:09:30', '2018-02-10 10:09:30');

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
(1, 'Shaikot', 'zahidhassanshaikot@gmail.com', '01985986986', 'nothing to say', '2018-02-14 05:15:07', '2018-02-14 05:15:07');

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
(3, '2018_02_10_102902_create_categories_table', 2),
(4, '2018_02_10_134236_create_to_let_posts_table', 3),
(5, '2018_02_11_214835_create_to_let_users_table', 4),
(6, '2018_02_12_185500_create_post_comment_controllers_table', 5),
(7, '2018_02_12_191127_create_post_comments_table', 6),
(8, '2018_02_13_072123_create_to_let_post_messages_table', 7),
(9, '2018_02_14_110454_create_contact_messages_table', 8);

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
(1, 'is it fixed price ?', 2, '2018-02-12 13:28:06', '2018-02-12 13:28:06'),
(2, 'Is it fixed price ?', 2, '2018-02-12 13:39:55', '2018-02-12 13:39:55'),
(3, 'hi', 1, '2018-02-14 02:57:43', '2018-02-14 02:57:43'),
(4, 'Nice Room', 10, '2018-02-14 11:31:27', '2018-02-14 11:31:27'),
(5, 'wow nice room', 9, '2018-02-14 11:59:44', '2018-02-14 11:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `to_let_posts`
--

CREATE TABLE `to_let_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_let_user_id` int(11) NOT NULL,
  `rent` double(10,2) NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `to_let_posts`
--

INSERT INTO `to_let_posts` (`id`, `category_id`, `location`, `address`, `to_let_user_id`, `rent`, `phone_no`, `email`, `short_description`, `long_description`, `image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dhaka', 'mirpur 1', 0, 1222221.00, '12212', 's@gmail.com', 'tolet-post-image', '<p>tolet-post-imagetolet-post-imagetolet-post-imagetolet-post-imagetolet-post-imagetolet-post-image</p>', 'tolet-post-image/12212.jpg', 1, '2018-02-10 08:13:40', '2018-02-13 16:04:47'),
(2, 4, 'Dhaka', '35-shukrabadh', 0, 2801.00, '01985986986', 'zahidhassanshaikot@gmail.com', 'nice environment', '<p>nice environment&nbsp;nice environment&nbsp;nice environment&nbsp;nice environment&nbsp;nice environment&nbsp;nice environment&nbsp;nice environment&nbsp;</p>', 'tolet-post-image/01985986986.jpg', 1, '2018-02-10 14:48:58', '2018-02-13 16:04:50'),
(3, 1, 'Rajshahi', 'shabeb bazer', 0, 1550.00, '012345677890', 'zahidhassanshaikot@gmail.com', 'nice environment', '<p>nice environment&nbsp;</p>\r\n\r\n<p>1room&nbsp;</p>\r\n\r\n<p>2 set&nbsp;</p>', 'tolet-post-image/012345677890.jpg', 1, '2018-02-12 09:47:13', '2018-02-12 09:48:11'),
(4, 3, 'Dhaka', 'New market', 5, 40000.00, '019859869863', 'zahidhassanshaikot@gmail.com', 'new market 35/D', '<h2>What Are Articles?</h2>\r\n\r\n<p>Articles are words that define a noun as specific or unspecific. Consider the following examples:</p>\r\n\r\n<p>After&nbsp;the&nbsp;long day,&nbsp;the&nbsp;cup of tea tasted particularly good.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By using the article&nbsp;<em>the</em>, we&rsquo;ve shown that it was one specific day that was long and one specific cup of tea that tasted good.</p>\r\n\r\n<p>After&nbsp;a&nbsp;long day,&nbsp;a&nbsp;cup of tea tastes particularly good.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By using the article&nbsp;<em>a</em>, we&rsquo;ve created a general statement, implying that any cup of tea would taste good after any long day.</p>', 'tolet-post-image/019859869863.jpg', 1, '2018-02-12 17:14:14', '2018-02-14 09:55:44'),
(5, 1, 'Dhaka', 'mirpur 11', 5, 2000.00, '01985989186', 'zahid721@diu.edu.bd', 'Nice Room', '<p>discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription</p>\r\n\r\n<p>&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription</p>\r\n\r\n<p>&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription</p>\r\n\r\n<p>&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;</p>\r\n\r\n<p>discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription</p>\r\n\r\n<p>&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription</p>\r\n\r\n<p>&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription</p>\r\n\r\n<p>&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;discription&nbsp;</p>', 'tolet-post-image/01985989186.jpg', 1, '2018-02-14 09:51:35', '2018-02-14 10:03:05'),
(6, 5, 'chittagong', 'banglabanda', 6, 3000.00, '01234557877', 'admin@blogs.com', 'abc abc abc abc abc', '<p>abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;</p>\r\n\r\n<p>abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;</p>\r\n\r\n<p>abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;abc abc abc&nbsp;</p>', 'tolet-post-image/01234557877.jpg', 1, '2018-02-14 10:25:26', '2018-02-14 10:42:15'),
(7, 1, 'Dhaka', 'notun badda', 6, 10000.00, '0912345566', 'mooshiur711@diu.edu.bd', 'nice nice nice nice nice nice nice', '<p>nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;</p>\r\n\r\n<p>nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;</p>\r\n\r\n<p>nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;nice nice nice nice nice nice nice&nbsp;</p>', 'tolet-post-image/0912345566.jpg', 1, '2018-02-14 10:31:18', '2018-02-14 10:40:18'),
(8, 4, 'Dhaka', 'mohmmadpur', 5, 1850.00, '1222113331', 'zahidhassanshaikot@gmail.com', 'aaaa bbb cccaaaa', '<p>aaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb ccc</p>\r\n\r\n<p>aaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb ccc</p>\r\n\r\n<p>aaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb cccaaaa bbb ccc</p>', 'tolet-post-image/1222113331.jpg', 1, '2018-02-14 11:01:30', '2018-02-14 11:09:16'),
(9, 4, 'Dhaka', 'bonani', 7, 2500.00, '1112223334', 'muktadir189@gmail.com', '2 set available', '<p>aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;</p>\r\n\r\n<p>aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;</p>\r\n\r\n<p>aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;aaaa aa aaaa aaaa&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'tolet-post-image/1112223334.jpg', 1, '2018-02-14 11:17:33', '2018-02-14 11:24:31'),
(10, 4, 'Dhaka', 'uttora sec-7 h-345', 7, 3200.00, '01755676765', 'muktadir189@gmail.com', 'hhh hhh hhhh', '<p>hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;</p>\r\n\r\n<p>hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;</p>\r\n\r\n<p>hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;hhh hhh hhhh&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', 'tolet-post-image/01755676765.jpg', 1, '2018-02-14 11:21:25', '2018-02-14 11:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `to_let_post_messages`
--

CREATE TABLE `to_let_post_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `to_let_post_messages`
--

INSERT INTO `to_let_post_messages` (`id`, `name`, `post_id`, `email_address`, `phone_no`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Zahid', 2, 'zahid721@diu.edu.bd', '12345', 'jhgj', '2018-02-13 02:03:31', '2018-02-13 02:03:31'),
(3, 'Zahid Hasan', 10, 'zahidhassanshaikot@gmail.com', '01985986986', 'Is it available for next month?', '2018-02-14 11:31:16', '2018-02-14 11:31:16'),
(4, 'moshiur', 10, 'moshiur711@diu.edu.bd', '017727272772', 'Call Me', '2018-02-14 11:32:24', '2018-02-14 11:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `to_let_users`
--

CREATE TABLE `to_let_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `to_let_users`
--

INSERT INTO `to_let_users` (`id`, `first_name`, `last_name`, `phone_no`, `address`, `email_address`, `password`, `created_at`, `updated_at`) VALUES
(5, 'Zahid Hasan', 'Shaikot', '01985986986', '35-shukrabadh, Dhanmondi-32', 'zahidhassanshaikot@gmail.com', '$2y$10$3cD5kXOXYnM4mdLDzcws8.o6eufE3tdDoig76CDYUL3eB689VIuhm', '2018-02-12 17:10:00', '2018-02-13 14:49:03'),
(6, 'Mohshin', 'Ali', '01713715089', 'Panchbibi,Joypurhat, Rajshahi', 'mohshin89@gmail.com', '$2y$10$ynzx4iuQq8fSUBNKchGRbuoQZatTi8nSmyc9VjP9PCCPRor/E4nRm', '2018-02-13 15:01:10', '2018-02-14 04:43:04'),
(7, 'Muktadir', 'Soyeb', '01738525639', '35-shukrabadh', 'muktadir189@gmail.com', '$2y$10$ZQx7jQ1Zz2sS61NFblqrWeIW9m0pOtKoqScx/lj5plpNji.qc0QxS', '2018-02-14 02:52:39', '2018-02-14 02:52:39');

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
(1, 'Zahid Hasan', 's@gmail.com', '$2y$10$gZOgJkGpmCA8fKjw0xe8QenTJQuELTgdynFm26yMgzmYMIVD08kj.', 'cJrZbnqzzWfXbaTkRz8056iVquV4Vna0xpANS7Uv48nDvw3aiDQHXwKzKs2X', '2018-02-10 00:59:25', '2018-02-10 00:59:25');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to_let_posts`
--
ALTER TABLE `to_let_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to_let_post_messages`
--
ALTER TABLE `to_let_post_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `to_let_users`
--
ALTER TABLE `to_let_users`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `to_let_posts`
--
ALTER TABLE `to_let_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `to_let_post_messages`
--
ALTER TABLE `to_let_post_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `to_let_users`
--
ALTER TABLE `to_let_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
