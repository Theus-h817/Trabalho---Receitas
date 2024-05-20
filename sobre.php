<?php require_once("sessao.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página Inicial</title>
    <link rel="stylesheet" href="CSS/Sobre.css">
</head>
<body>
    <header>
        <nav>
            <?php require_once("./cabecalho.php"); ?>
        </nav>
    </header>

    <section class="highlights">
    <h2>Sobre o Trabalho</h2>
        <div class="highlight"><br>
        <h2>Desenvolvedor</h2>
            <img src="img/Aluno_Matheus.jpg" alt="Foto Matheus">
            <h3>Matheus Henrique</h3><br>      
        </div>
        <div class="highlight"><br>
        <h2>Professor</h2>
            <img src="img/Professor_Ronnie.png" alt="Foto Prof. Ronnie">
            <h3>Ronnie Marcus Rillo</h3><br>    
        </div>

    </section>

    <section class="TextoSobre">
        <h2><p>Sobre<br><br></p></h2>
        <div class="Sobre">
            <p>Desenvolvedor:<br>
                Matheus Henrique Cella Carrasco
            </p><br>
            <p>
                Formação:<br>
                Estudante do segundo semestre de Análise e Desenvolvimento de Sistemas
            </p>
            <p><br>
                Data de Desenvolvimento:<br>
                Concluido e revisado em 12/05/2024
            </p>
            <p><br>
                Créditos das Imagens:<br>
                Todas as imagens utilizadas neste software são fornecidas pelo Centro Paula Souza (CPS) e do Governo do Estado de São Paulo
            </p>
            <p><br>
                Disciplina e Professor:<br>
                Este trabalho foi desenvolvido para a disciplina de Programação, ministrada pelo professor Ronnie Rillo.
            </p>
            <p><br>
                Agradecimentos:<br>
                Ao professor Ronnie Rillo por orientar e fornecer conhecimentos técnicos durante o desenvolvimento deste projeto.
            </p></h1><br>
        </div>
    </section> 

    <section id="subscribe">
        <div class="container">
            <form action="#" method="POST" class="subscribe-form">
                <label for="email">Inscreva-se para receber novidades:</label>
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                    <button type="submit">Inscrever-se</button>
                </div>
            </form>
        </div>
    </section>
    <?php require_once("./Rodape.php");?>
</body>
</html>
