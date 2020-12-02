-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 09:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_capil`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_login`
--

CREATE TABLE `data_login` (
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `akses` varchar(45) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_login`
--

INSERT INTO `data_login` (`username`, `email`, `akses`, `id_user`) VALUES
('agus@gmail.com', 'agus@gmail.com', 'api', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk_capil`
--

CREATE TABLE `data_penduduk_capil` (
  `pasienid` mediumint(8) UNSIGNED NOT NULL,
  `norm` varchar(15) NOT NULL DEFAULT '',
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `tempatlahir` varchar(50) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `kelamin` enum('L','P') DEFAULT NULL,
  `umur` smallint(6) DEFAULT NULL,
  `statusperkawinan` varchar(15) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `goldarah` varchar(5) DEFAULT NULL,
  `kebangsaan` char(30) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `propinsi` varchar(50) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `photo` longblob DEFAULT NULL,
  `regdate` date DEFAULT NULL,
  `regtime` time DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `inactive` tinyint(1) DEFAULT 0,
  `cardprinted` tinyint(1) DEFAULT 0,
  `pasientype` varchar(20) DEFAULT NULL,
  `pasiensubtype` varchar(20) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mothername` varchar(150) DEFAULT NULL,
  `fathername` varchar(150) DEFAULT NULL,
  `companyid` varchar(15) DEFAULT NULL,
  `iksemployeename` varchar(150) DEFAULT NULL,
  `payrollno` varchar(15) DEFAULT NULL,
  `companydept` varchar(45) DEFAULT NULL,
  `relation` varchar(15) DEFAULT NULL,
  `typebayar` varchar(40) DEFAULT NULL,
  `typebayarid` varchar(50) DEFAULT NULL,
  `idno` varchar(45) DEFAULT NULL,
  `isaskes` tinyint(1) DEFAULT 0,
  `umurbl` smallint(6) DEFAULT NULL,
  `umurhr` smallint(6) DEFAULT NULL,
  `wn` varchar(4) DEFAULT NULL,
  `pasiencash` tinyint(1) DEFAULT 0,
  `nobpjs` varchar(13) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `pisa` smallint(6) DEFAULT NULL,
  `kdprovider` varchar(12) DEFAULT NULL,
  `nmprovider` varchar(80) DEFAULT NULL,
  `klsrawat` varchar(25) DEFAULT NULL,
  `peserta` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penduduk_capil`
--

INSERT INTO `data_penduduk_capil` (`pasienid`, `norm`, `nama`, `alamat`, `tempatlahir`, `tgllahir`, `kelamin`, `umur`, `statusperkawinan`, `agama`, `telepon`, `goldarah`, `kebangsaan`, `pendidikan`, `pekerjaan`, `propinsi`, `kabupaten`, `kecamatan`, `desa`, `photo`, `regdate`, `regtime`, `notes`, `inactive`, `cardprinted`, `pasientype`, `pasiensubtype`, `fax`, `mobile`, `email`, `mothername`, `fathername`, `companyid`, `iksemployeename`, `payrollno`, `companydept`, `relation`, `typebayar`, `typebayarid`, `idno`, `isaskes`, `umurbl`, `umurhr`, `wn`, `pasiencash`, `nobpjs`, `nik`, `pisa`, `kdprovider`, `nmprovider`, `klsrawat`, `peserta`) VALUES
(1, '', 'Ketut AGus Seputra', 'Sangket Sukasada', 'Sangket', '2019-10-27', 'L', 12, 'single', 'Hindu', '02154787', 'B', 'Indonesia', 'SD', 'Anak-anak', 'Bali', 'Buleleng', 'BUleleng', 'BUleleng', 0x3f, '2019-10-27', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, '123456', '0989878987172839', NULL, NULL, NULL, NULL, NULL),
(126638, '', 'Made Bagia', 'Jineng Dalem', 'Singaraja', '1990-09-09', 'L', 30, 'menikah', 'Hindu', '099909', 'A', 'Indonesia', 'SD', 'Dosen', 'Bali', 'Buleleng', 'Buleleng', 'Jineng Dalem', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, '321', '9829283938948104', NULL, NULL, NULL, NULL, NULL),
(126639, '', 'Made Sandi', 'Sukasada', 'Sukasada', '1990-08-08', 'L', 30, 'menikah', 'Hindu', '999', 'O', 'Indonesia', 'Sd', 'Dosen', 'Bali', 'Denpasar', 'Denpasar Barat', 'Pemogan', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 0, '99999', '0805048374859682', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_login`
--
ALTER TABLE `data_login`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `data_penduduk_capil`
--
ALTER TABLE `data_penduduk_capil`
  ADD PRIMARY KEY (`pasienid`),
  ADD UNIQUE KEY `pasienid` (`pasienid`,`norm`),
  ADD KEY `FK_pasien` (`typebayar`),
  ADD KEY `pasientype` (`pasientype`),
  ADD KEY `nik` (`nik`),
  ADD KEY `nobpjs` (`nobpjs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_login`
--
ALTER TABLE `data_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_penduduk_capil`
--
ALTER TABLE `data_penduduk_capil`
  MODIFY `pasienid` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126640;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
