-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql:3306
-- Généré le : ven. 16 déc. 2022 à 15:38
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hiking`
--

-- --------------------------------------------------------

--
-- Structure de la table `date_parcours`
--

CREATE TABLE `date_parcours` (
  `id_hikes` int UNSIGNED NOT NULL,
  `id_user` int UNSIGNED NOT NULL,
  `date_walk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `hikes`
--

CREATE TABLE `hikes` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `datecreation` date NOT NULL,
  `distance` float NOT NULL,
  `duration` time NOT NULL,
  `elevation_gain` float NOT NULL,
  `description` text NOT NULL,
  `update` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `hikes`
--

INSERT INTO `hikes` (`id`, `name`, `datecreation`, `distance`, `duration`, `elevation_gain`, `description`, `update`) VALUES
(1, 'Le Jardin d\'O, les bois de Nismes et quelques curiosités géologiques\r\n', '2022-12-16', 13.24, '04:40:00', 326, 'Partez à la découverte de la jolie cité de Nismes aux belles maisons de pierre, de sa nature préservée. Remontez le cours de l\'Eau Noire jusqu\'à Petigny, partez à l\'assaut de ses collines boisées et découvrez, par des sentiers moins fréquentés, le Fondry des Chiens et terminez la randonnée par la découverte du Jardin d\'O.\r\n\r\n', 0),
(2, 'Nismes et ses phénomènes géologiques\r\n', '2022-12-16', 15.74, '05:35:00', 367, 'Par le jeu de l\'eau qui a duré des millions d\'années, d\'énormes gouffres, pouvant atteindre 20 m de profondeur, se sont formés dans la pierre calcaire. Ces gouffres naturels sont appelés «Fondrys». En Belgique, on en trouve uniquement dans la région du Viroin. Découvrez les curiosités géologiques et points de vues. Parcourez de superbes paysages alliant roches, rivières et pelouses calcaires où apparaissent, au printemps, de nombreuses orchidées.\r\n\r\n', 2),
(3, 'Autour de la vallée du Viroin au départ de Nismes\r\n', '2022-12-16', 12.26, '04:05:00', 204, 'Au pays des anciennes saboteries et des scieries, parcourez cette région riche en lieux historiques et à la nature remarquable et préservée. Partez à l\'assaut des tiennes, vos efforts seront récompensés par de somptueux paysages et vous tomberez sous le charme des beaux village de Dourbes et de Nismes.\r\nL\'Eau Blanche tire son nom des boues crayeuses qu\'elle charrie, l\'Eau Noire vient directement des bois et est donc limpide. Les deux cours d\'eau se rejoignent et forment le Viroin.\r\n\r\n', 1),
(4, 'Montagne aux Buis depuis Dourbes\r\n', '2022-12-16', 10.03, '03:25:00', 206, 'Itinéraire visant l’ascension vers la Croix de la Roche à Lomme, d’où la perspective sur Nismes est magnifique. Ce pic calcaire surmonté d\'une croix offre une vue unique sur la vallée du Viroin.\r\nLa Roche à Lomme est connue au-delà des frontières pour sa grande valeur biologique. Le versant rocheux situé au Sud-Est couvert d\'une flore aux teintes méditerranéennes, rehaussée par la présence abondante de buis.', 0),
(6, 'La Calestienne\r\n', '2022-12-16', 10.9, '04:00:00', 228, 'Partez à la découverte de la région, allant de châteaux en éperons rocheux.\r\n\r\n', 0),
(7, ' Le Château des Comtes de Hamal', '2022-12-16', 6.8, '02:15:00', 111, 'Petite randonnée sans difficulté permettant de découvrir la Calestienne et aborder l\'Ardenne avec, en prime, une vue sur le splendide Château des Comtes de Hamal à Vierves.\r\n\r\n', 0),
(9, 'Une boucle depuis la gare de Libramont\r\n', '2022-12-16', 7.91, '02:30:00', 92, 'Voici la promenade parfaite si vous souhaitez profiter de la neige, quand il y en a, en venant en train.\r\nLe départ et l\'arrivée se font depuis la gare de Libramont, dans les Ardennes.\r\nCette balade de 8 km ne présente pas de difficultés majeures, elle n\'a pour but que de se changer les idées sans s\'encombrer d\'une voiture.', 0),
(10, 'Une boucle depuis la gare de Libramont\r\n', '2022-12-16', 7.91, '02:30:00', 92, 'Voici la promenade parfaite si vous souhaitez profiter de la neige, quand il y en a, en venant en train.\r\nLe départ et l\'arrivée se font depuis la gare de Libramont, dans les Ardennes.\r\nCette balade de 8 km ne présente pas de difficultés majeures, elle n\'a pour but que de se changer les idées sans s\'encombrer d\'une voiture.', 0);

-- --------------------------------------------------------

--
-- Structure de la table `hikes_tag`
--

CREATE TABLE `hikes_tag` (
  `id_hikes` int UNSIGNED NOT NULL,
  `id_tag` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE `tags` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `id` int UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `date_parcours`
--
ALTER TABLE `date_parcours`
  ADD PRIMARY KEY (`id_hikes`,`id_user`);

--
-- Index pour la table `hikes`
--
ALTER TABLE `hikes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hikes_tag`
--
ALTER TABLE `hikes_tag`
  ADD PRIMARY KEY (`id_tag`),
  ADD KEY `id_hikes` (`id_hikes`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nickname` (`nickname`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `hikes`
--
ALTER TABLE `hikes`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `hikes_tag`
--
ALTER TABLE `hikes_tag`
  ADD CONSTRAINT `hikes_tag_ibfk_1` FOREIGN KEY (`id_hikes`) REFERENCES `hikes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hikes_tag_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `hikes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hikes_tag` (`id_tag`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
