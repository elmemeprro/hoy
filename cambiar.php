<?php
include "conexion.php";
$id=$_GET['id'];
$usuario = $_POST['usuario'];
$contra_n = $_POST['contra_n'];
$contra_nn = $_POST['contra_nn'];

$cla = md5($contra_n);
$claa = md5($contra_nn);

$sql = "SELECT contraseña FROM registrar WHERE usuario = '$usuario'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) === 1){
$row = mysqli_fetch_assoc($resultado);
if($row['contraseña'] === $cla){
    //header("Location: index.php?error=Usuario/contraseña incorrecta");
    header('Location: cambiar_contra.php?error= Contraseña igual');
}else{
    if($contra_n === $contra_nn){
    
        $sql = $conn->query("UPDATE registrar SET contraseña='$cla' WHERE id='$id' ");
        header('Location:cambiar_contra.php');
    
}else{

   header('Location: cambiar_contra.php?error= Las contraseñas nuevas no coinciden');

}
}
}else{
    //header("Location: index.php?error=Usuario/contraseña incorrecta");
    header('Location: cambiar_contra.php?error=Usuario Incorrecto');
}

?>
