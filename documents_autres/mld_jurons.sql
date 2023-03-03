-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 03 mars 2023 à 11:56
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 7.4.33

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
(1, 1, 1, '01-03-2023', 2),
(2, 1, 1, '01-03-2023', 2),
(3, 1, 1, '01-03-2023', 2),
(4, 2, 1, '03-03-2023', 1),
(5, 2, 1, '03-03-2023', 1),
(6, 2, 1, '03-03-2023', 1),
(7, 2, 1, '03-03-2023', 1),
(8, 2, 2, '03-03-2023', 1),
(9, 2, 1, '03-03-2023', 1),
(10, 2, 1, '03-03-2023', 1),
(11, 2, 7, '03-03-2023', 1);

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
(1, 'Maksen', 'ICHALLALEN', 'maksen.ichapp@gmail.com', 'Maksenoff', '123', 20, 1),
(2, 'Georges', 'ABIDBOL', 'georges.abidbol@gmail.com', 'cowboy', '123', 49.6, 2),
(3, 'Saudemont', 'Thibaut', 't@t.fr', 'tp', '12345', 110, 1),
(4, 'Legrand', 'Sebastien', 't@t.fr', 'tp', '12345', 80, 1),
(5, 'Marchand', 'Julien', 't@t.fr', 'tp', '12345', 80, 1),
(6, 'Moussa', 'Formateur', 't@t.fr', 'tp', '12345', 110, 1),
(7, 'Truc', 'Maksen', 't@t.fr', 'tp', '12345', 100, 1),
(8, 'Truc', 'paul', 't@t.fr', 'tp', '12345', 5, 2),
(9, 'Truc', 'Florian', 't@t.fr', 'tp', '12345', 150, 2);

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
  MODIFY `id_primary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
