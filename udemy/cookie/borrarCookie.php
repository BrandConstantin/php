<html>
    <head>
        <title>Ejercicio 3</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if(isset($_COOKIE['nombre'])){
                echo "La cookie tiene el valor ".$_COOKIE['nombre']."<br>";
            }else{
                echo "No se ha encontrado ninguna cookie<br>";
            }
        ?>

        <a href="cookie3_a.php">Salir del sistema</a>
    </body>
</html>