-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2020 pada 02.06
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ci2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profile` int(11) NOT NULL,
  `nama_profile` varchar(30) NOT NULL,
  `photo_profile` varchar(100) NOT NULL,
  `deskripsi_profile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_visi_misi`
--

CREATE TABLE `tb_visi_misi` (
  `id_v_m` int(11) NOT NULL,
  `nama_v_m` varchar(30) NOT NULL,
  `photo_v_m` varchar(100) CHARACTER SET latin1 NOT NULL,
  `deskripsi_v_m` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_visi_misi`
--

INSERT INTO `tb_visi_misi` (`id_v_m`, `nama_v_m`, `photo_v_m`, `deskripsi_v_m`) VALUES
(15, 'Nature Wide', '1592796292032.jpg', 'ini nature wide'),
(16, 'Mouontains Snow', '1592797189585.jpg', 'Ini Mountains Snow'),
(20, 'Band Chicago', '1592798180688.jpg', 'ini band chicago'),
(25, 'LETTER R', '1596773658695.png', 'INI ADALAH LETTER R YANG DIGUNAKAN UNTUK CONTOH'),
(26, 'THIS VALUE to ENEMY', '1598400337830.png', 'GGGGGGGGGGGGGG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_grup`
--

CREATE TABLE `tm_grup` (
  `id_grup` int(11) NOT NULL,
  `grup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_grup`
--

INSERT INTO `tm_grup` (`id_grup`, `grup`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tm_user`
--

CREATE TABLE `tm_user` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(6) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `grup` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tm_user`
--

INSERT INTO `tm_user` (`id`, `username`, `password`, `nama`, `grup`) VALUES
(1, 'admin1', '123', 'Admin', 1),
(2, 'Suyu', '1234', 'suyuchan', 2),
(3, 'Bagus Dwi', '2222', 'Bagus Dwi W', 2),
(5, 'syahdi', '99', 'syahdoy', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indeks untuk tabel `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  ADD PRIMARY KEY (`id_v_m`);

--
-- Indeks untuk tabel `tm_grup`
--
ALTER TABLE `tm_grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indeks untuk tabel `tm_user`
--
ALTER TABLE `tm_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_visi_misi`
--
ALTER TABLE `tb_visi_misi`
  MODIFY `id_v_m` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tm_grup`
--
ALTER TABLE `tm_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tm_user`
--
ALTER TABLE `tm_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
