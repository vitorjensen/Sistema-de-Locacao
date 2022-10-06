# Structure for the `tb_venda` table : 
#

CREATE TABLE `tb_venda` (
  `ven_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cli_codigo` int(11) DEFAULT NULL,
  `ven_tipo_pagamento` int(1) DEFAULT NULL,
  `ven_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ven_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;

#
# Structure for the `tb_itens_venda` table : 
#

CREATE TABLE `tb_itens_venda` (
  `ite_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ven_codigo` int(11) DEFAULT NULL,
  `pro_codigo` int(11) DEFAULT NULL,
  `ite_valor_unit` decimal(7,2) DEFAULT NULL,
  `ite_qtde` int(11) DEFAULT NULL,
  `ite_total` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`ite_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;
