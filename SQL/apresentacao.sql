-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2022 às 22:51
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
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `fk_id_pessoa` int(11) NOT NULL,
  `data` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `fk_id_pessoa`, `data`, `status`) VALUES
(1, 31, '2022-09-06', 1),
(7, 2, '2022-09-15', 1),
(8, 33, '2022-09-15', 1),
(9, 34, '2022-09-17', 1),
(15, 35, '2022-09-20', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartoes`
--

CREATE TABLE `cartoes` (
  `id_info_cartao` int(11) NOT NULL,
  `nome_cartao` varchar(250) NOT NULL,
  `validade` varchar(50) NOT NULL,
  `cvv` int(10) NOT NULL,
  `numero` varchar(200) NOT NULL,
  `fk_id_pessoa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cartoes`
--

INSERT INTO `cartoes` (`id_info_cartao`, `nome_cartao`, `validade`, `cvv`, `numero`, `fk_id_pessoa`) VALUES
(12, 'Jonas Carvalho', '09/2028', 282, '923647852342445', 33),
(14, 'Careca', '02/2088', 123, '21342351567879', 66),
(20, 'Bibi', '02/2030', 892, '123984719238471923', 81),
(21, 'Jobsnelson', '10/2022', 888, '9238759823475', 31),
(22, 'bianca', '06/2022', 848, '2256-5454-8546-4184', 2),
(23, 'bianca', '11/2022', 121, '1212-4564-8268-1548', 35);

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
(5, 'bbhfvbhfv', 'cdcsc', 'bdjdhuv', 'zcfewq', 8, '8', '8oiuhfd', 'hcbhdbchsdhc'),
(6, 'vai que cola', 'Rua avenida', '', '2256', 33, '40302-000', 'bahia', ''),
(7, 'vai que cola', 'Rua avenida', '', '112', 35, '40302-000', 'bahia', '');

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
(5, 'caf2.png', 8),
(6, 'CAPU.jpg', 13),
(7, 'sucodel.jpg', 14),
(8, 'grao.jpg', 16),
(9, 'grao.jpg', 16),
(17, 'camco1.png', 23),
(18, 'camco.jpg', 24),
(19, 'cafemorga.jpg', 25),
(20, 'cafemorga2.png', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_alimento`
--

CREATE TABLE `info_alimento` (
  `id_info_alimento` int(11) NOT NULL,
  `estoque` varchar(150) NOT NULL,
  `preco` float NOT NULL,
  `embalagem` varchar(150) NOT NULL,
  `peso` varchar(100) NOT NULL,
  `sabor` varchar(150) NOT NULL,
  `fk_id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `info_alimento`
--

INSERT INTO `info_alimento` (`id_info_alimento`, `estoque`, `preco`, `embalagem`, `peso`, `sabor`, `fk_id_produto`) VALUES
(1, '300', 8.99, 'Garrafa de vidro', '1 Litro', 'Suco de uva', 14),
(3, '350', 8.99, 'Garrafa de vidro', '1 Litro', 'Suco de laranja', 14),
(4, '300', 8.99, 'Garrafa de vidro', '1 Litro', 'Suco de abacaxi', 14),
(5, '300', 4.99, 'Cápsula', '200 Gramas', 'Clássico', 13),
(8, '101', 59.69, 'Garrafa de vidro', '200 Gramas', 'Chocolate', 13),
(9, '150', 15.99, 'plástico', '250 gramas', 'café', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_roupa`
--

CREATE TABLE `info_roupa` (
  `id_info_roupa` int(11) NOT NULL,
  `estoque` varchar(150) NOT NULL,
  `preco` float NOT NULL,
  `cor` varchar(150) NOT NULL,
  `tamanho` varchar(100) NOT NULL,
  `genero` varchar(150) NOT NULL,
  `fk_id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `info_roupa`
--

INSERT INTO `info_roupa` (`id_info_roupa`, `estoque`, `preco`, `cor`, `tamanho`, `genero`, `fk_id_produto`) VALUES
(10, '300', 40.5, 'Branco', 'M', 'Unissex', 8),
(11, '101', 59.69, 'Preta', 'P', 'Unissex', 10),
(24, '150', 29, 'azul escuro', 'M', 'Unissex', 24),
(25, '300', 59.69, 'Branco', 'G', 'Masculino', 8),
(29, '100', 25.99, 'branco', 'M', 'Unissex', 23),
(30, '150', 29.99, 'Azul escuro', 'M', 'Unissex', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_de_carrinho`
--

CREATE TABLE `item_de_carrinho` (
  `id_item_carrinho` int(11) NOT NULL,
  `fk_id_info_produto` int(11) NOT NULL,
  `fk_id_carrinho` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `item_de_carrinho`
--

INSERT INTO `item_de_carrinho` (`id_item_carrinho`, `fk_id_info_produto`, `fk_id_carrinho`, `categoria`, `quantidade`) VALUES
(9, 3, 7, 'alimento', 1),
(17, 3, 9, 'alimento', 1),
(63, 5, 8, 'alimento', 1),
(75, 8, 15, 'roupa', 1),
(76, 1, 15, 'alimento', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
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
-- Extraindo dados da tabela `pessoa`
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
(32, 'Kaleaderson de Deus', 'kaleanderson@gmail.com', '89769876', 'oaisudoasiud', 'oiauosi'),
(33, 'bianca', 'biancanogueira8@gmail.com', '7189751651', 'Rua da silva', 'BArba'),
(34, 'josefina', 'josefina@gmail.com', '7189751651', 'Rua da silva', 'BArba'),
(35, 'vivian', 'viviane@gmail.com', '(15) 95484-5153', '', 'BArba'),
(36, 'vivian', 'viviane@gmail.com', '(15) 95484-5153', '', 'BArba');

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
(8, 'Camisa de Café', 'A descrição condiz com o nome do produto', 'roupa', 'Cute'),
(13, 'Capuccino', 'o nome condiz com o produto', 'alimento', 'Cleiton'),
(14, 'Suco', 'perfeito para quebrar uma dieta', 'alimento', 'DellVale'),
(16, 'Grão de café', 'Maior seletividade de grãos, sabor acentuado com notas de uma torra de qualidade tendo sua humidade e sabor preservados.', 'alimento', 'Grãos Dom Pedro'),
(17, 'Caramelo  cremoso', 'Capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e caramelo.', 'alimento', 'Grãos Dom Pedro'),
(23, 'Camisa Melissa', 'Roupa confortavel e fresca.', 'roupa', 'Melissa Jean'),
(24, 'Camisa Cofee', 'Sinta-se confortável e feliz. ', 'roupa', 'melissa'),
(25, 'Flor da Morgana', 'Grãos de café extra fortes.', 'alimento', 'morgana');

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
(1, 'jesucleber@son.com', 'MTIzNA==', 1, 2, '2022-08-10'),
(6, 'jobsnelson@gmail.com', 'MTIzNDU2', 1, 31, '1901-01-01'),
(7, 'oaisud@iausd.com', 'bGFrc2RsYWtzamQ=', 1, 32, '2000-01-01'),
(8, 'biancanogueira8@gmail.com', 'MTIzNDU2Nw==', 1, 33, '2022-09-15'),
(9, 'josefina@gmail.com', 'MTIz', 1, 34, '2022-09-16'),
(10, 'viviane@gmail.com', 'MTIzNDU2', 1, 35, '2022-09-14'),
(11, 'viviane@gmail.com', 'MTIzNDU2', 1, 36, '2022-09-14');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- Índices para tabela `cartoes`
--
ALTER TABLE `cartoes`
  ADD PRIMARY KEY (`id_info_cartao`);

--
-- Índices para tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id_endereco`);

--
-- Índices para tabela `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id_galeria`);

--
-- Índices para tabela `info_alimento`
--
ALTER TABLE `info_alimento`
  ADD PRIMARY KEY (`id_info_alimento`);

--
-- Índices para tabela `info_roupa`
--
ALTER TABLE `info_roupa`
  ADD PRIMARY KEY (`id_info_roupa`);

--
-- Índices para tabela `item_de_carrinho`
--
ALTER TABLE `item_de_carrinho`
  ADD PRIMARY KEY (`id_item_carrinho`);

--
-- Índices para tabela `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `nome_produto` (`nome_produto`),
  ADD KEY `nome_produto_2` (`nome_produto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_id_pessoa` (`fk_id_pessoa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `cartoes`
--
ALTER TABLE `cartoes`
  MODIFY `id_info_cartao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id_endereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id_galeria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `info_alimento`
--
ALTER TABLE `info_alimento`
  MODIFY `id_info_alimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `info_roupa`
--
ALTER TABLE `info_roupa`
  MODIFY `id_info_roupa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `item_de_carrinho`
--
ALTER TABLE `item_de_carrinho`
  MODIFY `id_item_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_id_pessoa` FOREIGN KEY (`fk_id_pessoa`) REFERENCES `pessoa` (`id_pessoa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
