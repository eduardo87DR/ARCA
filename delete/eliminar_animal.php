<?php
//print_r($_GET);

$id_animal = $_GET['id_animal'];
include('../connection/connection.php');

$consulta="call p_eliminarAnimal('$id_animal')";

$query=mysqli_query($conn,$consulta);

header('Location: ../animal.php');
?>