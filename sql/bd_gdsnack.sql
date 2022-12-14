-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Dez-2022 às 22:58
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_gdsnack`
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
  `fsexo` varchar(1) DEFAULT NULL,
  `ftel` varchar(15) NOT NULL,
  `fcep` varchar(9) NOT NULL,
  `frua` varchar(100) NOT NULL,
  `fnum` int(10) NOT NULL,
  `fbairro` varchar(100) NOT NULL,
  `fest` varchar(2) DEFAULT NULL,
  `fcid` varchar(80) NOT NULL,
  PRIMARY KEY (`fcpf`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`fnome`, `fsobr`, `femail`, `fcpf`, `fnasc`, `fsexo`, `ftel`, `fcep`, `frua`, `fnum`, `fbairro`, `fest`, `fcid`) VALUES
('Maria', 'Antonieta Abradah', 'atonieta54@hotmail.com', '75211464587', '2002-04-28', 'F', '41998132417', '36600280', 'Laguna Almeida', 880, 'Juliano de Assis', 'SP', 'NinguÃ©m Sabe'),
('Kalyson', 'Alberto Miranda', 'kaka@bol.com.br', '12365478987', '1997-09-23', 'M', '21997851632', '220360110', 'R.Bastos de Lima', 15, 'Londrina', 'RJ', ''),
('Jubileu', 'Campos', 'Jubilucocampos@gmail.com', '12451364875', '1967-03-12', '', '32991956447', '12000056', 'Cipriano Machado', 542, 'Alphino', 'NG', 'Juizeiro'),
('Juliana', 'Domnique', 'domniqueju@yahoo.com', '55487633045', '2001-02-10', '', '18933874526', '123005111', 'Mariano ProcÃ³pio', 47, 'Barbiekill', 'MG', 'Juiz ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `uusuario` varchar(6) NOT NULL,
  `unome` varchar(30) NOT NULL,
  `usenha` varchar(32) NOT NULL,
  PRIMARY KEY (`uusuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`uusuario`, `unome`, `usenha`) VALUES
('258879', 'Maria', 'c81e728d9d4c2f636f067f89cc14862c'),
('123456', 'Samara', 'd93fac0aa9e6f682d248328c737c9d69'),
('232456', 'ramon', 'c62450e15cbb50413a129f556b490b5b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
