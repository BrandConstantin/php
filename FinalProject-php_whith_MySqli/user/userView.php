<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CROWDED</title>
    <link rel="shortcut icon" type="image/png" href="../img/logo.png"/>
    <!--bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS de Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--css propio-->
    <link href="../css/style.css" rel="stylesheet"> 
  </head>
  <body>
    <?php
        $conection = new mysqli("localhost","root","Sjzm0080","crowded");
        if ($conection->connect_error > 0) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
            die ("Error: " . $conection->connect_error);
        } else {
            $conection->select_db("crowded");
            $conection->set_charset("utf8");
        }
  
        $query = $conection->query("SELECT * FROM user");
        //or die($mysql->error);
    ?>
      <div id="menu">
        <ul id="listMenu">
            <li>
                <a href="userView.php">Inicio
                </a>
            </li>
            <li>
                <a href="userViewPubs.php">Pubs
                </a>
            </li>
            <li>
                <a href="userViewCity.php"> Ciudades
                </a>
            </li>
            <li>
                <a href="signOut.php">Cerrar Sesión <?= $_SESSION['user']; ?></a></li>
            </li>
        </ul>
      </div>
    <div id="principal2">
        <form method="post" action="user.php">

        <table style="border: 2px solid darkcyan">
        <tr>
            <td>LOGO</td>
            <td>NOMBRE</td>
            <td>EMAIL</td>
            <td>UBICACIÓN</td>
            <td>CIUDAD</td>
            <td>CAPACIDAD</td>
            <td>TIPO MUSICA</td>
            <td>DJ</td
        </tr>
        <tr>
            <?php
             while($pub = $query->fetch_object()){
            ?>
                <td><?php echo $pub->pubLogo; ?></td>
                <td><?php echo $pub->pubName; ?></td>
                <td><?php echo $pub->pubEmail; ?></td>
                <td><?php echo $pub->ubication; ?></td>
                <td><?php echo $pub->city; ?></td>
                <td><?php echo $pub->capacity; ?></td>
                <td><?php echo $pub->musicType; ?></td>
                <td><?php echo $pub->pubDj; ?></td>
        </tr>
        <?php
             }
        ?>
        </table>
        </form>
    </div>  
    </body>
</html>