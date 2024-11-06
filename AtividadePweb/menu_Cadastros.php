<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="menu_Cadastros.css">
    <title>Menu Principal</title>
</head>
<body>

    <nav class="navbar">
        <img src="Logo/Logo preta sem fundo.png" alt="Logo">
        <div class="pesquisa">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input class="dentro" type="text" placeholder="Pesquisar">
        </div>
        <div class="user">
            <i class="fa-solid fa-circle-user"></i>
        </div>
    </nav>

    <div class="container">
        <div class="cadastrados">
            <center><h3>Opções</h3></center>
            <hr>
            <a class="botao" href="Telas/funcionario.html">Funcionário</a>
            <a class="botao" href="Telas/cliente.html">Cliente</a>
            <a class="botao" href="Telas/fornecedor.html">Fornecedor</a>
            <a class="botao" href="Telas/categoria.html">Categoria</a>
            <a class="botao" href="Telas/lancamento.html">Lancamento</a>
            <a class="botao" href="php/logout.php"> Sair</a>
        </div>

        <div class="lista">
            <div class="titulo">
            <span>
            
            <?php
            session_start();
        if (isset( $_SESSION['nm_funcionario'])) {
            
            $nome =  $_SESSION['nm_funcionario'];
            echo "Olá, " .$nome. "! Seja Bem vindo ao nosso programa!";
        }
        // else {
        //     echo "<script> alert('Você não está logado!'); history.back()</script>";
        // }
            ?>      </span>
            </div>

            
        
        

        <!-- depois de arrumar colocar esse codigo para aparecer o nome do funcionario (NÃO É NECESSARIO O SPAN) -->

        <div>
                <br><br>
                <center>
                    <h1 style="background-color: aliceblue; padding: 70px;">
                        Navegue pelo nosso menu e descubra como podemos ajudá-lo a melhorar suas operações.
                    </h1>
                </center>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/fe31542f8a.js" crossorigin="anonymous"></script>

</body>
</html>