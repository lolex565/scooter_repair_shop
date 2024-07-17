-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Lip 17, 2024 at 01:07 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair_shop`
--
CREATE DATABASE IF NOT EXISTS `repair_shop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `repair_shop`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phone` varchar(18) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dealer`
--

CREATE TABLE IF NOT EXISTS `dealer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `phone` varchar(18) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `repair_application`
--

CREATE TABLE IF NOT EXISTS `repair_application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scooter_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_changed` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `description` text NOT NULL,
  `status` enum('created','received','in_progress','finished') NOT NULL DEFAULT 'created',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `scooter_id` (`scooter_id`),
  KEY `client_id` (`client_id`),
  KEY `dealer_id` (`dealer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `scooter`
--

CREATE TABLE IF NOT EXISTS `scooter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `frame_number` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `frame_number` (`frame_number`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `repair_application`
--
ALTER TABLE `repair_application`
  ADD CONSTRAINT `repair_application_ibfk_1` FOREIGN KEY (`dealer_id`) REFERENCES `dealer` (`id`),
  ADD CONSTRAINT `repair_application_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `repair_application_ibfk_3` FOREIGN KEY (`scooter_id`) REFERENCES `scooter` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
