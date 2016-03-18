-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 mrt 2016 om 09:59
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
  `LinkID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `the_links`
--

INSERT INTO `the_links` (`LinkID`, `Name`, `Url`) VALUES
(1, 'Google', 'https://www.google.be/?gfe_rd=cr&ei=vJPqVv3eI_LU8geQkbLwBw&gws_rd=ssl'),
(2, 'Artesis start', 'http://start.ap.be/'),
(3, 'Armor Games', 'http://armorgames.com/'),
(4, 'Facebook', 'https://www.facebook.com/'),
(5, '9GAG', 'http://9gag.com/'),
(6, 'Hivset', 'http://www.hivset.be/'),
(7, 'Large', 'http://www.large.be/'),
(8, 'delijn', 'https://www.delijn.be/nl/'),
(9, 'Mini In The Box', 'http://www.miniinthebox.com/nl/'),
(10, 'Tribalwars', 'https://www.tribalwars.nl/');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `the_links`
--
ALTER TABLE `the_links`
  ADD PRIMARY KEY (`LinkID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `the_links`
--
ALTER TABLE `the_links`
  MODIFY `LinkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
