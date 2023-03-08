-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Mar 2023, 18:17
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
  `url_ksiazka` text NOT NULL,
  `Przekierowanie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`Imie`, `Nazwisko`, `ksiazki`, `url_ksiazka`, `Przekierowanie`) VALUES
('Andrzej ', 'Sapkowski', 'Krew Elfów', 'https://cyfroteka.pl/catalog/ebooki/0303355/030/cover/1/110244-wiedzmin-krew-elfow-andrzej-sapkowski-1.jpg', 'books/krewelfow.php'),
('Andrzej', 'Sapkowski', 'Ostatnie Życzenie', 'https://cyfroteka.pl/catalog/ebooki/0303455/030/cover/1/110596-wiedzmin-ostatnie-zyczenie-andrzej-sapkowski-1.jpg', 'books/ostatniezyczenie.php'),
('J.R.R.', 'Tolkien', 'Władca pierścieni ', 'https://cyfroteka.pl/catalog/ebooki/38130/94995/cover/1/wladca_pierscieni-muza-ebook-cov.jpg', 'books/wladcapierscieni.php');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `loginy`
--

CREATE TABLE `loginy` (
  `login` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `user_id` text NOT NULL,
  `role` text NOT NULL,
  `zalogowany` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `loginy`
--

INSERT INTO `loginy` (`login`, `password`, `email`, `user_id`, `role`, `zalogowany`) VALUES
('1', '1', '1@1.com', 'user640797f39c526', 'user', 0),
('2', '2', '2@2.com', 'user640798cc08a4e', 'user', 0),
('5', '5', '5@1.com', 'user640799466665e', 'user', 0),
('999', '999', '999@999.com', 'user6407996fbeaa1', 'user', 0),
('bogna', 'bogna', 'bogna@bogna.com', 'user6407999c8aafd', 'user', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `panelkontaktowy`
--

CREATE TABLE `panelkontaktowy` (
  `name` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `panelkontaktowy`
--

INSERT INTO `panelkontaktowy` (`name`, `message`, `date`) VALUES
('Dagmarka', 'Pozdrawiam', '2023-03-07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
