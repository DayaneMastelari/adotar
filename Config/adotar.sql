-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Maio-2019 às 23:00
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
-- Estrutura da tabela `acos`
--

CREATE TABLE `acos` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'Usuarios', 1, 2),
(2, NULL, NULL, NULL, 'Pets', 3, 4),
(3, NULL, NULL, NULL, 'Ongs', 5, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros`
--

CREATE TABLE `aros` (
  `id` int(10) NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Usuario', 10, NULL, 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aros_acos`
--

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `_read` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `_update` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `_delete` varchar(2) COLLATE utf8_bin NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 2, '1', '1', '1', '1'),
(2, 1, 1, '1', '1', '1', '1'),
(3, 1, 3, '-1', '-1', '-1', '-1');

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
  `especie` varchar(50) DEFAULT NULL,
  `porte` varchar(50) DEFAULT NULL,
  `castrado` varchar(10) DEFAULT NULL,
  `vacinado` varchar(10) DEFAULT NULL,
  `especie-pet` varchar(50) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `meses-anos` varchar(50) DEFAULT NULL,
  `perdido` varchar(10) DEFAULT NULL,
  `adotado` varchar(10) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `ong_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pets`
--

INSERT INTO `pets` (`id`, `foto`, `nome`, `sexo`, `especie`, `porte`, `castrado`, `vacinado`, `especie-pet`, `idade`, `meses-anos`, `perdido`, `adotado`, `usuario_id`, `ong_id`) VALUES
(6, 'mimi.JPG', 'Mimi', 'Fêmea', NULL, 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL, NULL, 'Sim', NULL, 19, NULL),
(10, '38431280_2131143170461043_5222059879744667648_n.jpg', 'Nenê', 'Fêmea', NULL, 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL, NULL, 'Sim', NULL, 10, NULL),
(11, '1963027_605910586164315_950251558_n.jpg', 'Chiby', 'Fêmea', NULL, 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL, NULL, 'Não', NULL, NULL, NULL),
(12, '40580603_257278035117828_6490784378720448210_n.jpg', 'Houdni', 'Macho', NULL, 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL, NULL, 'Não', NULL, 19, NULL),
(15, '43985303_2347020492193227_7582658725317419066_n.jpg', 'Mimi Vampy', 'Fêmea', NULL, '', 'Sim', 'Sim', NULL, NULL, NULL, 'Não', NULL, NULL, NULL),
(16, '52670262_371699780079845_4399683810200995125_n.jpg', 'Emma', 'Fêmea', NULL, 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL, NULL, 'Não', NULL, NULL, NULL),
(17, 'IMG_0247.JPG', 'Chili', 'Fêmea', NULL, 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL, NULL, 'Não', NULL, NULL, NULL),
(18, '53535916_127461198330074_2229167655871484034_n.jpg', 'Chiby Bolinha', 'Fêmea', NULL, 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL, NULL, 'Não', NULL, 19, NULL),
(19, '11203356_1028246623869403_388277212_n.jpg', 'Bidio', 'Macho', NULL, 'Mini - Até 5 quilos', 'Sim', 'Sim', NULL, NULL, NULL, 'Não', NULL, 19, NULL),
(31, '43985303_2347020492193227_7582658725317419066_n.jpg', 'mimili', '', NULL, '', '', '', '', NULL, '', 'Não', NULL, 10, NULL),
(32, 'dog3-600x459.jpg', 'lucas', '', NULL, '', '', '', '', NULL, '', 'Não', NULL, 10, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `telefone`, `cpf`, `estado`, `cep`, `cidade`, `bairro`, `endereco`, `email`, `login`, `senha`) VALUES
(10, 'Dayane Paio', '14996779562', '44364978876', 'SSão PauloP', '17510393', 'Marília', 'Jd Floresta', '31 de março, 25', 'dayane.mastelari@hotmail.com', 'dayane', '610cc014cc28e9e3e9101ee6d038e8475f0041128d0ea3ac1729f31be72cb455'),
(19, 'Miguel', '132454864', '45467465465', 'Bahia', '56594564', 'Marília', 'Palmital', 'Abobrinha', 'miguel.jumior@gmail.com', 'miguel', '610cc014cc28e9e3e9101ee6d038e8475f0041128d0ea3ac1729f31be72cb455');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acos`
--
ALTER TABLE `acos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_acos_lft_rght` (`lft`,`rght`),
  ADD KEY `idx_acos_alias` (`alias`);

--
-- Indexes for table `aros`
--
ALTER TABLE `aros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_aros_lft_rght` (`lft`,`rght`),
  ADD KEY `idx_aros_alias` (`alias`);

--
-- Indexes for table `aros_acos`
--
ALTER TABLE `aros_acos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  ADD KEY `idx_aco_id` (`aco_id`);

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
-- AUTO_INCREMENT for table `acos`
--
ALTER TABLE `acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aros`
--
ALTER TABLE `aros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aros_acos`
--
ALTER TABLE `aros_acos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ongs`
--
ALTER TABLE `ongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
