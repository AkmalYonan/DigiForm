-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2026 at 01:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl_OTPEMAIL`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emailAdmin` varchar(255) NOT NULL,
  `noHp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `emailAdmin`, `noHp`, `created_at`, `updated_at`) VALUES
(1, 'akmalyonanda@gmail.com', '+62881025433363', NULL, '2023-08-13 23:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_pesan` int(99) NOT NULL,
  `salam_pembuka` text NOT NULL,
  `lokasi_akad` varchar(255) NOT NULL,
  `lokasi_resepsi` varchar(255) NOT NULL,
  `tgl_akad` varchar(20) NOT NULL,
  `tgl_resepsi` varchar(20) NOT NULL,
  `jam_akad` varchar(20) NOT NULL,
  `jam_resepsi` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `nama_panggilan` varchar(25) NOT NULL,
  `nama_pasangan` varchar(255) NOT NULL,
  `imgThumbnail` varchar(255) DEFAULT NULL,
  `imgBanner` varchar(255) DEFAULT NULL,
  `imgCouple` varchar(255) DEFAULT NULL,
  `link_akad` longtext DEFAULT NULL,
  `link_resepsi` longtext DEFAULT NULL,
  `iframeMaps_akad` longtext DEFAULT NULL,
  `iframeMaps_resepsi` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_pesan`, `salam_pembuka`, `lokasi_akad`, `lokasi_resepsi`, `tgl_akad`, `tgl_resepsi`, `jam_akad`, `jam_resepsi`, `email`, `no_wa`, `nama_panggilan`, `nama_pasangan`, `imgThumbnail`, `imgBanner`, `imgCouple`, `link_akad`, `link_resepsi`, `iframeMaps_akad`, `iframeMaps_resepsi`, `created_at`, `updated_at`) VALUES
(1, 'Selamat Pagi', 'sbav', 'amgue', '1111-11-11', '1111-11-11', 'sdfg', '1', 'akmalyonanda@gmail.com', '09888899999999', 'yanto', 'linux&Momot', 'fotoThumbnail/1693882562.png', 'fotoBanner/1693882562.png', 'fotoCouple/1693882562.png', 'ewq', 'fasda', 'ewq', 'fasda', '2023-09-05 02:19:58', '2023-09-05 03:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `detail_fitur`
--

CREATE TABLE `detail_fitur` (
  `id_pesan` int(99) NOT NULL,
  `id_fitur` int(99) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_fitur`
--

