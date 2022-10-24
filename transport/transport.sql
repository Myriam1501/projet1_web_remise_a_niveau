-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le : lun. 24 oct. 2022 à 17:37
-- Version du serveur : 10.6.5-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `transport`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `qtn` float DEFAULT NULL,
  `priceTotal` float DEFAULT NULL,
  `type_trs` varchar(100) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  KEY `commande_FK` (`id`),
  KEY `commande_FK_1` (`type_trs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`qtn`, `priceTotal`, `type_trs`, `id`) VALUES
(0, 0, 'metro', 17),
(0, 0, 'metro', 17),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(77, 1155, 'metro', 18),
(39, 585, 'tram', 18),
(0, 0, 'rer', 18),
(0, 0, 'velo', 18),
(0, 0, 'trotinette', 18),
(77, 1155, 'metro', 18),
(39, 585, 'tram', 18),
(0, 0, 'rer', 18),
(0, 0, 'velo', 18),
(0, 0, 'trotinette', 18),
(77, 1155, 'metro', 18),
(39, 585, 'tram', 18),
(0, 0, 'rer', 18),
(0, 0, 'velo', 18),
(0, 0, 'trotinette', 18),
(77, 1155, 'metro', 18),
(39, 585, 'tram', 18),
(0, 0, 'rer', 18),
(0, 0, 'velo', 18),
(0, 0, 'trotinette', 18),
(77, 1155, 'metro', 18),
(39, 585, 'tram', 18),
(0, 0, 'rer', 18),
(0, 0, 'velo', 18),
(0, 0, 'trotinette', 18),
(77, 1155, 'metro', 18),
(39, 585, 'tram', 18),
(0, 0, 'rer', 18),
(0, 0, 'velo', 18),
(0, 0, 'trotinette', 18),
(77, 1155, 'metro', 18),
(39, 585, 'tram', 18),
(0, 0, 'rer', 18),
(0, 0, 'velo', 18),
(0, 0, 'trotinette', 18),
(77, 1155, 'metro', 18),
(39, 585, 'tram', 18),
(0, 0, 'rer', 18),
(0, 0, 'velo', 18),
(0, 0, 'trotinette', 18),
(77, 1155, 'metro', 18),
(39, 585, 'tram', 18),
(0, 0, 'rer', 18),
(0, 0, 'velo', 18),
(0, 0, 'trotinette', 18),
(77, 1155, 'metro', 18),
(39, 585, 'tram', 18),
(0, 0, 'rer', 18),
(0, 0, 'velo', 18),
(0, 0, 'trotinette', 18),
(23, 345, 'metro', 19),
(23, 345, 'tram', 19),
(4, 60, 'rer', 19),
(2, 30, 'velo', 19),
(99, 1485, 'trotinette', 19),
(23, 345, 'metro', 19),
(23, 690, 'tram', 19),
(4, 96, 'rer', 19),
(2, 8, 'velo', 19),
(99, 693, 'trotinette', 19),
(23, 345, 'metro', 19),
(23, 690, 'tram', 19),
(4, 96, 'rer', 19),
(2, 8, 'velo', 19),
(99, 693, 'trotinette', 19),
(0, 0, 'metro', 20),
(0, 0, 'tram', 20),
(234567, 5616, 'rer', 20),
(0, 0, 'velo', 20),
(0, 0, 'trotinette', 20),
(0, 0, 'metro', 21),
(0, 0, 'tram', 21),
(445, 10680, 'rer', 21),
(0, 0, 'velo', 21),
(0, 0, 'trotinette', 21),
(0, 0, 'metro', 21),
(0, 0, 'tram', 21),
(445, 10680, 'rer', 21),
(0, 0, 'velo', 21),
(0, 0, 'trotinette', 21),
(0, 0, 'metro', 21),
(0, 0, 'tram', 21),
(445, 10680, 'rer', 21),
(0, 0, 'velo', 21),
(0, 0, 'trotinette', 21),
(0, 0, 'metro', 21),
(0, 0, 'tram', 21),
(445, 10680, 'rer', 21),
(0, 0, 'velo', 21),
(0, 0, 'trotinette', 21),
(0, 0, 'metro', 21),
(0, 0, 'tram', 21),
(445, 10680, 'rer', 21),
(0, 0, 'velo', 21),
(0, 0, 'trotinette', 21),
(0, 0, 'metro', 21),
(0, 0, 'tram', 21),
(445, 10680, 'rer', 21),
(0, 0, 'velo', 21),
(0, 0, 'trotinette', 21),
(0, 0, 'metro', 22),
(0, 0, 'tram', 22),
(3466, 72, 'rer', 22),
(0, 0, 'velo', 22),
(0, 0, 'trotinette', 22),
(5, 75, 'metro', 22),
(0, 0, 'tram', 22),
(34, 816, 'rer', 22),
(0, 0, 'velo', 22),
(0, 0, 'trotinette', 22),
(5, 75, 'metro', 22),
(444, 13320, 'tram', 22),
(34, 816, 'rer', 22),
(0, 0, 'velo', 22),
(0, 0, 'trotinette', 22),
(5, 75, 'metro', 22),
(444, 13320, 'tram', 22),
(34, 816, 'rer', 22),
(4444, 16, 'velo', 22),
(0, 0, 'trotinette', 22),
(5, 75, 'metro', 22),
(444, 13320, 'tram', 22),
(34, 816, 'rer', 22),
(4444, 16, 'velo', 22),
(1234, 7, 'trotinette', 22),
(5, 75, 'metro', 22),
(444, 13320, 'tram', 22),
(34, 816, 'rer', 22),
(4444, 16, 'velo', 22),
(1234, 7, 'trotinette', 22),
(0, 0, 'metro', 23),
(0, 0, 'tram', 23),
(0, 0, 'rer', 23),
(5666, 20, 'velo', 23),
(0, 0, 'trotinette', 23),
(0, 0, 'metro', 24),
(0, 0, 'tram', 24),
(0, 0, 'rer', 24),
(44, 176, 'velo', 24),
(0, 0, 'trotinette', 24),
(2, 30, 'metro', 25),
(5, 150, 'tram', 25),
(3, 72, 'rer', 25),
(2, 8, 'velo', 25),
(2, 14, 'trotinette', 25);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`) VALUES
(1, '', 'dfb'),
(2, '', 'xd'),
(3, 'xdgd', 'xfv'),
(4, '', 'df'),
(5, 'fdfvsdfv', 'df'),
(6, 'liu', 'mer'),
(7, 'MERY', 'GH'),
(8, 'ok', 'k'),
(9, 'LO?', 'KK'),
(10, 'dd', 'df'),
(11, 'xfbfd', 'd'),
(12, 'SFGD', 'XF'),
(13, 'CV', 'C'),
(14, 'pk', 'll'),
(15, 'OSFGS', 'KKK'),
(16, 'ok', 'ok'),
(17, 'cest', 'ca'),
(18, 'cestoo', 'ca'),
(19, 'okk', 'cestbon'),
(20, 'MERYAM', 'GHULAMMmm'),
(21, 'jnna', 'at'),
(22, 'dfghjk', 'dfghbnj,k'),
(23, 'K', 'L'),
(24, 'K', 'K'),
(25, 'er', 'errr');

-- --------------------------------------------------------

--
-- Structure de la table `transport`
--

DROP TABLE IF EXISTS `transport`;
CREATE TABLE IF NOT EXISTS `transport` (
  `type_trs` varchar(100) NOT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`type_trs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `transport`
--

INSERT INTO `transport` (`type_trs`, `prix`) VALUES
('metro', 15),
('rer', 24),
('tram', 30),
('trotinette', 7),
('velo', 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_FK` FOREIGN KEY (`id`) REFERENCES `personne` (`id`),
  ADD CONSTRAINT `commande_FK_1` FOREIGN KEY (`type_trs`) REFERENCES `transport` (`type_trs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
