<?php


$nome = $_POST = ['nm_cliente'];
$sobrenome = $_POST =  ['nm_sobrenome'];
$email = $_POST = ['nm_email'];
$telefone = $_POST = ['nr_tel'];
$endereco = $_POST = ['nm_endereco'];
$nr_endereco = $_POST = ['nr_endereco'];



require_once 'conexao.php';

$insert_cliente = "INSERT INTO tb_cliente VALUES (null, '$nome', '$sobrenome', '$email', '$telefone', '$endereco', '$nr_endereco')";

$resultado = $conexao->query($insert_cliente);

if ($resultado) {

    echo "<script> alert ('Inserido com Sucesso!'); history.black() </script>"
}



?>