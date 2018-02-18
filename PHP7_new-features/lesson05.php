<?php

/* 
 * null coalescing operator
 */

echo "<pre>".json_encode($_GET, JSON_PRETTY_PRINT)."</pre>";

$myVar = $_GET['name'] ?? "Lox ";
echo $myVar;

$myVar2 = $personName ?? $_GET['name'] ?? "Lowrence";
echo $myVar2;
