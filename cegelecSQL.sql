-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 13, 2015 at 09:15 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cegelec`
--
CREATE DATABASE IF NOT EXISTS `cegelec` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cegelec`;

-- --------------------------------------------------------

--
-- Table structure for table `cursus`
--

CREATE TABLE `cursus` (
  `cursus_id` int(11) NOT NULL,
  `cursus_startDatum` varchar(45) DEFAULT NULL,
  `cursus_eindDatum` varchar(45) DEFAULT NULL,
  `fk_opleiding_id` int(11) NOT NULL,
  `fk_locatie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cursus_gebruiker`
--

CREATE TABLE `cursus_gebruiker` (
  `cursus_gebruiker_id` varchar(45) NOT NULL,
  `cursus_id` int(11) NOT NULL,
  `gebruiker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cursusblok`
--

CREATE TABLE `cursusblok` (
  `cursusblok_id` int(10) unsigned NOT NULL,
  `cursusblok_naam` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `cursusblok_aanwezigheid` int(100) NOT NULL,
  `cursusblok_evaluatiedatum` date DEFAULT NULL,
  `cursusblok_progressie` int(100) DEFAULT NULL,
  `cursusblok_resultaat` int(100) DEFAULT NULL,
  `cursusblok_eind_datum` date DEFAULT NULL,
  `cursus_id` int(11) NOT NULL,
  `opleidingsblok_opleidingblok_id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gebruiker`
--

CREATE TABLE `gebruiker` (
  `gebruiker_id` int(11) NOT NULL,
  `gebruiker_user` varchar(45) NOT NULL,
  `gebruiker_wachtwoord` varchar(1024) NOT NULL,
  `gebruiker_voornaam` varchar(30) NOT NULL,
  `gebruiker_tussenvoegsel` varchar(10) NOT NULL,
  `gebruiker_achternaam` varchar(60) NOT NULL,
  `gebruiker_email` varchar(50) DEFAULT NULL,
  `gebruiker_geboorteDatum` date DEFAULT NULL,
  `gebruiker_adres` varchar(45) DEFAULT NULL,
  `gebruiker_woonplaats` varchar(45) DEFAULT NULL,
  `gebruiker_telefoonPrive` varchar(20) DEFAULT NULL,
  `gebruiker_telefoonWerk` varchar(20) DEFAULT NULL,
  `gebruiker_inDienst` date DEFAULT NULL,
  `gebruiker_functie` varchar(30) DEFAULT NULL,
  `gebruiker_actief` varchar(10) NOT NULL,
  `gebruiker_bijzonder` varchar(1024) DEFAULT NULL,
  `rechten` varchar(2048) NOT NULL,
  `sessie_id` int(10) NOT NULL,
  `gebruiker_coachID` varchar(45) DEFAULT NULL,
  `gebruiker_projectleiderID` varchar(45) DEFAULT NULL,
  `gebruiker_docentID` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gebruiker`
--

INSERT INTO `gebruiker` (`gebruiker_id`, `gebruiker_user`, `gebruiker_wachtwoord`, `gebruiker_voornaam`, `gebruiker_tussenvoegsel`, `gebruiker_achternaam`, `gebruiker_email`, `gebruiker_geboorteDatum`, `gebruiker_adres`, `gebruiker_woonplaats`, `gebruiker_telefoonPrive`, `gebruiker_telefoonWerk`, `gebruiker_inDienst`, `gebruiker_functie`, `gebruiker_actief`, `gebruiker_bijzonder`, `rechten`, `sessie_id`, `gebruiker_coachID`, `gebruiker_projectleiderID`, `gebruiker_docentID`) VALUES
(1, 'admin', 'ef654c40ab4f1747fc699915d4f70902', 'John', '', 'Do', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'a:3:{i:0;s:2:"16";i:1;s:3:"128";i:2;s:3:"256";}', 2, NULL, NULL, NULL),
(2, 'admintest', 'ef654c40ab4f1747fc699915d4f70902', 'Marc', 'de', 'Boer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, 'a:3:{i:0;s:2:"16";i:1;s:3:"128";i:2;s:3:"256";}', 2, NULL, NULL, NULL);


-- --------------------------------------------------------

--
-- Table structure for table `gebruiker_type`
--

CREATE TABLE `gebruiker_type` (
  `gebruiker_type_id` int(11) NOT NULL,
  `gebruiker_type_naam` varchar(45) NOT NULL,
  `gebruiker_gebruiker_id` int(11) NOT NULL,
  `rechtgroep_rechtgroep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locatie`
--

CREATE TABLE `locatie` (
  `locatie_id` int(11) NOT NULL,
  `locatie_naam` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `locatie_status` tinyint(1) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locatie_gebruiker`
--

CREATE TABLE `locatie_gebruiker` (
  `locatie_gebruiker_id` int(11) NOT NULL,
  `locatie_id` int(11) NOT NULL,
  `gebruiker_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `measure`
--

CREATE TABLE `measure` (
  `measure_id` int(11) NOT NULL,
  `measure_kleurwaarde` varchar(45) DEFAULT NULL,
  `measure_startwaarde` varchar(45) DEFAULT NULL,
  `measure_eindwaarde` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `opleiding`
--

CREATE TABLE `opleiding` (
  `opleiding_id` int(11) NOT NULL,
  `opleiding_naam` varchar(25) NOT NULL,
  `opleiding_start_datum` date DEFAULT NULL,
  `opleiding_eind_datum` date DEFAULT NULL,
  `opleiding_niveau` int(10) DEFAULT NULL,
  `opleiding_voortgang` int(100) DEFAULT NULL,
  `opleiding_duur` int(20) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `opleidingsblok`
--

CREATE TABLE `opleidingsblok` (
  `opleidingblok_id` int(11) NOT NULL,
  `opleidingblok_naam` varchar(45) DEFAULT NULL,
  `opleidingblok_beschrijving` varchar(45) DEFAULT NULL,
  `fk_opleiding_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recht`
--

CREATE TABLE `recht` (
  `recht_id` int(11) NOT NULL,
  `recht_positie` int(20) NOT NULL,
  `recht_beschrijving` varchar(300) NOT NULL,
  `recht_onderdeel` char(50) NOT NULL,
  `recht_groep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rechtgroep`
--

CREATE TABLE `rechtgroep` (
  `rechtgroep_id` int(11) NOT NULL,
  `recht_bitfield` int(20) NOT NULL,
  `rechtgroep_beschrijving` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rechtgroep`
--

INSERT INTO `rechtgroep` (`rechtgroep_id`, `recht_bitfield`, `rechtgroep_beschrijving`) VALUES
(1, 2048, 'Admin'),
(2, 1024, 'Projectleider'),
(3, 512, 'Coach'),
(4, 256, 'Docent'),
(5, 128, 'Leerling');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursus`
--
ALTER TABLE `cursus`
  ADD PRIMARY KEY (`cursus_id`),
  ADD KEY `fk_opleiding_id` (`opleiding_id`),
  ADD KEY `fk_locatie_id` (`locatie_id`);

--
-- Indexes for table `cursus_gebruiker`
--
ALTER TABLE `cursus_gebruiker`
  ADD PRIMARY KEY (`cursus_gebruiker_id`),
  ADD KEY `fk_cursus_has_gebruiker_gebruiker1_idx` (`gebruiker_id`),
  ADD KEY `fk_cursus_has_gebruiker_cursus1_idx` (`cursus_id`);

--
-- Indexes for table `cursusblok`
--
ALTER TABLE `cursusblok`
  ADD PRIMARY KEY (`cursusblok_id`),
  ADD KEY `fk_cursusblok_cursus1_idx` (`cursus_id`),
  ADD KEY `fk_cursusblok_opleidingsblok1_idx` (`opleidingsblok_opleidingblok_id`);

--
-- Indexes for table `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`gebruiker_id`),
  ADD UNIQUE KEY `gebruiker_user` (`gebruiker_user`);

--
-- Indexes for table `gebruiker_type`
--
ALTER TABLE `gebruiker_type`
  ADD PRIMARY KEY (`gebruiker_type_id`),
  ADD KEY `fk_gebruiker_type_gebruiker1_idx` (`gebruiker_gebruiker_id`),
  ADD KEY `fk_gebruiker_type_rechtgroep1_idx` (`rechtgroep_rechtgroep_id`);

--
-- Indexes for table `locatie`
--
ALTER TABLE `locatie`
  ADD PRIMARY KEY (`locatie_id`);

--
-- Indexes for table `locatie_gebruiker`
--
ALTER TABLE `locatie_gebruiker`
  ADD PRIMARY KEY (`locatie_gebruiker_id`),
  ADD KEY `fk_locatie_has_gebruiker_gebruiker1_idx` (`gebruiker_id`),
  ADD KEY `fk_locatie_has_gebruiker_locatie1_idx` (`locatie_id`);

--
-- Indexes for table `measure`
--
ALTER TABLE `measure`
  ADD PRIMARY KEY (`measure_id`);

--
-- Indexes for table `opleiding`
--
ALTER TABLE `opleiding`
  ADD PRIMARY KEY (`opleiding_id`);

--
-- Indexes for table `opleidingsblok`
--
ALTER TABLE `opleidingsblok`
  ADD PRIMARY KEY (`opleidingblok_id`),
  ADD KEY `fk_opleidingsblok_opleiding_idx` (`fk_opleiding_id`);

--
-- Indexes for table `recht`
--
ALTER TABLE `recht`
  ADD PRIMARY KEY (`recht_id`);

--
-- Indexes for table `rechtgroep`
--
ALTER TABLE `rechtgroep`
  ADD PRIMARY KEY (`rechtgroep_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursusblok`
--
ALTER TABLE `cursusblok`
  MODIFY `cursusblok_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `gebruiker_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gebruiker_type`
--
ALTER TABLE `gebruiker_type`
  MODIFY `gebruiker_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `locatie`
--
ALTER TABLE `locatie`
  MODIFY `locatie_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `opleiding`
--
ALTER TABLE `opleiding`
  MODIFY `opleiding_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `recht`
--
ALTER TABLE `recht`
  MODIFY `recht_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rechtgroep`
--
ALTER TABLE `rechtgroep`
  MODIFY `rechtgroep_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cursus`
--
ALTER TABLE `cursus`
  ADD CONSTRAINT `fk_cursus_locatie1` FOREIGN KEY (`locatie_id`) REFERENCES `locatie` (`locatie_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cursus_opleiding1` FOREIGN KEY (`opleiding_id`) REFERENCES `opleiding` (`opleiding_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cursus_gebruiker`
--
ALTER TABLE `cursus_gebruiker`
  ADD CONSTRAINT `fk_cursus_id` FOREIGN KEY (`cursus_id`) REFERENCES `cursus` (`cursus_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_gebruiker_id` FOREIGN KEY (`gebruiker_id`) REFERENCES `gebruiker` (`gebruiker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gebruiker_type`
--
ALTER TABLE `gebruiker_type`
  ADD CONSTRAINT `fk_gebruiker_type_gebruiker1` FOREIGN KEY (`gebruiker_gebruiker_id`) REFERENCES `gebruiker` (`gebruiker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_gebruiker_type_rechtgroep1` FOREIGN KEY (`rechtgroep_rechtgroep_id`) REFERENCES `rechtgroep` (`rechtgroep_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `opleidingsblok`
--
ALTER TABLE `opleidingsblok`
  ADD CONSTRAINT `fk_opleiding` FOREIGN KEY (`fk_opleiding_id`) REFERENCES `opleiding` (`opleiding_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
