<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate( $image, 0, 0, 0 );
$grey = imagecolorallocate( $image, 100, 100, 100 );

imagestring( $image, 5, 450, 150, "CERTIFICADO", $titleColor );
imagestring( $image, 5, 440, 350, "Divanei Aparecido", $titleColor );
imagestring( $image, 3, 440, 370, utf8_decode( "Concluído em: " ) . date("d/m/Y"), $titleColor );

header("Content-type: image/jpeg");

//imagejpeg( $image );// AQUI IRA APENAS APARECER NA TELA
//imagejpeg( $image, "certificado-".date("Y-m-d").".jpg" );// AQUI IRÁ GERAR UMA IMAGEM NA PASTA DO ARQUIVO PHP
imagejpeg( $image, "certificado-".date("Y-m-d").".jpg", 10 );// AQUI IRÁ GERAR UMA IMAGEM NA PASTA DO ARQUIVO PHP, DETERMINANDO A QUALIDADE ( escala de 0 a 100 )

imagedestroy( $image );

?>