<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Simple Login Form Example</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-form">
  <form action="login.php" method="POST">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="number" placeholder="cpf" value="cpf">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Senha" value="senha">
      </div>
    </div>
    <div class="action">
     <input type="submit" value ="Login"> 
    </div>
  </form>
</div>
<?php

if (!isset($_SESSION)) session_start(); //se a sessão n for iniciado
if (!isset($_SESSION["user"])) //se a sessão "user" n for iniciado 
{
  session_destroy(); //destroi a sessão
  header("Location: menu.php"); //manda o user pro index
  exit;
}


?>
</body>
</html>
