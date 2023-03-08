-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 06 mars 2023 à 20:09
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Base de données : `bibliotheque`


-- Structure de la table `commande`
CREATE TABLE `commande` (
  `numero_commande` int(15) NOT NULL,
  `id_livre` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_fournisseur` int(11) NOT NULL,
  `auteur_livre` varchar(255) NOT NULL,
  `titre_livre` varchar(255) NOT NULL,
  `rsociale_fournisseur` varchar(255) NOT NULL,
  `date_achat` date NOT NULL,
  `prix_achat` decimal(6,0) NOT NULL,
  `nb_exemplaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Déchargement des données de la table `commande
INSERT INTO `commande` (`numero_commande`, `id_livre`, `id_client`, `id_fournisseur`, `auteur_livre`, `titre_livre`, `rsociale_fournisseur`, `date_achat`, `prix_achat`, `nb_exemplaire`) VALUES
(1, 10, 0, 13, '', '', '', '2023-03-03', '14', 1),
(2, 25, 0, 27, '', '', '', '2023-03-05', '9', 1);

-- Structure de la table `fornisseur`

CREATE TABLE `fornisseur` (
  `id` int(11) NOT NULL,
  `code_fournisseur` int(11) NOT NULL,
  `raison_social` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `rue_fournisseur` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `code_postal` int(11) NOT NULL,
  `localite` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pays` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tel_fournisseur` int(11) NOT NULL,
  `url_fournisseur` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mail_fournisseur` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fax_fournisseur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Déchargement des données de la table `fornisseur`


INSERT INTO `fornisseur` (`id`, `code_fournisseur`, `raison_social`, `rue_fournisseur`, `code_postal`, `localite`, `pays`, `tel_fournisseur`, `url_fournisseur`, `mail_fournisseur`, `fax_fournisseur`) VALUES
(1, 32, 'Lire dans les etoiles', 'Champ Elissé', 75000, 'Paris', 'France', 678654328, 'https://www.santaburre.fr', 'fournisseur@mail.fr', 442044202),
(11, 86, 'Librairie de la Plume', '12 rue des Livres', 75001, 'Paris', 'France', 1, 'www.librairiedelaplume.fr', 'contact@librairiedelaplume.fr', 382737465),
(12, 7854, 'Distribulivre', '32 avenue de la Lecture', 69002, 'Lyon', 'France', 4, 'www.distribulivre.com', 'contact@distribulivre.com', 976846574),
(13, 67, 'Papeterie des Arts', '10 rue du Papier', 31000, 'Toulouse', 'France', 5, 'www.papeteriedesarts.fr', 'contact@papeteriedesarts.fr', 783948576),
(14, 87, 'Livre&Co', '5 rue de la LittÃ©rature', 44000, 'Nantes', 'France', 2, 'www.livreandco.fr', 'contact@livreandco.fr', 653745473),
(15, 76589, 'Imprimerie Moderne', '18 boulevard de l\'Imprimerie', 75008, 'Paris', 'France', 1, 'www.imprimeriemoderne.fr', 'contact@imprimeriemoderne.fr', 2147483647),
(20, 12, 'La Maison de la Mer', 'Rue de la Plage', 56470, 'La Trinité-sur-Mer', 'France', 298897654, 'https://www.maisondelamer.com', 'contact@maisondelamer.fr', 298897655),
(21, 78, 'Cuisine du Monde', 'Rue de la Gourmandise', 69002, 'Lyon', 'France', 478956321, 'https://www.cuisinedumonde.com', 'contact@cuisinedumonde.fr', 478956322),
(22, 45, 'La Boutique du Jardin', 'Rue de la Nature', 33000, 'Bordeaux', 'France', 556677889, 'https://www.boutiquedujardin.com', 'contact@boutiquedujardin.fr', 556677890),
(23, 17, 'La Mode en Folie', 'Avenue des Tendances', 75008, 'Paris', 'France', 654321789, 'https://www.modeenfolie.com', 'contact@modeenfolie.fr', 654321790),
(24, 87, 'Le Temps des Fleurs', 'Rue de la Rose', 13000, 'Marseille', 'France', 778899001, 'https://www.letempsdesfleurs.com', 'contact@letempsdesfleurs.fr', 778899002),
(27, 54, 'Fournitures d\'école', 'Rue des Libellules', 69007, 'Lyon', 'Angleterre ', 652548832, 'https://www.fournitures-ecole.fr', 'contact@fournitures-ecole.fr', 472896543),
(28, 89, 'Matériel informatique', 'Rue de la République', 13001, 'Marseille', 'France', 491895678, 'https://www.materiel-informatique.fr', 'contact@materiel-informatique.fr', 491895679),
(29, 42, 'Produits cosmétiques', 'Avenue des Champs-Élysées', 75008, 'Paris', 'France', 153548899, 'https://www.cosmetiques-paris.fr', 'contact@cosmetiques-paris.fr', 153548800),
(30, 76, 'Fournitures de bureau', 'Rue du Commerce', 44000, 'Nantes', 'France', 241895748, 'https://www.fournitures-bureau.fr', 'contact@fournitures-bureau.fr', 241895749),
(31, 57, 'Matériel de bricolage', 'Rue des Artisans', 67000, 'Strasbourg', 'France', 388536742, 'https://www.materiel-bricolage.fr', 'contact@materiel-bricolage.fr', 388536743),
(41, 1324567, 'kljhgffds', '', 0, '', 'ghjfgdgdg', 2147483647, '', 'a@mail.fr', 0);

-- Structure de la table `livre`

CREATE TABLE `livre` (
  `id` int(11) NOT NULL,
  `isbn` int(15) NOT NULL,
  `titre` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `theme` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nombreDePage` int(150) NOT NULL,
  `format` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nomAuteur` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenomAuteur` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `editeur` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `anneeEdition` date NOT NULL,
  `prix` decimal(6,2) NOT NULL,
  `langue` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `isbn`, `titre`, `theme`, `nombreDePage`, `format`, `nomAuteur`, `prenomAuteur`, `editeur`, `anneeEdition`, `prix`, `langue`) VALUES
(3, 2147483647, 'Comment dominer le stress et les soucis', 'Psycologie', 204, 'Classique', 'Carnegie', 'Dale', 'None', '0000-00-00', '8.00', 'Anglais'),
(4, 2147483647, 'L\'Étranger', 'Roman', 184, 'Poche', 'Camus', 'Albert', 'Le Livre de Poche', '0000-00-00', '4.90', 'français'),
(6, 2147483647, 'La promesse de l\'aube', 'Roman', 374, 'Poche', 'Gary', 'Romain', 'Gallimard', '0000-00-00', '8.20', 'français'),
(7, 2147483647, 'Influence et manipulation ', 'Développement personnel', 408, '11cm x 17cm', ' Cialdini', ' Robert B.', 'Pocket', '0000-00-00', '9.00', 'Français Anglais'),
(8, 2147483647, 'Miracle morning', 'Développement personnel ', 240, 'De poche', ' Elrod', ' Hal', 'First', '0000-00-00', '17.00', 'Anglais'),
(10, 225323821, 'Comment résoudre les conflits', 'Développement personnel', 224, 'de poche', 'Carnegie', ' Dale ', ' Lgf', '0000-00-00', '14.00', 'Français '),
(18, 2147483647, 'Les mots sont des fenêtres (ou bien ce sont des murs)', 'Développement personnel', 320, '', 'B. Rosenberg', 'Marshall', 'La decouverte', '0000-00-00', '20.00', 'Français '),
(19, 2147483647, 'Psychologie du haut potentiel', 'Psychologie', 672, 'Classique', 'Gauvrit', ' Nicolas', 'De Boeck Supérieur', '0000-00-00', '42.00', 'Français '),
(24, 0, 'lart subtile de sen foutre', 'Développement psychologique', 188, 'Classique', 'Manson', 'Mark', 'Eyrolles', '0000-00-00', '0.00', 'Français '),
(25, 2147483647, 'La Puissance de l acceptation', 'Développement personnel', 288, '', 'Bourbeau', ' Lise ', ' Pocket', '0000-00-00', '8.00', 'Français '),
(26, 2147483647, 'Cessez dêtre gentil soyez vrai', 'Développement psychologique', 349, 'Classique', 'Ansembourg', ' Thomas', 'de lHomme ', '0000-00-00', '8.00', 'Français '),
(27, 2010008995, 'Les misérables', 'rêve et le suicide', 352, 'Classique', 'Hugo', 'Victor', 'Ldp Jeunesse', '0000-00-00', '5.00', 'Français'),
(34, 0, 'Le lièvre et la tortue', 'fable', 30, 'Broché', 'la fontaine', 'jea n', 'Jeunesse', '0000-00-00', '10.00', 'Français'),
(35, 0, 'la ligne vert', 'drame', 500, 'de poche', 'King', 'sephen', 'le livre de poche', '0000-00-00', '9.00', 'Français'),
(36, 0, 'omme toi', 'romantique', 450, 'classique', 'Jewell', 'lisa', 'Lds', '0000-00-00', '8.00', 'Français'),
(37, 0, 'it ends with us the emotional', 'romantique', 890, '', 'Hoover', 'Collen', 'larousse', '0000-00-00', '11.00', 'Français'),
(38, 0, 'comment developper l&#039;autodisipline', 'Développement personnel', 550, 'classique', 'Meadows', 'Martin', '', '0000-00-00', '13.00', 'anglais'),
(39, 0, 'l&#039;art de la victoire', 'sport', 380, 'classique', 'Knight', 'Phil', 'hugo poche', '0000-00-00', '9.00', 'anglais'),
(40, 0, 'Vendre les secret de ma methode', 'Marketing', 290, 'de poche', 'Belfort', 'Jordan', 'Maison edit', '0000-00-00', '18.00', 'Anglais'),
(41, 0, 'Ne la reveillez pas', 'Horreur', 750, 'de poche', 'Delacroix', 'Angelina', 'packet', '0000-00-00', '9.00', 'Francais'),
(42, 0, 'Entre deux monde', 'Policier', 675, 'classique', 'Nrek', 'Olivier', 'pocket', '0000-00-00', '8.00', 'Français'),
(43, 0, 'Un long chemin vers la liberté', 'autobiogrphique', 767, 'classique', 'Mandela', 'nelson', 'Le livre de poche', '0000-00-00', '10.00', 'Francais'),
(44, 0, 'Un voisin etrange', 'Horreur', 1500, 'Classique', 'Dennison', 'Florian', 'Pocket', '0000-00-00', '10.00', 'Anglais'),
(51, 2147483647, 'La Peste', 'Fiction', 320, 'Poche', 'Camus', 'Albert', 'Gallimard', '0000-00-00', '8.00', 'français'),
(52, 2147483647, 'La Chute', 'Fiction', 181, 'Poche', 'Camus', 'Albert', 'Gallimard', '0000-00-00', '7.50', 'français'),
(54, 2147483647, 'Les Justes', 'Fiction', 166, 'Poche', 'Camus', 'Albert', 'Gallimard', '0000-00-00', '7.50', 'français'),
(55, 2147483647, 'L\'homme révolté', 'Philosophie', 464, 'Poche', 'Camus', 'Albert', 'Gallimard', '0000-00-00', '12.00', 'français'),
(56, 2147483647, 'Le petit prince', 'Conte', 96, 'Album', 'Saint-Exupéry', 'Antoine de', 'Gallimard', '0000-00-00', '6.20', 'français'),
(57, 2147483647, 'La Nausée', 'Fiction', 252, 'Poche', 'Sartre', 'Jean-Paul', 'Gallimard', '0000-00-00', '9.00', 'français'),
(58, 2147483647, 'Huis clos', 'Fiction', 185, 'Poche', 'Sartre', 'Jean-Paul', 'Gallimard', '0000-00-00', '7.50', 'français'),
(59, 2147483647, 'Les Fourmis', 'Science-Fiction', 444, 'Poche', 'Werber', 'Bernard', 'J\'ai Lu', '0000-00-00', '8.10', 'français'),
(60, 2147483647, 'Le deuxième sexe', 'Essai', 864, 'Poche', 'Beauvoir', 'Simone de', 'Gallimard', '0000-00-00', '15.00', 'français'),
(61, 2147483647, 'Le mythe de Sisyphe', 'Philosophie', 222, 'Poche', 'Camus', 'Albert', 'Gallimard', '0000-00-00', '7.50', 'français'),
(62, 2147483647, 'Les mots', 'Autobiographie', 253, 'Poche', 'Sartre', 'Jean-Paul', 'Gallimard', '0000-00-00', '8.00', 'français'),
(64, 2147483647, 'Le liseur', 'Roman', 223, 'Poche', 'Schlink', 'Bernhard', 'Gallimard', '0000-00-00', '7.50', 'français'),
(65, 2147483647, 'L\'écume des jours', 'Roman', 315, 'Poche', 'Vian', 'Boris', 'Le Livre de Poche', '0000-00-00', '6.10', 'français'),
(66, 2147483647, 'Le Symbole perdu', 'Roman', 670, 'Broché', 'Brown', 'Dan', 'Le Livre de Poche', '0000-00-00', '9.20', 'français'),
(67, 2147483647, 'La Panthère', 'Roman', 255, 'Poche', 'Cendrars', 'Blaise', 'Flammarion', '0000-00-00', '6.40', 'français'),
(68, 2147483647, 'Le prophète', 'Philosophie', 117, 'Poche', 'Gibran', 'Khalil', 'Editions du Mercure de France', '0000-00-00', '5.20', 'français'),
(69, 2147483647, 'L élégance du hérisson', 'Roman', 381, 'Poche', 'Barbery', 'Muriel', 'Gallimard', '0000-00-00', '8.70', 'français'),
(71, 2147483647, 'L\'homme qui voulait être heureux', 'Roman', 254, 'Poche', 'Gounelle', 'Laurent', 'Le Livre de Poche', '2013-01-23', '17.90', 'français'),
(82, 12345678, 'hgiofuifg', '', 0, '', 'jhdfjfgjh', 'kufgdkhfgs,h', '', '0000-00-00', '0.00', ''),
(84, 0, 'lionel', '', 0, '', 'lafont', 'du', '', '0000-00-00', '0.00', ''),
(86, 0, '<wxcvbn,;', '', 0, '', ',nbvcx', '            hgtredsgf', '', '0000-00-00', '0.00', ''),
(87, 0, 'aaaaaaaaaaaaaaa', '', 0, '', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', '', '0000-00-00', '0.00', ''),
(88, 0, 'bbbbbbbbbb', '', 0, '', 'bbbbbbbbbbb', 'bbbbbbbbbbb', '', '0000-00-00', '0.00', ''),
(90, 0, 'cccccccccccccccccc', '', 0, '', 'cccccccccccccccccc', 'cccccccccccccccccccccccccccc', '', '0000-00-00', '0.00', ''),
(91, 0, 'ezvegbrnhtj,yt', '', 0, '', 'thyergefds', 'thyrgfedsq', '', '0000-00-00', '0.00', '');

-- Structure de la table `user`

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenom` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mail` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mdp` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `est_administrateur` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Déchargement des données de la table `user`

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `mdp`, `est_administrateur`) VALUES
(111, 'Delacour', 'Mathieu', 'mat@mail.fr', '$2y$10$HyZVlQ6VdXNT7rQqFFApXeHIj1SN.ZW./m2y1upJpSP/Hq9J79iGK', 0),
(112, 'Chateau', 'Fort', 'chateauFort@mail.fr', '$2y$10$meeUKxxjjZrr6xhnEfUOeOG0eqltrpGKUWbV8ic4JJSsq276AiPzO', 0),
(113, 'Citron', 'Pressé', 'citron@mail.fr', '$2y$10$BQ.tRCkSvDxa7fHVQudPwOfVAprX0aYbob5asSzaZlZTEgyNY2v8W', 0),
(124, 'a', 'a', 'ab@mail.fr', '$2y$10$tC7XcsS2yw7uNM9ycHq6XuPck2pJia4.LAEnOtf70EYvWYw1PJAFW', 0),
(125, 'a', 'a', 'alexiss@mail.fr', '$2y$10$6yqVwoZVUYabjc.Wel/CbeQ5Zt8VTFRh3qP9USe6khtpAKyacTgYa', 0),
(139, 'Alexis', 'Srbl', 'q@mail.fr', '$2y$10$/pelrgVVZz1JbqeomP7RhuAMTe4RvS19c5.f30zqdbXidsWn7ayoS', 1),
(176, 'Adam', 'Deujour', 'qq@mail.fr', '$2y$10$I4LB7Pg0ju4jOpm6xlu4Me.qnzCUocWEUyP43fgGjmvV7Fh8IWjvm', 0),
(177, 'egzrsf', 'dfhhfgfh', 'yt@mail.fr', '$2y$10$9eVU7djAZKlqXEj1fOMWT.Qn/kzZzHv4YTecH0K97lr6/381m7lGG', 0),
(178, 'Mulet la Libido', 'Faustine', 'fa@mail.fr', '$2y$10$K0ROD6pG.Vcaq5Xsq6nefO3JBlPWITX80FgFosdUa5/i9muOqeAOO', 0),
(179, 'Bambelle', 'Larry', 'larry@mail.fr', '$2y$10$uuAhBnRpuJB3cXVEzO7WZulw7/WK0OgOik1k3KmFhfLdwqJcpE17i', 1),
(183, 'alex', 'alex', 'alex@gmail.com', '$2y$10$WDTQnHC1HxNkphNdxQD3.OttAscfxLDL7GFccP06cZgLTzxi.QJmu', 0),
(184, 'test1', 'test1', 'test1@mail.fr', '$2y$10$BfMYYtkE91frdr7LaAsHS.qfHDHfdYLCYh8ZQfjn/gocV/Ur2d2i2', 0),
(185, 'test2', 'test2', 'test2@mail.fr', '$2y$10$TXBYyykaot5GEz6sVFfk1OyQg8EyOvSUl7TXvtBPvtl/O2EJluR5C', 0),
(187, 'rzqrestryuyiuoipp', 'zeazteyrutyigtulimjolk', 'aaa@mail.fr', '$2y$10$fvm2T1EapJiR6Lzd68meU.ann3q0xgqL2WqfJoAFc5.KfwTBSanRS', 0),
(188, 'efregtrhyu', 'zerzteyrui', 'azertyy@mail.fr', '$2y$10$GiBWsu0ddaaT5xWHG73OzeYUjyIUVWcRpihLX7WTUOLAyPWe6.33K', 0);

-- Index pour la table `commande`
ALTER TABLE `commande`
  ADD PRIMARY KEY (`numero_commande`),
  ADD KEY `id_livre` (`id_livre`) USING BTREE,
  ADD KEY `id_founisseur` (`id_fournisseur`) USING BTREE,
  ADD KEY `id_client` (`id_client`) USING BTREE;


-- Index pour la table `fornisseur`
ALTER TABLE `fornisseur`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `code_fournisseur` (`code_fournisseur`) USING BTREE,
  ADD KEY `raison_social` (`raison_social`) USING BTREE,
  ADD KEY `code_postal` (`code_postal`) USING BTREE,
  ADD KEY `localite` (`localite`) USING BTREE;


-- Index pour la table `livre`
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `titre` (`titre`) USING BTREE;


-- Index pour la table `user`
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `nom` (`nom`) USING BTREE,
  ADD KEY `prenom` (`prenom`) USING BTREE,
  ADD KEY `mail` (`mail`) USING BTREE;


-- AUTO_INCREMENT pour les tables déchargées


-- AUTO_INCREMENT pour la table `commande`
ALTER TABLE `commande`
  MODIFY `numero_commande` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fornisseur`
ALTER TABLE `fornisseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `livre`
ALTER TABLE `livre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT pour la table `user`
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

-- Contraintes pour la table `commande`
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_fournisseur`) REFERENCES `fornisseur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
