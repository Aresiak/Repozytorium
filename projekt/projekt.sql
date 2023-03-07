-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Mar 2023, 14:04
-- Wersja serwera: 10.1.35-MariaDB
-- Wersja PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `Imie` text COLLATE utf8_bin NOT NULL,
  `Nazwisko` text COLLATE utf8_bin NOT NULL,
  `ksiazki` text COLLATE utf8_bin NOT NULL,
  `url_ksiazka` text COLLATE utf8_bin NOT NULL
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
  `login` text COLLATE utf8_bin NOT NULL,
  `password` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `user_id` text COLLATE utf8_bin NOT NULL,
  `role` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `loginy`
--

INSERT INTO `loginy` (`login`, `password`, `email`, `user_id`, `role`) VALUES
('3', '3', '3@3', 'user6407279129849', ''),
('4', '4', '4@4.com', 'user640727f50e1ca', 'user'),
('Dagens', 'Dagens', 'Dagens@gmail.com', 'user64072a885cb00', 'user'),
('Daga', 'Daga', 'Daga@Daga.com', 'user640730cae54c2', 'user'),
('mechaty', 'mechaty', 'mechaty@mechaty.com', 'user6407356deffbe', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
