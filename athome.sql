-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Hôte : localhost
-- Généré le :  mar. 05 juin 2018 à 10:18
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1
=======
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 05 juin 2018 à 08:53
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9
>>>>>>> 84b6947228000fbceb1f69f8f592a817dbc3d628

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `atHome`
--

-- --------------------------------------------------------

--
-- Structure de la table `actionneur`
--

CREATE TABLE `actionneur` (
  `id_actionneur` int(11) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `type` varchar(60) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `id_capteur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actionneur`
--

INSERT INTO `actionneur` (`id_actionneur`, `etat`, `type`, `id_capteur`) VALUES
(1, 'marche', 'moteur', 1);

-- --------------------------------------------------------

--
-- Structure de la table `boutique`
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
-- Déchargement des données de la table `boutique`
--

INSERT INTO `boutique` (`id_boutique`, `nom`, `description`, `prix`, `id_personne`, `stock`) VALUES
(1, 'capteur 1 ', 'ce capteur est le capteur 1 ', '1.00', 1, 1),
(5, 'capteur 1 ', 'ce capteur est le capteur 1 ', '4.00', 6, 13),
(2, 'CAPTEUR DE TEMPÉRATURE DS18B20', 'Le DS18B20 est composé des éléments suivant :\r\nun capteur de température, un convertisseur analogique - numérique, une zone mémoire de 8 octets et une EEPROM de 3 octets.\r\n\r\nCes zones de mémoire servent à communiquer avec le DS18B20 afin de :\r\n- récupérer les températures converties\r\n- de configurer le convertisseur\r\n- de configurer les valeurs de températures min et max pour la fonction \"thermostat\"', '3.50', 1, 8),
(3, 'Capteur Photoélectrique / Mini Crépusculaire 1-10V', 'Avec une zone de détection de 360 ° et une plage de régulation 1-100%, ce capteur crépusculaire est compatible avec les luminaires équipés de driver dimmable 1-10V. Son mode de fonctionnement progressif, augmente et diminue l’éclairage du luminaire en fonction de la lumière ambiante préréglée (équipé d’un variateur qui modifie le comportement par rapport à la lumière ambiante), c’est à dire, quand la lumière ambiante diminue, le capteur augmente l\'intensité de la lumière et au contraire, quand la lumière ambiante augmente, le capteur réduit l\'intensité de la lumière, permettant toujours un éclairage adéquat d\'une manière efficace.', '17.29', 2, 15),
(4, 'Capteur de Son RB-Wav-26', 'Amplificateur de puissance audio LM386 intégré\r\nGain du signal audio jusqu\'à 200\r\nPrécision ajustable\r\nIndicateur du signal en sortie', '3.92', 2, 70);

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `id_capteur` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `id_place` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`id_capteur`, `type`, `reference`, `etat`, `id_place`) VALUES
(1, 'infrarouge', 'LHI 968', 'marche', 1);

-- --------------------------------------------------------

--
-- Structure de la table `consommation_jour`
--

