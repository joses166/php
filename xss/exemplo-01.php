<form method="post">

<input type="text" name="busca" />
<button type="submir"> Enviar </button>

</form>

<?php 

if ( isset( $_POST['busca'] ) ) {

echo strip_tags( $_POST['busca'] );
//echo htmlentities( $_POST['busca'] ); mostra todo o conteudo como sendo uma string
//echo strip_tags( $_POST['busca'], "<strong><a>" ); coloca as tags permitidas

}

?>