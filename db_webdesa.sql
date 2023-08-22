-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2023 pada 20.06
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webdesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_foto` varchar(255) DEFAULT NULL,
  `banner_judul` varchar(255) DEFAULT NULL,
  `banner_deskripsi` text DEFAULT NULL,
  `banner_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_foto`, `banner_judul`, `banner_deskripsi`, `banner_link`, `created_at`, `updated_at`) VALUES
(10, 'TVBj9dGD1p-13-07-2023-banner.jpg', 'WEBSITE RESMI DESA MULIA', 'Semua informasi terkait desa dapat anda lihat disini', NULL, '2023-07-13 09:21:14', '2023-08-08 16:34:33'),
(11, 'bPJMFFDHY2-13-07-2023-banner.jpg', 'KEGIATAN MASARAKAT DESA MULIA', '-', NULL, '2023-07-13 09:22:49', '2023-07-13 09:22:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(255) DEFAULT NULL,
  `berita_isi` longtext DEFAULT NULL,
  `berita_cover` varchar(255) DEFAULT NULL,
  `berita_viewers` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_cover`, `berita_viewers`, `created_at`, `updated_at`) VALUES
(7, '7 Ciri-ciri Kucing Rabies yang Penting Diketahui', '<h3 class=\"mb-0\"><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Rabies merupakan penyakit yang bisa ditularkan dari hewan ke manusia. Rabies merupakan penyakit yang disebabkan oleh virus.</p><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Meski dikenal sebagai penyakit anjing gila, rabies juga dapat menyerang hewan mamalia lain seperti kucing. Pada kucing, rabies bisa menimbulkan serangkaian perubahan baik perilaku maupun fisik.</p></h3><h1 style=\"color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif;\"><strong>Ciri-ciri Kucing Rabies</strong></h1><h3 class=\"mb-0\"><div class=\"tinyimg2\" style=\"color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\"><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Ilustrasi&nbsp;(Freepik)</p></div><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Penyakit ini sangat berbahaya dan dapat mengancam nyawa siapa saja yang mengidapnya, termasuk kucing. Tidak ada tes untuk mendiagnosis apakah kucing mengalami rabies atau tidak.</p><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Dikutip dari laman&nbsp;<em>alodokter.com,</em>&nbsp;sangat penting untuk mengetahui ciri-ciri kucing rabies secara tepat. Hal ini bisa membantu untuk memutuskan bahwa kucing terinfeksi rabies atau tidak.</p><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Pada umumnya, penyakit rabies memiliki dua gejala, yakni gejala bentuk diam dan gejala bentuk ganas. Berikut ini penjelasan ciri-ciri kucing rabies yang perlu diketahui.</p><div class=\"article-clear-div\" style=\"clear: both; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\"></div></h3><h2 class=\"article-sub-heading\" style=\"font-family: &quot;Eb Garamond&quot;; font-size: 30px; margin-top: 48px; margin-bottom: 24px; line-height: 38px; position: relative; color: rgb(43, 43, 43);\">1. Kucing Menjadi Pica</h2><h3 class=\"mb-0\"><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Pica merupakan gangguan makan yang menyebabkan seseorang atau seekor hewan memakan objek bukan makanan. Sebagai contoh tanah, cat, rambut, feses, dan lainnya.</p><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Dalam konteks&nbsp;<a href=\"https://katadata.co.id/agung/lifestyle/64900b0f590db/mencermati-tahapan-gejala-rabies-pada-manusia-hingga-pencegahannya\" rel=\"dofollow\" target=\"_blank\" data-t=\"{&quot;n&quot;:&quot;destination&quot;,&quot;t&quot;:13,&quot;b&quot;:1,&quot;c.t&quot;:7}\" tabindex=\"0\" hasenterkeydown=\"1\" style=\"color: rgb(0, 120, 212);\">rabies,</a>&nbsp;pica merupakan gejala umum yang ditunjukkan kucing ketika terkena penyakit tersebut.</p><div class=\"article-clear-div\" style=\"clear: both; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\"></div></h3><h2 class=\"article-sub-heading\" style=\"font-family: &quot;Eb Garamond&quot;; font-size: 30px; margin-top: 48px; margin-bottom: 24px; line-height: 38px; position: relative; color: rgb(43, 43, 43);\">2. Kucing Mengalami Demam</h2><h3 class=\"mb-0\"><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" class=\"continue-read-break\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Demam pada&nbsp;<a href=\"https://katadata.co.id/agung/lifestyle/6476b97e7f801/9-cara-merawat-anak-kucing-tanpa-induk-yang-harus-diperhatikan\" rel=\"dofollow\" target=\"_blank\" data-t=\"{&quot;n&quot;:&quot;destination&quot;,&quot;t&quot;:13,&quot;b&quot;:1,&quot;c.t&quot;:7}\" tabindex=\"0\" hasenterkeydown=\"1\" style=\"color: rgb(0, 120, 212);\">kucing&nbsp;</a>rabies sering terjadi pada tahap pertama, yaitu tahap prodromal. Kondisi ini bisa berlangsung selama satu atau dua hari, lebih sebentar ketimbang tahap prodromal yang dialami anjing.</p><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" class=\"\" aria-expanded=\"true\" tabindex=\"-1\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Selain itu, jumlah lonjakan demam yang dialami kucing juga lebih sering daripada anjing.</p><div class=\"article-clear-div\" aria-expanded=\"true\" tabindex=\"-1\" style=\"clear: both; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\"></div></h3><h2 class=\"article-sub-heading\" aria-expanded=\"true\" tabindex=\"-1\" style=\"font-family: &quot;Eb Garamond&quot;; font-size: 30px; margin-top: 48px; margin-bottom: 24px; line-height: 38px; position: relative; color: rgb(43, 43, 43);\">3. Hydrophobia pada Kucing</h2><h3 class=\"mb-0\"><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" class=\"\" aria-expanded=\"true\" tabindex=\"-1\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Kucing memang identik tidak menyukai air, namun kucing rabies semakin membuat hewan peliharaan lebih sensitif terhadap objek cair. Ketakutan terhadap air atau hydrophobia yang muncul pada hewan terjangkit rabies dipicu rasa sakit saat menelan makanan. Bahkan termasuk air atau cairan.</p><div class=\"article-clear-div\" aria-expanded=\"true\" tabindex=\"-1\" style=\"clear: both; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\"></div></h3><h2 class=\"article-sub-heading\" aria-expanded=\"true\" tabindex=\"-1\" style=\"font-family: &quot;Eb Garamond&quot;; font-size: 30px; margin-top: 48px; margin-bottom: 24px; line-height: 38px; position: relative; color: rgb(43, 43, 43);\">4. Perubahan Perilaku pada Kucing</h2><h3 class=\"mb-0\"><div class=\"tinyimg2\" aria-expanded=\"true\" tabindex=\"-1\" style=\"color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\"><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px;\">Ilustrasi Kucing (Pexels)</p></div><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" class=\"\" aria-expanded=\"true\" tabindex=\"-1\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Kucing yang terinfeksi rabies dapat mengalami perubahan perilaku yang cukup ekstrim dan mendadak. Apabila sudah mulai menunjukkan gejalanya, hal ini perlu diwaspadai terkena rabies.</p><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" class=\"\" aria-expanded=\"true\" tabindex=\"-1\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-family: &quot;Segoe UI&quot;, SegoeUI, Roboto, sans-serif; font-size: 17px;\">Contohnya, kucing yang tadinya pendiam bisa menjadi sangat bersemangat dan gelisah, ataupun sebaliknya. Bahkan anabul yang biasanya periang dapat tiba-tiba lemas dan menjadi penyendiri.</p></h3>\r\n                        <p></p>', 'X8qSHGt98s-berita.png', 4, '2023-06-21 07:21:34', '2023-07-29 14:21:31'),
(9, 'Pengusaha Ngeluh Mesti Rogoh Rp 7 Miliar Imbas Cuti Bersama Idul Adha', '<h3 class=\"mb-0\"><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-size: 17px;\"><font face=\"Verdana\">Para pengusaha menilai cuti bersama Idul Adha yang diperpanjang secara mendadak telah memberatkan. Direktur Eksekutif Asosiasi Pertekstilan Indonesia (API), Danang Girindrawardana, mengatakan perusahaan harus menanggung Rp 5-7 miliar untuk membayarkan upah lembur pekerjanya.</font></p><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-size: 17px;\"><font face=\"Verdana\">Pemerintah menetapkan tanggal 28 dan 30 Juni 2023 sebagai cuti bersama. Sehingga libur Idul Adha kini berlangsung selama tiga hari, dari 28-30 Juni 2023, dari sebelumnya hanya di tanggal 29 Juni 2023.</font></p><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-size: 17px;\"><font face=\"Verdana\">Keputusan itu tertuang dalam Keputusan Bersama Menteri Agama Yaqut Cholil Qoumas, Menteri Ketenagakerjaan Ida Fauziyah, Menteri PANRB Abdullah Azwar Anas yang diteken tanggal 16 Juni 2023.</font></p><p data-t=\"{&quot;n&quot;:&quot;blueLinks&quot;}\" style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 0px; color: rgb(43, 43, 43); font-size: 17px;\"><font face=\"Verdana\">\"Untuk industri padat karya konsekuensinya Rp 5-7 miliar. Bayangkan, dengan 10 ribu pegawai tiba-tiba harus libur, sementara perusahaan harus kejar ongkos produksi,\" kata Danang di Hotel Borobudur, Jakarta, Rabu (21/6).</font></p></h3>\r\n                        <p></p>', 'oTo2QdnRv1-berita.jpg', 10, '2023-06-21 07:40:39', '2023-07-29 15:08:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_agama`
--

CREATE TABLE `d_agama` (
  `agama_id` int(11) NOT NULL,
  `agama_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `d_agama`
--

INSERT INTO `d_agama` (`agama_id`, `agama_nama`) VALUES
(1, 'Islam'),
(2, 'Katolik'),
(3, 'Kristen'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghucu'),
(7, 'Kepercayaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_kk`
--

CREATE TABLE `d_kk` (
  `kk_id` int(11) NOT NULL,
  `nik_kepala_kk` bigint(16) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `no_kk` bigint(16) NOT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `d_kk`
--

INSERT INTO `d_kk` (`kk_id`, `nik_kepala_kk`, `alamat`, `rt`, `rw`, `kode_pos`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `no_kk`, `flag_erase`, `created_at`, `updated_at`) VALUES
(9, 6111010803010001, 'jl. gajah mada, sampit, delta pawan', '003', '001', 78811, 'sampit', 'delta pawan', 'ketapang', 'kalimantan barat', 6111010703110014, 1, '2023-08-14 08:40:55', '2023-08-14 08:40:55'),
(10, 6198382910385165, 'Desa Suka Mulia', '02', '01', 78874, 'Suka Mulia', 'Sungai Melayu Rayak', 'Ketapang', 'Kalimantan Barat', 6109876542345618, 1, '2023-08-22 09:43:38', '2023-08-22 09:43:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_pekerjaan`
--

CREATE TABLE `d_pekerjaan` (
  `pekerjaan_id` int(11) NOT NULL,
  `nama_pekerjaan` varchar(255) DEFAULT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `d_pekerjaan`
--

INSERT INTO `d_pekerjaan` (`pekerjaan_id`, `nama_pekerjaan`, `flag_erase`, `created_at`, `updated_at`) VALUES
(1, 'BELUM / TIDAK BEKERJA', 1, NULL, '0000-00-00 00:00:00'),
(2, 'MENGURUS RUMAH TANGGA', 1, NULL, '0000-00-00 00:00:00'),
(3, 'PELAJAR / MAHASISWA', 1, NULL, '0000-00-00 00:00:00'),
(4, 'PENSIUNAN', 1, NULL, '0000-00-00 00:00:00'),
(5, 'PEGAWAI NEGERI SIPIL', 1, NULL, '0000-00-00 00:00:00'),
(6, 'TENTARA NASIONAL INDONESIA', 1, NULL, '0000-00-00 00:00:00'),
(7, 'KEPOLISIAN RI (POLRI)', 1, NULL, '0000-00-00 00:00:00'),
(8, 'PERDAGANGAN', 1, NULL, '0000-00-00 00:00:00'),
(9, 'PETANI / PEKEBUN', 1, NULL, '0000-00-00 00:00:00'),
(10, 'PETERNAK', 1, NULL, '0000-00-00 00:00:00'),
(11, 'NELAYAN/PERIKANAN', 1, NULL, '0000-00-00 00:00:00'),
(12, 'INDUSTRI', 1, NULL, '0000-00-00 00:00:00'),
(13, 'KONSTRUKSI', 1, NULL, '0000-00-00 00:00:00'),
(14, 'TRANSPORTASI', 1, NULL, '0000-00-00 00:00:00'),
(15, 'KARYAWAN SWASTA', 1, NULL, '0000-00-00 00:00:00'),
(16, 'KARYAWAN BUMN', 1, NULL, '0000-00-00 00:00:00'),
(17, 'KARYAWAN BUMD', 1, NULL, '0000-00-00 00:00:00'),
(18, 'KARYAWAN HONORER', 1, NULL, '0000-00-00 00:00:00'),
(19, 'BURUH HARIAN LEPAS', 1, NULL, '0000-00-00 00:00:00'),
(20, 'BURUH TANI/PERKEBUNAN', 1, NULL, '0000-00-00 00:00:00'),
(21, 'BURUH NELAYAN/PERIKANAN', 1, NULL, '0000-00-00 00:00:00'),
(22, 'BURUH PETERNAKAN', 1, NULL, '0000-00-00 00:00:00'),
(23, 'PEMBANTU RUMAH TANGGA', 1, NULL, '0000-00-00 00:00:00'),
(24, 'TUKANG CUKUR', 1, NULL, '0000-00-00 00:00:00'),
(25, 'TUKANG LISTRIK', 1, NULL, '0000-00-00 00:00:00'),
(26, 'TUKANG BATU', 1, NULL, '0000-00-00 00:00:00'),
(27, 'TUKANG KAYU', 1, NULL, '0000-00-00 00:00:00'),
(28, 'TUKANG SOL SEPATU', 1, NULL, '0000-00-00 00:00:00'),
(29, 'TUKANG LAS/PANDAI BESI', 1, NULL, '0000-00-00 00:00:00'),
(30, 'TUKANG JAHIT', 1, NULL, '0000-00-00 00:00:00'),
(31, 'TUKANG GIGI', 1, NULL, '0000-00-00 00:00:00'),
(32, 'PENATA RIAS', 1, NULL, '0000-00-00 00:00:00'),
(33, 'PENATA BUSANA', 1, NULL, '0000-00-00 00:00:00'),
(34, 'PENATA RAMBUT', 1, NULL, '0000-00-00 00:00:00'),
(35, 'MEKANIK', 1, NULL, '0000-00-00 00:00:00'),
(36, 'SENIMAN', 1, NULL, '0000-00-00 00:00:00'),
(37, 'TABIB', 1, NULL, '0000-00-00 00:00:00'),
(38, 'PARAJI', 1, NULL, '0000-00-00 00:00:00'),
(39, 'PERANCANG BUSANA', 1, NULL, '0000-00-00 00:00:00'),
(40, 'PENTERJEMAH', 1, NULL, '0000-00-00 00:00:00'),
(41, 'IMAM MASJID', 1, NULL, '0000-00-00 00:00:00'),
(42, 'PENDETA', 1, NULL, '0000-00-00 00:00:00'),
(43, 'PASTOR', 1, NULL, '0000-00-00 00:00:00'),
(44, 'WARTAWAN', 1, NULL, '0000-00-00 00:00:00'),
(45, 'USTADZ/MUBALIGH', 1, NULL, '0000-00-00 00:00:00'),
(46, 'JURU MASAK', 1, NULL, '0000-00-00 00:00:00'),
(47, 'PROMOTOR ACARA', 1, NULL, '0000-00-00 00:00:00'),
(48, 'ANGGOTA DPR-RI', 1, NULL, '0000-00-00 00:00:00'),
(49, 'ANGGOTA DPD', 1, NULL, '0000-00-00 00:00:00'),
(50, 'ANGGOTA BPK', 1, NULL, '0000-00-00 00:00:00'),
(51, 'PRESIDEN', 1, NULL, '0000-00-00 00:00:00'),
(52, 'WAKIL PRESIDEN', 1, NULL, '0000-00-00 00:00:00'),
(53, 'ANGGOTA MAHKAMAH KONSTITUSI', 1, NULL, '0000-00-00 00:00:00'),
(54, 'ANGGOTA KABINET KEMENTRIAN', 1, NULL, '0000-00-00 00:00:00'),
(55, 'DUTA BESAR', 1, NULL, '0000-00-00 00:00:00'),
(56, 'GUBENUR', 1, NULL, '0000-00-00 00:00:00'),
(57, 'WAKIL GUBERNUR', 1, NULL, '0000-00-00 00:00:00'),
(58, 'BUPATI', 1, NULL, '0000-00-00 00:00:00'),
(59, 'WAKIL BUPATI', 1, NULL, '0000-00-00 00:00:00'),
(60, 'WALIKOTA', 1, NULL, '0000-00-00 00:00:00'),
(61, 'WAKIL WALIKOTA', 1, NULL, '0000-00-00 00:00:00'),
(62, 'ANGGOTA DPRD PROV.', 1, NULL, '0000-00-00 00:00:00'),
(63, 'ANGGOTA DPRD KABUPATEN/KOTA', 1, NULL, '0000-00-00 00:00:00'),
(64, 'DOSEN', 1, NULL, '0000-00-00 00:00:00'),
(65, 'GURU', 1, NULL, '0000-00-00 00:00:00'),
(66, 'PILOT', 1, NULL, '0000-00-00 00:00:00'),
(67, 'PENGACARA', 1, NULL, '0000-00-00 00:00:00'),
(68, 'NOTARIS', 1, NULL, '0000-00-00 00:00:00'),
(69, 'ARSITEK', 1, NULL, '0000-00-00 00:00:00'),
(70, 'AKUNTAN', 1, NULL, '0000-00-00 00:00:00'),
(71, 'KONSULTAN', 1, NULL, '0000-00-00 00:00:00'),
(72, 'DOKTER', 1, NULL, '0000-00-00 00:00:00'),
(73, 'BIDAN', 1, NULL, '0000-00-00 00:00:00'),
(74, 'PERAWAT', 1, NULL, '0000-00-00 00:00:00'),
(75, 'APOTEKER', 1, NULL, '0000-00-00 00:00:00'),
(76, 'PSIKIATER/PSIKOLOG', 1, NULL, '0000-00-00 00:00:00'),
(77, 'PENYIAR TELEVISI', 1, NULL, '0000-00-00 00:00:00'),
(78, 'PENYIAR RADIO', 1, NULL, '0000-00-00 00:00:00'),
(79, 'PELAUT', 1, NULL, '0000-00-00 00:00:00'),
(80, 'PENELITI', 1, NULL, '0000-00-00 00:00:00'),
(81, 'SOPIR', 1, NULL, '0000-00-00 00:00:00'),
(82, 'PIALANG', 1, NULL, '0000-00-00 00:00:00'),
(83, 'PARANORMAL', 1, NULL, '0000-00-00 00:00:00'),
(84, 'PEDAGANG', 1, NULL, '0000-00-00 00:00:00'),
(85, 'PERANGKAT DESA', 1, NULL, '0000-00-00 00:00:00'),
(86, 'KEPALA DESA', 1, NULL, '0000-00-00 00:00:00'),
(87, 'BIARAWATI', 1, NULL, '0000-00-00 00:00:00'),
(88, 'WIRASWASTA', 1, NULL, '0000-00-00 00:00:00'),
(89, 'Lainnya', 1, NULL, '0000-00-00 00:00:00'),
(90, 'test pekerjaan', 0, '2023-07-29 07:55:01', '2023-07-29 07:57:44'),
(91, 'makan', 0, '2023-07-29 08:02:19', '2023-08-14 10:48:16'),
(92, 'MAKAN MINUM susu', 0, '2023-07-29 08:03:02', '2023-07-29 08:04:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_pendidikan`
--

CREATE TABLE `d_pendidikan` (
  `pendidikan_id` int(11) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `d_pendidikan`
--

INSERT INTO `d_pendidikan` (`pendidikan_id`, `pendidikan`, `flag_erase`, `created_at`, `updated_at`) VALUES
(1, 'TIDAK/BELUM SEKOLAH', 1, '2023-06-18 04:02:58', '2023-06-18 04:02:58'),
(2, 'BELUM TAMAT SD/SEDERAJAT', 1, '2023-06-18 04:02:58', '2023-06-18 04:02:58'),
(3, 'TAMAT SD/SEDERAJAT', 1, '2023-06-18 04:02:58', '2023-06-18 04:02:58'),
(4, 'SLTP/SEDERAJAT', 1, '2023-06-18 04:02:58', '2023-06-18 04:02:58'),
(5, 'SLTA/SEDERAJAT', 1, '2023-06-18 04:02:58', '2023-06-18 04:02:58'),
(6, 'DIPLOMA I/II', 1, '2023-06-18 04:02:58', '2023-06-18 04:02:58'),
(7, 'AKADEMI/DIPLOMA III/S. MUDA', 1, '2023-06-18 04:02:58', '2023-06-18 04:02:58'),
(8, 'DIPLOMA IV/STRATA I', 1, '2023-06-18 04:02:58', '2023-06-18 04:02:58'),
(9, 'STRATA II', 1, '2023-06-18 04:02:58', '2023-06-18 04:02:58'),
(10, 'STRATA III', 1, '2023-06-18 04:02:58', '2023-06-18 04:02:58'),
(11, 'profesor', 1, '2023-06-18 04:02:58', '2023-06-18 04:02:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_penduduk`
--

CREATE TABLE `d_penduduk` (
  `penduduk_id` int(11) NOT NULL,
  `no_kk` bigint(16) DEFAULT NULL,
  `nik` bigint(16) DEFAULT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `jenis_pekerjaan` varchar(255) DEFAULT NULL,
  `golongan_darah` varchar(255) DEFAULT NULL,
  `status_pernikahan` varchar(255) DEFAULT NULL,
  `status_hubungan_dalam_keluarga` varchar(255) DEFAULT NULL,
  `kewarganegaraan` varchar(255) DEFAULT NULL,
  `no_paspor` varchar(11) DEFAULT NULL,
  `no_kitap` varchar(11) DEFAULT NULL,
  `ayah` varchar(255) DEFAULT NULL,
  `ibu` varchar(255) DEFAULT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `d_penduduk`
--

INSERT INTO `d_penduduk` (`penduduk_id`, `no_kk`, `nik`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `jenis_pekerjaan`, `golongan_darah`, `status_pernikahan`, `status_hubungan_dalam_keluarga`, `kewarganegaraan`, `no_paspor`, `no_kitap`, `ayah`, `ibu`, `flag_erase`, `created_at`, `updated_at`) VALUES
(12, 6111010703110014, 6111010803010001, 'Rino', 'Laki-laki', 'kemboja', '2001-03-08', 'Islam', 'AKADEMI/DIPLOMA III/S. MUDA', 'PEGAWAI NEGERI SIPIL', 'A+', 'Kawin Tercatat', 'kepala keluarga', 'WNI', '-', '-', 'rajali', 'asbah', 1, '2023-08-22 17:23:55', '2023-08-22 10:23:55'),
(13, 6111010703110014, 6111010803010002, 'annisatul mukharomah', 'Perempuan', 'sukadana', '2001-12-08', 'Islam', 'DIPLOMA IV/STRATA I', 'PELAJAR / MAHASISWA', 'O', 'Kawin Tercatat', 'istri', 'WNI', '-', '-', 'budi santoso', 'nirma annisa', 1, '2023-08-14 08:40:55', '2023-08-14 08:40:55'),
(14, 6111010703110014, 61001029302128007, 'Muhammad Dzulfikar', 'Laki-laki', 'sukadana', '2023-08-15', 'Islam', 'TIDAK/BELUM SEKOLAH', 'BELUM / TIDAK BEKERJA', 'A+', 'Belum Kawin', 'anak', 'WNI', '-', '-', 'sunardi', 'annisatul mukaromah', 1, '2023-08-14 10:41:18', '2023-08-14 10:41:18'),
(15, 6109876542345618, 6198382910385165, 'Dino', 'Laki-laki', 'Suka Mulia', '1987-05-13', 'Islam', 'SLTP/SEDERAJAT', 'PETANI / PEKEBUN', 'A+', 'Kawin Tercatat', 'kepala keluarga', 'WNI', NULL, NULL, 'Jon', 'Siti Aisah', 1, '2023-08-22 09:43:38', '2023-08-22 09:43:38'),
(16, 6109876542345618, 6198382910385143, 'Yuli', 'Perempuan', 'Suka Mulia', '1991-02-18', 'Islam', 'SLTA/SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'A+', 'Kawin Tercatat', 'istri', 'WNI', NULL, NULL, 'Rudi', 'Lina', 1, '2023-08-22 09:43:38', '2023-08-22 09:43:38'),
(17, 6109876542345618, 6198382910385167, 'Adin', 'Laki-laki', 'Suka Mulia', '2001-11-01', 'Islam', 'SLTA/SEDERAJAT', 'PELAJAR / MAHASISWA', 'B+', 'Belum Kawin', 'anak', 'WNI', NULL, NULL, 'Dino', 'Yuli', 1, '2023-08-22 09:43:38', '2023-08-22 09:43:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_status_hubungan`
--

CREATE TABLE `d_status_hubungan` (
  `status_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `flag_erase` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `d_status_hubungan`
--

INSERT INTO `d_status_hubungan` (`status_id`, `status`, `flag_erase`, `created_at`, `updated_at`) VALUES
(1, 'kepala keluarga', 1, '2023-06-16 19:14:04', '2023-06-16 19:14:04'),
(2, 'istri', 1, '2023-06-16 19:14:07', '2023-06-16 19:14:07'),
(3, 'anak', 1, '2023-06-16 19:14:11', '2023-06-16 19:14:11'),
(4, 'lainnya', 1, '2023-06-16 19:14:12', '2023-06-16 19:14:12');

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
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_caption` varchar(255) DEFAULT NULL,
  `galeri_foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_caption`, `galeri_foto`, `created_at`, `updated_at`) VALUES
(30, 'Logo Kota Mojokerto', 'gmrGwzP1X3-21-06-2023-galeri.png', '2023-06-20 23:15:42', '2023-06-20 23:15:42'),
(31, 'Logo Kota Madiun', 'CDuZOQHuGC-21-06-2023-galeri.png', '2023-06-20 23:15:56', '2023-06-20 23:15:56'),
(32, 'logo kota batu', '9GwheE4PSJ-21-06-2023-galeri.png', '2023-06-20 23:16:11', '2023-06-20 23:16:11'),
(33, 'logo kota', 'NNd5IAiV8J-21-06-2023-galeri.png', '2023-06-20 23:19:48', '2023-06-20 23:19:48'),
(34, 'logo kota bandungbodndoo', 'lq86qG9OOa-21-06-2023-galeri.png', '2023-06-20 23:20:33', '2023-06-20 23:20:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `informasi_id` int(11) NOT NULL,
  `informasi_judul` varchar(255) DEFAULT NULL,
  `informasi_isi` longtext DEFAULT NULL,
  `informasi_cover` varchar(255) DEFAULT NULL,
  `informasi_viewers` int(11) DEFAULT NULL COMMENT 'pengunjung website ',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`informasi_id`, `informasi_judul`, `informasi_isi`, `informasi_cover`, `informasi_viewers`, `created_at`, `updated_at`) VALUES
(5, 'Desa Sukabangun Dalam', '<p><span style=\"font-size: 28px;\">Desa Sukabangun adalah sebuah desa yang terletak dalam suatu wilayah. Namun, sebagai model berbasis teks, saya tidak memiliki informasi spesifik tentang Desa Sukabangun dalam konteks geografis atau demografis yang dapat saya berikan. Jika Anda mencari informasi lebih lanjut tentang Desa Sukabangun, disarankan untuk mengakses sumber informasi lokal seperti pemerintah daerah atau lembaga terkait yang dapat memberikan data dan detail yang lebih lengkap mengenai desa tersebut.</span></p>\r\n                        <p></p>', 'PcvG1SEozw-informasi.jpg', NULL, '2023-06-21 08:06:04', '2023-06-21 08:08:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(255) DEFAULT NULL,
  `komentar_email` varchar(255) DEFAULT NULL,
  `komentar_subjek` varchar(255) DEFAULT NULL,
  `komentar_isi` text DEFAULT NULL,
  `komentar_date` date DEFAULT NULL,
  `komentar_status_lihat` int(5) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_subjek`, `komentar_isi`, `komentar_date`, `komentar_status_lihat`, `created_at`, `updated_at`) VALUES
(2, 'Arya Kumala', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 0, '2023-03-05 00:29:07', '2023-03-05 01:18:58'),
(3, 'dewa Kumala', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 1, '2023-03-05 00:29:07', '2023-03-04 18:20:14'),
(4, 'putra', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 1, '2023-03-05 00:29:07', '2023-03-06 01:19:38'),
(5, 'ahyar', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 0, '2023-03-05 00:29:07', '2023-03-05 01:19:53'),
(6, 'umala', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 0, '2023-03-05 00:29:07', '2023-03-05 01:18:58'),
(7, 'ratih', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 1, '2023-03-05 00:29:07', '2023-03-04 18:20:14'),
(8, 'gina', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 0, '2023-03-05 00:29:07', '2023-03-05 01:18:58'),
(9, 'cinthya', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 1, '2023-03-05 00:29:07', '2023-03-04 18:34:14'),
(10, 'nadima', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 0, '2023-03-05 00:29:07', '2023-03-05 01:18:58'),
(11, 'yusuf', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 1, '2023-03-05 00:29:07', '2023-03-04 18:20:14'),
(12, 'adam', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 1, '2023-03-05 00:29:07', '2023-03-06 01:19:26'),
(13, 'cantika', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 1, '2023-03-05 00:29:07', '2023-03-06 01:19:45'),
(14, 'ulma', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 1, '2023-03-05 00:29:07', '2023-03-25 21:46:18'),
(15, 'ilma', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 1, '2023-03-05 00:29:07', '2023-03-04 18:20:14'),
(16, 'gea', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 0, '2023-03-05 00:29:07', '2023-03-05 01:18:58'),
(17, 'karin', 'arya@gmail.com', 'Pembangunan Jalan', 'Pembangunan jalan adalah kegiatan pemrograman dan penganggaran, perencanaan teknis, pelaksanaan konstruksi, serta pengoperasian dan pemeliharaan jalan. Pengawasan jalan adalah kegiatan yang dilakukan untuk mewujudkan tertib pengaturan, pembinaan, dan pembangunan jalan.\r\n', '2023-03-05', 0, '2023-03-05 00:29:07', '2023-03-05 01:19:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_realisasi_anggaran`
--

CREATE TABLE `laporan_realisasi_anggaran` (
  `laporan_id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `layanan_id` int(11) NOT NULL,
  `layanan_nama` varchar(255) DEFAULT NULL,
  `layanan_syarat` text DEFAULT NULL,
  `layanan_icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `pengaturan_id` int(11) NOT NULL,
  `nama_desa` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT '-',
  `alamat` varchar(255) NOT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `embed_maps` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`pengaturan_id`, `nama_desa`, `logo`, `alamat`, `kode_pos`, `kecamatan`, `provinsi`, `kabupaten`, `embed_maps`, `created_at`, `updated_at`) VALUES
(1, 'Suka Mulia', '-', 'Jl. Merdeka No 45, Kode POS 78874', '18672', 'sungai melayu rayak', 'kalimantan barat', 'ketapang', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61722.822637693!2d110.45329710236926!3d-1.9629231207393756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e05a3a9cb76eb93%3A0x89108223037f5c4f!2sSuka%20Mulya%2C%20Sungai%20Melayu%20Rayak%2C%20Ketapang%20Regency%2C%20West%20Kalimantan!5e1!3m2!1sen!2sid!4v1689078198733!5m2!1sen!2sid\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-08-08 13:58:40', '2023-08-08 06:58:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
-- Struktur dari tabel `profil_desa`
--

CREATE TABLE `profil_desa` (
  `profil_id` int(11) NOT NULL,
  `profil_wilayah_desa` longtext DEFAULT NULL,
  `kepala_desa_id` int(11) DEFAULT NULL,
  `sambutan_kepala` longtext NOT NULL,
  `visi` longtext DEFAULT NULL,
  `misi` longtext DEFAULT NULL,
  `struktur_organisasi` varchar(255) DEFAULT NULL,
  `peraturan_desa` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profil_desa`
--

INSERT INTO `profil_desa` (`profil_id`, `profil_wilayah_desa`, `kepala_desa_id`, `sambutan_kepala`, `visi`, `misi`, `struktur_organisasi`, `peraturan_desa`, `created_at`, `updated_at`) VALUES
(1, 'Profil Desa dan Kelurahan (Prodeskel) adalah gambaran menyeluruh tentang karakter desa dan kelurahan yang meliputi data dasar keluarga, potensi sumber daya alam, sumber daya manusia, kelembagaan, prasarana dan sarana, serta perkembangan kemajuan dan permasalahan yang dihadapi desa dan kelurahan. Definisi ini sebagaimana termaktub dalam Peraturan Menteri Dalam Negeri (Permendagri) Nomor 12 Tahun 2007 tentang Penyusunan dan Pendayagunaan Data Profil Desa dan Kelurahan dengan maksud:\r\n\r\nuntuk mengetahui gambaran potensi dan tingkat perkembangan desa dan kelurahan yang akurat, komprehensif dan integral, serta\r\nuntuk mendorong perkembangan desa dan kelurahan swadaya dan swakarya menjadi desa dan kelurahan swasembada.\r\nDATA DASAR KELUARGA\r\n\r\nData dasar keluarga berisikan gambaran menyeluruh potensi dan perkembangan keluarga yang terdiri dari:\r\n\r\npotensi sumber daya manusia;\r\nperkembangan kesehatan;\r\nperkembangan pendidikan;\r\npenguasaan aset ekonomi dan sosial keluarga;\r\npartisipasi anggota keluarga dalam proses pemerintahan, pembangunan dan kemasyarakatan;\r\nberbagai permasalahan kesejahteraan keluarga; dan\r\nperkembangan keamanan dan ketertiban di lingkungannya.\r\nPOTENSI DESA DAN KELURAHAN SUMBER DAYA ALAM\r\npotensi umum yang meliputi batas dan luas wilayah, iklim, jenis dan kesuburan tanah, orbitasi, bentangan wilayah dan letak;\r\npertanian;\r\nperkebunan;\r\nkehutanan;\r\npeternakan;\r\nperikanan;\r\nbahan galian;\r\nsumber daya air;\r\nkualitas lingkungan;\r\nruang publik/taman; dan\r\n \r\nSUMBER DAYA MANUSIA\r\njumlah;\r\nusia;\r\npendidikan;\r\nmata pencaharian pokok;\r\nagama dan aliran kepercayaan;\r\nkewarganegaraan;\r\netnis/suku bangsa;\r\ncacat fisik dan mental; dan\r\ntenaga kerja.\r\nKELEMBAGAAN\r\nlembaga pemerintahan desa dan kelurahan;\r\nlembaga kemasyarakatan desa dan kelurahan;\r\nlembaga sosial kemasyarakatan;\r\norganisasi profesi;\r\npartai politik;\r\nlembaga perekonomian;\r\nlembaga pendidikan;\r\nlembaga adat; dan\r\nlembaga keamanan dan ketertiban.\r\nPRASARANA DAN SARANA\r\ntransportasi;\r\ninformasi dan komunikasi;\r\nprasarana air bersih dan sanitasi;\r\nprasarana dan kondisi irigasi;\r\nprasarana dan sarana pemerintahan;\r\nprasarana dan sara lembaga kemasyarakatan;\r\nprasarana peribadatan;\r\nprasarana olah raga;\r\nprasarana dan sarana kesehatan;\r\nprasarana dan sarana pendidikan;\r\nprasarana dan sarana energi dan penerangan;\r\nprasarana dan sarana hiburan dan wisata; dan\r\nprasarana dan sarana kebersihan.\r\n \r\n\r\nTINGKAT PERKEMBANGAN DESA DAN KELURAHAN\r\n\r\nTingkat perkembangan desa dan kelurahan yang mencerminkan keberhasilan pembangunan desa dan kelurahan setiap tahun dan setiap lima tahun diukur dari laju kecepatan perkembangan:\r\n\r\nekonomi masyarakat;\r\npendidikan masyarakat;\r\nkesehatan masyarakat;\r\nkeamanan dan ketertiban;\r\nkedaulatan politik masyarakat;\r\nperanserta masyarakat dalam pembangunan;\r\nlembaga kemasyarakatan;\r\nkinerja pemerintahan desa dan kelurahan; dan\r\npembinaan dan pengawasan.\r\nHasil analisis laju perkembangan desa dan kelurahan setiap tahun digunakan untuk mengukur tingkat perkembangan desa dan kelurahan setiap lima tahun dalam klasifikasi desa dan kelurahan swasembada, swakarya, dan swadaya. Tingkat Perkembangan Swasembada ditetapkan jika nilai total skor yang diperoleh mencapai lebih dari 80% dari skor maksimal tingkat perkembangan setiap lima tahun, tingkat perkembangan swakarya ditetapkan jika nilai total skor yang diperoleh mencapai 60% sampai 80% dari skor maksimal tingkat perkembangan setiap lima tahun, dan tingkat perkembangan swadaya disandang jika nilai total skor yang diperoleh mencapai kurang dari 60% dari skor maksimal tingkat perkembangan setiap lima tahun.', 1, 'KEDUDUKAN, TUGAS POKOK DAN FUNGSI PEMERINTAH DESA\r\n\r\nKepala Desa\r\n\r\nKepala Desa berkedudukan sebagai Kepala Pemerintah Desa yang memimpin penyelenggaraan Pemerintahan Desa.\r\nKepala Desa sebagaimana dimaksud pada ayat (1) bertugas menyelenggarakan Pemerintahan Desa, melaksanakan pembangunan desa, pembinaan kemasyarakatan dan pemberdayaan masyarakat Desa.\r\nUntuk melaksanakan tugas sebagaimana dimaksud pada ayat (2) Kepala Desa memiliki fungsi sebagai berikut:\r\nmenyelenggarakan Pemerintahan Desa, seperti tata praja Pemerintahan, penetapan peraturan di desa, pembinaan masalah pertanahan, pembinaan ketentraman dan ketertiban, melakukan upaya perlindungan masyarakat, administrasi kependudukan, dan penataan dan pengelolaan wilayah;\r\nmelaksanakan pembangunan, seperti pembangunan sarana prasarana perdesaan, dan pembangunan bidang pendidikan, kesehatan;\r\npembinaan kemasyarakatan, seperti pelaksanaan hak dan kewajiban masyarakat, partisipasi masyarakat, sosial budaya masyarakat, keagamaan, dan ketenagakerjaan;\r\npemberdayaan masyarakat, seperti tugas sosialisasi dan motivasi masyarakat di bidang budaya, ekonomi, politik, lingkungan hidup, pemberdayaan keluarga, pemuda, olahraga, dan karang taruna; dan\r\nmenjaga hubungan kemitraan dengan lembaga masyarakat dan lembaga lainnya.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur quos quod ab iusto vel, cupiditate temporibus minima provident ex ratione iure unde aliquam quibusdam pariatur tempore aliquid perferendis quia odit.', 'Meningkatkan dan mengoptimalkan penyelenggara Pemerintahan Desa berdasarkan Pancasila dan UUD 1945 dengan menjunjung tinggi norma-norma agama dan norma-norma lain dalam kehidupan bermasyarakat.\r\nPemerataan pembangunan yang tepat guna & tepat sasaran\r\nPemberdayaan semua potensi yang ada di masyarakat desa\r\nMeningkatkan kondisi masyarakat Desa Kunir yang aman, tertib, rukun dalam kehidupan bermasyarakat dengan berpegang pada prinsip-prinsip kebersamaan\r\nReinvensi wisata dan kebudayaan Desa Kunir\r\nMeningkatkan pendapatan asli desa\r\nMeningkatkan pelayanan kesehatan masyarakat', '6IK8FuIjvy-29-07-2023-struktur-organisasi.jpg', 'DATA DASAR KELUARGA\r\n\r\nData dasar keluarga berisikan gambaran menyeluruh potensi dan perkembangan keluarga yang terdiri dari:\r\n\r\npotensi sumber daya manusia;\r\nperkembangan kesehatan;\r\nperkembangan pendidikan;\r\npenguasaan aset ekonomi dan sosial keluarga;\r\npartisipasi anggota keluarga dalam proses pemerintahan, pembangunan dan kemasyarakatan;\r\nberbagai permasalahan kesejahteraan keluarga; dan\r\nperkembangan keamanan dan ketertiban di lingkungannya.', NULL, '2023-07-29 08:24:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_desa`
--

CREATE TABLE `program_desa` (
  `program_id` int(11) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `surat_id` int(11) NOT NULL,
  `surat_nomor` varchar(255) DEFAULT NULL,
  `surat_jenis` varchar(255) DEFAULT NULL,
  `surat_perihal` text DEFAULT NULL,
  `surat_pengirim` text DEFAULT NULL,
  `surat_file` varchar(255) DEFAULT NULL,
  `flag_erase` int(3) DEFAULT 1 COMMENT '1= ada; 0= terhapus',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`surat_id`, `surat_nomor`, `surat_jenis`, `surat_perihal`, `surat_pengirim`, `surat_file`, `flag_erase`, `created_at`, `updated_at`) VALUES
(1, 'P/58/DISKOMINFO-C.800.1.11.1/III/2023', 'surat undangan keluar', 'undangan', 'desa suka mulia', 'ExVsFZ5rQP-surat-keluar.pdf', 0, '2023-07-15 01:03:41', '2023-08-22 10:24:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `surat_id` int(11) NOT NULL,
  `surat_nomor` varchar(255) DEFAULT NULL,
  `surat_jenis` varchar(255) DEFAULT NULL,
  `surat_perihal` text DEFAULT NULL,
  `surat_pengirim` text DEFAULT NULL,
  `surat_file` varchar(255) DEFAULT NULL,
  `flag_erase` int(3) NOT NULL DEFAULT 1 COMMENT '1= ada; 0= terhapus',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`surat_id`, `surat_nomor`, `surat_jenis`, `surat_perihal`, `surat_pengirim`, `surat_file`, `flag_erase`, `created_at`, `updated_at`) VALUES
(1, 'B/128/diskominfo/xi/2009', 'surat undangan', 'undangna', 'diskominfo', 'dhX044ivLU-surat-masuk.pdf', 0, '2023-07-15 00:08:35', '2023-08-22 10:24:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sk_ahli_waris`
--

CREATE TABLE `s_sk_ahli_waris` (
  `surat_id` int(11) NOT NULL,
  `id_template` int(11) DEFAULT 11,
  `nik_penduduk` varchar(255) DEFAULT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `tgl` varchar(255) DEFAULT NULL,
  `tempat` varchar(255) DEFAULT NULL,
  `sebab` varchar(255) DEFAULT NULL,
  `tempat_pemakam` varchar(255) DEFAULT NULL,
  `saksi_1` varchar(255) DEFAULT NULL,
  `saksi_2` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `kode_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sk_ahli_waris_detail`
--

CREATE TABLE `s_sk_ahli_waris_detail` (
  `detail_id` int(11) NOT NULL,
  `surat_id` int(11) DEFAULT NULL,
  `nama` varchar(11) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `hubungan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sk_bedanama`
--

CREATE TABLE `s_sk_bedanama` (
  `surat_id` int(11) NOT NULL,
  `id_template` int(11) DEFAULT 6,
  `no_surat` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `nik_penduduk` bigint(20) DEFAULT NULL,
  `surat_rujukan` varchar(255) DEFAULT '-' COMMENT 'nama surat yang nama ny salah atau beda dengan KTP',
  `nama_yg_salah` varchar(255) DEFAULT '-' COMMENT 'Nama salah yang tertulis pada surat rujukan',
  `status` int(3) DEFAULT NULL COMMENT '0 = new, 1 = diterima, 3 = ditolak',
  `kode_token` varchar(255) DEFAULT NULL,
  `flag_erase` int(3) DEFAULT 1 COMMENT '1=ada; 0= terhapus',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sk_domisili`
--

CREATE TABLE `s_sk_domisili` (
  `surat_id` int(11) NOT NULL,
  `id_template` int(11) NOT NULL DEFAULT 1,
  `nik_penduduk` varchar(255) NOT NULL,
  `no_surat` varchar(20) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `kode_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `s_sk_domisili`
--

INSERT INTO `s_sk_domisili` (`surat_id`, `id_template`, `nik_penduduk`, `no_surat`, `status`, `kode_token`, `created_at`, `updated_at`) VALUES
(2, 1, '6111010803010001', '140/1/SM/VIII/2023', 0, '3pm4ZeWTuLgSOkdriMKKWMA98lCegWiYv0S', '2023-08-14 10:51:51', '2023-08-14 10:51:51'),
(3, 1, '6111010803010001', '140/2/SM/VIII/2023', 0, 'QB4unySufn73WYrbf7TZvT63fOKC9Q7eAq0', '2023-08-14 20:34:33', '2023-08-14 20:34:33'),
(4, 1, '6111010803010001', '140/3/SM/VIII/2023', 0, 'kgm63L68jXQ7dEflJH0ECGc7smdmboG67Bb', '2023-08-22 08:02:32', '2023-08-22 08:02:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sk_kehilangan`
--

CREATE TABLE `s_sk_kehilangan` (
  `surat_id` int(11) NOT NULL,
  `id_template` int(11) DEFAULT 3,
  `no_surat` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `nik_penduduk` bigint(20) DEFAULT NULL,
  `kehilangan_barang` text DEFAULT NULL,
  `alasan_kehilangan` text DEFAULT NULL,
  `status` int(3) DEFAULT NULL COMMENT '0 = new, 1 = diterima, 3 = ditolak',
  `kode_token` varchar(255) DEFAULT NULL COMMENT 'qrcode',
  `flag_erase` int(3) DEFAULT 1 COMMENT '1= ada ; 0 = terhapus',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sk_penghasilan`
--

CREATE TABLE `s_sk_penghasilan` (
  `surat_id` int(11) NOT NULL,
  `id_template` int(11) DEFAULT 4,
  `no_surat` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `nik_penduduk` bigint(20) DEFAULT NULL,
  `status` int(3) DEFAULT NULL COMMENT '0 = new, 1 = diterima, 3 = ditolak',
  `penghasilan_min` int(11) DEFAULT NULL,
  `penghasilan_max` int(11) DEFAULT NULL,
  `sumber_pekerjaan` varchar(255) DEFAULT NULL,
  `kode_token` varchar(255) DEFAULT NULL,
  `flag_erase` int(3) DEFAULT 1 COMMENT '1= ada; 0= terhapus',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sk_tidak_mampu`
--

CREATE TABLE `s_sk_tidak_mampu` (
  `surat_id` int(11) NOT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `id_template` int(11) NOT NULL DEFAULT 8,
  `nik_penduduk` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `kode_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sk_usaha`
--

CREATE TABLE `s_sk_usaha` (
  `surat_id` int(11) NOT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `id_template` int(11) DEFAULT 5,
  `file` varchar(255) DEFAULT NULL,
  `nik_penduduk` bigint(20) DEFAULT NULL,
  `usaha` varchar(255) DEFAULT NULL,
  `wilayah_usaha` varchar(255) DEFAULT NULL,
  `penghasilan_rata_rata` int(11) DEFAULT NULL,
  `status` int(3) DEFAULT NULL COMMENT '0 = new, 1 = diterima, 3 = ditolak',
  `kode_token` varchar(255) NOT NULL,
  `flag_erase` int(3) NOT NULL DEFAULT 1 COMMENT '1= ada; 0= terhapus',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sp_akta_kelahiran`
--

CREATE TABLE `s_sp_akta_kelahiran` (
  `surat_id` int(11) NOT NULL,
  `id_template` int(11) DEFAULT 9,
  `nik_penduduk` varchar(255) DEFAULT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `kode_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sp_kk`
--

CREATE TABLE `s_sp_kk` (
  `surat_id` int(11) NOT NULL,
  `id_template` int(11) NOT NULL DEFAULT 7,
  `nik_penduduk` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `kode_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sp_nikah`
--

CREATE TABLE `s_sp_nikah` (
  `surat_id` int(11) NOT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `id_template` int(11) DEFAULT 2,
  `file` varchar(255) DEFAULT NULL COMMENT 'untuk sementara tidak d pakai',
  `nik_penduduk` bigint(20) DEFAULT NULL,
  `status` int(3) DEFAULT NULL COMMENT '0 = new, 1 = diterima, 3 = ditolak',
  `kode_token` varchar(255) DEFAULT NULL,
  `flag_erase` int(3) NOT NULL DEFAULT 1 COMMENT '1 = ada ; 0 = terhapus',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `s_sp_nikah`
--

INSERT INTO `s_sp_nikah` (`surat_id`, `no_surat`, `id_template`, `file`, `nik_penduduk`, `status`, `kode_token`, `flag_erase`, `created_at`, `updated_at`) VALUES
(18, '472.21/1/SM/VIII/2023', 2, NULL, 6111010803010001, 1, 'mQXlOUGDJutKSQcoucB6n5EeeGEf98KEgFz', 1, '2023-08-22 07:06:53', '2023-08-22 14:11:20'),
(19, '472.21/2/SM/VIII/2023', 2, NULL, 6111010803010001, 1, 'KVmaym9bQYA4AmN2GhH304crZ8FovGXMHXp', 1, '2023-08-22 07:40:47', '2023-08-22 14:51:23'),
(20, '472.21/3/SM/VIII/2023', 2, NULL, 6111010803010001, 0, 'NWjllMRnxz4ktv5i04PT90VVTwQm4qigz0N', 1, '2023-08-22 09:23:53', '2023-08-22 09:23:53'),
(21, '472.21/4/SM/VIII/2023', 2, NULL, 6111010803010001, 1, '1q6nUtKrHtjPL7mkBPF1usZeh1SL7QzHcxJ', 1, '2023-08-22 09:26:08', '2023-08-22 10:15:25'),
(22, '472.21/5/SM/VIII/2023', 2, NULL, 6111010803010001, 0, 'EwGYCkbs8Dgx04TgxT9blLwd92R8hayPYma', 1, '2023-08-22 09:34:43', '2023-08-22 09:34:43'),
(23, '472.21/6/SM/VIII/2023', 2, NULL, 6198382910385167, 1, '24LelNU8J9Zda0XrCHd8VuAyrZ0RRuASuTr', 1, '2023-08-22 09:44:11', '2023-08-22 09:51:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sp_nikah_detail`
--

CREATE TABLE `s_sp_nikah_detail` (
  `detail_id` int(11) NOT NULL,
  `nikah_id` int(11) NOT NULL,
  `nama_istri` varchar(255) NOT NULL,
  `nik_istri` varchar(255) NOT NULL,
  `tgl_lahir_istri` varchar(255) NOT NULL,
  `tempat_lahir_istri` varchar(255) NOT NULL,
  `jk_istri` varchar(255) NOT NULL,
  `kewarganegaraan_istri` varchar(255) NOT NULL,
  `agama_istri` varchar(255) NOT NULL,
  `pekerjaan_istri` varchar(255) NOT NULL,
  `alamat_istri` varchar(255) NOT NULL,
  `bin_istri` varchar(255) NOT NULL,
  `nama_ayah_istri` varchar(255) DEFAULT NULL,
  `tgl_lahir_ayah_istri` varchar(255) DEFAULT NULL,
  `tempat_lahir_ayah_istri` varchar(255) DEFAULT NULL,
  `jk_ayah_istri` varchar(255) DEFAULT NULL,
  `kewarganegaraan_ayah_istri` varchar(255) DEFAULT NULL,
  `agama_ayah_istri` varchar(255) DEFAULT NULL,
  `pekerjaan_ayah_istri` varchar(255) DEFAULT NULL,
  `alamat_ayah_istri` varchar(255) DEFAULT NULL,
  `nama_ibu_istri` varchar(255) DEFAULT NULL,
  `tgl_lahir_ibu_istri` varchar(255) DEFAULT NULL,
  `tempat_lahir_ibu_istri` varchar(255) DEFAULT NULL,
  `jk_ibu_istri` varchar(255) DEFAULT NULL,
  `kewarganegaraan_ibu_istri` varchar(255) DEFAULT NULL,
  `agama_ibu_istri` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu_istri` varchar(255) DEFAULT NULL,
  `alamat_ibu_istri` varchar(255) DEFAULT NULL,
  `nama_suami` varchar(255) DEFAULT NULL,
  `nik_suami` varchar(255) DEFAULT NULL,
  `tgl_lahir_suami` varchar(255) DEFAULT NULL,
  `tempat_lahir_suami` varchar(255) DEFAULT NULL,
  `jk_suami` varchar(255) DEFAULT NULL,
  `kewarganegaraan_suami` varchar(255) DEFAULT NULL,
  `agama_suami` varchar(255) DEFAULT NULL,
  `pekerjaan_suami` varchar(255) DEFAULT NULL,
  `alamat_suami` varchar(255) DEFAULT NULL,
  `bin_suami` varchar(255) DEFAULT NULL,
  `nama_ayah_suami` varchar(255) DEFAULT NULL,
  `tgl_lahir_ayah_suami` varchar(255) DEFAULT NULL,
  `tempat_lahir_ayah_suami` varchar(255) DEFAULT NULL,
  `jk_ayah_suami` varchar(255) DEFAULT NULL,
  `kewarganegaraan_ayah_suami` varchar(255) DEFAULT NULL,
  `agama_ayah_suami` varchar(255) DEFAULT NULL,
  `pekerjaan_ayah_suami` varchar(255) DEFAULT NULL,
  `alamat_ayah_suami` varchar(255) DEFAULT NULL,
  `nama_ibu_suami` varchar(255) DEFAULT NULL,
  `tgl_lahir_ibu_suami` varchar(255) DEFAULT NULL,
  `tempat_lahir_ibu_suami` varchar(255) DEFAULT NULL,
  `jk_ibu_suami` varchar(255) DEFAULT NULL,
  `kewarganegaraan_ibu_suami` varchar(255) DEFAULT NULL,
  `agama_ibu_suami` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu_suami` varchar(255) DEFAULT NULL,
  `alamat_ibu_suami` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_At` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `n1_istri` varchar(255) DEFAULT NULL,
  `n1_suami` varchar(255) DEFAULT NULL,
  `n2_istri` varchar(255) DEFAULT NULL,
  `n2_suami` varchar(255) DEFAULT NULL,
  `n3` varchar(255) DEFAULT NULL,
  `n4_istri` varchar(255) DEFAULT NULL,
  `n4_suami` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `s_sp_nikah_detail`
--

INSERT INTO `s_sp_nikah_detail` (`detail_id`, `nikah_id`, `nama_istri`, `nik_istri`, `tgl_lahir_istri`, `tempat_lahir_istri`, `jk_istri`, `kewarganegaraan_istri`, `agama_istri`, `pekerjaan_istri`, `alamat_istri`, `bin_istri`, `nama_ayah_istri`, `tgl_lahir_ayah_istri`, `tempat_lahir_ayah_istri`, `jk_ayah_istri`, `kewarganegaraan_ayah_istri`, `agama_ayah_istri`, `pekerjaan_ayah_istri`, `alamat_ayah_istri`, `nama_ibu_istri`, `tgl_lahir_ibu_istri`, `tempat_lahir_ibu_istri`, `jk_ibu_istri`, `kewarganegaraan_ibu_istri`, `agama_ibu_istri`, `pekerjaan_ibu_istri`, `alamat_ibu_istri`, `nama_suami`, `nik_suami`, `tgl_lahir_suami`, `tempat_lahir_suami`, `jk_suami`, `kewarganegaraan_suami`, `agama_suami`, `pekerjaan_suami`, `alamat_suami`, `bin_suami`, `nama_ayah_suami`, `tgl_lahir_ayah_suami`, `tempat_lahir_ayah_suami`, `jk_ayah_suami`, `kewarganegaraan_ayah_suami`, `agama_ayah_suami`, `pekerjaan_ayah_suami`, `alamat_ayah_suami`, `nama_ibu_suami`, `tgl_lahir_ibu_suami`, `tempat_lahir_ibu_suami`, `jk_ibu_suami`, `kewarganegaraan_ibu_suami`, `agama_ibu_suami`, `pekerjaan_ibu_suami`, `alamat_ibu_suami`, `created_at`, `updated_At`, `n1_istri`, `n1_suami`, `n2_istri`, `n2_suami`, `n3`, `n4_istri`, `n4_suami`) VALUES
(4, 18, 'maya sapitri', '611102902921972', '2023-08-23', 'tanjung belimbing', 'Perempuan', 'WNI', 'Islam', 'PEGAWAI NEGERI SIPIL', 'jl. kol sugiono', 'handika', 'muhammad udin', '1982-12-08', 'ketapang', 'Laki-laki', 'WNI', 'Islam', 'PENSIUNAN', 'ketapang', 'jubaidah', '1983-12-10', 'ketapang', 'Perempuan', 'WNI', 'Islam', 'PELAJAR / MAHASISWA', 'ketapang', 'sunardi', '6111010803010001', '2023-08-22', 'kemboja', 'Laki-laki', 'WNI', 'Islam', 'PEGAWAI NEGERI SIPIL', 'jl. tanah merah, no 103', 'rajali', 'rajali', '1982-09-07', 'kemboja', 'Laki-laki', 'WNI', 'Islam', 'PENSIUNAN', 'jl. tanah merah, no 103', 'asbah', '1987-08-14', 'kemboja', 'Perempuan', 'WNI', 'Islam', 'MENGURUS RUMAH TANGGA', 'jl. tanah merah, no 103', '2023-08-22 14:10:57', '2023-08-22 07:10:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 19, 'erwinda putri', '610401040920002', '2001-07-13', 'ketapang', 'Perempuan', 'WNI', 'Islam', 'PELAJAR / MAHASISWA', 'jl. rahadi oesman', 'alm. abdurani mahud', 'alm. abdurani mahmud', '1984-02-03', 'ketapang', 'Laki-laki', 'WNI', 'Islam', 'TENTARA NASIONAL INDONESIA', 'ketapang', 'aswanida', '1988-07-24', 'ketapang', 'Perempuan', 'WNI', 'Islam', 'MENGURUS RUMAH TANGGA', 'ketapang', 'Mufidz Maksum', '6111010803010001', '2001-02-08', 'ketapang', 'Laki-laki', 'WNI', 'Islam', 'INDUSTRI', 'sungai awan kanan', 'abdulah', 'abdulah', '1977-02-08', 'ketapang', 'Laki-laki', 'WNI', 'Islam', 'PENSIUNAN', 'ketapang', 'siti maymunah', '1982-11-08', 'ketapang', 'Perempuan', 'WNI', 'Islam', 'PEGAWAI NEGERI SIPIL', 'ketapang', '2023-08-22 14:50:04', '2023-08-22 07:50:04', '046.22/16/M/VIII/2023', '046.22/17/M/VIII/2023', '046.22/18/M/VIII/2023', '046.22/19/M/VIII/2023', '046.22/20/M/VIII/2023', '046.22/21/M/VIII/2023', '046.22/22/M/VIII/2023'),
(6, 22, 'jkjkj', '132131312', '2023-08-23', 'hjbknk', 'Perempuan', 'WNI', 'Islam', 'KARYAWAN SWASTA', 'jljkl', 'ljklj', 'jkjk', '2023-08-10', 'lklkl', 'Laki-laki', 'WNI', 'Islam', 'KARYAWAN BUMN', 'lklk', 'ooio', '2023-08-09', 'lklkl', 'Perempuan', 'WNI', 'Islam', 'TRANSPORTASI', 'lklkl', 'tryrj', '123564564', '2023-08-22', 'jjhj', 'Laki-laki', 'WNI', 'Islam', 'INDUSTRI', 'jkjk', 'asdsa', 'jljlj', '2023-08-22', 'klkl', 'Laki-laki', 'WNI', 'Islam', 'INDUSTRI', 'kjkj', 'jjhj', '2023-08-10', 'lklk', 'Perempuan', 'WNI', 'Islam', 'KARYAWAN SWASTA', 'lklkl', '2023-08-22 16:38:12', '2023-08-22 09:38:12', 'jkklkl', 'nkjkkjj', 'lkl', 'mnnm', 'kmkjkklkl', 'lklk', 'klkl'),
(7, 23, 'Tati', '6173265429876546', '2002-08-19', 'Suka Mulia', 'Perempuan', 'WNI', 'Islam', 'BELUM / TIDAK BEKERJA', 'Suka Mulia', 'Asja', 'Asja', '1983-09-17', 'Suka Mulia', 'Laki-laki', 'WNI', 'Islam', 'PETANI / PEKEBUN', 'Suka Mulia', 'Lina', '1985-08-14', 'Suka Mulia', 'Perempuan', 'WNI', 'Islam', 'MENGURUS RUMAH TANGGA', 'Suka Mulia', 'Adin', '6109253875479286', '2001-08-02', 'Suka Mulia', 'Laki-laki', 'WNI', 'Islam', 'PELAJAR / MAHASISWA', 'Suka Mulia', 'Dino', 'Dino', '1983-12-22', 'Suka Mulia', 'Laki-laki', 'WNI', 'Islam', 'PETANI / PEKEBUN', 'Suka Mulia', 'Yuli', '1983-12-09', 'Suka Mulia', 'Perempuan', 'WNI', 'Islam', 'MENGURUS RUMAH TANGGA', 'Suka Mulia', '2023-08-22 16:49:39', '2023-08-22 09:49:39', '140.22/23/VIII/2023', '140.22/24/VIII/2023', '140.22/25/VIII/2023', '140.22/26/VIII/2023', '140.22/27/VIII/2023', '140.22/28/VIII/2023', '140.22/29/VIII/2023');

-- --------------------------------------------------------

--
-- Struktur dari tabel `s_sp_skck`
--

CREATE TABLE `s_sp_skck` (
  `surat_id` int(11) NOT NULL,
  `id_template` int(11) NOT NULL DEFAULT 10,
  `nik_penduduk` varchar(255) DEFAULT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `kode_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `template`
--

CREATE TABLE `template` (
  `template_id` int(11) NOT NULL,
  `nama_surat` varchar(255) NOT NULL,
  `isi` longtext DEFAULT NULL,
  `nama_file` varchar(255) NOT NULL,
  `no_awal_surat` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `programmer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `template`
--

INSERT INTO `template` (`template_id`, `nama_surat`, `isi`, `nama_file`, `no_awal_surat`, `file`, `programmer`, `created_at`, `updated_at`) VALUES
(1, 'surat keterangan domisili', 'Dengan ini menerangkan bahwa orang yang bersangkutan benar tinggal berdomisili di Desa Suka Mulia Kecamatan sungai melayu rayak\r\nDemikian surat keterangan domisili ini kami buat sebagaimana perlunya semoga dapat dipergunakan sebagaimana mestinya', 'surat-keterangan-domisili', '474.4 / ${nomor}  /${bulan}/${tahun}', '1-surat-keterangan-domisili.docx', 'N', '2023-08-22 15:03:49', '2023-08-22 08:03:49'),
(2, 'Surat Pengantar Nikah', 'Demikian surat pengantar nikah ini kami buat sebagaimana perlunya semoga dapat dipergunakan sebagaimana mestinya', 'surat-pengantar-nikah', 'done P/${no}/SKB/${bulan}/${tahun}', '2-surat-pengantar-nikah.docx', 'leni', '2023-08-22 15:01:12', '2023-08-22 08:01:12'),
(3, 'Surat Keterangan Kehilangan', NULL, 'surat-keterangan-kehilangan', 'done P/${no}/SKB/${bulan}/${tahun}', '3-surat-keterangan-kehilangan.docx', 'l-done', '2023-07-18 06:46:09', '2023-07-08 02:44:11'),
(4, 'Surat Keterangan Penghasilan', NULL, 'surat-keterangan-penghasilan', 'done P/${no}/SKB/${bulan}/${tahun}', '4-surat-keterangan-penghasilan.docx', 'leni', '2023-07-18 07:18:31', '2023-07-09 00:24:05'),
(5, 'Surat Keterangan Usaha', '<p>Demikian surat ini diberikan untuk dapat dipergunakan sebagaimana mestinya.<br></p>', 'surat-keterangan-usaha', 'done P/${no}/SKB/${bulan}/${tahun}', '5-surat-keterangan-usaha.docx', 'leni', '2023-08-13 17:13:42', '2023-08-13 10:13:42'),
(6, 'Surat Keterangan Beda Nama', NULL, 'surat-keterangan-beda-nama', 'done P/${no}/SKB/${bulan}/${tahun}', '6-surat-keterangan-beda-nama.docx', 'leni', '2023-07-23 06:18:30', '2023-07-09 00:28:16'),
(7, 'Surat pengantar kk', '<p>Demikian surat ini diberikan untuk dapat dipergunakan sebagaimana mestinya.<br></p>', 'surat-pengantar-kk', 'P/${no}/SKB/${bulan}/${tahun}', '7-surat-keterangan-nama-orang-tua.docx', 'N', '2023-08-13 17:12:39', '2023-08-13 10:12:39'),
(8, 'Surat Keterangan Tidak Mampu', NULL, 'surat-keterangan-tidak-mampu', 'P/${no}/SKB/${bulan}/${tahun}', '8-surat-keterangan-tidak-mampu.docx', 'N', '2023-07-18 03:37:30', '2023-07-09 00:32:07'),
(9, 'Surat pengantar akta kelahiran', NULL, 'surat-pengantar-akta-kelahiran', 'P/${no}/SKB/${bulan}/${tahun}', '9-surat-kuasa.docx', 'N', '2023-08-04 15:57:48', '2023-07-09 00:34:19'),
(10, 'Surat Pengantar skck', '<p>Demikian surat ini diberikan untuk dapat dipergunakan sebagaimana mestinya.<br></p>', 'surat-pengantar-skck', 'P/${no}/SKB/${bulan}/${tahun}', '10-surat-pengantar-perceraian.docx', 'N', '2023-08-13 17:13:18', '2023-08-13 10:13:18'),
(11, 'surat keterangan ahli waris', NULL, 'surat-keterangan-ahli-waris', '474.4 / 336  /', 'surat-keterangan-ahli-waris.docx', 'n', '2023-08-04 16:00:13', '2023-07-13 06:05:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ttd`
--

CREATE TABLE `ttd` (
  `ttd_id` int(11) NOT NULL,
  `jenis_surat` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `id_surat` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `notlp` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0 COMMENT '1= admin; 2=kades',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama`, `jabatan`, `email`, `notlp`, `foto`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', '', 'Admin@gmail.com', '081240515616', '0npgW6JBTI-09-07-2023-perangkat-desa.png', 1, NULL, '$2y$10$neiYTEmmHjz0YUx.3Ywn8Ot2lEkRw8m5bBZ4NrBwPoGM9VfN3Rle.', NULL, '2023-07-09 00:07:03', '2023-07-09 00:07:03'),
(4, 'tamlikan alfaizi', 'kepala desa', 'tamlikan@gmail.com', '089524526934', 'JP8DPLCQyE-11-07-2023-perangkat-desa.jpg', 2, NULL, '$2y$10$oELZOV3FSMlzf0TLzZVC9.wprcvfccEB5bO/qy3hvF/9fS348jY..', NULL, '2023-07-11 05:27:12', '2023-07-11 05:27:12'),
(5, 'HARIYATI, A.Md.Keb', 'pengelola teknologi informasi', 'akunaku08022001@gmail.com', '081240515616', 'qo2Y8bx2kG-13-07-2023-perangkat-desa.png', 0, NULL, '$2y$10$RVgPKsLMRKJ1SS5hh3I5NOQQjasG1kl7i2E6tjuIK2fsQUIACbaPa', NULL, '2023-07-13 08:56:13', '2023-07-13 08:56:13'),
(7, 'HARIYATI, A.Md.Keb', 'pranata komputer', 'akunaku0802200aa1@gmail.com', '081240515616', 'OqVykGIvxY-13-07-2023-perangkat-desa.png', 0, NULL, '$2y$10$hLSdFEb7CGfCjcD.RAJMf.Uixi0eL6YoOBQskhtZwHo.ndFg1gb8K', NULL, '2023-07-13 08:57:12', '2023-07-13 08:57:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `d_agama`
--
ALTER TABLE `d_agama`
  ADD PRIMARY KEY (`agama_id`);

--
-- Indeks untuk tabel `d_kk`
--
ALTER TABLE `d_kk`
  ADD PRIMARY KEY (`kk_id`);

--
-- Indeks untuk tabel `d_pekerjaan`
--
ALTER TABLE `d_pekerjaan`
  ADD PRIMARY KEY (`pekerjaan_id`);

--
-- Indeks untuk tabel `d_pendidikan`
--
ALTER TABLE `d_pendidikan`
  ADD PRIMARY KEY (`pendidikan_id`);

--
-- Indeks untuk tabel `d_penduduk`
--
ALTER TABLE `d_penduduk`
  ADD UNIQUE KEY `penduduk_id` (`penduduk_id`);

--
-- Indeks untuk tabel `d_status_hubungan`
--
ALTER TABLE `d_status_hubungan`
  ADD PRIMARY KEY (`status_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`informasi_id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indeks untuk tabel `laporan_realisasi_anggaran`
--
ALTER TABLE `laporan_realisasi_anggaran`
  ADD PRIMARY KEY (`laporan_id`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`layanan_id`);

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
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`pengaturan_id`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD PRIMARY KEY (`profil_id`);

--
-- Indeks untuk tabel `program_desa`
--
ALTER TABLE `program_desa`
  ADD PRIMARY KEY (`program_id`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `s_sk_ahli_waris`
--
ALTER TABLE `s_sk_ahli_waris`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `s_sk_ahli_waris_detail`
--
ALTER TABLE `s_sk_ahli_waris_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indeks untuk tabel `s_sk_bedanama`
--
ALTER TABLE `s_sk_bedanama`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `s_sk_domisili`
--
ALTER TABLE `s_sk_domisili`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `s_sk_kehilangan`
--
ALTER TABLE `s_sk_kehilangan`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `s_sk_penghasilan`
--
ALTER TABLE `s_sk_penghasilan`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `s_sk_tidak_mampu`
--
ALTER TABLE `s_sk_tidak_mampu`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `s_sk_usaha`
--
ALTER TABLE `s_sk_usaha`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `s_sp_akta_kelahiran`
--
ALTER TABLE `s_sp_akta_kelahiran`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `s_sp_kk`
--
ALTER TABLE `s_sp_kk`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `s_sp_nikah`
--
ALTER TABLE `s_sp_nikah`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `s_sp_nikah_detail`
--
ALTER TABLE `s_sp_nikah_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indeks untuk tabel `s_sp_skck`
--
ALTER TABLE `s_sp_skck`
  ADD PRIMARY KEY (`surat_id`);

--
-- Indeks untuk tabel `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`template_id`);

--
-- Indeks untuk tabel `ttd`
--
ALTER TABLE `ttd`
  ADD PRIMARY KEY (`ttd_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `d_agama`
--
ALTER TABLE `d_agama`
  MODIFY `agama_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `d_kk`
--
ALTER TABLE `d_kk`
  MODIFY `kk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `d_pekerjaan`
--
ALTER TABLE `d_pekerjaan`
  MODIFY `pekerjaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `d_pendidikan`
--
ALTER TABLE `d_pendidikan`
  MODIFY `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `d_penduduk`
--
ALTER TABLE `d_penduduk`
  MODIFY `penduduk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `d_status_hubungan`
--
ALTER TABLE `d_status_hubungan`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `informasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `laporan_realisasi_anggaran`
--
ALTER TABLE `laporan_realisasi_anggaran`
  MODIFY `laporan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `layanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `pengaturan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `profil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `program_desa`
--
ALTER TABLE `program_desa`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `s_sk_ahli_waris`
--
ALTER TABLE `s_sk_ahli_waris`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `s_sk_ahli_waris_detail`
--
ALTER TABLE `s_sk_ahli_waris_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `s_sk_bedanama`
--
ALTER TABLE `s_sk_bedanama`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `s_sk_domisili`
--
ALTER TABLE `s_sk_domisili`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `s_sk_kehilangan`
--
ALTER TABLE `s_sk_kehilangan`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `s_sk_penghasilan`
--
ALTER TABLE `s_sk_penghasilan`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `s_sk_tidak_mampu`
--
ALTER TABLE `s_sk_tidak_mampu`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `s_sk_usaha`
--
ALTER TABLE `s_sk_usaha`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `s_sp_akta_kelahiran`
--
ALTER TABLE `s_sp_akta_kelahiran`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `s_sp_kk`
--
ALTER TABLE `s_sp_kk`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `s_sp_nikah`
--
ALTER TABLE `s_sp_nikah`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `s_sp_nikah_detail`
--
ALTER TABLE `s_sp_nikah_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `s_sp_skck`
--
ALTER TABLE `s_sp_skck`
  MODIFY `surat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `template`
--
ALTER TABLE `template`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `ttd`
--
ALTER TABLE `ttd`
  MODIFY `ttd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
