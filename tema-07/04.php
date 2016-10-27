<?php
    if(!isset($_SESSION['login'])){
        $_SESSION['login'] = false;
    }
    
    //comprobar usuario y contraseña
    if(isset($_POST['usuario'])){
            if(($_POST['usuario'] == 'costy') && ($_POST['psswd'] == '1234A')){
            $_SESSION['login'] = true;
            //recargar la página
            //header("Refresh: 2; url=respuestas.php?ejercicio=04", true, 303);
            
            echo 'Bienvenido a tu cuenta!';

            // Ejercicio 1 de la relación de Arrays /////////
            for ($i = 0; $i < 20; $i++) {
              $numero[] = rand(0,100);
            }

            foreach ($numero as $elemento) {
              $cuadrado[] = $elemento * $elemento;
              $cubo[] = $elemento * $elemento * $elemento;
            }

            echo "<table>";
            echo "<tr><td>Trabajadores</td><td>Sueldo Anterior</td><td>Sueldo Actual</td></tr>";
            for ($i = 0; $i < 20; $i++) {
              echo "<tr><td>".$numero[$i]."</td>";
              echo "<td>".$cuadrado[$i]."</td>";
              echo "<td>".$cubo[$i]."</td></tr>";
            }
            echo "</table>";
            //////////////////////////////////////////////////            
        }else{
            echo '<span style="color: red">Contraseña o nombre de usuario incorrectos!</span><br><br>';
            echo 'Inténtelo de nuevo.<br><br>'; 
        }
    }
    
    //formulario de registro
    if($_SESSION['login'] == false){
        ?>
            <p>Inicia en tu cuenta:</p>
            <form action="respuestas.php" method="post">
                <input type="hidden" name="ejercicio" value="04">
                Usuario: <input type="text" name="usuario" autofocus="" ><br>
                Contraseña: <input type="password" name="psswd" autofocus="" ><br>
                <input type="submit" value="Iniciar Sesión">
            </form>
        <?php
    }   
?>