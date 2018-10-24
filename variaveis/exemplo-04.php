<?php 

// http://localhost/variaveis/exemplo-04.php?a=Joses
$nome = (int) $_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];

$nomeArquivo = $_SERVER["SCRIPT_NAME"];

echo $ip;


?>