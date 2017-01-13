<?php

class cookieMonster{
    private $cookie;
    
    public function __construct($g) {
        $this->cookie = 0;
    }
    
    public function getCookie(){
        return $this->cookie;
    }
    
    public function eat($g){
        $this->cookie = $this->cookie + $g;
    }
}