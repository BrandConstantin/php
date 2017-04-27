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
        include_once './Pizza.php';
        
        if(!isset($_SESSION['pizzas'])){
            $_SESSION['pizzas'] = array();
        }
        ?>
        <p>Escoge una pizza</p>
        <form action="#" method="post">
            <fieldset>
                <select name="nombre">
                    <option value="1">Margarita</option>
                    <option value="2">Cuatro Quesos</option>
                    <option value="3">Fungui</option>       
                </select>
                <select name="tipo">
                    <option value="1">Mediana</option>
                    <option value="2">Familiar</option>      
                    <option value="3">Pequeña</option>
                </select>
                <!--<input type="hidden" value="estadoPizza" />-->
                <button type="submit" value="pedir" name="pedir">Pedir</button>
            </fieldset>
        </form> 
        <?php
        if (isset($_POST['pedir'])) { 
            $nombre = $_POST['nombre'];
            $tipo = $_POST['tipo'];
            //$estadoPizzar = $_POST['estadoPizza'];
             
            if($nombre == 1 && $tipo == 1){
                $pizzaUno= serialize(new Pizza("Margarita", "mediana", "pedida"));
                $_SESSION['pizzas'][] = $pizzaUno;
            }else if($nombre == 1 && $tipo == 2){
               $pizzaDos = serialize( new Pizza("Margarita", "familiar", "pedida"));
               $_SESSION['pizzas'][]= $pizzaDos;   
            }else if($nombre == 1 && $tipo == 3){
               $pizzaTres = serialize( new Pizza("Margarita", "pequeña", "pedida"));
               $_SESSION['pizzas'][]= $pizzaTres;    
            }else if($nombre == 2 && $tipo == 1){
                $pizzaCuatro = serialize(new Pizza("Cuatro Quesos", "mediana", "pedida"));
                $_SESSION['pizzas'][]= $pizzaCuatro;       
            }else if($nombre == 2 && $tipo == 2){
                $pizzaCinco = serialize(new Pizza("Cuatro Quesos", "familiar", "pedida"));
                $_SESSION['pizzas'][]= $pizzaCinco;  
            }else if($nombre == 2 && $tipo == 3){
                $pizzaSeis = serialize(new Pizza("Cuatro Quesos", "pequeña", "pedida"));
                $_SESSION['pizzas'][]= $pizzaSeis;        
            }else if($nombre == 3 && $tipo == 1){
                $pizzaSiete = serialize( new Pizza("Funghi", "mediana", "pedida"));
                $_SESSION['pizzas'][]= $pizzaSiete;                 
            } else if($nombre == 3 && $tipo == 2){
                $pizzaOcho = serialize(new Pizza("Funghi", "familiar", "pedida"));
                $_SESSION['pizzas'][]= $pizzaOcho;                 
            } else if($nombre == 3 && $tipo == 3){
                $pizzaNueve = serialize(new Pizza("Funghi", "pequeña", "pedida"));
                $_SESSION['pizzas'][]= $pizzaNueve;                 
            }
        }
        
        foreach ($_SESSION['pizzas'] as $pizza) {
            $auxPizza = unserialize($pizza);
            
            if(($nombre == 1 && $tipo == 1) || 
                    ($nombre == 2 && $tipo == 1) ||
                    ($nombre == 3 && $tipo == 1)){
                echo "<span style='color:red;'>".$auxPizza."</span>";
            }else if(($nombre == 1 && $tipo == 2) || 
                    ($nombre == 2 && $tipo == 2) || 
                    ($nombre == 3 && $tipo == 2)){
                echo "<span style='color:green;'>".$auxPizza."</span>";
            }else if($tipo == 3){
                echo "<span style='color:black;'>".$auxPizza."</span>";
            }
        }
        ?>
    </body>
</html>