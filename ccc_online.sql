-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2016 at 04:19 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccc_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `report_sekolah`
--

CREATE TABLE `report_sekolah` (
  `no` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `status_surat_sekolah` tinyint(1) NOT NULL,
  `status_daftar_lolos` tinyint(1) NOT NULL,
  `status_form_pendaftaran` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report_siswa`
--

CREATE TABLE `report_siswa` (
  `no` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `status_surat_orangtua` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `no` int(11) NOT NULL,
  `id_peserta` int(10) NOT NULL,
  `tahap_1` double NOT NULL,
  `tahap_2` double NOT NULL,
  `tahap_3` double NOT NULL,
  `tahap_4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_orangtua`
--

CREATE TABLE `tb_orangtua` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hp` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id` int(11) NOT NULL,
  `kode` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pso`
--

CREATE TABLE `tb_pso` (
  `id_peserta` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_orangtua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id` int(11) NOT NULL,
  `kode` int(3) NOT NULL,
  `nama` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahap`
--

CREATE TABLE `tb_tahap` (
  `no` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `tahap_1` enum('pass','fail') NOT NULL,
  `pelunasan` enum('pass','fail') NOT NULL,
  `tahap_2` enum('pass','fail') NOT NULL,
  `tahap_3` enum('pass','fail') NOT NULL,
  `tahap_4` enum('pass','fail') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report_sekolah`
--
ALTER TABLE `report_sekolah`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `report_siswa`
--
ALTER TABLE `report_siswa`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_orangtua`
--
ALTER TABLE `tb_orangtua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `tb_pso`
--
ALTER TABLE `tb_pso`
  ADD KEY `id_peserta` (`id_peserta`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_orangtua` (`id_orangtua`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tahap`
--
ALTER TABLE `tb_tahap`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report_sekolah`
--
ALTER TABLE `report_sekolah`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `report_siswa`
--
ALTER TABLE `report_siswa`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_orangtua`
--
ALTER TABLE `tb_orangtua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_tahap`
--
ALTER TABLE `tb_tahap`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pso`
--
ALTER TABLE `tb_pso`
  ADD CONSTRAINT `orangtua` FOREIGN KEY (`id_orangtua`) REFERENCES `tb_orangtua` (`id`),
  ADD CONSTRAINT `peserta` FOREIGN KEY (`id_peserta`) REFERENCES `tb_peserta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sekolah` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
