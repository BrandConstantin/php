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
        
        $camperoUno = new Campero("Grande", "de jamón", "pedido");
        $camperoDos = new Campero("Mediano", "de pollo", "pedido");
        $camperoTres = new Campero("Pequeño", "de pollo", "no pedido");
        $camperoCuatro = new Campero("Pitufillo", "de vegetal", "pedido");
        
        $camperoUno->sirve();
        $camperoDos->sirve();
        $camperoTres->sirve();
        $camperoCuatro->sirve();
        
        echo $camperoUno;
        echo $camperoDos;
        echo $camperoTres;
        echo $camperoCuatro;
        
        echo Campero::getNumServidos();
        echo Campero::getNumPedidos();
        ?>
    </body>
</html>