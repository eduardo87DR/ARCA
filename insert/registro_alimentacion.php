<?php
//print_r($_POST);

$nombre_alimentacion = $_POST['nombre_alimentacion'];

include('../connection/connection.php');
  
  /*$consulta = "INSERT INTO fabricante (nombre) 
  VALUE ('$nombre_fabricante')"; */
  $consulta = "call p_registroAlimentacion('$nombre_alimentacion')";

  $query = mysqli_query($conn,$consulta);

  header('Location: ../alimentacion.php');


?>