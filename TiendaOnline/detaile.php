<?php
    session_start();
    
    $codProd = $_POST['codProd'];
    
    if($codProd == "asus"){
        echo $name  = "Asus";
        echo $imag = "img/asus.jpeg";

        ?>
        <img src="<?= $imag ?>">
        <p>Ideal para estudiantes</p>
       <?php 
    } else if ($codProd == "acer"){
        $name  = "Acer";
        $imag = "img/acer.jpeg";
                        ?>
                <p>Ideal para cualquiera!</p>
                <?php 
    } else if ($codProd == "hp"){
        $name  = "hp";
        $imag = "img/hp.jpeg";
                                ?>
                <p>Ideal para editores video</p>
                <?php 
    } else if ($codProd == "msi"){
        $name  = "Msi";
        $imag = "img/msi.jpeg";
                                ?>
                 <p>Ideal para gamars</p>
                <?php
    } else if ($codProd == "samsung"){
        $name  = "Samsung";
        $imag = "img/samsung.jpeg";
                        ?>
                 <p>Ideal para quien busca algo con grandes prestaciones</p>
                <?php
    }else if ($codProd == "yamaha"){
        $name  = "Yamaha";
        $imag = "img/yamaha.jpg";
    }else if ($codProd == "samsung j3"){
        $name  = "Samsung J3";
        $imag = "img/j3.jpg";
    }else if ($codProd == "samsung j5"){
        $name  = "Samsung j5";
        $imag = "img/j5.jpg";
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
                margin-top: 150px;
                margin-left: 40px;
                width: 200px;
                height: 270px;
                border: 2px solid chartreuse;
                border-radius: 10%;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <h1>Product</h1>  
            <form action="index.php" method="post" id="buy">
                <input type="hidden" name="codProd" value="<?php echo $codProd; ?>">
                <input type="submit" value="Buy">
            </form> 
            <form action="index.php" method="post" id="goBack">
                <input type="submit" value="Go Back">
            </form> 
        </div>     
        </div>
    </body>
</html>
