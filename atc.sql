-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Sep 2017 la 14:18
-- Versiune server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atc`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(4) NOT NULL,
  `nume` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `parola` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nume`, `email`, `parola`) VALUES
(1, 'user1', 'user1@atc.ro', '1234'),
(2, 'user2', 'user2@atc.ro', '1234'),
(3, 'user3', 'user3@atc.ro', '1234'),
(10, 'user4', 'user4@atc.ro', '');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `comentarii`
--

CREATE TABLE `comentarii` (
  `nr` int(2) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mesaj` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Salvarea datelor din tabel `comentarii`
--

INSERT INTO `comentarii` (`nr`, `nume`, `email`, `mesaj`) VALUES
(3, 'dfgdf', 'ggf@brr.thfh', 'fdgvdfv'),
(4, 'gerg', 'bdf@dg.hgf', 'bhthbf'),
(5, 'gerg', 'bdf@dg.hgf', 'bhthbf');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `livrare`
--

CREATE TABLE `livrare` (
  `nr` int(4) NOT NULL,
  `nume_p` varchar(60) NOT NULL,
  `parola` varchar(20) NOT NULL,
  `companie` varchar(60) NOT NULL,
  `email` varchar(20) NOT NULL,
  `titlu` varchar(10) NOT NULL,
  `prenume` varchar(30) NOT NULL,
  `prenume_2` varchar(30) NOT NULL,
  `nume` varchar(30) NOT NULL,
  `adresa_1` varchar(30) NOT NULL,
  `adresa_2` varchar(30) NOT NULL,
  `cod_postal` int(6) NOT NULL,
  `judet` varchar(20) NOT NULL,
  `localitate` varchar(20) NOT NULL,
  `telefon` varchar(10) NOT NULL,
  `telefon_m` varchar(10) NOT NULL,
  `observatii` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `nume` (`nume`);

--
-- Indexes for table `comentarii`
--
ALTER TABLE `comentarii`
  ADD PRIMARY KEY (`nr`),
  ADD KEY `nume` (`nume`);

--
-- Indexes for table `livrare`
--
ALTER TABLE `livrare`
  ADD PRIMARY KEY (`nr`),
  ADD KEY `nume_p` (`nume_p`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `comentarii`
--
ALTER TABLE `comentarii`
  MODIFY `nr` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `livrare`
--
ALTER TABLE `livrare`
  MODIFY `nr` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
