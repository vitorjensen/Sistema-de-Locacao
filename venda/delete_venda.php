<?PHP
require_once('../conexao/banco.php');

$id 	= $_REQUEST['vem_codigo'];

$sql = "delete from tb_venda where vem_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_venda.php");

?>