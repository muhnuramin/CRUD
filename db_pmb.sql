-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 03:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `Setatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `Setatus`) VALUES
(17, 'amin j', 'Mentaras', 'L', 'Islam', 'smea', 'Cadangan'),
(18, 'Nita firdaus', 'Gresik', 'P', 'Hindu', 'smea', 'Diterima'),
(30, 'nita', 'Gresik', 'P', 'Islam', 'SMK', 'Diterima'),
(31, 'Nita firdaus', 'Gresik', 'P', 'Kristen', 'SMK', 'Diterima'),
(32, 'Amin', 'Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141', 'L', 'Islam', 'MA', 'Ditolak'),
(33, 'putri', 'Gresik', 'P', 'Katolik', 'smea', 'Diterima'),
(68, 'Amin', 'Gresik', 'L', 'Islam', 'SMK', 'Diterima'),
(69, 'amin j', 'Gresik', 'L', 'Islam', 'SMK', ''),
(70, 'Amin', 'Gresik', 'L', 'Kristen', 'SMK', ''),
(71, 'amin j', 'Gresik', 'L', 'Islam', 'smea', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `roles`) VALUES
(5, 'Soni Fathur Rohman', 'admin', 'admin', 'Admin'),
(6, 'jony', 'jony', 'admin', 'Admin'),
(7, 'dony', 'dony', 'dony', 'User'),
(8, 'jony', 'jony', 'jony', 'User'),
(9, 'kiki', 'kiki', 'kiki', 'User'),
(10, 'budi', 'budi', 'budi', 'Admin'),
(11, 'Amin', 'user', 'user', 'User'),
(12, 'amin1', 'amin1', 'amin1', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
