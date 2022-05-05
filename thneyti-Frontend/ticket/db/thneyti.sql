-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 03 mai 2022 à 23:00
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `thneyti`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `idd` int(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`idd`, `photo`, `date_debut`, `date_fin`, `description`) VALUES
(1, 'image3.png', '2022-05-04', '2022-05-21', 'Partagez facilement un véhicule  pour vos trajets quotidiens '),
(2, 'car.png', '2022-05-26', '2022-05-29', 'kkkkk');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `numcarte` int(11) NOT NULL,
  `codecarte` int(11) NOT NULL,
  `nbticketbus` int(11) NOT NULL,
  `nbticketmetro` int(11) NOT NULL,
  `nbtickettrain` int(11) NOT NULL,
  `prixtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `nom`, `numcarte`, `codecarte`, `nbticketbus`, `nbticketmetro`, `nbtickettrain`, `prixtotal`) VALUES
(1, 'rim', 12, 556, 0, 0, 0, 0),
(2, 'aymen', 1, 1, 1, 3, 1, 6),
(3, 'kk', 5, 5, 0, 0, 0, 0),
(4, 'mdimagh', 5, 5, 0, 0, 0, 0),
(5, 'k', 5, 5, 0, 0, 0, 0),
(6, 'mdimagh', 5, 5, 0, 0, 1, 1),
(11, 'k', 5, 5, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_com` int(200) NOT NULL,
  `date_com` datetime NOT NULL,
  `date_modif_com` datetime NOT NULL,
  `contenu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `date_deb` date NOT NULL,
  `date_experation` date NOT NULL,
  `taux_reduction` int(11) NOT NULL,
  `code_coupon` varchar(200) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `coupon`
--

INSERT INTO `coupon` (`id`, `date_deb`, `date_experation`, `taux_reduction`, `code_coupon`, `etat`) VALUES
(2, '2022-05-06', '2022-05-07', 35, 'llll', 1),
(4, '0000-00-00', '0000-00-00', 50, '', 0),
(6, '0000-00-00', '0000-00-00', 47, 'd', 0),
(7, '0000-00-00', '0000-00-00', 47, 'ff', 1),
(10, '0000-00-00', '0000-00-00', 50, 'rimrim', 1);

-- --------------------------------------------------------

--
-- Structure de la table `moyen_de_transport`
--

CREATE TABLE `moyen_de_transport` (
  `id_moy` int(200) NOT NULL,
  `prix` float NOT NULL,
  `disponibilite` tinyint(1) NOT NULL,
  `depart` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `date_depart` datetime NOT NULL,
  `AR` tinyint(1) NOT NULL,
  `date_retour` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `moyen_de_transport`
--

INSERT INTO `moyen_de_transport` (`id_moy`, `prix`, `disponibilite`, `depart`, `destination`, `date_depart`, `AR`, `date_retour`) VALUES
(1, 150, 0, 'sousse', 'tunis', '2022-05-24 00:00:00', 0, '2022-05-24 00:00:00'),
(2, 200, 0, 'tuniis', 'kelibia', '2022-05-13 00:00:00', 0, '2022-05-29 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `poste`
--

CREATE TABLE `poste` (
  `id_poste` int(200) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `contenu` varchar(200) NOT NULL,
  `image` int(11) NOT NULL,
  `date_de_pub` datetime NOT NULL,
  `date_de_modif` datetime NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `reference` int(11) NOT NULL,
  `dateR` date NOT NULL,
  `sujetR` varchar(200) NOT NULL,
  `etatR` tinyint(1) NOT NULL,
  `message_de_retour` varchar(200) NOT NULL,
  `coupon_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`quantite`, `prix`) VALUES
(2, 5),
(0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `mot_de_passe` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `sexe` varchar(200) NOT NULL,
  `permis` tinyint(1) NOT NULL,
  `bank_ID` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`idd`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_com`);

--
-- Index pour la table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `moyen_de_transport`
--
ALTER TABLE `moyen_de_transport`
  ADD PRIMARY KEY (`id_moy`);

--
-- Index pour la table `poste`
--
ALTER TABLE `poste`
  ADD PRIMARY KEY (`id_poste`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`reference`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `idd` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4788;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_com` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `moyen_de_transport`
--
ALTER TABLE `moyen_de_transport`
  MODIFY `id_moy` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `poste`
--
ALTER TABLE `poste`
  MODIFY `id_poste` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
