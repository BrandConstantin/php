<?php
  require_once './twig/lib/Twig/Autoloader.php';
  
  Twig_Autoloader::register();
  
  $loader = new Twig_Loader_Filesystem(__DIR__.'/../View/templates');
  $twig = new Twig_Environment($loader);
  
  require_once '../Model/Story.php';
  
  $data['storys'] = Story::getStorys();  
  
  if(isset($_GET['TitleStory'])){
      $TitleStory = $_GET['TitleStory'];
      $TextStory = $_GET['TextStory'];
      
      $newStory = new Story($TitleStory, $TextStory);
      $newStory->insert();
      
      unset($TitleStory);
      
      //header("Location: adminBlog.php");
  } else if(isset($_GET['delete'])){
      $IdStory = $_GET['delete'];
      
      $story = Story::getStory("IdStory", $IdStory);
      $story->delete();
      
      //header("Location: adminBlog.php");
  } else if(isset($_GET['modify'])){
      $IdStory = $_GET['modify'];
      
      $modify = Story::getStory("IdStory", $IdStory); 
      
      //include '../View/principal.php';
  }else if(isset($_GET['modifyTitleStory'])){
        $newTitleStory = $_GET['modifyTitleStory'];
        $newTextStory = $_GET['modifiedTextStory'];

        $modifiedStory = new Story($newTitleStory, $newTextStory);
        $modifiedStory->update($_GET['IdStory']);

        //header("Location: adminBlog.php");
  }
  
    $data['Storys'] = Story::getStory();

    foreach ($data['Storys'] as $story){
      $story[] = array(
          'IdStory' => $story -> getIdStory(),
          'TitleStory' => $story -> getTitleStory(),
          'DateStory' => $story -> getDateStory(),
          'TextStory' => $story -> getTextStory()
      );
    }

    if(isset($modify)){
      $modStory = array(
          'IdStory' => $modify->getIdStory(),
          'TitleStory' => $modify->getTitleStory(),
          'DateStory' => $modify->getDateStory(),
          'TextStory' => $modify->getTextStory()
      );

      $date['modStory'] = $modStory;
      unset($modify);
    }

    $date['story'] = $story;
    echo $twig->render('principal.html.twig', $date);