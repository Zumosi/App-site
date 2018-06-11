-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 11 juin 2018 à 12:48
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
-- Structure de la table `actionneur`
--

DROP TABLE IF EXISTS `actionneur`;
CREATE TABLE IF NOT EXISTS `actionneur` (
  `id_actionneur` int(11) NOT NULL AUTO_INCREMENT,
  `etat` varchar(255) NOT NULL,
  `type` varchar(60) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `id_capteur` int(11) NOT NULL,
  PRIMARY KEY (`id_actionneur`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actionneur`
--

INSERT INTO `actionneur` (`id_actionneur`, `etat`, `type`, `id_capteur`) VALUES
(1, 'marche', 'moteur', 1);

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
--

DROP TABLE IF EXISTS `boutique`;
CREATE TABLE IF NOT EXISTS `boutique` (
  `id_boutique` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `id_personne` int(11) NOT NULL,
  `stock` int(2) NOT NULL,
  `typeb` varchar(200) NOT NULL,
  PRIMARY KEY (`id_boutique`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `boutique`
--

INSERT INTO `boutique` (`id_boutique`, `nom`, `description`, `prix`, `id_personne`, `stock`, `typeb`) VALUES
(1, 'infrarouge TSOP4838 38 kHz', 'Haute densité d\'assemblage par intégration de la diode réceptrice, du filtre et du préampli dans un boîtier. Insensibilité à la lumière du jour, compatibilité TTL et C-MOS, faible puissance absorbée et haute sécurité anti-parasite distinguent cette série.', '0.65', 1, 48, 'infrarouge'),
(2, 'CAPTEUR DE TEMPÉRATURE DS18B20', 'Le DS18B20 est composé des éléments suivant :\r\nun capteur de température, un convertisseur analogique - numérique, une zone mémoire de 8 octets et une EEPROM de 3 octets.\r\n\r\nCes zones de mémoire servent à communiquer avec le DS18B20 afin de :\r\n- récupérer les températures converties\r\n- de configurer le convertisseur\r\n- de configurer les valeurs de températures min et max pour la fonction \"thermostat\"', '3.50', 1, 11, 'temperature'),
(3, 'Capteur Photoélectrique / Mini Crépusculaire 1-10V', 'Avec une zone de détection de 360 ° et une plage de régulation 1-100%, ce capteur crépusculaire est compatible avec les luminaires équipés de driver dimmable 1-10V. Son mode de fonctionnement progressif, augmente et diminue l’éclairage du luminaire en fonction de la lumière ambiante préréglée (équipé d’un variateur qui modifie le comportement par rapport à la lumière ambiante), c’est à dire, quand la lumière ambiante diminue, le capteur augmente l\'intensité de la lumière et au contraire, quand la lumière ambiante augmente, le capteur réduit l\'intensité de la lumière, permettant toujours un éclairage adéquat d\'une manière efficace.', '17.29', 2, 84, 'luminosité'),
(4, 'Capteur de Son RB-Wav-26', 'Amplificateur de puissance audio LM386 intégré\r\nGain du signal audio jusqu\'à 200\r\nPrécision ajustable\r\nIndicateur du signal en sortie', '3.92', 2, 58, 'micro\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

DROP TABLE IF EXISTS `capteur`;
CREATE TABLE IF NOT EXISTS `capteur` (
  `id_capteur` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `id_place` int(11) NOT NULL,
  PRIMARY KEY (`id_capteur`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`id_capteur`, `type`, `reference`, `etat`, `id_place`) VALUES
(1, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 4),
(2, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 4),
(3, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 4),
(4, 'temperature', 'CAPTEUR DE TEMPÉRATURE DS18B20', 'off', 4),
(5, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 4),
(6, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 2),
(7, 'infrarouge', 'infrarouge TSOP4838 38 kHz', 'off', 1),
(8, 'temperature', 'CAPTEUR DE TEMPÉRATURE DS18B20', 'off', 3);

-- --------------------------------------------------------

--
-- Structure de la table `consommation_jour`
--

DROP TABLE IF EXISTS `consommation_jour`;
CREATE TABLE IF NOT EXISTS `consommation_jour` (
  `piece_id` int(11) NOT NULL AUTO_INCREMENT,
  `piece_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `consommation_value` mediumint(9) NOT NULL,
  `consommation_date` date NOT NULL,
  `id_capteur` int(11) NOT NULL,
  PRIMARY KEY (`piece_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `consommation_jour`
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
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id_facture` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `nom_produit` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `num_adresse` int(4) NOT NULL,
  `rue_adresse` varchar(20) NOT NULL,
  `nom_adresse` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `code_postal` int(5) NOT NULL,
  PRIMARY KEY (`id_facture`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id_facture`, `nom_utilisateur`, `nom_produit`, `prix`, `num_adresse`, `rue_adresse`, `nom_adresse`, `code_postal`) VALUES
(1, 'Nguyen', 'Modules récepteurs à infrarouge TSOP4838 38 kHz - TSOP 4838', '1', 10, 'Avenue de', 'Paris', 94300);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `reponse` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `auteur` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `droit` varchar(15) NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id_faq`, `titre`, `reponse`, `auteur`, `droit`) VALUES
(1, 'Mon capteur marche pas', 'Regardez sur le site si le capteur marche toujours \r\nAprès ces modifications si cela ne marche pas nous contacter à lemail suivant :', 'Franck Nguyen ', 'Admin');

-- --------------------------------------------------------

--
-- Structure de la table `habitation`
--

DROP TABLE IF EXISTS `habitation`;
CREATE TABLE IF NOT EXISTS `habitation` (
  `id_habitation` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `nom` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `nbpiece` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_habitation`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `habitation`
--

INSERT INTO `habitation` (`id_habitation`, `type`, `nom`, `adresse`, `nbpiece`, `id_user`) VALUES
(1, 'Appartement', '', '', 0, 1),
(2, 'appartement', '', '', 0, 2),
(3, 'Maison', 'Maison de Patrick', '10 Avenue de Paris', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `id_topic` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `commentaire` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `date_commentaire` datetime NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `id_topic`, `id_user`, `commentaire`, `date_commentaire`) VALUES
(1, 1, 3, 'Test1', '2018-06-11 14:29:37');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `id_piece` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `superficie` tinyint(3) NOT NULL,
  `id_maison` int(11) NOT NULL,
  `type` varchar(40) NOT NULL,
  PRIMARY KEY (`id_piece`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`id_piece`, `nom`, `superficie`, `id_maison`, `type`) VALUES
(1, 'Chambre A', 15, 1, 'Chambre'),
(2, 'Cuisine', 20, 1, 'Cuisine'),
(3, 'Salon', 30, 1, 'Salon'),
(4, 'Chambre de Maxime', 10, 2, 'Chambre');

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
-- Structure de la table `statistique`
--

DROP TABLE IF EXISTS `statistique`;
CREATE TABLE IF NOT EXISTS `statistique` (
  `id_stat` int(11) NOT NULL AUTO_INCREMENT,
  `id_sensor` int(11) NOT NULL,
  `date` date NOT NULL,
  `puissance` int(11) NOT NULL,
  PRIMARY KEY (`id_stat`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `statistique`
--

INSERT INTO `statistique` (`id_stat`, `id_sensor`, `date`, `puissance`) VALUES
(1, 1, '2018-04-06', 0);

-- --------------------------------------------------------

--
-- Structure de la table `stockuser`
--

DROP TABLE IF EXISTS `stockuser`;
CREATE TABLE IF NOT EXISTS `stockuser` (
  `id_stock` int(11) NOT NULL AUTO_INCREMENT,
  `id_captacheter` int(11) NOT NULL,
  `id_acheteur` int(11) NOT NULL,
  `id_quantite` int(11) NOT NULL,
  PRIMARY KEY (`id_stock`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `stockuser`
--

INSERT INTO `stockuser` (`id_stock`, `id_captacheter`, `id_acheteur`, `id_quantite`) VALUES
(1, 1, 1, 0),
(2, 1, 1, 0),
(3, 2, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

DROP TABLE IF EXISTS `topic`;
CREATE TABLE IF NOT EXISTS `topic` (
  `id_topic` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date_crea` datetime NOT NULL,
  PRIMARY KEY (`id_topic`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `topic`
--

INSERT INTO `topic` (`id_topic`, `titre`, `id_utilisateur`, `date_crea`) VALUES
(1, 'Test1', 3, '2018-06-11 14:29:37');

-- --------------------------------------------------------

--
-- Structure de la table `trame`
--

DROP TABLE IF EXISTS `trame`;
CREATE TABLE IF NOT EXISTS `trame` (
  `Pseudo` varchar(4) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `trame`
--

INSERT INTO `trame` (`Pseudo`, `id_utilisateur`) VALUES
('AAAA', 2),
('G10C', 7);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `prenom` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `numero` int(10) UNSIGNED ZEROFILL NOT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `type` varchar(200) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `mail` varchar(255) NOT NULL,
  `num_principal` int(11) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `numero`, `password`, `type`, `mail`, `num_principal`) VALUES
(1, 'Nguyen', 'Franck', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$kKb8IgitplqyesiamK/i/F5jF07osxZOPv6AO/ypcyv8BG3rFDiDx5Nm7k5erKg.VXjc0uAkjn4LNT56wAvY4.', 'admin', 'n-franck@hotmail.fr', 0),
(2, 'Neuman', 'Arnold', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$rioO/QXDsPHYLyKPhR0FJEnD.XHywsljdcRoPfffV1lMpWUKsYDn1EruUQ6ctmANr5Z7jO6Yr6dcJUnnviYzS/', 'admin', 'arnold.neuman@isep.fr', 0),
(3, 'Picone', 'Valentin', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$f7n3Tw2Up3paDmAAybX.IxcoX7iiui7PlJSQ3MiAxty35mnnWpkVNHQkvWfScvCy5nSEHotxYK7Jl7XywZP3e1', 'admin', 'valentin.picone@isep.fr', 0),
(4, 'Phu', 'Clement', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$gohgKwqj7natQfB.kKZVaSqOSNe3n0/2NHQkRFgN/FBUjNast58exe4A.AArKdio1cQl6WCW2DlZMe2LxIa3R/', 'admin', 'clement.phu@isep.fr', 0),
(5, 'negre', 'alexandre', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$.IUsnNM4i7HPLEZu8AUmto8MkSg1Yg0ZvtCZPbRG5/doun.ajItjSq9UWvpUrHVjjMqI6QPpl62CD3l4wPNiP0', 'admin', 'alexandre.negre@isep.fr', 0),
(6, 'ponsot', 'julien', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$1onjGadoU3vIgiYFAiTNIK7spzGMNkfYLv8xNSLircZCujU2cJG8bhNjsqmf3ID1JwH7DVTjqfpbUnjNsUjlE/', 'admin', 'julien.ponsot@isep.fr', 0),
(7, 'client', 'un', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$nFQ1WxUO/qH5gKzikGGv1yOb6b8UiFC1mkvK0i7MmF0H4ZS88muW23SW8ehWcZKOwEzeIbU7THU5Ac2ypdY5Z/', 'principal', 'un@isep.fr', 0),
(8, 'client', 'deux', 0123456789, '$6$rounds=3232$yRyJDM8YPUMMRAJF$lhOUwa6jPRGk.amm6OVkP2iok4a1Nwcx3BwZRdfoM0MgFNIRgaOajypBbupNQwBfrfFV2rKP/z3oySIEnCp7k0', 'principal', 'deux@isep.fr', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
