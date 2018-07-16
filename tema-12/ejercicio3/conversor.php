<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Conversor</title>
    </head>
    <body>
        <?php
            $conversor = $_GET['conversor'];
            $cantidad = $_GET['cantidad'];
            
            if($cantidad > 0){
                if($conversor == 'euros'){
                    $convertido = $cantidad * 166;
                    $respuesta[] = [
                        'conversor'=>'pesetas',
                        'cantidad'=>$convertido
                    ];
                    
                    echo json_decode($respuesta);
                }else if($conversor == 'pesetas'){
                    $convertido = $cantidad / 166;
                    $respuesta[] = [
                        'conversor'=>'euros',
                        'cantidad'=>$convertido
                    ];
                    
                    echo json_decode($respuesta);
                }
            }else{
                echo 'Cantidad incorrecta';
            }
        ?>
        <a href="index.php">Volver</a>
    </body>
</html>
<!--
Para enviar los valores es ->
    index.php?conversor=euros&cantidad=100;
-->