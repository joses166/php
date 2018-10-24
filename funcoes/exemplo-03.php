<?php 

function ola($texto) {

	return "Olá $texto!<br>";

}

echo "1.Função ola com parametro: <br>";
echo ola("mundo");
echo ola("José");
echo "<br>";

function valorPadrao($texto = "mundo") {

	return "Olá $texto!<br>";

}

echo "2.Função ola com parametro com padrao: <br>";
echo valorPadrao();
echo valorPadrao("Joses");
echo "<br>";

function maisParam($texto, $periodo) {

	return "Olá $texto! $periodo!<br>";

}

echo "3.Função ola com dois parametros: <br>";
echo maisParam("mundo", "Boa noite");
echo "<br>";

function maisParamPadrao($texto = "mundo", $periodo = "Bom dia") {

	return "Olá $texto! $periodo!<br>";

}

echo "4.Função ola com dois parametros com padrao: <br>";
echo maisParamPadrao();
echo maisParamPadrao("mundo", "");
echo "<br>";

//VALOR OBRIGATORIO SEMPRE A ESQUERDA
function maisParamPadraoObrigatorio($texto, $periodo = "Bom dia") {

	return "Olá $texto! $periodo!<br>";

}

echo "5.Função ola com dois parametros um obrigatorio outro com padrao: <br>";
echo maisParamPadraoObrigatorio("Jose");

?>