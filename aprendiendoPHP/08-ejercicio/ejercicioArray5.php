<?php

$tabla= array(
    "ACCION" => array("GTA", "CoD", "PUGB","asd"),
    "AVENTURA" => array("SONIC","MARIO","CRASH","SDASD"),
    "DEPORTE" => array("FIFA","PES","NBA","adsasd")
);

$categorias= array_keys($tabla);
var_dump($categorias)

?>

<table border="1">
  
    
    <tr>
            <?php foreach ($categorias as $categoria): ?>
            <th><?=$categoria ?></th>
            <?php            endforeach;?>
            
        </tr>
        <?php for($i=0; $i < count($tabla["ACCION"] )&& 
                        $i < count($tabla["AVENTURA"] )&&
                        $i < count($tabla["DEPORTE"] );$i++):?>
        <tr>
            <?php foreach ($categorias as $categoria): ?>
            <td><?=$tabla[$categoria][$i] ?></td>
            <?php            endforeach;?>
            
        </tr>
        <?php endfor;?>
   
</table>



