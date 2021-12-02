-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 nov. 2021 à 05:12
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `association`
--

-- --------------------------------------------------------

--
-- Structure de la table `assurence`
--

DROP TABLE IF EXISTS `assurence`;
CREATE TABLE IF NOT EXISTS `assurence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_responsable` varchar(250) NOT NULL,
  `montant` int(255) NOT NULL,
  `date_heure` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `banque_volontaire`
--

DROP TABLE IF EXISTS `banque_volontaire`;
CREATE TABLE IF NOT EXISTS `banque_volontaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_responsable` varchar(250) NOT NULL,
  `montant` int(255) NOT NULL,
  `date_heure` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cotisation_oblig`
--

DROP TABLE IF EXISTS `cotisation_oblig`;
CREATE TABLE IF NOT EXISTS `cotisation_oblig` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_responsable` varchar(250) NOT NULL,
  `montant` int(255) NOT NULL,
  `date_heure` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `profession` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `statut` enum('actif','inactif') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `prets`
--

DROP TABLE IF EXISTS `prets`;
CREATE TABLE IF NOT EXISTS `prets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_responsable` varchar(250) NOT NULL,
  `montant` int(255) NOT NULL,
  `date_heure` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `remboursement`
--

DROP TABLE IF EXISTS `remboursement`;
CREATE TABLE IF NOT EXISTS `remboursement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_responsable` varchar(250) NOT NULL,
  `montant` int(255) NOT NULL,
  `date_heure` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tontine`
--

DROP TABLE IF EXISTS `tontine`;
CREATE TABLE IF NOT EXISTS `tontine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_responsable` varchar(250) NOT NULL,
  `montant` int(255) NOT NULL,
  `date_heure` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
