<?php


$nome = $_POST['nm_funcionario'];  
$sobrenome = $_POST['nm_sobrenome'];  
$dataNascimento = $_POST['dt_nascimento'];  
$cargo = $_POST['nm_cargo'];  
$salario = $_POST['nr_salario'];  
$admissao = $_POST['dt_admissao'];  
$senha = $_POST['nm_senha'];  



require_once 'conexao.php';

$insert_funcionario = "INSERT INTO tb_funcionario VALUES (null, '$nome', '$sobrenome', '$dataNascimento', '$cargo', '$salario', '$admissao', '$senha')";

$resultado = $conexao->query($insert_funcionario);

    if ($resultado) {

    echo "<script> alert ('Inserido com Sucesso!'); history.black() </script>";
}



?>