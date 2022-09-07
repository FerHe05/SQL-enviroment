<?php
    include "conecta.php";
    $id =$_GET['id'];
    $sql = "DELETE  FROM relatorio WHERE id='$id'";
    if(mysqli_query($con,$sql)){
        echo "<script language='javascript' type/javascript'>
        alert('Relatorio excluído com sucesso!');
        window.location.href='relatorio.php';
        </script>";
    }else{
        echo mysqli_error($con);
        echo "<script language='javascript' type/javascript'>
        alert('Não foi possivel excluir o relatorio!');
        window.location.href='relatorio.php';
        </script>";
    }
?>