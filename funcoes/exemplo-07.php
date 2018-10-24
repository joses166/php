<?php 
/*
funcao ira fazer um vetor com varios valores inteiros
e o array_sum() irá fazer a soma de todos os valores
*/
function soma(int ...$valores) {

	return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
//ira puxar apenas numeros inteiros
echo soma(2, 1.5);
echo "<br>";

 ?>