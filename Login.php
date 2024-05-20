<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário e Responsável</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>

<header>
    <nav>
        <?php require_once("./cabecalho.php"); ?>
    </nav>

    <script>
        function exibirMensagem(mensagem) 
        {
            alert(mensagem);
        }
    </script>
</header>



<section id="cadastro">
    <div class="container">
    <h1>Login</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="login-form">
            <fieldset>
                <legend>Email</legend>
                <input type="email" id="email" name="email" placeholder="exemplo@dominio.com"required>
            </fieldset>

            <fieldset>
                <legend>Senha</legend>                
                <input type="password" id="senha" name="senha" minlength="3" maxlength="15" placeholder="De 3 a 15 caracteres" required>
            </fieldset>

            <button type="submit">Cadastrar</button>
            <button type="reset">Limpar os dados</button>
        </form>
    </div>
</section>
<?php require_once("./logaUsuario.php");?>
<div style="position: fixed; width: 100%; bottom: 0;">
    <?php require_once("./Rodape.php");?>
</div>

</body>
</html>