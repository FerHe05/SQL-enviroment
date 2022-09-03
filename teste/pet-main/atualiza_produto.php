<?php
    include "conecta.php";
    $id = $_GET["id"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
 
    
    $sql = "UPDATE produto SET nome = '$nome',descricao = '$descricao',preco='$preco' WHERE id=$id"; 
if(mysqli_query($con,$sql)){
    echo "<script language='javascript' type/javascript'>
    alert('Produto atualizado!');
    window.location.href='produto.php';
    </script>";
}else{
    echo "<script language='javascript' type/javascript'>
    alert('Não foi possivel atualizar o produto!');
    window.location.href='produto.php';
    </script>";
}
mysqli_close($con);
?>