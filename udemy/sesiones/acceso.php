<html>
    <head>
        <title>Acceso con logins</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <?php
           if($_GET['error'] == "si"){
                echo "Tu usuario o contraseña no es correcta!";
            }else if($_GET['error'] == 'fuera'){
                echo "No intente logarte con usuario/contraseña en un sitio privado!";
            }
        ?>
        <form action="acceso2.php" method="post">
            <label for="nombre">Nombre de usuario</label>
            <input type="text" nombre="nombre" placeholder="Tu nombre aqui!" autofocus="">
            
            <label for="pass">Contraseña</label>
            <input type="password" name="pass">
            
            <br>
            <input type="submit" value="Inicia Sesión";
        </form>
    </body>
</html>