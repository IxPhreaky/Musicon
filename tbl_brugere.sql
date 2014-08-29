-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 29. 08 2014 kl. 10:22:09
-- Serverversion: 5.6.16
-- PHP-version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `musicon`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `tbl_brugere`
--

CREATE TABLE IF NOT EXISTS `tbl_brugere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brugernavn` varchar(100) NOT NULL,
  `fornavn` varchar(80) NOT NULL,
  `efternavn` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adgangskode` varchar(25) NOT NULL,
  `medlemsiden` datetime NOT NULL,
  `godkendt` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Data dump for tabellen `tbl_brugere`
--

INSERT INTO `tbl_brugere` (`id`, `brugernavn`, `fornavn`, `efternavn`, `email`, `adgangskode`, `medlemsiden`, `godkendt`) VALUES
(1, 'Johan', 'johan', 'johan', 'test@hotmail.com', 'n123', '2014-08-28 11:46:51', 0),
(2, '', '', '', '', '', '2014-08-28 11:46:52', 0),
(3, '', '', '', '', '', '2014-08-28 11:46:53', 0),
(4, '', '', '', '', '', '2014-08-28 11:46:53', 0),
(5, '', '', '', '', '', '2014-08-28 12:46:18', 0),
(6, '', '', '', '', '', '2014-08-28 12:46:29', 0),
(7, '', '', '', '', '', '2014-08-28 12:46:29', 0),
(8, '', '', '', '', '', '2014-08-28 12:46:29', 0),
(9, '', '', '', '', '', '2014-08-28 12:46:30', 0),
(10, '', '', '', '', '', '2014-08-28 12:46:30', 0),
(11, '', '', '', '', '', '2014-08-28 12:46:30', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
