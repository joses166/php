<?php 

$dateTime = new DateTime();

echo $dateTime->format("d/m/Y");

echo "<br/>";
//ADICIONANDO DATA
$dateIntevalAdicionar = new DateInterval("P2M20D");

$dateTime->add($dateIntevalAdicionar);

echo $dateTime->format("d/m/Y");

echo "<br/>";
//SUBTRAINDO DATA
$dateTime = new DateTime();

$dateIntevalRemover = new DateInterval("P1M5D");

$dateTime->sub($dateIntevalRemover);

echo $dateTime->format("d/m/Y");

 ?>