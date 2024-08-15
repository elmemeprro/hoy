<?php
include "conexion.php";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dpi = $_POST['dpi'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$dd = 0;

    $sql = $conn -> query("INSERT INTO viajero(nombre,apellido,dpi,telefono,correo,viajes_realizados) VALUES('$nombre','$apellido','$dpi','$telefono','$correo','$dd'
)");

header('Location:interfaz.php');
?>