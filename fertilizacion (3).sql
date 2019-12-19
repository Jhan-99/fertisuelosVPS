-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2019 a las 15:15:08
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fertilizacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis_foliares`
--

CREATE TABLE `analisis_foliares` (
  `id_analisis` int(11) NOT NULL,
  `estado_feno` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Ph` float NOT NULL,
  `C_E` float NOT NULL,
  `sat_hum` float NOT NULL,
  `ndvi` float NOT NULL,
  `nitrogeno` float NOT NULL,
  `clorofila` float NOT NULL,
  `cabecera_id` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `analisis_foliares`
--

INSERT INTO `analisis_foliares` (`id_analisis`, `estado_feno`, `Ph`, `C_E`, `sat_hum`, `ndvi`, `nitrogeno`, `clorofila`, `cabecera_id`) VALUES
(28, 'Llenado del fruto', 3, 4, 4, 1, 4, 0.6, 1070509542),
(29, 'Botón', 5, 6, 3, 0.89, 4, 0.2, 674030997),
(30, 'Llenado del fruto', 5, 4, 4, 0.7, 5.16, 4, 384582821);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis_suelos`
--

CREATE TABLE `analisis_suelos` (
  `id_analisis` int(11) NOT NULL,
  `Textura` varchar(100) CHARACTER SET latin1 NOT NULL,
  `val_textura` varchar(6) NOT NULL,
  `Arena_porcentaje` int(11) NOT NULL,
  `Limo_porcentaje` int(11) NOT NULL,
  `Arcilla_porcentaje` int(11) NOT NULL,
  `Ph` int(11) NOT NULL,
  `C_E` int(11) NOT NULL,
  `densidad` float NOT NULL,
  `C_I_C_E` int(11) NOT NULL,
  `C_O_M_O_valor` int(11) NOT NULL,
  `salinidad` varchar(60) CHARACTER SET latin1 NOT NULL,
  `tipo_clima` varchar(20) NOT NULL,
  `cabecera_id` int(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `analisis_suelos`
--

INSERT INTO `analisis_suelos` (`id_analisis`, `Textura`, `val_textura`, `Arena_porcentaje`, `Limo_porcentaje`, `Arcilla_porcentaje`, `Ph`, `C_E`, `densidad`, `C_I_C_E`, `C_O_M_O_valor`, `salinidad`, `tipo_clima`, `cabecera_id`) VALUES
(5, 'Franco arcilloso', '2.0', 0, 0, 0, 5, 0, 1.26, 14, 0, '0', '', 400024405),
(6, 'Franco arcilloso', '2.0', 0, 0, 0, 6, 0, 1.14, 18, 0, '0', '', 1963147424),
(9, 'Franco limoso', '2.0', 0, 0, 0, 6, 1, 1, 2, 0, '3', '', 923622522),
(10, 'Arenoso', '1.0', 0, 0, 0, 1, 1, 1, 1, 0, '1', '', 1913454314),
(11, 'Franco arcilloso arenoso', '2.0', 0, 0, 0, 5, 3, 1, 3, 0, '5', '', 1741351272),
(13, 'Franco arenoso', '2.0', 0, 0, 0, 7, 2, 1, 5, 0, '5', '', 1811771444),
(14, 'Franco', '2.0', 0, 0, 0, 5, 0, 0, 13, 0, '0', '', 139458574),
(15, 'Franco', '2.0', 0, 0, 0, 5, 0, 1, 13, 0, '0', '', 279286405),
(19, 'Franco', '2.0', 0, 0, 0, 5, 0, 1, 13, 0, '0', '', 67338910),
(20, 'Franco', '2.0', 0, 0, 0, 5, 0, 1, 13, 0, '0', '', 88180416),
(26, 'Franco', '2.0', 0, 0, 0, 5, 0, 1.5, 13, 0, '0', '', 458093702),
(28, 'Franco arenoso', '2.0', 0, 0, 0, 5, 0, 1, 13, 0, '0', '', 112065966),
(33, 'Franco', '2.0', 0, 0, 0, 5, 0, 1, 13, 0, '0', '', 903682998),
(37, 'Franco', '2.0', 0, 0, 0, 5, 0, 1, 0, 0, '0', '', 2103324086),
(38, 'Franco', '2.0', 0, 0, 0, 5, 0, 1, 0, 0, '0', '', 430995891),
(39, 'Franco', '2.0', 0, 0, 0, 5, 0, 1, 0, 0, '0', '', 15551020),
(40, 'Franco', '2.0', 0, 0, 0, 5, 0, 1, 0, 0, '0', '', 1125290158),
(42, 'Franco', '2.0', 0, 0, 0, 5, 0, 1, 0, 0, '0', '', 1000047560);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anas_fol_pfertil`
--

