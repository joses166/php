<?php 

function ola() {

	$argumentos = func_get_args();
	return $argumentos;

}

var_dump(ola("Bom dia", 10));
var_dump(ola());

/*
O recurso acima faz com que seja lido os parametros passados para uma funcao
*/

?>