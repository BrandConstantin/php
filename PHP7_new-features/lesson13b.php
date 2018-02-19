<?php

require 'lesson13.php';

use avelx\complicated\{hello, anotherloz as avelx};

$obj = new hello;
$obj2 = new avelx;

echo "<br/>Functions:<br/>";

use function avelx\complicated\{all, all2 as a2};

all();
a2();

echo '<br/>Constant:<br/>';

use const avelx\complicated\{HELLO, GOODBYE as GB};

echo HELLO;
echo GB;