CREATE TABLE `anas_fol_pfertil` (
  `id_elemento` int(11) NOT NULL,
  `id_cabecera_fol` int(11) NOT NULL,
  `id_p_fertil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anas_fol_pfertil`
--

INSERT INTO `anas_fol_pfertil` (`id_elemento`, `id_cabecera_fol`, `id_p_fertil`) VALUES
(33, 0, 1109450356),
(35, 0, 1637036043),
(32, 0, 1676769110),
(34, 0, 1795478870),
(53, 674030997, 249171134),
(69, 674030997, 297047612),
(66, 674030997, 769425488),
(64, 674030997, 827969555),
(87, 674030997, 861966024),
(77, 674030997, 1074414302),
(74, 674030997, 1256319976),
(58, 674030997, 1344180394),
(86, 674030997, 1449550644),
(51, 674030997, 1472301688),
(84, 674030997, 1589710115),
(88, 674030997, 1718213153),
(73, 674030997, 1812146860),
(75, 674030997, 2023219792),
(89, 674030997, 2079088690),
(79, 1070509542, 265408152),
(60, 1070509542, 386297371),
(81, 1070509542, 452545487),
(76, 1070509542, 465359348),
(55, 1070509542, 471042115),
(70, 1070509542, 566640736),
(56, 1070509542, 631728137),
(57, 1070509542, 874033640),
(63, 1070509542, 1036813184),
(83, 1070509542, 1077498051),
(82, 1070509542, 1218685412),
(62, 1070509542, 1328442551),
(90, 1070509542, 1346353997),
(85, 1070509542, 2081224722);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anas_suel_pfertil`
--

CREATE TABLE `anas_suel_pfertil` (
  `id_elemento` int(11) NOT NULL,
  `id_cabecera_suel` int(11) NOT NULL,
  `id_p_fertil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anas_suel_pfertil`
--

INSERT INTO `anas_suel_pfertil` (`id_elemento`, `id_cabecera_suel`, `id_p_fertil`) VALUES
(4, 2103956975, 1109450356),
(5, 2103956975, 1083598096),
(6, 1628788671, 1083598096),
(7, 1628788671, 317113008),
(8, 1031752837, 317113008),
(9, 2103956975, 317113008),
(10, 0, 1637036043),
(11, 138873613, 1637036043),
(12, 1628788671, 1637036043),
(13, 1031752837, 1637036043),
(14, 2103956975, 1637036043),
(15, 138873613, 769425488),
(16, 1031752837, 769425488),
(17, 1628788671, 769425488),
(18, 2103956975, 769425488),
(19, 1031752837, 221823922),
(20, 1628788671, 221823922),
(21, 2103956975, 221823922),
(22, 138873613, 221823922),
(23, 1031752837, 410617298),
(24, 138873613, 410617298),
(25, 2103956975, 410617298),
(26, 1628788671, 410617298),
(27, 138873613, 6733459),
(28, 1031752837, 6733459),
(29, 1628788671, 1829124861),
(30, 138873613, 1829124861),
(31, 1031752837, 1829124861),
(32, 2103956975, 1829124861),
(33, 1031752837, 1205797080),
(34, 138873613, 297047612),
(35, 1031752837, 1812146860),
(36, 1628788671, 1256319976),
(37, 138873613, 265408152),
(38, 1031752837, 452545487),
(39, 1628788671, 1205797080),
(40, 1628788671, 1218685412),
(41, 1031752837, 1218685412),
(42, 1031752837, 1077498051),
(43, 1031752837, 1319427268),
(44, 1031752837, 2032705277),
(45, 1031752837, 1932115174),
(46, 138873613, 1885319395),
(47, 138873613, 1330192918),
(48, 1031752837, 1330192918),
(49, 1031752837, 1969214993),
(50, 138873613, 1305288816),
(51, 1628788671, 864027416),
(52, 138873613, 1930954035),
(53, 1031752837, 1930954035),
(54, 1628788671, 1930954035),
(55, 1031752837, 408054518),
(56, 1628788671, 408054518),
(57, 2103956975, 408054518),
(58, 1031752837, 2014940802),
(59, 1628788671, 2014940802),
(60, 1031752837, 1861927657),
(61, 138873613, 1861927657),
(62, 2103956975, 1861927657),
(63, 0, 1861927657),
(64, 1628788671, 1861927657),
(65, 1031752837, 393537842),
(66, 2103956975, 393537842),
(67, 138873613, 393537842),
(68, 1628788671, 393537842),
(69, 2103956975, 1775064505),
(70, 1031752837, 1775064505),
(71, 138873613, 1775064505),
(72, 1628788671, 969912810),
(73, 2103956975, 207881972),
(74, 138873613, 207881972),
(75, 138873613, 1548677286),
(76, 1031752837, 1548677286),
(77, 1031752837, 1090720294),
(78, 138873613, 1090720294),
(79, 1031752837, 687904790),
(80, 1628788671, 1173043045),
(81, 1628788671, 1171391754),
(82, 1031752837, 1171391754),
(83, 138873613, 687904790),
(84, 138873613, 659619205),
(85, 1628788671, 1357791504),
(86, 1628788671, 1567991963),
(87, 1031752837, 1567991963),
(88, 2103956975, 1567991963),
(89, 138873613, 1567991963),
(90, 138873613, 882880813),
(91, 1628788671, 882880813),
(92, 2103956975, 462659951),
(93, 1031752837, 462659951),
(94, 1628788671, 791043893),
(95, 1031752837, 53389784),
(96, 138873613, 53389784),
(97, 1628788671, 1469258696),
(98, 138873613, 1469258696),
(99, 1628788671, 1137994821),
(100, 1031752837, 358648007),
(101, 1031752837, 14545194),
(102, 138873613, 14545194),
(103, 2103956975, 14545194),
(104, 1031752837, 575814828),
(105, 138873613, 575814828),
(106, 1031752837, 1550543133),
(107, 138873613, 1550543133),
(108, 2103956975, 1550543133),
(109, 1628788671, 1550543133),
(110, 1628788671, 1185363073),
(111, 1628788671, 1218490846),
(112, 1031752837, 1218490846),
(113, 1628788671, 1455068704),
(114, 2103956975, 1455068704),
(115, 1031752837, 1455068704),
(116, 1031752837, 1731636616),
(117, 1031752837, 454971677),
(118, 1628788671, 1496739725),
(119, 1628788671, 1038965054),
(120, 1628788671, 1946307542),
(121, 2103956975, 967607412),
(122, 1628788671, 327938864),
(123, 2103956975, 1240297156),
(124, 2103956975, 1458497342),
(125, 1031752837, 1458497342),
(126, 1628788671, 1458497342),
(127, 2103956975, 1607261538),
(128, 1031752837, 1607261538),
(129, 138873613, 1607261538),
(130, 1628788671, 1607261538),
(131, 1031752837, 2011372230),
(132, 138873613, 2011372230),
(133, 1628788671, 2011372230),
(134, 1628788671, 1010000427),
(135, 1031752837, 1010000427),
(136, 2103956975, 1010000427),
(137, 138873613, 1010000427),
(138, 1628788671, 1465657559),
(139, 1031752837, 1465657559),
(140, 2103956975, 1465657559),
(141, 138873613, 1465657559),
(142, 2103956975, 1041295171),
(143, 1031752837, 1041295171),
(144, 1628788671, 1041295171),
(145, 138873613, 1041295171),
(146, 2103956975, 298590540),
(147, 1628788671, 298590540),
(148, 1031752837, 298590540),
(149, 2103956975, 599482063),
(150, 1031752837, 599482063),
(151, 1628788671, 599482063),
(152, 2103956975, 731523900),
(153, 1031752837, 731523900),
(154, 138873613, 731523900),
(155, 1628788671, 731523900),
(156, 1628788671, 1782231282),
(157, 702319960, 1782231282),
(158, 1157389642, 1782231282),
(159, 1031752837, 1782231282),
(160, 2103956975, 1589710115),
(161, 1157389642, 1589710115),
(162, 138873613, 1589710115),
(163, 2103956975, 1524015902),
(164, 138873613, 1524015902),
(165, 2103956975, 2040343074),
(166, 1031752837, 2040343074),
(167, 1157389642, 2040343074),
(168, 138873613, 2040343074),
(169, 138873613, 2081224722),
(170, 1157389642, 2081224722),
(171, 1031752837, 2081224722),
(172, 1031752837, 1819254576),
(173, 1157389642, 1819254576),
(174, 138873613, 1819254576),
(175, 138873613, 663624126),
(176, 1628788671, 663624126),
(177, 1031752837, 663624126),
(178, 2103956975, 663624126),
(179, 138873613, 1518405186),
(180, 138873613, 1449550644),
(181, 1031752837, 68532443),
(182, 1031752837, 861966024),
(183, 138873613, 1131693173),
(184, 1031752837, 1131693173),
(185, 138873613, 1197489112),
(186, 2103956975, 1720422135),
(187, 138873613, 2020636560),
(188, 1031752837, 1211872667),
(189, 1628788671, 1211872667),
(190, 2103956975, 1211872667),
(191, 1628788671, 1337769008),
(192, 1031752837, 1974359886),
(193, 138873613, 131614581),
(194, 1031752837, 131614581),
(195, 1628788671, 131614581),
(196, 1628788671, 1389649163),
(197, 1628788671, 1980664506),
(198, 1628788671, 1474419876),
(199, 1628788671, 1100681433),
(200, 1628788671, 1053831497),
(201, 1031752837, 2126416279),
(202, 1155801446, 437592280),
(203, 78343726, 437592280),
(204, 1031752837, 437592280),
(205, 138873613, 437592280),
(206, 1567081643, 437592280),
(207, 2103956975, 437592280),
(208, 1628788671, 1143797121),
(209, 1031752837, 1143797121),
(210, 2103956975, 1143797121),
(211, 814922157, 149120811),
(212, 1628788671, 149120811),
(213, 2103956975, 149120811),
(214, 2103956975, 265246952),
(215, 1628788671, 931606145),
(216, 1031752837, 931606145),
(217, 1031752837, 1066576245),
(218, 1628788671, 1234388991),
(219, 1628788671, 353059206),
(220, 2103956975, 353059206),
(221, 814922157, 353059206),
(222, 28781058, 353059206),
(223, 138873613, 353059206),
(224, 2103956975, 809011243),
(225, 2103956975, 1795885609),
(226, 1031752837, 1795885609),
(227, 1628788671, 1795885609),
(228, 1031752837, 809011243),
(229, 138873613, 809011243),
(230, 1628788671, 809011243),
(231, 1628788671, 1492258110),
(232, 1031752837, 1492258110),
(233, 1628788671, 1048281919),
(234, 1031752837, 1048281919),
(235, 138873613, 1048281919),
(236, 2103956975, 1048281919),
(237, 138873613, 924684813),
(238, 1628788671, 924684813),
(239, 138873613, 1492258110),
(240, 1031752837, 582727471),
(241, 1628788671, 1300586593),
(242, 138873613, 80951822),
(243, 1031752837, 347089117),
(244, 1628788671, 757975142),
(245, 2103956975, 757975142),
(246, 138873613, 757975142),
(247, 1031752837, 757975142),
(248, 1628788671, 1796091266),
(249, 138873613, 1796091266),
(250, 1031752837, 685428845),
(251, 1628788671, 685428845),
(252, 138873613, 685428845),
(253, 2103956975, 685428845),
(254, 1031752837, 725059534),
(255, 2103956975, 725059534),
(256, 1628788671, 725059534),
(257, 1628788671, 1780850187),
(258, 1031752837, 1780850187),
(259, 1628788671, 1312882809),
(260, 138873613, 1312882809),
(261, 1031752837, 1312882809),
(262, 1628788671, 1279693047),
(263, 1031752837, 1279693047),
(264, 1031752837, 605348159),
(265, 2103956975, 605348159),
(266, 138873613, 605348159),
(267, 1628788671, 605348159),
(268, 138873613, 165519336),
(269, 1031752837, 165519336),
(270, 1628788671, 165519336),
(271, 1628788671, 1176210173),
(272, 1031752837, 1176210173),
(273, 2103956975, 465992795),
(274, 1628788671, 465992795),
(275, 1031752837, 465992795),
(276, 138873613, 709826809),
(277, 1031752837, 2415963),
(278, 1628788671, 2415963),
(279, 1628788671, 507433364),
(280, 1031752837, 507433364),
(281, 1031752837, 1573712121),
(282, 1628788671, 1573712121),
(283, 138873613, 1573712121),
(284, 1628788671, 552894046),
(285, 1031752837, 552894046),
(286, 1628788671, 984412666),
(287, 138873613, 984412666),
(288, 1031752837, 984412666),
(289, 1031752837, 455909158),
(290, 1628788671, 348268358),
(291, 1031752837, 1315304695),
(292, 2103956975, 1315304695),
(293, 2103956975, 1071249653),
(294, 1628788671, 628896725),
(295, 1628788671, 1377727421),
(296, 1031752837, 1377727421),
(297, 1031752837, 1741489554),
(298, 1628788671, 62326086),
(299, 1628788671, 556876289),
(300, 1628788671, 818178767),
(301, 138873613, 1909868171),
(302, 1031752837, 818178767),
(303, 1628788671, 1506632444),
(304, 1628788671, 1909868171),
(305, 2103956975, 1959897216),
(306, 1628788671, 2002543540),
(307, 1031752837, 1506632444),
(308, 138873613, 219771677),
(309, 1031752837, 219771677),
(310, 2103956975, 219771677),
(311, 1628788671, 2033855738),
(312, 138873613, 2033855738),
(313, 1628788671, 1251203168),
(314, 138873613, 1251203168),
(315, 2103956975, 1763225924),
(316, 1628788671, 1763225924),
(317, 1031752837, 1763225924),
(318, 2103956975, 884907955),
(319, 1628788671, 1494582667),
(320, 138873613, 1506632444),
(321, 2103956975, 1506632444),
(322, 1628788671, 1657575352),
(323, 1628788671, 237248660),
(324, 1628788671, 286670253),
(325, 1031752837, 286670253),
(326, 2103956975, 286670253),
(327, 1628788671, 234995162),
(328, 1628788671, 1765087920),
(329, 1628788671, 1952499250),
(330, 2103956975, 1952499250),
(331, 1628788671, 995686649),
(332, 1628788671, 47984577),
(333, 138873613, 47984577),
(334, 1031752837, 590693210),
(335, 2103956975, 590693210),
(336, 138873613, 590693210),
(337, 1628788671, 590693210),
(338, 2103956975, 1871591719),
(339, 138873613, 1871591719),
(340, 1031752837, 1871591719),
(341, 2103956975, 2113308554),
(342, 2103956975, 290167046),
(343, 2103956975, 960000286),
(344, 1031752837, 960000286),
(345, 1031752837, 826580776),
(346, 138873613, 826580776),
(347, 400024405, 826580776),
(348, 1404817368, 826580776),
(349, 400024405, 1779272623),
(350, 400024405, 299869825),
(351, 400024405, 1914506833),
(352, 400024405, 922814169),
(353, 1963147424, 922814169),
(354, 1404817368, 585784529),
(355, 400024405, 1180514636),
(356, 400024405, 1706072045),
(357, 400024405, 805984814),
(358, 1963147424, 805984814),
(359, 2071484400, 805984814),
(360, 1404817368, 1271936538),
(361, 1963147424, 2079088690),
(362, 1404817368, 2079088690),
(363, 1404817368, 1312511257),
(364, 400024405, 1346353997),
(365, 1404817368, 1346353997),
(366, 1963147424, 1346353997),
(367, 2071484400, 1346353997),
(368, 923622522, 1346353997),
(369, 2071484400, 613791457),
(370, 1529203458, 613791457),
(371, 923622522, 613791457),
(372, 1404817368, 613791457),
(373, 1529203458, 1665236823),
(374, 1741351272, 1665236823),
(375, 400024405, 1568981964),
(376, 400024405, 273401501),
(377, 1963147424, 273401501),
(378, 2071484400, 273401501),
(379, 1963147424, 1932582163),
(380, 1963147424, 806667837),
(381, 2071484400, 806667837),
(382, 2071484400, 998864719),
(383, 400024405, 998864719),
(384, 1913454314, 1778313359),
(385, 2071484400, 1778313359),
(386, 2071484400, 295903981),
(387, 1963147424, 295903981),
(388, 1963147424, 70310929),
(389, 2071484400, 70310929),
(390, 1846029176, 864818683);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ana_foliar_elementos`
--

CREATE TABLE `ana_foliar_elementos` (
  `id_ana_elementos` int(11) NOT NULL,
  `cabecera_id` int(18) NOT NULL,
  `valor_resultado` float NOT NULL,
  `metodo_extraccion` varchar(20) NOT NULL,
  `interpretacion` varchar(30) NOT NULL,
  `elemento_id` int(11) DEFAULT NULL,
  `nombre_elemento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ana_foliar_elementos`
--

INSERT INTO `ana_foliar_elementos` (`id_ana_elementos`, `cabecera_id`, `valor_resultado`, `metodo_extraccion`, `interpretacion`, `elemento_id`, `nombre_elemento`) VALUES
(12, 1070509542, 7, '(Bray II - ppm', 'Excesivo o Toxico', NULL, 'FOSFORO'),
(13, 1070509542, 8, 'cmol kg', 'Excesivo o Toxico', NULL, 'CALCIO'),
(14, 1070509542, 9, 'cmol kg', 'Excesivo o Toxico', NULL, 'MAGNECIO'),
(15, 1070509542, 5, 'cmol kg', 'Suficiente o Normal', NULL, 'POTASIO'),
(16, 1070509542, 6, 'cmol kg', 'Normal', NULL, 'CLORO'),
(17, 1070509542, 3, 'ppm', 'Excesivo o Toxico', NULL, 'AZUFRE'),
(18, 1070509542, 3, 'ppm', 'Valor nulo', NULL, 'MANGANESO'),
(19, 1070509542, 7, 'ppm', 'Suficiente', NULL, 'COBRE'),
(20, 1070509542, 9, 'ppm', 'Valor nulo', NULL, 'ZINC'),
(21, 1070509542, 7, '', '7', NULL, 'MOLIBDENO'),
(22, 1070509542, 3, 'ppm', '3', NULL, 'HIERRO'),
(23, 674030997, 8, '(Bray II - ppm', 'Excesivo o Toxico', NULL, 'FOSFORO'),
(24, 674030997, 6, 'cmol kg', 'Excesivo o Toxico', NULL, 'CALCIO'),
(25, 674030997, 5, 'cmol kg', 'Excesivo o Toxico', NULL, 'MAGNECIO'),
(26, 674030997, 9, 'cmol kg', 'Excesivo o Toxico', NULL, 'POTASIO'),
(27, 674030997, 8, 'cmol kg', 'Excesivo', NULL, 'CLORO'),
(28, 674030997, 7, 'ppm', 'Excesivo o Toxico', NULL, 'AZUFRE'),
(29, 674030997, 6, 'ppm', 'Valor nulo', NULL, 'MANGANESO'),
(30, 674030997, 7, 'ppm', 'Suficiente', NULL, 'COBRE'),
(31, 674030997, 4, 'ppm', 'Suficiente', NULL, 'ZINC'),
(32, 674030997, 8, '', '8', NULL, 'MOLIBDENO'),
(33, 674030997, 5, 'ppm', '5', NULL, 'HIERRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ana_suelo_elementos`
--

CREATE TABLE `ana_suelo_elementos` (
  `id_ana_elementos` int(11) NOT NULL,
  `cabecera_id` int(18) NOT NULL,
  `valor_resultado` float NOT NULL,
  `metodo_extraccion` varchar(20) NOT NULL,
  `interpretacion` varchar(30) NOT NULL,
  `elemento_id` int(11) DEFAULT NULL,
  `nombre_elemento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ana_suelo_elementos`
--

INSERT INTO `ana_suelo_elementos` (`id_ana_elementos`, `cabecera_id`, `valor_resultado`, `metodo_extraccion`, `interpretacion`, `elemento_id`, `nombre_elemento`) VALUES
(46, 400024405, 2.2, '', 'Medio', NULL, 'NITROGENO'),
(47, 400024405, 15, '(Bray II - ppm', 'Est: Bajo', NULL, 'FOSFORO'),
(48, 400024405, 5.13, 'cmol kg', 'Est: Medio', NULL, 'CALCIO'),
(49, 400024405, 0.52, 'cmol kg', 'Est: Bajo', NULL, 'MAGNESIO'),
(50, 400024405, 0.26, 'cmol kg', 'Est: Bajo', NULL, 'POTASIO'),
(51, 400024405, 0.17, 'cmol kg', 'Medio', NULL, 'SODIO'),
(52, 400024405, 7.7, 'ppm', 'Est: Bajo', NULL, 'AZUFRE'),
(53, 400024405, 0.12, 'ppm', 'Est: Bajo', NULL, 'BORO'),
(54, 400024405, 6.9, 'ppm', 'Est: Medio', NULL, 'MANGANESO'),
(55, 400024405, 9.9, 'ppm', 'Alto', NULL, 'COBRE'),
(56, 400024405, 44, 'ppm', 'Est: Alto', NULL, 'ZINC'),
(57, 400024405, 524, 'ppm', 'Alto', NULL, 'HIERRO'),
(58, 1963147424, 3.01, '', 'Ideal', NULL, 'NITROGENO'),
(59, 1963147424, 10, '(Bray II - ppm', 'Est: Bajo', NULL, 'FOSFORO'),
(60, 1963147424, 14.8, 'cmol kg', 'Est: Alto', NULL, 'CALCIO'),
(61, 1963147424, 0.71, 'cmol kg', 'Est: Bajo', NULL, 'MAGNESIO'),
(62, 1963147424, 0.27, 'cmol kg', 'Est: Bajo', NULL, 'POTASIO'),
(63, 1963147424, 0.23, 'cmol kg', 'Medio', NULL, 'SODIO'),
(64, 1963147424, 11, 'ppm', 'Est: Medio', NULL, 'AZUFRE'),
(65, 1963147424, 0.22, 'ppm', 'Est: Medio', NULL, 'BORO'),
(66, 1963147424, 11, 'ppm', 'Est: Alto', NULL, 'MANGANESO'),
(67, 1963147424, 5.7, 'ppm', 'Alto', NULL, 'COBRE'),
(68, 1963147424, 6.5, 'ppm', 'Est: Alto', NULL, 'ZINC'),
(69, 1963147424, 241, 'ppm', 'Alto', NULL, 'HIERRO'),
(94, 1913454314, 0.58, '', 'Bajo', NULL, 'NITROGENO'),
(95, 1913454314, 1, '(Bray II - ppm', 'Est:  Muy Bajo', NULL, 'FOSFORO'),
(96, 1913454314, 2, 'cmol kg', 'Est: Bajo', NULL, 'CALCIO'),
(97, 1913454314, 3, 'cmol kg', 'Est: Alto', NULL, 'MAGNESIO'),
(98, 1913454314, 2, 'cmol kg', 'Est: Excesivo', NULL, 'POTASIO'),
(99, 1913454314, 1, 'cmol kg', 'Alto', NULL, 'SODIO'),
(100, 1913454314, 11, 'ppm', 'Est: Medio', NULL, 'AZUFRE'),
(101, 1913454314, 1, 'ppm', 'Est: Medio', NULL, 'BORO'),
(102, 1913454314, 1, 'ppm', 'Est: Bajo', NULL, 'MANGANESO'),
(103, 1913454314, 1, 'ppm', 'Bajo', NULL, 'COBRE'),
(104, 1913454314, 1, 'ppm', 'Est: Bajo', NULL, 'ZINC'),
(105, 1913454314, 1, 'ppm', 'Bajo', NULL, 'HIERRO'),
(106, 1741351272, 1.16, '', 'Bajo', NULL, 'NITROGENO'),
(107, 1741351272, 11, '(Bray II - ppm', 'Est: Bajo', NULL, 'FOSFORO'),
(108, 1741351272, 10, 'cmol kg', 'Est: Alto', NULL, 'CALCIO'),
(109, 1741351272, 2, 'cmol kg', 'Est: Alto', NULL, 'MAGNESIO'),
(110, 1741351272, 7, 'cmol kg', 'Est: Excesivo', NULL, 'POTASIO'),
(111, 1741351272, 12, 'cmol kg', 'Alto', NULL, 'SODIO'),
(112, 1741351272, 2, 'ppm', 'Est: Bajo', NULL, 'AZUFRE'),
(113, 1741351272, 11, 'ppm', 'Est: Bajo', NULL, 'BORO'),
(114, 1741351272, 14, 'ppm', 'Est: Alto', NULL, 'MANGANESO'),
(115, 1741351272, 5, 'ppm', 'Alto', NULL, 'COBRE'),
(116, 1741351272, 8, 'ppm', 'Est: Alto', NULL, 'ZINC'),
(117, 1741351272, 9, 'ppm', 'Bajo', NULL, 'HIERRO'),
(130, 1811771444, 1.16, '', 'Bajo', NULL, 'NITROGENO'),
(131, 1811771444, 2, '(Bray II - ppm', 'Est:  Muy Bajo', NULL, 'FOSFORO'),
(132, 1811771444, 3, 'cmol kg', 'Est: Bajo', NULL, 'CALCIO'),
(133, 1811771444, 4, 'cmol kg', 'Est: Alto', NULL, 'MAGNESIO'),
(134, 1811771444, 5, 'cmol kg', 'Est: Excesivo', NULL, 'POTASIO'),
(135, 1811771444, 2, 'cmol kg', 'Alto', NULL, 'SODIO'),
(136, 1811771444, 2, 'ppm', 'Est: Bajo', NULL, 'AZUFRE'),
(137, 1811771444, 4, 'ppm', 'Est: Bajo', NULL, 'BORO'),
(138, 1811771444, 1, 'ppm', 'Est: Bajo', NULL, 'MANGANESO'),
(139, 1811771444, 3, 'ppm', 'Medio', NULL, 'COBRE'),
(140, 1811771444, 4, 'ppm', 'Est: Medio', NULL, 'ZINC'),
(141, 1811771444, 2, 'ppm', 'Bajo', NULL, 'HIERRO'),
(142, 2103324086, 34, '1', '1', NULL, 'n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_ana_suelo`
--

CREATE TABLE `archivos_ana_suelo` (
  `id_archivo` int(11) NOT NULL,
  `nombre_archivo` varchar(250) NOT NULL,
  `descripcion_archivo` varchar(250) NOT NULL,
  `id_cabecera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos_ana_suelo`
--

INSERT INTO `archivos_ana_suelo` (`id_archivo`, `nombre_archivo`, `descripcion_archivo`, `id_cabecera`) VALUES
(1, 'INFORME MENSUAL DE EJECUCIÓN mayo2018.docx', '', 2103956975),
(2, 'Maria Fernanda Quiroga Rubio(1).docx', '', 2103956975),
(3, 'Maria Fernanda Quiroga Rubio.docx', '', 2103956975),
(5, '954600708837CC1097639885A.pdf', '', 814922157);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_finca`
--

CREATE TABLE `archivos_finca` (
  `id_archivo` int(11) NOT NULL,
  `id_finca` int(11) NOT NULL,
  `descripcion_archivo` varchar(200) NOT NULL,
  `archivo_finca` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabecera_foliar`
--

CREATE TABLE `cabecera_foliar` (
  `id_cabecera` int(18) NOT NULL,
  `Nombre_programa` varchar(100) NOT NULL,
  `Propietario` varchar(50) NOT NULL,
  `Asistente_tecnico` varchar(50) NOT NULL,
  `Fecha_muestreo` varchar(30) NOT NULL,
  `Fecha_recepcion` varchar(30) NOT NULL,
  `Momento_muestreo` varchar(150) NOT NULL,
  `Departamento` varchar(50) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Finca` varchar(50) NOT NULL,
  `Siembra_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cabecera_foliar`
--

INSERT INTO `cabecera_foliar` (`id_cabecera`, `Nombre_programa`, `Propietario`, `Asistente_tecnico`, `Fecha_muestreo`, `Fecha_recepcion`, `Momento_muestreo`, `Departamento`, `Municipio`, `Finca`, `Siembra_id`) VALUES
(674030997, 'FOLIARES02AGO2018', 'Guillermo Parada', 'DDD', '29 Agosto, 2018', '25 Agosto, 2018', '31 Agosto, 2018', 'Santander', 'VELEZ', '4', 3),
(1070509542, 'FOLIARESJUL212018', 'Esneyder Alfonso', 'FFE', '30 Agosto, 2018', '31 Agosto, 2018', '10 Abril, 2018', 'Santander', 'VELEZ', '4', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cabecera_suelo`
--

CREATE TABLE `cabecera_suelo` (
  `id_cabecera` int(18) NOT NULL,
  `Nombre_programa` varchar(100) NOT NULL,
  `Propietario` varchar(50) NOT NULL,
  `Asistente_tecnico` varchar(50) NOT NULL,
  `Fecha_muestreo` varchar(60) NOT NULL,
  `Fecha_recepcion` varchar(30) NOT NULL,
  `Departamento` varchar(50) NOT NULL,
  `Municipio` varchar(60) NOT NULL,
  `Finca` varchar(60) NOT NULL,
  `Siembra_id` int(11) NOT NULL,
  `No_zona` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cabecera_suelo`
--

INSERT INTO `cabecera_suelo` (`id_cabecera`, `Nombre_programa`, `Propietario`, `Asistente_tecnico`, `Fecha_muestreo`, `Fecha_recepcion`, `Departamento`, `Municipio`, `Finca`, `Siembra_id`, `No_zona`) VALUES
(15551020, 'JEIBER MELO', 'Guillermo Parada', 'JEIBER MELO', '24 Septiembre, 2019', '19 Septiembre, 2019', '', '', '', 4, ''),
(67338910, 'pruebamora', 'John Marcos Jose', 'jeiber', '9 Septiembre, 2019', '26 Septiembre, 2019', '', '', '', 4, ''),
(88180416, 'pruebamora', 'John Marcos Jose', 'jeiber', '9 Septiembre, 2019', '26 Septiembre, 2019', '', '', '', 4, ''),
(112065966, 'morita', 'John Marcos Jose', 'jeiber', '9 Septiembre, 2019', '26 Septiembre, 2019', '', '', '', 3, ''),
(139458574, 'prueba9/09', 'Esneyder Alfonso', 'prueba', '9 Septiembre, 2019', '25 Septiembre, 2019', 'Santander', 'BOLIVAR', 'Finca los papayos', 4, '2'),
(279286405, 'pruebamora', 'John Marcos Jose', 'jeiber', '9 Septiembre, 2019', '26 Septiembre, 2019', 'Santander', 'BOLIVAR', 'Finca los papayos', 4, '1'),
(400024405, 'Guillermo parada Lote 4', 'Guillermo Parada', 'Luisa Güiza', '25 April, 2018', '9 May, 2018', 'Santander', 'VELEZ', 'San diego', 3, ''),
(430995891, 'JEIBER MELO', 'Guillermo Parada', 'JEIBER MELO', '24 Septiembre, 2019', '19 Septiembre, 2019', '', '', '', 4, ''),
(458093702, 'morita', 'John Marcos Jose', 'jeiber', '9 Septiembre, 2019', '26 Septiembre, 2019', '', '', '', 4, ''),
(903682998, 'morita', 'John Marcos Jose', 'jeiber', '9 Septiembre, 2019', '26 Septiembre, 2019', '', '', '', 3, ''),
(923622522, 'anasuelo 23 de mayo', 'Jhan Carlos H', 'Jhan', '24 May, 2019', '28 May, 2019', 'Santander', 'VELEZ', 'San diego', 3, '2'),
(1000047560, 'JEIBER MELO', 'Guillermo Parada', 'JEIBER MELO', '24 Septiembre, 2019', '19 Septiembre, 2019', '', '', '', 4, ''),
(1125290158, 'JEIBER MELO', 'Guillermo Parada', 'JEIBER MELO', '24 Septiembre, 2019', '19 Septiembre, 2019', '', '', '', 4, ''),
(1741351272, 'Analisis de suelos 1', 'Guillermo Parada', 'Andres R', '15 Julio, 2019', '24 Julio, 2019', 'Santander', 'VELEZ', 'San diego', 3, '2'),
(1811771444, 'NATALIA2019', 'Jhan Carlos H', 'Natalia', '14 Agosto, 2019', '16 Agosto, 2019', 'Santander', 'BOLIVAR', 'Finca los pinos', 3, '2'),
(1913454314, 'Análisis de suelo inicial ', 'Guillermo Parada', 'a', '15 Julio, 2019', '24 Julio, 2019', 'Santander', 'BOLIVAR', 'Finca los pinos', 3, '1'),
(1963147424, 'Guillermo parada Lote 3', 'Guillermo Parada', 'Luisa Güiza', '25 April, 2018', '9 May, 2018', 'Santander', 'VELEZ', 'San diego', 3, ''),
(2103324086, 'JEIBER MELO', 'Guillermo Parada', 'JEIBER MELO', '24 Septiembre, 2019', '19 Septiembre, 2019', '', '', '', 4, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivos`
--

CREATE TABLE `cultivos` (
  `id_cultivo` int(11) NOT NULL,
  `cod_cultivo` int(11) NOT NULL,
  `Nombre_cultivo` varchar(150) NOT NULL,
  `Variedad_cultivo` varchar(150) NOT NULL,
  `Superficie_cultivo` float NOT NULL,
  `Metodo_cultivo` varchar(60) NOT NULL,
  `Descripcion_cultivo` varchar(250) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cultivos`
--

INSERT INTO `cultivos` (`id_cultivo`, `cod_cultivo`, `Nombre_cultivo`, `Variedad_cultivo`, `Superficie_cultivo`, `Metodo_cultivo`, `Descripcion_cultivo`, `image`) VALUES
(88, 2, 'Guayaba', 'Regional', 4, 'Tradicional', 'Guayaba de tipo regional de Santander', '50200186.png'),
(89, 3, 'Durazno', 'Gran Garillo', 2, 'Tradicional', 'Piel amarilla con ligera pigmentación roja, pulpa amarilla con coloración rojiza al rededor del hueso. Forma redondeada, peso promedio de 150g, consumo en fresco o agroindustria.', '540933803.jpg'),
(92, 6, 'Mora', 'Castilla', 2, 'Tradicional', 'Cultivo perenne, planta de vegetación perenne, de porte arbustivo, semierecta y de naturaleza trepadora.', '693720822.jpg'),
(94, 4444, 'Cebolla', 'Larga', 21, 'Tradicional', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivos_siembra`
--

CREATE TABLE `cultivos_siembra` (
  `id_cultivos_siembra` int(11) NOT NULL,
  `id_siembra` int(11) NOT NULL,
  `id_cultivo` int(11) NOT NULL,
  `limite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cultivos_siembra`
--

INSERT INTO `cultivos_siembra` (`id_cultivos_siembra`, `id_siembra`, `id_cultivo`, `limite`) VALUES
(22, 3, 88, 1),
(25, 3, 90, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo_elementos`
--

CREATE TABLE `cultivo_elementos` (
  `cultivo_id` int(11) NOT NULL,
  `elemento_id` int(11) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `depar_munic_finca`
--

CREATE TABLE `depar_munic_finca` (
  `id` int(11) NOT NULL,
  `Departamento` varchar(250) NOT NULL,
  `Municipio` varchar(250) NOT NULL,
  `Vereda_finca` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `depar_munic_finca`
--

INSERT INTO `depar_munic_finca` (`id`, `Departamento`, `Municipio`, `Vereda_finca`) VALUES
(1, 'Santander', 'BOLIVAR', 'Vereda finca pinos'),
(2, 'Santander', 'BOLIVAR', 'Finca canuitas'),
(3, 'Santander', 'BOLIVAR', 'Finca los papayos'),
(4, 'Santander', 'CIMITARRA', 'Finca de Cimitarra 1'),
(5, 'Santander', 'CIMITARRA', 'Finca de Cimitarra 2'),
(6, 'Santander', 'CIMITARRA', 'Finca de Cimitarra 3'),
(7, 'Santander', 'BARBOSA', 'Finca de Barbosa 1'),
(8, 'Santander', 'BARBOSA', 'Finca de Barbosa 2'),
(9, 'Santander', 'BARBOSA', 'Finca de Barbosa 3'),
(10, 'Boyaca', 'MONIQUIRA', 'Finca guayacan'),
(11, 'Boyaca', 'SUTAMERCHAN', 'Finca de lulo'),
(12, 'Boyaca', 'TUNJA', 'Papa de la buena finca'),
(13, 'Boyaca', 'SOGAMOSO', 'Finca Victoria'),
(14, 'Antioquia', 'BELLO', 'Finca de Bello'),
(15, 'Antioquia', 'GUATAPE', 'Finca de Guatape '),
(16, 'Antioquia', 'SAN JAVIER', 'Finca de San Javier 1'),
(17, 'Antioquia', 'SAN JAVIER', 'Finca de San Javier 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos`
--

CREATE TABLE `elementos` (
  `id_elemento` int(11) NOT NULL,
  `Nombre_elemento` varchar(100) NOT NULL,
  `Descripcion_elemento` varchar(100) NOT NULL,
  `Categoria_elemento` varchar(30) NOT NULL,
  `cultivo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `elementos`
--

INSERT INTO `elementos` (`id_elemento`, `Nombre_elemento`, `Descripcion_elemento`, `Categoria_elemento`, `cultivo_id`) VALUES
(1, 'Cu', '', '', 0),
(2, 'Zn', '', '', 0),
(3, 'Mn', '', '', 0),
(4, 'Fe', '', '', 0),
(5, 'B', '', '', 0),
(6, 'S', '', '', 0),
(7, 'Mg', '', '', 0),
(8, 'Ca', '', '', 0),
(9, 'K', '', '', 0),
(10, 'P', '', '', 0),
(11, 'N', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fertilizantes`
--

CREATE TABLE `fertilizantes` (
  `id_fertilizante` int(11) NOT NULL,
  `Nombre_fertilizante` varchar(60) NOT NULL,
  `Tipo_fertilizante` varchar(30) NOT NULL,
  `Estado_fertilizante` varchar(30) NOT NULL,
  `Fabricante_fertilizante` varchar(50) NOT NULL,
  `Descripcion_fertilizante` varchar(250) NOT NULL,
  `Composicion_garant` varchar(200) NOT NULL,
  `Composicion_fertilizante` varchar(180) NOT NULL,
  `Valor_fertilizante` double NOT NULL,
  `Codigo_fertilizante` varchar(100) NOT NULL,
  `Status_fertilizante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fertilizantes`
--

INSERT INTO `fertilizantes` (`id_fertilizante`, `Nombre_fertilizante`, `Tipo_fertilizante`, `Estado_fertilizante`, `Fabricante_fertilizante`, `Descripcion_fertilizante`, `Composicion_garant`, `Composicion_fertilizante`, `Valor_fertilizante`, `Codigo_fertilizante`, `Status_fertilizante`) VALUES
(7, 'DAP (FOSFATO DIAMONICO', 'GRANULADO', 'Solido', 'YARA COLOMBIA S.A', '', 'NITRÓGENO TOTAL (N).... 18% NITROGENO AMONIACAL (N)...... 46% FOSFORO ASIMILIBLE (P2O5) .....', '18-46-0', 84000, 'DAP18460', 1),
(8, 'NUTRIMON * 12 - 24 - 12', 'GRANULADO', 'Solido', 'MONOMEROS COLOMBOVENEZOLANOS S.A', '', 'N TOTAL.. 12,0% .N AMONIACAL  9,0%. N NITRICO 3,0% P ASIMILABLE ( P2O5)  24,0%. K ASIMILABLE ( P2O5) . 24,0%. K SOLUBLE EN AGUA (K2O) 12%.', '12 - 24 - 12', 74000, '02', 1),
(9, 'NUTRIMON ® UREA G 46 - 0 ', 'SIMPLE', 'Solido', 'MONOMEROS COLOMBOVENEZOLANOS S.A', '', 'N TOTAL  46,00%. N UREICO 46,00% BIURET 1.5 %', ' 46 - 0 -0', 65000, 'URE4600', 1),
(10, 'NUTRIMON * 10 - 30 - 10', 'COMPUESTO', 'Solido', 'MONOMEROS COLOMBOVENEZOLANOS S.A', '', 'N TOTAL  10,00%. N AMONIACAL  8,2%. N  NITRICO 1,8%.P ASIMILABLE (P2O5) 30,00%. K SOLUBLE EN AGUA ( K2O) 10,00%.', ' 10 - 30 - 10', 84000, 'NTRI103010', 2),
(11, ' CLORURO DE POTASIO 0-0- 60', 'GRANULADO', 'Solido', 'MONOMEROS COLOMBOVENEZOLANOS S.A', '', 'N TOTAL 12,0%. N AMONIACAL  9,0%. N NITRICO 3,0%.P ASIMILABLE ( P2O5)  24,0%. K SOLUBLE EN AGUA (K2O) ..... 12,0%', ' 0-0- 60', 76000, 'KCL0060', 1),
(12, 'REMITAL - m GRADO 17-6-18- 2', 'GRANULADO', 'Solido', 'YARA COLOMBIA S.A', '', 'N TOTAL (N)17%. N AMONIACAL 7.0% .N UREICO 10.0% P  ASIMILABLE(P2O5).K SOLUBLE EN AGUA(K2o)18% .Mg Total. S TOTAL 6%.', ' 17-6-18- 2', 68000, '06', 1),
(13, 'SUPERFOSFATO TRIPLE', 'GRANULADO', 'Solido', 'YARA COLOMBIA S.A', '', 'POTASIO SOLUBLE EN AGUA ( K20) ..... 50,0% AZUFRE TOTAL (S)..... 18,0%', '0-46-0 ', 128000, '07', 3),
(14, 'NUTRIMON * SULFATO DE AMONIO ', 'SIMPLE', 'Solido', 'MONOMEROS COLOMBOVENEZOLANOS S.A', '', 'N TOTAL  20,50% .N AMONIACAL  20,50% .S TOTAL  23,50%.', '21 - 0 - 0 -24', 82000, 'SULF210024', 3),
(15, 'HYDROCOMPLEX', 'COMPUESTO', 'Solido', 'YARA COLOMBIA S.A', '', 'NTotal 12,40%. N  Amoniacal  7,30%. .N Nitrico NO3 5,10%. P2 O5 11,40% . K2O 17,70%. MgO 2,65% . S 8,00%.Mn 0,02%. Fe 0,20%. B 0,015% . Zn 0,02%.', '12 - 11 - 18 - 2- 8', 92000, '09', 2),
(16, 'Renovador', 'COMPUESTO', 'Solido', 'YARA COLOMBIA S.A', '', 'N Total 12,0%. N Amoniacal 10,0%. N Nitrico  2,0%.P2 O5 21,0% .K2O 21,0%. CaO 2,2%.MgO 1,4%.', '12 - 21 - 21-1(MgO) -2(CaO)', 90000, '10', 2),
(17, 'TRIPLE 15', 'COMPUESTO', 'Solido', 'ABONOS COLOMBIANOS S.A. \"ABOCOL\"', '', ' N Total 15.0%. N Amoniacal 8.89%  Nitrógeno Nítrico 6.11%.P2O5% 15.0.K2O 15.0%. ', '15-15-15', 72000, 'TRI151515', 1),
(18, ' NITROMAG', 'SIMPLE', 'Solido', 'YARA COLOMBIA S.A', '', 'N Total 21,00%. N Amoniacal 10,30%.  N Nitrico 10,70%. MgO 7,50%.CaO 11,00%', '21 - 0 - 0 - 7.5 (MgO)- 11(CaO', 76000, 'NMG2100', 2),
(19, 'Agrimins', 'COMPUESTO', 'Solido', 'Colinagro', '', 'N Total 8.0. N Amoniacal 1.0 .Nitrógeno Ureico  7.0. P2O5 5.0%. CaO 18.0. MgO 6.0%. S 1.6% .B 1.0%.Cu)0.14%. Mo 0.005%. Zn 2.5%.', '8-5-0-6', 82000, 'FE19', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fincas`
--

CREATE TABLE `fincas` (
  `id_finca` int(11) NOT NULL,
  `Nombre_finca` varchar(150) NOT NULL,
  `Descripcion_finca` varchar(200) NOT NULL,
  `Departamento_finca` varchar(60) NOT NULL,
  `Municipio_finca` varchar(60) NOT NULL,
  `Vereda_finca` varchar(60) DEFAULT NULL,
  `Latitud_finca` float NOT NULL,
  `Longitud_finca` float NOT NULL,
  `Viacc_finca` int(11) NOT NULL,
  `Int_familia_finca` int(11) NOT NULL,
  `Jovenes_1518` int(11) NOT NULL,
  `Propietario` int(11) NOT NULL,
  `poligono` polygon NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fincas`
--

INSERT INTO `fincas` (`id_finca`, `Nombre_finca`, `Descripcion_finca`, `Departamento_finca`, `Municipio_finca`, `Vereda_finca`, `Latitud_finca`, `Longitud_finca`, `Viacc_finca`, `Int_familia_finca`, `Jovenes_1518`, `Propietario`, `poligono`) VALUES
(4, 'San diego', 'Guayaba Regional', 'Santander', '', NULL, 3432, 234, 0, 4, 2, 3, ''),
(5, 'Finca los pinos', 'Mora', 'Santander', 'BOLIVAR', 'Vereda finca pinos', 2, 1, 2, 2, 1, 7, ''),
(6, 'Finca canuitas', 'Mora', 'Santander', 'BOLIVAR', 'Finca canuitas', 0, 0, 0, 0, 0, 5, ''),
(7, 'Finca los papayos', 'Mora', 'Santander', 'BOLIVAR', NULL, 0, 0, 0, 0, 0, 7, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_datos_nitrogeno`
--

CREATE TABLE `matriz_datos_nitrogeno` (
  `id` int(11) NOT NULL,
  `Fecha` varchar(100) NOT NULL,
  `coordenada_x` varchar(100) NOT NULL,
  `coordenada_y` varchar(100) NOT NULL,
  `Zona` varchar(100) NOT NULL,
  `N_Placa_Muestral` varchar(100) NOT NULL,
  `N_Planta` varchar(100) NOT NULL,
  `Etapa_Fenologica` varchar(100) NOT NULL,
  `cod_Fenologica` varchar(100) NOT NULL,
  `N_de_Frutos` varchar(100) NOT NULL,
  `Clorofila_Spad` varchar(100) NOT NULL,
  `NDVI_GreenSeker` varchar(100) NOT NULL,
  `Temperatura_Maxima` varchar(100) NOT NULL,
  `Temperatura_Minima` varchar(100) NOT NULL,
  `Promedio_Temperatura` varchar(100) NOT NULL,
  `Humedad_Relativa_Maxima` varchar(100) NOT NULL,
  `Humedad_Relativa_Minima` varchar(100) NOT NULL,
  `Promedio_Humedad_Relativa` varchar(100) NOT NULL,
  `Hrscalor_acumuladas_dp` varchar(100) NOT NULL,
  `Dias_Transcurridos_dp` varchar(100) NOT NULL,
  `porcentaje_Nitro_lab` varchar(100) NOT NULL,
  `Nitro_g_kg_lab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `matriz_datos_nitrogeno`
--

INSERT INTO `matriz_datos_nitrogeno` (`id`, `Fecha`, `coordenada_x`, `coordenada_y`, `Zona`, `N_Placa_Muestral`, `N_Planta`, `Etapa_Fenologica`, `cod_Fenologica`, `N_de_Frutos`, `Clorofila_Spad`, `NDVI_GreenSeker`, `Temperatura_Maxima`, `Temperatura_Minima`, `Promedio_Temperatura`, `Humedad_Relativa_Maxima`, `Humedad_Relativa_Minima`, `Promedio_Humedad_Relativa`, `Hrscalor_acumuladas_dp`, `Dias_Transcurridos_dp`, `porcentaje_Nitro_lab`, `Nitro_g_kg_lab`) VALUES
(1, 'domingo 12 de agosto de 2018', '-7365886065', '5963442072', '4', 'na', '18', 'flecha', '1', '256', '61,2', '0,79', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(2, 'domingo 12 de agosto de 2018', '-7365868444', '5963412603', '4', 'na', '111', 'flecha', '1', '199', '51,1', '0,81', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(3, 'domingo 12 de agosto de 2018', '-7365855808', '5963545287', '4', 'na', '161', 'flecha', '1', '246', '75,2', '0,79', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(4, 'domingo 12 de agosto de 2018', '-7365847337', '596334631', '3', 'na', '228', 'flecha', '1', '301', '101,2', '0,8', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(5, 'domingo 12 de agosto de 2018', '-7365831612', '5963427145', '2', 'na', '324', 'flecha', '1', '144', '91,9', '0,78', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(6, 'domingo 12 de agosto de 2018', '-7365823727', '5963398141', '2', 'na', '378', 'flecha', '1', '395', '56,4', '0,77', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(7, 'domingo 12 de agosto de 2018', '-7365822724', '5963261724', '1', '101', '390', 'flecha', '1', '564', '50,3', '0,84', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(8, 'domingo 12 de agosto de 2018', '-7365821019', '5963625767', '1', '103', '344', 'flecha', '1', '189', '47,3', '0,79', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(9, 'domingo 12 de agosto de 2018', '-7365818732', '5963851438', '1', '104', '314', 'flecha', '1', '933', '64,1', '0,8', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(10, 'domingo 12 de agosto de 2018', '-736581832', '5963711139', '1', 'na', '346', 'flecha', '1', '266', '50,7', '0,71', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(11, 'domingo 12 de agosto de 2018', '-7365827492', '5963417245', '1', 'na', '339', 'flecha', '1', '108', '42,8', '0,69', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(12, 'domingo 12 de agosto de 2018', '-7365837841', '5963824945', '2', '121', '208', 'flecha', '1', '697', '58,6', '0,73', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(13, 'domingo 12 de agosto de 2018', '-7365846061', '596371002', '2', 'na', '182', 'flecha', '1', '320', '58,5', '0,76', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(14, 'domingo 12 de agosto de 2018', '-7365851982', '5963963725', '2', 'na', '98', 'flecha', '1', '576', '62,8', '0,79', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(15, 'domingo 12 de agosto de 2018', '-7365831451', '5964299949', '3', '130', '143', 'flecha', '1', '515', '49,2', '0,75', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(16, 'domingo 12 de agosto de 2018', '-7365839686', '5964198155', '3', '131', '139', 'flecha', '1', '302', '52,4', '0,8', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(17, 'domingo 12 de agosto de 2018', '-7365824003', '5964238995', '3', 'na', '198', 'flecha', '1', '394', '30,4', '0,72', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(18, 'domingo 12 de agosto de 2018', '-7365828274', '5964115995', '3', 'na', '201', 'flecha', '1', '415', '52,8', '0,79', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(19, 'domingo 12 de agosto de 2018', '-7365806424', '5964096478', '4', 'na', '355', 'flecha', '1', '413', '38,4', '0,82', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(20, 'domingo 12 de agosto de 2018', '-7365798818', '5964188442', '4', 'na', '359', 'flecha', '1', '251', '92,3', '0,79', '27,1', '10,2', '18,9', '95,6', '40,1', '65,9', '132', '97', 'null', 'null'),
(21, 'mi?rcoles 15 de agosto de 2018', '-736582', '596334', '1', '101', '390', 'Boton', '2', '824', '50,5', '0,83', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '2,02', '20,25'),
(22, 'mi?rcoles 15 de agosto de 2018', '-736582', '5963421', '1', '102', '392', 'Boton', '2', '1612', '70,1', '0,82', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '2,35', '23,51'),
(23, 'mi?rcoles 15 de agosto de 2018', '-736582', '5963711', '1', '103', '344', 'Boton', '2', '608', '68', '0,79', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,7', '16,98'),
(24, 'mi?rcoles 15 de agosto de 2018', '-736582', '5963766', '1', '104', '314', 'Boton', '2', '1488', '86,3', '0,78', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,73', '17,27'),
(25, 'mi?rcoles 15 de agosto de 2018', '-736581', '5963722', '1', '105', '399', 'Boton', '2', '800', '68,4', '0,69', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,59', '15,86'),
(26, 'mi?rcoles 15 de agosto de 2018', '-736581', '5963775', '1', '106', '367', 'Boton', '2', '556', '46,5', '0,68', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,86', '18,62'),
(27, 'mi?rcoles 15 de agosto de 2018', '-736581', '5963806', '1', '107', '401', 'Boton', '2', '492', '57,5', '0,73', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,66', '16,64'),
(28, 'mi?rcoles 15 de agosto de 2018', '-736582', '5963683', '1', '108', '316', 'Boton', '2', '600', '74,1', '0,68', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,58', '15,8'),
(29, 'mi?rcoles 15 de agosto de 2018', '-736582', '5963465', '1', '109', '393', 'Boton', '2', '1144', '53,8', '0,73', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '2,01', '20,07'),
(30, 'mi?rcoles 15 de agosto de 2018', '-736583', '596378', '1', '110', '291', 'Boton', '2', '520', '43,5', '0,73', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,49', '14,95'),
(31, 'mi?rcoles 15 de agosto de 2018', '-736582', '5963851', '1', '111', '312', 'Boton', '2', '560', '68,3', '0,77', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,82', '18,19'),
(32, 'mi?rcoles 15 de agosto de 2018', '-736584', '5963925', '2', '112', '185', 'Boton', '2', '480', '102,1', '0,75', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,61', '16,14'),
(33, 'mi?rcoles 15 de agosto de 2018', '-736585', '59639', '2', '113', '130', 'Boton', '2', '848', '52,6', '0,72', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,95', '19,51'),
(34, 'mi?rcoles 15 de agosto de 2018', '-736585', '5963623', '2', '114', '178', 'Boton', '2', '408', '64,6', '0,73', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '2,04', '20,39'),
(35, 'mi?rcoles 15 de agosto de 2018', '-736587', '5963785', '2', '115', '32', 'Boton', '2', '437', '50,2', '0,72', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,69', '16,88'),
(36, 'mi?rcoles 15 de agosto de 2018', '-736587', '5963892', '2', '116', '5', 'Boton', '2', '540', '61,2', '0,74', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,57', '15,67'),
(37, 'mi?rcoles 15 de agosto de 2018', '-736585', '5963964', '2', '117', '96', 'Boton', '2', '376', '60,6', '0,74', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,89', '18,91'),
(38, 'mi?rcoles 15 de agosto de 2018', '-736584', '5963839', '2', '118', '183', 'Boton', '2', '410', '66,3', '0,73', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,64', '16,44'),
(39, 'mi?rcoles 15 de agosto de 2018', '-736584', '5964068', '2', '119', '134', 'Boton', '2', '480', '76,5', '0,72', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,69', '16,93'),
(40, 'mi?rcoles 15 de agosto de 2018', '-736584', '5964154', '2', '120', '136', 'Boton', '2', '545', '57,5', '0,69', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,16', '11,64'),
(41, 'mi?rcoles 15 de agosto de 2018', '-736584', '5963741', '2', '121', '208', 'Boton', '2', '472', '38,6', '0,69', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,6', '16,01'),
(42, 'mi?rcoles 15 de agosto de 2018', '-736584', '5963592', '2', '122', '232', 'Boton', '2', '720', '90,6', '0,74', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,74', '17,39'),
(43, 'mi?rcoles 15 de agosto de 2018', '-736586', '5963642', '3', '123', '124', 'Boton', '2', '520', '68,2', '0,72', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,95', '19,51'),
(44, 'mi?rcoles 15 de agosto de 2018', '-736587', '5963681', '3', '124', '70', 'Boton', '2', '450', '76,2', '0,71', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,88', '18,79'),
(45, 'mi?rcoles 15 de agosto de 2018', '-736586', '596358', '3', '125', '105', 'Boton', '2', '312', '88,4', '0,71', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,81', '18,08'),
(46, 'mi?rcoles 15 de agosto de 2018', '-736588', '5963642', '3', '126', '11', 'Boton', '2', '367', '73,4', '0,69', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,7', '17,05'),
(47, 'mi?rcoles 15 de agosto de 2018', '-736587', '5963708', '3', '127', '30', 'Boton', '2', '423', '84,1', '0,74', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,85', '18,5'),
(48, 'mi?rcoles 15 de agosto de 2018', '-736587', '596374', '3', '128', '48', 'Boton', '2', '503', '88,4', '0,71', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,57', '15,68'),
(49, 'mi?rcoles 15 de agosto de 2018', '-736583', '596417', '3', '129', '191', 'Boton', '2', '160', '71,5', '0,71', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,56', '15,59'),
(50, 'mi?rcoles 15 de agosto de 2018', '-736583', '5964217', '3', '130', '143', 'Boton', '2', '560', '69,8', '0,66', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,3', '12,97'),
(51, 'mi?rcoles 15 de agosto de 2018', '-736584', '5964276', '3', '131', '139', 'Boton', '2', '400', '54,4', '0,74', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,66', '16,64'),
(52, 'mi?rcoles 15 de agosto de 2018', '-736584', '5964313', '3', '132', '85', 'Boton', '2', '432', '53,4', '0,76', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,52', '15,16'),
(53, 'mi?rcoles 15 de agosto de 2018', '-736584', '5964318', '3', '133', '140', 'Boton', '2', '488', '65,7', '0,73', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,77', '17,69'),
(54, 'mi?rcoles 15 de agosto de 2018', '-736587', '596347', '4', '134', '65', 'Boton', '2', '1200', '103', '0,73', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '2,07', '20,74'),
(55, 'mi?rcoles 15 de agosto de 2018', '-736586', '5963435', '4', '135', '119', 'Boton', '2', '840', '76,9', '0,74', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,71', '17,13'),
(56, 'mi?rcoles 15 de agosto de 2018', '-736586', '596341', '4', '136', '173', 'Boton', '2', '748', '71,9', '0,7', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '2,09', '20,91'),
(57, 'mi?rcoles 15 de agosto de 2018', '-736585', '5963358', '4', '137', '217', 'Boton', '2', '184', '66,5', '0,74', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,9', '19,04'),
(58, 'mi?rcoles 15 de agosto de 2018', '-736585', '5963256', '4', '138', '224', 'Boton', '2', '132', '88,4', '0,74', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,94', '19,35'),
(59, 'mi?rcoles 15 de agosto de 2018', '-736586', '5963343', '4', '139', '164', 'Boton', '2', '608', '81,1', '0,73', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,94', '19,41'),
(60, 'mi?rcoles 15 de agosto de 2018', '-736587', '5963231', '4', '140', '114', 'Boton', '2', '820', '53,1', '0,67', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,87', '18,7'),
(61, 'mi?rcoles 15 de agosto de 2018', '-736588', '5963341', '4', '141', '21', 'Boton', '2', '294', '78,4', '0,7', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,95', '19,51'),
(62, 'mi?rcoles 15 de agosto de 2018', '-736581', '5964197', '4', '142', '301', 'Boton', '2', '280', '69,5', '0,69', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,94', '19,39'),
(63, 'mi?rcoles 15 de agosto de 2018', '-73658', '5964119', '4', '143', '359', 'Boton', '2', '800', '63', '0,8', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,73', '17,31'),
(64, 'mi?rcoles 15 de agosto de 2018', '-736581', '5964066', '4', '144', '307', 'Boton', '2', '312', '74', '0,77', '25,8', '10,9', '18,1', '93,6', '59,5', '79', '139', '100', '1,59', '15,89'),
(65, 'jueves 23 de agosto de 2018', '-7365820715', '5963339709', '1', '101', '390', 'Boton', '2', '824', '78,9', '0,83', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(66, 'jueves 23 de agosto de 2018', '-7365819124', '5963421186', '1', '102', '392', 'Boton', '2', '1612', '72,2', '0,79', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(67, 'jueves 23 de agosto de 2018', '-736581832', '5963711139', '1', '103', '344', 'Boton', '2', '608', '82,5', '0,76', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(68, 'jueves 23 de agosto de 2018', '-736581832', '5963711139', '1', '103', '344', 'llenado', '4', '608', '83,7', '0,79', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(69, 'jueves 23 de agosto de 2018', '-7365821024', '5963765853', '1', '104', '314', 'Boton', '2', '1488', '84,4', '0,76', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(70, 'jueves 23 de agosto de 2018', '-7365808383', '5963721959', '1', '105', '399', 'Boton', '2', '800', '72,1', '0,78', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(71, 'jueves 23 de agosto de 2018', '-7365811478', '5963774845', '1', '106', '367', 'Boton', '2', '556', '74', '0,74', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(72, 'jueves 23 de agosto de 2018', '-7365805716', '5963806449', '1', '107', '401', 'Boton', '2', '492', '79', '0,76', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(73, 'jueves 23 de agosto de 2018', '-736582427', '5963682646', '1', '108', '316', 'Boton', '2', '600', '70,3', '0,75', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(74, 'jueves 23 de agosto de 2018', '-7365817531', '5963464629', '1', '109', '393', 'Boton', '2', '1144', '78,4', '0,71', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(75, 'jueves 23 de agosto de 2018', '-7365817531', '5963464629', '1', '109', '393', 'cuajado', '3', '1144', '79,7', '0,72', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(76, 'jueves 23 de agosto de 2018', '-7365825367', '5963780416', '2', '110', '291', 'Boton', '2', '520', '70,1', '0,77', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(77, 'jueves 23 de agosto de 2018', '-7365818732', '5963851438', '2', '111', '312', 'Boton', '2', '560', '78,8', '0,8', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(78, 'jueves 23 de agosto de 2018', '-7365839551', '5963924915', '2', '112', '185', 'Boton', '2', '480', '71,9', '0,77', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(79, 'jueves 23 de agosto de 2018', '-7365849197', '5963900373', '2', '113', '130', 'Boton', '2', '848', '72,7', '0,79', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(80, 'jueves 23 de agosto de 2018', '-7365849197', '5963900373', '2', '113', '130', 'llenado', '4', '848', '44', '0,81', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(81, 'jueves 23 de agosto de 2018', '-7365848679', '5963623025', '2', '114', '178', 'Boton', '2', '408', '78,1', '0,77', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(82, 'jueves 23 de agosto de 2018', '-7365870283', '596378456', '2', '115', '32', 'Boton', '2', '437', '68,9', '0,75', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(83, 'jueves 23 de agosto de 2018', '-7365870283', '596378456', '2', '115', '32', 'llenado', '4', '437', '55', '0,79', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(84, 'jueves 23 de agosto de 2018', '-7365871798', '5963892167', '2', '116', '5', 'Boton', '2', '540', '73,5', '0,74', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(85, 'jueves 23 de agosto de 2018', '-7365851982', '5963963725', '2', '117', '96', 'Boton', '2', '376', '75,5', '0,8', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(86, 'jueves 23 de agosto de 2018', '-7365851982', '5963963725', '2', '117', '96', 'llenado', '4', '376', '87,5', '0,78', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(87, 'jueves 23 de agosto de 2018', '-7365842094', '5963839114', '2', '118', '183', 'Boton', '2', '410', '71,5', '0,79', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(88, 'jueves 23 de agosto de 2018', '-7365844107', '5964067711', '2', '119', '134', 'Boton', '2', '480', '71,2', '0,75', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(89, 'jueves 23 de agosto de 2018', '-7365844107', '5964067711', '2', '119', '134', 'llenado', '4', '480', '84,1', '0,75', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(90, 'jueves 23 de agosto de 2018', '-7365841145', '5964154092', '2', '120', '136', 'Boton', '2', '545', '73,5', '0,76', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(91, 'jueves 23 de agosto de 2018', '-7365840557', '5963740549', '2', '121', '208', 'Boton', '2', '472', '79', '0,76', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(92, 'jueves 23 de agosto de 2018', '-7365840338', '5963592226', '2', '122', '232', 'Boton', '2', '720', '80,1', '0,78', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(93, 'jueves 23 de agosto de 2018', '-7365857069', '5963642493', '3', '123', '124', 'Boton', '2', '520', '53,8', '0,74', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(94, 'jueves 23 de agosto de 2018', '-7365865206', '596368118', '3', '124', '70', 'Boton', '2', '450', '74,5', '0,82', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(95, 'jueves 23 de agosto de 2018', '-7365865206', '596368118', '3', '124', '70', 'cuajado', '3', '450', '78,2', '0,65', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(96, 'jueves 23 de agosto de 2018', '-7365863693', '5963580445', '3', '125', '105', 'Boton', '2', '312', '65', '0,73', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(97, 'jueves 23 de agosto de 2018', '-7365879969', '5963641554', '3', '126', '11', 'Boton', '2', '367', '83,5', '0,75', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(98, 'jueves 23 de agosto de 2018', '-7365873138', '5963707754', '3', '127', '30', 'Boton', '2', '423', '77,5', '0,78', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(99, 'jueves 23 de agosto de 2018', '-7365867511', '5963739694', '3', '128', '48', 'Boton', '2', '503', '81', '0,74', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(100, 'jueves 23 de agosto de 2018', '-7365867511', '5963739694', '3', '128', '48', 'cuajado', '3', '503', '79,8', '0,69', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(101, 'jueves 23 de agosto de 2018', '-736583095', '5964170018', '3', '129', '191', 'Boton', '2', '160', '68', '0,77', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(102, 'jueves 23 de agosto de 2018', '-7365833752', '5964217337', '3', '130', '143', 'Boton', '2', '560', '64,5', '0,73', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(103, 'jueves 23 de agosto de 2018', '-736583693', '5964276272', '3', '131', '139', 'Boton', '2', '400', '77,9', '0,78', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(104, 'jueves 23 de agosto de 2018', '-7365844689', '5964313051', '2', '132', '85', 'Boton', '2', '432', '73,5', '0,75', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(105, 'jueves 23 de agosto de 2018', '-7365835379', '5964317801', '3', '133', '140', 'Boton', '2', '488', '75,7', '0,8', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(106, 'jueves 23 de agosto de 2018', '-7365871054', '5963469519', '4', '134', '65', 'Boton', '2', '1200', '46,7', '0,69', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(107, 'jueves 23 de agosto de 2018', '-7365871054', '5963469519', '4', '134', '65', 'cuajado', '3', '1200', '60,3', '0,78', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(108, 'jueves 23 de agosto de 2018', '-7365863342', '596343537', '4', '135', '119', 'Boton', '2', '840', '56,7', '0,79', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(109, 'jueves 23 de agosto de 2018', '-7365863342', '596343537', '4', '135', '119', 'cuajado', '3', '840', '90,1', '0,82', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(110, 'jueves 23 de agosto de 2018', '-7365855018', '5963410447', '4', '136', '173', 'Boton', '2', '748', '126,9', '0,78', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(111, 'jueves 23 de agosto de 2018', '-7365851606', '5963358442', '4', '137', '217', 'Boton', '2', '184', '112,7', '0,79', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(112, 'jueves 23 de agosto de 2018', '-7365851606', '5963358442', '4', '137', '217', 'flor', 'flor', '184', '74,4', '0,66', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(113, 'jueves 23 de agosto de 2018', '-7365850088', '5963256426', '4', '138', '224', 'Boton', '2', '132', '101', '0,81', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(114, 'jueves 23 de agosto de 2018', '-7365850088', '5963256426', '4', '138', '224', 'cuajado', '3', '132', '65,7', '0,77', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(115, 'jueves 23 de agosto de 2018', '-7365861583', '5963342757', '4', '139', '164', 'Boton', '2', '608', '51,9', '0,78', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(116, 'jueves 23 de agosto de 2018', '-7365869552', '596323115', '4', '140', '114', 'Boton', '2', '820', '88,8', '0,72', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(117, 'jueves 23 de agosto de 2018', '-7365884128', '5963340787', '4', '141', '21', 'Boton', '2', '294', '65,7', '0,76', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(118, 'jueves 23 de agosto de 2018', '-7365812152', '5964197414', '4', '142', '301', 'Boton', '2', '280', '83', '0,76', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(119, 'jueves 23 de agosto de 2018', '-7365801232', '5964118908', '4', '143', '359', 'Boton', '2', '800', '81,1', '0,82', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(120, 'jueves 23 de agosto de 2018', '-7365812155', '5964066102', '4', '144', '307', 'Boton', '2', '312', '73,5', '0,74', '26,1', '10,2', '17,3', '85,7', '50', '70,8', '167', '108', 'null', 'null'),
(121, 'jueves 13 de septiembre de 2018', '-7365820715', '5963339709', '1', '101', '390', 'Floracion', '5', 'null', '63,1', '0,77', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(122, 'jueves 13 de septiembre de 2018', '-7365819124', '5963421186', '1', '102', '392', 'Floracion', '5', 'null', '66,2', '0,78', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(123, 'jueves 13 de septiembre de 2018', '-736581832', '5963711139', '1', '103', '344', 'Floracion', '5', 'null', '44,4', '0,76', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(124, 'jueves 13 de septiembre de 2018', '-7365821024', '5963765853', '1', '104', '314', 'Floracion', '5', 'null', '40', '0,81', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(125, 'jueves 13 de septiembre de 2018', '-7365808383', '5963721959', '1', '105', '399', 'Floracion', '5', 'null', '36,2', '0,75', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(126, 'jueves 13 de septiembre de 2018', '-7365811478', '5963774845', '1', '106', '367', 'Floracion', '5', 'null', '39,5', '0,72', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(127, 'jueves 13 de septiembre de 2018', '-7365805716', '5963806449', '1', '107', '401', 'Floracion', '5', 'null', '58,1', '0,74', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(128, 'jueves 13 de septiembre de 2018', '-736582427', '5963682646', '1', '108', '316', 'Floracion', '5', 'null', '46,6', '0,72', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(129, 'jueves 13 de septiembre de 2018', '-7365817531', '5963464629', '1', '109', '393', 'Floracion', '5', 'null', '68', '0,75', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(130, 'jueves 13 de septiembre de 2018', '-7365825367', '5963780416', '2', '110', '291', 'Floracion', '5', 'null', '45', '0,75', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(131, 'jueves 13 de septiembre de 2018', '-7365818732', '5963851438', '2', '111', '312', 'Floracion', '5', 'null', '45,7', '0,8', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(132, 'jueves 13 de septiembre de 2018', '-7365839551', '5963924915', '2', '112', '185', 'Floracion', '5', 'null', '55,6', '0,78', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(133, 'jueves 13 de septiembre de 2018', '-7365849197', '5963900373', '2', '113', '130', 'Floracion', '5', 'null', '53', '0,75', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(134, 'jueves 13 de septiembre de 2018', '-7365848679', '5963623025', '2', '114', '178', 'Floracion', '5', 'null', '40,9', '0,75', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(135, 'jueves 13 de septiembre de 2018', '-7365870283', '596378456', '2', '115', '32', 'Floracion', '5', 'null', '39,5', '0,74', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(136, 'jueves 13 de septiembre de 2018', '-7365871798', '5963892167', '2', '116', '5', 'Floracion', '5', 'null', '29,7', '0,8', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(137, 'jueves 13 de septiembre de 2018', '-7365851982', '5963963725', '2', '117', '96', 'Floracion', '5', 'null', '57,2', '0,79', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(138, 'jueves 13 de septiembre de 2018', '-7365842094', '5963839114', '2', '118', '183', 'Floracion', '5', 'null', '41,8', '0,8', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(139, 'jueves 13 de septiembre de 2018', '-7365844107', '5964067711', '2', '119', '134', 'Floracion', '5', 'null', '57,1', '0,78', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(140, 'jueves 13 de septiembre de 2018', '-7365841145', '5964154092', '2', '120', '136', 'Floracion', '5', 'null', '40,2', '0,73', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(141, 'jueves 13 de septiembre de 2018', '-7365840557', '5963740549', '2', '121', '208', 'Floracion', '5', 'null', '35', '0,75', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(142, 'jueves 13 de septiembre de 2018', '-7365840338', '5963592226', '2', '122', '232', 'Floracion', '5', 'null', '37,6', '0,8', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(143, 'jueves 13 de septiembre de 2018', '-7365857069', '5963642493', '3', '123', '124', 'Floracion', '5', 'null', '39,9', '0,77', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(144, 'jueves 13 de septiembre de 2018', '-7365865206', '596368118', '3', '124', '70', 'Floracion', '5', 'null', '55,7', '0,82', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(145, 'jueves 13 de septiembre de 2018', '-7365863693', '5963580445', '3', '125', '105', 'Floracion', '5', 'null', '41,8', '0,77', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(146, 'jueves 13 de septiembre de 2018', '-7365879969', '5963641554', '3', '126', '11', 'Floracion', '5', 'null', '44,7', '0,78', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(147, 'jueves 13 de septiembre de 2018', '-7365873138', '5963707754', '3', '127', '30', 'Floracion', '5', 'null', '51', '0,8', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(148, 'jueves 13 de septiembre de 2018', '-7365867511', '5963739694', '3', '128', '48', 'Floracion', '5', 'null', '47,2', '0,79', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(149, 'jueves 13 de septiembre de 2018', '-736583095', '5964170018', '3', '129', '191', 'Floracion', '5', 'null', '57,4', '0,7', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(150, 'jueves 13 de septiembre de 2018', '-7365833752', '5964217337', '3', '130', '143', 'Floracion', '5', 'null', '34,1', '0,73', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(151, 'jueves 13 de septiembre de 2018', '-736583693', '5964276272', '3', '131', '139', 'Floracion', '5', 'null', '67,5', '0,8', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(152, 'jueves 13 de septiembre de 2018', '-7365844689', '5964313051', '2', '132', '85', 'Floracion', '5', 'null', '48,1', '0,8', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(153, 'jueves 13 de septiembre de 2018', '-7365835379', '5964317801', '3', '133', '140', 'Floracion', '5', 'null', '42,3', '0,77', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(154, 'jueves 13 de septiembre de 2018', '-7365871054', '5963469519', '4', '134', '65', 'Floracion', '5', 'null', '57,1', '0,81', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(155, 'jueves 13 de septiembre de 2018', '-7365863342', '596343537', '4', '135', '119', 'Floracion', '5', 'null', '55,2', '0,8', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(156, 'jueves 13 de septiembre de 2018', '-7365855018', '5963410447', '4', '136', '173', 'Floracion', '5', 'null', '46,6', '0,78', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(157, 'jueves 13 de septiembre de 2018', '-7365851606', '5963358442', '4', '137', '217', 'Floracion', '5', 'null', '47,3', '0,74', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(158, 'jueves 13 de septiembre de 2018', '-7365850088', '5963256426', '4', '138', '224', 'Floracion', '5', 'null', '47,5', '0,79', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(159, 'jueves 13 de septiembre de 2018', '-7365861583', '5963342757', '4', '139', '164', 'Floracion', '5', 'null', '45,9', '0,78', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(160, 'jueves 13 de septiembre de 2018', '-7365869552', '596323115', '4', '140', '114', 'Floracion', '5', 'null', '35,2', '0,76', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(161, 'jueves 13 de septiembre de 2018', '-7365884128', '5963340787', '4', '141', '21', 'Floracion', '5', 'null', '54,3', '0,79', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(162, 'jueves 13 de septiembre de 2018', '-7365812152', '5964197414', '4', '142', '301', 'Floracion', '5', 'null', '52,5', '0,7', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(163, 'jueves 13 de septiembre de 2018', '-7365801232', '5964118908', '4', '143', '359', 'Floracion', '5', 'null', '59,3', '0,83', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null'),
(164, 'jueves 13 de septiembre de 2018', '-7365812155', '5964066102', '4', '144', '307', 'Floracion', '5', 'null', '37,7', '0,77', '35,8', '5,9', '19,1', '99', '20', '81', '213', '130', 'null', 'null');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipnov_nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `camellon_nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tiempo_nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dosis_nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `costopro_nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `costoman_nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `operario_nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cattoxica_nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado_nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siembra_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `finca_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id`, `tipnov_nov`, `camellon_nov`, `fecha_nov`, `tiempo_nov`, `dosis_nov`, `costopro_nov`, `costoman_nov`, `operario_nov`, `cattoxica_nov`, `estado_nov`, `siembra_id`, `producto_id`, `finca_id`) VALUES
(2, 'Fertilizaciуn foliar', '12', '26 August, 2019', '13', '23', 'Finalizada', '2', '12', '1', '1', 4, 8, 6),
(3, 'Control de malezas', '556', '20 August, 2019', '3', '56', 'Programada', '56', 'jhancarlos', '1', '2', 3, 15, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `Foto_persona` varchar(255) NOT NULL,
  `cc_persona` int(11) NOT NULL,
  `Nombre_persona` varchar(100) NOT NULL,
  `Correo_persona` varchar(150) NOT NULL,
  `Telefono_persona` varchar(50) NOT NULL,
  `Direccion_persona` varchar(100) NOT NULL,
  `Profesion_persona` varchar(50) NOT NULL,
  `Cargo_persona` varchar(50) NOT NULL,
  `Centro_formacion_persona` varchar(150) NOT NULL,
  `Programa_formacion_persona` varchar(100) NOT NULL,
  `Rol_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `Foto_persona`, `cc_persona`, `Nombre_persona`, `Correo_persona`, `Telefono_persona`, `Direccion_persona`, `Profesion_persona`, `Cargo_persona`, `Centro_formacion_persona`, `Programa_formacion_persona`, `Rol_persona`) VALUES
(1, 'avatar-5.png', 0, 'John Marcos Jose', 'Doe', 'john@example.com', '', '', 'Agrícultor', '', '', 0),
(2, 'avatar-1.png', 0, 'Mary Dayan Maria', 'Moe', 'mary@example.com', '', '', 'Productor', '', '', 0),
(3, 'avatar-2.png', 0, 'Julie Antonia', 'Dooley', 'julie@example.com', '', '', 'Cosechador', '', '', 0),
(5, 'avatar-9.png', 234567, 'Jhan Carlos H', 'Jhans', '', '', '', 'Senbrador', '', '', 0),
(6, 'avatar-4.png', 876546, 'Brayan Castellanos', 'Jhons', '', '', '', 'Agrícultor', '', '', 0),
(7, 'avatar-6.png', 765456, 'Esneyder Alfonso', 'Jhains', '', '', '', 'Productor', '', '', 0),
(8, 'avatar-7.png', 98767, 'Guillermo Parada', 'Jhuns', '', '', '', 'Productor', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poligonos_shp`
--

CREATE TABLE `poligonos_shp` (
  `id_files` int(11) NOT NULL,
  `id_finca` int(11) NOT NULL,
  `identificador` varchar(200) NOT NULL,
  `url_poligono_arcgis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programaciones`
--

CREATE TABLE `programaciones` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` date NOT NULL,
  `end_event` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programaciones`
--

INSERT INTO `programaciones` (`id`, `title`, `start_event`, `end_event`) VALUES
(11, 'FERTILIZACION', '2018-06-28', '2018-07-01'),
(15, 'CONTROL DE PLAGAS EN EL CULTIVO ', '2018-07-10', '2018-07-12'),
(16, 'CONTROL DE MAPEO DE NDVI', '2018-07-18', '2018-07-22'),
(17, 'cosecha de maiz pelao', '2018-11-19', '2018-12-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `req_nutricionales_cultivo`
--

CREATE TABLE `req_nutricionales_cultivo` (
  `id_req` int(11) NOT NULL,
  `id_cultivo` int(11) NOT NULL,
  `valor_req` float NOT NULL,
  `descripcion_req` varchar(250) NOT NULL,
  `nombre_req` varchar(100) NOT NULL,
  `etiqueta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `req_nutricionales_cultivo`
--

INSERT INTO `req_nutricionales_cultivo` (`id_req`, `id_cultivo`, `valor_req`, `descripcion_req`, `nombre_req`, `etiqueta`) VALUES
(81, 88, 180, '', 'NITROGENO', 'red'),
(82, 88, 60, '', 'FOSFORO', 'teal'),
(83, 88, 200, '', 'POTASIO', 'blue'),
(84, 88, 10, '', 'MAGNESIO', 'amber'),
(85, 88, 20, '', 'CALCIO', 'orange'),
(86, 88, 0, '', 'AZUFRE', 'purple'),
(87, 88, 2.2, '', 'BORO', 'green'),
(88, 88, 3, '', 'ZINC', 'purple'),
(89, 88, 0, '', 'COBRE', 'green'),
(90, 88, 0, '', 'HIERRO', 'blue-grey darken-4'),
(91, 89, 67, '', 'NITROGENO', 'teal'),
(92, 89, 6, '', 'FOSFORO', 'cyan'),
(93, 89, 4, '', 'POTASIO', 'orange'),
(94, 89, 3, '', 'MAGNESIO', 'brown'),
(95, 89, 7, '', 'CALCIO', 'red'),
(96, 89, 6, '', 'AZUFRE', 'purple'),
(97, 89, 3, '', 'BORO', 'red darken-4'),
(98, 89, 5, '', 'ZINC', 'green darken-4'),
(99, 89, 6, '', 'COBRE', 'orange accent-2'),
(100, 89, 110, '', 'HIERRO', 'red'),
(101, 92, 80, 'kg/ha', 'NITROGENO', ''),
(102, 92, 40, 'kg/ha', 'FOSFORO', 'green'),
(103, 92, 90, 'kg/ha', 'POTASIO', 'teal'),
(104, 92, 12, 'kg/ha', 'MAGNESIO', 'orange'),
(105, 92, 30, 'kg/ha', 'CALCIO', 'red'),
(106, 92, 20, 'kg/ha', 'AZUFRE', 'purple'),
(107, 92, 0, 'kg/ha', 'BORO', 'teal'),
(108, 92, 0, 'kg/ha', 'ZINC', 'red'),
(109, 92, 0, '', 'COBRE', 'green'),
(110, 92, 0, '', 'HIERRO', 'red'),
(111, 88, 0, '', 'MANGANESO', 'purple'),
(112, 93, 80, '', 'NITROGENO', 'teal'),
(113, 93, 30, '', 'FOSFORO', 'cyan'),
(114, 93, 10, '', 'POTASIO', 'orange'),
(115, 93, 9, '', 'MAGNECIO', 'brown'),
(116, 93, 2, '', 'CALCIO', 'red'),
(117, 93, 9, '', 'AZUFRE', 'purple'),
(118, 93, 7, '', 'BORO', 'red darken-4'),
(119, 93, 23, '', 'ZINC', 'green darken-4'),
(120, 93, 0, '', 'COBRE', 'orange accent-2'),
(121, 93, 0, '', 'HIERRO', 'blue-grey darken-4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `req_nutri_est_fenolo_cult`
--

CREATE TABLE `req_nutri_est_fenolo_cult` (
  `id_elemento` int(11) NOT NULL,
  `estado_feno` varchar(30) NOT NULL,
  `id_cultivo` int(11) NOT NULL,
  `N` float NOT NULL,
  `P` float NOT NULL,
  `K` float NOT NULL,
  `Mg` float NOT NULL,
  `Ca` float NOT NULL,
  `Zn` float NOT NULL,
  `Br` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `req_nutri_est_fenolo_cult`
--

INSERT INTO `req_nutri_est_fenolo_cult` (`id_elemento`, `estado_feno`, `id_cultivo`, `N`, `P`, `K`, `Mg`, `Ca`, `Zn`, `Br`) VALUES
(1, '1', 88, 45, 15, 100, 6.3, 3.3, 1, 0.7),
(2, '2', 88, 45, 30, 50, 6.3, 3.3, 1, 0.7),
(3, '3', 88, 90, 15, 50, 6.3, 3.3, 1, 0.7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siembras`
--

CREATE TABLE `siembras` (
  `id_siembra` int(11) NOT NULL,
  `Nombre_siembra` varchar(100) NOT NULL,
  `N_plantas_siembra` int(11) NOT NULL,
  `Descripcion_siembra` varchar(250) NOT NULL,
  `Estado_siembra` varchar(50) NOT NULL,
  `Area_siembra` varchar(30) NOT NULL,
  `Fecha_siembra` varchar(50) NOT NULL,
  `Tiporiego_siembra` varchar(30) NOT NULL,
  `Fteagua_siembra` varchar(30) NOT NULL,
  `Edad_siembra` varchar(50) NOT NULL,
  `Distancia_siembra` varchar(50) NOT NULL,
  `Sanitario_siembra` varchar(10) NOT NULL,
  `Propagacion_siembra` varchar(50) NOT NULL,
  `Registro_siembra` varchar(50) NOT NULL,
  `Suelo_siembra` varchar(50) NOT NULL,
  `Cultivo_siembra` int(11) NOT NULL,
  `Lote` varchar(100) NOT NULL,
  `Departamento` varchar(50) NOT NULL,
  `Municipio` varchar(50) NOT NULL,
  `Vereda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `siembras`
--

INSERT INTO `siembras` (`id_siembra`, `Nombre_siembra`, `N_plantas_siembra`, `Descripcion_siembra`, `Estado_siembra`, `Area_siembra`, `Fecha_siembra`, `Tiporiego_siembra`, `Fteagua_siembra`, `Edad_siembra`, `Distancia_siembra`, `Sanitario_siembra`, `Propagacion_siembra`, `Registro_siembra`, `Suelo_siembra`, `Cultivo_siembra`, `Lote`, `Departamento`, `Municipio`, `Vereda`) VALUES
(3, 'Guayaba regional', 400, '5X5 Arboles de Guayaba Regional Variable', 'Vegetativo', '22', '30 Abril, 2018', 'Si', 'Dron', '1 - 2 Años', '3', 'Fábrica', 'Semilla', 'assd', 'sdsd', 88, '1 Hect', 'Santander', 'VELEZ', 'PEÑA BLANCA'),
(4, 'Mora castilla', 1600, 'MN', 'Floriación', '2', '18 Abril, 2018', 'No', 'Dron', '3 - 4 Años', '2', 'Na', 'Ninguna', 'YY', 'GW', 92, '2 Hect', 'Santander', 'BOLIVAR', 'ALTO DE UCRE'),
(5, 'Durazno', 700, 'Durazno regional', 'Produccion', '34', '5 Marzo, 2018', 'Si', 'Tractor', '2 - 3 Años', '', 'Fábrica', 'Semilla', '33', 'Arenoso', 89, 'Vikingos', 'Santander', 'VELEZ', 'POZO NEGRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siembras_finca`
--

CREATE TABLE `siembras_finca` (
  `id_fincas_siembras` int(11) NOT NULL,
  `id_finca` int(11) NOT NULL,
  `id_siembra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `siembras_finca`
--

INSERT INTO `siembras_finca` (`id_fincas_siembras`, `id_finca`, `id_siembra`) VALUES
(12, 5, 4),
(16, 5, 3),
(17, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_details`
--

CREATE TABLE `user_details` (
  `CustomerID` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(50) NOT NULL,
  `user_type` enum('master','user') NOT NULL,
  `user_image` varchar(150) NOT NULL,
  `user_status` enum('Active','Inactive') NOT NULL,
  `Foto_persona` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_details`
--

INSERT INTO `user_details` (`CustomerID`, `user_email`, `user_password`, `CustomerName`, `user_name`, `Address`, `PostalCode`, `City`, `State`, `user_type`, `user_image`, `user_status`, `Foto_persona`) VALUES
(45124, 'invitado@fertisuelos.com', '$2y$10$mfMXnH.TCmg5tlYRhqjxu.ILly8s9.qsLKOpyxgUl6h1fZt6x/B5C', 'Invitado', 'Invitado', '', '', 'Medellín', 'Antioquia', 'user', 'no_user.jpg', 'Active', 'john@example.com'),
(45133, 'jero2903@gmail.com', '$2y$10$DtbunZI56BnSckQ4QtYPl.n8DDsccpQxdBUkbd7gs8p7rW4xuoK76', 'Jeiber armando rojas', 'jeiber2019', '', '', '', '', 'master', '', 'Active', 'john@example.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vars_significativas_cultivo`
--

CREATE TABLE `vars_significativas_cultivo` (
  `id_varsig` int(11) NOT NULL,
  `textura` varchar(150) DEFAULT NULL,
  `mo` float NOT NULL,
  `ph` float NOT NULL,
  `ce` float NOT NULL,
  `cice` float NOT NULL,
  `salinidad` float NOT NULL,
  `id_cultivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vars_significativas_cultivo`
--

INSERT INTO `vars_significativas_cultivo` (`id_varsig`, `textura`, `mo`, `ph`, `ce`, `cice`, `salinidad`, `id_cultivo`) VALUES
(3, 'Franco', 0, 5, 6, 3, 3, 90),
(4, 'Limoso', 0, 4, 55, 6, 6, 89),
(5, 'Arcilloso', 0, 2, 2, 3, 3, 88),
(6, 'Franco arcilloso', 0, 0, 0, 0, 0, 92),
(7, 'Arenoso', 0, 5, 0.12, 1, 1, 93);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis_foliares`
--
ALTER TABLE `analisis_foliares`
  ADD PRIMARY KEY (`id_analisis`),
  ADD KEY `cabecera_id` (`cabecera_id`),
  ADD KEY `cabecera_id_2` (`cabecera_id`);

--
-- Indices de la tabla `analisis_suelos`
--
ALTER TABLE `analisis_suelos`
  ADD PRIMARY KEY (`id_analisis`),
  ADD KEY `cabecera_id` (`cabecera_id`),
  ADD KEY `cabecera_id_2` (`cabecera_id`);

--
-- Indices de la tabla `anas_fol_pfertil`
--
ALTER TABLE `anas_fol_pfertil`
  ADD PRIMARY KEY (`id_elemento`),
  ADD UNIQUE KEY `id_p_fertil` (`id_p_fertil`),
  ADD UNIQUE KEY `id_cabecera_fol_2` (`id_cabecera_fol`,`id_p_fertil`),
  ADD UNIQUE KEY `id_cabecera_fol_3` (`id_cabecera_fol`,`id_p_fertil`),
  ADD KEY `id_cabecera_fol` (`id_cabecera_fol`,`id_p_fertil`);

--
-- Indices de la tabla `anas_suel_pfertil`
--
ALTER TABLE `anas_suel_pfertil`
  ADD PRIMARY KEY (`id_elemento`);

--
-- Indices de la tabla `ana_foliar_elementos`
--
ALTER TABLE `ana_foliar_elementos`
  ADD PRIMARY KEY (`id_ana_elementos`),
  ADD KEY `cabecera_id` (`cabecera_id`);

--
-- Indices de la tabla `ana_suelo_elementos`
--
ALTER TABLE `ana_suelo_elementos`
  ADD PRIMARY KEY (`id_ana_elementos`),
  ADD KEY `cabecera_id` (`cabecera_id`);

--
-- Indices de la tabla `archivos_ana_suelo`
--
ALTER TABLE `archivos_ana_suelo`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `archivos_finca`
--
ALTER TABLE `archivos_finca`
  ADD PRIMARY KEY (`id_archivo`);

--
-- Indices de la tabla `cabecera_foliar`
--
ALTER TABLE `cabecera_foliar`
  ADD PRIMARY KEY (`id_cabecera`),
  ADD KEY `Cultivo_id` (`Siembra_id`);

--
-- Indices de la tabla `cabecera_suelo`
--
ALTER TABLE `cabecera_suelo`
  ADD PRIMARY KEY (`id_cabecera`),
  ADD KEY `Cultivo_id` (`Siembra_id`);

--
-- Indices de la tabla `cultivos`
--
ALTER TABLE `cultivos`
  ADD PRIMARY KEY (`id_cultivo`);

--
-- Indices de la tabla `cultivos_siembra`
--
ALTER TABLE `cultivos_siembra`
  ADD PRIMARY KEY (`id_cultivos_siembra`);

--
-- Indices de la tabla `cultivo_elementos`
--
ALTER TABLE `cultivo_elementos`
  ADD KEY `cultivo_id` (`elemento_id`),
  ADD KEY `cultivo_id_2` (`cultivo_id`);

--
-- Indices de la tabla `depar_munic_finca`
--
ALTER TABLE `depar_munic_finca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`id_elemento`);

--
-- Indices de la tabla `fertilizantes`
--
ALTER TABLE `fertilizantes`
  ADD PRIMARY KEY (`id_fertilizante`);

--
-- Indices de la tabla `fincas`
--
ALTER TABLE `fincas`
  ADD PRIMARY KEY (`id_finca`),
  ADD KEY `Persona_id` (`Propietario`);

--
-- Indices de la tabla `matriz_datos_nitrogeno`
--
ALTER TABLE `matriz_datos_nitrogeno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `poligonos_shp`
--
ALTER TABLE `poligonos_shp`
  ADD PRIMARY KEY (`id_files`);

--
-- Indices de la tabla `programaciones`
--
ALTER TABLE `programaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `req_nutricionales_cultivo`
--
ALTER TABLE `req_nutricionales_cultivo`
  ADD PRIMARY KEY (`id_req`);

--
-- Indices de la tabla `req_nutri_est_fenolo_cult`
--
ALTER TABLE `req_nutri_est_fenolo_cult`
  ADD PRIMARY KEY (`id_elemento`);

--
-- Indices de la tabla `siembras`
--
ALTER TABLE `siembras`
  ADD PRIMARY KEY (`id_siembra`);

--
-- Indices de la tabla `siembras_finca`
--
ALTER TABLE `siembras_finca`
  ADD PRIMARY KEY (`id_fincas_siembras`);

--
-- Indices de la tabla `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indices de la tabla `vars_significativas_cultivo`
--
ALTER TABLE `vars_significativas_cultivo`
  ADD PRIMARY KEY (`id_varsig`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisis_foliares`
--
ALTER TABLE `analisis_foliares`
  MODIFY `id_analisis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `analisis_suelos`
--
ALTER TABLE `analisis_suelos`
  MODIFY `id_analisis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `anas_fol_pfertil`
--
ALTER TABLE `anas_fol_pfertil`
  MODIFY `id_elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `anas_suel_pfertil`
--
ALTER TABLE `anas_suel_pfertil`
  MODIFY `id_elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

--
-- AUTO_INCREMENT de la tabla `ana_foliar_elementos`
--
ALTER TABLE `ana_foliar_elementos`
  MODIFY `id_ana_elementos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `ana_suelo_elementos`
--
ALTER TABLE `ana_suelo_elementos`
  MODIFY `id_ana_elementos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de la tabla `archivos_ana_suelo`
--
ALTER TABLE `archivos_ana_suelo`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `archivos_finca`
--
ALTER TABLE `archivos_finca`
  MODIFY `id_archivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cultivos`
--
ALTER TABLE `cultivos`
  MODIFY `id_cultivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `cultivos_siembra`
--
ALTER TABLE `cultivos_siembra`
  MODIFY `id_cultivos_siembra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `depar_munic_finca`
--
ALTER TABLE `depar_munic_finca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `elementos`
--
ALTER TABLE `elementos`
  MODIFY `id_elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `fertilizantes`
--
ALTER TABLE `fertilizantes`
  MODIFY `id_fertilizante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `fincas`
--
ALTER TABLE `fincas`
  MODIFY `id_finca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `matriz_datos_nitrogeno`
--
ALTER TABLE `matriz_datos_nitrogeno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `poligonos_shp`
--
ALTER TABLE `poligonos_shp`
  MODIFY `id_files` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programaciones`
--
ALTER TABLE `programaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `req_nutricionales_cultivo`
--
ALTER TABLE `req_nutricionales_cultivo`
  MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT de la tabla `req_nutri_est_fenolo_cult`
--
ALTER TABLE `req_nutri_est_fenolo_cult`
  MODIFY `id_elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `siembras`
--
ALTER TABLE `siembras`
  MODIFY `id_siembra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `siembras_finca`
--
ALTER TABLE `siembras_finca`
  MODIFY `id_fincas_siembras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `user_details`
--
ALTER TABLE `user_details`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45134;

--
-- AUTO_INCREMENT de la tabla `vars_significativas_cultivo`
--
ALTER TABLE `vars_significativas_cultivo`
  MODIFY `id_varsig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `analisis_suelos`
--
ALTER TABLE `analisis_suelos`
  ADD CONSTRAINT `analisis_suelos_ibfk_1` FOREIGN KEY (`cabecera_id`) REFERENCES `cabecera_suelo` (`id_cabecera`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ana_suelo_elementos`
--
ALTER TABLE `ana_suelo_elementos`
  ADD CONSTRAINT `ana_suelo_elementos_ibfk_1` FOREIGN KEY (`cabecera_id`) REFERENCES `cabecera_suelo` (`id_cabecera`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fincas`
--
ALTER TABLE `fincas`
  ADD CONSTRAINT `fincas_ibfk_1` FOREIGN KEY (`Propietario`) REFERENCES `personas` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
