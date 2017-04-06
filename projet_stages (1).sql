-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 06 Avril 2017 à 19:06
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_stages`
--

-- --------------------------------------------------------

--
-- Structure de la table `annee`
--

CREATE TABLE `annee` (
  `date_annee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id_classe` varchar(25) NOT NULL,
  `lib_classe` varchar(25) DEFAULT NULL,
  `designation_classe` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `lib_classe`, `designation_classe`) VALUES
('BTS1', 'BTS1', 'BTS1'),
('BTS2', 'BTS2', 'BTS2'),
('LICENCE', 'licence', 'licence');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id_entreprise` varchar(25) NOT NULL,
  `adresse_entreprise` varchar(25) DEFAULT NULL,
  `chiffre_affaire_entreprise` varchar(25) DEFAULT NULL,
  `id_type` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_sup`
--

CREATE TABLE `etudiant_sup` (
  `id_etudiant` varchar(25) NOT NULL,
  `nom_etudiant` varchar(25) DEFAULT NULL,
  `prenom_etudiant` varchar(25) DEFAULT NULL,
  `adresse_etudiant` varchar(25) DEFAULT NULL,
  `mail_etudiant` varchar(25) DEFAULT NULL,
  `annee_obtention_bac` varchar(25) DEFAULT NULL,
  `id_type_bac` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

CREATE TABLE `inscrit` (
  `id_etudiant` varchar(25) NOT NULL,
  `date_annee` date NOT NULL,
  `id_classe` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ry_peda`
--

CREATE TABLE `ry_peda` (
  `id_ry_peda` varchar(25) NOT NULL,
  `num_portable_rypeda` varchar(25) DEFAULT NULL,
  `tel_rypeda` varchar(25) DEFAULT NULL,
  `mail_rypeda` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ry_pro`
--

CREATE TABLE `ry_pro` (
  `id_ry_pro` varchar(25) NOT NULL,
  `Fonction` varchar(25) DEFAULT NULL,
  `id_entreprise` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `id_stage` varchar(25) NOT NULL,
  `datedeb_stage` varchar(25) DEFAULT NULL,
  `date_fin_stage` varchar(25) DEFAULT NULL,
  `type_A_S1_S2_` varchar(25) DEFAULT NULL,
  `obsverations_stage` varchar(25) DEFAULT NULL,
  `id_etudiant` varchar(25) DEFAULT NULL,
  `id_ry_peda` varchar(25) DEFAULT NULL,
  `id_entreprise` varchar(25) DEFAULT NULL,
  `id_ry_pro` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `techno`
--

CREATE TABLE `techno` (
  `Id_techno` varchar(25) NOT NULL,
  `lib_techno` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` varchar(25) NOT NULL,
  `lib_type` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_bac`
--

CREATE TABLE `type_bac` (
  `id_type_bac` varchar(25) NOT NULL,
  `lib_typebac` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_bac`
--

INSERT INTO `type_bac` (`id_type_bac`, `lib_typebac`) VALUES
('ES', 'economique et social'),
('L', 'littéraire'),
('STMG', 'sciences du management'),
('S', 'scientifique');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `login` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`login`, `mdp`) VALUES
('admin', 'admin'),
('romain', 'romain');

-- --------------------------------------------------------

--
-- Structure de la table `utilise`
--

