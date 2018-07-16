<!DOCTYPE html>
<!--
Realiza un conversor de Mb a Kb.
-->
<html>
    <head>
        <title>Conversor MB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Conversor MB</h3>
            <hr style="border-style: dotted 1px #f34">
            <?php 
                $mb = $_GET["mb"];
                
                $kb = $mb * 1000;
                
                echo $mb, " MB = ", $kb, ' KB';
            ?>
        </div>
    </body>
</html>
