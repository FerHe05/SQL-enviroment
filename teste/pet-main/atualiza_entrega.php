<?php
    include "conecta.php";
    $id = $_GET["id"];
    $nome = $_POST["nome"];
    $celular = $_POST["celular"];
    $produto = $_POST["produto"];
    $endereço= $_POST["endereço"];
    $status= $_POST["status"];

    
    $sql = "UPDATE entrega SET nome = '$nome',celular = '$celular',produto ='$produto',endereço = '$endereço',status = '$status' WHERE id=$id"; 
if(mysqli_query($con,$sql)){
    echo "<script language='javascript' type/javascript'>
    alert('Agendamento atualizado!');
    window.location.href='entrega.php';
    </script>";
}else{
    echo "<script language='javascript' type/javascript'>
    alert('Não foi possivel atualizar o agendamento!');
    window.location.href='entrega.php';
    </script>";
}
mysqli_close($con);
?>