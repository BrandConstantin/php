<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tiquet parking</title>
    </head>
    <body>
        <?php
        include_once 'Tiquet.php';
         
        $t1 = new Tiquet(10,5);
        $t2 = new Tiquet(14, 30);
        $t3 = new Tiquet(15, 00);
        
        $t1->paga(11, 00);
        $t3->paga(17, 45);
        $t2->paga(18, 20);
        
        echo "Recaudación: ".Tiquet::getRecaudacion()." Euros.";
        ?>
    </body>
</html>