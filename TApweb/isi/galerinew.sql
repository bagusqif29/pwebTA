-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2020 pada 12.16
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
(1, 'Tuesday, 2020-07-28 08:20:27', 0x312e6a7067, 'bunga kuning', 2),
(95, 'Tuesday, 2020-07-28 16:34:50', 0x42756e676120417374657220616d656c6c75732e6a7067, 'bunga aster amellus', 1),
(96, 'Tuesday, 2020-07-28 16:35:40', 0x42756e6761204461686c69612e6a7067, 'r5\">\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute i', 0),
(97, 'Tuesday, 2020-07-28 16:35:51', 0x67616d6261722062756e676120616e676772656b2e6a7067, 'r5\">\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute i', 0),
(98, 'Tuesday, 2020-07-28 16:36:06', 0x67616d6261722062756e6761206d617461686172692e6a7067, 'bunga matahari', 1),
(99, 'Tuesday, 2020-07-28 16:36:19', 0x67616d6261722062756e6761206d6177617220626972752e6a7067, 'r5\">\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute i', 0),
(100, 'Tuesday, 2020-07-28 16:36:33', 0x67616d6261722062756e6761206d617761722e6a7067, 'r5\">\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute i', 1),
(101, 'Tuesday, 2020-07-28 16:36:45', 0x67616d6261722062756e67612073616b7572612e6a7067, 'sakura', 1),
(102, 'Tuesday, 2020-07-28 16:36:58', 0x47616d6261722062756e676120746572617461692031352e6a7067, 'teratai', 0),
(103, 'Tuesday, 2020-07-28 16:37:11', 0x67616d6261722062756e67612074756c69702e6a7067, 'tulip merah', 0),
(104, 'Tuesday, 2020-07-28 16:37:24', 0x4b756d70756c616e2047616d6261722042756e67612043616e74696b20426572696b75742050656e6a656c6173616e6e79612e6a7067, 'r5\">\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute i', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
