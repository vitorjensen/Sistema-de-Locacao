<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "dblocar";
$port = 3306;

try{
$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
//echo "Conexão realizada";
}catch(PDOException $err){
   // echo "Erro: Conexão não realizada. Erro Gerado" . $err->getMessage();
}
?>