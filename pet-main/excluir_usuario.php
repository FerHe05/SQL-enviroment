<?php
    include "conecta.php";
    $id =$_GET['id'];
    $sql = "DELETE  FROM usuario WHERE id='$id'";
    if(mysqli_query($con,$sql)){
        echo "<script language='javascript' type/javascript'>
        alert('Usuário apagado com sucesso!');
        window.location.href='usuario.php';
        </script>";
    }else{
        echo mysqli_error($con);
        echo "<script language='javascript' type/javascript'>
        alert('Não foi possivel apagar o usuário!');
        window.location.href='usuario.php';
        </script>";
    }
?>