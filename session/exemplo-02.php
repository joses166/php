<?php 

require_once("config.php");

//LIMPA AS VARIAVEIS DE SESSAO
session_unset($_SESSION["nome"]);

echo $_SESSION["nome"];

//LIMPA AS VARIAVEIS DE SESSAO E REMOVE 
session_destroy();

?>