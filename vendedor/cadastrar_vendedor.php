<?PHP
require_once('../conexao/banco.php');

$codigo = $_REQUEST['txt_codigo'];
$nome = $_REQUEST['txt_nome'];
$empresa = $_REQUEST['txt_empresa'];
$email = $_REQUEST['txt_email'];
$data_cadastro = $_REQUEST['txt_data_cadastro'];
			   

$sql = "insert into tb_vendedor (ven_codigo, ven_nome, ven_empresa, ven_email, ven_data_cadastro) 
								values ('$codigo', '$nome', '$empresa', '$email', '$data_cadastro')";

mysqli_query($con, $sql) or die ("Erro na sql!") ;
	
header("Location: consulta_vendedor.php");

?>