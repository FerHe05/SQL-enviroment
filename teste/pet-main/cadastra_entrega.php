<?php
    session_start();
    include "conecta.php";
   
    $nome = $_POST["nome"];
    $celular = $_POST["celular"];
    $produto = $_POST["produto"];
    $endereço= $_POST["endereço"];
    $status= $_POST["status"];


        $sql = "INSERT INTO entrega(nome,celular,produto,endereço,status) VALUES ('$nome','$celular','$produto','$endereço','$status')";
        if(mysqli_query($con,$sql)){
            echo "<script language='javascript' type/javascript'>
            alert('Entrega cadastrado com sucesso!');
            window.location.href='entrega.php';
            </script>";
        }else{
            echo "<script language='javascript' type/javascript'>
            alert('Entrega não pode ser cadastrado!');
            window.location.href='entrega.php';
            </script>";
        }
    
?>