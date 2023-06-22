<?php
//print_r($_GET);

$id_alimentacion = $_GET['id_alimentacion'];
include('../connection/connection.php');

$consulta="call p_eliminarAlimentacion('$id_alimentacion')";

$query=mysqli_query($conn,$consulta);

header('Location: ../alimentacion.php');
?>