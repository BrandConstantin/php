<?php

$num = "hello";
//da error
//assert(is_numeric($num), "This is an error");

//////////////////////
$num2 = 2;
assert(is_numeric($num2), "This is an error");

//////////////////////
$num3 = 2;
assert($num3 < 3, "This is an error");

//////////////////////
ini_set('assert.exception', 1);
class HandleError extends AssertionError{

}

$num4 = 2;
assert($num4 > 3, new HandleError('this is an error'));