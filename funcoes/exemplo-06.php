<?php 

$pessoa = array(
	'nome' => 'João',
	'idade' => 20
);

/*
Passagem por valor
*/
foreach ( $pessoa as $value ) {

	if (gettype($value) === 'string') $value = 'Jose';	
	if (gettype($value) === 'integer') $value += 10;
	
	echo $value . "<br>";
}

print_r($pessoa);

echo "<hr>";

/*
Passagem de parâmetro por referencia
*/
foreach ( $pessoa as &$value ) {

	if (gettype($value) === 'string') $value = 'Jose';	
	if (gettype($value) === 'integer') $value += 10;
	
	echo $value . "<br>";
}

print_r($pessoa);

?>