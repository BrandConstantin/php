<?php

$spaceshipOperator1 = 2 <=> 2;

echo $spaceshipOperator1."<br/>";

$spaceshipOperator2 = 20 <=> 2;

echo $spaceshipOperator2."<br/>";

$spaceshipOperator3 = 0 <=> 2;

echo $spaceshipOperator3."<br/>";

$spaceshipOperator4 = 0 <=> "2";

echo $spaceshipOperator4."<br/>";

$spaceshipOperator5 = "20" <=> 5;

echo $spaceshipOperator5."<br/>";

$spaceshipOperator6 = 5 <=> TRUE;

echo $spaceshipOperator6."<br/>";

$spaceshipOperator7 = FALSE <=> TRUE;

echo $spaceshipOperator7."<br/>";

$spaceshipOperator7 = array("40", 30) <=> array("40", 300);

echo $spaceshipOperator7."<br/>";