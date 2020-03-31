-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `zakaznik`;
CREATE TABLE `zakaznik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `datum_narozeni` date NOT NULL,
  `mesto` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci DEFAULT NULL,
  `je_zena` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `zakaznik` (`id`, `jmeno`, `prijmeni`, `datum_narozeni`, `mesto`, `je_zena`) VALUES
(1,	'Petr',	'Novák',	'1990-01-01',	'Zlín',	0),
(2,	'Jakub',	'Žebř',	'2000-12-01',	'Otrokovice',	0),
(3,	'Jana',	'Mladá',	'1995-02-05',	'Praha',	1),
(4,	'Evženie',	'Sedmikrásková',	'2002-02-02', NULL,	1),
(5,	'Přemek',	'Podlaha',	'1970-01-09',	NULL,	0);

DROP TABLE IF EXISTS `objednavka`;
CREATE TABLE `objednavka` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum_vytvoreni` datetime NOT NULL,
  `vyrizeno` tinyint(1) NOT NULL,
  `zakaznik_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `zakaznik_id` (`zakaznik_id`),
  CONSTRAINT `objednavka_ibfk_1` FOREIGN KEY (`zakaznik_id`) REFERENCES `zakaznik` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `objednavka` (`id`, `datum_vytvoreni`, `vyrizeno`, `zakaznik_id`) VALUES
(1,	'2020-02-10 20:00:00',	0,	1),
(2,	'2020-02-10 20:15:00',	1,	5),
(3,	'2020-02-10 22:00:00',	0,	4);

DROP TABLE IF EXISTS `polozka_objednavky`;
CREATE TABLE `polozka_objednavky` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `objednavka_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `objednavka_id` (`objednavka_id`),
  CONSTRAINT `polozka_objednavky_ibfk_1` FOREIGN KEY (`objednavka_id`) REFERENCES `objednavka` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `polozka_objednavky` (`id`, `nazev`, `cena`, `objednavka_id`) VALUES
(1,	'iPhone 6s',	7500,	1),
(2,	'Notebook HP',	15000,	1),
(3,	'Rychlovarná konvice',	550,	2),
(4,	'Garmin Vivoactive',	4500,	3),
(5,	'Reprosoustava',	15000,	3),
(6,	'Gril',	2000,	2);

-- 2020-02-11 04:42:07
