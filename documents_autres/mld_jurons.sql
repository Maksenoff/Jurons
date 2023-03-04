-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 04 mars 2023 à 20:48
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mld_jurons`
--

-- --------------------------------------------------------

--
-- Structure de la table `balance`
--

CREATE TABLE `balance` (
  `id_primary` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_infraction` int(11) NOT NULL,
  `dateBalance` varchar(50) NOT NULL,
  `id_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `balance`
--

INSERT INTO `balance` (`id_primary`, `id_utilisateur`, `id_infraction`, `dateBalance`, `id_balance`) VALUES
(16, 11, 6, '04-03-2023', 1),
(17, 11, 1, '04-03-2023', 1),
(18, 12, 1, '04-03-2023', 1),
(19, 12, 10, '04-03-2023', 1),
(20, 16, 6, '04-03-2023', 1),
(21, 14, 4, '04-03-2023', 1),
(22, 13, 1, '04-03-2023', 1),
(23, 10, 1, '04-03-2023', 1),
(24, 10, 1, '04-03-2023', 1),
(25, 17, 10, '04-03-2023', 1),
(26, 17, 10, '04-03-2023', 1),
(27, 15, 9, '04-03-2023', 1);

-- --------------------------------------------------------

--
-- Structure de la table `infraction`
--

CREATE TABLE `infraction` (
  `id_infraction` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `tarif` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infraction`
--

INSERT INTO `infraction` (`id_infraction`, `libelle`, `tarif`) VALUES
(1, 'petit juron', 0.1),
(2, 'gros juron', 0.3),
(3, 'geste', 0.7),
(4, 'rôt', 0.5),
(5, 'retard 10 min', 0.1),
(6, 'retard 20 min', 0.2),
(7, 'retard 30 min', 0.3),
(8, 'retard 40 min', 0.4),
(9, 'retard 50 min', 0.5),
(10, 'retard 60 min', 0.6);

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `grade` varchar(50) NOT NULL COMMENT 'utilisateur/admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`id_profil`, `grade`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `loginUser` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `solde` float NOT NULL,
  `id_profil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `Nom`, `Prenom`, `mail`, `loginUser`, `mdp`, `solde`, `id_profil`) VALUES
(10, 'ICHALLALEN', 'Maksen', 'maksen@gmail.com', 'Maksenoff', '0bcabf0e4e8bc5145eee3a995d0bb4d3406a876d', 0.2, 1),
(11, 'User', 'User', 'User@gmail.com', 'User', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 0.3, 2),
(12, 'Dupont', 'Fabrice', 'fab@gmail.com', 'Fabou', '6db96080c8d03b3ee9b03e0e3676c04bec5cc80b', 0.7, 2),
(13, 'Panet', 'Baptiste', 'baptiste@gmail.com', 'Baptou', '8a09756d48861d0c1884ca0847275f0b7880354c', 0.1, 2),
(14, 'Lefevre', 'Haziz', 'haziz@gmail.com', 'Hazou', 'Haziz', 0.5, 2),
(15, 'Leclerc', 'Julien', 'cypherus@gmail.com', 'Cypherus', 'Julien', 0.5, 2),
(16, 'Vanhems', 'Louis', 'Louis@gmail.com', 'Akhoya', 'Louis', 0.2, 2),
(17, 'Dupont-de-liognnes', 'Xavier', 'terrasse@famille.fr', 'CouleurDeDalle', 'Xavier', 1.2, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id_primary`),
  ADD KEY `balance_infraction0_FK` (`id_infraction`),
  ADD KEY `id_utilisateur` (`id_utilisateur`,`id_infraction`) USING BTREE;

--
-- Index pour la table `infraction`
--
ALTER TABLE `infraction`
  ADD PRIMARY KEY (`id_infraction`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD KEY `Utilisateur_profil_FK` (`id_profil`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `balance`
--
ALTER TABLE `balance`
  MODIFY `id_primary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `infraction`
--
ALTER TABLE `infraction`
  MODIFY `id_infraction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `balance`
--
ALTER TABLE `balance`
  ADD CONSTRAINT `balance_Utilisateur_FK` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `balance_infraction0_FK` FOREIGN KEY (`id_infraction`) REFERENCES `infraction` (`id_infraction`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `Utilisateur_profil_FK` FOREIGN KEY (`id_profil`) REFERENCES `profil` (`id_profil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
