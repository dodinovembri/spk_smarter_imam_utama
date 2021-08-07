-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 09:16 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_smarter_imam_utama`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `kode_alternatif` varchar(50) NOT NULL,
  `nama_alternatif` varchar(255) DEFAULT NULL,
  `jarak_dengan_aspal` varchar(100) DEFAULT NULL,
  `harga` double(18,2) DEFAULT NULL,
  `jarak_dengan_sarana` varchar(100) DEFAULT NULL,
  `luas_lahan` varchar(100) DEFAULT NULL,
  `tempo_pembayaran` varchar(100) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `kode_alternatif`, `nama_alternatif`, `jarak_dengan_aspal`, `harga`, `jarak_dengan_sarana`, `luas_lahan`, `tempo_pembayaran`, `keterangan`, `status`) VALUES
(1, 'GB1', 'Gabek 1', '2 m', 325000.00, '1.6 km', '5.038 m2', '1 tahun', '', 1),
(2, 'JG1', 'Jalan Gandaria 1', '2 m', 260000.00, '2.1 km', '6.230 m2', '1 tahun', ' ', 1),
(3, 'AK7', 'Air Kepala 7', '200 m', 350000.00, '200 m', '35.623 m2', '1 tahun', ' ', 1),
(4, 'KTT', 'Kulan, Tua Tunu', '125 m', 60000.00, '3.1 km', '7.812 m2', '1 tahun', ' ', 1),
(5, 'KAT', 'Kampak, Tua Tunu', '70 m', 185000.00, '2.5 km', '17.030 m2', '1 tahun', ' ', 1),
(6, 'JGS', 'Jerambah Gantung, Selindung', '30 m', 110000.00, '2.8 km', '11.473 m2', '1 tahun', ' ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `kode_kriteria` varchar(50) NOT NULL,
  `nama_kriteria` varchar(255) DEFAULT NULL,
  `prioritas` int(11) DEFAULT NULL,
  `bobot` double(18,18) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `kode_kriteria`, `nama_kriteria`, `prioritas`, `bobot`, `status`) VALUES
(1, 'SM', 'Surat Menyurat', 1, 0.274534304079760000, 1),
(2, 'JA', 'Jarak Dengan Aspal', 2, 0.183625213170670000, 1),
(3, 'LS', 'Lahan Sengketa', 3, 0.138170667716120000, 1),
(4, 'FDT', 'Fisik Dengan Tanah', 4, 0.107867637413090000, 1),
(5, 'HA', 'Harga', 5, 0.085140364685819000, 1),
(6, 'JL', 'Jaringan Listrik', 6, 0.066958546504001000, 1),
(7, 'SA', 'Sumber Air', 7, 0.051807031352486000, 1),
(8, 'SP', 'Sarana/ Prasarana', 8, 0.038820018365473000, 1),
(9, 'JP', 'Jarak dengan Sarana/ Prasarana', 9, 0.027456382001837000, 1),
(10, 'LL', 'Luas Lahan', 10, 0.017355371900826000, 1),
(11, 'TP', 'Tempo Pembayaran', 11, 0.008264462809917400, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_alternatif`
--

