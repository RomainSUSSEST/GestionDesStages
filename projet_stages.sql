-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 26 Avril 2017 à 14:55
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
  `date_annee` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `annee`
--

INSERT INTO `annee` (`date_annee`) VALUES
('2014'),
('2015'),
('2016'),
('2017');

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
  `adresse_entreprise` varchar(255) DEFAULT NULL,
  `c_a_entreprise` varchar(25) DEFAULT NULL,
  `id_type` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id_entreprise`, `adresse_entreprise`, `c_a_entreprise`, `id_type`) VALUES
('Mentalworks', 'IMMEUBLE MILLENIUM ROND POINT J MONNE COMPIEGNE', '', 'Agence Web'),
('Nodevo', '1 AVENUE DU GENERAL DE GAULLE CHANTILLY', '1 119 600', 'Agence Web');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_sup`
--

CREATE TABLE `etudiant_sup` (
  `id_etudiant` int(255) NOT NULL,
  `nom_etudiant` varchar(25) DEFAULT NULL,
  `prenom_etudiant` varchar(25) DEFAULT NULL,
  `adresse_etudiant` varchar(255) DEFAULT NULL,
  `mail_etudiant` varchar(25) DEFAULT NULL,
  `annee_obtention_bac` varchar(25) DEFAULT NULL,
  `id_type_bac` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etudiant_sup`
--

INSERT INTO `etudiant_sup` (`id_etudiant`, `nom_etudiant`, `prenom_etudiant`, `adresse_etudiant`, `mail_etudiant`, `annee_obtention_bac`, `id_type_bac`) VALUES
(1, 'Alaya', 'Hed1', 'senlis', 'hedy@gmail.com', '2013', 'ES'),
(2, 'Azy', 'Sofiane', 'Nogent-sur-oise', 'sofiane@gmail.com', '2015', 'STI'),
(3, 'Bourin', 'Antoine', 'Senlis', 'antoine@gmail.com', '2015', 'ES'),
(4, 'Adnane', 'Aliouate', 'Nogent-sur-oise', 'adnane@gmail.com', '2013', 'ES'),
(5, 'Duriez', 'Quention', 'quelquepart', 'quention@gmail.com', '2015', 'ES'),
(6, 'Popik', 'Dylan', 'Senlis', 'dylanp@gmail.com', '2015', 'ES'),
(7, 'Noaily', 'Dylan', 'Cinqueux', 'dylan@gmail.com', '2015', 'S'),
(8, 'Cociunu', 'Matthias', 'Roissy', 'matthias@gmail.com', '2015', 'ES'),
(9, 'Roussel', 'Vincent', 'Senlis', 'vincent@gmail.com', '2015', 'ES'),
(10, 'Degaugue', 'David', 'Verneuil', 'david@gmail.com', '2015', 'STMG'),
(11, 'Minart', 'Jean-emile', 'Morcourt', 'j-em@gmail.com', '2015', 'STMG'),
(13, 'Iguenane', 'MArc', 'Boran', 'marc@gmail.com', '2015', 'ES');

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

CREATE TABLE `inscrit` (
  `id_etudiant` int(255) NOT NULL,
  `date_annee` varchar(25) NOT NULL,
  `id_classe` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `inscrit`
--

INSERT INTO `inscrit` (`id_etudiant`, `date_annee`, `id_classe`) VALUES
(1, '2016', 'BTS1'),
(2, '2016', 'BTS'),
(3, '2016', 'BTS'),
(4, '2016', 'BTS'),
(5, '2016', 'BTS'),
(6, '2016', 'BTS'),
(7, '2016', 'BTS'),
(8, '2016', 'BTS1'),
(9, '2016', 'BTS1'),
(10, '2016', 'BTS1'),
(11, '2016', 'BTS1'),
(12, '2016', 'BTS1');

-- --------------------------------------------------------

--
-- Structure de la table `rf_peda`
--

CREATE TABLE `rf_peda` (
  `id_rf_peda` varchar(25) NOT NULL,
  `num_port_rf_peda` varchar(25) DEFAULT NULL,
  `tel_rf_peda` varchar(25) DEFAULT NULL,
  `mail_rf_peda` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rf_peda`
--

INSERT INTO `rf_peda` (`id_rf_peda`, `num_port_rf_peda`, `tel_rf_peda`, `mail_rf_peda`) VALUES
('Ammar Fethi', '00 00 00 00 00 ', '00 00 00 00 00', 'fethi.ammar@nodevo.com');

-- --------------------------------------------------------

--
-- Structure de la table `rf_pro`
--

CREATE TABLE `rf_pro` (
  `id_rf_pro` varchar(25) NOT NULL,
  `fonction_rf_pro` varchar(25) DEFAULT NULL,
  `id_entreprise` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rf_pro`
--

INSERT INTO `rf_pro` (`id_rf_pro`, `fonction_rf_pro`, `id_entreprise`) VALUES
('Ammar Fethi', 'PDG ', 'Nodevo');

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `id_stage` int(255) NOT NULL,
  `date_deb_stage` varchar(25) DEFAULT NULL,
  `date_fin_stage` varchar(25) DEFAULT NULL,
  `type_stage` varchar(25) DEFAULT NULL,
  `obsverations_stage` varchar(25) DEFAULT NULL,
  `id_etudiant` varchar(25) DEFAULT NULL,
  `id_rf_peda` varchar(25) DEFAULT NULL,
  `id_entreprise` varchar(25) DEFAULT NULL,
  `id_rf_pro` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `stage`
--

INSERT INTO `stage` (`id_stage`, `date_deb_stage`, `date_fin_stage`, `type_stage`, `obsverations_stage`, `id_etudiant`, `id_rf_peda`, `id_entreprise`, `id_rf_pro`) VALUES
(1, '29/05', '30/06', '1ère année', '', '1ère année', 'Ammar Fethi', 'Nodevo', 'Fethi Ammar'),
(2, '29/05', '30/06', '1ère année', '', '1ère année', 'Ammar Fethi', 'Nodevo', 'Fethi Ammar'),
(3, '29/05', '30/06', '1ère année', '', '1ère année', 'Ammar Fethi', 'Nodevo', 'Fethi Ammar'),
(4, '29/05', '30/06', '1ère année', '', '1ère année', 'Ammar Fethi', 'Nodevo', 'Fethi Ammar');

-- --------------------------------------------------------

--
-- Structure de la table `techno`
--

CREATE TABLE `techno` (
  `Id_techno` int(255) NOT NULL,
  `lib_techno` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `techno`
--

INSERT INTO `techno` (`Id_techno`, `lib_techno`) VALUES
(1, 'Bootstrap'),
(2, 'C#'),
(3, 'CSS3'),
(4, 'JQuery'),
(5, 'HTML5'),
(6, 'JavaScript'),
(7, 'Php');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` int(255) NOT NULL,
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
('romain', 'romain'),
('cheff', 'cheff');

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
  `id_visite` int(255) NOT NULL,
  `date_visite` varchar(25) DEFAULT NULL,
  `observation_visite` varchar(25) DEFAULT NULL,
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
  ADD UNIQUE KEY `adresse_entreprise` (`adresse_entreprise`,`c_a_entreprise`),
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
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id_stage`);

--
-- Index pour la table `techno`
--
ALTER TABLE `techno`
  ADD PRIMARY KEY (`Id_techno`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `visite`
--
ALTER TABLE `visite`
  ADD PRIMARY KEY (`id_visite`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etudiant_sup`
--
ALTER TABLE `etudiant_sup`
  MODIFY `id_etudiant` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `inscrit`
--
ALTER TABLE `inscrit`
  MODIFY `id_etudiant` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `stage`
--
ALTER TABLE `stage`
  MODIFY `id_stage` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `techno`
--
ALTER TABLE `techno`
  MODIFY `Id_techno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `visite`
--
ALTER TABLE `visite`
  MODIFY `id_visite` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
