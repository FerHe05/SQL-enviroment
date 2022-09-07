<?php
    session_start();
    include "conecta.php";
   
    $lembrete= $_POST["lembrete"];
    $data= $_POST["data"];
    $hora= $_POST["hora"];
    $obs= $_POST["obs"];



        $sql = "INSERT INTO agenda(lembrete,data,hora,obs) VALUES ('$lembrete','$data','$hora','$obs')";
        if(mysqli_query($con,$sql)){
            echo "<script language='javascript' type/javascript'>
            alert('Agendamento cadastrado com sucesso!');
            window.location.href='agenda.php';
            </script>";
        }else{
            echo "<script language='javascript' type/javascript'>
            alert('Agendamento não pode ser cadastrado!');
            window.location.href='agenda.php';
            </script>";
        }
    
?>