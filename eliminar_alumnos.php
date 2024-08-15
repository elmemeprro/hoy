<?php
include "conexion.php";
$id=$_GET['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dpi = $_POST['dpi'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$sql = $conn -> query("DELETE FROM viajero WHERE id= '$id' ");
header('Location:interfaz.php');
?>