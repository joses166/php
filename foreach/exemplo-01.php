<?php 

$meses = array(
	"Janeiro", "Fevereiro", "Março",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);
// QUANDO FOR PARA MOSTRAR O VALOR
foreach ( $meses as $mes ) {
	echo "O mês é " . $mes . "<br>";
}
// QUANDO FOR PARA MOSTRAR O INDICE E O VALOR
foreach ( $meses as $index => $mes ) {
	echo "Indice: " . $index . "<br>";
	echo "O mês é " . $mes . "<br><br>";
}

?>