INSERT INTO `detail_fitur` (`id_pesan`, `id_fitur`, `updated_at`, `created_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(1, 3, NULL, NULL),
(1, 4, NULL, NULL),
(1, 6, NULL, NULL),
(1, 7, NULL, NULL),
(1, 8, NULL, NULL),
(1, 9, NULL, NULL),
(1, 11, NULL, NULL),
(1, 12, NULL, NULL),
(1, 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_paket_fitur`
--

CREATE TABLE `detail_paket_fitur` (
  `id` int(99) NOT NULL,
  `paket_id` int(99) NOT NULL,
  `fitur_id` int(99) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_paket_fitur`
--

INSERT INTO `detail_paket_fitur` (`id`, `paket_id`, `fitur_id`, `created_at`, `updated_at`) VALUES
(7, 2, 1, NULL, NULL),
(8, 2, 2, NULL, NULL),
(9, 2, 3, NULL, NULL),
(10, 2, 4, NULL, NULL),
(11, 2, 6, NULL, NULL),
(12, 2, 7, NULL, NULL),
(13, 2, 8, NULL, NULL),
(14, 2, 9, NULL, NULL),
(15, 2, 10, NULL, NULL),
(16, 2, 13, NULL, NULL),
(17, 3, 1, NULL, NULL),
(18, 3, 2, NULL, NULL),
(19, 3, 3, NULL, NULL),
(20, 3, 4, NULL, NULL),
(21, 3, 6, NULL, NULL),
(22, 3, 7, NULL, NULL),
(23, 3, 8, NULL, NULL),
(24, 3, 9, NULL, NULL),
(25, 3, 11, NULL, NULL),
(26, 3, 12, NULL, NULL),
(27, 3, 13, NULL, NULL),
(54, 1, 1, NULL, NULL),
(55, 1, 2, NULL, NULL),
(56, 1, 3, NULL, NULL),
(57, 1, 4, NULL, NULL),
(58, 1, 5, NULL, NULL),
(59, 1, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_paket_template`
--

CREATE TABLE `detail_paket_template` (
  `id` int(99) NOT NULL,
  `paket_id` int(99) NOT NULL,
  `template_id` int(99) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_paket_template`
--

INSERT INTO `detail_paket_template` (`id`, `paket_id`, `template_id`, `created_at`, `updated_at`) VALUES
(22, 2, 1, NULL, NULL),
(23, 2, 2, NULL, NULL),
(24, 2, 3, NULL, NULL),
(25, 2, 4, NULL, NULL),
(26, 2, 5, NULL, NULL),
(27, 2, 6, NULL, NULL),
(28, 3, 1, NULL, NULL),
(29, 3, 2, NULL, NULL),
(30, 3, 3, NULL, NULL),
(31, 3, 4, NULL, NULL),
(32, 3, 5, NULL, NULL),
(33, 3, 6, NULL, NULL),
(34, 3, 7, NULL, NULL),
(35, 3, 8, NULL, NULL),
(43, 1, 1, NULL, NULL),
(44, 1, 2, NULL, NULL),
(45, 1, 3, NULL, NULL),
(46, 1, 4, NULL, NULL);

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
-- Table structure for table `fitur`
--

CREATE TABLE `fitur` (
  `id` int(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fitur`
--

INSERT INTO `fitur` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Pembukaan', NULL, NULL),
(2, 'Nama Pengantin', NULL, NULL),
(3, 'Hari/Tgl Resepsi', NULL, NULL),
(4, 'Hari/Tgl Akad', NULL, NULL),
(5, 'Lokasi Acara Non Maps', NULL, NULL),
(6, 'Lokasi Acara Maps', NULL, NULL),
(7, 'Resposive Mobile', NULL, NULL),
(8, 'Countdown', NULL, NULL),
(9, 'Galeri', NULL, NULL),
(10, 'Backsound No Request', NULL, NULL),
(11, 'Backsound Request', NULL, NULL),
(12, 'Buku Tamu', NULL, NULL),
(13, 'Animasi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galery_users`
--

CREATE TABLE `galery_users` (
  `id_pesan` int(99) NOT NULL,
  `foto1` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL,
  `foto4` varchar(255) NOT NULL,
  `foto5` varchar(255) NOT NULL,
  `foto6` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galery_users`
--

INSERT INTO `galery_users` (`id_pesan`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `created_at`, `updated_at`) VALUES
(1, 'fotoGallery/1693883232_64f69b6020574.png', 'fotoGallery/1693883032_64f69a98a9ab5.png', 'fotoGallery/1693883058_64f69ab2b2936.png', 'fotoGallery/1693883032_64f69a98a9ac4.png', 'fotoGallery/1693883577_64f69cb9def5b.png', 'fotoGallery/1693883045_64f69aa5e5434.png', '2023-09-05 02:19:58', '2023-09-05 03:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `kelas`, `created_at`, `updated_at`) VALUES
('0', 'User', NULL, NULL),
('1', 'Manager', NULL, NULL),
('2', 'Admin', '2023-08-22 04:49:44', '2023-08-22 04:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `mempelai_pria`
--

CREATE TABLE `mempelai_pria` (
  `id_pesan` int(99) NOT NULL,
  `nama_pria` varchar(50) NOT NULL,
  `nama_pria_lengkap` varchar(255) DEFAULT NULL,
  `anak_ke` int(3) NOT NULL,
  `nama_ayah` varchar(60) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `username_ig` varchar(30) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mempelai_pria`
--

INSERT INTO `mempelai_pria` (`id_pesan`, `nama_pria`, `nama_pria_lengkap`, `anak_ke`, `nama_ayah`, `nama_ibu`, `username_ig`, `image`, `updated_at`, `created_at`) VALUES
(1, 'linux', 'Sungut Bungut', 1, 'bjir', 'bjir', 'mamatgunshop', 'fotoPria/1693880398.png', '2023-09-05 03:12:57', '2023-09-05 02:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `mempelai_wanita`
--

CREATE TABLE `mempelai_wanita` (
  `id_pesan` int(99) NOT NULL,
  `nama_wanita` varchar(100) NOT NULL,
  `nama_wanita_lengkap` varchar(255) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `username_ig` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mempelai_wanita`
--

INSERT INTO `mempelai_wanita` (`id_pesan`, `nama_wanita`, `nama_wanita_lengkap`, `anak_ke`, `nama_ayah`, `nama_ibu`, `username_ig`, `image`, `updated_at`, `created_at`) VALUES
(1, 'Momot', 'amogus', 1, 'adam', 'asel', 'akmil', 'fotoWanita/1693880398.png', '2023-09-05 03:12:57', '2023-09-05 02:19:58');

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
(50, '2023_09_04_152915_create_galeryuser_table', 1),
(51, '2023_09_04_154340_create_galery_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `harga` int(99) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Bronze', 0, NULL, NULL),
(2, 'Silver', 100000, NULL, NULL),
(3, 'Gold', 200000, NULL, NULL),
(4, 'VIP', 2500000, '2023-09-19 04:42:32', '2023-09-19 04:42:55');

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(99) NOT NULL,
  `id_template` int(99) NOT NULL,
  `id_user` int(99) NOT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '0',
  `encrypted` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `id_template`, `id_user`, `status`, `encrypted`, `updated_at`, `created_at`) VALUES
(1, 2, 3, '0', '$2y$10$j0qDFd20yheAONozhNNr/Oy3TLkBHLSfbrtFQXt.m4JUOPwnXnj5C', '2023-09-05 03:12:57', '2023-09-05 02:19:58');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Amara', NULL, '2023-08-15 00:24:42'),
(2, 'Amartha', NULL, NULL),
(3, 'Prima', NULL, NULL),
(4, 'Arta', NULL, NULL),
(5, 'Yonans', NULL, NULL),
(6, 'Dawa', NULL, NULL),
(7, 'Emim', NULL, NULL),
(8, 'Kirei', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `paket_id` int(11) NOT NULL DEFAULT 1,
  `is_order` tinyint(1) NOT NULL DEFAULT 0,
  `level` varchar(10) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` enum('laki','perempuan') NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_activated`, `email_verified_at`, `password`, `paket_id`, `is_order`, `level`, `remember_token`, `created_at`, `updated_at`, `gender`, `birthdate`) VALUES
(3, 'admin', 'admin@gmail.com', 1, NULL, '$2y$10$O4mdPk1uIFoZ4pZkNkoJMu3RcJzV6Q7sMW5hnz2ogFHKJDpdWKpCq', 3, 1, '2', NULL, '2023-07-25 00:55:08', '2023-09-05 02:19:57', 'laki', '2023-07-25'),
(4, 'user', 'user@gmail.com', 0, NULL, '$2y$10$Y0t1x3DiRp4LlyZXzdg2I.ZvQ/sQWLuIObm3auUmPIomkn/oy5qEG', 1, 0, '0', NULL, '2023-07-25 02:27:22', '2023-08-24 02:56:50', 'laki', '2023-07-25'),
(5, 'linuxman', 'linuxman@gmail.com', 1, NULL, '$2y$10$wFZlbFYI0ycCaPohaVLuHO3/Xa9tP0QE.Eyso/wFsYoZNWWNnFBOy', 3, 0, '0', NULL, '2023-08-13 23:55:53', '2023-08-29 19:29:47', 'laki', '9999-06-02'),
(9, 'AkmalYonan', 'akmalyonanda@gmail.com', 1, NULL, '$2y$10$NwqPbfZA2bg7TqlcC6GkLuZCQvMuMkl5bhfImfATQU6Abg5haSs/y', 3, 0, '2', NULL, '2023-08-28 21:28:30', '2023-08-28 21:29:29', 'laki', '2023-08-29'),
(10, 'daoa', 'dafajibran00@gmail.com', 1, NULL, '$2y$10$kQxPdDk8i2incobGargTBeaQFfpCbPTCt0Rr.mqNjKWvm7A/jGMbC', 3, 0, '0', NULL, '2023-08-28 21:30:39', '2023-08-29 19:29:57', 'laki', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `verifytokens`
--

CREATE TABLE `verifytokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verifytokens`
--

INSERT INTO `verifytokens` (`id`, `token`, `email`, `is_activated`, `created_at`, `updated_at`, `expires_at`) VALUES
(6, '954546', 'user@gmail.com', 0, '2023-07-25 02:27:22', '2023-08-22 00:46:21', NULL),
(9, '115571', 'naufalyonanda3@gmail.com', 0, '2023-08-22 00:46:59', '2023-08-22 00:46:59', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `detail_fitur`
--
ALTER TABLE `detail_fitur`
  ADD KEY `id_fitur` (`id_fitur`),
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `detail_paket_fitur`
--
ALTER TABLE `detail_paket_fitur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fitur_id` (`paket_id`),
  ADD KEY `paket_id` (`fitur_id`);

--
-- Indexes for table `detail_paket_template`
--
ALTER TABLE `detail_paket_template`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paket_id` (`paket_id`,`template_id`),
  ADD KEY `template_id` (`template_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery_users`
--
ALTER TABLE `galery_users`
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mempelai_pria`
--
ALTER TABLE `mempelai_pria`
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `mempelai_wanita`
--
ALTER TABLE `mempelai_wanita`
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_template` (`id_template`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `paket_id` (`paket_id`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `verifytokens`
--
ALTER TABLE `verifytokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_paket_fitur`
--
ALTER TABLE `detail_paket_fitur`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `detail_paket_template`
--
ALTER TABLE `detail_paket_template`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fitur`
--
ALTER TABLE `fitur`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `verifytokens`
--
ALTER TABLE `verifytokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `pesan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_fitur`
--
ALTER TABLE `detail_fitur`
  ADD CONSTRAINT `detail_fitur_ibfk_2` FOREIGN KEY (`id_fitur`) REFERENCES `fitur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_fitur_ibfk_3` FOREIGN KEY (`id_pesan`) REFERENCES `pesan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_paket_fitur`
--
ALTER TABLE `detail_paket_fitur`
  ADD CONSTRAINT `detail_paket_fitur_ibfk_1` FOREIGN KEY (`fitur_id`) REFERENCES `fitur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_paket_fitur_ibfk_2` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_paket_template`
--
ALTER TABLE `detail_paket_template`
  ADD CONSTRAINT `detail_paket_template_ibfk_1` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_paket_template_ibfk_2` FOREIGN KEY (`template_id`) REFERENCES `template` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galery_users`
--
ALTER TABLE `galery_users`
  ADD CONSTRAINT `galery_users_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `pesan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mempelai_pria`
--
ALTER TABLE `mempelai_pria`
  ADD CONSTRAINT `mempelai_pria_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `pesan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mempelai_wanita`
--
ALTER TABLE `mempelai_wanita`
  ADD CONSTRAINT `mempelai_wanita_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `pesan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`level`) REFERENCES `level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
