-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  sam. 19 déc. 2020 à 10:56
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `authentification`
--

-- --------------------------------------------------------

--
-- Structure de la table `donne`
--

DROP TABLE IF EXISTS `donne`;
CREATE TABLE IF NOT EXISTS `donne` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `donne`
--

INSERT INTO `donne` (`Id`, `msg`, `date`, `nom`) VALUES
(83, 'oui et toi', '2020-12-18 11:38:23', 'Elmi'),
(106, 'hkjhkl', '2020-12-19 09:02:30', 'Elmi');

-- --------------------------------------------------------

--
-- Structure de la table `identifient`
--

DROP TABLE IF EXISTS `identifient`;
CREATE TABLE IF NOT EXISTS `identifient` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `USER` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `identifient`
--

INSERT INTO `identifient` (`Id`, `USER`, `PASSWORD`) VALUES
(1, 'Elmi', '161289'),
(2, 'Boot', '123456');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` varchar(255) NOT NULL,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`Id`, `date`, `msg`, `nom`) VALUES
(1, '2020-12-18 14:59:17', 'Salut ', 'Baptiste'),
(2, '2020-12-19 08:05:26', 'oui', 'Baptiste'),
(35, '2020-12-19 10:55:05', 'ssqds', ''),
(34, '2020-12-19 10:54:33', 'qsqsds', ''),
(33, '2020-12-19 10:53:27', 'sddsf', ''),
(32, '2020-12-19 10:53:06', 'sfsdf', ''),
(31, '2020-12-19 10:52:36', 'sdff', ''),
(30, '2020-12-19 10:51:12', 'dfdfd', ''),
(29, '2020-12-19 10:50:26', 'dsfdsf', ''),
(28, '2020-12-19 10:49:58', 'sdfdsf', ''),
(27, '2020-12-19 10:48:36', 'dsfdf', ''),
(26, '2020-12-19 10:47:13', 'Bonjour', 'Baptiste');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
