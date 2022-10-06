<?PHP
require_once("../conexao/banco.php");

$id 	= $_REQUEST['txt_codigo'];

$nome 				= $_REQUEST['txt_nome'];
$empresa  			= $_REQUEST['txt_empresa'];
$email 				= $_REQUEST['txt_email'];
$data_cadastro 	    = $_REQUEST['txt_data_cadastro'];

$sql = "update tb_vendedor set 
					ven_nome = '$nome',  
					ven_empresa = '$empresa', 
					ven_email = '$email',
					ven_data_cadastro = '$data_cadastro'
				where 
					ven_codigo = '$id'";
								
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_vendedor.php");
?>