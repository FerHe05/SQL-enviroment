<?php
    include "conecta.php";
    $id = $_GET["id"];
    $lembrete= $_POST["lembrete"];
    $data = $_POST["data"];
    $hora= $_POST["hora"];
    $obs= $_POST["obs"];
    

    
    $sql = "UPDATE agenda SET lembrete = '$lembrete',data = '$data',hora ='$hora',obs = '$obs' WHERE id=$id"; 
if(mysqli_query($con,$sql)){
    echo "<script language='javascript' type/javascript'>
    alert('Agendamento atualizado!');
    window.location.href='agenda.php';
    </script>";
}else{
    echo "<script language='javascript' type/javascript'>
    alert('Não foi possivel atualizar o agendamento!');
    window.location.href='agenda.php';
    </script>";
}
mysqli_close($con);
?>