-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/01/2024 às 18:47
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
-- Banco de dados: `memes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `memelist`
--

CREATE TABLE `memelist` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `memelist`
--

INSERT INTO `memelist` (`id`, `link`, `title`) VALUES
(1, 'https://www.youtube.com/watch?v=sQoiM7i5Nqc&ab_channel=Codehal', 'TesteMemes'),
(2, 'https://www.youtube.com/watch?v=EfFVPgEzzUI&ab_channel=EXODIA', 'MemeTeste2'),
(3, 'https://www.youtube.com/watch?v=sQoiM7i5Nqc&ab_channel=Codehal', 'asdasdasd'),
(4, 'https://www.youtube.com/watch?v=lSlVkHJ7zpY&ab_channel=jaybuffet', 'michael'),
(5, 'https://www.tiktok.com/@empatiacristao/video/7287665901929827590?is_from_webapp=1&sender_device=pc', 'TesteTiktok'),
(6, 'https://x.com/NoContextHumans/status/1726969835077476456?s=20', 'TesteTwitter'),
(8, 'https://x.com/apenasconcordo/status/1726604293841817780?s=20', 'teste 3 twitter'),
(9, 'https://twitter.com/apenasconcordo/status/1726604293841817780', 'teste 4 twitter'),
(10, 'https://www.youtube.com/watch?v=mkW8br_btks&t=1s', 'cabeça de pica');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `memelist`
--
ALTER TABLE `memelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `memelist`
--
ALTER TABLE `memelist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
