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
  <form action="" method="post" class="form">
    <h1>Login</h1>
    <input type="email" name="email" class="box" placeholder="Login">
    <input type="password" name="senha" class="box" placeholder="Senha">
    <input type="submit" class="botaoreg" value="LOGIN">
    <a href="registro.php">Não tem cadastro?</a>
  <?php
  
  if(!empty($_POST['email']) && !empty($_POST['senha']))
  {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql="SELECT * FROM `cliente` WHERE`email` = '$email' && `senha` = '$senha'";

    $resultado = mysqli_fetch_assoc(mysqli_query($conn, $sql));
 
    if(!empty($resultado['idCliente']))
    {
      $_SESSION['idCliente'] = $resultado['idCliente'];
      header("location: index.php");
    }else{

      $sql="SELECT * FROM `adm` WHERE`email` = '$email' && `senha` = '$senha'";
      $resultado = mysqli_fetch_assoc(mysqli_query($conn, $sql));

      if(!empty($resultado['idADM']))
      {
        $_SESSION['idADM'] = $resultado['idADM'];
        header("location: indexadm.php");
      }else{
        echo"<div class='erro'> 
        <h3>ERRO</h3>
        <br><h4>Usuário ou senha incorretos</h4>
        </div>";
      }
    }
  }
  ?>
  </form>
  <?php include"rodape.inc";?>
</body>
</html>