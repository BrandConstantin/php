<!DOCTYPE html>
<!--
Realiza un conversor de Kb a Mb.
-->
<html>
    <head>
        <title>Conversor KB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h3>Conversor KB</h3>
            <hr style="border-style: dotted 1px #f34">
            <?php 
                $kb = $_GET["kb"];
                
                $mb = $kb / 1000;
                
                echo $kb, " KB = ", $mb, ' MB';
            ?>
        </div>
    </body>
</html>
