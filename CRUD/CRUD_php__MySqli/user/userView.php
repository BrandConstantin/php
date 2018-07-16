<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CROWDED</title>
    <link rel="shortcut icon" type="image/png" href="../img/logo.png"/>
    <!--css propio-->
    <link href="../css/style.css" rel="stylesheet"> 
    <!-- css para media -->
    <link href="../css/media.css" rel="stylesheet">
    <script type="text/javascript" src="../js/slidebox.js"></script>
  </head>
    <body>
        <div id="header">
            <div class="logo">
                <a href="index.php"><img src="../img/logo.png" name="logo" alt="logo"></a>
            </div>
            <ul id="listMenuIndex">
                <li><a href="../admin/signOut.php">Cerrar Sesión <?= $_SESSION['user']; ?></a></li>
                <li><a href="perfil.php">Modificar Perfil</a></li>
            </ul>   
        </div>
        <div id="container">
            <div id="slideshowUser">
                <div><img src="../img/carousel/dark.jpg"></div>
                <div><img src="../img/carousel/mixer.jpg"></div>
                <div><img src="../img/carousel/audience.jpg"></div>
                <div><img src="../img/carousel/dj.jpg"></div>
                <div><img src="../img/carousel/live.jpg"></div>
                <div><img src="../img/carousel/silhouette.jpg"></div>
            </div>
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
            <ul id="listMenuIndex" class="userTable">
                <li><a href="pubId.php">Id Pub</a></li>
                <li><a href="pubName.php">Nombre Pub</a></li>
                <li><a href="pubEmail.php">Email Pub</a></li>
                <li><a href="pubUbication.php">Ciudad Pub</a></li>
                <li><a href="pubCapacity.php">Capacidad Pub</a></li>
                <li><a href="musicType.php">Tipo musica Pub</a></li>
                <li><a href="pubDj.php">Dj Rezidente</a></li>
            </ul>  
            <div id="principal2">
                <form method="post" action="user.php">

                <table style="border: 2px solid darkcyan">
                <tr>
                    <td></td>
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
        </div>
    </body>
</html>