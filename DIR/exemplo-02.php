<?php 

$images = scandir("images");//ESCANEIA TODO O DIRETORIO DA PASTA INDICADA

$data = array();

foreach ( $images as $img ) {
    
    if ( !in_array( $img, array(".", "..") ) ) {// in_array(variavel_verificar, o_que_procura); Essa função faz uma busca dentro de um array

        $filename = "images" . DIRECTORY_SEPARATOR . $img;
        
        $info = pathinfo($filename);//INFORMAÇÕES DO ARQUIVO
        
        $info["size"] = filesize($filename);//TAMANHO DO ARQUIVO EM BYTES

        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));//DATA DA ÚLTIMA MODIFICAÇÃO DO ARQUIVO

        $info["url"] = "http://localhost/php/DIR/" . str_replace("\\", "/", $filename);//MOSTRA A URL ONDE ESTÁ O ARQUIVO E FAZ A SUBSTITUIÇÃO DA \ PARA /
        
        array_push($data, $info);//ADICIONA INFORMAÇÕES EM UM ARRAY JÁ DECLARADO

    }
}

echo json_encode($data);

?>