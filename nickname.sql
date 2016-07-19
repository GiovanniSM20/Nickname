-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jul-2016 às 00:12
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nickname`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `nick_contato`
--

DROP TABLE IF EXISTS `nick_contato`;
CREATE TABLE IF NOT EXISTS `nick_contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `assunto` tinytext NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nick_contato`
--

INSERT INTO `nick_contato` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(15, 'asas', 'ashuas@ahsuhsa.com', 'assas', 'sasas'),
(14, 'ag', 'ashuas@ahsuhsa.com', 'aaa', 'aaa'),
(13, 'ag', 'ashuas@ahsuhsa.com', 'aaa', 'aaa'),
(12, 'Gabriel Carvalho Gama', 'gabriel.carvalhogama@hotmail.com', 'N sei', 'oi meu champz'),
(10, 'weverton', 'a@a.com', 'aa', 'aa'),
(11, 'weverton', 'a@a.com', 'aa', 'aa'),
(9, 'weverton', 'a@a.com', 'aa', 'aa'),
(8, 'weverton', 'a@a.com', 'aa', 'aa'),
(16, 'asas', 'ashuas@ahsuhsa.com', 'assas', 'sasas'),
(17, 'asas', 'ashuas@ahsuhsa.com', 'assas', 'sasas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nick_usuarios`
--

DROP TABLE IF EXISTS `nick_usuarios`;
CREATE TABLE IF NOT EXISTS `nick_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `senha` tinytext NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nick_usuarios`
--

INSERT INTO `nick_usuarios` (`id_usuario`, `nome`, `email`, `senha`) VALUES
(2, 'Gabriel Carvalho Gama', 'gabriel.carvalhogama@hotmail.com', 'oimeuchapa123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
