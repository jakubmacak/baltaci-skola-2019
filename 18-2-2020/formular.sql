-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost
-- Vytvořeno: Úte 18. úno 2020, 07:40
-- Verze serveru: 10.4.6-MariaDB
-- Verze PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `formular`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `fomrular`
--

CREATE TABLE `fomrular` (
  `id` int(255) NOT NULL,
  `jmeno` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `prijmeni` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `telefon` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `kontaktovatTelefonem` tinyint(1) NOT NULL,
  `kontaktovatEmailem` tinyint(1) NOT NULL,
  `zprava` text COLLATE utf8_czech_ci DEFAULT NULL,
  `pohlavi` varchar(10) COLLATE utf8_czech_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `fomrular`
--
ALTER TABLE `fomrular`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `fomrular`
--
ALTER TABLE `fomrular`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
