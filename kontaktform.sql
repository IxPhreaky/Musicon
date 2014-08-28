-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Vært: localhost
-- Genereringstid: 27. 05 2014 kl. 12:25:28
-- Serverversion: 5.5.8
-- PHP-version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kontaktform`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bestil`
--

CREATE TABLE IF NOT EXISTS `bestil` (
  `ID` int(8) NOT NULL AUTO_INCREMENT,
  `Navn` varchar(35) NOT NULL,
  `Kortnummer` int(16) NOT NULL,
  `Sikkerhedsnummer` int(3) NOT NULL,
  `Adresse` varchar(20) NOT NULL,
  `Besked` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Data dump for tabellen `bestil`
--

INSERT INTO `bestil` (`ID`, `Navn`, `Kortnummer`, `Sikkerhedsnummer`, `Adresse`, `Besked`) VALUES
(1, 'yolo', 2147483647, 0, '123 svendelbo', 'weqwe'),
(2, 'yolo', 2147483647, 0, '123 svendelbo', 'weqwe'),
(3, 'yolo', 2147483647, 0, '123 svendelbo', 'erww'),
(4, 'yolo', 2147483647, 123, '123 svendelbo', 'weq');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kontaktliste`
--

CREATE TABLE IF NOT EXISTS `kontaktliste` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Navn` varchar(45) NOT NULL,
  `Mobil` int(8) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Besked` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Data dump for tabellen `kontaktliste`
--

INSERT INTO `kontaktliste` (`ID`, `Navn`, `Mobil`, `Email`, `Besked`) VALUES
(1, '', 0, '', ''),
(2, '', 0, 'qwe', ''),
(3, 'qwe', 0, 'qwe', 'qwe'),
(4, 'qwe', 0, 'qwe', 'qwe'),
(5, 'qwe', 0, 'qwe', 'qwe'),
(6, 'qwe', 0, 'qwe', 'qwe'),
(7, 'qwe', 0, 'qwe', 'qwe'),
(8, 'qwe', 0, 'qwe', 'qwe'),
(9, 'qwe', 0, 'qwe', 'qwe'),
(10, 'qwe', 0, 'qwe', 'qwe'),
(11, 'halo', 12345678, 'halo@live.dk', '3erw'),
(12, 'halo', 12345678, 'halo@live.dk', '3erw'),
(13, 'halo', 12345678, 'halo@live.dk', '3erw'),
(14, 'halo', 12345678, 'halo@live.dk', '3erw'),
(15, 'halo', 12345678, 'halo@live.dk', '3erw'),
(16, 'wqe', 0, 'qwe', ''),
(17, '3erw', 0, 'werewr', 'wer'),
(18, '3erw', 0, 'werewr', 'wer'),
(19, 'wqe', 0, 'qwe', ''),
(20, 'wqe', 0, 'qwe', ''),
(21, 'qwe', 0, 'qwe@eor.com', 'qwe');
