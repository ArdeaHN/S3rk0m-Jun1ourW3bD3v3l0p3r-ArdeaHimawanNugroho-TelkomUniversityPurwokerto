-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2024 at 02:31 AM
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
-- Database: `serkomwebardea`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarbeasiswa`
--

CREATE TABLE `daftarbeasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) DEFAULT NULL,
  `semester` int(11) NOT NULL,
  `ipk` decimal(3,2) NOT NULL,
  `beasiswa` varchar(255) DEFAULT NULL,
  `berkas` varchar(255) DEFAULT NULL,
  `status_ajuan` varchar(255) NOT NULL DEFAULT 'belum diverifikasi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftarbeasiswa`
--

INSERT INTO `daftarbeasiswa` (`id`, `nama`, `email`, `nomor_hp`, `semester`, `ipk`, `beasiswa`, `berkas`, `status_ajuan`, `created_at`, `updated_at`) VALUES
(14, 'Ardea Himawan Nugroho', 'ardeahnugroho@gmail.com', '+6285600009732', 7, 3.40, 'Beasiswa Akademik', 'berkas_beasiswa/vtLBvP381YCaWoljbrU9BOpvFaPbzagm73vNt7gd.png', 'belum diverifikasi', '2024-10-02 17:15:10', '2024-10-02 17:15:10'),
(15, 'Asep Tariyat Karyadi', 'asepkaryadi@gmail.com', '+6285600009732', 3, 3.40, 'Beasiswa Non-Akademik', 'berkas_beasiswa/IRNHLIkrc8KgpTpWdUfiVJngYoKg6gYkoXaJYsq0.pdf', 'belum diverifikasi', '2024-10-02 17:16:08', '2024-10-02 17:16:08');

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
(5, '2024_10_01_202404_create_daftarbeasiswa_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarbeasiswa`
--
ALTER TABLE `daftarbeasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `daftarbeasiswa_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarbeasiswa`
--
ALTER TABLE `daftarbeasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
