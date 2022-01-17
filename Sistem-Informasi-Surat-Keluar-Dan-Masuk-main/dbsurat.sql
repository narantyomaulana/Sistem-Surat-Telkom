-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2022 pada 23.10
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsurat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratkeluar`
--

CREATE TABLE `tb_suratkeluar` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tujuansurat` varchar(255) NOT NULL,
  `namapenerima` varchar(255) NOT NULL,
  `tgl_keluar_surat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_suratkeluar`
--

INSERT INTO `tb_suratkeluar` (`id`, `no_surat`, `asal_surat`, `tgl_keluar`, `penerbit`, `perihal`, `tujuansurat`, `namapenerima`, `tgl_keluar_surat`) VALUES
(2, '01/Bupati/XII/2021', 'H.Surya Bsc', '2021-01-07', 'Irmaya Sari', 'Musrembang', '', '', NULL),
(6, '', 'Abdur', '2021-12-23', '', 'Laporan', 'Private', 'Pak Mahmud', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratmasuk`
--

CREATE TABLE `tb_suratmasuk` (
  `id` int(5) NOT NULL,
  `no_surat` varchar(15) NOT NULL,
  `asal_surat` varchar(20) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `waktu` time NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `tujuansurat` varchar(255) NOT NULL,
  `namapenerima` varchar(255) NOT NULL,
  `tgl_penerima_surat` date DEFAULT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_suratmasuk`
--

INSERT INTO `tb_suratmasuk` (`id`, `no_surat`, `asal_surat`, `tgl_masuk`, `waktu`, `penerima`, `perihal`, `tujuansurat`, `namapenerima`, `tgl_penerima_surat`, `file`) VALUES
(28, '', 'Ahmad', '2022-01-14', '10:54:00', '', 'EVC', 'Simad', 'Kimoyo', '2022-01-15', '1795555187_af1d9aaa-d16f-4df1-ae88-abeea2add716.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'faraswahyuddin1909@gmail.com', 'Kelompok Open Source', 1, 'Staff Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
