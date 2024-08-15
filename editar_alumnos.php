<?php
include "conexion.php";
$id=$_GET['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dpi = $_POST['dpi'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$sql = $conn -> query("UPDATE viajero SET nombre='$nombre',apellido='$apellido',dpi='$dpi',telefono='$telefono',correo='$correo' WHERE id= '$id' ");

header('Location:interfaz.php');

?>