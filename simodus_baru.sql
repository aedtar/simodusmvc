-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 04:50 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simodus_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kembali`
--

CREATE TABLE `tb_kembali` (
  `id_kembali` int(11) NOT NULL,
  `no_dummy` int(10) NOT NULL,
  `lokasi_posko` varchar(20) NOT NULL,
  `nama_cc` varchar(20) NOT NULL,
  `stand` float(10,2) NOT NULL DEFAULT '0.00',
  `tgl_kembali` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nm_posko` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pakai`
--

CREATE TABLE `tb_pakai` (
  `id_pakai` int(11) NOT NULL,
  `no_dummy` varchar(50) NOT NULL,
  `no_meter_rusak` varchar(50) NOT NULL,
  `nm_pel` varchar(20) DEFAULT NULL,
  `no_hp_pel` bigint(15) NOT NULL,
  `alasan_rusak` varchar(20) DEFAULT NULL,
  `std_dummy` float(10,2) NOT NULL,
  `tgl_pakai` timestamp NULL DEFAULT NULL,
  `ptgs_pasang` varchar(20) NOT NULL,
  `sisa_pulsa` float(10,2) NOT NULL,
  `nm_cc` varchar(20) NOT NULL,
  `aktivasi` varchar(20) DEFAULT NULL,
  `kembali` varchar(20) DEFAULT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pakai`
--

INSERT INTO `tb_pakai` (`id_pakai`, `no_dummy`, `no_meter_rusak`, `nm_pel`, `no_hp_pel`, `alasan_rusak`, `std_dummy`, `tgl_pakai`, `ptgs_pasang`, `sisa_pulsa`, `nm_cc`, `aktivasi`, `kembali`, `username`) VALUES
(1, '1', '1234', 'vbvh', 345, '1', 43.60, NULL, 'ghnf', 45.00, 'dhdm', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `unit` enum('BC - 18301','KOTA - 18309','UBAN - 18303','AIR MOLEK - 1845','OPERATOR') DEFAULT NULL,
  `level` enum('operator','admin','aktivasi','yantek') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `name`, `password`, `unit`, `level`) VALUES
('18301admin', 'Admin BC', '18301admin', 'BC - 18301', 'admin'),
('18301aktivasi', 'Aktivasi BC', '18301aktivasi', 'BC - 18301', 'aktivasi'),
('18301yantek', 'Yantek BC', '18301yantek', 'BC - 18301', 'yantek'),
('operator1', 'operator simodus', 'operator1', 'OPERATOR', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indexes for table `tb_pakai`
--
ALTER TABLE `tb_pakai`
  ADD PRIMARY KEY (`id_pakai`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kembali`
--
ALTER TABLE `tb_kembali`
  MODIFY `id_kembali` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pakai`
--
ALTER TABLE `tb_pakai`
  MODIFY `id_pakai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
