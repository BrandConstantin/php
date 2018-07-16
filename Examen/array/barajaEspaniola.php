<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Baraja Española</title>
    </head>
    <body>
        <?php
            $brisca = array("as" => 11, "2" => 0, "3" => 10, "4" => 0, "5" => 0, 
                "6" => 0, "7" => 0, "8" => 0, "9" => 0, "sota" => 2, "caballo" => 3, "rey" => 4);
            $palos = array(1=>"copa", 2=>"espada", 3=>"basto", 4=>"oro");
            $numeros = array(1=>"as", 2=>"2", 3=>"3", 4=>"4", 5=>"5", 6=>"6", 7=>"7", 
                8=>"8", 9=>"9", 10=>"sota", 11=>"caballo", 12=>"rey");
            
            $cartas;
            $total;
            $i = 0;
            $paloAnt;
            $numAnt;
            
            //crear primera carta
            
            //elegir el palo
            $randomPalo = rand(1, 4);
            $randomNum = rand(1, 12);
            $num =$numeros[$randomNum];
            
            //elige la carta            
            $carta = $num." ".$palos[$randomPalo];
            $cartas[$i] = $carta;
            $i++;
            $paloAnt = $palos[$randomPalo];
            $numAnt = $numeros[$randomNum];
            
            //elige la carta
            for($i = 0; $i < 5; $i++){
                $noRepite = false;
                
                while(!$noRepite){
                    //elige el número o palo a repetir
                    $repite;
                    
                    $cart = rand(0, 1);
                    if($cart == 0){
                        $repite = "numero";
                    }else{
                        $repite = "palo";
                    }
                    
                    //el palo
                    if($repite == 'palo'){
                        $mismoPalo = false;
                        
                        while (!$mismoPalo){
                            $randomPalo = rand(1, 4);
                            
                            if($palos[$randomPalo] == $paloAnt){
                                $mismoPalo = true;
                            }
                        }
                    }else{
                        $randomPalo = rand(1, 4);
                    }
                    
                    //el numero
                    if($repite == 'numero'){
                        $mismoNumero = false;
                        
                        while (!$mismoNumero){
                            $randomNum = rand(1, 12);
                            
                            if($numeros[$randomNum] == $numAnt){
                                $mismoNumero = TRUE;
                            }
                        }
                    }else{
                        $randomNum = rand(1, 12);
                        $num = $numeros[$randomNum];
                    }
                    
                    //genera la carta
                    $carta = $num." ".$palos[$randomPalo];
                    
                    if(!in_array($carta, $cartas)){
                        //$carta[$i] = $carta;
                        //$i++;
                        $noRepite = TRUE;
                        $paloAnt = $palos[$randomPalo];
                        $numAnt = $numeros[$randomNum];
                    }
                }
                
                $total = 0;
                
                //total brisca
                $total = $total + $brisca[$num];
                echo $carta.'<br>';
            }
            
            echo 'El total brisca es de:'.$total;
        ?>
    </body>
</html>