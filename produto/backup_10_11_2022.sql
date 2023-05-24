set foreign_key_checks=0;


#
# //Criação da Tabela : tb_aluguel
#

CREATE TABLE `tb_aluguel` (
  `alu_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cli_codigo` varchar(200) DEFAULT NULL,
  `alu_data_inicial` date NOT NULL,
  `alu_data_final` date NOT NULL,
  `pro_codigo` int(11) DEFAULT NULL,
  `alu_valor` decimal(6,2) DEFAULT NULL,
  `alu_valor_sinal` decimal(6,2) DEFAULT NULL,
  `alu_resta_pagar` decimal(6,2) DEFAULT NULL,
  `alu_pago_total` varchar(20) DEFAULT NULL,
  `alu_tipo_pagamento` varchar(20) DEFAULT NULL,
  `ven_nome` varchar(80) DEFAULT NULL,
  `alu_observacao` varchar(200) NOT NULL,
  `alu_status` varchar(80) DEFAULT NULL,
  `alu_qtde` int(11) DEFAULT NULL,
  PRIMARY KEY (`alu_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_aluguel VALUES('1', '2', '2022-11-08', '2022-11-12', '4', '900.00', '900.00', '0.00', 'SIM', 'CRÉDITO 3X', 'Joyce', 'Pago', 'LOCADO', '1')
,('2', '3', '2022-11-10', '2022-11-14', '1', '700.00', '200.00', '500.00', 'NÃO', 'Débito', 'Deborah', 'À pagar', 'RESERVADO', '1')
,('3', '1', '2022-11-12', '2022-11-16', '6', '750.00', '750.00', '0.00', 'SIM', 'CRÉDITO 2X', 'Jamilly', 'Pago', 'RESERVADO', '1')
,('4', '4', '2022-11-12', '2022-11-16', '1', '700.00', '300.00', '400.00', 'NÃO', 'CRÉDITO 2X', 'Jessica', 'A pagar', 'RESERVADO', '1')
,('5', '5', '2022-11-08', '2022-11-12', '4', '900.00', '800.00', '100.00', 'NÃO', 'CRÉDITO 2X', 'Jessica', 'A pagar', 'LOCADO', '1')
;

#
# //Criação da Tabela : tb_cliente
#

CREATE TABLE `tb_cliente` (
  `cli_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(120) NOT NULL,
  `cli_telefone` varchar(13) NOT NULL,
  `cli_cpf` varchar(14) NOT NULL,
  `cli_rua` varchar(120) NOT NULL,
  `cli_numero` varchar(120) NOT NULL,
  `cli_bairro` varchar(40) NOT NULL,
  `cli_cidade` varchar(120) NOT NULL,
  `cli_estado` char(2) NOT NULL,
  `cli_complemento` varchar(255) NOT NULL,
  PRIMARY KEY (`cli_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_cliente VALUES('1', 'Maria Vitoria ', '19 99432-3230', '345.643.298-75', 'Rua das Dálias', '50', 'Jd Alvorada', 'Americana', 'SP', 'Casa')
,('2', 'Juliana ', '19 99576-3455', '123.876.453-20', 'Rua Amélia ', '500', 'Jd das Flores', 'Nova Odessa', 'SP', 'Apto.')
,('3', 'Maria Fernandes ', '19 99467-8945', '667.876.558-90', 'Rua Carlos Maia', '120', 'Jd América', 'Sumaré', 'SP', 'Casa')
,('4', 'Beatriz', '19 99785-5434', '225.765.446-43', 'Rua Cuba', '400', 'Jd São Paulo', 'Piracicaba', 'SP', 'Casa')
,('5', 'Joana', '19 99568-8845', '111.233.455-66', 'Rua Nova Morada', '20', 'Jd Terra Nova', 'Americana', 'SP', 'Apto.')
,('9', 'Mariana', '19 99546-7666', '235.542.342-34', 'Rua Itabirí', '400', 'Jd Alvorada', 'Americana', 'SP', 'Casa')
;

#
# //Criação da Tabela : tb_fornecedor
#

CREATE TABLE `tb_fornecedor` (
  `for_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `for_pessoa` varchar(20) NOT NULL DEFAULT '0000-00-00',
  `for_cnpj` varchar(18) NOT NULL,
  `for_razao` varchar(40) NOT NULL,
  `for_fantasia` varchar(120) NOT NULL,
  `for_endereco` varchar(120) NOT NULL,
  `for_numero` varchar(120) NOT NULL,
  `for_cidade` varchar(120) NOT NULL,
  `for_estado` char(2) NOT NULL,
  `for_telefone` varchar(14) NOT NULL,
  `for_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`for_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_fornecedor VALUES('1', 'Jurídica', '08.799.668/0001-52', '206-2 - Sociedade Empresária Limitada', 'CARLA LOCACAO DE ROUPAS PARA NOIVAS LTDA', 'AVENIDA GONCALO BOTELHO DE CAMPOS', '2870', 'VARZEA GRANDE', 'MT', '(65) 9606-6456', '2022-10-12 00:00:00')
,('3', 'Jurídica', '16.910.335/0001-87', '206-2 - Sociedade Empresária Limitada', 'DRESS STORE LOCACAO DE VESTIDOS PARA FESTAS LTDA', 'AVENIDA CASTANHEIRAS', 'S/N', 'BRASILIA', 'DF', '(61) 3627-8870', '2022-10-12 00:00:00')
,('4', 'Jurídica', '35.274.269/0001-40', '206-2 - Sociedade Empresária Limitada', 'CELINA MEDEIROS ROUPARIA LTDA', 'RODOVIA BR-381 FERNAO DIAS', 'SN', 'BETIM', 'MG', '(31) 9287-2510', '2022-10-12 00:00:00')
,('5', 'Jurídica', '22.505.965/0001-79', '230-5 - Empresa Individual de Responsabi', 'ROUPARIA MODA FEMININA EIRELI', 'R FRANCISCO DA CUNHA', '197', 'SAO PAULO', 'SP', '(11) 2079-1366', '2022-10-12 00:00:00')
,('6', 'Jurídica', '50.211.705/0001-26', '206-2 - Sociedade Empresária Limitada', 'ESTILO ROUPARIA LTDA', 'AVENIDA VITAL BRASIL', '1297', 'POA', 'SP', '(11) 4639-5909', '2022-10-12 00:00:00')
,('7', 'Jurídica', '08.778.678/0001-01', '230-5 - Empresa Individual de Responsabi', 'LINNA ROUPAS E ACESSORIOS EIRELI', 'R ITABIRITO', '700', 'AMERICANA', 'SP', '(19) 3406-2511', '2022-11-03 00:00:00')
;

#
# //Criação da Tabela : tb_login
#

CREATE TABLE `tb_login` (
  `log_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `log_nome` varchar(120) DEFAULT NULL,
  `log_login` varchar(20) DEFAULT NULL,
  `log_senha` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`log_codigo`),
  UNIQUE KEY `log_senha` (`log_senha`),
  UNIQUE KEY `log_login` (`log_login`),
  UNIQUE KEY `log_nome` (`log_nome`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_login VALUES('1', 'Vitor Jensen', 'Vitor', '113355')
,('5', 'Ramon', 'ramon', '1100')
,('6', 'Aline', 'aline', '1234')
;

#
# //Criação da Tabela : tb_produto
#

CREATE TABLE `tb_produto` (
  `pro_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `pro_foto` varchar(250) NOT NULL,
  `for_fantasia` varchar(120) NOT NULL,
  `pro_descricao` varchar(250) NOT NULL,
  `pro_descricao_add` varchar(250) NOT NULL,
  `pro_custo` decimal(6,2) NOT NULL,
  `pro_indice` int(50) NOT NULL,
  `pro_valor` decimal(6,2) NOT NULL,
  `pro_tamanho` varchar(30) NOT NULL,
  `pro_aluguel` varchar(100) NOT NULL,
  `pro_qtde` int(5) NOT NULL,
  `pro_cor` varchar(10) NOT NULL,
  `pro_status` varchar(10) NOT NULL,
  `pro_tipo` varchar(255) NOT NULL,
  `pro_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pro_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_produto VALUES('1', 'fotos/1666553540.png', 'ROUPARIA MODA FEMININA EIRELI', 'Vestido branco', 'Vestido ROUPARIA FEMININA EIRELI', '900.00', '200', '700.00', 'M', 'Sim', '20', 'BRANCO', '', 'Longo', '2022-10-23 00:00:00')
,('3', 'fotos/1666572760.jpg', 'CELINA MEDEIROS ROUPARIA LTDA', 'Anel', 'Anel CELINA', '300.00', '250', '50.00', 'UN', 'Não', '30', 'DOURADO', '', 'Selecione...', '2022-10-23 00:00:00')
,('4', 'fotos/1667055867.png', 'ESTILO ROUPARIA LTDA', 'Vestido Preto ', 'Vestido preto(Estilo rouparia LTDA)', '1000.00', '100', '900.00', 'M', 'Sim', '25', 'PRETO', '', 'Curto', '2022-10-29 00:00:00')
,('6', 'fotos/1667057189.png', 'ESTILO ROUPARIA LTDA', 'Vestido Vermelho ', 'Vestido(Estilo rouparia LTDA)', '800.00', '50', '750.00', 'UN', 'Sim', '15', 'VERMELHO', '', 'Midi', '2022-10-29 00:00:00')
;

#
# //Criação da Tabela : tb_usuario
#

CREATE TABLE `tb_usuario` (
  `usu_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(120) NOT NULL,
  `usu_telefone` varchar(13) NOT NULL,
  `usu_cidade` varchar(40) NOT NULL,
  `usu_bairro` varchar(120) NOT NULL,
  PRIMARY KEY (`usu_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_usuario VALUES('1', 'Vitor', '19994883660', 'Americana', 'Ns de Fatima')
,('2', 'Joao', '19995663478', 'Piracicaba', 'Nova Veneza')
,('3', 'Natalia', '19994235678', 'Sumare', 'Jd Alvorada')
,('4', 'Pedro', '19997883542', 'Nova Odessa', 'Vila Dainese')
,('5', 'Vanessa', '19993567890', 'Campinas ', 'Jd dos Lirios')
,('6', 'leticia ', '19996784567', 'Pirassununga', 'Nova Morada')
,('7', 'Juliano', '19993457856', 'Sao Paulo', 'Jd Terra Nova')
,('8', 'Julia', '19993255678', 'Guarulhos', 'Vila Sao Joao')
,('9', 'Roberta', '19998765434', 'Americana', 'Jd Boer')
,('10', 'Felipe', '19997865456', 'Americana', 'Vila Imperial')
,('11', 'Marisa', '19998764567', 'Piracicaba', 'Jd Campo Grande')
,('12', 'Guilherme', '19994678576', 'Veneza', 'Campo Belo')
,('13', 'Vitoria', '19993456789', 'Sorocaba', 'Vila da Salvacao')
,('14', 'Maria Clara', '19993457689', 'Santa Barbara', 'Jd Nova Americana')
,('15', 'Maria Eduarda', '19993245678', 'Campo Grande', 'Vila Sao Bento')
,('16', 'Eduardo', '19998765634', 'Mogi Guacu', 'Jd das Flores')
,('17', 'Mateus', '19996754543', 'Pocos ', 'Vila Sao Joao')
,('18', 'Giovana', '19096745452', 'Sumare', 'Vila Primavera')
,('19', 'Davi', '19991234568', 'Mogi Mirim', 'Vila Igua?u')
,('20', 'Fernando', '19995647345', 'Capivari', 'Cuba')
;

#
# //Criação da Tabela : tb_venda
#

CREATE TABLE `tb_venda` (
  `vem_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(200) DEFAULT NULL,
  `vem_telefone` varchar(13) DEFAULT NULL,
  `vem_cpf` varchar(14) DEFAULT NULL,
  `vem_rua` varchar(200) DEFAULT NULL,
  `vem_numero` varchar(100) DEFAULT NULL,
  `vem_bairro` varchar(200) DEFAULT NULL,
  `vem_cidade` varchar(80) DEFAULT NULL,
  `vem_estado` char(2) DEFAULT NULL,
  `vem_complemento` varchar(200) DEFAULT NULL,
  `vem_data_inicial` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vem_evento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `vem_data_compra` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pro_codigo` int(11) DEFAULT NULL,
  `vem_descricao` varchar(200) DEFAULT NULL,
  `vem_produto` varchar(30) DEFAULT NULL,
  `vem_cor` varchar(10) DEFAULT NULL,
  `vem_tipo` varchar(20) DEFAULT NULL,
  `vem_tamanho` char(2) DEFAULT NULL,
  `vem_qtde` int(5) DEFAULT NULL,
  `vem_valor` decimal(6,2) DEFAULT NULL,
  `vem_valor_sinal` decimal(6,2) DEFAULT NULL,
  `vem_resta_pagar` decimal(6,2) DEFAULT NULL,
  `vem_pago_total` varchar(20) DEFAULT NULL,
  `vem_tipo_pagamento` varchar(20) DEFAULT NULL,
  `ven_nome` varchar(20) DEFAULT NULL,
  `vem_observacao` varchar(200) NOT NULL,
  PRIMARY KEY (`vem_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_venda VALUES('1', 'Maria Vitoria', '19 99455-6746', '234.567.663/55', 'Rua America II', '35', 'Bairro Jd Sto Antonio', 'Nova Odessa ', 'SP', 'Casa ', '2022-09-04 00:00:00', '2022-09-10 00:00:00', '2022-09-04 00:00:00', '2', '(DRESS)', 'Vestido', 'PRETO', 'Longo', 'GG', '1', '600.00', '300.00', '300.00', 'NO', 'Crdito 3X', 'Jessica', 'A pagar')
;

#
# //Criação da Tabela : tb_vendedor
#

CREATE TABLE `tb_vendedor` (
  `ven_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ven_nome` varchar(120) NOT NULL,
  `ven_empresa` varchar(120) NOT NULL,
  `ven_email` varchar(40) NOT NULL,
  `ven_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ven_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_vendedor VALUES('1', 'Vanessa', 'Amiss ModaFesta', 'vanessa@gmail.com', '2022-08-18 00:00:00')
,('2', 'Jessica', 'Amiss ModaFesta', 'jessica@gmail.com', '2022-08-18 00:00:00')
,('3', 'Vania', 'Amiss ModaFesta', 'vania@gmail.com', '2022-08-18 00:00:00')
,('4', 'Aline', 'Amiss ModaFesta', 'aline@gmail.com', '2022-08-18 00:00:00')
,('5', 'Deborah', 'Amiss ModaFesta', 'deborah@gmail.com', '2022-08-18 00:00:00')
,('6', 'Joyce', 'Amiss ModaFesta', 'joyce@gmail.com', '2022-08-18 00:00:00')
,('7', 'Jamilly', 'Amiss ModaFesta', 'jamilly@gmail.com', '2022-08-18 00:00:00')
,('8', 'Aline Gusmao', 'Amiss ModaFesta', 'aline@gmail.com', '2022-08-18 00:00:00')
,('9', 'Adriana', 'Amiss ModaFesta ', 'adriana@gmail.com', '2022-08-18 00:00:00')
,('10', 'Lourdes', 'Amiss ModaFesta', 'lourdes@gmail.com', '2022-08-18 00:00:00')
,('13', 'RAMON', 'AMISS', 'ramondomiciano@gmail.com', '2022-10-08 00:00:00')
;
