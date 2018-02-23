<?php

$num = 7;
$factorial = 1;

for ($index = 1; $index <= $num; $index++) {
    $factorial *= $index;
}

echo $factorial."<br/>";