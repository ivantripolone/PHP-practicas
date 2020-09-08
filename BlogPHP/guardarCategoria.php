
<?php

if(isset($_POST)){
    require_once './includes/conexion.php';
    $nombre= isset($_POST['nombre'])? mysqli_real_escape_string($db,$_POST['nombre']):false ;
    //array de errores
    $errores= array();
    //validar los datos antes de guardarlos en db
    //validando nombre
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado= true;
    }else{
        $nombre_validado= false;
        $errores['nombre']= 'el nombre no es valido';
    } 
    if(count($errores) == 0){
        $sql= "INSERT INTO categorias VALUES (NULL,'$nombre');";
        $crear= mysqli_query($db, $sql);
    }
    
}
header('Location: index.php');