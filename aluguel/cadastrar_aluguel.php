<?PHP
require_once('../conexao/banco.php');

$nome = $_REQUEST['txt_nome'];
$telefone = $_REQUEST['txt_telefone'];
$cpf = $_REQUEST['txt_cpf'];
$rua = $_REQUEST['txt_rua'];
$numero = $_REQUEST['txt_numero'];
$bairro = $_REQUEST['txt_bairro'];
$cidade = $_REQUEST['txt_cidade'];
$estado = $_REQUEST['txt_estado'];
$complemento = $_REQUEST['txt_complemento'];
$data_inicial = $_REQUEST['txt_data_inicial'];
$evento = $_REQUEST['txt_evento'];
$data_compra = $_REQUEST['txt_data_compra'];
$data_final = $_REQUEST['txt_data_final'];
$codigo_produto = $_REQUEST['txt_codigo_produto'];
$descricao = $_REQUEST['txt_descricao'];
$produto = $_REQUEST['txt_produto'];
$cor = $_REQUEST['txt_cor'];
$tipo = $_REQUEST['txt_tipo'];
$tamanho = $_REQUEST['txt_tamanho'];
$qtde = $_REQUEST['txt_qtde'];
$valor = $_REQUEST['txt_valor'];
$valor_sinal = $_REQUEST['txt_valor_sinal'];
$resta_pagar = $_REQUEST['txt_resta_pagar'];
$pago_total = $_REQUEST['txt_pago_total'];
$tipo_pagamento = $_REQUEST['txt_tipo_pagamento'];
$vendedor = $_REQUEST['txt_vendedor'];
$observacao = $_REQUEST['txt_observacao'];
$status = $_REQUEST['txt_status'];
			   

$sql = "insert into tb_aluguel (cli_nome, alu_telefone, alu_cpf, alu_rua, alu_numero, alu_bairro, alu_cidade, alu_estado, alu_complemento, alu_data_inicial, alu_evento, alu_data_compra, alu_data_final, pro_codigo, alu_descricao, alu_produto, alu_cor, alu_tipo, alu_tamanho, alu_qtde, alu_valor, alu_valor_sinal, alu_resta_pagar, alu_pago_total, alu_tipo_pagamento, ven_nome, alu_observacao, alu_status) 
								values ('$nome', '$telefone', '$cpf', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$complemento', '$data_inicial', '$evento', '$data_compra', '$data_final', '$codigo_produto', '$descricao', '$produto', '$cor', '$tipo', '$tamanho', '$qtde', '$valor', '$valor_sinal', '$resta_pagar', '$pago_total', '$tipo_pagamento', '$vendedor', '$observacao', '$status')";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_aluguel.php");

?>
