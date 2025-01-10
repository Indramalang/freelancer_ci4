-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310:3310
-- Generation Time: Jan 10, 2025 at 03:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4_freelancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kontak_pesan`
--

CREATE TABLE `data_kontak_pesan` (
  `no` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `delete_data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kontak_pesan`
--

INSERT INTO `data_kontak_pesan` (`no`, `nama`, `email`, `nomor_telp`, `pesan`, `delete_data`) VALUES
(4, 'Kurniawan Indra Jaya', 'kurniawanindrajaya12317@outlook.com', '082131361547', 'Uji Coba', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_profil`
--

CREATE TABLE `data_profil` (
  `no` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `delete_data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_profil`
--

INSERT INTO `data_profil` (`no`, `nama`, `data`, `delete_data`) VALUES
(1, 'data_nama', 'Kurniawan Indra Jaya', 0),
(2, 'keterangan_nama', 'Computer Science Enthusiast', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kontak_pesan`
--
ALTER TABLE `data_kontak_pesan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `data_profil`
--
ALTER TABLE `data_profil`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kontak_pesan`
--
ALTER TABLE `data_kontak_pesan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_profil`
--
ALTER TABLE `data_profil`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
