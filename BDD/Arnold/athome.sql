-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2018 at 02:17 PM
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
  `stock` int(2) NOT NULL,
  `typeb` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boutique`
--

INSERT INTO `boutique` (`id_boutique`, `nom`, `description`, `prix`, `id_personne`, `stock`, `typeb`) VALUES
(1, 'infrarouge TSOP4838 38 kHz', 'Haute densité d\'assemblage par intégration de la diode réceptrice, du filtre et du préampli dans un boîtier. Insensibilité à la lumière du jour, compatibilité TTL et C-MOS, faible puissance absorbée et haute sécurité anti-parasite distinguent cette série.', '0.65', 1, 44, 'infrarouge'),
(2, 'CAPTEUR DE TEMPÉRATURE DS18B20', 'Le DS18B20 est composé des éléments suivant :\r\nun capteur de température, un convertisseur analogique - numérique, une zone mémoire de 8 octets et une EEPROM de 3 octets.\r\n\r\nCes zones de mémoire servent à communiquer avec le DS18B20 afin de :\r\n- récupérer les températures converties\r\n- de configurer le convertisseur\r\n- de configurer les valeurs de températures min et max pour la fonction \"thermostat\"', '3.50', 1, 11, 'temperature'),
(3, 'Capteur Photoélectrique / Mini Crépusculaire 1-10V', 'Avec une zone de détection de 360 ° et une plage de régulation 1-100%, ce capteur crépusculaire est compatible avec les luminaires équipés de driver dimmable 1-10V. Son mode de fonctionnement progressif, augmente et diminue l’éclairage du luminaire en fonction de la lumière ambiante préréglée (équipé d’un variateur qui modifie le comportement par rapport à la lumière ambiante), c’est à dire, quand la lumière ambiante diminue, le capteur augmente l\'intensité de la lumière et au contraire, quand la lumière ambiante augmente, le capteur réduit l\'intensité de la lumière, permettant toujours un éclairage adéquat d\'une manière efficace.', '17.29', 2, 84, 'luminosité'),
(4, 'Capteur de Son RB-Wav-26', 'Amplificateur de puissance audio LM386 intégré\r\nGain du signal audio jusqu\'à 200\r\nPrécision ajustable\r\nIndicateur du signal en sortie', '3.92', 2, 58, 'micro\r\n');

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
(1, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 4),
(2, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 4),
(3, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 4),
(4, 'temperature', 'CAPTEUR DE TEMPÉRATURE DS18B20', 'off', 4),
(5, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 4),
(6, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 2),
(7, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 1),
(8, 'temperature', 'CAPTEUR DE TEMPÉRATURE DS18B20', 'off', 3),
(9, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 1);

-- --------------------------------------------------------

--
-- Table structure for table `consommation_jour`
--

CREATE TABLE `consommation_jour` (
  `piece_id` int(11) NOT NULL,
  `piece_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `consommation_value` mediumint(9) NOT NULL,
  `consommation_date` date NOT NULL,
  `id_capteur` int(11) NOT NULL,
  `numerotrame` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `consommation_jour`
--

INSERT INTO `consommation_jour` (`piece_id`, `piece_name`, `consommation_value`, `consommation_date`, `id_capteur`, `numerotrame`) VALUES
(4, 'Chambre de Maxime', 400, '2018-06-11', 5, 1),
(4, 'Chambre de Maxime', 400, '2018-06-11', 5, 2),
(4, 'Chambre de Maxime', 400, '2018-06-11', 5, 3),
(4, 'Chambre de Maxime', 400, '2018-06-11', 5, 4),
(4, 'Chambre de Maxime', 400, '2018-06-11', 5, 5),
(4, 'Chambre de Maxime', 400, '2018-06-11', 5, 6),
(4, 'Chambre de Maxime', 400, '2018-06-11', 5, 7),
(4, 'Chambre de Maxime', 400, '2018-06-11', 5, 8),
(4, 'Chambre de Maxime', 400, '2018-06-11', 5, 9),
(4, 'Chambre de Maxime', 400, '2018-06-11', 5, 10),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 11),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 12),
(4, 'Chambre de Maxime', 1518, '2018-06-12', 1, 13),
(4, 'Chambre de Maxime', 1518, '2018-06-12', 1, 14),
(4, 'Chambre de Maxime', 1572, '2018-06-12', 1, 15),
(4, 'Chambre de Maxime', 1567, '2018-06-12', 1, 16),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 17),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 18),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 19),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 20),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 21),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 22),
(4, 'Chambre de Maxime', 1518, '2018-06-12', 1, 23),
(4, 'Chambre de Maxime', 1518, '2018-06-12', 1, 24),
(4, 'Chambre de Maxime', 1572, '2018-06-12', 1, 25),
(4, 'Chambre de Maxime', 1567, '2018-06-12', 1, 26),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 27),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 28),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 29),
(4, 'Chambre de Maxime', 1479, '2018-06-12', 1, 30);

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
  `auteur` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `droit` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `titre`, `reponse`, `auteur`, `droit`) VALUES
