-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2015 at 12:08 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bankomati`
--


-- --------------------------------------------------------

--
-- Table structure for table `bankomati`
--

DROP TABLE IF EXISTS `bankomati`;
CREATE TABLE IF NOT EXISTS `bankomati` (
  `br_bankomata` int(11) NOT NULL,
  `mjesto_bank` varchar(100) NOT NULL,
  `adr_bankomata` varchar(100) NOT NULL,
  `tip_bank` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bankomati`
--

INSERT INTO `bankomati` (`br_bankomata`, `mjesto_bank`, `adr_bankomata`, `tip_bank`) VALUES
(10027, 'Čazma', 'Kralja Tomislava bb', 'OPTEVA'),
(10035, 'Krapina', 'F.Galovića 9', 'Diebold'),
(10047, 'Zagreb', 'Avenija Dubrovnik 16', 'OPTEVA'),
(10059, 'Zagreb', 'Vrisnička 14', 'OPTEVA'),
(33510, 'Zagreb', 'Škorpikova 34', 'OPTEVA'),
(33610, 'Zagreb', 'Albaharijeva 2', 'OPTEVA'),
(48510, 'Zagreb', 'Heinzelova 57A', 'Diebold'),
(53241, 'Kutina', 'Hrvatskih branitelja 15', 'Diebold'),
(61210, 'Zagreb', 'Ozaljska 158', 'OPTEVA'),
(77363, 'Zagreb', 'Banjavčićeva 13', 'OPTEVA'),
(78210, 'Zagreb', 'Andrije Žaje 49', 'OPTEVA'),
(86310, 'Zagreb', 'Radnička cesta 182', 'Diebold'),
(90910, 'Zagreb,', 'Jadranska avenija bb', 'OPTEVA'),
(93636, 'Brdovec', 'I. Gregorovića 81', 'OPTEVA');

-- --------------------------------------------------------

--
-- Stand-in structure for view `bankomati_view`
--
DROP VIEW IF EXISTS `bankomati_view`;
CREATE TABLE IF NOT EXISTS `bankomati_view` (
`Br_bankomata` int(11)
,`Mjesto` varchar(100)
,`Adresa` varchar(100)
,`Tip` varchar(50)
);
-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

DROP TABLE IF EXISTS `korisnici`;
CREATE TABLE IF NOT EXISTS `korisnici` (
`id` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `adresa` varchar(50) NOT NULL,
  `grad` varchar(20) NOT NULL,
  `drzava` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'netko', 'a145ac0f2d37c1819cbfe5d91984b4b93267c3af');

-- --------------------------------------------------------

--
-- Table structure for table `punjenja`
--

