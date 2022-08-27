<?php
    session_start();
    include "conecta.php";
   
    $nome = $_POST["nome"];
    $celular = $_POST["celular"];
    $serviço = $_POST["serviço"];
    $data= $_POST["data"];
    $hora= $_POST["hora"];


        $sql = "INSERT INTO agendamento(nome,celular,serviço,data,hora) VALUES ('$nome','$celular','$serviço','$data','$hora')";
        if(mysqli_query($con,$sql)){
            echo "<script language='javascript' type/javascript'>
            alert('Agendamento cadastrado com sucesso!');
            window.location.href='agendamento.php';
            </script>";
        }else{
            echo "<script language='javascript' type/javascript'>
            alert('Agendamento não pode ser cadastrado!');
            window.location.href='agendamento.php';
            </script>";
        }
    
?>