-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 03 Mai 2017 à 16:21
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
('2011'),
('2012'),
('2013'),
('2014'),
('2015'),
('2016'),
('2017');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id_classe` int(25) NOT NULL,
  `lib_classe` varchar(25) DEFAULT NULL,
  `designation_classe` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `lib_classe`, `designation_classe`) VALUES
(1, 'BTS1', 'BTS1'),
(2, 'BTS2', 'BTS2'),
(3, 'LICENCE', 'LICENCE'),
(4, 'MASTER1', 'MASTER1'),
(5, 'MASTER2', 'MASTER2');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id_entreprise` int(255) NOT NULL,
  `adresse_entreprise` varchar(510) DEFAULT NULL,
  `c_a_entreprise` varchar(25) DEFAULT NULL,
  `id_type` int(25) DEFAULT NULL,
  `nom_entreprise` varchar(255) NOT NULL,
  `tel_entreprise` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id_entreprise`, `adresse_entreprise`, `c_a_entreprise`, `id_type`, `nom_entreprise`, `tel_entreprise`) VALUES
(1, '1 Avenue du Général de Gaulle 60500 Chantilly', '1119600', 1, 'Nodevo', 125358964),
(2, 'Rue Irène Joliot Curie 60610 La Croix-Saint-Ouen', '1000000', 1, 'Mentalworks', 0),
(3, '10 Rue Saint-Laurent 60500 Chantilly', '1450000', 1, 'Mozart du web', 0),
(4, '249 Rue Irene Joliot Curie 60610 La Croix-Saint-Ouen', '756000', 1, 'WebexpR', 0),
(5, '1 Rue Jeanne d\'Arc 60200 Compiègne', '850000', 1, 'Agence web peach', 0);

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
  `id_type_bac` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etudiant_sup`
--

INSERT INTO `etudiant_sup` (`id_etudiant`, `nom_etudiant`, `prenom_etudiant`, `adresse_etudiant`, `mail_etudiant`, `annee_obtention_bac`, `id_type_bac`) VALUES
(1, 'Alaya', 'Hedi', 'Senlis', 'hedi.alaya@gmail.com', '2010', 2),
(2, 'Azy', 'Sofiane', 'Nogent sur Oise', 'azy;sofiane@gmail.com', '2014', 5),
(3, 'Aliouate', 'Adnane', 'Creil', 'adnane.aliouate@gmail.com', '2014', 2),
(4, 'Duriez', 'Quentin', 'Boran sur Oise', 'duriez.quentin@gmail.com', '2015', 2),
(5, 'Iguenane', 'Marc', 'Boran sur Oise', 'marc.iguenane@gmail.com', '2015', 5),
(6, 'Degaugue', 'David', 'Verneuil en Hallate', 'degaugue.david@gmail.com', '2016', 4),
(7, 'Sussest', 'Romain', 'Survilliers', 'romain.sussest@gmail.com', '2016', 1),
(8, 'Martin', 'Thomas', 'Pontpoint', 'thomas.martin@gmail.com', '2015', 4),
(9, 'Minart', 'Jean Emile', 'Morcourt', 'j-em.minart@gmail.com', '2016', 4);

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

