<?php 
/*
funcao ira fazer um vetor com varios valores inteiros
e o array_sum() irá fazer a soma de todos os valores
os dois pontos com o tipo na frente sera o tipo de retorno
*/
function soma(int ...$valores):string {
	return array_sum($valores);
}

var_dump(soma(2, 2));
echo "<br>";
//ira puxar apenas numeros inteiros
echo soma(2, 1.5);
echo "<br>";

 ?>