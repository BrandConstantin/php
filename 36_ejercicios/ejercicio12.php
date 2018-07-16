<?php

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];

echo "La ip es ".$ip."<br/>";

if(strstr($browser, "Firefox") == TRUE){
    echo "El navegador es ".$browser;
}else{
    echo "El navegador no es firefox";
}