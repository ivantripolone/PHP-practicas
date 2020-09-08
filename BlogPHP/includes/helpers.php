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

function conseguirCategoria($db){
    $sql= "SELECT * FROM categorias ORDER BY id ASC LIMIT 7;";
    $categorias= mysqli_query($db, $sql);
    $result=array();
    if($categorias && mysqli_num_rows($categorias)){
        $result= $categorias;
    };
    
    return $result;
}

function conseguirEntradas($db){
    $sql= "SELECT *, c.nombre AS categoria FROM entrada e,categorias c WHERE e.categoria_id = c.id ORDER BY e.fecha DESC LIMIT 4;";
    $entradas= mysqli_query($db, $sql);
    $result=array();
    if($entradas && mysqli_num_rows($entradas)){
        $result= $entradas;
    };
    
    return $result;
}