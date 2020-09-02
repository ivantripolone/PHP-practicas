<?php

function mostrarError($errores, $campo){
    $alerta='';
    if(isset($errores[$campo])&& !empty($campo)){
        $alerta= "<div class= 'alerta alerta-error'>".$errores[$campo].'</div>'; 
    }
    
    return $alerta;
}

function borrarErrores(){
    $borrado=false;
    
    if(isset($_SESSION['errores'])){
    $_SESSION['errores'] = null;
    unset($_SESSION['errores']);
    $borrado= true;
    }
    
    if(isset($_SESSION['completo'])){
    $_SESSION['completo'] = null;
    unset($_SESSION['completo']);
    }
    
    return $borrado;
}