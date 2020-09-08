<?php

$server= 'localhost';
$user= 'admin';
$password= '';
$database= 'blog_master';
$db = mysqli_connect($server, $user, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");

//iniciar sesion

    if(!isset($_SESSION)){
        session_start();
    }