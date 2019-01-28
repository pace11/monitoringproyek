-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2019 pada 07.46
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

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
-- Struktur dari tabel `tbl_input4`
--

CREATE TABLE `tbl_input4` (
  `nomer_pjn_spj` int(10) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `pengawas` text NOT NULL,
  `jenis_pekerjaan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_input4`
--

INSERT INTO `tbl_input4` (`nomer_pjn_spj`, `tanggal_awal`, `tanggal_akhir`, `pengawas`, `jenis_pekerjaan`) VALUES
(1, '2019-01-13', '1970-01-01', 'gvhjb', 'SKTM'),
(2, '2019-01-19', '1970-01-01', 'fgdgthfy', 'Sipil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_input5`
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
-- Dumping data untuk tabel `tbl_input5`
--

INSERT INTO `tbl_input5` (`nodin_ren`, `uraian`, `harga`, `bobot`, `hari_kerja_week`, `masa_spj`) VALUES
(1, 'dsdgh', 547, 46, 2, 56);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sipil`
--

CREATE TABLE `tbl_sipil` (
  `id_sipil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sipil`
--

INSERT INTO `tbl_sipil` (`id_sipil`) VALUES
('pembersihan lahan'),
('pengairan tanah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sktm`
--

CREATE TABLE `tbl_sktm` (
  `id_sktm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sktm`
--

INSERT INTO `tbl_sktm` (`id_sktm`) VALUES
('pemasangan kabel'),
('penggalian tanah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `role`) VALUES
('ADMIN', 'admin12345', 0),
('MANAGER', 'manager10', 1),
('SEKRETARIS', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_input4`
--
ALTER TABLE `tbl_input4`
  ADD PRIMARY KEY (`nomer_pjn_spj`);

--
-- Indeks untuk tabel `tbl_input5`
--
ALTER TABLE `tbl_input5`
  ADD PRIMARY KEY (`nodin_ren`);

--
-- Indeks untuk tabel `tbl_sipil`
--
ALTER TABLE `tbl_sipil`
  ADD PRIMARY KEY (`id_sipil`);

--
-- Indeks untuk tabel `tbl_sktm`
--
ALTER TABLE `tbl_sktm`
  ADD PRIMARY KEY (`id_sktm`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
