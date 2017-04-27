<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pizzeria</title>
    </head>
    <body>
        <?php
        include_once './Campero.php';
        
        if(!isset($_SESSION['camperos'])){
            $_SESSION['camperos'] = array();
        }
        ?>
        <p>Escoge un campero:</p>
        <form action="#" method="post">
            <fieldset>
                <select name="tamanio">
                    <option value="1">Grande</option>
                    <option value="2">Mediano</option>      
                    <option value="3">Pequeño</option>
                </select>
                <select name="tipo">
                    <option value="1">De Jamón</option>
                    <option value="2">De Pollo</option>
                    <option value="3">Vegetal</option>       
                </select>
                <!--<input type="hidden" value="estadoPizza" />-->
                <button type="submit" value="pedir" name="pedir">Pedir</button>
            </fieldset>
        </form> 
        <?php
        if (isset($_POST['pedir'])) { 
            $tamanio = $_POST['tamanio'];
            $tipo = $_POST['tipo'];
            //$estadoPizzar = $_POST['estadoPizza'];
             
            if($tamanio == 1 && $tipo == 1){
                $camperoUno= serialize(new Campero("Grande",  "de jamon", "pedido"));
                $_SESSION['camperos'][] = $camperoUno;
            }else if($tamanio == 1 && $tipo == 2){
               $camperoDos = serialize( new Campero( "Grande",  "de pollo","pedido"));
               $_SESSION['camperos'][]= $camperoDos;   
            }else if($tamanio == 1 && $tipo == 3){
               $camperoTres = serialize( new Campero("Grande",  "vegetal", "pedido"));
               $_SESSION['camperos'][]= $camperoTres;    
            }else if($tamanio == 2 && $tipo == 1){
                $camperoCuatro = serialize(new Campero( "Mediano", "de jamon","pedido"));
                $_SESSION['camperos'][]= $camperoCuatro;       
            }else if($tamanio == 2 && $tipo == 2){
                $camperoCinco = serialize(new Campero("Mediano", "de pollo", "pedido"));
                $_SESSION['camperos'][]= $camperoCinco;  
            }else if($tamanio == 2 && $tipo == 3){
                $camperoSeis = serialize(new Campero("Mediano", "vegetal", "pedido"));
                $_SESSION['camperos'][]= $camperoSeis;        
            }else if($tamanio == 3 && $tipo == 1){
                $camperoSiete = serialize( new Campero("Pequeño", "de jamon", "pedido"));
                $_SESSION['camperos'][]= $camperoSiete;                 
            } else if($tamanio == 3 && $tipo == 2){
                $camperoOcho = serialize(new Campero("Pequeño", "de pollo", "pedido"));
                $_SESSION['camperos'][]= $camperoOcho;                 
            } else if($tamanio == 3 && $tipo == 3){
                $camperoNueve = serialize(new Campero("Pequeño", "vegetal", "pedido"));
                $_SESSION['camperos'][]= $camperoNueve;                 
            }
        }
        
        foreach ($_SESSION['camperos'] as $campero) {
            $camperoAuxiliar = unserialize($campero);
            echo $camperoAuxiliar;
        }
        ?>
    </body>
</html>