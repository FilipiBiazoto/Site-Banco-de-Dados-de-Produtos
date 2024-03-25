-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/03/2024 às 16:56
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_patrimonio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `recupera_senha` varchar(255) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `email`, `genero`, `telefone`, `cpf`, `endereco`, `tipo`, `senha`, `recupera_senha`, `data_cadastro`, `foto`) VALUES
(1, 'usuario 1', 'usuario1@usuario.com', 'masculino', '(99)999999999', '99999999999', '123', 'pessoa fisica', '123456', '', '2024-03-22 13:58:49', 'foto.png'),
(2, 'usuario 2', 'usuario2@usuario.com', 'masculino', '(99)999999999', '123.456.789-10', '123321', 'adm', '123', '', '2024-03-22 14:01:09', 'foto.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tp_produtos`
--

CREATE TABLE `tp_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `origem` varchar(255) NOT NULL,
  `identificacao` varchar(255) NOT NULL,
  `local_guardado` varchar(255) NOT NULL,
  `data_registro` datetime NOT NULL,
  `nomereg` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tp_produtos`
--

INSERT INTO `tp_produtos` (`id`, `nome`, `preco`, `origem`, `identificacao`, `local_guardado`, `data_registro`, `nomereg`, `telefone`, `foto`) VALUES
(2, 'Pratileira', '100,00', 'Brasil', 'Id69', 'Sao Paulo', '0000-00-00 00:00:00', 'Filipi', '(19) 3661-2035', 'i1.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tp_produtos`
--
ALTER TABLE `tp_produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `tp_produtos`
--
ALTER TABLE `tp_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
