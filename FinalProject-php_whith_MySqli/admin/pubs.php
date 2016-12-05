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
  
        $query = $conection->query("SELECT * FROM pub");
        //or die($mysql->error);
    ?>
    <!--barra de navegacion -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="adminView.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="users.php"><span class="glyphicon glyphicon-user"></span> Usuarios</a></li>
            <li><a href="pubs.php"><span class="glyphicon glyphicon-copy"></span> Pubs</a></li>
            <li><a href="municipalitys.php"><span class="glyphicon glyphicon-transfer"></span> Ciudades</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="signOut.php"><span class="glyphicon glyphicon-user"></span> Cerrar Sesión <?= $_SESSION['user']; ?></a></li>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div>
        <img src="../img/carousel/carousel1.png" alt="Crowded1" width="99%" height="340"> 
    </div>   
    
    <!--------------------------------------------------------->    
        <table style="border: 2px solid darkcyan">
        <tr>
            <td>ID</td>
            <td>LOGO</td>
            <td>NOMBRE</td>
            <td>CONTRASEÑA</td>
            <td>EMAIL</td>
            <td>UBICACIÓN</td>
            <td>CIUDAD</td>
            <td>FECHA ALTA</td>
            <td>CAPACIDAD</td>
            <td>TIPO MUSICA</td>
            <td>DJ</td>
            <td>TIPO CLIENTE</td>
        </tr>
        <tr>
            <?php
             while($pub = $query->fetch_object()){
            ?>
                <td><?php echo $pub->pubId; ?></td>
                <td><?php echo $pub->pubLogo; ?></td>
                <td><?php echo $pub->pubName; ?></td>
                <td><?php echo $pub->pubPass; ?></td>
                <td><?php echo $pub->pubEmail; ?></td>
                <td><?php echo $pub->ubication; ?></td>
                <td><?php echo $pub->city; ?></td>
                <td><?php echo $pub->dateHigh; ?></td>
                <td><?php echo $pub->capacity; ?></td>
                <td><?php echo $pub->musicType; ?></td>
                <td><?php echo $pub->pubDj; ?></td>
                <td><?php echo $pub->userType; ?></td>
                <td>
                    <form method="post" action="deletePub.php">
                        <input type="hidden" value="<?= $pub->pubId; ?>" name="pubId">
                        <input type="hidden" value="<?= $pub->pubLogo; ?>" name="pubLogo">
                        <input type="hidden" value="<?= $pub->pubName; ?>" name="pubName">
                        <input type="hidden" value="<?= $pub->pubPass; ?>" name="pubPass">
                        <input type="hidden" value="<?= $pub->pubEmail; ?>" name="pubEmail">
                        <input type="hidden" value="<?= $pub->pubUbication; ?>" name="pubUbication">
                        <input type="hidden" value="<?= $pub->city; ?>" name="city">
                        <input type="hidden" value="<?= $pub->dateHigh; ?>" name="dateHigh">
                        <input type="hidden" value="<?= $pub->capacity; ?>" name="capacity">
                        <input type="hidden" value="<?= $pub->musicType; ?>" name="musicType">
                        <input type="hidden" value="<?= $pub->pubDj; ?>" name="pubDj">
                        <input type="hidden" value="<?= $pub->userType; ?>" name="userType">
                        <button type="submit" class="btn btn-default" name="eliminy" style="background-color: lightcoral;">Eliminar
                            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                        </button>
                    </form>
                </td>
                <td>
                    <form method="post" action="modifyPub.php">
                        <input type="hidden" value="<?= $pub->pubId; ?>" name="pubId">
                        <input type="hidden" value="<?= $pub->pubLogo; ?>" name="pubLogo">
                        <input type="hidden" value="<?= $pub->pubName; ?>" name="pubName">
                        <input type="hidden" value="<?= $pub->pubPass; ?>" name="pubPass">
                        <input type="hidden" value="<?= $pub->pubEmail; ?>" name="pubEmail">
                        <input type="hidden" value="<?= $pub->pubUbication; ?>" name="pubUbication">
                        <input type="hidden" value="<?= $pub->city; ?>" name="city">
                        <input type="hidden" value="<?= $pub->dateHigh; ?>" name="dateHigh">
                        <input type="hidden" value="<?= $pub->capacity; ?>" name="capacity">
                        <input type="hidden" value="<?= $pub->musicType; ?>" name="musicType">
                        <input type="hidden" value="<?= $pub->pubDj; ?>" name="pubDj">
                        <input type="hidden" value="<?= $pub->userType; ?>" name="userType">
                        <button type="submit" class="btn btn-default" name="modify" style="background-color: lightblue;">Modificar
                            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                        </button> 
                    </form>
                </td>
        </tr>
        <?php
             }
        ?>
    </table>   
  </body>
</html>