<?php require_once("sessao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Minha Página Inicial</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>
    <header>
        <nav>
            <?php require_once("./cabecalho.php"); ?>
        </nav>
    </header>
    <?php require_once("./ExibeTodasReceitas.php") ?>
    <section id="subscribe">
        <div class="container">
            <form action="#" method="POST" class="subscribe-form">
                <label for="email">Inscreva-se para receber novidades:</label>
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                    <button type="submit">Inscrever-se</button>
                </div><br>
            </form>
        </div>
    </section>
    <?php require_once("./Rodape.php"); ?>
</body>

</html>