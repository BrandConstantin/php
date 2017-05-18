<?php 
    error_reporting(E_ALL ^ E_NOTICE); //no muestra error de variables indefinida
    session_start();// Inicia la sesión
    //conexion a la base de datos
    include './conexion.php';
    
    $prodId = $_POST["prodId"];
    $prodName = $_POST['prodName'];
    $stock = $_POST["stock"];
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
                  <li class="divider"></li>
                  <li><a href="#!">Desconectar</a></li>
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
                <div class="col s12 m12 l12 xl12 blue lighten-5">
                    <table class="highlight blue lighten-3 responsive-table">
                        <thead>
                            <tr>
                                <th><strong style="color:#e57373; font-size: 1.7em;">Decrementar Producto</strong></th>
                            </tr>                            
                            <tr>
                                <td colspan="10">                                    
                                    <form action="decreated.php" method="post">                                        
                                        <label for="prodId">ID Producto</label>
                                        <input type="text" class="validate" name="prodId" readonly="" value="<?= $prodId ?>"/>
                                        <label for="prodName">Nombre Producto</label>
                                        <input type="text" class="validate" name="prodName" readonly="" value="<?= $prodName ?>"/>
                                        <label for="stock">Stock Existente</label>
                                        <input type="number" class="validate" name="stock" readonly="" value="<?= $stock ?>" />
                                        <label for="stock">Stock Modificado</label>
                                        <input type="number" class="validate" name="stockDecrease" value="<?= $stockDecrease ?>" autofocus=""/>
                                        <input type="hidden" name="action" value="decreated"/>    
                                    </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="submit" class="waves-effect lighten-2 btn green" value="Decreated">Decrementar</button>
                                        </form>
                                        </td>
                                        <td>
                                            <a class="waves-effect red lighten-2 btn" href="index.php">Volver</a>                                    
                                        </td>
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