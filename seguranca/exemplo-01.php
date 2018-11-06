<?php 

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

    //NAO RECEBER DADOS DINAMICOS 
    //EVITAR INJECOES DE DADOS COM O escapeshellcmd()
    $cmd = escapeshellcmd( $_POST['cmd'] );//SEMPRE QUE TIVER ALGUM COMANDO ELE NÃO EXECUTA

    var_dump( $cmd );

    echo "<pre>";

    $comando = system($cmd, $retorno);
    
    echo "</pre>";

}


?>

<form method="post">

<input type="text" name="cmd">
<button type="submit">Enviar</button>

</form>