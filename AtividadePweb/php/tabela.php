<?php
//Informação do SGBD para conectar no banco de dados
$server = "localhost";
$user = "root";
$password = "root";
$database = "bd_loja";

//Função para realizar a conexão no banco de dados
$conexao = new mysqli($server, $user, $password, $database);

if($conexao->connect_error){
    die('Erro'. $conexao-> connect_error);
}
else{
    echo "Conectado com sucesso!";
}


?>