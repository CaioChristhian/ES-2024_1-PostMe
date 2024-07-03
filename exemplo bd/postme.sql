-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/07/2024 às 12:43
-- Versão do servidor: 8.0.37
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `postme`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `username` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `texto` varchar(280) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `posts`
--

INSERT INTO `posts` (`id`, `username`, `texto`) VALUES
(7, 'User1', 'COMO DIMINUI A FONTE????'),
(8, 'User2', 'Clica no Caps Lock!!\r\n'),
(10, 'User3', 'Tenta soltar o shift 😐'),
(11, 'User1', 'Foi, vlw'),
(12, 'User2', 'Agora como faz para colcocar emoji?'),
(13, 'User1', 'Essa eu sei. Aperta o botão do windows + o ponto final 🤓'),
(14, 'User2', 'Muito Obrigada 🥰'),
(15, 'User3', 'Pera, você não sabe mudar de MAIÚSCULA para minuscula mais sabe colocar emoji? 🤨'),
(16, 'User1', 'Eita, furo no roteiro 🤡');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bio` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `admin` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `bio`, `admin`) VALUES
(40, 'admin', '$2y$10$2HjOhxjP2hLkPgpJSRxLn.2NTmCqQFLPZj2lqPlF6CQxflVM.orl.', 'Tenho todo o poder q eu tenho', 1),
(45, 'User1', '$2y$10$PuEyNoNWdQzBcUPRb0TTheirp8Zbp2tJl.P8uTipxlZWCTbGyYYiy', 'Oq escrever sobre mim...', 0),
(46, 'User2', '$2y$10$2lpB43MpN5PCT1glR25MM.mfBxHI2OS3cb6iYFTMZX7Vji0EjJbCi', NULL, 0),
(47, 'User3', '$2y$10$LuIhcwuwgQQr0cFty7tcyOzvJHjzI/y.jldYAjMF/G8Yf26dLFJHO', 'Ada aado quem tiver lendo isso é...', 0),
(48, 'Edaurdo Henrique', '$2y$10$WjwVnajUa93fEqLB7pTUAe2iz.VGYHOpV7tLe42IERO7HLZukX9R.', 'Acho q escrevi meu nome errado\r\n*Eduardo Henrique', 0),
(49, 'User10', '$2y$10$EdTvEvcoS5AAGXz/YxxC2eqh6hh4JQw0l5CYzLYeQVEskH/dNeV6W', 'User10 pque User1 já existia', 0),
(50, 'eminem67', '$2y$10$IlOq/le4S9c2Q/FBQEUrpeRqVAHKrxU.zjOUXHl3tezrnRrW928vi', 'gosto de musicas', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
