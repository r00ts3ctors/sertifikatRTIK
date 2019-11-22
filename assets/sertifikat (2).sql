-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2019 at 03:11 PM
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
(1, 23, 3, 'KOQCN6', 0, '');

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
(1, 'Festik 2019', 'Seminar Nasioinal', 'LITERASI DIGITAL & PERKEMBANGAN', 'UMKM INDONESIA', '', 'Sabtu / 23 November 2019', '09:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 500, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(2, 'Festik 2019', 'Seminar Nasioinal', 'PARIWISATA DALAM TRANSFORMASI DIGITAL', '', '', 'Sabtu / 23 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 500, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(3, 'Festik 2019', 'WORKSHOP', 'PANDU DIGITAL DALAM MENDAMPINGI UMKM', '', '', 'Sabtu / 23 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(4, 'Festik 2019', 'WORKSHOP', 'DIGITAL CONTENT MENGENAL HOAKS & FACT CHECKING', '', '', 'Sabtu / 23 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(5, 'Festik 2019', 'WORKSHOP', 'MEMAHAMI CARA KERJA INTERNET JALAN BARU MENUJU SURGA', '', '', 'Sabtu / 23 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(6, 'Festik 2019', 'WORKSHOP', 'DIGITAL EKONOMI: PANDUAN PEMBERDAYAAN UMKM ', 'EKONOMI GREBEK PASAR', '', 'Sabtu / 23 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(7, 'Festik 2019', 'WORKSHOP', 'SMART CITY, SMART PEOPLE', '', '', 'Sabtu / 23 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(8, 'Festik 2019', 'WORKSHOP', 'MEMBUMIKAN DOMAIN .ID', '', '', 'Sabtu / 23 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(9, 'Festik 2019', 'WORKSHOP', 'KIAT MEMBUAT VIDEO GRAFIS KEREN', '', '', 'Sabtu / 23 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(10, 'Festik 2019', 'WORKSHOP', 'Internet of Things (IoT)', '', '', 'Minggu / 24 November 2019', '08:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(11, 'Festik 2019', 'WORKSHOP', 'NAVIGASI DIGITAL MADE: SKENARIO DIGITALISASI UMKM', '', '', 'Minggu / 24 November 2019', '08:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(12, 'Festik 2019', 'WORKSHOP', 'PARIWISATA DIGITAL', '', '', 'Minggu / 24 November 2019', '08:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(13, 'Festik 2019', 'WORKSHOP', 'DIGITAL PAYMENT', '', '', 'Minggu / 24 November 2019', '08:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(14, 'Festik 2019', 'WORKSHOP', 'PENGENALAN DAN IMPLEMENTASI RESTFUL API', '', '', 'Minggu / 24 November 2019', '08:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(15, 'Festik 2019', 'WORKSHOP', 'INFOGRAFIS MANIS PARIWISATA LARIS', '', '', 'Minggu / 24 November 2019', '08:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(16, 'Festik 2019', 'WORKSHOP', 'SISTEM INFORMASI PILKADES', '', '', 'Minggu / 24 November 2019', '10:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(17, 'Festik 2019', 'WORKSHOP', 'MEMBANGUN DESA DIGITAL', '', '', 'Minggu / 24 November 2019', '10:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(18, 'Festik 2019', 'WORKSHOP', 'PENULISAN ARTIKEL & FEATURE', '', '', 'Minggu / 24 November 2019', '10:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(19, 'Festik 2019', 'WORKSHOP', 'INTERNET SEHAT', '', '', 'Minggu / 24 November 2019', '10:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(20, 'Festik 2019', 'WORKSHOP', 'KEBEBASAN EKSPRESI ONLINE DI PLATFORM DIGITAL', '', '', 'Minggu / 24 November 2019', '10:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(21, 'Festik 2019', 'WORKSHOP', 'TATA KELOLA DESA', '', '', 'Minggu / 24 November 2019', '10:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(22, 'Festik 2019', 'WORKSHOP', 'DESA WISATA', '', '', 'Minggu / 24 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(23, 'Festik 2019', 'WORKSHOP', 'ART OF HACKING', '', '', 'Minggu / 24 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 49, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(24, 'Festik 2019', 'WORKSHOP', 'KONSEP & IMPLEMENTASI REGOS', '', '', 'Minggu / 24 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(25, 'Festik 2019', 'WORKSHOP', 'TECHNOPRENEURSHIP', '', '', 'Minggu / 24 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', ''),
(26, 'Festik 2019', 'WORKSHOP', 'JURNALISTIK ASYIK', '', '', 'Minggu / 24 November 2019', '13:00 WIB', 'Bangka Belitung', 'STMIK Atma Luhur Pangkalpinang', 1, 50, 'Jl. Jendral Sudirman, Kel. Selindung Baru, Kec. Pangkal Balam, Pangkal Pinang, Kepulauan Bangka Belitung', '0817711511', '', '', '', '');

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
(1, 'Nama Peserta Yang Panjang demo', 'emi@kdl.com', 'user', 'Adas', '', '', '', 1572674961, 'default.jpeg', '$2y$10$lFwCwwQBxPxdU3eOelFxvu5Wxjdlko0xUKZC8kooTzaza1hj8C4Xa', 1),
(2, 'Panitia', 'email@gmail.com', 'operator', 'Babel', '', '', '', 1572643791, 'default.jpeg', '$2y$10$SNOpans5hlJtbuQQZyMyGetlm8uoH6HYcvwsQhPYARSKBFhutEdAy', 2),
(3, 'Fakrullah maulana', 'atjehcyber@gmail.com', '082161677331', 'Aceh', '', '', '', 1573392255, 'default.jpeg', '$2y$10$.UcGhsTIqstZ2ETjX90jXuq56/yXaBIotp20RfHIfNav.TJWOxt9a', 1);

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
  MODIFY `idAktivitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `idKegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_peserta`
--
ALTER TABLE `tbl_peserta`
  MODIFY `idPeserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
