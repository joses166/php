<?php 

$condicao = true;

while ( $condicao ) {
	//FUNCAO RAND PARA GERAR NUMEROS ALEATORIOS COM NUMERO MENOR E MAIOR QUE DEVEM SER SEGUIDOS
	$numero = rand(1, 10);

	if ($numero === 3) {
		echo "TRÊS!!!";
		$condicao = false;
	} else {
		echo $numero . "<br>";
	}


}

?>