<?PHP
require_once('../conexao/banco.php');

$codigo = $_REQUEST['txt_codigo'];
$pessoa = $_REQUEST['txt_pessoa'];
$cnpj = $_REQUEST['txt_cnpj'];
$razao = $_REQUEST['txt_razao'];
$fantasia = $_REQUEST['txt_fantasia'];
$endereco = $_REQUEST['txt_endereco'];
$numero = $_REQUEST['txt_numero'];
$cidade = $_REQUEST['txt_cidade'];
$estado = $_REQUEST['txt_estado'];
$telefone = $_REQUEST['txt_telefone'];
$data_cadastro = $_REQUEST['txt_data_cadastro'];
			   

$sql = "insert into tb_fornecedor (for_codigo, for_pessoa, for_cnpj, for_razao, for_fantasia, for_endereco, for_numero, for_cidade, for_estado, for_telefone, for_data_cadastro) 
								values ('$codigo', '$pessoa', '$cnpj', '$razao', '$fantasia', '$endereco', '$numero', '$cidade', '$estado', '$telefone', '$data_cadastro')";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_fornecedor.php");

?>