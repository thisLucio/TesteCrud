-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Set-2017 às 20:07
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unisale`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idusuarios` int(10) unsigned NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `celular` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `cpf`, `nome`, `celular`, `email`, `login`, `senha`) VALUES
(1, '12345678901', 'Manoel da Silva', '(18)989897766', 'manoel@usuarios.com.br', 'manoel@usuarios.com.br', md5('1')),
(2, '12345678902', 'Maria da Silva', '(18)989897755', 'maria@usuarios.com.br', 'maria@usuarios.com.br',md5('1')),
(3, '12345678903', 'Andreia da Silva', '(18)989897744', 'andreia@usuarios.com.br', 'andreia@usuarios.com.br', md5('1')),
(4, '12345678904', 'Carlos da Silva', '(18)989897733', 'carlos@usuarios.com.br', 'carlos@usuarios.com.br', md5('1')),
(5, '12345678905', 'Caio da Silva', '(18)989897722', 'caio@usuarios.com.br', 'caio', md5('1')),
(6, '12345678906', 'Moura da Silva', '(18)989897711', 'moura@usuarios.com.br', 'moura', md5('1')),
(7, '12345678907', 'Oswaldo da Silva', '(18)989897700', 'oswaldo@usuarios.com.br', 'oswaldo', md5('1')),
(8, '12345678908', 'Regina da Silva', '(18)989897710', 'regina@usuarios.com.br', 'regina', md5('1'));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idusuarios`), ADD UNIQUE KEY `login` (`login`), ADD KEY `documento` (`cpf`), ADD KEY `endemail` (`email`), ADD KEY `login_2` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idusuarios` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
