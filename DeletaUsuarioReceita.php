<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Excluir Usuário e Receitas</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <header>
        <nav>
            <?php require_once("./cabecalho.php"); ?>
        </nav>
    </header>

    <section id="excluir-usuario-receitas">
        <div class="container">
            <h2><br>Excluir Usuário e Receitas<br><br></h2>
            <form action="PHP/ExcluiUsuarioReceitas.php" method="POST" class="excluir-form">
                <fieldset>
                    <legend>Informe suas credenciais para excluir suas receitas e sua conta</legend>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>

                    <label for="senha">Repita sua senha:</label>
                    <input type="password" id="repete_senha" name="repete_senha" required>

                    <button type="submit">Excluir</button>
                </fieldset>
            </form>
        </div>
    </section>


 <!-- ------------------------------------------------------JavaScript-------------------------------------------------------- -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(function(){
            $(".excluir-form").submit(function(event){
                var senha = $("#senha").val();
                var senha2 = $("#repete_senha").val();
                if(senha != senha2){
                    event.preventDefault();
                    alert("As senhas não coincidem. Por favor, verifique e tente novamente.");
                }
            });
        });
    </script>

<!-- ------------------------------------------------------------------------------------------------------------------------ -->


    <?php require_once("./Rodape.php");?>
</body>
</html>
