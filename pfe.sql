-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 30 Avril 2016 à 13:10
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `laboratoire`
--

CREATE TABLE IF NOT EXISTS `laboratoire` (
  `id_lab` int(11) NOT NULL AUTO_INCREMENT,
  `nom_lab` varchar(200) NOT NULL,
  `type_lab` varchar(200) NOT NULL,
  `disponibilite` varchar(100) NOT NULL,
  PRIMARY KEY (`id_lab`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `laboratoire`
--

INSERT INTO `laboratoire` (`id_lab`, `nom_lab`, `type_lab`, `disponibilite`) VALUES
(2, 'ppp', 'type2', 'Disponible'),
(6, 'lab2', 'lsls', 'Disponible');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `id_M` int(11) NOT NULL AUTO_INCREMENT,
  `nom_M` varchar(100) NOT NULL,
  `prenom_M` varchar(100) NOT NULL,
  `specialite` varchar(100) NOT NULL,
  `tel_M` int(11) NOT NULL,
  `email_M` varchar(100) NOT NULL,
  `disponibilite` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_M`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `medecin`
--

INSERT INTO `medecin` (`id_M`, `nom_M`, `prenom_M`, `specialite`, `tel_M`, `email_M`, `disponibilite`, `username`, `password`) VALUES
(1, 'mede', 'rania', 'chirurigien', 21334455, 'med1@gmail.com', 'Disponible', 'med', 'med'),
(3, 'ali', 'sami', 'kinesie', 125445, 'bnb@jjj', 'Occupe', 'ali', 'ali'),
(4, 'mede', 'rania', 'neutresioniste', 125445, 'ghazifsmh@hotmail.fr', 'Disponible', 'aa', 'aa'),
(5, 'mede', 'salah', 'cardiologue', 125445, 'ghazifsmh@hotmail.fr', 'Disponible', 'aa', 'aa'),
(7, 'ali', 'med', 'dentaire', 125445, 'fehrizaid@outlook.fr', 'Disponible', 'aza', 'aza');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `id_P` int(200) NOT NULL AUTO_INCREMENT,
  `nom_P` varchar(200) NOT NULL,
  `prenom_P` varchar(200) NOT NULL,
  `tel_P` int(200) NOT NULL,
  `email_P` varchar(200) NOT NULL,
  `disponibilite` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_P`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `personnel`
--

INSERT INTO `personnel` (`id_P`, `nom_P`, `prenom_P`, `tel_P`, `email_P`, `disponibilite`, `username`, `password`) VALUES
(1, 'sara', 'zzz', 125445, 'ghazifsmh@hotmail.fr', 'Occupe', 'az', 'az'),
(2, 'mede', 'zzz', 125445, 'ghazifsmh@hotmail.fr', 'Disponible', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(210) NOT NULL,
  `password` varchar(214) NOT NULL,
  `type` varchar(231) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'Admin'),
(2, 'med', 'med', 'Medecin'),
(3, 'ali', 'ali', 'Medecin'),
(4, 'sec', 'sec', 'Secretaire'),
(5, 'aa', 'aa', 'Medecin'),
(6, 'aza', 'aza', 'Medecin'),
(7, 'az', 'az', 'Personnel'),
(8, 'aa', 'aa', 'Personnel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
