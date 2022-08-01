<?php
    include "conecta.php";
    $usuario = $_SESSION["user"];
    $menu_query = "SELECT * FROM usuario WHERE login = '$usuario' AND tipo = '1'";
    
?>