<?php
    require_once 'twig/lib/Twig/Autoloader.php';
    
    Twig_Autoloader::register();
    
    $loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
    $twig = new Twig_Environment($loader);
    
    $datos1 = [
            'nombre' => 'Constantin',
            'apellido' => 'Brand',
            'dni' => '8887774a',
    ];
    
    $datos2 = [
        titulo => 'Información de contacto',
        usuario => [
          'nombre' => 'Elena',
          'apellido1' => 'Nito',
          'apellido2' => 'Del Bosque',
          'dni' => '1234567X',
        ]
    ];
    
    $datos['persona'] = $datos1;
    $datos['otro'] = $datos2;
    
    echo $twig->render('datosUsuario.html.twig', $datos);