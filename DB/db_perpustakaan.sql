-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2022 pada 22.35
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `book_table`
--

CREATE TABLE `book_table` (
  `book_id` int(20) NOT NULL,
  `isbn` int(11) NOT NULL,
  `book_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `max_rent` int(11) NOT NULL,
  `price_rent` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `book_table`
--

INSERT INTO `book_table` (`book_id`, `isbn`, `book_title`, `author`, `max_rent`, `price_rent`) VALUES
(7, 909909, 'IKIGAI', 'Tere Liye', 5, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `extension_member`
--

CREATE TABLE `extension_member` (
  `id_ext` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `newDuration/month` int(11) NOT NULL,
  `end_date` datetime NOT NULL,
  `cost_ext` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `librarians`
--

CREATE TABLE `librarians` (
  `id_librarians` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `librarians`
--

INSERT INTO `librarians` (`id_librarians`, `username`, `email`, `password`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'aliflamra_', 'alifnafisalghany@gmail.com', '$2y$10$8aaD8czPUdml55/NOuZLeefE56BER1Re2b7O0GB5avlq4wuSlTeX6', 'none', '2022-12-01 03:32:43', '2022-11-30 22:48:50'),
(2, 'alif', 'alif@alif.com', '$2y$10$Bx1S7.D3BATqSJs61tKuNeDo7I/sG9nFn8mEAw1uA8hrplr6LgBm6', NULL, '2022-11-30 22:13:47', '2022-11-30 23:03:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `born_place` varchar(50) NOT NULL,
  `born_date` date NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `nationality` enum('WNI','WNA') DEFAULT 'WNI',
  `status` enum('active','non active') NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nik`, `name`, `phone`, `address`, `born_place`, `born_date`, `gender`, `country`, `nationality`, `status`, `created_at`, `updated_at`) VALUES
(2, '09876789099876', 'ARYA TIO WASESA', '0987654321', 'GAGAKSIPAT', 'WONOGIRI', '2004-11-14', 'MALE', 'INDONESIA', 'WNI', 'active', '2022-12-01 10:01:44', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_table`
--

CREATE TABLE `member_table` (
  `member_id` int(11) NOT NULL,
  `regis_id` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `registration_member`
--

CREATE TABLE `registration_member` (
  `regis_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(20) NOT NULL DEFAULT 62,
  `hometown` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `duration/month` int(11) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `end_date` timestamp NULL DEFAULT NULL,
  `cost_regis` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_librarian`
--

CREATE TABLE `user_librarian` (
  `id_librarian` int(11) NOT NULL,
  `card_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'OFC00',
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(15) NOT NULL DEFAULT 62,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('MALE','FEMALE') COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user_librarian`
--

INSERT INTO `user_librarian` (`id_librarian`, `card_id`, `username`, `email`, `phone`, `password`, `gender`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'OFC001', 'BAGUSSS', 'bagus@email.com', 628987578, '$2y$10$UyQ6BieS0pX8BlqrE3GhUezXF4xnrTL1hWjKeMikfSQTpo52PeRIa', 'MALE', 'TANGERANG', '2022-12-01 08:21:39', '2022-12-01 02:21:39'),
(2, 'OFC002', 'aryakkk', 'aryatiowasesa1306@gmail.com', 9908979, '$2y$10$8fQRki6mZvcbXjcA7ssQ6OInjU4/idTdj9Z3m35ZgxWh4Kg4bL8gG', 'MALE', 'SURAKARTA', '2022-12-01 08:10:06', '2022-12-01 02:10:06'),
(3, 'OFC003', 'DWI TIA AUDINA', 'dinull@gmail.com', 9908979, '$2y$10$OLHcWBpdoRBxUl4JvHGxruyi7lBnvpZQAjbRiqNaCIL13YyW2CR7e', 'FEMALE', 'BOYOLALI', '2022-12-01 08:57:22', '2022-12-01 02:57:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `book_table`
--
ALTER TABLE `book_table`
  ADD PRIMARY KEY (`book_id`);

--
-- Indeks untuk tabel `extension_member`
--
ALTER TABLE `extension_member`
  ADD PRIMARY KEY (`id_ext`),
  ADD KEY `fk_member` (`id_member`);

--
-- Indeks untuk tabel `librarians`
--
ALTER TABLE `librarians`
  ADD PRIMARY KEY (`id_librarians`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `member_table`
--
ALTER TABLE `member_table`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `fk_regis` (`regis_id`);

--
-- Indeks untuk tabel `registration_member`
--
ALTER TABLE `registration_member`
  ADD PRIMARY KEY (`regis_id`);

--
-- Indeks untuk tabel `user_librarian`
--
ALTER TABLE `user_librarian`
  ADD PRIMARY KEY (`id_librarian`),
  ADD KEY `card_id` (`card_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `book_table`
--
ALTER TABLE `book_table`
  MODIFY `book_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `extension_member`
--
ALTER TABLE `extension_member`
  MODIFY `id_ext` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `librarians`
--
ALTER TABLE `librarians`
  MODIFY `id_librarians` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `member_table`
--
ALTER TABLE `member_table`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `registration_member`
--
ALTER TABLE `registration_member`
  MODIFY `regis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_librarian`
--
ALTER TABLE `user_librarian`
  MODIFY `id_librarian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `extension_member`
--
ALTER TABLE `extension_member`
  ADD CONSTRAINT `fk_member` FOREIGN KEY (`id_member`) REFERENCES `member_table` (`member_id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `member_table`
--
ALTER TABLE `member_table`
  ADD CONSTRAINT `fk_regis` FOREIGN KEY (`regis_id`) REFERENCES `registration_member` (`regis_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
