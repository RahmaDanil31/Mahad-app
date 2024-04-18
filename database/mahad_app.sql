-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3107
-- Generation Time: Apr 18, 2024 at 11:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahad_app`
--

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
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id`, `created_at`, `updated_at`, `nama`) VALUES
(1, '2024-03-05 07:15:16', '2024-03-05 07:15:16', 'Fakultas Hukum'),
(2, '2024-03-05 07:15:40', '2024-03-05 07:15:40', 'Fakultas Akutansi'),
(3, '2024-03-05 08:18:43', '2024-03-05 08:18:43', 'Fakultas Teknik'),
(4, '2024-03-05 08:19:04', '2024-03-05 23:36:19', 'Fakultas Kedokteran Hewan'),
(5, '2024-03-05 20:14:07', '2024-03-05 20:14:07', 'Fakultas Kehutanan'),
(7, '2024-03-10 23:46:24', '2024-03-10 23:46:24', 'Fakultas Pertanian');

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Asrama Ikhwan 01', '2024-03-25 21:06:57', '2024-03-25 21:20:46'),
(3, 'Asrama Ikhwan 02', '2024-03-26 20:02:08', '2024-03-26 20:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(250) NOT NULL,
  `fakultas_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `created_at`, `updated_at`, `nama`, `fakultas_id`) VALUES
(1, '2024-03-11 07:18:55', '2024-03-11 07:18:55', 'Teknik Sipil', 3),
(2, '2024-03-12 02:58:08', '2024-03-12 02:58:08', 'Ekonomi Syariah', 2),
(3, '2024-03-12 03:05:26', '2024-03-12 03:05:26', 'Teknik Electro', 3),
(5, '2024-03-12 07:21:11', '2024-03-12 07:21:11', 'Hukum Administrasi Negara', 1),
(6, '2024-03-30 17:35:07', '2024-03-30 17:35:07', 'Jurusan Mentari', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gedung_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `nama`, `gedung_id`, `created_at`, `updated_at`) VALUES
(1, 'A 01', 1, '2024-03-26 00:28:55', '2024-03-26 00:28:55'),
(3, 'A 02', 3, '2024-03-26 20:02:48', '2024-03-26 20:02:48');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_26_133153_tb_role', 2),
(6, '2023_12_26_150929_create_roles_table', 3),
(7, '2023_12_26_151259_add_role_id_to_users_table', 4),
(8, '2024_03_05_070736_create_fakultas_table', 5),
(9, '2024_03_11_065248_create_jurusan_table', 6),
(10, '2024_03_26_033657_create_gedungs_table', 7),
(11, '2024_03_26_033824_create_kamars_table', 7);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-12-26 08:16:13', '2023-12-26 08:16:13'),
(2, 'Mahasiswa', '2023-12-26 08:16:13', '2023-12-26 08:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tanggal_lahir` timestamp NOT NULL DEFAULT current_timestamp(),
  `tempat_lahir` varchar(250) DEFAULT NULL,
  `slta` varchar(250) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `pendidikan_pesantren` varchar(250) DEFAULT NULL,
  `kamar_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_ayah` varchar(150) DEFAULT NULL,
  `nama_ibu` varchar(150) DEFAULT NULL,
  `pekerjaan_ortu` varchar(250) DEFAULT NULL,
  `telepon_ortu` varchar(20) DEFAULT NULL,
  `alamat_ortu` varchar(250) DEFAULT NULL,
  `jalur_masuk` varchar(250) DEFAULT NULL,
  `riwayat_penyakit` varchar(250) DEFAULT NULL,
  `path_foto` varchar(250) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `wa` varchar(20) NOT NULL,
  `wa_ortu` varchar(20) NOT NULL,
  `jurusan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `path_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `nim`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `slta`, `telepon`, `pendidikan_pesantren`, `kamar_id`, `nama_ayah`, `nama_ibu`, `pekerjaan_ortu`, `telepon_ortu`, `alamat_ortu`, `jalur_masuk`, `riwayat_penyakit`, `path_foto`, `status`, `wa`, `wa_ortu`, `jurusan_id`, `path_file`) VALUES
(1, 'Rahma Danil', 'danil@gmail.com', '2023-12-10 16:28:05', '$2y$10$ilXzNR1jqoV8yS9OqiUbkOfIES9G67STuM9Zpyxf5RCmmymnYNR3K', NULL, '2023-12-10 16:28:05', '2023-12-10 16:28:05', 1, '', 'L', '2000-07-31 15:15:15', 'Bandung', '', '081234567890', '', NULL, '', '', '', '', '', '', '', '', 1, '', '', NULL, ''),
(2, 'Indah Mentari', 'indah@gmail.com', '2023-12-10 16:28:05', '$2y$10$ilXzNR1jqoV8yS9OqiUbkOfIES9G67STuM9Zpyxf5RCmmymnYNR3K', NULL, '2023-12-10 16:28:05', '2023-12-10 16:28:05', 2, '024535544', 'P', '2024-03-03 15:15:15', '', '', '081246675434', '', NULL, '', '', '', '', '', '', '', '', 1, '', '', NULL, ''),
(5, 'Maemunah', 'munah@gmail.com', NULL, '$2y$12$0bRiD6hFnnZomHZ6BLoaB.BwvwlJVQ6TjwKdOTp9PC9NTObVb67yq', NULL, '2024-03-20 21:17:13', '2024-03-20 21:50:01', 1, NULL, 'P', '2024-02-29 17:00:00', 'Aceh', NULL, '085483930373', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '', '', NULL, ''),
(7, 'bambang', 'bambang@gmail.com', NULL, '$2y$12$lf5LIZHrkCYd3/BIBzKyx.ZWl0yRAo3np8RijOeDtL3FT6Nj3UXmG', NULL, '2024-04-16 20:32:27', '2024-04-16 20:32:27', 2, '12345678', 'L', '2024-04-16 17:00:00', 'Jakarta', 'sma 2 bukit', '085483930373', 'apa lah', 1, 'ujang', 'zaenap', 'buruh', NULL, 'Jalan Gading Raya I Gang Aa I No 30 Rw.7 Rt.02', NULL, NULL, NULL, 0, '081222213222', '08272828922', 2, ''),
(10, 'agus', 'agus@gmail.com', NULL, '$2y$12$F3QoH7DvX2Y48pLaxQkTG.HTB32uyr3AWxL3iSvEOPbo6Ys7khBmK', NULL, '2024-04-18 00:23:45', '2024-04-18 00:23:45', 2, '12345678', 'L', '2024-04-17 17:00:00', 'Jakarta', 'sma 2 bukit', '082109876543', 'fsfsfs', 1, 'gggg', 'zaenap', 'buruh', '081233311222', 'Jalan Gading Raya I Gang Aa I No 30 Rw.7 Rt.02', NULL, NULL, 'foto/1713425025_rahma_danil_11zon.jpg', 0, '081222213222', '08272828922', 1, 'surat/1713425025_Monev-Import_Data_Survey_HTP.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fakultas_id` (`fakultas_id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kamar_id_gedung_foreign` (`gedung_id`) USING BTREE;

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `kamar_id_foreign` (`kamar_id`),
  ADD KEY `jurusan_id_foreign` (`jurusan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `fk_fakultas_id` FOREIGN KEY (`fakultas_id`) REFERENCES `fakultas` (`id`);

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_id_gedung_foreign` FOREIGN KEY (`gedung_id`) REFERENCES `gedung` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `jurusan_id_foreign` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id`),
  ADD CONSTRAINT `kamar_id_foreign` FOREIGN KEY (`kamar_id`) REFERENCES `kamar` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
