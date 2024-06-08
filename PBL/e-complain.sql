-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 11:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-complain`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id_complain` int(100) NOT NULL,
  `nim` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `pengaduan` text NOT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lampiran_admin` text NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `tgl_proses` datetime NOT NULL,
  `angka_random` varchar(100) NOT NULL,
  `deskripsi_penanganan` text NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id_complain`, `nim`, `nama`, `nama_admin`, `tujuan`, `jenis`, `status`, `pengaduan`, `gambar`, `lampiran_admin`, `tanggal`, `tgl_proses`, `angka_random`, `deskripsi_penanganan`, `pekerjaan`) VALUES
(9, '223140707111015', 'Mochamad Febri', 'Admin Departemen Industri Kreatif dan Digital', 'Departemen Industri Kreatif Dan Digital', 'Pembayaran & Keuangan', 'Proses', 'awdasd', '-', '-', '2023-11-05 10:40:30', '2023-12-05 10:41:13', 'PKKD001', 'awdasd', 'Mahasiswa'),
(10, '223140707111015', 'Mochamad Febri', '', 'Departemen Bisnis dan Hospitality', 'Pembayaran & Keuangan', 'Masuk', 'awdasd', '-', '', '2023-11-05 10:40:36', '0000-00-00 00:00:00', 'PKH010', '', 'Mahasiswa'),
(11, '223140707111015', 'Mochamad Febri', 'Admin Departemen Industri Kreatif dan Digital', 'Departemen Industri Kreatif Dan Digital', 'Kurikulum & Pengajaran', 'Selesai', 'awdasd', '-', '-', '2023-11-05 10:40:44', '2023-12-05 10:41:00', 'KPKD011', 'asdawdasdawasdaw', 'Mahasiswa'),
(12, '223140707111015', 'Mochamad Febri', '', 'Departemen Bisnis dan Hospitality', 'Pembayaran & Keuangan', 'Masuk', 'awdasda', '-', '', '2023-11-06 14:16:44', '0000-00-00 00:00:00', 'PKH012', '', 'Mahasiswa'),
(13, '223140707111015', 'Mochamad Febri', '', 'Departemen Industri Kreatif Dan Digital', 'Pembayaran & Keuangan', 'Masuk', 'awdasd', '-', '', '2023-11-06 14:16:49', '0000-00-00 00:00:00', 'PKKD013', '', 'Mahasiswa'),
(14, '223140707111015', 'Mochamad Febri', '', 'Departemen Bisnis dan Hospitality', 'Kurikulum & Pengajaran', 'Masuk', 'awdasd', '-', '', '2023-11-06 14:16:55', '0000-00-00 00:00:00', 'KPH014', '', 'Mahasiswa'),
(15, '223140707111015', 'Mochamad Febri', '', 'Departemen Industri Kreatif Dan Digital', 'Pembayaran & Keuangan', 'Masuk', 'asdaw', '-', '', '2023-12-06 14:42:43', '0000-00-00 00:00:00', 'PKKD015', '', 'Mahasiswa'),
(16, '223140707111015', 'Mochamad Febri', '', 'Departemen Industri Kreatif Dan Digital', 'Masalah Akademik', 'Masuk', 'awdas', '-', '', '2023-12-06 14:42:49', '0000-00-00 00:00:00', 'MAKD016', '', 'Mahasiswa'),
(17, '223140707111015', 'Mochamad Febri', '', 'Departemen Industri Kreatif Dan Digital', 'Masalah Akademik', 'Masuk', 'awdas', '-', '', '2023-11-06 14:42:54', '0000-00-00 00:00:00', 'MAKD017', '', 'Mahasiswa'),
(18, '223140707111015', 'Mochamad Febri', '', 'Departemen Industri Kreatif Dan Digital', 'Kurikulum & Pengajaran', 'Masuk', 'awdas', '-', '', '2023-11-06 14:43:00', '0000-00-00 00:00:00', 'KPKD018', '', 'Mahasiswa'),
(19, '223140707111015', 'Mochamad Febri', '', 'Departemen Bisnis dan Hospitality', 'Masalah Akademik', 'Masuk', 'awdasd', '-', '', '2023-11-06 14:44:31', '0000-00-00 00:00:00', 'MAH019', '', 'Mahasiswa'),
(20, '223140707111015', 'Mochamad Febri', '', 'Departemen Bisnis dan Hospitality', 'Masalah Akademik', 'Masuk', 'wadas', '-', '', '2023-12-06 14:44:37', '0000-00-00 00:00:00', 'MAH020', '', 'Mahasiswa'),
(21, '223140707111015', 'Mochamad Febri', '', 'Departemen Bisnis dan Hospitality', 'Kurikulum & Pengajaran', 'Masuk', 'awd', '-', '', '2023-12-06 14:44:44', '0000-00-00 00:00:00', 'KPH021', '', 'Mahasiswa'),
(22, '223140707111015', 'Mochamad Febri', 'Admin Departemen Bisnis dan Hospitality', 'Departemen Bisnis dan Hospitality', 'Fasilitas & Lingkungan', 'Selesai', 'awdasd', '-', '-', '2023-12-06 14:46:09', '2023-12-08 17:46:20', 'FLH022', 'awdasdawd', 'Mahasiswa'),
(24, '223140707111015', 'Mochamad Febri', '', 'Departemen Industri Kreatif Dan Digital', 'Kurikulum & Pengajaran', 'Masuk', 'awdasd', '06122023235056ub.png', '', '2023-12-06 23:50:56', '0000-00-00 00:00:00', 'KPKD023', '', 'Mahasiswa'),
(25, '223140707111015', 'Mochamad Febri', '', 'Departemen Industri Kreatif Dan Digital', 'Pembayaran & Keuangan', 'Masuk', 'awdas', '-', '', '2023-12-08 17:45:11', '0000-00-00 00:00:00', 'PKKD025', '', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nim` bigint(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `departemen` varchar(100) DEFAULT NULL,
  `prodi` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `level` varchar(30) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `nim`, `email`, `password`, `departemen`, `prodi`, `status`, `level`, `foto`) VALUES
(3, 'Admin Departemen Bisnis dan Hospitality', 123141231, 'DBH@admin.ub.ac.id', 'admin1', 'Departemen Bisnis dan Hospitality', NULL, '', 'admin1', 'ub.png'),
(4, 'Admin Departemen Industri Kreatif dan Digital', 987654321, 'DIKD@admin.ub.ac.id', 'admin2', 'Departemen Industri Kreatif dan Digital', NULL, '', 'admin2', NULL),
(6, 'PSIK', 19481921012, 'PSIK@superadmin.ub.ac.id', 'superadmin', NULL, NULL, '', 'super admin', 'ub.png'),
(18, 'Mochamad Febri', 223140707111015, 'mochfebri123@student.ub.ac.id', 'febri', 'Industri Kreatif dan Digital', 'Teknologi Informasi', 'Mahasiswa', 'user', 'febri.jpg'),
(19, '', 223140707111092, 'izza@student.ub.ac.id', 'izzha', NULL, NULL, '', 'user', '24112023174654azizi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id_complain`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id_complain` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
