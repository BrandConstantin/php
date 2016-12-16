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
        <div class="tituloLogin" class="col-xs-12 col-sm-8 col-md-12">
            <img src="img/logo.png" name="logo" alt="logo" width="350" >
        </div>

        <div id="login" class="col-xs-12 col-sm-12 col-md-12">
          <h1 style="margin-bottom: 50px;">Date de alta</h1>
          <form action="signUpClient.php" method="POST">   
            <button type="submit" class="btn btn-default" name="action" style="background-color: #lightblue;">Cliente
              <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
            </button>
          </form>
          <br><br><br>
          <form action="signUpPub.php" method="POST">   
            <button type="submit" class="btn btn-default" name="action" style="background-color: #lightblue;">Local
              <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
            </button>
          </form>
        </div>
    </body>
</html>
