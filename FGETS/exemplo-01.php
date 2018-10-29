<?php 

$filename = "usuarios.csv";

if ( file_exists( $filename ) ) {
    
    $file = fopen( $filename, "r" );//NÃO É NECESSÁRIO COLOCAR O '+' PORQUE JÁ SABEMOS QUE O ARQUIVO EXISTE

    $headers = explode(",", fgets( $file ));//PEGA APENAS A PRIMEIRA LINHA DO ARQUIVO

    $data = array();

    while ( $row = fgets( $file ) ) {

        $rowData = ( explode( ",", $row ) );

        $linha = array();

        for ( $i = 0; $i < count($headers); $i++ ) {

            $linha[$headers[$i]] = $rowData[$i];

        }

        array_push($data, $linha);

    }

    fclose( $file );

    echo json_encode($data);

}

?>