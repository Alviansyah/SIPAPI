-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2016 at 07:34 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipapidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakandang`
--

CREATE TABLE `datakandang` (
  `idKandang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomor` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datakandang`
--

INSERT INTO `datakandang` (`idKandang`, `nomor`) VALUES
('1', '1'),
('10', '10'),
('2', '2'),
('3', '3'),
('4', '4'),
('5', '5'),
('6', '6'),
('7', '7'),
('8', '8'),
('9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `datasapi`
--

CREATE TABLE `datasapi` (
  `idSapi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idKategori` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `jenisKelamin` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `usia` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `tinggi` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `bobot` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `idstatussapi` int(11) NOT NULL DEFAULT '0',
  `arsip` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datasapi`
--

INSERT INTO `datasapi` (`idSapi`, `idKategori`, `jenisKelamin`, `usia`, `tinggi`, `bobot`, `idstatussapi`, `arsip`) VALUES
('1', '1', '1', '2', '2', '300', 1, 1),
('2', '1', '1', '3', '1', '200', 2, 0),
('3', '2', '1', '1', '170', '100', 1, 0),
('4', '3', '1', '5', '3', '255', 1, 0),
('5', '4', '1', '7', '4', '300', 1, 0),
('6', '1', '2', '7', '5', '400', 1, 0),
('7', '1', '1', '5', '3', '350', 1, 0),
('8', '2', '2', '9', '6', '500', 1, 0),
('9', '3', '2', '11', '7', '500', 1, 0),
('BFL457', '2', '1', '3', '120', '75', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `idDiagnosis` int(255) NOT NULL,
  `idPemeriksaan` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `saran` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `idDokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`idDiagnosis`, `idPemeriksaan`, `tanggal`, `saran`, `idDokter`) VALUES
(1, 1, '2016-12-13 23:07:50', 'Kasih makan rumput. Jangan dikasih makan kaca.', 2),
(2, 2, '2016-12-13 23:28:15', 'tralalala trillililili', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gejalapenyakit`
--

CREATE TABLE `gejalapenyakit` (
  `idGejala` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idKategoriGejala` int(1) NOT NULL,
  `gejala` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gejalapenyakit`
--

INSERT INTO `gejalapenyakit` (`idGejala`, `idKategoriGejala`, `gejala`) VALUES
('G01', 6, 'Suhu Badan tinggi'),
('G02', 4, 'Diare'),
('G03', 3, 'Bintik hitam pada pori-pori'),
('G04', 2, 'Nafas terengah-engah'),
('G05', 5, 'Pembengkakan pada perut'),
('G06', 3, 'Gatal-gatal'),
('G07', 3, 'Bulu rontok'),
('G08', 3, 'Muncul nanah'),
('G09', 3, 'Kulit kaku'),
('G10', 3, 'Bercak abu-abu pada kulit'),
('G11', 4, 'Tidak nafsu makan'),
('G12', 5, 'Kurus'),
('G13', 1, 'Hidung dan mulut kering'),
('G14', 1, 'Cairan pada hidung dan mata'),
('G15', 1, 'Keluar air liur'),
('G16', 1, 'Moncong kering dan bernanah'),
('G17', 3, 'Kulit mengelupas'),
('G18', 5, 'Sempoyongan'),
('G19', 3, 'Terjadi lesi kulit'),
('G20', 5, 'Gemetar'),
('G21', 5, 'Busung pada kepala sampai leher bawah'),
('G22', 2, 'Radang paru'),
('G23', 1, 'Selaput lendir memerah'),
('G24', 5, 'Lemah lesu'),
('G25', 5, 'Pincang'),
('G26', 5, 'Susah bergerak'),
('G27', 6, 'Produksi susu turun'),
('G28', 5, 'Bergerak memutar'),
('G29', 1, 'Selaput lendir menguning'),
('G30', 5, 'Perut kiri membesar'),
('G31', 5, 'Gerakan lambat'),
('G32', 5, 'Sering terjatuh'),
('G33', 5, 'Celah kuku dan tumit bengkak'),
('G34', 5, 'Cairan kuning berbau busuk pada kuku'),
('G35', 5, 'Selaput kuku mengelupas');

-- --------------------------------------------------------

--
-- Table structure for table `jadwalpakan`
--

CREATE TABLE `jadwalpakan` (
  `idJadwalPakan` int(2) NOT NULL,
  `idstatussapi` int(11) NOT NULL,
  `hari` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenisPakan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jadwalpakan`
--

INSERT INTO `jadwalpakan` (`idJadwalPakan`, `idstatussapi`, `hari`, `jam`, `jenisPakan`) VALUES
(1, 0, 'minggu', '06.00', 'rumput, konsentrat'),
(2, 0, 'minggu', '12.00', 'dedak'),
(3, 0, 'senin', '06.00', 'kosentrat'),
(4, 0, 'senin', '07.00', 'rumput'),
(5, 0, 'senin', '12.00', 'kosentrat, dedak'),
(6, 0, 'selasa', '06.00', 'rumput, obat'),
(7, 0, 'rabu', '06.00', 'damen'),
(8, 0, 'kamis', '12.00', 'rumput, air'),
(9, 0, 'jumat', '06.00', 'rumput'),
(10, 0, 'minggu', '12.00', 'kosentrat');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `kategori`) VALUES
('1', 'pedet'),
('2', 'dewasa');

-- --------------------------------------------------------

--
-- Table structure for table `kategorigejala`
--

CREATE TABLE `kategorigejala` (
  `idKategoriGejala` int(1) NOT NULL,
  `kategoriGejala` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorigejala`
--

INSERT INTO `kategorigejala` (`idKategoriGejala`, `kategoriGejala`) VALUES
(1, 'Hidung, Mulut, dan Mata'),
(2, 'Pernafasan'),
(3, 'Kulit'),
(4, 'Pencernaan'),
(5, 'Fisik'),
(6, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `kombinasi`
--

CREATE TABLE `kombinasi` (
  `idKombinasi` int(11) NOT NULL,
  `idPenyakit` varchar(255) NOT NULL,
  `kombinasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kombinasi`
--

INSERT INTO `kombinasi` (`idKombinasi`, `idPenyakit`, `kombinasi`) VALUES
(1, 'P1', 'G01,G02,G03,G04,G05'),
(2, 'P2', 'G06,G07,G08,G09,G10'),
(3, 'P3', 'G02,G04,G11,G12,G13'),
(4, 'P4', 'G01,G04,G14,G15,G16,G17,G18,G19,G20'),
(5, 'P5', 'G01,G04,G15,G20,G21,G22,G23'),
(6, 'P6', 'G01,G04,G11,G14,G20,G24,G25,G26,G27'),
(7, 'P7', 'G01,G07,G11,G18,G24,G28,G29'),
(8, 'P8', 'G04,G30,G31,G32'),
(9, 'P9', 'G25,G33,G34,G35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_11_02_132956_create_datasapi_table', 1),
('2016_11_02_133026_create_diagnosispenyakit_table', 1),
('2016_11_02_133101_create_hipotesispenyakit_table', 1),
('2016_11_02_142031_create_pegawai_table', 1),
('2016_11_02_142055_create_gejalapenyakit_table', 1),
('2016_11_02_142127_create_datakandang_table', 1),
('2016_11_02_142219_create_datapenyakit_table', 1),
('2016_11_02_142239_create_jadwalpakan_table', 1),
('2016_11_02_142304_create_kategorisapi_table', 1),
('2016_11_02_142332_create_stoksapi_table', 1),
('2016_11_14_150836_create_sapi_models_table', 2),
('2016_11_14_154605_create_medis_models_table', 2),
('2016_11_14_154818_create_hipotesis_models_table', 2),
('2016_12_12_091941_CreatePemeriksaanTable', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nurul@gmail.com', 'nurul', '2016-11-01 07:00:00'),
('ahmmad@gmail.com', 'ahmad', '2016-11-26 08:00:00'),
('ririn@gmail.com', '123', '2016-12-15 08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `idPemeriksaan` int(11) NOT NULL,
  `idSapi` varchar(255) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idUser` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`idPemeriksaan`, `idSapi`, `gejala`, `tanggal`, `idUser`, `status`) VALUES
(1, '2', 'G14,G15,G16,G29,G10,G19,G05,G18,G26,G31,G33,G27', '2016-12-13 21:49:11', '3', 1),
(2, '3', 'G15,G04,G02,G12,G01', '2016-12-13 23:26:49', '3', 1),
(3, '6', 'G14,G15,G22,G10,G19,G24,G33,G35', '2016-12-14 01:02:47', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `idPenyakit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namaPenyakit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gejala` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`idPenyakit`, `namaPenyakit`, `gejala`) VALUES
('P1', 'Anthrax', 'Demam,Diare,Bintik hitam pada pori-pori,Nafas terengah-engah,Pembengkakan pada perut'),
('P2', 'Scabies', 'Gatal-gatal,Bulu rontok,Muncul nanah,Kulit kaku,Bercak abu-abu pada kulit\r\n'),
('P3', 'Heminthiasis', 'Diare,Nafas terengah-engah,Nafas terengah-engah,Kurus,BAB tidak teratur,Hidung dan mulut kering'),
('P4', 'Malignant Catarrhal Fever', 'Nafas terengah-engah,Nafas terengah-engah,Keluar air liur,Moncong kering dan bernanah,Kulit mengelupas,Sempoyongan,Jaringan tubuh rusak,Gemetar'),
('P5', 'Septichaemia Epizootic', 'Nafas terengah-engah,Keluar air liur,Gemetar,Suhu badan > 40˚C,Busung pada kepala sampai leher bawah,Radang '),
('P6', 'Bovine Ephemeral Fever', 'Demam,Nafas terengah-engah,Tidak nafsu makan,Cairan pada hidung dan mata,Gemetar,Lemah lesu,Pincang,Susah bergerak,Susah berdiri,Produksi susu turun'),
('P7', 'Trypanosomiasis', 'Demam,Bulu rontok,Tidak nafsu makan,Sempoyongan,Lemah lesu,Bergerak memutar,Selaput lendir menguning'),
('P8', 'Bloat', 'Nafas terengah-engah,Perut kiri membesar,Gerakan lambat,Sering terjatuh'),
('P9', 'Foot Rot', 'Celah kuku dan tumit bengkak,Cairan kuning berbau busuk pada kuku,Selaput kuku mengelupas,Pincang');

-- --------------------------------------------------------

--
-- Table structure for table `statussapi`
--

CREATE TABLE `statussapi` (
  `idstatussapi` int(11) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statussapi`
--

INSERT INTO `statussapi` (`idstatussapi`, `status`) VALUES
(1, 'sehat'),
(2, 'sakit');

-- --------------------------------------------------------

--
-- Table structure for table `stoksapi`
--

CREATE TABLE `stoksapi` (
  `idStok` int(11) NOT NULL,
  `jumlahStok` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `terjual` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `mati` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stoksapi`
--

INSERT INTO `stoksapi` (`idStok`, `jumlahStok`, `terjual`, `mati`) VALUES
(1, '20', '10', '2'),
(2, '40', '5', '1'),
(3, '20', '3', '1'),
(4, '30', '4', '2'),
(5, '40', '1', '0'),
(6, '40', '2', '1'),
(7, '10', '3', '4'),
(8, '40', '1', '1'),
(9, '33', '2', '2'),
(10, '22', '6', '3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Dr. Mohammad Alviansyah, G.Force', 'Alvian', 'adsasa@mail.com', '$2y$10$m09HH0wgd2iNK1F78/ZmS..3rI/h0G4xDRJ/TShWRdkvOi6P7ie0K', 0, 't3gnwjDeSaVa7DEdPKmhkmqZxVCNcbeQODD8DvkUZtBWOI9iyxobqlBNgkj9', '2016-11-20 04:24:30', '2016-12-13 21:54:38'),
(2, 'dr. Nurul Aeini, AMD', 'Nurul', 'nurul@mail.com', '$2y$10$nSJ0ep5v0o8vhnjmZ3kMHuYhTJhizC9d67f8z41UQ/Oa1ukSSF/v2', 2, 'pbLaKr61LTvh8IY3dj0nxAnWmk9gfEzFTa1xYj7nLU3zQwxNTYNcBsseCukM', '2016-11-19 22:48:41', '2016-12-13 21:05:55'),
(3, 'Dr. Ahmad Dwi Jayanto, MSI', 'Ahmad', 'ahmad@mail.com', '$2y$10$jiwWgeoXzURkScGTGA6gce9Duu2o5wQLsSSsiCALpTSZ5EyUnxA6q', 3, 'ZYO0zexSYb0bpAM2GRUZM1bdgf4kRnohlvpgTdXJnraRdC2nn0RNKNWqYRfV', '2016-11-27 12:41:54', '2016-12-13 22:45:25'),
(4, 'Ir. Milzammah Ilvi Laily, N.vidia', 'Ilvi', 'ilvi.laily@mail.com', '$2y$10$RHH9EQ6jg4Tj/hSmBtkZyOoJq41y4LpO92g/w/4jQMjQEXZZnglZ6', 1, 'B2NReJjTvGtfXuJcF2W0Emr222QC1x6PmDEcxWDeoCgJ2vuuf2dC2GOvX94U', '2016-12-11 01:47:07', '2016-12-13 23:25:48'),
(5, 'dr. Rozha Aulya, ATI', 'Rozha', 'rozha@mail.com', '$2y$10$YDwAGmUCvUDvNnNmE1akFep0lzS9CdF6NkR2ChJTG38iD0DgXAM72', 2, 'xtMzjm7JSScYqZvIUZKQwccFA2X8wBdbXoJ3wxNYAkA9IKDy6eCryDD2zimA', '2016-12-11 01:50:56', '2016-12-13 23:13:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakandang`
--
ALTER TABLE `datakandang`
  ADD PRIMARY KEY (`idKandang`),
  ADD UNIQUE KEY `datakandang_idkandang_unique` (`idKandang`);

--
-- Indexes for table `datasapi`
--
ALTER TABLE `datasapi`
  ADD PRIMARY KEY (`idSapi`),
  ADD UNIQUE KEY `datasapi_idsapi_unique` (`idSapi`),
  ADD KEY `idKategori` (`idKategori`),
  ADD KEY `idKategori_2` (`idKategori`),
  ADD KEY `idstatussapi` (`idstatussapi`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`idDiagnosis`),
  ADD UNIQUE KEY `diagnosispenyakit_iddiagnosis_unique` (`idDiagnosis`);

--
-- Indexes for table `gejalapenyakit`
--
ALTER TABLE `gejalapenyakit`
  ADD PRIMARY KEY (`idGejala`),
  ADD UNIQUE KEY `gejalapenyakit_idgejala_unique` (`idGejala`);

--
-- Indexes for table `jadwalpakan`
--
ALTER TABLE `jadwalpakan`
  ADD PRIMARY KEY (`idJadwalPakan`),
  ADD UNIQUE KEY `jadwalpakan_idjadwalpakan_unique` (`idJadwalPakan`),
  ADD KEY `idstatussapi` (`idstatussapi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`),
  ADD UNIQUE KEY `kategori_idkategori_unique` (`idKategori`);

--
-- Indexes for table `kategorigejala`
--
ALTER TABLE `kategorigejala`
  ADD PRIMARY KEY (`idKategoriGejala`);

--
-- Indexes for table `kombinasi`
--
ALTER TABLE `kombinasi`
  ADD PRIMARY KEY (`idKombinasi`),
  ADD KEY `idKombinasi` (`idKombinasi`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`idPemeriksaan`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`idPenyakit`),
  ADD UNIQUE KEY `penyakit_idpenyakit_unique` (`idPenyakit`);

--
-- Indexes for table `statussapi`
--
ALTER TABLE `statussapi`
  ADD PRIMARY KEY (`idstatussapi`);

--
-- Indexes for table `stoksapi`
--
ALTER TABLE `stoksapi`
  ADD PRIMARY KEY (`idStok`),
  ADD UNIQUE KEY `stoksapi_idstok_unique` (`idStok`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`),
  ADD UNIQUE KEY `my_unique_key` (`username`,`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `idDiagnosis` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategorigejala`
--
ALTER TABLE `kategorigejala`
  MODIFY `idKategoriGejala` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kombinasi`
--
ALTER TABLE `kombinasi`
  MODIFY `idKombinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `idPemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `statussapi`
--
ALTER TABLE `statussapi`
  MODIFY `idstatussapi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stoksapi`
--
ALTER TABLE `stoksapi`
  MODIFY `idStok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
