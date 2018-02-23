<?php

echo "El número es ".$_GET['num']."<br/><br/>";
echo "Y los multiplos son : <br/>";

for ($index = 1; $index <= 100; $index++) {
    if(isset($_GET['num']) && ($index % $_GET['num']) == 0){
        echo $index." ";
    }
}