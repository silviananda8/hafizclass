-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 02:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hafizclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `harian`
--

CREATE TABLE `harian` (
  `ID_HARIAN` int(11) NOT NULL,
  `ID_PROGRESS` int(11) NOT NULL,
  `STATUS_HARIAN` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `ID_KOMEN` int(11) NOT NULL,
  `ID_PROGRESS` int(11) NOT NULL,
  `ISI_KOMEN` text,
  `TANGGAL_KOMEN` date NOT NULL,
  `AUDIO_REVISI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penguji`
--

CREATE TABLE `penguji` (
  `ID_PENGUJI` int(11) NOT NULL,
  `EMAIL_PENGUJI` varchar(50) DEFAULT NULL,
  `PASSWORD_PENGUJI` varchar(25) DEFAULT NULL,
  `NAMA_PENGUJI` varchar(50) DEFAULT NULL,
  `JK_PENGUJI` varchar(20) DEFAULT NULL,
  `ALAMAT_PENGUJI` text NOT NULL,
  `TELEPON_PENGUJI` int(11) DEFAULT NULL,
  `FOTO_PENGUJI` text,
  `TINGKAT_MENGUJI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penguji`
--

INSERT INTO `penguji` (`ID_PENGUJI`, `EMAIL_PENGUJI`, `PASSWORD_PENGUJI`, `NAMA_PENGUJI`, `JK_PENGUJI`, `ALAMAT_PENGUJI`, `TELEPON_PENGUJI`, `FOTO_PENGUJI`, `TINGKAT_MENGUJI`) VALUES
(1, 'penguji@gmail.com', '54321', 'Ust. Akbar A', 'Laki-laki', 'Jl. Kedurus, Karang Pilang', 2147483647, 'masjid-pogung-dalangan-GClYQv8I3So-unsplash.jpg', 'Hafalan Jus 29 dan 30'),
(2, 'aaa@gmail.com', 'aaa', 'Ust. aaa', NULL, '', NULL, NULL, NULL),
(4, 'bbb@gmail.com', 'bbb', 'Ust. bbb', NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `ID_PROGRESS` int(11) NOT NULL,
  `ID_TARGET` int(11) NOT NULL,
  `JUDUL_PROGRESS` varchar(50) DEFAULT NULL,
  `JENIS_PROGRESS` varchar(25) DEFAULT NULL,
  `AUDIO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `ID_SANTRI` int(11) NOT NULL,
  `ID_PENGUJI` int(11) NOT NULL,
  `EMAIL_SANTRI` varchar(50) DEFAULT NULL,
  `PASSWORD_SANTRI` varchar(25) DEFAULT NULL,
  `NAMA_SANTRI` varchar(50) DEFAULT NULL,
  `JK_SANTRI` varchar(20) DEFAULT NULL,
  `ALAMAT_SANTRI` text NOT NULL,
  `TINGKAT_PENDIDIKAN` varchar(10) NOT NULL,
  `TELEPON_SANTRI` int(15) DEFAULT NULL,
  `FOTO_SANTRI` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`ID_SANTRI`, `ID_PENGUJI`, `EMAIL_SANTRI`, `PASSWORD_SANTRI`, `NAMA_SANTRI`, `JK_SANTRI`, `ALAMAT_SANTRI`, `TINGKAT_PENDIDIKAN`, `TELEPON_SANTRI`, `FOTO_SANTRI`) VALUES
(1, 1, 'santri@gmail.com', '12345', 'Ikhwan Nabila A', 'Laki-laki', 'Jl. Kamboja', 'SMP', 87152375, 'ngaji.jpg'),
(2, 1, 'asha@gmail.com', 'asha', 'asha', 'Perempuan', 'Jl. Anggrek', 'SD', NULL, NULL),
(3, 2, 'kusuma@gmail.com', '12345', 'kusuma', 'Laki-laki', 'Jl. Lurian', 'SMP', 87936826, 'quran.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `ID_TARGET` int(11) NOT NULL,
  `ID_SANTRI` int(11) NOT NULL,
  `ID_PENGUJI` int(11) NOT NULL,
  `JUDUL_TARGET` varchar(50) DEFAULT NULL,
  `DESKRIPSI_TARGET` text,
  `STATUS_TARGET` varchar(25) DEFAULT NULL,
  `TANGGAL_UPLOAD` date DEFAULT NULL,
  `BATAS_UPLOAD` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`ID_TARGET`, `ID_SANTRI`, `ID_PENGUJI`, `JUDUL_TARGET`, `DESKRIPSI_TARGET`, `STATUS_TARGET`, `TANGGAL_UPLOAD`, `BATAS_UPLOAD`) VALUES
(7, 1, 1, 'Hafalan juz 30', 'Hafalan Juz 30 bisa dicicil', 'Belum Tuntas', '2020-05-28', '2020-06-28'),
(8, 3, 4, 'Hafalan Jus 1', 'Surat Al-Baqoroh panjang, semangat ya', 'Belum Tuntas', '2020-05-28', '2020-06-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harian`
--
ALTER TABLE `harian`
  ADD PRIMARY KEY (`ID_HARIAN`),
  ADD KEY `ID_PROGRESS` (`ID_PROGRESS`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`ID_KOMEN`),
  ADD KEY `ID_PROGRESS` (`ID_PROGRESS`);

--
-- Indexes for table `penguji`
--
ALTER TABLE `penguji`
  ADD PRIMARY KEY (`ID_PENGUJI`),
  ADD UNIQUE KEY `EMAIL_PENGUJI` (`EMAIL_PENGUJI`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`ID_PROGRESS`),
  ADD KEY `ID_TARGET` (`ID_TARGET`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`ID_SANTRI`),
  ADD UNIQUE KEY `EMAIL_SANTRI` (`EMAIL_SANTRI`),
  ADD KEY `santri_ibfk_1` (`ID_PENGUJI`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`ID_TARGET`),
  ADD KEY `ID_SANTRI` (`ID_SANTRI`),
  ADD KEY `ID_PENGUJI` (`ID_PENGUJI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harian`
--
ALTER TABLE `harian`
  MODIFY `ID_HARIAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `ID_KOMEN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penguji`
--
ALTER TABLE `penguji`
  MODIFY `ID_PENGUJI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `ID_PROGRESS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `ID_SANTRI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `ID_TARGET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `harian`
--
ALTER TABLE `harian`
  ADD CONSTRAINT `harian_ibfk_1` FOREIGN KEY (`ID_PROGRESS`) REFERENCES `target` (`ID_TARGET`);

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`ID_PROGRESS`) REFERENCES `target` (`ID_TARGET`);

--
-- Constraints for table `progress`
--
ALTER TABLE `progress`
  ADD CONSTRAINT `progress_ibfk_1` FOREIGN KEY (`ID_TARGET`) REFERENCES `target` (`ID_TARGET`);

--
-- Constraints for table `santri`
--
ALTER TABLE `santri`
  ADD CONSTRAINT `santri_ibfk_1` FOREIGN KEY (`ID_PENGUJI`) REFERENCES `penguji` (`ID_PENGUJI`);

--
-- Constraints for table `target`
--
ALTER TABLE `target`
  ADD CONSTRAINT `target_ibfk_1` FOREIGN KEY (`ID_SANTRI`) REFERENCES `santri` (`ID_SANTRI`),
  ADD CONSTRAINT `target_ibfk_2` FOREIGN KEY (`ID_PENGUJI`) REFERENCES `penguji` (`ID_PENGUJI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
