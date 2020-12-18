-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  ven. 18 déc. 2020 à 09:37
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
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `donne`
--

INSERT INTO `donne` (`Id`, `msg`, `date`) VALUES
(29, 'heloo', '2020-12-17 15:44:40'),
(28, 'salut', '2020-12-17 15:28:28'),
(55, 'ghjhd', '2020-12-18 10:36:28'),
(54, 'reez', '2020-12-18 10:29:59'),
(53, 'ghjhd', '2020-12-18 10:28:29'),
(52, 'tre', '2020-12-18 10:27:39'),
(51, 'henry', '2020-12-18 10:26:48');

-- --------------------------------------------------------

--
-- Structure de la table `identifient`
--

DROP TABLE IF EXISTS `identifient`;
CREATE TABLE IF NOT EXISTS `identifient` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `USER` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `identifient`
--

INSERT INTO `identifient` (`Id`, `USER`, `PASSWORD`, `pseudo`) VALUES
(1, 'Elmi', '161289', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
