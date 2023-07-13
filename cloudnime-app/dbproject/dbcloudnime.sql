-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2023 pada 13.35
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcloudnime`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_02_072023_create_movies_table', 1),
(6, '2023_07_02_072051_create_genres_table', 1),
(7, '2023_07_02_072111_create_reviews_table', 1),
(8, '2023_07_02_072157_create_countries_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `genres_id` bigint(20) UNSIGNED NOT NULL,
  `synopsis` text NOT NULL,
  `release_date` date NOT NULL,
  `countries_id` int(11) NOT NULL,
  `rating` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `movies`
--

INSERT INTO `movies` (`id`, `title`, `poster`, `genres_id`, `synopsis`, `release_date`, `countries_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Kimetsu No Yaiba', 'image.png', 1, 'Tanjiro pergi menemui Hotaro Haganezuka sang pembuat pedang untuk memperbaiki pedangnya yang rusak.\n            Saat menunggu pedangnya selesai diperbaiki, tiba-tiba iblis kelas atas datang untuk menyerang. \n            Mampukah Tanjiro dan para pembasmi iblis atau Demon Slayer lainnya mengalahkan musuh yang bisa membelah diri dan memiliki kemampuan regenerasi tingkat tinggi?', '2023-04-10', 1, 8.60, '2023-07-03 03:39:25', '2023-07-03 03:39:25'),
(2, 'Chainsaw Man', 'image.png', 1, 'Denji memiliki mimpi yang cukup sederhana; hidup damai, bahagia dan menghabiskan waktu bersama gadis yang ia cintai. \n            Namun, realita hidupnya ternyata jauh dari yang ia harapkan karena Denji dipaksa yakuza untuk membasmi iblis demi melunasi hutang-hutangnya. \n            Menggunakan iblis peliharaannya Pochita sebagai senjata, ia siap melakukan apa pun.', '2022-10-17', 1, 8.40, '2023-07-03 03:39:25', '2023-07-03 03:39:25'),
(3, 'One Punch Man', 'image.png', 1, 'Setelah mengalahkan Boros dan pasukannya yang perkasa, Saitama telah kembali ke kehidupan sehari-harinya yang biasa-biasa saja di Z-City. Namun, tanpa sepengetahuannya, jumlah monster yang muncul masih terus meningkat, memberikan tekanan pada sumber daya Asosiasi Pahlawan. \n            Eksekutif puncak mereka memutuskan langkah berani merekrut penjahat untuk membantu dalam pertempuran mereka. \n            Tetapi selama pertemuan pertama dengan calon pendatang baru ini, seorang pria misterius yang menyebut dirinya Garou membuat penampilan. \n            Mengaku sebagai monster, dia mulai tanpa ampun menyerang kerumunan.', '2019-04-10', 1, 8.50, '2023-07-03 03:39:25', '2023-07-03 03:39:25'),
(4, 'Violet Evergarden', 'image.png', 1, 'Beberapa tahun telah berlalu sejak akhir Perang Besar. Karena menara radio di Leidenschaftlich terus dibangun, telepon akan segera menjadi lebih relevan, menyebabkan penurunan permintaan \"Boneka Kenangan Otomatis\". \n            Meski begitu, Violet Evergarden terus meningkat popularitasnya setelah kesuksesannya yang konstan dalam menulis surat. Namun, terkadang satu hal yang Anda rindukan justru satu hal yang tidak muncul.\n\n            Film Violet Evergarden mengikuti Violet saat dia terus memahami konsep emosi dan arti cinta. \n            Pada saat yang sama, dia mengejar secercah harapan bahwa pria yang pernah mengatakan kepadanya, \"Aku mencintaimu,\" mungkin masih hidup bahkan setelah bertahun-tahun berlalu.', '2020-09-18', 1, 9.00, '2023-07-03 03:39:25', '2023-07-03 03:39:25'),
(5, 'One Piece', 'image.png', 1, 'Gol D. Roger dikenal sebagai \"Raja Bajak Laut\", makhluk terkuat dan paling terkenal yang pernah mengarungi Grand Line. Penangkapan dan eksekusi Roger oleh Pemerintah Dunia membawa perubahan di seluruh dunia. \n            Kata-kata terakhirnya sebelum kematiannya mengungkapkan keberadaan harta karun terbesar di dunia, One Piece. \n            Pengungkapan inilah yang membawa Zaman Keagungan Bajak Laut, orang-orang yang bermimpi menemukan One Piece—yang menjanjikan kekayaan dan ketenaran yang tak terbatas—dan sangat mungkin puncak kejayaan dan gelar Raja Bajak Laut.', '1999-10-20', 1, 9.00, '2023-07-03 03:39:25', '2023-07-03 03:39:25'),
(6, 'Naruto Shippudent', 'image.png', 1, 'Sudah dua setengah tahun sejak Naruto Uzumaki meninggalkan Konohagakure, Desa Daun Tersembunyi, untuk latihan intensif mengikuti peristiwa yang memicu keinginannya untuk menjadi lebih kuat. \n            Sekarang Akatsuki, organisasi misterius ninja nakal elit, mendekati rencana besar mereka yang dapat mengancam keselamatan seluruh dunia shinobi.', '2007-02-17', 1, 9.50, '2023-07-03 03:39:25', '2023-07-03 03:39:25'),
(7, 'Black Clover', 'image.png', 1, 'Asta dan Yuno ditinggalkan di gereja yang sama pada hari yang sama. Dibesarkan bersama sebagai anak-anak, mereka mengetahui tentang \"Raja Penyihir\"—gelar yang diberikan kepada penyihir terkuat di kerajaan—dan berjanji bahwa mereka akan bersaing satu sama lain untuk memperebutkan posisi Raja Penyihir berikutnya. Namun, saat mereka tumbuh dewasa, perbedaan mencolok di antara mereka menjadi jelas. \n            Sementara Yuno mampu menggunakan sihir dengan kekuatan dan kontrol yang luar biasa, Asta tidak dapat menggunakan sihir sama sekali dan berusaha mati-matian untuk membangkitkan kekuatannya dengan berlatih secara fisik.', '2017-10-03', 1, 9.00, '2023-07-03 03:39:25', '2023-07-03 03:39:25'),
(8, 'Bleach', 'image.png', 1, 'Ichigo Kurosaki adalah siswa sekolah menengah biasa — sampai keluarganya diserang oleh Hollow, roh korup yang berusaha melahap jiwa manusia. \n            Saat itulah ia bertemu dengan Soul Reaper bernama Rukia Kuchiki, yang terluka saat melindungi keluarga Ichigo dari penyerang. \n            Untuk menyelamatkan keluarganya, Ichigo menerima tawaran Rukia untuk mengambil kekuatannya dan menjadi Soul Reaper sebagai hasilnya.', '2005-10-05', 1, 9.00, '2023-07-03 03:39:25', '2023-07-03 03:39:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movies_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `rating` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT untuk tabel `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
