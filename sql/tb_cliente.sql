-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07-Dez-2022 às 07:20
-- Versão do servidor: 5.7.23
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_gdsnack`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `fnome` varchar(45) NOT NULL,
  `fsobr` varchar(80) NOT NULL,
  `femail` varchar(80) NOT NULL,
  `fcpf` varchar(14) NOT NULL,
  `fnasc` date NOT NULL,
  `fsexo` varchar(1) NOT NULL,
  `ftel` varchar(15) NOT NULL,
  `fcep` varchar(9) NOT NULL,
  `frua` varchar(100) NOT NULL,
  `fnum` int(10) NOT NULL,
  `fbairro` varchar(100) NOT NULL,
  `fest` varchar(2) NOT NULL,
  `fcid` varchar(80) NOT NULL,
  PRIMARY KEY (`fcpf`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`fnome`, `fsobr`, `femail`, `fcpf`, `fnasc`, `fsexo`, `ftel`, `fcep`, `frua`, `fnum`, `fbairro`, `fest`, `fcid`) VALUES
('Nicolas', 'Campos', 'ramonampos1802@gmail.com', '12334556789', '2000-03-12', 'M', '32991971685', '32443554', 'Gentil Correa', 345, 'Alfredo Lima', 'MG', 'Bicas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
