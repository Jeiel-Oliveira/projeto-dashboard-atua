-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 29-Jan-2020 às 17:23
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `atua`
--
CREATE DATABASE IF NOT EXISTS `atua` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `atua`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_task`
--

CREATE TABLE IF NOT EXISTS `tb_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_tarefa` varchar(100) NOT NULL,
  `data` date DEFAULT NULL,
  `responsavel` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Extraindo dados da tabela `tb_task`
--

INSERT INTO `tb_task` (`id`, `nome_tarefa`, `data`, `responsavel`) VALUES
(73, 'Tarefa 1', '2020-01-02', 'João'),
(74, 'Tarefa 2', '2020-01-31', 'José'),
(75, 'Tarefa 3', '2020-01-29', 'Maria'),
(76, 'Tarefa 4', '2020-01-24', 'Jeiel Alves');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
