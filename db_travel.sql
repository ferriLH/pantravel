-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jan 2019 pada 18.07
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
-- Database: `db_travel`
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
(3, 'jorgi', 'nigga', 'nigga@jorgi.fatwa', '12345678', '012345678', 0, '2018-09-28', 1, 'asasas', 0),
(7, 'jorgi', 'nigga', 'nigga@jorgi.fatwa', '12345678', '1212111111', 0, '2018-09-30', 1, 'sas', 0),
(9, 'jorgi', 'nigga', 'ferrilasmihalim@gmail.com', '12345678', '1212111111', 4, '2018-09-30', 2, 'asa', 0),
(11, 'ferri', 'halim', 'rizki@hemek.com', '74145312645', '1234567890', 4, '2018-10-02', 1, 'ltr', 0),
(12, 'asdas', 'asdas', 'rizki@hemek.com', '213213', '123123', 2, '2018-10-10', 221, 'ltr', 0),
(13, 'ferri', 'halim', 'ferrilasmihalim@gmail.com', '74145312645', '2133333333333', 4, '2018-10-10', 2, 'ltr', 0),
(15, 'ferri', 'halim', 'ferrilasmihalim@gmail.com', '74145312645', '2233', 2, '2018-10-10', 12, 'ssdsa', 0),
(16, 'ferri', 'halim', 'rizki@hemek.com', '74145312645', '21312', 1, '2018-10-10', 2, '', 0),
(17, 'ferri', 'halim', 'ferrilasmihalim@gmail.com', '2121', '21', 1, '2018-10-10', 2, 'asdsad', 0);

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
(1, 'asd', 1),
(2, 'ggggg', 1),
(3, 'ggggg', 1),
(7, 'Minuman', 4),
(8, 'Makanan', 4),
(9, 'Coffee', 4),
(10, 'Bacot', 2),
(11, 'ssdsdsds', 5),
(12, 'sdsds', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_gambar` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_paket` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_gambar`, `gambar`, `id_paket`) VALUES
(10, 'Vertikal Fobes', '1514.jpg', 4),
(11, 'Liam Gallagher', 'liam-gallagher.jpg', 1),
(12, 'Liam Gallagher', 'Liam+Gallagher,+The+SSE+Hydro+Glasgow,+4-12-17-7.jpg', 1),
(13, 'Malioboro', 'Malioboro.jpg', 2),
(14, 'Universal Studios', 'SG-USS_1024x1024.jpg', 1),
(15, 'Batu Secret Zoo', 'WhatsApp_Image_2018-10-09_at_10_34_07_PM.jpeg', 4),
(16, 'asasas', 'WhatsApp_Image_2018-10-09_at_10_33_59_PM.jpeg', 2),
(17, 'zxzx', 'WhatsApp_Image_2018-10-09_at_10_33_59_PM1.jpeg', 1),
(18, 'asassa', 'WhatsApp_Image_2018-10-09_at_10_33_59_PM2.jpeg', 5);

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
(1, 'group', 'assss', 20000),
(2, 'meeting', 'assss', 10000000),
(4, 'Vertikal Foods & Beverages', '', 2000000),
(5, 'Shits', 'Antartika', 123456);

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
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
