<?php
    session_start();
    include 'conecta.php';
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $logar = mysqli_query($conn, "SELECT * FROM energycalc WHERE cpf='$cpf' AND senha='$senha'");
    if(mysqli_num_rows($logar)>0)
    {
        $_SESSION["cpf"] = $_POST['Login'];
        header('location:menu.php');
    }
    else 
    {
        echo ("<script>alert('Login ou senha incorretos! Tente novamente.');window.location.href='teste.php';</script>");
    }
?>