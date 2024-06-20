<?php
//dados do banco de dados
define ("DB_HOST", "localhost");
define ("DB_NAME", "loja_site");
define ("DB_USER", "root");
define ("DB_PASS", "");
 //conexão com o banco de dados
return new PDO (sprintf ("mysql:host=%s;dbname=%s", DB_HOST,DB_NAME), DB_USER, DB_PASS);
?>