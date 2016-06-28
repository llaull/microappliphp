-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Juin 2016 à 07:53
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gac_technology_eval`
--

-- --------------------------------------------------------

--
-- Structure de la table `tickets__appels`
--

DROP TABLE IF EXISTS `tickets__appels`;
CREATE TABLE IF NOT EXISTS `tickets__appels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `compte_ID` int(11) NOT NULL,
  `facture_ID` int(11) NOT NULL,
  `abonne_ID` int(11) NOT NULL,
  `appel_datetime` datetime NOT NULL,
  `appel_duree_reel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appel_duree_fact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appel_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
