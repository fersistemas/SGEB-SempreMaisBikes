DROP TABLE IF EXISTS tb_cliente;

CREATE TABLE `tb_cliente` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `rg` varchar(12) DEFAULT NULL,
  `telefone` varchar(13) DEFAULT NULL,
  `celular` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tb_login;

CREATE TABLE `tb_login` (
  `cod_login` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`cod_login`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO tb_login VALUES("9","2","teste2","$1$UL1.N04.$Q9FIoT8QtUvsPasrH/2e80");
INSERT INTO tb_login VALUES("8","2","teste2","$1$7G2.Cm/.$XF1Kxdv/7x.hePqVolVS4/");
INSERT INTO tb_login VALUES("6","admin","admin","admin");
INSERT INTO tb_login VALUES("7","testes","testes","testes");
INSERT INTO tb_login VALUES("10","2","teste2","$1$jm/.wW1.$D5HV5ddYR79PjuG25AkW51");
INSERT INTO tb_login VALUES("11","12","12","$1$3/0.OC5.$bgMlkDtTf9Q6VfKVHRhDE.");
INSERT INTO tb_login VALUES("12","12","12","$1$Sx4.zw1.$rNqgOAFFYkdM8hLOeZyKp0");



DROP TABLE IF EXISTS tb_modelo;

CREATE TABLE `tb_modelo` (
  `cod_modelo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  PRIMARY KEY (`cod_modelo`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tb_orcamento;

CREATE TABLE `tb_orcamento` (
  `cod_orcamento` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(100) NOT NULL,
  `rg` varchar(12) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `resumo_orcamento` varchar(255) DEFAULT NULL,
  `valor_orcamento` decimal(10,0) DEFAULT NULL,
  `data_orcamento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cod_orcamento`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS tb_pecas;

CREATE TABLE `tb_pecas` (
  `cod_pecas` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `quantidade` int(10) NOT NULL,
  `preco` int(10) NOT NULL,
  `modelo` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_pecas`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;




