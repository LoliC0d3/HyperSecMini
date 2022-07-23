-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2022 pada 17.38
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hypersec`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `release` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anime`
--

INSERT INTO `anime` (`id`, `title`, `release`, `category`) VALUES
(1, 'Kaguya-sama wa Kokurasetai: Ultra Romantic', 'Apr 2022 - Jun 2022', 'TV'),
(2, 'Fullmetal Alchemist: Brotherhood', 'Apr 2009 - Jul 2010', 'TV'),
(3, 'Kimi no Na wa', 'Aug 2016 - Aug 2016', 'Movie'),
(4, 'Fate/stay night Movie: Heaven\'s Feel - III. Spring Song', 'Aug 2020 - Aug 2020', 'Movie');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `footer` varchar(100) NOT NULL,
  `menu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `title`, `img`, `footer`, `menu`) VALUES
(1, 'HyperSec', 'slebew.png', 'Ali Akbar', 'HyperSec');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `organisasi` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `img`, `nama`, `username`, `email`, `password`, `bio`, `kelamin`, `organisasi`, `role`) VALUES
(1, '4355954.jpg', 'user', 'user', 'user@mail.com', '123', '', 'Male', 'Mitga', 'user'),
(2, '_22_gesugao-wallpapers_1599610860.jpg', 'admin', 'admin', 'admin@admin.com', '123', '', 'Male', 'Mitga', 'admin'),
(4, 'Tak berjudul1578-12.jpg', 'nonamea', 'noname', 'noname@mail.com', '123', '1', 'Female', 'Mitga', 'admin'),
(13, 'wp6139334-gesugao-wallpapers.jpg', 'Sample User', 'Sample User', 'sample@mail.com', '123', 'sample', 'Female', 'sample', 'user'),
(14, 'menhera-chan-chibi.gif', 'Dummy User', 'Dummy User', 'dummy@mail.com', '123', 'dummy', 'Male', 'dummy', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
