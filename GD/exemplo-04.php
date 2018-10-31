<?php

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

//recebe as dimensoes da imagem atual
list( $old_width, $old_height ) = getimagesize( $file );

//CARREGA A PALETA DE 16 MILHOES DE CORES
//ISSO AQUI JA ESTA CONFIGURADO PARA A THUMBNAIL
//TAMANHO DA IMAGEM DESTINO
$new_image = imagecreatetruecolor( $new_width, $new_height );

//CRIA UMA IMAGEM A PARTIR DO $file
//TAMANHO DA IMAGEM ORIGEM
$old_image = imagecreatefromjpeg( $file );

// INSIRA OS PARAMETROS SEGUINTES:
// IMAGEM DESTINO, IMAGEM ORIGEM
// EIXO X DE ONDE COMECA A CORTAR, EIXO Y DE ONDE COMECA A CORTAR -- PARAMETRO IMAGEM DESTINO
// EIXO X DE ONDE COMECA A CORTAR, EIXO Y DE ONDE COMECA A CORTAR -- PARAMETRO IMAGEM ORIGEM
// TAMANHO LARGURA, TAMANHO ALTURA -- PARAMETRO IMAGEM DESTINO
// TAMANHO LARGURA, TAMANHO ALTURA -- PARAMETRO IMAGEM ORIGEM
imagecopyresampled( $new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height );

imagejpeg( $new_image );

imagedestroy( $new_image );
imagedestroy( $old_image );

//Criando um thumbnail, irá fazer com que a imagem seja redimensionada e o seu tamanho do arquivo tambem diminua

?>