<?php    
/*
    if((!isset($_SESSION['userName'])) && (!isset($_SESSION['userPass']))){
       //if he don't conected, goed to log page
       echo "Tienes que ingresar en tu cuenta!";
       header('Refresh: 2; url=index.php');
   }else if(isset($_SESSION['userName']) && ($_SESSION['userPass'] && ($_SESSION['userType'] == 'user'))){
       echo "Bienvenido usuario".$_SESSION['userName'];
       header('Refresh: 2; url=user/userView.php');
   }else if(isset($_SESSION['userName']) && ($_SESSION['userPass'] && ($_SESSION['userType'] == 'admin'))){
       echo "Bienvenido adminitrador";
       header('Refresh: 2; url=admin/adminView.php');
   }
   echo "holla 2";
 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            //header("Refresh: 4; url=user/userView.php");
        } else {
            echo "<h3>Datos incorrectos. Vuelve a intentarlo!</h3>";
            //header("Refresh: 4; url=index.php"); 
        }            
    }
?>
            </div>
        </div>
    </body>
</html>
