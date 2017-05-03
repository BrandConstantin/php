<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tienda PcOnline</title>
        
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- css propio -->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <meta name="author" content="BrandConstantin">
    </head>
    <body>
        <div class="container blue lighten-5">
            <div class="row">
                <div class="s12 m12 l12 xl12 blue darken-5">
                    <img id="logo" class="circle responsive-img" src="img/logo.jpeg"/>    
                    <h1>Tienda PcOnline</h1>
                </div>   
            </div>
            <div class="row col s12 m12 l12 xl12">
                <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="#!">Mi Perfil</a></li>
                  <li><a href="#!">Mis Productos</a></li>
                  <li class="divider"></li>
                  <li><a href="#!">Desconectar</a></li>
                </ul>
                <nav class="s12 m12 l12 xl12">
                     <div class="col s12 m12 l12 xl12">
                        <!--<a href="#!" class="brand-logo">Logo</a>-->
                        <ul class="right">
                          <li><a href="index.php">Inicio</a></li>
                          <li><a href="#">Productos</a></li>
                          <li><a href="#">Registrar</a></li
                          <!-- Dropdown Trigger -->
                          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Mi Cuenta<i class="material-icons right">arrow_drop_down</i></a></li>
                        </ul>
                      </div>
                </nav>                      
                <div class="col s5  m4 l2 xl2 red lighten-2">                    
                    <div class="collection">
                        <a href="#!" class="collection-item active">Categorias</a>
                        <a href="#!" class="collection-item">Alvin</a>
                        <a href="#!" class="collection-item">Alvin</a>
                    </div>                
                </div>
                <div class="col s7 m8 l10 xl10 blue lighten-5">
                    <?php
                        //conexion a la base de datos
                        include './conexion.php';
                        
                        $tableProducts = "products";
                        $totalProducts = $connection->query("select * from $tableProducts");
                        
                        $fileNumber = 3;
                        $secondField = false;
                        $thirdField = false;
                        $fourthField = false;
                        $prodId = "prodId";
                        $prodDesc = "prodDesc";
                        $prodBuy = "prodBuy";
                        $prodSell = "prodSell";
                        $stock = "stock";
                        $sixField = "prodCua";
                        
                        $cart = $_SESSION["cart"];
                        $limit = $_SESSION['limit'];
                        
                        //umbral de aviso de stock
                        if(isset($_POST['limit'])){
                            $limit = $_POST['limit'];
                        }
                        if(!isset($limit)){
                            $limit = 10;
                        }
                        
                        //numero de paginas
                        if(isset($_GET['page'])){
                            $_SESSION['page']  = $_GET['page'];
                        }else{
                            $_SESSION['page'] = 1;
                        }
                        
                        //la página vuelve a la anterior si ya no quedan filas en la actual
                        if($_SESSION['page'] > (ceil($totalProducts->rowCount() / $fileNumber))){
                            $_SESSION['page']--;
                        }
                        
                        //umbral de aviso (formulario)
                    ?>
                    <!--<div class="row">
                        <form action="#" method="post" col s12>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="number" min="1" name="limit" class="validate">
                                  <label for="limit">Limite</label>
                                </div>
                              </div>
                            <button class="btn waves-effect waves-light" type="submit" name="limit" value="limit">Limitar
                                <i class="material-icons right">send</i>
                            </button>
                        </form>
                    </div>-->
                    <?php
                        //listado tabla
                        if($_POST['action'] == ""){
                            $list = $connection->query("select * from $tableProducts order by 1 limit"
                                    .($_SESSION['page'] - 1) * $fileNumber.", ".$fileNumber);
                        }else{
                    ?>
                    <table class="striped">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Descripción</th>
                                <th>Precio-Compra</th>
                                <th>Precio-Venta</th>
                                <th>Stock</th>
                            </tr>
                            <tr>
                        <!--<form action="#" method="post">
                            <td><input type="text" maxlength="10" size="10" name="<?= $prodId ?>" required autofocus></td>
                            <td><input type="text" maxlength="500" size="10" name="<?= $prodDesc ?>"></td>
                            <td><input type="number" name="<?= $prodBuy ?>"></td>
                            <td><input type="number" name="<?= $prodSell ?>"></td>
                            <td><input type="number" name="<?= $stock ?>"></td>
                            <input type="hidden" name="action" value="register"/>
                            <td><button type="submit" class="blueButton" value="Submit"><i class="fa fa-check-circle fa-lg"></i></button></td>
                        </form>-->
                            </tr>
                        </thead>
                        <?php
                            while ($products = $list->fetchObject()){
                        ?>
                        <tbody>
                            <tr>
                                <td><?= $products->$prodId; ?></td>
                                <td><?= $products->$prodDesc; ?></td>
                                <td><?= $products->$prodBy; ?></td>
                                <td><?= $products->$prodSell; ?></td>
                                <td><?= $products->$stock; ?></td>
                                <?php
                                    //mostrar umbral de aviso
                                    if($products->$stock < $limit){
                                        ?>
                                <td><strong><?= $products->$stock; ?></strong></td>
                                <?php
                                    }
                            }
                                ?>
                            </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>        
        <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>