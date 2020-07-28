-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2020 pada 03.29
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorialweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `tgl_upload` text NOT NULL,
  `nama` blob NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `dilihat` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `tgl_upload`, `nama`, `keterangan`, `dilihat`) VALUES
(85, 'Tuesday, 2020-07-28 08:20:27', 0x312e6a7067, 'bunga kuning', 1),
(86, 'Tuesday, 2020-07-28 08:23:44', 0x322e6a7067, 'gurun', 0),
(87, 'Tuesday, 2020-07-28 08:23:55', 0x332e6a7067, 'bunga 3\r\n', 0),
(88, 'Tuesday, 2020-07-28 08:24:09', 0x342e6a7067, 'ubur-ubur', 0),
(89, 'Tuesday, 2020-07-28 08:24:25', 0x352e6a7067, 'koala', 0),
(90, 'Tuesday, 2020-07-28 08:24:51', 0x362e6a7067, 'deermaga', 0),
(91, 'Tuesday, 2020-07-28 08:25:07', 0x372e6a7067, 'pinguin', 0),
(92, 'Tuesday, 2020-07-28 08:25:28', 0x4375702d776974682d636f666665652d61627374726163742d696c6c757374726174696f6e2d766563746f722d30322e6a7067, 'kopi gan', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
