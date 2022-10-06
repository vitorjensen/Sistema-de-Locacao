<?PHP
require_once("../conexao/banco.php");

$id 	= $_REQUEST['txt_codigo'];

$codigo      = $_REQUEST['txt_codigo'];
$nome        = $_REQUEST['txt_nome'];
$telefone    = $_REQUEST['txt_telefone'];
$cpf         = $_REQUEST['txt_cpf'];
$rua         = $_REQUEST['txt_rua'];
$numero      = $_REQUEST['txt_numero'];
$bairro      = $_REQUEST['txt_bairro'];
$cidade      = $_REQUEST['txt_cidade'];
$estado      = $_REQUEST['txt_estado'];
$complemento = $_REQUEST['txt_complemento'];

$sql = "update tb_cliente set 
					cli_nome = '$nome',  
					cli_telefone = '$telefone', 
					cli_cpf = '$cpf',
					cli_rua = '$rua',
					cli_numero = '$numero',  
					cli_bairro = '$bairro', 
					cli_cidade = '$cidade',
					cli_estado  = '$estado ',
					cli_complemento = '$complemento'  
				where 
				cli_codigo = '$id'";
								
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_cliente.php");
?>