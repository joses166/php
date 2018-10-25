<?php 

require_once("conexao.php");

$result = $con->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    array_push($data, $row);
}

echo json_encode($data);

?>