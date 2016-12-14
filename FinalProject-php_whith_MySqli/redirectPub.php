<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CROWDED</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
    <!--bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--css propio-->
    <link href="css/style.css" rel="stylesheet"> 
  </head>
    <body>
        <div class="logo">
            <img src="img/logo.png" name="logo" alt="logo">
        </div>
        <div id="principal">
            <div id="loginReg">
                <h1>Redirecciónar:</h1>
<?php
    session_start();
    if((isset($_POST['pubName'])) && (isset($_POST['pubPass']))){
        $conection = mysqli_connect("localhost", "root", "Sjzm0080", "crowded");
        $base = mysqli_select_db("crowded", $conection);
        
        $query2 = "SELECT * FROM pub WHERE pubName ='".$_POST['pubName']."' AND pubPass = '".$_POST['pubPass']."' LIMIT 1";
        $query = $conection->query($query2);
        
        $pub = $_POST['pubName'];
        $passIntro = $_POST['pubPass'];
        
        $_SESSION['pub'] = $pub;
        $row = $query->fetch_array();
        
        if(($row[2] == $pub) && ($row[3] == $passIntro)){
            echo "<h3>Bienvenido ".$_SESSION['pub']."</h3>";
            header("Refresh: 4; url=user/pubView.php");   
        } else {
            echo "<h3>Datos incorrectos. Vuelve a intentarlo!</h3>";
            header("Refresh: 4; url=index.php"); 
        }            
    }
?>
            </div>
        </div>
    </body>
</html>
