-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 03:25 PM
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
('1', '1', '1', '2', '2', '300', 0, 1),
('2', '1', '1', '3', '1', '200', 0, 0),
('3', '2', '1', '1', '1', '100', 0, 0),
('3453467', '1', '1', '1', '100', '70', 0, 1),
('4', '3', '1', '5', '3', '255', 0, 0),
('5', '4', '1', '7', '4', '300', 0, 0),
('6', '1', '2', '7', '5', '400', 0, 0),
('7', '1', '1', '5', '3', '350', 0, 0),
('8', '2', '2', '9', '6', '500', 0, 0),
('9', '3', '2', '11', '7', '500', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosispenyakit`
--

CREATE TABLE `diagnosispenyakit` (
  `idDiagnosis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idPenyakit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idSapi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idkombinasi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `saran` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diagnosispenyakit`
--

INSERT INTO `diagnosispenyakit` (`idDiagnosis`, `idPenyakit`, `idSapi`, `idkombinasi`, `tanggal`, `saran`) VALUES
('1', 'P1', '1', 1, '0000-00-00', 'harus minum yang banyak'),
('10', 'P9', '1', 2, '0000-00-00', 'banyak makan nasi'),
('2', 'P1', '1', 3, '0000-00-00', 'banyak istirahat'),
('3', 'P3', '2', 0, '0000-00-00', 'makan yang banyak'),
('4', 'P3', '2', 0, '0000-00-00', 'makan yg banyak'),
('5', 'P6', '2', 0, '0000-00-00', 'sering minum ya'),
('6', 'P9', '8', 0, '0000-00-00', 'kurangi jajan'),
('8', 'P6', '6', 0, '0000-00-00', 'jangan nakal '),
('9', 'P3', '5', 0, '0000-00-00', 'priksa lagi');

-- --------------------------------------------------------

--
-- Table structure for table `gejalapenyakit`
--

CREATE TABLE `gejalapenyakit` (
  `idGejala` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gejala` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gejalapenyakit`
--

INSERT INTO `gejalapenyakit` (`idGejala`, `gejala`) VALUES
('G01', 'Demam'),
('G02', 'Diare'),
('G03', 'Bintik hitam pada pori-pori'),
('G04', 'Nafas terengah-engah'),
('G05', 'Pembengkakan pada perut'),
('G06', 'Gatal-gatal'),
('G07', 'Bulu rontok'),
('G08', 'Muncul nanah'),
('G09', 'Kuku Busuk'),
('G10', 'Bercak abu-abu pada kulit'),
('G11', 'Tidak nafsu makan'),
('G12', 'Kurus'),
('G13', 'BAB tidak teratur'),
('G14', 'Hidung dan mulut kering'),
('G15', 'Cairan pada hidung dan mata'),
('G16', 'Keluar air liur'),
('G17', 'Moncong kering dan bernanah'),
('G18', 'Kulit mengelupas'),
('G19', 'Sempoyongan'),
('G20', 'Jaringan tubuh rusak'),
('G21', 'Gemetar'),
('G22', 'Suhu badan > 40˚C'),
('G23', 'Busung pada kepala sampai leher bawah'),
('G24', 'Radang paru'),
('G25', 'Selaput lendir memerah'),
('G26', 'Lemah lesu'),
('G27', 'Pincang'),
('G28', 'Susah bergerak'),
('G29', 'Susah berdiri'),
('G30', 'Produksi susu turun'),
('G31', 'Bergerak memutar'),
('G32', 'Selaput lendir menguning'),
('G33', 'Perut kiri membesar'),
('G34', 'Gerakan lambat'),
('G35', 'Sering terjatuh'),
('G36', 'Celah kuku dan tumit bengkak'),
('G37', 'Cairan kuning berbau busuk pada kuku'),
('G38', 'Selaput kuku mengelupas');

-- --------------------------------------------------------

--
-- Table structure for table `jadwalpakan`
--

CREATE TABLE `jadwalpakan` (
  `idJadwalPakan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idstatussapi` int(11) NOT NULL,
  `hari` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenisPakan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jadwalpakan`
--

INSERT INTO `jadwalpakan` (`idJadwalPakan`, `idstatussapi`, `hari`, `jam`, `jenisPakan`) VALUES
('1', 0, 'minggu', '06.00', 'rumput\r\nkonsentrat'),
('10', 0, 'minggu', '12.00', 'kosentrat'),
('2', 0, 'minggu', '12.00', 'dedak'),
('3', 0, 'senin', '06.00', 'kosentrat'),
('4', 0, 'senin', '07.00', 'rumput'),
('5', 0, 'senin', '12.00', 'kosentrat, dedak'),
('6', 0, 'selasa', '06.00', 'rumput, obat'),
('7', 0, 'rabu', '06.00', 'damen'),
('8', 0, 'kamis', '12.00', 'rumput, air'),
('9', 0, 'jumat', '06.00', 'rumput');

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
(1, 'P1', 'G01G02G03G04G05'),
(2, 'P2', 'G06G07G08G09G10'),
(3, 'P3', 'G02G04G11G12G13G14'),
(4, 'P4', 'G04G15G16G17G18G19G20G21'),
(5, 'P5', 'G04G16G21G22G23G24G25'),
(6, 'P6', 'G01G04G11G15G21G26G27G28G29G30'),
(7, 'P7', 'G01G07G11G19G26G31G32'),
(8, 'P8', 'G04G33G34G35'),
(9, 'P9', 'G36G37G38G39');

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
('2016_11_02_142332_create_stoksapi_table', 1);

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
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `idPenyakit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `namaPenyakit` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gejala` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`idPenyakit`, `namaPenyakit`, `gejala`) VALUES
('P1', 'Anthrax', 'Demam,Diare,Bintik hitam pada pori-pori,Nafas terengah-engah,Pembengkakan pada perut'),
('P2', 'Scabies', 'Gatal-gatal,Bulu rontok,Muncul nanah,Kulit kaku,Bercak abu-abu pada kulit\r\n'),
('P3', 'Cacingan', 'Diare,Nafas terengah-engah,Nafas terengah-engah,Kurus,BAB tidak teratur,Hidung dan mulut kering'),
('P4', 'Ingusan', 'Nafas terengah-engah,Nafas terengah-engah,Keluar air liur,Moncong kering dan bernanah,Kulit mengelupas,Sempoyongan,Jaringan tubuh rusak,Gemetar'),
('P5', 'Ngorok Sapi', 'Nafas terengah-engah,Keluar air liur,Gemetar,Suhu badan > 40˚C,Busung pada kepala sampai leher bawah,Radang '),
('P6', 'Demam', 'Demam,Nafas terengah-engah,Tidak nafsu makan,Cairan pada hidung dan mata,Gemetar,Lemah lesu,Pincang,Susah bergerak,Susah berdiri,Produksi susu turun'),
('P7', 'Sapi Mubeng', 'Demam,Bulu rontok,Tidak nafsu makan,Sempoyongan,Lemah lesu,Bergerak memutar,Selaput lendir menguning'),
('P8', 'Kembung', 'Nafas terengah-engah,Perut kiri membesar,Gerakan lambat,Sering terjatuh'),
('P9', 'Kuku Busuk', 'Celah kuku dan tumit bengkak,Cairan kuning berbau busuk pada kuku,Selaput kuku mengelupas,Pincang');

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
(2, 'sakit'),
(3, 'laktasi');

