<?php 

//CASO A > B, RETORNA 1
//CASO A == B, RETORNA 0
//CASO A < B, RETORNA -1

$a = 50;
$b = 35;

var_dump($a <=> $b);

echo "<br>";

$a = 50;
$b = 50;

var_dump($a <=> $b);

echo "<br>";

$a = 50;
$b = 55;

var_dump($a <=> $b);

?>