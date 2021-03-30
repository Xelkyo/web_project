-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 mars 2021 à 20:56
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

CREATE TABLE `appartient` (
  `ID_Entreprise` int(11) NOT NULL,
  `ID_Secteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `appartient`
--

INSERT INTO `appartient` (`ID_Entreprise`, `ID_Secteur`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `avancement`
--

CREATE TABLE `avancement` (
  `ID_avancement` int(11) NOT NULL,
  `Avancement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avancement`
--

INSERT INTO `avancement` (`ID_avancement`, `Avancement`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

CREATE TABLE `centre` (
  `ID_Centre` int(11) NOT NULL,
  `Nom_centre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `centre`
--

INSERT INTO `centre` (`ID_Centre`, `Nom_centre`) VALUES
(1, 'Labège'),
(2, 'Montpellier'),
(3, 'Nanterre');

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `ID_Competence` int(11) NOT NULL,
  `Competence` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`ID_Competence`, `Competence`) VALUES
(1, 'Autonome');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `ID_Offre` int(11) NOT NULL,
  `ID_Competence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`ID_Offre`, `ID_Competence`) VALUES
(3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `disponible_pour`
--

CREATE TABLE `disponible_pour` (
  `ID_Offre` int(11) NOT NULL,
  `ID_Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `disponible_pour`
--

