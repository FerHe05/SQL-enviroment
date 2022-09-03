<?php
    include "conecta.php";
    $id =$_GET['id'];
    $sql = "DELETE  FROM produto WHERE id='$id'";
    if(mysqli_query($con,$sql)){
        echo "<script language='javascript' type/javascript'>
        alert('Produto excluído com sucesso!');
        window.location.href='produto.php';
        </script>";
    }else{
        echo mysqli_error($con);
        echo "<script language='javascript' type/javascript'>
        alert('Não foi possivel excluir o produto!');
        window.location.href='produto.php';
        </script>";
    }
?>