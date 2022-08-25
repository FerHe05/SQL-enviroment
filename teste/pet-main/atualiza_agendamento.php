<?php
    include "conecta.php";
    $id = $_GET["id"];
    $nome = $_POST["nome"];
    $celular = $_POST["celular"];
    $serviço = $_POST["serviço"];
    $data= $_POST["data"];
    $hora= $_POST["hora"];

    
    $sql = "UPDATE agendamento SET nome = '$nome',celular = '$celular',serviço ='$serviço',data = '$data',hora = '$hora' WHERE id=$id"; 
if(mysqli_query($con,$sql)){
    echo "<script language='javascript' type/javascript'>
    alert('Agendamento atualizado!');
    window.location.href='agendamento.php';
    </script>";
}else{
    echo "<script language='javascript' type/javascript'>
    alert('Não foi possivel atualizar o agendamento!');
    window.location.href='agendamento.php';
    </script>";
}
mysqli_close($con);
?>