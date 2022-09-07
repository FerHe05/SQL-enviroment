<?php
    include "conecta.php";
    $id = $_GET["id"];
    $vendas = $_POST["vendas"];
    $saidas = $_POST["saidas"];
    $data = $_POST["data"];
    $hora= $_POST["hora"];
    
    $sql = "UPDATE relatorio SET vendas = '$vendas',saidas = '$saidas',data = '$data',hora = '$hora'WHERE id=$id"; 
if(mysqli_query($con,$sql)){
    echo "<script language='javascript' type/javascript'>
    alert('Relatorio atualizado!');
    window.location.href='relatorio.php';
    </script>";
}else{
    echo "<script language='javascript' type/javascript'>
    alert('Não foi possivel atualizar o produto!');
    window.location.href='relatorio.php';
    </script>";
}
mysqli_close($con);
?>