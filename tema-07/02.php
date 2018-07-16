<?php
    $num = $_POST['num'];
    
    //formula para ver los valores que envia el formulario
    //var_dump(get_defined_vars());

    //se inicializan
    if(!isset($num)){
        //$_SESSION['contarNumeros'] = 0;
        $_SESSION['sumaImpares'] = 0;
        $_SESSION['contarImpares'] = 0;
        $_SESSION['contarPares'] = 0;
    }

    if((!isset($num)) || ($num > 0)){
?>
<form action="respuestas.php" method="post">
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
            
            if(($num % 2) == 0){
                //pares
                if($num > $_SESSION['mayorPar']){
                    $_SESSION['mayorPar'] = $num;
                    $_SESSION['contarPares']++;
                }
            }else{
                //impares
                $_SESSION['sumaImpares'] += $num;
                $_SESSION['contarImpares']++;
            }
        }else{
            //$media = $_SESSION['sumaImpares'] / $_SESSION['contarImpares'];
            
            echo "Se han introducido un total de ".($_SESSION['contarPares'] + $_SESSION['contarImpares'])." números <br>";
            echo "La media de los impares es ".$_SESSION['sumaImpares'] / $_SESSION['contarImpares']."<br>";
            echo "El mayor de los pares es ".$_SESSION['mayorPar'];
            echo '<br>------------------------------------<br>';
            
            session_destroy();
        }
    }
    
    //var_dump(get_defined_vars());
?>