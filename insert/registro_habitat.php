<?php
//print_r($_POST);

$nombre_habitat = $_POST['nombre_habitat'];

include('../connection/connection.php');
  
  /*$consulta = "INSERT INTO fabricante (nombre) 
  VALUE ('$nombre_fabricante')"; */
  $consulta = "call p_registroHabitat('$nombre_habitat')";

  $query = mysqli_query($conn,$consulta);

  header('Location: ../habitat.php');
 
  

?>