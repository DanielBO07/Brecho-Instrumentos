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
  </form>
  <?php
  if(!empty($_POST['email']) && !empty($_POST['password']))
  {
    $email=$_POST['email'];
    $senha = $_POST['password'];
    if($email == "Adimin@Adimin" && $senha == "adm")
    {
      header("location: indexadm.html");
    }
    else{
      echo"<div class='erro'>
        <h2>ERRO</h2>
        <h4>Usuário ou senha incorretos</h4>
      </div>";
    }
  }
  ?>
  <?php include"rodape.inc";?>
</body>
</html>