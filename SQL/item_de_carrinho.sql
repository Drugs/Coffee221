-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Set-2022 às 20:46
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
-- Estrutura da tabela `item_de_carrinho`
--

CREATE TABLE `item_de_carrinho` (
  `id_item_carrinho` int(11) NOT NULL,
  `fk_id_info_produto` int(11) NOT NULL,
  `fk_id_carrinho` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `item_de_carrinho`
--

INSERT INTO `item_de_carrinho` (`id_item_carrinho`, `fk_id_info_produto`, `fk_id_carrinho`, `quantidade`) VALUES
(1, 1, 1, 20),
(3, 1, 1, 50),
(4, 1, 1, 12),
(5, 0, 9, 0),
(8, 3, 3, 20);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `item_de_carrinho`
--
ALTER TABLE `item_de_carrinho`
  ADD PRIMARY KEY (`id_item_carrinho`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `item_de_carrinho`
--
ALTER TABLE `item_de_carrinho`
  MODIFY `id_item_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
