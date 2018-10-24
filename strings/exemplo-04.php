<?php 

/*
strpos(variavel com texto, palavra a encontrar) => retorna posicao
substr(variavel com texto, inicio, fim) => retorna texto de acordo com as posicoes de inicio e fim determinadas
substr(variavel com texto, inicio) => retorna texto do inicio determinado até o fim do texto da variavel
strlen(variavel) => retorna tamanho da variavel
*/

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

echo $texto;

echo "<br>";

var_dump($q);

echo "<br>";

$texto2 = substr($frase, $q);

echo $texto2;

echo "<br>";

$texto3 = substr($frase, $q + strlen($palavra), strlen($frase));

echo $texto3;

?>