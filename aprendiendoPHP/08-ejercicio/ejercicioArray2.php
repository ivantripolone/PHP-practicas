<?php


function aniadirValores(&$array, $limite = 120){
    
    for($i=0; $i < $limite; $i++){
        $array[] = rand(1, 10);
    }
    
}
$numeros= array();

aniadirValores($numeros, 7);

var_dump($numeros);

foreach ($numeros as $key => $numero) {
        echo '<h1>'.$numero.'<h1/>';
    }


