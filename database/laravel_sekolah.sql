-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 14.25
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_sekolah`
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
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `kode` varchar(191) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id`, `kode`, `nama`, `semester`, `guru_id`, `created_at`, `updated_at`) VALUES
(1, '001', 'matematika dasar', 'ganjil', 1, '2021-01-17 01:48:52', '0000-00-00 00:00:00'),
(2, '002', 'fisika dasar', 'genap', 1, '2021-01-17 01:49:00', '0000-00-00 00:00:00'),
(3, '003', 'Bahasa Inggris', 'genap', 1, '2021-01-17 01:49:04', '0000-00-00 00:00:00'),
(4, '004', 'Biologi', 'ganjil', 2, '2021-01-17 01:49:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel_siswa`
--

CREATE TABLE `mapel_siswa` (
  `id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel_siswa`
--

INSERT INTO `mapel_siswa` (`id`, `siswa_id`, `mapel_id`, `nilai`, `created_at`, `updated_at`) VALUES
(12, 14, 2, 80, '2021-01-25 08:15:06', '0000-00-00 00:00:00'),
(13, 14, 3, 70, '2021-01-25 01:20:15', '2021-01-25 08:20:15'),
(14, 14, 4, 55, '2021-01-25 01:21:35', '2021-01-25 08:21:35');

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
(4, '2021_01_06_073301_create_siswa_table', 1);

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
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `user_id`, `nama_depan`, `nama_belakang`, `email`, `jenis_kelamin`, `agama`, `alamat`, `avatar`, `created_at`, `updated_at`) VALUES
(14, 7, 'amanda', 'kurnia', 'darmono@gmail.com', 'Pr', 'islam', 'bagan batu', NULL, '2021-01-25 00:51:05', '2021-01-25 00:51:05'),
(20, 15, 'siti', 'rahma', 'siti@gmail.com', 'Pr', 'islam', 'bagna batu', NULL, '2021-02-03 22:34:50', '2021-02-03 22:34:50'),
(21, 16, 'akmal', 'latif', 'akmal@gmail.com', 'Lk', 'islam', 'perawang btn cendrawasih', NULL, '2021-02-16 06:47:05', '2021-02-16 06:47:05'),
(22, 17, 'test1', 'test2', 'test1@gmail.com', 'Lk', 'islam', 'kjhkhkk', NULL, '2021-03-22 06:57:08', '2021-03-22 06:57:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'yazid', 'yazid@gmail.com', NULL, '$2y$10$KirjY1dGbAmkNmgQKUfAROZ2hbIxmZiVvNQEveYQn7zrAj51XMhHa', 'VwhnR2rrtdC6c2aqUVPAl9ce8MSUgbcBnh3LxlFBiSCCniHKgGCa0V4abE3f', '2021-01-09 01:12:02', '2021-01-09 01:12:02'),
(7, 'siswa', 'amanda', 'darmono@gmail.com', NULL, '$2y$10$DstTn5g0StHvVGxPkwMQ7.JMT9FxQb5oOAk4E9HqUTcZh8uEqYDbq', 'iZry2k4vVspZV5zQGJzrcRzAr8AvikWleN7d0R5JExokXB55JEeYBmjxkKuQ', '2021-01-25 00:51:04', '2021-01-25 00:51:04'),
(11, 'siswa', 'eriko', 'rahman@gmail.com', NULL, '$2y$10$8zL5ERA9002I1RnpSuEOq.MWAEnYRCzhpyoytoWcE1dgo9RfHG4vO', 'fnNqhSZCE5Ae1bNWqJRKzUlXu1oZfyPlFdcohWrylZzbtTGu23Br6BJCxPvz', '2021-01-25 02:05:09', '2021-01-25 02:05:09'),
(12, 'siswa', 'putri', 'putriN@gmail.com', NULL, '$2y$10$W7hwFgef2Ped1lmcIfjrkul5GLk/tkEkq7HJUNRASNBtXer8xzcsa', 'C3UE67N313VensXEYeHcUpGMZlSx9b1zsPG7sHppATCjQJwcwFdmX9WfSrj7', '2021-01-25 02:08:04', '2021-01-25 02:08:04'),
(13, 'siswa', 'hariana', 'hariana@gmail.com', NULL, '$2y$10$ywvIKnszmtJSEftxKO5yqOH6/3Xuj1asZ2ar7cHSsZpwB.M0etg0S', 'xClomB0FLvDOY8hWMe435KbObeEsLkq6u49Ifwt9Xgg54PWiIx2AUW1OLbDS', '2021-02-03 22:32:12', '2021-02-03 22:32:12'),
(15, 'siswa', 'siti', 'siti@gmail.com', NULL, '$2y$10$Ny4Ka3TVMREGQsHc2iVSnuG6/sdyYm5Nol8JN818o3c9PAUHs7zs6', 'uzaRK2FO8SAcNLK4TGNphw58UI5Fbd5aNwhfZyIopQvs4wD9oKGXlLT0u44a', '2021-02-03 22:34:50', '2021-02-03 22:34:50'),
(16, 'siswa', 'akmal', 'akmal@gmail.com', NULL, '$2y$10$P6qgNzLxRVz/uu2YmkPvLO9iiooX2Klb9XOmr8KRtubF3UHYgSqya', 'odCV7cx7jdAUbK34CdB4MDlia5VQUHGPF5TI0Z7GWTIm7Mhehsx3JXqHnSkS', '2021-02-16 06:47:03', '2021-02-16 06:47:03'),
(17, 'admin', 'test1', 'test1@gmail.com', NULL, '$2y$10$Td8dDXrj/ajyS8r80JzPpeKivLgroahRPEFTYyIE9hmWB8oZ2qBsC', 'iz2RfTO3uHoVPYVruAKcQThlj5RnZ5slKH3GwHf3uJySc4vPmIpya4mcOR1o', '2021-03-22 06:57:08', '2021-03-22 06:57:08');

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
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
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
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mapel_siswa`
--
ALTER TABLE `mapel_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
