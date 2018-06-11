-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 07 juin 2018 à 08:53
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `athome`
--

-- --------------------------------------------------------

--
-- Structure de la table `consommation_jour`
--

DROP TABLE IF EXISTS `consommation_jour`;
CREATE TABLE IF NOT EXISTS `consommation_jour` (
  `piece_id` mediumint(9) NOT NULL,
  `piece_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `consommation_value` mediumint(9) NOT NULL,
  `consommation_date` date NOT NULL,
  PRIMARY KEY (`piece_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `consommation_jour`
--

INSERT INTO `consommation_jour` (`piece_id`, `piece_name`, `consommation_value`, `consommation_date`) VALUES
(1, 'wc', 20, '2018-06-07'),
(2, 'wc', 15, '2018-06-08'),
(3, 'wc', 17, '2018-06-09'),
(4, 'wc', 15, '2018-06-10'),
(5, 'wc', 18, '2018-06-12'),
(6, 'wc', 20, '2018-06-11'),
(7, 'sdb', 25, '2018-06-07'),
(8, 'sdb', 27, '2018-06-08'),
(9, 'sdb', 26, '2018-06-09'),
(10, 'sdb', 17, '2018-06-10'),
(11, 'sdb', 15, '2018-06-11'),
(12, 'sdb', 23, '2018-06-12'),
(13, 'salon', 35, '2018-06-07'),
(14, 'salon', 45, '2018-06-08'),
(15, 'salon', 53, '2018-06-09'),
(16, 'salon', 45, '2018-06-10'),
(17, 'salon', 67, '2018-06-11'),
(18, 'salon', 42, '2018-06-12'),
(19, 'chambre', 12, '2018-06-07'),
(20, 'chambre', 13, '2018-06-08'),
(21, 'chambre', 15, '2018-06-09'),
(22, 'chambre', 17, '2018-06-10'),
(23, 'chambre', 15, '2018-06-11'),
(24, 'chambre', 20, '2018-06-12'),
(25, 'cuisine', 25, '2018-06-07'),
(26, 'cuisine', 30, '2018-06-08'),
(27, 'cuisine', 30, '2018-06-09'),
(28, 'cuisine', 28, '2018-06-10'),
(29, 'cuisine', 15, '2018-06-11'),
(30, 'cuisine', 30, '2018-06-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
