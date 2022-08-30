-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< Updated upstream
-- Tempo de geração: 30-Ago-2022 às 19:31
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19
=======
-- Generation Time: Aug 30, 2022 at 08:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19
>>>>>>> Stashed changes

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
<<<<<<< Updated upstream
-- Banco de dados: `coffee221`
=======
-- Database: `coffee221`
>>>>>>> Stashed changes
--

-- --------------------------------------------------------

--
<<<<<<< Updated upstream
-- Estrutura da tabela `pessoa`
=======
-- Table structure for table `pessoa`
>>>>>>> Stashed changes
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefone` varchar(100) NOT NULL,
<<<<<<< Updated upstream
  `endereco` varchar(500) NOT NULL,
=======
>>>>>>> Stashed changes
  `pais` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
<<<<<<< Updated upstream
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `email`, `telefone`, `endereco`, `pais`) VALUES
(1, 'a definir', 'aaaaaaaaa@gmail.com', '000000', 'a definir', 'a definir'),
(2, 'jonas', 'meninojonas@gmail.com', '1234567', 'good game', 'café'),
(3, 'Kokeburi', 'kokeburi@gmail.com', '172727272727', 'sujeira', 'bueiro'),
(4, 'clarck', 'clarck@gmail.com', '998756', 'metrocity', 'DC'),
(5, 'styles', 'mitsloviski@gmail.com', '81818288374', 'nnnnnnnnnnn', 'sssssssssss'),
(6, 'bode', 'bode@gmail.com', '99399479427', 'campo ', 'Brasil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
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
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `senha`, `nivel`, `fk_id_pessoa`, `data`) VALUES
(1, 'manbo@gmail.com', 'MjEyMQ==', 1, 5, '2022-08-24'),
(2, 'dale@.com', 'MTIxMg==', 2, 6, '2022-08-24'),
(3, 'dale@.com', 'MTIxMg==', 2, 6, '2022-08-24');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pessoa`
=======
-- Dumping data for table `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `email`, `telefone`, `pais`) VALUES
(1, 'Jesucléberson de Assis', 'jesus@cleberson.br', '1-447-365-6860', 'United States'),
(2, 'Cleidiane de jesus 447', 'jesucleber@son.com', '1-172-568-2251', 'Belgium'),
(3, 'Fantasma camarada', 'lalala@447lalala.co', '(486) 551-8263', 'Colombia'),
(5, 'Fantasma camarada2', 'lalala@lalala.co', '(798) 313-6546', 'Pakistan'),
(6, 'Fantasma camarada', 'lalala@lalala.co', '(999) 715-2557', 'Chile'),
(7, 'Fantasma camarada', 'lalala@lalala.co', '(464) 394-8748', 'Canada'),
(8, 'Fantasma camarada', 'lalala@lalala.co', '(863) 147-3846', 'Norway'),
(9, 'Fantasma camarada', 'lalala@lalala.co', '(284) 318-2575', 'South Africa'),
(10, 'Fantasma camarada', 'lalala@lalala.co', '99992345678', 'Brasil'),
(17, 'Kratos', 'God@war.com', '868451318798', 'Rome'),
(21, 'Fantasma camarada', 'lalala@lalala.co', '321654987', 'lalla'),
(22, 'Fantasma camarada', 'lalala@lalala.co', '321654987', 'lalla'),
(23, 'Jesuclébersson de Jesus de Cleber', 'cleber@de.jesus', '98762987698768', 'Clebernation'),
(25, 'Jesuclébersson de Jesus de Cleber2', 'mariazinha@gmail.com', '6543186131', 'Japão'),
(31, 'Jobsnelson de Jesuis de Deus', 'jobsnelson@gmail.com', '89751651', 'NelsonNation'),
(32, 'Kaleaderson de Deus', 'kaleanderson@gmail.com', '89769876', 'oiauosi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoa`
>>>>>>> Stashed changes
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
<<<<<<< Updated upstream
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
>>>>>>> Stashed changes
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
