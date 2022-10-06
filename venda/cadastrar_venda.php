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
			   

$sql = "insert into tb_venda (cli_nome, vem_telefone, vem_cpf, vem_rua, vem_numero, vem_bairro, vem_cidade, vem_estado, vem_complemento, vem_data_inicial, vem_evento, vem_data_compra, pro_codigo, vem_descricao, vem_produto, vem_cor, vem_tipo, vem_tamanho, vem_qtde, vem_valor, vem_valor_sinal, vem_resta_pagar, vem_pago_total, vem_tipo_pagamento, ven_nome, vem_observacao) 
								values ('$nome', '$telefone', '$cpf', '$rua', '$numero', '$bairro', '$cidade', '$estado', '$complemento', '$data_inicial', '$evento', '$data_compra', '$codigo_produto', '$descricao', '$produto', '$cor', '$tipo', '$tamanho', '$qtde', '$valor', '$valor_sinal', '$resta_pagar', '$pago_total', '$tipo_pagamento', '$vendedor', '$observacao')";

mysqli_query($con, $sql) or die ("Erro na sql!") ;

header("Location: consulta_venda.php");

?>