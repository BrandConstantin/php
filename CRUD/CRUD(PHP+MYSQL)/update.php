<?php

include './conexion.php';

$id = $_REQUEST['id'];

$selection = $con -> query ("SELECT * FROM alumnos WHERE id='$id' ");

if ($fila = $selection -> fetch_assoc()){
    
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD (PHP + MYSQL)</title>
    </head>
    <body>
        <form action="updateRes.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="text" name="nombre" placeholder="Modifica Nombre Alumno" value="<?php echo $fila['nombre'] ?>"><br>
            <input type="text" name="apellido" placeholder="Modifica Apellidos Alumno" value="<?php echo $fila['apellido'] ?>"><br>
            <input type="number" name="curso" placeholder="Modifica Curso Alumno" value="<?php echo $fila['curso'] ?>"><br>
            <input type="submit" value="Actualizar">
        </form>
    </body>
</html>