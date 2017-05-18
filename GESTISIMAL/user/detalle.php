 <?php
     error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión
    //conexion a la base de datos
    include '../admin/conexion.php';
    
    $prodId = $_POST["prodId"];
    $prodName = $_POST["prodName"];
    $prodDesc = $_POST["prodDesc"];
    //$prodBuy = $_POST["prodBuy"];
    $prodSell = $_POST["prodSell"];
    $stock = $_POST["stock"];
    
    $tableProducts = "products";
    $totalProducts = $connection->query("select * from $tableProducts");
    
     $limit = $_SESSION['limit'];
                       
    //crear el umbral de aviso de stock
    if(isset($_POST['limit'])){
        $limit = $_POST['limit'];
    }

    if(!isset($limit)){
        $limit = 10;
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
                <div>                       
                    <table class="responsive-table">
                        <tr>
                            <td class="col s2 m2 l2 xl2">Nombre</td>
                        <form action="addCart.php" method="post">
                            <td class="col s9 m9 l9 xl9">
                                <input type="hidden" name="prodId" value="<?= $prodId ?>" readonly>
                                <input type="text" name="prodName" value="<?= $prodName ?>" readonly>
                            </td>   
                        </tr>
                        <tr>
                            <td class="col s2 m2 l2 xl2">Descripción</td>
                            <td class="col s9 m9 l9 xl9"><input type="text" name="prodDesc" value="<?= $prodDesc ?>" readonly></td>
                        </tr>
                        <tr>
                            <td class="col s2 m2 l2 xl2">Precio</td>
                            <td class="col s9 m9 l9 xl9"><input type="number" name="prodSell" value="<?= $prodSell ?>" readonly/></td>
                        </tr>
                        <tr>
                            <td class="col s2 m2 l2 xl2">Stock</td>
                            <td class="col s9 m9 l9 xl9">
                                <input type="number" name="stock" value="<?= $stock ?>" >                                          
                                <input type="hidden" name="action" value="addToCart"/>
                            </td>
                        </tr>
                        <tr>
                                <td class="col s2 m2 l2 xl2"><button type="submit" class="waves-effect green lighten-2 btn" value="addCart">Comprar</button></td>
                                <td class="col s9 m9 l9 xl9"><a href="index.php" class="waves-effect red lighten-2 btn" value="back">Volver</a></td>
                            </form>
                        </tr>
                    </table>
                </div>
            </div>
        </div>        
        <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>