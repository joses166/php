<?php 

//faz um coalesce
//CASO O VALOR DA VARIAVEL A SEJA NULO E MOSTRA B E CASO B SEJA NULO ELE MOSTRA C

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;

echo "<br>";

$a = 8;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;

echo "<br>";

$a = NULL;
$b = 7;
$c = 10;

echo $a ?? $b ?? $c;

?>