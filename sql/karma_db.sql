-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2022 pada 19.30
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karma_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw_card`
--

CREATE TABLE `rw_card` (
  `id_user` int(11) NOT NULL,
  `id_card` int(11) NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `att_power` int(11) NOT NULL,
  `def_power` int(11) NOT NULL,
  `card_type` varchar(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `hand_card` varchar(100) NOT NULL,
  `highlight` varchar(100) NOT NULL,
  `selectImg` varchar(100) NOT NULL,
  `rarity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw_deck`
--

CREATE TABLE `rw_deck` (
  `id_card` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `att_power` int(11) NOT NULL,
  `def_power` int(11) NOT NULL,
  `card_type` varchar(11) NOT NULL,
  `battle_card` varchar(100) NOT NULL,
  `hand_card` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw_history`
--

CREATE TABLE `rw_history` (
  `id_user` int(11) NOT NULL,
  `p1_card` int(3) NOT NULL,
  `cpu_card` int(3) NOT NULL,
  `p1_hp` int(10) NOT NULL,
  `cpu_hp` int(10) NOT NULL,
  `win_lose` varchar(5) NOT NULL,
  `date` varchar(20) NOT NULL,
  `play_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw_users`
--

CREATE TABLE `rw_users` (
  `id_user` int(11) NOT NULL,
  `gold` int(100) NOT NULL,
  `exp` int(100) NOT NULL,
  `gems` int(100) NOT NULL,
  `level` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `saldo` int(255) NOT NULL,
  `name` text NOT NULL,
  `bio` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `email`, `no_telp`, `saldo`, `name`, `bio`, `status`) VALUES
(1, 'hahaha', '$2y$10$C/8z76JSA6DpRbKbASGTFOR/IeaaOzxe9JVvpzHZFhEhY5nUlxK/a', 'hahaha@gmail.com', 81234241, 0, 'haha', '', ''),
(2, 'hihi', '$2y$10$FBtXmS/qk.05tI.gMEYy/OTLH7YrSQWlLpS/tBY/OYspvJ3AHzISC', 'hihi@gmail.com', 8612633, 0, 'hihihi', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rw_card`
--
ALTER TABLE `rw_card`
  ADD UNIQUE KEY `id_card` (`id_card`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `rw_deck`
--
ALTER TABLE `rw_deck`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `rw_deck_ibfk_2` (`id_card`);

--
-- Indeks untuk tabel `rw_history`
--
ALTER TABLE `rw_history`
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `rw_users`
--
ALTER TABLE `rw_users`
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `rw_card`
--
ALTER TABLE `rw_card`
  ADD CONSTRAINT `rw_card_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `rw_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rw_deck`
--
ALTER TABLE `rw_deck`
  ADD CONSTRAINT `rw_deck_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `rw_users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rw_deck_ibfk_2` FOREIGN KEY (`id_card`) REFERENCES `rw_card` (`id_card`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rw_history`
--
ALTER TABLE `rw_history`
  ADD CONSTRAINT `rw_history_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `rw_users` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `rw_users`
--
ALTER TABLE `rw_users`
  ADD CONSTRAINT `rw_users_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
