-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 29 jan. 2023 à 20:38
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `autocompletion`
--

-- --------------------------------------------------------

--
-- Structure de la table `arbres`
--

DROP TABLE IF EXISTS `arbres`;
CREATE TABLE IF NOT EXISTS `arbres` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `vernaculaire` text NOT NULL,
  `latin` text NOT NULL,
  `famille` text NOT NULL,
  `origine` text NOT NULL,
  `hauteur` text NOT NULL,
  `longevite` text NOT NULL,
  `sol` text NOT NULL,
  `feuille` text NOT NULL,
  `fleur` text NOT NULL,
  `fruit` text NOT NULL,
  `taille` text NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `arbres`
--

INSERT INTO `arbres` (`id`, `vernaculaire`, `latin`, `famille`, `origine`, `hauteur`, `longevite`, `sol`, `feuille`, `fleur`, `fruit`, `taille`, `info`) VALUES
(1, 'Arbre de Judée', 'Cercis siliquastrum', 'Césalpiniacées', 'Sud-Ouest France, Europe de l\'Ouest', '5 à 10', '100', 'Peu exigent, ne pas ajouter d\'Azote.', 'ronde, longuement pétiolée.', 'Cauliflores, elles poussent à la base des nœuds avant les feuilles.', 'Gousse marron restant longtemps sur l\'arbre, bordée d\'une aile étroite le long de la suture dorsale.', '', 'Bois foncé, les spécimens âgés ont tendance à pencher voire plier tout en continuant à pousser vigoureusement et abondamment. '),
(2, 'Arbre aux milles écus', 'Ginkgo biloba', 'Ginkgoacées', 'Chine', '30', '1000 à 1500', 'Peu exigent.', 'Il existe une variété panachée', 'Houppier conique ou ovoïde selon le sexe du sujet.\r\nMâle : Branches obliques dréssées.\r\nFemelle : Branches étalées, houppier pyramidal, cime conique.', '', 'Supporte mal la taille', 'Supporte la pollution\r\n'),
(3, 'Marronnier d\'Inde', 'Aesculus hyppocastranum', 'Sapindacées', 'Constantinople', '20', '250 à 300', 'Frais, profond, plutôt acide que calcaire.\r\nN\'aime pas les revêtements de sol imperméables à son pied.', '', 'Groupées en panicules printanières.', 'Bogues, gros, verts, globuleux, portant des épines et contenant 2 à 3 graines NON COMESTIBLES.', '', 'Bois gris portant de gros bourgeons collants'),
(4, 'Orme champêtre', 'Ulmus minor', 'Ulmacées', 'Europe occidentale, Amérique du nord.', '30', '400 à 500', 'Calcaire, sec mais frais de préférence.', '', '', 'Fruit sec, Samare aplatie avec graine centrale.', '', 'Bois d\'une dureté et résistance incroyable. (Pilotis de Venise).\r\nLes Champs Elysées seraient plantés d\'Ormes.'),
(5, 'Micocoulier de Provence', 'Celtis Australis', 'Cannabacées', 'Spontané en Provence.', '', '', 'Peu exigent.', 'Ovale, allongée, duveteuse, dentée.\r\nDissymétriques à la base, alternes, pétiolées, distiques (sur le même plan).', '', '', '', 'Bois presque imputrescible. Taille spéciale dans le Gars, pour les manches de fouets.'),
(6, 'Pistachier térébinthe', 'Pistacia terebinthus', 'Anacardiacées', 'Bassin méditerranéen.', '5', '150 à 200', 'Calcaire, sec ou rocheux.', '', 'Grappes pourpres de petites fleurs sans pétales', 'Petites drupes d\'abord rouges puis brun comestible, peu charnues, de saveur aigrelette, rafraichissantes.', '', 'Porte souvent des galles rouges, assez décoratives, dues aux pucerons qui ne mettent pas la plante en danger.\r\nUtilisé comme porte greffe du Pistachier vrai. Prend une couleur rouge pourpre en automne, très appréciée.'),
(7, 'Cormier', 'Sorbus domestica', 'Rosacées', 'Est et Sud de l\'Europe, Asie, Nord Afrique.', '20', '150 à 200 ans, max 500', 'Calcaire.', 'Alterne, 11 à 21 pétioles. Bourgeons visqueux en hiver.', 'Fleurs blanches, 5 styles, melifères.', 'Brunâtre à l\'état blet. NE JAMAIS CONSOMMER VERT (contraction des muscles de la bouche et irritation de la gorge.', '', 'Bois dur etdense, 800 à 900 kg/m3. Autrefois utilisé pour les engrenages, noyaux de charrettes, rabots.\r\nSupporte mal la concurrence des autres arbres.'),
(8, 'Erable champêtre', 'Acer campestris', 'Aceracées', 'Afrique nord, sud et ouest. Asie, Europe.', '20', '200', 'Calcaire, limons.', 'Opposées, 5 lobes, longue pétiole virant au jaune d\'or en automne.', '', 'Disamares.', 'Supporte mal la taille rigoureuse, arbres têtards.', 'Bois dur et homogène servant à fabriquer de petits objets.\r\nSupporte l\'ombre quand il est jeune.'),
(9, 'Faux vernis du Japan', 'Ailanthus altissima', 'Simaroubacées', 'Asie, Australie.', '30', '', '', '', 'Samare allongée, persistant une partie de l\'hiver.', '', '', 'Gros rameaux à moelle pleine.\r\nEspèce envahissante qui produit des substances toxiques dans le sol, qui inhibent les autres plantes. Son système racinaire fait de considérables dégâts en ville. Supporte la pollution, la sécheresse. Rustique à -13°.'),
(10, 'Mimosas de Paris', 'Forsythia X intermedia', 'Oléacées', 'Chine, Japan, Europe.', '1,50 à 2 ', '', 'Peu exigent.', '', 'Jaunes, étoilées, petites mais groupées le long des rameaux avant l\'apparition des feuilles.', '', '', 'Vivace à la tige couchée, glabre, nœuds saillants, la direction change à chaque nœud.\r\nBois portant de nombreuses lenticelles (pores).'),
(11, 'Arbre à perruques', 'Cotinus coggygria', 'Anacardiacées', 'De l\'Europe à la Chine.', '4', '+ de 50', 'Terre franche.', 'Ovales.', 'Panicule devenant plumeux à la fructification. Filaments formant un panache plumeux.', '', '', 'Rameaux exhalant une odeur aromatique à l\'écorçage.\r\nATTENTION, sève irritante pour la peau et les muqueuses.'),
(12, 'Sureau noir', 'Sambucus nigra', 'Adoxacées', 'Europe, Afrique du nord, Asie Ouest.', '4 à 5', '50', 'Terre végétale.', 'Opposées, 5 à 7 folioles.', 'Blanches en corymbes, ombelliformes, parfumées (beignets, confiture, vinaigre).\r\n', 'D\'abord rouge vif puis noir à mâturité, riche en vitamine (confitures, gelées, sirops ou vin).', 'Supporte bien la taille.', 'Jeunes pousses lenticellés à moelle blanche abondante, répandus sur les lieux incultes.'),
(13, 'Robinier', 'Robinia pseudoacacia', 'Fabacées', 'Est des Etats-Unis.', '10 à 25', '1400', 'Sol sec, supporte moyennement le calcaire.', 'Composées, 3 à 10 paires de folioles vert clair.', 'En grappes odorantes en mai. Miel réputé (beignets).', '', '', 'Bois très dur, imputrescible. Ecorce claire et rugueuse, profondément sillonnée. Fournit de bons piquets.\r\nPlante drageonnante, fixateur d\'azote, fixateur de talus.'),
(14, 'Chêne pubescent', 'Quercus pubescens', 'Fagacées', 'Asie, Europe.', '20 à 25', 'Au moins 500', 'Sec, calcaire.', 'Lobée, duveteuse dessous. Marscessantes (maintien d\'éléments morts et desséchés sur une plante vivante). ', 'Sans pétales.', 'Glands retenus par une cupule écailleuse.', '', 'En culture les chênes truffiers sont mycorhizes (milieu à champignons).'),
(15, 'Lilas des Indes', 'legerstroemia indica', 'Lithracées', 'Chine.', '7 à 8', '100 à 150', 'Terre franche plutôt argileuse.', 'Légèrement vernissée, vire au rouge ocre à l\'automne.', 'Panicules de fleurs roses, blanches ou pourpres, chiffonnées.', '', '', 'Ecorce marbrée remarquable, utilisée pour les ponts, le mobilier, couchettes de chemin de fer, boites.'),
(16, 'Cerisier', 'Prunus avium', 'Rosacées', 'Asie mineure.', '+ de 6 ', '80 à 120', 'Ordinaire, voire calcaire.', '', '', '-Feuilles droites = fruits acides (prunus cerasus) griottier, cerise vraie, griotte.\r\n-Feuilles persistantes = fruit à saveur douce (prunus avium) cerisier sauvage, merisier, guigne, bigarreaux.', 'Eviter la taille, provoque la gommose (écoulement).', 'Croissance hélicoïdale possible.'),
(17, 'Mûrier à feuilles de platane', 'Morus bombycis/kagayamae', 'Moracées', 'Chine et Moyen-Orient.', '5 à 6', '80 à 100', '', 'Découpée, légèrement brillante, jamais identique.', '', 'Sorte de framboise noire comestible (d\'abord rouge). Beaucoup tombent encore vertes.', '', 'Arbre d\'ombrage. Système racinaire puissant.'),
(18, 'Tamaris', 'Tamarix', 'Tamaricacées', 'Pourtour méditerranéen.', '3 à 4', '100', 'Peu exigent.', '', 'Rose minuscule, odorante, tout au long des rameaux.', '', '', 'Le vieux bois est noir, tortueux et rugueux.\r\nApprécie le bord de mer, dunes, air salé, vent.'),
(19, 'Prunier de Pissard', 'Prunus X cerasifera', 'Rosacées', 'Horticole.', '4', '80', 'Bien drainé.', '', 'Roses à 5 pétales, apparaissant en même temps que les feuilles.', 'Petites prunes rouges.', '', 'Utilisé comme porte greffe. Convient bien aux petits jardins.'),
(20, 'Figuier de Caries', 'Ficus carica', 'Moracées', 'Extrême Orient.', '10', '200', 'Apprécie les sols caillouteux.', 'Dénuement de la partie basse, la végétation se localise au sommet des rameaux.', 'Fleurs à l\'intérieur du fruit, le fruit vient grâce à la pollinisation par un insecte.', 'Sycones.', 'Tailler en hivers et mastiquer les plaies.', 'Croissance rapide. Sève toxique.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
