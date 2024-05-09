<script>
        function exibirMensagem(mensagem) 
    {
        alert(mensagem);
    } 
</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome_servidor = "localhost";
    $nome_bancodados = "projeto_receitas";
    $usuario = "root";
    $senha = "";

    $conexao = mysqli_connect($nome_servidor, $usuario, $senha, $nome_bancodados);

    if (mysqli_connect_errno()) 
    {
        die("Falha ao conectar, código de erro: " . mysqli_connect_error());
    } 
    
    else 
    {
        echo "Conectado com sucesso!!!";
        $ComandoSQL1 = "INSERT INTO usuario (email_usuario, nome_usuario, telefone_usuario, senha_usuario)
        VALUES ('" . $_POST['usuario_email'] . "', '" . $_POST['usuario_nome'] . "', '" . $_POST['usuario_telefone'] . "', '" . $_POST["responsavel_senha"] . "' )";

        if (!mysqli_query($conexao, $ComandoSQL1)) 
        {
            echo '<script>exibirMensagem("Usuário já cadastrado!!!");</script>';
            //die('Usuário não foi cadastrado, tente novamente! Erro: ' . mysqli_error($conexao));
        } 
    }
    mysqli_close($conexao);
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
            <h1>Obrigado por se cadastrar!</h1>
            <p>Agradecemos por fazer parte do nosso projeto.</p>
            <p>Seu cadastro foi realizado com sucesso.</p>
            <p>Você será redirecionado de volta para a página inicial em alguns segundos.</p>
        </div>
    </div>

    <!-- Redirecionamento para a página inicial após 5 segundos -->
    <script>
        setTimeout(function () {
            window.location.href = "../login.php";
        }, 5000); // 5000 milissegundos = 5 segundos
    </script>
</body>

</html>

