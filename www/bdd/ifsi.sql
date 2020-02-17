-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 17 fév. 2020 à 08:58
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ifsi`
--

-- --------------------------------------------------------

--
-- Structure de la table `data_result`
--

DROP TABLE IF EXISTS `data_result`;
CREATE TABLE IF NOT EXISTS `data_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `page2_time` int(11) NOT NULL,
  `page2_error` int(11) NOT NULL,
  `page3_time` int(11) NOT NULL,
  `page3_error` int(11) NOT NULL,
  `page4_time` int(11) NOT NULL,
  `page4_error` int(11) NOT NULL,
  `page5_time` int(11) NOT NULL,
  `page5_error` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `data_result`
--

INSERT INTO `data_result` (`id`, `name`, `page2_time`, `page2_error`, `page3_time`, `page3_error`, `page4_time`, `page4_error`, `page5_time`, `page5_error`) VALUES
(6, 'test', 3590, 0, 3584, 1, 3521, 2, 3328, 5),
(5, 'test', 3571, 3, 3502, 1, 3155, 2, 2929, 4);

-- --------------------------------------------------------

--
-- Structure de la table `even_log`
--

DROP TABLE IF EXISTS `even_log`;
CREATE TABLE IF NOT EXISTS `even_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_value` int(11) NOT NULL,
  `new_class` varchar(20) NOT NULL,
  `type_of_m` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=464 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `preco_message`
--

DROP TABLE IF EXISTS `preco_message`;
CREATE TABLE IF NOT EXISTS `preco_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(20) NOT NULL,
  `type_of_m` varchar(20) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `time_update`
--

DROP TABLE IF EXISTS `time_update`;
CREATE TABLE IF NOT EXISTS `time_update` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `countdown` int(11) NOT NULL,
  `progress_barre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
