<?php
    session_start();
    if(isset($_GET['zona'])){
        $descuento = false;
        $gratis = false;
        if($_GET['zona']=="espana"){
            $gastosEnvio = 9;
        }
        if($_GET['zona']=="europa"){
            $gastosEnvio = 14;
        }
        if($_GET['zona']=="mundo"){
            $gastosEnvio = 21;
        }
        if($_SESSION['pvp']>=60){
            $gratis = true;            
        }
        if($_SESSION['pvp']>=200){
            $descuento = true;            
        }
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="./estiloEjercicio05.css">
        <style>
            #finalizarCompra{
                width: 1000px;
                height: 450px;
                background-color: black;    
                opacity: 0.7;
                border: 2px solid yellow;
                border-radius: 20px;
                margin-top: 2%;
                margin-left: 10%;
            }
            #examen {
                position: absolute;
                border: 3px solid red;
                color: yellow;
            }
            #final {
                position: absolute;
                top: 400px;
                left: 400px;
                border: 3px solid red;
                color: yellow;
            }
            h4{
                display: inline-block;
                width: 150px;
                margin: 0px;
                background-color: yellow;
                color: black;
                border-radius: 20%;
            }
        </style>
    </head>
    <body>
        <header>
            <img src="./header.png" id="cabecera">
            <h1>Galactic Store</h1>
        </header>
        <main>
            <div id="finalizarCompra">
                <?php
                foreach($_SESSION['carrito'] as $key => $value) {
                    echo "<h4>Producto: ", $_SESSION['productos'][$key]['Nombre'], " Cantidad: ",  $value, "</h4>";
                }
                ?>  
                <form id="examen" action="finalizarPedido.php" method="get">
                Seleccione la zona de evío:
                <select name="zona">
                    <option value="espana">Dentro de España</option>
                    <option value="europa">Dentro de Europa</option>
                    <option value="mundo">Resto del mundo</option>
                </select>
                <input type="submit" value="ok">
            </form>
            </div>
            <?php
            if(isset($_GET['zona'])){
                $finalizacion;
                if((!$gratis)&&(!$descuento)){
                    $finalizacion = "El precio inicial es de ".$_SESSION['pvp']."<br>Los gastos de envío son $gastosEnvio euros<br> El total de su compra es ".($_SESSION['pvp'] + $gastosEnvio)." euros";
                }
                if(($gratis)&&(!$descuento)){
                    $finalizacion = "El precio inicial es de ".$_SESSION['pvp']."<br>Los gastos de envío son gratis<br> El total de su compra es ".$_SESSION['pvp']." euros";
                }
                if(($gratis)&&($descuento)){
                    $x = $_SESSION['pvp']-($_SESSION['pvp'] * 0.05);
                    $finalizacion = "El precio inicial es de ".$_SESSION['pvp']."<br>Los gastos de envío son gratis<br>Se le aplica un descuento del 5%: ".(($_SESSION['pvp']*5)/100)."<br>El total de su compra es ".$x. " euros.";
                }
                echo "<div id=\"final\">$finalizacion</div>";
            }
            ?>
        </main>        
    </body>
</html>