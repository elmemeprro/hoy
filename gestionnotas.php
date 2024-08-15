<?php
include "conexion.php";
$u1 = $_POST['u1'];
$u2 = $_POST['u2'];
$u3 = $_POST['u3'];
$u4 = $_POST['u4'];
$id = $_GET['id'];
$alumno = $_GET['fk_id_alumno'];
$curso = $_GET['fk_id_curso'];
$sql = $conn -> query("UPDATE notas SET U1 = '$u1', U2 = '$u2', U3 = '$u3', U4 = '$u4' WHERE id= ' $id ', fk_id_alumno = ' $alumno ', fk_id_curso = ' $curso ';
)");

header('Location:notas.php');
?>