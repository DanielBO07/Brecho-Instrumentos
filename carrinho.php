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
    <div class="container">
    <h2>Carrinho de Compras</h2>
    <table>
      <thead>
        <tr>
          <th>Produto</th>
          <th>Preço</th>
          <th>Quantidade</th>
          <th>Total</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      <?php 
        $compras = array("Guitarra" => array(2 => 1000),"Baixo" => array(1 => 1000), "Cabos" => array(2 => 100), "Palhetas" => array(2 => 20));
        $i = 0;
        $total = 0;
        foreach($compras as $itens => $quantidades)
        {
            foreach($quantidades as $quantia => $preco)
            {
                $totalI = $quantia * $preco;
                echo "
                <tr>
                <td>$itens</td>
                <td>R$$preco</td>
                <td>$quantia</td>
                <td>R$$totalI</td>
                <td><button class='btn'>Remover</button></td>
                </tr>";
                $total = $total + $totalI;
            }
        }
        echo"
        </tbody>
      <tfoot>
        <tr>
          <td colspan='3'><strong>Total</strong></td>
          <td colspan='2'><strong>R$$total</strong></td>
        </tr>
      </tfoot>";
    ?>
    </table>
    <button class="btn">Limpar Carrinho</button>
  </div>
    <?php include"rodape.inc";?>
</body>
</html>