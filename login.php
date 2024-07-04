<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Registro</title>
  <link rel="stylesheet" href="estilo/styleLogin.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Galada&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
  <?php include"cabecalho.inc";?>
  <form action="" method="POST" class="form">
    <h1>Login</h1>
    <input type="email" name="email" class="box" placeholder="Login">
    <input type="password" name="password" class="box" placeholder="Senha">
    <input type="submit" class="botaoreg" value="LOGIN">
    <a href="registro.php">Não tem cadastro?</a>
  <?php
  require "BD/conectaBD.php";
  $sqlcliente = "";
  $sqladm="";
  if(mysqli_query($conn, $sqlcliente)){
    header('location:index.php');
  }else if(mysqli_query($conn, $sqladm)){
    header('location:registro.php');
  }else{
    echo"<div class='erro'>
        <h3>ERRO</h3>
        <br><h4>Usuário ou senha incorretos</h4>
      </div>";
  }
  ?>
  </form>
  <?php include"rodape.inc";?>
</body>
</html>