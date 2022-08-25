-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2022 at 08:32 AM
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
-- Table structure for table `info_alimento`
--

CREATE TABLE `info_alimento` (
  `id_info_alimento` int(11) NOT NULL,
  `estoque` varchar(150) NOT NULL,
  `preco` float NOT NULL,
  `embalagem` varchar(150) NOT NULL,
  `peso` varchar(100) NOT NULL,
  `sabor` varchar(150) NOT NULL,
  `fk_id_alimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_alimento`
--

INSERT INTO `info_alimento` (`id_info_alimento`, `estoque`, `preco`, `embalagem`, `peso`, `sabor`, `fk_id_alimento`) VALUES
(1, '300', 8.99, 'Garrafa de vidro', '1 Litro', 'Suco de uva', 14),
(2, '250', 4.99, 'Cápsula', '200 Gramas', 'Chocolate', 13),
(3, '350', 8.99, 'Garrafa de vidro', '1 Litro', 'Suco de laranja', 14),
(4, '300', 8.99, 'Garrafa de vidro', '1 Litro', 'Suco de abacaxi', 14),
(5, '300', 4.99, 'Cápsula', '200 Gramas', 'Clássico', 13),
(6, '300', 8.99, 'Garrafa de vidro', '1 Litro', 'Suco de pêssego', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_alimento`
--
ALTER TABLE `info_alimento`
  ADD PRIMARY KEY (`id_info_alimento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_alimento`
--
ALTER TABLE `info_alimento`
  MODIFY `id_info_alimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
