-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2018 at 09:31 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athome`
--

-- --------------------------------------------------------

--
-- Table structure for table `actionneur`
--

CREATE TABLE `actionneur` (
  `id_actionneur` int(11) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `type` varchar(60) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `id_capteur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actionneur`
--

INSERT INTO `actionneur` (`id_actionneur`, `etat`, `type`, `id_capteur`) VALUES
(1, 'marche', 'moteur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `boutique`
--

CREATE TABLE `boutique` (
  `id_boutique` int(11) NOT NULL,
  `nom` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `stock` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boutique`
--

INSERT INTO `boutique` (`id_boutique`, `nom`, `description`, `prix`, `id_personne`, `stock`) VALUES
(1, 'infrarouge TSOP4838 38 kHz', 'Haute densité d\'assemblage par intégration de la diode réceptrice, du filtre et du préampli dans un boîtier. Insensibilité à la lumière du jour, compatibilité TTL et C-MOS, faible puissance absorbée et haute sécurité anti-parasite distinguent cette série.', '0.65', 1, 6),
(2, 'CAPTEUR DE TEMPÉRATURE DS18B20', 'Le DS18B20 est composé des éléments suivant :\r\nun capteur de température, un convertisseur analogique - numérique, une zone mémoire de 8 octets et une EEPROM de 3 octets.\r\n\r\nCes zones de mémoire servent à communiquer avec le DS18B20 afin de :\r\n- récupérer les températures converties\r\n- de configurer le convertisseur\r\n- de configurer les valeurs de températures min et max pour la fonction \"thermostat\"', '3.50', 1, 8),
(3, 'Capteur Photoélectrique / Mini Crépusculaire 1-10V', 'Avec une zone de détection de 360 ° et une plage de régulation 1-100%, ce capteur crépusculaire est compatible avec les luminaires équipés de driver dimmable 1-10V. Son mode de fonctionnement progressif, augmente et diminue l’éclairage du luminaire en fonction de la lumière ambiante préréglée (équipé d’un variateur qui modifie le comportement par rapport à la lumière ambiante), c’est à dire, quand la lumière ambiante diminue, le capteur augmente l\'intensité de la lumière et au contraire, quand la lumière ambiante augmente, le capteur réduit l\'intensité de la lumière, permettant toujours un éclairage adéquat d\'une manière efficace.', '17.29', 2, 15),
(4, 'Capteur de Son RB-Wav-26', 'Amplificateur de puissance audio LM386 intégré\r\nGain du signal audio jusqu\'à 200\r\nPrécision ajustable\r\nIndicateur du signal en sortie', '3.92', 2, 70);

-- --------------------------------------------------------

--
-- Table structure for table `capteur`
--

