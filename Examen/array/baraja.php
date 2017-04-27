<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Baraja Española</title>
    </head>
    <body>
        <?php
                    $briscas = array("as" => 11, "2" => 0, "3" => 10, "4" => 0, "5" => 0, 
                        "6" => 0, "7" => 0, "8" => 0, "9" => 0, "sota" => 2, "caballo" => 3, "rey" => 4);
                    $palos = array(1=>"copa", 2=>"espada", 3=>"basto", 4=>"oro");
                    $numeros = array(1=>"as", 2=>"2", 3=>"3", 4=>"4", 5=>"5", 6=>"6", 7=>"7", 
                        8=>"8", 9=>"9", 10=>"sota", 11=>"caballo", 12=>"rey");

                    $cartas;
                    $total = 0;
                    $i = 0;
                    $paloAnt;
                    $numAnt;

                    //elegir el palo y número
                    $randomPalo = rand(1, 4);
                    $palo = $palos[$randomPalo];
                    $randomNum = rand(1, 12);
                    $num =$numeros[$randomNum];

                    //elige la carta            
                    $carta = $num." ".$palo;
                    $cartas[$i] = $carta;
                    $i++;
                    
                    //sacar otro palo y otro número en caso de que se va a repetir
                    $paloAnt = $palo;
                    $numAnt = $num;

                    //elige la carta
                    for($i = 0; $i <= 5; $i++){
                        $noRepite = false;
                        
                        while(!$noRepite){
                            $repite ;
                            //palo o número;
                            $cartaRepetir = rand(0, 1);
                            if($cartaRepetir == 0){
                                $repite = "numero";
                            }else{
                                $repite = "palo";
                            }
                            
                            //el palo
                            if($repite == 'palo'){
                                $mismoPalo = false;

                                while (!$mismoPalo){
                                    $randomPalo = rand(1, 4);
                                    $palo = $palos[$randomPalo];

                                    if($palos[$randomPalo] == $paloAnt){
                                        $mismoPalo = true;
                                    }
                                }
                            }else{
                                $randomPalo = rand(1, 4);
                                $palo = $palos[$randomPalo];
                            }
                            
                            //el numero
                            if($repite == 'numero'){
                                $mismoNumero = false;

                                while (!$mismoNumero){
                                    $randomNum = rand(1, 12);
                                    $num =$numeros[$randomNum];

                                    if($numeros[$randomNum] == $numAnt){
                                        $mismoNumero = TRUE;
                                    }
                                }
                            }else{
                                $randomNum = rand(1, 12);
                                $num =$numeros[$randomNum];
                            }
                            
                            //genera la carta
                            $carta = $num." ".$palo;
                            
                            if(!in_array($carta, $cartas)){
                                $cartas[$i] = $carta;
                                $i++;
                                $noRepite = TRUE;
                                $paloAnt = $palo;
                                $numAnt = $num;
                            }
                        }
                        //total brisca
                        //$total += $briscas[$num];
                        $total += $carta;
                        echo $carta.'<br>';
                    }

                    echo 'El total brisca es de:'.$total;
                ?>
    </body>
</html>