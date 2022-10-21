<?PHP

require_once('../conexao/banco.php');
//echo $_SERVER["REQUEST_URI"] ;
//var_dump($_SERVER);
$url_components = parse_url($_SERVER["REQUEST_URI"]);
parse_str($url_components['query'], $params);
$codigo = $params['codigo'];
 
$sql = "select pro_valor from tb_produto where pro_codigo = ".$codigo;
$dados = mysqli_query($con, $sql) or die ("Erro na sql!") ;

return mysqli_fetch_array($dados);



?>