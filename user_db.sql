-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 21 fév. 2023 à 15:21
-- Version du serveur : 5.7.31
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `user_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprentissage`
--

DROP TABLE IF EXISTS `apprentissage`;
CREATE TABLE IF NOT EXISTS `apprentissage` (
  `id_apprentissage` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `Volonte` varchar(255) NOT NULL,
  `Apprendre` varchar(255) NOT NULL,
  `evaluation` varchar(255) NOT NULL,
  `Controle` varchar(255) NOT NULL,
  `Autonomie` varchar(255) NOT NULL,
  `Esprit` varchar(255) NOT NULL,
  `Curiosite` varchar(255) NOT NULL,
  `Methodologie` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_apprentissage`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `communication`
--

DROP TABLE IF EXISTS `communication`;
CREATE TABLE IF NOT EXISTS `communication` (
  `id_comm` int(11) NOT NULL AUTO_INCREMENT,
  `orale` varchar(255) NOT NULL,
  `ecrite` varchar(255) NOT NULL,
  `nonverbale` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_comm`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `interpersonnelles`
--

DROP TABLE IF EXISTS `interpersonnelles`;
CREATE TABLE IF NOT EXISTS `interpersonnelles` (
  `id_inter` int(11) NOT NULL AUTO_INCREMENT,
  `travailequipe` varchar(255) NOT NULL,
  `collectif` varchar(255) NOT NULL,
  `coordination` varchar(255) NOT NULL,
  `conflit` varchar(255) NOT NULL,
  `fiabilite` varchar(255) NOT NULL,
  `flexibilite` varchar(255) NOT NULL,
  `respect` varchar(255) NOT NULL,
  `assertivite` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `politesse` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_inter`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `intrapersonnelles`
--

DROP TABLE IF EXISTS `intrapersonnelles`;
CREATE TABLE IF NOT EXISTS `intrapersonnelles` (
  `id_intra` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `positive` varchar(255) NOT NULL,
  `ethique` varchar(255) NOT NULL,
  `temps` varchar(255) NOT NULL,
  `pression` varchar(255) NOT NULL,
  `stress` varchar(255) NOT NULL,
  `presence` varchar(255) NOT NULL,
  `motivation` varchar(255) NOT NULL,
  `faire_confiance` varchar(255) NOT NULL,
  `confiance_soi` varchar(255) NOT NULL,
  `resilience` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_intra`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `leadership`
--

DROP TABLE IF EXISTS `leadership`;
CREATE TABLE IF NOT EXISTS `leadership` (
  `id_lead` int(11) NOT NULL AUTO_INCREMENT,
  `responsabilite` varchar(255) NOT NULL,
  `incertitude` varchar(255) NOT NULL,
  `vision` varchar(255) NOT NULL,
  `strategique` varchar(255) NOT NULL,
  `decision` varchar(255) NOT NULL,
  `integrite` varchar(255) NOT NULL,
  `audace` varchar(255) NOT NULL,
  `negociation` varchar(255) NOT NULL,
  `emotionnelle` varchar(255) NOT NULL,
  `professionnalisme` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_lead`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reflexion`
--

DROP TABLE IF EXISTS `reflexion`;
CREATE TABLE IF NOT EXISTS `reflexion` (
  `id_reflexion` int(11) NOT NULL AUTO_INCREMENT,
  `resolution` varchar(255) NOT NULL,
  `analytique` varchar(255) NOT NULL,
  `critique` varchar(255) NOT NULL,
  `creativite` varchar(255) NOT NULL,
  `ouverture` varchar(255) NOT NULL,
  `intuition` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_reflexion`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `roue`
--

DROP TABLE IF EXISTS `roue`;
CREATE TABLE IF NOT EXISTS `roue` (
  `id_roue` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `apprentissage` varchar(50) NOT NULL,
  `competenceIntra` varchar(50) NOT NULL,
  `reflexion` varchar(50) NOT NULL,
  `communication` varchar(50) NOT NULL,
  `competenceInter` varchar(50) NOT NULL,
  `leadership` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_roue`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `user_form`
--

DROP TABLE IF EXISTS `user_form`;
CREATE TABLE IF NOT EXISTS `user_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `phone`, `password`, `user_type`) VALUES
(1, 'Andy Vespuce', 'vespuceandy@gmail.com', '0777050882', 'a915cf5b966385c6bae586b1340f4e9e', 'user'),
(2, 'Admin', 'admin@gmail.com', '0666666666', 'e3afed0047b08059d0fada10f400c1e5', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `apprentissage`
--
ALTER TABLE `apprentissage`
  ADD CONSTRAINT `apprentissage_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `communication`
--
ALTER TABLE `communication`
  ADD CONSTRAINT `communication_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `interpersonnelles`
--
ALTER TABLE `interpersonnelles`
  ADD CONSTRAINT `interpersonnelles_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `intrapersonnelles`
--
ALTER TABLE `intrapersonnelles`
  ADD CONSTRAINT `intrapersonnelles_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `leadership`
--
ALTER TABLE `leadership`
  ADD CONSTRAINT `leadership_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reflexion`
--
ALTER TABLE `reflexion`
  ADD CONSTRAINT `reflexion_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `roue`
--
ALTER TABLE `roue`
  ADD CONSTRAINT `roue_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
