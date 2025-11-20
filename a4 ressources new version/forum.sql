-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 31 mai 2025 à 11:23
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--
CREATE DATABASE IF NOT EXISTS `forum` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `forum`;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `idMemb` int NOT NULL AUTO_INCREMENT,
  `Login` varchar(20) NOT NULL,
  `MotPasse` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `userLevel` tinyint NOT NULL,
  PRIMARY KEY (`idMemb`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`idMemb`, `Login`, `MotPasse`, `Email`, `userLevel`) VALUES
(1, 'Admin', 'ESCS', '', 1),
(2, 'Alaa', 'Tayto', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `idMSG` int NOT NULL AUTO_INCREMENT,
  `MSG` text NOT NULL,
  `DateMSG` date NOT NULL,
  PRIMARY KEY (`idMSG`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`idMSG`, `MSG`, `DateMSG`) VALUES
(1, 'La majorité des attaques réussissent lorsque l application web fait confiance aux données provenant du navigateur web. ', '2023-12-10'),
(2, 'Les vulnérabilités <B>XSS</B> ont historiquement été les plus courantes.', '2023-12-10'),
(3, 'Les attaques <a href=\"\">CSRF</a> permettent à  un utilisateur malveillant d\'exécuter des actions à l\'aide des identifiants d\'un autre utilisateur sans que cet utilisateur ne soit informé', '2023-12-10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
