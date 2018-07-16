<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  
  Twig_Autoloader::register();
  
  $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
  $twig = new Twig_Environment($loader);
  
  $a = $_GET['a'];
  $b = $_GET['b'];
  
  echo $twig->render('form2.html.twig', ['a'=>$a, 'b'=>$b, 'suma'=>$a + $b]);