CREATE TABLE `capteur` (
  `id_capteur` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `id_place` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capteur`
--

INSERT INTO `capteur` (`id_capteur`, `type`, `reference`, `etat`, `id_place`) VALUES
(1, 'infrarouge', 'LHI 968', 'on', 2),
(2, 'infrarouge', 'LHI 968', 'on', 4),
(36, 'infrarouge TSOP4838 38 kHz', 'LHI 968', 'off', 1),
(35, 'infrarouge TSOP4838 38 kHz', 'LHI 968', 'off', 2),
(34, 'infrarouge TSOP4838 38 kHz', 'LHI 968', 'off', 2),
(33, 'infrarouge TSOP4838 38 kHz', 'LHI 968', 'off', 2),
(32, 'infrarouge TSOP4838 38 kHz', 'LHI 968', 'off', 1),
(31, 'infrarouge TSOP4838 38 kHz', 'LHI 968', 'off', 1),
(22, 'infrarouge TSOP4838 38 kHz', 'LHI 968', 'off', 1),
(30, 'infrarouge TSOP4838 38 kHz', 'LHI 968', 'off', 1),
(24, 'infrarouge TSOP4838 38 kHz', 'LHI 968', 'off', 1),
(29, 'infrarouge TSOP4838 38 kHz', 'LHI 968', 'off', 1),
(28, 'infrarouge TSOP4838 38 kHz', 'LHI 968', 'off', 1);

-- --------------------------------------------------------

--
-- Table structure for table `consommation_jour`
--

CREATE TABLE `consommation_jour` (
  `piece_id` int(11) NOT NULL,
  `piece_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `consommation_value` mediumint(9) NOT NULL,
  `consommation_date` date NOT NULL,
  `id_capteur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `consommation_jour`
--

INSERT INTO `consommation_jour` (`piece_id`, `piece_name`, `consommation_value`, `consommation_date`, `id_capteur`) VALUES
(2, 'Chambre', 25, '2018-06-09', 4),
(4, 'Chambre', 25, '2018-06-07', 4),
(5, 'Salon', 25, '2018-06-08', 0),
(6, 'Salon', 25, '2018-06-08', 0),
(8, 'Chambre', 25, '2018-06-08', 4),
(9, 'Chambre', 25, '2018-06-06', 4),
(11, 'Cuisine', 25, '2018-06-08', 1),
(17, 'Cuisine', 25, '2018-06-08', 1),
(18, 'Cuisine', 25, '2018-06-08', 1),
(19, 'Cuisine', 25, '2018-06-08', 1),
(20, 'Cuisine', 25, '2018-06-08', 1),
(21, 'Cuisine', 25, '2018-06-08', 1),
(22, 'Cuisine', 25, '2018-06-08', 1),
(23, 'Cuisine', 25, '2018-06-08', 1),
(24, 'Cuisine', 25, '2018-06-08', 1),
(25, 'Cuisine', 25, '2018-06-08', 1),
(26, 'Cuisine', 25, '2018-06-08', 1),
(27, 'Cuisine', 25, '2018-06-08', 1),
(28, 'Cuisine', 25, '2018-06-08', 1),
(35, 'WC', 69, '2018-06-07', 2),
(30, 'SdB', 50, '2018-06-07', 3),
(31, 'SdB', 40, '2018-06-06', 3),
(32, 'SdB', 50, '2018-06-07', 3),
(34, 'WC', 86, '2018-06-06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE `facture` (
  `id_facture` int(11) NOT NULL,
  `nom_utilisateur` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `nom_produit` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `num_adresse` int(4) NOT NULL,
  `rue_adresse` varchar(20) NOT NULL,
  `nom_adresse` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `code_postal` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facture`
--

INSERT INTO `facture` (`id_facture`, `nom_utilisateur`, `nom_produit`, `prix`, `num_adresse`, `rue_adresse`, `nom_adresse`, `code_postal`) VALUES
(1, 'Nguyen', 'Modules récepteurs à infrarouge TSOP4838 38 kHz - TSOP 4838', '1', 10, 'Avenue de', 'Paris', 94300);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `titre` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `reponse` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `auteur` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `titre`, `reponse`, `auteur`) VALUES
(1, 'Mon capteur marche pas', 'Veuillez à vérifier les connexion.\r\nRegardez sur le site si le capteur marche toujours. \r\nAprès ces modifications si cela ne marche pas nous contacter à l\'email suivant : athomeequipe@gmail.com', 'Franck Nguyen (Admin)');

-- --------------------------------------------------------

--
-- Table structure for table `habitation`
--

