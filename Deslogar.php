<?php

    $_SESSION["SomeLogin"] = "deslogado";
    // inicia uma sessão
    session_start();

    // eliminas as possíveis variáveis de sessão
    session_unset();

    // destroy a sessão atual
    session_destroy();
    
    
    echo "<script>
    alert('Deslogado com sucesso!!!');
    window.location.href = 'index.php'; 
    </script>";
    //header("location:./index.php");
?>