-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 sep. 2023 à 16:54
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp7_movies`
--

-- --------------------------------------------------------

--
-- Structure de la table `actor`
--

CREATE TABLE `actor` (
  `id_actor` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `actor`
--

INSERT INTO `actor` (`id_actor`, `name`, `email`) VALUES
(56, 'Jean Reno', 'jean.reno@exemple2.com'),
(58, 'Natalie Portman', 'natalie.portman@exemple3.com'),
(60, 'Tokai Teio2', 'tokai.teio@exemple4.com');

-- --------------------------------------------------------

--
-- Structure de la table `actor_competition`
--

CREATE TABLE `actor_competition` (
  `id_actor_competition` int(11) NOT NULL,
  `actor_id` int(11) DEFAULT NULL,
  `competition_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `actor_competition`
--

INSERT INTO `actor_competition` (`id_actor_competition`, `actor_id`, `competition_id`) VALUES
(121, 56, 1),
(125, 58, 1),
(129, 60, 3),
(133, NULL, 4);

-- --------------------------------------------------------

--
-- Structure de la table `competition`
--

CREATE TABLE `competition` (
  `id_competition` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `release_date` date NOT NULL,
  `best_actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `competition`
--

INSERT INTO `competition` (`id_competition`, `film_id`, `release_date`, `best_actor_id`) VALUES
(1, 12, '1974-01-30', 56),
(3, 13, '1934-01-30', 60),
(4, 14, '1984-01-30', 54);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `number_main_actors` int(11) NOT NULL,
  `number_total_actors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_film`, `title`, `number_main_actors`, `number_total_actors`) VALUES
(15, 'The Prestige', 9, 26),
(16, 'Future World', 1, 6);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id_actor`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `actor_competition`
--
ALTER TABLE `actor_competition`
  ADD PRIMARY KEY (`id_actor_competition`),
  ADD KEY `actor_competition_ibfk_1` (`actor_id`),
  ADD KEY `actor_competition_ibfk_2` (`competition_id`);

--
-- Index pour la table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id_competition`),
  ADD KEY `competition_ibfk_1` (`best_actor_id`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actor`
--
ALTER TABLE `actor`
  MODIFY `id_actor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `actor_competition`
--
ALTER TABLE `actor_competition`
  MODIFY `id_actor_competition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT pour la table `competition`
--
ALTER TABLE `competition`
  MODIFY `id_competition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actor_competition`
--
ALTER TABLE `actor_competition`
  ADD CONSTRAINT `actor_competition_ibfk_1` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id_actor`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `actor_competition_ibfk_2` FOREIGN KEY (`competition_id`) REFERENCES `competition` (`id_competition`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
