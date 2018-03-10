-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Mrz 2018 um 15:42
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr14_ayse_uluc_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `address`
--

INSERT INTO `address` (`address_id`, `location`, `street`, `postal_code`, `city`) VALUES
(1, 'CasaNova Vienna', 'Dorotheergasse 6-8', 1010, 'Wien'),
(2, 'Wiener Staatsoper', 'Wiener Staatsoper 2', 1010, ''),
(3, 'Ronacher', 'Seilerstätte 9', 1010, 'Wien'),
(4, 'Volkstheater', 'Arthur-Schnitzler-Platz 1', 1070, 'Wien'),
(5, 'Wiener Stadthalle - Halle D', 'Roland-Rainer-Platz 1', 1150, 'Wien');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `fk_date_id` int(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(300) NOT NULL,
  `capacity` int(50) DEFAULT NULL,
  `contact_email` varchar(50) DEFAULT NULL,
  `contact_phonenumber` int(15) DEFAULT NULL,
  `fk_address_id` int(11) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `fk_event_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `name`, `fk_date_id`, `description`, `image`, `capacity`, `contact_email`, `contact_phonenumber`, `fk_address_id`, `url`, `fk_event_type_id`) VALUES
(1, 'Klaus Eckel - Zuerst die gute Nachricht', 1, 'Funny Kabarett', 'https://www.wien-ticket.at/tools/imager/imager.php?file=%2Fmedia%2Fimage%2Foriginal%2F10621.jpg&width=1500', 100, 'klauseckel@office.at', 676751469, 1, 'https://www.wien-ticket.at/de/ticket/30731/kabarett-klaus-eckel-zuerst-die-gute-nachricht-casanova-vienna-casanova-vienna-wien', 1),
(2, 'Jazz Festival Wien', 2, '2020 begeht das JazzFest.Wien sein 30jähriges Jubiläum. Mit einem Feuerwerk an Sonderprojekten und Premieren zünden vom 26. Juni bis 10. Juli 2018 Fritz Thom und sein Team bereits heuer ein musikalisches Feuerwerk zum Countdown.', 'https://www.wien-ticket.at/tools/imager/imager.php?file=%2Fmedia%2Fimage%2Foriginal%2F13954.jpg&width=1500', 2, 'jazzfestwien@office.at', 12548663, 2, 'https://www.wien-ticket.at/de/ticket/51829/jazz-fest-wien-2018', 2),
(3, 'Jesus Christ Superstar', 3, 'The Rock-Musical in Concert with Drew Sarich, Barbara Obermeier and Sasha di Capri', 'https://www.wien-ticket.at/tools/imager/imager.php?file=%2Fmedia%2Fimage%2Foriginal%2F14038.jpg&width=1500', 1000, 'jcs@office.com', 5257863, 3, 'https://www.wien-ticket.at/de/ticket/49645/jesus-christ-superstar-the-rock-musical-in-concert-2018-ronacher-wien', 3),
(4, 'Höllenangst', 4, 'Posse mit Gesang in drei Akten\r\nvon Johann Nestroy\r\nCouplets von Peter Klien (Text) und Clemens Wenger (Musik)', 'https://www.wien-ticket.at/tools/imager/imager.php?file=%2Fmedia%2Fimage%2Foriginal%2F13143.jpg&width=720', 970, 'blabla@office.com', 4503579, 4, 'https://www.wien-ticket.at/de/ticket/45964/hoellenangst-volkstheater-volkstheater-wien', 4),
(5, 'Imagine Dragons', 5, 'Nach der Veröffentlichung ihres 3. Studioalbum \"EVOLVE\" im Juni haben Imagine Dragons nun die Tour-Daten für Europa bekannt gegeben.', 'https://www.wien-ticket.at/tools/imager/imager.php?file=%2Fmedia%2Fimage%2Foriginal%2F13429.jpg&width=1500', 16000, 'manage@office.com', 14527820, 5, 'https://www.wien-ticket.at/de/ticket/47861/imagine-dragons-2018-wiener-stadthalle-halle-d-wien', 5);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `event_date`
--

CREATE TABLE `event_date` (
  `date_id` int(11) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `event_date`
--

INSERT INTO `event_date` (`date_id`, `start_date`, `end_date`) VALUES
(1, '2018-03-13 18:30:00', '2018-12-05 21:00:00'),
(2, '2018-06-26 18:30:00', '2018-07-10 20:00:00'),
(3, '2018-03-23 16:30:00', '2018-04-02 17:30:00'),
(4, '2018-03-17 18:30:00', '2018-03-13 21:30:00'),
(5, '2018-04-15 17:30:00', '2018-04-15 21:30:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `event_type`
--

CREATE TABLE `event_type` (
  `type_id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `event_type`
--

INSERT INTO `event_type` (`type_id`, `type`) VALUES
(1, 'Kabarett'),
(2, 'Jazz/Blues'),
(3, 'Musical'),
(4, 'Klassik'),
(5, 'POP/ROCK');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(4, 'Ayse Uluc', 'admin@admin.com', '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_date_id` (`fk_date_id`),
  ADD KEY `fk_address_id` (`fk_address_id`),
  ADD KEY `fk_event_type_id` (`fk_event_type_id`);

--
-- Indizes für die Tabelle `event_date`
--
ALTER TABLE `event_date`
  ADD PRIMARY KEY (`date_id`);

--
-- Indizes für die Tabelle `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`fk_address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`fk_event_type_id`) REFERENCES `event_type` (`type_id`),
  ADD CONSTRAINT `events_ibfk_3` FOREIGN KEY (`fk_date_id`) REFERENCES `event_date` (`date_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
