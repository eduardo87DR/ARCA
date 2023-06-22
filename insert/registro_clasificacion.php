<?php
//print_r($_POST);

$nombre_clasificacion = $_POST['nombre_clasificacion'];

include('../connection/connection.php');
  
  /*$consulta = "INSERT INTO fabricante (nombre) 
  VALUE ('$nombre_fabricante')"; */
  $consulta = "call p_registroClasificacion('$nombre_clasificacion')";

  $query = mysqli_query($conn,$consulta);

  header('Location: ../clasificacion.php');


?>