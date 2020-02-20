-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 20 fév. 2020 à 11:15
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blognative`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `Id` int(10) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Contenue` text NOT NULL,
  `Image` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `IdCategorie` int(10) NOT NULL,
  `IdAuteur` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`Id`, `Title`, `Contenue`, `Image`, `date`, `IdCategorie`, `IdAuteur`) VALUES
(1, 'la cuisine de grand père', 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias officiis unde architecto itaque consequuntur repellat ratione. Sit quia distinctio veritatis, voluptatum maiores dolores sint sunt minus, dolorem ad nostrum soluta.', 'pexels-photo-2284166.jpeg', '2020-02-18 12:44:17', 1, 1),
(2, 'sport pour le corps', 'lorem lorem sdfrfe qswxcz vcvfghtrh <dsw cxcx df rgrfwcv efferqf fvxcvcv rfgw dwfgqerf qf wdv c dfwfsfdc ', 'pexels-photo-566566.jpeg', '2020-02-10 12:53:18', 1, 1),
(3, 'nourrire votre bébé', 'lorem sdfsdgf dfgdfgdf dffsdf dfsdfs dfgsdf dvdvf f dfdvfv df vdfv dfvdfv dfv df f dfgfdgfdg ', 'teddy-teddy-bear-association-ill-42230.jpeg', '2020-02-18 14:21:43', 4, 2),
(30, 'cuisine', 'lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias officiis unde architecto itaque consequuntur repellat ratione. Sit quia distinctio veritatis, voluptatum maiores dolores sint sunt minus, dolorem ad nostrum soluta.', 'pexels-photo-566566.jpeg', '2020-02-13 10:13:30', 1, 1),
(32, 'nouvelle maison', 'dfghjkl: dfghn s tf juig  sergergth th thtgh srtf hrthrhsryzh((tht(trghf tfgdftysrth rt trhtr ergdfdsdfs dgdfgs sdfgdfgdfvc ', 'pexels-photo-675951.jpeg', '2020-02-13 00:00:00', 1, 1),
(33, 'omar', 'hytgfredszaq', 'pexels-photo-208512.jpeg', '2020-02-18 10:27:50', 4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `IdAuteur` int(10) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`IdAuteur`, `Fullname`, `Email`, `Avatar`) VALUES
(1, 'morabit sara', 'morabit.sara@gmail.com', 'pexels-photo-415829.jpeg'),
(2, 'miri ahmed', 'miri.ahmed@gmail.com', 'pexels-photo-614810.jpeg'),
(3, 'TEJARI chaimaa', 'tejari23@gmail.com', 'pexels-photo-733872.jpeg'),
(4, 'ikram dupon', 'ikram.dupon@gmail.com', 'pexels-photo-2092709.jpeg'),
(5, 'lamiaa', 'lamiaa@gmail.com', 'pexels-photo-2169434.jpeg'),
(6, 'tejari karim', 'tejari.karim@gmail.com', 'pexels-photo-2128807.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `Id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`Id`, `name`, `image`) VALUES
(1, 'cuisine', 'pexels-photo-675951.jpeg'),
(2, 'santer', 'pexels-photo-48604.jpeg'),
(3, 'sport', 'pexels-photo-617000.jpeg'),
(4, 'bebe', 'teddy-teddy-bear-association-ill-42230.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `IdCommentaire` int(10) NOT NULL,
  `Nickname` varchar(50) NOT NULL,
  `Contenue` varchar(50) NOT NULL,
  `IdArticle` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`IdCommentaire`, `Nickname`, `Contenue`, `IdArticle`) VALUES
(2, 'test', 'testtttttttttttttttttt', 32),
(3, 'test23', 'MERCI DE me verifier', 30),
(4, 'test23', 'MERCI DE me verifier', 30),
(5, 'test23', 'MERCI DE me verifier', 30),
(6, 'moi', 'dfsdfsdfsfsd qscscxcsxcsdc scdcdcdddddddd', 3),
(7, 'moimoi', 'ttttttttttttttttttttttttttttttttttttttttttttt', 3),
(11, 'chaimaa', 'okkkkk', 30),
(14, 'moi', 'ffffffffffffffffffffffffffffffffffff', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `article-auteur` (`IdAuteur`),
  ADD KEY `article-categorie` (`IdCategorie`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`IdAuteur`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`IdCommentaire`),
  ADD KEY `fk-article-commentaire` (`IdArticle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `IdAuteur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `IdCommentaire` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article-auteur` FOREIGN KEY (`IdAuteur`) REFERENCES `auteur` (`IdAuteur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article-categorie` FOREIGN KEY (`IdCategorie`) REFERENCES `categorie` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `fk-article-commentaire` FOREIGN KEY (`IdArticle`) REFERENCES `article` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
