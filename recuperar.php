<?php
include "conexion.php";
$usuario = $_POST['usuario'];
$contraseña = md5($_POST['contraseña']);


$sql = "SELECT id FROM registrar WHERE usuario = '$usuario'";

$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) === 1){
    $row = mysqli_fetch_assoc($resultado);
    $id = $row['id'];
    $sql = $conn->query("UPDATE registrar SET contraseña='$contraseña' WHERE id='$id' ");
    echo "<script type='text/javascript'>alert('La contraseña se cambio correctamente');</script>";
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    //header('Location:index.php');
}else{
    header('Location:contraolvidada.php?error=Esa Cuenta No Existente');
}
?>