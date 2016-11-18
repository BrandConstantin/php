<?php
    session_start();
    
    $codigoProd = $_GET['codigoProd'];
    
    if($codigoProd == "asus"){
        $nombre  = "Asus";
        $imagen = "img/asus.jpeg";
    } else if ($codigoProd == "acer"){
        $nombre  = "Acer";
        $imagen = "img/acer.jpeg";
    } else if ($codigoProd == "hp"){
        $nombre  = "hp";
        $imagen = "img/hp.jpeg";
    } else if ($codigoProd == "msi"){
        $nombre  = "Msi";
        $imagen = "img/msi.jpeg";
    } else if ($codigoProd == "samsung"){
        $nombre  = "Samsung";
        $imagen = "img/samsung.jpeg";
    }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <style>
            img {
                margin-top: 10px;
                margin-left: 40px;
                width: 200px;
                height: 270px;
                border: 2px solid chartreuse;
                border-radius: 10%;
            }
            
            #descripcion {
                position: absolute;
                top: 250px;
                right: 50px;
                width: 100px;
                height: 70px;
                color: chartreuse;
                overflow-x: hidden;
                overflow-y: scroll;
                text-align: center;
            }
            
            p, h2{
                color: black;
            }

            #volver{
                position: absolute;
                top: 30px;
                right: 10px;
                width: 100px;
                height:30px;
                font-size: 14px;
                font-weight: bold;
                background-color: chartreuse;
                color: black;
                border: red;
                border-radius: 10%;
                text-align: center;
            }
            
            #volver:hover{
                background-color: red;
                color: yellow;
                border: 1px solid yellow;
                cursor: pointer;
            }
            
            #comprar{
                position: absolute;
                top: 30px;
                right: 150px;
                width: 100px;
                height:30px;
                font-size: 14px;
                font-weight: bold;
                background-color: chartreuse;
                color: black;
                border: red;
                border-radius: 10%;
                text-align: center;
            }
            
            #comprar:hover{
                background-color: red;
                color: yellow;
                border: 1px solid yellow;
                cursor: pointer;
            }
            
            #contenedor{
                float: right;
            }
        </style>
    </head>
    <body>
        <div id="cabecera">
            <img src="img/logo.jpeg" id="imgCabecera">
            <h1>Detalles Producto</h1>  
            <form action="index.php" method="get" id="comprar">
                <input type="hidden" name="codigoProd" value="<?php echo $codigoProd; ?>">
                <input type="submit" value="Comprar">
            </form> 
            <form action="index.php" method="get" id="volver">
                <input type="submit" value="Volver">
            </form> 
        </div>
        
        <contenedor>       
            <h1><?php echo $nombre; ?></h1>
            <img src="<?php echo $imagen; ?>">
            <div id="descripcion">
                <h2><?php echo $nombre; ?></h2>
                <?php if($codigoProd == "acer") {                    
                ?>
                <p>Con este sable láser, los luchadores de Star Wars pueden batirse en duelo con sus oponentes 
                    frikis. Eso si, si compras este producto jamás tendras novia. Es ideal para jugar en interiores y exteriores
                    aunque en el espacio no hay oxígeno así que morirás. El sable láser forma parte del sistema de 
                    BladeBuilders de sables láser personalizables. 
                    ¡Prepárate para la acción y la aventura en una remota galaxia con los Frikis de tu barrio!
                    <ul>
                        <li>No incluye sable láser.</li>
                        <li>No se ilumina.</li>
                        <li>No funciona</li>
                    </ul>
                </p>
               <?php 
                }
                if($codigoProd=="asus"){
                ?>
                <p>
                    Es una réplica del droide BB-8 que aparece en Star Wars: The Force Awakens. 
                    Puede rodar y ponerse en equilibrio por sí mismo, incluso mejor tú.
                    Si quieres conseguir ser el hazmereir de tu colegio no puedes perderte este producto.
                    Ya podrás ir por ahí contando que tus padres no quieren comprarte un perro.
                    Es la nueva era de los Tamagochi.
                    <ul>
                        <li>No se mueve.</li>
                        <li>No habla.</li>
                        <li>No funciona.</li>
                    </ul>
                </p>
                <?php 
                }
                if($codigoProd=="hp"){
                ?>
                <p>Si quieres ser el personaje más chulo sobre una moto de 49cc, no puedes perderte este producto.
                   compuesto de un plástico muy endeble. Sirve solo para juntar polvo y, eventualmente, para pisar papeles
                   (siempre y cuando no haga mucho viento).
                   Además, podrás usarlo para trabar la puerta así corre el aire.
                    <ul>
                        <li>No se puede respirar dentro.</li>
                        <li>Disponible solo en talla xxxxs.</li>
                        <li>No funciona como sombrero</li>
                    </ul>
                </p>
                <?php 
                }
                if($codigoProd=="msi"){
                ?>
                 <p>Juguete ideal para niños menores de 3 años. Con esta arma no podrás hacer daño a nadie
                    pero aprenderán a respetarte desde pequeño.
                    Tiene un cascabel dentro que simula el sonido de la recarga de cartuchos laser.
                    Juguete prohibido en estados unidos (hasta que gane Trump).
                    <ul>
                        <li>No es arma.</li>
                        <li>No es laser.</li>
                        <li>No funciona.</li>
                        <li>Puede explotar espontáneamente.</li>
                    </ul>
                </p>
                <?php
                }
                ?>
            </div>
            
        </contenedor>
    </body>
</html>