CREATE TABLE `utilise` (
  `Id_techno` varchar(25) NOT NULL,
  `id_stage` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE `visite` (
  `id_visite` varchar(25) NOT NULL,
  `date_visite` varchar(25) DEFAULT NULL,
  `observations_visite` varchar(25) DEFAULT NULL,
  `id_stage` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annee`
--
ALTER TABLE `annee`
  ADD PRIMARY KEY (`date_annee`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`),
  ADD UNIQUE KEY `lib_classe` (`lib_classe`,`designation_classe`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id_entreprise`),
  ADD UNIQUE KEY `adresse_entreprise` (`adresse_entreprise`,`chiffre_affaire_entreprise`),
  ADD KEY `FK_Entreprise_id_type` (`id_type`);

--
-- Index pour la table `etudiant_sup`
--
ALTER TABLE `etudiant_sup`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD UNIQUE KEY `nom_etudiant` (`nom_etudiant`,`prenom_etudiant`,`adresse_etudiant`,`annee_obtention_bac`),
  ADD KEY `FK_Etudiant_Sup_id_type_bac` (`id_type_bac`);

--
-- Index pour la table `inscrit`
--
ALTER TABLE `inscrit`
  ADD PRIMARY KEY (`id_etudiant`,`date_annee`,`id_classe`),
  ADD KEY `FK_Inscrit_date_annee` (`date_annee`),
  ADD KEY `FK_Inscrit_id_classe` (`id_classe`);

--
-- Index pour la table `ry_peda`
--
ALTER TABLE `ry_peda`
  ADD PRIMARY KEY (`id_ry_peda`),
  ADD UNIQUE KEY `num_portable_rypeda` (`num_portable_rypeda`,`tel_rypeda`);

--
-- Index pour la table `ry_pro`
--
ALTER TABLE `ry_pro`
  ADD PRIMARY KEY (`id_ry_pro`),
  ADD UNIQUE KEY `Fonction` (`Fonction`),
  ADD KEY `FK_Ry_Pro_id_entreprise` (`id_entreprise`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id_stage`),
  ADD UNIQUE KEY `datedeb_stage` (`datedeb_stage`,`date_fin_stage`,`type_A_S1_S2_`,`obsverations_stage`),
  ADD KEY `FK_Stage_id_etudiant` (`id_etudiant`),
  ADD KEY `FK_Stage_id_ry_peda` (`id_ry_peda`),
  ADD KEY `FK_Stage_id_entreprise` (`id_entreprise`),
  ADD KEY `FK_Stage_id_ry_pro` (`id_ry_pro`);

--
-- Index pour la table `techno`
--
ALTER TABLE `techno`
  ADD PRIMARY KEY (`Id_techno`),
  ADD UNIQUE KEY `lib_techno` (`lib_techno`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`),
  ADD UNIQUE KEY `lib_type` (`lib_type`);

--
-- Index pour la table `type_bac`
--
ALTER TABLE `type_bac`
  ADD PRIMARY KEY (`id_type_bac`),
  ADD UNIQUE KEY `lib_typebac` (`lib_typebac`);

--
-- Index pour la table `utilise`
--
ALTER TABLE `utilise`
  ADD PRIMARY KEY (`Id_techno`,`id_stage`),
  ADD KEY `FK_utilise_id_stage` (`id_stage`);

--
-- Index pour la table `visite`
--
ALTER TABLE `visite`
  ADD PRIMARY KEY (`id_visite`),
  ADD UNIQUE KEY `date_visite` (`date_visite`,`observations_visite`),
  ADD KEY `FK_VIsite_id_stage` (`id_stage`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `FK_Entreprise_id_type` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`);

--
-- Contraintes pour la table `etudiant_sup`
--
ALTER TABLE `etudiant_sup`
  ADD CONSTRAINT `FK_Etudiant_Sup_id_type_bac` FOREIGN KEY (`id_type_bac`) REFERENCES `type_bac` (`id_type_bac`);

--
-- Contraintes pour la table `inscrit`
--
ALTER TABLE `inscrit`
  ADD CONSTRAINT `FK_Inscrit_date_annee` FOREIGN KEY (`date_annee`) REFERENCES `annee` (`date_annee`),
  ADD CONSTRAINT `FK_Inscrit_id_classe` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id_classe`),
  ADD CONSTRAINT `FK_Inscrit_id_etudiant` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant_sup` (`id_etudiant`);

--
-- Contraintes pour la table `ry_pro`
--
ALTER TABLE `ry_pro`
  ADD CONSTRAINT `FK_Ry_Pro_id_entreprise` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id_entreprise`);

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `FK_Stage_id_entreprise` FOREIGN KEY (`id_entreprise`) REFERENCES `entreprise` (`id_entreprise`),
  ADD CONSTRAINT `FK_Stage_id_etudiant` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant_sup` (`id_etudiant`),
  ADD CONSTRAINT `FK_Stage_id_ry_peda` FOREIGN KEY (`id_ry_peda`) REFERENCES `ry_peda` (`id_ry_peda`),
  ADD CONSTRAINT `FK_Stage_id_ry_pro` FOREIGN KEY (`id_ry_pro`) REFERENCES `ry_pro` (`id_ry_pro`);

--
-- Contraintes pour la table `utilise`
--
ALTER TABLE `utilise`
  ADD CONSTRAINT `FK_utilise_Id_techno` FOREIGN KEY (`Id_techno`) REFERENCES `techno` (`Id_techno`),
  ADD CONSTRAINT `FK_utilise_id_stage` FOREIGN KEY (`id_stage`) REFERENCES `stage` (`id_stage`);

--
-- Contraintes pour la table `visite`
--
ALTER TABLE `visite`
  ADD CONSTRAINT `FK_VIsite_id_stage` FOREIGN KEY (`id_stage`) REFERENCES `stage` (`id_stage`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
