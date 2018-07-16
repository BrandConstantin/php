<?php

include 'conexion.php';

$id = $_REQUEST['id'];

$delete = $con -> query ("DELETE FROM alumnos WHERE id = '$id' ");

if($delete){
    echo '<script>location.href="index.php";</script>';
}else{
    echo '<script>'
    . "alert('El registro no pudo ser borrado')"
    . 'location.href="update.php?id='.$id.'";'
            . '</script>';
}