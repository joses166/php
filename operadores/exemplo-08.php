<?php 

$resultado = 10 + 3 / 2;

echo $resultado;

echo "<br>";

$resultado = ( 10 + 3 ) / 2;

echo $resultado;

//1ª VERDADEIRA
//2ª FALSE
//condicao && - and - e
$resultado = ( 10 + 3 ) / 2 > 5 && 10 + 5 < 3;

var_dump($resultado);

echo "<br>";

//1ª VERDADEIRA
//2ª FALSE
//condicao || - or - ou
$resultado = ( 10 + 3 ) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado);

?>