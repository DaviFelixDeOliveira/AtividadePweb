<?php


$nome = $_POST = ['nm_fornecedo'];
$contato = $_POST =  ['nm_contato'];
$telefone = $_POST = ['nr_fone'];
$endereco = $_POST = ['nm_endereco'];
$nr_endereco = $_POST = ['nr_endereco'];



require_once 'conexao.php';

$insert_fornecedor = "INSERT INTO tb_fornecedor VALUES (null, $nome, $contato,  $telefone, $endereco, $nr_endereco)";

$resultado = $conexao->query($insert_cliente);

if ($resultado) {

    echo "<script> alert ('Inserido com Sucesso!'); history.black() </script>"
}



?>