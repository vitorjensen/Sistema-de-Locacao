<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "dblocar";

$con = mysqli_connect($servername, $username, $password, $dbname);

$requestData = $_REQUEST;

$columns = array(
    array( '0' => 'alu_codigo' ),
    array( '1' => 'cli_nome' ),
    array( '2' => 'alu_telefone' ),
    array( '3' => 'alu_cpf' ),
	array( '4' => 'alu_rua' ),
    array( '5' => 'alu_numero' ),
    array( '6' => 'alu_bairro' ),
    array( '7' => 'alu_cidade' ),
	array( '8' => 'alu_estado' ),
    array( '9' => 'alu_complemento' ),
    array( '10' => 'alu_data_inicial' ),
    array( '11' => 'alu_evento' ),
	array( '12' => 'alu_data_compra' ),
    array( '13' => 'alu_data_final' ),
    array( '14' => 'alu_telefone' ),
    array( '15' => 'pro_codigo' ),
	array( '16' => 'alu_descricao' ),
    array( '17' => 'alu_produto' ),
    array( '18' => 'alu_cor' ),
    array( '19' => 'alu_tipo' ),
	array( '20' => 'alu_tamanho' ),
    array( '21' => 'alu_qtde' ),
    array( '22' => 'alu_valor' ),
    array( '23' => 'alu_valor_sinal' ),
	array( '24' => 'alu_resta_pagar' ),
    array( '25' => 'alu_pago_total' ),
    array( '26' => 'alu_tipo_pagamento' ),
    array( '27' => 'ven_nome' ),
	array( '28' => 'alu_observacao' ),
    array( '29' => 'alu_status' )
  

);
 
$result_user = "SELECT cli_nome, alu_telefone, alu_cpf, alu_rua, alu_numero, alu_bairro, alu_cidade, alu_estado, alu_complemento, alu_data_inicial, alu_evento, alu_data_compra, alu_data_final, pro_codigo, alu_descricao, alu_produto, alu_cor, alu_tipo, alu_tamanho, alu_qtde, 
alu_valor, alu_valor_sinal, alu_resta_pagar, alu_pago_total, alu_tipo_pagamento, ven_nome, alu_observacao, alu_status FROM tb_aluguel";
$resultado_user = mysqli_query($con, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

$result_usuarios = "SELECT cli_nome, alu_telefone, alu_cpf, alu_rua, alu_numero, alu_bairro, alu_cidade, alu_estado, alu_complemento, alu_data_inicial, alu_evento, alu_data_compra, alu_data_final, pro_codigo, alu_descricao, alu_produto, alu_cor, alu_tipo, alu_tamanho, alu_qtde, 
alu_valor, alu_valor_sinal, alu_resta_pagar, alu_pago_total, alu_tipo_pagamento, ven_nome, alu_observacao, alu_status FROM tb_aluguel WHERE 1=1";

$result_usuarios = mysqli_query($con, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);

//Ordenar Resultado

$result_usuarios.=" ORDER BY ". $columns[$requestData['order'][0]['column']]." ".$requestData['order'][0]['dir']." LIMIT ".$requestData['start']." ,".$requestData['lenght']." ";
$resultado_usuarios= mysqli_query($con, $result_usuarios);

$dados = array();
while ($row_usuarios =mysqli_fetch_array($resultado_usuarios) ){
	$dados= array();
	$dados[] = $row_usuarios ['alu_codigo'];  
    $dados[] = $row_usuarios ['cli_nome'];   
    $dados[] = $row_usuarios ['alu_telefone']; 
    $dados[] = $row_usuarios ['alu_cpf'];
    $dados[] = $row_usuarios ['alu_rua']; 
	$dados[] = $row_usuarios ['alu_numero']; 
	$dados[] = $row_usuarios ['alu_bairro'];   
	$dados[] = $row_usuarios ['alu_cidade']; 
	$dados[] = $row_usuarios ['alu_estado'];
	$dados[] = $row_usuarios ['alu_complemento'];
	$dados[] = $row_usuarios ['alu_data_inicial']; 
	$dados[] = $row_usuarios ['alu_evento']; 
	$dados[] = $row_usuarios ['alu_data_compra']; 
	$dados[] = $row_usuarios ['alu_data_final']; 
	$dados[] = $row_usuarios ['pro_codigo']; 
	$dados[] = $row_usuarios ['alu_descricao']; 
	$dados[] = $row_usuarios ['alu_produto']; 
	$dados[] = $row_usuarios ['alu_cor']; 
	$dados[] = $row_usuarios ['alu_tipo']; 
	$dados[] = $row_usuarios ['alu_tamanho']; 
	$dados[] = $row_usuarios ['alu_qtde']; 
	 echo "R$" . number_format($dados[] = $row_usuarios['alu_valor'], 2, "," , "."); 
	 echo "R$" . number_format($dados[] = $row_usuarios['alu_valor_sinal'], 2, "," , "."); 
	 echo "R$" . number_format($dados[] = $row_usuarios['alu_resta_pagar'], 2, "," , "."); 
	 $dados[] = $row_usuarios ['alu_pago_total']; 
	 $dados[] = $row_usuarios ['alu_tipo_pagamento']; 
	 $dados[] = $row_usuarios ['ven_nome']; 
	 $dados[] = $row_usuarios ['alu_observacao']; 
	 $dados[] = $row_usuarios ['alu_status'];

	 $dados[] = $dado;

}

$json_data = array(
	"draw"=> intval( $requestData['draw'] ),
  "recordsTotal"=> intval (	$qnt_linhas ),
  "recordsFiltered"=> intval ($totalFiltered ),
  "data" => $dados
);

echo json_encode($json_data);
?>
