<?php
include './conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$curso = $_POST['curso'];

$insertar = $con->query("INSERT INTO alumnos (id, nombre, apellido, curso)"
        . " VALUES('', '$nombre', '$apellido', '$curso')");

if($insertar){
    echo 'GUARDADO';
}else{
    echo 'ERROR , NO SE HA GUARDADO';
}