<?php
    include "conecta.php";
    $id =$_GET['id'];
    $sql = "DELETE  FROM agendamento WHERE id='$id'";
    if(mysqli_query($con,$sql)){
        echo "<script language='javascript' type/javascript'>
        alert('Agendamento apagado com sucesso!');
        window.location.href='agendamento.php';
        </script>";
    }else{
        echo mysqli_error($con);
        echo "<script language='javascript' type/javascript'>
        alert('Não foi possivel apagar o agendamento!');
        window.location.href='agendamento.php';
        </script>";
    }
?>