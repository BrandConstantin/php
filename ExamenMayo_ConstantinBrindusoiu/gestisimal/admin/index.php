<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión
    //conexion a la base de datos
    include './conexion.php';
    
    $tableProducts = "products";
    $totalProducts = $connection->query("select * from $tableProducts");

    $fileNumber = 5;                      
    $prodId = "prodId";
    $prodName = "prodName";
    $prodDesc = "prodDesc";
    $prodBuy = "prodBuy";
    $prodSell = "prodSell";
    $stock = "stock";
    //$sixField = "prodCua";

    //$cart = $_SESSION["cart"];
    $limit = $_SESSION['limit'];

    //crear el umbral de aviso de stock
    if(isset($_POST['limit'])){
        $limit = $_POST['limit'];
    }

    if(!isset($limit)){
        $limit = 10;
    }

    //ordenar tabla de los productos
    if($_POST['order'] == 'alphabetical'){
        $order = 2;
    }else if($_POST['order'] == 'reverse'){
        $order = '2 desc';
    }else if($_POST['order'] == 'lowerPrice'){
        $order = 5;
    }else if($_POST['order'] == 'higherPrice'){
        $order = '5 desc';
    }else if($_POST['order'] == 'codProd'){
        $order = 1;
    }else{
        $order = 2;
    }

    // páginación completa de los productos
    if(isset($_POST['page'])){
        $_SESSION['page']  = $_POST['page'];
    }else{
        $_SESSION['page'] = 1;
    }

    //la página vuelve a la anterior si ya no quedan filas en la actual
    if($_SESSION['page'] > (ceil($totalProducts->rowCount() / $fileNumber))){
        $_SESSION['page']--;
    }     
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
                    <li><a href="index.php">Mis Productos</a></li>
                  <li class="divider"></li>
                  <li><a href="../logout.php">Desconectar</a></li>
                </ul>
                <nav class="s12 m12 l12 xl12">
                     <div class="col s12 m12 l12 xl12">
                        <!--<a href="#!" class="brand-logo">Logo</a>-->
                        <ul class="right">
                          <li><a href="index.php">Inicio</a></li>
                          <!-- Dropdown Trigger -->
                          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Mi Cuenta<i class="material-icons right">arrow_drop_down</i></a></li>
                        </ul>
                      </div>
                </nav>                      
                <div class="col s5  m4 l2 xl2 red lighten-2">                    
                    <div class="collection">
                        <a href="#!" class="collection-item active"  id="btn_categ">Ordenar</a>
                        <a href="#!" class="collection-item">
                            <form action="#" method="post">
                                <input type="hidden" name="order" value="alphabetical"/>
                                <button type="submit" value="alphabetical" id="btn_categ">A - Z</button>
                            </form>
                        </a>
                        <a href="#!" class="collection-item">
                            <form action="#" method="post">
                                <input type="hidden" name="order" value="reverse"/>
                                <button type="submit" value="reverse" id="btn_categ">Z - A</button>
                            </form>
                        </a>
                        <a href="#!" class="collection-item">
                            <form action="#" method="post">
                                <input type="hidden" name="order" value="lowerPrice"/>
                                <button type="submit" value="lowerPrice" id="btn_categ">Precio &lt;</button>
                            </form>
                        </a>
                        <a href="#!" class="collection-item">
                            <form action="#" method="post">
                                <input type="hidden" name="order" value="higherPrice"/>
                                <button type="submit" value="higherPrice" id="btn_categ">Precio &gt;</button>
                            </form>
                        </a>
                        <a href="#!" class="collection-item">
                            <form action="#" method="post">
                                <input type="hidden" name="order" value="codProd"/>
                                <button type="submit" value="codProd" id="btn_categ">Código</button>
                            </form>
                        </a>
                    </div>                
                </div>
                <div class="col s7 m8 l10 xl10 blue lighten-5">
                    <?php
                        // LISTADO TABLA
                        $list = $connection->query("select * from $tableProducts order by $order" //ordenar por nombre
                                    ." limit ".($_SESSION['page'] - 1) * $fileNumber.", ".$fileNumber);
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
                            while ($products = $list->fetchObject() ){
                        ?>
                        <tbody>
                            <tr>
                                <td><?= $products->prodId; ?></td>
                                <td><?= $products->prodName; ?></td>
                                <td><?= $products->prodDesc; ?></td>
                                <td><?= $products->prodBuy; ?></td>
                                <td><?= $products->prodSell; ?></td>
                                <td><?= $products->stock; ?></td>
                                <td>
                                <?php
                                //mostrar umbral de aviso
                                if($products->$stock <= 0){
                                    ?>
                                    <strong style="color:#d34; font-size: 0.7em;"><?php echo 'NO DISPONIBLE'; ?></strong>
                                    <?php
                                }else if($products->$stock <= $limit){
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
                                    <form action="increase.php" method="post">
                                      <input type="hidden" name="<?= $prodId ?>" value="<?= $products->$prodId ?>"/>
                                      <input type="hidden" name="<?= $prodName ?>" value="<?= $products->prodName; ?>"/>
                                      <input type="hidden" name="<?= $stock ?>" value="<?= $products->stock; ?>"/>
                                      <input type="hidden" name="action" value="increase"/>
                                      <button type="submit" class="btn-floating btn-small waves-effect waves-light green" value="Increase"><i class="material-icons">add</i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action="decrease.php" method="post">
                                      <input type="hidden" name="<?= $prodId ?>" value="<?= $products->prodId ?>"/>
                                      <input type="hidden" name="<?= $prodName ?>" value="<?= $products->prodName; ?>"/>
                                      <input type="hidden" name="<?= $stock ?>" value="<?= $products->stock; ?>"/>
                                      <input type="hidden" name="action" value="decrease"/>
                                      <button type="submit" class="btn-floating btn-small waves-effect waves-light red" value="Decrease"><i class="material-icons">remove</i></button>
                                    </form>
                                </td>
                                <!-- MODIFICAR EL PRODUCTO -->
                                <td>
                                    <form action="modify.php" method="post">
                                        <input type="hidden" name="<?= $prodId ?>" value="<?= $products->prodId ?>"/>
                                        <input type="hidden" name="<?= $prodName ?>" value="<?= $products->prodName; ?>"/>
                                        <input type="hidden" name="<?= $prodDesc ?>" value="<?= $products->prodDesc; ?>"/>
                                        <input type="hidden" name="<?= $prodBuy ?>" value="<?= $products->prodBuy; ?>"/>
                                        <input type="hidden" name="<?= $prodSell ?>" value="<?= $products->prodSell; ?>"/>
                                        <input type="hidden" name="<?= $stock ?>" value="<?= $products->stock; ?>"/>
                                      <input type="hidden" name="action" value="modify"/>
                                      <button type="submit" class="btn-floating btn-small waves-effect waves-light blue" value="Modify"><i class="material-icons">mode_edit</i></button>
                                    </form>
                                </td>
                                <!-- BORRAR EL PRODUCTO -->
                                <td>
                                    <form action="remove.php" method="post">
                                        <input type="hidden" name="<?= $prodId ?>" value="<?= $products->prodId ?>"/>
                                        <input type="hidden" name="<?= $prodName ?>" value="<?= $products->prodName; ?>"/>
                                        <input type="hidden" name="<?= $prodDesc ?>" value="<?= $products->prodDesc; ?>"/>
                                        <input type="hidden" name="<?= $prodBuy ?>" value="<?= $products->prodBuy; ?>"/>
                                        <input type="hidden" name="<?= $prodSell ?>" value="<?= $products->prodSell; ?>"/>
                                        <input type="hidden" name="<?= $stock ?>" value="<?= $products->stock; ?>"/>
                                      <input type="hidden" name="action" value="remove"/>
                                      <button type="submit" class="btn-floating btn-small waves-effect waves-light red" value="Remove"><i class="material-icons">delete</i></button>
                                    </form>
                                </td>
                                <?php
                            }
                            ?>
                            </tr>
                            <tr>
                                <td colspan="11">
                                    <hr>                                    
                                </td>
                            </tr>

                            <tr>
                                <td colspan="11">      
                                    <strong style="color:#e57373; font-size: 1.7em;">Añade Nuevo Producto</strong>
                                </td>
                            </tr>
                            <tr>
                                <form action="added.php" method="post">
                                <td>                                    
                                        <input type="hidden" class="validate" name="<?= $prodId ?>" value="<?= $products->prodId; ?>"/>
                                </td>
                                <td>
                                        <label for="prodName">Nombre</label>
                                        <input type="text" class="validate" name="<?= $prodName ?>" value="<?= $products->prodName; ?>"/>
                                </td>
                                <td colspan="3">
                                        <label for="prodDesc">Descripción</label>
                                        <input type="text" class="validate" name="<?= $prodDesc ?>" value="<?= $products->prodDesc; ?>"/>
                                </td>
                                <td colspan="2">
                                        <label for="prodBuy">Precio-Compra</label>
                                        <input type="number" class="validate" name="<?= $prodBuy ?>" value="<?= $products->prodBuy; ?>"/>
                                </td>
                                <td colspan="2">
                                        <label for="prodSell">Precio-Venta</label>
                                        <input type="number" class="validate" name="<?= $prodSell ?>" value="<?= $products->prodSell; ?>"/>
                                </td>
                                <td colspan="2">
                                        <label for="stock">Stock</label>
                                        <input type="number" name="<?= $stock ?>" value="<?= $products->stock; ?>"/>
                                        <input type="hidden" name="action" value="register"/>    
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                        <button type="submit" class="waves-effect green lighten-2 btn" value="Register">REGISTRAR</button>
                                    </form>
                                </td>
                                    <td>
                                        <a class="waves-effect red lighten-2 btn" href="index.php">CANCELAR</a>                                    
                                    </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="col s7 m8 l10 xl10 blue lighten-5">
                        <p>Total productos en esta página:  <?= $list->rowCount(); ?> </p>
                        
                        <!-- PACINACIÓN LISTADO PRODUCTOS -->
                        <form action="#" method="post" class="pagination">
                            <?php
                            //boton retroceder (solo se muestra si la página no es la primera)
                            if($_SESSION['page'] > 1){
                                ?>
                            <button type="submit" class="waves-effect" name="page" value="<?= $_SESSION['page'] - 1?>"><i class="material-icons">fast_rewind</i></button>
                                <?php
                            }
                            
                            //otros botones de páginas
                            for($i = 1; $i <= ceil($totalProducts->rowCount() / $fileNumber); $i++){
                                if($_SESSION['page'] == $i){
                                    ?>
                            <span><?= $i ?></span>
                                    <?php
                                }else{
                                    ?>
                            <button type="submit" class="waves-effect" name="page" value="<?= $i ?>"><?= $i ?></button>
                                    <?php
                                }
                            }
                            
                            //boton de avanzar (se muestra si la página no es ultima)
                            if($_SESSION['page'] < (($totalProducts->rowCount()) / $fileNumber)){
                                ?>
                            <button type="submit" class="waves-effect" name="page" value="<?= $_SESSION['page'] + 1 ?>"><i class="material-icons">fast_forward</i></button>
                                <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row col s12 m12 l12 xl12">
                @copy; BrandConstantin
            </div>
        </div>        
        <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>