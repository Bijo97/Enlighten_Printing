-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Sep 2016 pada 09.20
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cicilan`
--

CREATE TABLE IF NOT EXISTS `cicilan` (
  `idcicilan` int(11) NOT NULL,
  `banyakcicilan` int(11) NOT NULL,
  `nominalpercicilan` int(11) NOT NULL,
  `cicilanke` int(11) NOT NULL,
  `jatuhtempo` date NOT NULL,
  `denda` int(11) NOT NULL,
  `idtransaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `consumer`
--

CREATE TABLE IF NOT EXISTS `consumer` (
  `idconsumer` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idtransaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `idmember` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nohp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `memesan`
--

CREATE TABLE IF NOT EXISTS `memesan` (
  `idpersediaan` int(11) NOT NULL,
  `idtransaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menambah`
--

CREATE TABLE IF NOT EXISTS `menambah` (
  `idpersediaan` int(11) NOT NULL,
  `idtambahsuplai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `idpegawai` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `joindate` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nohp` int(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `persediaan`
--

CREATE TABLE IF NOT EXISTS `persediaan` (
  `idpersediaan` int(11) NOT NULL,
  `namabarang` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(12) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambahsuplai`
--

CREATE TABLE IF NOT EXISTS `tambahsuplai` (
  `idtambahsuplai` int(11) NOT NULL,
  `idpegawai` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `idmember` int(11) NOT NULL,
  `idpegawai` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `pembayaran` varchar(10) NOT NULL,
  `namafile` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `ukurankertas` varchar(12) NOT NULL,
  `harga` int(12) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cicilan`
--
ALTER TABLE `cicilan`
  ADD PRIMARY KEY (`idcicilan`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`idconsumer`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idmember`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`idpegawai`);

--
-- Indexes for table `persediaan`
--
ALTER TABLE `persediaan`
  ADD PRIMARY KEY (`idpersediaan`);

--
-- Indexes for table `tambahsuplai`
--
ALTER TABLE `tambahsuplai`
  ADD PRIMARY KEY (`idtambahsuplai`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cicilan`
--
ALTER TABLE `cicilan`
  MODIFY `idcicilan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `idconsumer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idmember` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `idpegawai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persediaan`
--
ALTER TABLE `persediaan`
  MODIFY `idpersediaan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tambahsuplai`
--
ALTER TABLE `tambahsuplai`
  MODIFY `idtambahsuplai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
