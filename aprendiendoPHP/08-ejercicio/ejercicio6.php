<?php

echo "<table border= '1' >";
    echo "<tr>";
    for($cabecera= 1 ; $cabecera <=10; $cabecera++){
        
        echo "<td> tabla del $cabecera </td>";
        
    }
    
    echo "</tr>";
    for($i = 1 ; $i <=10 ; $i++){
    echo "<tr>";
    for($cabecera= 1 ; $cabecera <=10; $cabecera++){
        $res=$cabecera*$i;
        echo "<td> $cabecera x $i= $res </td>";
        
    }
    echo "</tr>";
    
    }
echo '</table>';
