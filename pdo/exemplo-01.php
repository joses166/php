<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//$results = $stmt->fetchAll();

foreach ( $results as $row ) {
    foreach ( $row as $key => $value ) {
        echo "<strong>" . strtoupper($key) . "</strong>: " . $value . "<br/>";
    }
    echo "<hr>";
}

echo json_encode($results);

?>