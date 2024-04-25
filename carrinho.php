<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link rel="stylesheet" href="estilo/styleCarrinho.css">
</head>
<body>
    <?php include"cabecalho.inc";?>

    <h1 class="CTítulo"><center>Seu Carrinho</center></h1>
    <div class="compras">
    <?php 
    $compras = array("Guitarra" => 1000,"Baixo" => 1000, "Cabos" => 50);
    $i = 0;
    $total = 0;
    foreach($compras as $itens => $preco)
    {
        echo"<div class='compra$i'>
        <h3>$itens</h3><br>
        <h5>R$$preco</h5>
        </div>";
        $total = $total + $preco;
        $i++;
    }
    echo"</div>";
    echo"<center><h2 class='total'>Total: R$$total</h2></center>";
    
    ?>
</body>
</html>