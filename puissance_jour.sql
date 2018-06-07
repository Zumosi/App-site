-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 07 juin 2018 à 08:52
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
-- Structure de la table `puissance_jour`
--

DROP TABLE IF EXISTS `puissance_jour`;
CREATE TABLE IF NOT EXISTS `puissance_jour` (
  `piece_id` mediumint(9) NOT NULL,
  `piece_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `puissance_value` mediumint(9) NOT NULL,
  `consommation_date` date NOT NULL,
  PRIMARY KEY (`piece_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `puissance_jour`
--

INSERT INTO `puissance_jour` (`piece_id`, `piece_name`, `puissance_value`, `consommation_date`) VALUES
(1, 'wc', 15, '2018-06-07'),
(2, 'wc', 15, '2018-06-08'),
(3, 'wc', 17, '2018-06-09'),
(4, 'wc', 18, '2018-06-10'),
(5, 'wc', 15, '2018-06-09'),
(6, 'wc', 17, '2018-06-10'),
(7, 'wc', 21, '2018-06-11'),
(8, 'wc', 14, '2018-06-12'),
(9, 'salon', 36, '2018-06-07'),
(10, 'salon', 35, '2018-06-07'),
(11, 'salon', 45, '2018-06-09'),
(12, 'salon', 47, '2018-06-10'),
(13, 'salon', 50, '2018-06-11'),
(14, 'salon', 43, '2018-06-12'),
(15, 'sdb', 21, '2018-06-07'),
(16, 'sdb', 26, '2018-06-08'),
(17, 'sdb', 17, '2018-06-09'),
(18, 'sdb', 18, '2018-06-10'),
(19, 'sdb', 15, '2018-06-11'),
(20, 'sdb', 26, '2018-06-12'),
(21, 'cuisine', 21, '2018-06-07'),
(22, 'cuisine', 22, '2018-06-08'),
(23, 'cuisine', 23, '2018-06-09'),
(24, 'cuisine', 24, '2018-06-10'),
(25, 'cuisine', 25, '2018-06-11'),
(26, 'cuisine', 21, '2018-06-12'),
(27, 'chambre', 30, '2018-06-07'),
(28, 'chambre', 15, '2018-06-08'),
(29, 'chambre', 25, '2018-06-09'),
(30, 'chambre', 28, '2018-06-10'),
(31, 'chambre', 16, '2018-06-11'),
(32, 'chambre', 18, '2018-06-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
