<?php
session_start();

error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

<?php
    include_once './Entradas.php';

    if (!isset($_SESSION['zonas'])) {
        $_SESSION['zonas'] = array(
            $_SESSION['salaPrincipal'] = serialize(new Entradas('Sala Principal', 1000, 35)),
            $_SESSION['compraVenta'] = serialize(new Entradas('Compra Venta', 200, 40)),
            $_SESSION['vip'] = serialize(new Entradas('Zona Vip', 100, 50)),
            $_SESSION['salaOcio'] = serialize(new Entradas('Sala Ocio', 400, 50)));
    }

    $salaPrincipal = unserialize($_SESSION[salaPrincipal]);
    $compraVenta = unserialize($_SESSION[compraVenta]);
    $vip = unserialize($_SESSION[vip]);
    
    $salaPrincipal->venta();
?>

        <h1 style="text-align: center;">Crea una nueva zona</h1>
        <form action="#" method="post">
            <fieldset>
                Nombre de la zona: <input type="text" name="nombreZona">
                Numero de entradas: <input type="number" min="1" name="entradasDisponibles">
                <button type="submit" value="pedir" name="nuevaZona">Crear Zona</button>
            </fieldset>
        </form> 
        <br><br><br>
<?php

    $i = 1;
    if (isset($_POST['nuevaZona'])) {
        $i++;
        $nombreZona = $_POST['nombreZona'];
        $entradasDisponibles = $_POST['entradasDisponibles'];
        $_SESSION['zona' . $i] = serialize(new Entradas($nombreZona, $entradasDisponibles));  
        $_SESSION['zonas'][] = $_SESSION['zona' . $i] = serialize(new Entradas($nombreZona, $entradasDisponibles));
    }

    foreach ($_SESSION['zonas'] as $zona) {
        $auxZona = unserialize($zona);
        echo $auxZona;        
    }

    //echo "Esto es una prueba" . $vip->getEntradasDisponibles(); 
    //echo "Esto es una prueba" .  $zona[2]->getEntradasDisponibles(); //Este no funciona
    ?>
    </body>
</html>