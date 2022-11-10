<?PHP
require_once("../conexao/banco.php");

$id 	= $_REQUEST['txt_codigo'];

$codigo = $_REQUEST['txt_codigo'];
$nome = $_REQUEST['txt_nome'];
$telefone = $_REQUEST['txt_telefone'];
$cpf = $_REQUEST['txt_cpf'];
$data_inicial = $_REQUEST['txt_data_inicial'];
$data_final = $_REQUEST['txt_data_final'];
$codigo_produto = $_REQUEST['txt_codigo_produto'];
$descricao = $_REQUEST['txt_descricao'];
$qtde = $_REQUEST['txt_qtde'];
$valor = $_REQUEST['txt_valor'];
$valor_sinal = $_REQUEST['txt_valor_sinal'];
$resta_pagar = $_REQUEST['txt_resta_pagar'];
$pago_total = $_REQUEST['txt_pago_total'];
$tipo_pagamento = $_REQUEST['txt_tipo_pagamento'];
$vendedor = $_REQUEST['txt_vendedor'];
$status = $_REQUEST['txt_status'];

$sql = "update tb_aluguel set 

        alu_codigo = '$codigo',
        cli_nome = '$nome',
        cli_telefone = '$telefone',
        cli_cpf = '$cpf',
        alu_data_inicial = '$data_inicial',
        alu_data_final = '$data_final',
        pro_codigo = '$codigo_produto',
        alu_descricao = '$descricao',
        alu_qtde = '$qtde',
        alu_valor = '$valor',
        alu_valor_sinal = '$valor_sinal'
        alu_resta_pagar = '$resta_pagar',
        alu_pago_total = '$pago_total',
        alu_tipo_pagamento = '$tipo_pagamento',
        ven_nome = '$vendedor',
        alu_status = '$status'
				where 
					alu_codigo = '$id'";
								
mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_aluguel.php");
?>