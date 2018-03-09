-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 09 mrt 2018 om 14:42
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daan_hertogs_guestbook`
--
CREATE DATABASE IF NOT EXISTS `daan_hertogs_guestbook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `daan_hertogs_guestbook`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `guestbookId` int(3) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `insertion` varchar(100) NOT NULL,
  `messageTitle` varchar(100) NOT NULL,
  PRIMARY KEY (`guestbookId`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `guestbook`
--

INSERT INTO `guestbook` (`guestbookId`, `firstName`, `lastName`, `message`, `email`, `website`, `insertion`, `messageTitle`) VALUES
(1, 'Daan', 'Hertogs', 'hubsjbuuvdvds', '', '', '', ''),
(2, 'Umair', 'Saeed', 'Play fortnite in lesson', 'umairsaeed32@hotmail.com', 'www.fortnite.com', '', 'Fortnite'),
(3, 'Umair', 'Saeed', 'Play fortnite in lesson', 'umairsaeed32@hotmail.com', 'www.fortnite.com', '', 'Fortnite'),
(4, 'Umair', 'Saeed', 'Play fortnite in lesson', 'umairsaeed32@hotmail.com', 'www.fortnite.com', '', 'Fortnite'),
(5, 'Umair', 'Saeed', 'Play fortnite in lesson', 'umairsaeed32@hotmail.com', 'www.fortnite.com', '', 'Fortnite'),
(6, 'Umair', 'Saeed', 'Play fortnite in lesson', 'umairsaeed32@hotmail.com', 'www.fortnite.com', '', 'Fortnite'),
(7, 'daan', 'hertogs', 'sadad', 'sadaDW', 'DFSAAsda', '', 'project'),
(8, 'tr6h', 'rtgs', 'gtds', 'ser', 'sdgr', 'trgs', 'gst'),
(9, 'tr6h', 'rtgs', 'gtds', 'ser', 'sdgr', 'trgs', 'gst'),
(10, 'fD', 'cxz', 'x', 'zd', 'asS', 'dFZx', 'x'),
(11, 'fD', 'cxz', 'x', 'zd', 'asS', 'dFZx', 'x'),
(12, 'fD', 'cxz', 'x', 'zd', 'asS', 'dFZx', 'x'),
(13, 'fD', 'cxz', 'x', 'zd', 'asS', 'dFZx', 'x');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
