<?php

session_start();
$email = $_SESSION["login"];

// Verifica se foi enviado o parâmetro de exclusão
if(isset($_GET['excluir_receita'])) {
    // Conexão com o banco de dados
    $connect = mysqli_connect("127.0.0.1", "root", "", "projeto_receitas");

    if (!$connect) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Obtém o nome da receita a ser excluída
    $nome_receita = $_GET['excluir_receita'];

    // Monta a query de exclusão
    $query = "DELETE FROM receitas WHERE email_usuario = '$email' AND nome_receita = '$nome_receita'";

    // Executa a query
    if(mysqli_query($connect, $query)) {
        echo "<script>alert('Receita excluída com sucesso!');
        window.location.href='../MeuEspaco.php';</script>";
    } else {
        echo "<script>alert('Erro ao excluir receita');
        window.location.href='../MeuEspaco.php';</script>";
    }

    // Fecha a conexão com o banco de dados
    mysqli_close($connect);
}
?>