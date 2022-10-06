<?PHP
require_once('../conexao/banco.php');

$id 	= $_REQUEST['alu_codigo'];

$sql = "delete from tb_aluguel where alu_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_aluguel.php");

?>