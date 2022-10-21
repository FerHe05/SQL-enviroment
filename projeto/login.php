<?php
    session_start();
    include 'conecta.php';
    $login = $_POST['cpf'];
    $senha = $_POST['senha'];
    $logar = mysqli_query($con, "SELECT * FROM projeto WHERE cpf='$cpf' AND senha='$senha'");
    if(mysqli_num_rows($logar)>0)
    {
        $_SESSION["cpf"] = $_POST['login'];
        header('location:menu.php');
    }
    else 
    {
        echo ("<script>alert('Login ou senha incorretos! Tente novamente.');window.location.href='index.php';</script>");
    }
?>