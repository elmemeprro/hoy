<?php
include "conexion.php";
$id=$_GET['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dpi = $_POST['dpi'];
$destino = $_POST['destino'];
$viajes_realizados= $POST ['viajes_realizados'];

$sql = $conn -> query("INSERT INTO viajes_viajero(nombre,apellido,dpi,destino) VALUES('$nombre','$apellido','$dpi','$destino')");
 $sql2 = $conn -> query("UPDATE viajero SET viajes_realizados='$viajes_realizados'+1  WHERE id= '$id' ");

 

header('Location:interfaz.php');
?>