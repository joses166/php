<?php 
/*
Passagem por valor
*/
$a = 10;

function trocaValor($b) {
	$b += 50;
	return $b;
}

echo "Passagem de parâmetro por valor";
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;

echo "<hr>";

/*
Passagem de parâmetro por referencia
*/
function trocaValor1(&$b) {
	$b += 50;
	return $b;
}

echo "Passagem de parâmetro por referencia";
echo "<br>";
echo trocaValor1($a);
echo "<br>";
echo $a;

?>