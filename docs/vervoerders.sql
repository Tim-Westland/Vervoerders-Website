-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 11 jun 2015 om 10:06
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `vervoerders`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bedrijf`
--

CREATE TABLE IF NOT EXISTS `bedrijf` (
  `bedrijfs-id` int(11) NOT NULL AUTO_INCREMENT,
  `transport-manager` varchar(50) NOT NULL,
  `aantal` varchar(50) NOT NULL,
  `rechtsvorm` varchar(50) NOT NULL,
  `vergunning` varchar(50) NOT NULL,
  `geldig tot` varchar(50) NOT NULL,
  `bedrijfs-email` varchar(50) NOT NULL,
  PRIMARY KEY (`bedrijfs-id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bedrijfgegevens`
--

CREATE TABLE IF NOT EXISTS `bedrijfgegevens` (
  `bedrijfs-id` int(11) NOT NULL AUTO_INCREMENT,
  `bedrijfsnaam` char(50) NOT NULL,
  `adres` char(50) NOT NULL,
  `postcode` char(50) NOT NULL,
  `plaats` char(50) NOT NULL,
  `provincie` char(50) NOT NULL,
  `telefoon` char(50) NOT NULL,
  `fax` char(50) NOT NULL,
  `specialiteit` char(50) NOT NULL,
  `type` char(50) NOT NULL,
  `bereik` char(50) NOT NULL,
  `transport-manager` varchar(50) NOT NULL,
  `aantal` int(11) NOT NULL,
  `rechtsvorm` varchar(50) NOT NULL,
  `vergunning` varchar(3) NOT NULL,
  `geldig-tot` varchar(8) NOT NULL,
  `berijfs-email` varchar(50) NOT NULL,
  PRIMARY KEY (`bedrijfs-id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `gebruiker_id` int(11) NOT NULL AUTO_INCREMENT,
  `bedrijfs_id` int(11) NOT NULL,
  `inlognaam` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `wachtwoord` char(128) NOT NULL,
  `salt` char(128) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`gebruiker_id`),
  UNIQUE KEY `bedrijf-id` (`bedrijfs_id`,`inlognaam`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`gebruiker_id`, `bedrijfs_id`, `inlognaam`, `email`, `wachtwoord`, `salt`, `level`) VALUES
(1, 0, 'admin', '', '11cd68dd995a00caf08f5304de746d965a610190acd5490e037dd8980f37478e94f1ac80e9667801f867c43ad74cb8507be07b07606f599b29ffb9b17139e569', '958cb0fee5486a62c9e742b940856e784d190d9dd71601f868e5ea282e591d28eefc2a64aea41c55ff4334b3a6187676e246dc1dd6278e57e74c529007c9abf3', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `paginanr` int(11) NOT NULL,
  `tekst` varchar(10) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`paginanr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `menu`
--

INSERT INTO `menu` (`paginanr`, `tekst`, `level`) VALUES
(2, 'Gids', 0),
(3, 'Zoeken', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;