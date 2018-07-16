<?php
include './conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$curso = $_POST['curso'];

$update = $con ->query("UPDATE alumnos SET nombre='$nombre', apellido='$apellido', curso='$curso' "
        . "WHERE id='$id' ");

if($update){
    echo '<script>location.href="index.php";</script>';
}else{
    echo '<script>location.href="update.php?id='.$id.'";</script>';
}