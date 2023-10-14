-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2023 at 12:28 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mechanichub`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel_imgs`
--

DROP TABLE IF EXISTS `carousel_imgs`;
CREATE TABLE IF NOT EXISTS `carousel_imgs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `team` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousel_imgs`
--

INSERT INTO `carousel_imgs` (`id`, `img`, `text`, `team`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', '<h1>Excellence in Automotive <br>Services <span>Since 1997</span></h1>\n                            <h2>We started Mechanic HUB because we believed that the <br>auto repair industry was broken.</h2>', '1', NULL, NULL),
(2, '2.jpg', '<h1>Excellence in Automotive <br>Services <span>Since 1997</span></h1>\n                            <h2>We started Mechanic HUB because we believed that the <br>auto repair industry was broken.</h2>', '1', NULL, NULL),
(3, '3.jpg', '<h1>Excellence in Automotive <br>Services <span>Since 1997</span></h1>\n                            <h2>We started Mechanic HUB because we believed that the <br>auto repair industry was broken.</h2>', '1', NULL, NULL),
(4, 'slide-v2-1.jpg', '<h1>We make your car last <br>longer <span>at $350</span></h1>\n                        <h2>We started Mechanic HUB because we believed that the <br>auto repair industry was broken.</h2>', '2', NULL, NULL),
(5, 'slide-v2-2.jpg', '<h1>We make your car last <br>longer <span>at $350</span></h1>\n                        <h2>We started Mechanic HUB because we believed that the <br>auto repair industry was broken.</h2>', '2', NULL, NULL),
(6, 'slide-v2-3.jpg', '<h1>We make your car last <br>longer <span>at $350</span></h1>\n                        <h2>We started Mechanic HUB because we believed that the <br>auto repair industry was broken.</h2>', '2', NULL, NULL),
(7, 'slide-v3-1.jpg', '<h1>Provide total <br>auto care solution</h1>\n                            <h2>We started Mechanic HUB because we believed that the <br>auto repair industry was\n                                broken.</h2>', '3', NULL, NULL),
(8, 'slide-v3-2.jpg', '<h1>Provide total <br>auto care solution</h1>\n                            <h2>We started Mechanic HUB because we believed that the <br>auto repair industry was\n                                broken.</h2>', '3', NULL, NULL),
(9, 'slide-v3-3.jpg', '<h1>Provide total <br>auto care solution</h1>\n                            <h2>We started Mechanic HUB because we believed that the <br>auto repair industry was\n                                broken.</h2>', '3', NULL, NULL),
(10, 'slide-v4-1.jpg', '<h1>Complete Checkup</h1>\n                            <h2>How all this mistaken idea of denouncing pleasure <br>pain and we will give you a complete.</h2>', '4', NULL, NULL),
(11, 'slide-v4-2.jpg', '<h1>Complete Checkup</h1>\n                            <h2>How all this mistaken idea of denouncing pleasure <br>pain and we will give you a complete.</h2>', '4', NULL, NULL),
(12, 'slide-v4-3.jpg', '<h1>Complete Checkup</h1>\n                            <h2>How all this mistaken idea of denouncing pleasure <br>pain and we will give you a complete.</h2>', '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2023_10_14_103212_carousel_imgs', 1),
(22, '2023_10_14_111046_texts', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `texts`
--

DROP TABLE IF EXISTS `texts`;
CREATE TABLE IF NOT EXISTS `texts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `texts`
--

INSERT INTO `texts` (`id`, `text`, `team`, `created_at`, `updated_at`) VALUES
(1, '<div class=\"sec-title\">\n                        <h1>Welcome to Mechanic <span>HUB</span></h1>\n                        <span class=\"border\"></span>\n                     </div> \n<p>Mechanic HUB  was founded in 1998. Dealing with car problems is not only a time-consuming and frustrating experience, it is often expensive. Car owners often lack visibility regarding the quality of mechanics of price.</p>\n                        <p>We provide a full and detailed estimate of all restoration and repair projects in advance. Clients are then kept fully updated and notified of any unavoidable changes throughout the process. Delivering the highest degree of customer satisfaction through superior workmanship and service</p>', '1', NULL, NULL),
(2, '<h3>lara Crofta, <span>Founder</span></h3>\n<p>Mechanic HUB.</p>', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
