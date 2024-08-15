<?php
session_start();
include "conexion.php";
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$cla = md5($contraseña);


$sql = "SELECT * FROM registrar WHERE usuario ='$usuario' AND contraseña = '$cla'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) === 1){
    $row = mysqli_fetch_assoc($resultado);
    if($row['usuario'] ===$usuario && $row['contraseña'] === $cla){
        $_SESSION['usuario'] = $row['usuario'];
        $_SESSION['id'] = $row['id'];
        header("Location: interfaz.php");
    
    }else{
        //header("Location: index.php?error=Usuario/contraseña incorrecta");
        header('Location: index.php?error=Usuario o Contraseña incorrecta');
        
    }
}else{
    //header("Location: index.php?error=Usuario/contraseña incorrecta");
    header('Location: index.php?error=Usuario o Contraseña incorrecta');
}

?>