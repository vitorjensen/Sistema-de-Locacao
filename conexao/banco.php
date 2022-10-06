<?php

$con = mysqli_connect("localhost", "root", "", "dblocar");

if (mysqli_connect_errno()) {
    echo "Falha ao se conectar ao MySQL: " . mysqli_connect_erro();
} else {
    mysqli_select_db($con, "dblocar");
}

?>