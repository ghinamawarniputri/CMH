-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2024 at 09:04 AM
-- Server version: 8.0.35-cll-lve
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yukmaric_bnc_cookies`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_default_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `images`, `whatsapp_default_message`, `created_at`, `updated_at`) VALUES
(1, 'Bolen', 'categories/01HRXN7J06Z2MDE84FZRTDSTHG.jpg', 'Teh mau tanya - tanya dong tentang per bolenan...', '2024-03-13 21:58:50', '2024-06-06 00:28:30'),
(2, 'Pastry', 'categories/01HRXNR0YTJ67KSF40TSTXYGJ2.jpg', 'Teh mau tanya - tanya dong tentang per pastry-an...', '2024-03-13 22:07:49', '2024-06-06 00:28:43'),
(3, 'Kue Kering 500gr', 'categories/01HRXNS3536ZW6M67HHMXX4P9C.jpg', 'Teh mau tanya - tanya dong tentang kue kering yang 500gr...', '2024-03-13 22:08:24', '2024-06-06 00:28:55'),
(5, 'Hampers', 'categories/01HRXNTKXVVS9QD66YCACDVZXJ.jpg', 'Teh mau tanya - tanya dong tentang hampers nya...', '2024-03-13 22:09:14', '2024-06-06 00:29:08'),
(6, 'Snack dan Catering', 'categories/01HRXNVEEN7X7FZ390SCBQB0YE.jpg', 'Teh mau tanya - tanya dong tentang per cateringan dan snack box...', '2024-03-13 22:09:41', '2024-06-06 00:29:22'),
(8, 'Kue Kering 250gr', 'categories/01HZMG7KEDSYSE987Y9P5DPY7X.jpg', 'Teh mau tanya - tanya dong tentang kue kering yang 250gr...', '2024-06-05 08:28:11', '2024-06-06 00:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_13_053349_create_categories_table', 1),
(6, '2024_03_13_053427_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT '0',
  `shopee_link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `whatsapp_default_message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `images`, `visibility`, `shopee_link`, `whatsapp_default_message`, `created_at`, `updated_at`) VALUES
(2, 3, 'Kacang Almond', NULL, '90000', 'products/01HZP7VB2992H370SQ5ZTBMW4H.jpg', 1, '#', 'Teh, mau order kacang almond 500gr Rp90.000 dong.. masih ready?', '2024-06-05 08:29:57', '2024-06-06 16:44:07'),
(3, 3, 'Double Chocochip', NULL, '95000', 'products/01HZP7Z5H5J4WEP3MD6S694SQW.jpg', 1, '#', 'Teh, mau order double chocochip 500gr Rp95.000 dong.. masih ready?', '2024-06-05 08:30:54', '2024-06-06 16:44:17'),
(4, 3, 'Coklatstik', NULL, '115000', 'products/01HZP8455GTQAS6GNEP9NGHKNH.jpg', 1, '#', 'Teh, mau order coklat stik 500gr Rp115.000 dong.. masih ready?', '2024-06-05 08:31:29', '2024-06-06 16:44:24'),
(5, 3, 'Kastangel', NULL, '110000', 'products/01HZP85VBET1RZ9MDV4YY4KDEA.jpg', 1, '#', 'Teh, mau order kastangel 500gr Rp110.000 dong.. masih ready?', '2024-06-05 08:32:00', '2024-06-06 16:44:31'),
(6, 3, 'Nastar Keju', NULL, '115000', 'products/01HZP890NJQ9E5962CKQX3D7DA.jpg', 1, '#', 'Teh, mau order nastar keju 500gr Rp115.000 dong.. masih ready?', '2024-06-05 08:32:22', '2024-06-06 16:44:38'),
(7, 3, 'Nastar Original', NULL, '100000', 'products/01HZPRTBHJDKV9EMDFJHW1AT19.jpg', 1, '#', 'Teh, mau order nastar original 500gr Rp100.000 dong.. masih ready?', '2024-06-05 08:32:45', '2024-06-06 16:44:44'),
(8, 3, 'Lidah Kucing Keju', NULL, '120000', 'products/01HZPRYGWZP62XSXJG5PF2QMGA.jpg', 1, '#', 'Teh, mau order lidah kucing keju 500gr Rp120.000 dong.. masih ready?', '2024-06-05 08:33:28', '2024-06-06 16:44:50'),
(9, 3, 'Salju Mete Susu', NULL, '100000', 'products/01HZPS33BDYAS5V6GD06GJMKCV.jpg', 1, '#', 'Teh, mau order salju mete susu 500gr Rp100.000 dong.. masih ready?', '2024-06-05 08:33:58', '2024-06-06 16:44:56'),
(10, 3, 'Double Kastangel', NULL, '135000', 'products/01HZPS5VTCZRTWCZHBE45SZYAC.jpg', 1, '#', 'Teh, mau order double kastangel 500gr Rp135.000 dong.. masih ready?', '2024-06-05 08:34:22', '2024-06-06 16:45:02'),
(11, 8, 'Kacang Almond', NULL, '50000', 'products/01HZPS9ESYAR9QKQC69QVGHC4Z.jpg', 1, '#', 'Teh, mau order kacang almond 250gr Rp50.000 dong.. masih ready?', '2024-06-05 08:37:17', '2024-06-06 16:45:09'),
(12, 8, 'Double Chocochip', NULL, '55000', 'products/01HZPSAD9EHEVCX1V1SEMPDHH6.jpg', 1, '#', 'Teh, mau order double chocochip 250gr Rp55.000 dong.. masih ready?', '2024-06-05 08:37:44', '2024-06-06 17:02:35'),
(13, 8, 'Coklatstik', NULL, '65000', 'products/01HZPSBA2ZZ8M3D9K8G040TJ3M.jpg', 1, '#', 'Teh, mau order coklat stik 250gr Rp65.000 dong.. masih ready?', '2024-06-05 08:38:08', '2024-06-06 17:02:44'),
(14, 8, 'Kastangel', NULL, '65000', 'products/01HZPSC3NV6Q9H06Q68C4MFG5X.jpg', 1, '#', 'Teh, mau order kastangel 250gr Rp65.000 dong.. masih ready?', '2024-06-05 08:38:37', '2024-06-06 17:02:53'),
(15, 8, 'Nastar Keju', NULL, '65000', 'products/01HZPSD15CH0B46A6F4CBB9YRK.jpg', 1, '#', 'Teh, mau order nastar keju 250gr Rp65.000 dong.. masih ready?', '2024-06-05 08:39:00', '2024-06-06 17:03:01'),
(16, 8, 'Nastar Original', NULL, '60000', 'products/01HZPSDTH1KPRCHE3Z9669T9DH.jpg', 1, '#', 'Teh, mau order nastar original 250gr Rp60.000 dong.. masih ready?', '2024-06-05 08:39:19', '2024-06-06 17:03:09'),
(17, 8, 'Lidah Kucing Keju', NULL, '67000', 'products/01HZPSEJDQR1FXPW0D8AV7DT4T.jpg', 1, '#', 'Teh, mau order lidah kucing keju 250gr Rp67.000 dong.. masih ready?', '2024-06-05 08:39:40', '2024-06-06 17:03:17'),
(18, 8, 'Salju Mete Susu', NULL, '60000', 'products/01HZPSFAF4KRYXB5CR3V6KY9TH.jpg', 1, '#', 'Teh, mau order salju mete susu 250gr Rp60.000 dong.. masih ready?', '2024-06-05 08:40:00', '2024-06-06 17:03:24'),
(19, 8, 'Double Kastangel', NULL, '75000', 'products/01HZPSGCXD9WG1EGFRAVHK8H2G.jpg', 1, '#', 'Teh, mau order double kastangel 250gr Rp75.000 dong.. masih ready?', '2024-06-05 08:40:20', '2024-06-06 17:03:31'),
(20, 3, 'Palm Cheese Cookies', NULL, '100000', 'products/01HZPSMHXGTC336NKV378F5DDN.jpg', 1, '#', 'Teh, mau order palm cheese cookies 500gr Rp100.000 dong.. masih ready?', '2024-06-05 08:41:16', '2024-06-06 17:03:40'),
(21, 8, 'Palm Cheese Cookies', NULL, '60000', 'products/01HZPSK9XZFN0D619KXQZY3K3Y.jpg', 1, '#', 'Teh, mau order palm cheese cookies 250gr Rp60.000 dong.. masih ready?', '2024-06-05 08:41:32', '2024-06-06 17:03:47'),
(22, 3, 'Mix Series 1', NULL, '135000', 'products/01HZNDTX2A13XMFZPMPY045DZJ.jpg', 1, '#', 'Teh, mau order Mix Series 1 Rp135.000 dong.. masih ready?', '2024-06-05 17:05:32', '2024-06-06 17:05:25'),
(23, 3, 'Mix Series 2', NULL, '135000', 'products/01HZNDVN401BPP5A0FXX6A7AVM.jpg', 1, '#', 'Teh, mau order Mix Series 2 Rp135.000 dong.. masih ready?', '2024-06-05 17:05:57', '2024-06-06 17:05:35'),
(24, 3, 'Mix Series 3', NULL, '135000', 'products/01HZQTTJ2ZTWCGNS2KQPHGMVS6.jpg', 1, '#', 'Teh, mau order Mix Series 3 Rp135.000 dong.. masih ready?', '2024-06-05 17:06:19', '2024-06-06 17:05:41'),
(25, 5, 'Qaireen Hampers Premium (Coklatstik, Lidah Kucing keju, dan Double Kastangel \'toples ulir kaca\' 250gr)', NULL, '217000', 'products/01HZNE2D4C2HJ9XT20G20GQ9EJ.jpg', 1, '#', 'Teh, mau order Qaireen Hampers Premium (Coklatstik, Lidah Kucing keju, dan Double Kastangel \'toples ulir kaca\' 250gr) Rp217.000 dong.. ready?', '2024-06-05 17:09:38', '2024-06-06 17:04:25'),
(26, 5, 'Qaireen Hampers Reguler (Coklatstik, Salju Mete Susu, dan Kastangel \'toples fox\' 250gr)', NULL, '195000', 'products/01HZNE4Q657TP8B9RFPFB3K56W.jpg', 1, '#', 'Teh, mau order Qaireen Hampers Reguler (Coklatstik, Salju Mete Susu, dan Kastangel \'toples fox\' 250gr) Rp195.000 dong.. ready?', '2024-06-05 17:10:54', '2024-06-06 17:04:33'),
(27, 5, 'Sajada Hampers Premium (Sejadah traveling, tasbih, Salju Mete Susu dan Kastangel \'toples fox\' 250gr)', NULL, '185000', 'products/01HZNE7DX6RTWZCGMHYGY735HA.jpg', 1, '#', 'Teh, mau order Sajada Hampers Premium (Sejadah traveling, tasbih, Salju Mete Susu dan Kastangel \'toples fox\' 250gr) Rp185.000 dong.. ready?', '2024-06-05 17:12:23', '2024-06-06 17:04:43'),
(28, 5, 'Aisya Nasywa Hampers (Nastar Ori, Palm Cheese, dan Salju Mete Susu ukuran 500gr / BIG SIZE)', NULL, '315000', 'products/01HZNEH3KQRJFBGQ69M58B7N9E.jpg', 1, '#', 'Teh, mau order Aisya Nasywa Hampers (Nastar Ori, Palm Cheese, dan Salju Mete Susu ukuran 500gr / BIG SIZE) Rp315.000  dong.. ready?', '2024-06-05 17:17:40', '2024-06-06 17:04:52'),
(29, 5, 'Aisya Nasywa Hampers (Nastar Ori, Palm Cheese, dan Salju Mete Susu ukuran 250gr / MINI SIZE)', NULL, '195000', 'products/01HZNEK0AY66QC7BB246J8JXZ6.jpg', 1, '#', 'Teh, mau order Aisya Nasywa Hampers (Nastar Ori, Palm Cheese, dan Salju Mete Susu ukuran 250gr / MINI SIZE) Rp195.000 dong.. ready?', '2024-06-05 17:18:42', '2024-06-06 17:05:01'),
(30, 5, 'Hazani Hampers (Mix Series 2 & 3 ukuran 500gr)', NULL, '285000', 'products/01HZNEM5Z8QZWJDGCBNA44FKVG.jpg', 1, '#', 'Teh, mau order Hazani Hampers (Mix Series 2 & 3 ukuran 500gr) Rp285.000 dong.. ready?', '2024-06-05 17:19:21', '2024-06-06 17:05:10'),
(31, 5, 'Inaya Hampers (Palm Cheese Cookies ukuran 250gr)', NULL, '75000', 'products/01HZNEN26SXXZNQ2FQ5SGECNF8.jpg', 1, '#', 'Teh, mau order Inaya Hampers (Palm Cheese Cookies ukuran 250gr) Rp75.000 dong.. ready?', '2024-06-05 17:19:50', '2024-06-06 17:05:17'),
(32, 1, 'Bolen Lilit Big (Isi 6)', NULL, '70000', 'products/01HZQT03DP355M7XPMWWJ5DTV6.jpg', 1, '#', 'Teh, mau order bolen lilit big isi 6 Rp70.000 dong.. ready?', '2024-06-05 17:29:42', '2024-06-06 17:06:11'),
(33, 1, 'Bolen Lilit Big (Isi 2)', NULL, '30000', 'products/01HZQT1S76EEBABHVYW7C7AHBH.jpg', 1, '#', 'Teh, mau order bolen lilit big isi 2 Rp30.000 dong.. ready?', '2024-06-05 17:30:05', '2024-06-06 17:06:17'),
(34, 1, 'Bolen Lilit Reguler (Isi 10)', NULL, '85000', 'products/01HZQT5X2ZGNXHN28C84WADN07.jpg', 1, '#', 'Teh, mau order bolen reguler isi 10 Rp85.000 dong.. ready?', '2024-06-05 17:31:08', '2024-06-06 17:06:24'),
(35, 1, 'Bolen Lilit Reguler (Isi 4)', NULL, '40000', 'products/01HZQT6KKH9ZT6B75GBBN2JQ0E.jpg', 1, '#', 'Teh, mau order bolen reguler isi 4 Rp40.000 dong.. ready?', '2024-06-05 17:31:31', '2024-06-06 17:06:30'),
(36, 1, 'Bolen Spesial (Isi 8)', NULL, '50000', 'products/01HZQT3G5545GA1XFCRPV22FG8.jpg', 1, '#', 'Teh, mau order bolen spesial isi 8 Rp50.000 dong.. ready?', '2024-06-05 17:32:22', '2024-06-06 17:06:36'),
(38, 2, 'Rolls Pastry Chocofull', NULL, '42000', 'products/01HZQTA5KE76DGZDA1EWH6ENYZ.jpg', 1, '#', 'Teh, mau order Rolls Pastry Chocofull Rp42.000 dong.. ready?', '2024-06-05 17:34:47', '2024-06-06 17:06:43'),
(39, 2, 'Rolls Pastry Cheesefull', NULL, '45000', 'products/01HZQTB1WM8RMGBQQPZ51164HC.jpg', 1, '#', 'Teh, mau order Rolls Pastry Cheesefull Rp45.000 dong.. ready?', '2024-06-05 17:35:12', '2024-06-06 17:07:11'),
(40, 2, 'Rolls Pastry Mix', NULL, '43000', 'products/01HZQTBXGX081FS0CS39NQ7YE4.jpg', 1, '#', 'Teh, mau order Rolls Pastry Mix Rp43.000 dong.. ready?', '2024-06-05 17:35:35', '2024-06-06 17:07:04'),
(41, 2, 'Double Rolls (Isi 12 - Cheese & Choco)', NULL, '52000', 'products/01HZQTCQXD1F61CR2YYCXKAP5V.jpg', 1, '#', 'Teh, mau order Double Rolls Rp52.000 dong.. ready?', '2024-06-05 17:36:21', '2024-06-06 17:06:58'),
(42, 1, 'Bolen Double Topping (Isi 8)', NULL, '57000', 'products/01HZQTGA6A6G013190VDZW23AG.jpg', 1, '#', 'Teh, mau order Bolen Double Topping (Isi 8) Rp57.000 dong.. ready?', '2024-06-05 17:36:59', '2024-06-06 17:06:51'),
(43, 1, 'Bolen Mini Isi 10', NULL, '53000', 'products/01HZQTHT0EDY0V4S272KBVE5B7.jpg', 1, '#', 'Teh, mau order Bolen Mini (Isi 10) Rp53.000 dong.. ready?', '2024-06-05 17:37:31', '2024-06-06 17:07:43'),
(44, 1, 'Baby Bolit Eko (Isi 6 Pcs)', NULL, '32000', 'products/01HZQTMBNKJZP2Q2HGW2W99SJF.jpg', 1, '#', 'Teh, mau order Baby Bolit Eko (Isi 6 Pcs) Rp32.000 dong.. ready?', '2024-06-05 17:38:15', '2024-06-06 17:07:49'),
(45, 6, 'Catering Paket Hemat - Nasi Cokot Ayam Suwir', NULL, '6000', 'products/01HZPSRKKQYDMF04YAVH8WV45C.jpg', 1, '#', 'Teh, mau order Catering Paket Hemat - Nasi Cokot Ayam Suwir Rp6.000 dong.. ready?', '2024-06-05 17:45:16', '2024-06-06 17:08:00'),
(46, 6, 'Catering Paket Hemat - Nasi Liwet Bakar Ayam/Tongkol Suwir', NULL, '10000', 'products/01HZPSSD7D0QD9Z7T45414C1HD.jpg', 1, '#', 'Teh, mau order Catering Paket Hemat - Nasi Liwet Bakar Ayam/Tongkol Suwir Rp10.000 dong.. ready?', '2024-06-05 17:45:42', '2024-06-06 17:08:06'),
(47, 6, 'Catering Paket Hemat - (Nasi - Telor Balado - Bihun Sayur)', NULL, '12000', 'products/01HZPST7RRKK4XVY6YSPC9JDC1.jpg', 1, '#', 'Teh, mau order Catering Paket Hemat - (Nasi - Telor Balado - Bihun Sayur) Rp12.000 dong.. ready?', '2024-06-05 17:46:01', '2024-06-06 17:08:14'),
(48, 6, 'Catering Paket Hemat - (Nasi - Ayam Potong - Sambel - Lalap)', NULL, '15000', 'products/01HZPSV41YW7M8F2N454J1BQ7Y.jpg', 1, '#', 'Teh, mau order Catering Paket Hemat - (Nasi - Ayam Potong - Sambel - Lalap) Rp15.000 dong.. ready?', '2024-06-05 17:46:27', '2024-06-06 17:08:20'),
(49, 6, 'Catering Paket Hemat - (Nasi - Tongkol Balado - Kangkung - kerupuk)', NULL, '14000', 'products/01HZPSW3D7P0A803M807VZ6CW7.jpg', 1, '#', 'Teh, mau order Catering Paket Hemat - (Nasi - Tongkol Balado - Kangkung - kerupuk) Rp14.000 dong.. ready?', '2024-06-05 17:46:57', '2024-06-06 17:08:27'),
(50, 6, 'Catering Paket Hemat - (Nasi - Ayam Potong - Tahu/tempe - Sambel - Lalap)', NULL, '16000', 'products/01HZPSWWWPV8202HQ937YTXCAH.jpg', 1, '#', 'Teh, mau order Catering Paket Hemat - (Nasi - Ayam Potong - Tahu/tempe - Sambel - Lalap) Rp16.000 dong.. ready?', '2024-06-05 17:48:23', '2024-06-06 17:08:55'),
(51, 6, 'Catering Paket Medium - (Nasi - Ayam goreng - Sambal - Tumisan)', NULL, '17000', 'products/01HZPSXM23YF2RN4TK3NQGSEAM.jpg', 1, '#', 'Teh, mau order Catering Paket Medium - (Nasi - Ayam goreng - Sambal - Tumisan) Rp17.000 dong.. ready?', '2024-06-05 17:48:59', '2024-06-06 17:08:47'),
(52, 6, 'Catering Paket Medium - (Nasi - Ayam kecap - Sambal - Tumisan)', NULL, '17000', 'products/01HZPSYHK35PDGN38D1EDD5VBE.jpg', 1, '#', 'Teh, mau order Catering Paket Medium - (Nasi - Ayam kecap - Sambal - Tumisan) Rp17.000 dong.. ready?', '2024-06-05 17:49:23', '2024-06-06 17:08:41'),
(53, 6, 'Catering Paket Medium - (Nasi - Ikan Goreng - Sambal - Lalapan)', NULL, '18000', 'products/01HZPSZA95RQMXF09ZGJM1XPEK.jpg', 1, '#', 'Teh, mau order Catering Paket Medium - (Nasi - Ikan Goreng - Sambal - Lalapan) Rp18.000  dong.. ready?', '2024-06-05 17:49:51', '2024-06-06 17:10:25'),
(54, 6, 'Catering Paket Medium - (Nasi - Ayam kremes - Capcay - Tempe Balado)', NULL, '17000', 'products/01HZPT01M9YHXS3TKEEZ47FS63.jpg', 1, '#', 'Teh, mau order Catering Paket Medium - (Nasi - Ayam kremes - Capcay - Tempe Balado) Rp17.000 dong.. ready?', '2024-06-05 17:50:19', '2024-06-06 17:10:19'),
(55, 6, 'Catering Paket Medium - (Nasi - Ayam Balado - Perkedel - Bihun sayur)', NULL, '18000', 'products/01HZPT0PC697CV3T4BWGX8TJN8.jpg', 1, '#', 'Teh, mau order Catering Paket Medium - (Nasi - Ayam Balado - Perkedel - Bihun sayur) Rp18.000 dong.. ready?', '2024-06-05 17:50:44', '2024-06-06 17:10:13'),
(56, 6, 'Catering Paket Medium - (Nasi - Sapi teriyaki - Tumisan - kerupuk)', NULL, '19000', 'products/01HZPT1DGFNMP45TP0995PK6B3.jpg', 1, '#', 'Teh, mau order Catering Paket Medium - (Nasi - Sapi teriyaki - Tumisan - kerupuk) Rp19.000 dong.. ready?', '2024-06-05 17:51:13', '2024-06-06 17:10:06'),
(57, 6, 'Catering Paket Medium - (Nasi - Ayam Suwir - Cah jamur - Perkedel jagung - Buah)', NULL, '19000', 'products/01HZPT235BYSF2QK3SPPEHX4ZB.jpg', 1, '#', 'Teh, mau order Catering Paket Medium - (Nasi - Ayam Suwir - Cah jamur - Perkedel jagung - Buah) Rp19.000 dong.. ready?', '2024-06-05 17:51:39', '2024-06-06 17:09:59'),
(58, 6, 'Catering Paket Premium - (Nasi - Ayam Goreng/ Bakar- Sambal - Tumisan - tahu/tempe - kentang balado)', NULL, '25000', 'products/01HZPT2S3M0RNJW9WKAXSF8PGB.jpg', 1, '#', 'Teh, mau order Catering Paket Premium - (Nasi - Ayam Goreng/ Bakar- Sambal - Tumisan - tahu/tempe - kentang balado) Rp25.000 dong.. ready?', '2024-06-05 17:52:22', '2024-06-06 17:09:52'),
(59, 6, 'Catering Paket Premium - (Nasi - Ayam Pejantan - Sambal terasi - Perkedel - Tumisan)', NULL, '29000', 'products/01HZPT3FK5DDSZH7QYF00Z1ZYR.jpg', 1, '#', 'Teh, mau order Catering Paket Premium - (Nasi - Ayam Pejantan - Sambal terasi - Perkedel - Tumisan) Rp29.000 dong.. ready?', '2024-06-05 17:52:43', '2024-06-06 17:09:46'),
(60, 6, 'Catering Paket Premium - (Nasi - Cumi - Cah Jamur - Sambal - Kerupuk)', NULL, '32000', 'products/01HZPT44TSBMNACP3DEP34MN0Y.jpg', 1, '#', 'Teh, mau order Catering Paket Premium - (Nasi - Cumi - Cah Jamur - Sambal - Kerupuk) Rp32.000 dong.. ready?', '2024-06-05 17:53:10', '2024-06-06 17:09:40'),
(61, 6, 'Catering Paket Premium - (Nasi - Ayam Balado - Capcay - Perkedel - Kerupuk - buah - air 330ml)', NULL, '30000', 'products/01HZPT4YRJWSW1MD778NAC8J1B.jpg', 1, '#', 'Teh, mau order Catering Paket Premium - (Nasi - Ayam Balado - Capcay - Perkedel - Kerupuk - buah - air 330ml) Rp30.000 dong.. ready?', '2024-06-05 17:53:33', '2024-06-06 17:09:35'),
(62, 6, 'Catering Paket Sadulur - (5 Porsi Nasi Liwetan, 5 Porsi Ayam Potong, 5 Porsi Tahu Tauge, 5 Tahu Goreng, Sambel Dadak /Terasi Goreng, Tumis Leunca Teri, Asin, Lalapan)', NULL, '175000', 'products/01HZNGQDNK8PDHDJMQ2495M3VF.jpg', 1, '#', 'Teh, mau order Catering Paket Sadulur - (5 Porsi Nasi Liwetan, 5 Porsi Ayam Potong, 5 Porsi Tahu Tauge, 5 Tahu Goreng, Sambel Dadak /Terasi Goreng, Tumis Leunca Teri, Asin, Lalapan) Rp175.000 dong.. ready?', '2024-06-05 17:56:04', '2024-06-06 17:09:27'),
(63, 6, 'Catering Paket Sabakul - (10 Porsi Nasi Liwetan, 10 Porsi Ayam Potong, 10 Porsi Tahu Tauge, 10 Tahu/Tempe Goreng, Sambel Dadak /Terasi Goreng, Tumis Leunca Teri/Orek tempe,  Asin, Lalapan)', NULL, '350000', 'products/01HZNGSREMYZ6GW8NYQGG2Y71V.jpg', 1, '#', 'Teh, mau order Catering Paket Sabakul - (10 Porsi Nasi Liwetan, 10 Porsi Ayam Potong, 10 Porsi Tahu Tauge, 10 Tahu/Tempe Goreng, Sambel Dadak /Terasi Goreng, Tumis Leunca Teri/Orek tempe,  Asin, Lalapan) Rp350.000 dong.. ready?', '2024-06-05 17:57:21', '2024-06-06 17:12:15'),
(64, 6, 'Catering Paket Sarerea - (20 Porsi Nasi Liwetan, 10 Porsi Ayam Potong, 10 porsi ikan Nila, 20 Porsi Tahu Tauge, 10 Tahu Goreng, 10 potong Endog asin, Sambel Dadak /Terasi Gorengp,  Tumis Leunca Teri, Asin, Lalapan)', NULL, '689000', 'products/01HZNGWXNB4R92R5B2AND036V0.jpg', 1, '#', 'Teh, mau order Catering Paket Sarerea - (20 Porsi Nasi Liwetan, 10 Porsi Ayam Potong, 10 porsi ikan Nila, 20 Porsi Tahu Tauge, 10 Tahu Goreng, 10 potong Endog asin, Sambel Dadak /Terasi Gorengp,  Tumis Leunca Teri, Asin, Lalapan) Rp689.000 dong.. ready?', '2024-06-05 17:59:04', '2024-06-06 17:12:07'),
(65, 6, 'Snack Box Paket Medium - (Risoles reguler, Lontong, air, bolu/soes reguler)', NULL, '7000', 'products/01HZNH0FXTFTFXW3YZ620P3GX0.jpg', 1, '#', 'Teh, mau order Snack Box Paket Medium - (Risoles reguler, Lontong, air, bolu/soes reguler) Rp7.000 dong.. ready?', '2024-06-05 18:01:01', '2024-06-06 17:11:57'),
(66, 6, 'Snack Box Paket Medium - (Risoles mini, pastel bihun, Lontong ayam, Roti Unyil, air)', NULL, '10000', 'products/01HZNH2XH308AY197NWNDM6VP3.jpg', 1, '#', 'Teh, mau order Snack Box Paket Medium - (Risoles mini, pastel bihun, Lontong ayam, Roti Unyil, air) Rp10.000 dong.. ready?', '2024-06-05 18:02:21', '2024-06-06 17:11:49'),
(67, 6, 'Snack Box Paket Medium - (Risoles reguler, Lontong sayur, air, Baby Bolit Crush)', NULL, '9000', 'products/01HZNH51Z6E1HFXSYVRERGFTQ0.jpg', 1, '#', 'Teh, mau order Snack Box Paket Medium - (Risoles reguler, Lontong sayur, air, Baby Bolit Crush) Rp9.000 dong.. ready?', '2024-06-05 18:03:31', '2024-06-06 17:11:42'),
(68, 6, 'Snack Box Paket Medium - (Lontong sayur, Risoles Ayam mini, Roll coklat, air)', NULL, '10000', 'products/01HZNH7WDQW2TS2KV9E048E1KV.jpg', 1, '#', 'Teh, mau order Snack Box Paket Medium - (Lontong sayur, Risoles Ayam mini, Roll coklat, air) Rp10.000 dong.. ready?', '2024-06-05 18:05:03', '2024-06-06 17:11:36'),
(69, 6, 'Snack Box Paket Medium - (Martabak telor, Lontong Ayam, Baby Bolit Crush, Air.)', NULL, '10000', 'products/01HZQVB0R3G81ZX9RSBR7YC1YY.jpg', 1, '#', 'Teh, mau order Snack Box Paket Medium - (Martabak telor, Lontong Ayam, Baby Bolit Crush, Air.) Rp10.000 dong.. ready?', '2024-06-05 18:05:44', '2024-06-06 17:11:30'),
(70, 6, 'Snack Box Paket Medium - (Martabak, Lemper Ayam, Risoles mini, talam/lapis, air)', NULL, '10000', 'products/01HZNHDJS7W86FEDAYXY4ARH5Z.jpg', 1, '#', 'Teh, mau order Snack Box Paket Medium - (Martabak, Lemper Ayam, Risoles mini, talam/lapis, air) Rp10.000 dong.. ready?', '2024-06-05 18:08:10', '2024-06-06 17:11:24'),
(71, 6, 'Snack Box Paket Premium - (Risoles big Ayam, Roti Unyil Reg, Rolls pastry.)', NULL, '11000', 'products/01HZNNM3RSAF8229ZX6TPFJPNJ.jpg', 1, '#', 'Teh, mau order Snack Box Paket Premium - (Risoles big Ayam, Roti Unyil Reg, Rolls pastry.) Rp11.000 dong.. ready?', '2024-06-05 19:21:38', '2024-06-06 17:11:18'),
(72, 6, 'Snack Box Paket Premium - (Risoles, Mayo/Cadbury, Lemper Ayam, Soes Premium)', NULL, '12000', 'products/01HZNNP01NP2MVT7JMQTZF468S.jpg', 1, '#', 'Teh, mau order Snack Box Paket Premium - (Risoles, Mayo/Cadbury, Lemper Ayam, Soes Premium) Rp12.000 dong.. ready?', '2024-06-05 19:22:40', '2024-06-06 17:11:12'),
(73, 6, 'Snack Box Paket Premium - (Risoles Mayo, Lemper Ayam, Baby Bolit Crush)', NULL, '13000', 'products/01HZNNQHPGDR2635A2F71V5DX6.jpg', 1, '#', 'Teh, mau order Snack Box Paket Premium - (Risoles Mayo, Lemper Ayam, Baby Bolit Crush) Rp13.000 dong.. ready?', '2024-06-05 19:23:31', '2024-06-06 17:12:42'),
(74, 6, 'Snack Box Paket Premium - (Baby Bolit crush, Risoles Mayo, Soes Premium)', NULL, '13000', 'products/01HZNNSP5M1CBJ7MQHWD1XJRE6.jpg', 1, '#', 'Teh, mau order Snack Box Paket Premium - (Baby Bolit crush, Risoles Mayo, Soes Premium) Rp13.000 dong.. ready?', '2024-06-05 19:24:41', '2024-06-06 17:12:48'),
(75, 6, 'Snack Box Paket Premium - (Risoles Ayam, Lontong Sayur, Baby Bolit Crush, Air 330ml)', NULL, '15000', 'products/01HZNNV956WFSGK3VAJT7WDDHY.jpg', 1, '#', 'Teh, mau order Snack Box Paket Premium - (Risoles Ayam, Lontong Sayur, Baby Bolit Crush, Air 330ml) Rp15.000 dong.. ready?', '2024-06-05 19:25:33', '2024-06-06 17:12:55'),
(76, 6, 'Snack Box Paket Premium - (Risoles Mayo, Lemper Ayam, Baby Bolit Crush, Donut Fluffy)', NULL, '18000', 'products/01HZNNY6Q93ZJ8MS9F1FX50RNG.jpg', 1, '#', 'Teh, mau order Snack Box Paket Premium - (Risoles Mayo, Lemper Ayam, Baby Bolit Crush, Donut Fluffy) Rp18.000 dong.. ready?', '2024-06-05 19:27:09', '2024-06-06 17:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@bnccookies.com', NULL, '$2y$12$HIeshRmmNsV4voZvQliIr.7dj16hks513.2AQ8E5jBwQoJVKY.8Em', NULL, '2024-03-13 20:07:13', '2024-03-13 20:07:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
