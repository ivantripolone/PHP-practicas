<?php

class Database{
    public static function connect(){
        $db= new mysqli('localhost','root', 'root', 'tienda_php');
        //$db->query("SET NAME 'UTF-8'");
        return $db;
    }
}