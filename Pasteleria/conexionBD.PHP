<?php

$servername = "localhost:3306"; 
$username = "root"; 
$password = ''; 
$database = "bdpasteleria"; 

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    ;
}


?>

