-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 18 jan. 2019 à 08:20
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `author`, `date_added`) VALUES
(1, 'Voici mon premier article', 'Mon super blog est en construction.', 'Karim', '2018-01-01'),
(2, 'Un deuxième article', 'Je continue à ajouter du contenu sur mon blog.', 'Karim', '2018-01-05'),
(3, 'Mon troisième article', 'Mon blog est génial !!!', 'Karim', '2018-01-10');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date_added` date NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `pseudo`, `content`, `date_added`, `article_id`) VALUES
(1, 'Jean', 'Génial, hâte de voir ce que ça donne !', '2018-01-10', 1),
(2, 'Nina', 'Trop cool ! depuis le temps', '2018-01-11', 1),
(3, 'Rodrigo', 'Great ! ', '2018-01-12', 1),
(4, 'Hélène', 'je suis heureuse de découvrir un super site ! Continuez comme ça ', '2018-01-06', 2),
(5, 'Moussa', 'Un peu déçu par le contenu pour le moment...', '2018-01-07', 2),
(6, 'Barbara', 'pressée de voir la suite', '2018-01-08', 2),
(7, 'Guillaume', 'Je viens ici pour troller !', '2018-01-11', 3),
(8, 'Aurore', 'Enfin un blog tranquille, où on ne nous casse pas les pieds !', '2018-01-12', 3),
(9, 'Jordane', 'Je suis vendéen ! Amateur de mojettes !', '2018-01-13', 3);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` mediumint(9) NOT NULL,
  `news` smallint(6) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `contenu` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `news`, `auteur`, `contenu`, `date`) VALUES
(46, 3, 'Tony', 'c\'est scandaleux!', '2018-12-15 19:28:13'),
(47, 3, 'Daniel', 'Honteux !', '2018-12-15 19:34:21'),
(48, 3, 'Patrick', 'Merveilleux !', '2018-12-15 15:32:22'),
(49, 3, 'Tony', 'Tu es dingue !', '2018-12-15 15:10:08'),
(50, 4, 'Tony', 'Ouupiiii !!', '2018-12-15 16:07:15'),
(51, 4, 'Daniel', 'Sérieux !', '2018-12-15 16:14:16'),
(52, 4, 'Thomas', 'Mais ou va le monde !', '2018-12-15 18:22:25'),
(53, 5, 'Titi', 'je trouve sa cool !', '2018-12-15 17:19:15'),
(54, 5, 'Bibé', 'à la prochaine !', '2018-12-15 19:16:12'),
(55, 5, 'Peter', 'What !!!!', '2018-12-15 19:21:13'),
(56, 6, 'Thirry', 'je n\'est pas compris !', '2018-12-15 19:12:04'),
(57, 6, 'Tony', 'C\'est pourtant clair!!!', '2018-12-15 20:08:06'),
(58, 7, 'Daniel', 'C\'est parti !', '2018-12-15 19:31:26'),
(59, 7, 'Billy', 'La folie !!!', '2018-12-15 18:36:28'),
(60, 7, 'Val ', 'Qu\'est ce qu\'on va devenir !', '2018-12-15 17:11:46'),
(61, 3, 'Tony', 'oupps!', '2018-12-18 09:57:07'),
(62, 5, 'Tony', 'hééé sa marche !!', '2018-12-18 09:57:24'),
(63, 4, 'Tony', 'Salut!', '2018-12-18 14:26:47'),
(64, 7, 'Tony', 'Salut !', '2018-12-18 16:09:35'),
(65, 7, 'Tony', 'Bye Bye !', '2018-12-18 16:26:13'),
(66, 6, 'Daniel', 'Incompréhensible!', '2018-12-18 16:36:44');

-- --------------------------------------------------------

--
-- Structure de la table `jeux_video`
--

