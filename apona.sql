-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 08:15 PM
-- Server version: 10.4.8-MariaDB
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
-- Database: `apona`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `ID_Obat` int(11) NOT NULL,
  `Nama_Obat` varchar(50) NOT NULL,
  `Keterangan_Obat` varchar(255) NOT NULL,
  `Harga_Obat` varchar(11) NOT NULL,
  `Deskripsi_Obat` varchar(255) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(20) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`ID_Obat`, `Nama_Obat`, `Keterangan_Obat`, `Harga_Obat`, `Deskripsi_Obat`, `nama_file`, `ukuran_file`, `tipe_file`, `stock`) VALUES
(1, 'aa', 'ewewwe', '121212', '                asaasas              ', '', 0, '', 121212);

-- --------------------------------------------------------

--
-- Table structure for table `obat_resep`
--

CREATE TABLE `obat_resep` (
  `Foto_Resep` blob NOT NULL,
  `Deskripsi_Resep` varchar(255) NOT NULL,
  `ID_Resep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ID_Obat` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Total_Harga` int(11) NOT NULL,
  `Metode_Pembayaran` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `username`, `ID_Obat`, `Jumlah`, `Total_Harga`, `Metode_Pembayaran`, `Status`) VALUES
(4, 'laz', 33, 9, 8028, 'Online', 'Belum Dibayar'),
(5, 'laz', 23131, 4, 492, 'Offline', 'Belum Dibayar'),
(24, 'laz', 2147483647, 8, 9849848, 'Online', 'Belum Dibayar'),
(25, 'laz', 2147483647, 8, 9849848, 'Online', 'Belum Dibayar'),
(26, 'laz', 2147483647, 8, 9849848, 'Online', 'Belum Dibayar'),
(27, 'laz', 2147483647, 8, 9849848, 'Online', 'Belum Dibayar'),
(28, 'laz', 2147483647, 8, 9849848, 'Online', 'Belum Dibayar'),
(29, 'laz', 2147483647, 8, 9849848, 'Online', 'Belum Dibayar'),
(30, 'laz', 1, 1, 1234, 'Offline', 'Belum Dibayar'),
(31, 'laz', 1, 1, 1234, 'Offline', 'Belum Dibayar'),
(32, 'laz', 1, 12, 14808, 'Online', 'Belum Dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `namaUser` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noHP` int(11) NOT NULL,
  `passwod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `namaUser`, `email`, `noHP`, `passwod`) VALUES
('admin', 'Admin Ganteng', 'adminganteng@gmail.com', 812121212, 'admin123'),
('balon', 'balon', 'balon@gmail.com', 8121212, 'balon'),
('laz', 'laz', 'laz@gmail.com', 81212121, 'laz123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`ID_Obat`);

--
-- Indexes for table `obat_resep`
--
ALTER TABLE `obat_resep`
  ADD PRIMARY KEY (`ID_Resep`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`),
  ADD KEY `FK_Transaksi1` (`ID_Obat`),
  ADD KEY `FK_Transaksi2` (`username`(191));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
