<?php

if(isset($_POST['submit'])){
    if(!empty($_POST['name'])){
        echo $_POST['name']."<br/>";
    }
    if(!empty($_POST['surname'])){
        echo $_POST['surname']."<br/>";
    }
    if(!empty($_POST['bio'])){
        echo $_POST['bio']."<br/>";
    }
    if(!empty($_POST['email'])){
        echo $_POST['email']."<br/>";
    }
    if(!empty($_POST['file'])){
        echo $_POST['file']."<br/>";
    }
    if(!empty($_POST['password'])){
        echo sha1($_POST['password'])."<br/>";
    }
    if(!empty($_POST['role'])){
        echo $_POST['role']."<br/>";
    }
}