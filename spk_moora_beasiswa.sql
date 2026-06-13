-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2026 at 06:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_moora_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternative`
--

CREATE TABLE `alternative` (
  `id` int(11) NOT NULL,
  `alternative` varchar(50) DEFAULT NULL,
  `c1` int(11) NOT NULL DEFAULT 0,
  `c2` int(11) NOT NULL DEFAULT 0,
  `c3` int(11) NOT NULL DEFAULT 0,
  `c4` int(11) NOT NULL DEFAULT 0,
  `c11` decimal(8,4) DEFAULT NULL,
  `c22` decimal(8,4) DEFAULT NULL,
  `c33` decimal(8,4) DEFAULT NULL,
  `c44` decimal(8,4) DEFAULT NULL,
  `c111` decimal(8,4) DEFAULT NULL,
  `c222` decimal(8,4) DEFAULT NULL,
  `c333` decimal(8,4) DEFAULT NULL,
  `c444` decimal(8,4) DEFAULT NULL,
  `jumlah` decimal(8,4) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternative`
--

INSERT INTO `alternative` (`id`, `alternative`, `c1`, `c2`, `c3`, `c4`, `c11`, `c22`, `c33`, `c44`, `c111`, `c222`, `c333`, `c444`, `jumlah`, `created_at`, `updated_at`) VALUES
(9, '12345678-Muhammad Rifqi', 4, 7, 3, 1, 0.4500, 0.2500, 0.1000, 0.2000, 1.8000, 1.7500, 0.3000, 0.2000, 4.0500, '2026-06-13 16:11:05', '2026-06-13 16:11:05'),
(10, '1234567891234-Zaqi', 6, 5, 5, 3, 0.4500, 0.2500, 0.1000, 0.2000, 2.7000, 1.2500, 0.5000, 0.6000, 5.0500, '2026-06-13 16:11:23', '2026-06-13 16:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis_nim` varchar(50) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `prestasi` varchar(20) DEFAULT NULL,
  `penghasilan_ayah` int(11) NOT NULL DEFAULT 0,
  `penghasilan_ibu` int(11) NOT NULL DEFAULT 0,
  `jumlah_saudara` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `nis_nim`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `prestasi`, `penghasilan_ayah`, `penghasilan_ibu`, `jumlah_saudara`, `created_at`, `updated_at`) VALUES
(3, '12345678', 'Muhammad Rifqi', 'L', 'Payakumbuh', '1988-12-27', 'tangerang', '-', 100000, 0, 4, '2026-06-13 08:45:52', '2026-06-13 08:45:52'),
(4, '1234567891234', 'Zaqi', 'L', 'Padang', '1983-07-20', 'Bukti Tinggi', '-', 2000000, 0, 2, '2026-06-13 08:46:42', '2026-06-13 08:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL,
  `tipe` enum('benefit','cost') NOT NULL,
  `bobot` decimal(8,4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`id`, `kode`, `nama_kriteria`, `tipe`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'C1', 'Penghasilan Ayah', 'cost', 0.4500, '2026-06-13 07:30:43', '2026-06-13 07:30:43'),
(2, 'C2', 'Penghasilan Ibu', 'benefit', 0.2500, '2026-06-13 07:31:09', '2026-06-13 07:31:09'),
(3, 'C3', 'Jumlah Saudara', 'benefit', 0.1000, '2026-06-13 07:31:46', '2026-06-13 07:31:46'),
(4, 'C4', 'Prestasi', 'benefit', 0.2000, '2026-06-13 07:31:39', '2026-06-13 07:31:39');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','operator','kepala_sekolah') DEFAULT 'operator',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Administrator', 'admin@sekolah.sch.id', '$2y$12$S51igzVxUwRwhi/ZCKtqrufPhwolQimFSI1CO9EFEdqtz4VsJ80.S', 'operator', NULL, '2026-06-05 21:18:39', '2026-06-05 21:18:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternative`
--
ALTER TABLE `alternative`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternative`
--
ALTER TABLE `alternative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
