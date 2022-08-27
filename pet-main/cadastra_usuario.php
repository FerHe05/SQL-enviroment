<?php
    session_start();
    include "conecta.php";
    $usuario = $_SESSION["user"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if(!isset($_POST["tipo"])){
        $tipo = 0;
    }else{
        $tipo = 1;
    }
    $duplicado = mysqli_query($con,"SELECT * FROM usuario WHERE login='$login'");
    if($duplicado->num_rows >0){
        echo "<script language='javascript' type/javascript'>
        alert('Login já cadastrado! Tente novamente');
        window.location.href='usuario.php';
        </script>";
    }else{
        $sql = "INSERT INTO usuario(login,senha,tipo,usuario,data) VALUES ('$login','$senha','$tipo','$usuario',NOW())";
        if(mysqli_query($con,$sql)){
            echo "<script language='javascript' type/javascript'>
            alert('Usuário cadastrado com sucesso!');
            window.location.href='usuario.php';
            </script>";
        }else{
            echo "<script language='javascript' type/javascript'>
            alert('Usuário não pode ser cadastrado!');
            window.location.href='usuario.php';
            </script>";
        }
    }
?>