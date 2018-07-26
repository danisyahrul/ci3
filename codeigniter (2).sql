-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 11:14 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `nim`, `alamat`) VALUES
(2, 'Bima Guntur Dwicahya S', '1641720199', 'JL. Semanggi Barat');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `idpegawai` int(11) NOT NULL,
  `namaPegawai` varchar(45) DEFAULT NULL,
  `alamatPegawai` varchar(45) DEFAULT NULL,
  `tanggalLahirPegawai` date NOT NULL,
  `Foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`idpegawai`, `namaPegawai`, `alamatPegawai`, `tanggalLahirPegawai`, `Foto`) VALUES
(1, 'Putra Prima Arhandi', 'Politeknik Negeri Malang', '0000-00-00', ''),
(2, 'Sokoban Enryu', 'Universitas Brawijaya', '0000-00-00', ''),
(6, 'Sakinah Bin Thalib kinaa', 'Tanah Rata', '1998-04-14', '1.jpg'),
(7, 'Bima Guntur Dwicahya S', 'Semanggi Barat No. 23', '1997-05-31', '2.jpg'),
(9, 'bima', 'Semanggi Barat', '1997-05-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `idpendidikan` int(11) NOT NULL,
  `namaSekolah` varchar(45) DEFAULT NULL,
  `tahunLulus` varchar(45) DEFAULT NULL,
  `fk_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`idpendidikan`, `namaSekolah`, `tahunLulus`, `fk_pegawai`) VALUES
(4, 'Sd 005 Rintis', '1998', 1),
(5, 'SLTP N 4 Pekanbaru', '2001', 1),
(6, 'SMU N 1 Pekanbaru', '2004', 1),
(7, 'SD 005 Malang', '1998', 2),
(8, 'SLTP N 3 Malang', '2001', 2),
(9, 'SMU N 1 Pekanbaru', '2004', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idpegawai`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`idpendidikan`),
  ADD KEY `fk_pegawai_idx` (`fk_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idpegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `idpendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `fk_pegawai` FOREIGN KEY (`fk_pegawai`) REFERENCES `pegawai` (`idpegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
