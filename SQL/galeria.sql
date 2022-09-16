-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Set-2022 às 21:21
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `coffee221`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id_galeria` int(11) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `fk_id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id_galeria`, `endereco`, `fk_id_produto`) VALUES
(1, 'camisa1.png', 1),
(2, 'camisa2.png', 1),
(3, 'Camisa3.png', 1),
(4, 'camisavaca.jpg', 2),
(5, 'caf2.png', 8),
(6, 'CAPU.jpg', 13),
(7, 'sucodel.jpg', 14),
(8, 'grao.jpg', 16),
(9, 'grao.jpg', 16),
(10, 'cafeteria.png', 18),
(11, 'cafeteria1.png', 18),
(12, 'presafran.png', 19),
(13, 'minicaf.png', 20),
(14, 'minicaf1.png', 20),
(15, 'formas.png', 22),
(16, 'quadr.jpg', 21);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id_galeria`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id_galeria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