DROP TABLE IF EXISTS `punjenja`;
CREATE TABLE IF NOT EXISTS `punjenja` (
`punjenja_id` int(11) NOT NULL,
  `br_bankomata` int(11) NOT NULL,
  `apoen1` int(10) NOT NULL,
  `apoen2` int(11) NOT NULL,
  `kolicina1` int(10) NOT NULL,
  `kolicina2` int(11) NOT NULL,
  `dat_punjenja` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `punjenja`
--

INSERT INTO `punjenja` (`punjenja_id`, `br_bankomata`, `apoen1`, `apoen2`, `kolicina1`, `kolicina2`, `dat_punjenja`) VALUES
(32, 33610, 100, 200, 2400, 2400, '2015-01-11'),
(33, 33510, 100, 200, 2400, 2400, '2015-02-03'),
(34, 33510, 200, 100, 1800, 600, '2015-02-08'),
(35, 77363, 200, 100, 900, 300, '2015-02-11'),
(36, 86310, 200, 100, 2400, 1200, '2015-02-11');

-- --------------------------------------------------------

--
-- Stand-in structure for view `punjenja_view`
--
DROP VIEW IF EXISTS `punjenja_view`;
CREATE TABLE IF NOT EXISTS `punjenja_view` (
`Broj_Bankomata` int(11)
,`Mjesto bankomata` varchar(100)
,`Adresa bankomata` varchar(100)
,`Tip bankomata` varchar(50)
,`Datum_punjenja` varchar(10)
,`Prvi Apoen` int(10)
,`Drugi Apoen` int(11)
,`Komada prvog apoena` int(10)
,`Komada drugog apoena` int(11)
,`Br_specifikacije` int(11)
);
-- --------------------------------------------------------

--
-- Table structure for table `racun`
--

DROP TABLE IF EXISTS `racun`;
CREATE TABLE IF NOT EXISTS `racun` (
`racun_id` int(11) NOT NULL,
  `korisnik_id` int(11) NOT NULL,
  `tip_kartice` varchar(10) NOT NULL,
  `br_kartice` int(11) NOT NULL,
  `izr_racuna` date NOT NULL,
  `zat_racuna` date DEFAULT NULL,
  `status` enum('AKTIVAN','ZATVOREN','ZAMRZNUT') DEFAULT NULL,
  `stanje_rac` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transakcije`
--

DROP TABLE IF EXISTS `transakcije`;
CREATE TABLE IF NOT EXISTS `transakcije` (
`transakcija_id` int(11) NOT NULL,
  `br_bankomata` int(11) NOT NULL,
  `korisnik_id` int(11) NOT NULL,
  `racun_id` int(11) NOT NULL,
  `dat_transak` datetime NOT NULL,
  `iznos` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure for view `bankomati_view`
--
DROP TABLE IF EXISTS `bankomati_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bankomati_view` AS select `br_bankomata` AS `Br_bankomata`,`mjesto_bank` AS `Mjesto`,`adr_bankomata` AS `Adresa`,`tip_bank` AS `Tip` from `bankomati` order by `br_bankomata`,`mjesto_bank`,`adr_bankomata`,`tip_bank`;

-- --------------------------------------------------------

--
-- Structure for view `punjenja_view`
--
DROP TABLE IF EXISTS `punjenja_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `punjenja_view` AS select `m`.`br_bankomata` AS `Broj_Bankomata`,`m`.`mjesto_bank` AS `Mjesto bankomata`,`m`.`adr_bankomata` AS `Adresa bankomata`,`m`.`tip_bank` AS `Tip bankomata`,date_format(`z`.`dat_punjenja`,'%d.%m.%Y') AS `Datum_punjenja`,`z`.`apoen1` AS `Prvi Apoen`,`z`.`apoen2` AS `Drugi Apoen`,`z`.`kolicina1` AS `Komada prvog apoena`,`z`.`kolicina2` AS `Komada drugog apoena`,`z`.`punjenja_id` AS `Br_specifikacije` from (`bankomati` `m` join `punjenja` `z` on((`z`.`br_bankomata` = `m`.`br_bankomata`))) order by `m`.`br_bankomata`,`m`.`mjesto_bank`,`m`.`adr_bankomata`,`m`.`tip_bank`,`z`.`dat_punjenja`,`z`.`apoen1`,`z`.`apoen2`,`z`.`kolicina1`,`z`.`kolicina2`,`z`.`punjenja_id`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankomati`
--
ALTER TABLE `bankomati`
 ADD PRIMARY KEY (`br_bankomata`), ADD KEY `br_bankomata` (`br_bankomata`), ADD KEY `br_bankomata_2` (`br_bankomata`), ADD KEY `adr_bankomata` (`adr_bankomata`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `punjenja`
--
ALTER TABLE `punjenja`
 ADD PRIMARY KEY (`punjenja_id`), ADD KEY `br_bankomata` (`br_bankomata`);

--
-- Indexes for table `racun`
--
ALTER TABLE `racun`
 ADD PRIMARY KEY (`racun_id`), ADD KEY `korisnik_id` (`korisnik_id`), ADD KEY `racun_id` (`racun_id`), ADD KEY `korisnik_id_2` (`korisnik_id`);

--
-- Indexes for table `transakcije`
--
ALTER TABLE `transakcije`
 ADD PRIMARY KEY (`transakcija_id`), ADD KEY `racun_id` (`racun_id`), ADD KEY `korisnik_id` (`korisnik_id`), ADD KEY `br_bankomata` (`br_bankomata`), ADD KEY `transakcija_id` (`transakcija_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `punjenja`
--
ALTER TABLE `punjenja`
MODIFY `punjenja_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `racun`
--
ALTER TABLE `racun`
MODIFY `racun_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transakcije`
--
ALTER TABLE `transakcije`
MODIFY `transakcija_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `punjenja`
--
ALTER TABLE `punjenja`
ADD CONSTRAINT `punjenja_ibfk_1` FOREIGN KEY (`br_bankomata`) REFERENCES `bankomati` (`br_bankomata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `racun`
--
ALTER TABLE `racun`
ADD CONSTRAINT `racun_ibfk_1` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnici` (`id`);

--
-- Constraints for table `transakcije`
--
ALTER TABLE `transakcije`
ADD CONSTRAINT `FK_br_bankomata` FOREIGN KEY (`br_bankomata`) REFERENCES `bankomati` (`br_bankomata`),
ADD CONSTRAINT `FK_id` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnici` (`id`),
ADD CONSTRAINT `FK_racun_id` FOREIGN KEY (`racun_id`) REFERENCES `racun` (`racun_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
