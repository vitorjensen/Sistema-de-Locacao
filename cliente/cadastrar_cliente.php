<?PHP
require_once('../conexao/banco.php');

$codigo = $_REQUEST['txt_codigo'];
$nome = $_REQUEST['txt_nome'];
$telefone = $_REQUEST['txt_telefone'];
$cpf = $_REQUEST['txt_cpf'];
$rua = $_REQUEST['txt_rua'];
$numero = $_REQUEST['txt_numero'];
$bairro = $_REQUEST['txt_bairro'];
$cidade = $_REQUEST['txt_cidade'];
$estado = $_REQUEST['txt_estado'];
$complemento = $_REQUEST['txt_complemento'];
			   

$sql = "insert into tb_cliente (cli_codigo, cli_nome, cli_telefone, cli_cpf, cli_rua, cli_numero, cli_bairro, cli_cidade, cli_estado, cli_complemento) 
								values ('$codigo', '$nome', '$telefone', '$cpf', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$complemento')";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_cliente.php");

?>
