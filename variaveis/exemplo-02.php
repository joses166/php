<?php 

	$anoNascimento = 1999;
	$nome1 = "Joses"; //é permitido
	echo $nome1;
	unset($nome1);
	echo $nome1;

	$nome = "José";
	$sobrenome = "Martins";
	$nomeCompleto = $nome . " " . $sobrenome;
	echo $nomeCompleto;

?>