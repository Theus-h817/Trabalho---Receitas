<link rel="stylesheet" href="CSS/ExibeMinhasReceitas.css"> 
<?php
        $email = $_SESSION["login"];
        // Conexão com o banco de dados
        $connect = mysqli_connect("127.0.0.1", "root", "", "projeto_receitas");

        if (!$connect) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        // Consulta para selecionar apenas o nome da receita e o resumo
        $query = "SELECT  ID_receita, nome_receita, resumo_receita, Endereco_receita FROM receitas WHERE email_usuario = '$email' order by ID_receita desc ";
        $resultado = mysqli_query($connect, $query);

        // Verifica se há receitas para exibir
        if (mysqli_num_rows($resultado) > 0) {
            // Inicia a seção de receitas
            echo '<section class="MelhoresReceitas">';
            $contador = 1;

            // Exibe as receitas na página
            while ($row = mysqli_fetch_assoc($resultado)) {

                // Exibe a receita em um bloco
                echo '<div class="Receita">';
                echo    '<img src="./img/'. $row["Endereco_receita"] .'" alt="Receita ' . $contador . '"><br>';
                echo    '<cite>' . $contador . 'ª Receita</cite>';
                echo    '<blockquote>' . $row["nome_receita"] . '</blockquote>';
                echo    '<blockquote>' . $row["resumo_receita"] . '</blockquote>';
                
                echo    '<a class="button floatLeft view-button" href="VisualizaReceita.php?visualiza_receita=' . urlencode($row["nome_receita"]) . '">Visualizar</a>';
                echo    '<a class="button floatLeft delete-button" href="EditaReceita.php?edita_receita=' . urlencode($row["nome_receita"]) . '">Editar</a>';  

                // Adiciona botões para apagar e modificar a receita
                echo    '<a class="button floatLeft delete-button" href="PHP/ExcluirReceita.php?excluir_receita=' . urlencode($row["nome_receita"]) . '">Apagar</a>';          
                echo '</div>';
                $contador++;
            }

            // Fecha a seção de receitas
            echo '</section>';
        } else {
            echo "Nenhuma receita encontrada.";
        }

        // Fecha a conexão com o banco de dados
        mysqli_close($connect);
    ?>