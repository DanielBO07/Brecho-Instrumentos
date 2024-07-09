<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/styleLogInfo.css">
    <title>Document</title>
</head>
<body>
    <?php include "cabecalho.inc";?>
    <table>
        <?php
        $id = $_SESSION['idCliente'];
        $sql = "SELECT * FROM `cliente` WHERE`idCliente` = '$id'";
        $resuldado = mysqli_fetch_assoc(mysqli_query($conn, $sql));

        echo "<tr><td>Nome completo</td><td>",$resuldado['nome'],"</td></tr>";
        echo "<tr><td>Email</td><td>",$resuldado['email'],"</td></tr>";
        
        ?>
    </table>
    <form action='' method='POST'><input type='submit' name='logoff' value='Sair da Conta'></form>
    <?php
    if(isset($_POST['logoff']))
    {
        unset($_SESSION['idCliente']);
        header("location: index.php");
    }
    ?>
</body> 
</html>