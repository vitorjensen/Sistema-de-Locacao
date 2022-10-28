<?PHP

require_once('../conexao/banco.php');
$url = $_SERVER["REQUEST_URI"] ;
//var_dump($_SERVER);
////$url_components = parse_url($_SERVER["REQUEST_URI"]);
//parse_str($url_components['query'], $params);
$codigo = explode("?", $url);
//var_dump("dados");
$sql = "select pro_valor from tb_produto where ".$codigo[1];
$dados = mysqli_query($con, $sql) or die ("Erro na sql!") ;
$valor = mysqli_fetch_array($dados)["pro_valor"];
echo $valor;
//var_dump(json_encode($valor));
//return mysqli_fetch_array($dados)["pro_valor"];
//return  $valor;


?>
