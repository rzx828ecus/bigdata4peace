-- phpMyAdmin SQL Dump
-- version 4.1.14.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2014 at 07:37 AM
-- Server version: 5.1.73-log
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `thisandy_stufflike`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_pw` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `twitter_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coordinates` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `story` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `connection_proceeded` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=129 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_pw`, `date_created`, `twitter_name`, `country`, `coordinates`, `story`, `connection_proceeded`) VALUES
(27, '', '', '2014-10-11 15:07:38', '14k_ddfresh', 'Switzerland', '47.159384, 8.357749', '', 0),
(101, '', '', '2014-10-12 03:24:54', 'RepWalterJones', 'Republic of the Philippines', '9.893671, 124.0047734', '', 0),
(100, '', '', '2014-10-12 03:24:54', 'ZANVDEM', 'United States', '39.908312, -82.121534', '', 0),
(99, '', '', '2014-10-12 03:00:19', 'Rafiq_al_Taneen', 'Canada', '51.619813, -106.2879992', '', 0),
(98, '', '', '2014-10-12 03:00:19', 'Carydc', 'United States', '25.837092, -106.645646', '', 0),
(97, '', '', '2014-10-12 03:00:19', 'wavetossed', 'United States', '45.5825007, -122.7134422', '', 0),
(96, '', '', '2014-10-12 02:59:15', 'BLIKOPENER333', 'The Netherlands', '50.750449, 3.2976616', '', 0),
(95, '', '', '2014-10-12 02:59:15', 'NewAppDev', 'United States Minor Outlying Islands', '-0.38876718499994, -177.389597134', '', 0),
(94, '', '', '2014-10-12 02:59:15', 'epaulnet', 'Spain', '39.3869594, -0.6170844', '', 0),
(26, '', '', '2014-10-11 15:06:40', 'HillSoMe', 'Germany', '53.395118, 8.4201604', '', 0),
(23, '', '', '2014-10-11 14:13:24', 'chdrakon', 'Switzerland', '45.8177919, 5.955894', '', 0),
(24, '', '', '2014-10-11 14:13:24', 'tkornblit', 'United States', '40.477383, -79.76259', '', 0),
(28, '', '', '2014-10-11 15:07:38', 'K_A_Y_E_79', 'United Kingdom', '51.286606, -0.5093057', '', 0),
(29, '', '', '2014-10-11 15:21:04', 'mullenmaniac', 'New Zealand', '-44.916028, 170.559641', '', 0),
(30, '', '', '2014-10-11 15:21:04', 'mistakeswaggg_', 'India', '32.2725637, 75.6641217', '', 0),
(31, '', '', '2014-10-11 15:23:16', 'xavieraldekoa', 'South Africa', '-34.8342468, 16.4478239', '', 0),
(32, '', '', '2014-10-11 15:28:43', 'p1966k', 'United Kingdom', '51.522076, 0.624134', '', 0),
(33, '', '', '2014-10-11 15:28:43', 'StellsBackUp', 'United Kingdom', '49.8825312, -6.3651943', '', 0),
(34, '', '', '2014-10-11 15:28:43', 'KayBrannigan', 'United Kingdom', '53.9185375, -1.6997546', '', 0),
(35, '', '', '2014-10-11 15:32:19', 'ChrissStreet', 'United States', '33.563618, -117.9582193', '', 0),
(36, '', '', '2014-10-11 15:32:19', 'Negation2010', 'France', '45.7998238, 6.5659792', '', 0),
(37, '', '', '2014-10-11 15:37:38', 'raging545', 'Canada', '42.824496, -81.391247', '', 0),
(38, '', '', '2014-10-11 15:37:38', 'MarQs__', 'Germany', '47.270127, 5.8663566', '', 0),
(39, '', '', '2014-10-11 15:49:49', 'TimothyMcAll', 'Germany', '51.8218, 10.487856', '', 0),
(40, '', '', '2014-10-11 15:49:49', '_wormy', 'France', '50.0118135, 1.3869553', '', 0),
(41, '', '', '2014-10-11 15:49:49', 'SergeHalytsky', 'Canada', '43.403221, -79.639319', '', 0),
(42, '', '', '2014-10-11 15:51:24', 'Rich_893', 'Mexico', '19.31014, -99.2333498', '', 0),
(43, '', '', '2014-10-11 15:51:24', 'jackmackiev', 'United Kingdom', '52.946147, -0.079288', '', 0),
(44, '', '', '2014-10-11 15:51:53', 'davidemanno2002', 'United Kingdom', '53.9185375, -1.6997546', '', 0),
(45, '', '', '2014-10-11 15:51:53', 'MzABoogieZDOWN', 'United States', '41.315693, -72.009201', '', 0),
(46, '', '', '2014-10-11 16:07:04', 'Liveuamap', 'Ukraine', '44.38643, 22.1357201', '', 0),
(47, '', '', '2014-10-11 16:07:04', 'realityymind', 'United States', '35.968624, -96.0656278', '', 0),
(48, '', '', '2014-10-11 16:07:04', 'AChristieMiller', 'Turkey', '40.8027337, 27.9713074', '', 0),
(49, '', '', '2014-10-11 16:12:13', 'OS1954', 'United Kingdom', '51.286606, -0.5093057', '', 0),
(50, '', '', '2014-10-11 16:12:13', 'PeterNimmo1', 'Canada', '45.605403, -61.748575', '', 0),
(51, '', '', '2014-10-11 16:13:17', 'TokyoRose_01', 'France', '48.4036637, -2.2014228', '', 0),
(52, '', '', '2014-10-11 16:13:17', 'krstae', 'The Netherlands', '51.6437527, 3.7181568', '', 0),
(53, '', '', '2014-10-11 16:13:17', 'Japan_Australia', 'Japan', '24.045641839124, 122.93319700114', '', 0),
(54, '', '', '2014-10-11 16:23:39', 'GGStillmann', 'Russia', '59.633725, 29.424925', '', 0),
(55, '', '', '2014-10-11 16:23:39', 'Joosje', 'Russia', '54.2518002, 35.1512983', '', 0),
(56, '', '', '2014-10-11 16:27:50', 'DonetskieVesti', 'Ukraine', '44.38643, 22.1357201', '', 0),
(57, '', '', '2014-10-11 16:29:02', 'russian_guy1', 'Russia', '55.751484,37.620457', '', 0),
(58, '', '', '2014-10-11 16:29:02', 'ukrainian_guy234435', 'Ukraine', '50.432315,30.534621', '', 0),
(59, '', '', '2014-10-11 16:29:02', 'russian_girl435', 'Russia', '56.833444,60.626885', '', 0),
(60, '', '', '2014-10-11 16:29:02', 'russain_guy2343234234', 'Russia', '59.919499,30.344164', '', 0),
(61, '', '', '2014-10-11 16:29:02', 'ukrainian_guy233333', 'Ukraine', '48.453907, 35.096309', '', 0),
(62, '', '', '2014-10-11 16:41:36', 'olgatokariuk', 'Ukraine', '44.38643, 22.1357201', '', 0),
(63, '', '', '2014-10-11 16:41:36', 'radeksikorski', 'Poland', '49.0018097, 14.122353', '', 0),
(64, '', '', '2014-10-11 16:57:26', 'Andre_Verzaal', 'The Netherlands', '52.0946723, 4.6178417', '', 0),
(65, '', '', '2014-10-11 16:57:26', 'spannnish', 'United States', '39.29019, -76.569645', '', 0),
(66, '', '', '2014-10-11 16:59:34', 'KlifmanFreddie_', 'South Africa', '-26.6670719, 30.6473754', '', 0),
(67, '', '', '2014-10-11 17:09:53', 'JesusFromMars', 'Finland', '59.675274, 19.1686845', '', 0),
(68, '', '', '2014-10-11 17:09:53', 'HSfiPolitiikka', 'Finland', '60.021032, 24.78281', '', 0),
(69, '', '', '2014-10-11 17:14:46', 'zuehlke_group', 'Brazil', '-16.5711435, -49.2613323', '', 0),
(70, '', '', '2014-10-11 17:14:46', 'zolertia', 'Spain', '41.1927266, 1.3606178', '', 0),
(71, '', '', '2014-10-11 17:14:46', 'zis_meyer', 'Christmas Island', '-10.569656, 105.5331955', '', 0),
(72, '', '', '2014-10-11 17:19:05', 'Furfuroll', 'United Kingdom', '55.630462, -4.409612', '', 0),
(73, '', '', '2014-10-11 17:19:05', 'keydreami', 'Russia', '50.5001, 50.836056', '', 0),
(74, '', '', '2014-10-11 17:29:20', 'NicolaoLorenzo', 'Mexico', '24.1265721, -110.3006474', '', 0),
(75, '', '', '2014-10-11 17:29:20', 'TernanaNewsit', 'Italy', '42.364412998125, 11.89194000007', '', 0),
(76, '', '', '2014-10-11 17:39:37', 'kikikanri_kinky', 'Japan', '24.224717998944, 138.94697600164', '', 0),
(77, '', '', '2014-10-11 17:44:51', 'EmeraudeALB', 'United Kingdom', '52.5377961, -2.6832559', '', 0),
(78, '', '', '2014-10-11 17:44:51', 'pointsonpaper', 'United Kingdom', '57.550925, -3.471658', '', 0),
(79, '', '', '2014-10-11 18:02:28', 'EuromaidanPR', 'Ukraine', '44.38643, 22.1357201', '', 0),
(80, '', '', '2014-10-11 18:02:28', 'bmcgu8', 'United States', '32.192285, -111.011813', '', 0),
(81, '', '', '2014-10-11 18:03:32', 'nsanzo', 'Spain', '27.6377504, -18.1606948', '', 0),
(82, '', '', '2014-10-11 18:03:32', 'DanielJOllero', 'Spain', '39.8845366, -4.5791745', '', 0),
(83, '', '', '2014-10-11 18:03:32', 'ValLisitsa', 'United States', '29.5911, -98.43538', '', 0),
(84, '', '', '2014-10-11 18:06:47', 'k_graefenhain', 'Switzerland', '47.159384, 8.357749', '', 0),
(85, '', '', '2014-10-11 18:10:43', 'OpenDataZurich', 'Switzerland', '47.159384, 8.357749', '', 0),
(86, '', '', '2014-10-11 18:24:06', 'Humankonzept', 'Switzerland', '45.8177919, 5.955894', '', 0),
(87, '', '', '2014-10-11 18:24:06', 'Worldmyths', 'Mexico', '25.6747501, -100.2155841', '', 0),
(88, '', '', '2014-10-11 18:35:34', 'fossil12', 'Switzerland', '45.8177919, 5.955894', '', 0),
(89, '', '', '2014-10-11 18:35:34', 'alainp', 'The Netherlands', '53.109086286028, 5.3872415676101', '', 0),
(90, '', '', '2014-10-11 18:35:35', 'aral', 'Australia', '-35.02334799, 138.51223992', '', 0),
(91, '', '', '2014-10-11 18:43:32', 'chrisbrulak', 'Canada', '41.676329, -141.5610942', '', 0),
(92, '', '', '2014-10-11 18:52:37', 'SixClicks', 'Germany', '52.338079, 13.088304', '', 0),
(93, '', '', '2014-10-11 18:52:37', 'ElevenYellow', 'Republic of the Philippines', '4.6422419, 116.9301176', '', 0),
(102, '', '', '2014-10-12 04:04:16', 'aljeyster', 'Brazil', '-17.8416882, -40.3709418', '', 0),
(103, '', '', '2014-10-12 04:35:59', 'boris1550', 'Russia', '59.633725, 29.424925', '', 0),
(104, '', '', '2014-10-12 04:35:59', 'EliasZotov', 'Russia', '56.051781, 40.1641428', '', 0),
(105, '', '', '2014-10-12 04:38:07', 'ppsabengel', 'United States', '39.115552, -122.885537', '', 0),
(106, '', '', '2014-10-12 04:38:07', 'NesterTweets', 'Brazil', '-33.7510506, -73.991482', '', 0),
(107, '', '', '2014-10-12 04:48:16', 'oliviersarbil', 'Puerto Rico', '18.037078, -67.114143', '', 0),
(108, '', '', '2014-10-12 04:48:16', 'Agerlid', 'United States', '45.67109, -111.256013', '', 0),
(109, '', '', '2014-10-12 04:48:16', 'lemondefr', 'France', '48.8155214, 2.2241006', '', 0),
(110, '', '', '2014-10-12 05:10:45', 'breathingforme', 'Singapore', '1.1889229, 103.6103609', '', 0),
(111, '', '', '2014-10-12 05:10:45', 'Merks_EoA', 'United States', '29.5039665, -98.6094335', '', 0),
(112, '', '', '2014-10-12 05:13:50', 'CalicoInsite', 'Mexico', '20.7182956, -103.3785168', '', 0),
(113, '', '', '2014-10-12 05:13:50', 'historical_pict', 'United States', '38.403186, -84.820272', '', 0),
(114, '', '', '2014-10-12 05:13:50', 'HumanRtsV', 'Brazil', '-22.853315, -42.970798', '', 0),
(115, '', '', '2014-10-12 05:14:53', 'whatevabiteme', 'The Netherlands', '50.750449, 5.5661376', '', 0),
(116, '', '', '2014-10-12 05:14:53', 'GnosticMedia', 'Malaysia', '2.289367, 102.4096298', '', 0),
(117, '', '', '2014-10-12 05:20:05', 'TheBraveLass', 'United States', '26.921463, -82.402365', '', 0),
(118, '', '', '2014-10-12 05:20:05', 'hedwyg', 'United States', '43.530356, -83.898127', '', 0),
(119, '', '', '2014-10-12 05:21:09', 'coachanthony79', 'United States', '40.2126737, -79.2494944', '', 0),
(120, '', '', '2014-10-12 05:21:09', 'StrangeFunnies', 'United States', '17.623468, -179.231086', '', 0),
(121, '', '', '2014-10-12 05:28:42', 'LastKingOfKings', 'United States', '33.378346, -110.833315', '', 0),
(122, '', '', '2014-10-12 05:28:42', 'KrispyVerbakel', 'Australia', '-33.61503204, 115.65099684', '', 0),
(123, '', '', '2014-10-12 05:30:47', 'ArafatKabirUpol', 'United States', '40.4878376, -89.061798', '', 0),
(124, '', '', '2014-10-12 05:30:47', 'PrognosysDirect', 'United States', '42.3454828, -71.049114', '', 0),
(125, '', '', '2014-10-12 05:30:47', 'Alex_Panetta', 'United States', '38.801826, -77.119401', '', 0),
(126, '', '', '2014-10-12 05:33:52', 'GuttuG', 'India', '14.7520281, 73.6757345', '', 0),
(127, '', '', '2014-10-12 05:33:52', 'SwedishCanary', 'United States', '29.386501, -98.448505', '', 0),
(128, '', '', '2014-10-12 05:33:52', '_yes2life', 'India', '28.3976574, 76.8425202', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_connection`
--

CREATE TABLE IF NOT EXISTS `user_has_connection` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_fid` int(255) NOT NULL,
  `second_fid` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=75 ;

--
-- Dumping data for table `user_has_connection`
--

INSERT INTO `user_has_connection` (`id`, `first_fid`, `second_fid`) VALUES
(12, 0, 31),
(11, 29, 30),
(10, 27, 28),
(9, 23, 24),
(13, 32, 33),
(14, 32, 34),
(15, 35, 36),
(16, 37, 38),
(17, 39, 40),
(18, 39, 41),
(19, 42, 43),
(20, 34, 45),
(21, 46, 47),
(22, 46, 48),
(23, 28, 50),
(24, 51, 52),
(25, 51, 53),
(26, 54, 55),
(27, 57, 0),
(28, 57, 58),
(29, 60, 61),
(30, 57, 0),
(31, 46, 63),
(32, 64, 65),
(33, 57, 0),
(34, 57, 0),
(35, 64, 66),
(36, 57, 0),
(37, 57, 0),
(38, 57, 0),
(39, 57, 0),
(40, 57, 0),
(41, 67, 68),
(42, 69, 70),
(43, 69, 71),
(44, 72, 73),
(45, 74, 75),
(46, 77, 78),
(47, 46, 80),
(48, 81, 82),
(49, 81, 83),
(50, 23, 87),
(51, 23, 89),
(52, 23, 90),
(53, 39, 91),
(54, 92, 93),
(55, 94, 95),
(56, 94, 96),
(57, 97, 98),
(58, 97, 99),
(59, 100, 101),
(60, 54, 104),
(61, 105, 106),
(62, 107, 108),
(63, 107, 109),
(64, 110, 111),
(65, 112, 113),
(66, 112, 114),
(67, 115, 116),
(68, 117, 118),
(69, 119, 120),
(70, 121, 122),
(71, 123, 124),
(72, 123, 125),
(73, 126, 127),
(74, 126, 128);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_session`
--

CREATE TABLE IF NOT EXISTS `user_has_session` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `fid` int(255) NOT NULL,
  `session_string` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_has_session`
--

INSERT INTO `user_has_session` (`id`, `fid`, `session_string`, `date_created`) VALUES
(5, 11, 'lo0o9ma32m4imdtld89eouuj82', '2014-10-11 10:23:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
