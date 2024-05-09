<?php
    if(!isset($_SESSION)){
        session_start();
    }

    /*if( !isset($_SESSION["nome"]) or (!isset($_SESSION["TempoSessao"])) or ($_SESSION["TempoSessao"] < time()) )
    {
        //header("location:./index.php");
        echo "<script>alert('Tempo Limite de 5 segundos atingido, logue-se novamente !!!');
        window.location.href='./index.php';</script>";
        exit();
    }
    */
?>