(1, 'Mon capteur marche pas', 'Regardez sur le site si le capteur marche toujours \r\nAprès ces modifications si cela ne marche pas nous contacter à lemail suivant :', 'Franck Nguyen ', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `habitation`
--

CREATE TABLE `habitation` (
  `id_habitation` int(11) NOT NULL,
  `type` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `nom` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `nbpiece` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `habitation`
--

INSERT INTO `habitation` (`id_habitation`, `type`, `nom`, `adresse`, `nbpiece`, `id_user`) VALUES
(1, 'Appartement', '', '', 0, 1),
(2, 'appartement', '', '', 0, 2),
(3, 'Maison', 'Maison de Patrick', '10 Avenue de Paris', 3, 3);

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
(1, 0, 3, 'Test1', '2018-06-11 14:29:37'),
(2, 1, 1, '', '2018-06-11 15:24:53'),
(3, 0, 1, 'salut', '2018-06-11 16:14:32'),
(4, 1, 1, '', '2018-06-12 11:17:14'),
(5, 1, 1, '', '2018-06-12 11:27:13'),
(6, 0, 2, '', '2018-06-14 10:43:47'),
(7, 1, 2, '', '2018-06-14 10:43:47'),
(8, 0, 3, '', '2018-06-14 12:44:06'),
(9, 1, 3, '', '2018-06-14 12:44:06'),
(10, 0, 3, '', '2018-06-14 13:00:50'),
(11, 1, 3, '', '2018-06-14 13:00:50'),
(12, 0, 3, '', '2018-06-14 13:02:58'),
(13, 1, 3, '', '2018-06-14 13:02:58');

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
(4, 'Chambre de Maxime', 10, 2, 'Chambre'),
(5, 'Chambre Arnold', 20, 3, 'chambre'),
(6, 'Salon Arnold', 60, 3, 'salon'),
(7, 'Cuisine Arnold', 30, 3, 'cuisine'),
(8, 'SdB Arnold', 60, 3, 'sdb'),
(9, 'Salon Arnold Bis', 45, 3, 'salon');

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
-- Table structure for table `stockuser`
--

CREATE TABLE `stockuser` (
  `id_stock` int(11) NOT NULL,
  `id_captacheter` int(11) NOT NULL,
  `id_acheteur` int(11) NOT NULL,
  `id_quantite` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stockuser`
--

INSERT INTO `stockuser` (`id_stock`, `id_captacheter`, `id_acheteur`, `id_quantite`) VALUES
(1, 1, 1, 0),
(2, 1, 1, 0),
(3, 2, 1, 0),
(4, 1, 1, 0),
(5, 1, 1, 1),
(6, 1, 1, 1);

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
(1, 'Test1', 3, '2018-06-11 14:29:37');

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
  `num_principal` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `numero`, `password`, `type`, `mail`, `num_principal`) VALUES
(1, 'Nguyen', 'Franck', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$kKb8IgitplqyesiamK/i/F5jF07osxZOPv6AO/ypcyv8BG3rFDiDx5Nm7k5erKg.VXjc0uAkjn4LNT56wAvY4.', 'secondaire', 'n-franck@hotmail.fr', 3),
(3, 'Neuman', 'Arnold', 0000000000, '$6$rounds=3232$yRyJDM8YPUMMRAJF$rioO/QXDsPHYLyKPhR0FJEnD.XHywsljdcRoPfffV1lMpWUKsYDn1EruUQ6ctmANr5Z7jO6Yr6dcJUnnviYzS/', 'admin', 'arnold.neuman@isep.fr', 0),
(4, 'Phu', 'Clement', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$gohgKwqj7natQfB.kKZVaSqOSNe3n0/2NHQkRFgN/FBUjNast58exe4A.AArKdio1cQl6WCW2DlZMe2LxIa3R/', 'admin', 'clement.phu@isep.fr', 0),
(5, 'negre', 'alexandre', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$.IUsnNM4i7HPLEZu8AUmto8MkSg1Yg0ZvtCZPbRG5/doun.ajItjSq9UWvpUrHVjjMqI6QPpl62CD3l4wPNiP0', 'admin', 'alexandre.negre@isep.fr', 0),
(6, 'ponsot', 'julien', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$1onjGadoU3vIgiYFAiTNIK7spzGMNkfYLv8xNSLircZCujU2cJG8bhNjsqmf3ID1JwH7DVTjqfpbUnjNsUjlE/', 'admin', 'julien.ponsot@isep.fr', 0),
(7, 'client', 'un', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$nFQ1WxUO/qH5gKzikGGv1yOb6b8UiFC1mkvK0i7MmF0H4ZS88muW23SW8ehWcZKOwEzeIbU7THU5Ac2ypdY5Z/', 'principal', 'un@isep.fr', 0),
(8, 'client', 'deux', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$lhOUwa6jPRGk.amm6OVkP2iok4a1Nwcx3BwZRdfoM0MgFNIRgaOajypBbupNQwBfrfFV2rKP/z3oySIEnCp7k0', 'principal', 'deux@isep.fr', 0);

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
  ADD PRIMARY KEY (`numerotrame`);

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
-- Indexes for table `stockuser`
--
ALTER TABLE `stockuser`
  ADD PRIMARY KEY (`id_stock`);

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
  MODIFY `id_capteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `consommation_jour`
--
ALTER TABLE `consommation_jour`
  MODIFY `numerotrame` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `id_habitation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `piece`
--
ALTER TABLE `piece`
  MODIFY `id_piece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `statistique`
--
ALTER TABLE `statistique`
  MODIFY `id_stat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stockuser`
--
ALTER TABLE `stockuser`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id_topic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
