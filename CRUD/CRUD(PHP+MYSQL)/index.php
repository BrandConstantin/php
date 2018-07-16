<?php include 'conexion.php' ?>
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
        <form action="insert.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre Alumno"><br>
            <input type="text" name="apellido" placeholder="Apellidos Alumno"><br>
            <input type="number" name="curso" placeholder="Curso Alumno"><br>
            <input type="submit" value="Insertar">
        </form>
        
        <table>
            <th>id</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>curso</th>
            <th></th>
            <th></th>
            <?php
                $selection = $con->query("SELECT * FROM alumnos");
                
                while($fila = $selection->fetch_assoc()){
                    ?>
            <tr>
                <td><?php echo $fila['id'] ?></td>
                <td><?php echo $fila['nombre'] ?></td>
                <td><?php echo $fila['apellido'] ?></td>
                <td><?php echo $fila['curso'] ?></td>
                <td><a href="update.php?id=<?php echo $fila['id'] ?>">EDITAR</a></td>
                <td><a href="delete.php?id=<?php echo $fila['id'] ?>">ELIMINAR</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>
