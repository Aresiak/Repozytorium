-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Mar 2023, 16:52
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
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE `autorzy` (
  `Imie` text NOT NULL,
  `Nazwisko` text NOT NULL,
  `ksiazki` text NOT NULL,
  `url_ksiazka` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`Imie`, `Nazwisko`, `ksiazki`, `url_ksiazka`) VALUES
('Andrzej', 'Sapkowski', 'Krew Elfów', 'https://cyfroteka.pl/catalog/ebooki/0303355/030/cover/1/110244-wiedzmin-krew-elfow-andrzej-sapkowski-1.jpg'),
('Andrzej ', 'Sapkowski', 'Ostatnie życzenie', 'https://cyfroteka.pl/catalog/ebooki/02033727/020/cover/1/220464.jpg'),
('J.R.R.', 'Tolkien', 'Hobbit', 'https://cyfroteka.pl/catalog/ebooki/0203907/020/cover/1/148847.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `loginy`
--

CREATE TABLE `loginy` (
  `login` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