-- --------------------------------------------------------

--
-- Table structure for table `stoksapi`
--

CREATE TABLE `stoksapi` (
  `idStok` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlahStok` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `terjual` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `mati` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stoksapi`
--

INSERT INTO `stoksapi` (`idStok`, `jumlahStok`, `terjual`, `mati`) VALUES
('1', '20', '10', '2'),
('10', '22', '6', '3'),
('2', '40', '5', '1'),
('3', '20', '3', '1'),
('4', '30', '4', '2'),
('5', '40', '1', '0'),
('6', '40', '2', '1'),
('7', '10', '3', '4'),
('8', '40', '1', '1'),
('9', '33', '2', '2');

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
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Nurul Aeini', 'Nurul', 'nurul@mail.com', '$2y$10$nSJ0ep5v0o8vhnjmZ3kMHuYhTJhizC9d67f8z41UQ/Oa1ukSSF/v2', NULL, '2016-11-19 22:48:41', '2016-11-19 22:48:41'),
(5, 'Mohammad Alviansyah', 'Alvian', 'adsasa@mail.com', '$2y$10$m09HH0wgd2iNK1F78/ZmS..3rI/h0G4xDRJ/TShWRdkvOi6P7ie0K', 'SMP0IVQ4Y7VUhBtGKDQ34z0awZtWg1nQsXkinhT61HFi2ipi19ipcuWacmbH', '2016-11-20 04:24:30', '2016-11-28 23:21:26'),
(6, 'Ahmad Dwi Jayanto', 'Ahmad', 'ahmad@mail.com', '$2y$10$jiwWgeoXzURkScGTGA6gce9Duu2o5wQLsSSsiCALpTSZ5EyUnxA6q', 'lTcOW0MPkFgQiBsukL9ZTo8ywsToV5anfRpQwXX66ug9oM3qlEogsg41waVC', '2016-11-27 12:41:54', '2016-11-27 12:42:23');

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
-- Indexes for table `diagnosispenyakit`
--
ALTER TABLE `diagnosispenyakit`
  ADD PRIMARY KEY (`idDiagnosis`),
  ADD UNIQUE KEY `diagnosispenyakit_iddiagnosis_unique` (`idDiagnosis`),
  ADD KEY `idPenyakit` (`idPenyakit`),
  ADD KEY `idSapi` (`idSapi`),
  ADD KEY `idkombinasi` (`idkombinasi`);

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
-- AUTO_INCREMENT for table `kombinasi`
--
ALTER TABLE `kombinasi`
  MODIFY `idKombinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `statussapi`
--
ALTER TABLE `statussapi`
  MODIFY `idstatussapi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