CREATE TABLE `inscrit` (
  `id_etudiant` int(255) NOT NULL,
  `date_annee` varchar(25) NOT NULL,
  `id_classe` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `inscrit`
--

INSERT INTO `inscrit` (`id_etudiant`, `date_annee`, `id_classe`) VALUES
(1, '2016', 1),
(2, '2016', 1),
(3, '2016', 1),
(4, '2016', 2),
(5, '2016', 2),
(6, '2016', 3),
(9, '2016', 3),
(7, '2016', 4),
(8, '2016', 5);

-- --------------------------------------------------------

--
-- Structure de la table `rf_peda`
--

CREATE TABLE `rf_peda` (
  `id_rf_peda` int(255) NOT NULL,
  `num_port_rf_peda` varchar(25) DEFAULT NULL,
  `tel_rf_peda` varchar(25) DEFAULT NULL,
  `mail_rf_peda` varchar(25) DEFAULT NULL,
  `nom_referent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rf_peda`
--

INSERT INTO `rf_peda` (`id_rf_peda`, `num_port_rf_peda`, `tel_rf_peda`, `mail_rf_peda`, `nom_referent`) VALUES
(1, '00 00 00 00', '00 00 00 00', 'fethi.ammar@gmail.com', 'Fethi Ammar');

-- --------------------------------------------------------

--
-- Structure de la table `rf_pro`
--

CREATE TABLE `rf_pro` (
  `id_rf_pro` int(255) NOT NULL,
  `fonction_rf_pro` varchar(255) DEFAULT NULL,
  `id_entreprise` int(25) DEFAULT NULL,
  `nom_referent_pro` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `rf_pro`
--

INSERT INTO `rf_pro` (`id_rf_pro`, `fonction_rf_pro`, `id_entreprise`, `nom_referent_pro`) VALUES
(1, 'PDG', 1, 'Fethi Ammar'),
(2, 'Chef de projet', 2, 'Jeff Jacquelot'),
(3, 'Directeur service informatique', 3, 'Idasiak Mickael'),
(4, 'salarie', 4, 'Agnes Kintlzer'),
(5, 'Chef de projet', 5, 'Jean Bernard Dodemont');

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `id_stage` int(255) NOT NULL,
  `date_deb_stage` date DEFAULT NULL,
  `date_fin_stage` date DEFAULT NULL,
  `type_stage` varchar(25) DEFAULT NULL,
  `observations_stage` varchar(25) DEFAULT NULL,
  `id_etudiant` int(25) DEFAULT NULL,
  `id_rf_peda` int(25) DEFAULT NULL,
  `id_entreprise` int(25) DEFAULT NULL,
  `id_rf_pro` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id_type`, `lib_type`) VALUES
(1, 'Agence Web'),
(2, 'SARL'),
(3, 'EURL'),
(4, 'SA'),
(5, 'SAS'),
(6, 'SA'),
(7, 'SSII');

-- --------------------------------------------------------

--
-- Structure de la table `type_bac`
--

CREATE TABLE `type_bac` (
  `id_type_bac` int(255) NOT NULL,
  `lib_typebac` varchar(25) DEFAULT NULL,
  `intitule_bac` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_bac`
--

INSERT INTO `type_bac` (`id_type_bac`, `lib_typebac`, `intitule_bac`) VALUES
(1, 'S', 'Scientifiques'),
(2, 'ES', 'Economique et social'),
(3, 'L', 'Littéraire'),
(4, 'STMG', 'Sciences technologie du management et de la gestion'),
(5, 'ST2S', 'Sciences et technologies de la santé et du social');

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
  `Id_techno` int(255) NOT NULL,
  `id_stage` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilise`
--

INSERT INTO `utilise` (`Id_techno`, `id_stage`) VALUES
(1, 1),
(4, 2),
(5, 3),
(7, 4),
(6, 5),
(3, 6),
(7, 7),
(2, 8),
(2, 9);

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE `visite` (
  `id_visite` int(255) NOT NULL,
  `date_visite` varchar(25) DEFAULT NULL,
  `observation_visite` varchar(25) DEFAULT NULL,
  `id_stage` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `visite`
--

INSERT INTO `visite` (`id_visite`, `date_visite`, `observation_visite`, `id_stage`) VALUES
(1, '7 juin 2017', NULL, 1),
(2, '8 juin 2017', NULL, 2),
(3, '9 juin 2017', NULL, 3),
(4, '11 juin 2017', NULL, 4),
(5, '13 juin 2017', NULL, 5),
(6, '13 juin 2017', NULL, 6),
(7, '13 juin 2017', NULL, 7),
(8, '14 juin 2017', NULL, 8),
(9, '17 juin 2017', NULL, 9),
(10, NULL, NULL, NULL);

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
  ADD PRIMARY KEY (`id_classe`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id_entreprise`),
  ADD KEY `FK_Entreprise_id_type` (`id_type`);

--
-- Index pour la table `etudiant_sup`
--
ALTER TABLE `etudiant_sup`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD KEY `FK_Etudiant_Sup_id_type_bac` (`id_type_bac`);

--
-- Index pour la table `inscrit`
--
ALTER TABLE `inscrit`
  ADD PRIMARY KEY (`id_etudiant`,`date_annee`,`id_classe`),
  ADD KEY `FK_Inscrit_date_annee` (`date_annee`),
  ADD KEY `FK_Inscrit_id_classe` (`id_classe`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `rf_peda`
--
ALTER TABLE `rf_peda`
  ADD PRIMARY KEY (`id_rf_peda`);

--
-- Index pour la table `rf_pro`
--
ALTER TABLE `rf_pro`
  ADD PRIMARY KEY (`id_rf_pro`),
  ADD KEY `id_entreprise` (`id_entreprise`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id_stage`),
  ADD KEY `id_etudiant` (`id_etudiant`),
  ADD KEY `id_rf_pro` (`id_rf_pro`),
  ADD KEY `id_rf_peda` (`id_rf_peda`),
  ADD KEY `id_entreprise` (`id_entreprise`);

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
-- Index pour la table `type_bac`
--
ALTER TABLE `type_bac`
  ADD PRIMARY KEY (`id_type_bac`);

--
-- Index pour la table `utilise`
--
ALTER TABLE `utilise`
  ADD KEY `Id_techno` (`Id_techno`),
  ADD KEY `id_stage` (`id_stage`),
  ADD KEY `Id_techno_2` (`Id_techno`);

--
-- Index pour la table `visite`
--
ALTER TABLE `visite`
  ADD PRIMARY KEY (`id_visite`),
  ADD KEY `id_stage` (`id_stage`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id_entreprise` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `etudiant_sup`
--
ALTER TABLE `etudiant_sup`
  MODIFY `id_etudiant` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `inscrit`
--
ALTER TABLE `inscrit`
  MODIFY `id_etudiant` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `rf_peda`
--
ALTER TABLE `rf_peda`
  MODIFY `id_rf_peda` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `rf_pro`
--
ALTER TABLE `rf_pro`
  MODIFY `id_rf_pro` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `stage`
--
ALTER TABLE `stage`
  MODIFY `id_stage` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `techno`
--
ALTER TABLE `techno`
  MODIFY `Id_techno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `type_bac`
--
ALTER TABLE `type_bac`
  MODIFY `id_type_bac` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `visite`
--
ALTER TABLE `visite`
  MODIFY `id_visite` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