CREATE TABLE `nilai_alternatif` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_sub_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai_alternatif`
--

INSERT INTO `nilai_alternatif` (`id`, `id_alternatif`, `id_kriteria`, `id_sub_kriteria`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 4),
(3, 1, 3, 8),
(4, 1, 4, 10),
(5, 1, 5, 17),
(6, 1, 6, 18),
(7, 1, 7, 20),
(8, 1, 8, 22),
(9, 1, 9, 25),
(10, 1, 10, 30),
(11, 1, 11, 32),
(12, 2, 1, 2),
(13, 2, 2, 4),
(14, 2, 3, 8),
(15, 2, 4, 11),
(16, 2, 5, 17),
(17, 2, 6, 18),
(18, 2, 7, 20),
(19, 2, 8, 22),
(20, 2, 9, 26),
(21, 2, 10, 30),
(22, 2, 11, 32),
(23, 3, 1, 1),
(24, 3, 2, 7),
(25, 3, 3, 8),
(26, 3, 4, 10),
(27, 3, 5, 17),
(28, 3, 6, 18),
(29, 3, 7, 20),
(30, 3, 8, 22),
(31, 3, 9, 24),
(32, 3, 10, 30),
(33, 3, 11, 32),
(34, 4, 1, 2),
(35, 4, 2, 7),
(36, 4, 3, 8),
(37, 4, 4, 10),
(38, 4, 5, 14),
(39, 4, 6, 18),
(40, 4, 7, 20),
(41, 4, 8, 22),
(42, 4, 9, 27),
(43, 4, 10, 30),
(44, 4, 11, 32),
(45, 5, 1, 1),
(46, 5, 2, 6),
(47, 5, 3, 8),
(48, 5, 4, 10),
(49, 5, 5, 16),
(50, 5, 6, 18),
(51, 5, 7, 20),
(52, 5, 8, 22),
(53, 5, 9, 26),
(54, 5, 10, 29),
(55, 5, 11, 32),
(56, 6, 1, 1),
(57, 6, 2, 5),
(58, 6, 3, 8),
(59, 6, 4, 10),
(60, 6, 5, 16),
(61, 6, 6, 18),
(62, 6, 7, 20),
(63, 6, 8, 22),
(64, 6, 9, 26),
(65, 6, 10, 29),
(66, 6, 11, 32);

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_sub_kriteria` varchar(255) DEFAULT NULL,
  `prioritas` int(11) DEFAULT NULL,
  `bobot` double(18,18) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id`, `id_kriteria`, `nama_sub_kriteria`, `prioritas`, `bobot`, `status`) VALUES
(1, 1, 'Sertifikat Hak Milik (SHM)', 1, 0.611111111111110000, 1),
(2, 1, 'Surat Camat/Girik', 2, 0.277777777777780000, 1),
(3, 1, 'Tidak Ada', 3, 0.111111111111110000, 1),
(4, 2, '0 m - 12 m', 1, 0.520833333333330000, 1),
(5, 2, '12 m - 50 m', 2, 0.270833333333330000, 1),
(6, 2, '50 m - 100 m', 3, 0.145833333333330000, 1),
(7, 2, '> 100 m', 4, 0.062500000000000000, 1),
(8, 3, 'Tidak', 1, 0.750000000000000000, 1),
(9, 3, 'Ya', 2, 0.250000000000000000, 1),
(10, 4, 'Datar (0⁰-5⁰)', 1, 0.520833333333330000, 1),
(11, 4, 'Agak Miring (6⁰-10⁰)', 2, 0.270833333333330000, 1),
(12, 4, 'Miring (11⁰-25⁰)', 3, 0.145833333333330000, 1),
(13, 4, 'Sangat Miring (>25⁰)', 4, 0.062500000000000000, 1),
(14, 5, 'Rp. 50. 000 - Rp. 100.000', 1, 0.520833333333330000, 1),
(15, 5, 'Rp.100.000 - Rp. 150.000', 2, 0.270833333333330000, 1),
(16, 5, 'Rp. 150. 000 - Rp. 200.000', 3, 0.145833333333330000, 1),
(17, 5, '> Rp. 200.000', 4, 0.062500000000000000, 1),
(18, 6, 'Tersedia', 1, 0.750000000000000000, 1),
(19, 6, 'Tidak Tersedia', 2, 0.250000000000000000, 1),
(20, 7, 'Tersedia', 1, 0.750000000000000000, 1),
(21, 7, 'Tidak Tersedia', 2, 0.250000000000000000, 1),
(22, 8, 'Tersedia', 1, 0.750000000000000000, 1),
(23, 8, 'Tidak Tersedia', 2, 0.250000000000000000, 1),
(24, 9, '0 km - 1 km', 1, 0.520833333333330000, 1),
(25, 9, '1 km - 2 km', 2, 0.270833333333330000, 1),
(26, 9, '2 km - 3 km', 3, 0.145833333333330000, 1),
(27, 9, '> 3 km', 4, 0.062500000000000000, 1),
(28, 10, '20.000 - 40.000', 1, 0.611111111111110000, 1),
(29, 10, '10.000 - 20.000', 2, 0.277777777777780000, 1),
(30, 10, '5.000 - 10.000', 3, 0.111111111111110000, 1),
(31, 11, '< 1 Tahun', 1, 0.611111111111110000, 1),
(32, 11, '1 Tahun', 2, 0.277777777777780000, 1),
(33, 11, '> 1 Tahun', 3, 0.111111111111110000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(30) DEFAULT NULL,
  `jenis_kelamin` tinyint(4) DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gambar`, `alamat`, `no_hp`, `jenis_kelamin`, `role_id`, `status`) VALUES
(1, 'Administrators', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '61060ffdaae6c.jpg', 'Jakarta Barat', '082183599197', 1, 0, 1),
(4, 'User', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', NULL, NULL, NULL, NULL, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_alternatif_ibfk_1` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_sub_kriteria` (`id_sub_kriteria`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  ADD CONSTRAINT `nilai_alternatif_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_alternatif_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id`),
  ADD CONSTRAINT `nilai_alternatif_ibfk_3` FOREIGN KEY (`id_sub_kriteria`) REFERENCES `sub_kriteria` (`id`);

--
-- Constraints for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD CONSTRAINT `sub_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
