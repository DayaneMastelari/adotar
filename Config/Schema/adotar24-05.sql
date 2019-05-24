-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Maio-2019 às 22:53
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
  `porte` varchar(50) DEFAULT NULL,
  `especie` varchar(50) DEFAULT NULL,
  `castrado` varchar(10) DEFAULT NULL,
  `vacinado` varchar(10) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `meses_anos` varchar(50) DEFAULT NULL,
  `caracteristicas` varchar(300) DEFAULT NULL,
  `perdido` varchar(10) DEFAULT NULL,
  `encontrado` varchar(10) DEFAULT NULL,
  `adotado` varchar(10) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `ong_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pets`
--

INSERT INTO `pets` (`id`, `foto`, `nome`, `sexo`, `porte`, `especie`, `castrado`, `vacinado`, `idade`, `meses_anos`, `caracteristicas`, `perdido`, `encontrado`, `adotado`, `usuario_id`, `ong_id`) VALUES
(35, '46mree1y11vlsvwxxrsgjikqg.jpg', 'Milly', 'Fêmea', 'Grande', 'Cachorro', 'Não', 'Não', 4, 'Meses', 'Brincalhão, é bem sociável com crianças de todas as idades', 'Não', NULL, NULL, 20, NULL),
(36, '1963027_605910586164315_950251558_n.jpg', 'Chiby', 'Fêmea', 'Pequeno', 'Gato', 'Sim', 'Sim', 5, 'Anos', 'Adora ficas no colo recebendo carinho', 'Sim', NULL, NULL, 10, NULL),
(37, 'mimi.JPG', 'Mimili', 'Fêmea', 'Pequeno', 'Gato', 'Sim', 'Sim', 3, 'Anos', 'Pelos compridos, é um pouco nervouser as vezes. Não socializa bem com outros animais', 'Não', NULL, NULL, 10, NULL),
(39, '43678617_139308707032941_3383552811564574769_n.jpg', 'Conhaque', 'Macho', 'Grande', 'Cachorro', 'Sim', 'Não', 1, NULL, 'Bem sociavel', 'Não', NULL, 'Sim', 10, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `tipo_usuario` varchar(50) DEFAULT NULL,
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

INSERT INTO `usuarios` (`id`, `nome`, `telefone`, `tipo_usuario`, `cpf`, `estado`, `cep`, `cidade`, `bairro`, `endereco`, `email`, `login`, `senha`) VALUES
(10, 'Dayane Paio', '14996779562', 'usuario', '44364978876', 'SSão PauloP', '17510393', 'Marília', 'Jd Floresta', '31 de março, 25', 'dayane.mastelari@hotmail.com', 'dayane', '610cc014cc28e9e3e9101ee6d038e8475f0041128d0ea3ac1729f31be72cb455'),
(19, 'Miguel', '132454864', 'usuario', '45467465465', 'Bahia', '56594564', 'Marília', 'Palmital', 'Abobrinha', 'miguel.jumior@gmail.com', 'miguel', '610cc014cc28e9e3e9101ee6d038e8475f0041128d0ea3ac1729f31be72cb455'),
(20, 'Ong Anima', '4564156456', 'ong', '1548798745896', 'Amazonas', '4564156156', 'Sitão', 'Jd das Flores', 'Florestas das arvores, 350', 'ong.anima@hotmail.com', 'onganima', '610cc014cc28e9e3e9101ee6d038e8475f0041128d0ea3ac1729f31be72cb455');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
