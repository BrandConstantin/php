<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CROWDED</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <!--css propio-->
    <link href="css/style.css" rel="stylesheet"> 
    <script type="text/javascript" src="js/slidebox.js"></script>
  </head>
    <body>
        <div id="header">
            <div class="logo">
                <img src="img/logo.png" name="logo" alt="logo">
            </div>
            <ul id="listMenuIndex">
                <li><a href="signInUser.php">Usuario</a></li>
                <li><a href="signInPub.php">Pub</a></li>
                <li class="mesageSesion">Inicia sesión:</li>
            </ul>   
        </div>
        <div id="container">
            <div id="slideshowUser">
                <div><img src="img/carousel/dark.jpg"></div>
                <div><img src="img/carousel/mixer.jpg"></div>
                <div><img src="img/carousel/audience.jpg"></div>
                <div><img src="img/carousel/dj.jpg"></div>
                <div><img src="img/carousel/live.jpg"></div>
                <div><img src="img/carousel/silhouette.jpg"></div>
            </div>
            <div id="principal2">
                <div id="loginReg">
                    <h1>Redirecciónar:</h1>
<?php
    session_start();
    if((isset($_POST['userName'])) && (isset($_POST['userPass']))){
        $conection = mysqli_connect("localhost", "root", "Sjzm0080", "crowded");
        $base = mysqli_select_db("crowded", $conection);
        
        $query2 = "SELECT * FROM user WHERE userName ='".$_POST['userName']."' AND userPass = '".$_POST['userPass']."' LIMIT 1";
        $query = $conection->query($query2);
        
        $user = $_POST['userName'];
        $passIntro = $_POST['userPass'];
        
        $_SESSION['user'] = $user;
        $row = $query->fetch_array();
        
        if(($row[2] == $user) && ($row[3] == $passIntro) && ($row[5]=="admin")){
            echo "<h3>Bienvenido ".$_SESSION['user']."</h3>";
            header("Refresh: 4; url=admin/adminView.php");   
        }else if(($row[5]=="user")){
            echo "<h3>Bienvenido ".$_SESSION['user']."</h3>";
            header("Refresh: 4; url=user/userView.php");
        } else {
            echo "<h3>Datos incorrectos. Vuelve a intentarlo!</h3>";
            header("Refresh: 4; url=index.php"); 
        }            
    }
?>
                </div>
            </div>
        </div>
    </body>
</html>
