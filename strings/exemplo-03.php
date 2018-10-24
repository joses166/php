<?php 
/*
MUDANDO VALOR COM A FUNCAO str_replace
str_replace(texto a encontrar, texto modificar, variavel);

*/
$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);

$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>