DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(100) DEFAULT NULL,
  celular varchar(14) DEFAULT NULL,
  cpf varchar(14) DEFAULT NULL,
  nascimento datetime DEFAULT NULL,
  estado varchar(2) DEFAULT NULL,
  cep varchar(10) DEFAULT NULL,
  cidade varchar(100) DEFAULT NULL,
  bairro varchar(100) DEFAULT NULL,
  endereco varchar(100) DEFAULT NULL,
  numero int(11) DEFAULT NULL,
  email varchar(100) DEFAULT NULL,
  senha varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;