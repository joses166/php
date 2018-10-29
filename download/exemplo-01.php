<?php 

$link = "http://localhost/php/download/googlelogo-color-120x44dp.png";

$content = file_get_contents( $link );

$parse = parse_url( $link );

$basename = basename( $parse["path"] );

$file = fopen( $basename, "w+" );

fwrite( $file, $content );//Aqui ocorre o download do arquivo

fclose( $file );

?>

<img src="<?=$basename?>" alt="<?=$parse['name']?>">