CREATE TABLE `jeux_video` (
  `ID` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `ID_proprietaires` int(11) NOT NULL,
  `console` varchar(255) NOT NULL,
  `prix` double NOT NULL DEFAULT '0',
  `nbre_joueurs_max` int(11) NOT NULL DEFAULT '0',
  `commentaires` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeux_video`
--

INSERT INTO `jeux_video` (`ID`, `nom`, `ID_proprietaires`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`) VALUES
(1, 'Super Mario Bros', 0, 'NES', 4, 1, 'Un jeu d\'anthologie !'),
(2, 'Sonic', 0, 'Megadrive', 2, 1, 'Pour moi, le meilleur jeu du monde !'),
(3, 'Zelda : ocarina of time', 0, 'Nintendo 64', 15, 1, 'Un jeu grand, beau et complet comme on en voit rarement de nos jours'),
(4, 'Mario Kart 64', 0, 'Nintendo 64', 25, 4, 'Un excellent jeu de kart !'),
(5, 'Super Smash Bros Melee', 0, 'GameCube', 55, 4, 'Un jeu de baston délirant !'),
(6, 'Dead or Alive', 0, 'Xbox', 60, 4, 'Le plus beau jeu de baston jamais créé'),
(7, 'Dead or Alive Xtreme Beach Volley Ball', 0, 'Xbox', 60, 4, 'Un jeu de beach volley de toute beauté o_O'),
(8, 'Enter the Matrix', 0, 'PC', 45, 1, 'Plutôt bof comme jeu, mais ça complète bien le film'),
(9, 'Max Payne 2', 0, 'PC', 50, 1, 'Très réaliste, une sorte de film noir sur fond d\'histoire d\'amour. A essayer !'),
(10, 'Yoshi\'s Island', 0, 'SuperNES', 6, 1, 'Le paradis des Yoshis :o)'),
(11, 'Commandos 3', 0, 'PC', 44, 12, 'Un bon jeu d\'action où on dirige un commando pendant la 2ème guerre mondiale !'),
(12, 'Final Fantasy X', 0, 'PS2', 40, 1, 'Encore un Final Fantasy mais celui la est encore plus beau !'),
(13, 'Pokemon Rubis', 0, 'GBA', 44, 4, 'Pika-Pika-chu !!!'),
(14, 'Starcraft', 0, 'PC', 19, 8, 'Le meilleur jeux pc de tout les temps !'),
(15, 'Grand Theft Auto 3', 0, 'PS2', 30, 1, 'Comme dans les autres Gta on ecrase tout le monde :) .'),
(16, 'Homeworld 2', 0, 'PC', 45, 6, 'Superbe ! o_O'),
(17, 'Aladin', 0, 'SuperNES', 10, 1, 'Comme le dessin Animé !'),
(18, 'Super Mario Bros 3', 0, 'SuperNES', 10, 2, 'Le meilleur Mario selon moi.'),
(19, 'SSX 3', 0, 'Xbox', 56, 2, 'Un très bon jeu de snow !'),
(20, 'Star Wars : Jedi outcast', 0, 'Xbox', 33, 1, 'Encore un jeu sur star-wars où on se prend pour Luke Skywalker !'),
(21, 'Actua Soccer 3', 0, 'PS', 30, 2, 'Un jeu de foot assez bof ...'),
(22, 'Time Crisis 3', 0, 'PS2', 40, 1, 'Un troisième volet efficace mais pas vraiment surprenant'),
(23, 'X-FILES', 0, 'PS', 25, 1, 'Un jeu censé ressembler a la série mais assez raté ...'),
(24, 'Soul Calibur 2', 0, 'Xbox', 54, 1, 'Un jeu bien axé sur le combat'),
(25, 'Diablo', 0, 'PS', 20, 1, 'Comme sur PC mais la c\'est sur un ecran de télé :) !'),
(26, 'Street Fighter 2', 0, 'Megadrive', 10, 2, 'Le célèbre jeu de combat !'),
(27, 'Gundam Battle Assault 2', 0, 'PS', 29, 1, 'Jeu japonais dont le gameplay est un peu limité. Peu de robots malheureusement'),
(28, 'Spider-Man', 0, 'Megadrive', 15, 1, 'Vivez l\'aventure de l\'homme araignée'),
(29, 'Midtown Madness 3', 0, 'Xbox', 59, 6, 'Dans la suite des autres versions de Midtown Madness'),
(30, 'Tetris', 0, 'Gameboy', 5, 1, 'Qui ne connait pas ? '),
(31, 'The Rocketeer', 0, 'NES', 2, 1, 'Un super un film et un jeu de m*rde ...'),
(32, 'Pro Evolution Soccer 3', 0, 'PS2', 59, 2, 'Un petit jeu de foot sur PS2'),
(33, 'Ice Hockey', 0, 'NES', 7, 2, 'Jamais joué mais a mon avis ca parle de hockey sur glace ... =)'),
(34, 'Sydney 2000', 0, 'Dreamcast', 15, 2, 'Les JO de Sydney dans votre salon !'),
(35, 'NBA 2k', 0, 'Dreamcast', 12, 2, 'A votre avis :p ?'),
(36, 'Aliens Versus Predator : Extinction', 0, 'PS2', 20, 2, 'Un shoot\'em up pour pc'),
(37, 'Crazy Taxi', 0, 'Dreamcast', 11, 1, 'Conduite de taxi en folie !'),
(38, 'Le Maillon Faible', 0, 'PS2', 10, 1, 'Le jeu de l\'émission'),
(39, 'FIFA 64', 0, 'Nintendo 64', 25, 2, 'Le premier jeu de foot sur la N64 =) !'),
(40, 'Qui Veut Gagner Des Millions', 0, 'PS2', 10, 1, 'Le jeu de l\'émission'),
(41, 'Monopoly', 0, 'Nintendo 64', 21, 4, 'Bheuuu le monopoly sur N64 !'),
(42, 'Taxi 3', 0, 'PS2', 19, 4, 'Un jeu de voiture sur le film'),
(43, 'Indiana Jones Et Le Tombeau De L\'Empereur', 0, 'PS2', 25, 1, 'Notre aventurier préféré est de retour !!!'),
(44, 'F-ZERO', 0, 'GBA', 25, 4, 'Un super jeu de course futuriste !'),
(45, 'Harry Potter Et La Chambre Des Secrets', 0, 'Xbox', 30, 1, 'Abracadabra !! Le célebre magicien est de retour !'),
(46, 'Half-Life', 0, 'PC', 15, 32, 'L\'autre meilleur jeu de tout les temps (surtout ses mods).'),
(47, 'Myst III Exile', 0, 'Xbox', 49, 1, 'Un jeu de réflexion'),
(48, 'Wario World', 0, 'Gamecube', 40, 4, 'Wario vs Mario ! Qui gagnera ! ?'),
(49, 'Rollercoaster Tycoon', 0, 'Xbox', 29, 1, 'Jeu de gestion d\'un parc d\'attraction'),
(50, 'Splinter Cell', 0, 'Xbox', 53, 1, 'Jeu magnifique !'),
(51, 'Battlefield 1942', 0, 'PC', 45, 50, '2nde guerre mondiale');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `ID` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `date_inscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

CREATE TABLE `minichat` (
  `ID` int(11) NOT NULL,
  `horaire` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pseudo` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`ID`, `horaire`, `pseudo`, `message`) VALUES
