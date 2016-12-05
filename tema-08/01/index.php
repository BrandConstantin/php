<?php session_start(); ?>
<!DOCTYPE html>
<!--
Crea una aplicación web que permita hacer listado, alta, baja y modificación sobre la tabla cliente
de la base de datos banco .
• Para realizar el listado bastará un SELECT, tal y como se ha visto en los ejemplos.
• El alta se realizará mediante un formulario donde se especificarán todos los campos del nuevo
registro. Luego esos datos se enviarán a una página que ejecutará INSERT .
• Para realizar una baja, se mostrará un botón que ejecutará DELETE .
• La modificación se realiza mediante UPDATE .
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <title>Ejercicio 1</title>
    </head>
    <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="https://github.com/BrandConstantin">GitHub</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <br>
      <div class="jumbotron">
        <h3 class="text-center">APRENDE PHP CON EJERCICIOS</h3>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>
          <span class="glyphicon glyphicon-pencil info" aria-hidden="true"></span>
          Ejercicio 1
          </h4>
        </div>
        <div class="panel-body">
          Crea una aplicación web que permita hacer listado, alta, baja y modificación
          sobre la tabla cliente de la base de datos banco.
          <ul>
            <li>
              Para realizar el listado bastará un SELECT, tal y como se ha visto
              en los ejemplos.
            </li>
            <li>
              El alta se realizará mediante un formulario donde se especificarán todos los campos del nuevo
              registro. Luego esos datos se enviarán a una página que ejecutará INSERT.
            </li>
            <li>
              Para realizar una baja, el usuario hará clic en el botón <b>Eliminar</b>
              que está situado en la fila del cliente que quiere borrar. Se deberá
              enviar el DNI del cliente y ejecutar DELETE para borrar el registro
              cuyo DNI coincida con el introducido.
            </li>
            <li>
              La modificación se realiza mediante UPDATE. el usuario hará clic
              en el botón <b>Modificar</b> que está situado en la fila del cliente
              del que quiere cambiar alguna información.
            </li>
          </ul>
        </div>
        <div class="panel-footer">
          <a class="btn btn-default" href="resultado.php?ejercicio=01" role="button">Solución</a>
        </div>
      </div>
    </body>
</html>
