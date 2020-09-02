<?php

$archivo= $_FILES['archivo'];
$nombre= $archivo['name'];
$tipo= $archivo['type'];

if($tipo == "image/png" || $tipo == "image/jpeg" || $tipo == "image/jpg" || $tipo == "image/gif"){
    
    if(!is_dir('images')){
        mkdir('images', 0777);
    }
    move_uploaded_file($archivo['tmp_name'],'images/'.$nombre);
    header("Refresh: 5; URL=index.php");
    echo "<h1>Subida Correctamente</h1>"; 
    
    
} else {
    header("Refresh: 5; URL=index.php");
    echo "<h1>Formato incorrecto</h1>"; 
}


