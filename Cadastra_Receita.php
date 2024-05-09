<p?php session_start(); ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title> Pagina inicial </title>
        <link rel="stylesheet" href="CSS/Cadastra_Receita.css">
    </head>

    <body>
        <header>
            <nav>
                <?php require_once("./cabecalho.php"); ?>
            </nav>
        </header>

        <!-- ----------------------------------------------------------------------------------------------------------------------- -->




        <section id="cadastro">
            <div class="container">
                <form action="PHP/EnviaNovaReceita.php" method="POST" class="cadastro-form" enctype="multipart/form-data">

                    <fieldset> <!-- INSERE AS INFORMAÇÕES DA RECEITA -->
                        <legend>
                            <h1>Informe sua receita</h1>
                        </legend>
                        <div class="dados">
                            <label for="nome_receita">Nome da receita:</label>
                            <input type="text" id="nome_receita" name="nome_receita" required>

                            <div class="procurafoto">
                                <label for="foto" class="perfil">
                                    <img src="./img/Sem_Foto.jpg" alt="Imagem de Perfil" id="imagem">
                                </label>
                                <input type="file" name="foto" id="foto" onchange="preview();">
                            </div>

                            <script src="./JS/atualiza_imagem.js"></script>

                            <div>
                                <br><label style="display: block;" for="resumo_receita">Um breve resumo da receita:</label>
                                <textarea style="width: 77%;" id="resumo_receita" name="resumo_receita" rows="10" cols="33" required></textarea>
                                <br><br><label for="ingredientes_receita">Ingredientes:</label>
                                <textarea id="ingredientes_receita" name="ingredientes_receita" rows="8" cols="33" required></textarea>
                                <br><br><label for="modopreparo_receita">Modo de Preparo:</label>
                                <textarea id="modopreparo_receita" name="modopreparo_receita" rows="8" cols="33" required></textarea>
                            </div>
                    </fieldset>

                    <button type="submit">Cadastrar</button>
                    <button type="reset">Limpar os dados</button>
                </form>
            </div>
        </section>

        <!-- ---------------------------------------------------------------------------------------------------------------------- -->

        <?php require_once("./Rodape.php"); ?>
    </body>

    </html>