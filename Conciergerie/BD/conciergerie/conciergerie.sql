-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 04 fév. 2019 à 23:23
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `conciergerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `numCategorie` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(20) NOT NULL,
  PRIMARY KEY (`numCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`numCategorie`, `nomCategorie`) VALUES
(1, 'Soin de visage'),
(2, 'Soin de jour'),
(3, 'Soin de nuit'),
(4, 'Brillant');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `numClient` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`numClient`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`nom`, `prenom`, `adresse`, `numClient`) VALUES
('Macz', 'Axel', '1 rue colonel raynal', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `numCommande` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `etat` int(1) NOT NULL,
  `montant` double NOT NULL,
  PRIMARY KEY (`numCommande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `concierge`
--

DROP TABLE IF EXISTS `concierge`;
CREATE TABLE IF NOT EXISTS `concierge` (
  `numConcierge` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`numConcierge`),
  UNIQUE KEY `login` (`login`,`password`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `concierge`
--

INSERT INTO `concierge` (`numConcierge`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'toto', 'toto');

-- --------------------------------------------------------

--
-- Structure de la table `constantes`
--

DROP TABLE IF EXISTS `constantes`;
CREATE TABLE IF NOT EXISTS `constantes` (
  `idCste` int(10) NOT NULL AUTO_INCREMENT,
  `nomCste` varchar(20) NOT NULL,
  `valeurCste` double NOT NULL,
  PRIMARY KEY (`idCste`),
  UNIQUE KEY `nom` (`nomCste`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `constantes`
--

INSERT INTO `constantes` (`idCste`, `nomCste`, `valeurCste`) VALUES
(1, 'livreAeuros', 1.14),
(2, 'eurosAdollars', 1.25),
(3, 'comissionAeuros', 2),
(4, 'taxeFRtoWW', 27),
(5, 'marge', 10);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `numFournisseur` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomFournisseur` varchar(10) NOT NULL,
  `URLFournisseur` varchar(50) NOT NULL,
  `imageFournisseur` varchar(50) NOT NULL,
  PRIMARY KEY (`numFournisseur`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`numFournisseur`, `nomFournisseur`, `URLFournisseur`, `imageFournisseur`) VALUES
(1, 'Nocibe', 'https://www.nocibe.f', 'nocibe.png'),
(2, 'Asos', 'https://www.beautepr', 'asos.png'),
(3, 'Sephora', 'https://www.sephora.', 'sephora.png'),
(4, 'Amazon', 'https://www.amazon.c', 'amazon.png');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `numMarque` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomMarque` varchar(11) NOT NULL,
  `URLMarque` varchar(50) NOT NULL,
  `codeMarque` varchar(10) NOT NULL,
  `imageMarque` varchar(20) NOT NULL,
  PRIMARY KEY (`numMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`numMarque`, `nomMarque`, `URLMarque`, `codeMarque`, `imageMarque`) VALUES
(1, 'gucci', 'https://www.gucci.com', 'GU', 'gucci.png'),
(2, 'lancome', 'https://www.lancome.fr/', 'LA', 'lancome.png'),
(4, 'dior', 'https://www.dior.com/', 'DI', 'dior.png'),
(5, 'ysl', 'https://www.ysl.com/', 'YS', 'ysl.png');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `numProduit` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `device` varchar(10) NOT NULL,
  `produitsInclus` varchar(100) NOT NULL,
  `numMarque` int(10) UNSIGNED NOT NULL,
  `numTypeProduit` int(10) UNSIGNED NOT NULL,
  `URLProduit` varchar(20) NOT NULL,
  `imageProduit` varchar(20) NOT NULL,
  PRIMARY KEY (`numProduit`),
  KEY `numMarque` (`numMarque`),
  KEY `numTypeProduit` (`numTypeProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`numProduit`, `nom`, `device`, `produitsInclus`, `numMarque`, `numTypeProduit`, `URLProduit`, `imageProduit`) VALUES
(1, 'bloom', '&euro;', 'guilty', 1, 1, '', 'bloom.png'),
(2, 'La nuit du Tresor', '&dollar;', '3 echantillons par commande', 2, 1, '', 'lanuit.png'),
(3, 'Bronze and glow powder', '&euro;', '', 2, 2, '', 'bronze.png');

-- --------------------------------------------------------

--
-- Structure de la table `produitfinal`
--

DROP TABLE IF EXISTS `produitfinal`;
CREATE TABLE IF NOT EXISTS `produitfinal` (
  `numProduitFinal` int(10) NOT NULL AUTO_INCREMENT,
  `numFournisseur` int(10) UNSIGNED NOT NULL,
  `numVolume` int(10) UNSIGNED NOT NULL,
  `numProduit` int(10) UNSIGNED NOT NULL,
  `discount` double NOT NULL,
  `originalPrice` double NOT NULL,
  `saving` double NOT NULL,
  `shipping` double NOT NULL,
  PRIMARY KEY (`numProduitFinal`),
  KEY `numFournisseur` (`numFournisseur`,`numVolume`,`numProduit`),
  KEY `numVolume` (`numVolume`),
  KEY `numProduit` (`numProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produitfinal`
--

INSERT INTO `produitfinal` (`numProduitFinal`, `numFournisseur`, `numVolume`, `numProduit`, `discount`, `originalPrice`, `saving`, `shipping`) VALUES
(1, 1, 2, 1, 0.12, 40, 10, 0),
(2, 1, 4, 2, 0.12, 15.5, 10, 15),
(3, 3, 3, 3, 0.12, 90.99, 15, 0),
(4, 3, 4, 3, 0.12, 120.99, 15.5, 0),
(5, 1, 2, 2, 0.12, 56.99, 20, 0);

-- --------------------------------------------------------

--
-- Structure de la table `tabledechange`
--

DROP TABLE IF EXISTS `tabledechange`;
CREATE TABLE IF NOT EXISTS `tabledechange` (
  `livreAeuros` double NOT NULL,
  `eurosAdollars` double NOT NULL,
  `marge` double NOT NULL,
  `taxefrtow` double NOT NULL,
  `coAeuros` double NOT NULL,
  `numtabledechange` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`numtabledechange`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typeproduit`
--

DROP TABLE IF EXISTS `typeproduit`;
CREATE TABLE IF NOT EXISTS `typeproduit` (
  `numTypeProduit` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomTypeProduit` varchar(20) NOT NULL,
  `codeTypeProduit` varchar(10) NOT NULL,
  PRIMARY KEY (`numTypeProduit`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeproduit`
--

INSERT INTO `typeproduit` (`numTypeProduit`, `nomTypeProduit`, `codeTypeProduit`) VALUES
(1, 'blush', 'BLU'),
(2, 'coffret', 'COF');

-- --------------------------------------------------------

--
-- Structure de la table `typeproduitcategorie`
--

DROP TABLE IF EXISTS `typeproduitcategorie`;
CREATE TABLE IF NOT EXISTS `typeproduitcategorie` (
  `numTC` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `numTypeProduit` int(10) UNSIGNED NOT NULL,
  `numCategorie` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`numTC`),
  KEY `numTypeProduit` (`numTypeProduit`,`numCategorie`),
  KEY `numCategorie` (`numCategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeproduitcategorie`
--

INSERT INTO `typeproduitcategorie` (`numTC`, `numTypeProduit`, `numCategorie`) VALUES
(1, 1, 2),
(3, 1, 3),
(5, 1, 4),
(2, 2, 1),
(4, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `volume`
--

DROP TABLE IF EXISTS `volume`;
CREATE TABLE IF NOT EXISTS `volume` (
  `numVolume` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `typeVolume` varchar(10) NOT NULL,
  `quantiteVolume` int(10) NOT NULL,
  PRIMARY KEY (`numVolume`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `volume`
--

INSERT INTO `volume` (`numVolume`, `typeVolume`, `quantiteVolume`) VALUES
(1, 'ml', 50),
(2, 'unit', 100),
(3, 'ml', 200),
(4, 'ml', 500);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `fk_Marque_Produit` FOREIGN KEY (`numMarque`) REFERENCES `marque` (`numMarque`),
  ADD CONSTRAINT `fk_TypeProduit_Produit` FOREIGN KEY (`numTypeProduit`) REFERENCES `typeproduit` (`numTypeProduit`);

--
-- Contraintes pour la table `produitfinal`
--
ALTER TABLE `produitfinal`
  ADD CONSTRAINT `fk_Fournisseur_ProduitFinal` FOREIGN KEY (`numFournisseur`) REFERENCES `fournisseur` (`numFournisseur`),
  ADD CONSTRAINT `fk_Produit_ProduitFinal` FOREIGN KEY (`numProduit`) REFERENCES `produit` (`numProduit`),
  ADD CONSTRAINT `fk_Volume_ProduitFinal` FOREIGN KEY (`numVolume`) REFERENCES `volume` (`numVolume`);

--
-- Contraintes pour la table `typeproduitcategorie`
--
ALTER TABLE `typeproduitcategorie`
  ADD CONSTRAINT `fk_TypeProduit_TypeProduitCategorie` FOREIGN KEY (`numTypeProduit`) REFERENCES `typeproduit` (`numTypeProduit`),
  ADD CONSTRAINT `fk_categorie_TypeProduitCategorie` FOREIGN KEY (`numCategorie`) REFERENCES `categorie` (`numCategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
