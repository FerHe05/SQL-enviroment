<?php
    include "conecta.php";
    $id =$_GET['id'];
    $sql = "DELETE  FROM entrega WHERE id='$id'";
    if(mysqli_query($con,$sql)){
        echo "<script language='javascript' type/javascript'>
        alert('Entrega excluída com sucesso!');
        window.location.href='entrega.php';
        </script>";
    }else{
        echo mysqli_error($con);
        echo "<script language='javascript' type/javascript'>
        alert('Não foi possivel excluir a entrega!');
        window.location.href='entrega.php';
        </script>";
    }
?>