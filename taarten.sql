-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Gegenereerd op: 02 nov 2023 om 09:17
-- Serverversie: 11.1.2-MariaDB-1:11.1.2+maria~ubu2204
-- PHP-versie: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakker`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `taarten`
--

CREATE TABLE `taarten` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(500) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `taarten`
--

INSERT INTO `taarten` (`id`, `title`, `img`, `slug`, `text`) VALUES
(1, 'Cheesecake', 'src/img/cheesecake.jpg', '', 'Cheesecake is een heerlijk dessert gemaakt van romige roomkaas en een zoete, kruimelige korst.'),
(2, 'Chocolade taart', 'src/img/choco.jpg', '', 'Chocoladetaart is een decadent dessert met een rijke, chocoladeachtige smaak en wordt vaak geserveerd met een smeuïge chocoladeglazuur.'),
(3, 'Appeltaart', 'src/img/appeltaart.jpg', '', 'Appeltaart is een klassieke, troostende lekkernij met een knapperige korst en sappige vulling van appels, kaneel en suiker, vaak geserveerd met een toefje slagroom of een bolletje vanille-ijs.'),
(4, 'Aardbei taart', 'src/img/aardbei.jpg', '', 'Aardbeientaart is een zomerse favoriet met een lichte, kruimelige korst en een zoete vulling van verse aardbeien, meestal bedekt met een glanzende gelei om ze te laten schitteren.'),
(5, 'Citroen taart', 'src/img/citroen.jpg', '', 'Citroentaart is een verfrissend dessert met een knapperige korst en een intense, friszure citroenvulling, vaak bestrooid met poedersuiker voor een subtiele zoetheid.'),
(7, 'Bananen taart', 'src/img/bananen.jpg', '', 'Bananentaart is een smakelijk dessert met een smeuïge textuur en een rijke bananensmaak, vaak gecombineerd met een romige vulling en een kruimelige korst.');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `taarten`
--
ALTER TABLE `taarten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `taarten`
--
ALTER TABLE `taarten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
