<?PHP
require_once("../conexao/banco.php");

$id 	= $_REQUEST['txt_codigo'];

$foto_antiga = $_REQUEST['txt_foto'];
$fornecedor = $_REQUEST['txt_fornecedor'];
$descricao = $_REQUEST['txt_descricao'];
$descricao_add = $_REQUEST['txt_descricao_add'];
$custo = $_REQUEST['txt_custo'];
$indice = $_REQUEST['txt_indice'];
$valor = $_REQUEST['txt_valor'];
$tamanho = $_REQUEST['txt_tamanho'];
$aluguel = $_REQUEST['txt_aluguel'];
$qtde = $_REQUEST['txt_qtde'];
$cor = $_REQUEST['txt_cor'];
$status = $_REQUEST['txt_status'];
$tipo = $_REQUEST['txt_tipo'];
$data_cadastro = $_REQUEST['txt_data_cadastro'];

if($arquivo <> "") {

	// Lista de tipos de arquivos permitidos
	$tiposPermitidos= array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png', 'image/jfif');
		  
	// Tamanho máximo (em bytes)
	$tamanhoPermitido = 1024 * 500; // 500 Kb
  
	// O nome original do arquivo no computador do usuário
	$arqName = $_FILES['txt_arquivo']['name'];
	
	// O tipo mime do arquivo. Um exemplo pode ser "image/gif"
	$arqType = $_FILES['txt_arquivo']['type'];
	
	// O tamanho, em bytes, do arquivo
	$arqSize = $_FILES['txt_arquivo']['size'];
	
	// O nome temporário do arquivo, como foi guardado no servidor
	$arqTemp = $_FILES['txt_arquivo']['tmp_name'];
	
	// O código de erro associado a este upload de arquivo
	$arqError = $_FILES['txt_arquivo']['error'];
  
	if ($arqError == 0) {
		// Verifica o tipo de arquivo enviado
		if (array_search($arqType, $tiposPermitidos) === false) {
			echo 'O tipo de arquivo enviado é inválido!';
		// Verifica o tamanho do arquivo enviado
		} else if ($arqSize > $tamanhoPermitido) {
			echo 'O tamanho do arquivo enviado é maior que o limite!';
		// Não houveram erros, move o arquivo
		} else {
			$pasta = 'fotos/';
			// Pega a extensão do arquivo enviado
			$extensao = strtolower(end(explode('.', $arqName)));
			// Define o novo nome do arquivo usando um UNIX TIMESTAMP
			$nome = time() . '.' . $extensao;
			
			$destino = $pasta . $nome;
			
			
  
			// Escapa os caracteres protegidos do MySQL (para o nome do usuário)
		  //  $nomeMySQL = mysql_real_escape_string($_POST['txt_nome']);
  
			$upload = move_uploaded_file($arqTemp, $pasta . $nome);
  
			// Verifica se o arquivo foi movido com sucesso
			if ($upload == true) {
				// Cria uma query MySQL

$sql = "update tb_produto set 
					pro_foto = '$destino',
					for_fantasia = '$fornecedor',  
					pro_descricao = '$descricao', 
					pro_descricao_add = '$descricao_add',
					pro_custo = '$custo',  
					pro_indice = '$indice', 
					pro_valor = '$valor',
					pro_tamanho = '$tamanho',  
					pro_aluguel = '$aluguel', 
					pro_qtde = '$qtde',
					pro_cor = '$cor',
					pro_status = '$status',  
					pro_tipo = '$tipo', 
					pro_data_cadastro = '$data_cadastro'
				where 
				pro_codigo = '$id'";
								
				$query = mysqli_query($con, $sql) or die ("Erro na sql!") ;

				if ($query == true) {
					unlink($foto_antiga);
					echo 'Produto inserido com sucesso!';
					header("Location: consulta_produto.php");
						}	
					 }
					}
					} else {
						echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
					}
					
					
				
				} else {
				
				$sql = "update tb_produto set
								
								for_fantasia = '$fornecedor',  
								pro_descricao = '$descricao', 
								pro_descricao_add = '$descricao_add',
								pro_custo = '$custo',  
								pro_indice = '$indice', 
								pro_valor = '$valor',
								pro_tamanho = '$tamanho',  
								pro_aluguel = '$aluguel', 
								pro_qtde = '$qtde',
								pro_cor = '$cor',
								pro_status = '$status',  
								pro_tipo = '$tipo', 
								pro_data_cadastro = '$data_cadastro'
								where 
									pro_codigo = '$id'";
												
				$query = mysqli_query($con, $sql) or die ("Erro na sql!") ;
				
				if ($query == true) {
					echo 'Produto inserido com sucesso!';
					header("Location: consulta_produto.php");
						}	
						
				
				}
				?>