-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2019 at 12:46 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_estoque`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `cod_login` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`cod_login`, `user`, `user_name`, `user_password`) VALUES
(1, 'admin', 'Administrador', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_modelo`
--

CREATE TABLE `tb_modelo` (
  `cod_modelo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_modelo`
--

INSERT INTO `tb_modelo` (`cod_modelo`, `nome`, `preco`) VALUES
(1, 'Shimano', '50'),
(2, 'Yamada', '25'),
(3, 'Logan', '20'),
(4, 'Comum', '15'),
(5, 'Roletado', '25'),
(6, 'Veloforce', '55'),
(7, 'Absolute', '55'),
(8, 'Levorin', '40'),
(9, 'Necco', '17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orcamento`
--

CREATE TABLE `tb_orcamento` (
  `cod_orcamento` int(11) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `rg` varchar(12) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(16) DEFAULT NULL,
  `resumo_orcamento` varchar(255) DEFAULT NULL,
  `valor_orcamento` decimal(10,0) DEFAULT NULL,
  `data_orcamento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_orcamento`
--

INSERT INTO `tb_orcamento` (`cod_orcamento`, `cliente`, `rg`, `telefone`, `celular`, `resumo_orcamento`, `valor_orcamento`, `data_orcamento`) VALUES
(1, 'Eliel Vito Manfrinatto', '12.345.678-9', '(15) 3242-2323', '(15) 9 1234-44', '1-2-3-4-nulo-nulo-nulo-nulo-nulo-nulo', '150', '2019-12-06 00:43:32'),
(2, 'Eliel Vito Manfrinatto', '39.123.123-9', '(15) 3242-1234', '(12) 3 4567-8900', '1-2-3-4-nulo-nulo-nulo-nulo-nulo-nulo', '150', '2019-12-06 00:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pecas`
--

CREATE TABLE `tb_pecas` (
  `cod_pecas` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `preco` int(10) NOT NULL,
  `modelo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pecas`
--

INSERT INTO `tb_pecas` (`cod_pecas`, `nome`, `quantidade`, `preco`, `modelo`) VALUES
(1, 'Manete de Freio', 6, 50, 1),
(2, 'CÃ¢mbio traseiro', 10, 25, 2),
(3, 'V. Brake de alumÃ­nio', 5, 20, 3),
(4, 'PinÃ§a de freio mecÃ£nico', 4, 55, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`cod_login`);

--
-- Indexes for table `tb_modelo`
--
ALTER TABLE `tb_modelo`
  ADD PRIMARY KEY (`cod_modelo`);

--
-- Indexes for table `tb_orcamento`
--
ALTER TABLE `tb_orcamento`
  ADD PRIMARY KEY (`cod_orcamento`);

--
-- Indexes for table `tb_pecas`
--
ALTER TABLE `tb_pecas`
  ADD PRIMARY KEY (`cod_pecas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `cod_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_modelo`
--
ALTER TABLE `tb_modelo`
  MODIFY `cod_modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_orcamento`
--
ALTER TABLE `tb_orcamento`
  MODIFY `cod_orcamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pecas`
--
ALTER TABLE `tb_pecas`
  MODIFY `cod_pecas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
