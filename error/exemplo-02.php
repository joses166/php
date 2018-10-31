<?php 
//Os erros irão continuar ocorrendo, porém não serão notificados na tela
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;



?>