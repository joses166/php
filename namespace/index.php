<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Joses");
$cad->setEmail("jose@gmail.com");
$cad->setSenha("123456");

echo $cad;

echo "<br>";

echo $cad->registrarVenda();

?>