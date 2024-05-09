<!DOCTYPE html>
<html lang="pt-br">

<!-- ------------------------------------------------------------------------------------------------------------------------ -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se no nosso blog</title>
    <link rel="stylesheet" href="CSS/cadastro.css">
</head>

<!-- ------------------------------------------------------------------------------------------------------------------------ -->

<body>
    <header>
        <nav>
            <?php require_once("./cabecalho.php"); ?>
        </nav>
    </header>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->
    <div class="h2">
        <h2>Cadastre-se no nosso Blog</h2>
    </div>
    <section id="cadastro">
        <div class="container">
            <form action="PHP/EnviaDados.php" method="POST" class="cadastro-form">
                <fieldset>
                    <legend>Dados</legend>
                    <label for="usuario_nome">Nome:</label>
                    <input type="text" id="usuario_nome" name="usuario_nome" required>

                    <label for="usuario_email">Email:</label>
                    <input type="email" id="usuario_email" name="usuario_email" required>

                    <label for="usuario_telefone">Telefone:</label>
                    <input type="tel" id="usuario_telefone" name="usuario_telefone" required>
                </fieldset>


                <fieldset>
                    <legend>Senha para acesso</legend>
                    <label for="responsavel_senha">Senha:</label>
                    <input style="max-width:500px; height:33px; font-size:30px; border: 1px solid #ccc; margin-botton=15px" type="password" id="responsavel_senha" name="responsavel_senha" required>

                    <label for="repete_senha">Confirme sua senha:</label>
                    <input style="font-size:30px; border: 1px solid #ccc;" type="password" id="repete_senha" name="repete_senha">
                </fieldset>
                <button type="submit">Cadastrar</button>
                <button type="reset">Limpar os dados</button>
            </form>
        </div>
    </section>

    <!-- ------------------------------------------------------JavaScript-------------------------------------------------------- -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(function() {
            $(".cadastro-form").submit(function(event) {
                var senha = $("#responsavel_senha").val();
                var senha2 = $("#repete_senha").val();
                if (senha != senha2) {
                    event.preventDefault();
                    alert("As senhas não coincidem. Por favor, verifique e tente novamente.");
                }
            });
        });
    </script>

    <!-- ------------------------------------------------------------------------------------------------------------------------ -->

    <?php require_once("./Rodape.php"); ?>
</body>

</html>