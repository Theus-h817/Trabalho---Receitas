<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";


    // Conexão com o banco de dados
    $connect = mysqli_connect("127.0.0.1", "root", "", "projeto_receitas");

    if (!$connect) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Verifica se o usuário existe e se a senha está correta
    $query_verifica_usuario = "SELECT * FROM usuario WHERE email_usuario = '$email' AND senha_usuario = '$senha'";
    $resultado_verifica_usuario = mysqli_query($connect, $query_verifica_usuario);

    if (mysqli_num_rows($resultado_verifica_usuario) > 0) {
        // Exclui todas as receitas do usuário
        $query_excluir_receitas = "DELETE FROM receitas WHERE email_usuario = '$email'";
        if (mysqli_query($connect, $query_excluir_receitas)) {
        } else {
            echo "Erro ao excluir as receitas do usuário: " . mysqli_error($connect) . "<br>";
        }

        // Exclui o próprio usuário
        $query_excluir_usuario = "DELETE FROM usuario WHERE email_usuario = '$email'";
        if (mysqli_query($connect, $query_excluir_usuario)) {
            session_unset();
            session_destroy();
        } else {
            echo "Erro ao excluir o usuário: " . mysqli_error($connect) . "<br>";
        }
    } else {
        echo "Usuário não encontrado ou senha incorreta.<br>";
    }

    mysqli_close($connect);
}
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agradecimento por se cadastrar</title>
    <link rel="stylesheet" href="../CSS/enviadados.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <h1>Obrigado por nosso tempo!</h1>
            <p>Suas receitas foram excluidas com sucesso.</p>
            <p>Seu usuário foi excluido com sucesso.</p>
            <p>Você será redirecionado de volta para a página inicial em alguns segundos.</p>
        </div>
    </div>

    <!-- Redirecionamento para a página inicial após 5 segundos -->
    <script>
        setTimeout(function() {
            window.location.href = "../index.php";
        }, 5000); // 5000 milissegundos = 5 segundos
    </script>
</body>

</html>