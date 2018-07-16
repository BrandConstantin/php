<?php
    if(isset($_GET['editar'])){
        $editar = $_GET['editar'];

        $consulta = "SELECT * FROM usuarios WHERE id='$editar'";
        $ejecutar = sqlsrv_query($con, $consulta);

        $fila = sqlsrv_fetch_array($ejecutar);

        $usuario = $fila['usuario'];
        $pass = $fila['password'];
        $email = $fila['email'];
    }
?>
<div class="col-md-8 col-md-offset-2">
    <h1>Crud</h1>
    <form method="post" action="formulario.php">
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $usuario; ?>"<br>
        </div>
        <div class="form-group">
            <label>Contraseña:</label>
            <input type="text" name="contrasenia" class="form-control" value="<?php echo $pass; ?>">
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
            <input type="submit" name="insert" class="btn btn-warning" value="Insertar">
        </div>
    </form>
</div>

<?php
    if(isset($_POST['actualizar'])){
        $editarNombre = $_POST['nombre'];
        $editarPass = $_POST['passw'];
        $editarEmail = $_POST['email'];

        $consulta = "UPDATE usuarios SET usuario='$editarNombre', pass='$editarPass', email='$editarEmail'"
                . "WHERE id='$editarId";
        
        $ejecutar = sqlsrv_query($con, $consulta);

        $fila = sqlsrv_fetch_array($ejecutar);
        
        if($ejecutar){
            echo "<script>alert('Datos actualizados')</script>";
            echo "<script>window.open('formulario.php', '_self')</script>";
        }
    }
?>