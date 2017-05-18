<!DOCTYPE html>
<!--
Modifica el ejercicio Expocoches Campanillas realizado en clase teniendo en cuenta que ahora las
entradas están numeradas y, además, se pueden reservar. Para simplificar el ejercicio, las entradas
solo se pueden reservar o comprar de una en una y la entrada número cero se puede despreciar.
Añade “Reservar entrada” a las opciones del menú. Para reservar una entrada el usuario dará su
nombre y se le asignará la primera entrada que estuviera libre. La opción “Vender entrada” permitirá
vender una única entrada y se indicará al usuario el número de la entrada vendida. Al elegir la opción
“Vender entrada”, además de preguntar por la zona, se preguntará al usuario si tenía reserva, en
caso afirmativo, se preguntará por el nombre y, tras comprobar la reserva, se le venderá la entrada. Si
por el contrario, el usuario dice que no tenía reserva, se vende la entrada directamente. Crea las tres
zonas con poco aforo (por ej. 10, 20 y 7) para que el programa sea “manejable”. La manera más
sencilla de implementar este sistema, es tener como atributo para cada zona un array de cadenas de
caracteres con la información necesaria para cada elemento (cada entrada): “LIBRE”, “VENDIDA” o el
nombre de la persona que tiene la reserva. El método __toString() debe mostrar el estado de cada
entrada dentro de la zona.
Por ejemplo: 1:VENDIDA 2:VENDIDA 3:Pepe 4:Marta 5:VENDIDA 6:LIBRE 7:LIBRE
-->
<?php 
error_reporting(E_ALL ^ E_NOTICE);

// Clase Zona
require "Zona.php";

// Iniciamos la sesion
session_start();

// Si la zona principal no esta ya creada, la creamos
if (!isset($_SESSION["principal"])) {
    $principal = new Zona("principal", 10);
    // guardamos la Zona en sesion
    $_SESSION["principal"] = serialize($principal);
} else {
    // Si ya esta creado, guardamos el objeto en una variable
    $principal = unserialize($_SESSION["principal"]);
}

// Si la zona compra-venta no esta ya creada, la creamos
if (!isset($_SESSION["compra-venta"])) {
    $compraVenta = new Zona("compra-venta", 10);
    // Guardamos la Zona en sesion
    $_SESSION["compra-venta"] = serialize($compraVenta);
} else {
    // Si ya esta creado, guardamos el objeto en una variable
    $compraVenta = unserialize($_SESSION["compra-venta"]);
}

// Si la zona vip no esta ya creada, la creamos
if (!isset($_SESSION["VIP"])) {
    $vip = new Zona("VIP", 10);
    // Guardamos la Zona en sesion
    $_SESSION["VIP"] = serialize($vip);
} else { 
    // Si ya esta creado, guardamos el objeto en una variable
    $vip = unserialize($_SESSION["VIP"]);
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
        <h2>ExpoCoches</h2>
        <?php
        // Ejecutamos la funcion de Chequeo Reserva
        funcReservar();
        
        // Ejecutamos la funcion Chequeo Compra
        funcComprar();
        
        // Ejecutamos la funcion de mostrar Datos
        funcMostrarDatos();
        ?>
        
        <hr>
        <!-- comprar entradas ----------------------------------------------------------------->
        <h3>Comprar Entrada</h3>
        <form action="compra.php" method="post">
            Zona: 
            <select name="zona">
                <option value="principal" selected>Principal</option>
                <option value="compra-venta">Compra-Venta</option>
                <option value="VIP">VIP</option>
            </select>
            <input type="submit" name="comprar" value="Comprar">
        </form>
        <hr>
        <!-- comprar entradas ----------------------------------------------------------------->
        <h3>Reservar Entradas</h3>
        <form action="index.php" method="post">
            Zona: 
            <select name="zonaReserva">
                <option value="principal" selected>Principal</option>
                <option value="compra-venta">Compra-Venta</option>
                <option value="VIP">VIP</option>
            </select>
            <input type="text" name="nombre" required>
            <input type="submit" name="reservar" value="Reservar">
        </form>
    </body>
</html>

<?php

// function para mostrar datos 
function funcMostrarDatos() {
    echo "<p>". unserialize($_SESSION["principal"]) ."</p>";
    echo "<p>". unserialize($_SESSION["compra-venta"]) ."</p>";
    echo "<p>". unserialize($_SESSION["VIP"]) ."</p>";
}

// funcion para reservar
function funcReservar() {    
    // Si hemos dado al boton de reservar
    if (isset($_POST["reservar"])) {  
        // Unserializamos la zona desde SESSION
        $zona = unserialize($_SESSION[$_POST["zonaReserva"]]);
        
        // Ejecutamos el metodo reservar y guardamos el resultado en $reserva
        $reserva = $zona->reservar($_POST["nombre"]);
        
        // Guardamos en session los cambios
        $_SESSION[$_POST["zonaReserva"]] = serialize($zona);
        
        // Dependiendo de si la reserva fue un exito o no se imprimira un mensaje
        if ($reserva) {
            echo '<p class="especial">La reserva ha sido un exito</p>';            
        } else {
            echo '<p class="especial">La reserva ha fallado!</p>';
        }  
    } 
}

// funcion para vender entradas 
function funcComprar() {
    // Si se ha dado al boton comprar
    if (isset($_POST["compra"]) || isset($_POST["compraReservada"])) {
        // Escogemos la zona de Session y la guardamos en una variable
        $zona = unserialize($_SESSION[$_POST["zona"]]);
        
        if (isset($_POST["nombre"])) {
            // Ejecutamos el metodo vender
            $venta = $zona->vender($_POST["nombre"]);
        } else {
            // Ejecutamos el metodo vender
            $venta = $zona->vender("Libre");
        }
        
        // Serializamos otra vez la zona y la guardamos en Session con los cambios hechos
        $_SESSION[$_POST["zona"]] = serialize($zona);

        // Dependiendo de si la venta ha sido un exito o no, imprimimos un mensaje u otro
        if ($venta) {
            echo '<p class="especial">La venta ha sido un exito</p>';
        } else {
            echo '<p class="especial">La venta ha fallado!</p>';
        }
    }
}
?>