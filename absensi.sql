-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 08:51 AM
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
(1, '2018-11-15', '12RPL1', 'steven', 1, 0, 0, 0, 'asdasd'),
(2, '2018-11-14', '12RPL1', 'bhisma', 1, 0, 0, 0, 'asgsdaga'),
(3, '2018-11-15', '12RPL1', 'Rasyid', 1, 0, 0, 0, 'asgsdaga'),
(4, '2018-11-15', '12RPL1', 'bhisma', 1, 0, 0, 0, 'blablablablabla'),
(5, '2018-11-14', '12RPL1', 'Rasyid', 1, 0, 0, 0, 'blablablablabla'),
(6, '2018-11-14', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(7, '2018-11-13', '12RPL1', 'bhisma', 1, 0, 0, 0, 'blablablablabla'),
(8, '2018-11-13', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(9, '2018-11-13', '12RPL1', 'Rasyid', 1, 0, 0, 0, 'blablablablabla'),
(10, '2018-11-12', '12RPL1', 'bhisma', 1, 0, 0, 0, 'blablablablabla'),
(11, '2018-11-12', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(12, '2018-11-12', '12RPL1', 'Rasyid', 1, 0, 0, 0, 'blablablablabla'),
(13, '2018-11-11', '12RPL1', 'bhisma', 1, 0, 0, 0, 'blablablablabla'),
(14, '2018-11-11', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(15, '2018-11-11', '12RPL1', 'Rasyid', 1, 0, 0, 0, 'blablablablabla'),
(16, '2018-11-10', '12RPL1', 'bhisma', 1, 0, 0, 0, 'blablablablabla'),
(17, '2018-11-10', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(18, '2018-11-10', '12RPL1', 'Rasyid', 1, 0, 0, 0, 'blablablablabla'),
(23, '2018-11-9', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(24, '2018-11-8', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(25, '2018-11-7', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(26, '2018-11-6', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(27, '2018-11-5', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(28, '2018-11-4', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(29, '2018-11-3', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(30, '2018-11-2', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(35, '2018-11-1', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(41, '2018-11-16', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(42, '2018-11-17', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(43, '2018-11-18', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(44, '2018-11-19', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(45, '2018-11-20', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla'),
(46, '2018-11-21', '12RPL1', 'steven', 1, 0, 0, 0, 'blablablablabla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
