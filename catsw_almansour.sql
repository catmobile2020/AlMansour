-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2021 at 03:16 PM
-- Server version: 5.7.36
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catsw_almansour`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `ar_title`, `en_title`, `ar_caption`, `en_caption`, `created_at`, `updated_at`) VALUES
(1, 'عن المنصور', 'ABOUT ALMANSOUR', 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل \"ألدوس بايج مايكر\" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-26 08:21:49', '2021-07-26 08:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Senior Sales Executive', '<h2 class=\"css-1u59jur\">Job&nbsp;Details</h2>\r\n<div class=\"css-rcl8e5\"><span class=\"css-wn0avc\">Experience Needed:</span><span class=\"css-47jx3m\"><span class=\"css-4xky9y\">More Than 4 Years</span></span></div>\r\n<div class=\"css-rcl8e5\"><span class=\"css-wn0avc\">Career Level:</span><span class=\"css-47jx3m\"><span class=\"css-4xky9y\">Experienced (Non-Manager)</span></span></div>\r\n<div class=\"css-rcl8e5\"><span class=\"css-wn0avc\">Education Level:</span><span class=\"css-47jx3m\"><span class=\"css-4xky9y\">Bachelor\'s Degree</span></span></div>\r\n<div class=\"css-rcl8e5\"><span class=\"css-wn0avc\">Salary:</span><span class=\"css-47jx3m\"><span class=\"css-4xky9y\">Confidential</span></span></div>\r\n<div class=\"css-13sf2ik\"><span class=\"css-wn0avc\">Job Categories:Sales/Retail</span></div>\r\n<div class=\"css-13sf2ik\">\r\n<h2 class=\"css-fwj1k5\">Job Description</h2>\r\n<div class=\"css-1uobp1k\">\r\n<p>This is a field sales job where sales executive visits customers for presenting I.T products and services.<br /><br /><strong>The duties of the job include:</strong></p>\r\n<ul>\r\n<li>Outdoor work for introducing the company and making presentations</li>\r\n<li>Writing offers and closing deals</li>\r\n<li>Grow and retain customer base</li>\r\n</ul>\r\n<h2 class=\"css-fwj1k5\">Job Requirements</h2>\r\n<div class=\"css-1t5f0fr\">\r\n<ul>\r\n<li>Minimum 4 years of proven experience in I.T field sales</li>\r\n<li>Age between 27 to 33</li>\r\n<li>Microsoft Office &amp; Internet skills</li>\r\n<li>Good command of English language</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>', '2021-08-01 16:04:16', '2021-08-01 16:04:16');

-- --------------------------------------------------------

--
-- Table structure for table `career_applies`
--

CREATE TABLE `career_applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `career_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_applies`
--

