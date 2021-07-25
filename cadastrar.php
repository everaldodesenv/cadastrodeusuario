<?php

$nome   = $_POST["nome"];
$email  = $_POST["email"];
$senha  = $_POST["senha"];
$opina  = $_POST["opina"];

echo "<h2>Nome: $nome </h2>";
echo "<h2>email: $email </h2>";
echo "<h2>senha: $senha </h2>";
echo "<h2>opina: $opina </h2>";

$cad_usuario = "INSERT INTO usuario (nome,email,senha,opina) VALUES('{$nome}','{$email}','{$senha}','{$opina}') ";

if(mysqli_query(conexao, $cad_usuario)){
   echo "<h1>Novo cadastro realizado</h1>";
}else{
    echo "ERRO: ".$cad_usuario. "</br>".mysqli_error(conexao);
}
mysqli_close(conexao);

?>