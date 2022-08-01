<?php
    session_start();    
    include "conecta.php";//lê o conecta.php e prossegue
    $login = $_POST["login"];//capturando login do index!
    $senha = $_POST["senha"];
    $logar = mysqli_query($con , "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'");//consulta o sql
    if(mysqli_num_rows($logar)>0){
        $_SESSION["user"] = $_POST["login"];
        header("location:dash.php");
    }else{
        echo ("<script>alert('Login ou senha incorretos! Tente novamente.');
                indow.location.href='index.php';</script>");
    }


?>