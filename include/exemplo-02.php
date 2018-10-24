<?php 
/*
Require: obriga que o arquivo exista, e que nao exista erros.
Include: tenta fazer funcionar mesmo que o arquivo não exista ou que dê algum erro, existem mais recursos

require_once - faz com que os arquivos sejam chamados apenas uma vez
include_once - faz com que os arquivos sejam chamados apenas uma vez
*/

//include "inc/exemplo-01.php";

require_once "inc/exemplo-01.php";
require_once "inc/exemplo-01.php";

$resultado = somar(10, 20);

echo $resultado;

?>