<?php
//print_r($_POST);

$nombre_animal = $_POST['nombre_animal'];
$descripcion_animal = $_POST['descripcion_animal'];
$id_clasificacion = $_POST['id_clasificacion'];
$id_alimentacion = $_POST['id_alimentacion'];
$id_habitat= $_POST['id_habitat'];

include('../connection/connection.php');

//$consulta= "INSERT INTO producto (nombre, precio, id_fabricante_id)
//VALUE ('$nombre_producto', '$precio', '$id_fabricante')";
$consulta=" call p_registroAnimal('$nombre_animal','$descripcion_animal', '$id_clasificacion', '$id_alimentacion', '$id_habitat')";

$query = mysqli_query($conn,$consulta);

header('Location: ../animal.php');

?>


<!--
//print_r($_POST);

// $nombre_producto = $_POST['nombre_producto'];
// $precio = $_POST['precio'];
// $id_fabricante= $_POST['id_fabricante'];

// include('../connection/connection.php');

// //$consulta= "INSERT INTO producto (nombre, precio, id_fabricante_id)
// //VALUE ('$nombre_producto', '$precio', '$id_fabricante')";
// $consulta=" call p_registroProducto('$nombre_producto','$precio', '$id_fabricante')";


// $query = mysqli_query($conn,$consulta);

// header('Location: ../productos.php');

?> --> 
