-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 05:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_login`
--

CREATE TABLE `info_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_login`
--

INSERT INTO `info_login` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'achmatin', ''),
(2, 'admin', 'achmati', ''),
(3, 'admin', 'achmatin', '');

-- --------------------------------------------------------

--
-- Table structure for table `info_pengguna`
--

CREATE TABLE `info_pengguna` (
  `nik` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `usia` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idtempat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info_place`
--

CREATE TABLE `info_place` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `opentime` time NOT NULL,
  `ringkasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_place`
--

INSERT INTO `info_place` (`id`, `no`, `nama`, `alamat`, `opentime`, `ringkasan`) VALUES
(1, 1, 'admin', 'Jl.Bandung Selatan', '19:00:00', 'Musieum Konferensi Asia Afrika) merupakan salah satu museum yang berada di kota Bandung yang terletak di Jalan Asia Afrika No. 65.');

-- --------------------------------------------------------

--
-- Table structure for table `info_tiket`
--

CREATE TABLE `info_tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_place` int(11) NOT NULL,
  `jenis_tiket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `info_transaksi`
--

CREATE TABLE `info_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tgl_pesan` date DEFAULT NULL,
  `jumlah_bayar` varchar(50) NOT NULL,
  `jenis_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_login`
--
ALTER TABLE `info_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_pengguna`
--
ALTER TABLE `info_pengguna`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id` (`id`),
  ADD KEY `idtempat` (`idtempat`);

--
-- Indexes for table `info_place`
--
ALTER TABLE `info_place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_tiket`
--
ALTER TABLE `info_tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_place` (`id_place`);

--
-- Indexes for table `info_transaksi`
--
ALTER TABLE `info_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_tiket` (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_login`
--
ALTER TABLE `info_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info_pengguna`
--
ALTER TABLE `info_pengguna`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_place`
--
ALTER TABLE `info_place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info_pengguna`
--
ALTER TABLE `info_pengguna`
  ADD CONSTRAINT `info_pengguna_ibfk_1` FOREIGN KEY (`id`) REFERENCES `info_login` (`id`),
  ADD CONSTRAINT `info_pengguna_ibfk_2` FOREIGN KEY (`idtempat`) REFERENCES `info_place` (`id`);

--
-- Constraints for table `info_tiket`
--
ALTER TABLE `info_tiket`
  ADD CONSTRAINT `info_tiket_ibfk_1` FOREIGN KEY (`id_place`) REFERENCES `info_place` (`id`);

--
-- Constraints for table `info_transaksi`
--
ALTER TABLE `info_transaksi`
  ADD CONSTRAINT `info_transaksi_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `info_pengguna` (`id`),
  ADD CONSTRAINT `info_transaksi_ibfk_2` FOREIGN KEY (`id_tiket`) REFERENCES `info_tiket` (`id_tiket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
