-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 10:20 AM
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
(4, 1, 'November', 80, 80, 80, 80, 80, 80, 90, 90, 82.5),
(8, 2, 'November', 80, 70, 60, 50, 40, 30, 20, 10, 45),
(9, 1, 'December', 90, 90, 90, 90, 90, 90, 90, 90, 90),
(10, 1, 'January', 40, 40, 40, 40, 40, 40, 40, 40, 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mapelrpl`
--
ALTER TABLE `tbl_mapelrpl`
  ADD PRIMARY KEY (`id_mapelrpl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mapelrpl`
--
ALTER TABLE `tbl_mapelrpl`
  MODIFY `id_mapelrpl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
