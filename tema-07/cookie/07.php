<!DOCTYPE html>
<!--
Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color ) de
una página. Esta página debe tener únicamente algo de texto y un formulario para cambiar el color.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Guardar color fondo en cookie</title>
        <link rel="stylesheet" type="text/css" href="estilos2.css"
    </head>
    <body>
        <h3>Guardar cookie color fondo</h3>
        <?php
            if(!isset($_COOKIE["color"])){
                setcookie("color", "white", time() + (3 * 24 * 3600));
                $color = "white";
            }else{
                $color = $_COOKIE["color"];
            }
            
            if(isset($_POST['color'])){
                $color = $_POST['color'];
                setcookie("color", $color, time() + (3 * 24 * 3600));
            }
        ?>
        <div id="minipagina" style="padding: 60px;">
            <p>Elige el color de fondo de la página.</p>
            <form action="respuestas.php" method="post">
              <input type="hidden" name="ejercicio" value="07">
              <input type="color" name="color" value="<?=$color?>"><br><br>
              <input type="submit" value="Aceptar">
            </form>
        </div>
        <script>document.getElementById("minipagina").style.background="<?=$color?>";</script>
    </body>
</html>
