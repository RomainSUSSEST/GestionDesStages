-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Mars 2017 à 10:49
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion_stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `libelle` int(32) NOT NULL,
  `type_classe` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`libelle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE IF NOT EXISTS `eleve` (
  `num_eleve` varchar(32) COLLATE utf8_bin NOT NULL,
  `nom_eleve` varchar(32) COLLATE utf8_bin NOT NULL,
  `bac` varchar(32) COLLATE utf8_bin NOT NULL,
  `date_scolarite` date NOT NULL,
  `prenom_eleve` varchar(32) COLLATE utf8_bin NOT NULL,
  `classe` varchar(32) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(32) COLLATE utf8_bin NOT NULL,
  `tel_eleve` int(32) NOT NULL,
  `email_eleve` varchar(32) COLLATE utf8_bin NOT NULL,
  `date_bac` date NOT NULL,
  PRIMARY KEY (`num_eleve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `entreprise` varchar(32) COLLATE utf8_bin NOT NULL,
  `ville` varchar(32) COLLATE utf8_bin NOT NULL,
  `type` varchar(32) COLLATE utf8_bin NOT NULL,
  `taille` varchar(32) COLLATE utf8_bin NOT NULL,
  `activite` varchar(32) COLLATE utf8_bin NOT NULL,
  `chiffre_affaire` int(50) NOT NULL,
  PRIMARY KEY (`entreprise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `entreprise` varchar(32) COLLATE utf8_bin NOT NULL,
  `adresse_entreprise` varchar(100) COLLATE utf8_bin NOT NULL,
  `tel_referent` int(11) NOT NULL,
  `nom_referent` varchar(32) COLLATE utf8_bin NOT NULL,
  `nom_eleve` varchar(32) COLLATE utf8_bin NOT NULL,
  `nom_resppeda` varchar(32) COLLATE utf8_bin NOT NULL,
  `annee_stage` year(4) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`entreprise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `login` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`login`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `password`) VALUES
('test', 'f6e57907092305e738bb5992b738bb6a');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `stage_ibfk_1` FOREIGN KEY (`entreprise`) REFERENCES `entreprise` (`entreprise`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
