<?php

$hostname= "localhost";
$username= "root";
$password="";
$database="ARCA";

$conn = new mysqli($hostname, $username, $password, $database);

if($conn -> connect_error){
    die("Error de conexión a la base de datos.$conn->connect_error");
}
//echo "conexión exitosa";
//$conn->close()
?>