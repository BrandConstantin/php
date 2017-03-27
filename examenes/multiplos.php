<!DOCTYPE html>
<html>
    <?php
        $numIntrod = $_GET['numIntrod'];
        $contador = $_GET['contador'];
        $numTexto = $_GET['numTexto'];
        
        if(!isset($numIntrod)){
            $contador = 0;
            $numTexto = " ";
        }//else{
            //mostrar los números introducidos
            if($numIntrod < 0){
                //añade el ultimo número leido 
                $numTexto = $numTexto;
                $numTexto = substr($numTexto, 2);
                $num = explode(" ", $numTexto);
                
                echo "Los números son: <br>";
                foreach ($num as $value) {
                    if(($numIntrod % 2 == 0)){
                        echo "<span style='color: green'>".$numIntrod."</span>";
                    }else if($numIntrod % 5 == 0){
                        echo "<span style='color: red'>".$numIntrod."</span>";
                    }else if(($numIntrod % 2 == 0) && ($numIntrod % 5 == 5)){
                        echo "<span style='color: blue'>".$numIntrod."</span>";
                    }else{
                        echo $numIntrod." ";
                    }
                }
            }
            
            //pedir números
            if (!isset($numIntro) || ($numIntro >= 0)) {
                ?>
                <form action="multiplos.php" method="get">
                    Introduzca un número:
                    <input type="number" name ="numIntrod" autofocus="">
                    <input type="hidden" name="contador" value="<?= $contador++; ?>">
                    <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $numIntro; ?>">
                    <input type="submit" value="OK">
                </form>
                <?php
            }
        //}
        ?>
</html>