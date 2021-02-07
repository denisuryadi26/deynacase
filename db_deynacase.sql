-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2020 pada 06.29
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_deynacase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_14_085727_create_pemasukans_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukans`
--

CREATE TABLE `pemasukans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `omset` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profit` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemasukans`
--

INSERT INTO `pemasukans` (`id`, `tanggal`, `sumber`, `produk`, `omset`, `modal`, `profit`, `created_at`, `updated_at`) VALUES
(1, '2018-10-10', 'Ahmad Rifa\'i', 'Hardcase 3D', '85000', '50000', '35000', '2020-10-14 04:32:33', '2020-10-14 04:32:33'),
(2, '2018-10-11', 'Zahra Maulida', 'Hardcase 3D', '85000', '50000', '35000', '2020-10-14 04:37:30', '2020-10-14 04:37:30'),
(3, '2018-11-02', 'Taufiqu Rahman', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 04:41:41', '2020-10-14 04:41:41'),
(4, '2018-11-05', 'Suyanti', 'Hardcase 3D', '180000', '100000', '80000', '2020-10-14 04:45:25', '2020-10-14 04:45:25'),
(5, '2018-11-12', 'Indra', 'Hardcase 3D', '180000', '100000', '80000', '2020-10-14 04:46:11', '2020-10-14 04:46:11'),
(6, '2018-11-30', 'Rudy Hermanto', 'Hardcase 3D', '180000', '100000', '80000', '2020-10-14 04:46:37', '2020-10-14 04:46:37'),
(7, '2018-12-05', 'Ganes', 'Hardcase 3D', '95000', '45000', '50000', '2020-10-14 04:54:34', '2020-10-14 04:54:34'),
(8, '2018-12-05', 'Arifin', 'Hardcase 3D', '95000', '45000', '50000', '2020-10-14 04:55:14', '2020-10-14 04:55:14'),
(9, '2018-12-09', 'Eko Yulianto', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 04:55:56', '2020-10-14 04:55:56'),
(10, '2018-12-10', 'Jaluk', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 04:56:37', '2020-10-14 04:56:37'),
(11, '2018-12-11', 'Nurul Luthfiani', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 05:04:43', '2020-10-14 05:04:43'),
(12, '2018-12-12', 'MoMo', 'Hardcase 3D', '180000', '100000', '80000', '2020-10-14 05:05:45', '2020-10-14 05:05:45'),
(13, '2019-01-03', 'Nena', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 05:06:26', '2020-10-14 05:06:26'),
(14, '2019-01-21', 'Arifin', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 05:08:43', '2020-10-14 05:08:43'),
(15, '2019-01-25', 'Caca', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 05:09:13', '2020-10-14 05:09:13'),
(16, '2019-02-21', 'Halde / ibu Aida', 'Hardcase 3D', '95000', '45000', '50000', '2020-10-14 05:09:55', '2020-10-14 05:09:55'),
(17, '2019-03-15', 'Bp Hemud', 'Hardcase 3D', '180000', '100000', '80000', '2020-10-14 18:51:24', '2020-10-14 18:51:24'),
(18, '2019-03-19', 'Andrey Roosevelt', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 18:52:17', '2020-10-14 18:52:17'),
(19, '2019-04-04', 'Deni Suryadi', 'Hardcase 3D', '180000', '100000', '80000', '2020-10-14 18:52:59', '2020-10-14 18:52:59'),
(20, '2019-04-18', 'Aditya Razu', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 18:53:41', '2020-10-14 18:53:41'),
(21, '2019-05-01', 'Ivha', 'Hardcase 3D', '180000', '100000', '80000', '2020-10-14 18:54:14', '2020-10-14 18:54:14'),
(22, '2019-05-14', 'Silvia Idamatun', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 18:54:47', '2020-10-14 18:54:47'),
(23, '2019-05-23', 'Rully Rubiansyah', 'Hardcase 3D', '180000', '100000', '80000', '2020-10-14 18:56:16', '2020-10-14 18:56:16'),
(24, '2019-06-21', 'Putri', 'Hardcase 3D', '180000', '100000', '80000', '2020-10-14 18:57:18', '2020-10-14 18:57:18'),
(25, '2019-07-03', 'Deni Suryadi', 'Hardcase 3D', '180000', '100000', '80000', '2020-10-14 18:57:51', '2020-10-14 18:57:51'),
(26, '2019-07-03', 'Fika Nadiya', 'Hardcase 3D', '132000', '50000', '82000', '2020-10-14 18:59:07', '2020-10-14 18:59:07'),
(27, '2019-07-15', 'Nidaulhaq Nurul Syifa', 'Hardcase 3D', '204000', '100000', '104000', '2020-10-14 18:59:33', '2020-10-14 18:59:33'),
(28, '2019-07-16', 'Dwi Ardiansyah S', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 19:01:10', '2020-10-14 19:01:10'),
(29, '2019-07-22', 'Isni Fauziah Arby', 'Hardcase 3D', '180000', '100000', '80000', '2020-10-14 19:01:54', '2020-10-14 19:01:54'),
(30, '2019-07-22', 'Cust Temen Nena', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 19:15:51', '2020-10-14 19:15:51'),
(31, '2019-07-26', 'Sri Prihatiningsih', 'Hardcase 3D', '182000', '90000', '92000', '2020-10-14 19:17:13', '2020-10-14 19:17:13'),
(32, '2019-07-31', 'Jimmy Depari', 'Hardcase 3D', '132000', '62000', '70000', '2020-10-14 19:18:53', '2020-10-14 19:18:53'),
(33, '2019-08-01', 'Deta Ramadhani', 'Hardcase 3D', '95000', '50000', '45000', '2020-10-14 19:19:51', '2020-10-14 19:19:51'),
(34, '2019-08-02', 'Amry', 'Hardcase 3D', '136000', '76000', '60000', '2020-10-14 19:20:23', '2020-10-14 19:20:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pemasukans`
--
ALTER TABLE `pemasukans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pemasukans`
--
ALTER TABLE `pemasukans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
