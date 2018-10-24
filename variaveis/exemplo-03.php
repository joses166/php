<?php 

	//TIPOS BASICOS

	//String
	$nome = "Hcode";
	$site = 'www.hcode.com.br';

	//Integer
	$ano = 1990;

	//Float e Double
	$salario = 5500.99;

	//Boolean
	$bloqueado = false;

	//TIPOS COMPOSTOS
	
	//ARRAY
	$frutas = array("abacaxi", "laranja", "manga");
	//echo $frutas[2];

	//OBJETO
	$nascimento = new DateTime();
	//var_dump($nascimento);

	//TIPOS ESPECIAIS 

	//RESOURCE
	$arquivo = fopen("exemplo-03.php", "r");
	//var_dump($arquivo);

	//NULO
	$nulo = null;

?>