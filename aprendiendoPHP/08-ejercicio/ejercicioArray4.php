<?php

$int= 1;
$bool= true;
$array= array(array(),2,"asd");
$string= "ivan";
$variables= array($int,$bool,$array,$string);
$i= $variables[rand(0, count($variables)-1)];
switch ($i) {
    case is_bool($i):
        echo "es bool";
        break;
    case is_int($i):
        echo "es int";
        break;
    case is_array($i):
        echo "es array ";
    case is_string($i):
        echo "es string";
        break;
}
        

