<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>Salario Semanal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Salario Semanal</h3>
            <hr style="border-style: solid #f34 1px">
            <?php 
                $h = $_GET["h"];
                
                $salario = $h * 12;
                
                echo "El salario a cobrar esta semana es de ", $salario, " euros";
            ?>
        </div>
    </body>
</html>
