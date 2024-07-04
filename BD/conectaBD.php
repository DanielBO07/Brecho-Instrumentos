<?php
$hostBD='localhost';
$nomeBD='bdbrecho_instrumentos';
$userBD='root';
$senhaBD='';
//coneção
$conn = mysqli_connect($hostBD, $userBD, $senhaBD, $nomeBD); 

// validando a conexão
if($conn === false){
    die("ERROR: Não foi possível Conectar. " . mysqli_connect_error());
}
?>