-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 07:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tapas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `heading_banner` text DEFAULT NULL,
  `heading_description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'U',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `heading_banner`, `heading_description`, `image`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Sweat out all those bad vibes.', NULL, '1721934399-6913.jpg', NULL, 'U', '2024-07-25 13:36:39', '2024-07-25 13:36:39'),
(2, 'Don\'t let excuses stop you.', NULL, '1721934416-6765.jpg', NULL, 'U', '2024-07-25 13:36:56', '2024-07-25 13:36:56'),
(3, 'Build strength one day at a time.', NULL, '1721934423-1259.jpg', NULL, 'U', '2024-07-25 13:37:03', '2024-07-25 13:37:03'),
(4, 'A stronger you starts now.', NULL, '1721934436-2660.jpg', NULL, 'U', '2024-07-25 13:37:16', '2024-07-25 13:37:16'),
(5, 'Fitness is a mindset.', NULL, '1721934445-3145.jpg', NULL, 'U', '2024-07-25 13:37:25', '2024-07-25 13:37:25'),
(6, NULL, NULL, '1722667371-2653.jpg', NULL, 'L', '2024-08-03 01:12:51', '2024-08-03 01:12:51'),
(7, NULL, NULL, '1722667377-6276.jpg', NULL, 'L', '2024-08-03 01:12:57', '2024-08-03 01:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `show_at_home` varchar(255) NOT NULL DEFAULT 'N',
  `type` varchar(255) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `post_type` varchar(255) NOT NULL DEFAULT 'P',
  `discount` int(11) DEFAULT NULL,
  `mrp` decimal(12,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `image`, `product_image`, `show_at_home`, `type`, `price`, `stock`, `category_id`, `post_type`, `discount`, `mrp`, `created_at`, `updated_at`) VALUES
(7, 'Skipping Rope', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', '1721936267-2572.jpg', '1722668417-5293.jpg', 'N', 'product', 250.00, 'IS', 1, 'P', NULL, NULL, '2024-07-25 14:07:47', '2024-08-03 01:30:17'),
(8, 'Resistance Band', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', '1721936432-1161.jpg', NULL, 'N', 'product', 550.00, '5', 1, 'P', NULL, NULL, '2024-07-25 14:10:32', '2024-07-25 14:12:30'),
(9, 'Resistance Band', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', '1721936432-1161.jpg', NULL, 'N', 'product', 550.00, '5', 2, 'P', NULL, NULL, '2024-07-25 14:10:32', '2024-07-25 14:12:30'),
(10, 'Resistance Band', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', '1721936432-1161.jpg', NULL, 'N', 'product', 550.00, '5', 3, 'P', NULL, NULL, '2024-07-25 14:10:32', '2024-07-25 14:12:30'),
(11, 'Product 3', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', '1722604744-4587.jpg', NULL, 'N', NULL, 250.00, 'IS', 2, 'P', 10, NULL, '2024-08-02 07:49:04', '2024-08-02 07:49:47'),
(12, 'What is website about ?', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', '1722604823-3271.jpg', NULL, 'N', NULL, NULL, NULL, NULL, 'B', NULL, NULL, '2024-08-02 07:50:23', '2024-08-02 07:50:23'),
(13, 'Product 4', '<p>n publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum m</p>', '1722689507-1647.jpg', '1722689507-4130.jpg', 'N', NULL, 3650.00, 'IS', 1, 'P', NULL, 4000.00, '2024-08-03 07:21:47', '2024-08-04 01:34:45'),
(14, 'Test Blog Page', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is av</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is av</p>', '1722754500-3440.jpg', '1722754500-9552.jpg', 'N', NULL, NULL, NULL, NULL, 'B', NULL, NULL, '2024-08-04 01:25:00', '2024-08-04 01:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_images`
--

