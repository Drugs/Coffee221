-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 11:01 PM
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
-- Table structure for table `info_produto`
--

CREATE TABLE `info_produto` (
  `id_info_produto` int(11) NOT NULL,
  `estoque` varchar(150) NOT NULL,
  `preco` float NOT NULL,
  `cor` varchar(150) NOT NULL,
  `tamanho` varchar(100) NOT NULL,
  `genero` varchar(150) NOT NULL,
  `fk_id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_produto`
--

INSERT INTO `info_produto` (`id_info_produto`, `estoque`, `preco`, `cor`, `tamanho`, `genero`, `fk_id_produto`) VALUES
(2, '100', 88.9, 'Branco', 'M', 'Unissex', 0),
(4, '150', 59.69, 'Preta', 'P', 'Masculino', 0),
(5, '101', 59.69, 'Azul', 'G', 'Feminino', 0),
(7, '100', 59.69, 'Preta', 'P', 'Unissex', 0),
(8, '101', 59.69, 'Preta', 'M', 'Masculino', 2),
(9, '101', 8.99, 'Preta', 'P', 'Masculino', 2),
(10, '300', 40.5, 'Branco', 'M', 'Unissex', 8),
(11, '101', 59.69, 'Preta', 'P', 'Unissex', 10),
(13, '101', 59.69, 'Preta', 'A', 'Masculino', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_produto`
--
ALTER TABLE `info_produto`
  ADD PRIMARY KEY (`id_info_produto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_produto`
--
ALTER TABLE `info_produto`
  MODIFY `id_info_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
