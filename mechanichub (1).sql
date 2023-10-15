-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 15, 2023 at 10:32 AM
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
-- Table structure for table `chooses`
--

DROP TABLE IF EXISTS `chooses`;
CREATE TABLE IF NOT EXISTS `chooses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chooses`
--

INSERT INTO `chooses` (`id`, `photo`, `video`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'play-btn-1.png', NULL, 'Actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because who do not consequences.', '<ul>\r\n                                            <li><i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i>Engine oil level should be regularly checked</li>\r\n                                            <li><i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i>Tyres have a minimum of 1.6mm of tread depth</li>\r\n                                            <li><i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i>Ensure that the electrolyte level is correct</li>\r\n                                            <li><i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i>Never remove the radiator when the engine is hot</li>\r\n                                            <li><i class=\"fa fa-arrow-circle-o-right\" aria-hidden=\"true\"></i>Ensure that your vehicle\'s brake fluid is full</li>\r\n                                        </ul>', NULL, NULL);

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
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'When Should i Replace My Fuel Filter?', 'To help ensure dependable, trouble-free performance, replace your fuel filter approximately every 30,000 miles or as recommended sed diam nonummy euismod in vehicle\'s owner\'s manual.\r\n\r\n', NULL, NULL),
(2, 'Must i get Air Conditioning Serviced?', 'A lot of auto repair customerss question the importance wheel alignment it really necessary? Yes, it is. Masters builder of human happiness no one rejects, dislikes, or but because rationally.', NULL, NULL),
(3, 'Why Does My Car Need Service If it is Running Fine?', 'Lowest gas prices, we have found a great video that gives sed some extra money saving tips.loves or pursues or seds desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.', NULL, NULL),
(4, 'How Long it Take To Repair My Vehicle?\r\n', 'Shopping around town for the lowest gas prices,have found a great video that gives some extra money saving tips loves or ut pursues or desires to because it is pain, but because occasionally.\r\n\r\n', NULL, NULL),
(5, 'Why Does My Car Need Service If it is Running Fine?\r\n', 'Lowest gas prices, we have found a great video that gives sed some extra money saving tips.loves or pursues or seds desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.\r\n\r\n', NULL, NULL),
(6, 'How Long it Take To Repair My Vehicle?\r\n', 'Shopping around town for the lowest gas prices, we have found a great video that gives some extra money saving tips.loves or pursues or desires to obtain pain of itself, because it is painbecause occasionally cumstances which toil and pain can procure.\r\n\r\n', NULL, NULL),
(7, 'When Should i Replace My Fuel Filter?\r\n', 'To help ensure dependable, trouble-free performance, replace your fuel filter approximately every 30,000 miles or as recommended sed diam nonummy euismod in vehicle\'s owner\'s manual.\r\n\r\n', NULL, NULL),
(8, 'Must i get Air Conditioning Serviced?\r\n', 'A lot of auto repair customerss question the importance wheel alignment it really necessary? Yes, it is. Masters builder of human happiness no one rejects, dislikes, or utavoids pleasures but because rationally.', NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2023_10_14_103212_carousel_imgs', 1),
(22, '2023_10_14_111046_texts', 2),
(23, '2023_10_15_003345_photos', 3),
(25, '2023_10_15_010451_prices', 4),
(29, '2023_10_15_015234_reviews', 5),
(30, '2023_10_15_031400_faqs', 5),
(31, '2023_10_15_070312_services', 6),
(33, '2023_10_15_085931_chooses', 7);

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
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `text2` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `photo`, `title`, `text`, `text2`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Jade Kentigern', '<h3>Richard Antony</h3>\n                        <span>Founder</span>\n                        <div class=\"text\">\n                            <p>Great explorer of the truth, the team master of human happiness.</p>\n                        </div>', '<ul>\n                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> +91 800-755-422</li>\n                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Richard@Mechanichub.com</li>\n                            </ul>', NULL, NULL),
(2, '2.jpg', 'Darden Eldbridge\r\n', '<h3>Richard Antony</h3>\n                        <span>Founder</span>\n                        <div class=\"text\">\n                            <p>Great explorer of the truth, the team master of human happiness.</p>\n                        </div>', '<ul>\r\n                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> +91 800-755-422</li>\r\n                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Richard@Mechanichub.com</li>\r\n                            </ul>', NULL, NULL),
(3, '3.jpg', 'Eliot Hananiah', '<h3>Richard Antony</h3>\n                        <span>Founder</span>\n                        <div class=\"text\">\n                            <p>Great explorer of the truth, the team master of human happiness.</p>\n                        </div>', '<ul>\r\n                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> +91 800-755-422</li>\r\n                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Richard@Mechanichub.com</li>\r\n                            </ul>', NULL, NULL),
(4, '4.jpg', 'Jade Kentigern', '<h3>Richard Antony</h3>\n                        <span>Founder</span>\n                        <div class=\"text\">\n                            <p>Great explorer of the truth, the team master of human happiness.</p>\n                        </div>', '<ul>\r\n                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> +91 800-755-422</li>\r\n                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Richard@Mechanichub.com</li>\r\n                            </ul>', NULL, NULL),
(5, '5.jpg', 'Matthew Neil\r\n', '<h3>Richard Antony</h3>\n                        <span>Founder</span>\n                        <div class=\"text\">\n                            <p>Great explorer of the truth, the team master of human happiness.</p>\n                        </div>', '<ul>\r\n                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> +91 800-755-422</li>\r\n                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Richard@Mechanichub.com</li>\r\n                            </ul>', NULL, NULL),
(6, '6.jpg', 'Astely Fletcher', '<h3>Richard Antony</h3>\n                        <span>Founder</span>\n                        <div class=\"text\">\n                            <p>Great explorer of the truth, the team master of human happiness.</p>\n                        </div>', '<ul>\r\n                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> +91 800-755-422</li>\r\n                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Richard@Mechanichub.com</li>\r\n                            </ul>', NULL, NULL),
(7, '7.jpg', 'Astely Fletcher', '<h3>Richard Antony</h3>\n                        <span>Founder</span>\n                        <div class=\"text\">\n                            <p>Great explorer of the truth, the team master of human happiness.</p>\n                        </div>', '<ul>\r\n                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> +91 800-755-422</li>\r\n                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Richard@Mechanichub.com</li>\r\n                            </ul>', NULL, NULL),
(8, '8.jpg', 'John Benson', '<h3>Richard Antony</h3>\n                        <span>Founder</span>\n                        <div class=\"text\">\n                            <p>Great explorer of the truth, the team master of human happiness.</p>\n                        </div>', '<ul>\r\n                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> +91 800-755-422</li>\r\n                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> Richard@Mechanichub.com</li>\r\n                            </ul>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

DROP TABLE IF EXISTS `prices`;
CREATE TABLE IF NOT EXISTS `prices` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `services` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `price`, `title`, `services`, `created_at`, `updated_at`) VALUES
(1, '100', 'Maintenance', '                            <li>Brakes and Suspension</li>\r\n                            <li>Electical Service</li>\r\n                            <li>Wheel & Steering Checkup</li>\r\n                            <li>Water Wash & Oil Level</li>', NULL, NULL),
(2, '100', 'Care Service', '                      <li>Clutch and Gearbox</li>\r\n                            <li>Brakes and Suspension</li>\r\n                            <li>Electical Service</li>\r\n                            <li>Wheel & Steering Checkup</li>\r\n                            <li>Water Wash & Oil Level</li>', NULL, NULL),
(3, '100', 'General One', '                      <li>Clutch and Gearbox</li>\r\n                            <li>Brakes and Suspension</li>\r\n                            <li>Electical Service</li>\r\n                            <li>Wheel & Steering Checkup</li>\r\n                            <li>Water Wash & Oil Level</li>', NULL, NULL),
(4, '100', 'Special Care', '                      <li>Clutch and Gearbox</li>\n                            <li>Brakes and Suspension</li>\n                            <li>Electical Service</li>\n                            <li>Wheel & Steering Checkup</li>\n                            <li>Water Wash & Oil Level</li>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `service` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `car` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `photo`, `name`, `comment`, `service`, `car`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 'Santa Cruz - London', '“These guys are just the coolest company ever! They were aware of our transported for road and tail as complex special.”', 'Changed Oil and Filter', 'brand-1.png', NULL, NULL),
(2, '2.jpg', 'Santa Cruz - London', '“These guys are just the coolest company ever! They were aware of our transported for road and tail as complex special.”', 'Brake Pads Replacement', 'brand-2.png', NULL, NULL),
(3, '3.jpg', 'Santa Cruz - London', '“Their performance on our project was successful. Exceptional quality & was delivered in time and budget.”', 'Brake Pads Replacement', 'brand-3.png', NULL, NULL),
(4, '4.jpg', 'Santa Cruz - London', '“These guys are just the coolest company ever! They were aware of our transported for road and tail and well special.”', 'Brake Pads Replacement', 'brand-1.png', NULL, NULL),
(5, '5.jpg', 'Santa Cruz - London', '“Their performance on our project was successful. Exceptional quality & was delivered in time and budget.”', 'Brake Pads Replacement', 'brand-1.png', NULL, NULL),
(6, '6.jpg', 'Santa Cruz - London', '“Their performance on our project was successful. Exceptional quality & was delivered in time and budget.”', 'Brake Pads Replacement', 'brand-2.png', NULL, NULL),
(7, '7.jpg', 'Santa Cruz - London', '“These guys are just the coolest company ever! They were aware of our transported for road and tail and well special.”', 'Basic Inspection', 'brand-3.png', NULL, NULL),
(8, '8.jpg', 'E. Douglas - London', '“Their performance on our project was successful. Exceptional quality & was delivered in time and budget.”', 'Brake Pads Replacement', 'brand-1.png', NULL, NULL),
(9, '9.jpg', 'E. Douglas - London', '“Their performance on our project was successful. Exceptional quality & was delivered in time and budget.”', 'Brake Pads Replacement', 'brand-3.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `photo`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 'ser-p-1.jpg', 'Wheel Works', 'All new vehicles leave the factory with their alignment checked and adjusted. Usually the technician paints the heads of the adjustment hardware to show it has been set, also to show if it has moved later on.It is advisable to do the alignment of the car after the first 5000 km, since all the suspension get set. Failure to do this may result in the camber and toe specifications drifting outside the manufacturer\'s limit. This may lead to vehicle pulling and tire wear.\n\nComplete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.\n\n', NULL, NULL),
(2, 'ser-p-2.jpg', 'Painting Works', 'All new vehicles leave the factory with their alignment checked and adjusted. Usually the technician paints the heads of the adjustment hardware to show it has been set, also to show if it has moved later on.It is advisable to do the alignment of the car after the first 5000 km, since all the suspension get set. Failure to do this may result in the camber and toe specifications drifting outside the manufacturer\'s limit. This may lead to vehicle pulling and tire wear.\r\n\r\nComplete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.\r\n\r\n', NULL, NULL),
(3, 'ser-p-3.jpg', 'Air Conditioner', 'All new vehicles leave the factory with their alignment checked and adjusted. Usually the technician paints the heads of the adjustment hardware to show it has been set, also to show if it has moved later on.It is advisable to do the alignment of the car after the first 5000 km, since all the suspension get set. Failure to do this may result in the camber and toe specifications drifting outside the manufacturer\'s limit. This may lead to vehicle pulling and tire wear.\r\n\r\nComplete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.\r\n\r\n', NULL, NULL),
(4, 'ser-p-4.jpg', 'Water Service', 'All new vehicles leave the factory with their alignment checked and adjusted. Usually the technician paints the heads of the adjustment hardware to show it has been set, also to show if it has moved later on.It is advisable to do the alignment of the car after the first 5000 km, since all the suspension get set. Failure to do this may result in the camber and toe specifications drifting outside the manufacturer\'s limit. This may lead to vehicle pulling and tire wear.\r\n\r\nComplete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.\r\n\r\n', NULL, NULL),
(5, 'ser-p-5.jpg', 'Engine Works', 'All new vehicles leave the factory with their alignment checked and adjusted. Usually the technician paints the heads of the adjustment hardware to show it has been set, also to show if it has moved later on.It is advisable to do the alignment of the car after the first 5000 km, since all the suspension get set. Failure to do this may result in the camber and toe specifications drifting outside the manufacturer\'s limit. This may lead to vehicle pulling and tire wear.\r\n\r\nComplete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.\r\n\r\n', NULL, NULL),
(6, 'ser-p-6.jpg', 'lube Oil & Filters', 'All new vehicles leave the factory with their alignment checked and adjusted. Usually the technician paints the heads of the adjustment hardware to show it has been set, also to show if it has moved later on.It is advisable to do the alignment of the car after the first 5000 km, since all the suspension get set. Failure to do this may result in the camber and toe specifications drifting outside the manufacturer\'s limit. This may lead to vehicle pulling and tire wear.\r\n\r\nComplete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.\r\n\r\n', NULL, NULL),
(7, 'ser-p-7.jpg', 'Brake Repairs', 'All new vehicles leave the factory with their alignment checked and adjusted. Usually the technician paints the heads of the adjustment hardware to show it has been set, also to show if it has moved later on.It is advisable to do the alignment of the car after the first 5000 km, since all the suspension get set. Failure to do this may result in the camber and toe specifications drifting outside the manufacturer\'s limit. This may lead to vehicle pulling and tire wear.\r\n\r\nComplete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.\r\n\r\n', NULL, NULL),
(8, 'ser-p-8.jpg', 'Belts & Hoses', 'All new vehicles leave the factory with their alignment checked and adjusted. Usually the technician paints the heads of the adjustment hardware to show it has been set, also to show if it has moved later on.It is advisable to do the alignment of the car after the first 5000 km, since all the suspension get set. Failure to do this may result in the camber and toe specifications drifting outside the manufacturer\'s limit. This may lead to vehicle pulling and tire wear.\r\n\r\nComplete account of the systems and expound the actually teachings of the great explorer of the truth, the master-builder of human uts happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful anyone who loves or pursues.\r\n\r\n', NULL, NULL);

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
