DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(100) DEFAULT NULL,
  celular varchar(14) DEFAULT NULL,
  cpf varchar(14) DEFAULT NULL,
  nascimento datetime DEFAULT NULL,
  estado varchar(100) DEFAULT NULL,
  cep varchar(10) DEFAULT NULL,
  cidade varchar(100) DEFAULT NULL,
  bairro varchar(100) DEFAULT NULL,
  endereco varchar(100) DEFAULT NULL,
  numero int(11) DEFAULT NULL,
  email varchar(100) DEFAULT NULL,
  senha varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE ongs (
  id int(11) NOT NULL AUTO_INCREMENT,
  razao_social varchar(100) DEFAULT NULL,
  cnpj varchar(14) DEFAULT NULL,
  telefone varchar(14) DEFAULT NULL,  
  estado varchar(100) DEFAULT NULL,
  cep varchar(10) DEFAULT NULL,
  cidade varchar(100) DEFAULT NULL,
  bairro varchar(100) DEFAULT NULL,
  endereco varchar(100) DEFAULT NULL,
  numero int(11) DEFAULT NULL,
  email varchar(100) DEFAULT NULL,
  senha varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `pets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `sexo` varchar(1) DEFAULT NULL,  
  `porte` varchar(25) DEFAULT NULL,
  `castrado` varchar(1) DEFAULT NULL,
  `vacinado` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `pets`
  ADD `usuario_id` int(11) DEFAULT NULL,
  ADD `ong_id` int(11) DEFAUT NULL;

ALTER TABLE `pets`
  ADD KEY `pet_usuario_fk` (`usuario_id`),
  ADD KEY `pet_ong_fk` (`ong_id`);


ALTER TABLE `pets`
  ADD CONSTRAINT `pet_usuario_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pet_ong_fk` FOREIGN KEY (`ong_id`) REFERENCES `ongs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;