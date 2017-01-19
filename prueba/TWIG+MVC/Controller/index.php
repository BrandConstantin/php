<?php
  require_once 'twig/lib/Twig/Autoloader.php';
  
  Twig_Autoloader::register();
  
  $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
  $twig = new Twig_Environment($loader);
  
  if(!isset($_GET['a'])){
      echo $twig->render('form.html.twig', []);
  }else{
      $suma = $_GET['a'] + $_GET['b'];
      echo $twig->render('result.html.twig', ['suma' => $suma]);
  }