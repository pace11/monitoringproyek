-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 05:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_input2`
--

CREATE TABLE `tbl_input2` (
  `id_pekerjaan` int(10) NOT NULL,
  `nomer_pjn_spj` varchar(40) NOT NULL,
  `value_pekerjaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_input2`
--

INSERT INTO `tbl_input2` (`id_pekerjaan`, `nomer_pjn_spj`, `value_pekerjaan`) VALUES
(2, '0014/DAN 02.03/A.BLG/2018', '[{\"harga\":\"1\",\"bobot\":\"1\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"1\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"1\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"1\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"1\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"1\",\"harikerja\":\"1\"},{\"harga\":\"1\",\"bobot\":\"1\",\"harikerja\":\"1\"},{\"harga\":\"111\",\"bobot\":\"1\",\"harikerja\":\"1\"}]'),
(3, '0012/DAN 02.03/A.BLG/2018', '[{\"harga\":\"10\",\"bobot\":\"10\",\"harikerja\":\"10\"},{\"harga\":\"10\",\"bobot\":\"10\",\"harikerja\":\"10\"},{\"harga\":\"11\",\"bobot\":\"21\",\"harikerja\":\"22\"},{\"harga\":\"5\",\"bobot\":\"8\",\"harikerja\":\"34\"},{\"harga\":\"39\",\"bobot\":\"10\",\"harikerja\":\"88\"},{\"harga\":\"34\",\"bobot\":\"54\",\"harikerja\":\"30\"},{\"harga\":\"34\",\"bobot\":\"20\",\"harikerja\":\"33\"},{\"harga\":\"20\",\"bobot\":\"21\",\"harikerja\":\"15\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_input4`
--

CREATE TABLE `tbl_input4` (
  `nomer_pjn_spj` varchar(40) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `pengawas` text NOT NULL,
  `jenis_pekerjaan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_input4`
--

INSERT INTO `tbl_input4` (`nomer_pjn_spj`, `tanggal_awal`, `tanggal_akhir`, `pengawas`, `jenis_pekerjaan`) VALUES
('0012/DAN 02.03/A.BLG/2018', '2019-01-31', '2019-02-06', 'Pak Ocid', 'SKTM'),
('0014/DAN 02.03/A.BLG/2018', '2019-01-30', '2019-01-31', 'Pak Rakhmadi', 'SIPIL'),
('0015/DAN 02.03/A.BLG/2018', '2019-01-31', '2019-02-01', 'Ilham Alfuti', 'SKTM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_input5`
--

CREATE TABLE `tbl_input5` (
  `nodin_ren` int(10) NOT NULL,
  `uraian` text NOT NULL,
  `harga` int(10) NOT NULL,
  `bobot` int(10) NOT NULL,
  `hari_kerja_week` int(10) NOT NULL,
  `masa_spj` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_input5`
--

INSERT INTO `tbl_input5` (`nodin_ren`, `uraian`, `harga`, `bobot`, `hari_kerja_week`, `masa_spj`) VALUES
(1, 'dsdgh', 547, 46, 2, 56);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sipil`
--

CREATE TABLE `tbl_sipil` (
  `id_sipil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sipil`
--

INSERT INTO `tbl_sipil` (`id_sipil`) VALUES
('bongkar kabel'),
('gali tanah'),
('kabel kabel kabel'),
('kabel kabel tanah'),
('material kabel'),
('pemasangan kabel bawah'),
('pembersihan lahan'),
('pengairan tanah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sktm`
--

CREATE TABLE `tbl_sktm` (
  `id_sktm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sktm`
--

INSERT INTO `tbl_sktm` (`id_sktm`) VALUES
('Material Pelengkap'),
('Pekerjaan Angkutan'),
('Pekerjaan Boring'),
('Pekerjaan Galian'),
('Pekerjaan Lain Lain'),
('Penarikan dan Penyambungan'),
('Pengadaan Material'),
('Perbaikan Bekas Galian');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `role`) VALUES
('ADMIN', 'admin12345', 0),
('MANAGER', 'manager10', 1),
('SEKRETARIS', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_input2`
--
ALTER TABLE `tbl_input2`
  ADD PRIMARY KEY (`id_pekerjaan`),
  ADD KEY `nomer_pjn_spj` (`nomer_pjn_spj`);

--
-- Indexes for table `tbl_input4`
--
ALTER TABLE `tbl_input4`
  ADD PRIMARY KEY (`nomer_pjn_spj`);

--
-- Indexes for table `tbl_input5`
--
ALTER TABLE `tbl_input5`
  ADD PRIMARY KEY (`nodin_ren`);

--
-- Indexes for table `tbl_sipil`
--
ALTER TABLE `tbl_sipil`
  ADD PRIMARY KEY (`id_sipil`);

--
-- Indexes for table `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  ADD PRIMARY KEY (`id_sktm`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_input2`
--
ALTER TABLE `tbl_input2`
  MODIFY `id_pekerjaan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_input2`
--
ALTER TABLE `tbl_input2`
  ADD CONSTRAINT `tbl_input2_ibfk_1` FOREIGN KEY (`nomer_pjn_spj`) REFERENCES `tbl_input4` (`nomer_pjn_spj`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
