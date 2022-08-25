<?php
    include 'conecta.php';
    $usuario = $_SESSION["user"];
    $menu_query = "SELECT * FROM usuario WHERE login='$usuario' AND tipo='1'";
    $result = $con->query($menu_query);//query -> consulta;rows -> linha;
    if($result->num_rows > 0)
    {
        echo "<li class = 'nav-item'><a class='nav-link'href='dash.php'>HOME</a></li>";//link para ativar bootstrap tipo menu
        echo "<li class = 'nav-item'><a class='nav-link'href='agendamento.php'>AGENDAMENTO</a></li>";
        echo "<li class = 'nav-item'><a class='nav-link'href='entrega.php'>ENTREGA</a></li>";
        echo "<li class = 'nav-item'><a class='nav-link'href='cliente.php'>CLIENTE</a></li>";
        echo "<li class = 'nav-item'><a class='nav-link'href='produto.php'>PRODUTO</a></li>";
        echo "<li class = 'nav-item'><a class='nav-link'href='usuario.php'>USUARIO</a></li>";
        echo "<li class = 'nav-item'><a class='nav-link'href='relatorio.php'>RELATORIO</a></li>";
  
    }
    else
    {
        echo "<li class = 'nav-item'><a class='nav-link'href='dash.php'>HOME</a></li>";
        echo "<li class = 'nav-item'><a class='nav-link'href='agendamento.php'>AGENDAMENTO</a></li>";
        echo "<li class = 'nav-item'><a class='nav-link'href='entrega.php'>ENTREGA</a></li>";
        echo "<li class = 'nav-item'><a class='nav-link'href='cliente.php'>CLIENTE</a></li>";
    }
?>