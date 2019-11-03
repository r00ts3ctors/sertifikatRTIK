-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 03, 2019 at 05:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aktivaitas`
--

CREATE TABLE `tbl_aktivaitas` (
  `idAktivitas` int(11) NOT NULL,
  `idKegiatan` int(11) NOT NULL,
  `idPeserta` int(11) NOT NULL,
  `noSertifikat` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `linkSertifkat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aktivaitas`
--

INSERT INTO `tbl_aktivaitas` (`idAktivitas`, `idKegiatan`, `idPeserta`, `noSertifikat`, `status`, `linkSertifkat`) VALUES
(10, 2, 9, 'JD3BPL', 0, ''),
(11, 1, 9, 'X4WZ7J', 0, ''),
(12, 3, 9, 'FUZY8D', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `idKegiatan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `katagori` varchar(50) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `tema1` varchar(60) NOT NULL,
  `tema2` varchar(60) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `status_kegiatan` int(11) NOT NULL COMMENT '1=Aktif 0= UnAktif',
  `kapasistas_peserta` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `tw` varchar(50) NOT NULL,
  `ig` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`idKegiatan`, `nama`, `katagori`, `tema`, `tema1`, `tema2`, `tanggal`, `jam`, `wilayah`, `tempat`, `status_kegiatan`, `kapasistas_peserta`, `alamat`, `kontak`, `poster`, `fb`, `tw`, `ig`) VALUES
(1, 'Festik 2019', 'Workshop', 'LITERASI DIGITAL & PERKEMBANGAN', 'UMKM INDONESIA', '', 'Sabtu / 23 November 2019', '09:00:00 WIB', 'Pangkal Pinang', 'Pangkal Pinang', 1, 1, 'Alamat Lengkap Tempat Kegiatan Berlangsung', '082161677331', '-', '-', '-', '-'),
(2, 'Festik 2012', 'SEMINAR', 'LITERASI DIGITAL & PERKEMBANGAN\r\n', 'UMKM INDONESIA', '', 'Sabtu / 23 November 2019', '09:00:00 WIB', 'Pangkal Pinang', 'Pangkal Pinang', 1, 500, 'Alamat Lengkap Tempat Kegiatan Berlangsung', '082161677331', '-', '-', '-', '-'),
(3, 'Festik 2019', 'WORKSHOP', 'PENGGUNAAN LINUX SEBAGAI', 'MEDIA PEMBELAJARAN INTERAKTIF', 'DI RUANG KELAS BAGI SISWA', 'KAMIS / 23 November 2019', '09:00:00 WIB', 'JAKARTA', 'JAKARTA', 1, 500, 'Alamat Lengkap Tempat Kegiatan Berlangsung', '082161677331', '-', '-', '-', '-'),
(4, 'Festik 2019', 'WORKSHOP', 'untuk hidup', 'menjadi lebih baik dan dinamis', 'perjuanan untuk makan', 'Jumat / 23 November 2019', '09:00:00 WIB', 'Surabaya', 'JAKARTA', 1, 500, 'Alamat Lengkap Tempat Kegiatan Berlangsung', '082161677331', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peserta`
--

CREATE TABLE `tbl_peserta` (
  `idPeserta` int(11) NOT NULL,
  `namaPeserta` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` text NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `tgldaftar` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'default.jpeg',
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peserta`
--

INSERT INTO `tbl_peserta` (`idPeserta`, `namaPeserta`, `email`, `telepon`, `wilayah`, `fb`, `tw`, `ig`, `tgldaftar`, `foto`, `password`, `level`) VALUES
(7, 'fakrullah Maulana', 'email@gmail.com', 'operator', 'aceh', '', '', '', 1572643791, 'default.jpeg', '$2y$10$SNOpans5hlJtbuQQZyMyGetlm8uoH6HYcvwsQhPYARSKBFhutEdAy', 2),
(8, 'Fakrullah maulana', 'emailku@gmaill.com', '00', 'Aceh', '', '', '', 1572674880, 'default.jpeg', '$2y$10$t0x9uu.U6qwJQJG9JzwsvebMj5m0upfEcBhP3gTNsirG8Mr0HuwDi', 1),
(9, 'Nama Peserta Yang Panjang', 'emi@kdl.com', 'user', 'Adas', '', '', '', 1572674961, 'default.jpeg', '$2y$10$lFwCwwQBxPxdU3eOelFxvu5Wxjdlko0xUKZC8kooTzaza1hj8C4Xa', 1),
(10, 'Ganteng', 'wqe@dkk.com', '6666', 'Ajak', '', '', '', 1572769784, 'default.jpeg', '$2y$10$VpgtQSTNrJ19CcjAytRhTO/72cAFLbsnwr3VmvUVP7omNtiI0LhGG', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aktivaitas`
--
ALTER TABLE `tbl_aktivaitas`
  ADD PRIMARY KEY (`idAktivitas`);

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`idKegiatan`);

--
-- Indexes for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  ADD PRIMARY KEY (`idPeserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aktivaitas`
--
ALTER TABLE `tbl_aktivaitas`
  MODIFY `idAktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `idKegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `idPeserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
