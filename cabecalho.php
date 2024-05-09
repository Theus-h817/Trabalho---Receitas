<ul>
    <link rel="stylesheet" href="CSS/cabecalho.css"> 

    <li><a href="index.php" class="cabecalho">Home</a></li >
    <li><a href="sobre.php"class="cabecalho">Sobre</a></li>
    <?php if(isset($_SESSION["SomeLogin"]) && $_SESSION["SomeLogin"] == "logado")
        {
            echo '<li><a href="MeuEspaco.php" class="cabecalho">
            Espaço de ' .  strtok($_SESSION["nome"], ' ') . '</a></li>';
        
            echo '<li><a href="Cadastra_Receita.php" class="cabecalho">Adicionar receita</a></li>';
            echo '<li><a href="DeletaUsuarioReceita.php" class="cabecalho">Deletar conta</a></li>';
            echo '<li><a href="Deslogar.php" class="cabecalho">Sair</a></li>';

        }
        else
        {
            echo '<li><a href="Login.php"class="cabecalho">login</a></li>';
            echo '<li><a href="Cadastro.php" class="cabecalho">Cadastre-se</a></li>';

        }
    ?>
    
</ul>