-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Des 2024 pada 13.52
-- Versi server: 8.0.30
-- Versi PHP: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_umrahfarm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1),
(7, '2024_11_29_184357_create_record_ternak_table', 2),
(9, '2024_12_05_081959_create_stok_pakan_table', 3),
(10, '2024_12_14_095607_create_users_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `record_ternak`
--

CREATE TABLE `record_ternak` (
  `tag_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_hewan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lahir_beli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_awal` decimal(8,2) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_beli` date NOT NULL,
  `harga_beli` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `record_ternak`
--

INSERT INTO `record_ternak` (`tag_id`, `name`, `jenis_hewan`, `jenis_kelamin`, `lahir_beli`, `berat_awal`, `tanggal_lahir`, `tanggal_beli`, `harga_beli`, `created_at`, `updated_at`) VALUES
(2, 'sapi 2', 'kambing', 'betina', 'beli', 123.00, '2024-12-23', '2024-12-23', 12000000, '2024-12-23 05:23:31', '2024-12-23 05:23:31'),
(3, 'Ayam 1', 'ayam', 'jantan', 'beli', 1.00, '2024-12-01', '2024-12-23', 50000, '2024-12-23 06:09:03', '2024-12-23 06:09:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_pakan`
--

CREATE TABLE `stok_pakan` (
  `id` bigint UNSIGNED NOT NULL,
  `jenis_pakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok_tersisa` decimal(10,2) NOT NULL,
  `kebutuhan_harian` decimal(10,2) NOT NULL,
  `perkiraan_habis` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stok_pakan`
--

INSERT INTO `stok_pakan` (`id`, `jenis_pakan`, `stok_tersisa`, `kebutuhan_harian`, `perkiraan_habis`, `created_at`, `updated_at`) VALUES
(2, 'RUMPUT', 80.00, 70.00, '2024-12-24', '2024-12-23 05:25:46', '2024-12-23 06:10:32'),
(3, 'Ampas Tahu', 10.00, 60.00, '2024-12-23', '2024-12-23 06:10:07', '2024-12-23 06:10:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `farm_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `livestock_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `farm_scale` int DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_count` int DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `farm_name`, `livestock_type`, `farm_scale`, `location`, `phone`, `employee_count`, `join_date`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'Danyl Aprizal', 'danylmananta@gmail.com', '$2y$12$aRgtmQKPeHzVRdggbY1KH.2H5K7I8p6Fr3kN6pdSYItxSo7fhE4/i', 'Batu Raja', 'sapi', 6, 'Air Raja TanjungPinang', '082179003688', 2, '2024-12-17', 0, '2024-12-16 22:03:14', '2024-12-16 22:03:14'),
(2, 'Danyi Aprizal', 'danylaprizal3@gmail.com', '$2y$12$LqFESII5kKOulROvOVlpUudwCMt7p7pN2fNH4GdlK8Q3yi2FIiWYe', 'Danyi Farm', 'sapi', 12, 'Tanjungpinang', '082179003688', 2, '2024-12-23', 0, '2024-12-23 04:47:32', '2024-12-23 04:47:32'),
(3, 'Danyi Aprizal', 'danylaprizal@gmail.com', '$2y$12$5t2RWyrp8ISbhOW/otwAZusB1wCWthZG0LxTDiW/rkLb2.rlZ9ZE2', 'Danyi Aprizal Farm', 'sapi', 13, 'Tanjungpinang', '082179003688', 1, '2024-12-23', 0, '2024-12-23 05:07:25', '2024-12-23 05:07:25'),
(4, 'Danyi 2', 'danyi@admin.com', '$2y$12$5eR7k1rQougwSTII9nxxq.PlSOYuYAzoBUfYNNOu4LPEBBUxdNLy.', 'Batu Raja Farm', 'sapi', 4, 'Batu 8 Tanjungpinang', '082179003688', 1, '2024-12-23', 0, '2024-12-23 06:07:38', '2024-12-23 06:07:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vet_monitors`
--

CREATE TABLE `vet_monitors` (
  `id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `diagnosa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `obat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_hewan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `health_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vet_monitors`
--

INSERT INTO `vet_monitors` (`id`, `tag_id`, `tanggal`, `diagnosa`, `obat`, `foto_hewan`, `health_status`, `created_at`, `updated_at`) VALUES
(1, 2, '2024-12-23', 'Kembung', 'Bodrek', 'uploads/foto_hewan/ZnhXdpk68tV6bVi6gMH06z6i8Xzb816AH1VX086L.png', 'Kurang baik', '2024-12-23 05:27:05', '2024-12-23 05:27:05'),
(2, 3, '2024-12-23', 'Kemung', 'Vitamin', 'uploads/foto_hewan/n8P7zUEsSULQixOOpnwW0nLDFFYMFPGsz8Y7fTi4.png', 'Kurang Baik', '2024-12-23 06:12:05', '2024-12-23 06:12:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `record_ternak`
--
ALTER TABLE `record_ternak`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `stok_pakan`
--
ALTER TABLE `stok_pakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `vet_monitors`
--
ALTER TABLE `vet_monitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `record_ternak`
--
ALTER TABLE `record_ternak`
  MODIFY `tag_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `stok_pakan`
--
ALTER TABLE `stok_pakan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `vet_monitors`
--
ALTER TABLE `vet_monitors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
