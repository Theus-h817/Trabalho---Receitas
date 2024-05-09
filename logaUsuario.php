<?php
session_start(); // Inicie a sessão no início do script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["email"];
    $pass = $_POST["senha"];

    $nome_servidor = "localhost";
    $nome_bancodados = "projeto_receitas";
    $usuario = "root";
    $senha = "";

    // Conectar ao banco de dados
    $conexao = new mysqli($nome_servidor, $usuario, $senha, $nome_bancodados);

    if ($conexao->connect_error) {
        die("Falha ao conectar: " . $conexao->connect_error);
    }

    // Consulta SQL para verificar usuário e senha
    $ComandoSQLUsuario = "SELECT nome_usuario, email_usuario FROM usuario WHERE email_usuario = '$user' AND senha_usuario = '$pass'";

    $resultadoUsuario = $conexao->query($ComandoSQLUsuario);

    if ($resultadoUsuario ->num_rows > 0) {
        $dadosUsuario = $resultadoUsuario ->fetch_assoc();
        $_SESSION["SomeLogin"] = "logado";
        $_SESSION["login"] = $dadosUsuario["email_usuario"];
        $_SESSION["nome"] = $dadosUsuario["nome_usuario"];
        echo "<script>
                alert('Usuário encontrado!');
                window.location.href = 'meuEspaco.php'; 
              </script>";

    }  

    // Fechar a conexão com o banco de dados
    $conexao->close();
    if ($resultadoUsuario->num_rows == 0 && $resultadoResponsavel->num_rows == 0) 
    {
        echo "<script>alert('Usuário não encontrado, verifique usuário ou senha');</script>";
    }
}
?>