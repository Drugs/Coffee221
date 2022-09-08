-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 10:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee221`
--

-- --------------------------------------------------------

--
-- Table structure for table `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `endereco` varchar(500) NOT NULL,
  `pais` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `email`, `telefone`, `endereco`, `pais`) VALUES
(1, 'Jesucléberson de Assis', 'jesus@cleberson.br', '1-447-365-6860', '', 'United States'),
(2, 'Cleidiane de jesus 447', 'jesucleber@son.com', '1-172-568-2251', '', 'Belgium'),
(23, 'Jesuclébersson de Jesus de Cleber', 'cleber@de.jesus', '98762987698768', '', 'Clebernation'),
(25, 'Jesuclébersson de Jesus de Cleber2', 'mariazinha@gmail.com', '6543186131', '', 'Japão'),
(31, 'Jobsnelson de Jesuis de Deus', 'jobsnelson@gmail.com', '89751651', '', 'NelsonNation'),
(32, 'Kaleaderson de Deus', 'kaleanderson@gmail.com', '89769876', '', 'oiauosi'),
(33, 'Jonas', 'jonasgabrielsc@gmail.com', '(71) 99338-9531', 'Rua Otacílio Santos', 'Brasil'),
(66, 'Careca', 'carecabrilhoso@carecoso.com', '(72) 94002-8922', 'rua das cucas brilhantes', 'Brasil'),
(81, 'Bianca', 'bibibrave@gmail.com', '(71) 99933-8953', 'Rua dos Felinos', 'Brasil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
