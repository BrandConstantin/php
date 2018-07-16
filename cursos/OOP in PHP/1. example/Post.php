<?php

class Post{
    private $name;

    public function __set($name, $value){
        echo 'Setting '.$name.' to '.$value;

        $this->name = $value;
    }

    public function __get($name){
        echo '<br/>Getting '.$name.' = '.$this->name.'<br/>';
    }

    public function __isset($name){
        echo 'Is '.$name.' set?<br/>';

        return isset($this->name);
    }
}

$post = new Post;
$post->name = 'Gabriel';
echo $post->name;
var_dump(isset($post->name));