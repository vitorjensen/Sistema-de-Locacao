<?PHP
require_once("../conexao/banco.php");

$id 	= $_REQUEST['txt_codigo'];

$codigo      = $_REQUEST['txt_codigo'];
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

$sql = "update tb_fornecedor set 

        for_pessoa = '$pessoa',
        for_cnpj = '$cnpj',
        for_razao = '$razao',
        for_fantasia = '$fantasia',
        for_endereco = '$endereco',
        for_numero = '$numero',
        for_cidade = '$cidade',
        for_estado = '$estado',
        for_telefone = '$telefone',
        for_data_cadastro = '$data_cadastro'
				where 
					for_codigo = '$id'";
								
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_fornecedor.php");
?>