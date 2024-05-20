<?php

if (isset($_GET['visualiza_receita'])) {
    // Conexão com o banco de dados
    $connect = mysqli_connect("127.0.0.1", "root", "", "projeto_receitas");

    if (!$connect) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Obtém o nome da receita a ser excluída
    $nome_receita = $_GET['visualiza_receita'];

    // Monta a query de exclusão
    $query = "SELECT  nome_receita, resumo_receita, ingredientes_receita, modopreparo_receita, datacadastro_receita, Endereco_receita 
    FROM receitas WHERE nome_receita = '$nome_receita'";

    $resultado = mysqli_query($connect, $query);


    if (mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);

        echo '<header>';
        echo    '<nav>';
            require_once("./cabecalho.php");
        echo    '</nav>';
        echo '</header>';

        echo '<link rel="stylesheet" href="CSS/VisualizaReceita.css">';

        echo '<section id="cadastro">';
        echo    '<div class="container">';
        echo        '<form action="Adiciona_Receita.php" method="POST" class="cadastro-form" >';

        echo                '<fieldset> <!-- INSERE AS INFORMAÇÕES DA RECEITA -->';
        echo                '<label for="nome_receita">Nome da receita:</label>';
        echo                '<input type="text" id="nome_receita" name="nome_receita" readonly value="' . $row["nome_receita"] . '">'; // Corrigido: Adiciona o valor do campo nome_receita


        echo                '<div class="procurafoto">';
        echo                    '<label for="foto" class="perfil">';
        echo                        '<img src="./img/'. $row["Endereco_receita"] .'" alt="Imagem de Perfil" id="imagem" onchange="preview();">';
        echo                    '</label>';
        echo                '</div>';

        echo                '<script src="./JS/atualiza_imagem.js"></script>';

        echo                '<div class="conteudo">';
        echo                    '<br><br><label for="resumo_receita">Um breve resumo da receita:</label>';
        echo                    '<textarea style="width: 77%;" id="resumo_receita" name="resumo_receita" rows="8" readonly>' . $row["resumo_receita"] . '</textarea>';
        echo                    '<br><br><label for="ingredientes_receita">Ingredientes:</label>';
        echo                    '<textarea id="ingredientes_receita" name="ingredientes_receita" rows="8" readonly>' . $row["ingredientes_receita"] . '</textarea>';
        echo                    '<br><br><label for="modopreparo_receita">Modo de Preparo:</label>';
        echo                    '<textarea id="modopreparo_receita" name="modopreparo_receita" rows="8" readonly>' . $row["modopreparo_receita"] . '</textarea>';
        echo                '</div>';      
        echo            '</fieldset>';
        echo        '</form>';
        echo    '</div>';
        echo '</section>';
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($connect);
}
