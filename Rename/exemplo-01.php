<?php 

$dir1 = "folder_01";
$dir2 = "folder_02";

if ( !is_dir( $dir1 ) ) mkdir( $dir1 );
if ( !is_dir( $dir2 ) ) mkdir( $dir2 );

$filename = "README.txt";

if ( !file_exists( $dir1 . DIRECTORY_SEPARATOR . $filename ) ) {

    echo "Foi criado o arquivo $filename";

    $file = fopen( $dir1 . DIRECTORY_SEPARATOR . $filename, "w+" );
    
    fwrite( $file, date("d/m/Y H:i:s") );

    fclose( $file );

}

//RENOMEANDO O CAMINHO DO ARQUIVO
if ( file_exists( $dir1 . DIRECTORY_SEPARATOR . $filename ) ) {
    
    $origem = $dir1 . DIRECTORY_SEPARATOR . $filename;

    $destino = $dir2 . DIRECTORY_SEPARATOR . $filename;
    
    rename( 
        $origem, //Origem
        $destino //Destino
    );

    echo "Arquivo movido de $origem para $destino com sucesso!";

}

?>