-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 04:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiga`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `unit` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `unit`) VALUES
(1, 'Semen', '1 Karung'),
(2, 'Paku', '1 Kg'),
(5, 'Kayu', '1 Batang'),
(6, 'Batu', '1 Karung'),
(8, 'Pasir', '1 Karung');

-- --------------------------------------------------------

--
-- Table structure for table `barang_toko`
--

CREATE TABLE `barang_toko` (
  `id_barangToko` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_toko`
--

INSERT INTO `barang_toko` (`id_barangToko`, `id_toko`, `id_barang`) VALUES
(10, 1, 1),
(1, 1, 2),
(8, 1, 5),
(4, 3, 2),
(11, 3, 8),
(7, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `no_hp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat`, `no_hp`) VALUES
(1, 'Jaya Abadi', 'Pasar lama', '08105682382'),
(3, 'Bumi', 'Sungai andai', '081354968523'),
(5, 'Dini', 'kebun sayur', '083150866152'),
(8, 'Nida', 's.parman', '081354968523');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barangToko` int(11) DEFAULT NULL,
  `harga` decimal(10,0) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barangToko`, `harga`, `tgl`) VALUES
(2, 1, '18000', '2023-12-16'),
(3, NULL, '15000', '2023-12-16'),
(9, 4, '80000', '2023-12-16'),
(10, NULL, '120000', '2023-12-16'),
(11, 7, '150000', '2023-12-16'),
(13, 7, '120000', '2023-12-17'),
(16, 8, '15000', '2023-12-17'),
(17, 7, '15000', '2023-12-18'),
(18, NULL, '150000', '2023-12-18'),
(19, 1, '12000', '2023-12-19'),
(22, NULL, '12000', '2023-12-20'),
(23, 1, '12000', '2023-12-21'),
(24, 10, '45000', '2023-12-21'),
(25, 7, '50000', '2023-12-21'),
(26, NULL, '56000', '2023-12-21'),
(27, 1, '52000', '2023-12-26'),
(28, 10, '120000', '2023-12-27'),
(29, 1, '150000', '2023-12-27'),
(30, NULL, '50000', '2023-12-27'),
(31, 7, '100000', '2023-12-27'),
(32, 1, '50000', '2023-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` char(12) NOT NULL,
  `password` char(12) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`) VALUES
('superadmin1', 'superadmin1', 'superadmin'),
('admin1', 'admin1', 'admin'),
('spkbp1', 'kalsel2023', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_toko`
--
ALTER TABLE `barang_toko`
  ADD PRIMARY KEY (`id_barangToko`),
  ADD KEY `id_toko` (`id_toko`,`id_barang`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_barangToko` (`id_barangToko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `barang_toko`
--
ALTER TABLE `barang_toko`
  MODIFY `id_barangToko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_toko`
--
ALTER TABLE `barang_toko`
  ADD CONSTRAINT `barang_toko_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `barang_toko_ibfk_2` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id_toko`),
  ADD CONSTRAINT `fk_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_toko` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id_toko`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_barang_toko` FOREIGN KEY (`id_barangToko`) REFERENCES `barang_toko` (`id_barangToko`) ON DELETE SET NULL,
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_barangToko`) REFERENCES `barang_toko` (`id_barangToko`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
