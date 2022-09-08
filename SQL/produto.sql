-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Set-2022 às 22:53
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
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(250) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `descricao`, `categoria`, `marca`) VALUES
(2, 'Camisa de Vaca', 'blablabla', 'Roupa', 'Cute'),
(8, 'Camisa de Café', 'A descrição condiz com o nome do produto', 'Roupa', 'Cute'),
(13, 'Capuccino', 'o nome condiz com o produto', 'Alimento', 'Cleiton'),
(14, 'Suco', 'perfeito para quebrar uma dieta', 'Alimento', 'DellVale'),
(16, 'Grão de café', 'Maior seletividade de grãos, sabor acentuado com notas de uma torra de qualidade tendo sua humidade e sabor preservados.', 'Alimento', 'Grãos Dom Pedro'),
(17, 'Caramelo  cremoso', 'Capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e caramelo.', 'Alimento', 'Grãos Dom Pedro'),
(18, 'Cafeteira Delux\r\n', 'Procura menos gastos de energia e maior eficiencia quando falamos de cafeteira? Então vocè achou a Cafeteira Delux COFFE te entrega tudo isso e mais um pouco, atribuindo o processador de grãos e a cabine para capsulas de café.', 'Utensílio', 'Grãos Dom Pedro'),
(19, 'Prensa Francesa', 'A Prensa Francesa ainda é pouco conhecida no Brasil, mas é uma ótima oportunidade de diversão para os coffeelovers.\r\nO aparelho fornece uma forma única de preparo do café, o que resulta em um sabor intenso e saboroso.\r\n', 'Utensílio', 'Grãos Dom Pedro'),
(20, 'Mini Café Expresso', 'Prático e charmoso, o mini-café expresso é pra fazer um café pra dois. \r\nBasta colocar no fogão, adicionar o pó e preparar como de costume.\r\nO produto acompanha duas mini-xícaras para servir o cafezinho.', 'Utensílio', 'Grãos Dom Pedro'),
(21, 'Quadro espressos', 'Esta tela em canvas é obrigatória para amantes de café, vem com o desenho dos tipos de espressos. \r\nAcompanha moldura de madeira e pronto para pendurar em sua parede.\r\n', 'Utensílio', 'Grãos Dom Pedro'),
(22, 'Forminhas para decorar café', 'Que tal fazer em casa um café com cara de profissional?\r\n E não precisa de habilidade, é só usar forminhas com desenhos variados para enfeitar seu café!', 'Utensílio', 'Grãos Dom Pedro\r\n');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `nome_produto` (`nome_produto`),
  ADD KEY `nome_produto_2` (`nome_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
