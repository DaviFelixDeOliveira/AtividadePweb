<?php
// pegar os dados do formulário e armazenar na variável


$id = $_POST ['id'];
$senha = $_POST ['senha'];


// fazer a conexão com o banco de dados

include 'conexao.php';


// Executar instrução select no banco de dados e 

$select =  "SELECT * FROM tb_funcionario WHERE cd_funcionario = $id";
$query = $conexao->query($select);
$resultado = $query->fetch_assoc(); // pega o primeiro registro do banco e armazena na var resultado



$id_usuario_banco = $resultado['cd_funcionario'];
$id_senha_banco = $resultado['nm_senha'];


if ($id == $id_usuario_banco && $senha ==$id_senha_banco) {
    header('location: ../Cadastros/cliente.html');
}
else {
    echo "<script> alert('Usuário ou senha inválida.'); history.back()</script>";
}
?>