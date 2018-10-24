<?php 
/*
FUNCAO strtoupper() USADA PARA DEIXAR TEXTO TODO MAIUSCULO
FUNCAO strtolower() USADA PARA DEIXAR TEXTO TODO MINUSCULO
FUNCAO ucfirst() APENAS A PRIMEIRA LETRA DA PRIMEIRA PALAVRA FICA MAIUSCULA
FUNCAO ucwords() APENAS AS PRIMEIRAS LETRAS DAS PALAVRAS FICAM MAIUSCULAS
*/
$nome = "joao rangel";

$nome = strtoupper($nome);

echo $nome;

echo "<br>";

$nome = strtolower($nome);

echo $nome;

echo "<br>";

echo ucfirst($nome);

echo "<br>";

echo ucwords($nome);

?>