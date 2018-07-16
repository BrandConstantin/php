<!DOCTYPE html>
<!--
Modifica el programa anterior para que muestre tu dirección y tu número de teléfono.
Cada dato se debe mostrar en una línea diferente. Mezcla de alguna forma las 
salidas por pantalla, utilizando tanto HTML como PHP.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $nombre = "COSTY";
            $estudios = "II de DAW";
            $edad = 29;
            $direccion = "Málaga";
            $telefono = "666 777 888";
        ?>
        <h1>Nombre: </h1><?php echo $nombre?>
        <h1>Estudios: </h1><?php echo $estudios?>
        <h1>Edad: </h1><?php echo $edad?>
        <h1>Dirección: </h1><?php echo $direccion?>
        <h1>Telefono: </h1><?php echo $telefono?>
    </body>
</html>
