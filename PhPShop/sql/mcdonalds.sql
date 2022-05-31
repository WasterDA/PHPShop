-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Nov 2021 um 15:26
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mcdonalds`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_burger`
--

CREATE TABLE `tbl_burger` (
  `id` int(255) NOT NULL,
  `produkt_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `bild` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `preis` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_burger`
--

INSERT INTO `tbl_burger` (`id`, `produkt_name`, `bild`, `preis`) VALUES
(1, 'Hallo', 'ich.png', 19),
(2, 'Hamburger Royal TS\r\n\r\n', 'HamburgerRoyalTS.png\r\n', 4),
(3, 'Cheeseburger', 'Cheeseburger.png', 2),
(4, 'Dopple Cheeseburger', 'DoppleCheeseburger.png', 4),
(5, 'Hamburger Royal Käse', 'HamburgerRoyalKäse.png', 5),
(6, 'Big Rösti', 'BigRösti.png', 6),
(7, 'Homestyle Crispy Chicken', 'HomestyleCrispyChicken.png', 10),
(8, 'Veggie Burger', 'VeggieBurger.png', 6);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_desert`
--

CREATE TABLE `tbl_desert` (
  `id` int(255) NOT NULL,
  `produkt_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `bild` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `preis` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_desert`
--

INSERT INTO `tbl_desert` (`id`, `produkt_name`, `bild`, `preis`) VALUES
(1, 'McFlurry Oreo', 'McFlurryOreo.png', 3),
(2, 'Vanilla Cone', 'VanillaCone.png', 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_fruestueck`
--

CREATE TABLE `tbl_fruestueck` (
  `id` int(255) NOT NULL,
  `produkt_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `bild` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `preis` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_fruestueck`
--

INSERT INTO `tbl_fruestueck` (`id`, `produkt_name`, `bild`, `preis`) VALUES
(1, 'McWrap', 'McWrap.png', 0),
(2, 'Bagel', 'Bagel.png', 10),
(3, 'Buttercroissant', 'Buttercroissant.png', 3),
(4, '\r\nCafé Small', 'CafeSmall.png', 3),
(5, 'McFlurry Oreo', 'McFlurryOreo.png', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_getraenke`
--

CREATE TABLE `tbl_getraenke` (
  `id` int(255) NOT NULL,
  `produkt_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `bild` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `preis` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_getraenke`
--

INSERT INTO `tbl_getraenke` (`id`, `produkt_name`, `bild`, `preis`) VALUES
(1, 'Cola', 'Cola.png', 2),
(2, 'Cola Zero', 'ColaZero.png', 3),
(3, 'Cola Vanille', 'ColaVanille.png', 6),
(4, 'Fanta', 'Fanta', 2),
(5, 'Sprite', 'Sprite.png', 6),
(6, 'Fuzetea Zitrone', 'FuzeteaZitrone.png', 4),
(7, 'Fuzetea Pfirsich', 'FuzeteaPfirsisch.png', 4),
(8, 'Fanta Erdbeer', 'FantaErdbeer.png', 4),
(9, 'Cola', 'Cola.png', 2),
(10, 'Cola Zero', 'ColaZero.png', 3),
(11, 'Cola Vanille', 'ColaVanille.png', 6),
(12, 'Fanta', 'Fanta', 2),
(13, 'Sprite', 'Sprite.png', 6),
(14, 'Fuzetea Zitrone', 'FuzeteaZitrone.png', 4),
(15, 'Fuzetea Pfirsich', 'FuzeteaPfirsisch.png', 4),
(16, 'Fanta Erdbeer', 'FantaErdbeer.png', 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(255) NOT NULL,
  `username` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `password`, `email`, `age`) VALUES
(18, 'Daniel', '123', 'WasterD@Outlook.com', 10);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tbl_burger`
--
ALTER TABLE `tbl_burger`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tbl_desert`
--
ALTER TABLE `tbl_desert`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tbl_fruestueck`
--
ALTER TABLE `tbl_fruestueck`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tbl_getraenke`
--
ALTER TABLE `tbl_getraenke`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `tbl_burger`
--
ALTER TABLE `tbl_burger`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `tbl_desert`
--
ALTER TABLE `tbl_desert`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `tbl_fruestueck`
--
ALTER TABLE `tbl_fruestueck`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `tbl_getraenke`
--
ALTER TABLE `tbl_getraenke`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT für Tabelle `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
