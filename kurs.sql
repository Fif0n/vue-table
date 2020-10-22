-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Paź 2020, 21:05
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kurs`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `kategorie` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`kategorie`) VALUES
('A1'),
('AM'),
('B'),
('B1'),
('C'),
('D');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kurs`
--

CREATE TABLE `kurs` (
  `kategorie` varchar(30) NOT NULL,
  `nr_kursu` int(11) NOT NULL,
  `data_rozpoczecia` date NOT NULL,
  `data_zakonczenia` date NOT NULL,
  `miejsce_kursu` varchar(30) NOT NULL,
  `ulica` varchar(30) NOT NULL,
  `miejscowosc` varchar(30) NOT NULL,
  `kod_pocztowy` varchar(6) NOT NULL,
  `uwagi` varchar(150) NOT NULL,
  `komentarz` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kurs`
--

INSERT INTO `kurs` (`kategorie`, `nr_kursu`, `data_rozpoczecia`, `data_zakonczenia`, `miejsce_kursu`, `ulica`, `miejscowosc`, `kod_pocztowy`, `uwagi`, `komentarz`) VALUES
('B', 1, '2020-10-01', '2020-10-23', 'Ostrzeszów', 'Krańcowa', 'Ostrzeszów', '56-600', 'brak', 'brak'),
('AM', 2, '2020-10-10', '2020-11-21', 'Ostzrszów', 'Krańcowa', 'Ostrzeszów', '56-500', 'brak', 'brak'),
('C', 3, '2020-10-10', '2020-12-21', 'Ostzrszów', 'Krańcowa', 'Ostrzeszów', '56-500', 'brak', 'osoba niepełnosprawna');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`kategorie`);

--
-- Indeksy dla tabeli `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`nr_kursu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kurs`
--
ALTER TABLE `kurs`
  MODIFY `nr_kursu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
