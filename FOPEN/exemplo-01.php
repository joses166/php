<?php 

// w, w+, a, a+ Faz com que caso o arquivo não exista é criado um novo
// a+ O conteúdo do arquivo é preservado e o cursor é jogada para o final do arquivo
// w+ 
$file = fopen( "log.txt", "a+" );

fwrite( $file, date("Y-m-d H:i:s") . "\n" );

fclose( $file );

echo "Arquivo criado com sucesso!";

?>