CREATE TABLE `consommation_jour` (
  `piece_id` mediumint(9) NOT NULL,
  `piece_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `consommation_value` mediumint(9) NOT NULL,
  `consommation_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `consommation_jour`
--

INSERT INTO `consommation_jour` (`piece_id`, `piece_name`, `consommation_value`, `consommation_date`) VALUES
<<<<<<< HEAD
(1, 'wc', 10, '2018-05-05');
=======
(1, 'wc', 10, '2018-05-05'),
(2, 'salon', 20, '2018-05-01'),
(3, 'chambre', 30, '2018-05-02'),
(1, 'sdb', 10, '2018-06-03'),
(2, 'sdb', 20, '2018-06-04'),
(1, 'sdb', 10, '2018-06-03'),
(2, 'sdb', 20, '2018-06-04'),
(2, 'wc', 10, '2018-06-06'),
(3, 'wc', 5, '2018-06-05'),
(2, 'chambre', 8, '2018-06-06'),
(3, 'chambre', 6, '2018-06-05'),
(2, 'salon', 9, '2018-06-05'),
(3, 'salon', 14, '2018-06-06');
>>>>>>> 84b6947228000fbceb1f69f8f592a817dbc3d628

-- --------------------------------------------------------

--
-- Structure de la table `facture`
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
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`id_facture`, `nom_utilisateur`, `nom_produit`, `prix`, `num_adresse`, `rue_adresse`, `nom_adresse`, `code_postal`) VALUES
(1, 'Nguyen', 'Modules récepteurs à infrarouge TSOP4838 38 kHz - TSOP 4838', '1', 10, 'Avenue de', 'Paris', 94300);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `titre` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `reponse` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `auteur` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id_faq`, `titre`, `reponse`, `auteur`) VALUES
(1, 'Mon capteur marche pas', 'Veuillez à vérifier les connexion.\r\nRegardez sur le site si le capteur marche toujours. \r\nAprès ces modifications si cela ne marche pas nous contacter à l\'email suivant : athomeequipe@gmail.com', 'Franck Nguyen (Admin)');

-- --------------------------------------------------------

--
-- Structure de la table `habitation`
--

CREATE TABLE `habitation` (
  `id_habitation` int(11) NOT NULL,
  `type` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `habitation`
--

INSERT INTO `habitation` (`id_habitation`, `type`, `id_user`) VALUES
(1, 'Appartement', 1),
(2, 'Maison', 1);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `id_topic` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `commentaire` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `date_commentaire` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `id_topic`, `id_user`, `commentaire`, `date_commentaire`) VALUES
(1, 2, 1, 'Voici les règles d\'usage de ce forum.\r\n-Le forum est destiné à répondre à des problèmes tout autre utilisation sera puni\r\n-Regardez si il y a des topics répondant à votre question\r\n-Pas de flood inutile', '2018-04-06 14:00:00'),
(2, 3, 2, 'Pour les soucis techniques veuillez nous envoyez un mail.', '2018-05-02 00:00:00'),
(3, 4, 3, 'Kappa ou kippo.', '2018-05-08 00:00:00'),
(4, 4, 2, 'Nous allons supprimer ce topic il semblerait que vous soyez stupide.', '2018-05-09 00:00:00'),
(6, 10, 1, 'hello', '2018-06-01 15:05:28');

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE `piece` (
  `id_piece` int(11) NOT NULL,
  `nom` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `superficie` tinyint(3) NOT NULL,
  `id_maison` int(11) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`id_piece`, `nom`, `superficie`, `id_maison`, `type`) VALUES
(1, 'Chambre A', 15, 1, 'Chambre');

-- --------------------------------------------------------

--
-- Structure de la table `puissance_jour`
--

CREATE TABLE `puissance_jour` (
  `piece_id` mediumint(9) NOT NULL,
  `piece_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `puissance_value` mediumint(9) NOT NULL,
  `consommation_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `puissance_jour`
--

INSERT INTO `puissance_jour` (`piece_id`, `piece_name`, `puissance_value`, `consommation_date`) VALUES
(1, 'wc', 10, '2018-05-05'),
(1, 'chambre', 50, '2018-05-05'),
(1, 'salon', 60, '2018-05-05'),
(1, 'sdb', 25, '2018-05-05'),
(1, 'cuisine', 69, '2018-05-05'),
(2, 'sdb', 20, '2018-06-04'),
(2, 'sdb', 20, '2018-06-04'),
(2, 'wc', 8, '2018-06-06'),
(3, 'wc', 10, '2018-06-05'),
(2, 'salon', 13, '2018-06-05'),
(3, 'salon', 12, '2018-06-06'),
(2, 'sdb', 6, '2018-06-05'),
(3, 'sdb', 7, '2018-06-06'),
(2, 'chambre', 14, '2018-06-05'),
(3, 'chambre', 11, '2018-06-06');

-- --------------------------------------------------------

--
-- Structure de la table `statistique`
--

CREATE TABLE `statistique` (
  `id_stat` int(11) NOT NULL,
  `id_sensor` int(11) NOT NULL,
  `date` date NOT NULL,
  `puissance` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `statistique`
--

INSERT INTO `statistique` (`id_stat`, `id_sensor`, `date`, `puissance`) VALUES
(1, 1, '2018-04-06', 0);

-- --------------------------------------------------------

--
-- Structure de la table `stat_piece`
--

DROP TABLE IF EXISTS `stat_piece`;
CREATE TABLE IF NOT EXISTS `stat_piece` (
  `piece_id` int(11) NOT NULL AUTO_INCREMENT,
  `piece_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`piece_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `topic`
--

CREATE TABLE `topic` (
  `id_topic` int(11) NOT NULL,
  `titre` varchar(40) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date_crea` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `topic`
