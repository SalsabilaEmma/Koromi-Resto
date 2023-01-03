-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 09:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koromi`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Menjadi destinasi kuliner bagi keluarga maupun kawula muda adalah keinginan kami. Koromi Cafe and Resto yang terletak di Jl. Panglima Sudirman Nomor 73, Gresik, Jawa Timur merupakan tempat yang sangat strategis.\r\n\r\nDengan nuansa yang sangat nyaman baik di lantai Satu, lantai Dua, maupun rooftop lantai tiga, menjadikan Koromi Cafe and Resto salah Satu favorite bagi seluruh kalangan untuk bersantai Dan menikmati sajian kami', '2022-12-06 07:56:57', '2022-12-17 19:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `file` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `judul`, `keterangan`, `file`, `created_at`, `updated_at`) VALUES
(2, 'Koromi Resto', 'Makes You Happy', '1671328205.JPG', '2022-12-06 06:25:46', '2022-12-17 18:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `booklets`
--

CREATE TABLE `booklets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booklets`
--

INSERT INTO `booklets` (`id`, `image`, `created_at`, `updated_at`) VALUES
(9, '1670430377.png', '2022-12-07 09:26:21', '2022-12-07 09:26:21'),
(10, '1670430461.png', '2022-12-07 09:27:43', '2022-12-07 09:27:43'),
(11, '1670430490.png', '2022-12-07 09:28:14', '2022-12-07 09:28:14');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, '1670510211.JPG', '2022-12-08 07:36:55', '2022-12-08 07:36:55'),
(6, '1670510255.JPG', '2022-12-08 07:37:39', '2022-12-08 07:37:39'),
(8, '1670510292.JPG', '2022-12-08 07:38:17', '2022-12-08 07:38:17'),
(10, '1670510330.JPG', '2022-12-08 07:38:54', '2022-12-08 07:38:54'),
(11, '1670510349.JPG', '2022-12-08 07:39:13', '2022-12-08 07:39:13'),
(13, '1670510382.JPG', '2022-12-08 07:39:47', '2022-12-08 07:39:47'),
(14, '1670510397.JPG', '2022-12-08 07:40:01', '2022-12-08 07:40:01'),
(16, '1670510430.JPG', '2022-12-08 07:40:34', '2022-12-08 07:40:34'),
(18, '1671522520.JPG', '2022-12-20 00:48:43', '2022-12-20 00:48:43'),
(19, '1671522532.JPG', '2022-12-20 00:48:56', '2022-12-20 00:48:56'),
(20, '1671522564.JPG', '2022-12-20 00:49:32', '2022-12-20 00:49:32');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenisMenu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `jenisMenu`, `created_at`, `updated_at`) VALUES
(1, 'Indomie Series', '2022-12-07 07:16:17', '2022-12-07 07:16:17'),
(2, 'Indonesian Food', '2022-12-07 07:29:01', '2022-12-07 07:29:01'),
(3, 'Rice Bowl', '2022-12-07 07:29:11', '2022-12-07 07:29:11'),
(4, 'Appetizer', '2022-12-07 07:29:22', '2022-12-07 07:29:22'),
(5, 'Aneka Pizza', '2022-12-07 14:30:09', '2022-12-07 14:30:10'),
(6, 'Mie Series', '2022-12-07 14:30:45', '2022-12-07 14:30:46'),
(7, 'Roti Bakar Series', '2022-12-07 14:31:19', '2022-12-07 14:31:20'),
(8, 'Aneka Steak', '2022-12-07 14:31:37', '2022-12-07 14:31:38'),
(9, 'Local Pride', '2022-12-07 14:31:51', '2022-12-07 14:31:52'),
(10, 'Pasta', '2022-12-07 14:36:06', '2022-12-07 14:36:07'),
(11, 'Sweet Toast', '2022-12-07 14:36:22', '2022-12-07 14:36:07'),
(12, 'Salted Toast', '2022-12-07 14:36:21', '2022-12-07 14:36:08'),
(13, 'Western', '2022-12-07 14:36:21', '2022-12-07 14:36:08'),
(14, 'Nasi Goreng', '2022-12-07 14:36:24', '2022-12-07 14:36:09'),
(15, 'Nasi Putih', '2022-12-07 14:36:20', '2022-12-07 14:36:10'),
(16, 'Coffee Based', '2022-12-07 14:36:20', '2022-12-07 14:36:11'),
(17, 'Soda Based', '2022-12-07 14:36:19', '2022-12-07 14:36:11'),
(18, 'Yakult Series', '2022-12-07 14:36:19', '2022-12-07 14:36:12'),
(19, 'Juice', '2022-12-07 14:36:19', '2022-12-07 14:36:12'),
(20, 'Tea Based', '2022-12-07 14:36:18', '2022-12-07 14:36:13'),
(21, 'Premium Tea', '2022-12-07 14:36:18', '2022-12-07 14:36:13'),
(22, 'Air Mineral', '2022-12-07 14:36:17', '2022-12-07 14:36:14'),
(23, 'Milk Based', '2022-12-07 14:36:17', '2022-12-07 14:36:14'),
(25, 'Traditional Based', '2022-12-07 14:36:16', '2022-12-07 14:36:15'),
(26, 'Gelato', '2022-12-07 14:36:16', '2022-12-07 14:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `subjek` varchar(300) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `subjek`, `isi`, `created_at`, `updated_at`) VALUES
(3, 'Dummy', 'dummy@gmail.com', 'Dummy Subjek', 'Dummy Message', '2022-12-20 01:05:59', '2022-12-20 01:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `idJenis` int(10) UNSIGNED NOT NULL,
  `kategori` enum('Makanan','Minuman','Snack') COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaMenu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `idJenis`, `kategori`, `namaMenu`, `harga`, `created_at`, `updated_at`) VALUES
(11, 1, 'Makanan', 'Indomie Tok (Goreng/Kuah)', '10k', '2022-12-07 07:25:21', '2022-12-07 07:26:27'),
(12, 1, 'Makanan', 'Indomie Irit (Telor)', '13k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(13, 1, 'Makanan', 'Indomie Bestie (Keju)', '15k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(14, 1, 'Makanan', 'Internet 2G (Kornet)', '17k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(15, 1, 'Makanan', 'Internet 3G (Telor Keju)', '18k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(16, 1, 'Makanan', 'Internet 4G (Telor Kornet)', '19k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(17, 1, 'Makanan', 'Internet 5G (Kornet Keju)', '20k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(18, 1, 'Makanan', 'Indomie sultan (Telor Kornet Keju)', '23k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(19, 1, 'Makanan', 'Indomie Tok Jumbo Goreng', '13k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(20, 1, 'Makanan', 'Indomie Irit Jumbo Goreng (Telor)', '16k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(21, 1, 'Makanan', 'Indomie Bestie Jumbo Goreng (Keju)', '18k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(22, 1, 'Makanan', 'Internet 2G Jumbo Goreng (Kornet)', '20k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(23, 1, 'Makanan', 'Internet 3G Jumbo Goreng (Telor Keju)', '21k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(24, 1, 'Makanan', 'Internet 4G Jumbo Goreng (Telor Kornet)', '22k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(25, 1, 'Makanan', 'Internet 5G Jumbo Goreng (Kornet Keju)', '23k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(26, 1, 'Makanan', 'Indomie sultan Jumbo Goreng (Telor Kornet Keju)', '26k', '2022-12-07 07:47:23', '2022-12-07 07:47:23'),
(27, 2, 'Makanan', 'Bubur Ayam', '15k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(28, 2, 'Makanan', 'Ayam Geprek', '18k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(29, 2, 'Makanan', 'Tumis Kangkung', '22k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(30, 2, 'Makanan', 'Tumis Tauge', '20k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(31, 2, 'Makanan', 'Ayam Goreng Kremes', '23k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(32, 2, 'Makanan', 'Ayam Goreng Kremes (Kampung)', '28k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(33, 2, 'Makanan', 'Ayam Bakar', '23k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(34, 2, 'Makanan', 'Ayam Bakar (Kampung)', '28k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(35, 2, 'Makanan', 'Ayam Bakar Madu', '23k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(36, 2, 'Makanan', 'Ayam Bakar Madu (Kampung)', '28k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(37, 2, 'Makanan', 'Nasi Empal Suwir', '30k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(38, 2, 'Makanan', 'Mie Goreng Ayam', '30k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(39, 2, 'Makanan', 'Bihun Goreng Ayam', '30k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(40, 2, 'Makanan', 'Cap Cay Kuah', '30k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(41, 2, 'Makanan', 'Cap Cay Goreng', '30k', '2022-12-07 07:50:10', '2022-12-07 07:50:10'),
(42, 2, 'Makanan', 'Iga Bakar', '45k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(43, 2, 'Makanan', 'Iga Penyet', '48k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(44, 2, 'Makanan', 'Udang Goreng Tepung Mayo', '60k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(45, 2, 'Makanan', 'Udang Asam Manis', '60k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(46, 2, 'Makanan', 'Udang Saos Mentega', '60k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(47, 2, 'Makanan', 'Udang Saos Padang', '60k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(48, 2, 'Makanan', 'Sop Buntut Kuah', '60k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(49, 2, 'Makanan', 'Sop Buntut Goreng', '65k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(50, 2, 'Makanan', 'Sop Iga', '45k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(51, 2, 'Makanan', 'Gurame Terbang Goreng', '70k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(52, 2, 'Makanan', 'Gurame Asam Manis', '75k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(53, 2, 'Makanan', 'Gurame Bakar', '75k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(54, 2, 'Makanan', 'Gurame Pasir Emas', '75k', '2022-12-07 07:52:35', '2022-12-07 07:52:35'),
(55, 3, 'Makanan', 'Salted Egg Chicken', '30k', '2022-12-07 07:54:39', '2022-12-07 07:54:39'),
(56, 3, 'Makanan', 'Dori Sambal Dabu', '22k', '2022-12-07 07:54:39', '2022-12-07 07:54:39'),
(57, 3, 'Makanan', 'Kulit Sambal Matah', '18k', '2022-12-07 07:54:39', '2022-12-07 07:54:39'),
(58, 3, 'Makanan', 'Chicken Curry', '22k', '2022-12-07 07:54:39', '2022-12-07 07:54:39'),
(59, 3, 'Makanan', 'Chicken Asam Manis', '20k', '2022-12-07 07:54:39', '2022-12-07 07:54:39'),
(60, 3, 'Makanan', 'Chicken Blackpepper', '20k', '2022-12-07 07:54:39', '2022-12-07 07:54:39'),
(61, 3, 'Makanan', 'Chicken Teriyaki', '20k', '2022-12-07 07:54:39', '2022-12-07 07:54:39'),
(62, 3, 'Makanan', 'Chicken Sambal Matah', '22k', '2022-12-07 07:54:39', '2022-12-07 07:54:39'),
(63, 4, 'Snack', 'Mix Sampler Platter', '25k', '2022-12-07 07:56:14', '2022-12-07 07:56:14'),
(64, 4, 'Snack', 'Spring Roll', '20k', '2022-12-07 07:56:14', '2022-12-07 07:56:14'),
(65, 4, 'Snack', 'Kulit Crispy', '15k', '2022-12-07 07:56:14', '2022-12-07 08:04:58'),
(66, 4, 'Snack', 'Tahu Crispy', '15k', '2022-12-07 07:56:14', '2022-12-07 07:56:14'),
(67, 4, 'Snack', 'Pisang Goreng Caramel', '22k', '2022-12-07 07:56:14', '2022-12-07 07:56:14'),
(68, 4, 'Snack', 'Jamur Crispy', '15k', '2022-12-07 07:56:14', '2022-12-07 07:56:14'),
(69, 4, 'Snack', 'Onion Ring', '15k', '2022-12-07 07:56:14', '2022-12-07 07:56:14'),
(70, 4, 'Snack', 'French Fries', '17k', '2022-12-07 07:56:14', '2022-12-07 07:56:14'),
(71, 4, 'Snack', 'Chicken Wings BBQ', '30k', '2022-12-07 07:56:14', '2022-12-07 07:56:14'),
(72, 5, 'Makanan', 'Cheese Pizza', '45k', '2022-12-07 07:56:55', '2022-12-07 07:56:55'),
(73, 5, 'Makanan', 'Meat Lover Pizza', '55k', '2022-12-07 07:56:55', '2022-12-07 07:56:55'),
(74, 5, 'Makanan', 'Pepperoni Pizza', '55k', '2022-12-07 07:56:55', '2022-12-07 07:56:55'),
(75, 9, 'Makanan', 'Martabak Usus Gresik', '18k', '2022-12-07 07:57:13', '2022-12-07 07:57:13'),
(76, 6, 'Makanan', 'Koromi BroSis ( tidak pedas - gurih )', '10k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(77, 6, 'Makanan', 'Koromi Ghosting Lv 1( Pedas Gurih )', '10k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(78, 6, 'Makanan', 'Koromi Ghosting Lv 2 ( Pedas Gurih )', '11k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(79, 6, 'Makanan', 'Koromi Ghosting Lv 3 ( Pedas Gurih )', '12k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(80, 6, 'Makanan', 'Koromi Bestie ( Tidak Pedas - Manis )', '10k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(81, 6, 'Makanan', 'Koromi Mantan Lv 1( Pedas Manis )', '10k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(82, 6, 'Makanan', 'Koromi Mantan Lv 2 ( Pedas Manis )', '11k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(83, 6, 'Makanan', 'Koromi Mantan Lv 3 ( Pedas Manis )', '12k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(84, 6, 'Makanan', 'Koromi Love Mie Lv 1( Siomay Bakso )', '15k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(85, 6, 'Makanan', 'Koromi Love Mie Lv 2 ( Siomay Bakso )', '16k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(86, 6, 'Makanan', 'Koromi Love Mie Lv 3 ( Siomay Bakso )', '17k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(87, 6, 'Makanan', 'Koromi Bakmie Pangsit Special', '17k', '2022-12-07 07:59:12', '2022-12-07 07:59:12'),
(88, 7, 'Snack', 'Roti Bakar Coklat Meses', '12k', '2022-12-07 08:11:01', '2022-12-07 08:11:01'),
(89, 7, 'Snack', 'Roti Bakar Keju', '15k', '2022-12-07 08:11:01', '2022-12-07 08:11:01'),
(90, 7, 'Snack', 'Roti Bakar Coklat Keju', '17k', '2022-12-07 08:11:01', '2022-12-07 08:11:01'),
(91, 7, 'Snack', 'Roti Bakar Tiramisu Crunchy', '17k', '2022-12-07 08:11:01', '2022-12-07 08:11:01'),
(92, 7, 'Snack', 'Roti Bakar Greentea', '17k', '2022-12-07 08:11:01', '2022-12-07 08:11:01'),
(93, 7, 'Snack', 'Roti Bakar Susu Kental Manis', '12k', '2022-12-07 08:11:01', '2022-12-07 08:11:01'),
(94, 7, 'Snack', 'Roti Bakar Peanut Butter Cheese', '18k', '2022-12-07 08:11:01', '2022-12-07 08:11:01'),
(95, 7, 'Snack', 'Roti Bakar Spesial Koromi (Pisang, Oreo, Keju)', '23k', '2022-12-07 08:11:01', '2022-12-07 08:11:01'),
(96, 7, 'Snack', 'Roti Bakar Sultan (Telor, Kornet, Keju)', '25k', '2022-12-07 08:11:01', '2022-12-07 08:11:01'),
(97, 8, 'Makanan', 'Chicken Steak', '35k', '2022-12-07 08:11:50', '2022-12-07 08:11:50'),
(98, 8, 'Makanan', 'Sirloin Steak', '65k', '2022-12-07 08:11:50', '2022-12-07 08:11:50'),
(99, 8, 'Makanan', 'Tenderloin Steak', '75k', '2022-12-07 08:11:50', '2022-12-07 08:11:50'),
(100, 10, 'Makanan', 'Spaghetti Carbonara', '27k', '2022-12-07 08:12:25', '2022-12-07 08:12:25'),
(101, 10, 'Makanan', 'Spaghetti Bolognese', '27k', '2022-12-07 08:12:25', '2022-12-07 08:12:25'),
(102, 10, 'Makanan', 'Spaghetti Aglio Olio', '30k', '2022-12-07 08:12:25', '2022-12-07 08:12:25'),
(103, 15, 'Makanan', 'Nasi Putih', '8k', '2022-12-07 08:12:45', '2022-12-07 08:12:45'),
(104, 14, 'Makanan', 'Nasi Goreng Koromi', '30k', '2022-12-07 08:13:26', '2022-12-07 08:13:26'),
(105, 14, 'Makanan', 'Nasi Goreng Merah', '30k', '2022-12-07 08:13:26', '2022-12-07 08:13:26'),
(106, 14, 'Makanan', 'Nasi Goreng Hongkong', '30k', '2022-12-07 08:13:26', '2022-12-07 08:13:26'),
(107, 14, 'Makanan', 'Nasi Goreng Buntut', '42k', '2022-12-07 08:13:26', '2022-12-07 08:13:26'),
(108, 13, 'Makanan', 'Koromi Hotdog Signature', '28k', '2022-12-07 08:14:13', '2022-12-07 08:14:13'),
(109, 13, 'Makanan', 'Koromi Fish and Chip', '28k', '2022-12-07 08:14:13', '2022-12-07 08:14:13'),
(110, 13, 'Makanan', 'Koromi Chicken Burger', '30k', '2022-12-07 08:14:13', '2022-12-07 08:14:13'),
(111, 13, 'Makanan', 'Beef Burger With Fries', '35k', '2022-12-07 08:14:13', '2022-12-07 08:14:13'),
(112, 13, 'Makanan', 'Club Sandwich', '35k', '2022-12-07 08:14:13', '2022-12-07 08:14:13'),
(113, 12, 'Snack', 'Egg and Cheese', '17k', '2022-12-07 08:17:00', '2022-12-07 08:17:00'),
(114, 12, 'Snack', 'Beef Egg Mayo with Cheese', '22k', '2022-12-07 08:17:00', '2022-12-07 08:17:00'),
(115, 12, 'Snack', 'Beef BBQ and Cheese', '22k', '2022-12-07 08:17:00', '2022-12-07 08:17:00'),
(116, 11, 'Snack', 'Kaya Toast', '12k', '2022-12-07 08:17:35', '2022-12-07 08:17:35'),
(117, 11, 'Snack', 'Coklat selai Toast', '12k', '2022-12-07 08:17:35', '2022-12-07 08:17:35'),
(118, 11, 'Snack', 'Choco and Cheese Toast', '15k', '2022-12-07 08:17:35', '2022-12-07 08:17:35'),
(119, 11, 'Snack', 'Oreo Milk Toast', '15k', '2022-12-07 08:17:35', '2022-12-07 08:17:35'),
(120, 16, 'Minuman', 'Americano', '15k', '2022-12-07 08:19:03', '2022-12-07 08:19:03'),
(121, 16, 'Minuman', 'Kopi Tarik', '18k', '2022-12-07 08:19:03', '2022-12-07 08:19:03'),
(122, 16, 'Minuman', 'Espresso', '20k', '2022-12-07 08:19:03', '2022-12-07 08:19:03'),
(123, 16, 'Minuman', 'Vietnam Drip', '20k', '2022-12-07 08:19:03', '2022-12-07 08:19:03'),
(124, 16, 'Minuman', 'Affogato', '20k', '2022-12-07 08:19:03', '2022-12-07 08:19:03'),
(125, 16, 'Minuman', 'Caramel Machiato', '22k', '2022-12-07 08:19:03', '2022-12-07 08:19:03'),
(126, 16, 'Minuman', 'Mocha', '22k', '2022-12-07 08:19:03', '2022-12-07 08:19:03'),
(127, 16, 'Minuman', 'Banana Latte', '23k', '2022-12-07 08:19:03', '2022-12-07 08:19:03'),
(128, 16, 'Minuman', 'Vanilla Latte', '23k', '2022-12-07 08:19:03', '2022-12-07 08:19:03'),
(129, 16, 'Minuman', 'Cappucino', '25k', '2022-12-07 08:19:03', '2022-12-07 08:19:03'),
(130, 16, 'Minuman', 'Avocado Latte', '25k', '2022-12-07 08:19:03', '2022-12-07 08:19:03'),
(131, 17, 'Minuman', 'Virgin Mojito', '18k', '2022-12-07 08:20:20', '2022-12-07 08:20:20'),
(132, 17, 'Minuman', 'Banana Mojito', '20k', '2022-12-07 08:20:20', '2022-12-07 08:20:20'),
(133, 17, 'Minuman', 'Red Ocean', '20k', '2022-12-07 08:20:20', '2022-12-07 08:20:20'),
(134, 17, 'Minuman', 'Blue Ocean', '20k', '2022-12-07 08:20:20', '2022-12-07 08:20:20'),
(135, 17, 'Minuman', 'Mango Punch', '20k', '2022-12-07 08:20:20', '2022-12-07 08:20:20'),
(136, 17, 'Minuman', 'Strawberry Mojito', '22k', '2022-12-07 08:20:20', '2022-12-07 08:20:20'),
(137, 17, 'Minuman', 'Lychee Mojito', '22k', '2022-12-07 08:20:20', '2022-12-07 08:20:20'),
(138, 18, 'Minuman', 'Strawberry Yakult', '22k', '2022-12-07 08:21:20', '2022-12-07 08:21:20'),
(139, 18, 'Minuman', 'Lychee Yakult', '22k', '2022-12-07 08:21:20', '2022-12-07 08:21:20'),
(140, 18, 'Minuman', 'Mango Yakult', '22k', '2022-12-07 08:21:20', '2022-12-07 08:21:20'),
(141, 18, 'Minuman', 'Banana Yakult', '22k', '2022-12-07 08:21:20', '2022-12-07 08:21:20'),
(142, 18, 'Minuman', 'Dragon Yakult', '22k', '2022-12-07 08:21:20', '2022-12-07 08:21:20'),
(143, 19, 'Minuman', 'Dragon Fly', '18k', '2022-12-07 08:22:18', '2022-12-07 08:22:18'),
(144, 19, 'Minuman', 'Morning Booster', '18k', '2022-12-07 08:22:18', '2022-12-07 08:22:18'),
(145, 19, 'Minuman', 'Green Detox', '18k', '2022-12-07 08:22:18', '2022-12-07 08:22:18'),
(146, 19, 'Minuman', 'Honey Dew', '18k', '2022-12-07 08:22:18', '2022-12-07 08:22:18'),
(147, 19, 'Minuman', 'Mango', '18k', '2022-12-07 08:22:18', '2022-12-07 08:22:18'),
(148, 19, 'Minuman', 'Avocado', '22k', '2022-12-07 08:22:18', '2022-12-07 08:22:18'),
(149, 20, 'Minuman', 'Original Tea', '8k', '2022-12-07 08:23:22', '2022-12-07 08:23:22'),
(150, 20, 'Minuman', 'Teh Tarik / Milk Tea', '12k', '2022-12-07 08:23:22', '2022-12-07 08:23:22'),
(151, 20, 'Minuman', 'Grass Jelly Tea', '15k', '2022-12-07 08:23:22', '2022-12-07 08:23:22'),
(152, 20, 'Minuman', 'Strawberry Tea', '18k', '2022-12-07 08:23:22', '2022-12-07 08:23:22'),
(153, 20, 'Minuman', 'Lemon Tea', '18k', '2022-12-07 08:23:22', '2022-12-07 08:23:22'),
(154, 20, 'Minuman', 'Mango Tea', '18k', '2022-12-07 08:23:22', '2022-12-07 08:23:22'),
(155, 20, 'Minuman', 'Lychee Tea', '20k', '2022-12-07 08:23:22', '2022-12-07 08:23:22'),
(156, 21, 'Minuman', 'Earl Grey', '18k', '2022-12-07 08:24:01', '2022-12-07 08:24:01'),
(157, 21, 'Minuman', 'Camomille', '18k', '2022-12-07 08:24:01', '2022-12-07 08:24:01'),
(158, 21, 'Minuman', 'English Breakfast', '18k', '2022-12-07 08:24:01', '2022-12-07 08:24:01'),
(159, 21, 'Minuman', 'Pepermint', '18k', '2022-12-07 08:24:01', '2022-12-07 08:24:01'),
(160, 22, 'Minuman', 'Air Mineral', '6k', '2022-12-07 08:24:17', '2022-12-07 08:24:17'),
(161, 26, 'Minuman', '1 Scoop', '18k', '2022-12-07 08:25:03', '2022-12-07 08:25:03'),
(162, 26, 'Minuman', '2 Scoop', '30k', '2022-12-07 08:25:03', '2022-12-07 08:25:03'),
(163, 26, 'Minuman', 'Extra Waffle Cone', '5k', '2022-12-07 08:25:03', '2022-12-07 08:25:03'),
(164, 25, 'Minuman', 'Wedang Uwuh', '22k', '2022-12-07 08:25:47', '2022-12-07 08:25:47'),
(165, 25, 'Minuman', 'Wedang Rosella', '22k', '2022-12-07 08:25:47', '2022-12-07 08:25:47'),
(166, 25, 'Minuman', 'Wedang Telang', '22k', '2022-12-07 08:25:47', '2022-12-07 08:25:47'),
(167, 25, 'Minuman', 'Ultimate Jahe', '22k', '2022-12-07 08:25:47', '2022-12-07 08:25:47'),
(168, 25, 'Minuman', 'Wedang Jahe', '22k', '2022-12-07 08:25:47', '2022-12-07 08:25:47'),
(169, 23, 'Minuman', 'Susu Gula Aren With Grass Jelly', '15k', '2022-12-07 08:27:38', '2022-12-07 08:27:38'),
(170, 23, 'Minuman', 'Avocado Milk', '20k', '2022-12-07 08:27:38', '2022-12-07 08:27:38'),
(171, 23, 'Minuman', 'Red Velvet', '22k', '2022-12-07 08:27:38', '2022-12-07 08:27:38'),
(172, 23, 'Minuman', 'Chocolate', '22k', '2022-12-07 08:27:38', '2022-12-07 08:27:38'),
(173, 23, 'Minuman', 'Taro', '22k', '2022-12-07 08:27:38', '2022-12-07 08:27:38'),
(174, 23, 'Minuman', 'Milo Dinosaurus', '22k', '2022-12-07 08:27:38', '2022-12-07 08:27:38'),
(175, 23, 'Minuman', 'Regal Latte', '24k', '2022-12-07 08:27:38', '2022-12-07 08:27:38'),
(176, 23, 'Minuman', 'Green Tea', '25k', '2022-12-07 08:27:38', '2022-12-07 08:27:38'),
(177, 23, 'Minuman', 'Biscoff Latte', '25k', '2022-12-07 08:27:38', '2022-12-07 08:27:38'),
(178, 23, 'Minuman', 'Choco Banana', '25k', '2022-12-07 08:27:38', '2022-12-07 08:27:38'),
(179, 23, 'Minuman', 'Caramel Avocado', '25k', '2022-12-07 08:27:38', '2022-12-07 08:27:38');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_12_022856_create_jenis_table', 1),
(6, '2022_01_12_022914_create_menus_table', 1),
(7, '2022_01_19_045328_create_galleries_table', 1),
(8, '2022_01_19_112524_create_reservations_table', 1),
(9, '2022_03_22_091547_create_booklets_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `jmlkursi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `tanggal`, `waktu`, `jmlkursi`, `wa`, `email`, `note`, `created_at`, `updated_at`) VALUES
(9, 'Dummy Reservation', '2022-12-29', '11:00:00', '5', '08123456789000', 'dummy@gmail.com', NULL, '2022-12-20 01:04:13', '2022-12-20 01:04:13');

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$K73Iiq8.i8AvFPTA88NqEe6YlBhTrvDovcgq3eQKvC0q2SM6b1tye', NULL, '2022-03-29 22:36:48', '2022-03-29 22:36:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booklets`
--
ALTER TABLE `booklets`
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
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_jenis_fk_meneer` (`idJenis`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booklets`
--
ALTER TABLE `booklets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menu_jenis_fk_meneer` FOREIGN KEY (`idJenis`) REFERENCES `jenis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
