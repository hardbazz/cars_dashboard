-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 okt 2017 om 08:49
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars_dashboard`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acceleration` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_speed` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mileage` int(10) DEFAULT NULL,
  `color` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doors` int(10) DEFAULT NULL,
  `gears` int(10) DEFAULT NULL,
  `transmission` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_build` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_plate` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horsepower` int(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, bodytype, `fuel`, `weight`, `acceleration`, `top_speed`, `mileage`, `color`, `doors`, `gears`, `transmission`, `year_build`, `license_plate`, `horsepower`, `created_at`, `updated_at`) VALUES
(5, 'test', 'test', NULL, 'gasoline', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-20 17:42:51', '2017-06-20 17:42:51'),
(2, 'Tesla', 'Model S', NULL, 'Electrics', '1800', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-06 18:38:00', '2017-06-06 18:38:00'),
(3, 'Honda', 'Civic', NULL, 'gasoline', '1268', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-07 16:07:56', '2017-06-07 16:57:01'),
(6, 'Peugeot', '106', NULL, 'Benzine', '790', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-13 06:53:49', '2017-10-13 10:10:00'),
(7, 'Test a new car', 'modelletje', NULL, '123123', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-18 15:29:06', '2017-10-18 15:29:06'),
(8, 'Test', 'Test', NULL, 'Test', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-27 06:09:34', '2017-10-27 06:09:34');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
