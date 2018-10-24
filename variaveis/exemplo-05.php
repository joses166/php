<?php 

$nome = "Glaucio";

function teste() {
	//FAZ COM QUE A FUNCAO TENHA COMO PUXAR O VALOR DE UMA VARIAVEL GLOBAL
	//ESTA OUVINDO UMA FUNCAO GLOBAL
	global $nome;
	echo $nome;
}

function teste2() {
	$nome = "Joao";
	echo $nome." agora no teste 2.";
}

teste();
teste2();

?>