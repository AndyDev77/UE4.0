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
-- Base de données : `actualite`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`) VALUES
(1, 'R&eacute;unions d&#039;informations', 'Ceci est la cat&eacute;gorie r&eacute;unions d&#039;information'),
(2, 'Atelier Pratique', 'Ceci est la categorie Atelier Pratique'),
(3, 'Inauguration', 'Ceci est la cat&eacute;gorie Inauguration'),
(4, 'Partenaires', 'Ceci est la categorie Partenaires'),
(5, 'LMS', 'Ceci est la categorie LMS');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) UNSIGNED DEFAULT NULL,
  `author_id` int(11) UNSIGNED NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `author_id` (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `thumbnail`, `date_time`, `category_id`, `author_id`, `is_featured`) VALUES
(37, 'Remise du troph&eacute;e Industrie du Futur ', 'Eoz a eu l&#039;honneur de recevoir, cette ann&eacute;e, le troph&eacute;e Industrie du Futur !!', '1673861745remise troph&eacute;e societe EOZ_AIF.png', '2023-01-16 09:35:45', 4, 19, 0),
(38, '4&egrave;me promo &agrave; l&#039;atelier', 'La 4&egrave;me promo de L&eacute;onard de Vinci s&#039;exerce au sein de notre atelier pratique sur les machines de tournages, fraisages ainsi que sur les logiciels de conception de pi&egrave;ces (Inventor).', '1673863473promo4-ConvertImage-remove-2.jpg', '2023-01-05 09:56:13', 2, 19, 0),
(39, 'Visite ministerielle', 'Le ministre de l&#039;Industrie en Seine-et-Marne pour parler apprentissage, Roland Lescure, fraichement nomm&eacute;, officiait son tout premier d&eacute;placement le vendredi 8 juillet 2022 &agrave; l&#039;atelier du Training Center 4.0 &agrave; l&#039;a&eacute;rodrome de Melun-Villaroche, pour \r\nun projet de territoire avec nos industriels et nos partenaires.', '1673864117inau2022-ConvertImage (1).jpg', '2022-07-08 09:12:10', 3, 19, 0),
(40, 'Air-Legend 2022', 'Ev&eacute;nement d&eacute;sormais incontournable qui se d&eacute;roule chaque deuxi&egrave;me week-end de septembre, sur l&#039;a&eacute;rodrome de Melun-Villaroche &agrave; 40km au sud-est de Paris. Ce spectacle exceptionnel permet de voir voler des avions l&eacute;gendaires, qui sont rarement ou jamais vus en France', '1673864914bg-air.jpg', '2022-09-10 05:28:34', 3, 19, 0),
(41, 'R&eacute;unions pour nos nouveaux apprenants', 'Le Training Center 4.0 &agrave; organis&eacute; au sein de son atelier , une r&eacute;union d&#039;information pour que les personnes d&eacute;couvrent les accompagnements que l&#039;on propose.', '167386555720220909_095248-ConvertImage-remove.jpg', '2022-09-09 08:39:17', 1, 19, 0),
(42, 'Traverser de la manche', 'Le film retra&ccedil;ant la vie de Louis Bl&eacute;riot et pr&eacute;sentant les &eacute;tapes de la restauration de l&#039;avion &agrave; Melun-Villaroche, a &eacute;t&eacute; le 11 octobre 2021 sur ARTE, mais est cependant visible en replay.', '1673866128_MG_1214-ConvertImage.jpg', '2021-10-11 09:47:10', 1, 19, 0),
(43, 'Tous solidaire ðŸ™', 'Le Training Center 4.0 pour la mise &agrave; disposition des locaux. JPB SYSTEME, Louis Vogel, Safran , Communaut&eacute; d&#039;Agglom&eacute;ration Melun Val de Seine Alain AUZET.', '1673866485212.jpeg', '2022-03-07 10:54:45', 2, 19, 0),
(44, 'Atelier de construction d&#039;un ultra l&eacute;ger motoris&eacute;', 'Pr&eacute;parer les apprenants au futur de l&#039;industrie par la sensibilisation au num&eacute;rique, d&eacute;couvrir les m&eacute;tiers de la m&eacute;canique a&eacute;ronautique &agrave; travers un atelier de construction d&#039;ultra l&eacute;ger motoris&eacute;. Proposer un accompagnement renforc&eacute; en pr&eacute;sentiel et distanciel pour d&eacute;couvrir les m&eacute;tiers en tension du secteur industriel', '1673866860Savannah.jpg', '2022-12-19 11:01:00', 1, 19, 1),
(45, 'Renaissance industrielle', 'Bravo &agrave; Lo&iuml;c Gauthier et Audrey Marques pour leur troph&eacute;e Usine du Futur ðŸ˜€ EOZ', '1673867564RENAISSANCE INDUSTRIELLE EOZ â€“ RechercheÂ Google - Google Chrome 16_01_2023 12_10_56 (3).png', '2021-09-20 10:12:44', 4, 19, 0),
(46, 'JPB System', 'F&eacute;licitations &agrave; JPB System d&#039;&ecirc;tre r&eacute;compens&eacute; pour la 10&egrave;me et 11&egrave;me fois cons&eacute;cutive sur la qualit&eacute; de leurs produits et de leur supply chain !!', '16738678781631197105785.jpg', '2021-09-20 10:17:58', 1, 19, 0),
(47, 'Plan&egrave;te-Science', 'Pr&eacute;sence du Training Center 4.0 aux Troph&eacute;es de la Robotique &agrave; Melun, &agrave; L&#039;escale.', '1673868293img-sciences-4.jpeg', '2021-06-12 10:23:08', 3, 19, 0),
(48, 'Mod&eacute;lisation d&#039;une pi&egrave;ce d&#039;&eacute;chec', 'Bravo &agrave; toute l&#039;&eacute;quipe Jos&eacute;, Bruno, Fouad, Gregory, Manuel, Aur&eacute;lien, Julien, Nicolas et &agrave; tous les autres apprenants !!', '1673868519tourneur.jpg', '2021-06-07 10:28:39', 2, 19, 0),
(49, 'Oser ou se r&eacute;signer', 'L&#039;innovation requiert la volont&eacute; de consid&eacute;rer le changement comme une opportunit&eacute;', '1673868739tc-img-16.jpg', '2021-05-03 10:32:19', 1, 19, 0),
(50, 'Apprentissage sur les pupitres', 'Accompagnement des apprenants sur les pupitres', '1673869131_1010496-ConvertImage.jpg', '2022-06-15 10:38:51', 2, 19, 0),
(51, 'R&eacute;alisation d&#039;un m&eacute;daillon', 'M&eacute;daillon Air-Legend r&eacute;alis&eacute; par nos appreanants sur Autodesk.', '1673869385_MG_5140-ConvertImage.jpg', '2021-03-11 11:42:26', 2, 19, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `username`, `email`, `password`, `avatar`, `is_admin`) VALUES
(19, 'Doe', 'John', 'JohnDoe', 'john@gmail.com', '$2y$10$/IwmuJXy.kXWSQJxhYxvVeekDG7X2/3NB/4eJzxf.Oldgc.gFcvSq', '1673861577profil-avatar.jpg', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
