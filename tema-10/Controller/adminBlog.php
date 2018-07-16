<?php
  
  require_once '../Model/Story.php';
  
  $data['storys'] = Story::getStorys();  
  
  if(isset($_GET['TitleStory'])){
      $TitleStory = $_GET['TitleStory'];
      $TextStory = $_GET['TextStory'];
      
      $newStory = new Story($TitleStory, $TextStory);
      $newStory->insert();
      
      header("Location: adminBlog.php");
  } else if(isset($_GET['delete'])){
      $IdStory = $_GET['delete'];
      
      $story = Story::getStory("IdStory", $IdStory);
      $story->delete();
      
      header("Location: adminBlog.php");
  } else if(isset($_GET['modify'])){
      $IdStory = $_GET['modify'];
      
      $modify = Story::getStory("IdStory", $IdStory); 
      
      include '../View/principal.php';
  }else if(isset($_GET['modifyTitleStory'])){
        $newTitleStory = $_GET['modifyTitleStory'];
        $newTextStory = $_GET['modifiedTextStory'];

        $modifiedStory = new Story($newTitleStory, $newTextStory);
        $modifiedStory->update($_GET['IdStory']);

        header("Location: adminBlog.php");
  }else {
      include '../View/principal.php';
  }