<?php
    session_start();
    include "conecta.php";
   
    $nome = $_POST["nome"];
    $descricao= $_POST["descricao"];
    $preco = $_POST["preco"];
 
        $sql = "INSERT INTO produto(nome,descricao,preco) VALUES ('$nome','$descricao','$preco')";
        if(mysqli_query($con,$sql)){
            echo "<script language='javascript' type/javascript'>
            alert('Produto cadastrado com sucesso!');
            window.location.href='produto.php';
            </script>";
        }else{
            echo "<script language='javascript' type/javascript'>
            alert('Produto não pode ser cadastrado!');
            window.location.href='produto.php';
            </script>";
        }
    
?>