INSERT INTO `blog_images` (`id`, `blog_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1720016735-2611.jpg', '2024-07-03 08:55:35', '2024-07-03 08:55:35'),
(2, 1, '1720016737-1775.jpg', '2024-07-03 08:55:37', '2024-07-03 08:55:37'),
(3, 1, '1720016740-8183.jpg', '2024-07-03 08:55:40', '2024-07-03 08:55:40'),
(4, 1, '1720016743-8577.jpg', '2024-07-03 08:55:43', '2024-07-03 08:55:43'),
(5, 1, '1720016750-1237.jpg', '2024-07-03 08:55:50', '2024-07-03 08:55:50'),
(6, 1, '1720016754-5878.jpg', '2024-07-03 08:55:54', '2024-07-03 08:55:54'),
(7, 1, '1720016758-3101.jpg', '2024-07-03 08:55:58', '2024-07-03 08:55:58'),
(8, 2, '1720016917-9177.jpg', '2024-07-03 08:58:37', '2024-07-03 08:58:37'),
(9, 2, '1720016920-7150.jpg', '2024-07-03 08:58:40', '2024-07-03 08:58:40'),
(10, 2, '1720016923-3819.jpg', '2024-07-03 08:58:43', '2024-07-03 08:58:43'),
(11, 2, '1720016926-6898.jpg', '2024-07-03 08:58:46', '2024-07-03 08:58:46'),
(12, 2, '1720016929-9482.jpg', '2024-07-03 08:58:49', '2024-07-03 08:58:49'),
(13, 2, '1720016932-9978.jpg', '2024-07-03 08:58:52', '2024-07-03 08:58:52'),
(14, 3, '1720017065-6936.jpg', '2024-07-03 09:01:05', '2024-07-03 09:01:05'),
(15, 3, '1720017067-5410.jpg', '2024-07-03 09:01:07', '2024-07-03 09:01:07'),
(16, 3, '1720017070-7274.jpg', '2024-07-03 09:01:10', '2024-07-03 09:01:10'),
(17, 3, '1720017073-4969.jpg', '2024-07-03 09:01:13', '2024-07-03 09:01:13'),
(18, 3, '1720017076-6929.jpg', '2024-07-03 09:01:16', '2024-07-03 09:01:16'),
(19, 3, '1720017079-3952.jpg', '2024-07-03 09:01:19', '2024-07-03 09:01:19'),
(20, 3, '1720017082-1004.jpg', '2024-07-03 09:01:22', '2024-07-03 09:01:22'),
(21, 4, '1720017143-7033.jpg', '2024-07-03 09:02:23', '2024-07-03 09:02:23'),
(22, 4, '1720017145-5106.jpg', '2024-07-03 09:02:25', '2024-07-03 09:02:25'),
(23, 4, '1720017148-6960.jpg', '2024-07-03 09:02:28', '2024-07-03 09:02:28'),
(24, 4, '1720017151-9180.jpg', '2024-07-03 09:02:31', '2024-07-03 09:02:31'),
(25, 4, '1720017153-4201.jpg', '2024-07-03 09:02:33', '2024-07-03 09:02:33'),
(26, 4, '1720017156-3773.jpg', '2024-07-03 09:02:36', '2024-07-03 09:02:36'),
(27, 5, '1720017306-2764.jpg', '2024-07-03 09:05:06', '2024-07-03 09:05:06'),
(28, 5, '1720017316-1921.jpg', '2024-07-03 09:05:16', '2024-07-03 09:05:16'),
(29, 5, '1720017319-5783.jpg', '2024-07-03 09:05:19', '2024-07-03 09:05:19'),
(30, 5, '1720017331-4420.jpg', '2024-07-03 09:05:31', '2024-07-03 09:05:31'),
(31, 5, '1720017343-5239.jpg', '2024-07-03 09:05:43', '2024-07-03 09:05:43'),
(32, 5, '1720017354-4852.jpg', '2024-07-03 09:05:54', '2024-07-03 09:05:54'),
(33, 6, '1720017502-6699.jpg', '2024-07-03 09:08:22', '2024-07-03 09:08:22'),
(34, 6, '1720017507-6978.jpg', '2024-07-03 09:08:27', '2024-07-03 09:08:27'),
(35, 6, '1720017512-3262.jpg', '2024-07-03 09:08:32', '2024-07-03 09:08:32'),
(36, 6, '1720017521-4476.jpg', '2024-07-03 09:08:41', '2024-07-03 09:08:41'),
(37, 6, '1720017525-3957.jpg', '2024-07-03 09:08:45', '2024-07-03 09:08:45'),
(38, 6, '1720017533-2202.jpg', '2024-07-03 09:08:53', '2024-07-03 09:08:53'),
(39, 7, '1721936317-1947.jpg', '2024-07-25 14:08:37', '2024-07-25 14:08:37'),
(40, 7, '1721936321-1777.jpg', '2024-07-25 14:08:41', '2024-07-25 14:08:41'),
(41, 8, '1721936444-4239.jpg', '2024-07-25 14:10:44', '2024-07-25 14:10:44'),
(42, 8, '1721936447-4551.jpg', '2024-07-25 14:10:47', '2024-07-25 14:10:47'),
(43, 11, '1722604753-7111.jpg', '2024-08-02 07:49:13', '2024-08-02 07:49:13'),
(44, 11, '1722604757-3410.jpg', '2024-08-02 07:49:17', '2024-08-02 07:49:17'),
(45, 12, '1722625037-3237.jpg', '2024-08-02 13:27:17', '2024-08-02 13:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `package_id`, `name`, `email`, `phone`, `message`, `quantity`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Sayan Ghosh', 'dev@gmail.com', '8617451412', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', NULL, '2023-07-14 13:10:49', '2023-07-14 13:10:49'),
(2, NULL, 'Sayan Ghosh', 'dev@gmail.com', '8617451412', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', NULL, '2023-07-14 13:11:11', '2023-07-14 13:11:11'),
(3, NULL, 'Sayan Ghosh', 'activarmor.test@gmail.com', '08617260309', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', NULL, '2023-07-14 13:13:04', '2023-07-14 13:13:04'),
(5, 1, 'Sayan Ghosh', 'yebiyi1448@haizail.com', '08617260309', 'lorem', NULL, '2023-07-14 14:14:30', '2023-07-14 14:14:30'),
(6, 1, 'fdgfdg', 'yebiyi1448@haizail.com', '08617260309', NULL, NULL, '2023-07-14 14:15:47', '2023-07-14 14:15:47'),
(7, NULL, 'Sayab', 'sayan@gmail.com', '08617260309', 'test', NULL, '2023-07-17 23:29:41', '2023-07-17 23:29:41'),
(8, NULL, 'Sayan Ghosh', 'official@gmail.com', '8617260309', 'Test Mail', NULL, '2024-07-03 09:20:51', '2024-07-03 09:20:51'),
(9, NULL, 'Sayan Ghosh', 'official@gmail.com', '8617260309', 'Test Mail', NULL, '2024-07-03 09:25:45', '2024-07-03 09:25:45'),
(10, NULL, 'Sayan Agarwal', 'yebiyi1448@haizail.com', '08617260309', 'info@gracieux.in', NULL, '2024-07-30 14:04:11', '2024-07-30 14:04:11'),
(11, 8, 'Sayan', 'deve@gmail.com', '8617260309', NULL, NULL, '2024-07-30 14:23:02', '2024-07-30 14:23:02'),
(12, 8, 'Sayan', 'deve@gmail.com', '8617260309', NULL, NULL, '2024-07-30 14:23:24', '2024-07-30 14:23:24'),
(13, 8, 'Sayan', 'deve@gmail.com', '8617260309', NULL, NULL, '2024-07-30 14:23:30', '2024-07-30 14:23:30'),
(14, 8, 'Sayan', 'deve@gmail.com', '8617260309', NULL, NULL, '2024-07-30 14:23:46', '2024-07-30 14:23:46'),
(15, 8, 'fdgfdg', 'yebiyi1448@haizail.com', '08617260309', NULL, NULL, '2024-07-30 14:25:07', '2024-07-30 14:25:07'),
(16, 11, 'Sayan', 'sayan@gmail.com', '8617260309', NULL, '1', '2024-08-02 08:47:54', '2024-08-02 08:47:54'),
(17, 11, 'fdgfdg', 'yebiyi1448@haizail.com', '08617260309', NULL, '1', '2024-08-02 08:49:02', '2024-08-02 08:49:02'),
(18, 11, 'fdgfdg', 'yebiyi1448@haizail.com', '08617260309', NULL, '1', '2024-08-02 08:50:41', '2024-08-02 08:50:41'),
(19, 11, 'fdgfdg', 'yebiyi1448@haizail.com', '08617260309', NULL, '1', '2024-08-02 08:51:33', '2024-08-02 08:51:33'),
(20, NULL, 'Sayan', 'sayan@', '861726032', 'Test Message', NULL, '2024-08-02 08:58:11', '2024-08-02 08:58:11'),
(21, 13, 'fdgfdg', 'official@gmail.com', '08617260309', NULL, '1', '2024-08-05 13:52:50', '2024-08-05 13:52:50');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_07_125116_create_admin_password_resets_table', 1),
(6, '2023_06_07_125116_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1721934715-8100.png', '2024-07-25 13:41:55', '2024-07-25 13:41:55'),
(2, '1721934729-7217.png', '2024-07-25 13:42:09', '2024-07-25 13:42:09'),
(3, '1721934733-3534.png', '2024-07-25 13:42:13', '2024-07-25 13:42:13'),
(4, '1721934737-7464.png', '2024-07-25 13:42:17', '2024-07-25 13:42:17'),
(5, '1721934743-7868.png', '2024-07-25 13:42:23', '2024-07-25 13:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'A',
  `image` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `parent_name` varchar(255) DEFAULT NULL,
  `parent_mobile_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `email_verified_at`, `password`, `status`, `image`, `class`, `blood_group`, `remember_token`, `parent_name`, `parent_mobile_no`, `address`, `pincode`, `created_at`, `updated_at`) VALUES
(1, 'Sayan Ghosh', 'developersayan2001@gmail.com', '8617260203', 'SA', NULL, '$2y$10$bwDuy0UUdZddBvHRxKXSAOajIrt.Xm7qKVkMorEMT4Xl8wqUoYZiC', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-15 00:13:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
