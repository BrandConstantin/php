<?php
session_start();   

if(!isset($_SESSION['products'])){
    $_SESSION['products'] = array(
        /*$prod = array(
            'name' => 'Los mejores products del mercado',
            'price' => 'Siempre el más barrato',
            'imag' => 'img/logo.jpeg',
            'detail' => '-',
            'category' => "others",
            'ofert' => 'yes'),*/
        $acer = array(
            'name' => 'Acer',
            'price' => 670,
            'imag' => 'img/acer.jpeg',
            'detail' => 'CPU: AMD A4 5300; Grafica: ASUS GeForce GTX 960; RAM: 8Gb; Disco: Toshiba Canvio Basics;',
            'category' => "computer",
            'ofert' => 'yes'),
        $asus = array(
            'name' => 'Asus',
            'price' => 770,
            'imag' => 'img/asus.jpeg',
            'detail' => 'CPU: Intel Core i5 4930k; Grafica: ASUS GTX750-PHOC; RAM: 12Gb; Disco: Western Digital Elements;',
            'category' => "computer",
            'ofert' => 'no'),
        $hp = array(
            'name' => 'Hp',
            'price' => 795,
            'imag' => 'img/hp.jpeg',
            'detail' => 'CPU: AMD Sempron 145; Grafica: Gigabyte GeForce GTX 660; RAM: 32Gb; Disco: Seagate BackUp;',
            'category' => "computer",
            'ofert' => 'no'),
        $msi = array(
            'name' => 'Msi',
            'price' => 1170,
            'imag' => 'img/msi.jpeg',
            'detail' => 'CPU: AMD FX FX-6200; Grafica: Sapphire Radeon HD 5450; RAM: 8Gb; Disco: Transcend Store Canvio;',
            'category' => "computer",
            'ofert' => 'no'),
        $samsung = array(
            'name' => 'Samsung',
            'price' => 980,
            'imag' => 'img/samsung.jpeg',
            'detail' => 'CPU: Intel Core i7-3820; Grafica: EVGA Geforce 210; RAM: 12Gb; Disco: Seagate STBX1000201',
            'category' => "computer",
            'ofert' => 'yes'),
        $yamaha = array(
            'name' => 'Yamaha',
            'price' => 345,
            'imag' => 'img/yamaha.jpg',
            'detail' => 'Potencia 120W, Frecuencia 34Mz ',
            'category' => "others",
            'ofert' => 'yes'),
        $samsungj3 = array(
            'name' => 'Samsung J3',
            'price' => 149,
            'imag' => 'img/j3.jpg',
            'detail' => 'Procesador QuadCore 1,5Ghz, 8Gb, Camara 8Mp, Camara secundaria 5Mp ',
            'category' => "others",
            'ofert' => 'yes'),
        $samsungj5= array(
            'name' => 'Samsung J5',
            'price' => 219,
            'imag' => 'img/j5.jpg',
            'detail' => 'Procesador QuadCore 1,5Ghz, 16Gb, Camara 13Mp, Camara secundaria 5Mp  ',
            'category' => "others",
            'ofert' => 'no'),
    );  

    $_SESSION['trolley'] = [];
    $_SESSION['total'] = 0;
}/*else{
    if(isset($_POST['empty'])){
        session_destroy();
        header('refresh: 0;');
    }else{
        //$codProd = $_POST['codProd'];
        //$codProdDelete = $_POST['codProdDelete'];
        
        if($codProd != null){
            $_SESSION['trolley'][$codProd]++;
            $_SESSION['total'] = $_SESSION['products'][$codProd]['total'] + $_SESSION['total'];
        }
        if(($codProdDelete != null) && ($_SESSION['trolley'][$codProdDelete] > 0)){
            $_SESSION['trolley'][$codProdDelete]--;
            $_SESSION['total'] = $_SESSION['total'] - $_SESSION['products'][$codProdDelete]['total  '];
        }
        if(isset($_GET['discount'])){
               $codDiscount = $_GET['discount'];
            if($codDiscount == "0187"){
                $_SESSION['total'] = $_SESSION['total'] - 80;
            }
        }
    }
}*/
    ?>
<!DOCTYPE html>
<!--
Mejora la tienda realizada en clase añadiendo los gastos de enví o. En el carrito debe haber un botón
“Finalizar compra” que nos lleve a una página con el mismo contenido del carrito donde se nos pida
seleccionar la zona de envío. Los gastos de envío son de 9 € para pedidos realizados en España, 14 €
para pedidos desde otros países de Europa y de 21 € para el resto del mundo. Si el pedido supera los 60 €,
los gastos de envío son gratis, independientemente de la zona. Si el pedido supera los 200 €, además de
tener gratis los gastos de envío, se aplicará un descuento del 5% sobre el total. En la última pantalla debe
aparecer un desglose con todo lo que se ha comprado así como los cargos o descuentos aplicados y el
precio final a pagar.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">        
    </head>
    <body>   
        <div id="container">
            <div id="header">            
                <div id="logo"></div>
                <h1>PC Tienda Online</h1>
                <div id="trolley">
                    <!--<form action="index.php" method="post" id="empty">
                           <input type="hidden" name="empty" value="empty">
                           <input type="submit" value="Empty Trolley">
                       </form>
                       <form action="index.php" method="post" id="discount">
                           Apply the cod to discount<br>
                           <input type="text" placeholder="Apply here" name="discount" >
                           <input type="submit" value="Ok">
                       </form>-->
                </div>
                <div id="category">
                    <p>List products for</p>
                    <form action="name.php" method="post">
                        <input type="hidden" name="action" value="name">
                        <input type="submit" value="Name">
                    </form>
                    <form action="price.php" method="post">
                        <input type="hidden" name="action" value="price">
                        <input type="submit" value="Price">
                    </form>
                </div>                
            </div>
                    <div id="productsTable">    
                        <?php
                           /* foreach($_SESSION['products'] as $key => $value) {
                                echo "<form class=\"products\" id=\"", $key, "\" action=\"index.php\" method=\"post\">";
                                echo "<a class=\"detalle\" href=\"detaile.php?cod=",$key ,"\">";                    
                                echo "<img src=\"", $value['imag'], "\" title=\"Detaile\">";
                                echo "</a>";
                                echo "<p>", $value['name'], "</p>";
                                echo "<h4>", $value['price'], " Euros</h4>";
                                echo "<input type=\"hidden\" name=\"codProd\" value=\"", $key, "\">";
                                echo "<input type=\"hidden\" name=\"action\" value=\"buy\">";
                                echo "<input type=\"submit\" value=\"Buy\">";
                                echo "</form>";
                            }*/
                            foreach ($_SESSION['products'] as $key => $value) {
                                ?>
                        <div class="products">
                                <a name="<?= $key ?>"></a>
                                <img src="<?= $value['imag'] ?>"><br>
                                    <?= $value['name'] ?><br>
                                    Price: <?= $value['price'] ?> €</br>

                                    <form action="index.php?key=<?= $key ?>" method="post">
                                        <input type="hidden" name="codProd" value="<?= $key ?>">
                                        <input type="hidden" name="action" value="Buy">                          
                                        <input type="submit" value="Buy">
                                    </form></br>
                                    <form action="detaile.php" method="post">
                                        <input type="hidden" name="codProd" value="<?= $key ?>">
                                        <input type="hidden" name="action" value="detaile">                          
                                        <input class="detaile" type="submit" value="Detaile">
                                    </form><br>
                            </div>
                                <?php
                            }
                        ?>            
                    </div>
            </div>
    </body>
</html>