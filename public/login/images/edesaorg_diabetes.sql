-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Agu 2023 pada 21.01
-- Versi server: 10.6.12-MariaDB-cll-lve
-- Versi PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edesaorg_diabetes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `diagnosa_id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `kode_gejala` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `gejala_id` int(11) NOT NULL,
  `kode_gejala` varchar(255) NOT NULL,
  `bobot` double NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `flag_erase` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`gejala_id`, `kode_gejala`, `bobot`, `nama_gejala`, `keterangan`, `flag_erase`, `created_at`, `updated_at`) VALUES
(1, 'G1', 0.5, 'Poliuria (banyak kencing)', 'Poliuria (banyak kencing) merupakan penyakit yang membuat kita sering membuang air kecil/kencing', 1, '2023-07-20 16:31:45', '2023-07-09 22:21:45'),
(2, 'G2', 0.3, 'Polidipsia (banyak minum)', 'Polidipsia (banyak minum)', 1, '2023-07-20 16:31:55', '2023-07-09 22:21:59'),
(3, 'G3', 0.3, 'Polifagia (banyak makan)', 'Polifagia (banyak makan)', 1, '2023-07-20 16:32:11', '2023-07-09 22:22:14'),
(4, 'G4', 0.1, 'kram (sering terjadi kram pada otot)', 'kram (sering terjadi kram pada otot)', 1, '2023-07-20 16:32:20', '2023-07-09 22:22:23'),
(5, 'G5', 0.3, 'Semutan (rasa kesemutan)', 'Semutan (rasa kesemutan)', 1, '2023-07-20 16:35:25', '2023-07-09 22:22:32'),
(6, 'G6', 0.5, 'Rasa tebal (pada ujung kaki tangan atau kaki)', 'Rasa tebal (pada wjung kaki tangan ato kaki)', 1, '2023-08-01 15:14:10', '2023-07-09 22:22:41'),
(7, 'G7', 0.1, 'Lapar (cepat lapar)', 'Lapar (cepat lapar)', 1, '2023-07-20 16:35:41', '2023-07-09 22:22:49'),
(8, 'G8', 0.5, 'turun BB tiba-tiba tanpa alasan jelas', 'turun BB tiba-tiba tanpa alasan jelas', 1, '2023-07-20 16:35:52', '2023-07-09 22:26:55'),
(9, 'G9', 0.5, 'kulit (kelainan pada kulit menjadi kering)', 'kulit (kelainan pada kulit menjadi kering)', 1, '2023-07-20 16:36:13', '2023-07-09 22:27:17'),
(10, 'G10', 0.3, 'Gatal (gatal sekitaran kemaluan)', 'Gatal (gatal sekitaran kemaluan)', 1, '2023-07-20 16:36:25', '2023-07-09 22:27:36'),
(11, 'G11', 0.5, 'Luka (luka yang sukar sembuh)', 'Luka (luka yang sukar sembuh)', 1, '2023-07-20 16:36:38', '2023-07-09 22:27:51'),
(12, 'G12', 0.5, 'Keputihan (keputihan karena kelainan pada ginjal kalogi)', 'Keputihan (keputihan karena kelainan pada ginjal kalogi)', 1, '2023-07-20 16:36:58', '2023-07-09 22:28:03'),
(13, 'G13', 0.3, 'Bisul (sering muncul bisul ditubuh)', 'Bisul (sering muncul bisul ditubuh)', 1, '2023-07-20 16:37:22', '2023-07-09 22:28:33'),
(14, 'G14', 0, 'Lemah (cubuh cepat terasa lemah)', 'Lemah (cubuh cepat terasa lemah)', 1, '2023-07-09 22:28:43', '2023-07-09 22:28:43'),
(15, 'G15', 0.1, 'Konsentrasi (konsentrasi mudah terganggu/kurang fokus)', 'Konsentrasi (konsentrasi mudah terganggu/kurang fokus)', 1, '2023-07-20 16:38:21', '2023-07-09 22:28:52'),
(16, 'G16', 0.5, 'Berat badan turun drastis', 'Berat badan turn drastis', 1, '2023-08-01 15:14:40', '2023-07-09 22:29:04'),
(17, 'G17', 0.5, 'Infeksi (mudah terkena infeksi)', 'Infeksi (mudah terkena infeksi)', 1, '2023-07-20 16:39:18', '2023-07-09 22:29:22'),
(18, 'G18', 0.3, 'Gemetar (gemetar karena kelebihan lapar)', 'Gemetar (gemetar karena kelebihan lapar)', 1, '2023-07-20 16:39:33', '2023-07-09 22:29:32'),
(19, 'G19', 0.1, 'sering pingsan', 'sering pingsan', 1, '2023-07-20 16:39:43', '2023-07-09 22:29:40'),
(20, 'G20', 0.1, 'Keringat (banyak keringat, terutama keringat dingin)', 'Keringat (banyak keringat, terutama keringat dingin)', 1, '2023-07-20 16:40:06', '2023-07-09 22:29:52'),
(21, 'G21', 0.5, 'Berdebar (detakan jantung tidak normal)', 'Berdebar (detakan jantung tidak normal)', 1, '2023-07-20 16:40:15', '2023-07-09 22:30:00'),
(22, 'G22', 0.5, 'Pusing (sering pusing)', 'Pusing (sering pusing)', 1, '2023-07-20 16:40:33', '2023-07-09 22:30:08'),
(23, 'G23', 0, 'Gelisah (suka gelisah)', 'Gelisah (suka gelisah)', 1, '2023-07-09 22:30:17', '2023-07-09 22:30:17'),
(24, 'G24', 0.3, 'Koma (hilang kesadaran)', 'Koma (hilang kesadaran)', 1, '2023-07-20 16:41:23', '2023-07-09 22:30:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `id_penyakit` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`history_id`, `nama`, `alamat`, `jenis_kelamin`, `tgl_lahir`, `pekerjaan`, `id_penyakit`, `created_at`, `updated_at`) VALUES
(1, 'nevada', 'Jl. Tlk. Melano No 1081', 'Laki-laki', '2023-08-18', 'swasta', 'P3', '2023-08-01 11:29:07', '2023-08-01 11:29:07'),
(2, 'veni', 'sai awan', 'Perempuan', '2023-08-02', 'mahasiswa', 'P3', '2023-08-01 11:33:21', '2023-08-01 11:33:21'),
(3, 'veni', 'sungai awan kiri', 'Perempuan', '2002-05-24', 'mahasiswa', 'P1', '2023-08-01 11:35:13', '2023-08-01 11:35:13'),
(4, 'veni', 'saki', 'Perempuan', '2222-02-12', 'mahasiswa', 'P2', '2023-08-01 11:37:44', '2023-08-01 11:37:44'),
(5, 'veni', 'saki', 'Perempuan', '2002-06-26', 'mahasiswa', 'P1', '2023-08-01 11:40:31', '2023-08-01 11:40:31'),
(8, 'test', 'Jl. Tlk. Melano No 1081', 'Laki-laki', '2023-08-25', 'swasta', 'P3', '2023-08-01 23:04:21', '2023-08-01 23:04:21'),
(9, 'AIRIN NATASYA MAHERA', 'Jl.Ketapang-siduk km 15', 'Perempuan', '2015-01-01', 'Siswa', 'P1', '2023-08-03 20:31:32', '2023-08-03 20:31:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `penyakit_id` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `kode_penyakit` varchar(255) NOT NULL,
  `keterangan` longtext NOT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`penyakit_id`, `nama_penyakit`, `kode_penyakit`, `keterangan`, `flag_erase`, `created_at`, `updated_at`) VALUES
(1, 'diabetes tipe 1', 'P1', 'Suatu kondisi kronis saat pankreas memproduksi insulin sedikit atau tidak sama sekali.\nKondisi ini biasanya muncul saat masa remaja.\nGejala termasuk rasa haus meningkat, sering buang air kecil, lapar, lelah, dan penglihatan kabur.\nPengobatan bertujuan menjaga kadar gula darah normal melalui pemantauan rutin, terapi insulin, diet, dan olahraga.', 1, '2023-08-01 18:28:06', '2023-08-01 08:44:58'),
(2, 'diabetes tipe 2', 'P2', 'Pada diabetes tipe 2, tubuh tidak memproduksi cukup insulin, atau menolak insulin.\nGejala berupa rasa haus meningkat, sering buang air kecil, lapar, lelah, dan penglihatan kabur. Pada beberapa kasus, tidak ada gejala.\nPenanganan berupa diet, olahraga, obat, dan terapi insulin.', 1, '2023-08-01 18:27:45', '2023-08-01 08:46:24'),
(3, 'Tipe 3 (Melitus Gestasional)', 'P3', 'Kondisi ini terjadi ketika sistem kekebalan tubuh menyerang dan menghancurkan sel-sel pankreas yang memproduksi insulin. Belum jelas penyebab penyakit ini. Namun, diduga penyebabnya berkaitan dengan genetik atau virus yang memicu serangan sistem kekebalan.', 1, '2023-08-01 18:27:19', '2023-08-01 08:49:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit_detail`
--

