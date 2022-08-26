-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 07:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco221`
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
(1, 'Jesucléberson de Assis', 'jesus@cleberson.br', '1-447-365-6860', 'Ap #446-9446 Pharetra, St.', 'United States'),
(2, 'Cleidiane de jesus 447', 'jesucleber@son.com', '1-172-568-2251', 'P.O. Box 776, 4882 Hendrerit Av.', 'Belgium'),
(3, 'Fantasma camarada', 'lalala@447lalala.co', '(486) 551-8263', '673 In Rd.', 'Colombia'),
(5, 'Fantasma camarada2', 'lalala@lalala.co', '(798) 313-6546', '871-1507 Donec Road', 'Pakistan'),
(6, 'Fantasma camarada', 'lalala@lalala.co', '(999) 715-2557', '1139 Euismod St.', 'Chile'),
(7, 'Fantasma camarada', 'lalala@lalala.co', '(464) 394-8748', 'Ap #641-677 Auctor Ave', 'Canada'),
(8, 'Fantasma camarada', 'lalala@lalala.co', '(863) 147-3846', '5813 Quam St.', 'Norway'),
(9, 'Fantasma camarada', 'lalala@lalala.co', '(284) 318-2575', '6893 Proin Ave', 'South Africa'),
(10, 'Fantasma camarada', 'lalala@lalala.co', '99992345678', 'Rua dos desenhistas descompromissados, 171', 'Brasil'),
(17, 'Kratos', 'God@war.com', '868451318798', 'Hell', 'Rome'),
(21, 'Fantasma camarada', 'lalala@lalala.co', '321654987', 'lalal', 'lalla'),
(22, 'Fantasma camarada', 'lalala@lalala.co', '321654987', 'lalal', 'lalla'),
(23, 'Jesuclébersson de Jesus de Cleber', 'cleber@de.jesus', '98762987698768', 'Jesulândia', 'Clebernation'),
(25, 'Jesuclébersson de Jesus de Cleber2', 'mariazinha@gmail.com', '6543186131', 'Rua engraçada', 'Japão'),
(31, 'Jobsnelson de Jesuis de Deus', 'jobsnelson@gmail.com', '89751651', 'Casa do Jobsnelson', 'NelsonNation'),
(32, 'Kaleaderson de Deus', 'kaleanderson@gmail.com', '89769876', 'oaisudoasiud', 'oiauosi');

-- --------------------------------------------------------


--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  `fk_id_pessoa` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `senha`, `nivel`, `fk_id_pessoa`, `data`) VALUES
(1, 'jesucleber@son.com', 'MTIzNA==', 1, 2, '2022-08-10'),
(6, 'jobsnelson@gmail.com', 'MTIzNDU2', 1, 31, '1901-01-01'),
(7, 'oaisud@iausd.com', 'bGFrc2RsYWtzamQ=', 1, 32, '2000-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--

-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_id_pessoa` (`fk_id_pessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--

-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_id_pessoa` FOREIGN KEY (`fk_id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
