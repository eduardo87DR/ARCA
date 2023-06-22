<?php
//print_r($_POST);

$nombre_animal = $_POST['nombre_animal'];
$descripcion_animal = $_POST['descripcion'];
$id_clasificacion = $_POST['id_clasificacion'];
$id_alimentacion = $_POST['id_alimentacion'];
$id_habitat = $_POST['id_habitat'];
$id_animal = $_POST['id_animal'];

include('../connection/connection.php');

$consulta= "call p_actualizarAnimal('$nombre_animal','$descripcion_animal','$id_clasificacion','$id_alimentacion','$id_habitat','$id_animal')";

/*$consulta = "UPDATE producto 
 SET nombre = '$nombre_producto', precio = '$precio_producto', id_fabricante_id = '$id_fabricante'
 WHERE id_producto = '$id_producto'"; */

$query = mysqli_query($conn,$consulta);

header('Location: ../animal.php');
?>


<!-- 
//print_r($_POST);

// $nombre_producto = $_POST['nombre_producto'];
// $precio_producto = $_POST['precio_producto'];
// $id_fabricante = $_POST['id_fabricante'];
// $id_producto = $_POST['id_producto'];

// include('../connection/connection.php');

// $consulta= "call p_actualizarProducto('$nombre_producto','$precio_producto','$id_fabricante','$id_producto')";

// /*$consulta = "UPDATE producto 
//  SET nombre = '$nombre_producto', precio = '$precio_producto', id_fabricante_id = '$id_fabricante'
//  WHERE id_producto = '$id_producto'"; */

// $query = mysqli_query($conn,$consulta);

// header('Location: ../productos.php');
//