CREATE TABLE `penyakit_detail` (
  `detail_id` int(11) NOT NULL,
  `kode_detail` char(10) NOT NULL,
  `kode_penyakit` varchar(255) NOT NULL,
  `kode_gejala` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penyakit_detail`
--

INSERT INTO `penyakit_detail` (`detail_id`, `kode_detail`, `kode_penyakit`, `kode_gejala`, `created_at`, `updated_at`) VALUES
(1, 'R1', 'P1', 'G1', '2023-08-01 08:44:58', '2023-08-01 08:44:58'),
(2, 'R1', 'P1', 'G2', '2023-08-01 08:44:58', '2023-08-01 08:44:58'),
(3, 'R1', 'P1', 'G3', '2023-08-01 08:44:58', '2023-08-01 08:44:58'),
(4, 'R1', 'P1', 'G4', '2023-08-01 08:44:58', '2023-08-01 08:44:58'),
(5, 'R1', 'P1', 'G5', '2023-08-01 08:44:58', '2023-08-01 08:44:58'),
(6, 'R1', 'P1', 'G6', '2023-08-01 08:44:58', '2023-08-01 08:44:58'),
(7, 'R1', 'P1', 'G15', '2023-08-01 08:44:58', '2023-08-01 08:44:58'),
(8, 'R1', 'P1', 'G19', '2023-08-01 18:00:07', '2023-08-01 08:44:58'),
(9, 'R1', 'P1', 'G20', '2023-08-01 08:44:58', '2023-08-01 08:44:58'),
(10, 'R2', 'P2', 'G7', '2023-08-01 08:46:24', '2023-08-01 08:46:24'),
(11, 'R2', 'P2', 'G8', '2023-08-01 08:46:24', '2023-08-01 08:46:24'),
(12, 'R2', 'P2', 'G10', '2023-08-01 08:46:24', '2023-08-01 08:46:24'),
(13, 'R2', 'P2', 'G11', '2023-08-01 08:46:24', '2023-08-01 08:46:24'),
(14, 'R2', 'P2', 'G12', '2023-08-01 08:46:24', '2023-08-01 08:46:24'),
(15, 'R2', 'P2', 'G13', '2023-08-01 08:46:24', '2023-08-01 08:46:24'),
(16, 'R2', 'P2', 'G14', '2023-08-01 08:46:24', '2023-08-01 08:46:24'),
(17, 'R2', 'P2', 'G15', '2023-08-01 08:46:24', '2023-08-01 08:46:24'),
(18, 'R2', 'P2', 'G16', '2023-08-01 08:46:24', '2023-08-01 08:46:24'),
(19, 'R2', 'P2', 'G17', '2023-08-01 08:46:24', '2023-08-01 08:46:24'),
(20, 'R2', 'P2', 'G18', '2023-08-01 08:46:24', '2023-08-01 08:46:24'),
(21, 'R3', 'P3', 'G19', '2023-08-01 08:49:53', '2023-08-01 08:49:53'),
(22, 'R3', 'P3', 'G20', '2023-08-01 08:49:53', '2023-08-01 08:49:53'),
(23, 'R3', 'P3', 'G21', '2023-08-01 08:49:53', '2023-08-01 08:49:53'),
(24, 'R3', 'P3', 'G22', '2023-08-01 08:49:53', '2023-08-01 08:49:53'),
(25, 'R3', 'P3', 'G23', '2023-08-01 08:49:53', '2023-08-01 08:49:53'),
(26, 'R3', 'P3', 'G24', '2023-08-01 08:49:53', '2023-08-01 08:49:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rule`
--

CREATE TABLE `rule` (
  `rule_id` int(11) NOT NULL,
  `kode_gejala` varchar(255) NOT NULL,
  `kode_pentakit` varchar(255) NOT NULL,
  `bobot` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$xEdqv9rhOdXz0CEWty97GunQy5Y9Rif4csAoRVio/Iv/tWziijDei', NULL, '2023-07-29 11:34:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`diagnosa_id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`gejala_id`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`penyakit_id`);

--
-- Indeks untuk tabel `penyakit_detail`
--
ALTER TABLE `penyakit_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indeks untuk tabel `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`rule_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `gejala_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `penyakit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `penyakit_detail`
--
ALTER TABLE `penyakit_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `rule`
--
ALTER TABLE `rule`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
