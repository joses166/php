<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "**", "**");

/*
OS VALORES SAO PASSADOS EM VARIAVEIS E DEPOIS NO BIND PARAM
SAO CARREGADOS OS VALORES DAS VARIAVEIS PARA O PARAMETRO NO SQL
*/
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();

echo "Inserido OK";

?>