(9, '2018-12-15 18:56:06', 'Tony', 'je m\'appelle tony'),
(10, '2018-12-15 18:56:17', 'Thomas ', 'je m\'appelle tony'),
(11, '2018-12-15 18:56:33', '&lt;h1&gt;tony&lt;/h1&gt;', '&lt;h1&gt;tony&lt;/h1&gt;');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` smallint(5) NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `dateAjout` datetime NOT NULL,
  `dateModif` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `auteur`, `titre`, `contenu`, `dateAjout`, `dateModif`) VALUES
(6, 'tony', 'Livre de Bronze', 'Quae diligentissime contra Aristonem dicuntur a Chryippo. Nulla erit controversia. Itaque eos id agere, tu as dolores, morbos, affaiblit répulsif. Sed quid moins probandum quam esse aliquem beatum nec satis beatum? Oratio me istius philosophi non offendit; Nam Pyrrho, Aristo, Erillus iam diu abiecti. Vide, les règles etiam! nisi forte eum dicis, qui, simul atque arripuit, interficit.Est enim effectrix multarum et magnarum voluptatum.', '2018-12-31 17:40:04', '2018-12-31 17:40:38');

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

CREATE TABLE `personnages` (
  `id` smallint(6) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `degats` tinyint(4) NOT NULL DEFAULT '0',
  `timeEndormi` int(10) NOT NULL,
  `type` enum('magicien','guerrier') NOT NULL,
  `atout` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`id`, `nom`, `degats`, `timeEndormi`, `type`, `atout`) VALUES
(1, 'Tony', 40, 0, 'magicien', 0),
(7, 'Nicolas', 5, 0, 'magicien', 0);

-- --------------------------------------------------------

--
-- Structure de la table `personnages_v2`
--

CREATE TABLE `personnages_v2` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `degats` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `timeEndormi` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `type` enum('magicien','guerrier') NOT NULL,
  `atout` tinyint(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnages_v2`
