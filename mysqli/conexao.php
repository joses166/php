<?php 

$con = new mysqli("localhost", "***", "**", "dbphp7");

if ( $con->connect_error ) {
    echo "Error: " . $con->connect_error;
}

?>