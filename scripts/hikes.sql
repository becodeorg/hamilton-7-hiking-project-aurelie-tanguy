CREATE DATABASE IF NOT EXISTS `hamilton-7-hiking-auli` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `hamilton-7-hiking-auli`;

DROP TABLE IF EXISTS `date_parcours`;
DROP TABLE IF EXISTS `hikes`;
DROP TABLE IF EXISTS `users`;
DROP TABLE IF EXISTS `hike_tags`;
DROP TABLE IF EXISTS `tags`;

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `hikes` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_creation` date NOT NULL,
  `distance` float NOT NULL,
  `duration` time NOT NULL,
  `elevation_gain` float NOT NULL,
  `description` text NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_creator` int UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_creator`) REFERENCES `users`(`id`)
);

CREATE TABLE `participation` (
  `id_hikes` int UNSIGNED NOT NULL,
  `id_user` int UNSIGNED NOT NULL,
  `date` date NOT NULL,
    PRIMARY KEY (`id_hikes`,`id_user`,`date`),
    FOREIGN KEY (`id_hikes`) REFERENCES `hikes`(`id`),
    FOREIGN KEY (`id_user`) REFERENCES `users`(`id`)
);

CREATE TABLE `tags` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `hike_tags` (
  `id_hikes` int UNSIGNED NOT NULL,
  `id_tags` int UNSIGNED NOT NULL,
    PRIMARY KEY (`id_hikes`,`id_tags`),
    FOREIGN KEY (`id_hikes`) REFERENCES `hikes`(`id`),
    FOREIGN KEY (`id_tags`) REFERENCES `tags`(`id`)
);