CREATE TABLE `habitation` (
  `id_habitation` int(11) NOT NULL,
  `type` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `habitation`
--

INSERT INTO `habitation` (`id_habitation`, `type`, `id_user`) VALUES
(1, 'Appartement', 3),
(2, 'Maison', 7),
(3, 'maison', 5),
(4, 'Maison', 6);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `commentaire` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `date_commentaire` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id_message`, `id_topic`, `id_user`, `commentaire`, `date_commentaire`) VALUES
(1, 2, 1, 'Voici les règles d\'usage de ce forum.\r\n-Le forum est destiné à répondre à des problèmes tout autre utilisation sera puni\r\n-Regardez si il y a des topics répondant à votre question\r\n-Pas de flood inutile', '2018-04-06 14:00:00'),
(2, 3, 2, 'Pour les soucis techniques veuillez nous envoyez un mail.', '2018-05-02 00:00:00'),
(3, 4, 3, 'Kappa ou kippo.', '2018-05-08 00:00:00'),
(4, 4, 2, 'Nous allons supprimer ce topic il semblerait que vous soyez stupide.', '2018-05-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `piece`
--

CREATE TABLE `piece` (
  `id_piece` int(11) NOT NULL,
  `nom` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `superficie` tinyint(3) NOT NULL,
  `id_maison` int(11) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `piece`
--

INSERT INTO `piece` (`id_piece`, `nom`, `superficie`, `id_maison`, `type`) VALUES
(1, 'Chambre A', 15, 1, 'Chambre'),
(2, 'Cuisine', 20, 1, 'Cuisine'),
(3, 'Salon', 30, 1, 'Salon'),
(4, 'Salon', 45, 4, 'Salon');

-- --------------------------------------------------------

--
-- Table structure for table `puissance_jour`
--

CREATE TABLE `puissance_jour` (
  `piece_id` mediumint(9) NOT NULL,
  `piece_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `puissance_value` mediumint(9) NOT NULL,
  `consommation_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `puissance_jour`
--

INSERT INTO `puissance_jour` (`piece_id`, `piece_name`, `puissance_value`, `consommation_date`) VALUES
(4, 'Chambre', 90, '2018-06-05'),
(1, 'Salon', 60, '2018-06-05'),
(2, 'Salon', 70, '2018-06-06'),
(3, 'Salon', 80, '2018-06-07'),
(5, 'Chambre', 50, '2018-06-06'),
(6, 'Chambre', 30, '2018-06-07'),
(7, 'WC', 45, '2018-06-05'),
(8, 'WC', 65, '2018-06-06'),
(9, 'WC', 89, '2018-06-07'),
(10, 'Cuisine', 65, '2018-06-05'),
(11, 'Cuisine', 67, '2018-06-06'),
(12, 'Cuisine', 34, '2018-06-07'),
(13, 'SdB', 52, '2018-06-05'),
(14, 'SdB', 36, '2018-06-06'),
(15, 'SdB', 85, '2018-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `statistique`
--

CREATE TABLE `statistique` (
  `id_stat` int(11) NOT NULL,
  `id_sensor` int(11) NOT NULL,
  `date` date NOT NULL,
  `puissance` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistique`
--

INSERT INTO `statistique` (`id_stat`, `id_sensor`, `date`, `puissance`) VALUES
(1, 1, '2018-04-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id_topic` int(11) NOT NULL,
  `titre` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date_crea` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id_topic`, `titre`, `id_utilisateur`, `date_crea`) VALUES
(2, 'Regle du Forum', 1, '2018-04-06 14:00:00'),
(1, 'Jour actuel', 1, '2018-05-05 00:00:00'),
(3, 'Soucis Technique', 2, '2018-05-05 00:00:00'),
(4, 'Kappa', 3, '2018-05-06 00:00:00'),
(5, 'Salut', 1, '2018-05-17 09:44:46'),
(10, '', 5, '2018-06-05 17:53:05'),
(11, '', 5, '2018-06-05 18:01:06'),
(12, '', 5, '2018-06-05 18:01:23'),
(13, '', 5, '2018-06-05 18:02:16'),
(14, '', 5, '2018-06-05 18:02:47'),
(15, '', 4, '2018-06-06 11:26:52'),
(16, '', 4, '2018-06-06 11:28:26'),
(17, '', 8, '2018-06-06 15:18:07'),
(18, '', 5, '2018-06-06 23:20:34'),
(19, '', 5, '2018-06-06 23:21:35'),
(20, '', 5, '2018-06-06 23:25:59'),
(21, '', 5, '2018-06-06 23:26:08'),
(22, '', 5, '2018-06-06 23:26:14'),
(23, '', 5, '2018-06-06 23:26:15'),
(24, '', 5, '2018-06-06 23:30:40'),
(25, '', 5, '2018-06-06 23:32:56'),
(26, '', 5, '2018-06-06 23:39:13'),
(27, '', 5, '2018-06-06 23:40:48'),
(28, '', 5, '2018-06-07 09:43:09'),
(29, '', 8, '2018-06-07 20:51:48'),
(30, '', 7, '2018-06-07 20:55:55'),
(31, '', 5, '2018-06-08 14:12:07'),
(32, '', 5, '2018-06-08 14:12:17'),
(33, '', 5, '2018-06-08 14:24:44'),
(34, '', 5, '2018-06-08 14:24:48'),
(35, '', 5, '2018-06-08 14:26:54'),
(36, '', 5, '2018-06-08 14:27:00'),
(37, '', 5, '2018-06-08 14:29:02'),
(38, '', 5, '2018-06-08 14:29:06'),
(39, '', 5, '2018-06-08 14:31:42'),
(40, '', 5, '2018-06-08 14:31:45'),
(41, '', 5, '2018-06-08 14:41:22'),
(42, '', 5, '2018-06-08 14:41:31'),
(43, '', 5, '2018-06-08 14:43:40'),
(44, '', 5, '2018-06-08 14:43:45'),
(45, '', 5, '2018-06-08 14:44:24'),
(46, '', 5, '2018-06-08 14:44:55'),
(47, '', 5, '2018-06-08 14:45:00'),
(48, '', 5, '2018-06-08 14:45:14'),
(49, '', 5, '2018-06-08 14:51:38'),
(50, '', 5, '2018-06-08 14:51:42'),
(51, '', 5, '2018-06-08 14:51:58'),
(52, '', 5, '2018-06-08 14:52:00'),
(53, '', 5, '2018-06-08 14:52:29'),
(54, '', 5, '2018-06-08 14:52:30'),
(55, '', 5, '2018-06-08 14:52:34'),
(56, '', 5, '2018-06-08 14:52:49'),
(57, '', 5, '2018-06-08 14:52:54'),
(58, '', 5, '2018-06-08 14:56:06'),
(59, '', 5, '2018-06-08 14:56:09'),
(60, '', 5, '2018-06-08 14:56:11'),
(61, '', 5, '2018-06-08 14:56:15'),
(62, '', 5, '2018-06-08 14:56:17'),
(63, '', 5, '2018-06-08 14:56:21'),
(64, '', 5, '2018-06-08 14:57:10'),
(65, '', 5, '2018-06-08 14:57:13'),
(66, '', 5, '2018-06-08 14:57:16'),
(67, '', 5, '2018-06-08 14:57:18'),
(68, '', 5, '2018-06-08 14:57:19'),
(69, '', 5, '2018-06-08 14:57:21'),
(70, '', 5, '2018-06-08 14:57:22'),
(71, '', 5, '2018-06-08 14:57:24'),
(72, '', 5, '2018-06-08 14:57:26'),
(73, '', 5, '2018-06-08 14:57:27'),
(74, '', 5, '2018-06-08 14:57:28'),
(75, '', 5, '2018-06-08 14:57:30'),
(76, '', 5, '2018-06-08 14:57:50'),
(77, '', 5, '2018-06-08 14:57:52'),
(78, '', 5, '2018-06-08 14:57:54'),
(79, '', 5, '2018-06-08 14:57:58'),
(80, '', 5, '2018-06-08 14:57:59'),
(81, '', 5, '2018-06-08 14:58:01'),
(82, '', 5, '2018-06-08 14:58:29'),
(83, '', 5, '2018-06-08 14:58:32'),
(84, '', 5, '2018-06-08 14:58:33'),
(85, '', 5, '2018-06-08 14:58:35'),
(86, '', 5, '2018-06-08 14:58:36'),
(87, '', 5, '2018-06-08 15:00:04'),
(88, '', 5, '2018-06-08 15:00:06'),
(89, '', 5, '2018-06-08 15:00:10'),
(90, '', 5, '2018-06-08 15:00:12'),
(91, '', 5, '2018-06-08 15:01:19'),
(92, '', 5, '2018-06-08 15:01:22'),
(93, '', 5, '2018-06-08 15:01:30'),
(94, '', 5, '2018-06-08 15:01:38'),
(95, '', 5, '2018-06-08 15:01:52'),
(96, '', 5, '2018-06-08 15:02:01'),
(97, '', 5, '2018-06-08 15:02:09'),
(98, '', 5, '2018-06-08 15:02:22'),
(99, '', 5, '2018-06-08 15:02:24'),
(100, '', 5, '2018-06-08 15:03:19'),
(101, '', 5, '2018-06-08 15:03:23'),
(102, '', 5, '2018-06-08 15:03:25'),
(103, '', 5, '2018-06-08 15:03:30'),
(104, '', 5, '2018-06-08 15:06:05'),
(105, '', 5, '2018-06-08 15:06:13'),
(106, '', 5, '2018-06-08 15:06:20'),
(107, '', 5, '2018-06-08 15:06:24'),
(108, '', 5, '2018-06-08 15:07:34'),
(109, '', 5, '2018-06-08 15:07:47'),
(110, '', 5, '2018-06-08 15:08:15'),
(111, '', 5, '2018-06-08 15:08:18'),
(112, '', 5, '2018-06-08 15:20:57'),
(113, '', 5, '2018-06-08 15:21:01'),
(114, '', 5, '2018-06-08 15:21:12'),
(115, '', 5, '2018-06-08 15:21:14'),
(116, '', 5, '2018-06-08 15:22:19'),
(117, '', 5, '2018-06-08 15:22:23'),
(118, '', 5, '2018-06-08 15:22:30'),
(119, '', 5, '2018-06-08 15:22:34'),
(120, '', 5, '2018-06-08 15:22:37'),
(121, '', 5, '2018-06-08 15:25:54'),
(122, '', 5, '2018-06-08 15:26:07'),
(123, '', 5, '2018-06-08 15:26:12'),
(124, '', 5, '2018-06-08 15:28:40'),
(125, '', 5, '2018-06-08 15:28:42'),
(126, '', 5, '2018-06-08 15:30:01'),
(127, '', 5, '2018-06-08 15:30:04'),
(128, '', 5, '2018-06-08 15:30:09'),
(129, '', 5, '2018-06-08 15:30:11'),
(130, '', 5, '2018-06-08 15:31:13'),
(131, '', 5, '2018-06-08 15:31:15'),
(132, '', 5, '2018-06-08 15:31:15'),
(133, '', 5, '2018-06-08 15:31:24'),
(134, '', 5, '2018-06-08 15:31:29'),
(135, '', 5, '2018-06-08 15:31:31'),
(136, '', 5, '2018-06-08 15:31:36'),
(137, '', 5, '2018-06-08 15:31:39'),
(138, '', 5, '2018-06-08 15:31:44'),
(139, '', 5, '2018-06-08 15:31:47'),
(140, '', 5, '2018-06-08 15:37:32'),
(141, '', 5, '2018-06-08 15:37:40'),
(142, '', 5, '2018-06-08 15:37:54'),
(143, '', 5, '2018-06-08 15:37:55'),
(144, '', 5, '2018-06-08 15:39:07'),
(145, '', 5, '2018-06-08 15:39:09'),
(146, '', 5, '2018-06-08 15:39:23'),
(147, '', 5, '2018-06-08 15:39:25'),
(148, '', 5, '2018-06-08 15:40:12'),
(149, '', 5, '2018-06-08 15:40:12'),
(150, '', 5, '2018-06-08 15:40:31'),
(151, '', 5, '2018-06-08 15:40:33'),
(152, '', 5, '2018-06-08 15:42:02'),
(153, '', 5, '2018-06-08 15:42:07'),
(154, '', 5, '2018-06-08 15:43:41'),
(155, '', 5, '2018-06-08 15:43:42'),
(156, '', 5, '2018-06-08 15:54:39'),
(157, '', 5, '2018-06-08 15:54:41'),
(158, '', 1, '2018-06-09 15:53:59'),
(159, '', 6, '2018-06-09 16:55:41'),
(160, '', 7, '2018-06-09 17:01:01'),
(161, '', 6, '2018-06-09 19:18:50'),
(162, '', 6, '2018-06-09 19:18:53'),
(163, '', 6, '2018-06-09 19:18:59'),
(164, '', 6, '2018-06-09 19:19:02'),
(165, '', 6, '2018-06-09 19:21:46'),
(166, '', 6, '2018-06-09 19:21:51'),
(167, '', 6, '2018-06-09 19:22:51'),
(168, '', 6, '2018-06-09 19:23:22'),
(169, '', 6, '2018-06-09 19:32:54'),
(170, '', 6, '2018-06-09 19:32:56'),
(171, '', 6, '2018-06-09 19:33:10'),
(172, '', 6, '2018-06-09 19:33:12'),
(173, '', 6, '2018-06-09 19:33:15'),
(174, '', 6, '2018-06-09 19:33:16'),
(175, '', 6, '2018-06-09 19:33:21'),
(176, '', 6, '2018-06-09 19:33:23'),
(177, '', 6, '2018-06-09 19:33:32'),
(178, '', 6, '2018-06-09 19:33:33'),
(179, '', 6, '2018-06-09 19:33:35'),
(180, '', 6, '2018-06-09 19:33:38'),
(181, '', 6, '2018-06-09 19:34:02'),
(182, '', 6, '2018-06-09 19:34:04'),
(183, '', 6, '2018-06-09 19:35:00'),
(184, '', 6, '2018-06-09 19:35:01'),
(185, '', 6, '2018-06-09 19:35:03'),
(186, '', 6, '2018-06-09 19:35:04'),
(187, '', 6, '2018-06-09 19:35:31'),
(188, '', 6, '2018-06-09 19:35:32'),
(189, '', 6, '2018-06-09 19:36:04'),
(190, '', 6, '2018-06-09 19:36:05'),
(191, '', 6, '2018-06-09 19:44:49'),
(192, '', 6, '2018-06-09 19:44:53'),
(193, '', 6, '2018-06-09 19:49:39'),
(194, '', 6, '2018-06-09 19:49:41'),
(195, '', 6, '2018-06-09 19:50:37'),
(196, '', 6, '2018-06-09 19:50:39'),
(197, '', 6, '2018-06-09 19:50:51'),
(198, '', 6, '2018-06-09 19:50:52'),
(199, '', 6, '2018-06-09 19:52:32'),
(200, '', 6, '2018-06-09 19:52:34'),
(201, '', 6, '2018-06-09 19:52:41'),
(202, '', 6, '2018-06-09 19:52:42'),
(203, '', 6, '2018-06-09 20:03:50'),
(204, '', 6, '2018-06-09 20:04:15'),
(205, '', 6, '2018-06-09 20:04:17'),
(206, '', 6, '2018-06-09 20:05:19'),
(207, '', 6, '2018-06-09 20:05:29'),
(208, '', 6, '2018-06-09 20:05:36'),
(209, '', 6, '2018-06-09 20:07:26'),
(210, '', 6, '2018-06-09 20:07:26'),
(211, '', 6, '2018-06-09 20:07:32'),
(212, '', 6, '2018-06-09 20:07:33'),
(213, '', 6, '2018-06-09 20:08:53'),
(214, '', 6, '2018-06-09 20:08:54'),
(215, '', 6, '2018-06-09 20:09:00'),
(216, '', 6, '2018-06-09 20:09:01'),
(217, '', 6, '2018-06-09 20:09:06'),
(218, '', 6, '2018-06-09 20:09:07'),
(219, '', 6, '2018-06-09 20:09:59'),
(220, '', 6, '2018-06-09 20:10:23'),
(221, '', 6, '2018-06-09 20:10:31'),
(222, '', 6, '2018-06-09 20:11:47'),
(223, '', 6, '2018-06-09 20:11:55'),
(224, '', 6, '2018-06-09 20:11:56'),
(225, '', 6, '2018-06-09 20:12:03'),
(226, '', 6, '2018-06-09 20:13:20'),
(227, '', 6, '2018-06-09 20:13:24'),
(228, '', 6, '2018-06-09 20:13:25'),
(229, '', 6, '2018-06-09 20:13:34'),
(230, '', 6, '2018-06-09 20:13:35'),
(231, '', 6, '2018-06-09 20:15:01'),
(232, '', 6, '2018-06-09 20:15:44'),
(233, '', 6, '2018-06-09 20:15:51'),
(234, '', 6, '2018-06-09 20:15:53'),
(235, '', 6, '2018-06-09 20:15:56'),
(236, '', 6, '2018-06-09 20:15:58'),
(237, '', 6, '2018-06-09 20:16:02'),
(238, '', 6, '2018-06-09 20:17:08'),
(239, '', 6, '2018-06-09 20:17:15'),
(240, '', 6, '2018-06-09 20:17:16'),
(241, '', 6, '2018-06-09 20:17:43'),
(242, '', 6, '2018-06-09 20:17:43'),
(243, '', 6, '2018-06-09 20:18:10'),
(244, '', 6, '2018-06-09 20:18:11'),
(245, '', 6, '2018-06-09 20:18:13'),
(246, '', 6, '2018-06-09 20:18:14'),
(247, '', 6, '2018-06-09 20:18:16'),
(248, '', 6, '2018-06-09 20:18:45'),
(249, '', 6, '2018-06-09 20:18:53'),
(250, '', 6, '2018-06-09 20:18:54'),
(251, '', 6, '2018-06-09 20:20:12'),
(252, '', 6, '2018-06-09 20:20:14'),
(253, '', 6, '2018-06-09 20:20:19'),
(254, '', 6, '2018-06-09 20:20:20'),
(255, '', 6, '2018-06-09 20:20:23'),
(256, '', 6, '2018-06-09 20:20:24'),
(257, '', 6, '2018-06-09 20:21:47'),
(258, '', 6, '2018-06-09 20:22:48'),
(259, '', 6, '2018-06-09 20:22:50'),
(260, '', 6, '2018-06-09 20:22:51'),
(261, '', 6, '2018-06-09 20:22:52'),
(262, '', 6, '2018-06-09 20:23:08'),
(263, '', 6, '2018-06-09 20:23:22'),
(264, '', 6, '2018-06-09 20:23:59'),
(265, '', 6, '2018-06-09 20:24:02'),
(266, '', 6, '2018-06-09 20:24:03'),
(267, '', 6, '2018-06-09 20:24:10'),
(268, '', 6, '2018-06-09 20:24:28'),
(269, '', 6, '2018-06-09 20:24:28'),
(270, '', 6, '2018-06-09 20:24:29'),
(271, '', 6, '2018-06-09 20:24:30'),
(272, '', 6, '2018-06-09 20:25:04'),
(273, '', 6, '2018-06-09 20:25:07'),
(274, '', 6, '2018-06-09 20:25:08'),
(275, '', 6, '2018-06-09 20:25:15'),
(276, '', 6, '2018-06-09 20:26:29'),
(277, '', 6, '2018-06-09 20:26:46'),
(278, '', 6, '2018-06-09 20:26:47'),
(279, '', 6, '2018-06-09 20:29:14'),
(280, '', 6, '2018-06-09 20:29:15'),
(281, '', 6, '2018-06-09 20:29:17'),
(282, '', 6, '2018-06-09 20:29:17'),
(283, '', 6, '2018-06-09 20:29:20'),
(284, '', 6, '2018-06-09 20:29:22'),
(285, '', 6, '2018-06-09 20:29:24'),
(286, '', 6, '2018-06-09 20:29:25'),
(287, '', 6, '2018-06-09 20:29:35'),
(288, '', 6, '2018-06-09 20:29:36'),
(289, '', 6, '2018-06-09 20:31:41'),
(290, '', 6, '2018-06-09 20:31:41'),
(291, '', 6, '2018-06-09 20:33:59'),
(292, '', 6, '2018-06-09 20:34:00'),
(293, '', 6, '2018-06-09 20:34:01'),
(294, '', 6, '2018-06-09 20:34:01'),
(295, '', 6, '2018-06-09 20:35:18'),
(296, '', 6, '2018-06-09 20:35:18'),
(297, '', 6, '2018-06-09 20:35:23'),
(298, '', 6, '2018-06-09 20:35:24'),
(299, '', 6, '2018-06-09 20:35:26'),
(300, '', 6, '2018-06-09 20:35:26'),
(301, '', 6, '2018-06-09 20:36:11'),
(302, '', 6, '2018-06-09 20:36:11'),
(303, '', 6, '2018-06-09 20:36:13'),
(304, '', 6, '2018-06-09 20:36:14'),
(305, '', 6, '2018-06-09 20:36:20'),
(306, '', 6, '2018-06-09 20:36:20'),
(307, '', 6, '2018-06-09 20:36:23'),
(308, '', 6, '2018-06-09 20:36:24'),
(309, '', 6, '2018-06-09 20:36:26'),
(310, '', 6, '2018-06-09 20:36:28'),
(311, '', 6, '2018-06-09 20:38:19'),
(312, '', 6, '2018-06-09 20:38:22'),
(313, '', 6, '2018-06-09 20:38:24'),
(314, '', 6, '2018-06-09 20:39:23'),
(315, '', 6, '2018-06-09 20:39:25'),
(316, '', 6, '2018-06-09 20:39:28'),
(317, '', 6, '2018-06-09 20:39:30'),
(318, '', 6, '2018-06-09 20:39:51'),
(319, '', 6, '2018-06-09 20:39:51'),
(320, '', 6, '2018-06-09 20:39:52'),
(321, '', 6, '2018-06-09 20:39:52'),
(322, '', 6, '2018-06-09 20:40:02'),
(323, '', 6, '2018-06-09 20:40:09'),
(324, '', 6, '2018-06-09 20:40:12'),
(325, '', 6, '2018-06-09 20:40:14'),
(326, '', 6, '2018-06-09 20:41:36'),
(327, '', 6, '2018-06-09 20:41:37'),
(328, '', 6, '2018-06-09 20:41:38'),
(329, '', 6, '2018-06-09 20:41:38'),
(330, '', 6, '2018-06-09 20:41:53'),
(331, '', 6, '2018-06-09 20:43:57'),
(332, '', 6, '2018-06-09 20:43:57'),
(333, '', 6, '2018-06-09 20:44:29'),
(334, '', 6, '2018-06-09 20:44:30'),
(335, '', 6, '2018-06-09 20:44:35'),
(336, '', 6, '2018-06-09 20:44:36'),
(337, '', 6, '2018-06-09 20:44:37'),
(338, '', 6, '2018-06-09 20:44:38'),
(339, '', 6, '2018-06-09 20:45:27'),
(340, '', 6, '2018-06-09 20:45:29'),
(341, '', 6, '2018-06-09 20:45:29'),
(342, '', 6, '2018-06-09 20:46:44'),
(343, '', 6, '2018-06-09 20:47:08'),
(344, '', 6, '2018-06-09 20:47:09'),
(345, '', 6, '2018-06-09 20:47:24'),
(346, '', 6, '2018-06-09 20:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `trame`
--

CREATE TABLE `trame` (
  `Pseudo` varchar(4) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trame`
--

INSERT INTO `trame` (`Pseudo`, `id_utilisateur`) VALUES
('AAAA', 2),
('G10C', 7);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `prenom` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `numero` int(10) UNSIGNED ZEROFILL NOT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `type` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `mail` varchar(255) NOT NULL,
  `num_principal` int(11) NOT NULL,
  `NombreCapteurInfrarouge` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `numero`, `password`, `type`, `mail`, `num_principal`, `NombreCapteurInfrarouge`) VALUES
(1, 'Robert', 'Franck', 0000000000, 'Shizumo1', 'admin', 'nicolas.nguyen@isep.fr', 0, 0),
(2, 'Picone', 'Valentin', 0658362479, '3ed7dceaf266cafef032b9d5db224717', 'admin', 'valentin.picone@isep.fr', 0, 0),
(3, 'Bernard', 'Jean', 0685749612, '0360f275c2c5363482c0dc54fd98a33f', 'client principal', 'jean.bernard@jvc.com', 0, 0),
(4, 'a', 'a', 0000000000, '', 'principal', 'a@a.fr', 0, 0),
(5, 'b', 'aaa', 0000000000, '$6$rounds=3232$yRyJDM8YPUMMRAJF$zaTFM1lSC5CGViSiCUwIlxYQdcaZKr2o3qU2/61s6IPp7HO/7f.o6UwLzzYzAel0rnYtG4Ox6wGcDzhrxxLKw/', 'secondaire', 'b@b', 6, 0),
(6, 'aaa', 'A', 0000000000, '$6$rounds=3232$yRyJDM8YPUMMRAJF$x1gYfLMX28tk4Ss/AydY6fZiqP6TzrJEpGAELeHSz2LC8UbBmODrwRkTuNsraSetVMCVZjV3bs6uQf1edHGOA1', 'secondaire', 'a@gmail.fr', 9, 0),
(7, 'B', 'Franck', 0000000000, '$6$rounds=3232$yRyJDM8YPUMMRAJF$jrg1ytxDLna.At/3DjmkbZBWi5d062JvDypUL.wvnaQNBqSEopZso0U731xy6ncj20jEHAsR9L8CzV02WD5y.0', 'client principal', 'n-franck@hotmail.fr', 0, 2),
(8, 'C', 'C', 0000000000, '', 'client principal', 'arnold.neuman@gmail.com', 0, 16),
(9, 'c', 'c', 0000000000, '$6$rounds=3232$yRyJDM8YPUMMRAJF$pId92ve5Nj8X4eNv9EmcgVkhSQSs4oYVEd8h3jLyqfieNynO1KtG1VnWqNYdjG2ZhBftZbz7tkUTCxXKhr6AU1', 'client principal', 'c@c', 0, -1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actionneur`
--
ALTER TABLE `actionneur`
  ADD PRIMARY KEY (`id_actionneur`);

--
-- Indexes for table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`id_boutique`);

--
-- Indexes for table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id_capteur`);

--
-- Indexes for table `consommation_jour`
--
ALTER TABLE `consommation_jour`
  ADD PRIMARY KEY (`piece_id`);

--
-- Indexes for table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_facture`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `habitation`
--
ALTER TABLE `habitation`
  ADD PRIMARY KEY (`id_habitation`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`id_piece`);

--
-- Indexes for table `puissance_jour`
--
ALTER TABLE `puissance_jour`
  ADD PRIMARY KEY (`piece_id`);

--
-- Indexes for table `statistique`
--
ALTER TABLE `statistique`
  ADD PRIMARY KEY (`id_stat`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id_topic`);

--
-- Indexes for table `trame`
--
ALTER TABLE `trame`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actionneur`
--
ALTER TABLE `actionneur`
  MODIFY `id_actionneur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boutique`
--
ALTER TABLE `boutique`
  MODIFY `id_boutique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id_capteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `consommation_jour`
--
ALTER TABLE `consommation_jour`
  MODIFY `piece_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_facture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `habitation`
--
ALTER TABLE `habitation`
  MODIFY `id_habitation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `piece`
--
ALTER TABLE `piece`
  MODIFY `id_piece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statistique`
--
ALTER TABLE `statistique`
  MODIFY `id_stat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id_topic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
