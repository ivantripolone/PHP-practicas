<?php

function validarEmail($email){
    
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<h1>$email</h1>";
        }
}



if(isset($_GET['email'])){
    validarEmail($_GET['email']);
}