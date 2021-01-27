-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2020 pada 06.31
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_buku`
--

CREATE TABLE `daftar_buku` (
  `id_daftar_buku` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `id_jenis_buku` int(11) NOT NULL,
  `level_buku` enum('0','1') NOT NULL,
  `kategori_buku` enum('sinode','umum') NOT NULL,
  `judul_buku` varchar(500) NOT NULL,
  `tag_buku` text NOT NULL,
  `pengarang_buku` varchar(500) NOT NULL,
  `sampul_buku` varchar(100) NOT NULL,
  `sinopsis_buku` text NOT NULL,
  `file_buku` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `daftar_buku`
--

INSERT INTO `daftar_buku` (`id_daftar_buku`, `id_penerbit`, `id_jenis_buku`, `level_buku`, `kategori_buku`, `judul_buku`, `tag_buku`, `pengarang_buku`, `sampul_buku`, `sinopsis_buku`, `file_buku`) VALUES
(1, 2, 0, '0', 'sinode', 'cerita', 'coba saja ', 'pt.sulo', 'merah', 'Tuhan adalah gembalaku', '672017255.pdf'),
(2, 1, 0, '0', 'sinode', 'ALKITAB', 'merah', 'Lembaga Alkitab', 'pink', 'Tuhan Yesus', '0'),
(3, 1, 0, '0', 'sinode', 'dita', 'merah', 'saya', 'kita', 'hadfkhdk', 'puspapunya1.pdf'),
(4, 3, 0, '0', 'sinode', 'saya ingin menjadi peri', 'pink', 'jaka', 'boneka', 'menjadi kita', 'buku20200915044613.docx'),
(5, 4, 1, '1', 'sinode', 'tes jenis buku', 'pink', 'sdgadgag', 'dfjhdxstj', 'dgsxhss', 'buku20200915045120.pdf'),
(6, 4, 3, '0', 'sinode', 'coba saja', 'dita', 'saya', 'merah', 'jika saya menjadi orang ', 'buku20200915045829.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `digital`
--

CREATE TABLE `digital` (
  `id_digital` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `id_jenis_digital` int(11) NOT NULL,
  `level_digital` enum('0','1') NOT NULL,
  `kategori_digital` enum('sinode','umum') NOT NULL,
  `judul_digital` varchar(500) NOT NULL,
  `tag_digital` text NOT NULL,
  `pengarang_digital` varchar(500) NOT NULL,
  `sampul_digital` varchar(100) NOT NULL,
  `sinopsis_digital` text NOT NULL,
  `file_digital` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `digital`
--

INSERT INTO `digital` (`id_digital`, `id_penerbit`, `id_jenis_digital`, `level_digital`, `kategori_digital`, `judul_digital`, `tag_digital`, `pengarang_digital`, `sampul_digital`, `sinopsis_digital`, `file_digital`) VALUES
(1, 7, 0, '0', 'sinode', 'foto jpeg', 'cobasaja', 'hana', 'merah', 'menjadi wonderwomen', 'digital20200914044200.jpeg'),
(2, 6, 0, '1', 'sinode', 'foto jpg', 'cobasaja', 'hani', 'hijau', 'mencoba menjadi pribadi yang baik', 'digital20200914044310.jpg'),
(3, 6, 0, '0', 'sinode', 'foto png', 'cobaki', 'ririn', 'hijau', 'baru terbit', 'digital20200914044455.png'),
(4, 1, 0, '1', 'sinode', 'video mp4', 'cobaki', 'saya', 'pink', 'kitaji dia', 'digital20200914044643.mp4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `id_jenis_dokumen` int(11) NOT NULL,
  `level_dokumen` enum('0','1') NOT NULL,
  `kategori_dokumen` enum('sinode','umum') NOT NULL,
  `judul_dokumen` varchar(500) NOT NULL,
  `tag_dokumen` text NOT NULL,
  `pengarang_dokumen` varchar(500) NOT NULL,
  `sampul_dokumen` varchar(100) NOT NULL,
  `sinopsis_dokumen` text NOT NULL,
  `file_dokumen` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `dokumen`
--

INSERT INTO `dokumen` (`id_dokumen`, `id_penerbit`, `id_jenis_dokumen`, `level_dokumen`, `kategori_dokumen`, `judul_dokumen`, `tag_dokumen`, `pengarang_dokumen`, `sampul_dokumen`, `sinopsis_dokumen`, `file_dokumen`) VALUES
(1, 1, 0, '1', 'sinode', 'pdf', 'pink', 'firsa', 'senja dan ceritanya', 'ketika saya menikmati senja', 'dokumen21200913171837.pdf'),
(2, 2, 0, '0', 'sinode', 'docx', 'sdfaf', 'wers', 'asdfdf', 'adfadfad', 'dokumen20200914042627.docx'),
(3, 2, 0, '1', 'sinode', 'txt', 'fsafadg', 'adfadfad', 'adadgadg', 'dgadgadgda', 'dokumen20200914042740.txt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_buku`
--

