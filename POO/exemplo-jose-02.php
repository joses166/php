<?php 

require_once("exemplo-02.php");

$gol = new Carro();

$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");
print_r($gol->exibir());
var_dump($gol->exibir());


?>