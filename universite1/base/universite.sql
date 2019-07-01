-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 01 Juillet 2019 à 09:32
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.3.5-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `universite`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `id` int(11) NOT NULL,
  `numerobt` varchar(20) NOT NULL,
  `nom` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `batiment`
--

INSERT INTO `batiment` (`id`, `numerobt`, `nom`) VALUES
(1, '12A', 'mame_amy'),
(2, '12m', 'batiment12'),
(3, '12mp', 'batiment13'),
(4, 'num12', 'batiment14');

-- --------------------------------------------------------

--
-- Structure de la table `boursier`
--

CREATE TABLE `boursier` (
  `id` int(11) NOT NULL,
  `id_etu` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `boursier`
--

INSERT INTO `boursier` (`id`, `id_etu`, `id_type`) VALUES
(2, 28, 1),
(3, 29, 1),
(4, 30, 1),
(5, 30, 1),
(7, 33, 1),
(8, 33, 1),
(1, 3, 2),
(6, 32, 2),
(9, 34, 2),
(10, 34, 2),
(11, 36, 2);

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `id_b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`id`, `nom`, `id_b`) VALUES
(1, 'chambreA', 1),
(2, 'chambreB', 1),
(3, 'chambreC', 1),
(4, 'chambreD', 1),
(5, 'chambreE', 2),
(10, 'chambreZ', 3);

-- --------------------------------------------------------

--
-- Structure de la table `etudient`
--

CREATE TABLE `etudient` (
  `id` int(11) NOT NULL,
  `mat` varchar(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(35) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date_de_nss` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudient`
--

INSERT INTO `etudient` (`id`, `mat`, `nom`, `prenom`, `tel`, `email`, `date_de_nss`) VALUES
(1, 'kl1280', 'gueye', 'ahmado', 776981298, 'batamara@gmeil.com', '2019-06-14'),
(2, '125kl', 'diop', 'junior', 784513580, 'gueyemameamy@gmail.com', '2019-06-19'),
(3, 'rt125', 'fall', 'mame fatou', 774512803, 'ndawibo@gamil.com', '2019-06-11'),
(4, 'loijk', 'gueye', 'tamara', 774444444, 'gueyemameamy@gmail.com', '2004-04-04'),
(5, 'cgvhj', 'dfghjk', '(tguhjk', 875412, 'gueyemameamy@gmail.com', '2019-06-13'),
(7, 'gbc', 'gbvnbn', 'dhivjpvk', 41326546, 'ndawibo@gamil.com', '2019-06-06'),
(8, 'jkfkb; ', 'jfnl,', 'jnfs', 5641654, 'batamara@gmeil.com', '2019-06-05'),
(9, 'nvnl', 'diop', 'ahmadou', 216564, 'batamara@gmeil.com', '2019-06-19'),
(10, 'gh1280', 'sylla', 'rama', 777613530, 'sylla77@gmail.com', '1992-07-08'),
(11, 'DE12', 'diop', 'dame', 774667801, 'diop@gmail.com', '1981-06-07'),
(12, 'gt1254', 'lame', 'soda', 774512036, 'lame@gmail.com', '1996-06-12'),
(14, 'khlll', 'ehjfkje', 'jhfbjek,', 8562, 'sdfg@fghj.com', '1990-06-06'),
(15, 'sdfghj', 'sfdgfhjklk', 'qsdfghjklkm', 74556523, 'gueyemameamy@gmail.com', '2019-06-05'),
(16, 'hud', 'shdsj', 'jjsd', 6549, 'gueyemame@gmail.com', '2000-06-14'),
(17, 'cvhvb', 'vbn,;', 'hbij', 44659, 'gueyemameamy@gmail.com', '1993-06-19'),
(18, 'xfxcvkj', 'xcvcvb', 'gfcgbk', 16552122, 'gueyemame@gmail.com', '2000-06-21'),
(20, 'hss', 'sylla', 'rama', 777613530, 'sylla77@gmail.com', '1992-07-08'),
(21, 'KL0280', 'tall', 'ma ball', 774521208, 'gueyemameamy@gmail.com', '2001-06-30'),
(22, 'sjasja', 'hdzjdizj', 'ssnjsj', 564648, 'gueyemameamy@gmail.com', '2019-06-12'),
(23, 'xc', 'fall', 'abdou khadir', 776990399, 'fall@gmail.com', '2006-06-11'),
(24, 'ft', 'ba', 'ahmado', 774552155, 'batamara@gmeil.com', '2001-06-12'),
(25, 'bvj', 'b nj,', 'bbj', 8541, 'ndawibo@gamil.com', '1999-06-15'),
(26, 'klml', 'gueye', 'ahmado', 774552108, 'ndawibo@gamil.com', '2019-06-12'),
(27, ' xxbb', 'bbh', 'jwh', 774667906, 'gueyemameamy@gmail.com', '2019-06-14'),
(28, 'bdbbb', 'bhb', 'mame amy', 1254876, 'gueyemameamy@gmail.com', '2019-06-08'),
(29, 'dxfg', 'dffugui', 'gfygyyuho', 51564987, 'gueyemameamy@gmail.com', '2019-06-12'),
(30, 'FDXC', 'mame', 'mame amy', 41595, 'gueyemameamy@gmail.com', '2019-06-19'),
(32, 'fcg', 'gueye', 'tamara', 47456, 'gueyemameamy@gmail.com', '2019-06-18'),
(33, 'jho', 'dgvhn;', 'h,;ùm', 6897, '', '2019-06-11'),
(34, 'ma12', 'mame', 'mame amy', 774667906, 'gueyemameamy@gmail.com', '1994-06-11'),
(36, 'po45', 'poye', 'abdolaye', 774512865, 'poye45@gmail.com', '1984-06-14'),
(37, 'ma52', 'ghfj', 'vvhvjn,;', 8946, 'gueyemame@gmail.com', '2019-06-07'),
(40, 'jdklk', 'tyfgshj', 'mam', 45, 'gueyemameamy@gmail.com', '2019-06-07'),
(41, 'dbfb', 'diop', 'ahmado', 1280, 'gueyemameamy@gmail.com', '2019-06-07'),
(42, 'hl1250', 'gueye', 'tariame', 1502, 'gueyemame@gmail.com', '2019-06-05');

-- --------------------------------------------------------

--
-- Structure de la table `loger`
--

CREATE TABLE `loger` (
  `id` int(11) NOT NULL,
  `id_cha` int(11) NOT NULL,
  `id_b` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `loger`
--

INSERT INTO `loger` (`id`, `id_cha`, `id_b`) VALUES
(8, 1, 34),
(6, 2, 33),
(7, 2, 34),
(5, 3, 33),
(4, 4, 33);

-- --------------------------------------------------------

--
-- Structure de la table `nomBoursier`
--

CREATE TABLE `nomBoursier` (
  `id` int(11) NOT NULL,
  `id_etu` int(11) NOT NULL,
  `adress` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `nomBoursier`
--

INSERT INTO `nomBoursier` (`id`, `id_etu`, `adress`) VALUES
(1, 1, 'guediawaye'),
(2, 3, 'guediawaye'),
(3, 9, 'touba'),
(4, 22, ''),
(5, 23, ''),
(6, 24, ''),
(7, 24, 'guediawaye'),
(8, 25, ''),
(9, 36, ''),
(10, 36, ''),
(11, 37, 'guediawaye'),
(12, 37, ''),
(13, 37, ''),
(14, 40, 'guediawaye'),
(15, 41, 'guediawaye'),
(16, 42, 'guediawaye');

-- --------------------------------------------------------

--
-- Structure de la table `typeBourse`
--

CREATE TABLE `typeBourse` (
  `id` int(11) NOT NULL,
  `lib` varchar(40) NOT NULL,
  `montant` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typeBourse`
--

INSERT INTO `typeBourse` (`id`, `lib`, `montant`) VALUES
(1, 'demie_bourse', 20000),
(2, 'bourse entiere', 40000),
(3, 'bourse d\'excellence', 60000);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numerobt` (`numerobt`);

--
-- Index pour la table `boursier`
--
ALTER TABLE `boursier`
  ADD PRIMARY KEY (`id`,`id_etu`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `id_etu` (`id_etu`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_b` (`id_b`);

--
-- Index pour la table `etudient`
--
ALTER TABLE `etudient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mat` (`mat`);

--
-- Index pour la table `loger`
--
ALTER TABLE `loger`
  ADD PRIMARY KEY (`id`,`id_b`),
  ADD KEY `id_cha` (`id_cha`),
  ADD KEY `id_b` (`id_b`);

--
-- Index pour la table `nomBoursier`
--
ALTER TABLE `nomBoursier`
  ADD PRIMARY KEY (`id`,`id_etu`),
  ADD KEY `id_etu` (`id_etu`);

--
-- Index pour la table `typeBourse`
--
ALTER TABLE `typeBourse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `boursier`
--
ALTER TABLE `boursier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `etudient`
--
ALTER TABLE `etudient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `loger`
--
ALTER TABLE `loger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `nomBoursier`
--
ALTER TABLE `nomBoursier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `typeBourse`
--
ALTER TABLE `typeBourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `boursier`
--
ALTER TABLE `boursier`
  ADD CONSTRAINT `boursier_ibfk_1` FOREIGN KEY (`id_etu`) REFERENCES `etudient` (`id`),
  ADD CONSTRAINT `boursier_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `typeBourse` (`id`);

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`id_b`) REFERENCES `batiment` (`id`);

--
-- Contraintes pour la table `loger`
--
ALTER TABLE `loger`
  ADD CONSTRAINT `loger_ibfk_1` FOREIGN KEY (`id_b`) REFERENCES `boursier` (`id_etu`),
  ADD CONSTRAINT `loger_ibfk_2` FOREIGN KEY (`id_cha`) REFERENCES `chambre` (`id`);

--
-- Contraintes pour la table `nomBoursier`
--
ALTER TABLE `nomBoursier`
  ADD CONSTRAINT `nomBoursier_ibfk_1` FOREIGN KEY (`id_etu`) REFERENCES `etudient` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
