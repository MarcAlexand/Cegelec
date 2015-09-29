-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2015 at 09:43 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cegelec`
--

-- --------------------------------------------------------

--
-- Table structure for table `cursus`
--

CREATE TABLE IF NOT EXISTS `cursus` (
  `cursus_id` bigint(11) NOT NULL,
  `cursus_startDatum` varchar(45) DEFAULT NULL,
  `cursus_eindDatum` varchar(45) DEFAULT NULL,
  `opleiding_id` bigint(11) NOT NULL,
  `locatie_id` bigint(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cursusblok`
--

CREATE TABLE IF NOT EXISTS `cursusblok` (
  `cursusblok_id` bigint(11) NOT NULL,
  `cursusblok_eind_datum` date DEFAULT NULL,
  `fk_cursus_id` bigint(11) NOT NULL,
  `fk_opleidingblok_id` bigint(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cursusblok_leerling_meting`
--

CREATE TABLE IF NOT EXISTS `cursusblok_leerling_meting` (
  `cursusblok_id` bigint(11) unsigned NOT NULL,
  `cursusblok_leerling_meting_id` bigint(11) NOT NULL,
  `cursus_leerling_cursus_gebruiker_id` bigint(11) NOT NULL,
  `cursusblok_leerling_meting_aanwezigheid` int(100) NOT NULL,
  `cursusblok_leerling_meting_evaluatiedatum` date DEFAULT NULL,
  `cursusblok_leerling_meting_progressie` int(100) DEFAULT NULL,
  `cursusblok_leerling_meting_resultaat` int(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cursus_leerling`
--

CREATE TABLE IF NOT EXISTS `cursus_leerling` (
  `cursus_gebruiker_id` bigint(11) NOT NULL,
  `cursus_id` bigint(11) NOT NULL,
  `gebruiker_id` bigint(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gebruiker`
--

CREATE TABLE IF NOT EXISTS `gebruiker` (
  `gebruiker_id` bigint(11) NOT NULL,
  `gebruiker_user` varchar(45) NOT NULL,
  `gebruiker_wachtwoord` varchar(1024) NOT NULL,
  `gebruiker_voornaam` varchar(30) DEFAULT NULL,
  `gebruiker_tussenvoegsel` varchar(10) DEFAULT NULL,
  `gebruiker_achternaam` varchar(60) DEFAULT NULL,
  `gebruiker_email` varchar(50) DEFAULT NULL,
  `gebruiker_geboorteDatum` date DEFAULT NULL,
  `gebruiker_adres` varchar(45) DEFAULT NULL,
  `gebruiker_woonplaats` varchar(45) DEFAULT NULL,
  `gebruiker_telefoonPrive` varchar(20) DEFAULT NULL,
  `gebruiker_telefoonWerk` varchar(20) DEFAULT NULL,
  `gebruiker_inDienst` date DEFAULT NULL,
  `rechten` varchar(2048) NOT NULL,
  `sessie_id` int(10) NOT NULL,
  `gebruiker_actief` tinyint(1) DEFAULT NULL,
  `gebruiker_coachID` varchar(20) DEFAULT NULL,
  `gebruiker_projectleiderID` varchar(45) DEFAULT NULL,
  `gebruiker_docentID` varchar(20) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gebruiker`
--

INSERT INTO `gebruiker` (`gebruiker_id`, `gebruiker_user`, `gebruiker_wachtwoord`, `gebruiker_voornaam`, `gebruiker_tussenvoegsel`, `gebruiker_achternaam`, `gebruiker_email`, `gebruiker_geboorteDatum`, `gebruiker_adres`, `gebruiker_woonplaats`, `gebruiker_telefoonPrive`, `gebruiker_telefoonWerk`, `gebruiker_inDienst`, `rechten`, `sessie_id`, `gebruiker_actief`, `gebruiker_coachID`, `gebruiker_projectleiderID`, `gebruiker_docentID`) VALUES
(1, 'admin', 'ef654c40ab4f1747fc699915d4f70902', 'John', '', 'Do', 'email@email.com', '2015-06-02', 'adres 23', 'woonplaats', '098765', '09876545', '2015-06-01', 'a:3:{i:0;s:2:"16";i:1;s:3:"128";i:2;s:3:"256";}', 2, 1, NULL, NULL, NULL),
(2, 'admintest', 'ef654c40ab4f1747fc699915d4f70902', 'Marc', 'de', 'Boer', 'mail@mail.com', '2015-06-01', 'adres 254', 'Woonplaats', '098765', '09876', '2015-06-09', 'a:3:{i:0;s:2:"16";i:1;s:3:"128";i:2;s:3:"256";}', 2, 0, NULL, NULL, NULL),
(127, 'hoi', '', 'ik', 'ben', 'een', 'gebruiker@die.dom', '1992-01-01', 'isx 100', 'RetardCity', '112', '112', '1991-01-01', '', 0, 0, NULL, NULL, NULL),
(128, 'qwdw', '', 'wwefew', 'wefff', 'efeewff', 'qd@ewfwe.com', '2312-01-01', 'wqdq 2', 'dhwdfe', '5678', '5678', '1823-01-01', '', 0, 1, NULL, NULL, NULL),
(126, 'qwdwqddwq', '', 'qwdqwddwq', 'qwdqwdqwd', 'qwdwdqw', 'jonty_wolf@hotmail.com', '1123-02-03', 'wddwqd 1323', 'dqwdqdq', '312321233', '123133', '1111-02-04', '', 0, 0, NULL, NULL, NULL),
(120, '', '', 'marciano', 'de', 'swag', 'marc@gmail.com', '1997-02-24', 'Koekjeslaan 23', 'Hulst', '0632636346', '06232665', '2005-02-04', '', 0, 1, NULL, NULL, NULL),
(121, 'gebruiker', '', 'voornaam', 'tussen', 'achter', 'test@gmail.com', '2912-11-11', 'adrestest 1', 'hulst', '0363783', '03274748', '2727-11-11', '', 0, 1, NULL, NULL, NULL),
(122, 'test', '', 'test', 'test', 'test', 'test@test.com', '2977-02-23', 'test 23 ', 'koewacht', '9237013', '2344244', '1323-02-04', '', 0, 1, NULL, NULL, NULL),
(123, 'eewwef', '', 'wefwefewf', 'fewfw', 'dh', 'jwz@jwz.com', '1233-03-02', 'qwd 1', 'qdwqdw', '332123', '123133', '4412-02-20', '', 0, 1, NULL, NULL, NULL),
(124, 'trol', '', 'trol', 'trol', 'trol', 'trol@trl.com', '4545-02-06', 'dar 32', 'koewac', '323323', '3242243', '3434-03-04', '', 0, 1, NULL, NULL, NULL),
(125, 'aapje', '', 'aapje', 'aapje', 'aapje', 'aapje@gmail.com', '1998-10-01', 'aapje 23', 'Aapplaats', '09876534', '098765432', '1997-01-01', '', 0, 1, NULL, NULL, NULL),
(130, 'artwolf', '', 'Jonty', '', 'Sponselee', 'jonty_wolf@hotmail.com', '1997-10-24', 'lijnzaadstraat 9', 'Koewacht', '014235', '0121323', '2015-06-23', '', 0, 1, NULL, NULL, NULL),
(131, 'tjerk', '', 'tjertk', 'tjerk', 'tjerk', 'tjerk@tjerk.com', '1992-01-23', 'tjerk 23', 'tjerk', '123', '123', '1929-01-01', '', 0, 0, NULL, NULL, NULL),
(133, 'wachtwoord', '8736bb376e273bd8d3337c24cf84e975', 'wachtwoord', 'wachtwoord', 'wachtwoord', 'wachtwoord@gmail.com', '1991-01-01', 'wachtwoord 23', 'wachtwoord', '123', '123', '1991-01-01', '', 0, 1, NULL, NULL, NULL),
(134, '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, NULL),
(135, 'e', 'Nathanael123', 'e', 'e', 'e', 'YannTHomassen@gmail.com', '2015-09-15', 'e', 'eee', 'e', 'e', '2015-09-15', '', 0, 1, NULL, NULL, NULL),
(139, 'Grizzly', '$2y$10$BqcDEKn7dYI3l6UVxTaln.ddTIio.hwxaoO/3sp/bQ1dNkPulYxoy', 'Yannick', '', 'Thomassen', 'YannTHomassen@gmail.com', '1994-10-20', 'Polder 2', 'Ossenisse', '0623456892', '0623456892', '2015-09-15', '', 0, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locatie`
--

CREATE TABLE IF NOT EXISTS `locatie` (
  `locatie_id` bigint(11) NOT NULL,
  `locatie_naam` varchar(45) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `locatie_status` tinyint(1) NOT NULL,
  `locatie_gegevens` varchar(1024) DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locatie_gebruiker`
--

CREATE TABLE IF NOT EXISTS `locatie_gebruiker` (
  `locatie_gebruiker_id` bigint(11) NOT NULL,
  `locatie_id` bigint(11) NOT NULL,
  `gebruiker_id` bigint(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meetgroep`
--

CREATE TABLE IF NOT EXISTS `meetgroep` (
  `meetgroep_id` bigint(11) NOT NULL,
  `meetgroep_naam` varchar(45) DEFAULT NULL,
  `meetgroep_beschrijving` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meetwaarde`
--

CREATE TABLE IF NOT EXISTS `meetwaarde` (
  `meetwaarde_id` bigint(11) unsigned NOT NULL,
  `meetwaarde_kleur` varchar(45) NOT NULL,
  `meetwaarde_groep` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `opleiding`
--

CREATE TABLE IF NOT EXISTS `opleiding` (
  `opleiding_id` bigint(11) NOT NULL,
  `opleiding_naam` varchar(25) NOT NULL,
  `opleiding_start_datum` date DEFAULT NULL,
  `opleiding_eind_datum` date DEFAULT NULL,
  `opleiding_niveau` int(10) DEFAULT NULL,
  `opleiding_voortgang` int(100) DEFAULT NULL,
  `opleiding_duur` int(20) DEFAULT NULL,
  `opleiding_status` varchar(45) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opleiding`
--

INSERT INTO `opleiding` (`opleiding_id`, `opleiding_naam`, `opleiding_start_datum`, `opleiding_eind_datum`, `opleiding_niveau`, `opleiding_voortgang`, `opleiding_duur`, `opleiding_status`) VALUES
(1, 'OTI', '2015-04-24', '2015-04-25', 4, 55, 4, ''),
(2, 'OAT', '2015-04-26', '2015-04-27', 4, 87, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `opleidingsblok`
--

CREATE TABLE IF NOT EXISTS `opleidingsblok` (
  `opleidingblok_id` bigint(11) NOT NULL,
  `opleidingblok_naam` varchar(45) DEFAULT NULL,
  `opleidingblok_beschrijving` varchar(45) DEFAULT NULL,
  `fk_opleiding_id` bigint(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recht`
--

CREATE TABLE IF NOT EXISTS `recht` (
  `recht_id` bigint(11) NOT NULL,
  `recht_positie` int(20) NOT NULL,
  `recht_beschrijving` varchar(300) NOT NULL,
  `recht_onderdeel` char(50) NOT NULL,
  `recht_groep_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rechtgroep`
--

CREATE TABLE IF NOT EXISTS `rechtgroep` (
  `rechtgroep_id` bigint(11) NOT NULL,
  `rechtgroep_beschrijving` longtext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rechtgroep`
--

INSERT INTO `rechtgroep` (`rechtgroep_id`, `rechtgroep_beschrijving`) VALUES
(1, 'Admin'),
(2, 'Projectleider'),
(3, 'Coach'),
(4, 'Docent'),
(5, 'Leerling');

-- --------------------------------------------------------

--
-- Table structure for table `recht_bitfield_parts`
--

CREATE TABLE IF NOT EXISTS `recht_bitfield_parts` (
  `recht_bitfield_parts_id` bigint(11) NOT NULL,
  `recht_groep_id` bigint(11) NOT NULL,
  `recht_bitfield_nr` int(11) DEFAULT NULL,
  `bitfield` int(1) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recht_bitfield_parts`
--

INSERT INTO `recht_bitfield_parts` (`recht_bitfield_parts_id`, `recht_groep_id`, `recht_bitfield_nr`, `bitfield`) VALUES
(1, 1, 0, 4294967295),
(2, 1, 1, 3),
(3, 2, 0, 4294967295),
(4, 2, 1, 3),
(5, 3, 0, 4294967295),
(6, 3, 1, 3),
(7, 4, 0, 4294967295),
(8, 4, 1, 3),
(9, 5, 0, 4294967295),
(10, 5, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursus`
--
ALTER TABLE `cursus`
  ADD PRIMARY KEY (`cursus_id`),
  ADD UNIQUE KEY `cursus_id_UNIQUE` (`cursus_id`),
  ADD UNIQUE KEY `opleiding_id_UNIQUE` (`opleiding_id`),
  ADD UNIQUE KEY `locatie_id_UNIQUE` (`locatie_id`),
  ADD KEY `fk_cursus_opleiding1_idx` (`opleiding_id`),
  ADD KEY `fk_cursus_locatie1_idx` (`locatie_id`);

--
-- Indexes for table `cursusblok`
--
ALTER TABLE `cursusblok`
  ADD PRIMARY KEY (`cursusblok_id`),
  ADD UNIQUE KEY `cursusblok_id_UNIQUE` (`cursusblok_id`),
  ADD UNIQUE KEY `fk_cursus_id_UNIQUE` (`fk_cursus_id`),
  ADD UNIQUE KEY `fk_opleidingblok_id_UNIQUE` (`fk_opleidingblok_id`),
  ADD KEY `fk_cursusblok_cursus1_idx` (`fk_cursus_id`),
  ADD KEY `fk_cursusblok_opleidingsblok1_idx` (`fk_opleidingblok_id`);

--
-- Indexes for table `cursusblok_leerling_meting`
--
ALTER TABLE `cursusblok_leerling_meting`
  ADD PRIMARY KEY (`cursusblok_leerling_meting_id`),
  ADD UNIQUE KEY `cursus_leerling_cursus_gebruiker_id_UNIQUE` (`cursus_leerling_cursus_gebruiker_id`),
  ADD UNIQUE KEY `cursusblok_leerling_meting_id_UNIQUE` (`cursusblok_leerling_meting_id`),
  ADD UNIQUE KEY `cursusblok_id_UNIQUE` (`cursusblok_id`),
  ADD KEY `fk_cursusblok_leerling_meting_cursusblok1_idx` (`cursusblok_id`),
  ADD KEY `fk_cursusblok_leerling_meting_cursus_leerling1_idx` (`cursus_leerling_cursus_gebruiker_id`);

--
-- Indexes for table `cursus_leerling`
--
ALTER TABLE `cursus_leerling`
  ADD PRIMARY KEY (`cursus_gebruiker_id`),
  ADD UNIQUE KEY `cursus_gebruiker_id_UNIQUE` (`cursus_gebruiker_id`),
  ADD UNIQUE KEY `cursus_id_UNIQUE` (`cursus_id`),
  ADD UNIQUE KEY `gebruiker_id_UNIQUE` (`gebruiker_id`),
  ADD KEY `fk_cursus_has_gebruiker_gebruiker1_idx` (`gebruiker_id`),
  ADD KEY `fk_cursus_has_gebruiker_cursus1_idx` (`cursus_id`);

--
-- Indexes for table `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`gebruiker_id`),
  ADD UNIQUE KEY `gebruiker_user` (`gebruiker_user`),
  ADD UNIQUE KEY `gebruiker_id_UNIQUE` (`gebruiker_id`);

--
-- Indexes for table `locatie`
--
ALTER TABLE `locatie`
  ADD PRIMARY KEY (`locatie_id`),
  ADD UNIQUE KEY `locatie_id_UNIQUE` (`locatie_id`);

--
-- Indexes for table `locatie_gebruiker`
--
ALTER TABLE `locatie_gebruiker`
  ADD PRIMARY KEY (`locatie_gebruiker_id`),
  ADD UNIQUE KEY `locatie_gebruiker_id_UNIQUE` (`locatie_gebruiker_id`),
  ADD UNIQUE KEY `locatie_id_UNIQUE` (`locatie_id`),
  ADD UNIQUE KEY `gebruiker_id_UNIQUE` (`gebruiker_id`),
  ADD KEY `fk_locatie_has_gebruiker_gebruiker1_idx` (`gebruiker_id`),
  ADD KEY `fk_locatie_has_gebruiker_locatie1_idx` (`locatie_id`);

--
-- Indexes for table `meetgroep`
--
ALTER TABLE `meetgroep`
  ADD PRIMARY KEY (`meetgroep_id`),
  ADD UNIQUE KEY `meetgroep_id_UNIQUE` (`meetgroep_id`);

--
-- Indexes for table `meetwaarde`
--
ALTER TABLE `meetwaarde`
  ADD PRIMARY KEY (`meetwaarde_id`),
  ADD UNIQUE KEY `meetwaarde_id_UNIQUE` (`meetwaarde_id`);

--
-- Indexes for table `opleiding`
--
ALTER TABLE `opleiding`
  ADD PRIMARY KEY (`opleiding_id`),
  ADD UNIQUE KEY `opleiding_id_UNIQUE` (`opleiding_id`);

--
-- Indexes for table `opleidingsblok`
--
ALTER TABLE `opleidingsblok`
  ADD PRIMARY KEY (`opleidingblok_id`),
  ADD UNIQUE KEY `opleidingblok_id_UNIQUE` (`opleidingblok_id`),
  ADD UNIQUE KEY `fk_opleiding_id_UNIQUE` (`fk_opleiding_id`),
  ADD KEY `fk_opleidingsblok_opleiding_idx` (`fk_opleiding_id`);

--
-- Indexes for table `recht`
--
ALTER TABLE `recht`
  ADD PRIMARY KEY (`recht_id`),
  ADD UNIQUE KEY `recht_id_UNIQUE` (`recht_id`);

--
-- Indexes for table `rechtgroep`
--
ALTER TABLE `rechtgroep`
  ADD PRIMARY KEY (`rechtgroep_id`),
  ADD UNIQUE KEY `rechtgroep_id_UNIQUE` (`rechtgroep_id`);

--
-- Indexes for table `recht_bitfield_parts`
--
ALTER TABLE `recht_bitfield_parts`
  ADD PRIMARY KEY (`recht_bitfield_parts_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursus`
--
ALTER TABLE `cursus`
  MODIFY `cursus_id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cursusblok`
--
ALTER TABLE `cursusblok`
  MODIFY `cursusblok_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cursusblok_leerling_meting`
--
ALTER TABLE `cursusblok_leerling_meting`
  MODIFY `cursusblok_leerling_meting_id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cursus_leerling`
--
ALTER TABLE `cursus_leerling`
  MODIFY `cursus_gebruiker_id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `gebruiker_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `locatie`
--
ALTER TABLE `locatie`
  MODIFY `locatie_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `locatie_gebruiker`
--
ALTER TABLE `locatie_gebruiker`
  MODIFY `locatie_gebruiker_id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meetgroep`
--
ALTER TABLE `meetgroep`
  MODIFY `meetgroep_id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `meetwaarde`
--
ALTER TABLE `meetwaarde`
  MODIFY `meetwaarde_id` bigint(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `opleiding`
--
ALTER TABLE `opleiding`
  MODIFY `opleiding_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `opleidingsblok`
--
ALTER TABLE `opleidingsblok`
  MODIFY `opleidingblok_id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recht`
--
ALTER TABLE `recht`
  MODIFY `recht_id` bigint(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rechtgroep`
--
ALTER TABLE `rechtgroep`
  MODIFY `rechtgroep_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `recht_bitfield_parts`
--
ALTER TABLE `recht_bitfield_parts`
  MODIFY `recht_bitfield_parts_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
