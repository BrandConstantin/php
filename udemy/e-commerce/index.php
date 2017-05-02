<?php 
    include ("./functions/functions.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tienda PcOnline</title>
        <link rel="stylesheet" href="style/style.css" type="text/css" media="all" />
    </head>
    <body>
        <div id="main_wrapper">
            <!--header-->
            <div id="header_wrapper">
                <img id="logo" src="images/logo.jpeg"/>                
                <div id="menubar">
                    <ul id="menu">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contactar</a></li>
                        <li><a href="#">Mi Cuenta</a></li>
                        <li><a href="#">Registrar</a></li>
                    </ul>
                    <!--search box-->
                    <div id="search_box">
                        <form method="get" action="results.php" enctype="multipart/form-data">
                            <input type="text" name="user_query" />
                            <input type="submit" name="search" value="Buscar" />
                        </form>
                    </div>
                </div>
            </div>
            <!--navigation bar-->
            <div id="sidebar">
                <div id="sidebar_title">Categorias:</div>
                <ul id="cat">
                    <?php getCats(); ?>
                </ul>
            <hr>
            <hr>
                <div id="sidebar_title">Marcas:</div>
                <ul id="cat">
                    <?php getBrands(); ?>
                </ul>
            </div>
            <!--content area-->
            <div id="contentarea"></div>
            <!--footer-->
            <div id="footer">
                <h3>&copy;2017 by BrandConstantin</h3>
            </div>
        </div>
    </body>
</html>