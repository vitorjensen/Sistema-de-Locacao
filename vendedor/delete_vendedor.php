<?PHP
require_once('../conexao/banco.php');

$id 	= $_REQUEST['ven_codigo'];

$sql = "delete from tb_vendedor where ven_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_vendedor.php");

?>