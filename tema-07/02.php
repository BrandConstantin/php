<?php
    $num = $_POST['num'];

    //formula para ver los valores que envia el formulario
    //var_dump(get_defined_vars());

    //se inicializan
    if(!isset($num)){
        $_SESSION['contarNumeros'] = 0;
        $_SESSION['sumaImpares'] = 0;
        $_SESSION['contarImpares'] = 0;
    }

    if((!isset($num)) || ($num > 0)){
?>
<form action="02.php" method="post">
    <p>Introduce número:</p>
    <input type="hidden" name="ejercicio" value="02">
    <input type="number" name="num" autofocus ><br>
    <input type="submit" value="Aceptar">
</form>

<p>(El programa finaliza introduciendo un número negativo)</p>
<?php
    }
    
    if (isset($num)){
        if($num >= 0){
            $_SESSION['contarNumeros']++;
            
            if(($num % 2) == 0){
                //pares
                if($num > $_SESSION['mayorPar']){
                    $_SESSION['mayorPar'] = $num;
                }
            }else{
                //impares
                $_SESSION['sumaImpares'] += $num;
                $_SESSION['contarImpares']++;
            }
        }else{
            $media = $_SESSION['sumaImpares'] / $_SESSION['contarImpares'];
            
            echo "Se han introducido un total de ".$_SESSION['contarNumeros']." números <br>";
            echo "La media de los impares es ".$media."<br>";
            echo "El mayor de los pares es ".$_SESSION['mayorPar'];
            
            session_destroy();
        }
    }
    
    var_dump(get_defined_vars());
?>