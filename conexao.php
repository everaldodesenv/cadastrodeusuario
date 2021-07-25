<?php

$servidor ="localhost";
$usuario ="root";
$senha = "123456";
$dbname ="dbcadusuario";

//criar conexao com banco

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


if (!$conn) {
    die("Conexao falhou: ". mysqli_connect_error());
}
   echo "<h1>Conexão bem sucedida</h1>";



?>