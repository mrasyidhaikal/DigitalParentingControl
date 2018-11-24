-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 04:50 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `sakit` int(1) NOT NULL,
  `izin` int(1) NOT NULL,
  `alfa` int(1) NOT NULL,
  `hadir` int(1) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absen`, `tanggal`, `kelas`, `nama`, `sakit`, `izin`, `alfa`, `hadir`, `keterangan`) VALUES
(61, '2018-11-24', 'XII RPL 1', 'Steven Salim', 1, 0, 0, 0, ''),
(62, '2018-11-24', 'XII RPL 1', 'Haikal', 0, 1, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(100) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `id_user`, `judul`, `file`, `isi`, `tanggal`) VALUES
(33, '10', 'Hari Pahlawan', 'file/5beff879f089e.pdf', 'Diharapkan Seluruh Siswa Siswi SMK MHS menggunakan baju Batik', '2018-11-17 12:16:09'),
(34, '10', 'Rapat Orang Tua Sosialisasi Tata Tertib', 'file/5bf0f90083a8d.pdf', 'Diharpkan Kepada Orang Tua Siswa Hadir di rapat pada tanggal 19 November\r\n', '2018-11-18 06:30:40'),
(35, '10', 'Hari Guru', 'file/5bf0f97d60262.pdf', 'Dibertahukan Kepada Seluruh Siswa SMK MHS menggunakan Baju Batik Di Hari Senin', '2018-11-18 06:32:45'),
(36, '10', 'Peringatan Berdiri nya SMK MHS', 'file/5bf0fae43bc5e.pdf', 'Diharapkan Untuk Siswa Siswi SMK MHS menggunakan Alamamater Lengkap', '2018-11-18 06:38:44'),
(63, '10', 'Rapat Orang Tua Sosialisasi ', '../file/5bf105d5ea631.pdf', 'Diharpkan Orang tua hadir tangal   18 november', '2018-11-18 07:25:25'),
(65, '1', 'judul', '../file/5bf92c4ca2f47.pdf', 'isi                      ', '2018-11-24 11:47:40'),
(66, '1', 'judul', '../file/5bf92f1cf0e42.pdf', 'isi                      ', '2018-11-24 11:59:40'),
(67, '1', 'judul', '../file/5bf9338aa1cad.pdf', 'isi                      ', '2018-11-24 12:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapelrpl`
--

CREATE TABLE `tbl_mapelrpl` (
  `id_mapelrpl` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `bindo` double NOT NULL,
  `binggris` double NOT NULL,
  `matematika` double NOT NULL,
  `sejarah` double NOT NULL,
  `pkn` double NOT NULL,
  `fisika` double NOT NULL,
  `pbo` double NOT NULL,
  `basisdata` double NOT NULL,
  `avg` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mapelrpl`
--

INSERT INTO `tbl_mapelrpl` (`id_mapelrpl`, `id_siswa`, `tanggal`, `bindo`, `binggris`, `matematika`, `sejarah`, `pkn`, `fisika`, `pbo`, `basisdata`, `avg`) VALUES
(38, 1, 'November-19', 90, 90, 90, 90, 90, 90, 90, 90, 90),
(39, 1, 'November-18', 80, 80, 80, 80, 80, 80, 80, 80, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_raport`
--

CREATE TABLE `tbl_raport` (
  `id_raport` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `bindo` double NOT NULL,
  `binggris` double NOT NULL,
  `matematika` double NOT NULL,
  `sejarah` double NOT NULL,
  `pkn` double NOT NULL,
  `fisika` double NOT NULL,
  `pbo` double NOT NULL,
  `basisdata` double NOT NULL,
  `avg` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_raport`
--

INSERT INTO `tbl_raport` (`id_raport`, `id_siswa`, `semester`, `bindo`, `binggris`, `matematika`, `sejarah`, `pkn`, `fisika`, `pbo`, `basisdata`, `avg`) VALUES
(2, 1, 'semester1', 20, 20, 20, 20, 20, 20, 20, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `id_user`, `nama_siswa`, `kelas`) VALUES
(1, '2', 'Steven Salim', 'XII RPL 1'),
(2, '3', 'Haikal', 'XII RPL 1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('guru','parent','admin') NOT NULL,
  `foto` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username`, `password`, `level`, `foto`, `email`, `nohp`) VALUES
(1, '', 'arka', '123', 'guru', '../parent/foto/5befde8ba1bfd.jpg', 'koko.irfan123@gmail.com', '08213123'),
(2, '', 'demy', '123', 'parent', '../parent/foto/5befdfcb054e8.jpg', 'koko.irfan123@gmail.com', '324234'),
(3, 'parent', 'parent', '123', 'parent', '', 'HaikalBisma@gmail.com', '012312'),
(4, 'admin', 'admin', 'admin', 'admin', '', 'stevenlim2306@gmail.com', '546456'),
(10, '', 'haikal', '123', 'guru', '../parent/foto/5beff7f7372da.jpg', '1232dsf@asd', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_mapelrpl`
--
ALTER TABLE `tbl_mapelrpl`
  ADD PRIMARY KEY (`id_mapelrpl`);

--
-- Indexes for table `tbl_raport`
--
ALTER TABLE `tbl_raport`
  ADD PRIMARY KEY (`id_raport`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_mapelrpl`
--
ALTER TABLE `tbl_mapelrpl`
  MODIFY `id_mapelrpl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_raport`
--
ALTER TABLE `tbl_raport`
  MODIFY `id_raport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_raport`
--
ALTER TABLE `tbl_raport`
  ADD CONSTRAINT `tbl_raport_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
