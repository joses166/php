<?php 
/*
ConnectionPooling=0 ==> faz e já encerra
ConnectionPooling=1 ==> faz e continua 
*/
$usuario = "**";
$senha = "**";

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", $usuario, $senha);

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>