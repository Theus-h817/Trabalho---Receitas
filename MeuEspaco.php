<?php require_once("sessao.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Inicial</title>
    <link rel="stylesheet" href="CSS/meu_espaco.css">
</head>
<body>
    <header>
        <nav>
            <?php require_once("./cabecalho.php"); ?>
        </nav>
    </header>

    <section class="highlights">
        <div class="introducao">
            <h2>Minhas receitas</h2>
        </div>
    </section>

    <?php require_once("./ExibeMinhasReceitas.php"); ?>

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
    <div style="position: fixed; width: 100%; bottom: 0;">
        <?php require_once("./Rodape.php");?>
    </div>
</body>
</html>
