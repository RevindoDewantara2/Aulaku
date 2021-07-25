-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 08:33 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aulakudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Malang', NULL, NULL),
(2, 'Surabaya', NULL, NULL),
(3, 'Kalimantan', NULL, NULL);

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
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id` int(11) NOT NULL,
  `hari` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id`, `hari`) VALUES
(1, 'Senin'),
(2, 'Selasa'),
(3, 'Rabu'),
(4, 'Kamis'),
(5, 'Jumat'),
(6, 'Sabtu'),
(7, 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id` int(11) NOT NULL,
  `jam` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id`, `jam`) VALUES
(1, '01.00 WIB'),
(2, '02.00 WIB'),
(3, '03.00 WIB'),
(4, '04.00 WIB'),
(5, '05.00 WIB'),
(6, '06.00 WIB'),
(7, '07.00 WIB'),
(8, '08.00 WIB'),
(9, '09.00 WIB'),
(10, '10.00 WIB'),
(11, '11.00 WIB'),
(12, '12.00 WIB'),
(13, '13.00 WIB'),
(14, '14.00 WIB'),
(15, '15.00 WIB'),
(16, '16.00 WIB'),
(17, '17.00 WIB'),
(18, '18.00 WIB'),
(19, '19.00 WIB'),
(20, '20.00 WIB'),
(21, '21.00 WIB'),
(22, '22.00 WIB'),
(23, '23.00 WIB'),
(24, '24.00 WIB');

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
(4, '2021_07_22_115349_tempat', 2),
(6, '2021_07_22_142742_alamat', 3),
(7, '2021_07_22_143641_updatetempat', 4);

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
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_pesanan` varchar(128) NOT NULL,
  `nama_pemesan` varchar(128) NOT NULL,
  `nama_hall` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nohandphone` varchar(128) NOT NULL,
  `totalharga` varchar(128) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_pesanan`, `nama_pemesan`, `nama_hall`, `email`, `nohandphone`, `totalharga`, `date_created`) VALUES
(1, 'rizky_6_Ign', 'rizky', 'Ignatius Hall', 'pecyxo@gmail.com', '083828283389', 'Rp.30.000.000', '2021-07-23 15:16:58'),
(2, 'NightRaid_6_Ign', 'NightRaid', 'Ignatius Hall', 'izkyph@gmail.com', '081223232198', 'Rp.30.000.000', '2021-07-23 18:04:33'),
(3, 'NightRaid_7_Men', 'NightRaid', 'Menara 165 Bosphorus', 'izkyph@gmail.com', '081223232198', 'Rp.1.400.000', '2021-07-23 18:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kapasitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mulai` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_selesai` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_mulai` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari_selesai` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id`, `nama_user`, `email`, `nama_tempat`, `alamat`, `kapasitas`, `luas`, `jam_mulai`, `jam_selesai`, `hari_mulai`, `hari_selesai`, `foto`, `harga`, `deskripsi`, `created_at`, `updated_at`, `kota`) VALUES
(6, 'rizky', 'pecyxo@gmail.com', 'Ignatius Hall', 'Jl. e mbah mu ncen rusak mboh wes gaero aku rt 69 rw 69', '300', '100', '09.00 WIB', '17.00 WIB', 'Senin', 'Kamis', 'rizky', '30.000.000', '\nIgnatius Hall merupakan salah satu ruangan yang kami sediakan di lantai 6 Sanggar Prathivi Building. Ruangan ini berkapasitas 70-200 orang, tergantung dari tipe setting ruangan yang digunakan. Ruangan ini adalah ruangan terbesar yang kami miliki yang sudah banyak digunakan untuk berbagai seminar, workshop, dan sebagainya. Ignatius Hall dapat disambungkan dengan Arrupe Room yang berada di lantai 7 jika jumlah peserta/tamu melebihi 200 orang (max. 300 orang). Terletak di kawasan Jakarta Pusat, tepatnya di daerah Pasar Baru yang dekat dengan kawasan pusat bisnis Thamrin-Sudirman, serta dengan beberapa perkantoran dan tempat terkenal lainnya seperti Badan Pusat Statistik, Antara Foto, Pasar Baru, Masjid Istiqlal hingga Gereja Kathedral.', NULL, NULL, 'Malang'),
(7, 'NightRaid', 'izkyph@gmail.com', 'Menara 165 Bosphorus', 'TB Simantupang', '14', '30', '09.00 WIB', '19.00 WIB', 'Senin', 'Minggu', 'NightRaid', '1.400.000', 'Bosphorus merupakan ruang meeting yang berlokasi di daerah TB Simatupang, Jakarta Selatan. Ruangan ini dikhusukan untuk 14 orang dengan layout round table dan didesain yang simple namun tetap nyaman dilengkapi kursi orange colour. Ruangan ini sudah mencakup fasilitas Air Mineral, Kopi, Tea, Projector, Screen, VGA dan Flipchart.', NULL, NULL, 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohandphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nohandphone`, `password`, `created_at`, `updated_at`) VALUES
(2, 'rizky', 'pecyxo@gmail.com', '083828283389', '$2y$10$nMZBwe3pB2wGFmYxBktyA.ouqI6Bi9gAFcPxsno4ldbJWXVoutKVq', '2021-07-22 02:21:54', '2021-07-22 02:21:54'),
(6, 'NightRaid', 'izkyph@gmail.com', '081223232198', '$2y$10$/P9QDSAU6iYbXxClTwn0ZuX3duIN87UOuxZ0GhKWjdEm5QiF.i886', '2021-07-23 09:24:42', '2021-07-23 10:58:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
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
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
