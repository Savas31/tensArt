-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Ian 2020 la 12:05
-- Versiune server: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cc`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `pacienti`
--

CREATE TABLE `pacienti` (
  `id_pacient` int(15) NOT NULL,
  `Nume` varchar(50) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Varsta` int(2) NOT NULL,
  `Inaltime_cm` int(3) DEFAULT NULL,
  `Greutate_kg` int(3) DEFAULT NULL,
  `Stare_emotionala` varchar(400) DEFAULT NULL,
  `TA_sistolic` int(3) DEFAULT NULL,
  `TA_diastolic` int(3) DEFAULT NULL,
  `BPM` int(3) DEFAULT NULL,
  `Verdict` varchar(100) DEFAULT NULL,
  `Tratament` varchar(400) DEFAULT NULL,
  `Observatii` varchar(400) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `pacienti`
--

INSERT INTO `pacienti` (`id_pacient`, `Nume`, `Sex`, `Varsta`, `Inaltime_cm`, `Greutate_kg`, `Stare_emotionala`, `TA_sistolic`, `TA_diastolic`, `BPM`, `Verdict`, `Tratament`, `Observatii`) VALUES
(1, 'Tcaciuc Gabriel', 'Masculin', 24, 174, 66, 'Cand i-a fost luata tensiunea, Gabriel a fost calm, cooperativ, avand o stare emotionala normala.', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Hoaban Eduard', 'Masculin', 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Istratoiu Sorin', 'Masculin', 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pacienti`
--
ALTER TABLE `pacienti`
  ADD PRIMARY KEY (`id_pacient`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pacienti`
--
ALTER TABLE `pacienti`
  MODIFY `id_pacient` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
