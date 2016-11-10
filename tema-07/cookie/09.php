<!DOCTYPE html>
<!--
Amplía el ejercicio 6 de tal forma que los productos que se pueden elegir para comprar se almacenen
en cookies. La aplicación debe ofrecer, por tanto, las opciones de alta, baja y modificación de
productos.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MediaMarket Place Detallada</title>
        <link rel="stylesheet" type="text/css" href="estilos2.css"
    </head>
    <body>
        <h3>MediaMarket Place Detallada</h3>
        <table style="border: 2px; margin: 0px 30px 0px 30px;">
            <tr><td>
            <h5>Portatiles Destacados</h5>
            <?php
                // carga los productos almacenados en las cookies
                $_SESSION['producto'] = unserialize($_COOKIE['producto']);

                // Borrado de cookies y variables
                if ($_POST['accion'] == "borrarCook") {
                  setcookie("producto", NULL, -1);
                  unset($_COOKIE['producto']);
                  unset($_SESSION['producto']);
                  
                  $_SESSION['respuestas'] = "respuestas.php?ejercicio=09";
                  header("Location: limpiaPost.php");
                }
                
                if(!isset($_COOKIE['producto'])){
                    $_SESSION['producto'] = array(
                        "Acer" => array(
                            'nombre' => 'Acer',
                            'precio' => 670,
                            'img' => 'img/acer.jpeg',
                            'detalle' => 'CPU: AMD A4 5300; Grafica: ASUS GeForce GTX 960; RAM: 8Gb; Disco: Toshiba Canvio Basics;'),
                        "Asus" => array(
                            'nombre' => 'Asus',
                            'precio' => 770,
                            'img' => 'img/asus.jpeg',
                            'detalle' => 'CPU: Intel Core i5 4930k; Grafica: ASUS GTX750-PHOC; RAM: 12Gb; Disco: Western Digital Elements;'),
                        "Hp" => array(
                            'nombre' => 'Hp',
                            'precio' => 795,
                            'img' => 'img/hp.jpeg',
                            'detalle' => 'CPU: AMD Sempron 145; Grafica: Gigabyte GeForce GTX 660; RAM: 32Gb; Disco: Seagate BackUp;'),
                        "Msi" => array(
                            'nombre' => 'Msi',
                            'precio' => 1170,
                            'img' => 'img/msi.jpeg',
                            'detalle' => 'CPU: AMD FX FX-6200; Grafica: Sapphire Radeon HD 5450; RAM: 8Gb; Disco: Transcend Store Canvio;'),
                        "Samsung" => array(
                            'nombre' => 'Samsung',
                            'precio' => 980,
                            'img' => 'img/samsung.jpeg',
                            'detalle' => 'CPU: Intel Core i7-3820; Grafica: EVGA Geforce 210; RAM: 12Gb; Disco: Seagate STBX1000201')
                      );
                        $_SESSION['respuestas'] = "respuestas.php?ejercicio=09";
                        header("Location: 09_grabaCookies.php");
                }

              foreach ($_SESSION['producto'] as $codigo => $elemento) {
                ?>
                <img src="img/<?= $elemento[imagen] ?>" width="360" border="1"><br>
                <?= $elemento[nombre] ?><br>Precio: <?= $elemento[precio] ?> €
                <form action="respuestas.php" method="post">
                  <input type="hidden" name="ejercicio" value="09_detalle">
                  <input type="hidden" name="codigo" value="<?= $codigo ?>">
                  <input type="hidden" name="accion" value="detalle">
                  <input type="submit" value="Detalle">
                </form>
                <form action="respuestas.php" method="post">
                  <input type="hidden" name="ejercicio" value="09">
                  <input type="hidden" name="codigo" value="<?= $codigo ?>">
                  <input type="hidden" name="accion" value="comprar">
                  <input type="submit" value="Comprar">
                </form><br><br>
                <?php
              }
            ?>

              </td><td>			
              <h3>Carrito</h3><hr>

              <?php
              $accion = $_POST['accion'];
              $codigo = $_POST['codigo'];

              // inicializa el carrito
              if (!isset($_SESSION['carrito'])) {
                $_SESSION[carrito] = [];
                foreach ($_SESSION['producto'] as $codigo => $datos) {
                  $_SESSION[carrito][$codigo] =  0;
                }
              }

              if ($accion == "comprar") {
                $_SESSION[carrito][$codigo]++;
              }

              if ($accion == "eliminar") {
                $_SESSION[carrito][$codigo] = 0;
              }

              // mostarar el contenido del carrito
              $total = 0;
              
              foreach ($_SESSION['producto'] as $cod => $elemento) {
                if ($_SESSION[carrito][$cod] > 0) {
                  $total = $total + ($_SESSION[carrito][$cod] * $elemento[precio]);
                  ?>
                  <img src="img/<?= $elemento[imagen] ?>" width="200" border="1"><br>
                  <?= $elemento[nombre] ?><br>
                  Precio: <?= $elemento[precio] ?> €<br>
                  Unidades: <?= $_SESSION[carrito][$cod] ?>
                  <form action="respuestas.php" method="post">
                    <input type="hidden" name="ejercicio" value="09">
                    <input type="hidden" name="codigo" value="<?= $cod ?>">
                    <input type="hidden" name="accion" value="eliminar">
                    <input type="submit" value="Eliminar">
                  </form><br><br>
                  <?php
                }
              }
              ?>
              <b>Total: <?= $total ?> €</b>
              </td>
              </tr>
            </table>

              <form action="respuestas.php" method="post">
                <input type="hidden" name="ejercicio" value="09_admin_productos">
                <input type="submit" value="Administrar los productos">
              </form>
    </body>
</html>