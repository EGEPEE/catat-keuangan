-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 20, 2017 at 01:47 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperhitungan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebutuhan`
--

CREATE TABLE `tb_kebutuhan` (
  `id_user` int(11) NOT NULL,
  `id_kebutuhan` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kebutuhan`
--

INSERT INTO `tb_kebutuhan` (`id_user`, `id_kebutuhan`, `catatan`, `tanggal`) VALUES
(2, 6, 'sf', '2017-05-23'),
(2, 9, 'ver', '2017-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_user` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `jenis` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jumlah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_user`, `id_transaksi`, `jenis`, `tanggal`, `keterangan`, `jumlah`) VALUES
(2, 4, 'Pemasukan', '2017-05-09', 'wdw', '2000'),
(2, 5, 'Pengeluaran', '2017-05-06', 'rg55', '40003'),
(2, 6, 'Pemasukan', '2017-05-02', 'j3hrio3', '900000'),
(2, 7, 'Pengeluaran', '2017-05-19', 'priuib', '900000'),
(2, 8, 'Pengeluaran', '2017-07-04', 'wr3r', '3000'),
(2, 9, 'Pemasukan', '2017-05-07', 'rg4w', '70000'),
(2, 10, 'Pengeluaran', '2017-05-08', 'e4t4', '70000'),
(2, 11, 'Pemasukan', '2017-01-17', 'eg4', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`) VALUES
(2, 'ega ', 'test@yahoo.com', '12345'),
(3, 'test', 'test@yahoo.com', '12345'),
(4, 'blabla', 'zzz@yahoo.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kebutuhan`
--
ALTER TABLE `tb_kebutuhan`
  ADD PRIMARY KEY (`id_kebutuhan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kebutuhan`
--
ALTER TABLE `tb_kebutuhan`
  MODIFY `id_kebutuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kebutuhan`
--
ALTER TABLE `tb_kebutuhan`
  ADD CONSTRAINT `tb_kebutuhan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_kebutuhan` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
