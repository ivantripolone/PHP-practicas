<?php

function validarEmail($email){
    
    $status= "No valido";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $status= "Valido";   
    }
    
    return $status;
}


if(isset($_GET['email']) ){
    echo validarEmail($_GET['email']);
}else 
    echo 'Introducir email por metodo get';





