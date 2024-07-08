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
  <form action="" class="form2" method="post">
    <h1>Registro</h1>
    <input type="name" name="nome" class="boxreg" placeholder="Nome">
    <input type="email" name="email" class="boxreg" placeholder="Email">
    <input type="password" name="senha" class="boxreg" placeholder="Criar Senha">
    <input type="password" name="senha2" class="boxreg" placeholder="Confirme Senha">
    <input type="submit" value="Criar conta"> 
    <a href="index.php">Página inicial</a>
  </form>
  <?php
  if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['senha2']))
  {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirma = $_POST['senha2'];
    
    if($senha == $confirma)
    {
      $sql = "INSERT INTO `cliente`(`nome`, `email`, `senha`) VALUES ('$nome','$email','$senha')";
      if(mysqli_query($conn, $sql)){
        echo"<div class='certo'> 
        <h3>Conta criada</h3>
        </div></h1>";
      }else{
        echo"<div class='erro'> 
        <h3>Erro no sistema</h3>
        </div>";
      }
    }else{
      echo"<div class='erro'> 
      <h3>Senhas Diferentes</h3>
      </div>";
    }
  }
  ?>
  <?php include"rodape.inc";?>
</body>
</html>