<?php 

session_id('crd6qciuael3vmfeofh8a0nn34');

require_once("config.php");

//SEMPRE QUE A PAGINA FOR ATUALIZADA DEVE SER GERADO UM NOVO ID
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>