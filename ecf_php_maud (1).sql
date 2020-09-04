-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 04 sep. 2020 à 08:34
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecf_php_maud`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `Id` int(11) NOT NULL,
  `Pays` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Type_trip` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Auteur` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Recit` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Recit1` varchar(800) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Recit2` varchar(800) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Recit3` varchar(800) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ImageHD1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ImageHD2` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ImageHD3` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Id_continent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`Id`, `Pays`, `Type_trip`, `Auteur`, `Recit`, `Recit1`, `Recit2`, `Recit3`, `Image`, `ImageHD1`, `ImageHD2`, `ImageHD3`, `Id_continent`) VALUES
(1, 'Colombie', 'La vall&eacute;e de Corora', 'Alicia', 'El Valle de Cocora en Colombie dans le triangle du caf&eacute; colombien. Des collines recouvertes par des palmiers &agrave; cire ...', 'El Valle de Cocora en Colombie est un paysage unique en son genre, embl&eacute;matique du triangle du caf&eacute; colombien. Ici, les hautes collines sont recouvertes par des palmiers &agrave; cire qui semblent toucher les nuages avec plus de 70 m&egrave;tres de hauteur. Un lieu qui m&eacute;rite d\'y consacrer une journ&eacute;e enti&egrave;re pour une randonn&eacute;e sans difficult&eacute;, dans un d&eacute;cor verdoyant et vertigineux.', 'Le Palmier &agrave; Cire est l\'esp&eacute;ce de palmiers la plus haute du monde, ces arbres extraordinaires peuvent atteindre jusqu\'&agrave; 60 m&egrave;tres de hauteur. Le nom scientifique du palmier &agrave; cire est le C&eacute;roxyle de Quind&agrave;o (Ceroxylon quindiuense) et on le nomme Palma de Cera en espagnol. Il pousse au-del&agrave; de 2 500 m&egrave;tres d\'altitude, uniquement dans la cordill&egrave;re des Andes.', 'Pour rentrer &agrave; bon port au village de Salento, il faut attendre qu\'une Jeep navette se remplisse. Le dernier d&eacute;part se fait &agrave; 17h30 ! Apr&egrave;s cette journ&eacute;e vivifiante, allez vous r&eacute;galer d\'un truite au patacon dans un des restaurants de la ville.', 'colombie2.jpg', 'colombie2HD1.jpg', 'colombie2HD3.jpg', 'colombie2HD4.jpg', 5),
(2, 'Madagascar', 'Descente du fleuve Tsirihina en pirogue', 'Ulysse et Camille', '3 jours &agrave; bord d\'une pirogue, point culminant de notre road trip &agrave; Madagascar ...', 'Le point culminant de mon roadtrip &agrave; Madagascar fut cette descente du fleuve Tsiribihina, trois jours &agrave; bord d\'une pirogue. Une &eacute;pop&eacute;e inoubliable au fil de l\'eau, bivouac sur la plage, observation de la faune et de la flore et baignades dans des cascades bleues...', 'Accompagn&eacute;e d\'un petit groupe de voyageurs (fran&ccedil;ais, espagnols et anglais), nous rejoignons nos quatre embarcations &agrave; Masiakampy, apr&egrave;s avoir roul&eacute; une heure dans le sable depuis Miandrivazo. Nous avons alors une pirogue pour trois personnes. Sur l\'embarcad&egrave;re, les locaux, enfants et grands, nous entourent pour assister au grand d&eacute;part. Il y a &eacute;galement des bateaux &agrave;  moteur (les chalands) tr&egrave;s bruyants qui permettent une descente rapide. Comme je suis heureuse de ne pas avoir choisi ce mode de transport...', 'Les paysages changent au fil des heures, c\'est sec, puis humide, d&eacute;sertique puis forestier. Les eaux sont orang&eacute;es mais tr&egrave;s propres et contrastent merveilleusement avec les rizi&egrave;res d\'un vert presque fluo par instant. Sur le rivage, il ne se passe pas grand chose, quelques gamins nous saluent de loin. Nous n\'apercevons aucun village, seulement des abris sommaires pour prot&eacute;ger du soleil les &quot;gardes c&ocirc;tes&quot;. Ces derniers sont arm&eacute;s et nous arr&ecirc;tent r&eacute;guli&egrave;rement, nos guides qui ont tout pr&eacute;vu leur donnent des vivres (kilos de riz, l&eacute;gumes, farines...), une sorte de backchich local.', 'magagascar.jpg', 'madagascarHD.jpg', 'madagascarHD2.jpg', 'madagascarHD3.jpg', 3),
(4, 'Afrique du Sud', 'Le Cap de Bonne-Esp&eacute;rence', 'Marina', 'C\'est le bout du monde en Afrique du Sud ! Comment visiter la P&eacute;ninsule du Cap jusqu\'au Cape Point en une ...', 'Pour se rendre au Cape Point, le promontoire le plus au sud du Pays, il faut descendre la p&eacute;ninsule du Cap qui se fraye un chemin entre l\'Oc&eacute;an Atlantique et False Bay.  Cette p&eacute;ninsule fait partie du Table Mountain National Park.  Nous avons fait une boucle pour d&eacute;couvrir les incontournables de la P&eacute;ninsule au d&eacute;part de CapeTown, je vous livre donc toutes les astuces pour cette excursion d\'une journ&eacute;e en pleine nature.', 'Si vous &ecirc;tes partis t&ocirc;t de Cape Town, prenez un petit d&eacute;j &agrave; Knead Bakery. A la plage de Muizenberg se trouve un chemin qui longe la plage jusqu\'&agrave; St James, il fait 6.5 km et vous demandera environ 1h30 de marche.  Sur les deux plages vous verrez de jolies cabanons en couleurs primaires qui contrastent avec le sable blanc. La baignade est rare ici mais vous pouvez partir pour une longue marche jusqu\'&agrave; St James Beach, la plage voisine et un peu jumelle. Si vous &ecirc;tes venus avec votre voiture, garez vous au parking de Muizenberg et faites vous ramener en taxi &agrave; votre v&eacute;hicule depuis Saint James.', 'A Camps Bay, nous ne sommes plus dans le domaine &quot;officiel&quot; de la P&eacute;ninsule du Cap, c\'est un faubourg de Cape Town hupp&eacute;. La plage est vraiment superbe, au pied de la cha&icirc;ne montagneuse des 12 Ap&ocirc;tres. Nous avons bu un cocktail sur une des nombreuses terrasses qui font face &agrave; la plage, en attendant le coucher du soleil.', 'afrique-du-sud.jpg', 'afrique_sudHD1.jpg', 'afrique_sudHD2.jpg', 'afrique_sudHD.jpg', 3),
(14, 'Colombie', 'La vall&eacute;e de Corora', 'Alicia', 'El Valle de Cocora en Colombie dans le triangle du caf&eacute; colombien. Des collines recouvertes par des palmiers &agrave; cire...', 'El Valle de Cocora en Colombie est un paysage unique en son genre, embl&eacute;matique du triangle du caf&eacute; colombien. Ici, les hautes collines sont recouvertes par des palmiers &agrave; cire qui semblent toucher les nuages avec plus de 70 m&egrave;tres de hauteur. Un lieu qui m&eacute;rite d\'y consacrer une journ&eacute;e enti&egrave;re pour une randonn&eacute;e sans difficult&eacute;, dans un d&eacute;cor verdoyant et vertigineux.', 'Le Palmier &agrave; Cire est l\'esp&egrave;ce de palmiers la plus haute du monde, ces arbres extraordinaires peuvent atteindre jusqu\'&agrave; 60 m&egrave;tres de hauteur. Le nom scientifique du palmier &agrave; cire est le C&eacute;roxyle de Quind&iacute;o (Ceroxylon quindiuense) et on le nomme Palma de Cera en espagnol. Il pousse au-del&agrave; de 2 500 m&egrave;tres d\'altitude, uniquement dans la cordill&egrave;re des Andes.', 'Pour rentrer &agrave; bon port au village de Salento, il faut attendre qu\'une Jeep navette se remplisse. Le dernier d&eacute;part se fait &agrave; 17h30 ! Apr&egrave;s cette journ&eacute;e vivifiante, allez vous r&eacute;galer d\'un truite au patacon dans un des restaurants de la ville.', 'colombie2.jpg', 'colombie2HD1 - Copie.jpg', 'colombie2HD4.jpg', 'colombie2HD3.jpg', 0),
(15, 'Colombie', 'Le village de Barichara', 'Maud', 'Barichara est un superbe village colombien, bourr&eacute; de charmes...', 'Barichara est un superbe village colombien, bourr&eacute; de charmes. Rues pav&eacute;es, maisons blanches au style andalou, toits en tuiles rouges sous le ciel bleu, chapelles du 19&egrave;me si&egrave;cle, sentiers de randonn&eacute;es et vues panoramiques... En r&eacute;sum&eacute;, Barichara offre un paysage typique de la r&eacute;gion de Santander, de ceux qui font tomber les voyageurs amoureux de la Colombie. Nous y avons trouv&eacute; une atmosph&egrave;re plus que paisible et des d&eacute;cors qui nous ont offert des instants verdoyants, vertigineux ou bucoliques. Je vous raconte, en quelques mots et photos, mon s&eacute;jour ici entre balades dans les ruelles pentues, ateliers culturels et randonn&eacute;es en pleine nature.', 'La place principale se situe au croisement des carrera 7 et 8 et des calle 5 et 6. Elle est domin&eacute;e par la Cath&eacute;drale de l\'imaculada concepcion. Sur la plaza, de nombreux bus et tuktuk color&eacute;s stationnent &agrave; c&ocirc;t&eacute; des vendeurs de rue, devant les terrasses des caf&eacute;s. Les rues adjacentes &agrave; la place sont bien dot&eacute;es en boutiques d\'artisanat, souvenirs, petits commerces et restaurants. A la nuit tomb&eacute;e la place est anim&eacute;e, jeunes et vieux s\'y retrouvent autour des vendeurs d\'empanadas ou autres sp&eacute;cialit&eacute;s locales.', 'Le saut du singe au sud du village de Barichara, m\'a coup&eacute; le souffle et m\'a flanqu&eacute; des fourmis dans les pieds tant marcher pr&egrave;s de la paroi rocheuse est vertigineux ! Mon chauffeur de tuk tuk a veill&eacute; sur mon fils pendant que je prenais un shoot  d\'adr&eacute;naline en mettant mes pieds dans le vide !', 'colombie.jpg', 'colombieHD3.jpg', 'colombieHD1.jpg', 'colombieHD2.jpg', 5);

-- --------------------------------------------------------

--
-- Structure de la table `continent`
--

CREATE TABLE `continent` (
  `Id_continent` int(11) NOT NULL,
  `Nom` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Visuel` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `continent`
--

INSERT INTO `continent` (`Id_continent`, `Nom`, `Visuel`) VALUES
(1, 'Europe', 'europe.png'),
(2, 'Asie', 'asie.png'),
(3, 'Afrique', 'afrique.png'),
(4, 'Océanie', 'oceanie.png'),
(5, 'Amerique', 'amerique.png');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `Id_user` int(11) NOT NULL,
  `Login` varchar(30) NOT NULL,
  `Mdp` varchar(60) NOT NULL,
  `Droits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Id_user`, `Login`, `Mdp`, `Droits`) VALUES
(6, 'admin', '0192023a7bbd73250516f069df18b500', 1),
(7, 'consult', '7bb58a1753afdfecbf652469ae657375', 3),
(8, 'modif', 'c3612d96a853f30ad3d1a16ecbfa709f', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`Id_continent`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `continent`
--
ALTER TABLE `continent`
  MODIFY `Id_continent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
