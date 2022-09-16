-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Set-2022 às 01:13
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
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `id_endereco` int(11) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `rua` varchar(500) NOT NULL,
  `avenida` varchar(500) NOT NULL,
  `numero` varchar(200) NOT NULL,
  `fk_id_pessoa` int(11) NOT NULL,
  `cep` varchar(150) NOT NULL,
  `estado` varchar(150) NOT NULL,
  `complemento` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`id_endereco`, `cidade`, `rua`, `avenida`, `numero`, `fk_id_pessoa`, `cep`, `estado`, `complemento`) VALUES
(1, 'amargosa', 'petrolino', 'xique-xique', '123', 2, '1234-22', 'piaui', 'ao lado do pé de jambo'),
(2, '[value-2]', '[value-3]', '[value-4]', '[value-5]', 3, '[value-7]', '[value-8]', '[value-9]'),
(3, 'aaaa', 'ddd', 'vvv', 'fff', 5, 'sssss', 'ggggg', 'eeee'),
(4, 'meu', 'limão', 'meu', 'limoeiro', 6, 'pé', 'de', 'jacaranda'),
(5, 'bbhfvbhfv', 'cdcsc', 'bdjdhuv', 'zcfewq', 8, '8', '8oiuhfd', 'hcbhdbchsdhc');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
