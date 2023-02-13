-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Lut 2023, 14:17
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE `autorzy` (
  `Imie` text NOT NULL,
  `Nazwisko` text NOT NULL,
  `książka` text NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`Imie`, `Nazwisko`, `książka`, `cena`) VALUES
('Katarzyna', 'Bonda', 'Opowieści z krainy bogien', 55),
('Michał', 'Ptak', 'Czerwona Bogienka', 85),
('Dawid', 'Dawidziak', 'Bogna z krainy czarów', 5),
('Adolf', 'Klin', 'Bogienne opowieści braci grimm', 125),
('Katarzyna', 'Bonda', 'Opowieści braci grimm', 85),
('Katarzyna', 'Bonda', 'Gotuj z Boguśką', 55);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
