<!DOCTYPE html>
<!--
Queremos gestionar la venta de entradas (no numeradas) de Expocoches Campanillas que tiene
3 zonas, la sala principal con 1000 entradas disponibles, la zona de compra-venta con 200 entradas
disponibles y la zona vip con 25 entradas disponibles. Hay que controlar que existen entradas
antes de venderlas. Define las clase Zona con sus atributos y métodos correspondientes y crea
un programa que permita vender las entradas. En la pantalla principal debe aparecer información
sobre las entradas disponibles y un formulario para vender entradas. Debemos indicar para qué
zona queremos las entradas y la cantidad de ellas. Lógicamente, el programa debe controlar que no
se puedan vender más entradas de la cuenta.

Mejora el programa Expocoches Campanillas realizado en clase de tal forma que se puedan añadir
nuevas zonas a la aplicación o borrar zonas ya creadas (no es necesario implementar la modificación
de zonas).
-->
<?php 
error_reporting(E_ALL ^ E_NOTICE);

require "Zona.php";
// Iniciamos la sesion
session_start();

// Si la zona principal no esta ya creada, la creamos
if (!isset($_SESSION["zona"]["principal"])) {
    $principal = new Zona("principal", 1000);
    // guardamos la Zona en sesion
    $_SESSION["zona"]["principal"] = serialize($principal);
} else {
    // Si ya esta creado, guardamos el objeto en una variable
    $principal = unserialize($_SESSION["zona"]["principal"]);
}

// Si la zona compra-venta no esta ya creada, la creamos
if (!isset($_SESSION["zona"]["compra-venta"])) {
    $compraVenta = new Zona("compra-venta", 200);
    // guardamos la Zona en sesion
    $_SESSION["zona"]["compra-venta"] = serialize($compraVenta);
} else {
    // Si ya esta creado, guardamos el objeto en una variable
    $compraVenta = unserialize($_SESSION["zona"]["compra-venta"]);
}

// Si la zona vip no esta ya creada, la creamos
if (!isset($_SESSION["zona"]["VIP"])) {
    $vip = new Zona("VIP", 25);
    // guardamos la Zona en sesion
    $_SESSION["zona"]["VIP"] = serialize($vip);
} else { 
    // Si ya esta creado, guardamos el objeto en una variable
    $vip = unserialize($_SESSION["zona"]["VIP"]);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>ExpoCoches</title>
        <style>            
            .especial {
                color: red;
            }
        </style>
    </head>
    <body>
        <h1>ExpoCoches</h1>
        <h4>Mostrar Entradas Disponibles</h4>
        
        <?php 
        // Ejecutamos la funcion funcComprar
        funcComprar();
        
        // Ejecutamos la funcion funcBorrar
        funcBorrar();
        
        // Ejecutamos la funcion funcCrearZona
        funcCrearZona();        
        
        // Ejecutamos la funcion de mostrar Datos
        funcMostrarDatos();
        ?>
        
        <hr>
        <!--comprar entradas ------------------------------------------------------------------------->
        <h4>Comprar Entradas</h4>
        <form action="index.php" method="post">
            Zona: 
            <select name="zona">
                <?php 
                //  para mostrar todas las zonas en el Select
                foreach ($_SESSION["zona"] as $zona) {
                    // Unserializamos la zona
                    $zonaUnserialized = unserialize($zona);
                ?>
                <option value="<?= $zonaUnserialized->getNombre()?>"><?= $zonaUnserialized->getNombre()?></option>
                <?php
                }
                ?>
            </select>
            Numero de entradas: <input type="number" min="1" max="10" placeholder="10" name="numeroEntradas" autofocus required>
            <input type="submit" name="comprar" value="Comprar"> 
        </form>
        
        <!--crear zonas nuevas ------------------------------------------------------------------------->
        <h4>Crear Zona Nueva</h4>
        <form action="index.php" method="post">
            Nombre: <input type="text" name="zonaNueva" required>
            Plazas: <input type="number" min="1" placeholder="100" name="plazasZonaNueva" required>
            <input type="submit" name="crear" value="Crear Zona">
        </form>
        
        <!--borrar zona ------------------------------------------------------------------------->
        <h4>Borrar Zona</h4>
        <form action="index.php" method="post">
            <select name="borrarZona">
                <?php 
                // Foreach para mostrar todas las zonas en el Select
                foreach ($_SESSION["zona"] as $zona) {
                    // Unserializamos la zona
                    $zonaUnserialized = unserialize($zona);
                ?>
                <option value="<?= $zonaUnserialized->getNombre()?>"><?= $zonaUnserialized->getNombre()?></option>
                <?php
                }
                ?>
            </select>
            <input type="submit" name="borrar" value="Borrar Zona">
        </form>
    </body>
</html>

<?php
//funciones
//
// funcion mostrar Datos que muestra los datos de cada zona
function funcMostrarDatos() {
    foreach ($_SESSION["zona"] as $zona) {
        // Unserializamos la zona
        $zonaUnserialized = unserialize($zona);
        // Mostramos por pantalla
        echo "<p>$zonaUnserialized</p>";
    }
}

// funcion con el chequeo de la compra de entradas
function funcComprar() {
    // Si se ha dado al boton comprar
    if (isset($_POST["comprar"])) {
        $zona = unserialize($_SESSION["zona"][$_POST["zona"]]);
        
        // Hacemos la venta, el metodo devuelve true o false dependiendo si ha habido exito o no en la transaccion
        $venta = $zona->vender($_POST["numeroEntradas"]);
        
        // Serializamos y guardamos de nuevo la zona modificada
        $_SESSION["zona"][$_POST["zona"]] = serialize($zona);
        
        // Dependiendo de si la venta ha sido un exito o no, imprimimos un mensaje u otro
        if ($venta) {
            echo '<p class="especial">La venta ha sido un exito</p>';
        } else {
            echo '<p class="especial">La venta ha fallado, quizas no queden entradas suficientes para la zona deseada.</p>';
        }
    }
}

// funcion para crear zona nueva
function funcCrearZona() {
    // si se ha pulsado el boton crear
    if (isset($_POST["crear"])) {
        // Creamos el nuevo objeto zona
        $zona = new Zona($_POST["zonaNueva"], $_POST["plazasZonaNueva"]);
        
        // Serializamos y guardamos en Session
        $_SESSION["zona"][$_POST["zonaNueva"]] = serialize($zona);
        
        // Imprimimos por pantalla que ha sido un exito
        echo '<p class="especial">Zona Creada con Exito</p>'; 
    }
}

// funcion para borrar una zona
function funcBorrar() {
    // Si se ha pulsado el boton borrar
    if (isset($_POST["borrar"])) {
        // Hacmos un unset para borrar la zona del array $_SESSION["zona"]
        unset($_SESSION["zona"][$_POST["borrarZona"]]);
        
        // Imprimimos por pantalla que ha sido un exito el borrado
        echo '<p class="especial">Zona Borrada con exito</p>'; 
    }  
}
?>