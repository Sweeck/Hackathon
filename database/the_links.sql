-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 mrt 2016 om 13:08
-- Serverversie: 10.1.10-MariaDB
-- PHP-versie: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linksdb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `the_links`
--

CREATE TABLE `the_links` (
  `link_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `the_links`
--

INSERT INTO `the_links` (`link_id`, `name`, `url`, `id`) VALUES
(0, '9gag', 'http://9gag.com/', 1),
(0, 'Artesis Plantijn', 'https://www.ap.be/', 2),
(0, 'armorgames', 'http://armorgames.com/', 3),
(0, 'facebook', 'https://www.facebook.com/', 4),
(0, 'google', 'https://www.google.be/', 5),
(0, 'h-brug', 'https://nl.wikipedia.org/wiki/H-brug_(elektronica)', 6),
(0, 'hivset', 'http://www.hivset.be/', 7),
(0, 'large', 'http://www.large.be/', 8),
(0, 'de lijn', 'https://www.delijn.be/nl/routeplanner/', 9),
(0, 'mini in the box', 'http://www.miniinthebox.com/', 10),
(0, 'tribalwars', 'https://www.tribalwars.nl/', 11);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `the_links`
--
ALTER TABLE `the_links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `the_links`
--
ALTER TABLE `the_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
