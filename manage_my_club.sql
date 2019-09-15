-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 15 sep. 2019 à 17:53
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `manage_my_club`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE IF NOT EXISTS `adherent` (
  `idAdherent` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `adresse` varchar(500) NOT NULL,
  `adresse2` varchar(200) DEFAULT NULL,
  `code_postal` varchar(5) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `dateNaiss` date NOT NULL,
  `numTel` varchar(10) NOT NULL,
  `numLicence` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idAdherent`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adherent`
--

INSERT INTO `adherent` (`idAdherent`, `nom`, `prenom`, `adresse`, `adresse2`, `code_postal`, `ville`, `email`, `sexe`, `dateNaiss`, `numTel`, `numLicence`) VALUES
(1, 'Bazire', 'Jeremy', '1401 VIEILLE ROUTE DE GRASSE', '23 LOT LA BERGERIE', '83300', 'DRAGUIGNAN', 'jeremybazire83@gmail.com', 'M', '1996-11-07', '0634432928', '123'),
(3, 'Bazire', 'Corinne', '1401 vieille route de grasse', '23 lot la bergerie', '83300', 'draguignan', 'corinne.bazire@wanadoo.fr', 'F', '1967-07-22', '0662262207', '');

-- --------------------------------------------------------

--
-- Structure de la table `competition`
--

DROP TABLE IF EXISTS `competition`;
CREATE TABLE IF NOT EXISTS `competition` (
  `idC` int(11) NOT NULL AUTO_INCREMENT,
  `libelleCompete` varchar(500) CHARACTER SET latin1 NOT NULL,
  `dateC` date NOT NULL,
  `lieu` varchar(300) CHARACTER SET latin1 NOT NULL,
  `genre` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idC`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competition`
--

INSERT INTO `competition` (`idC`, `libelleCompete`, `dateC`, `lieu`, `genre`) VALUES
(1, 'TTMP Nimes', '2018-08-26', 'Nimes', 'Prive'),
(2, 'Tournoi Scratch/Hdp Plan de Campagne', '2018-09-09', 'Plan de campagne', 'Prive');

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

DROP TABLE IF EXISTS `inscrit`;
CREATE TABLE IF NOT EXISTS `inscrit` (
  `idCompetition` int(11) NOT NULL,
  `idAdherent` int(11) NOT NULL,
  `resultat` int(5) DEFAULT NULL,
  PRIMARY KEY (`idCompetition`,`idAdherent`),
  KEY `fk_adherent_numero` (`idAdherent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `licence`
--

DROP TABLE IF EXISTS `licence`;
CREATE TABLE IF NOT EXISTS `licence` (
  `numeroLicence` int(10) NOT NULL,
  `prixLicence` int(4) NOT NULL,
  `certificat` int(1) NOT NULL DEFAULT '0',
  `prixTransfert` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`numeroLicence`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `inscrit`
--
ALTER TABLE `inscrit`
  ADD CONSTRAINT `fk_adherent_numero` FOREIGN KEY (`idAdherent`) REFERENCES `adherent` (`idAdherent`),
  ADD CONSTRAINT `fk_competition_numero` FOREIGN KEY (`idCompetition`) REFERENCES `competition` (`idC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
