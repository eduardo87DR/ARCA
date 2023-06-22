<?php 
//print_r($_POST);

$nombre_alimentacion=$_POST['nombre_alimentacion'];
$id_alimentacion=$_POST['id_alimentacion'];

include ('../connection/connection.php');

$consulta ="call p_actualizarAlimentacion('$nombre_alimentacion','$id_alimentacion')";

$query=mysqli_query($conn,$consulta);

header('Location: ../alimentacion.php')
?>