-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 09:09 AM
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
-- Table structure for table `cartoes`
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
-- Dumping data for table `cartoes`
--

INSERT INTO `cartoes` (`id_info_cartao`, `nome_cartao`, `validade`, `cvv`, `numero`, `fk_id_pessoa`) VALUES
(1, '', '12/2026', 666, '2147483647', 0),
(2, '', '12/2026', 666, '2147483647', 0),
(3, '', '12/2026', 666, '2147483647', 0),
(4, 'Jonas', '10/2026', 666, '2147483647', 0),
(5, 'Jonas', '10/2026', 666, '2147483647', 0),
(6, 'Jonas', '12/2026', 656, '2341938483239471', 1),
(7, 'Costa', '11/2222', 666, '2147483647', 0),
(10, 'Cuca', '09/2022', 999, '923647852342445', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cartoes`
--
ALTER TABLE `cartoes`
  ADD PRIMARY KEY (`id_info_cartao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cartoes`
--
ALTER TABLE `cartoes`
  MODIFY `id_info_cartao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
