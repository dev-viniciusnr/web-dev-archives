-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06/01/2021 às 01:49
-- Versão do servidor: 10.4.16-MariaDB
-- Versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tetris`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `matches`
--

CREATE TABLE `matches` (
  `username` varchar(100) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `difficulty` varchar(20) DEFAULT NULL,
  `time_played` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `matches`
--

INSERT INTO `matches` (`username`, `score`, `difficulty`, `time_played`) VALUES
('arthursmr', 0, 'Normal', '12'),
('admin', 0, 'Normal', '10'),
('arthur', 1000, 'Normal', '132'),
('vinicius', 500, 'Normal', '170'),
('Igor', 5040, 'Normal', '241'),
('Vitao', 125, 'Normal', '61');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `usuario`, `senha`, `nome`, `data`, `cpf`, `telefone`, `email`) VALUES
(1, 'admin', 'admin', 'admin', '17/09/1999', '1111', '111', '11@11.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