--

INSERT INTO `topic` (`id_topic`, `titre`, `id_utilisateur`, `date_crea`) VALUES
(2, 'Regle du Forum', 1, '2018-04-06 14:00:00'),
(1, 'Jour actuel', 1, '2018-05-05 00:00:00'),
(3, 'Soucis Technique', 2, '2018-05-05 00:00:00'),
(4, 'Kappa', 3, '2018-05-06 00:00:00'),
(5, 'Salut', 1, '2018-05-17 09:44:46'),
(10, 'hello', 1, '2018-06-01 15:05:28');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
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
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `numero`, `password`, `type`, `mail`, `num_principal`) VALUES
(1, 'Robert', 'Franck', 0657848571, '', 'admin', 'nicolas.nguyen@isep.fr', 0),
(2, 'Picone', 'Valentin', 0658362479, '3ed7dceaf266cafef032b9d5db224717', 'admin', 'valentin.picone@isep.fr', 0),
(3, 'Bernard', 'Jean', 0685749612, '0360f275c2c5363482c0dc54fd98a33f', 'client principal', 'jean.bernard@jvc.com', 0),
(4, 'phu', 'Clement', 0649880410, '$6$rounds=3232$yRyJDM8YPUMMRAJF$0rc.UwPKuC.up3s8qUzhjtGOt5vWNVc/1Iyur8HFIj3VS2aqA.BQ71waC8cUAVbuwqq7CbV6nL4e/cT0s9cIy1', 'client principal', 'clement.phu@hotmail.fr', 0),
(5, 'a', 'a', 0649880410, '$6$rounds=3232$yRyJDM8YPUMMRAJF$RUAfImrssOz6DtOdXKeRpNaiHEc3DWWUvcVvk5.oi5FQkdSgVOOdpBJHkle0kyrG095ytILFXS8Fzx3S5Q.Dn1', 'client principal', 'a@a.a', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actionneur`
--
ALTER TABLE `actionneur`
  ADD PRIMARY KEY (`id_actionneur`);

--
-- Index pour la table `boutique`
--
ALTER TABLE `boutique`
  ADD PRIMARY KEY (`id_boutique`);

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id_capteur`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_facture`);

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Index pour la table `habitation`
--
ALTER TABLE `habitation`
  ADD PRIMARY KEY (`id_habitation`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `piece`
--
ALTER TABLE `piece`
  ADD PRIMARY KEY (`id_piece`);

--
-- Index pour la table `statistique`
--
ALTER TABLE `statistique`
  ADD PRIMARY KEY (`id_stat`);

--
-- Index pour la table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id_topic`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actionneur`
--
ALTER TABLE `actionneur`
  MODIFY `id_actionneur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `boutique`
--
ALTER TABLE `boutique`
  MODIFY `id_boutique` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id_capteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_facture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `habitation`
--
ALTER TABLE `habitation`
  MODIFY `id_habitation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `piece`
--
ALTER TABLE `piece`
  MODIFY `id_piece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `statistique`
--
ALTER TABLE `statistique`
  MODIFY `id_stat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `topic`
--
ALTER TABLE `topic`
  MODIFY `id_topic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
