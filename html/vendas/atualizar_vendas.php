<?PHP
require_once("../conexao/banco.php");

$id 	= $_REQUEST['txt_codigo'];

$codigo_de_vendas				= $_REQUEST['codigo_de_vendas'];
$codigo_do_cliente				= $_REQUEST['txt_codigo_do_cliente'];
$tipo_pgto 			    		= $_REQUEST['tipo_pgto'];
$data 							= $_REQUEST['data'];


$sql = "update tb_venda set 
					ven_codigo = '$codigo_de_vendas', 
					cli_codigo = '$codigo_do_cliente',
					ven_tipo_pagamento = '$tipo_pgto', 
					ven_data = '$data' 
				where 
					ven_codigo = '$id'";
								
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_vendas.php");
?>