CREATE TABLE `jenis_buku` (
  `id_jenis_buku` int(11) NOT NULL,
  `jenis_buku` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_buku`
--

INSERT INTO `jenis_buku` (`id_jenis_buku`, `jenis_buku`) VALUES
(1, 'cerita anak'),
(2, 'pemuda'),
(3, 'orang tua'),
(4, 'remaja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_digital`
--

CREATE TABLE `jenis_digital` (
  `id_jenis_digital` int(11) NOT NULL,
  `jenis_digital` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_digital`
--

INSERT INTO `jenis_digital` (`id_jenis_digital`, `jenis_digital`) VALUES
(1, 'foto'),
(2, 'video'),
(3, 'berkas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_dokumen`
--

CREATE TABLE `jenis_dokumen` (
  `id_jenis_dokumen` int(11) NOT NULL,
  `jenis_dokumen` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_dokumen`
--

INSERT INTO `jenis_dokumen` (`id_jenis_dokumen`, `jenis_dokumen`) VALUES
(1, 'word'),
(2, 'power point');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(888, 'admin'),
(868, 'khusus'),
(858, 'pengurus'),
(999, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `penerbit` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `penerbit`) VALUES
(1, 'kinantest'),
(2, 'nita'),
(3, 'PT.Sulo'),
(4, 'Erlangga'),
(5, 'Yudhistira'),
(6, 'Firsa Besari'),
(7, 'Boy Chandra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_level` int(11) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `nomor_hp` varchar(14) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `backuppass` varchar(100) NOT NULL,
  `validasi_user` enum('ya','tidak') NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `id_level`, `nama_user`, `nomor_hp`, `user_name`, `password`, `backuppass`, `validasi_user`, `update_at`) VALUES
(1, 888, 'Budi', '-', 'admin', '25c2b813bbdfaf30aac0a770adf5c2cc7dcc4e95051ddd4f38cc307e87ede6e12259447734fec742f65e0e312b22eb5d4811482177584f44ff98595b829bb926', '12345678', 'ya', '2020-09-08 04:10:32'),
(2, 888, 'Admin Utama', '-', 'adminutama', '1255b9d32908a0faa302a620e060b7208273f5fafc988ad5a54898f2d2f259e74682ec701c6ba18b0272d14111d7c58e5a87ca0a3bc9a55491b5d833668113df', '123456', 'ya', '2020-09-08 04:23:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`id_daftar_buku`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_jenis_buku` (`id_jenis_buku`),
  ADD KEY `kategori_buku` (`kategori_buku`),
  ADD KEY `judul_buku` (`judul_buku`(333)),
  ADD KEY `tag_buku` (`tag_buku`(333)),
  ADD KEY `pengarang_buku` (`pengarang_buku`(333)),
  ADD KEY `sinopsis_buku` (`sinopsis_buku`(333)),
  ADD KEY `level_buku` (`level_buku`);

--
-- Indeks untuk tabel `digital`
--
ALTER TABLE `digital`
  ADD PRIMARY KEY (`id_digital`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_jenis_digital` (`id_jenis_digital`),
  ADD KEY `level_digital` (`level_digital`),
  ADD KEY `kategori_digital` (`kategori_digital`),
  ADD KEY `judul_digital` (`judul_digital`(333)),
  ADD KEY `tag_digital` (`tag_digital`(333)),
  ADD KEY `pengarang_digital` (`pengarang_digital`(333)),
  ADD KEY `sinopsis_digital` (`sinopsis_digital`(333));

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_jenis_dokumen` (`id_jenis_dokumen`),
  ADD KEY `level_dokumen` (`level_dokumen`),
  ADD KEY `kategori_dokumen` (`kategori_dokumen`),
  ADD KEY `sinopsis_dokumen` (`sinopsis_dokumen`(333)),
  ADD KEY `pengarang_dokumen` (`pengarang_dokumen`(333)),
  ADD KEY `tag_dokumen` (`tag_dokumen`(333)),
  ADD KEY `judul_dokumen` (`judul_dokumen`(333));

--
-- Indeks untuk tabel `jenis_buku`
--
ALTER TABLE `jenis_buku`
  ADD PRIMARY KEY (`id_jenis_buku`),
  ADD KEY `jenis_buku` (`jenis_buku`(333));

--
-- Indeks untuk tabel `jenis_digital`
--
ALTER TABLE `jenis_digital`
  ADD PRIMARY KEY (`id_jenis_digital`),
  ADD KEY `jenis_digital` (`jenis_digital`(333));

--
-- Indeks untuk tabel `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  ADD PRIMARY KEY (`id_jenis_dokumen`),
  ADD KEY `jenis_dokumen` (`jenis_dokumen`(333));

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD UNIQUE KEY `id_level` (`id_level`),
  ADD KEY `level` (`level`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`),
  ADD KEY `penerbit` (`penerbit`(333));

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `password` (`password`),
  ADD KEY `validasi_user` (`validasi_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_buku`
--
ALTER TABLE `daftar_buku`
  MODIFY `id_daftar_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `digital`
--
ALTER TABLE `digital`
  MODIFY `id_digital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jenis_buku`
--
ALTER TABLE `jenis_buku`
  MODIFY `id_jenis_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_digital`
--
ALTER TABLE `jenis_digital`
  MODIFY `id_jenis_digital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jenis_dokumen`
--
ALTER TABLE `jenis_dokumen`
  MODIFY `id_jenis_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
