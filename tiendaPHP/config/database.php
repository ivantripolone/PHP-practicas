<?php

class Database{
    
    public static function connect(){
        //establece la conexion a la base de datos
        $db= new mysqli('localhost','root', 'root', 'tienda_php');
        //$db->query("SET NAME 'UTF-8'");
        return $db;
    }
}