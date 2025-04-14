-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2025 at 03:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_london`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '',
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `des_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `summary_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `summary_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `slug`, `title_en`, `title_ar`, `des_en`, `des_ar`, `summary_en`, `summary_ar`, `image`, `created_at`, `updated_at`) VALUES
(1, 'seven-bond-has-succesfully-passed-canulc-s134-test', 'Seven Bond has succesfully passed CAN/ULC-S134 Test', 'مدونة 1', '<p>Elevate Your Sports Experience with Seven\'s Technology. At Smet, we\'re passionate about sports. Our top-of-the-line electronic equipment and scoreboards are designed to make every game unforgettable. With precise monitoring and real-time updates, you\'ll be at the top of your game. Why Smet is the Best Choice: \"Unmatched Accuracy: Keep track of every detail with our precise monitoring.\" \"Brilliant Displays: Enjoy clear visibility no matter the conditions.\" \"Built to Endure: Our equipment is made to last, game after game.\". \"Take your sports performance to new heights with Smet\'s advanced technology.\".</p>', '<p>تفاصيل المدونة</p>', '<p>Elevate Your Sports Experience with seven\'s Technology. .\".</p>', '<p>اختصار تفاصيل المدونة</p>', 'e4q2mI7xDvIU5RzXebERju8jl8npB87TgxYoCR3p.jpg', '2023-05-02 22:56:28', '2025-03-23 01:27:28'),
(2, 'seven-bond-secures-tech-to-reduce-the-spread-of-fire-in-high-rises', 'Seven Bond secures tech to reduce the spread of fire in high rises.', 'مدونة 2', '<p>Transforming Heavy Equipment with Seven\'s Electronic Solutions In the realm of heavy equipment, efficiency and safety are paramount. Smet\'s advanced electronic solutions are engineered to withstand the toughest conditions, ensuring optimal performance and reliability. From construction machinery to mining equipment, Smet\'s products help operators achieve higher productivity and safety standards. Why Choose Smet for Heavy Equipment? Innovation: Cutting-edge technology to keep your operations running smoothly. Quality: Robust and reliable products built to last. Support: Comprehensive support and training for seamless integration. Experience the transformation with Smet\'s heavy equipment solutions and elevate your operations to new heights.</p>', '<p>تفاصيل المدونة</p>', '<p>Transforming Heavy Equipment with Seven\'s Electronic Solutions In the realm of heavy equipment, efficiency and safety are paramount. Smet\'s advanced electronic solutions are engineered to withstand the toughest conditions, ensuring optimal performance and reliability. From construction machinery to mining equipment, Smet\'s products help operators achieve higher productivity and safety standards. Why Choose Smet for Heavy Equipment? Innovation: Cutting-edge technology to keep your operations running smoothly. Quality: Robust and reliable products built to last. Support: Comprehensive support and training for seamless integration. Experience the transformation with Smet\'s heavy equipment solutions and elevate your operations to new heights.</p>', '<p>اختصار تفاصيل المدونة</p>', 'u9m1d0OpGTWD2CTjd4lElpvJnNlAnZMFQUlBpprF.jpg', '2023-05-02 22:56:28', '2025-03-23 01:29:34'),
(3, 'seven-bond-secures-breakthrough-by-developing-an-a1-fire-rated-aluminum-core', 'Seven Bond secures breakthrough by developing an A1 fire-rated Aluminum core.', 'مدونة 3', '<p>Make Livestock Farming Easier with Seven\'s Tech Hey farmers! Managing your livestock just got a whole lot easier with Smet\'s electronic solutions. We\'re all about making your life simpler and your farm more productive. Why You\'ll Love Smet: Live Updates: Keep an eye on your animals in real-time. Save Time: Automate chores like feeding and watering. Stay Safe: Protect your livestock with our advanced security systems. Ready to take your farming to the next level? Smet\'s got the tech to help you do it.</p>', '<p>تفاصيل المدونة</p>', '<p>Make Livestock Farming Easier with Seven\'s Tech Hey farmers! Managing your livestock just got a whole lot easier with Smet\'s electronic solutions. We\'re all about making your life simpler and your farm more productive. Why You\'ll Love Smet: Live Updates: Keep an eye on your animals in real-time. Save Time: Automate chores like feeding and watering. Stay Safe: Protect your livestock with our advanced security systems. Ready to take your farming to the next level? Smet\'s got the tech to help you do it.</p>', '<p>اختصار تفاصيل المدونة</p>', 'EXtaZwJaDuf2gMfdFaCtFsMUWNIxoLZfSL7DKHcb.jpg', '2023-05-02 22:56:28', '2025-03-23 01:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_en`, `title_ar`, `created_at`, `updated_at`) VALUES
(1, 'FIRE RATED ALUMINIUM COMPOSITE PANELS', 'FIRE RATED ALUMINIUM COMPOSITE PANELS', '2024-12-18 14:58:28', '2025-03-24 23:29:18'),
(2, 'CORPORATE IDENTITY', 'CORPORATE IDENTITY', '2024-12-18 20:59:59', '2025-03-24 23:29:28'),
(4, 'FACADE SYSTEMS', 'FACADE SYSTEMS', '2024-12-20 17:20:19', '2025-03-24 23:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` bigint UNSIGNED NOT NULL,
  `parent_id` int NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_id` int DEFAULT NULL,
  `gen` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `parent_id`, `code`, `child_id`, `gen`, `created_at`, `updated_at`) VALUES
(1, 9, 'SJKL%G1&#9', 21, 1, NULL, '2022-03-28 13:56:51'),
(2, 9, 'KKL%G1&#9', NULL, 1, NULL, '2022-03-10 14:56:51'),
(3, 9, 'MHmq%G1&#9', NULL, 1, NULL, '2022-03-28 13:56:51'),
(85, 8, 'hkmn%G1&#8', 16, 1, '2022-03-22 12:55:25', '2022-03-23 13:15:15'),
(86, 8, 'mhx%G1&#8', NULL, 1, '2022-03-22 12:55:25', '2022-03-22 12:55:25'),
(87, 8, 'ajlk%G1&#8', NULL, 1, '2022-03-22 12:55:25', '2022-03-22 12:55:25'),
(127, 16, 'xyz%G2&#16#P8', NULL, 2, '2022-03-23 14:53:18', '2022-03-23 14:53:18'),
(128, 16, 'jkl%G2&#16#P8', NULL, 2, '2022-03-23 14:53:18', '2022-03-23 14:53:18'),
(129, 16, 'mnb%G2&#16#P8', 17, 2, '2022-03-23 14:53:18', '2022-03-23 14:59:35'),
(130, 17, '2hdrjg2g%G3&#17#P16#P8', NULL, 3, '2022-03-23 15:00:05', '2022-03-23 15:00:05'),
(131, 17, 'Qa07jAWW%G3&#17#P16#P8', NULL, 3, '2022-03-23 15:00:05', '2022-03-23 15:00:05'),
(132, 17, 'Y3k3IFeC%G3&#17#P16#P8', 18, 3, '2022-03-23 15:00:05', '2022-03-23 15:02:49'),
(133, 18, '1mE1AIj3%G4&#18#P17#P16#P8', 19, 4, '2022-03-23 15:03:18', '2022-03-23 15:27:55'),
(134, 18, '70QeQFEm%G4&#18#P17#P16#P8', NULL, 4, '2022-03-23 15:03:18', '2022-03-23 15:03:18'),
(135, 18, 'jEdcF41w%G4&#18#P17#P16#P8', NULL, 4, '2022-03-23 15:03:18', '2022-03-23 15:03:18'),
(136, 19, '1aO5D40r%G5&#19#P18#P17#P16#P8', NULL, 5, '2022-03-23 15:29:53', '2022-03-23 15:29:53'),
(137, 19, 'dyGxLFOJ%G5&#19#P18#P17#P16#P8', 20, 5, '2022-03-23 15:29:54', '2022-03-23 15:42:28'),
(138, 19, 'MT9IVUim%G5&#19#P18#P17#P16#P8', NULL, 5, '2022-03-23 15:29:54', '2022-03-23 15:29:54'),
(142, 20, 'gN7TWiM0%G6&#20#P19#P18#P17#P16#P8', NULL, 6, '2022-03-27 10:07:54', '2022-03-27 10:07:54'),
(143, 20, 'P2RW5wY9%G6&#20#P19#P18#P17#P16#P8', NULL, 6, '2022-03-27 10:07:55', '2022-03-27 10:07:55'),
(144, 20, '4YvzFmkN%G6&#20#P19#P18#P17#P16#P8', 22, 6, '2022-03-27 10:07:55', '2022-03-29 11:08:23'),
(145, 21, 'A4rfbCM6%G2&#21#P9', NULL, 2, '2022-03-27 10:29:03', '2022-03-27 10:29:03'),
(146, 21, 'HaUCbQs4%G2&#21#P9', NULL, 2, '2022-03-27 10:29:03', '2022-03-27 10:29:03'),
(147, 21, 'bho6xQFk%G2&#21#P9', NULL, 2, '2022-03-27 10:29:03', '2022-03-27 10:29:03'),
(166, 22, 'QNFCdBYU%G7&#22#P20#P19#P18#P17#P16', NULL, 7, '2022-03-29 11:08:17', '2022-03-29 11:08:17'),
(167, 22, '7OsFmYMJ%G7&#22#P20#P19#P18#P17#P16', NULL, 7, '2022-03-29 11:08:17', '2022-03-29 11:08:17'),
(168, 22, 'LWW8XpCo%G7&#22#P20#P19#P18#P17#P16', NULL, 7, '2022-03-29 11:08:17', '2022-03-29 11:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(10, 'mn', 'mn@gm.com', NULL, 'car', 'asdasdasd', '2025-04-14 01:03:30', '2025-04-14 01:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_10_12_124343_create_products_table', 2),
(5, '2021_10_12_131107_create_product_galleries_table', 2),
(6, '2021_10_12_140432_laratrust_setup_tables', 3),
(7, '2021_10_13_133427_create_codes_table', 4),
(8, '2021_10_14_140850_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_paid` tinyint NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `name`, `address`, `phone`, `total`, `is_paid`, `code`, `payment_method`, `created_at`, `updated_at`) VALUES
(54, 9, 16, 'mahmoud', '25 شارع القاهرة', '01011941903', NULL, 1, 'hkmn%G1&#8', 'cash', '2022-03-23 14:53:18', '2022-03-23 14:53:23'),
(55, 9, 17, 'osama', '25 شارع القاهرة', '01011941903', NULL, 1, 'mnb%G2&#16#P8', 'cash', '2022-03-23 15:00:05', '2022-03-23 15:00:12'),
(56, 9, 18, 'nader', '25 شارع القاهرة', '01023658899', NULL, 1, 'Y3k3IFeC%G3&#17#P16#P8', 'cash', '2022-03-23 15:03:18', '2022-03-23 15:03:24'),
(57, 9, 19, 'karem', '25 شارع القاهرة', '012341', NULL, 1, '1mE1AIj3%G4&#18#P17#P16#P8', 'cash', '2022-03-23 15:29:53', '2022-03-23 15:30:06'),
(59, 9, 20, 'nour', '25 شارع القاهرة', '01011941903', NULL, 1, 'dyGxLFOJ%G5&#19#P18#P17#P16#P8', 'cash', '2022-03-27 10:07:54', '2022-03-27 10:08:20'),
(60, 9, 21, 'salah', '25 شارع القاهرة', '01011941903', NULL, 1, 'SJKL%G1&#9', 'cash', '2022-03-27 10:29:03', '2022-03-27 10:29:10'),
(69, 7, 22, 'sadsa', 'egypt', '+201011941903', '800', 1, '4YvzFmkN%G6&#20#P19#P18#P17#P16#P8', 'cash', '2022-03-29 11:08:17', '2022-03-29 11:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `features_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `features_text_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `features_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `technical_data_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `technical_data_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `advantage_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `advantage_text_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `advantage_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `slug`, `category_id`, `title`, `title_ar`, `des_ar`, `des`, `image`, `features_text`, `features_text_ar`, `features_image`, `technical_data_text`, `technical_data_image`, `advantage_text`, `advantage_text_ar`, `advantage_image`, `created_at`, `updated_at`) VALUES
(1, 'ALUBOND-A1', 1, 'ALUBOND A1\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', 'sv-2.jpg', '\r\nAlubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', NULL, 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', NULL, 'core-types-mirror-2.gif', NULL, NULL),
(2, 'ALUBOND-A2', 1, 'ALUBOND A2\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', 'sv-1.jpg', '\r\nAlubond A2 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', NULL, 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', NULL, 'core-types-mirror-2.gif', NULL, NULL),
(3, 'Alubond-Euroclass-B', 1, 'Alubond Euroclass B\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', 'sv-3.jpg', '\r\nAlubond Euroclass B – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', NULL, 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', NULL, 'core-types-mirror-2.gif', NULL, NULL),
(4, 'automobile-showrooms', 2, 'automobile showrooms\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', 'automobile_showrooms.jpg', '\r\nAlubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', NULL, 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', NULL, 'core-types-mirror-2.gif', NULL, NULL),
(5, 'petrol-station', 2, 'petrol station\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', 'petrol_station.jpg', '\r\nAlubond A2 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', NULL, 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', NULL, 'core-types-mirror-2.gif', NULL, NULL),
(6, 'retail-outlets', 2, 'retail outlets\r\n', NULL, NULL, ' Alubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process. Alubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core. Alubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n\r\nPanel Dimension STANDARD WIDTH: 1250mm AVAILABLE WIDTH: 1000mm, 1250mm, 1500mm STANDARD LENGTH: 3200mm, 4000mm AVAILABLE LENGTH: Custom order upto 11000mm AVAILABLE THICKNESS: 3mm, 4mm, 5mm, 6mm AVAILABLE SKIN THICKNES: 0.3mm – 0.5mm *Note: FR A1 Max Width 1500mm ', 'retail_outlets.jpg', '\r\nAlubond Euroclass B – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\n', NULL, 'core-types-mirror-2.gif', NULL, 'alubonda2_technical-fr-a2.gif', 'Alubond A1 – Creating A Sustainable Future\r\n\r\nAlubond U.S.A is a metal composite panel consisting of two layers of a metallic skin like Aluminum, Stainless Steel, Copper, Zinc, Titanium etc., sandwiching a fire rated core in a continuous co-extrusion process.\r\n\r\nAlubond U.S.A is a registered brand of American Building Technologies located in Rockford Illinois with production bases in Europe, Middle East and India. Alubond U.S.A is committed to a sustainable future and is now available in three fire rated cores and an innovative eco friendly green core.\r\n\r\nAlubond U.S.A has emerged as The World’s Largest ACP Brand with new expansions under progress in Russia, Saudi Arabia and Sri Lanka. The installed production capacity by June 2011 will be over 11,000,000m² with 10 production lines and two coil coating lines.\r\nABOUT OUR COMPANY\r\n\r\nAlubond has emerged as the world’s largest MCM & ACP Brand with a 25 Million sq.m production capacity across various production bases. Completely integrated with FR A1/A2/B1 Core & Granules Production, Coil Coating, Fire Rated Bonding Adhesives & Paint Production.\r\n\r\nQuick links\r\n\r\n    Products\r\n    Downloads\r\n    News\r\n    Colours & Finishes\r\n    Contact Us\r\n\r\nGlobal Presence\r\n\r\n    Alubond Global\r\n    Alubond USA\r\n    Alubond Canada\r\n    Alubond Qatar\r\n    Alubond Turkey\r\n    Alubond Egypt\r\n\r\nSubscribe to our Newsletter\r\n', NULL, 'core-types-mirror-2.gif', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(5, 1, 'sv-1.jpg', '2025-03-18 04:39:19', '2025-03-18 04:39:19'),
(6, 2, 'sv-2.jpg', '2025-03-18 04:39:19', '2025-03-18 04:39:19'),
(7, 3, 'sv-3.jpg', '2025-03-18 04:39:19', '2025-03-18 04:39:19'),
(8, 1, 'slojevi-1.png', '2025-03-18 04:39:19', '2025-03-18 04:39:19'),
(9, 1, 'core-types-mirror-2.gif', '2025-03-18 04:39:19', '2025-03-18 04:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `slug`, `title`, `title_ar`, `des`, `des_ar`, `image`, `created_at`, `updated_at`) VALUES
(1, 'seven-bond-fr-cladding-ongoing-project', 'Seven Bond FR Cladding ongoing project', 'Seven Bond FR Cladding ongoing project', '<div class=\"elementor-element elementor-element-43a8bbc elementor-widget elementor-widget-heading\" data-id=\"43a8bbc\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h3 class=\"elementor-heading-title elementor-size-default\">Ongoing Alubond A2 FR cladding as on 3/3/2023 on footbridge one of the project of Road &amp; and Transport Authority (RTA) Dubai Government.</h3>\r\n<p class=\"elementor-heading-title elementor-size-default\">&nbsp;</p>\r\n<p class=\"elementor-heading-title elementor-size-default\">Seven Bond FR Cladding ongoing project as on 01/02/2023 at Safa Park Dubai,&nbsp;</p>\r\n<p class=\"elementor-heading-title elementor-size-default\">one of the major project of Dubai Municipality.</p>\r\n</div>\r\n</div>', '<div class=\"elementor-element elementor-element-43a8bbc elementor-widget elementor-widget-heading\" data-id=\"43a8bbc\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h3 class=\"elementor-heading-title elementor-size-default\">Ongoing Alubond A2 FR cladding as on 3/3/2023 on footbridge one of the project of Road &amp; and Transport Authority (RTA) Dubai Government.</h3>\r\n<p class=\"elementor-heading-title elementor-size-default\">&nbsp;</p>\r\n<p class=\"elementor-heading-title elementor-size-default\">Seven Bond FR Cladding ongoing project as on 01/02/2023 at Safa Park Dubai,</p>\r\n<p class=\"elementor-heading-title elementor-size-default\">&nbsp;one of the major project of Dubai Municipality.</p>\r\n</div>\r\n</div>', '68ldfB3vPJp7O9C8cPNpRHtjZMaZhQPhTK9PLIdv.jpg', '2025-03-22 02:04:53', '2025-03-22 03:33:46'),
(2, 'seven-bond-fr-cladding-ongoing-project', 'Seven Bond FR Cladding ongoing project', 'Seven Bond FR Cladding ongoing project', '<div class=\"elementor-element elementor-element-43a8bbc elementor-widget elementor-widget-heading\" data-id=\"43a8bbc\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h3 class=\"elementor-heading-title elementor-size-default\">Ongoing Alubond A2 FR cladding as on 3/3/2023 on footbridge one of the project of Road &amp; and Transport Authority (RTA) Dubai Government.</h3>\r\n<p class=\"elementor-heading-title elementor-size-default\">&nbsp;</p>\r\n<p class=\"elementor-heading-title elementor-size-default\">Seven Bond FR Cladding ongoing project as on 01/02/2023 at Safa Park Dubai,&nbsp;</p>\r\n<p class=\"elementor-heading-title elementor-size-default\">one of the major project of Dubai Municipality.</p>\r\n</div>\r\n</div>', '<div class=\"elementor-element elementor-element-43a8bbc elementor-widget elementor-widget-heading\" data-id=\"43a8bbc\" data-element_type=\"widget\" data-widget_type=\"heading.default\">\r\n<div class=\"elementor-widget-container\">\r\n<h3 class=\"elementor-heading-title elementor-size-default\">Ongoing Alubond A2 FR cladding as on 3/3/2023 on footbridge one of the project of Road &amp; and Transport Authority (RTA) Dubai Government.</h3>\r\n<p class=\"elementor-heading-title elementor-size-default\">&nbsp;</p>\r\n<p class=\"elementor-heading-title elementor-size-default\">Seven Bond FR Cladding ongoing project as on 01/02/2023 at Safa Park Dubai,</p>\r\n<p class=\"elementor-heading-title elementor-size-default\">&nbsp;one of the major project of Dubai Municipality.</p>\r\n</div>\r\n</div>', '68ldfB3vPJp7O9C8cPNpRHtjZMaZhQPhTK9PLIdv.jpg', '2025-03-22 02:04:53', '2025-03-22 03:33:46'),
(3, 'test', 'test', 'testSAD', '<p>asdasdsa</p>', '<p>asdasdasd</p>', 'pKCIDNHwtn1bJvOzl4LzaaoQzOTcQIflSEwIkaVD.jpg', '2025-04-04 22:56:01', '2025-04-05 21:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `project_galleries`
--

CREATE TABLE `project_galleries` (
  `id` int NOT NULL,
  `project_id` int DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_galleries`
--

INSERT INTO `project_galleries` (`id`, `project_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'adSkQtUzLep56WvwT4fnQbAwZMaDQSAbhCz6r4MM.jpg', '2025-03-22 02:04:53', '2025-03-22 02:04:53'),
(2, 1, 'Hr8fAPTqwuwMWEeXcJEL65z5QtlakkKOSD9ls0Oe.jpg', '2025-03-22 02:04:53', '2025-03-22 02:04:53'),
(3, 1, 'SyHF8ClsPxWZmmmBie7JpExkJJQvai21mfqwYFEI.jpg', '2025-03-22 02:04:53', '2025-03-22 02:04:53'),
(4, 1, 'P1tF10tusga06KLmSJJv0eXSEZIC5UBu1L6c4Xbs.jpg', '2025-03-22 02:04:53', '2025-03-22 02:04:53'),
(5, 1, 'oH3R8xJ5WmOwRLlW8hZfMm8Fy6iYI5e7YVjFE0yo.jpg', '2025-03-22 02:04:53', '2025-03-22 02:04:53'),
(8, 3, '8W1zd9rRBpRnOEyErFRUWlPw2g0aEVLijHe7WBPX.jpg', '2025-04-05 21:02:37', '2025-04-05 21:02:37'),
(9, 3, 'WagcTeJN5tzUPVcM44A2TEHZS0AIotkbuyCmReAR.jpg', '2025-04-05 21:02:37', '2025-04-05 21:02:37'),
(10, 3, '8fnZwqK4dJ9jo3ooMVoNuIiAYQWUNa3hf41NpaDi.jpg', '2025-04-05 21:02:37', '2025-04-05 21:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, NULL, NULL),
(2, 'moderator', 'Moderator', NULL, NULL, NULL),
(3, 'customer', 'Customer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(3, 3, 'App\\User'),
(3, 5, 'App\\User'),
(3, 8, 'App\\User'),
(3, 9, 'App\\User'),
(3, 10, 'App\\User'),
(3, 11, 'App\\User'),
(3, 12, 'App\\User'),
(3, 13, 'App\\User'),
(3, 14, 'App\\User'),
(3, 15, 'App\\User'),
(3, 16, 'App\\User'),
(3, 17, 'App\\User'),
(3, 18, 'App\\User'),
(3, 19, 'App\\User'),
(3, 20, 'App\\User'),
(3, 21, 'App\\User'),
(3, 22, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `des_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT '4.jpeg',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `slug`, `title_en`, `title_ar`, `des_en`, `des_ar`, `image`, `created_at`, `updated_at`) VALUES
(12, 'car-insurance', 'Car Insurance', 'تامين السيارات', '<p>Lorem Ipsum is simply dummy text of sit dolor amlet&hellip;.</p>', '<p>تفاصيل الخدمة</p>', 'Yfjl43UcZltqhrJ1CYsEvMYu9cxPsRxpO2vBO3VT.png', '2025-04-12 00:43:10', '2025-04-12 16:38:00'),
(13, 'quick-approval-process', 'Quick Approval Process', 'موافقات سريعة', '<p>The company issues approvals within 24 hours.</p>', '<p>تقوم الشركة باصدار الموافقات خلال 24 ساعة</p>', 'hWaR3bLqQabfCqoJScE5N1uKUducniwplemDVGF5.png', '2025-04-12 16:09:56', '2025-04-12 16:09:56'),
(14, 'instant-approvals', 'Instant approvals', 'موافقات فورية', '<div id=\"tw-target-text-container\" class=\"tw-ta-container tw-nfl\" tabindex=\"0\" role=\"text\">\r\n<p id=\"tw-target-text\" class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"text-align: left;\" data-placeholder=\"Translation\" data-ved=\"2ahUKEwjh-Oiki9OMAxXGRKQEHUafBeIQ3ewLegQICBAU\" aria-label=\"Translated text: Instant approvals within 30 minutes\r\nNo administrative fees\r\nNo ban\r\nLongest repayment period of up to 10 years\"><span class=\"Y2IQFc\" lang=\"en\">Instant approvals within 30 minutes</span></p>\r\n<p class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"text-align: left; padding-left: 40px;\" data-placeholder=\"Translation\" data-ved=\"2ahUKEwjh-Oiki9OMAxXGRKQEHUafBeIQ3ewLegQICBAU\" aria-label=\"Translated text: Instant approvals within 30 minutes\r\nNo administrative fees\r\nNo ban\r\nLongest repayment period of up to 10 years\"><span class=\"Y2IQFc\" lang=\"en\">No administrative fees</span></p>\r\n<p class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"text-align: left; padding-left: 40px;\" data-placeholder=\"Translation\" data-ved=\"2ahUKEwjh-Oiki9OMAxXGRKQEHUafBeIQ3ewLegQICBAU\" aria-label=\"Translated text: Instant approvals within 30 minutes\r\nNo administrative fees\r\nNo ban\r\nLongest repayment period of up to 10 years\"><span class=\"Y2IQFc\" lang=\"en\">No ban </span></p>\r\n<p class=\"tw-data-text tw-text-large tw-ta\" dir=\"ltr\" style=\"text-align: left; padding-left: 40px;\" data-placeholder=\"Translation\" data-ved=\"2ahUKEwjh-Oiki9OMAxXGRKQEHUafBeIQ3ewLegQICBAU\" aria-label=\"Translated text: Instant approvals within 30 minutes\r\nNo administrative fees\r\nNo ban\r\nLongest repayment period of up to 10 years\"><span class=\"Y2IQFc\" lang=\"en\">Longest repayment period of up to 10 years</span></p>\r\n</div>\r\n<div id=\"tw-target-rmn-container\" class=\"tw-target-rmn tw-ta-container tw-nfl\" tabindex=\"0\" role=\"text\">\r\n<pre id=\"tw-target-rmn\" class=\"tw-data-placeholder tw-text-small tw-ta\" dir=\"ltr\" style=\"text-align: left;\" data-placeholder=\"\"></pre>\r\n</div>', '<p style=\"text-align: right;\">تقوم الشركة باصدار الموافقات فورية خلال 30 دقيقة<br>بدون مصاريف ادارية<br>بدون حظر<br>اطول فترة سداد صل ل 10 سنوات</p>', 'eDivUdBkyK3DuIlnHtLCNxAFeUDlf8Bg0yG52Uwq.png', '2025-04-12 16:16:38', '2025-04-12 16:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `team_section_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'favicon.png',
  `about_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_des` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_vid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `welcome_phrase_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_section_1_image2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_section_2_title_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_title_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_Subtitle_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_section_2_Subtitle_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_section_2_text_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_text_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step1_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step1_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step2_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step2_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step3_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_section_2_step3_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_middel_banner_text_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_middel_banner_text_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `customer_satisfaction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthly_active_users` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` int DEFAULT NULL,
  `technical_data_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `technical_data_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `choose_us_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `meta_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `phone`, `email`, `logo`, `team_section_image`, `favicon`, `about_title`, `about_des`, `about_des_ar`, `banner_vid`, `map`, `title_en`, `title_ar`, `banner`, `welcome_phrase_ar`, `address_en`, `address_ar`, `city_en`, `city_ar`, `country_en`, `country_ar`, `about_image`, `about_section_1_image2`, `about_section_2_title_en`, `about_section_2_title_ar`, `about_section_2_Subtitle_en`, `about_section_2_Subtitle_ar`, `about_section_2_text_en`, `about_section_2_text_ar`, `about_section_2_step1_en`, `about_section_2_step1_ar`, `about_section_2_step2_en`, `about_section_2_step2_ar`, `about_section_2_step3_en`, `about_section_2_step3_ar`, `home_middel_banner_text_en`, `home_middel_banner_text_ar`, `customer_satisfaction`, `monthly_active_users`, `experience`, `technical_data_en`, `technical_data_ar`, `choose_us_image`, `meta_title_en`, `meta_title_ar`, `meta_description_en`, `meta_description_ar`, `meta_keyword_en`, `meta_keyword_ar`, `created_at`, `updated_at`) VALUES
(1, '+01222123130', 'sevenbond24@gmail.com', 'DJ779yMKtnwhLTvVouFduMCykd7XmCLblSM9Ez9X.png', 'C0izQvVvoVxOx6xoGlIjMSlA0g00qjVVzIm6yN1n.jpg', 'SuxkWWHnzTdMSMyXQ7DEtM13U7F243FdEiFZMixj.png', 'ماذا تعرف عنا', '<p>your trusted partner in auto loan financing. At The London, we understand that purchasing a vehicle is a significant investment, and our mission is to make this process as seamless and accessible as possible. Our Vision Founded with a vision to empower individuals and families, The London aims to provide innovative financial solutions that help you get behind the wheel of your dream car. We believe that everyone deserves the opportunity to own a vehicle that fits their lifestyle and budget</p>', '<p>ALUBOND هي علامة تجارية للألواح المركبة من الألمنيوم (ACP) ومواد المركب المعدني (MCM) مملوكة لشركة ملك القابضة الدولية. وقد ظهرت الشركة كأكبر علامة تجارية في العالم لـ ACP و MCM بسعة تصنيع ومعالجة تبلغ 25 مليون متر مربع من مرافقها المختلفة في الإمارات العربية المتحدة وعمان وصربيا والهند وتركيا.</p>\r\n<p>تقدم Alubond مجموعة كاملة من الألواح المعدنية المقاومة للحريق بما في ذلك الألمنيوم الصلب، والنواة المعدنية FR-A1، والنواة المعدنية FR-A2، والفئة الأوروبية FR Euroclass B، بالإضافة إلى مجموعة متنوعة من الألواح الأخرى مثل الألواح المعدنية الغريبة بخيارات من الأغطية المعدنية مثل الفولاذ المجلفن، والفولاذ المقاوم للصدأ، والنحاس، والبرونز، والتيتانيوم.</p>\r\n<p>بالإضافة إلى إنتاج المواد المركبة المعدنية، تمتلك الشركة أيضًا مرافق تصنيع متكاملة تمامًا للإنتاج العكسي والتقدمي، تنتج درجات مختلفة من النوى المعدنية المقاومة للحريق والخرز، والمواد اللاصقة المقاومة للحريق، واللفائف المطلية بالألوان، والدهانات المخصصة.</p>', 'PK0sd0qlkFBValNQRHk7n9phLwu6PLdtzXumr1py.mp4', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3602.8570946896175!2d55.54650591501441!3d25.443040783782436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDI2JzM1LjAiTiA1NcKwMzInNTUuMyJF!5e0!3m2!1sen!2seg!4v1684587587169!5m2!1sen!2seg\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'We are a digital and branding company that believes in the power of creative strategy and along with great design.', 'سميت يوفر الحلول', 'gDevTAcN2P8sr9G6CFrafjXlXRxxDVcwXgsEIaJu.jpg', 'test_ar', 'SEVENBOND Villa 412, Abdelmnem Riyad St Al Motamaye District 6th October , Giza Governate ,Cairo , Egypt', 'SEVENBOND Villa 412, Abdelmnem Riyad St Al Motamaye District 6th October , Giza Governate ,Cairo , Egypt', 'test', 'test_ar', 'test', 'test_ar', 'ijlgmN5rRy2FDvnlmJGvFNZtlU8yKcQExOYBxG0D.png', 'XadchlI4hKhoxHKHhHYuaqDAYAwWrJIK57Ifl5Q6.jpg', 'Here are 3 working steps to organize our business projects', 'هناك 3 خطوات لتنظيم العمل', 'How It Works?', 'كيف يتم العمل', 'Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare.', 'Nullam id dolor id nibh ultricies vehicula ut id elit. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis.', 'Collect Data', 'تجميع البيانات', 'Data Analysis', 'تحليل البيانات', 'Finalize Product', 'المنتج النهائي', '<p>We are trusted by over 5000+ clients. Join them by using our services and grow your business</p>', '<p>نحن موثوقون من قبل أكثر من 5000 عميل. انضم إليهم باستخدام خدماتنا وقم بتنمية أعمالك</p>', '1000', '150', 20, '<p style=\"text-align: left;\">&nbsp;</p>\r\n<h2 class=\"elementor-heading-title elementor-size-default\">A DESIGNER SOLUTION FOR MODERN BUILDINGS</h2>\r\n<p>Alubond U.S.A is the brand name for the new technology Aluminum Composite Building Panel from American Building Technologies, Illinois, U.S.A. The panel is a composite consisting of two layers of aluminum skin sandwiching a fire rated core in a continuous co-extrusion process. This new generation technology of mechanical and chemical bonding gives Alubond Panels an exceptional bond integrity. The outer aluminum skin for exterior grade Alubond U.S.A Panels is coated with PVDF Kynar 500 fluorocarbon coatings. The lower aluminum skin is chromate treated and polyester coated.</p>', NULL, 'F7VQZOUEgSN4LjkQ5QIfh2ReprcTM3Cua10vwZNK.jpg', 'test', 'test_ar', '<p>test</p>', '<p>test_ar</p>', '<p>test</p>', '<p>test_ar</p>', '2021-07-14 08:07:54', '2025-04-13 20:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_en`, `title_ar`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Get Your Car Loan Within Minutes', 'احصل على قرض سيارتك خلال دقائق', 'g6JIerk8NuXrilntLET52MCOWxAgOumBzwpt22PN.png', '2025-04-12 18:38:59', '2025-04-12 18:49:10'),
(2, 'Get Your Car Loan Within Minutes', 'احصل على قرض سيارتك خلال دقائق', 'gIY2ng3sq27F42ul2imyFPHwikz51U9q92ZPHs6g.png', '2025-04-12 18:45:08', '2025-04-12 18:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `social_settings`
--

CREATE TABLE `social_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_settings`
--

INSERT INTO `social_settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'https://www.facebook.com/', '2021-07-14 08:07:54', '2022-04-03 07:34:27'),
(6, 'instagram', 'https://www.instagram.com/', '2021-07-14 08:07:55', '2022-04-03 07:32:52'),
(7, 'youtube', 'https://www.youtube.com/', '2021-07-14 08:07:55', '2022-04-03 07:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `des_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `des_en`, `des_ar`, `title_en`, `title_ar`, `created_at`, `updated_at`) VALUES
(1, 'Nikolas Brooten', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur adipiscing dapibus curabitur blandit.', 'Sales Manager', 'مدير مبيعات', '2023-10-07 19:10:15', '2023-10-07 19:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generation` int DEFAULT NULL,
  `balance` double DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `code`, `generation`, `balance`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@app.com', '01011941903', NULL, '$2y$10$dMPdTRyR9h/lDLGa23mPPutaUHenrWz50MPY.crzN43REvPXVOvdK', '', NULL, 0, NULL, NULL, NULL),
(5, 'customer1000', 'customer1000@app.com', '01114785669', NULL, '$2y$10$Hf1SSrQszDOSwMr.G4gJEen93L8cS7.cDOG3769U7r7PwJpOknIUS', '', 1, 0, NULL, '2021-10-13 13:30:19', '2021-10-13 13:30:19'),
(8, 'amr', 'amr@customer.com', '321654987', NULL, '$2y$10$c8LAq77HHB6YMh/TcJQD9uYOtrBqWliXTRu71T0jAblHJ3E7Q0aBW', '', 1, 30, NULL, '2022-03-22 12:51:13', '2022-03-27 10:08:20'),
(9, 'omar', 'omar@customer.com', '2598422', NULL, '$2y$10$IA1hzTCjc6Gm5NhJMl/31eCJ6PYwKfHpoBkQY39Vzj6GwNOShocc2', '', 1, 0, NULL, '2022-03-22 12:51:13', '2022-03-28 13:56:51'),
(11, 'mohamed', 'mohamed@customer.com', '123456654', NULL, '$2y$10$5ARxQ1OACTzC5Pkz4JT7YO.bbTPo8Hh9GUcAYsvDQohEyc8qgQkIu', '', 1, 0, NULL, '2022-03-22 15:35:12', '2022-03-23 11:20:16'),
(12, 'ahmed', 'ahmed@customer.com', '0102255694', NULL, '$2y$10$9.YSOqNrstppj757sqveO.YYGd.WfR037qcIHX557ikCqablNshhy', '', 1, 0, NULL, '2022-03-23 11:01:12', '2022-03-23 11:01:12'),
(16, 'mahmoud', 'mahmoud@customer.com', '01011225985', NULL, '$2y$10$SMXxrpgq1KulTSh2S7EjLeHn.RGsemrM7U5dJgId/AD5b/5moVejS', 'hkmn%G1&#8', 2, NULL, NULL, '2022-03-23 13:15:15', '2022-03-23 15:00:12'),
(17, 'osama', 'osama@customer.com', '0102365488', NULL, '$2y$10$qeQT8RUQo5TcbyR8CpXlJOYwZlz9ZIrlqiIO/K4dx1rXgGz1Kc0Im', 'mnb%G2&#16#P8', 3, NULL, NULL, '2022-03-23 14:59:35', '2022-03-23 15:03:24'),
(18, 'nader', 'nader@customer.com', '01023659899', NULL, '$2y$10$XU6LSVngOGQeLuMQqbMM1OAScznrnJFz37ZgEtcLY1AYOm.UlMoYK', 'Y3k3IFeC%G3&#17#P16#P8', 4, NULL, NULL, '2022-03-23 15:02:49', '2022-03-23 15:30:06'),
(19, 'kareem', 'kareem@customer.com', '0102365488', NULL, '$2y$10$.7u/cBsJMcYfKnAuu2WTC.Gcc38mUB0kIIFxNQsYjLQ3L/pQEzW2W', '1mE1AIj3%G4&#18#P17#P16#P8', 5, NULL, NULL, '2022-03-23 15:27:55', '2022-03-23 15:43:00'),
(20, 'nour', 'nour@customer.com', '01023365988', NULL, '$2y$10$HSf6knxJFMAVubA7s9UdE.KWwOXgE1UgcUpxkYgISjq0eyMU1NLj2', 'dyGxLFOJ%G5&#19#P18#P17#P16#P8', 6, 0, NULL, '2022-03-23 15:42:28', '2022-03-23 15:42:28'),
(21, 'salah', 'salah@customer.com', '+20123456789', NULL, '$2y$10$pFxTqG/1KIWy36PgrgmiM.U25ZwlyS/5cEQoT4iJ6irkWGO6bZHPm', 'SJKL%G1&#9', 2, 0, NULL, '2022-03-27 10:28:32', '2022-03-27 10:28:32'),
(22, 'zaki', 'zaki@customer.com', '012365887', NULL, '$2y$10$0Lq/y4FcyUoGiRrC8tibjut4e1sBqIpbUFGB8hXRO48ikiRx7ZnIi', '4YvzFmkN%G6&#20#P19#P18#P17#P16#P8', 7, 0, NULL, '2022-03-27 15:02:46', '2022-03-27 15:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `id` int NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `des_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `des_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `title_en`, `title_ar`, `des_en`, `des_ar`, `created_at`, `updated_at`) VALUES
(1, 'Proven Reliability', 'موثوقية مثبتة', 'With a track record of reliability, you can trust us to deliver on our promises.', 'مع سجل موثوقية مثبت، يمكنك الوثوق بنا لتقديم ما نعد به', '2023-04-21 17:56:48', '2024-12-06 11:55:01'),
(2, 'Tailored Solutions', 'حلول مخصصة', 'We understand that each client has unique requirements, and we customize our solutions to meet those specific needs with precision and efficiency.', 'نفهم أن لكل عميل متطلبات فريدة، ونقوم بتخصيص حلولنا لتلبية هذه الاحتياجات بدقة وكفاءة.', '2023-04-21 17:56:48', '2024-12-06 11:54:21'),
(3, 'Expert Team', 'فريق خبير', 'Our knowledgeable and experienced team is always ready to assist you with any challenges and help you achieve your goals.', 'فريقنا المتمرس والخبير دائمًا جاهز لمساعدتك في مواجهة أي تحديات ومساعدتك في تحقيق أهدافك.', '2023-04-21 17:56:48', '2024-12-06 11:53:30'),
(4, 'Customer Satisfaction', 'رضا العملاء', 'Your success is our priority. We are dedicated to providing exceptional customer service and support.', 'نجاحك هو أولويتنا. نحن ملتزمون بتقديم خدمة عملاء ودعم استثنائي', '2023-04-21 17:56:48', '2024-12-06 11:52:41'),
(5, 'Quality Assurance', 'ضمان الجودة', 'Our products and services meet the highest standards of quality, ensuring reliability and performance.', 'منتجاتنا وخدماتنا تلتزم بأعلى معايير الجودة، مما يضمن موثوقية وأداء ممتازين', '2023-04-21 17:56:48', '2024-12-06 11:51:56'),
(7, 'Commitment to Innovation', 'الابتكار', 'We continually invest in the latest technologies to provide cutting-edge solutions tailored to your needs.', 'نحن نستثمر باستمرار في أحدث التقنيات لتقديم حلول متطورة تلبي احتياجاتك', '2024-12-06 11:46:13', '2024-12-06 11:51:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_galleries`
--
ALTER TABLE `project_galleries`
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
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_settings`
--
ALTER TABLE `social_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_galleries`
--
ALTER TABLE `project_galleries`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_settings`
--
ALTER TABLE `social_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