INSERT INTO `disponible_pour` (`ID_Offre`, `ID_Type`) VALUES
(3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE `droit` (
  `ID_Droit` int(11) NOT NULL,
  `Droit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `droit`
--

INSERT INTO `droit` (`ID_Droit`, `Droit`) VALUES
(1, 'Authentifier'),
(2, 'Rechercher une entreprise'),
(3, 'Créer une entreprise'),
(4, 'Modifier une entreprise'),
(5, 'Evaluer une entreprise'),
(6, 'Supprimer une entreprise'),
(7, 'Consulter les stats des entreprises'),
(8, 'Rechercher une offre'),
(9, 'Créer une offre'),
(10, 'Modifier une offre'),
(11, 'Supprimer une offre'),
(12, 'Consulter les stats des offres'),
(13, 'Rechercher un compte pilote'),
(14, 'Créer un compte pilote'),
(15, 'Modifier un compte pilote'),
(16, 'Supprimer un compte pilote'),
(17, 'Rechercher un compte délégué'),
(18, 'Créer un compte délégué'),
(19, 'Modifier un compte délégué'),
(20, 'Supprimer un compte délégué'),
(21, 'Assigner des droit à un délégué'),
(22, 'Rechercher un compte étudiant'),
(23, 'Créer un compte étudiant'),
(24, 'Modifier un compte étudiant'),
(25, 'Supprimer un compte étudiant'),
(26, 'Consulter les stats des étudiants'),
(27, 'Ajouter une offre à la wish-list'),
(28, 'Retirer une offre à la wish-list'),
(29, 'Postuler à une offre'),
(30, 'Informer le système de l\'avancement de la candidat'),
(31, 'Informer le système de l\'avancement de la candidat'),
(32, 'Informer le système de l\'avancement de la candidat'),
(33, 'Informer le système de l\'avancement de la candidat'),
(34, 'Informer le système de l\'avancement de la candidat'),
(35, 'Informer le système de l\'avancement de la candidat');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `ID_Entreprise` int(11) NOT NULL,
  `Nom_entreprise` varchar(50) DEFAULT NULL,
  `Localite` int(11) DEFAULT NULL,
  `Nombre_de_stagiaire` int(11) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`ID_Entreprise`, `Nom_entreprise`, `Localite`, `Nombre_de_stagiaire`, `Email`) VALUES
(1, 'EntreTest', 31, 5, 'entre.test@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `gere`
--

CREATE TABLE `gere` (
  `ID_Utilisateur` int(11) NOT NULL,
  `ID_Promotion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gere`
--

INSERT INTO `gere` (`ID_Utilisateur`, `ID_Promotion`) VALUES
(2, 1),
(4, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `noter`
--

CREATE TABLE `noter` (
  `ID_Utilisateur` int(11) NOT NULL,
  `ID_Entreprise` int(11) NOT NULL,
  `Note` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `noter`
--

INSERT INTO `noter` (`ID_Utilisateur`, `ID_Entreprise`, `Note`) VALUES
(1, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

CREATE TABLE `offre` (
  `ID_Offre` int(11) NOT NULL,
  `Localite` varchar(50) DEFAULT NULL,
  `Duree` int(11) DEFAULT NULL,
  `Date_offre` date DEFAULT NULL,
  `Remuneration` varchar(50) DEFAULT NULL,
  `Nombre_de_place` int(11) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `ID_Entreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `offre`
--

INSERT INTO `offre` (`ID_Offre`, `Localite`, `Duree`, `Date_offre`, `Remuneration`, `Nombre_de_place`, `Description`, `ID_Entreprise`) VALUES
(3, '31', 3, '2021-04-05', '350', 1, 'test', 1);

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

CREATE TABLE `possede` (
  `ID_Utilisateur` int(11) NOT NULL,
  `ID_Droit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `possede`
--

INSERT INTO `possede` (`ID_Utilisateur`, `ID_Droit`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 32),
(2, 33),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(3, 33),
(3, 34),
(3, 35),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 17),
(4, 18),
(4, 19),
(4, 20),
(4, 21),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(4, 26),
(4, 32),
(4, 33),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(5, 12),
(5, 27),
(5, 28),
(5, 29),
(5, 30),
(5, 31),
(5, 34),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 12),
(6, 27),
(6, 28),
(6, 29),
(6, 30),
(6, 31),
(6, 34);

-- --------------------------------------------------------

--
-- Structure de la table `postule`
--

CREATE TABLE `postule` (
  `ID_Utilisateur` int(11) NOT NULL,
  `ID_Offre` int(11) NOT NULL,
  `ID_Avancement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `postule`
--

INSERT INTO `postule` (`ID_Utilisateur`, `ID_Offre`, `ID_Avancement`) VALUES
(5, 3, 2),
(6, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

CREATE TABLE `promo` (
  `ID_Promotion` int(11) NOT NULL,
  `Nom_promo` varchar(50) DEFAULT NULL,
  `ID_Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promo`
--

INSERT INTO `promo` (`ID_Promotion`, `Nom_promo`, `ID_Type`) VALUES
(1, 'CPI A2 INFO', 1),
(2, 'CPI A2 S3E', 2),
(3, 'A3 G', 3),
(4, 'A5 BTP', 4);

-- --------------------------------------------------------

--
-- Structure de la table `secteur_activite`
--

CREATE TABLE `secteur_activite` (
  `ID_Secteur` int(11) NOT NULL,
  `Nom_secteur` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `secteur_activite`
--

INSERT INTO `secteur_activite` (`ID_Secteur`, `Nom_secteur`) VALUES
(1, 'SecteurTest');

-- --------------------------------------------------------

--
-- Structure de la table `type_promo`
--

CREATE TABLE `type_promo` (
  `ID_Type` int(11) NOT NULL,
  `Nom_Type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_promo`
--

INSERT INTO `type_promo` (`ID_Type`, `Nom_Type`) VALUES
(1, 'Informatique'),
(2, 'S3E'),
(3, 'Generaliste'),
(4, 'BTP');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_Utilisateur` int(11) NOT NULL,
  `Nom_utilisateur` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Role` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mot_de_passe` varchar(50) DEFAULT NULL,
  `ID_Promotion` int(11) DEFAULT NULL,
  `ID_Centre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_Utilisateur`, `Nom_utilisateur`, `Prenom`, `Role`, `Email`, `Mot_de_passe`, `ID_Promotion`, `ID_Centre`) VALUES
(1, 'Cros', 'Hugues', 'Administrateur', 'hugues.cros@viacesi.fr', 'ree', 1, 1),
(2, 'ARANGUREN', 'Idoia', 'Pilote', 'iaranguren@cesi.fr', '1234', 1, 1),
(3, 'MalMax', 'Pachtman', 'Administrateur', 'jesus.jesus@viacesi.fr', 'reeee', 1, 1),
(4, 'Koopa', 'Bowser', 'Pilote', 'bower.koopa@viacesi.fr', 'bestwaifu', 3, 2),
(5, 'Koopa', 'Bowser Jr', 'Etudiant', 'jrbower.koopa@viacesi.fr', 'minibow', 4, 2),
(6, 'Freecss', 'Gon', 'Etudiant', 'gon.freecss@viacesi.fr', 'papaoutai', 2, 3);

--
-- Déclencheurs `utilisateur`
--
DELIMITER $$
CREATE TRIGGER `Droit_insert` AFTER INSERT ON `utilisateur` FOR EACH ROW IF (new.role='Administrateur')
THEN
INSERT INTO possede
SELECT utilisateur.ID_Utilisateur, droit.ID_Droit
FROM droit JOIN utilisateur
WHERE 
utilisateur.ID_Utilisateur=(SELECT MAX(utilisateur.ID_Utilisateur)FROM utilisateur);

ELSEIF (new.role='Etudiant')
THEN
INSERT INTO possede
SELECT utilisateur.ID_Utilisateur, droit.ID_Droit
FROM droit JOIN utilisateur
WHERE 
utilisateur.ID_Utilisateur=(SELECT MAX(utilisateur.ID_Utilisateur)FROM utilisateur)
AND droit.ID_Droit IN ('1', '2', '3', '4', '5', '6', '7', '8', '12', '27', '28', '29', '30', '31', '34');

ELSEIF (new.role='Délégué')
THEN
INSERT INTO possede
SELECT utilisateur.ID_Utilisateur, droit.ID_Droit
FROM droit JOIN utilisateur
WHERE 
utilisateur.ID_Utilisateur=(SELECT MAX(utilisateur.ID_Utilisateur)FROM utilisateur)
AND droit.ID_Droit IN ('1', '2', '3', '4', '5', '6', '7', '8', '12', '27', '28', '29', '30', '31', '34');


ELSEIF (new.role='Pilote')
THEN
INSERT INTO possede
SELECT utilisateur.ID_Utilisateur, droit.ID_Droit
FROM droit JOIN utilisateur
WHERE 
utilisateur.ID_Utilisateur=(SELECT MAX(utilisateur.ID_Utilisateur)FROM utilisateur)
AND droit.ID_Droit IN ('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '32', '33');

END IF
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Droit_update` AFTER UPDATE ON `utilisateur` FOR EACH ROW IF (new.role='Administrateur')
THEN

DELETE FROM possede
WHERE possede.ID_Utilisateur= new.ID_Utilisateur;
                                  
INSERT INTO possede
SELECT utilisateur.ID_Utilisateur, droit.ID_Droit
FROM droit JOIN utilisateur
WHERE 
utilisateur.ID_Utilisateur= new.ID_Utilisateur;


ELSEIF (new.role='Pilote')
THEN

DELETE FROM possede
WHERE possede.ID_Utilisateur= new.ID_Utilisateur;
                                  
INSERT INTO possede
SELECT utilisateur.ID_Utilisateur, droit.ID_Droit
FROM droit JOIN utilisateur
WHERE 
utilisateur.ID_Utilisateur= new.ID_Utilisateur
AND droit.ID_Droit IN ('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '32', '33');



ELSEIF (new.role='Délégué')
THEN

DELETE FROM possede
WHERE possede.ID_Utilisateur= new.ID_Utilisateur;
                                  
INSERT INTO possede
SELECT utilisateur.ID_Utilisateur, droit.ID_Droit
FROM droit JOIN utilisateur
WHERE 
utilisateur.ID_Utilisateur= new.ID_Utilisateur
AND droit.ID_Droit IN ('1', '2', '3', '4', '5', '6', '7', '8', '12', '27', '28', '29', '30', '31', '34');



ELSEIF (new.role='Etudiant')
THEN

DELETE FROM possede
WHERE possede.ID_Utilisateur= new.ID_Utilisateur;
                                  
INSERT INTO possede
SELECT utilisateur.ID_Utilisateur, droit.ID_Droit
FROM droit JOIN utilisateur
WHERE 
utilisateur.ID_Utilisateur= new.ID_Utilisateur
AND droit.ID_Droit IN ('1', '2', '3', '4', '5', '6', '7', '8', '12', '27', '28', '29', '30', '31', '34');

END IF
$$
DELIMITER ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD PRIMARY KEY (`ID_Entreprise`,`ID_Secteur`),
  ADD KEY `ID_Secteur` (`ID_Secteur`);

--
-- Index pour la table `avancement`
--
ALTER TABLE `avancement`
  ADD PRIMARY KEY (`ID_avancement`);

--
-- Index pour la table `centre`
--
ALTER TABLE `centre`
  ADD PRIMARY KEY (`ID_Centre`);

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`ID_Competence`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`ID_Offre`,`ID_Competence`),
  ADD KEY `ID_Competence` (`ID_Competence`);

--
-- Index pour la table `disponible_pour`
--
ALTER TABLE `disponible_pour`
  ADD PRIMARY KEY (`ID_Offre`,`ID_Type`),
  ADD KEY `ID_Type` (`ID_Type`);

--
-- Index pour la table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`ID_Droit`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`ID_Entreprise`);

--
-- Index pour la table `gere`
--
ALTER TABLE `gere`
  ADD PRIMARY KEY (`ID_Utilisateur`,`ID_Promotion`),
  ADD KEY `ID_Promotion` (`ID_Promotion`);

--
-- Index pour la table `noter`
--
ALTER TABLE `noter`
  ADD PRIMARY KEY (`ID_Utilisateur`,`ID_Entreprise`),
  ADD KEY `ID_Entreprise` (`ID_Entreprise`);

--
-- Index pour la table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`ID_Offre`),
  ADD KEY `ID_Entreprise` (`ID_Entreprise`);

--
-- Index pour la table `possede`
--
ALTER TABLE `possede`
  ADD PRIMARY KEY (`ID_Utilisateur`,`ID_Droit`),
  ADD KEY `ID_Droit` (`ID_Droit`);

--
-- Index pour la table `postule`
--
ALTER TABLE `postule`
  ADD PRIMARY KEY (`ID_Utilisateur`,`ID_Offre`,`ID_Avancement`),
  ADD KEY `ID_Offre` (`ID_Offre`),
  ADD KEY `ID_Avancement` (`ID_Avancement`);

--
-- Index pour la table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`ID_Promotion`),
  ADD KEY `ID_Type` (`ID_Type`);

--
-- Index pour la table `secteur_activite`
--
ALTER TABLE `secteur_activite`
  ADD PRIMARY KEY (`ID_Secteur`);

--
-- Index pour la table `type_promo`
--
ALTER TABLE `type_promo`
  ADD PRIMARY KEY (`ID_Type`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID_Utilisateur`),
  ADD KEY `ID_Promotion` (`ID_Promotion`),
  ADD KEY `ID_Centre` (`ID_Centre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avancement`
--
ALTER TABLE `avancement`
  MODIFY `ID_avancement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `centre`
--
ALTER TABLE `centre`
  MODIFY `ID_Centre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `ID_Competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `droit`
--
ALTER TABLE `droit`
  MODIFY `ID_Droit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `ID_Entreprise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `offre`
--
ALTER TABLE `offre`
  MODIFY `ID_Offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `promo`
--
ALTER TABLE `promo`
  MODIFY `ID_Promotion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `secteur_activite`
--
ALTER TABLE `secteur_activite`
  MODIFY `ID_Secteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `type_promo`
--
ALTER TABLE `type_promo`
  MODIFY `ID_Type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID_Utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD CONSTRAINT `appartient_ibfk_1` FOREIGN KEY (`ID_Entreprise`) REFERENCES `entreprise` (`ID_Entreprise`),
  ADD CONSTRAINT `appartient_ibfk_2` FOREIGN KEY (`ID_Secteur`) REFERENCES `secteur_activite` (`ID_Secteur`);

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`ID_Offre`) REFERENCES `offre` (`ID_Offre`),
  ADD CONSTRAINT `demande_ibfk_2` FOREIGN KEY (`ID_Competence`) REFERENCES `competence` (`ID_Competence`);

--
-- Contraintes pour la table `disponible_pour`
--
ALTER TABLE `disponible_pour`
  ADD CONSTRAINT `disponible_pour_ibfk_1` FOREIGN KEY (`ID_Offre`) REFERENCES `offre` (`ID_Offre`),
  ADD CONSTRAINT `disponible_pour_ibfk_2` FOREIGN KEY (`ID_Type`) REFERENCES `type_promo` (`ID_Type`);

--
-- Contraintes pour la table `gere`
--
ALTER TABLE `gere`
  ADD CONSTRAINT `gere_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `utilisateur` (`ID_Utilisateur`),
  ADD CONSTRAINT `gere_ibfk_2` FOREIGN KEY (`ID_Promotion`) REFERENCES `promo` (`ID_Promotion`);

--
-- Contraintes pour la table `noter`
--
ALTER TABLE `noter`
  ADD CONSTRAINT `noter_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `utilisateur` (`ID_Utilisateur`),
  ADD CONSTRAINT `noter_ibfk_2` FOREIGN KEY (`ID_Entreprise`) REFERENCES `entreprise` (`ID_Entreprise`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `offre_ibfk_1` FOREIGN KEY (`ID_Entreprise`) REFERENCES `entreprise` (`ID_Entreprise`);

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `possede_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `utilisateur` (`ID_Utilisateur`),
  ADD CONSTRAINT `possede_ibfk_2` FOREIGN KEY (`ID_Droit`) REFERENCES `droit` (`ID_Droit`);

--
-- Contraintes pour la table `postule`
--
ALTER TABLE `postule`
  ADD CONSTRAINT `postule_ibfk_1` FOREIGN KEY (`ID_Utilisateur`) REFERENCES `utilisateur` (`ID_Utilisateur`),
  ADD CONSTRAINT `postule_ibfk_2` FOREIGN KEY (`ID_Offre`) REFERENCES `offre` (`ID_Offre`),
  ADD CONSTRAINT `postule_ibfk_3` FOREIGN KEY (`ID_Avancement`) REFERENCES `avancement` (`ID_avancement`);

--
-- Contraintes pour la table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`ID_Type`) REFERENCES `type_promo` (`ID_Type`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`ID_Promotion`) REFERENCES `promo` (`ID_Promotion`),
  ADD CONSTRAINT `utilisateur_ibfk_2` FOREIGN KEY (`ID_Centre`) REFERENCES `centre` (`ID_Centre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
