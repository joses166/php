<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "**", "**");

/*
OS VALORES SAO PASSADOS EM VARIAVEIS E DEPOIS NO BIND PARAM
SAO CARREGADOS OS VALORES DAS VARIAVEIS PARA O PARAMETRO NO SQL
*/

//INICIA A TRANSACAO
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 1;

$stmt->execute(array($id));

//CANCELA A TRANSACAO
$conn->rollBack();

//CONFIRMA A TRANSACAO
$conn->commit();

echo "Delete OK";

?>