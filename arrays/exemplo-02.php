<?php 

$carros [0][0] = "GM";
$carros [0][1] = "cobalt";
$carros [0][2] = "onix";
$carros [0][3] = "camaro";

$carros [1][0] = "Ford";
$carros [1][1] = "Fiesta";
$carros [1][2] = "Fusion";
$carros [1][3] = "Eco Sport";

print_r($carros);

echo $carros[0][3];

//PROCURO O ULTIMO CARRO DO INDICE X = 1; VET[X][]
echo end($carros[1]);

?>