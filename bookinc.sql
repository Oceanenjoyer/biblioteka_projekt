-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 20, 2024 at 12:47 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookinc`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `books`
--

CREATE TABLE `books` (
  `Book_ID` int(11) NOT NULL,
  `Book_author` varchar(100) NOT NULL,
  `Book_genre` varchar(50) NOT NULL,
  `Book_title` varchar(100) NOT NULL,
  `Book_description` text NOT NULL,
  `Book_release` date NOT NULL,
  `Book_pages` varchar(20) NOT NULL,
  `Book_imgpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_ID`, `Book_author`, `Book_genre`, `Book_title`, `Book_description`, `Book_release`, `Book_pages`, `Book_imgpath`) VALUES
(1, 'Katarzyna Puzyńska', 'Kryminał', 'Utopce', '\r\nZ okazji dziesięciolecia sagi czytelnicy współtworzą to wyjątkowe wydanie.\r\nLatem tysiąc dziewięćset osiemdziesiątego czwartego roku ofiarą krwiożerczego wampira padły dwie osoby. Czy gwałtowna śmierć obu ofiar naprawdę jest dziełem upiora? A może to któryś z mieszkańców wsi miał swoje powody, żeby zabić? Trzydzieści lat później sprawę rozwikłać muszą Daniel Podgórski i kontrowersyjna Klementyna Kopp. Perturbacje w życiu prywatnym śledczych utrudniają dotarcie do prawdy. Czy odkryją tożsamość mordercy, czy obudzą tylko przyczajonego przez lata wampira i nic nie będzie już w stanie powstrzymać nadchodzącego zła?\r\nKatarzyna Puzyńska – z wykształcenia psycholog. Jest autorką bestsellerowej serii kryminałów, powieści fantasy, horroru oraz książek non-fiction. Z okazji jubileuszu stulecia Polskiej Policji za książki \"Policjanci. Ulica\" i \"Policjanci. Bez munduru\" otrzymała od Komendanta Głównego nagrodę w kategorii \"Policja w literaturze\".', '2024-05-15', '323', 'images/books/666157738.png'),
(8, 'Katarzyna Puzyńska', 'Kryminał', 'Utopce', '\r\nZ okazji dziesięciolecia sagi czytelnicy współtworzą to wyjątkowe wydanie.\r\nLatem tysiąc dziewięćset osiemdziesiątego czwartego roku ofiarą krwiożerczego wampira padły dwie osoby. Czy gwałtowna śmierć obu ofiar naprawdę jest dziełem upiora? A może to któryś z mieszkańców wsi miał swoje powody, żeby zabić? Trzydzieści lat później sprawę rozwikłać muszą Daniel Podgórski i kontrowersyjna Klementyna Kopp. Perturbacje w życiu prywatnym śledczych utrudniają dotarcie do prawdy. Czy odkryją tożsamość mordercy, czy obudzą tylko przyczajonego przez lata wampira i nic nie będzie już w stanie powstrzymać nadchodzącego zła?\r\nKatarzyna Puzyńska – z wykształcenia psycholog. Jest autorką bestsellerowej serii kryminałów, powieści fantasy, horroru oraz książek non-fiction. Z okazji jubileuszu stulecia Polskiej Policji za książki \"Policjanci. Ulica\" i \"Policjanci. Bez munduru\" otrzymała od Komendanta Głównego nagrodę w kategorii \"Policja w literaturze\".', '2024-05-15', '323', 'images/books/666157738.png'),
(9, 'Katarzyna Puzyńska', 'Kryminał', 'Utopce', '\r\nZ okazji dziesięciolecia sagi czytelnicy współtworzą to wyjątkowe wydanie.\r\nLatem tysiąc dziewięćset osiemdziesiątego czwartego roku ofiarą krwiożerczego wampira padły dwie osoby. Czy gwałtowna śmierć obu ofiar naprawdę jest dziełem upiora? A może to któryś z mieszkańców wsi miał swoje powody, żeby zabić? Trzydzieści lat później sprawę rozwikłać muszą Daniel Podgórski i kontrowersyjna Klementyna Kopp. Perturbacje w życiu prywatnym śledczych utrudniają dotarcie do prawdy. Czy odkryją tożsamość mordercy, czy obudzą tylko przyczajonego przez lata wampira i nic nie będzie już w stanie powstrzymać nadchodzącego zła?\r\nKatarzyna Puzyńska – z wykształcenia psycholog. Jest autorką bestsellerowej serii kryminałów, powieści fantasy, horroru oraz książek non-fiction. Z okazji jubileuszu stulecia Polskiej Policji za książki \"Policjanci. Ulica\" i \"Policjanci. Bez munduru\" otrzymała od Komendanta Głównego nagrodę w kategorii \"Policja w literaturze\".', '2024-05-15', '323', 'images/books/666157738.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `User_ID` int(11) NOT NULL,
  `User_name` varchar(255) NOT NULL,
  `User_email` varchar(255) NOT NULL,
  `User_password` varchar(255) NOT NULL,
  `User_Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `User_name`, `User_email`, `User_password`, `User_Admin`) VALUES
(1, 'wojtek', 'fasdfs@dfasd.f', '$2y$10$ml3HeXKSnmr.TkZfYWQz/ONgBRGR6ZE/hdKyInlb/IcP95dQKCQG.', 1),
(2, 'wojtek', 'fasdfs@dfasd.f', '$2y$10$ml3HeXKSnmr.TkZfYWQz/ONgBRGR6ZE/hdKyInlb/IcP95dQKCQG.', 1),
(7, 'wojtek', 'fasdfs@dfasd.f', '$2y$10$ml3HeXKSnmr.TkZfYWQz/ONgBRGR6ZE/hdKyInlb/IcP95dQKCQG.', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_ID`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Book_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
