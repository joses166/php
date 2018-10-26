<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

/*
OS VALORES SAO PASSADOS EM VARIAVEIS E DEPOIS NO BIND PARAM
SAO CARREGADOS OS VALORES DAS VARIAVEIS PARA O PARAMETRO NO SQL
*/
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Delete OK";

?>