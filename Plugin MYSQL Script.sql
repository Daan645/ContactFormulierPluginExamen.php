-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: 149.210.195.88
-- Gegenereerd op: 08 jun 2022 om 10:27
-- Serverversie: 10.1.48-MariaDB-1~stretch
-- PHP-versie: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdjwebdevelopment_nl_examendaan`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `form_entry`
--

CREATE TABLE `form_entry` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `form_entry`
--

INSERT INTO `form_entry` (`id`, `first_name`, `last_name`, `email`, `mobile`, `comment`) VALUES
(1, 'Daan', 'Jacobs', 'daan@videotechniek.nl', 627445970, 'test');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `form_entry`
--
ALTER TABLE `form_entry`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `form_entry`
--
ALTER TABLE `form_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
