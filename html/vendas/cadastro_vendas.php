<?PHP
require_once("../seguranca.php");
require_once('../conexao/banco.php');

$codigo_de_vendas				= $_REQUEST['txt_codigo_de_vendas'];
$codigo_do_cliente				= $_REQUEST['txt_codigo_do_cliente'];
$tipo_pgto 			    = $_REQUEST['txt_tipo_pgto'];
$data 				= $_REQUEST['txt_data'];

$sql = "insert into tb_venda (ven_codigo, cli_codigo, ven_tipo_pagamento, ven_data ) 
								values ('$codigo_de_vendas', '$codigo_do_cliente', '$tipo_pgto ', '$data')";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_vendas.php");

?>



