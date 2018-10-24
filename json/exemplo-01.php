<?php

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
	));

array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 25
	));

//PASSA O ARRAY PARA O JSON
echo json_encode($pessoas);

?>