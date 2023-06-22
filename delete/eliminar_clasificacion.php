<?php
//print_r($_GET);

$id_clasificacion = $_GET['id_clasificacion'];
include('../connection/connection.php');

$consulta="call p_eliminarClasificacion('$id_clasificacion')";

$query=mysqli_query($conn,$consulta);

header('Location: ../clasificacion.php');
?>