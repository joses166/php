<?php 

$dt = new DateTime();

//FOI ADICIONADO UM PERIODO DE 15 DIAS
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");


 ?>