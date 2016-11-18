<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $puntos = array("as" => 11, "2" => 0, "3" => 10, "4" => 0, "5" => 0, "6" => 0, "7" => 0, "8" => 0, "9" => 0, "sota" => 2, "caballo" => 3, "rey" => 4);
            $palos = array(1=>"copa", 2=>"espada", 3=>"basto", 4=>"oro");
            $numeros = array(1=>"as", 2=>"2", 3=>"3", 4=>"4", 5=>"5", 6=>"6", 7=>"7", 8=>"8", 9=>"9", 10=>"sota", 11=>"caballo", 12=>"rey");
            $cartas;
            $total = 0;
            $i = 0;
            $paloAnterior;
            $numAnterior;

            //elige el palo
            $randomPalo = rand(1, 4);                

            //elige la carta
            $randomNum = rand(1, 12);
            $num = $numeros[$randomNum];                

            //genera la carta
            $carta = $num." ".$palos[$randomPalo];
            $cartas[$i] = $carta;
            $i++;
            $paloAnterior = $palos[$randomPalo];
            $numAnterior = $numeros[$randomNum];

            //elije las cartas
            for($i = 0; $i < 5; $i++){
                $noRepetir = false;

                while(!$noRepetir) {
                   //elige si se repite el palo o el número
                    $repetir;
                    $alea = rand(0,1);
                    if($alea == 0){
                        $repetir = "numero";
                    } else {
                        $repetir = "palo";
                    }
                    
                   //elige el palo
                    if($repetir=="palo"){
                        $elMismoPalo = false;
                        while(!$elMismoPalo){
                            $randomPalo = rand(1, 4); 
                            if($palos[$randomPalo] == $paloAnterior){
                                $elMismoPalo = true;
                            }                        
                        }
                    } else {
                        $randomPalo = rand(1, 4); 
                    }   
                    
                    //elige el número
                    if($repetir == "numero"){
                        $mismoNumero = false;
                        
                        while(!$mismoNumero){
                            $randomNum = rand(1, 12); 
                            if($numeros[$randomNum] == $numAnterior){
                                $mismoNumero = true;
                            }                        
                        }
                    } else {
                        $randomNum = rand(1, 12);
                        $num = $numeros[$randomNum];
                    }             
                    
                    //genera la carta
                    $carta = $num." ".$palos[$randomPalo];
                    
                    if(!in_array($carta, $cartas)){
                        $cartas[$i] = $carta;
                        $i++;
                        $noRepetir = true;
                        $paloAnterior = $palos[$randomPalo];
                        $numAnterior = $numeros[$randomNum];
                    }
                }

                $total = $total + $puntos[$num];
                echo "$carta<br>";
            }

            echo"<br> Total: $total";
        ?>
    </body>
</html>