<?php
    session_start();
    include "conecta.php";
   
    $vendas = $_POST["vendas"];
    $saidas= $_POST["saidas"];
    $data= $_POST["data"];
    $hora= $_POST["hora"];
 
        $sql = "INSERT INTO relatorio(vendas,saidas,data,hora) VALUES ('$vendas','$saidas','$data','$hora')";
        if(mysqli_query($con,$sql)){
            echo "<script language='javascript' type/javascript'>
            alert('Relatorio cadastrado com sucesso!');
            window.location.href='relatorio.php';
            </script>";
        }else{
            echo "<script language='javascript' type/javascript'>
            alert('Relatorio não pode ser cadastrado!');
            window.location.href='relatorio.php';
            </script>";
        }
    
?>