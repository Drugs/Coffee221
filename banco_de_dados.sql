-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 11:11 PM
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
-- Database: `banco de dados`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_produto`
--

CREATE TABLE `info_produto` (
  `id_info_produto` int(11) NOT NULL,
  `estoque` varchar(150) NOT NULL,
  `preco` float NOT NULL,
  `cor` varchar(150) NOT NULL,
  `tamanho` varchar(100) NOT NULL,
  `genero` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_produto`
--

INSERT INTO `info_produto` (`id_info_produto`, `estoque`, `preco`, `cor`, `tamanho`, `genero`) VALUES
(2, '100', 88.9, 'Branco', 'M', 'Unissex');

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(250) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `descricao`, `categoria`, `marca`) VALUES
(1, '0', '0', '0', '0'),
(2, 'Camisa de Vaca', 'blablabla', 'Roupas', 'Cute');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_produto`
--
ALTER TABLE `info_produto`
  ADD PRIMARY KEY (`id_info_produto`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `nome_produto` (`nome_produto`),
  ADD KEY `nome_produto_2` (`nome_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_produto`
--
ALTER TABLE `info_produto`
  MODIFY `id_info_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
