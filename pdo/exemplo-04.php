<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

/*
OS VALORES SAO PASSADOS EM VARIAVEIS E DEPOIS NO BIND PARAM
SAO CARREGADOS OS VALORES DAS VARIAVEIS PARA O PARAMETRO NO SQL
*/
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "JOAO";
$password = "F;DKGPHKGFLÇKNBFLÇ.;,~LP´KLPODFKSGÇL";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Alterado OK";

?>