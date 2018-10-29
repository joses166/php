<?php 

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");//AQUI IRÁ FAZER A EXCLUSÃO DO ARQUIVO

echo "Excluído com sucesso!";

?>