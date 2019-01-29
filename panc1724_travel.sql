-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Des 2018 pada 20.12
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panc1724_travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `nama_depan` varchar(15) NOT NULL,
  `nama_belakang` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_ktp` varchar(17) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `paket` int(11) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `jml_peserta` smallint(6) NOT NULL,
  `alamat` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `nama_depan`, `nama_belakang`, `email`, `no_ktp`, `no_hp`, `paket`, `tgl_berangkat`, `jml_peserta`, `alamat`, `status`) VALUES
(12, 'Asep', 'Sutrisno', 'andika@alpha-omega.co.id', '3203281510970004', '087888566296', 6, '2018-10-21', 4, 'as', 1),
(13, 'Andika', 'Ramadhani', 'ramadhaniandika@gmail.com', '3203281510970004', '087888566296', 11, '2018-10-11', 5, 'ltrdsdsd', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `fasilitas` text NOT NULL,
  `id_paket` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `fasilitas`, `id_paket`) VALUES
(15, 'PP Tiket Pesawat', 7),
(13, 'PP Tiket Pesawat', 6),
(14, 'PP Tiket Pesawat', 8),
(12, 'PP Tiket Pesawat', 5),
(16, 'Bus', 5),
(17, 'Hotel *4 / *5 with breakfast', 5),
(18, 'Bus', 8),
(19, 'Hotel *4 / *5 with breakfast', 8),
(20, 'Bus', 6),
(21, 'Hotel *4 / *5 with breakfast', 6),
(22, 'Bus', 7),
(23, 'Hotel *4 / *5 with breakfast', 7),
(24, 'PP Tiket Pesawat', 9),
(25, 'Bus', 9),
(26, 'Hotel *4 / *5 with breakfast', 9),
(27, 'PP Tiket Pesawat', 10),
(28, 'Bus', 10),
(29, 'Hotel *4 / *5 with breakfast', 10),
(30, 'PP Tiket Pesawat', 11),
(31, 'Bus', 11),
(32, 'Hotel *4 / *5 with breakfast', 11),
(33, 'PP Tiket Pesawat', 12),
(34, 'Bus', 12),
(35, 'Hotel *4 / *5 with breakfast', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_gambar` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `kategori` varchar(25) DEFAULT NULL,
  `id_paket` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_gambar`, `gambar`, `kategori`, `id_paket`) VALUES
(18, 'Museum Satwa', 'WhatsApp_Image_2018-10-09_at_10_34_10_PM.jpeg', NULL, 10),
(17, 'Batu Secret Zoo', 'WhatsApp_Image_2018-10-09_at_10_34_05_PM.jpeg', NULL, 10),
(15, 'Batu Secret Zoo', 'WhatsApp_Image_2018-10-09_at_10_34_07_PM11.jpeg', NULL, 10),
(19, 'Hotel', 'WhatsApp_Image_2018-10-09_at_10_34_06_PM.jpeg', NULL, 10),
(20, 'Gardens By The Bay', 'WhatsApp_Image_2018-10-14_at_13_13_09.jpeg', NULL, 12),
(21, 'Merlion Park', 'WhatsApp_Image_2018-10-14_at_13_13_31.jpeg', NULL, 12),
(22, 'Merlion Park', 'WhatsApp_Image_2018-10-14_at_13_13_16.jpeg', NULL, 12),
(23, 'Hotel', 'WhatsApp_Image_2018-10-14_at_13_13_03.jpeg', NULL, 12),
(24, 'Breakfast Hotel', 'WhatsApp_Image_2018-10-14_at_13_13_33.jpeg', NULL, 12),
(28, 'sasd', 'liam-gallagher.jpg', 'assds', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `destinasi` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `paket`, `destinasi`, `harga`) VALUES
(5, 'Paket 3 hari 2 Malam', 'Bali', 0),
(8, 'Paket 3 Hari 2 Malam', 'Jakarta', 0),
(6, 'Paket 4 Hari 3 Malam ', 'Jogja', 0),
(7, 'Paket 4 Hari 3 Malam', 'Bandung', 0),
(9, 'Paket 4 hari 3 malam', 'Surabaya', 0),
(10, 'Paket 4 hari 3 malam', 'Malang', 0),
(11, 'Paket 4 hari 3 malam', 'Bromo', 0),
(12, 'Paket 3 Hari 2 Malam', 'Singapore', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` enum('admin','sales') NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `hak_akses`, `status`) VALUES
(1, 'adm', 'ferrilasmihalim@gmail.com', '42ef63e7836ef622d9185c1a456051edf16095cc', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `paket` (`paket`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
