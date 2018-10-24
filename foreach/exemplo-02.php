<form>

	<input type="text" name="nome"/>
	<input type="date" name="nascimento"/>
	<input type="submit" value="OK"/>

</form>

<?php 

if ( isset($_GET) ) {	

	echo " <hr> ";
	//AQUI IRA RECEBER O GET E IRA ADICIONAR O NAME NA KEY E O VALOR NO VALUE
	foreach ($_GET as $key => $value) {
		
		echo "Nome do campo: " . $key . " <br> ";

		echo "Valor do campo: " . $value;

		echo " <hr> ";

	}

}

?>