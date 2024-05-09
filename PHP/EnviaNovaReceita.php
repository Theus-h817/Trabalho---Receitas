<?php

session_start();

// Verifica se o usuário está logado antes de executar qualquer ação
if (!isset($_SESSION["login"])) {
    // Redireciona para a página de login ou exibe uma mensagem de erro
    header("Location: login.php");
    exit(); // Termina a execução do script após o redirecionamento
}

// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Define o diretório onde as imagens serão armazenadas
    $pasta = "../img/";

    // Define um nome padrão para o caso de não haver foto
    $nomeOriginal = "Sem_Foto.jpg";

    // Verifica se foi enviado um arquivo de imagem
    if (!empty($_FILES["foto"]["name"])) {
        // Gera um nome único para a imagem
        $nomeOriginal = str_replace(" ", "_", $_FILES["foto"]["name"]);
        $token = md5(uniqid(rand(), true));
        $nomeSemEspacos = str_replace(" ", "_", $nomeOriginal); // Remover espaços no nome original
        $foto = $token . $nomeSemEspacos;
        $fotoUpload = $pasta . $foto;
    }

    // Obtém os dados do formulário
    $nome_receita = isset($_POST["nome_receita"]) ? $_POST["nome_receita"] : "";
    $resumo = isset($_POST["resumo_receita"]) ? $_POST["resumo_receita"] : "";
    $ingredientes = isset($_POST["ingredientes_receita"]) ? $_POST["ingredientes_receita"] : "";
    $modo_preparo = isset($_POST["modopreparo_receita"]) ? $_POST["modopreparo_receita"] : "";

    // Conexão com o banco de dados usando PDO para evitar injeção de SQL
    $dsn = "mysql:host=127.0.0.1;dbname=projeto_receitas;charset=utf8";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro ao conectar ao banco de dados: " . $e->getMessage());
    }

    // Prepara a consulta SQL para inserir a receita
    $query = "INSERT INTO receitas (email_usuario, nome_receita, resumo_receita, ingredientes_receita, modopreparo_receita, Endereco_receita) 
    VALUES (:email, :nome_receita, :resumo, :ingredientes, :modo_preparo, :foto)";

    try {
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":email", $_SESSION["login"]);
        $stmt->bindParam(":nome_receita", $nome_receita);
        $stmt->bindParam(":resumo", $resumo);
        $stmt->bindParam(":ingredientes", $ingredientes);
        $stmt->bindParam(":modo_preparo", $modo_preparo);
        $stmt->bindParam(":foto", $foto);

        // Executa a consulta
        $stmt->execute();

        // Move a imagem para o diretório de upload, se houver
        if (!empty($_FILES["foto"]["name"])) {
            move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoUpload);
        }

        // Redireciona para a página de visualização da receita
        header("Location: ../VisualizaReceita.php?visualiza_receita=" . urlencode($nome_receita));
        exit(); // Termina a execução do script após o redirecionamento
    } catch (PDOException $e) {
        echo "Erro ao cadastrar a receita: " . $e->getMessage();
    }

    // Fecha a conexão com o banco de dados
    $pdo = null;
}
?>
