-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2023 at 05:44 AM
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
(1, 'akmalyonanda@gmail.com', '+62881025433363', NULL, '2023-07-25 02:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_pesan` int(99) NOT NULL,
  `salam_pembuka` text DEFAULT NULL,
  `lokasi_acara` varchar(255) NOT NULL,
  `tgl_akad` varchar(20) NOT NULL,
  `tgl_resepsi` varchar(20) NOT NULL,
  `jam_acara` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `nama_panggilan` varchar(25) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `detail_paket_fitur`
--

CREATE TABLE `detail_paket_fitur` (
  `id` int(99) NOT NULL,
  `paket_id` int(99) NOT NULL,
  `fitur_id` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_paket_fitur`
--

INSERT INTO `detail_paket_fitur` (`id`, `paket_id`, `fitur_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 7),
(7, 2, 1),
(8, 2, 2),
(9, 2, 3),
(10, 2, 4),
(11, 2, 6),
(12, 2, 7),
(13, 2, 8),
(14, 2, 9),
(15, 2, 10),
(16, 2, 13),
(17, 3, 1),
(18, 3, 2),
(19, 3, 3),
(20, 3, 4),
(21, 3, 6),
(22, 3, 7),
(23, 3, 8),
(24, 3, 9),
(25, 3, 11),
(26, 3, 12),
(27, 3, 13);

-- --------------------------------------------------------

--
-- Table structure for table `detail_paket_template`
--

CREATE TABLE `detail_paket_template` (
  `id` int(99) NOT NULL,
  `paket_id` int(99) NOT NULL,
  `template_id` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_paket_template`
--

INSERT INTO `detail_paket_template` (`id`, `paket_id`, `template_id`) VALUES
(19, 1, 1),
(20, 1, 2),
(21, 1, 3),
(22, 2, 1),
(23, 2, 2),
(24, 2, 3),
(25, 2, 4),
(26, 2, 5),
(27, 2, 6),
(28, 3, 1),
(29, 3, 2),
(30, 3, 3),
(31, 3, 4),
(32, 3, 5),
(33, 3, 6),
(34, 3, 7),
(35, 3, 8);

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
  `nama` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fitur`
--

INSERT INTO `fitur` (`id`, `nama`) VALUES
(1, 'Pembukaan'),
(2, 'Nama Pengantin'),
(3, 'Hari/Tgl Resepsi'),
(4, 'Hari/Tgl Akad'),
(5, 'Lokasi Acara (Non Maps)'),
(6, 'Lokasi Acara (Maps)'),
(7, 'Resposive Mobile'),
(8, 'Countdown'),
(9, 'Galeri'),
(10, 'Backsound(No Request)'),
(11, 'Backsound(Request)'),
(12, 'Buku Tamu'),
(13, 'Animasi');

-- --------------------------------------------------------

--
-- Table structure for table `mempelai_pria`
--

CREATE TABLE `mempelai_pria` (
  `id_pesan` int(99) NOT NULL,
  `nama_pria` varchar(50) NOT NULL,
  `anak_ke` int(3) NOT NULL,
  `nama_ayah` varchar(60) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `username_ig` varchar(30) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mempelai_wanita`
--

CREATE TABLE `mempelai_wanita` (
  `id_pesan` int(99) NOT NULL,
  `nama_wanita` varchar(100) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `username_ig` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `harga` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama`, `harga`) VALUES
(1, 'Bronze', 0),
(2, 'Silver', 100000),
(3, 'Gold', 200000);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(99) NOT NULL,
  `nama` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `nama`) VALUES
(1, 'Satya'),
(2, 'Amartha'),
(3, 'Prima'),
(4, 'Arta'),
(5, 'Yonans'),
(6, 'Dawa'),
(7, 'Emim'),
(8, 'Kirei');

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
  `level` enum('0','1') NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` enum('laki','perempuan') NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_activated`, `email_verified_at`, `password`, `paket_id`, `level`, `remember_token`, `created_at`, `updated_at`, `gender`, `birthdate`) VALUES
(2, 'Admin', 'akmalyonanda@gmail.com', 1, NULL, '$2y$10$/WiSYitFmV.8D2xTTlmr.OnkWNQaYS5cEaPk.dySoVFNmaYUYfBeu', 3, '1', NULL, '2023-07-18 01:39:12', '2023-07-18 01:41:49', 'laki', '2023-07-18'),
(3, 'admin', 'admin@gmail.com', 1, NULL, '$2y$10$O4mdPk1uIFoZ4pZkNkoJMu3RcJzV6Q7sMW5hnz2ogFHKJDpdWKpCq', 3, '1', NULL, '2023-07-25 00:55:08', '2023-07-25 00:55:34', 'laki', '2023-07-25'),
(4, 'user', 'user@gmail.com', 0, NULL, '$2y$10$Y0t1x3DiRp4LlyZXzdg2I.ZvQ/sQWLuIObm3auUmPIomkn/oy5qEG', 1, '0', NULL, '2023-07-25 02:27:22', '2023-07-25 02:27:22', 'laki', '2023-07-25');

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
(6, '109579', 'user@gmail.com', 0, '2023-07-25 02:27:22', '2023-07-25 19:41:38', NULL);

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
  ADD KEY `paket_id` (`paket_id`);

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
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `detail_paket_template`
--
ALTER TABLE `detail_paket_template`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `verifytokens`
--
ALTER TABLE `verifytokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
