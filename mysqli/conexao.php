<?php 

$con = new mysqli("localhost", "root", "", "dbphp7");

if ( $con->connect_error ) {
    echo "Error: " . $con->connect_error;
}

?>