INSERT INTO `career_applies` (`id`, `career_id`, `name`, `email`, `mobile`, `cv`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'maia', 'mai@cat.com', '012154544', '/cv/1627911253.pdf', 1, '2021-08-02 13:34:13', '2021-08-02 13:34:13'),
(2, 1, 'maaaa', 'm@cat.com', '0655555', '/cv/1627913283.pdf', 1, '2021-08-02 14:08:03', '2021-08-02 14:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ar_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ar_name`, `en_name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'إسكان أعضاء هيئة التدريس بجامعة القصيم', 'Housing for faculty members at Qassim University', 'category/1627989670DY7LD.jpg', '2021-07-26 09:05:29', '2021-08-03 11:21:10'),
(2, 'التخطيط والتصميم العمراني', 'Urban planning and design', 'category/1627989689NNrKe.jpg', '2021-07-26 08:11:42', '2021-08-03 11:21:29'),
(4, 'مشاريع مبني وجمعية اجتماعية وخيرية', 'Charitable social association building projects', 'category/1627989702H1QJ8.jpg', '2021-07-26 08:13:52', '2021-08-03 11:21:42'),
(7, 'مشاريع مباني ومعارض تجارية', 'Building projects and trade fairs', 'category/1627989722Pye7y.jpg', '2021-07-28 13:27:06', '2021-08-03 11:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `comment`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed', 'admin@adin.com', 'Test comments', NULL, '2021-07-26 08:35:57', '2021-07-26 08:36:00'),
(2, 'mai', 'mai@cat.com', 'testttttt', NULL, '2021-07-29 12:25:34', '2021-07-29 12:25:34'),
(3, 'mai', 'mai@cat.com', 'testttttt', '2021-07-29 15:22:20', '2021-07-29 12:42:08', '2021-07-29 15:22:20'),
(4, 'nn', 'n@cat.com', 'tetttt', '2021-07-29 15:22:24', '2021-07-29 14:37:32', '2021-07-29 15:22:24'),
(5, 'test', 'tst@cat.com', 'testtt', NULL, '2021-07-29 14:38:50', '2021-07-29 14:38:50'),
(6, 'Mohad', 'asin@admun.com', 'test message', NULL, '2021-07-29 14:55:06', '2021-07-29 14:55:06'),
(7, 'maiiiiii', 'm@cat.com', 'hellooooooo', NULL, '2021-08-02 14:08:30', '2021-08-02 14:08:30'),
(8, 'test', 'email@admin.com', 'hi admin', NULL, '2021-08-10 08:28:04', '2021-08-10 08:28:04'),
(9, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 11:26:10', '2021-08-11 11:26:10'),
(10, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 12:36:10', '2021-08-11 12:36:10'),
(11, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:02:39', '2021-08-11 13:02:39'),
(12, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:03:43', '2021-08-11 13:03:43'),
(13, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:09:25', '2021-08-11 13:09:25'),
(14, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:27:17', '2021-08-11 13:27:17'),
(15, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:36:19', '2021-08-11 13:36:19'),
(16, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:36:49', '2021-08-11 13:36:49'),
(17, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:37:35', '2021-08-11 13:37:35'),
(18, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:38:08', '2021-08-11 13:38:08'),
(19, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:39:31', '2021-08-11 13:39:31'),
(20, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:40:43', '2021-08-11 13:40:43'),
(21, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:41:21', '2021-08-11 13:41:21'),
(22, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:42:34', '2021-08-11 13:42:34'),
(23, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:43:49', '2021-08-11 13:43:49'),
(24, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:44:19', '2021-08-11 13:44:19'),
(25, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:46:20', '2021-08-11 13:46:20'),
(26, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 13:47:10', '2021-08-11 13:47:10'),
(27, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 14:11:27', '2021-08-11 14:11:27'),
(28, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 14:13:42', '2021-08-11 14:13:42'),
(29, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 14:15:03', '2021-08-11 14:15:03'),
(30, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 14:17:16', '2021-08-11 14:17:16'),
(31, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 14:20:11', '2021-08-11 14:20:11'),
(32, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 14:21:43', '2021-08-11 14:21:43'),
(33, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 15:11:28', '2021-08-11 15:11:28'),
(34, 'Ahmed', 'test@test.com', 'hi admin', NULL, '2021-08-11 15:21:25', '2021-08-11 15:21:25');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'gallery/1627554230WxJRr.jpg', '2021-07-29 10:23:50', '2021-07-29 10:23:50'),
(2, 'gallery/1627554231QJnfG.jpg', '2021-07-29 10:23:51', '2021-07-29 10:23:51'),
(3, 'gallery/16275542323zaM2.jpg', '2021-07-29 10:23:52', '2021-07-29 10:23:52'),
(4, 'gallery/1627554233afEez.jpg', '2021-07-29 10:23:53', '2021-07-29 10:23:53'),
(5, 'gallery/1627554236sxhaS.jpg', '2021-07-29 10:23:56', '2021-07-29 10:23:56'),
(6, 'gallery/1627593010GXuQb.jpg', '2021-07-29 21:10:10', '2021-07-29 21:10:10'),
(7, 'gallery/1627593407fpBAU.jpg', '2021-07-29 21:16:47', '2021-07-29 21:16:47'),
(8, 'gallery/1627593408KDmIc.jpg', '2021-07-29 21:16:48', '2021-07-29 21:16:48'),
(9, 'gallery/162759341920n7E.jpg', '2021-07-29 21:16:59', '2021-07-29 21:16:59'),
(10, 'gallery/1627593423mxhjx.jpg', '2021-07-29 21:17:03', '2021-07-29 21:17:03'),
(11, 'gallery/1627593428i2DC9.jpg', '2021-07-29 21:17:08', '2021-07-29 21:17:08');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `site_name`, `logo`, `favicon`, `address`, `mobile`, `fax`, `email`, `facebook`, `twitter`, `linkedin`, `map`, `created_at`, `updated_at`) VALUES
(1, 'Al-Mansour', 'logo/16275689644W1Sa.jpg', 'favicon/1627568964mGDXp.jpg', 'Villa 79, Maadi Heights Compound - Katameya, Cairo. Egypt', '+201024806222', '+966507931813', 'info@almansour.consulting', NULL, NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13823.465807318693!2d31.2282846!3d29.9832678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145847a50d83ab59%3A0x4c0e8e891bcf6265!2sAs-Salam%20International%20Hospital!5e0!3m2!1sen!2seg!4v1628076665496!5m2!1sen!2seg', '2021-07-29 13:00:07', '2021-08-26 15:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Arabic', '2021-07-27 12:36:55', '2021-07-27 12:36:55'),
(2, 'English', '2021-07-27 12:36:55', '2021-07-27 12:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `service_id`, `file`, `created_at`, `updated_at`) VALUES
(51, 2, 'media/1627554338J157b.jpg', '2021-07-29 10:25:38', '2021-07-29 10:25:38'),
(52, 2, 'media/1627554339j6QTf.jpg', '2021-07-29 10:25:39', '2021-07-29 10:25:39'),
(53, 3, 'media/1627554377ra4r6.jpg', '2021-07-29 10:26:17', '2021-07-29 10:26:17'),
(54, 3, 'media/1627554377tdppR.jpg', '2021-07-29 10:26:17', '2021-07-29 10:26:17'),
(55, 3, 'media/1627554378VUI3i.jpg', '2021-07-29 10:26:18', '2021-07-29 10:26:18'),
(56, 3, 'media/16275543780SEnK.jpg', '2021-07-29 10:26:18', '2021-07-29 10:26:18'),
(57, 4, 'media/1627593737A7Lwc.jpg', '2021-07-29 21:22:17', '2021-07-29 21:22:17'),
(58, 4, 'media/1627593744Z5dZF.jpg', '2021-07-29 21:22:24', '2021-07-29 21:22:24'),
(59, 4, 'media/1627593750WEH2Z.jpg', '2021-07-29 21:22:30', '2021-07-29 21:22:30'),
(60, 1, 'media/1627594234XjNjx.jpg', '2021-07-29 21:30:34', '2021-07-29 21:30:34'),
(61, 1, 'media/1627594374EU4g4.jpg', '2021-07-29 21:32:54', '2021-07-29 21:32:54'),
(62, 1, 'media/16275949196x0X4.jpg', '2021-07-29 21:41:59', '2021-07-29 21:41:59'),
(63, 1, 'media/1627594999nsfWe.jpg', '2021-07-29 21:43:19', '2021-07-29 21:43:19');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_25_134206_create_galleries_table', 2),
(5, '2021_07_25_134306_create_news_table', 2),
(6, '2021_07_25_134340_create_languages_table', 2),
(8, '2021_07_25_134542_create_categories_table', 2),
(9, '2021_07_25_134613_create_services_table', 2),
(10, '2021_07_25_134634_create_media_table', 2),
(11, '2021_07_25_134728_create_careers_table', 2),
(12, '2021_07_25_134825_create_career_applies_table', 2),
(13, '2021_07_25_134409_create_abouts_table', 3),
(14, '2021_07_26_083041_create_contacts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `language_id`, `title`, `caption`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'نص لوريم إيبسوم القياسي والمستخدم منذ القرن الخامس عشر', 'لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في صناعات المطابع ودور النشر.', '<p dir=\"rtl\">لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (<strong>بمعنى أن الغاية هي الشكل وليس المحتوى</strong>) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل \"ألدوس بايج مايكر\" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', 'posts/1627394630bimAj.jpg', '2021-07-27 12:05:42', '2021-08-02 14:19:36'),
(2, 2, 'What is Lorem Ipsum?', 'dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', '<div>\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>&nbsp;</div>', 'posts/1627394803lKe7N.jpg', '2021-07-27 12:06:43', '2021-07-29 08:24:02'),
(3, 1, 'ما هو \"لوريم إيبسوم\" ؟وما فائدته ؟', 'العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر', '<p dir=\"rtl\">لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي <em><span style=\"text-decoration: underline;\">(بمعنى أن الغاية هي الشكل وليس المحتوى)</span></em> ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" (<strong>Letraset</strong>) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل \"ألدوس بايج مايكر\" (<strong>Aldus PageMaker</strong>) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>\r\n<div>\r\n<p dir=\"rtl\">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"lorem ipsum\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>\r\n</div>\r\n<div>&nbsp;</div>', 'posts/16275539952h593.jpg', '2021-07-27 15:03:27', '2021-07-29 10:19:55'),
(4, 1, 'ما هو \"لوريم إيبسوم\" ؟وما فائدته ؟', 'وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق', '<p style=\"text-align: right;\">لوريم إيبسوم هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى)</p>\r\n<p style=\"text-align: right;\">ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق \"ليتراسيت\" البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر الإلكتروني مثل \"ألدوس بايج مايكر\" والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.</p>', 'posts/1627911150YZjnj.jpg', '2021-08-02 13:32:30', '2021-08-02 13:32:30');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `ar_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `ar_title`, `ar_content`, `en_title`, `en_content`, `thumbnail`, `video`, `created_at`, `updated_at`) VALUES
(1, 4, 'مبني جمعية الأمير فهد بن سلطان', '<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"<strong>lorem ipsum</strong>\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>\r\n<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"<strong>lorem ipsum</strong>\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>\r\n<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"<strong>lorem ipsum</strong>\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</p>', 'Prince Fahd Bin Sultan Society Building', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'service/1627554266BOXUg.jpg', 'https://www.youtube.com/embed/cnZfPPiivwk', '2021-07-26 10:57:09', '2021-08-03 11:22:59'),
(2, 4, 'المدينة الحضارية الخيرية', '<p><span style=\"text-decoration: underline;\">المدينة الحضرية الخيرية:</span></p>\r\n<p>معلومات عن <strong>المدينة الحضارية الخيرية</strong></p>\r\n<p>مدينة تقع على مساحة:</p>', 'Urban City Charity', '<p>Urban City Charity:</p>\r\n<p>Information about the Charitable Civilization City</p>\r\n<p>City located on an area:</p>', 'service/1627554325hoeh8.jpg', NULL, '2021-07-26 10:52:40', '2021-07-29 10:25:25'),
(3, 7, 'معرض ومستودع شركة الزاهد كتراكت بالسلي - الرياض', '<p dir=\"rtl\">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور \"ريتشارد ماك لينتوك\" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي \"consectetur\"، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب \"حول أقاصي الخير والشر\" (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم \"Lorem ipsum dolor sit amet..\" يأتي من سطر في القسم 1.20.32 من هذا الكتاب.</p>\r\n<p dir=\"rtl\">للمهتمين قمنا بوضع نص لوريم إبسوم القياسي والمُستخدم منذ القرن الخامس عشر في الأسفل. وتم أيضاً توفير الأقسام 1.10.32 و 1.10.33 من \"حول أقاصي الخير والشر\" (de Finibus Bonorum et Malorum) لمؤلفه شيشيرون (Cicero) بصيغها الأصلية، مرفقة بالنسخ الإنكليزية لها والتي قام بترجمتها هـ.راكهام (H. Rackham) في عام 1914.</p>\r\n<p dir=\"rtl\">خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور \"ريتشارد ماك لينتوك\" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي \"consectetur\"، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب \"حول أقاصي الخير والشر\" (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم \"Lorem ipsum dolor sit amet..\" يأتي من سطر في القسم 1.20.32 من هذا الكتاب.</p>\r\n<p dir=\"rtl\">للمهتمين قمنا بوضع نص لوريم إبسوم القياسي والمُستخدم منذ القرن الخامس عشر في الأسفل. وتم أيضاً توفير الأقسام 1.10.32 و 1.10.33 من \"حول أقاصي الخير والشر\" (de Finibus Bonorum et Malorum) لمؤلفه شيشيرون (Cicero) بصيغها الأصلية، مرفقة بالنسخ الإنكليزية لها والتي قام بترجمتها هـ.راكهام (H. Rackham) في عام 1914.</p>', 'Showroom and warehouse of Al-Zahid Cataract Company in Al-Sali - Riyadh', '<p>Contrary to popular belief, Lorem ipsum is not a random text. Rather, it has roots in classical Latin literature since 45 BC, making it more than 2,000 years old. Professor Richard McClintock, Professor of Latin at the University of Hampden-Sydney in Virginia, searched for the origins of an obscure Latin word in Lorem Ipsum\'s text, \"consectetur\", and, while tracing this word in Latin literature, discovered the unquestionable source. It turns out that the words of Lorem Ipsum\'s text come from sections 1.10.32 and 1.10.33 of Cicero\'s De Finibus Bonorum et Malorum, written in 45 BC. This book is a lengthy scholarly treatise on moral theory and was very popular in the Renaissance. The first line of Lorem ipsum \"Lorem ipsum dolor sit amet..\" comes from a line in section 1.20.32 of this book.</p>\r\n<p>For those interested, we\'ve put the standard Lorem Epsom text in use since the 15th century below. Sections 1.10.32 and 1.10.33 of De Finibus Bonorum et Malorum by Cicero are also made available in their original form, with English versions translated by H. Rackham in 1914.</p>\r\n<p>Contrary to popular belief, Lorem ipsum is not a random text. Rather, it has roots in classical Latin literature since 45 BC, making it more than 2,000 years old. Professor Richard McClintock, Professor of Latin at the University of Hampden-Sydney in Virginia, searched for the origins of an obscure Latin word in Lorem Ipsum\'s text, \"consectetur\", and, while tracing this word in Latin literature, discovered the unquestionable source. It turns out that the words of Lorem Ipsum\'s text come from sections 1.10.32 and 1.10.33 of Cicero\'s De Finibus Bonorum et Malorum, written in 45 BC. This book is a lengthy scholarly treatise on moral theory and was very popular in the Renaissance. The first line of Lorem ipsum \"Lorem ipsum dolor sit amet..\" comes from a line in section 1.20.32 of this book.</p>\r\n<p>For those interested, we\'ve put the standard Lorem Epsom text in use since the 15th century below. Sections 1.10.32 and 1.10.33 of De Finibus Bonorum et Malorum by Cicero are also made available in their original form, with English versions translated by H. Rackham in 1914.</p>', 'service/1627593674ZkpPf.jpg', NULL, '2021-07-28 13:28:28', '2021-07-29 21:21:14'),
(4, 7, 'مقر سمسا بالرياض', '<p>خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور \"ريتشارد ماك لينتوك\" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي \"consectetur\"، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب \"حول أقاصي الخير والشر\" (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم \"Lorem ipsum dolor sit amet..\" يأتي من سطر في القسم 1.20.32 من هذا الكتاب.</p>\r\n<p>للمهتمين قمنا بوضع نص لوريم إبسوم القياسي والمُستخدم منذ القرن الخامس عشر في الأسفل. وتم أيضاً توفير الأقسام 1.10.32 و 1.10.33 من \"حول أقاصي الخير والشر\" (de Finibus Bonorum et Malorum) لمؤلفه شيشيرون (Cicero) بصيغها الأصلية، مرفقة بالنسخ الإنكليزية لها والتي قام بترجمتها هـ.راكهام (H. Rackham) في عام 1914.</p>\r\n<p>خلافاَ للإعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام البروفيسور \"ريتشارد ماك لينتوك\" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي \"consectetur\"، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي من الأقسام 1.10.32 و 1.10.33 من كتاب \"حول أقاصي الخير والشر\" (de Finibus Bonorum et Malorum) للمفكر شيشيرون (Cicero) والذي كتبه في عام 45 قبل الميلاد. هذا الكتاب هو بمثابة مقالة علمية مطولة في نظرية الأخلاق، وكان له شعبية كبيرة في عصر النهضة. السطر الأول من لوريم إيبسوم \"Lorem ipsum dolor sit amet..\" يأتي من سطر في القسم 1.20.32 من هذا الكتاب.</p>\r\n<p>للمهتمين قمنا بوضع نص لوريم إبسوم القياسي والمُستخدم منذ القرن الخامس عشر في الأسفل. وتم أيضاً توفير الأقسام 1.10.32 و 1.10.33 من \"حول أقاصي الخير والشر\" (de Finibus Bonorum et Malorum) لمؤلفه شيشيرون (Cicero) بصيغها الأصلية، مرفقة بالنسخ الإنكليزية لها والتي قام بترجمتها هـ.راكهام (H. Rackham) في عام 1914.</p>', 'SMSA headquarters in Riyadh', '<p>Contrary to popular belief, Lorem ipsum is not a random text. Rather, it has roots in classical Latin literature since 45 BC, making it more than 2,000 years old. Professor Richard McClintock, Professor of Latin at the University of Hampden-Sydney in Virginia, searched for the origins of an obscure Latin word in Lorem Ipsum\'s text, \"consectetur\", and, while tracing this word in Latin literature, discovered the unquestionable source. It turns out that the words of Lorem Ipsum\'s text come from sections 1.10.32 and 1.10.33 of Cicero\'s De Finibus Bonorum et Malorum, written in 45 BC. This book is a lengthy scholarly treatise on moral theory and was very popular in the Renaissance. The first line of Lorem ipsum \"Lorem ipsum dolor sit amet..\" comes from a line in section 1.20.32 of this book.</p>\r\n<p>For those interested, we\'ve put the standard Lorem Epsom text in use since the 15th century below. Sections 1.10.32 and 1.10.33 of De Finibus Bonorum et Malorum by Cicero are also made available in their original form, with English versions translated by H. Rackham in 1914.</p>\r\n<p>Contrary to popular belief, Lorem ipsum is not a random text. Rather, it has roots in classical Latin literature since 45 BC, making it more than 2,000 years old. Professor Richard McClintock, Professor of Latin at the University of Hampden-Sydney in Virginia, searched for the origins of an obscure Latin word in Lorem Ipsum\'s text, \"consectetur\", and, while tracing this word in Latin literature, discovered the unquestionable source. It turns out that the words of Lorem Ipsum\'s text come from sections 1.10.32 and 1.10.33 of Cicero\'s De Finibus Bonorum et Malorum, written in 45 BC. This book is a lengthy scholarly treatise on moral theory and was very popular in the Renaissance. The first line of Lorem ipsum \"Lorem ipsum dolor sit amet..\" comes from a line in section 1.20.32 of this book.</p>\r\n<p>For those interested, we\'ve put the standard Lorem Epsom text in use since the 15th century below. Sections 1.10.32 and 1.10.33 of De Finibus Bonorum et Malorum by Cicero are also made available in their original form, with English versions translated by H. Rackham in 1914.</p>', 'service/1627554394zQENL.jpg', NULL, '2021-07-28 13:39:09', '2021-07-29 10:26:34');

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
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$awlYhQ0dkl11.b0hPbTAAutkOSnuGczGLxANsu6p2tiED/5HVFcOS', 'mwxyb7WEuq7j9jVBdmujCEARIZWCCDgSnKGECERaGxJGu14KVg0Mr3k2jReC', '2021-07-25 10:15:02', '2021-07-25 10:15:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_applies`
--
ALTER TABLE `career_applies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `career_applies_career_id_index` (`career_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_service_id_index` (`service_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_language_id_index` (`language_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_category_id_index` (`category_id`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_applies`
--
ALTER TABLE `career_applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
