<?php 

//print_r($_POST);

$nombre_clasificacion=$_POST['nombre_clasificacion'];
$id_clasificacion=$_POST['id_clasificacion'];

include ('../connection/connection.php');

$consulta ="call p_actualizarClasificacion('$nombre_clasificacion','$id_clasificacion')";

$query=mysqli_query($conn,$consulta);

header('Location: ../clasificacion.php')
?>