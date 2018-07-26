-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 04:22 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_konten` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `id_kategori`, `judul`, `isi_konten`, `thumbnail`) VALUES
(1, 1, 'Testing', 'MI-2C', '1.png'),
(2, 2, 'Siapakah Bruce Lee', 'Bruce Lee (Tionghoa: ???; Pinyin: L? Zhènfán; lahir 27 November 1940 – meninggal 20 Juli 1973 pada umur 32 tahun) adalah aktor bela diri Hong Kong. Bruce Lee lahir di San Fransisco, namun masa kecil hingga remaja tinggal di Hong Kong, masa mudanya berkarier di Amerika Serikat.\r\n\r\nSebagai aktor dan ahli seni beladiri, Bruce Lee mempopulerkan film-film kungfu ke seluruh dunia. Ia meninggal dalam usia muda pada tahun 1973.', '220px-Bruce_Lee_1973.jpg'),
(3, 3, 'Bubur', 'Bubur ayam adalah salah satu jenis makanan bubur dari Indonesia. Bubur nasi adalah beras yang dimasak dengan air yang banyak sehingga memiliki tekstur yang lembut dan berair. Bubur biasanya disajikan dalam suhu panas atau hangat', 'baraya.jpg'),
(5, 2, 'Perkenalkan Carl Johnson', 'Carl Johnson (CJ) adalah karakter protagonis utama di Grand Theft Auto San Andreas. Carl Johnson lahir pada tahun 1968 di Los Santos, San Andreas.', 'cj1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Testing'),
(2, 'Biografi'),
(3, 'Kuliner');

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

-- --------------------------------------------------------

--
-- Table structure for table `tabel_login`
--

CREATE TABLE `tabel_login` (
  `id_login` bigint(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_login`
--

INSERT INTO `tabel_login` (`id_login`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(2, 'User', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`),
  ADD KEY `FK_Kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

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
-- Indexes for table `tabel_login`
--
ALTER TABLE `tabel_login`
  ADD PRIMARY KEY (`id_login`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `tabel_login`
--
ALTER TABLE `tabel_login`
  MODIFY `id_login` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `FK_Kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `fk_pegawai` FOREIGN KEY (`fk_pegawai`) REFERENCES `pegawai` (`idpegawai`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
