-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2020 pada 19.56
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diring_lesson`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategory`
--

CREATE TABLE `kategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuda`
--

CREATE TABLE `kuda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kuda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kuda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kuda`
--

INSERT INTO `kuda` (`id`, `nama_kuda`, `jenis_kuda`, `created_at`, `updated_at`) VALUES
(8, 'Sterling Parisian', 'Ms. Lolita Hansen PhD', '2020-07-05 19:07:27', '2020-07-05 19:07:27'),
(56, 'Krystina Dach', 'Mr. Triston Ward I', '2020-07-05 19:08:57', '2020-07-05 19:08:57'),
(57, 'Stephanie Hammes', 'Prof. Norris Schoen III', '2020-07-05 19:08:57', '2020-07-05 19:08:57'),
(59, 'Kuda Brazil', 'Kuda Preident', '2020-07-05 19:08:57', '2020-07-08 16:56:04'),
(61, 'Kuda Hitam', 'Kuda Hitam', '2020-07-07 19:16:39', '2020-07-07 19:16:39'),
(62, 'Kuda President', 'Kuda Indonesia', '2020-07-08 15:35:22', '2020-07-08 15:35:22'),
(63, 'Kuda Poni', 'Luda Poni Pink', '2020-07-08 16:55:31', '2020-07-08 16:55:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_12_061444_create_permission_tables', 1),
(5, '2020_06_11_152229_create_visitors_table', 1),
(6, '2020_06_11_152509_create_drinks_table', 1),
(7, '2020_06_11_152555_create_foods_table', 1),
(8, '2020_06_13_012421_add_qty_on_drinks_table', 1),
(9, '2020_06_13_012838_add_qty_on_foods_table', 1),
(10, '2020_06_13_074457_add_asalnegara_on_foods_table', 2),
(11, '2020_06_13_103010_create_food_table', 3),
(12, '2020_06_15_035035_create_drink_table', 4),
(13, '2020_06_19_065518_create_saran_table', 5),
(14, '2020_07_03_070441_create_pelatih_table', 6),
(15, '2020_07_03_070739_create_kuda_table', 6),
(16, '2020_07_03_070754_create_peserta_table', 6),
(17, '2020_07_10_075905_create_lesson_table', 7),
(18, '2020_07_10_080038_create_perdatang_table', 7),
(19, '2020_07_10_080102_create_perbulan_table', 7),
(20, '2020_07_11_012316_create_kategori_table', 8),
(21, '2020_07_11_013559_create_kategory_table', 9),
(22, '2020_07_12_053831_create_pesertaperdatang_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 8),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(2, 'App\\User', 4),
(2, 'App\\User', 5),
(2, 'App\\User', 6),
(2, 'App\\User', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatih`
--

CREATE TABLE `pelatih` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelatih` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelatih`
--

INSERT INTO `pelatih` (`id`, `nama_pelatih`, `jenis_kelamin`, `no_telpon`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Fatimah Zahra', 'P', '0987590879', 'Semarang Jawa Tengah 989', '2020-07-05 07:50:13', '2020-07-07 23:55:11'),
(5, 'Sandi Uno', 'L', '09969078689', 'Jakarta Pusat 970 Deket Monas', '2020-07-05 07:50:13', '2020-07-08 16:53:36'),
(6, 'Amir', 'L', '082333565797', 'gg 65y5y5', '2020-07-07 20:10:05', '2020-07-07 20:10:05'),
(8, '1 Pelatih', 'P', '082333565797', 'Jaarta 9869', '2020-07-08 16:51:49', '2020-07-08 16:51:49'),
(9, 'udin karto solo', 'P', '07968024-960980', 'Kartosuro Solo', '2020-07-08 17:06:18', '2020-07-08 17:06:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbulan`
--

CREATE TABLE `perbulan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelatih_id` bigint(20) UNSIGNED NOT NULL,
  `pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuda_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perdatang`
--

CREATE TABLE `perdatang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelatih_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_masuk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kuda_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi_badan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_badan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id`, `nama_peserta`, `jenis_kelamin`, `tinggi_badan`, `berat_badan`, `no_telpon`, `alamat`, `created_at`, `updated_at`) VALUES
(3, 'Karem Benzema Paulo', 'L', '189', '90', '0986790699', 'Madrid, Spain Eropa \r\norgho wi hgihsye goiw45y7u89whj bolhg9 qy h', '2020-07-05 07:59:57', '2020-07-09 19:03:55'),
(4, 'Honda', 'L', '190', '120', '098757087096', 'Tokyo , Japan', '2020-07-05 07:59:57', '2020-07-08 16:57:58'),
(5, 'Dr. Anika Ruecker', 'L', '7', '8', '+5665191560486', '711 Dibbert Fords\nNew Patricia, AK 94060', '2020-07-05 07:59:57', '2020-07-05 07:59:57'),
(6, 'Amirin', 'L', '324', '2434', '09867557886', 'ertv5 3y3', '2020-07-07 19:38:40', '2020-07-07 19:38:40'),
(8, 'Raka', 'P', '169', '65', '08779067', 'Pekalongan', '2020-07-07 20:20:48', '2020-07-07 20:20:48'),
(9, 'Sifa', 'P', '165', '68', '0987546800659', 'Sukolilo Jawa Tengah Indonesia 098680', '2020-07-08 16:57:04', '2020-07-08 16:57:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesertaperdatang`
--

CREATE TABLE `pesertaperdatang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_peserta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi_badan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat_badan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesertaperdatang`
--

INSERT INTO `pesertaperdatang` (`id`, `nama_peserta`, `jenis_kelamin`, `tinggi_badan`, `berat_badan`, `no_telpon`, `alamat`, `created_at`, `updated_at`) VALUES
(46, 'Mr. Cruz Ledner', 'L', '1', '1', '+9093757622392', '877 Franz Ways Suite 916\nJakubowskifurt, AL 35109', '2020-07-11 23:12:14', '2020-07-11 23:12:14'),
(47, 'Judge Langworth', 'P', '0', '9', '+5970656531380', '10648 Tia Turnpike Suite 853\nEast Maiaborough, NH 70972-1683', '2020-07-11 23:12:14', '2020-07-11 23:12:14'),
(48, 'Gayle Hill II', 'L', '1', '1', '+1436827591024', '8356 Boehm Fall Suite 854\nEast Vestaburgh, WY 29842-5477', '2020-07-11 23:12:14', '2020-07-11 23:12:14'),
(51, 'Sasa', 'P', '16789', '906t78u', '09868907678', 'tgyhenue5ueh\r\n                         jft7ijr67imrj', '2020-07-12 07:49:13', '2020-07-12 07:49:43'),
(52, 'Rahmania Firdausi', 'P', '165', '65', '09868907678079', 'Talisan Kalimantan Timur', '2020-07-12 15:35:18', '2020-07-12 15:36:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-06-12 23:57:43', '2020-06-12 23:57:43'),
(2, 'user', 'web', '2020-06-12 23:57:43', '2020-06-12 23:57:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Coffee', 'admin@coffee.test', NULL, '$2y$10$mP9MKjBSjahzssZg/QJ5mev9pk9KeQgSOd.plppZl9OVvrtYKQj8y', NULL, '2020-06-12 23:57:43', '2020-06-12 23:57:43'),
(2, 'Ibrohim Malik', 'ibrohim@gmail.com', NULL, '$2y$10$lZ4jjnXfIkRiQ/I1b4zQj.2X1dGcl8AxPJnR7jc66TbgyD0WxV4wy', NULL, '2020-06-16 15:40:14', '2020-06-16 15:40:14'),
(3, 'Firman Utina', 'firman@gmail.com', NULL, '$2y$10$u/zGb.qn3ERVkjn8BD3tw.ojm2VjKDsqnwwMAG8YuRtkmvFKNpDiW', NULL, '2020-06-16 15:41:47', '2020-06-16 15:41:47'),
(4, 'Dinar Malik', 'dinarmalik@gmail.com', NULL, '$2y$10$ZW/kLtxgiwScbSvOmzHVwugaIUg3RsomFlNIDLOnLr1ogNecp6F7a', NULL, '2020-06-16 15:42:44', '2020-06-16 15:42:44'),
(5, 'Sasa Izzati', 'sasa@gmail.com', NULL, '$2y$10$8VxatNL2KY4gcAnqFP9w1e7Hmb7dc20BC17jEqXYptGTuWVsRs6uu', NULL, '2020-06-16 15:51:15', '2020-06-16 15:51:15'),
(6, 'Raka Firdausi', 'raka@gmail.com', NULL, '$2y$10$5/PeL.J7K/4XzZ1rZy96N./pdqZnqVy64jUJG5ioIxrDVPSBxSghO', NULL, '2020-06-16 15:51:59', '2020-06-16 15:51:59'),
(7, 'Ibnu Mubarak', 'ibnumubarak@gmail.com', NULL, '$2y$10$6UR2YzUT7fcTObREPFJkdungJFOUiW3pCXJDs/i19MT/TNoTlrzWG', NULL, '2020-06-16 15:52:56', '2020-06-16 15:52:56'),
(8, 'Admin Diring Lesson', 'diringlesson@gmail.com', NULL, '$2y$10$JGCiVR5/mWRUevmNQwzSSeThr6nHvfrc43xAkPCFVnzR.NMwyXqtW', NULL, '2020-07-02 23:58:12', '2020-07-02 23:58:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategory`
--
ALTER TABLE `kategory`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kuda`
--
ALTER TABLE `kuda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelatih`
--
ALTER TABLE `pelatih`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perbulan`
--
ALTER TABLE `perbulan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perbulan_pelatih_id_foreign` (`pelatih_id`),
  ADD KEY `perbulan_kuda_id_foreign` (`kuda_id`);

--
-- Indeks untuk tabel `perdatang`
--
ALTER TABLE `perdatang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perdatang_pelatih_id_foreign` (`pelatih_id`),
  ADD KEY `perdatang_kuda_id_foreign` (`kuda_id`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesertaperdatang`
--
ALTER TABLE `pesertaperdatang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT untuk tabel `kategory`
--
ALTER TABLE `kategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kuda`
--
ALTER TABLE `kuda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pelatih`
--
ALTER TABLE `pelatih`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `perbulan`
--
ALTER TABLE `perbulan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perdatang`
--
ALTER TABLE `perdatang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pesertaperdatang`
--
ALTER TABLE `pesertaperdatang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perbulan`
--
ALTER TABLE `perbulan`
  ADD CONSTRAINT `perbulan_kuda_id_foreign` FOREIGN KEY (`kuda_id`) REFERENCES `kuda` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `perbulan_pelatih_id_foreign` FOREIGN KEY (`pelatih_id`) REFERENCES `pelatih` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perdatang`
--
ALTER TABLE `perdatang`
  ADD CONSTRAINT `perdatang_kuda_id_foreign` FOREIGN KEY (`kuda_id`) REFERENCES `kuda` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `perdatang_pelatih_id_foreign` FOREIGN KEY (`pelatih_id`) REFERENCES `pelatih` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
