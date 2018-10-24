<?php 

//PODE SER USADO O ELSE IF OU ELSEIF

$qualSuaIdade = 70;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualSuaIdade < $idadeCrianca) {

	echo "Criança";

} else if ($qualSuaIdade < $idadeMaior) {

	echo "Adolescente";
	
} elseif ($qualSuaIdade < $idadeMelhor) {

	echo "Adulto";

} else {

	echo "Idoso";

}

echo "<br>";

//OPERADOR TERNARIO
echo ( $qualSuaIdade < $idadeMaior ? "Menor de idade" : "Maior de idade" );


?>