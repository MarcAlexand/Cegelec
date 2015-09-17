-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2015 at 11:41 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gebruiker`
--
ALTER TABLE `gebruiker`
  ADD PRIMARY KEY (`gebruiker_id`),
  ADD UNIQUE KEY `gebruiker_user` (`gebruiker_user`),
  ADD UNIQUE KEY `gebruiker_id_UNIQUE` (`gebruiker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gebruiker`
--
ALTER TABLE `gebruiker`
  MODIFY `gebruiker_id` bigint(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
