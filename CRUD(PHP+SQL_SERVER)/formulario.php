<!DOCTYPE html>
<?php
    include (conexion.php);
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale-1">
        <title>CRUD PHP y SQL Server</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="col-md-8 col-md-offset-2">
            <h1>Crud</h1>
            <form method="post" action="formulario.php">
                <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Escriba tu nombre>"<br>
                </div>
                <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="text" name="contrasenia" class="form-control" placeholder="Escriba tu contraseña">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control" placeholder="Escriba tu email">
                </div>
                <div class="form-group">
                    <input type="submit" name="insert" class="btn btn-warning" value="Insertar">
                </div>
            </form>
        </div>
        
        <br><br>
        <?php
            if(isset($_POST['insert'])){
                $usuario = $_POST['nombre'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                
                $insertar = "INSERT INTO usuarios(usuario, password, email) VALUES ('$usuario', '$pass', '$email')";
                
                $ejecutar = sqlsrv_query($con, $insertar);
                
                if($ejecutar){
                    echo "<h4>Insertado correctamente</h4>";
                }
            }
        ?>
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-bordered table-responsive">
                <tr>
                    <td>Id</td>
                    <td>Usuario</td>
                    <td>Password</td>
                    <td>Email</td>
                </tr>
                <?php
                    $consulta = "SELECT * FROM usuarios";
                    
                    $ejecutar = sqlsrv_query($con, $consulta);
                    
                    while($fila = sqlsrv_fetch_array($ejecutar)){
                        $id = $fila['id'];
                        $usuario = $fila['usuario'];
                        $pass = $fila['password'];
                        $email = $fila['email'];
                        
                        $i++;
                    }
                ?>
                <tr align="center">
                    <td><?php echo $id; ?></td>
                    <td><?php echo $usuario ?></td>
                    <td><?php echo $pass; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><a href="formulario.php?editar=<?php echo $id; ?>"</a></td>
                    <td><a href="formulario.php?borrar=<?php echo $id; ?>"</a></td>
                </tr>
            </table>
        </div>
        <?php
            if(isset($_GET['editar'])){
                include('editar.php');
            }
            
            if(isset($_GET['borrar'])){
                $borrar = $_GET['borrar'];

                $borrar = "DELETE FROM usuarios WHERE id='$borrarId'";
                $ejecutar = sqlsrv_query($con, $borrar);

                if($ejecutar){
                    echo "<script>alert('Datos borrados')</script>";
                    echo "<script>window.open('formulario.php', '_self')</script>";
                }
            }
        ?>
    </body>
</html>
