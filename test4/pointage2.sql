-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 14 avr. 2021 à 16:58
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pointage2`
--

-- --------------------------------------------------------

--
-- Structure de la table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `filiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classes`
--

INSERT INTO `classes` (`id`, `nom`, `filiere`) VALUES
(14, 'php', 24),
(15, 'java', 24),
(16, 'python', 24),
(17, 'thermo', 22),
(18, 'fluide', 23),
(19, 'routage', 46),
(20, 'dessin', 47);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`id`, `code`, `libelle`) VALUES
(2, 'THERMO', '23'),
(3, 'MECANIQUE', '22'),
(4, 'D2', 'Marketing'),
(5, 'D3', 'finances'),
(8, 'D6', 'Administration'),
(22, 'ret', 'dsf'),
(30, 'dsffff', 'dcsd'),
(31, 'dsffff', 'dcsd');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `cin` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `fonction` int(11) NOT NULL,
  `departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`cin`, `nom`, `prenom`, `email`, `telephone`, `adresse`, `password`, `role`, `photo`, `fonction`, `departement`) VALUES
('BB190368', 'Taih', 'hiba', 'hibataih2000@gmail.com', '0628206703', 'casa', 'ab4f63f9ac65152575886860dde480a1', 'Admin', 'admin.png', 20, 4),
('EE55021', 'Waziz', 'Moussaab', 'lachgar.m@gmail.com', '0687862800', 'Berradi 3', '3ed7dceaf266cafef032b9d5db224717', 'Admin', '5f727e9d8c0bbb30b046cf94d1d9a9f1.jpg', 19, 8),
('EE60601', 'Sarmadi', 'Yassin', 'srmooda@gmail.com', '0634805857', 'SYBA', 'ab4f63f9ac65152575886860dde480a1', 'Admin', '1ea72174d8063872c4776e122803f0f4.JPG', 20, 5),
('EE819349', 'Barhoum', 'Abdellah', 'iambarhoum@gmail.com', '0659778996', 'SYBA', 'ab4f63f9ac65152575886860dde480a1', 'Directeur', '73022302012b2e215e935b1639464707.jpeg', 21, 4);

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id`, `code`, `libelle`) VALUES
(22, 'G2E', 'Genie Electrique'),
(23, 'GI', 'Genie Industru'),
(24, '2ITE', 'Genie Info'),
(46, 'isic', 'Genie reseau'),
(47, 'GC', 'Genie civil');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`id`, `code`, `nom`) VALUES
(19, 'F1', 'Developpement'),
(20, 'F2', 'financière'),
(21, 'F3', 'comptabilité'),
(22, 'F4', 'commerciale'),
(23, 'F5', 'technique'),
(24, 'F6', 'sécurité');

-- --------------------------------------------------------

--
-- Structure de la table `pointage`
--

CREATE TABLE `pointage` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `etat` varchar(50) NOT NULL,
  `employe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pointage`
--

INSERT INTO `pointage` (`id`, `date`, `etat`, `employe`) VALUES
(8, '2018-12-27 10:00:00', 'Entrer', 'EE819349'),
(12, '2018-12-27 18:30:00', 'Sortie', 'EE819349'),
(13, '2018-12-28 08:00:00', 'Entrer', 'EE55021'),
(14, '2018-12-28 16:30:00', 'Sortie', 'EE55021'),
(15, '2019-01-01 08:30:00', 'Entrer', 'EE60601'),
(16, '2019-01-01 18:00:00', 'Sortie', 'EE60601'),
(17, '2019-01-03 09:04:00', 'Entrer', 'EE60601'),
(18, '2019-01-03 15:04:00', 'Sortie', 'EE60601'),
(19, '2018-12-30 09:15:00', 'Entrer', 'EE819349'),
(20, '2018-12-30 05:33:00', 'Sortie', 'EE819349'),
(21, '2018-12-12 12:00:00', 'Entrer', 'EE55021'),
(22, '2019-01-09 08:00:00', 'Entrer', 'EE55021'),
(23, '2019-01-09 12:00:00', 'Sortie', 'EE55021'),
(24, '2019-01-08 08:00:00', 'Entrer', 'EE55021'),
(25, '2019-01-08 11:30:00', 'Sortie', 'EE55021');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `pointageh`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `pointageh` (
`nom` varchar(50)
,`prenom` varchar(50)
,`date` date
,`cin` varchar(50)
,`heure_entrer` time
,`heure_sortie` time
,`heure` int(2)
,`minute` int(2)
);

-- --------------------------------------------------------

--
-- Structure de la vue `pointageh`
--
DROP TABLE IF EXISTS `pointageh`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY INVOKER VIEW `pointageh`  AS SELECT `e`.`nom` AS `nom`, `e`.`prenom` AS `prenom`, cast(`p1`.`date` as date) AS `date`, `p1`.`employe` AS `cin`, cast(`p1`.`date` as time) AS `heure_entrer`, cast(`p2`.`date` as time) AS `heure_sortie`, hour(timediff(`p2`.`date`,`p1`.`date`)) AS `heure`, minute(timediff(`p2`.`date`,`p1`.`date`)) AS `minute` FROM ((`pointage` `p1` join `pointage` `p2` on(`p1`.`employe` = `p2`.`employe`)) join `employe` `e` on(`e`.`cin` = `p1`.`employe`)) WHERE cast(`p1`.`date` as date) = cast(`p2`.`date` as date) AND `p1`.`id` < `p2`.`id` GROUP BY cast(`p1`.`date` as date), `p1`.`employe`, `e`.`nom`, `e`.`prenom` ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filiere` (`filiere`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`cin`),
  ADD KEY `fonction` (`fonction`),
  ADD KEY `departement` (`departement`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pointage`
--
ALTER TABLE `pointage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employe` (`employe`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `pointage`
--
ALTER TABLE `pointage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`filiere`) REFERENCES `filiere` (`id`);

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`fonction`) REFERENCES `fonction` (`id`),
  ADD CONSTRAINT `employe_ibfk_2` FOREIGN KEY (`departement`) REFERENCES `departement` (`id`);

--
-- Contraintes pour la table `pointage`
--
ALTER TABLE `pointage`
  ADD CONSTRAINT `pointage_ibfk_1` FOREIGN KEY (`employe`) REFERENCES `employe` (`cin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
