<?php

    $numeros= array('1','4','2','12','123','23','13');

    sort($numeros);
    
    foreach ($numeros as $key => $numero) {
        echo '<h1>'.$numero.'<h1/>';
    }

echo '<h1>'.count($numeros).'<h1/>';

$veintiTres =array_search('23', $numeros);

echo '<h1>'.$numeros[$veintiTres].'<h1/>';
