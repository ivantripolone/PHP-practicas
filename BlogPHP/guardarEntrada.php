<?php

if(isset($_POST)){
   // session_start();
    require_once './includes/conexion.php';
    $titulo= isset($_POST['titulo'])? mysqli_real_escape_string($db,$_POST['titulo']):false ;
    $descripcion= isset($_POST['descripcion'])? mysqli_real_escape_string($db,$_POST['descripcion']):false ;
    $categoria= isset($_POST['categoria'])? (int)$_POST['categoria']:false ;
    $usuarioID= $_SESSION['usuario']['id'];
    //array de errores
    $errores= array();
    //validar los datos antes de guardarlos en db
    //validando nombre
    
    if(empty($titulo)){
        $errores['titulo']= 'el titulo no es valido';
    } 
    if(empty($descripcion) ){
        $errores['descripcion']= 'la descripcion no es valido';
    }
    if(empty($categoria) && !is_numeric($categoria) ){
        $errores['descripcion']= 'la descripcion no es valido';
    }
    
    if(count($errores) == 0){
        $sql= "INSERT INTO entrada VALUES (NULL,'$categoria','$usuarioID','$titulo','$descripcion', CURDATE());";
        $crear= mysqli_query($db, $sql);
    } else {
        $_SESSION['erroresEntrada']= $errores;
    }
    
}
header('Location: index.php');