-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2022 às 22:46
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `users`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`id`, `nome`, `title`, `texto`) VALUES
(1, 'Luiz', 'Subi', 'Subi saltitante a serra cruzante\r\nE bravo gritante, minha voz ouvi\r\nVindo do horizonte a sonora constante\r\nMe fez desfalir\r\nO quão muito perdera\r\nEm tão pouca subida ligeira\r\nEsqueci-me ali.'),
(2, 'Luiz', 'Sonhos', 'Palmas a o buscar completude,\r\nAlmas devotas à caça infindável\r\nÀ deriva sobre ignorante hebetude\r\nQue lhes deem o sonho inefável\r\nCom a sobremesa do falso viver\r\nPor algum motivo simplesmente ser.'),
(3, 'Luiz', 'Mi Deusa', 'Fulcro a mim ditos teus\r\nInda que rufões e bramidos;\r\nComo que fizeram filisteus\r\nSeguiram-na ensurdidos,\r\nTua voz seminal\r\nDiante a tão infernal\r\nInferno dantesco.'),
(4, 'Luiz', 'Vida Fictícia', 'Ficcional hei de ser,\r\nO qual performando\r\nVive tão real viver;\r\nSem forças amando.\r\n\r\nSer de tal qual, a mando,\r\nHouve de ser amável,\r\nPois essência fétida\r\nJaz além do roteiro.'),
(5, 'Luiz', 'Crescer da dor', 'Na dor de ser\r\nVi-me crescer;\r\nCom chicotada e abandono\r\nFiz da beleza meu trono.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, '123', 'Carlos');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
