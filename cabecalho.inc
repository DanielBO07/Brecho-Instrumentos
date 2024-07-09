<head>
    <link rel="stylesheet" href="estilo/styleCabecalho.css">
    <link href="https://fonts.googleapis.com/css2?family=Galada&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<nav>
    <?php require "BD/conectaBD.php"; ?>
    <?php
    if(empty($_SESSION['idCliente']))
    {
        echo"<a href='login.php' class='carrinho'>
        <img src='imagem/carrinho.png' height='50'>
        </a>";
    }else{
        echo"<a href='carrinho.php' class='carrinho'>
        <img src='imagem/carrinho.png' height='50'>
        </a>";
    }
    ?>
    <span class="parede"></span>
    <a href="index.php" class="inicio">
        <h1>
            Início
        </h1>
    </a>
    <h1 class="nome">Sol Lamento</h1>
    <?php 
    if (empty($_SESSION['idCliente']))
    {
        echo"<a href='login.php' class='login'>
        <h1> Login </h1>
        </a>";
    }else{
        echo"<form action='' method='POST' class='log'><input type='submit' class='loginfo' name='loginfo' value=''></form>";
    }
    if(isset($_POST['loginfo']))
    {
        header("location: logInfo.php");
    }
    ?>
</nav>
</body>