<link rel="stylesheet" href="CSS/ExibeTodasReceitas.css"> 
<?php
// Conexão com o banco de dados
$connect = mysqli_connect("127.0.0.1", "root", "", "projeto_receitas");

if (!$connect) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Consulta para selecionar todas as receitas
$query = "SELECT nome_receita, resumo_receita, Endereco_receita FROM receitas order by ID_receita desc";
$resultado = mysqli_query($connect, $query);

// Verifica se há receitas para exibir
if (mysqli_num_rows($resultado) > 0) {
    // Inicia a seção de receitas
    echo '<div class="h2">';
    echo '<h2><br>Melhores receitas<br></h2>';
    echo '</div>';

    echo '<section class="MelhoresReceitas">';
    $contador = 1;

    // Exibe as receitas na página
    while ($row = mysqli_fetch_assoc($resultado)) {
        // Exibe a receita em um bloco
        echo '<div class="Receita">';
        echo '<img src="./img/'. $row["Endereco_receita"] .'" alt="Receita ' . $contador . '"><br>';
        echo  $row["nome_receita"];
        echo  '<br><br>'; 
        echo '<blockquote>' . $row["resumo_receita"] . '</blockquote>';
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
