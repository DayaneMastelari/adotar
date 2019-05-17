-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2019 às 22:47
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adotar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ongs`
--

CREATE TABLE `ongs` (
  `id` int(11) NOT NULL,
  `razao_social` varchar(100) DEFAULT NULL,
  `fantasia` varchar(250) DEFAULT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ongs`
--

INSERT INTO `ongs` (`id`, `razao_social`, `fantasia`, `cnpj`, `telefone`, `estado`, `cep`, `cidade`, `bairro`, `endereco`, `email`, `senha`) VALUES
(4, 'Garra Animais LTDA', 'Garra Marília', '123456789', '(14)3265-8542', 'SSão PauloP', '17584214', 'Marília', 'Palmital', 'Rua Lupércio Garrido', 'garra.marilia@gmail.com', '123456'),
(5, 'Ong Anima LTDA', 'Ang Anima', '45649848646', '(14)3452-8754', 'SSão PauloP', '17524875', 'Marília', 'Acapulco', 'Avenida Alcídes Lajes Magalhães, 140', 'onganima.marilia@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `porte` varchar(50) DEFAULT NULL,
  `castrado` varchar(10) DEFAULT NULL,
  `vacinado` varchar(10) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `ong_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pets`
--

INSERT INTO `pets` (`id`, `foto`, `nome`, `sexo`, `porte`, `castrado`, `vacinado`, `usuario_id`, `ong_id`) VALUES
(6, 'mimi.JPG', 'Mimi', 'Fêmea', 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL),
(10, '38431280_2131143170461043_5222059879744667648_n.jpg', 'Nenê', 'Fêmea', 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL),
(11, '1963027_605910586164315_950251558_n.jpg', 'Chiby', 'Fêmea', 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL),
(12, '40580603_257278035117828_6490784378720448210_n.jpg', 'Houdni', 'Macho', 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL),
(13, '42310580_2287425664604213_7383021124794482308_n.jpg', 'Harry', 'Macho', 'Gigante - De 45 até 90', 'Não', 'Sim', NULL, NULL),
(14, '43678617_139308707032941_3383552811564574769_n.jpg', 'whisky', 'Macho', 'Grande - De 25 até 45', 'Não', 'Sim', NULL, NULL),
(15, '43985303_2347020492193227_7582658725317419066_n.jpg', 'Mimi Vampy', 'Fêmea', '', 'Sim', 'Sim', NULL, NULL),
(16, '52670262_371699780079845_4399683810200995125_n.jpg', 'Emma', 'Fêmea', 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL),
(17, 'IMG_0247.JPG', 'Chili', 'Fêmea', 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL),
(18, '53535916_127461198330074_2229167655871484034_n.jpg', 'Chiby Bolinha', 'Fêmea', 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `celular` varchar(14) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `nascimento` datetime DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `celular`, `cpf`, `nascimento`, `estado`, `cep`, `cidade`, `bairro`, `endereco`, `email`, `senha`) VALUES
(2, 'Hayat Design', '123456789', '44364978876', '1994-06-22 00:00:00', 'Espírito Santo', '17525181', 'Marília', 'Acapulco', 'Avenida Alcídes Lajes Magalhães, 140', 'daya.mastelari@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ongs`
--
ALTER TABLE `ongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pet_usuario_fk` (`usuario_id`),
  ADD KEY `pet_ong_fk` (`ong_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ongs`
--
ALTER TABLE `ongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pet_ong_fk` FOREIGN KEY (`ong_id`) REFERENCES `ongs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pet_usuario_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
