-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Lut 2023, 22:22
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
-- Baza danych: `firma`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `informatycy`
--

CREATE TABLE `informatycy` (
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `pensja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `informatycy`
--

INSERT INTO `informatycy` (`imie`, `nazwisko`, `pensja`) VALUES
('Witold', 'Kowalski', 3500),
('Adam', 'Nowak', 5000),
('Krzysztof', 'Mikołajczyk', 6500),
('Adolf', 'Kubik', 3600),
('Dawid', 'Bognarczyk', 4100),
('Krzysztof', 'Kanonowicz', 150),
('Major', 'Suchodolski', 300),
('Adolf', 'Nowacki', 7500),
('Agnieszka', 'Mechata', 3200),
('Karolina', 'Nowacka', 4500),
('Dawid', 'Nowacki', 3400);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sekretarki`
--

CREATE TABLE `sekretarki` (
  `Imie` text NOT NULL,
  `Nazwisko` text NOT NULL,
  `Pensja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `sekretarki`
--

INSERT INTO `sekretarki` (`Imie`, `Nazwisko`, `Pensja`) VALUES
('Janina', '0', 1500),
('Bogdan', 'Bogdaniec', 950),
('Michał', 'Krawiec', 1999);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
