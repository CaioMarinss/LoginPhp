<?php

define('HOST', '127.0.0.1'); 
define('USUARIO', 'root'); 
define('SENHADB', ''); 
define('BD', 'etec'); 

$conexao = mysqli_connect(HOST, USUARIO, SENHADB, BD) or die("Não foi possivel conectar ao banco de dados");



?>

