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
        <div class="container blue lighten-3">
            <div class="row">
                <div class="s12 m12 l12 xl12 red lighten-2">
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
                        
                        //comprobar acción a realizar

                        /*
                        $fileNumber = 3;
                        $secondField = false;
                        $thirdField = false;
                        $fourthField = false;
                        $prodId = "prodId";
                        $prodName = "prodName";
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
                        }*/
                        
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
                            $list = $connection->query("select * from $tableProducts order by 1");
                                    //." limit ".($_SESSION['page'] - 1) * $fileNumber.", ".$fileNumber);
                        }
                    ?>
                    <table class="highlight blue lighten-3 responsive-table">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio-Compra</th>
                                <th>Precio-Venta</th>
                                <th>Stock</th>
                                <th>Aviso</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                            while ($products = $list->fetchObject()){
                        ?>
                        <tbody>
                            <tr>
                                <td><?= $products->$prodId; ?></td>
                                <td><?= $products->$prodName; ?></td>
                                <td><?= $products->$prodDesc; ?></td>
                                <td><?= $products->$prodBuy; ?></td>
                                <td><?= $products->$prodSell; ?></td>
                                <td><?= $products->$stock; ?></td>
                                <td>
                                <?php
                                //mostrar umbral de aviso
                                if($products->$stock < $limit){
                                    ?>
                                <strong style="color:#d34; font-size: 1.7em;"><?= $products->$stock; ?></strong>
                                <?php
                                }else{
                                    ?>
                                <?= $products->$stock; ?>
                                    <?php
                                }
                                ?>
                                </td>
                                <td>
                                    <form action="#" method="post">
                                      <input type="hidden" name="<?= $prodId ?>" value="<?= $products->$prodId ?>"/>
                                      <input type="hidden" name="action" value="increase"/>
                                      <button type="submit" class="btn-floating btn-small waves-effect waves-light green" value="increase"><i class="material-icons">add</i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="#" method="post">
                                      <input type="hidden" name="<?= $prodId ?>" value="<?= $products->$prodId ?>"/>
                                      <input type="hidden" name="action" value="decrease"/>
                                      <button type="submit" class="btn-floating btn-small waves-effect waves-light red" value="decrease"><i class="material-icons">remove</i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="#" method="post">
                                      <input type="hidden" name="<?= $prodId ?>" value="<?= $products->$prodId ?>"/>
                                      <input type="hidden" name="action" value="modify"/>
                                      <button type="submit" class="btn-floating btn-small waves-effect waves-light blue" value="modify"><i class="material-icons">mode_edit</i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="#" method="post">
                                      <input type="hidden" name="<?= $prodId ?>" value="<?= $products->$prodId ?>"/>
                                      <input type="hidden" name="action" value="remove"/>
                                      <button type="submit" class="btn-floating btn-small waves-effect waves-light red" value="remove"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                                <?php
                            }
                            ?>
                            </tr>
                            <tr>
                                <td colspan="11"><strong style="color:#e57373; font-size: 1.7em;">Añade Nuevo Producto</strong></td>
                            </tr>
                            <tr>                                                                  
                                <form action="#" method="post"> 
                                    <td>
                                        <input type="hidden" class="validate" name="<?= $prodId ?>" value="<?= $products->$prodId; ?>"/>
                                    </td>
                                     <td>
                                         <label for="prodName">Nombre Producto</label>
                                        <input type="text" class="validate" name="<?= $prodName ?>" value="<?= $products->$prodName; ?>"/>
                                    </td>
                                    <td>
                                        <label for="prodDesc">Descripción Producto</label>
                                        <input type="text" class="validate" name="<?= $prodDesc ?>" value="<?= $products->$prodDesc; ?>"/>
                                    </td>
                                    <td colspan="2">
                                        <label for="prodBuy">Precio-Compra Producto</label>
                                        <input type="number" class="validate" name="<?= $prodBuy ?>" value="<?= $products->$prodBuy; ?>"/>
                                    </td>
                                    <td colspan="2">
                                        <label for="prodSell">Precio-Venta Producto</label>
                                        <input type="number" class="validate" name="<?= $prodSell ?>" value="<?= $products->$prodSell; ?>"/>
                                    </td>
                                    <td colspan="2">
                                        <label for="stock">Total Productos (Stock)</label>
                                        <input type="number" name="<?= $stock ?>" value="<?= $products->$stock; ?>"/>
                                    </td>
                                    <td colspan="2">
                                        <input type="hidden" name="action" value="register"/>                                        
                                        <button type="submit" class="btn-floating btn-small waves-effect waves-light green" value="register"><i class="material-icons">send</i></button>
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
        <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>