--

INSERT INTO `personnages_v2` (`id`, `nom`, `degats`, `timeEndormi`, `type`, `atout`) VALUES
(1, 'Tony', 5, 1545749534, 'guerrier', 4),
(2, 'Lancelot', 4, 1545749532, 'guerrier', 4),
(4, 'Merlin', 0, 0, 'magicien', 4);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`ID`, `title`, `content`, `creation_date`) VALUES
(3, 'Le PHP à la conquête du monde !', 'C\'est officiel l\'éléphant bleu sans prend à tout le monde. Il à préciser qu\'il ferait de sacrer dégâts.', '2018-12-15 09:24:45'),
(4, 'Le HTML à la conquête du web !', 'C\'est décidé a sont le html prend possession du marché du web et réinvente sa propre syntaxe avec l\'intelligence artificielle.', '2018-12-15 11:21:35'),
(5, 'Le css en veut au monde !', 'Décider à ce vengé de ces deux confrère qui se servent de lui constamment, le CSS à décidé de s\'enfuir loin d\'ici !', '2018-12-15 12:19:27'),
(6, 'JavaScript à la retraire !', 'Quant à lui , il à décidé de prendre sa retraite et de se retirer avec son ami CSS.', '2018-12-15 13:16:16'),
(7, 'Blocus de tous les langages !', 'Ils l\'ont décider ensemble, tous les langages restant font grève et demande leurs indépendance !', '2018-12-15 17:21:03');

-- --------------------------------------------------------

--
-- Structure de la table `proprietaires`
--

CREATE TABLE `proprietaires` (
  `ID` int(11) NOT NULL,
  `prenom` text NOT NULL,
  `nom` text NOT NULL,
  `tel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `proprietaires`
--

INSERT INTO `proprietaires` (`ID`, `prenom`, `nom`, `tel`) VALUES
(1, 'Florent', 'Dugommier', '01 44 77 21 33'),
(2, 'Patrick', 'Lejeune', '01 44 55 66 77'),
(3, 'Michel', 'Doussand', '07 55 77 88 99');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_article_id` (`article_id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
  ADD KEY `ID` (`ID`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnages`
--
ALTER TABLE `personnages`
  ADD PRIMARY KEY (`id`,`degats`);

--
-- Index pour la table `personnages_v2`
--
ALTER TABLE `personnages_v2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `proprietaires`
--
ALTER TABLE `proprietaires`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `jeux_video`
--
ALTER TABLE `jeux_video`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personnages`
--
ALTER TABLE `personnages`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `personnages_v2`
--
ALTER TABLE `personnages_v2`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `proprietaires`
--
ALTER TABLE `proprietaires`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);
